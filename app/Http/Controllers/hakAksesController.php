<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\hakakses;

class HakAksesController extends Controller
{
    public function index(){
        $data = array(
            'menu' => 'hakakses',
            'submenu' => ''
            );
        return view('admin.hakaskes', $data);
    }

    public function indexdata(){
        $hakakses = DB::table('hak_akses')->get();
        $data = array(
            'menu' => 'hakakses',
            'submenu' => 'hakakses',
            'hakakses' => $hakakses
            );
        return view('admin.hakaskes', $data);
    }

    public function indexadd(){
        $hakakses = DB::table('hak_akses')->get();
        $data = array(
            'menu' => 'hakakses',
            'submenu' => 'hakakses',
            'hakakses' => $hakakses
            );
        return view('admin.addhakakses', $data);
    }

    public function addHakAkses(Request $post){
        DB::table('hak_akses')->insert([
            'id_akses' => $post->id_akses,
            'nama_akses' => $post->nama_akses,
            'keterangan' => $post->keterangan,
        ]);

    return redirect('/hakakses')->with('success', 'Data berhasil ditambahkan!');
    }

    public function editHakAkses($id_akses)
    {
        $hakakses = DB::table('hak_akses')->where('id_akses', $id_akses)->get();
        $data = array(
            'menu' => 'hakakses',
            'submenu' => 'hakakses',
            'hakakses' => $hakakses
            );
        return view('admin.updatehakakses',  $data);
    }

    public function updateHakAkses(Request $post)
    {
        DB::table('hak_akses')->where('id_akses', $post->id_akses)->update([
			'id_akses' => $post->id_akses,
            'nama_akses' => $post->nama_akses,
            'keterangan' => $post->keterangan,
        ]);

        return redirect('/hakakses')->with('success', 'Data berhasil diupdate!');
    }

    public function delete($id_akses){
        $hakakses = hakakses::where('id_akses', $id_akses)->first();
        $hakakses->delete();
        return redirect('/hakakses')->with('success', 'Data berhasil dihapus!');
    }

}
