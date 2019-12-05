@extends('layouts.app')
@section('title', '| Contact')
@section('content')
<div class="barber-main">
    <div class="barber-head">
        <div class="about">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="header-main text-center">
                            <div class="text-hr">
                                <div class="content-hr">
                                    <h3>LOCATION</h3>
                                    <p>Jl. Jalan no kec. kecamatan</p>
                                </div>
                            </div>
                        </div>
                        <div class="img-full">
                            <div class="mapouter">
                                <div class="gmap_canvas">
                                    <iframe width="310" height="310" id="gmap_canvas" src="https://maps.google.com/maps?q=bandung&t=k&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="img-boxes text-center">
                            <img src="{{ asset('img/image-asset.png') }}" alt="" class="image-boxes-img">
                        </div>
                        <div class="header-main text-center">
                            <div class="text-hr">
                                <div class="content-hr">
                                    <hr>
                                </div>
                            </div>
                            <div class="text-hr">
                                <div class="content-hr">
                                    <h3>Hubungi Kami</h3>
                                    <h2>088888288829</h2>
                                </div>
                            </div>
                            <div class="text-hr">
                                <div class="content-hr">
                                    <hr>
                                </div>
                            </div>
                            <div class="text-hr">
                                <div class="content-hr">
                                    <h3>Jam Kerja</h3>
                                    <h1>setiap hari</h1>
                                    <h2>10:00am - 7:00pm</h2>
                                    <p>PLEASE NOTE: We accept our last walk-in 30 minutes prior to closing.</p>
                                    <p>WAIT LIST PERMITTING</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection