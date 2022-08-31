@extends('layouts.app')
@section('conten')
    <div class="container-fluid  dashboard-content">
        <!-- ============================================================== -->
        <!-- pageheader -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                    <h2 class="pageheader-title">Data Tables</h2>
                    <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                    <div class="page-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Tables</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Data Tables</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end pageheader -->
        <!-- ============================================================== -->
        
<h1>Bukti Pembelian</h1>
  
<table>
    <tr>
        <td style="width: 200px; font-weight: bold;">Transaksi @foreach ($z as $y) {{$y->id_barang }}@endforeach </td>
    </tr>
    <hr><hr>
    <h5>Tanggal Transaksi</h5>
    <h5>Tanggal : {{ $y->created_at }}</h5>

    <tr>
        <td style="width: 200px;">Nama Barang</td>
        <td>{{$y->barang->nama_barang}}</td>
    </tr>
    <tr>
        <td style="width: 200px;">Harga Satuan</td>
        <td>Rp. {{$y->barang->harga}}</td>
    </tr>
    <tr>
        <td style="width: 200px;">Jumlah Barang</td>
        <td>{{$data['jumlah']}}</td>
    </tr>
    <tr>
        <td style="width: 200px;">Harga Keseluruhan</td>
        <td>Rp. {{$data['total_harga']}}</td>
    </tr>
</table>

<script>
    window.print();
</script>
@endsection
