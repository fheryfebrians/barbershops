@extends('layouts.app')
@section('title', '| Terbaik')
@section('content')
		<div class="barber-main">
            <div class="barber-head">
                <div class="container">
                    <div class="content-center">
                        <img src="{{ asset('img/barber-logo.jpg') }}" alt="" class="img-circle text-center">
                    </div>
                    <h1>Barbershop Expert</h1>
					<p class="p-head">Barbershop dengan pelayanan terbaik di kota anda</p>
                    <div class="content-center">
                        <button class="btn-barber">
                            <a href="{{ url('booking') }}">Booking Sekarang</a>
                        </button>
                    </div>
                </div>
            </div>
        </div>
		
		<section class="mainlayout">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<img src="{{ asset('img/43613379_340611966703602_1713736250576422400_n.jpg') }}" class="img-wel">
				</div>
				<div class="col-md-6">
					<div class="main-wel">
						<h2>Selamat Datang di BarberShop</h2>
						<h5>BarberShop adalah tempat yang memiliki pelayanan terbaik di kota anda</h5>
						<p>Content untuk mengatakan pada publik tentang barbershop yang anda miliki disini, bebad mau dibuat apa saja yang penting tulisannya banyak seperti ini</p>
						<div class="mt-10 text-center">
							<button class="btn-wel">
								<a href="{{ url('about') }}">
									More About
								</a>
							</button>
						</div>
					</div>
				</div>
			</div>
			</div>
		</section>

        <section class="main-content">
            	<div class="container">
            		<h2>Mengapa Anda harus memilih kami?</h2>
	            	<p>
						Kami adalah barbershop terbaik dan terpercaya
						Kami mampu memberikan pelayanan terbaik untuk pelanggan setia kami
					</p>
					<h2>Testimoni</h2>
					<div class="row">
						<div class="col-md-4">
							<div class="testi-content">
								<div class="testi-image">
									<img src="{{ asset('img/img-testi.jpg') }}">
								</div>
								<div class="testi-main">
									<div class="t-desc">
										<div class="t-title">
											Judul Testimonial
										</div>
										Ini Adalah contoh testimonial untuk pengguna di barbershop ini
									</div>
									<div class="n-testi">
										~ Nama User ~
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="testi-content">
								<div class="testi-image">
									<img src="{{ asset('img/img-testi.jpg') }}">
								</div>
								<div class="testi-main">
									<div class="t-desc">
										<div class="t-title">
											Judul Testimonial
										</div>
										Ini Adalah contoh testimonial untuk pengguna di barbershop ini
									</div>
									<div class="n-testi">
										~ Nama User ~
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="testi-content">
								<div class="testi-image">
									<img src="{{ asset('img/img-testi.jpg') }}">
								</div>
								<div class="testi-main">
									<div class="t-desc">
										<div class="t-title">
											Judul Testimonial
										</div>
										Ini Adalah contoh testimonial untuk pengguna di barbershop ini
									</div>
									<div class="n-testi">
										~ Nama User ~
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section> 

			<section class="mainlayout">
				<div class="container">
					<h2 class="maintitle">Shop</h2>
					<div class="shopcontent">
						<div class="row">
							<div class="col-md-3">
								<div class="shopmain">
									<div class="imgshop">
										<a href="#">
											<img src="{{ asset('img/product5-300x300.jpg') }}">
										</a>
									</div>
									<div class="postshop">
										<div class="titleshop">
											<h2>
												<a href="#">Post Title</a>
											</h2>
										</div>
										<span class="priceshop">Rp. 20.000</span>
										<button class="btn-wel">
											<a href="#">BELI</a>
										</button>
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<div class="shopmain">
									<div class="imgshop">
										<a href="#">
											<img src="{{ asset('img/product5-300x300.jpg') }}">
										</a>
									</div>
									<div class="postshop">
										<div class="titleshop">
											<h2>
												<a href="#">Post Title</a>
											</h2>
										</div>
										<span class="priceshop">Rp. 20.000</span>
										<button class="btn-wel">
											<a href="#">BELI</a>
										</button>
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<div class="shopmain">
									<div class="imgshop">
										<a href="#">
											<img src="{{ asset('img/product5-300x300.jpg') }}">
										</a>
									</div>
									<div class="postshop">
										<div class="titleshop">
											<h2>
												<a href="#">Post Title</a>
											</h2>
										</div>
										<span class="priceshop">Rp. 20.000</span>
										<button class="btn-wel">
											<a href="#">BELI</a>
										</button>
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<div class="shopmain">
									<div class="imgshop">
										<a href="#">
											<img src="{{ asset('img/product5-300x300.jpg') }}">
										</a>
									</div>
									<div class="postshop">
										<div class="titleshop">
											<h2>
												<a href="#">Post Title</a>
											</h2>
										</div>
										<span class="priceshop">Rp. 20.000</span>
										<button class="btn-wel">
											<a href="#">BELI</a>
										</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
@endsection
			