@extends('layouts.default')
@section('content')
    <main class="content">
        <section class="block block-ambassador wow animate__fadeIn" data-wow-delay="1.2s">
            <div class="container">
                <div class="inner">
                    <div class="text">
                        <h1 class="title page-title wow animate__fadeIn" data-wow-delay="1.5s">Brand ambassador</h1>
                        <div class="name wow animate__fadeInUp" data-wow-delay="1.8s">Philippe Coutinho</div>
                        <div class="story wow animate__fadeInUp" data-wow-delay="2.1s">
                            Philippe Coutinho is a Brazilian professional footballer who plays for Premier League club Aston Villa and the Brazilian national team.

                            Philippe is the Brand Ambassador for Amazon Spring Water.

                            Additionally, he is supporting the Rainforest Foundation, the charity of choice of Amazon Spring Water, a consumer donation program to protect the Amazon Rainforest.
                        </div>
                    </div>
                    <figure class="figure wow animate__fadeInRight" data-wow-delay="2.4s">
                        <img src="{{asset('img/temp/cautinio.jpeg')}}" alt="" loading="lazy">
                    </figure>
                    <div class="bottom-arrow">
                        <svg width="14" height="19"><use xlink:href="#bottom-arrow"></use></svg>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
