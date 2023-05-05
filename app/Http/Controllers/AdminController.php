<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\produk;
use App\Models\jenisproduk;
use App\Models\User;
use App\Models\pesanan;
use App\Models\pesanan_detail;


class AdminController extends Controller
{
    public function index(){
        $produk = DB::table('produks')->get();
        $jenisproduk = DB::table('jenisproduks')->get();
        $produk = DB::table('produks')->get();
        $pesanan = DB::table('pesanans')->get();
        $pesanan_detail = DB::table('pesanan_details')->get();
        $user = DB::table('users')->get();
        $data = array(
            'menu' => 'homepage',
            'produk' => $produk,
            'jenisproduk' => $jenisproduk,
            'user' => $user,
            'produk' => $produk,
            'pesanan' => $pesanan,
            'pesanan_detail' => $pesanan_detail,
            );
        return view('admin.homeadmin', $data);
    }
    public function customer(){
        $user = DB::table('users')->get();
        $data = array(
            'user' => $user
            );
        return view('admin.customer', $data);
    }
    public function pesanan(){
        $produk = DB::table('produks')->get();
        $pesanan = DB::table('pesanans')->get();
        $pesanan_detail = DB::table('pesanan_details')->get();
        $user = DB::table('users')->get();
        $data = array(
            'user' => $user,
            'produk' => $produk,
            'pesanan' => $pesanan,
            'pesanan_detail' => $pesanan_detail,
            );
        return view('admin.datapesanan', $data);
    }
}
