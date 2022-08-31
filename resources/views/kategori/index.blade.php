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
        <div class="row">
            <!-- ============================================================== -->
            <!-- basic table  -->
            <!-- ============================================================== -->
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="card">
                    <h5 class="card-header">Category's Table</h5>
                    <br>
                    <a href="{{ Route('kategori.create') }}"><button class="btn btn-info">Tambah</button></a>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered first">
                                <thead>
                                    <tr>
                                        <th>Nomor</th>
                                        <th>Nama Kategori</th>
                                        <th>Opsi</th>
                                    </tr>
                                </thead>
                                @php
                                    $nomor=1;
                                @endphp
                                @foreach ($kategori as $data)                         
                                <tbody>
                                    <tr>
                                        <td>{{ $nomor++ }}</td>
                                        <td>{{ $data->nama_kategori }}</td>
                                        <td>
                                            <button class="btn-brand"><a href="{{ Route('kategori.edit',$data->id) }}">Edit</a></button>
                                            <form action="{{ Route('kategori.destroy',$data->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <input type="submit" value="Hapus" class="btn-dark">
                                            </form>
                                        </td>
                                    </tr>
                                </tbody>
                                @endforeach

                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end basic table  -->
            <!-- ============================================================== -->
        </div>   
    </div>
@endsection