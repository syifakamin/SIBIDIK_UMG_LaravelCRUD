<?php

namespace App\Http\Controllers;

use App\Camaba;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //Ambil data Camaba
        // r_camaba = row_camaba, a_camaba = array_camaba
        $r_camaba = DB::table('camaba')
                    ->select('camaba.id','camaba.no_reg', 'camaba.nama', 'camaba.program_studi')
                    ->orderBy('id')
                    ->get();
        $id_camaba    = array();
        $no_reg       = array();
        $a_camaba     = array();
        $program_studi= array();
        foreach($r_camaba as $rc){
            $id_camaba[] = $rc->id;
            $no_reg[] = $rc->no_reg;
            $a_camaba[] = $rc->nama;
            $program_studi[] = $rc->program_studi;
        }
    
        //Ambil data kriteria penilaian
        // r_kriteria = row_kriteria, a_kriteria = array_kriteria
        $r_kriteria = DB::table('kriteria')
                      ->select('kriteria.id','kriteria.jenis','kriteria.bobot','kriteria.nama_kriteria')
                      ->orderBy('id')
                      ->get();
        $id_kriteria= array();
        $a_kriteria = array();
        $a_tipe     = array();
        $a_bobot    = array();
        foreach($r_kriteria as $rk){
            $id_kriteria[] = $rk->id;
            $a_kriteria[] = $rk->nama_kriteria;
            $a_tipe[] = $rk->jenis;
            $a_bobot[] = $rk->bobot;
        }

        //Ambil data hasil perhitungan atau nilai
        // r_nilai = row_nilai, a_nilai = array_nilai
        $a_nilai = array();
        foreach($id_camaba AS $idc){
            foreach($id_kriteria AS $idk){
                $r_nilai = DB::table('hasil_perhitungan')
                   ->select('hasil_perhitungan.camaba_id','hasil_perhitungan.kriteria_id','hasil_perhitungan.nilai')
                   ->where('hasil_perhitungan.camaba_id',$idc)->where('hasil_perhitungan.kriteria_id',$idk)
                   ->get();
                foreach($r_nilai as $rn){
                    $a_nilai[] = $rn->nilai;
                }
            }
        }
        
        $n_criteria = count($a_kriteria);
        $n_subject = count($a_camaba);
        $s_noreg = $no_reg;
        $s_prodi = $program_studi;
        $criteria = $a_kriteria;
        $weight = $a_bobot;
        $type = $a_tipe;
        $subject = $a_camaba;
        $value = $a_nilai;
        $limit = array();
        $Q = array();
        
            // Normalisasi matriks
            // a.) Mencari nilai minimal atau maksimal sesuai tipe 
            for($i=0; $i<$n_criteria; $i++){
                if($type[$i] == "Benefit"){
                $max = $value[$i];
                
                for($j=0; $j<$n_subject * $n_criteria; $j+=$n_criteria){
                    $index = $j + $i;
                    if($max < $value[$index]){
                    $max = $value[$index];
                    }
                }

                $limit[$i] = $max;
                } 
                else if($type[$i] == "Cost"){
                $min = $value[$i];

                for($j=0; $j<$n_subject * $n_criteria; $j+=$n_criteria){
                    $index = $j + $i;
                    if($min > $value[$index]){
                    $min = $value[$index];
                    }
                }

                $limit[$i] = $min;
                }
            }

            // b.) Menghitung normalisasi
            for($i=0; $i<$n_criteria; $i++){
                if($type[$i] == "Benefit"){
                for($j=0; $j<$n_subject * $n_criteria; $j+=$n_criteria){
                    $index = $j + $i;
                    $value[$index] = $value[$index] / $limit[$i];
                }
                } 
                else if($type[$i] == "Cost"){
                for($j=0; $j<$n_subject * $n_criteria; $j+=$n_criteria){
                    $index = $j + $i;
                    $value[$index] = $limit[$i] / $value[$index];
                }
                }
            }

            // c.) Menghitung Qi
            for($i=0; $i<$n_subject; $i++){
                // step 1
                $row = 0;
                for($j=0; $j<$n_criteria; $j++){
                $index = $j + ($i * $n_criteria);
                $col = $value[$index] * $weight[$j] / 100;
                $row += $col;
                
                }

                $Q[$i] = 0.5 * $row;

                // step 2
                $row = 1;
                for($j=0; $j<$n_criteria; $j++){
                $index = $j + ($i * $n_criteria);
                $col = pow($value[$index], ($weight[$j] / 100));
                $row *= $col;
                }
                $Q[$i] = 0.5 * $row + $Q[$i];
            }
            
            // d.) Mengurutkan berdasarkan nilai terbesar
            for($i=0; $i<$n_subject; $i++){
                $Q[$i] = array($Q[$i], $s_noreg[$i], $subject[$i], $s_prodi[$i] );
            }

            rsort($Q);
            $hasil=$Q;

            //Rename variable
            $nilai_max = $max;
         
        //ambil nilai yang lolos
        $a_lolos = array();
        foreach ($Q as $nilai) {
            if ($nilai[0] >= 0.76) {
                array_push($a_lolos,$nilai);
            }
        }

        //ambil nilai maksumal dalam array mahasiswa
        

        $mhs_lolos = count($a_lolos);
        $totalCamaba = DB::table("camaba")->count();
        $totalKriteria = DB::table("kriteria")->count();

        return View::make('home', compact('totalCamaba','totalKriteria','mhs_lolos','max'));
    }
}
