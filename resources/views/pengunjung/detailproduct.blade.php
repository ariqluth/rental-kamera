@extends('layouts.header.headerCategory')
@section('category')

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
        <h3 class="text-info"><i class="fa fa-map-marker" aria-hidden="true"></i></h3>
        <p style="font-size: 20px"> &nbsp; Pemilik : {{$alat->users_id}}  </p>
      </div>
      <div class="row mt-4">
        <h4>Kondisi: &nbsp; &nbsp;</h4>
        <p>{{$alat->detailAlat_id}}</p>
      </div>
      <div class="row mt-4">
      	<h4>Sewa : &nbsp; &nbsp; </h4>
        <div class="col" style="display:flex; flex-direction: row">
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