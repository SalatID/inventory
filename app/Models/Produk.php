<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;
    public $table = "barangs";
    protected $fillable = [
        "nama",
        "kategori_id",
        "harga",
        "expired_at",
        "deskripsi",
        "foto",
        "created_user"
    ];
    public function data_kategori()
    {
        return $this->hasOne(Kategori::class,'id','kategori_id');
    }
}
