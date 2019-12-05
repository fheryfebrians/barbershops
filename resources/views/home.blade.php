@extends('layouts.app')

@section('content')
<div class="barber-main">
	<div class="barber-head">
	    <div class="container">
	        <div class="content-center">
	            <img src="{{ asset('img/barber-logo.jpg') }}" alt="" class="img-circle text-center">
	        </div>
	        <h1>Barbershop Expert, Hallo User</h1>
	        <div class="content-center">
	            <button class="btn-barber">
	                <a href="#">Cek Lokasi</a>
	            </button>
	            <button class="btn-barber">
	                <a href="booking">Booking Sekarang</a>
	            </button>
	        </div>
	    </div>
	</div>
</div>
@endsection