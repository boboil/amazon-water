@extends('layouts.default')
@section('content')
    <main class="content">
        <section class="block block-banner-text text-centered wow animate__fadeIn" data-wow-delay="1.2s">
            <div class="bg">
                <img src="{{asset('img/bg/bg-4.jpg')}}" alt="" loading="lazy">
            </div>
            <div class="container">
                <h1 class="title page-title wow animate__fadeIn" data-wow-delay="1.5s">Saving the lungs <br> of the world</h1>
                <div class="descr wow animate__fadeInUp" data-wow-delay="1.8s">
                    Amazon Spring Waters presents the first global bottled water brand from Brazil, with a mission and brand built on the premise of saving the world’s “lungs”, the Amazon Rainforest
                </div>
{{--                <a href="/" class="btn wow animate__fadeIn" data-wow-delay="3.5s" target="_blank">buy now</a>--}}
                <div class="bottom-arrow">
                    <svg width="14" height="19"><use xlink:href="#bottom-arrow"></use></svg>
                </div>
            </div>
        </section>

        <section class="block block-our-story wow animate__fadeInUp" data-wow-delay=".3s" data-wow-offset="50">
            <div class="bg">
                <img src="img/bg/our-story-bg.jpg" alt="" loading="lazy">
            </div>
            <div class="container">
                <div class="inner">
                    <div class="text wow animate__fadeInLeft" data-wow-delay=".6s">
                        <h2 class="title block-title">Our story</h2>
                        <div class="descr wow animate__fadeIn" data-wow-delay="1.2s">
                            <p>
                                Amazon Spring Waters presents the first global bottled water brand from Brazil, with a mission and brand built on the premise of saving the world’s “lungs”, the Amazon Rainforest.
                            </p>
                            <p>
                                The brand has been created to inspire a feeling of goodwill in consumers, making their choice to purchase a bottle of Amazon Spring Waters a choice to heal the Amazon Rainforest and in turn contribute to a healthier global environment.
                            </p>
                        </div>
                        <a href="/" class="learn-more wow animate__fadeInUp" data-wow-delay="1.5s">Learn more</a>
                    </div>
                    <div class="banner wow animate__fadeInRight" data-wow-delay=".9s">
                        <img src="img/temp/story-banner.jpg" alt="" loading="lazy">
                    </div>
                </div>
            </div>
        </section>

        <section class="block block-core-beliefs text-centered wow animate__fadeInUp" data-wow-delay=".3s">
            <div class="bg">
                <img src="img/bg/bg-9.jpg" alt="" loading="lazy">
            </div>
            <div class="container">
                <h2 class="title block-title wow animate__fadeIn" data-wow-delay=".6s">Our Core Beliefs</h2>
                <div class="icons">
                    <div class="item wow animate__fadeInUp" data-wow-delay=".9s">
                        <div class="item-icon">
                            <svg width="57" height="56" viewBox="0 0 57 56" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9.83398 34.9998C9.83398 34.9998 12.1673 32.6665 19.1673 32.6665C26.1673 32.6665 30.834 37.3332 37.834 37.3332C44.834 37.3332 47.1673 34.9998 47.1673 34.9998V6.99984C47.1673 6.99984 44.834 9.33317 37.834 9.33317C30.834 9.33317 26.1673 4.6665 19.1673 4.6665C12.1673 4.6665 9.83398 6.99984 9.83398 6.99984V34.9998Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M9.83398 51.3333V35" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <div class="item-title">Citizenship</div>
                        <div class="item-descr">
                            We trust in people. By providing the public with <br> the means to save the Amazon and benefit the <br> environment
                        </div>
                    </div>
                    <div class="item wow animate__fadeInUp" data-wow-delay="1.2s">
                        <div class="item-icon">
                            <svg width="57" height="56" viewBox="0 0 57 56" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M28.5007 39.6668C34.944 39.6668 40.1673 34.4435 40.1673 28.0002C40.1673 21.5568 34.944 16.3335 28.5007 16.3335C22.0573 16.3335 16.834 21.5568 16.834 28.0002C16.834 34.4435 22.0573 39.6668 28.5007 39.6668Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M28.5 2.3335V7.00016" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M28.5 49V53.6667" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M10.3457 9.84668L13.659 13.16" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M43.3398 42.8398L46.6532 46.1532" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M2.83398 28H7.50065" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M49.5 28H54.1667" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M10.3457 46.1532L13.659 42.8398" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M43.3398 13.16L46.6532 9.84668" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <div class="item-title">Environment</div>
                        <div class="item-descr">
                            We cannot survive without a healthy world <br> organism. The environment is our future and <br> we must take steps now to protect it
                        </div>
                    </div>
                    <div class="item wow animate__fadeInUp" data-wow-delay="1.5s">
                        <div class="item-icon">
                            <svg width="56" height="56" viewBox="0 0 56 56" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M39.6673 49V44.3333C39.6673 41.858 38.684 39.484 36.9336 37.7337C35.1833 35.9833 32.8093 35 30.334 35H11.6673C9.19196 35 6.81799 35.9833 5.06765 37.7337C3.31732 39.484 2.33398 41.858 2.33398 44.3333V49" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M20.9993 25.6667C26.154 25.6667 30.3327 21.488 30.3327 16.3333C30.3327 11.1787 26.154 7 20.9993 7C15.8447 7 11.666 11.1787 11.666 16.3333C11.666 21.488 15.8447 25.6667 20.9993 25.6667Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M53.666 48.9999V44.3332C53.6645 42.2653 52.9762 40.2564 51.7092 38.622C50.4422 36.9876 48.6683 35.8202 46.666 35.3032" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M37.334 7.30322C39.3416 7.81726 41.1211 8.98486 42.3918 10.6219C43.6625 12.259 44.3523 14.2725 44.3523 16.3449C44.3523 18.4173 43.6625 20.4307 42.3918 22.0678C41.1211 23.7049 39.3416 24.8725 37.334 25.3866" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <div class="item-title">Legacy</div>
                        <div class="item-descr">
                            Our legacy will be the Amazon and a successful <br> model demonstrating how creativity and ethical <br> stewardship can result in transformation.
                        </div>
                    </div>
                </div>
            </div>
        </section>

