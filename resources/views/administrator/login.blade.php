<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Administrator Login</title>

        <!-- Scripts -->
        <script src="{{ asset('js/script.min.js') }}" defer></script>
        
        

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

        <!-- Styles -->
		<link href="{{ asset('css/style.min.css') }}" rel="stylesheet">
		<link href="{{ asset('css/administrator.min.css') }}" rel="stylesheet">
    </head>
    <body>
        <div id="app">
            <div class="container login-page">
                <div class="row justify-content-center">
                    <div class="col-md-4">
                        <div class="contents">
                            <div class="login-header">
                                <h2>Administrator</h2>
                            </div>
            
                            <div class="login-body">
                                <form method="POST" action="{{ route('administrator.login.submit') }}" enctype="multipart/formdata">
                                    @csrf
									
									<div class="input-field">
		                                <i class="far fa-envelope icon-field"></i>
		                                <input id="email" type="email" placeholder="Masukan Email" class="input-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
		
		                                @error('email')
		                                    <span class="invalid-feedback" role="alert">
		                                        <strong>{{ $message }}</strong>
		                                    </span>
		                                @enderror
		                        	</div>
		
		                        <div class="input-field">
		                            <i class="fas fa-lock icon-field"></i>
		                              <input id="password" type="password" placeholder="Password Anda" class="input-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
		
		                                @error('password')
		                                    <span class="invalid-feedback" role="alert">
		                                        <strong>{{ $message }}</strong>
		                                    </span>
		                                @enderror
		
		                        </div>
            
                                    <div class="form-group row mb-0">
                                        <div class="col-md-12 text-center">
                                            <button type="submit" class="btn btn-login">
                                                {{ __('Login') }}
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
