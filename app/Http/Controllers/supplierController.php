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
        return view('admin.supplier.supplier', $data);
    }

    public function indexdata(){

        $supplier = DB::table('supplier')
        ->join('pengguna', 'supplier.id_pengguna', '=', 'pengguna.id_pengguna')
        ->select('supplier.*','pengguna.*')
        ->get();

        $data = array(
            'menu' => 'supplier',
            'submenu' => 'supplier',
            'supplier' => $supplier
            );
        return view('admin.supplier.supplier', $data);
    }

    public function indexadd(){
        $supplier = DB::table('supplier')->get();
        $data = array(
            'menu' => 'supplier',
            'submenu' => 'supplier',
            'supplier' => $supplier
            );
        return view('admin.supplier.addSupplier', $data,[
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

    public function editSupplier($id_supplier)
    {
        $supplier = DB::table('supplier')->where('id_supplier', $id_supplier)->get();
        $data = array(
            'menu' => 'supplier',
            'submenu' => 'supplier',
            'supplier' => $supplier
            );
        return view('admin.supplier.updatesupplier',  $data,[
            'pengguna' => pengguna::all()
        ]);
    }

    public function updateSupplier(Request $post)
    {
        DB::table('supplier')->where('id_supplier', $post->id_supplier)->update([
            'id_supplier' => $post->id_supplier,
            'nama_supplier' => $post->nama_supplier,
            'no_telp' => $post->no_telp,
            'alamat' => $post->alamat,
            'id_pengguna' => $post->id_pengguna
        ]);

        return redirect('/supplier')->with('success', 'Data berhasil diupdate!');
    }


    public function delete($id_supplier){
        $supplier = supplier::where('id_supplier', $id_supplier)->first();
        $supplier->delete();
        return redirect('/supplier')->with('success', 'Data berhasil dihapus!');
    }

}
