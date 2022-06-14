@extends('layouts.header.headerPemilik')
@section('dashboard')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Pengelola Data Pelanggan </h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{Route('pemilik')}}">Home</a></li>
              <li class="breadcrumb-item active">Pengelola Data Pelanggan</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Pengambilan Sewa</h3>
               <a href="{{Route('disewaTambah')}}" class="btn-lg btn-secondary float-sm-right">Tambahkan</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Nomer</th>
                    <th>Bukti Pembayaran</th>
                    <th>tanggal Pengambilan</th>
                    <th>tanggal terakhir dikembalikan</th>
                    <th>Customer</th>
                    <th>Pemilik kamera</th>
                    <th> Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>Trident</td>
                    <td>Internet
                      Explorer 4.0
                    </td>
                    <td>Win 95+</td>
                    <td> 4</td>
                    <td>X</td>
                    <td>X</td>
                    <td><a href="{{Route('disewaDetail')}}" class="btn btn-primary">Detail</a> <a href="{{Route('disewaDetail')}}" class="btn btn-danger">Hapus</a> <a href="{{Route('disewaEdit')}}"class="btn btn-warning">Update</a> </td>
                  </tr>
                
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            {{-- kedua  --}}
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Pengembalian Sewa</h3>
                 <a href="{{Route('disewaTambah')}}" class="btn-lg btn-secondary float-sm-right">Tambahkan</a>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                      <th>Nomer</th>
                      <th>Kamera</th>
                      <th>Category</th>
                      <th>Customer</th>
                      <th>Pemilik kamera</th>
                      <th>diKembalikan Tanggal</th>
                      <th>Customer</th>
                      <th> Aksi</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                      <td>Trident</td>
                      <td>Internet
                        Explorer 4.0
                      </td>
                      <td>Win 95+</td>
                      <td> 4</td>
                      <td>X</td>
                      <td>X</td>
                      <td>X</td>
                      <td><a href="{{Route('disewaDetail')}}" class="btn btn-primary">Detail</a> <a href="{{Route('disewaDetail')}}" class="btn btn-danger">Hapus</a> <a href="{{Route('disewaEdit')}}"class="btn btn-warning">Update</a> </td>
                    </tr>
                  
                    </tfoot>
                  </table>
                </div>
                <!-- /.card-body -->
              </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

@endsection