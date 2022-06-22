@extends('layouts.header.headerPemilik')
@section('dashboard')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Tambahkan Alat Rental Kamera</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Tambahkan Alat Rental Kamera</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <form method="post" action="{{ route('alat.store') }}" id="myForm" enctype="multipart/form-data">
      @csrf
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">General</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
              <div class="form-group">
                <label for="inputName">Nama kamera</label>
                <input type="text" id="nama_alat" class="form-control" name="nama_alat">
              </div>
              <div class="form-group">
                <label for="inputDescription">Speksifikasi</label>
                <textarea id="speksifikasi" class="form-control" rows="4" name="speksifikasi" ></textarea>
              </div>
              <div class="form-group">
                <label for="inputStatus">kategori</label>
                <select id="kategori" class="form-control custom-select" name="kategori">
                  <option selected >Select one</option>
                  <option>DSLR</option>
                  <option>Mirrorless</option>
                  <option>Action Camera</option>
                  <option>Video Support</option>
                </select>
              </div>
              <div class="form-group">
                <label for="image">Foto</label>
                <input type="file" name="image" class="form-control" id="image"  >
            </div>
              <div class="form-group">
                <label for="inputClientCompany">harga</label>
                <input type="text" id="harga" name="harga" class="form-control">
              </div>
              <div class="form-group">
                <label for="inputProjectLeader">stok</label>
                <input type="text" id="stok" name="stok" class="form-control">
              </div>
              {{-- <div class="form-group" >
                <label for="inputProjectLeader">Pemilik</label>
                <input type="text" id="pemilik" name="pemilik" class="form-control" value=" " disabled>
              </div> --}}

              <div class="form-group">
                <label for="Kelas">Pemilik</label>
                <select class="custom-select" id="pemilik" name="pemilik">
                    @foreach($pemilik as $plk)
                    <option value="{{ $plk->id }}">{{ $plk->name }}</option>
                    @endforeach
                </select>
            </div>
              {{-- <div class="form-group">
                <label for="inputProjectLeader">Pemilik</label>
                <input type="text" id="pemilik" name="pemilik" class="form-control">
              </div>
            </div> --}}
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
       
      </div>
      <div class="row">
        <div class="col-12">
          <a href="{{Route('alat.index')}}" class="btn btn-secondary">Cancel</a>
          <button type="submit" class="btn btn-primary" id="submit">Submit</button>
        </div>
      </div>
    </section>
    </form>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

@endsection