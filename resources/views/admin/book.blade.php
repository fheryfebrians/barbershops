@extends('layouts.admin')
@section('title', '| Daftar Booking')
@section('content')
<section class="section-main2">
    <div class="main-2">
        <div class="container">
            <h1>Daftar Booking</h1>
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>Nomor Handphone</th>
                                    <th>Email</th>
                                    <th>Paket</th>
                                    <th>Model</th>
                                    <th>Staff</th>
                                    <th>Tanggal Booking</th>
                                    <th>PDF</th>
                                </tr>
                            </thead>

                             @foreach ($booking as $booking)    
                                    <tbody>
                                        <td>{{ $booking->user->name }}</td>
                                        <td>{{ $booking->user->nomor }}</td>
                                        <td>{{ $booking->user->email }}</td>
                                        <td>{{ $booking->paket }}</td>
                                        <td>{{ $booking->model }}</td>
                                        <td>{{ $booking->capster }}</td>
                                        <td>{{ $booking->tgl_booking }}</td>
                                        <td>    
                                            <a href="{{ url('admin/print', $booking->id) }}" target="_blank">Print</a>    
                                            <a href="{{ url('admin/bayar',  $booking->id) }}">Bayar</a>
                                        </td>
                                    </tbody>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection