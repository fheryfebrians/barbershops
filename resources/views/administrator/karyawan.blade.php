@extends('administrator.master')
@section('title', '| Daftar Karyawan')
@section('content')
<section class="section-main2">
    <div class="main-2">
        <div class="container">
            <h1>Daftar Karyawan</h1>
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Foto</th>
                                    <th>Nama Karyawan</th>
                                    <th>Tgl Masuk</th>
                                    <th>Umur </th>
                                    <th>Alamat</th>
                                    <th>Jabatan</th>
                                    <th>Gaji</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                                @if ($karyawan->isempty())
                                    <p class="not">Belum Ada Karyawan</p>                                    
                                @else
                                @foreach ($karyawan as $karyawan)
                                    <tbody>
                                        <td>{{ $karyawan->id }}</td>
                                        <td>
                                            <img src="{{ asset('storage/images/'.$karyawan->foto) }}" alt="" class="img-small">
                                        </td>
                                        <td>{{ $karyawan->nama }}</td>
                                        <td>{{ $karyawan->tgl_masuk }}</td>
                                        <td>{{ $karyawan->umur }}</td>
                                        <td>{{ $karyawan->alamat }}</td>
                                        <td>{{ $karyawan->jabatan }}</td>
                                        <td>{{ $karyawan->gaji }}</td>
                                        <td>
                                            <a href="{{ url('administrator/detailkaryawan', $karyawan->id) }}">Detail</a>
                                            <a href="{{ url('administrator/editkaryawan', $karyawan->id) }}">Edit</a>
                                        </td>
                                    </tbody>
                                @endforeach
                                @endif
                        </table>
                    </div>
                </div>
            </div>
            {{-- <div class="row">
                <div class="col-md-12">
                    <div class="content-center">
                        <button class="btn-barber">
                            <a href="newuser">Tambah Karyawan</a>
                        </button>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
</section>
@endsection