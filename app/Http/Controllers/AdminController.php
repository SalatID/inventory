<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaksi;
use DB;

class AdminController extends Controller
{
    public function dashboard()
    {
        $stokBarang = $this->stokBarang();
        $kapasitasGudang = $this->kapasitasGudang();
        return view('content.dashboard',compact('stokBarang','kapasitasGudang'));
    }
    public function stokBarang()
    {
       $data = DB::select("
       SELECT barangs.nama, ifnull(stok.stok_masuk,0)stok_masuk,ifnull(stok.stok_keluar,0)stok_keluar, ifnull(stok.stok_masuk,0) -ifnull(stok.stok_keluar,0) AS stok_akhir
       FROM barangs 
       JOIN (
           SELECT 
           sum(case when STATUS ='Masuk' then kuantiti END) stok_masuk,
           sum(case when STATUS ='Keluar' then kuantiti END) stok_keluar,
           barang_id
           FROM transaksis
           GROUP BY barang_id
       ) stok ON stok.barang_id = barangs.id
       ");
       return $data ;
    }
    public function kapasitasGudang()
    {
        $data = DB::select("
        SELECT gudangs.nama, gudangs.kapasitas,trx.terisi
        FROM gudangs
        JOIN(
            SELECT sum(kuantiti) terisi,gudang_id
            FROM transaksis
            GROUP by gudang_id
        ) trx ON trx.gudang_id = gudangs.id
        ");
        return $data;
    }
}
