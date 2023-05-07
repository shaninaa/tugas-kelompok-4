@extends('admin.layout.mainlayout')
@section('page_title','Tambah Jenis Produk')
@section('UD.Sulfi Jaya Shop','')

@section('content')
<div class="main-content">
  <section class="section">
    <div class="card">
        <div class="card-header">
          <h4>Tambah Data Barang</h4>
        </div>
        <form action="addbarang" method='POST'>
            <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">
          <div class="card-body">
            <div class="form-group">
              <label>Nama Barang</label>
              <input type="text" class="form-control" name="nama_barang" placeholder="Enter Name">
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
              <label>Keterangan</label>
              <input type="text" class="form-control" name="keterangan" placeholder="Enter Name">
            </div>
            <div class="form-group">
              <label>satuan</label>
              <input type="text" class="form-control" name="satuan" placeholder="Enter Name">
            </div>
            <button class="btn btn-primary mr-1" type="submit" value="Simpan" >Simpan Data</button>
          </div>
        </form>
      </div>
  </section>
</div>
@endsection