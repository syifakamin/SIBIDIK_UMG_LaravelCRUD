<?php

namespace App\Http\Controllers;

use app\kriteria;
use Illuminate\Http\Request;

class KriteriaController extends Controller
{
    public function index ()
    {
        $data_kriteria = \App\kriteria::all();
        return view('kriteria.index', ['data_kriteria' => $data_kriteria]);
    }

    public function create (Request $request)
    {
        \App\kriteria::create($request->all());
        return redirect('/kriteria')->with('Sukses','Data Berhasil ditambah');
    }

    public function update (Request $request)
    {
        $id_kriteria = $request->id_kriteria;
        $kriteria = kriteria::findOrFail($id_kriteria);
        $kriteriaData = \App\kriteria::where('id_kriteria',$id_kriteria)->update(['nama_kriteria'=>$request->nama_kriteria, 'jenis'=>$request->jenis, 'bobot'=>$request->bobot]);
        return redirect('/kriteria')->with('Sukses','Data Berhasil diubah');
    }

    public function delete($id_kriteria)
    {
        $kriteriaDelete = kriteria::findOrFail($id_kriteria)->delete();
        if($kriteriaDelete)
        {
            return response()->json(["message"=>"Data berhasil dihapus"]);
        }
        return response()->json(['message' => 'Data gagal dihapus']);
    }

}
