@extends('administrator.master')
@section('title', '| Tambah Karyawan')
@section('content')
    <section class="section-main2">
        <div class="main-2">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <div class="form">
                            <div class="logo-modal">
                                <h4>New Karyawan</h4>
                            </div>
                            <form method="post" action="{{ url('administrator/newkaryawan') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="input-field">
                                    <i class="fas fa-camera logo-field"></i>
                                    <input type="file" name="foto" id="foto" class="input-control" style="margin-top: 15px !important;">
                                </div>
                                <div class="input-field">
                                    <i class="fas fa-male logo-field"></i>
                                    <input type="text" name="nama" id="nama" placeholder="Nama karyawan" class="input-control" required>
                                </div>
                                <div class="input_field">
                                    {{-- <i class="fas fa-date logo-field"></i> --}}
                                    <input type="date" name="tgl_masuk" id="tgl_masuk" placeholder="Tgl Masuk" class="input-control" required>
                                </div>
                                <div class="input-field">
                                    <i class="fas fa-birthday-cake logo-field"></i>
                                    <input type="number" name="umur" id="umur" class="input-control" placeholder="Umur" required>
                                </div>
                                <div class="input-field" style="margin-top: 15px;">
                                    <i class="fas fa-address-card logo-field"></i>
                                    <textarea name="alamat" id="alamat" class="input-control" style="margin-top: 10px !important;" placeholder="Alamat"></textarea>
                                </div>
                                <div class="input-field">
                                    <i class="fas fa-male logo-field"></i>
                                    <select name="jabatan" id="jabatan" required>
                                        <option value="0">--Pilih Jabatan--</option>
                                        <option value="staff">STAFF</option>
                                        <option value="ob">OB</option>
                                        <option value="terapis">Terapis</option>
                                        <option value="jabatan1">Jabatan 1</option>
                                        <option value="jabatan2">Jabatan 2</option>
                                    </select>
                                </div>
                                <div class="input-field">
                                    <i class="fas fa-money logo-field"></i>
                                    <input type="text" name="gaji" id="gaji" class="input-control" placeholder="Gaji" required>
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
                                        <th>Foto</th>
                                        <th>Nama karyawan</th>
                                        <th>Tgl Masuk</th>
                                        <th>Umur</th>
                                        <th>Alamat</th>
                                        <th>Jabatan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($karyawan as $karyawan)
                                        <tr>
                                            <td>{{ $karyawan->id }}</td>
                                            <td>
                                                <img src="{{ asset('storage/images/'.$karyawan->foto) }}" alt="" class="img-small">
                                            </td>
                                            <td>{{ $karyawan->nama }}</td>
                                            <td>{{ $karyawan->tgl_masuk }}</td>
                                            <td>{{ $karyawan->umur }}</td>
                                            <td>{{ $karyawan->alamat }}</td>
                                            <td>{{ $karyawan->jabatan }}</td>
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