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
    public function updateKategori($id)
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
        $data = Kategori::find($id);
        if($data==null){
            return redirect()->route('kategori.index')->with([
                'error'=>true,
                'message'=>'Data Tidak Ditemukan'
            ]);
        }
        $upd = $data->update([
            'nama'=>request('nama'),
            'updated_user'=>auth()->user()->nama
        ]);
        if($upd){
            return redirect()->route('kategori.list')->with([
                'error'=>false,
                'message'=>'Ubah Kategori Berhasil'
            ]);
        }
        return redirect()->back()->with([
            'error'=>true,
            'message'=>'Ubah Kategori Gagal'
        ]);
    }
    public function editKategori($id)
    {
        $data = Kategori::find($id);
        if($data==null){
            return redirect()->route('kategori.list')->with([
                'error'=>true,
                'message'=>'Data Tidak Ditemukan'
            ]);
        }
        return view('content.edit-kategori',compact('data'));
    }
    public function hapusKategori($id)
    {
        $data = Kategori::find($id);
        if($data==null){
            return redirect()->route('kategori.list')->with([
                'error'=>true,
                'message'=>'Data Tidak Ditemukan'
            ]);
        }
        $del = $data->delete();
        if($del){
            return redirect()->route('kategori.list')->with([
                'error'=>false,
                'message'=>'Hapus Kategori Berhasil'
            ]);
        }
        return redirect()->route('kategori.list')->with([
            'error'=>true,
            'message'=>'Hapus Kategori Gagal'
        ]);
    }
    public function hapusUser($id)
    {
        $data = User::find($id);
        if($data==null){
            return redirect()->route('user.list')->with([
                'error'=>true,
                'message'=>'Data Tidak Ditemukan'
            ]);
        }
        $del = $data->delete();
        if($del){
            return redirect()->route('user.list')->with([
                'error'=>false,
                'message'=>'Hapus User Berhasil'
            ]);
        }
        return redirect()->route('user.list')->with([
            'error'=>true,
            'message'=>'Hapus User Gagal'
        ]);
    }
}
