@extends('layouts.app')
@section('title', '| Register')
@section('content')
	<div class="barber-main">
        <div class="barber-head">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="form">
                        <div class="logo-modal">
                            <h4>Register</h4>
                        </div>
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="input-field">
                                    <i class="fas fa-user logo-field"></i>
                                    <input id="name" type="text" placeholder="Masukan Nama" class="input-control  @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>

                            <div class="input-field">
                                    <i class="fas fa-lock logo-field"></i>
                                    <input id="password" placeholder="Password Anda" type="password" class="input-control  @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>

                            <div class="input-field">
                                    <i class="fas fa-lock logo-field"></i>
                                    <input id="password-confirm" placeholder="Ulangi Password" type="password" class="input-control " name="password_confirmation" required autocomplete="new-password">
                            </div>
                            <div class="input-field">
                                    <i class="far fa-envelope logo-field"></i>
                                    <input id="email" type="email" placeholder="Masukan Email" class="input-control  @error('email') is-invalid @enderror" name="email" value="{{ old('alamat') }}" required autocomplete="alamat">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>
                            <div class="input-field">
                                    <i class="fas fa-mobile-alt logo-field"></i>
                                    <input id="nomor" type="text" placeholder="No. Handphone" class="input-control  @error('nomor') is-invalid @enderror" name="nomor" value="{{ old('nomor') }}" required autocomplete="nomor">

                                    @error('nomor')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>
                            <div class="input-field">
                                    <i class="fas fa-address-card logo-field"></i>
                                    <input id="alamat" type="text" placeholder="Alamat anda" class="input-control  @error('alamat') is-invalid @enderror" name="alamat" value="{{ old('alamat') }}" required autocomplete="alamat">

                                    @error('alamat')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>

                            <div class="text-center mt-10">
                                    <button type="submit" class="btn btn-login">
                                        Register
                                    </button>
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection