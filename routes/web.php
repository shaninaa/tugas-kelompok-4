<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PaketPenjualanBarangController;
use App\Http\Controllers\PaketPenjualanController;

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
//JENISPRODUK
Route::get('/jenis', [jenisprodukController::class, 'indexdata']);
Route::get('/jenis/addjenis', [jenisprodukController::class, 'indexadd']);
Route::post('/jenis/addjenis', [jenisprodukController::class, 'addjenis']);
Route::delete('/jenis/{id_jenis}', [jenisprodukController::class, 'delete']);
//PRODUK
Route::resource('produkadm', produkController::class);

//PAKET PENJUALAN
Route::controller('users', 'UserController');
Route::get('/paket_penjualan', [PaketPenjualanController::class, 'show']);
Route::get('/paketPenjualan/addPaketPenjualanBarang',[PaketPenjualanBarangController::class, 'show']);
Route::post('/paketPenjualan/addPaketPenjualanBarang',[PaketPenjualanBarangController::class, 'store']);
Route::get('/paketPenjualan/addPaketPenjualan',[PaketPenjualanController::class, 'create']);
Route::post('/paketPenjualan/addPaketPenjualan',[PaketPenjualanController::class, 'store']);