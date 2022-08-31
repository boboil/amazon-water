@extends('layouts.default')
@section('content')
    <main class="content">
        <section class="block block-banner-text text-centered wow animate__fadeIn" data-wow-delay="1.2s">
            <div class="bg">
                <img src="img/bg/bg-4.jpg" alt="" loading="lazy">
            </div>
            <div class="container">
                <h1 class="title page-title wow animate__fadeIn" data-wow-delay="1.5s">Do you have a question?</h1>

                <form action="{{route('createFeedback')}}" method="post" class="question-form">
                    @csrf
                    <div class="form-content">
                        <div class="input-group">
                            <label for="first-name-input" class="group-label">First name</label>
                            <div class="input-wrapper">
                                <input type="text" placeholder=" " id="first-name-input" name="name" required>
                            </div>
                        </div>
                        <div class="input-group">
                            <label for="last-name-input" class="group-label">Last name</label>
                            <div class="input-wrapper">
                                <input type="text" placeholder=" " id="last-name-input" name="last_name">
                            </div>
                        </div>
                        <div class="input-group">
                            <label for="email-input" class="group-label">E-mail</label>
                            <div class="input-wrapper">
                                <input type="email" placeholder=" " id="email-input" name="email" required>
                            </div>
                        </div>
                        <div class="input-group wide-group">
                            <label for="" class="group-label">Your question</label>
                            <div class="input-wrapper">
                                <input type="text" placeholder=" " id="email-input" name="question">
                            </div>
                        </div>
                        <div class="input-group">
                            <label for="client-type=select" class="group-label">I am a</label>
                            <div class="input-wrapper select-wrapper">
                                <select id="client-type-select" name="consumer">
                                    <option value="consumer" selected>Consumer</option>
                                </select>
                            </div>
                        </div>
                        <div class="input-group checkbox-group">
                            <label class="checkbox-wrapper">
                                <input type="checkbox" hidden checked>
                                <span class="checkbox-custom"></span>
                                <span class="checkbox-text">Customer</span>
                            </label>
                            <label class="checkbox-wrapper">
                                <input type="checkbox" hidden checked>
                                <span class="checkbox-custom"></span>
                                <span class="checkbox-text">I agree with privacy policy</span>
                            </label>
                        </div>
                    </div>
                    <button type="submit" class="btn submit">submit</button>
                </form>

                <div class="bottom-arrow">
                    <svg width="14" height="19"><use xlink:href="#bottom-arrow"></use></svg>
                </div>
            </div>
        </section>