{{--        <section class="block block-team text-centered wow animate__fadeInUp" data-wow-delay=".5s">--}}
{{--            <div class="bg">--}}
{{--                <img src="img/bg/bg-3.jpg" alt="" loading="lazy">--}}
{{--            </div>--}}
{{--            <div class="container">--}}
{{--                <h2 class="title block-title wow animate__fadeIn" data-wow-delay="1s">Our Team</h2>--}}
{{--                <div class="descr wow animate__fadeInUp" data-wow-delay="1.5s">--}}
{{--                    The management team comprises professionals with expertise in the water, property, finance, legal, and logistics industries. They have been dedicated to this project for over 14 years.--}}
{{--                </div>--}}
{{--                <div class="team wow animate__fadeInUpBig" data-wow-delay="2s">--}}
{{--                    <div class="swiper-container js-team-swiper">--}}
{{--                        <div class="swiper-wrapper">--}}
{{--                            <div class="swiper-slide">--}}
{{--                                <div class="team-item">--}}
{{--                                    <div class="team-item-photo">--}}
{{--                                        <img src="img/temp/team-item-1.jpg" alt="">--}}
{{--                                    </div>--}}
{{--                                    <div class="team-item-name">--}}
{{--                                        Lawrence Phillips--}}
{{--                                    </div>--}}
{{--                                    <div class="team-item-title">--}}
{{--                                        Chairman & CEO--}}
{{--                                    </div>--}}
{{--                                    <div class="team-item-descr">--}}
{{--                                        Mr. Phillips is a visionary and primary driver of ASW.  He is a United Kingdom based businessman with a wide range of skills including corporate law--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="swiper-slide">--}}
{{--                                <div class="team-item">--}}
{{--                                    <div class="team-item-photo">--}}
{{--                                        <img src="img/temp/team-item-2.jpg" alt="">--}}
{{--                                    </div>--}}
{{--                                    <div class="team-item-name">--}}
{{--                                        Dr. Clara Leung--}}
{{--                                    </div>--}}
{{--                                    <div class="team-item-title">--}}
{{--                                        Director--}}
{{--                                    </div>--}}
{{--                                    <div class="team-item-descr">--}}
{{--                                        Dr. Leung joined the Amazon Spring Waters team in 2020, and is primary focused on identifying market investment opportunities and tailoring strategic solutions--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="swiper-slide">--}}
{{--                                <div class="team-item">--}}
{{--                                    <div class="team-item-photo">--}}
{{--                                        <img src="img/temp/team-item-3.jpg" alt="">--}}
{{--                                    </div>--}}
{{--                                    <div class="team-item-name">--}}
{{--                                        Leonardo Schneider--}}
{{--                                    </div>--}}
{{--                                    <div class="team-item-title">--}}
{{--                                        Brazilian Operations--}}
{{--                                    </div>--}}
{{--                                    <div class="team-item-descr">--}}
{{--                                        Mr. Schneider works closely with the engineers and other consultants hired by ASW to address all aspects of the site managment and business development in Brazil--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="swiper-controls">--}}
{{--                        <div class="swiper-btn swiper-btn-prev" id="team-prev"></div>--}}
{{--                        <div class="swiper-pagination" id="team-pagination"></div>--}}
{{--                        <div class="swiper-btn swiper-btn-next" id="team-next"></div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </section>--}}
    </main>
@endsection
