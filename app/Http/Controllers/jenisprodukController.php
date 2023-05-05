<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\jenisproduk;

class jenisprodukController extends Controller
{
    public function index(){
        $data = array(
            'menu' => 'jenisproduk',
            'submenu' => ''
            );
        return view('admin.jenisprodukadmin', $data);
    }

    public function indexdata(){
        $jenisproduk = DB::table('jenisproduks')->get();
        $data = array(
            'menu' => 'jenisproduk',
            'submenu' => 'jenisproduk',
            'jenisproduk' => $jenisproduk
            );
        return view('admin.jenisprodukadmin', $data);
    }

    

    public function indexadd(){
        $jenisproduk = DB::table('jenisproduks')->get();
        $data = array(
            'menu' => 'jenisproduk',
            'submenu' => 'jenisproduk',
            'jenisproduk' => $jenisproduk
            );
        return view('admin.addjenis', $data);
    }
    public function addJenis(Request $post){
        DB::table('jenisproduks')->insert([
            'id_jenis' => $post->id_jenis,
            'nama_jenis' => $post->nama_jenis,
            'created_at' => $post->created_at,
        ]);

    return redirect('/jenis');
    }

    public function delete($id_jenis){
        $jenisproduk = jenisproduk::where('id_jenis', $id_jenis)->first();
        $jenisproduk->delete();
        return redirect('/jenis');
    }
}
