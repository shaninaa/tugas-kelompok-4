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
        <form action="addPaketPenjualanBarang" method='POST'>
            <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">
          <div class="card-body">
          <div class="form-group">
              <label>Pilih Paket</label>
              <select id="id"  class="form-control" name="id_paket" required>
                <option value="" disabled selected>pilih paket</option>
                @foreach($paket_penjualan as $paket)
                  @if(old('id_paket') == $paket->id_paket)
                    <option value="{{ $paket->id_paket}}" selected>{{ $paket->nama_paket}}</option>
                  @else
                    <option value="{{ $paket->id_paket}}" selected>{{ $paket->nama_paket}}</option>
                  @endif
                @endforeach
              </select>            
            </div>
            <div class="form-group">
              <label/>Pilih Barang</label>
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