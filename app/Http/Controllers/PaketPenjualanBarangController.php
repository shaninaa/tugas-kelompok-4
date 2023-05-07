<?php

namespace App\Http\Controllers;

use App\Models\barang;
use App\Models\paket_penjualan;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\paket_penjualan_barang;      
use App\Http\Requests\Storepaket_penjualan_barangRequest;
use App\Http\Requests\Updatepaket_penjualan_barangRequest;

class PaketPenjualanBarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = array(
            'menu' => 'supplier',
            'submenu' => ''
            );
        return view('admin.layout.addPaket_Penjualan_barang', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Storepaket_penjualan_barangRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storepaket_penjualan_barangRequest $request)
    {
        DB::table('paket_penjualan_barang')->insert([
            'id_paket' => $request->id_paket,   
            'id_barang' => $request->id_barang,
        ]);

    return redirect('/paket_penjualan')->with('success', 'Data berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\paket_penjualan_barang  $paket_penjualan_barang
     * @return \Illuminate\Http\Response
     */
    public function show(paket_penjualan_barang $paket_penjualan_barang)
    {
        $paket_penjualan = DB::table('paket_penjualan')->get();
        $data = array(
            'menu' => 'paket penjualan',
            'submenu' => 'paket penjualan barang',
            'paket_penjualan' => $paket_penjualan
            );
        return view('admin.layout.addPaket_Penjualan_barang', $data,[
            'paket_penjualan' => paket_penjualan::all(),
            'barang' => barang::all()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\paket_penjualan_barang  $paket_penjualan_barang
     * @return \Illuminate\Http\Response
     */
    public function edit(paket_penjualan_barang $paket_penjualan_barang)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updatepaket_penjualan_barangRequest  $request
     * @param  \App\Models\paket_penjualan_barang  $paket_penjualan_barang
     * @return \Illuminate\Http\Response
     */
    public function update(Updatepaket_penjualan_barangRequest $request, paket_penjualan_barang $paket_penjualan_barang)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\paket_penjualan_barang  $paket_penjualan_barang
     * @return \Illuminate\Http\Response
     */
    public function destroy(paket_penjualan_barang $paket_penjualan_barang)
    {
        //
    }
}
