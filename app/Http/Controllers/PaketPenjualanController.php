<?php

namespace App\Http\Controllers;

use App\Models\paket_penjualan;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\Storepaket_penjualanRequest;
use App\Http\Requests\Updatepaket_penjualanRequest;

class PaketPenjualanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = array(
            'menu' => 'paket_penjualan',
            'submenu' => ''
            );
        return view('admin.layout.paket_penjualan', $data);
            
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = array(
            'menu' => 'add paket penjualan',
            'submenu' => ''
            );
        return view('admin.layout.addPaket_Penjualan', $data);
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Storepaket_penjualanRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storepaket_penjualanRequest $request)
    {
        DB::table('paket_penjualan')->insert([
            'nama_paket' => $request->nama_paket,
        ]);
        return redirect('/paket_penjualan')->with('success', 'Data berhasil ditambahkan!'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\paket_penjualan  $paket_penjualan
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $paket_penjualan_barang = DB::select('SELECT paket_penjualan_barang.id_paket, paket_penjualan_barang.id_barang, paket_penjualan.nama_paket, barang.nama_barang FROM `paket_penjualan_barang` join barang on paket_penjualan_barang.id_barang = barang.id_barang join paket_penjualan on paket_penjualan.id_paket = paket_penjualan_barang.id_paket');
        
        $data = array(
            'menu' => 'paket penjualan',
            'submenu' => 'paket penjualan barang',
            'paket_penjualan_barang' => $paket_penjualan_barang
            );
            return view('admin.layout.paket_penjualan', $data);
        }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\paket_penjualan  $paket_penjualan
     * @return \Illuminate\Http\Response
     */
    public function edit(paket_penjualan $paket_penjualan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updatepaket_penjualanRequest  $request
     * @param  \App\Models\paket_penjualan  $paket_penjualan
     * @return \Illuminate\Http\Response
     */
    public function update(Updatepaket_penjualanRequest $request, paket_penjualan $paket_penjualan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\paket_penjualan  $paket_penjualan
     * @return \Illuminate\Http\Response
     */
    public function destroy(paket_penjualan $paket_penjualan)
    {
        //
    }
}
