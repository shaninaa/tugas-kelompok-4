<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

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

// Route Login
Route::get('/', function () {
    return view('auth.login');
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
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route Dashboard
Route::get('/home', [App\Http\Controllers\AdminController::class, 'dashboard'])->name('dashboard');
