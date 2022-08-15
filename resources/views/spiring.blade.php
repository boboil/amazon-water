@extends('layouts.default')
@section('content')
    <main class="content">
        <section class="block block-banner-text text-centered wow animate__fadeIn" data-wow-delay="2s">
            <div class="bg">
                <img src="{{asset('img/bg/bg-8.jpg')}}" alt="" loading="lazy">
            </div>
            <div class="container">
                <figure class="figure wow animate__fadeIn" data-wow-delay="2.5s">
                    <img src="{{asset('img/temp/spiring-figure-1.png')}}" width="80%" alt="" loading="lazy">
                </figure>
                <!-- <h1 class="title page-title wow animate__fadeInUp" data-wow-delay="3s">It begins as a cloud</h1> -->
                <h1 class="title page-title wow animate__fadeInUp" data-wow-delay="3s" style="font-size: 45px">FORGED IN THE SKIES OF THE AMAZON RAINFOREST</h1>
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
        <section class="block block-banner-text text-centered wow animate__fadeInUp" data-wow-delay=".5s">
            <div class="bg">
                <img src="{{asset('img/bg/bg-7.jpg')}}" alt="" loading="lazy">
            </div>
            <div class="container">
                <h2 class="title block-title wow animate__fadeIn" data-wow-delay="1s">Purity of the spring</h2>
                <div class="descr wow animate__fadeInUp" data-wow-delay="1.5s">
                    The water is practically neutral pH, and contains no chemical contaminants of an organic nature or toxic metallic elements
                </div>
            </div>
        </section>
        <section class="block block-banner-text text-centered wow animate__fadeInUp" data-wow-delay=".5s">
            <div class="bg">
                <img src="{{asset('img/bg/bg-6.jpg')}}" alt="" loading="lazy">
            </div>
            <div class="container">
                <h2 class="title block-title wow animate__fadeIn" data-wow-delay="1s">DRAWN FROM THE AMAZON BASIN</h2>
                <div class="descr wow animate__fadeInUp" data-wow-delay="1s">
                    Aquifer contains plentiful reserves of water that are naturally replenished by rainfall
                </div>
            </div>
        </section>
        <section class="block block-banner-text text-centered wow animate__fadeInUp" data-wow-delay=".5s">
            <div class="bg">
                <img src="img/bg/bg-8.jpg" alt="" loading="lazy">
            </div>
            <div class="container">
                <figure class="figure wow animate__fadeInDown" data-wow-delay="1s">
                    <img src="img/temp/spiring-figure-2.png" alt="" loading="lazy">
                </figure>
                <!-- <h2 class="title block-title wow animate__fadeIn" data-wow-delay="1.5s">Earth’s finest water</h2> -->
                <h2 class="title block-title wow animate__fadeIn" data-wow-delay="1.5s">THE WORLD’S PUREST WATER</h2>
{{--                <div class="descr wow animate__fadeInUp" data-wow-delay="2s">--}}
{{--                    <!-- Bottled at the source. Untouched by men. Until you unscrew the cap -->--}}
{{--                    Bottled at the source. Until you unscrew the cap--}}
{{--                </div>--}}
{{--                <a href="/" class="btn wow animate__fadeInUpBig" data-wow-delay="2.5s" target="_blank">Buy now</a>--}}
            </div>
        </section>
    </main>
@endsection
