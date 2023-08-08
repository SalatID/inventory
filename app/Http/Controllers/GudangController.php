<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gudang;

class GudangController extends Controller
{
    public function list()
    {
        $data = Gudang::get();
        return view('content.list-gudang',compact('data'));
    }
    public function tambahGudang()
    {
        $validate = request()->validate([
            'nama'=>['required','string'],
            'alamat'=>['required','string'],
            'kapasitas'=>['required','numeric'],
        ]);
        $ins = Gudang::create([
            'nama'=>request('nama'),
            'alamat'=>request('alamat'),
            'kapasitas'=>request('kapasitas'),
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
}
