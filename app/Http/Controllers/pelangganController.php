<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\pengguna;
use App\Models\pelanggan;
use App\Models\hakakses;

class PelangganController extends Controller
{
    public function index(){
        $data = array(
            'menu' => 'pelanggan',
            'submenu' => ''
            );
        return view('admin.pelanggan', $data);
    }

    public function indexdata(){
        $pelanggan = DB::table('pelanggan')->get();
        $data = array(
            'menu' => 'pelanggan',
            'submenu' => 'pelanggan',
            'pelanggan' => $pelanggan
            );
        return view('admin.pelanggan', $data);
    }

    public function indexadd(){
        $pelanggan = DB::table('pelanggan')->get();
        $data = array(
            'menu' => 'pelanggan',
            'submenu' => 'pelanggan',
            'pelanggan' => $pelanggan
            );
        return view('admin.addpelanggan', $data,[
            'pengguna' => pengguna::all()
        ]);
    }

    public function addPelanggan(Request $post){
        DB::table('pelanggan')->insert([
            'id_pelanggan' => $post->id_pelanggan,
            'id_pengguna' => $post->id_pengguna,
            'nama_pelanggan' => $post->nama_pelanggan,
            'no_telp' => $post->no_telp,
            'alamat' => $post->alamat
        ]);

    return redirect('/pelanggan')->with('success', 'Data berhasil ditambahkan!');
    }

    public function delete($id_pelanggan){
        $pelanggan = pelanggan::where('id_pelanggan', $id_pelanggan)->first();
        $pelanggan->delete();
        return redirect('/pelanggan')->with('success', 'Data berhasil dihapus!');
    }

}
