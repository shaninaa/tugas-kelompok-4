<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HakAksesController;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\BarangController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('admin.homeadmin');
});

Route::get('/admin', [AdminController::class, 'index']);
Route::get('/customer', [AdminController::class, 'customer']);
Route::get('/pesanan', [AdminController::class, 'pesanan']);

//HAKAKSES
Route::get('/hakakses', [HakAksesController::class, 'indexdata']);
Route::get('/hakakses/addhakakses', [HakAksesController::class, 'indexadd']);
Route::post('/hakakses/addhakakses', [HakAksesController::class, 'addhakakses']);
Route::get('/hakakses/edithakakses/{id_akses}', [HakAksesController::class, 'editHakakses']);
Route::post('/hakakses/updateHakakses', [HakAksesController::class, 'updateHakakses']);
Route::delete('/hakakses/{id_akses}', [HakAksesController::class, 'delete']);

//PENGGUNA
Route::get('/pengguna', [PenggunaController::class, 'indexdata']);
Route::get('/pengguna/addpengguna', [PenggunaController::class, 'indexadd']);
Route::post('/pengguna/addpengguna', [PenggunaController::class, 'addpengguna']);
Route::get('/pengguna/editpengguna/{id_pengguna}', [PenggunaController::class, 'editPengguna']);
Route::post('/pengguna/updatePengguna', [PenggunaController::class, 'updatePengguna']);
Route::delete('/pengguna/{id_pengguna}', [PenggunaController::class, 'delete']);

//PELANGGAN
Route::get('/pelanggan', [PelangganController::class, 'indexdata']);
Route::get('/pelanggan/addpelanggan', [PelangganController::class, 'indexadd']);
Route::post('/pelanggan/addpelanggan', [PelangganController::class, 'addpelanggan']);
Route::get('/pelanggan/editpelanggan/{id_pelanggan}', [PelangganController::class, 'editPelanggan']);
Route::post('/pelanggan/updatePelanggan', [PelangganController::class, 'updatePelanggan']);
Route::delete('/pelanggan/{id_pelanggan}', [PelangganController::class, 'delete']);

//BARANG
Route::get('/barang', [BarangController::class, 'indexdata']);
Route::get('/barang/addbarang', [BarangController::class, 'indexadd']);
Route::post('/barang/addbarang', [BarangController::class, 'addbarang']);
Route::get('/barang/editbarang/{id_barang}', [BarangController::class, 'editBarang']);
Route::post('/barang/updateBarang', [BarangController::class, 'updateBarang']);
Route::delete('/barang/{id_barang}', [BarangController::class, 'delete']);

Route::post('/jenis/addjenis', [jenisprodukController::class, 'addjenis']);
Route::delete('/jenis/{id_jenis}', [jenisprodukController::class, 'delete']);
//PRODUK
Route::resource('produkadm', produkController::class);