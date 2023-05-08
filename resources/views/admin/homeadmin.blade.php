@extends('admin.layout.mainlayout')

@section('page_title','UD.Sulfi Jaya Shop')
@section('UD.Sulfi Jaya Shop','')

@section('custom_css')
<!-- DataTables -->
<link rel="stylesheet" href="{{URL :: to('/')}}/asset/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="{{URL :: to('/')}}/asset/datatables-responsive/css/responsive.bootstrap4.min.css">

<style>
    .row {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100%;
      
    }
</style>

@endsection

@section('content')
<div class="main-content">
    <section class="section">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Total Penjualan</h4>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Rp{{ number_format($total_penjualan, 0, ',', '.') }}</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Total Pembelian</h4>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Rp{{ number_format($total_pembelian, 0, ',', '.') }}</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Stok Barang</h4>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">{{ number_format($stok_barang, 0, ',', '.') }} pcs</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Laba Rugi</h4>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Rp{{ number_format($laba_rugi, 0, ',', '.') }}</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12">
                <div class="card h-100">
                    <div class="card-header">
                        <h4>Grafik Penjualan</h4>
                    </div>
                    <div class="card-body w-100">
                        <canvas id="salesChart"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12">
                <div class="card h-100">
                    <div class="card-header">
                        <h4>Grafik Pembelian</h4>
                    </div>
                    <div class="card-body w-100">
                        <canvas id="purchaseChart"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection

@section('custom_script')
<!-- Chart.js -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

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


<script>
    var ctx1 = document.getElementById('salesChart').getContext('2d');
    var salesChart = new Chart(ctx1, {
        type: 'line',
        data: {
            labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
            datasets: [{
                label: 'Penjualan',
                data: [12, 20, 4, 5, 2, 3, 8],
                backgroundColor: 'rgba(255, 99, 132, 0.2)',
                borderColor: 'rgba(255, 99, 132, 1)',
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            width: 600,
            height: 600,
            scales: {
                yAxes: [{
                ticks: {
                    beginAtZero: true,
                    stepSize: 2
                }
                }]
            }
        },
    });

    var ctx2 = document.getElementById('purchaseChart').getContext('2d');
    var purchaseChart = new Chart(ctx2, {
        type: 'line',
        data: {
            labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
            datasets: [{
                label: 'Pembelian',
                data: [8, 12, 6, 7, 4, 3, 10],
                backgroundColor: 'rgba(54, 162, 235, 0.2)',
                borderColor: 'rgba(54, 162, 235, 1)',
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            width: 600,
            height: 600,
            scales: {
                yAxes: [{
                ticks: {
                    beginAtZero: true,
                    stepSize: 2
                }
                }]
            }
        },
    });
</script>
@endsection