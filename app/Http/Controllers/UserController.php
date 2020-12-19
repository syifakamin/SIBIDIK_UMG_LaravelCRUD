<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{

    public function __construct()
    {
        $this->middleware(['role:admin']);
    }
    
    public function index()
    {
        $users = User::with('roles')->get();
        
        return view ('user.index', compact('users'));
    }

    public function create(Request $data)
    {
        //Fungsi eluquent untuk tambah data
        $user=User::create([
            'username' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
        $user->assignRole($data['role_user']);
        return redirect('/user')->with('sukses','Data Berhasil Ditambah');
        
        //jika berhasil ditambahkan akan kembali ke halaman user dengan pesan "data berhasil ditambah"
        
    }


    public function update(array $data)
    {
        $id = $data->id;
        $user = User::findOrFail($id);
        $userData = \App\User::where('id', $id)->update([
            'name' => $data->name, 
            'role_user' => $data->role_user,
            'email' => $data->email,
            'password' => $data->password
            ]);
        return redirect('/user')->with('sukses','Data Berhasil diubah');
    }

    public function delete($id)
    {
        $userDelete = User::findOrFail($id)->delete();
        if ($userDelete) {
            return response()->json(["message" => "Data Berhasil Dihapus"]);
        }
        return response()->json(['message' => 'Data gagal dihapus']);
    }

}