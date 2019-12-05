@extends('layouts.admin')
@section('title', '|Tambah User')
@section('content')
<section class="section-main2">
    <div class="main-2">
     <div class="container">
       
        <div class="row">
            <div class="col-md-4">
                <div class="form">
                    <div class="logo-modal">
                        <h4>User Baru</h4>
                    </div>
                    <form method="post" action="{{ url('admin/newuser') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="input-field">
                            <i class="fas fa-user logo-field"></i>
                            <input type="text" name="name" id="name" class="input-control" placeholder="Nama" required>
                        </div>
                        <div class="input-field">
                            <i class="fas fa-lock logo-field"></i>
                            <input type="password" name="password" id="password" placeholder="Password" class="input-control" required>
                        </div>
                        <div class="input-field">
                            <i class="far fa-envelope logo-field"></i>
                            <input type="text" name="email" id="email" class="input-control" placeholder="Email" required>
                        </div>
                        <div class="input-field">
                            <i class="fas fa-mobile-alt logo-field"></i>
                            <input type="text" name="nomor" id="nomor" class="input-control" placeholder="Nomor" required>
                        </div>
                        <div class="input-field">
                            <i class="fas fa-address-card logo-field"></i>
                            <input type="text" name="alamat" id="alamat" class="input-control" placeholder="Alamat" required>
                        </div>
                        <div class="text-center mt-10">
                            <button type="submit" class="btn btn-login">
                                Submit
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-7">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Nomor Handphone</th>
                                <th>Alamat</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if($user->isempty())
                                <p class="not">Belum ada unit disini</p>
                            @else
                            @foreach ($user as $user)
                                <tr>
                                    <td>{{ $user->id }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->nomor }}</td>
                                    <td>{{ $user->alamat }}</td>
                                </tr>
                            @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
@endsection