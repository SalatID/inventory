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
Route::group(['middleware'=>['auth']],function(){
    Route::get('/dashboard',[AdminController::class,'dashboard'])->name('dashboard');
    Route::get('/pengguna',[PenggunaController::class,'list'])->name('pengguna.list');
    Route::get('/pengguna/detail/{id}',[PenggunaController::class,'detailUser'])->name('pengguna.detail');
    Route::get('/pengguna/edit/{id}',[PenggunaController::class,'editUser'])->name('pengguna.edit');
    Route::put('/pengguna/update/{id}',[PenggunaController::class,'updateUser'])->name('pengguna.update');
    Route::get('/pengguna/hapus/{id}',[PenggunaController::class,'hapusUser'])->name('pengguna.hapus');
    Route::post('/pengguna/tambah',[PenggunaController::class,'tambahPengguna'])->name('pengguna.tambah');
    Route::get('/barang',[BarangController::class,'list'])->name('barang.list');
    Route::post('/barang',[BarangController::class,'tambahBarang'])->name('barang.tambah');
    Route::get('/kategori',[CategoryController::class,'list'])->name('kategori.list');
    Route::post('/kategori/tambah',[CategoryController::class,'tambahKategori'])->name('kategori.tambah');
    Route::get('/kategori/detail/{id}',[CategoryController::class,'detailKategori'])->name('kategori.detail');
    Route::put('/kategori/update/{id}',[CategoryController::class,'updateKategori'])->name('kategori.update');
    Route::get('/kategori/edit/{id}',[CategoryController::class,'editKategori'])->name('kategori.edit');
    Route::get('/kategori/hapus/{id}',[CategoryController::class,'hapusKategori'])->name('kategori.hapus');
    Route::get('/gudang',[GudangController::class,'list'])->name('gudang.list');
    Route::post('/gudang/tambah',[GudangController::class,'tambahGudang'])->name('gudang.tambah');
    Route::get('/gudang/detail/{id}',[GudangController::class,'detailGudang'])->name('gudang.detail');
    Route::put('/gudang/update/{id}',[GudangController::class,'updateGudang'])->name('gudang.update');
    Route::get('/gudang/edit/{id}',[GudangController::class,'editGudang'])->name('gudang.edit');
    Route::get('/gudang/hapus/{id}',[GudangController::class,'hapusGudang'])->name('gudang.hapus');
    Route::get('/logout',[LoginController::class,'logout'])->name('logout');
});
Route::get('/halo',[GreetingController::class,'halloUser']);

Route::get('/login',[LoginController::class,'login'])->name('login');
Route::post('/login',[LoginController::class,'procLogin'])->name('proc.login');


