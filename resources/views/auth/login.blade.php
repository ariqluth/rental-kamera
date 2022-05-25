@extends('layouts.app')

@section('content')
<html>
<head>
    <link rel="stylesheet" type="text/css" href="{{ url('css/login.css') }}">
   
</head>
<body>
   <section>
       <div class="imgBx">
              <img src="{{asset('images/sample.png')}}" alt="">
       </div>
       <div class="contentBx">
            <div class="formBx">
                    <h2>Login</h2>
                    <form  method="POST" action="{{ route('login') }}">
                        @csrf
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
                            
                            <input type="password" name="password" id="password" placeholder="Enter your password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                            @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                        </div>
                        <div class="remember">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                            <label value="Login" name="" class="form-check-label">
                                {{ __('Remember Me') }}
                            </label>
                        </div>
                        <div class="inputBx">
                            <input type="submit" value="Login" name="">
                           
                        </div>

                        <div class="inputBx">
                            <input type="submit" value="Login With Google" name="">
                        </div>

                        <div class="inputBx">
                            <p>Don't have an account ? <a href="#">Sign Up</a> </p>
                        </div>
                    </form>
            </div>
       </div>
   </section>
</body>
</html>

@endsection
