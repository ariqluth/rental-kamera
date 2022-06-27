@extends('layouts.header.headerCustomer')
@section('dashboard')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Pengambilan</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
             
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <form method="post" action="{{ route('pengambilan.store') }}" id="myForm" enctype="multipart/form-data">
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
                <label for="inputName">id_bayar</label>
                <input type="number" id="id_bayar" class="form-control" name="id_bayar" value="" >
              </div>
              <div class="form-group">
                <label for="inputDescription">id_customer</label>
                <input type="number" id="id_customer" class="form-control" rows="4" name="id_customer" value="" ></input>
              </div>
              <div class="form-group">
                <label for="inputDescription">id_pemilik</label>
                <input type="number" id="id_pemilik" class="form-control" rows="4" name="id_pemilik" value=""></input>
              </div>
              
              <div class="form-group">
                <label for="inputClientCompany">Tanggal pengambilan</label>
                <input type="date" id="tgl_pengambilan" name="tgl_pengambilan" class="form-control">
              </div>
             
              {{-- <div class="form-group" >
                <label for="inputProjectLeader">Pemilik</label>
                <input type="text" id="pemilik" name="pemilik" class="form-control" value=" " disabled>
              </div> --}}

              
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
       
      </div>
      <div class="row">
        <div class="col-12">
          <a href="{{Route('pengambilan.index')}}" class="btn btn-secondary">Cancel</a>
          <button type="submit" class="btn btn-primary" id="submit">Submit</button>
        </div>
      </div>
    </section>
    </form>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

@endsection