<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use PHPUnit\Framework\Constraint\Count;
use Codedge\Fpdf\Fpdf\Fpdf;

class waspasController extends Controller
{
    
    public function __construct()
    {
        $this->middleware(['role:admin|kepala']);
    }

    public function waspas()
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
            
            return view('waspas.proses', compact('hasil','n_subject','subject','criteria','weight','value','limit','index','hasil','a_nilai','Q'));
    }

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

            return view('waspas.index', compact('hasil','n_subject'));

    }

    public function cetakPDF()
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
            $Q = ($Q);
            
            $hasil = $Q;
            
        $pdf = new fpdf(); 
        $pdf->AddPage();
        $pdf->SetAutoPageBreak(true, 10);
        $pdf->AliasNbPages();

        //Header
        $pdf->Ln(5);
        $pdf->SetFont('Times','B',18);
        $pdf->Cell(0,5,"Hasil Keputusan Seleksi Beasiswa Bidikmisi UMG",0,1,'C');
        //Tabel
        $pdf->Ln(5);
        $pdf->SetFont('Times','B',12);
        $pdf->Cell(30,10,"Rangking","LRTB",0,'C');
        $pdf->Cell(50,10,"Nomor Registrasi","LRTB",0,'C');
        $pdf->Cell(80,10,"Nama Lengkap","LRTB",0,'C');
        $pdf->Cell(30,10,"Nilai Akhir","LRTB",1,'C');
        
        $pdf->SetFont('Times','',8);
        foreach($hasil as $key=> $row_baru){
            
            $nomor_registrasi = $row_baru['1'];
            $nama_lengkap = $row_baru['2'];
            $nilai_akhir = $row_baru['0'];

            $pdf->Cell(30,5,$key+1,"LRTB",0,'C');
            $pdf->Cell(50,5,$nomor_registrasi,"LRTB",0,'C');
            $pdf->Cell(80,5,$nama_lengkap,"LRTB",0,'C');
            $pdf->Cell(30,5,$nilai_akhir,"LRTB",1,'C');    
        }
        
        
        $pdf->Output();
    }

}
