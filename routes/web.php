<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\GreetingController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\GudangController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/halo',[GreetingController::class,'halloUser']);
Route::get('/dashboard',[AdminController::class,'dashboard'])->name('dashboard');
Route::get('/login',[LoginController::class,'login'])->name('login');
Route::get('/pengguna',[PenggunaController::class,'list'])->name('pengguna.list');
Route::get('/barang',[BarangController::class,'list'])->name('barang.list');
Route::get('/kategori',[CategoryController::class,'list'])->name('kategori.list');
Route::get('/gudang',[GudangController::class,'list'])->name('gudang.list');
