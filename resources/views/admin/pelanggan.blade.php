@extends('admin.layout.mainlayout')
@section('page_title','UD.Sulfi Jaya Shop')
@section('UD.Sulfi Jaya Shop','')
@section('custom_css')
<!-- DataTables -->
<link rel="stylesheet" href="{{URL :: to('/')}}/asset/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="{{URL :: to('/')}}/asset/datatables-responsive/css/responsive.bootstrap4.min.css">
@endsection


@section('content')
<!DOCTYPE html>
<head>
    <title>Data Pelanggan</title>
</head>
<div class="main-content">
  <section class="section">
          <div class="card">
            <div class="card-header">
              <h4>Pelanggan</h4>
            </div>
            <div class="card-body">
                <div>
                    <a href="/pelanggan/addpelanggan" style="float: right;" class="btn btn-icon icon-left btn-primary"><i class="fas fa-plus"></i>Tambah Data</a>
                </div>
              <div class="table-responsive">
                <table class="table table-striped" id="table-1">
                  <thead>
                    <tr>
                        <th>No</th>
                        <th>ID Pelanggan</th>
                        <th>ID Pengguna</th>
                        <th>Nama Pelanggan</th>
                        <th>No Hp</th>
                        <th>Alamat</th>
                        <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($pelanggan as $data)
                        <tr>
                            <td>{{ $loop->iteration}}</td>
                            <td>{{ $data->id_pelanggan}}</td>
                            <td>{{ $data->nama_pelanggan}}</td>
                            <td>{{ $data->no_telp}}</td>
                            <td>{{ $data->alamat}}</td>
                            <td>
                              <form action="/pelanggan/{{$data->id_pelanggan}}" method='POST' class="form-inline">
                                @csrf
                                {{ method_field('DELETE')}}
                                <button style="float: right;" class="fa fa-trash btn btn-sm btn-danger mr-2 mb-2"></button>
                                <a href="#" style="float: right;" class=" fa fa-edit btn btn-sm btn-primary mr-2 mb-2 ">
                                  Edit
                                </a>
                              </form>
                            </td>
                        </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
  </section>
</div>
</html>
@endsection
@section('custom_script')
<!-- DataTables -->
<script src="{{URL :: to('/')}}/asset/datatables/jquery.dataTables.min.js"></script>
<script src="{{URL :: to('/')}}/asset/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="{{URL :: to('/')}}/asset/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="{{URL :: to('/')}}/asset/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script>
  $(function () {
    $("#table-1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });  
  });
</script>
@endsection