@extends('admin.layout.mainlayout')
@section('page_title','UD.Sulfi Jaya Shop')
@section('UD.Sulfi Jaya Shop','')
@section('custom_css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.2.7/js/fileinput.min.js">
@endsection
@section('content')
<!DOCTYPE html>
<div class="main-content">
  <section class="section">
    <div class="card">
        <div class="card-header">
          <h4>Tambah Produk</h4>
        </div>
        <form action="/produkadm" method='POST' enctype="multipart/form-data">
        <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">
        <div class="card-body">
          <div class="alert alert-info">
            <b>Note!</b> isikan data dengan benar
          </div>
          <div class="row">
            <div class="form-group col-6 col-md-6 col-lg-6">
                <label style="font-weight:bold; font-size:15">Nama Produk</label>
                <input type="text" class="form-control @error('nama_produk') is-invalid @enderror" id="nama_produk" name="nama_produk" required autofocus value="{{ old('nama_produk')}}">
                @error('nama_produk')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-group col-6 col-md-6 col-lg-6">
                <label style="font-weight:bold; font-size:15">Jenis Produk</label>
                <select id="id"  class="form-control" name="id_jenis" required>
                    <option value="" disabled selected>pilih jenis</option>
                    @foreach($jenisproduk as $key)
                      @if(old('id_jenis') == $key->id_jenis)
                        <option value="{{ $key->id_jenis}}" selected>{{ $key->nama_jenis}}</option>
                      @else
                        <option value="{{ $key->id_jenis}}" selected>{{ $key->nama_jenis}}</option>
                      @endif
                    @endforeach
                </select>
            </div>
          </div>
          <div class="form-group">
            <label style="font-weight:bold; font-size:15">Foto Produk</label>
            <input type="file" class="form-control image" name="gambar_produk">
          </div>
          <div class="row">
            <div class="form-group col-6 col-md-6 col-lg-6">
                <label style="font-weight:bold; font-size:15">Harga Produk</label>
                <input type="text" class="form-control @error('harga_produk') is-invalid @enderror"" name="harga_produk" required value="{{ old('harga_produk')}}">
                @error('harga_produk')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-group col-6 col-md-6 col-lg-6">
                <label style="font-weight:bold; font-size:15">Stok Produk</label>
                <input type="number" class="form-control @error('stok_produk') is-invalid @enderror" name="stok_produk" required value="{{ old('stok_produk')}}">
                @error('stok_produk')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
            </div>
          </div>
          <div class="row">
            <div class="form-group col-6 col-md-6 col-lg-6">
                <label style="font-weight:bold; font-size:15">Ukuran</label>
                <input type="text" class="form-control @error('ukuran') is-invalid @enderror" name="ukuran" required value="{{ old('ukuran')}}">
                @error('ukuran')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-group col-6 col-md-6 col-lg-6">
                <label style="font-weight:bold; font-size:15">variasi</label>
                <input type="text" class="form-control @error('variasi') is-invalid @enderror" name="variasi" required value="{{ old('variasi')}}">
                @error('variasi')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
            </div>
          </div>
          <div class="form-group">
            <label style="font-weight:bold; font-size:15">Deskripsi Produk</label>
            <textarea class="form-control" name="deskripsi" value="{{ old('deskripsi')}}"></textarea>
          </div>
        </div>
        <div class="card-footer text-right">
          <button class="btn btn-primary mr-1" type="submit" value="Simpan">Submit</button>
        </div>
      </div>
  </section>
</div>
</html>
@endsection

@section('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.2.7/js/fileinput.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.2.7/themes/fa/theme.min.js"></script>
@endsection