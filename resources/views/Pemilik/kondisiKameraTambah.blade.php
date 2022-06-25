@extends('layouts.header.headerPemilik')
@section('dashboard')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Tambahkan Kondisi Kamera</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Tambahkan Alat Rental Kamera</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <form method="post" action="{{ route('kondisi-kamera.store') }}" id="myForm" enctype="multipart/form-data">
 <form action="">
        @csrf
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">General</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
           
            <div class="card-body">
                <div class="form-group">
                  <label for="inputName">Kondisi Kamera</label>
                  <input type="text" id="kondisi_alat" name="kondisi_alat" class="form-control">
                </div>
                <div class="form-group">
                  <label for="inputClientCompany">Sub nama detail</label>
                  <input type="text" id="sub_nama" name="sub_nama" class="form-control">
                </div>
              <!-- /.card-body -->
            </div>
          <!-- /.card -->
        </div>
       
      </div>
      <div class="row">
        <div class="col-12">
          <a href="" class="btn btn-secondary">Cancel</a>
          <input type="submit" value="submit" class="btn btn-success float-right" style="margin-left: 20px">
        </div>
      </div>
    </section>
    </form>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

@endsection