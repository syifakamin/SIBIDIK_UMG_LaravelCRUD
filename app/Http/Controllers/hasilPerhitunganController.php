<?php

namespace App\Http\Controllers;

use App\hasil_perhitungan;
use Illuminate\Http\Request;
use DB;

class hasilPerhitunganController extends Controller
{
    public function index ()
    {
        //Ambil data dari kriteria dan camaba
        $data = DB::table('camaba')
                    ->select('camaba.id','camaba.no_reg', 'camaba.nama', 'camaba.program_studi')
                    ->get();
        
         $dataKriteria = DB::table('kriteria')
                     ->select('kriteria.id','kriteria.nama_kriteria')
                     ->get();

        $dataNilai = DB::table('nilai_hitung_2')
                     ->select('nilai_hitung_2.camaba_id','nilai_hitung_2.kriteria_id','nilai_hitung_2.nilai')
                     ->get();

        // $dataNilai = DB::table('hasil_perhitungan')
        //             ->select('hasil_perhitungan.nilai','hasil_perhitungan.nilai_2','hasil_perhitungan.nilai_3')
        //             ->get();

        return view('hasil_perhitungan.index',compact('data','dataKriteria','dataNilai'));
    }

}
