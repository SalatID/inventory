<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gudang;
use App\Models\Transaksi;

class TransaksiController extends Controller
{
    public function scan()
    {
        $data = Transaksi::all();
        return view('content.scan',compact('data'));
    }
    public function simpanTransaksi()
    {
        $validate = request()->validate([
            'barang_id' => ['required', 'numeric'],
            'gudang_id' => ['required', 'numeric'],
            'kuantiti' => ['required', 'numeric'],
            'status' => ['required']
        ]);
        if($this->cekKapasitasGudang(request('gudang_id'),request('kuantiti'))){
            return redirect()->back()->with([
                'error'=>true,
                'message'=>'Scan Barang Gagal, Kapasitas gudang penuh'
            ]);
        }
       $create = Transaksi::create([
        'barang_id'=>request('barang_id'),
        'gudang_id'=>request('gudang_id'),
        'kuantiti'=>request('kuantiti'),
        'status'=>request('status'),
        "created_user"=>auth()->user()->nama
       ]);

       if($create){
            return redirect()->back()->with([
                'error'=>false,
                'message'=>'Scan Brang Berhasil'
            ]);
       }

       return redirect()->back()->with([
        'error'=>true,
        'message'=>'Scan Barang Gagal'
        ]);
    }

    public function cekKapasitasGudang($idGudang,$kuantiti)
    {
        $gudang = Gudang::find($idGudang);
        $transaksiMasuk = Transaksi::where(['status'=>'Masuk',"gudang_id"=>$idGudang])->sum('kuantiti');
        $transaksiKeluar = Transaksi::where(['status'=>'Keluar',"gudang_id"=>$idGudang])->sum('kuantiti');
        if(($transaksiMasuk-$transaksiKeluar)+$kuantiti<=$gudang->kapasitas){
            return false;
        }
        return true;
    }

}
