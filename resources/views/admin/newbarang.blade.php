@extends('layouts.admin')
@section('title', '| Tambah Barang')
@section('content')
<section class="section-main2">
    <div class="main-2">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <div class="form">
                        <div class="logo-modal">
                            <h4>Tambah Barang</h4>
                        </div>
                        <form method="post" action="{{ url('admin/newbarang') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="input-field">
                                <i class="fas fa-camera logo-field"></i>
                                <input type="file" name="foto" id="foto" class="input-control" style="margin-top: 15px !important;">
                            </div>
                            <div class="input-field">
                                <i class="fas fa-user logo-field"></i>
                                <input type="text" name="nama" id="nama" class="input-control" placeholder="Nama" required>
                            </div>
                            <div class="input-field">
                                <i class="fas fa-user logo-field"></i>
                                <input type="text" name="harga" id="harga" class="input-control" placeholder="Harga" required>
                            </div>
                            <div class="text-center mt-10">
                                <button type="submit" class="btn btn-login">
                                    Submit
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection