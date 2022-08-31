@extends('layouts.default')
@section('content')
    <main class="content">
        <section class="block block-banner-text text-centered wow animate__fadeIn" data-wow-delay="1.2s">
            <div class="sky">
                <!-- <img src="{{asset('img/bg/bg-8.jpg')}}" alt="" loading="lazy"> -->
                <img src="{{asset('img/bg/sky-1.jpg')}}" alt="" data-type="parallax" data-depth="0">
                <img src="{{asset('img/bg/sky-2.png')}}" alt="" data-type="parallax" data-depth="-0.1">
                <img src="{{asset('img/bg/sky-3.png')}}" alt="" data-type="parallax" data-depth="0.3">
                <img src="{{asset('img/bg/sky-4.png')}}" alt="" data-type="parallax" data-depth="0.6">
            </div>
            <div class="container">
                <figure class="figure wow animate__fadeIn" data-wow-delay="1.5s">
                    <img src="{{asset('img/temp/spiring-figure-1.png')}}" width="80%" alt="" loading="lazy">
                </figure>
                <!-- <h1 class="title page-title wow animate__fadeInUp" data-wow-delay="3s">It begins as a cloud</h1> -->
                <h1 class="title page-title wow animate__fadeInUp" data-wow-delay="1.8s" style="font-size: 36px;">FORGED IN THE SKIES <br> OF THE AMAZON RAINFOREST</h1>
                <div class="bottom-arrow">
                    <svg width="14" height="19"><use xlink:href="#bottom-arrow"></use></svg>
                </div>
            </div>
        </section>

        <!-- <section class="block block-banner-text text-centered wow animate__fadeInUp" data-wow-delay=".5s" data-wow-offset="50">
            <div class="bg">
                <img src="img/bg/bg-2.jpg" alt="" loading="lazy">
            </div>
            <div class="container">
                <h2 class="title block-title wow animate__fadeIn" data-wow-delay="1s">Heart of the Amazon rainforest</h2>
                <div class="descr wow animate__fadeInUp" data-wow-delay="1.5s">
                    A near-perpetual supply of superior spring water from a highly protected rural area in the middle of the Amazon Rainforest
                </div>
            </div>
        </section> -->
        <section class="block block-banner-text text-centered wow animate__fadeInUp" data-wow-delay=".3s">
            <div class="landscape">
                <img src="{{asset('img/bg/landscape-1-1.jpg')}}" alt="" loading="lazy" data-type="parallax" data-depth="0.0">
                <img src="{{asset('img/bg/landscape-1-4.png')}}" alt="" loading="lazy" data-type="parallax" data-depth="-0.02">
                <img src="{{asset('img/bg/landscape-1-5.png')}}" alt="" loading="lazy" data-type="parallax" data-depth="0.1" style="margin-top: 180px;">
                <img src="{{asset('img/bg/landscape-1-2.png')}}" alt="" loading="lazy" data-type="parallax" data-depth="-0.1">
                <img src="{{asset('img/bg/landscape-1-3.png')}}" alt="" loading="lazy" data-type="parallax" data-depth="-0.2">
            </div>
            <div class="container">
                <h2 class="title block-title wow animate__fadeIn" data-wow-delay=".6s">Purity of the spring</h2>
                <div class="descr wow animate__fadeInUp" data-wow-delay=".9s">
                    The water is practically neutral pH, and contains no chemical contaminants of an organic nature or toxic metallic elements
                </div>
            </div>
        </section>
        <section class="block block-banner-text text-centered wow animate__fadeInUp" data-wow-delay=".3s">
            <div class="landscape">
                <img src="{{asset('img/bg/bg-12.jpg')}}" alt="" loading="lazy" data-type="parallax" data-depth="0.01" style="height: 105%">
                <img src="{{asset('img/bg/landscape-bird-1.png')}}" alt="" loading="lazy" data-type="parallax" data-depth="0.2" style="margin-top: 500px; left: initial; width: 60%; bottom: initial; object-position: right center; height: auto;">
                <img src="{{asset('img/bg/landscape-2-2.png')}}" alt="" loading="lazy" data-type="parallax" data-depth="-0.1" style="margin-top: -100px;">
                <img src="{{asset('img/bg/landscape-2-3.png')}}" alt="" loading="lazy" data-type="parallax" data-depth="-0.15" style="margin-top: -150px;">
            </div>
            <div class="container">
                <h2 class="title block-title wow animate__fadeIn" data-wow-delay=".6s">DRAWN FROM THE AMAZON BASIN</h2>
                <div class="descr wow animate__fadeInUp" data-wow-delay=".3s">
                    Aquifer contains plentiful reserves of water that are naturally replenished by rainfall
                </div>
            </div>
        </section>
        <section class="block block-banner-text text-centered wow animate__fadeInUp" data-wow-delay=".3s">
            <div class="sky">
                <img src="{{asset('img/bg/bg-11.jpg')}}" alt="" loading="lazy">
                <!-- <img src="{{asset('img/bg/sky-1.jpg')}}" alt="" data-type="parallax" data-depth="0"> -->
                <!-- <img src="{{asset('img/bg/sky-2.png')}}" alt="" data-type="parallax" data-depth="-0.5" style="margin-top: 100px; height: auto;"> -->
                <!-- <img src="{{asset('img/bg/sky-3.png')}}" alt="" data-type="parallax" data-depth="0.15" style="margin-top: 150px; height: auto;"> -->
                <!-- <img src="{{asset('img/bg/sky-4.png')}}" alt="" data-type="parallax" data-depth="0.3" style="margin-top: 200px; height: auto;"> -->
            </div>
            <div class="container">
                <figure class="figure wow animate__fadeInDown" data-wow-delay=".6s">
                    <img src="{{asset('img/temp/spiring-figure-2.png')}}" alt="" loading="lazy">
                </figure>
                <!-- <h2 class="title block-title wow animate__fadeIn" data-wow-delay="1.5s">Earth’s finest water</h2> -->
                <h2 class="title block-title wow animate__fadeIn" data-wow-delay=".9s">THE WORLD’S PUREST WATER</h2>
{{--                <div class="descr wow animate__fadeInUp" data-wow-delay="2s">--}}
{{--                    <!-- Bottled at the source. Untouched by men. Until you unscrew the cap -->--}}
{{--                    Bottled at the source. Until you unscrew the cap--}}
{{--                </div>--}}
{{--                <a href="/" class="btn wow animate__fadeInUpBig" data-wow-delay="2.5s" target="_blank">Buy now</a>--}}
            </div>
        </section>
    </main>
@endsection
