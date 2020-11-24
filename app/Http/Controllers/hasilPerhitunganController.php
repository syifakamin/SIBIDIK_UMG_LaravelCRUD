<?php

namespace App\Http\Controllers;

use App\hasil_perhitungan;
use Illuminate\Http\Request;
use DB;

class hasilPerhitunganController extends Controller
{
    public function index ()
    {
        //Ambil data dari tabel kriteria, camaba dan hasil_perhitungan
        $data = DB::table('camaba')
                    ->select('camaba.id','camaba.no_reg', 'camaba.nama', 'camaba.program_studi')
                    ->get();
        
         $dataKriteria = DB::table('kriteria')
                     ->select('kriteria.id','kriteria.nama_kriteria')
                     ->get();

        $dataNilai = DB::table('hasil_perhitungan')
                     ->select('hasil_perhitungan.id','hasil_perhitungan.camaba_id','hasil_perhitungan.kriteria_id','hasil_perhitungan.nilai')
                     ->get();

        $dataHasilPerhitungan = \App\hasil_perhitungan::all();
        return view('hasil_perhitungan.index', ['dataHasilPerhitungan' => $dataHasilPerhitungan] ,compact('data','dataKriteria','dataNilai'));
    }

    public function update(Request $request)
    {
        foreach($_POST['id_kriteria'] AS $key => $value){
            $dataID = DB::table('hasil_perhitungan')
                        ->select('id')
                        ->where('camaba_id', $_POST['id_camaba'])
                        ->where('kriteria_id', $value)
                        ->get()->toArray();
            if(empty($dataID[0]->id)){
                $data = array(
                    "camaba_id"     => $_POST['id_camaba'],
                    "kriteria_id"   => $value,
                    "nilai"         => $_POST['nilai'][$key],
                );
                $dataDB = DB::table('hasil_perhitungan')
                                ->insert($data);
            } else {
                $hasilPerhitunganData = \App\hasil_perhitungan::where('camaba_id',$_POST['id_camaba'])->where('kriteria_id',$value)->update(['nilai' => $_POST['nilai'][$key]]);
            }
        }
        return redirect('/hasil_perhitungan')->with('sukses','Data Berhasil Diubah');
    }
}
