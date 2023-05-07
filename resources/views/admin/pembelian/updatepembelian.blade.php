@extends('admin.layout.mainlayout')
@section('page_title','Update Data Pembelian Produk')
@section('UD.Sulfi Jaya Shop','')

@section('content')
<div class="main-content">
  <section class="section">
    <div class="card">
        <div class="card-header">
          <h4>Update Data Supplier</h4>
        </div>
        <form action="/pembelian/updatePembelian" method='POST'>
            <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">
            <div class="card-body">
          <div class="form-group">
          <div class="form-group">
              <label>id_pembelian</label>
              <input type="text" class="form-control" name="id_pembelian" value ="{{ $pembelian[0]->id_pembelian }}" readonly>
            </div>

              <label>Id Pengguna</label>
              <select id="id"  class="form-control" name="id_pengguna" required>
                <option value="" disabled selected>pilih pengguna</option>
                @foreach($pengguna as $key)
                    <option value="{{$key->id_pengguna}}" {{ $key->id_pengguna == $pembelian[0]->id_pengguna  ? 'selected' : '' }}>{{$key->nama_pengguna }}</option>
                @endforeach
              </select>            
            </div>
            <div class="form-group">
              <label>Id Barang</label>
              <select id="id"  class="form-control" name="id_barang" required>
                <option value="" disabled selected>pilih barang</option>
                @foreach($barang as $key)
                    <option value="{{$key->id_barang}}" {{ $key->id_barang == $pembelian[0]->id_barang  ? 'selected' : '' }}>{{$key->nama_barang }}</option>
                @endforeach
              </select>            
            </div>
            <div class="form-group">
              <label>harga_pembelian</label>
              <input type="text" class="form-control" name="harga_pembelian" value ="{{ $pembelian[0]->harga_pembelian }}" >
            </div>
            <div class="form-group">
              <label>quantity</label>
              <input type="text" class="form-control" name="quantity" value ="{{ $pembelian[0]->quantity }}" >
            </div>
            <!-- <div class="form-group">
              <label>jumlah_pembelian</label>
              <input type="text" class="form-control" name="jumlah_pembelian" value ="{{ $pembelian[0]->jumlah_pembelian }}" >
            </div> -->
            <button class="btn btn-primary mr-1" type="submit" value="Simpan" >Simpan Data</button>
          </div>
        </form>
      </div>
  </section>
</div>
@endsection