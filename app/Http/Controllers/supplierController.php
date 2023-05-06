<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\pengguna;
use App\Models\supplier;

class SupplierController extends Controller
{
    public function index(){
        $data = array(
            'menu' => 'supplier',
            'submenu' => ''
            );
        return view('admin.supplier', $data);
    }

    public function indexdata(){
        $supplier = DB::table('supplier')->get();
        $data = array(
            'menu' => 'supplier',
            'submenu' => 'supplier',
            'supplier' => $supplier
            );
        return view('admin.supplier', $data);
    }

    public function indexadd(){
        $supplier = DB::table('supplier')->get();
        $data = array(
            'menu' => 'supplier',
            'submenu' => 'supplier',
            'supplier' => $supplier
            );
        return view('admin.addSupplier', $data,[
            'pengguna' => pengguna::all()
        ]);
    }

    public function addSupplier(Request $post){
        DB::table('supplier')->insert([
            'id_supplier' => $post->id_supplier,
            'nama_supplier' => $post->nama_supplier,
            'no_telp' => $post->no_telp,
            'alamat' => $post->alamat,
            'id_pengguna' => $post->id_pengguna
        ]);

    return redirect('/supplier')->with('success', 'Data berhasil ditambahkan!');
    }


    public function delete($id_supplier){
        $barang = supplier::where('id_supplier', $id_supplier)->first();
        $barang->delete();
        return redirect('/supplier')->with('success', 'Data berhasil dihapus!');
    }

}
