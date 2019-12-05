<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>

        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Print</title>
        
        <style>
        .main-pdf{
            position: relative;
            margin: 0;
            padding: 0;
        }
        .header-main{
            padding-top: 0px;
            padding-bottom: 0px;
            margin-top: 20px;
        }
        .text-center{
            text-align: center !important;
        }
        .text-hr{
            clear: both;
            position: relative;
            height: auto;
            outline: none;
            box-shadow: inset 0 0 0 1px rgba(128,128,128,0);
            transition: box-shadow .2s ease-in-out;
            margin: 12px 0;
        }
        .content-hr hr{
            border: none;
            color: #bbb;
            background-color: #bbb;
            height: 2px;
            box-sizing: content-box;
            margin: 0;
        }
        .content-hr p{
            word-wrap: break-word;
            text-align: left;
            color: #333;
            line-height: 1;
            margin: 0;
            font-size: 20px;
            font-family:Georgia, 'Times New Roman', Times, serif;
        }
        .img-circle{
            border-radius: 50% !important;
            max-width: 20%;
            opacity: 1;
            vertical-align: middle;
            height: auto;
            width: 60px;
            height: 60px;
        }
        table{
            border:1px solid #333;
            border-collapse:collapse;
            margin:0 auto;
           
        }
        td, tr, th{
            padding:12px;
            border:1px solid #333;
            width:185px;
        }
        th{
            background-color: #f0f0f0;
        }
        h4, p{
            margin:0px;
        }
        </style>
        
    </head>
    <body>
        <div class="main-pdf">
                <div class="header-main text-center">
                        <div class="text-hr">
                            <div class="content-hr">
                                <img src="{{ asset('img/barber-logo.jpg') }}" alt="" class="img-circle">
                                <p>Jl. Jalan no kec. kecamatan</p>
                                <p>0888937646</p>
                            </div>
                        </div>
                        {{-- <div class="text-hr">
                            <div class="content-hr">
                                <hr>
                            </div>
                        </div> --}}
                        <table>
                            <thead>
                                <tr>
                                    <th colspan="3">Pembayaran <strong>#{{ $bayar->id }}</strong></th>
                                    <th>{{ $bayar->created_at->format('D, d M Y') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>Nama</th>
                                    <th>Nomor</th>
                                    <th>Email</th>
                                    <th>Alamat</th>
                                </tr>
                                <tr>
                                    <td>{{ $bayar->booking->user->name }}</td>
                                    <td>{{ $bayar->booking->user->nomor }}</td>
                                    <td>{{ $bayar->booking->user->email }}</td>
                                    <td>{{ $bayar->booking->user->alamat }}</td>
                                </tr>
                                <tr>
                                    <th>Paket</th>
                                    <th>Model</th>
                                    <th>Capster</th>
                                    <th>Tgl Transaksi</th>
                                </tr>
                                <tr>
                                    <td>{{ $bayar->booking->paket }}</td>
                                    <td>{{ $bayar->booking->model }}</td>
                                    <td>{{ $bayar->booking->capster }}</td>
                                    <td>{{ $bayar->tgl_transaksi }}</td>
                                </tr>
                                <tr>
                                    <th colspan="3">Harga</th>
                                    <td>Rp {{ $bayar->booking->harga }}</td>
                                </tr>
                            </tbody>
                        </table>
                            {{-- <div class="text-hr">
                                <div class="content-hr">
                                    <p>Harga: {{$bayar->harga}}</p>
                                    <p>Paket : {{$bayar->booking->paket }}</p>
                                    <p>Model: {{$bayar->booking->model}}</p>
                                    <p>Nama: {{$bayar->booking->user->name}}</p>
                                    <p>Email: {{$bayar->booking->user->email}}</p>
                                    <p>Staff: {{$bayar->booking->capster }}</p>
                                </div>
                            </div> --}}
                            <div class="text-hr">
                                    <div class="content-hr">
                                        <img src="{{ asset('img/barber-logo.jpg') }}" alt="" class="img-circle">
                                    </div>
                                </div>
                    </div>
        </div>
        
    </body>
</html>