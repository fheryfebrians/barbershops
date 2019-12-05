@extends('layouts.admin')
@section('title', '| Daftar Barang')
@section('content')
<section class="section-main2">
    <div class="main-2">
        <div class="container">
            <div class="row justify-content-center">
                <h1>Daftar Barang</h1>
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Foto</th>
                                    <th>Nama Barang</th>
                                    <th>Harga</th>
                                </tr>
                            </thead>

                             @foreach ($barang as $barang)    
                                    <tbody>
                                        <td>{{ $barang->id }}</td>
                                        <td>
                                                <img src="{{ asset('storage/images/'.$barang->foto) }}" alt="" class="img-w40">
                                        </td>
                                        <td>{{ $barang->nama }}</td>
                                        <td>{{ $barang->harga }}</td>
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