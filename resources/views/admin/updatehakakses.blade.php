@extends('admin.layout.mainlayout')
@section('page_title','Tambah Jenis Produk')
@section('UD.Sulfi Jaya Shop','')

@section('content')
<div class="main-content">
  <section class="section">
    <div class="card">
        <div class="card-header">
          <h4>Update Data Hak Akses</h4>
        </div>
        <form action="/hakakses/updateHakakses" method='POST'>
            <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">
          <div class="card-body">
            <div class="form-group">
              <label>ID Akses</label>
              <input type="text" class="form-control" name="id_akses" value ="{{ $hakakses[0]->id_akses }}" readonly>
            </div>
            <div class="form-group">
              <label>Nama Akses</label>
              <input type="text" class="form-control" name="nama_akses" value ="{{ $hakakses[0]->nama_akses }}">
            </div>
            <div class="form-group">
              <label>Keterangan</label>
              <input type="text" class="form-control" name="keterangan" value ="{{ $hakakses[0]->keterangan }}">
            </div>
            <button class="btn btn-primary mr-1" type="submit" value="Simpan" >Simpan Data</button>
          </div>
        </form>
      </div>
  </section>
</div>
@endsection