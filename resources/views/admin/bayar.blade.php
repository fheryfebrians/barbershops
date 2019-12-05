@extends('layouts.admin')
@section('title', '| Bayar')
@section('content')
<section class="section-main2">
    <div class="main-2">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <div class="form">
                        <div class="logo-modal">
                            <h4>Pembayaran</h4>
                        </div>
                        <form method="post" action="{{ url('admin/bayar/'.$booking->id) }}" enctype="multipart/form-data">
                            @csrf
                            
                            <div class="input-field">
                                <i class="fas fa-user logo-field"></i>
                                <p class="p-bayar">
                                    {{ $booking->user->name }}
                                </p>
                            </div>
                            <div class="input-field">
                                <i class="fas fa-mobile-alt logo-field"></i>
                                <p class="p-bayar">
                                    {{ $booking->user->nomor }}
                                </p>
                            </div>
                            <div class="input-field">
                                <i class="fab fa-get-pocket logo-field"></i>
                                <p class="p-bayar">
                                    {{ $booking->paket }}
                                </p>
                            </div>
                            <div class="input-field">
                                <i class="fas fa-cut logo-field"></i>
                                <p class="p-bayar">
                                    {{ $booking->model }}
                                </p>
                            </div>
                            <div class="input-field">
                                <i class="fas fa-male logo-field"></i>
                                <p class="p-bayar">
                                    {{ $booking->capster }}
                                </p>
                            </div>
                            <div class="input-field">
                                <i class="fas fa-dollar logo-field"></i>
                                <p class="p-bayar">
                                    {{ $booking->harga }}
                                </p>
                            </div>
                            <div class="input-field">
                                <i class="fas fa-calendar-alt logo-field"></i>
                                <input type="date" class="input-control" name="tgl_transaksi" id="tgl_transaksi" required>
                            </div>
                            
                            <div class="text-center mt-10">
                                <button type="submit" class="btn btn-login">
                                    Submit
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