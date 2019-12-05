@extends('layouts.admin')
@section('title', '| Panggilan Baru')
@section('content')
<section class="section-main2">
    <div class="main-2">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-5">
                    <div class="form">
                        <div class="logo-modal">
                            <h4>Book now</h4>
                        </div>
                        <form method="post" action="{{ url('admin/newpanggilan') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="input-field">
                                <i class="fas fa-user logo-field"></i>
                                <input type="text" name="name" id="name" class="input-control" placeholder="Nama" required>
                            </div>
                            <div class="input-field">
                                <i class="fas fa-calendar-alt logo-field"></i>
                                <input type="date" class="input-control" name="tgl" required placeholder="Masukan tanggal">
                            </div>
                            <div class="input-field">
                                <i class="fas fa-time logo-field"></i>
                                <input type="time" name="jam" id="jam" class="input-control" required placeholder="Jam Kedatangan">
                            </div>
                            <div class="input-field">
                                <i class="fas fa-male logo-field"></i>
                                <input type="text" name="paket" id="paket" required class="input-control" placeholder="Nama Paket">
                            </div>
                            <div class="input-field">
                                <i class="fas fa-male logo-field"></i>
                                <select name="staff" id="staff" required>
                                    <option value="0">--Pilih Capster--</option>
                                    <option value="capster1">Nama Capster 1</option>
                                    <option value="capster2">Nama Capster 2</option>
                                    <option value="capster3">Nama Capster 3</option>
                                    <option value="capster4">Nama Capster 4</option>
                                    <option value="capster5">Nama Capster 5</option>
                                    <option value="capster6">Nama Capster 6</option>
                                </select>
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
</section>
@endsection