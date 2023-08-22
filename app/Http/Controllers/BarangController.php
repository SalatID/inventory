<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Storage;
use App\Models\Produk;

class BarangController extends Controller
{
    public function list()
    {
        $data = Produk::with(['data_kategori'])->get();
        return view('content.list-barang',compact('data'));
    }
    public function tambahBarang()
    {
        $validate = request()->validate([
            "nama"=>["required"],
            "kategori_id"=>["required","numeric"],
            "harga"=>["required","numeric"],
            "expired_at"=>["required","date"],
            "deskripsi"=>["required"],
            "foto"=>["required","image"]
        ]);
        if(request()->has('foto')){
            $filename = time().'.'.request()->foto->extension();
            Storage::disk('public')->putFileAs('/images',request()->foto,$filename);
        }
        $ins = Produk::create([
            "nama"=>request("nama"),
            "kategori_id"=>request("kategori_id"),
            "harga"=>request("harga"),
            "expired_at"=>request("expired_at"),
            "deskripsi"=>request("deskripsi"),
            "foto"=>$filename,
            "created_user"=>auth()->user()->nama
        ]);
        if($ins){
            return redirect()->back()->with([
                'error'=>false,
                'message'=>'Tambah Barang Berhasil'
            ]);
        }
        return redirect()->back()->with([
            'error'=>true,
            'message'=>'Tambah Barang Gagal'
        ]);
    }
    public function detailBarang($id)
    {
        $data = Produk::find($id);
        if($data==null){
            return redirect()->route('barang.index')->with([
                'error'=>true,
                'message'=>'Data Tidak Ditemukan'
            ]);
        }
        return view('content.detail-barang',compact('data'));
    }
}
