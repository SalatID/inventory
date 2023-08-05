<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori;

class CategoryController extends Controller
{
    public function list()
    {
        $data = Kategori::get();
        return view('content.list-category',compact('data'));
    }
    public function tambahKategori()
    {
        $validate = request()->validate([
            'nama'=>['required']
        ]);
        $nama = Kategori::where('nama',request('nama'))->exists();
        if($nama){
            return redirect()->back()->with([
                'error'=>true,
                'message'=>'Nama kategori '.request('nama').' sudah terdaftar'
            ]);
        }
        $ins = Kategori::create([
            'nama'=>request('nama'),
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
