<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PaketPenjualanBarangController;
use App\Http\Controllers\PaketPenjualanController;
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

//LOGIN
Route::get('/', [AuthController::class, 'showLoginForm']);
Route::get('/login', [AuthController::class, 'showLoginForm']);
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/homeadmin', [AdminController::class, 'dashboard'])->name('admin.homeadmin');



Route::get('/forgot-password', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('forgot-password');
Route::post('/forgot-password', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('forgot-password.post');

Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register'])->name('register');


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

//PAKET PENJUALAN
Route::controller('users', 'UserController');
Route::get('/paket_penjualan', [PaketPenjualanController::class, 'show']);
Route::get('/paketPenjualan/addPaketPenjualanBarang',[PaketPenjualanBarangController::class, 'show']);
Route::post('/paketPenjualan/addPaketPenjualanBarang',[PaketPenjualanBarangController::class, 'store']);
Route::get('/paketPenjualan/addPaketPenjualan',[PaketPenjualanController::class, 'create']);
Route::post('/paketPenjualan/addPaketPenjualan',[PaketPenjualanController::class, 'store']);