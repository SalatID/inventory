<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gudang extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama',
        'alamat',
        'kapasitas',
        'created_user',
        'updated_user'
    ];
}
