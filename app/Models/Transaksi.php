<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;
    protected $fillable =[
        'barang_id',
        'gudang_id',
        'status',
        'kuantiti',
        'created_user',
        'updated_user'
    ];
    public function data_barang()
    {
        return $this->hasOne(Produk::class,'id','barang_id');
    }
    public function data_gudang()
    {
        return $this->hasOne(Gudang::class,'id','gudang_id');
    }
}
