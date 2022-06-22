<!DOCTYPE html><html lang="en">
<head>
<link rel="shortcut icon" type="image/x-icon" href="images/icon.png">
<title>Juragan Kamera - Rental Kamera Termurah di malang</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
 <!-- Favicon-->
 <link rel="icon" type="image/x-icon" href="{{asset('assets/favicon.ico')}}" />
   <!-- Font Awesome -->
   <link rel="stylesheet" href="{{asset('assets/plugins2/fontawesome-free/css/all.min.css')}}">
   <!-- Ionicons -->
   <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
   
 <!-- Bootstrap icons-->
 <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>


<!--  -->

</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
<div class="container-fluid">
	<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		</button><a class="navbar-brand" href="#">Juragan Kamera</a>
	</div>
	<div class="collapse navbar-collapse" id="myNavbar">
		<ul class="nav navbar-nav">
			<li class="active">
				<a href="{{route('home')}}"><span class="glyphicon glyphicon-home">Home</span></a>
			</li>
			<li>
				<a href="{{route('about')}}">About</a>
			</li>
			<li>
				<a href="{{route('contact')}}">Contact</a>
			</li>
			<li class="dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown" href="#">Category <span class="caret"></span></a>
				<ul class="dropdown-menu">
					<li>
						<a href="{{route('categoryDLSR')}}">DSLR</a>
					</li>
					<li>
						<a href="{{route('categoryMirrorless')}}">Mirrorless</a>
					</li>
					<li>
						<a href="{{route('categoryActionCamera')}}">Action Camera</a>
					</li>
					<li>
						<a href="{{route('categoryVideoSupport')}}">Video Support</a>
					</li>
				
				</ul>
			</li>
			<li class="dropdown" style="padding-left: 800px">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                  <i class="fas fa-user" style="width:10px; height: 10px;"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          
                  <div class="dropdown-divider"></div>
                  <a href="{{Route('login')}}" class="dropdown-item">
                    <i class="fas fa-envelope mr-2"></i> login
                  </a>
                
                  <div class="dropdown-divider"></div>
                  <a href="{{Route('register')}}" class="dropdown-item">
                    <i class="fas fa-file mr-2"></i> Register
                   
                  </a>
				</div>
                 
              </li>
		</ul>
		<ul class="nav navbar-nav navbar-right">
			<li>
				<span class="glyphicon glyphicon-user"></span>
			</li>
		</ul>
	</div>
</div>
</nav>

@yield('homepage')
@yield('about')
@yield('contact')
@yield('detailproduct')


<footer class="container-fluid text-center">
    <p>
        Copyright © 2022 Juragan Kamera All Right Reserved | Support by <a href="#" target="_blank">Poltek Suhat</a>
    </p>
    </footer>
    </body>
    </html>