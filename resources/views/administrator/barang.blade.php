@extends('administrator.master')
@section('title', '| Daftar Barang')
@section('content')
    <section class="section-main2">
        <div class="main-2">
            <div class="admin-head">
                <h1>Daftar Barang</h1>
                <div class="container">
                    <div class="row">
                        @foreach ($barang as $barang)
                            <div class="col-md-3">
                                <div class="shopmain">
                                    <div class="imgshop">
                                        <a href="#">
                                            <img src="{{ asset('storage/images/'.$barang->foto) }}">
                                        </a>
                                    </div>
                                    <div class="postshop">
                                        <div class="titleshop">
                                            <h2>
                                                <a href="#">{{ $barang->nama }}</a>
                                            </h2>
                                        </div>
                                        <span class="priceshop">{{ $barang->harga }}</span>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection