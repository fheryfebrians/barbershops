@extends('layouts.app')
@section('title', '| About')
@section('content')
<div class="barber-main">
    <div class="barber-head">
        <div class="about">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="img-boxes text-center">
                            <img src="{{ asset('img/index.png') }}" alt="" class="image-boxes-img">
                        </div>
                        <div class="header-main text-center">
                            <h2 class="text-header">About Us</h2>
                            <span class="header-symbol">
                                <span></span>
                            </span>
                        </div>
                        <div class="text-main text-center">
                            <p>Itâ€™s taken years of hard work, professionally crafting a sense of style to make you look your best. But this isnâ€™t just Antonioâ€™s â€˜fourthâ€™ barber shop. Youâ€™ve been investing in your image, so itâ€™s time Antonio invests in you too. Our new quarters has been designed with you in mind.

                                    Busy schedule?
                                    We understand you, and have implemented a booking system to get you in and out, and back on the road in no time.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="img-full">
                            <img src="{{ asset('img/Pages-Pics_021.jpg') }}" alt="" class="full">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection