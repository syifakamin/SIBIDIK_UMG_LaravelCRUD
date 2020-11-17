<?php

namespace App\Http\Controllers;

use App\Kriteria;
use Illuminate\Http\Request;

class KriteriaController extends Controller
{
    public function index ()
    {
        $data_kriteria = \App\Kriteria::all();
        return view('kriteria.index', ['data_kriteria' => $data_kriteria]);
    }

    public function create (Request $request)
    {
        \App\kriteria::create($request->all());
        return redirect('/kriteria')->with('Sukses','Data Berhasil ditambah');
    }

    public function update (Request $request)
    {
        $id = $request->id;
        $kriteria = Kriteria::findOrFail($id);
        $kriteriaData = \App\Kriteria::where('id', $id)->update(['nama_kriteria' => $request->nama_kriteria,'jenis' => $request->jenis,'bobot' => $request->bobot]);
        return redirect('/kriteria')->with('sukses','Data Berhasil Diubah');
    }

    public function delete($id)
    {
        $kriteriaDelete = kriteria::findOrFail($id)->delete();
        if($kriteriaDelete)
        {
            return response()->json(["message"=>"Data berhasil dihapus"]);
        }
        return response()->json(['message' => 'Data gagal dihapus']);
    }

}
