@extends('admin.layout.mainlayout')
@section('page_title','Tambah Jenis Produk')
@section('UD.Sulfi Jaya Shop','')

@section('content')
<div class="main-content">
  <section class="section">
    <div class="card">
        <div class="card-header">
          <h4>Tambah Data Pengguna</h4>
        </div>
        <form action="addpengguna" method='POST'>
            <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">
          <div class="card-body">
            <div class="form-group">
              <label>Nama Pengguna</label>
              <input type="text" class="form-control" name="nama_pengguna" placeholder="Enter Name">
            </div>
            <div class="form-group">
              <label>Hak Akses</label>
              <select id="id"  class="form-control" name="id_akses" required>
                <option value="" disabled selected>pilih hak Kases</option>
                @foreach($hakakses as $key)
                  @if(old('id_akses') == $key->id_akses)
                    <option value="{{ $key->id_akses}}" selected>{{ $key->nama_akses}}</option>
                  @else
                    <option value="{{ $key->id_akses}}" selected>{{ $key->nama_akses}}</option>
                  @endif
                @endforeach
              </select>            
            </div>
            <div class="form-group">
              <label>Password</label>
              <input type="text" class="form-control" name="password" placeholder="Enter Name">
            </div>
            <div class="form-group">
              <label>Nama Depan</label>
              <input type="text" class="form-control" name="nama_depan" placeholder="Enter Name">
            </div>
            <div class="form-group">
              <label>Nama Belakang</label>
              <input type="text" class="form-control" name="nama_belakang" placeholder="Enter Name">
            </div>
            <div class="form-group">
              <label>Nomor Handphone</label>
              <input type="text" class="form-control" name="no_hp" placeholder="Enter Name">
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