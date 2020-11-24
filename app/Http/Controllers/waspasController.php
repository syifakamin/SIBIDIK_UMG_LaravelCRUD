<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use PHPUnit\Framework\Constraint\Count;

class waspasController extends Controller
{
    public function index ()
    {
        $data = self::waspas();
        return view('waspas.index', compact('data'));
    }

    public function waspas()
    {
        $r_camaba = DB::table('camaba')
                    ->select('camaba.id','camaba.no_reg', 'camaba.nama', 'camaba.program_studi')
                    ->orderBy('id')
                    ->get();
        $a_camaba = array();
        foreach($r_camaba as $rc){
            $a_camaba[] = $rc->nama;
        }

        $r_kriteria = DB::table('kriteria')
                      ->select('kriteria.id','kriteria.jenis','kriteria.bobot','kriteria.nama_kriteria')
                      ->orderBy('id')
                      ->get();
        $a_kriteria = array();
        $a_tipe     = array();
        $a_bobot    = array();
        foreach($r_kriteria as $rk){
            $a_kriteria[] = $rk->nama_kriteria;
            $a_tipe[] = $rk->jenis;
            $a_bobot[] = $rk->bobot;
        }

        $r_nilai = DB::table('hasil_perhitungan')
                   ->select('hasil_perhitungan.camaba_id','hasil_perhitungan.kriteria_id','hasil_perhitungan.nilai')
                   ->orderBy('camaba_id')->orderBy('kriteria_id')
                   ->get();
        $a_nilai = array();
        foreach($r_nilai as $rn){
            $a_nilai[] = $rn->nilai;
        }

        $n_criteria = count($a_kriteria);
        $n_subject = count($a_camaba);
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
                $Q[$i] = array($Q[$i], $subject[$i]);
            }

            return sort($Q);
    }
}