{{--        <section class="block block-faq-tabs wow animate__fadeInUp" data-wow-delay=".5s" data-wow-offset="30">--}}
{{--            <div class="bg">--}}
{{--                <img src="img/bg/bg-3.jpg" alt="" loading="lazy">--}}
{{--            </div>--}}
{{--            <div class="container">--}}
{{--                <h2 class="title block-title text-centered wow animate__fadeIn" data-wow-delay="1s">FAQ</h2>--}}
{{--                <div class="faq-tabs">--}}
{{--                    <div class="tab-selectors wow animate__fadeInUp" data-wow-delay="1.5s">--}}
{{--                        <button class="tab-selector active">Ordering & Delivery</button>--}}
{{--                        <button class="tab-selector">Sustainability</button>--}}
{{--                        <button class="tab-selector">The water</button>--}}
{{--                        <button class="tab-selector">Other</button>--}}
{{--                    </div>--}}
{{--                    <div class="tabs wow animate__fadeInUp" data-wow-delay="2s">--}}
{{--                        <div class="tab active">--}}
{{--                            <div class="faq-item">--}}
{{--                                <div class="faq-item-head">--}}
{{--                                    <h4>How i can order Amazon water delivery?</h4>--}}
{{--                                    <div class="button">--}}
{{--                                        <span></span>--}}
{{--                                        <span></span>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="faq-item-body">--}}
{{--                                    <div class="faq-item-body-inner">--}}
{{--                                        <p>--}}
{{--                                            You can order directly on our website  by navigating to Shop and selecting your preferred bottle size, plan and quantity. Simply add to cart and follow our easy check out process.--}}
{{--                                        </p>--}}
{{--                                        <p>--}}
{{--                                            If you prefer, you can also reach us by phone at <a href="tel:8884264602">888.426.4602</a> or email us at <a href="mailto:delivery@amazonwater.com">delivery@amazonwater.com</a>.--}}
{{--                                        </p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="faq-item">--}}
{{--                                <div class="faq-item-head">--}}
{{--                                    <h4>How do i get water automatically on a monthly basis?</h4>--}}
{{--                                    <div class="button">--}}
{{--                                        <span></span>--}}
{{--                                        <span></span>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="faq-item-body">--}}
{{--                                    <div class="faq-item-body-inner">--}}
{{--                                        <p>--}}
{{--                                            You can order directly on our website  by navigating to Shop and selecting your preferred bottle size, plan and quantity. Simply add to cart and follow our easy check out process.--}}
{{--                                        </p>--}}
{{--                                        <p>--}}
{{--                                            If you prefer, you can also reach us by phone at <a href="tel:8884264602">888.426.4602</a> or email us at <a href="mailto:delivery@amazonwater.com">delivery@amazonwater.com</a>.--}}
{{--                                        </p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="faq-item">--}}
{{--                                <div class="faq-item-head">--}}
{{--                                    <h4>Can i get delivery of Amazon water at my office or business location?</h4>--}}
{{--                                    <div class="button">--}}
{{--                                        <span></span>--}}
{{--                                        <span></span>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="faq-item-body">--}}
{{--                                    <div class="faq-item-body-inner">--}}
{{--                                        <p>--}}
{{--                                            You can order directly on our website  by navigating to Shop and selecting your preferred bottle size, plan and quantity. Simply add to cart and follow our easy check out process.--}}
{{--                                        </p>--}}
{{--                                        <p>--}}
{{--                                            If you prefer, you can also reach us by phone at <a href="tel:8884264602">888.426.4602</a> or email us at <a href="mailto:delivery@amazonwater.com">delivery@amazonwater.com</a>.--}}
{{--                                        </p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="faq-item">--}}
{{--                                <div class="faq-item-head">--}}
{{--                                    <h4>Can i get delivery of Amazon water in Ukraine?</h4>--}}
{{--                                    <div class="button">--}}
{{--                                        <span></span>--}}
{{--                                        <span></span>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="faq-item-body">--}}
{{--                                    <div class="faq-item-body-inner">--}}
{{--                                        <p>--}}
{{--                                            You can order directly on our website  by navigating to Shop and selecting your preferred bottle size, plan and quantity. Simply add to cart and follow our easy check out process.--}}
{{--                                        </p>--}}
{{--                                        <p>--}}
{{--                                            If you prefer, you can also reach us by phone at <a href="tel:8884264602">888.426.4602</a> or email us at <a href="mailto:delivery@amazonwater.com">delivery@amazonwater.com</a>.--}}
{{--                                        </p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="faq-item">--}}
{{--                                <div class="faq-item-head">--}}
{{--                                    <h4>Can i track my order?</h4>--}}
{{--                                    <div class="button">--}}
{{--                                        <span></span>--}}
{{--                                        <span></span>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="faq-item-body">--}}
{{--                                    <div class="faq-item-body-inner">--}}
{{--                                        <p>--}}
{{--                                            You can order directly on our website  by navigating to Shop and selecting your preferred bottle size, plan and quantity. Simply add to cart and follow our easy check out process.--}}
{{--                                        </p>--}}
{{--                                        <p>--}}
{{--                                            If you prefer, you can also reach us by phone at <a href="tel:8884264602">888.426.4602</a> or email us at <a href="mailto:delivery@amazonwater.com">delivery@amazonwater.com</a>.--}}
{{--                                        </p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="tab">--}}
{{--                            <div class="faq-item">--}}
{{--                                <div class="faq-item-head">--}}
{{--                                    <h4>2 How i can order Amazon water delivery?</h4>--}}
{{--                                    <div class="button">--}}
{{--                                        <span></span>--}}
{{--                                        <span></span>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="faq-item-body">--}}
{{--                                    <div class="faq-item-body-inner">--}}
{{--                                        <p>--}}
{{--                                            You can order directly on our website  by navigating to Shop and selecting your preferred bottle size, plan and quantity. Simply add to cart and follow our easy check out process.--}}
{{--                                        </p>--}}
{{--                                        <p>--}}
{{--                                            If you prefer, you can also reach us by phone at <a href="tel:8884264602">888.426.4602</a> or email us at <a href="mailto:delivery@amazonwater.com">delivery@amazonwater.com</a>.--}}
{{--                                        </p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="faq-item">--}}
{{--                                <div class="faq-item-head">--}}
{{--                                    <h4>How do i get water automatically on a monthly basis?</h4>--}}
{{--                                    <div class="button">--}}
{{--                                        <span></span>--}}
{{--                                        <span></span>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="faq-item-body">--}}
{{--                                    <div class="faq-item-body-inner">--}}
{{--                                        <p>--}}
{{--                                            You can order directly on our website  by navigating to Shop and selecting your preferred bottle size, plan and quantity. Simply add to cart and follow our easy check out process.--}}
{{--                                        </p>--}}
{{--                                        <p>--}}
{{--                                            If you prefer, you can also reach us by phone at <a href="tel:8884264602">888.426.4602</a> or email us at <a href="mailto:delivery@amazonwater.com">delivery@amazonwater.com</a>.--}}
{{--                                        </p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="tab">--}}
{{--                            <div class="faq-item">--}}
{{--                                <div class="faq-item-head">--}}
{{--                                    <h4>3 How i can order Amazon water delivery?</h4>--}}
{{--                                    <div class="button">--}}
{{--                                        <span></span>--}}
{{--                                        <span></span>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="faq-item-body">--}}
{{--                                    <div class="faq-item-body-inner">--}}
{{--                                        <p>--}}
{{--                                            You can order directly on our website  by navigating to Shop and selecting your preferred bottle size, plan and quantity. Simply add to cart and follow our easy check out process.--}}
{{--                                        </p>--}}
{{--                                        <p>--}}
{{--                                            If you prefer, you can also reach us by phone at <a href="tel:8884264602">888.426.4602</a> or email us at <a href="mailto:delivery@amazonwater.com">delivery@amazonwater.com</a>.--}}
{{--                                        </p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="faq-item">--}}
{{--                                <div class="faq-item-head">--}}
{{--                                    <h4>How do i get water automatically on a monthly basis?</h4>--}}
{{--                                    <div class="button">--}}
{{--                                        <span></span>--}}
{{--                                        <span></span>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="faq-item-body">--}}
{{--                                    <div class="faq-item-body-inner">--}}
{{--                                        <p>--}}
{{--                                            You can order directly on our website  by navigating to Shop and selecting your preferred bottle size, plan and quantity. Simply add to cart and follow our easy check out process.--}}
{{--                                        </p>--}}
{{--                                        <p>--}}
{{--                                            If you prefer, you can also reach us by phone at <a href="tel:8884264602">888.426.4602</a> or email us at <a href="mailto:delivery@amazonwater.com">delivery@amazonwater.com</a>.--}}
{{--                                        </p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="tab">--}}
{{--                            <div class="faq-item">--}}
{{--                                <div class="faq-item-head">--}}
{{--                                    <h4>4 How i can order Amazon water delivery?</h4>--}}
{{--                                    <div class="button">--}}
{{--                                        <span></span>--}}
{{--                                        <span></span>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="faq-item-body">--}}
{{--                                    <div class="faq-item-body-inner">--}}
{{--                                        <p>--}}
{{--                                            You can order directly on our website  by navigating to Shop and selecting your preferred bottle size, plan and quantity. Simply add to cart and follow our easy check out process.--}}
{{--                                        </p>--}}
{{--                                        <p>--}}
{{--                                            If you prefer, you can also reach us by phone at <a href="tel:8884264602">888.426.4602</a> or email us at <a href="mailto:delivery@amazonwater.com">delivery@amazonwater.com</a>.--}}
{{--                                        </p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="faq-item">--}}
{{--                                <div class="faq-item-head">--}}
{{--                                    <h4>How do i get water automatically on a monthly basis?</h4>--}}
{{--                                    <div class="button">--}}
{{--                                        <span></span>--}}
{{--                                        <span></span>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="faq-item-body">--}}
{{--                                    <div class="faq-item-body-inner">--}}
{{--                                        <p>--}}
{{--                                            You can order directly on our website  by navigating to Shop and selecting your preferred bottle size, plan and quantity. Simply add to cart and follow our easy check out process.--}}
{{--                                        </p>--}}
{{--                                        <p>--}}
{{--                                            If you prefer, you can also reach us by phone at <a href="tel:8884264602">888.426.4602</a> or email us at <a href="mailto:delivery@amazonwater.com">delivery@amazonwater.com</a>.--}}
{{--                                        </p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </section>--}}
    </main>
@endsection
