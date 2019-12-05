@extends('layouts.admin')
@section('title', '| Daftar Panggilan')
@section('content')
<section class="section-main2">
    <div class="main-2">
        <div class="container">
            <div class="row justify-content-center">
                <h1>Daftar Panggilan</h1>
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nama</th>
                                    <th>Tanggal</th>
                                    <th>Jam</th>
                                    <th>Nama Staff</th>
                                </tr>
                            </thead>

                             @foreach ($panggilan as $panggilan)    
                                    <tbody>
                                        <td>{{ $panggilan->id }}</td>
                                        <td>{{ $panggilan->nama }}</td>
                                        <td>{{ $panggilan->tgl }}</td>
                                        <td>{{ $panggilan->jam }}</td>
                                        <td>{{ $panggilan->staff }}</td>
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