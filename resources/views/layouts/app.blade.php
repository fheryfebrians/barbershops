<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>BarberShop @yield('title')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/script.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>

    <script type="text/javascript" defer="">
    	$(window).on('scroll', function(){
		    if($(window).scrollTop()){
		        $('.navbar-barber').addClass('over');
		        $('#navbarSupportedContent').addClass('over2');
		    }else{
		        $('.navbar-barber').removeClass('over');    
		        $('#navbarSupportedContent').removeClass('over2');
		    } 
		});
    </script>
    

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/style.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-barber">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{ asset('img/barber-logo.jpg') }}" alt="" class="img-logo text-center">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a href="{{ url('about') }}" class="nav-link">ABOUT</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ url('service') }}" class="nav-link">SERVICES</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ url('staff') }}" class="nav-link">STAFF</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ url('galeri') }}" class="nav-link">GALLERY</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ url('contact') }}" class="nav-link">CONTACT</a>
                            </li>
                        <!-- Authentication Links -->
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">LOGIN</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">REGISTER</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <div class="barber-home">
            @yield('content')
            @include('sweet::alert')
        </div>

		<div class="promo-group">
					<h2>
						get 20% on your first online appointment
						<button class="btn-promo">
							<a href="{{ url('booking') }}">Book an appoitment</a>
						</button>
					</h2>
        </div>
        <div class="footer">
        	<div class="footer-lokasi">
        		<ul class="footer-bar row">
        			<li class="col-md-4">
        				<i class="fas fa-map-marker-alt footer-icon"></i><br>
        				<span>Jl. Alamat Anda</span>
        			</li>
        			<li class="col-md-4">
        				<i class="fas fa-mobile-alt footer-icon"></i><br>
        				<span>Contact</span><br>
        				<span>09993883744</span>
        			</li>
        			<li class="col-md-4">
        				<i class="far fa-clock footer-icon"></i><br>
        				<span>Senin - Sabtu: 11.00 AM - 10.00 PM</span><br>
        				<span>Minggu : TUTUP</span>
        			</li>
        		</ul>
				<ul class="row">
					<li class="col-md-4">
						<span>2019 All Right Reserved</span><br>
						<span>Barbershops</span>
					</li>
					<li class="col-md-4" style="padding-top: 10px !important;">
						<img src="{{ asset('img/barber-logo.jpg') }}" alt="" class="img-logo text-center"><br>
						<h2 class="footer-text">BarberShops</h2>
					</li>
					<li class="col-md-4">
						<span class="social">
							<a href="https://facebook.com" target="_blank">
								<i class="fab fa-facebook-square icon-social"></i>
							</a>
						</span> 
						<span class="social">
							<a href="https://facebook.com" target="_blank">
								<i class="fab fa-twitter-square icon-social"></i>
							</a>
						</span> 
						<span class="social">
							<a href="https://facebook.com" target="_blank">
								<i class="fab fa-instagram icon-social"></i>
							</a>
						</span> 
					</li>
				</ul>	
        	</div>
        </div>
        
    </div>
    
</body>
</html>