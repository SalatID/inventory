<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GudangController extends Controller
{
    public function list()
    {
        return view('content.list-gudang');
    }
}
