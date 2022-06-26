@extends('layouts.header.headerCustomer2')
@section('homepage')

<div class="container mt-20" style="margin-top:100px">
  <div class="row">
   
  </div>
</div>
<div class="container">
  <div class="row">
    <div class="col-md-6">
      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active"> <img class="d-block w-100" src="{{asset('storage/'.$alat->gambar)}}" alt="First slide"> </div>
          
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only">Next</span> </a> </div>
    </div>
    <div class="col-md-6">
      <div class="row">
        <h2>{{$alat->nama_alat}}</h2>
      </div>
      <div class="row">
        <h1><i class="fa fa-inr" aria-hidden="true"></i> Kategori : {{$alat->kategori}}</hh1>
       
        &nbsp; &nbsp;
        <h2 class="text-success">Rp. {{$alat->harga}}</h2>
      </div>
     
      <div class="row">
        <p>Speksifikasi : </p>
      <p>{{$alat->speksifikasi}}</p>
      </div>
      <div class="row mt-4">
        <h3 class="text-info"></h3>
        <p style="font-size: 20px"> &nbsp; Pemilik : {{$alat->users_id}}  </p>
      </div>
      <div class="row mt-4">
        <h4>Kondisi: &nbsp; &nbsp;</h4>
        <p>{{$alat->detailAlat_id}}</p>
      </div>
      <div class="row mt-4">
        <a href="{{route('detail.show',$alat->id)}}"class="btn-lg btn-primary text-light" style="height: 50 px; text-align: center;"> Pesan Sekarang</a>
      	{{-- <a class="btn btn-primary text-light">Pesan Sekarang</a>  --}}
      </div>
      
      
    </div>
  </div>
</div>


<div class="container">
   <div class="row mt-5">
   
   </div>
   
   <div class="row mt-5">
   	<div class="col-md-3">
   		<div class="card-productDetail">
  
   			<div class="card-title">
   				
   			</div> 
   			<div class="card-productDetail-text">
   			
   			</div>
   		</div>
   	</div>
   	
   	
   	
   
   </div>
   
</div>
@endsection