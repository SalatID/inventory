<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class PenggunaController extends Controller
{
    public function list()
    {
        $data = User::get();
        return view('content.list-pengguna',compact('data'));
    }
    public function tambahPengguna()
    {
        $validate = request()->validate([
            'nama'=>['required'],
            'nip'=>['required','numeric'],
            'email'=>['required','email'],
            'role'=>['required'],
            'password'=>['required'],
            'retype_password'=>['required','same:password']
        ]);
        $email = User::where('email',request('email'))->exists();
        if($email){
            return redirect()->back()->with([
                'error'=>true,
                'message'=>'email '.request('email').' sudah terdaftar'
            ]);
        }
        $nip = User::where('nip',request('nip'))->exists();
        if($nip){
            return redirect()->back()->with([
                'error'=>true,
                'message'=>'nip '.request('nip').' sudah terdaftar'
            ]);
        }
        $ins = User::create([
            'nama'=>request('nama'),
            'nip'=>request('nip'),
            'email'=>request('email'),
            'role'=>request('role'),
            'password'=>bcrypt(request('password')),
        ]);
        if($ins){
            return redirect()->back()->with([
                'error'=>false,
                'message'=>'Tambah Pengguna Berhasil'
            ]);
        }
        return redirect()->back()->with([
            'error'=>true,
            'message'=>'Tambah Pengguna Gagal'
        ]);
    }
}
