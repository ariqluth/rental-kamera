@extends('layouts.header.headerCustomer')
@section('dashboard')
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Dashboard</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">

    <!-- Default box -->
    <div class="card">
      <div class="card-header">
    

        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
            <i class="fas fa-minus"></i>
          </button>
          <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
            <i class="fas fa-times"></i>
          </button>
        </div>
      </div>
      <div class="card-body">
        <div class="row">
          <div class="col-12 col-md-12 col-lg-8 order-2 order-md-1">
            <div class="row">
              <div class="row">
                <div class="col-lg-3 col-6">
                  <!-- small box -->
                  <div class="small-box bg-info">
                    <div class="inner">
                      <h3>150</h3>
      
                      <p>sudah melakukan Rental</p>
                    </div>
                    <div class="icon">
                      <i class="ion ion-bag"></i>
                    </div>
                    
                  </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                  <!-- small box -->
                  <div class="small-box bg-success">
                    <div class="inner">
                      <h3>53<sup style="font-size: 20px">%</sup></h3>
      
                      <p>Data pengambilan table</p>
                    </div>
                    <div class="icon">
                      <i class="ion ion-stats-bars"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                  </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                  <!-- small box -->
                  <div class="small-box bg-warning">
                    <div class="inner">
                      <h3>44</h3>
      
                      <p>Data pengembilan table</p>
                    </div>
                    <div class="icon">
                    <i class="ion ion-stats-bars"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                  </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                  <!-- small box -->
                  <div class="small-box bg-danger">
                    <div class="inner">
                      <h3>65</h3>
      
                      <p>Transasksi Table</p>
                    </div>
                    <div class="icon">
                      <i class="ion ion-pie-graph"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                  </div>
                  <hr>
                  
                </div>
                <!-- ./col -->
              </div>
              <!-- tables lihat kamera -->
              <div class="container-fluid">
        <div class="row">
          <h2>Rental Kamera </h2>
          <div class="col-12">
            <div class="card">
              <div class="card-header">
              
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                 @php $i = 0;
                 @endphp
                  @foreach ($transaksi as $trs)
                  <thead>
                  <tr>
                    <th>Nomer</th>
                    <th>Kamera</th>
                    <th>Speksifikasi</th>
                    <th>Pemilik kamera</th>
             
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>{{++$i}}</td>
                    <td>
                      {{$trs->reference}}
                    </td>
                    <td>{{$trs->status}}</td>
                    <td> </td>
                   
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
            </div>
           {{--  --}}
          </div>
          <div class="col-12 col-md-12 col-lg-4 order-1 order-md-2">
            <h5 class="mt-5 text-muted">Data Riwayat Penyewaan</h5>
            <ul class="list-unstyled">
              <li>
              <div class="card bg-dark text-white">
            <img src="{{asset('images/2.png')}}" class="card-img" alt="...">
            <div class="card-img-overlay">
              <h5 class="card-title" style="color: Blue; font-size:25px; font-weight: bold; ">judul kamera</h5>
              <p class="card-text">waktu pengambilan : 12 juni 2022</p>
              <p class="card-text">Waktu Pengembalian : <small> 2 hari</small></p>
            </div>
          </div>
              </li>
              <li>
            
              </li>
              <li>
              
              </li>
              <li>
                
              </li>
              <li>
              
              </li>
            </ul>
            
          </div>
        </div>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->

  </section>
  <!-- /.content -->
</div>
 
@endsection