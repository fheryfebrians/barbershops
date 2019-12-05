@extends('layouts.app')
@section('title', '| Login')
@section('content')
	<div class="barber-main">
		<div class="barber-head">
		    <div class="container">
		        <div class="row justify-content-center">
		            <div class="form">
		                <div class="logo-modal">
		                <h4>login</h4>
		                </div>
		                    <form method="POST" action="{{ route('login') }}" enctype="multipart/form-data">
		                        @csrf
		
		                        <div class="input-field">
		                                <i class="far fa-envelope logo-field"></i>
		                                <input id="email" type="email" placeholder="Masukan Email" class="input-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
		
		                                @error('email')
		                                    <span class="invalid-feedback" role="alert">
		                                        <strong>{{ $message }}</strong>
		                                    </span>
		                                @enderror
		                        </div>
		
		                        <div class="input-field">
		                            <i class="fas fa-lock logo-field"></i>
		                              <input id="password" type="password" placeholder="Password Anda" class="input-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
		
		                                @error('password')
		                                    <span class="invalid-feedback" role="alert">
		                                        <strong>{{ $message }}</strong>
		                                    </span>
		                                @enderror
		
		                        </div>
		                            <div class="text-center mt-10">
		                                    <button type="submit" class="btn btn-login">
		                                        Login
		                                    </button>
		                            </div>
		                            <div class="text-center mb-0">
		                                @if (Route::has('password.request'))
		                                    <a class="btn btn-link" href="{{ route('password.request') }}">
		                                        {{ __('Forgot Your Password?') }}
		                                    </a>
		                                @endif
		                            </div>
		    
		                    </form>
		                </div>
		            </div>
		        </div>
		    </div>
		</div>
	</div>
@endsection