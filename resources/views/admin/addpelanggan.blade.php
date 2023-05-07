@extends('admin.layout.mainlayout')
@section('page_title','Tambah Jenis Produk')
@section('UD.Sulfi Jaya Shop','')

@section('content')
<div class="main-content">
  <section class="section">
    <div class="card">
        <div class="card-header">
          <h4>Tambah Data Pelanggan</h4>
        </div>
        <form action="addpelanggan" method='POST'>
            <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">
          <div class="card-body">
            <div class="form-group">
              <label>Nama Pelanggan</label>
              <input type="text" class="form-control" name="nama_pelanggan" placeholder="Enter Name">
            </div>
            <div class="form-group">
              <label>Id Pengguna</label>
              <select id="id"  class="form-control" name="id_pengguna" required>
                <option value="" disabled selected>pilih hak Kases</option>
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
              <label>Nomor Handphone</label>
              <input type="text" class="form-control" name="no_telp" placeholder="Enter Name">
            </div>
            <div class="form-group">
              <label>alamat</label>
              <input type="text" class="form-control" name="alamat" placeholder="Enter Name">
            </div>
            <button class="btn btn-primary mr-1" type="submit" value="Simpan" >Simpan Data</button>
          </div>
        </form>
      </div>
  </section>
</div>
@endsection