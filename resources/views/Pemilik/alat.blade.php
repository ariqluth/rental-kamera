@extends('layouts.header.headerPemilik')
@section('dashboard')
   <!-- Content Wrapper. Contains page content -->
   <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Rental Disewakan Kamera</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{Route('pemilik')}}">Home</a></li>
              <li class="breadcrumb-item active">disewakan alat</li>
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
               <a href="{{route('alat.create')}}" class="btn-lg btn-success float-sm-right">Tambahkan</a>
               <a href="{{route('kondisi')}}" class="btn-lg btn-secondary float-right" style="margin-right:20px">Tambahkan Kondisi Kamera</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Nomer</th>
                    <th>Kamera</th>
                    <th>Speksifikasi</th>
                    <th>Harga</th>
                    <th>Stok</th>
                    <th>Kondisi</th>
                    <th>Pemilik kamera</th>
                    <th>Gambar</th>
                    <th> Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach ($alat as $alt)
                  <tr>

                    <td>no++</td>
                    <td>{{$alt->nama_alat}}</td>
                    <td>{{$alt->speksifikasi}}</td>
                    <td>{{$alt->harga}}</td>
                    <td>{{$alt->stok}}</td>
                    <td></td>
                    <td>{{$alt->users_id}}</td>
                    <td><img src="{{asset('storage/public/images/'.$alt->image)}}"  width="100px" height="100px"></td>
                    <td><a href="#" class="btn btn-primary">Detail</a> <a href="#" class="btn btn-danger">Hapus</a> <a href="#"class="btn btn-warning">Update</a> </td>
                    @csrf
                    @method('DELETE')
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
  <!-- /.content-wrapper -->


  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->


@endsection