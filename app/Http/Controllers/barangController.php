<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\pengguna;
use App\Models\pelanggan;
use App\Models\barang;

class BarangController extends Controller
{
    public function index(){
        $data = array(
            'menu' => 'barang',
            'submenu' => ''
            );
        return view('admin.barang', $data);
    }

    public function indexdata(){
        $barang = DB::table('barang')->get();
        $data = array(
            'menu' => 'barang',
            'submenu' => 'barang',
            'barang' => $barang
            );
        return view('admin.barang', $data);
    }

    public function indexadd(){
        $barang = DB::table('barang')->get();
        $data = array(
            'menu' => 'barang',
            'submenu' => 'barang',
            'barang' => $barang
            );
        return view('admin.addbarang', $data,[
            'pengguna' => pengguna::all()
        ]);
    }

    public function addBarang(Request $post){
        DB::table('barang')->insert([
            'id_barang' => $post->id_barang,
            'id_pengguna' => $post->id_pengguna,
            'nama_barang' => $post->nama_barang,
            'keterangan' => $post->keterangan,
            'satuan' => $post->satuan
        ]);

    return redirect('/barang')->with('success', 'Data berhasil ditambahkan!');
    }

    public function editBarang($id_barang)
    {
        $barang = DB::table('barang')->get();
        $data = array(
            'menu' => 'barang',
            'submenu' => 'barang',
            'barang' => $barang
            );
        return view('admin.updatebarang',  $data,[
            'pengguna' => pengguna::all()
        ]);
    }

    public function updateBarang(Request $post)
    {
        DB::table('barang')->where('id_barang', $post->id_barang)->update([
			'id_barang' => $post->id_barang,
            'id_pengguna' => $post->id_pengguna,
            'nama_barang' => $post->nama_barang,
            'keterangan' => $post->keterangan,
            'satuan' => $post->satuan
        ]);

        return redirect('/barang')->with('success', 'Data berhasil diupdate!');
    }

    public function delete($id_barang){
        $barang = barang::where('id_barang', $id_barang)->first();
        $barang->delete();
        return redirect('/barang')->with('success', 'Data berhasil dihapus!');
    }

}
