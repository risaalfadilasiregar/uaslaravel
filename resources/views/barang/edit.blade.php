@extends('layouts.app')
@section('conten')
<div class="container-fluid  dashboard-content">

<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="page-header">
            <h2 class="pageheader-title">Form Create Data</h2>
            <div class="page-breadcrumb">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Forms</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Form Create</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <!-- ============================================================== -->
    <!-- validation form -->
    <!-- ============================================================== -->
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="card">
            <h5 class="card-header">Bootstrap Create Form</h5>
            <div class="card-body">
                <form class="needs-validation" novalidate action="{{ Route('barang.update',$barang->id_barang) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                            <label for="validationCustom01">Nama Supplier</label>
                            <select name="id_supp">
                                @foreach ($supplier as $data)
                                    <option value="{{ $data->id }}" @if ($barang->id_supp == $data->id) selected @endif >{{ $data->nama_supp }}</option>
                                @endforeach
                            </select>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                            <label for="validationCustom01">Nama Kategori</label>
                                <select name="id_kategori">
                                    @foreach ($kategori as $data)
                                        <option value="{{ $data->id }}" @if ($barang->id_kategori == $data->id) selected @endif>{{ $data->nama_kategori }}</option>
                                    @endforeach
                                </select>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                        </div>
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                            <label for="validationCustom01">Nama Barang</label>
                                <input type="text" class="form-control" id="validationCustom01" placeholder="Nama Barang" name="nama_barang" value="{{ $barang->nama_barang }}" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                            <label for="validationCustom01">Satuan</label>
                                <input type="text" class="form-control" id="validationCustom01" placeholder="Satuan Barang" name="satuan" value="{{ $barang->satuan }}" required>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                        </div>
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                            <label for="validationCustom01">Stok Barang</label>
                                <input type="text" class="form-control" id="validationCustom01" placeholder="Stok Barang" name="stok_awal" value="{{ $barang->stok_awal }}" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>   
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                            <label for="validationCustom01">Harga Barang</label>
                                <input type="number" class="form-control" id="validationCustom01" placeholder="Harga Barang" name="harga" value="{{ $barang->harga }}" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>                                        
                                     
                    </div>
                    <div class="form-row">
                        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2">
                            <button class="btn btn-warning"><a href="{{ Route('barang.index') }}">Kembali</a></button>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2">
                            <button class="btn btn-success" type="submit">Submit form</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- end validation form -->
    <!-- ============================================================== -->
</div>
</div>
@stop 