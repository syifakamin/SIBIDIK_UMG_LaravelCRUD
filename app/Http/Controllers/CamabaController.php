<?php

namespace App\Http\Controllers;

use App\Camaba;
use Illuminate\Http\Request;

class CamabaController extends Controller
{
    public function index() 
    {
        $data_camaba = \App\Camaba::all();
        return view('camaba.index', ['data_camaba' => $data_camaba]);
    }

    public function create(Request $request)
    {
        \App\Camaba::create($request->all());
        return redirect('/camaba')->with('sukses','Data berhasil ditambah');
    }

    public function update(Request $request)
    {
        $id = $request->id;
        $camaba = Camaba::findOrFail($id);
        $camabaData = \App\Camaba::where('id', $id)->update(['no_reg' => $request->no_reg,'nama'=>$request->nama, 'fakultas' => $request->fakultas, 'program_studi' => $request->prodi]);
        return redirect('/camaba')->with('sukses','Data berhasil diubah');
    }

    public function delete($id)
    {
        $camabaDelete = Camaba::findOrFail($id)->delete();
        if($camabaDelete)
        {
            // return redirect('/camaba')->with('sukses','Data berhasil dihapus');
            return response()->json(["message" => "Data berhasil dihapus"]);
        }
        return response()->json(['message'=>'Data gagal dihapus']);

    }

}
