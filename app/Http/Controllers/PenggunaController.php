<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PenggunaController extends Controller
{
    public function list()
    {
        return view('content.list-pengguna');
    }
}
