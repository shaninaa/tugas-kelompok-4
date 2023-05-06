<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\pengguna;
use App\Models\hakakses;

class PenggunaController extends Controller
{
    public function index(){
        $data = array(
            'menu' => 'pengguna',
            'submenu' => ''
            );
        return view('admin.pengguna', $data);
    }

    public function indexdata(){
        $pengguna = DB::table('pengguna')->get();
        $data = array(
            'menu' => 'pengguna',
            'submenu' => 'pengguna',
            'pengguna' => $pengguna
            );
        return view('admin.pengguna', $data);
    }

    public function indexadd(){
        $pengguna = DB::table('pengguna')->get();
        $data = array(
            'menu' => 'pengguna',
            'submenu' => 'pengguna',
            'pengguna' => $pengguna
            );
        return view('admin.addpengguna', $data,[
            'hakakses' => hakakses::all()
        ]);
    }

    public function addPengguna(Request $post){
        DB::table('pengguna')->insert([
            'id_pengguna' => $post->id_pengguna,
            'id_akses' => $post->id_akses,
            'nama_pengguna' => $post->nama_pengguna,
            'password' => $post->password,
            'nama_depan' => $post->nama_depan,
            'nama_belakang' => $post->nama_belakang,
            'no_hp' => $post->no_hp,
            'alamat' => $post->alamat
        ]);

    return redirect('/pengguna')->with('success', 'Data berhasil ditambahkan!');
    }

    public function delete($id_pengguna){
        $pengguna = pengguna::where('id_pengguna', $id_pengguna)->first();
        $pengguna->delete();
        return redirect('/pengguna')->with('success', 'Data berhasil dihapus!');
    }

}
