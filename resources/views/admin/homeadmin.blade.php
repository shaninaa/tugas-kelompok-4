@extends('admin.layout.mainlayout')
@section('page_title','UD.Sulfi Jaya Shop')
@section('UD.Sulfi Jaya Shop','')
@section('custom_css')
<!-- DataTables -->
<link rel="stylesheet" href="{{URL :: to('/')}}/asset/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="{{URL :: to('/')}}/asset/datatables-responsive/css/responsive.bootstrap4.min.css">
@endsection
@section('content')
<div class="main-content">
  <section class="section">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12">
            <div class="card card-statistic-2">
                <div class="card-stats">
                <div class="card-stats-title">Order Statistics -
                    <div class="dropdown d-inline">
                    <a class="font-weight-600 dropdown-toggle" data-toggle="dropdown" href="#" id="orders-month">August</a>
                    <ul class="dropdown-menu dropdown-menu-sm">
                        <li class="dropdown-title">Select Month</li>
                        <li><a href="#" class="dropdown-item">January</a></li>
                        <li><a href="#" class="dropdown-item">February</a></li>
                        <li><a href="#" class="dropdown-item">March</a></li>
                        <li><a href="#" class="dropdown-item">April</a></li>
                        <li><a href="#" class="dropdown-item">May</a></li>
                        <li><a href="#" class="dropdown-item">June</a></li>
                        <li><a href="#" class="dropdown-item">July</a></li>
                        <li><a href="#" class="dropdown-item active">August</a></li>
                        <li><a href="#" class="dropdown-item">September</a></li>
                        <li><a href="#" class="dropdown-item">October</a></li>
                        <li><a href="#" class="dropdown-item">November</a></li>
                        <li><a href="#" class="dropdown-item">December</a></li>
                    </ul>
                    </div>
                </div>
                <div class="card-stats-items">
                    <div class="card-stats-item">
                    <div class="card-stats-item-count">24</div>
                    <div class="card-stats-item-label">Pending</div>
                    </div>
                    <div class="card-stats-item">
                    <div class="card-stats-item-count">12</div>
                    <div class="card-stats-item-label">terkirim</div>
                    </div>
                    <div class="card-stats-item">
                    <div class="card-stats-item-count">23</div>
                    <div class="card-stats-item-label">selesai</div>
                    </div>
                </div>
                </div>
                <div class="card-icon shadow-primary bg-primary">
                <i class="fas fa-archive"></i>
                </div>
                <div class="card-wrap">
                <div class="card-header">
                    <h4>Total Orders</h4>
                </div>
                <div class="card-body">
                    59
                </div>
                </div>
            </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
            <div class="card card-statistic-2">
                <div class="card-chart">
                <canvas id="balance-chart" height="80"></canvas>
                </div>
                <div class="card-icon shadow-primary bg-primary">
                <i class="fas fa-dollar-sign"></i>
                </div>
                <div class="card-wrap">
                <div class="card-header">
                    <h4>Pemasukan</h4>
                </div>
                <div class="card-body">
                    Rp. 12.000.000
                </div>
                </div>
            </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
            <div class="card card-statistic-2">
                <div class="card-chart">
                <canvas id="sales-chart" height="80"></canvas>
                </div>
                <div class="card-icon shadow-primary bg-primary">
                <i class="fas fa-shopping-bag"></i>
                </div>
                <div class="card-wrap">
                <div class="card-header">
                    <h4>Barang Terjual</h4>
                </div>
                <div class="card-body">
                    400 pcs
                </div>
                </div>
            </div>
            </div>
        </div>
        <!-- table produk baru -->
            <div class="row">
                <div class="col">
                <div class="card">
                    <div class="card-header">
                    <h4 class="card-title">Produk Saat Ini</h4>
                    <div class="card-tools">
                        <a href="#" style="float: right;" class="btn btn-sm btn-primary">More</a>
                    </div>
                    </div>
                    <div class="card-body">
                      <div class="table-responsive">
                        <table class="table table-striped" id="table-1">
                          <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Jenis</th>
                                <th>Gambar</th>
                                <th>Harga</th>
                                <th>Stok</th>
                                <th>Ukuran</th>
                                <th>Variasi</th>
                                <th>Deskripsi</th>
                            </tr>
                          </thead>
                          <tbody>
                            
                          </tbody>
                        </table>
                      </div>
                    </div>
                </div>
            </div>
        </div>
  </section>
</div>
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