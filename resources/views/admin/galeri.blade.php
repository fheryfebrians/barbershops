@extends('layouts.admin')
@section('title', '| Tambah Foto')
@section('content')
<section class="section-main2">
    <div class="main-2">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <div class="form">
                        <div class="logo-modal">
                            <h4>Tambah Galeri</h4>
                        </div>
                        <form method="post" action="{{ url('admin/galeri') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="input-field">
                                <i class="fas fa-camera logo-field"></i>
                                <input type="file" name="foto" id="foto" class="input-control" style="margin-top: 15px !important;">
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