@extends('layouts.app')
@section('title', '| Menu Booking')
@section('content')
<div class="barber-main">
    <div class="barber-head">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="{{ asset('img/WhatsApp Image 2019-11-04 at 08.29.03.jpeg') }}" alt="Daftar Paket" class="img-barber">
                </div>
                <div class="col-md-6">
                    <div class="form">
                        <div class="logo-modal">
                            <h4>Book now</h4>
                        </div>
                        <form method="post" action="{{ url('booking') }}">
                            @csrf
                            
                            <div class="input-field">
                                <i class="fas fa-male logo-field"></i>
                                <input type="number" name="dewasa" id="dewasa" class="input-control" placeholder="Booking Dewasa">
                            </div>
                            <div class="input-field">
                                <i class="fas fa-kid logo-field"></i>
                                <input type="number" name="anak" id="anak" class="input-control" placeholder="Booking Anak">
                            </div>
                            <div class="input-field">
                                <i class="fab fa-get-pocket logo-field"></i>
                                <select id="paket" name="paket" required>
                                    <option value="0">--Pilih Paket--</option>
                                    <option value="cukuranak">Cukur Anak</option>
                                    <option value="paket50k">Paket 50k</option>
                                    <option value="paket75k">Paket 75k</option>
                                    <option value="paket85k">Paket 85k</option>
                                    <option value="paket80k">Paket 80k</option>
                                    <option value="paket95k">Paket 95k</option>
                                    <option value="paket115k">Paket 115k</option>
                                    <option value="paket285k">Paket 285k</option>
                                    <option value="paket125k">Paket 125k</option>
                                    <option value="paket300k">Paket 300k</option>
                                    <option value="paket125">Paket 125</option>
                                </select>
                            </div>
                            <div class="input-field">
                                <i class="fas fa-cut logo-field"></i>
                                <select name="model" id="model" required>
                                    <option value="0">--Pilih Model--</option>
                                    <option value="undercut">Undercut</option>
                                    <option value="classy">Classy Cut</option>
                                    <option value="klimis">Klimis Pomade</option>
                                    <option value="slickback">Slickback Cut</option>
                                    <option value="mohawk">Mohawk</option>
                                    <option value="pompadour">Pompadour</option>
                                    <option value="lowfase">Low Fase</option>
                                    <option value="midfase">Mid Fade</option>
                                    <option value="highfade">High Fade</option>
                                    <option value="skinfade">Skin Fade</option>
                                    <option value="spiky">Spiky</option>
                                    <option value="quiff">Quiff</option>
                                    <option value="frenchcrop">French Crop</option>
                                </select>
                            </div>
                            <div class="input-field">
                                <i class="fas fa-male logo-field"></i>
                                <select name="capster" id="capster" required>
                                    <option value="0">--Pilih Capster--</option>
                                    <option value="capster1">Nama Capster 1</option>
                                    <option value="capster2">Nama Capster 2</option>
                                    <option value="capster3">Nama Capster 3</option>
                                    <option value="capster4">Nama Capster 4</option>
                                    <option value="capster5">Nama Capster 5</option>
                                    <option value="capster6">Nama Capster 6</option>
                                </select>
                            </div>
                            <div class="input-field">
                                <i class="fas fa-calendar-alt logo-field"></i>
                                <input type="date" class="input-control" name="tgl_booking" required placeholder="Masukan tanggal">
                            </div>
                            <div class="text-center mt-10">
                                <button type="submit" class="btn btn-login">
                                    Book Now
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection