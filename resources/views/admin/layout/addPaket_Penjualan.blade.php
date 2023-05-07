@extends('admin.layout.mainlayout')
@section('page_title','Tambah Data Pembelian Produk')
@section('UD.Sulfi Jaya Shop','')

@section('content')
<div class="main-content">
  <section class="section">
    <div class="card">
        <div class="card-header">
          <h4>Tambah Data Paket Penjualan</h4>
        </div>
        <form action="addPaketPenjualan" method='POST'>
            <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">
          <div class="card-body">
            <div class="form-group">
              <label>Nama Paket</label>
              <input type="text" class="form-control" name="nama_paket" placeholder="Enter Name">
            </div>
            {{-- <div class="form-group">
              <label>quantity</label>
              <input type="text" class="form-control" name="quantity" placeholder="Enter Name">
            </div> --}}
            <!-- <div class="form-group">
              <label>jumlah_pembelian</label>
              <input type="text" class="form-control" name="jumlah_pembelian" placeholder="Enter Name">
            </div> -->

            <button class="btn btn-primary mr-1" type="submit" value="Simpan" >Simpan Data</button>
          </div>
        </form>
      </div>
  </section>
</div>
@endsection