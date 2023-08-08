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
            'created_user'=>auth()->user()->nama
        ]);
        if($ins){
            return redirect()->back()->with([
                'error'=>false,
                'message'=>'Tambah Kategori Berhasil'
            ]);
        }
        return redirect()->back()->with([
            'error'=>true,
            'message'=>'Tambah Kategori Gagal'
        ]);
    }
    public function detailKategori($id)
    {
        $data = Kategori::find($id);
        if($data==null){
            return redirect()->route('kategori.index')->with([
                'error'=>true,
                'message'=>'Data Tidak Ditemukan'
            ]);
        }
        return view('content.detail-kategori',compact('data'));
    }
}
