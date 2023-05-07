<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\pengguna;
use App\Models\barang;
use App\Models\pembelian;
use PHPUnit\Framework\Constraint\Count;

class PembelianController extends Controller
{
    public function index(){
        $data = array(
            'menu' => 'pembelian',
            'submenu' => ''
            );
        return view('admin.pembelian.pembelian', $data);
    }

    public function indexdata(){
        // $pembelian = DB::table('pembelian')
        // ->join('pengguna', 'pembelian.id_pengguna', '=', 'pengguna.id_pengguna')
        // ->join('barang', 'pembelian.id_barang', '=', 'barang.id_barang')
        // ->select('pembelian.*','pengguna.*','barang.*')
        // ->get();

       $pembelian = DB::select("SELECT pembelian.*, pengguna.nama_pengguna,barang.nama_barang, (pembelian.quantity*pembelian.harga_pembelian) as jumlah_beli
       FROM pembelian
       LEFT JOIN pengguna ON pembelian.id_pengguna = pengguna.id_pengguna
       LEFT JOIN barang ON pembelian.id_barang = barang.id_barang");
        

        $data = array(
            'menu' => 'pembelian',
            'submenu' => 'pembelian',
            'pembelian' => $pembelian
            );
        return view('admin.pembelian.pembelian', $data);
    }

    public function indexadd(){
        $pembelian = DB::table('pembelian')->get();
        $data = array(
            'menu' => 'pembelian',
            'submenu' => 'pembelian',
            'pembelian' => $pembelian
            );
        return view('admin.pembelian.addpembelian', $data,[
            'pengguna' => pengguna::all(),
            'barang' => barang::all()
        ]);
    }

    public function addPembelian(Request $post){

        DB::table('pembelian')->insert([
            'id_pembelian' => $post->id_pembelian,
            'id_pengguna' => $post->id_pengguna,
            'id_barang' => $post->id_barang,
            // 'id_barang' => $post->jumlah_pembelian,
            'harga_pembelian' => $post->harga_pembelian,
            'quantity' => $post->quantity
        ]);

        // $id_pembelian = $post->id_pembelian;

        // $getMultipleCount = DB::select("SELECT(pembelian.quantity*pembelian.harga_pembelian) as jumlah_beli
        // FROM pembelian
        // LEFT JOIN pengguna ON pembelian.id_pengguna = pengguna.id_pengguna
        // LEFT JOIN barang ON pembelian.id_barang = barang.id_barang
        // WHERE pembelian.id_pembelian = $id_pembelian");
        
        // DB::table('pembelian')->insert([
        //     'jumlah_pembelian' => $getMultipleCount
        // ]);

    return redirect('/pembelian')->with('success', 'Data berhasil ditambahkan!');
    }

    public function editPembelian($id_pembelian)
    {
        $pembelian = DB::table('pembelian')->where('id_pembelian', $id_pembelian)->get();
        $data = array(
            'menu' => 'pembelian',
            'submenu' => 'pembelian',
            'pembelian' => $pembelian
            );
        return view('admin.pembelian.updatepembelian',  $data,[
            'pengguna' => pengguna::all(),
            'barang' => barang::all()
        ]);
    }

    public function updatePembelian(Request $post)
    {
        DB::table('pembelian')->where('id_pembelian', $post->id_pembelian)->update([
            'id_pembelian' => $post->id_pembelian,
            'id_pengguna' => $post->id_pengguna,
            'id_barang' => $post->id_barang,
            'harga_pembelian' => $post->harga_pembelian,
            'quantity' => $post->quantity
        ]);

        return redirect('/pembelian')->with('success', 'Data berhasil diupdate!');
    }


    public function delete($id_pembelian){
        $pembelian = pembelian::where('id_pembelian', $id_pembelian)->first();
        $pembelian->delete();
        return redirect('/pembelian')->with('success', 'Data berhasil dihapus!');
    }

}
