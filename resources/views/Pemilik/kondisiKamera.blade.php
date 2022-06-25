@extends('layouts.header.headerPemilik')
@section('dashboard')
   <!-- Content Wrapper. Contains page content -->
   <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Kondisi Kamera</h1>
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
               <a href="{{route('kondisi-kamera.create')}}" class="btn-lg btn-success float-sm-right">Tambahkan</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Nomer</th>
                    <th>Kondisi</th>
                    <th> Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php 
                      $i = 0
                    ?>
                    @foreach ($product as $alt)
                  <tr>
                    <td>{{++$i}}</td>
                    <td>{{$alt->kondisi_alat}}</td>
                    <td>{{$alt->sub_nama}}</td>>
                    <td><a href="{{route('kondisi-kamera.edit',$alt->id)}}"class="btn btn-warning">Update</a> 
                      <button type="submit" class="btn btn-sm btn-danger btn-flat show_confirm" data-toggle="tooltip" title='Delete'>Delete</button>
                    </td>
                    @csrf
                    @method('DELETE')
                  </tr>
                @endforeach
                  </tfoot>
                </table>
                {{-- {{ $alat->links('pagination::bootstrap-4')}} --}}
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

 {{-- konfirmasi delete  --}}

 <script type="text/javascript">
  $('.show_confirm').click(function(event) {
     var form =  $(this).closest("form");
    
     event.preventDefault();
     swal({
         title: `Are you sure you want to delete this record?`,
         text: "If you delete this, it will be gone forever.",
         icon: "warning",
         buttons: true,
         dangerMode: true,
     })
     .then((willDelete) => {
       if (willDelete) {
         form.submit();
       }
     });
 });
   </script>

@endsection