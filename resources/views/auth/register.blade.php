@extends('layouts.app')

@section('content')
<html>
<head>
    <link rel="stylesheet" type="text/css" href="{{ url('css/daftar.css') }}">
   
</head>
<body>
   <section>
       <div class="imgBx">
              <img src="{{asset('images/sample.png')}}" alt="">
       </div>
       <div class="contentBx">
            <div class="formBx">
                    <h2>Register</h2>
                    <form  method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="inputBx">
                            <label for="name" class="col-md-4 col-form-label text-md">{{ __('Name') }}</label>

                            <input type="text" name="name" id="name" placeholder="Enter your nickname" class="form-control @error('name') is-invalid @enderror"  value="{{ old('name') }}" required autocomplete="name" autofocus>

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                        </div>


                        <div class="inputBx">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <input type="text" name="email" id="email" placeholder="Enter your email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                        </div>
                        <div class="inputBx">
                            <label for="password" class="col-md-4 col-form-label text-md">{{ __('Password') }}</label>
                            
                            <input  id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required 
                            placeholder="Enter your password" autocomplete="new-password">

                            @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                        </div>
                        <div class="inputBx">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md">{{ __('Confirm-Password') }}</label>
                            
                            <input id="password-confirm" type="password" 
                            placeholder="Enter your password confirm" class="form-control" name="password_confirmation" required autocomplete="new-password">

                        </div>
                       
                        <div class="inputBx">
                            <input type="submit" value="Register" name="">
                                
                        </div>

                        <div class="inputBx">
                            <input type="submit" value="Login With Google" name="">
                        </div>

                    </form>
            </div>
       </div>
   </section>
</body>
</html>
@endsection
