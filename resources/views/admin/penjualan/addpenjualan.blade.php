@extends('admin.layout.mainlayout')
@section('page_title','Tambah Data Penjualan Produk')
@section('UD.Sulfi Jaya Shop','')

@section('content')
<div class="main-content">
  <section class="section">
    <div class="card">
        <div class="card-header">
          <h4>Tambah Data Penjualan</h4>
        </div>
        <form action="addPenjualan" method='POST'>
            <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">
          <div class="card-body">
          <div class="form-group">
              <label>Id Pengguna</label>
              <select id="id"  class="form-control" name="id_pengguna" required>
                <option value="" disabled selected>pilih pengguna</option>
                @foreach($pengguna as $key)
                  @if(old('id_pengguna') == $key->id_pengguna)
                    <option value="{{ $key->id_pengguna}}" selected>{{ $key->nama_pengguna}}</option>
                  @else
                    <option value="{{ $key->id_pengguna}}" selected>{{ $key->nama_pengguna}}</option>
                  @endif
                @endforeach
              </select>            
            </div>
            <div class="form-group">
              <label>Id Barang</label>
              <select id="id"  class="form-control" name="id_barang" required>
                <option value="" disabled selected>pilih barang</option>
                @foreach($barang as $key)
                  @if(old('id_barang') == $key->id_barang)
                    <option value="{{ $key->id_barang}}" selected>{{ $key->nama_barang}}</option>
                  @else
                    <option value="{{ $key->id_barang}}" selected>{{ $key->nama_barang}}</option>
                  @endif
                @endforeach
              </select>            
            </div>
            <div class="form-group">
              <label>harga_jual</label>
              <input type="text" class="form-control" name="harga_jual" placeholder="Enter Name">
            </div>
            <div class="form-group">
              <label>quantity</label>
              <input type="text" class="form-control" name="quantity" placeholder="Enter Name">
            </div>
            <!-- <div class="form-group">
              <label>jumlah_penjualan</label>
              <input type="text" class="form-control" name="jumlah_penjualan" placeholder="Enter Name">
            </div> -->
          
            <button class="btn btn-primary mr-1" type="submit" value="Simpan" >Simpan Data</button>
          </div>
        </form>
      </div>
  </section>
</div>
@endsection