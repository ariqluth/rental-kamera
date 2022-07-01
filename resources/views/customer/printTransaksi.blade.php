<!DOCTYPE html>
<html>
<head>
    <title>Membuat Laporan PDF Dengan DOMPDF Laravel</title>
</head>
<body>
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
       
    </style>
    <center>
        <h5>Laporan Transaksi</h5>
        </center>
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
              <tr>
                <th>Nomer</th>
                <th>bukti pembayaran</th>
                <th>customer</th>
                <th>Pemilik</th>
                <th>tanggal</th>
              
              </tr>
              </thead>
             
              <tbody>
                @php
                $i = 0;
                @endphp
                @foreach ($pengambilan as $trs)
              <tr>
                <td>{{++$i}}</td>
                <td>{{$trs->id_bayar}}</td>
                <td>{{$trs->id_customer}}</td>
                <td>{{$trs->id_pemilik}}</td>
                <td>{{$trs->tgl_pengambilan}}</td>
              
              </tr>
        
              </tfoot>
              @endforeach
            </table>
          </div>
    </body>
    </html>