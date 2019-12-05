@extends('administrator.master')
@section('title', '| Daftar Transaksi')
@section('content')
<section class="section-main2">
    <div class="main-2">
        <div class="container">
            <h1>Daftar Transaksi</h1>
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Tanggal Transaksi</th>
                                    <th>Nama Pelanggan</th>
                                    <th>Paket</th>
                                    <th>Capster</th>
                                    <th>Harga</th>
                                </tr>
                            </thead>
                                @foreach ($bayar as $bayar)
                                    <tbody>
                                        <td>{{ $bayar->id }}</td>
                                        <td>{{ $bayar->tgl_transaksi }}</td>
                                        <td>{{ $bayar->booking->user->name }}</td>
                                        <td>{{ $bayar->booking->paket }}</td>
                                        <td>{{ $bayar->booking->capster }}</td>
                                        <td>{{ $bayar->booking->harga }}</td>
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