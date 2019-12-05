@extends('administrator.master')
@section('title', '| Edit Karyawan')
@section('content')
    <section class="section-main2">
        <div class="main-2">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-5">
                        <div class="form">
                            <div class="logo-modal">
                                <h4>Update Karyawan</h4>
                            </div>
                            <form method="post" action="{{ url('administrator/updatekaryawan', $karyawan->id) }}" enctype="multipart/form-data">
                                @csrf
                                @method('PATCH')
                                <div class="input-field">
                                    <i class="fas fa-camera logo-field"></i>
                                    <input type="file" name="foto" id="foto" class="input-control" style="margin-top: 15px !important;">
                                </div>
                                <div class="input-field">
                                    <i class="fas fa-male logo-field"></i>
                                    <input type="text" name="nama" id="nama" placeholder="{{ $karyawan->nama}}" class="input-control">
                                </div>
                                <div class="input_field">
                                    {{-- <i class="fas fa-date logo-field"></i> --}}
                                    <input type="date" name="tgl_masuk" id="tgl_masuk" placeholder="{{ $karyawan->tgl_masuk }}" class="input-control">
                                </div>
                                <div class="input-field">
                                    <i class="fas fa-birthday-cake logo-field"></i>
                                    <input type="number" name="umur" id="umur" class="input-control" placeholder="{{ $karyawan->umur }}">
                                </div>
                                <div class="input-field" style="margin-top: 15px;">
                                    <i class="fas fa-address-card logo-field"></i>
                                    <textarea name="alamat" id="alamat" class="input-control" style="margin-top: 10px !important;" placeholder="{{ $karyawan->alamat }}"></textarea>
                                </div>
                                <div class="input-field">
                                    <i class="fas fa-male logo-field"></i>
                                    <select name="jabatan" id="jabatan">
                                        <option value="0">--Pilih Jabatan--</option>
                                        <option value="staff">STAFF</option>
                                        <option value="ob">OB</option>
                                        <option value="terapis">Terapis</option>
                                        <option value="jabatan1">Jabatan 1</option>
                                        <option value="jabatan2">Jabatan 2</option>
                                    </select>
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