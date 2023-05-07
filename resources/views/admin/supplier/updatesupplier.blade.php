@extends('admin.layout.mainlayout')
@section('page_title','Tambah Data Supplier Produk')
@section('UD.Sulfi Jaya Shop','')

@section('content')
<div class="main-content">
  <section class="section">
    <div class="card">
        <div class="card-header">
          <h4>Update Data Supplier</h4>
        </div>
        <form action="/supplier/updateSupplier" method='POST'>
            <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">
          <div class="card-body">
            <div class="form-group">
              <label>ID Supplier</label>
              <input type="text" class="form-control" name="id_supplier" value ="{{ $supplier[0]->id_supplier }}" readonly>
            </div>
            <div class="form-group">
              <label>Nama Supplier</label>
              <input type="text" class="form-control" name="nama_supplier" value ="{{  $supplier[0]->nama_supplier }}">
            </div>
            <div class="form-group">
              <label>No.Telepon</label>
              <input type="text" class="form-control" name="no_telp"  value ="{{  $supplier[0]->no_telp }}" >
            </div>
            <div class="form-group">
              <label>Alamat</label>
              <input type="text" class="form-control" name="alamat"  value ="{{  $supplier[0]->alamat}}">
            </div>

            <div class="form-group">
              <label>ID Pengguna</label>
              <select id="id"  class="form-control" name="id_pengguna" required>
                <option value="" disabled selected>pilih Pengguna</option>
                @foreach($pengguna as $key)
                    <option value="{{$key->id_pengguna}}" {{ $key->id_pengguna == $supplier[0]->id_pengguna  ? 'selected' : '' }}>{{$key->nama_pengguna }}</option>
                @endforeach
              </select>            
            </div>
            <button class="btn btn-primary mr-1" type="submit" value="Simpan" >Simpan Data</button>
          </div>
        </form>
      </div>
  </section>
</div>
@endsection