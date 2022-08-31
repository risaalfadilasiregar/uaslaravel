@extends('layouts.app')
@section('conten')
<div class="container-fluid  dashboard-content">

<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="page-header">
            <h2 class="pageheader-title">Form Update Data</h2>
            <div class="page-breadcrumb">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Forms</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Form Update</li>
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
            <h5 class="card-header">Bootstrap Update Form</h5>
            <div class="card-body">
                <form class="needs-validation" novalidate action="{{ Route('supllier.update',$supplier->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                            <label for="validationCustom01">Nama Supplier</label>
                            <input type="text" class="form-control" id="validationCustom01" placeholder="Nama Supplier" name="nama_supp" value="{{ $supplier->nama_supp }}" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                            <label for="validationCustom02">Nomor Telphone Supplier</label>
                            <input type="text" class="form-control" id="validationCustom02" placeholder="Nomor Telephone" name="telp_supp" value="{{ $supplier->telp_supp }}" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                            <label for="validationCustom02">Alamat Supplier</label>
                            <input type="text" class="form-control" id="validationCustom02" placeholder="Alamat Supplier" name="alamat_supp" value="{{ $supplier->alamat_supp }}" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>

                        
                    </div>
                    <div class="form-row">
                        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2">
                            <button class="btn btn-warning"><a href="{{ Route('supllier.index') }}">Kembali</a></button>
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