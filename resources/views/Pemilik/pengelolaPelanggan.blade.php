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
              
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Nomer</th>
                    <th>Bukti Pembayaran</th>
                    <th>Customer</th>
                    <th>Tanggal Pengambilan</th>
               
                  </tr>
                  </thead>
                  <tbody>
                    @php
                    $i = 0;
                    @endphp

                    @foreach($pengambilan as $pgn)
                  <tr>
                  <td>{{++$i}}</td>
                  <td>{{$pgn->id_bayar}}</td>
                  <td>{{$pgn->id_customer}}</td>
                  <td>{{$pgn->tgl_pengambilan}}</td>
           
                  </tr>
                
                  </tfoot>
                  @endforeach
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            {{-- kedua  --}}
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Pengembalian Sewa</h3>
                
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                      <th>Nomer</th>
                      <th>bukti pembayaran</th>
                      <th>customer</th>
                      <th>Pemilik</th>
                      <th>tanggal pengembalian</th>
                      <th>pemilik</th>
                      <th>kamera</th>
                
                    </tr>
                    </thead>
                    @foreach($pengembalian as $pgnn)
                    <tbody>
                    <tr>
                      <td>{{++$i}}</td>
                      <td>{{$pgnn->id_bayar}}</td>
                      <td>{{$pgnn->id_customer}}</td>
                      <td>{{$pgnn->id_pemilik}}</td>
                      <td>{{$pgnn->tgl_pengembalian}}</td>
                      <td>{{$pgnn->id_pemilik}}</td>
                      <td>{{$pgnn->disewa_kamera}}</td>
                      
                      </tr>
                  
                    </tfoot>
                    @endforeach
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