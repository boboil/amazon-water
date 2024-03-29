<footer class="block block-subscribe-footer wow animate__fadeInUp" data-wow-delay=".3s" data-wow-offset="30">
    <!-- на странице амбасадор див бг не выводить -->
    <div class="bg">
        <img src="{{asset('img/bg/bg-5.jpg')}}" alt="" loading="lazy">
    </div>
    <!-- на странице амбасадор див бг не выводить -->

    <div class="container">
        <div class="subscribe">
            <h2 class="title block-title text-centered wow animate__fadeIn" data-wow-delay=".6s">Be the first to know
                our
                news!</h2>
            <div class="descr text-centered wow animate__fadeInUp" data-wow-delay=".9s">
                Once a month you will hear about our latest features and hottest news. And no spam, of course.
            </div>
            <form method="post" action="{{route('subscribe')}}" class="subscribe-form wow animate__fadeInUp"
                  data-wow-delay="1.2s">
                @csrf
                <input name="email" type="email" placeholder="E-mail" class="subscribe-input" required>
                <button type="submit" class="btn">Subscribe</button>
            </form>
        </div>
    </div>
    <div class="container">
        <div class="footer">
            <div class="footer-group">
                <h4><a href="/">Contact us</a></h4>
                <div class="footer-group-content">
                    <a href="mailto:amazon@gmail.com">amazon@amazonspringwaters.com</a>
                    <address>
                        <!-- 19 London End, Beaconsfield, Buckinghamshire, England, HP9 2HN -->
                        70b High Street Bassingbourn, Royston, Hertz, United Kingdom, SG8 5LF
                    </address>
                </div>
            </div>
            <div class="footer-group">
                {{--                <h4><a href="{{route('spiring')}}">Amazon water</a></h4>--}}
                {{--                <div class="footer-group-content">--}}
                {{--                    <a href="{{route('sustainability')}}">Sustainability</a>--}}
                {{--                    <a href="{{route('spiring')}}">The water</a>--}}
                {{--                    <a href="{{route('about')}}">About us</a>--}}
                {{--                    <a href="{{route('ambassador')}}">Brand ambassador</a>--}}
                {{--                    <a href="{{route('index')}}#products">Product range</a>--}}
                {{--                    <a href="{{route('index')}}">Share price</a>--}}
                {{--                </div>--}}
            </div>
            <div class="footer-group">
                <h4>Terms & policies</h4>
                <div class="footer-group-content">
                    @foreach($menu as $item)
                        <a href="{{route('terms', $item->slug)}}">{{$item->title}}</a>
                    @endforeach
                </div>
            </div>
            <div class="footer-group">
                <h4>Connect with us</h4>
                <div class="footer-group-content">
                    <div class="socials">
                        <a href="https://www.facebook.com/amazonnaturalspringwaters" rel="noindex nofollow noreferrer" target="_blank">
                            <svg width="24" height="24">
                                <use xlink:href="#icon-facebook"></use>
                            </svg>
                        </a>
                        <a href="https://www.instagram.com/amazon.spring.waters/" rel="noindex nofollow noreferrer" target="_blank">
                            <svg width="24" height="24">
                                <use xlink:href="#icon-instagram"></use>
                            </svg>
                        </a>
                        <a href="https://twitter.com/amazonspring_w" rel="noindex nofollow noreferrer" target="_blank">
                            <svg width="24" height="20">
                                <use xlink:href="#icon-twitter"></use>
                            </svg>
                        </a>
                        <a href="https://www.linkedin.com/company/amazon-spring-waters/about/?viewAsMember=true" rel="noindex nofollow noreferrer" target="_blank">
                            <svg width="24" height="24">
                                <use xlink:href="#icon-linkedin"></use>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<div class="sprite" style="height: 0; overflow: hidden;">
    <svg xmlns="http://www.w3.org/2000/svg">
        <symbol viewBox="0 0 14 19" fill="none" id="bottom-arrow">
            <path d="M1 12L7 18L13 12" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                  stroke-linejoin="round"/>
            <path d="M1 1L7 7L13 1" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                  stroke-linejoin="round"/>
        </symbol>
        <symbol viewBox="0 0 24 24" fill="none" id="icon-facebook">
            <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M12 24C18.6274 24 24 18.6274 24 12C24 5.37258 18.6274 0 12 0C5.37258 0 0 5.37258 0 12C0 17.9145 4.27892 22.8296 9.91 23.8186V15.6699H6.85714V12.2829H9.91V9.70152C9.91 6.76538 11.7041 5.14286 14.4517 5.14286C15.7667 5.14286 17.1429 5.37171 17.1429 5.37171V8.2552H15.6258C14.1323 8.2552 13.6673 9.15917 13.6673 10.086V12.2829H17.0019L16.4689 15.6699H13.6673V23.8581C13.0885 23.9467 12.4971 23.9945 11.8951 23.9996C11.93 23.9999 11.965 24 12 24Z"
                  fill="currentColor"/>
        </symbol>
        <symbol viewBox="0 0 24 24" fill="none" id="icon-instagram">
            <path
                d="M20.4 5.4C20.4 6.39411 19.5941 7.2 18.6 7.2C17.6059 7.2 16.8 6.39411 16.8 5.4C16.8 4.40589 17.6059 3.6 18.6 3.6C19.5941 3.6 20.4 4.40589 20.4 5.4Z"
                fill="currentColor"/>
            <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M12 18C15.3137 18 18 15.3137 18 12C18 8.68629 15.3137 6 12 6C8.68629 6 6 8.68629 6 12C6 15.3137 8.68629 18 12 18ZM12 15.6C13.9882 15.6 15.6 13.9882 15.6 12C15.6 10.0118 13.9882 8.4 12 8.4C10.0118 8.4 8.4 10.0118 8.4 12C8.4 13.9882 10.0118 15.6 12 15.6Z"
                  fill="currentColor"/>
            <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M0 11.52C0 7.48762 0 5.47143 0.784753 3.93127C1.47504 2.5765 2.5765 1.47504 3.93127 0.784753C5.47143 0 7.48762 0 11.52 0H12.48C16.5124 0 18.5286 0 20.0687 0.784753C21.4235 1.47504 22.525 2.5765 23.2152 3.93127C24 5.47143 24 7.48762 24 11.52V12.48C24 16.5124 24 18.5286 23.2152 20.0687C22.525 21.4235 21.4235 22.525 20.0687 23.2152C18.5286 24 16.5124 24 12.48 24H11.52C7.48762 24 5.47143 24 3.93127 23.2152C2.5765 22.525 1.47504 21.4235 0.784753 20.0687C0 18.5286 0 16.5124 0 12.48V11.52ZM11.52 2.4H12.48C14.5358 2.4 15.9333 2.40187 17.0135 2.49012C18.0657 2.57609 18.6038 2.73191 18.9792 2.92317C19.8823 3.38336 20.6166 4.11767 21.0768 5.02085C21.2681 5.3962 21.4239 5.93429 21.5099 6.98649C21.5981 8.06671 21.6 9.46421 21.6 11.52V12.48C21.6 14.5358 21.5981 15.9333 21.5099 17.0135C21.4239 18.0657 21.2681 18.6038 21.0768 18.9792C20.6166 19.8823 19.8823 20.6166 18.9792 21.0768C18.6038 21.2681 18.0657 21.4239 17.0135 21.5099C15.9333 21.5981 14.5358 21.6 12.48 21.6H11.52C9.46421 21.6 8.06671 21.5981 6.98649 21.5099C5.93429 21.4239 5.3962 21.2681 5.02085 21.0768C4.11767 20.6166 3.38336 19.8823 2.92317 18.9792C2.73191 18.6038 2.57609 18.0657 2.49012 17.0135C2.40187 15.9333 2.4 14.5358 2.4 12.48V11.52C2.4 9.46421 2.40187 8.06671 2.49012 6.98649C2.57609 5.93429 2.73191 5.3962 2.92317 5.02085C3.38336 4.11767 4.11767 3.38336 5.02085 2.92317C5.3962 2.73191 5.93429 2.57609 6.98649 2.49012C8.06671 2.40187 9.46421 2.4 11.52 2.4Z"
                  fill="currentColor"/>
        </symbol>
        <symbol viewBox="0 0 24 20" fill="none" id="icon-twitter">
            <path
                d="M7.53321 20C4.76035 20 2.17558 19.1818 0 17.7701C1.84714 17.8914 5.10692 17.601 7.1345 15.6389C4.08435 15.497 2.7088 13.1237 2.52938 12.1095C2.78854 12.211 4.02454 12.3327 4.72229 12.0487C1.21363 11.1562 0.675367 8.03245 0.79498 7.07911C1.45285 7.54564 2.56925 7.70791 3.00783 7.66734C-0.261606 5.29412 0.914594 1.72414 1.49273 0.953347C3.83899 4.25101 7.35532 6.1031 11.7055 6.20612C11.6234 5.84118 11.5801 5.46124 11.5801 5.07099C11.5801 2.27036 13.8115 0 16.564 0C18.0022 0 19.2981 0.619786 20.2077 1.61116C21.1688 1.3827 22.6151 0.847885 23.3222 0.385396C22.9658 1.68357 21.8562 2.76651 21.1851 3.16789C21.1906 3.18155 21.1796 3.15418 21.1851 3.16789C21.7746 3.07742 23.3698 2.76641 24 2.33266C23.6884 3.06196 22.512 4.27455 21.5466 4.95341C21.7262 12.9896 15.6656 20 7.53321 20Z"
                fill="currentColor"/>
        </symbol>
        <symbol viewBox="0 0 24 24" fill="none" id="icon-linkedin">
            <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M12 0C5.37258 0 0 5.37258 0 12C0 18.6274 5.37258 24 12 24C18.6274 24 24 18.6274 24 12C24 5.37258 18.6274 0 12 0ZM9.10162 6.59327C9.10162 7.39431 8.4073 8.04368 7.55081 8.04368C6.69432 8.04368 6 7.39431 6 6.59327C6 5.79223 6.69432 5.14286 7.55081 5.14286C8.4073 5.14286 9.10162 5.79223 9.10162 6.59327ZM6.21208 9.1098H8.86303V17.1429H6.21208V9.1098ZM10.4801 9.1098H13.1311V10.1404C13.576 9.57434 14.4303 8.94864 15.8085 8.94864C18.1293 8.94864 18.8347 10.196 18.8571 12.9032V17.1429H16.2062C16.2062 16.6189 16.2025 16.0922 16.1989 15.5656C16.1938 14.8187 16.1886 14.0723 16.1938 13.3347C16.2006 12.3725 16.2094 11.1305 14.7482 11.1305C13.4551 11.1305 13.1311 12.0837 13.1311 13.0327V17.1429H10.4801V9.1098Z"
                  fill="currentColor"/>
        </symbol>
    </svg>
</div>
</div>
<script src="{{asset('js/scripts.js?v=1.1')}}"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="{{asset('js/main.js')}}"></script>
<script>
    @if (Session::has('success'))
    showSuccessfulness()
    @endif
</script>
</body>
</html>
