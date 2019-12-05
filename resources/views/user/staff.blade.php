@extends('layouts.app')
@section('title', '| Our Staff')
@section('content')
<div class="barber-main">
	<div class="barber-head">
	    <div class="container">
			<h2 class="pagetitle">Our Staff</h2>
	       <div class="row">
			   @foreach ($capster as $capster)
			   		@foreach($karyawan as $karyawan)
					<div class="col-md-3">
							<div class="capster">
								<div class="head-caps">
									<div class="img-caps">
										<img src="{{ asset('storage/images/'.$capster->foto) }}" alt="">
										<img src="{{ asset('storage/images/'.$karyawan->foto) }}" alt="">
									</div>
								</div>
								<div class="main-caps">
									<div class="name-caps">
										~ {{ $capster->nama }} {{ $karyawan->nama }} ~
									</div>
									<div class="umur-caps">
										{{ $karyawan->jabatan }}
									</div>
									
								</div>
							</div>
						</div>
					@endforeach
	           @endforeach
	       </div>
	    </div>
	</div>
</div>
@endsection