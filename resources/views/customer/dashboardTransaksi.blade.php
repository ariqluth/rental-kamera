@extends('layouts.header.headerCustomer')
@section('dashboard')

 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Transaksi</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Transaksi</a></li>
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
              <a href="{{Route('home')}}" class="btn-lg btn-success float-sm-right">Sewa Kamera Lagi</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Nomer</th>
                    <th>Kamera</th>
                    <th>Pemilik</th>
                    <th>Harga</th>
                    <th>Tanggal</th>
                    <th>bank_tujuan</th>
                    <th>merchant_ref</th>
                    <th>reference</th>
                    <th>status</th>
           
    
                  </tr>
                  </thead>
                  <tbody>
                    @php $i = 0; @endphp
                    @foreach ($transaksi as $trs)
                  <tr>
                    <td>{{++$i}}</td>
                    <td>{{$trs->alat->nama_alat}}</td>
                    <td>{{$trs->alat->users_id}}</td>
                    <td>{{number_format($trs->alat->harga)}}</td>
                    <td>{{$trs->alat->created_at}}</td>
                    <td>{{$trs->bank_tujuan}}</td>
                    <td>{{$trs->merchant_ref}}</td>
                    <td>{{$trs->reference}}</td>
                    <td>
                      @if($trs->status == 'paid')
                      <span class="bg-green-100 text-green-800" style="background-color:green; text-weight:bold ">
                        {{$trs->status}}
                      </span>
                      @else
                      <span class="bg-red-100 text-red-800" style="background-color:red; text-weight:bold ">
                        {{$trs->status}}
                      </span>
                      @endif
                    </td>
                   
                   
                  </tr>
                @endforeach
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
@endsection