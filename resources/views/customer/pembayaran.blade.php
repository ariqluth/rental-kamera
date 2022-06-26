@extends('layouts.header.headerCustomer2')
@section('homepage')


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Invoice</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Invoice</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            

            <!-- Main content -->
            <div class="invoice p-3 mb-3">
              <!-- title row -->
              <div class="row">
                <div class="col-12">
                  <h4>
                    <i class="fas fa-globe"></i> Juragan Kamera.
                    <small class="float-right">Tanggal : {{time()}}</small>
                  </h4>
                </div>
                <!-- /.col -->
              </div>
              <!-- info row -->
              <div class="row invoice-info">
                
                <!-- /.col -->
              </div>
              <!-- /.row -->

              <!-- Table row -->
              <div class="row">
                <div class="col-12 table-responsive">
   
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

              <div class="row">
                <!-- accepted payments column -->
                <div class="col-6" style="margin-top:350px">
                  <p class="lead">Payment Methods:</p>
                  <div class="col-12 table-responsive" style="display: flex; flex-direction:row">
                    @foreach ($channels as $chl)
                    {{-- buat status jika payment yang aktif di merchant --}}
                    @if ($chl->active)
                    {{-- untuk menuju payment --}}
                    <form action="{{route('transaksi.store')}}" method="post" enctype="multipart/form">
                      @csrf
                      <input type="hidden" name="id" value="{{$alat->id}}">
                      <input type="hidden" name="method" value="{{$chl->code}}">
                      <button type="submit" class="bg-white items-center">
                        <div>

                          <img src="{{asset('storage/bank/' .$chl->code.'.png')}} " width="100" height="50" >
                          <p class="mt-3 text-xs text-grey-600">Pay With {{$chl->name}}</p>
                          
                        </div>
                      </button>
                      {{-- memberikan nama --}}
                    </form>
                    @endif
                    @endforeach
                  </div>
                  <p class="text-muted well well-sm shadow-none" style="margin-top: 10px;">
                    Pilih methode pembayaran rental juragan kamera 
                  </p>
                </div>
                <!-- /.col -->
                <div class="col-6">
                  <img class="card-img-top" src="{{asset('storage/'.$alat->gambar)}}" alt="..." width="200" height="800" />
                  <p class="lead">Keterangan Sewa</p>

                  <div class="table-responsive">
                    <table class="table">
                      
                      <tr>
                        <th>Nama Kamera:</th>
                        <td>{{$alat->nama_alat}}</td>
                      </tr>
                      <tr>
                        <th>Kategori:</th>
                        <td>{{$alat->kategori}}</td>
                      </tr>
                      <tr>
                        <th>Pemilik Sewa:</th>
                        <td>{{$alat->users_id}}</td>
                      </tr>
                      <tr>
                        <th>Total:</th>
                        <td>{{$alat->harga}}</td>
                      </tr>
                    </table>
                  </div>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

              <!-- this row will not appear when printing -->
              
            </div>
            <!-- /.invoice -->
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>

@endsection