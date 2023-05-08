<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
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

    // Controller Dashboard
    public function dashboard()
    {
        $total_penjualan = DB::table('penjualan')->selectRaw('SUM(harga_jual * quantity) as total_penjualan')->value('total_penjualan');
        $total_pembelian = DB::table('pembelian')->selectRaw('SUM(harga_pembelian * quantity) as total_pembelian')->value('total_pembelian');
        $stok_barang = DB::table('pembelian')->selectRaw('SUM(quantity) as total_pembelian')->value('total_pembelian') - DB::table('penjualan')->selectRaw('SUM(quantity) as total_penjualan')->value('total_penjualan');
        $laba_rugi = $total_penjualan - $total_pembelian;

        return view('admin.homeadmin', [
            'total_penjualan' => $total_penjualan,
            'total_pembelian' => $total_pembelian,
            'stok_barang' => $stok_barang,
            'laba_rugi' => $laba_rugi
        ]);
    }

}
