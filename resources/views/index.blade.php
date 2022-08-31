@extends('layouts.default')
@section('content')
    <main class="content">
        <section class="block block-homescreen wow animate__fadeIn" data-wow-delay="1.2s">
            <div class="bg">
                <!-- <img src="img/bg/bg-1.jpg" alt="" loading="lazy"> -->
                <video id="video-banner" playsinline autoplay muted loop>
                    <source src="{{asset('video/video-2560.mp4')}}" type="video/mp4"
                            media="all and (min-width: 1921px)">
                    <source src="{{asset('video/video-1920.mp4')}}" type="video/mp4"
                            media="all and (max-width: 1920px)">
                    <source src="{{asset('video/video-1440.mp4')}}" type="video/mp4"
                            media="all and (max-width: 1440px)">
                    <source src="{{asset('video/video-1024.mp4')}}" type="video/mp4"
                            media="all and (max-width: 1024px)">
                    <source src="{{asset('video/video-768.mp4')}}" type="video/mp4" media="all and (max-width: 768px)">
                </video>
            </div>
            <div class="container">
                <div class="text">
                    <h1 class="title page-title wow animate__fadeIn" data-wow-delay="1.5s">Amazon Spring Waters</h1>
                    <div class="descr wow animate__fadeInUp" data-wow-delay="1.8s">
                        <!-- The first bottled water brand from Brazil, with a mission and brand built on the premise of preservation the world’s “lungs” - the Amazon Rainforest -->
                        Amazon Spring Waters presents the first global bottled water brand from Brazil, with a mission
                        and brand built on the premise of saving the world’s “lungs”, the Amazon Rainforest
                    </div>
{{--                    <a href="/" class="btn wow animate__fadeInUp" data-wow-delay="3.5s" target="_blank" title="buy on Amazon">Buy now</a>--}}
                </div>
                <figure class="figure wow animate__fadeIn" data-wow-delay="2.4s">
                    <img src="{{asset('img/temp/homescreen-figure.png')}}" alt="" loading="lazy">
                </figure>
                <div class="bottom-arrow">
                    <svg width="14" height="19">
                        <use xlink:href="#bottom-arrow"></use>
                    </svg>
                </div>
            </div>
        </section>

        <section id="products" class="block block-product-slider wow animate__fadeInUp" data-wow-delay=".3s" data-wow-offset="50">
            <div class="bg">
                <img src="{{asset('img/bg/bg-11.jpg')}}" alt="" loading="lazy">
            </div>
            <div class="container">
                <div class="product-info-slider">
                    <div class="swiper-container js-product-info-swiper">
                        <div class="swiper-wrapper">
                            @foreach($products as $product)
                                <div class="swiper-slide">
                                    <div class="info-item">
                                        <div class="info-item-title">{{$product->title}}</div>
                                        <div class="info-item-volume">{{$product->volume}}</div>
{{--                                        <div class="info-item-price">From ${{$product->price}} per case of 24</div>--}}
                                        <div class="info-item-descr">{!! $product->description !!}</div>
                                        {{--<a href="/" target="_blank" class="btn info-item-order">buy now</a>--}}
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="product-bottle-slider">
                    <div class="swiper-container js-product-bottle-swiper">
                        <div class="swiper-wrapper">
                            @foreach($products as $product)
                                <div class="swiper-slide">
                                    <img src="{{asset($product->main_image)}}" alt="{{$product->title}}">
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="swiper-controls">
                    <div class="swiper-btn swiper-btn-prev" id="product-prev"></div>
                    <div class="swiper-pagination" id="product-pagination"></div>
                    <div class="swiper-btn swiper-btn-next" id="product-next"></div>
                </div>
            </div>
        </section>

        <section class="block block-images-text wow animate__fadeInUp" data-wow-delay=".3s">
            <div class="container">
                <a href="{{route('about')}}" class="image-link wow animate__fadeInLeft" data-wow-delay=".6s">
                    <img src="{{asset('img/temp/brand-banner-1.jpg')}}" alt="" loading="lazy">
                    <h3 class="title">Our story</h3>
                </a>
                <div class="text wow animate__fadeInRight" data-wow-delay="1.2s">
                    <h2 class="title block-title wow animate__fadeIn" data-wow-delay="1s">Our brand</h2>
                    <div class="descr wow animate__fadeInUp" data-wow-delay=".9s">
                        <p>
                            Amazon Spring Waters presents the first global bottled water brand from Brazil, with a
                            mission and brand built on the premise of saving the world’s “lungs”, the Amazon Rainforest.
                        </p>
                        <p>
                            The brand has been created to inspire a feeling of goodwill in consumers, making their
                            choice to purchase a bottle of Amazon Spring Waters a choice to heal the Amazon Rainforest
                            and in turn contribute to a healthier global environment.
                        </p>
                    </div>
                </div>
{{--                <a href="{{route('about')}}" class="image-link wow animate__fadeInUp" data-wow-delay="2.5s">--}}
{{--                    <img src="{{asset('img/temp/brand-banner-2.jpg')}}" alt="" loading="lazy">--}}
{{--                    <h3 class="title">Conservation international</h3>--}}
{{--                </a>--}}
                <a href="{{route('about')}}" class="image-link wow animate__fadeInUp" data-wow-delay="1.8s">
                    <img src="{{asset('img/temp/brand-banner-3.jpg')}}" alt="" loading="lazy">
                    <h3 class="title">Amazon Spring Waters Foundation</h3>
                </a>
            </div>
        </section>
    </main>
@endsection
