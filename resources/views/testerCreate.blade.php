@extends('layouts.header.headerPemilik')
@section('dashboard')


     <form method="post" action="{{ route('tester.store') }}" id="myForm" enctype="multipart/form-data">

        @csrf

       <div class="container">
        <div class="form-group">
            <label for="Nama">Nama</label>
            <input type="Nama" name="nama" class="form-control" id="nama" ariadescribedby="Nama" >
        </div>


        <div class="form-group">
            <label for="Jurusan">Jurusan</label>
            <input type="Jurusan" name="email" class="form-control" id="email" ariadescribedby="Jurusan" >
        </div>
      
      
        <div class="form-group">
            <label for="Alamat">Alamat</label>
            <input type="text" name="password" class="form-control" id="password" ariadescribedby="Alamat">
        </div>
       

        <button type="submit" class="btn btn-primary" id="submit">Submit</button>

       </div>
       
    </form>

@endsection