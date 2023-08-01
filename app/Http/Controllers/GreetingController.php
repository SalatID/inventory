<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GreetingController extends Controller
{
    public function halloUser(){
        //nama method = nama fungsi
        return view('halo');
        //registrasi_user.blade.php
        //registrasi_user
    }
}
