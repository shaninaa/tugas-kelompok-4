<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\pengguna;
use App\Models\barang;
use App\Models\penjualan;

class PenjualanController extends Controller
{
    public function index(){
        $data = array(
            'menu' => 'penjualan',
            'submenu' => ''
            );
        return view('admin.penjualan.penjualan', $data);
    }

    public function indexdata(){
        // $penjualan = DB::table('penjualan')
        // ->join('pengguna', 'penjualan.id_pengguna', '=', 'pengguna.id_pengguna')
        // ->join('barang', 'penjualan.id_barang', '=', 'barang.id_barang')
        // ->select('penjualan.*','pengguna.*','barang.*')
        // ->get();

        $penjualan = DB::select("SELECT penjualan.*, pengguna.nama_pengguna,barang.nama_barang, (penjualan.quantity*penjualan.harga_jual) as jumlah_jual
        FROM penjualan
        LEFT JOIN pengguna ON penjualan.id_pengguna = pengguna.id_pengguna
        LEFT JOIN barang ON penjualan.id_barang = barang.id_barang");
        
        $data = array(
            'menu' => 'penjualan',
            'submenu' => 'penjualan',
            'penjualan' => $penjualan
            );
        return view('admin.penjualan.penjualan', $data);
    }

    public function indexadd(){
        $penjualan = DB::table('penjualan')->get();
        $data = array(
            'menu' => 'penjualan',
            'submenu' => 'penjualan',
            'penjualan' => $penjualan
            );
        return view('admin.penjualan.addpenjualan', $data,[
            'pengguna' => pengguna::all(),
            'barang' => barang::all()
        ]);
    }

    public function addPenjualan(Request $post){
        DB::table('penjualan')->insert([
            'id_penjualan' => $post->id_penjualan,
            'id_pengguna' => $post->id_pengguna,
            'id_barang' => $post->id_barang,
            'jumlah_penjualan' => $post->jumlah_penjualan,
            'harga_jual' => $post->harga_jual,
            'quantity' => $post->quantity
        ]);

    return redirect('/penjualan')->with('success', 'Data berhasil ditambahkan!');
    }

    public function editPenjualan($id_penjualan)
    {
        $penjualan = DB::table('penjualan')->where('id_penjualan', $id_penjualan)->get();
        $data = array(
            'menu' => 'penjualan',
            'submenu' => 'penjualan',
            'penjualan' => $penjualan
            );
        return view('admin.penjualan.updatepenjualan',  $data,[
            'pengguna' => pengguna::all(),
            'barang' => barang::all()
        ]);
    }

    public function updatePenjualan(Request $post)
    {
        DB::table('penjualan')->where('id_penjualan', $post->id_penjualan)->update([
            'id_penjualan' => $post->id_penjualan,
            'id_pengguna' => $post->id_pengguna,
            'id_barang' => $post->id_barang,
            'jumlah_penjualan' => $post->jumlah_penjualan,
            'harga_jual' => $post->harga_jual,
            'quantity' => $post->quantity
        ]);

        return redirect('/penjualan')->with('success', 'Data berhasil diupdate!');
    }


    public function delete($id_penjualan){
        $penjualan = penjualan::where('id_penjualan', $id_penjualan)->first();
        $penjualan->delete();
        return redirect('/penjualan')->with('success', 'Data berhasil dihapus!');
    }

}
