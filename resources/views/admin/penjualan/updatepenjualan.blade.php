@extends('admin.layout.mainlayout')
@section('page_title','Update Data Penjualan Produk')
@section('UD.Sulfi Jaya Shop','')

@section('content')
<div class="main-content">
  <section class="section">
    <div class="card">
        <div class="card-header">
          <h4>Update Data Penjualan</h4>
        </div>
        <form action="/penjualan/updatePenjualan" method='POST'>
            <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">
            <div class="card-body">
          <div class="form-group">
          <div class="form-group">
              <label>id_penjualan</label>
              <input type="text" class="form-control" name="id_penjualan" value ="{{ $penjualan[0]->id_penjualan }}" readonly>
            </div>

              <label>Id Pengguna</label>
              <select id="id"  class="form-control" name="id_pengguna" required>
                <option value="" disabled selected>pilih Pengguna</option>
                @foreach($pengguna as $key)
                    <option value="{{$key->id_pengguna}}" {{ $key->id_pengguna == $penjualan[0]->id_pengguna  ? 'selected' : '' }}>{{$key->nama_pengguna }}</option>
                @endforeach

              </select>            
            </div>
            <div class="form-group">
              <label>Id Barang</label>
              <select id="id"  class="form-control" name="id_barang" required>
                <option value="" disabled selected>pilih Barang</option>
                @foreach($barang as $key)
                    <option value="{{$key->id_barang}}" {{ $key->id_barang == $penjualan[0]->id_barang  ? 'selected' : '' }}>{{$key->nama_barang }}</option>
                @endforeach
              </select>                
            </div>
       

           
            <div class="form-group">
              <label>harga_jual</label>
              <input type="text" class="form-control" name="harga_jual" value ="{{ $penjualan[0]->harga_jual }}" >
            </div>
            <div class="form-group">
              <label>quantity</label>
              <input type="text" class="form-control" name="quantity" value ="{{ $penjualan[0]->quantity }}" >
            </div>
            <!-- <div class="form-group">
              <label>jumlah_penjualan</label>
              <input type="text" class="form-control" name="jumlah_penjualan" value ="{{ $penjualan[0]->jumlah_penjualan }}" >
            </div> -->
            <button class="btn btn-primary mr-1" type="submit" value="Simpan" >Simpan Data</button>
          </div>
        </form>
      </div>
  </section>
</div>
@endsection