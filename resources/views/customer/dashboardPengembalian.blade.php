@extends('layouts.header.headerCustomer')
@section('dashboard')


 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Pengembilan</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Pengembilan</a></li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <!-- Main content -->
  <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
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
                    <th>kamera</th>

                  
                  </tr>
                  </thead>
                  <a href="{{Route('pengembalian.create')}}" class="btn btn-primary float-right">Ambil Kamera</a> 
                  <tbody>
                    @php
                    $i = 0;
                    @endphp
                    @foreach ($pengembilan as $trs)
                  <tr>
                    <td>{{++$i}}</td>
                    <td>{{$trs->id_bayar}}</td>
                    <td>{{$trs->id_customer}}</td>
                    <td>{{$trs->id_pemilik}}</td>
                    <td>{{$trs->tgl_pengembalian}}</td>
                    <td>{{$trs->id_pemilik}}</td>
                    <td>{{$trs->tgl_pengambilan}}</td>
                  
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

@endsection