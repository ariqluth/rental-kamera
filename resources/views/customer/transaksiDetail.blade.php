
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
            <div class="callout callout-info">
              <h5><i class="fas fa-info"></i> Note:</h5>
              This page has been enhanced for printing. Click the print button at the bottom of the invoice to test.
            </div>


            <!-- Main content -->
            <div class="invoice p-3 mb-3" style="margin-top:50px">
              <!-- title row -->
              <div class="row">
                <div class="col-12">
                  <h4>
                    <i class="fas fa-globe"></i> Juragan Kamera
                    <small class="float-right">Date: 2/10/2014</small>
                  </h4>
                </div>
                <!-- /.col -->
              </div>
              <!-- info row -->
              <div class="row invoice-info" style="margin-top:100px">
              
                
                <div class="col-sm-10 invoice-col">
                  <b>Invoice #{{$detail->reference}}</b><br>
                  <br>
                  <b>Order ID:</b> 4F3S8J<br>
                  <b>Payment Due:</b> 2/22/2014<br>
                  <b>Account:</b> 968-34567
                </div>
                <!-- /.col -->
                <div class="col-sm-2 invoice-col" style="text-align:left">
                    @foreach($detail->instructions as $ins)
                  Transaksi Menggunakan Internet
                  <address>
                    <strong>Intruksi :</strong><br>
                    <span>
                        {{$ins->title}}
                    </span>
                    <div class="collapse-content">
                        <ul>
                            @foreach($ins->steps as $step)
                            <li>
                               {{$loop->iteration}}. {!! $step !!}
                            </li>
                            @endforeach
                        </ul>
                    </div>
                   @endforeach
                  
                </div>
              </div>
              <!-- /.row -->

             

              <div class="row">
                <!-- accepted payments column -->
                <div class="col-6">
                  <p class="lead">Transaksi Detail :</p>
                    <p>harga : <b> </b></p>

                  <p class="text-muted well well-sm shadow-none" style="margin-top: 10px;">
                    status : <b style="color: red"> {{$detail->status}}</b>
                  </p>
                </div>
                <!-- /.col -->
                <div class="col-6">
                  <p class="lead">Amount Due 2/22/2014</p>

                  <div class="table-responsive">
                    <table class="table">
                      
                      <tr>
                        <th>Harga:</th>
                        <td>Rp. {{number_format($detail->amount)}}</td>
                      </tr>
                    </table>
                  </div>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
 
              <!-- this row will not appear when printing -->
              <div class="row no-print">
                <br>
                <div class="col-12">
                  <a href="invoice-print.html" rel="noopener" target="_blank" class="btn btn-default"><i class="fas fa-print"></i> Kembali</a>
                 
                </div>
              </div>
            </div>
            <!-- /.invoice -->
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <br>
  <br>
@endsection