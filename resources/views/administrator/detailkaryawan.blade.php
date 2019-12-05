@extends('administrator.master')
@section('title', '| Detail')
@section('content')
    <section class="section-main2">
        <div class="main2">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-4">
                        <div class="capster">
                            <div class="head-caps">
                                <div class="img-caps">
                                    <img src="{{ asset('storage/images/'.$karyawan->foto) }}" alt="">
                                </div>
                            </div>
                            <div class="main-caps">
                                <div class="name-caps">
                                    ~ {{ $karyawan->nama }} ~
                                </div>
                                <div class="umur-caps">
                                    {{ $karyawan->umur }} Tahun<br>
                                    {{ $karyawan->jabatan }}
                                </div>
                                <div class="spec-caps">
                                    {{ $karyawan->gaji }}<br>
                                    <a href="{{ url('administrator/editkaryawan', $karyawan->id) }}">Edit</a>
                                    <a href="{{ url('administrator/print', $karyawan->id) }}" target="_blank">Print</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection