@extends('layouts.app')
@section('title', '| Galeri')
@section('content')
<div class="barber-main">
    <div class="barber-head">
        <div class="container">
            <div class="slider-wrapper">
                <div class="slider responsive lazy">
                    <div class="item-image">
                        <div class="image-slide">
                            <img src="{{ asset('img/images.jfif') }}" alt="Alt" class="slick-slider-image">
                        </div>
                    </div>
                    <div class="item-image">
                        <div class="image-slide">
                            <img src="{{ asset('img/Pages-Pics_021.jpg') }}" alt="Alt" class="slick-slider-image">
                        </div>
                    </div>
                    <div class="item-image">
                        <div class="image-slide">
                            <img src="{{ asset('img/mm.jfif') }}" alt="Alt" class="slick-slider-image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <script type="text/javascript">
        $(document).ready(function(){
            $('.item-image').slick({
            autoplay: true,
            dots: false,
            infinite: true,
            autoplaySpeed: 2000,
            speed: 500,
            fade: true,
            cssEase: 'linear'
            });
        });
    </script>

@endsection