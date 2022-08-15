@extends('layouts.default')
@section('content')
    <main class="content">
        <section class="block block-ambassador wow animate__fadeIn" data-wow-delay="2s">
            <div class="container">
                <div class="inner">
                    <div class="text">
                        <h1 class="title page-title wow animate__fadeIn" data-wow-delay="2.5s">Brand ambassador</h1>
                        <div class="name wow animate__fadeInUp" data-wow-delay="3s">Philippe Coutinho</div>
                        <div class="story wow animate__fadeInUp" data-wow-delay="3.5s">
                            Mr. Phillips is a visionary and primary driver of ASW.  He is a United Kingdom based businessman with a wide range of skills including corporate law, initial public offerings, capital raises, corporate restructuring, and enterprise management
                        </div>
                    </div>
                    <figure class="figure wow animate__fadeInRight" data-wow-delay="4s">
                        <img src="{{asset('img/temp/ambassador.jpg')}}" alt="" loading="lazy">
                    </figure>
                    <div class="bottom-arrow">
                        <svg width="14" height="19"><use xlink:href="#bottom-arrow"></use></svg>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
