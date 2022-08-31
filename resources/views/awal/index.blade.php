@extends('layouts.app')
@section('conten')
    <div class="dashboard-ecommerce">
        <div class="container-fluid dashboard-content ">
            <!-- ============================================================== -->
            <!-- pageheader  -->
            <!-- ============================================================== -->
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="page-header">
                        <h2 class="pageheader-title">E-commerce Dashboard Template </h2>
                        <p class="pageheader-text">Nulla euismod urna eros, sit amet scelerisque torton lectus vel mauris facilisis faucibus at enim quis massa lobortis rutrum.</p>
                        <div class="page-breadcrumb">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">E-Commerce Dashboard Template</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end pageheader  -->
            <!-- ============================================================== -->
            <div class="ecommerce-widget">
                <div class="row">
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="text-muted">Total Stok</h5>
                                <div class="metric-value d-inline-block">
                                    <h1 class="mb-1">{{ $total_stok }}</h1>
                                </div>
                            </div>
                            <div id="sparkline-revenue"></div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="text-muted">Penjualan Barang</h5>
                                <div class="metric-value d-inline-block">
                                    <h1 class="mb-1">{{ $total_jumlah }}</h1>
                                </div>
                            </div>
                            <div id="sparkline-revenue2"></div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="text-muted">Pembelian Barang</h5>
                                <div class="metric-value d-inline-block">
                                    {{-- <h1 class="mb-1">{{ $total_jml }}</h1> --}}
                                </div>
                            </div>
                            <div id="sparkline-revenue3"></div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="text-muted"><a href="">Profil</a></h5>
                            </div>
                            <div id="sparkline-revenue3"></div>
                        </div>
                    </div>

                </div>
                <div class="row">
                <div class="col-xl-5 col-lg-6 col-md-6 col-sm-12 col-12">
                    <!-- ============================================================== -->
                    <!-- social source  -->
                    <!-- ============================================================== -->
                    <div class="card">
                        <h5 class="card-header"> Sales By Social Source</h5>
                        <div class="card-body p-0">
                            <ul class="social-sales list-group list-group-flush">
                                <li class="list-group-item social-sales-content"><span class="social-sales-icon-circle facebook-bgcolor mr-2"><i class="fab fa-facebook-f"></i></span><span class="social-sales-name">Facebook</span><span class="social-sales-count text-dark">120 Sales</span>
                                </li>
                                <li class="list-group-item social-sales-content"><span class="social-sales-icon-circle twitter-bgcolor mr-2"><i class="fab fa-twitter"></i></span><span class="social-sales-name">Twitter</span><span class="social-sales-count text-dark">99 Sales</span>
                                </li>
                                <li class="list-group-item social-sales-content"><span class="social-sales-icon-circle instagram-bgcolor mr-2"><i class="fab fa-instagram"></i></span><span class="social-sales-name">Instagram</span><span class="social-sales-count text-dark">76 Sales</span>
                                </li>
                                <li class="list-group-item social-sales-content"><span class="social-sales-icon-circle pinterest-bgcolor mr-2"><i class="fab fa-pinterest-p"></i></span><span class="social-sales-name">Pinterest</span><span class="social-sales-count text-dark">56 Sales</span>
                                </li>
                                <li class="list-group-item social-sales-content"><span class="social-sales-icon-circle googleplus-bgcolor mr-2"><i class="fab fa-google-plus-g"></i></span><span class="social-sales-name">Google Plus</span><span class="social-sales-count text-dark">36 Sales</span>
                                </li>
                            </ul>
                        </div>
                        <div class="card-footer text-center">
                            <a href="#" class="btn-primary-link">View Details</a>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end social source  -->
                    <!-- ============================================================== -->
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                    <!-- ============================================================== -->
                    <!-- sales traffice source  -->
                    <!-- ============================================================== -->
                    <div class="card">
                        <h5 class="card-header"> Sales By Traffic Source</h5>
                        <div class="card-body p-0">
                            <ul class="traffic-sales list-group list-group-flush">
                                <li class="traffic-sales-content list-group-item "><span class="traffic-sales-name">Direct</span><span class="traffic-sales-amount">$4000.00  <span class="icon-circle-small icon-box-xs text-success ml-4 bg-success-light"><i class="fa fa-fw fa-arrow-up"></i></span><span class="ml-1 text-success">5.86%</span></span>
                                </li>
                                <li class="traffic-sales-content list-group-item"><span class="traffic-sales-name">Search<span class="traffic-sales-amount">$3123.00  <span class="icon-circle-small icon-box-xs text-success ml-4 bg-success-light"><i class="fa fa-fw fa-arrow-up"></i></span><span class="ml-1 text-success">5.86%</span></span>
                                    </span>
                                </li>
                                <li class="traffic-sales-content list-group-item"><span class="traffic-sales-name">Social<span class="traffic-sales-amount ">$3099.00  <span class="icon-circle-small icon-box-xs text-success ml-4 bg-success-light"><i class="fa fa-fw fa-arrow-up"></i></span><span class="ml-1 text-success">5.86%</span></span>
                                    </span>
                                </li>
                                <li class="traffic-sales-content list-group-item"><span class="traffic-sales-name">Referrals<span class="traffic-sales-amount ">$2220.00   <span class="icon-circle-small icon-box-xs text-danger ml-4 bg-danger-light"><i class="fa fa-fw fa-arrow-down"></i></span><span class="ml-1 text-danger">4.02%</span></span>
                                    </span>
                                </li>
                                <li class="traffic-sales-content list-group-item "><span class="traffic-sales-name">Email<span class="traffic-sales-amount">$1567.00   <span class="icon-circle-small icon-box-xs text-danger ml-4 bg-danger-light"><i class="fa fa-fw fa-arrow-down"></i></span><span class="ml-1 text-danger">3.86%</span></span>
                                    </span>
                                </li>
                            </ul>
                        </div>
                        <div class="card-footer text-center">
                            <a href="#" class="btn-primary-link">View Details</a>
                        </div>
                    </div>
                </div>
            </div>
                <div class="row">
                    <!-- ============================================================== -->
              
                    <!-- ============================================================== -->

                                  <!-- recent orders  -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                </div>

            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- footer -->
    <!-- ============================================================== -->
    
    <!-- ============================================================== -->
    <!-- end footer -->
    <!-- ============================================================== -->
@stop