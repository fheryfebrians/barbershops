@extends('administrator.master')
@section('title', 'Capster Baru')
@section('content')
    <section class="section-main2">
        <div class="main-2">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form">
                            <div class="logo-modal">
                                <h4>New Capster</h4>
                            </div>
                            <form method="post" action="{{ url('administrator/newcapster') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="input-field">
                                    <i class="fas fa-camera logo-field"></i>
                                    <input type="file" name="foto" id="foto" class="input-control" style="margin-top: 15px !important;">
                                </div>
                                <div class="input-field">
                                    <i class="fas fa-male logo-field"></i>
                                    <input type="text" name="nama" id="nama" placeholder="Nama Capster" class="input-control" required>
                                </div>
                                <div class="input-field">
                                    <i class="fas fa-birthday-cake logo-field"></i>
                                    <input type="number" name="umur" id="umur" class="input-control" placeholder="Umur" required>
                                </div>
                                <div class="input-field" style="margin-top: 15px;">
                                    <i class="fas fa-address-card logo-field"></i>
                                    <textarea name="alamat" id="alamat" class="input-control" style="margin-top: 10px !important;" placeholder="Alamat"></textarea>
                                </div>
                                <div class="text-center mt-10">
                                    <button type="submit" class="btn btn-login">
                                        Submit
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Foto</th>
                                        <th>Nama Capster</th>
                                        <th>Umur</th>
                                        <th>Alamat</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($capster as $capster)
                                        <tr>
                                            <td>{{ $capster->id }}</td>
                                            <td>
                                                <img src="{{ asset('storage/images/'.$capster->foto) }}" alt="" class="img-small">
                                            </td>
                                            <td>{{ $capster->nama }}</td>
                                            <td>{{ $capster->umur }}</td>
                                            <td>{{ $capster->alamat }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection