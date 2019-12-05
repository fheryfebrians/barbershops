@extends('administrator.master')
@section('title', '|Daftar Capster')
@section('content')
    <section class="section-main2">
        <div class="main-2">
            <div class="container">
                <div class="row">
                    @foreach ($capster as $capster)
                    <div class="col-md-4">
                            <div class="capster">
                                <div class="head-caps">
                                    <div class="img-caps">
                                        <img src="{{ asset('storage/images/'.$capster->foto) }}" alt="">
                                    </div>
                                </div>
                                <div class="main-caps">
                                    <div class="name-caps">
                                        ~ {{ $capster->nama }} ~
                                    </div>
                                    <div class="umur-caps">
                                        {{ $capster->umur }} Tahun
                                    </div>
                                    <div class="spec-caps">
                                        {{ $capster->alamat }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection