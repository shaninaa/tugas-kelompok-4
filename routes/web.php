<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HakAksesController;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\PembelianController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\PenjualanController;

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
Route::delete('/hakakses/{id_akses}', [HakAksesController::class, 'delete']);

//PENGGUNA
Route::get('/pengguna', [PenggunaController::class, 'indexdata']);
Route::get('/pengguna/addpengguna', [PenggunaController::class, 'indexadd']);
Route::post('/pengguna/addpengguna', [PenggunaController::class, 'addpengguna']);
Route::delete('/pengguna/{id_pengguna}', [PenggunaController::class, 'delete']);

//PELANGGAN
Route::get('/pelanggan', [PelangganController::class, 'indexdata']);
Route::get('/pelanggan/addpelanggan', [PelangganController::class, 'indexadd']);
Route::post('/pelanggan/addpelanggan', [PelangganController::class, 'addpelanggan']);
Route::delete('/pelanggan/{id_pelanggan}', [PelangganController::class, 'delete']);

//BARANG
Route::get('/barang', [BarangController::class, 'indexdata']);
Route::get('/barang/addbarang', [BarangController::class, 'indexadd']);
Route::post('/barang/addbarang', [BarangController::class, 'addbarang']);
Route::get('/barang/editbarang/{id_barang}', [BarangController::class, 'editBarang']);
Route::post('/barang/updateBarang', [BarangController::class, 'updateBarang']);
Route::delete('/barang/{id_barang}', [BarangController::class, 'delete']);

//SUPPLIER
Route::get('/supplier', [SupplierController::class, 'indexdata']);
Route::get('/supplier/addSupplier', [SupplierController::class, 'indexadd']);
Route::post('/supplier/addSupplier', [SupplierController::class, 'addSupplier']);
Route::delete('/supplier/{id_supplier}', [SupplierController::class, 'delete']);
Route::get('/supplier/editsupplier/{id_supplier}', [SupplierController::class, 'editSupplier']);
Route::post('/supplier/updateSupplier', [SupplierController::class, 'updateSupplier']);


//PEMBELIAN
Route::get('/pembelian', [PembelianController::class, 'indexdata']);
Route::get('/pembelian/addPembelian', [PembelianController::class, 'indexadd']);
Route::post('/pembelian/addPembelian', [PembelianController::class, 'addPembelian']);
Route::delete('/pembelian/{id_pembelian}', [PembelianController::class, 'delete']);
Route::get('/pembelian/editPembelian/{id_pembelian}', [PembelianController::class, 'editPembelian']);
Route::post('/pembelian/updatePembelian', [PembelianController::class, 'updatePembelian']);


//PENJUALAN
Route::get('/penjualan', [PenjualanController::class, 'indexdata']);
Route::get('/penjualan/addPenjualan', [PenjualanController::class, 'indexadd']);
Route::post('/penjualan/addPenjualan', [PenjualanController::class, 'addPenjualan']);
Route::delete('/penjualan/{id_penjualan}', [PenjualanController::class, 'delete']);
Route::get('/penjualan/editPenjualan/{id_penjualan}', [PenjualanController::class, 'editPenjualan']);
Route::post('/penjualan/updatePenjualan', [PenjualanController::class, 'updatePenjualan']);


Route::post('/jenis/addjenis', [jenisprodukController::class, 'addjenis']);
Route::delete('/jenis/{id_jenis}', [jenisprodukController::class, 'delete']);



//PRODUK
Route::resource('produkadm', produkController::class);