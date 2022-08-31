@extends('layouts.default')
@section('content')
    <main class="content">
        <section class="block block-banner-text text-centered wow animate__fadeIn" data-wow-delay="1.2s">
            <div class="bg">
                <img src="{{asset('img/bg/bg-1.jpg')}}" alt="" loading="lazy">
            </div>
            <div class="container">
                <h1 class="title page-title wow animate__fadeIn" data-wow-delay="1.5s">Our Promise</h1>
                <div class="descr wow animate__fadeInUp" data-wow-delay="1.8s">
                    ASW established a successful model of public – private partnership that combines elements of non-profit charitable contribution, private enterprise, and governmental policy to accomplish a common goal.
                </div>
                <div class="bottom-arrow">
                    <svg width="14" height="19"><use xlink:href="#bottom-arrow"></use></svg>
                </div>
            </div>
        </section>

        <section class="block block-sustainable-future wow animate__fadeInUp" data-wow-delay=".3s" data-wow-offset="30">
            <div class="container">
                <h2 class="title block-title text-centered wow animate__fadeIn" data-wow-delay=".6s">Sustainable future</h2>
                <div class="text-group">
                    <div class="image wow animate__fadeInLeft" data-wow-delay=".9s">
                        <img src="{{asset('img/temp/future-banner-1.jpg')}}" alt="" loading="lazy">
                    </div>
                    <div class="text wow animate__fadeInRight" data-wow-delay="1.2s">
                        <h3 class="title">Environmental Protection</h3>
                        <div class="descr wow animate__fadeInUp" data-wow-delay="1.5s">
                            ASW is proud to present its 300mL, 500mL, 1000mL made of 100% fully recyclable plastic bottles. ASW’s intent is to adopt fully biodegradable plastic for its packaging to ensure its products do not cause environmental damage.
                        </div>
                    </div>
                </div>
                <div class="text-group">
                    <div class="image wow animate__fadeInLeft" data-wow-delay=".6s">
                        <img src="{{asset('img/temp/future-banner-2.jpg')}}" alt="" loading="lazy">
                    </div>
                    <div class="text wow animate__fadeInRight" data-wow-delay="1.2s">
                        <h3 class="title">Rainforest foundation</h3>
                        <div class="descr wow animate__fadeInUp" data-wow-delay="1.5s">
                            ASW is committed to developing a consumer donation program, with the conservation platform sanctioned by the Brazilian government, so that at least 0.2l of every one liter purchased is destined to protect the Amazon Rainforest.
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{--
        <section class="block block-question-form wow animate__fadeInUp" data-wow-delay=".3s">
            <div class="bg">
                <img src="{{asset('img/bg/bg-3.jpg')}}" alt="" loading="lazy">
            </div>
            <div class="container">
                <h2 class="title block-title text-centered wow animate__fadeIn" data-wow-delay=".6s">Do you have a question?</h2>
                <form action="{{route('createFeedback')}}" class="question-form">
                    @csrf
                    <div class="form-content wow animate__fadeInUp" data-wow-delay=".9s">
                        <div class="input-group">
                            <label for="first-name-input"  class="group-label">First name</label>
                            <div class="input-wrapper">
                                <input type="text" placeholder=" " name="name" id="first-name-input" required>
                            </div>
                        </div>
                        <div class="input-group">
                            <label for="last-name-input" class="group-label">Last name</label>
                            <div class="input-wrapper">
                                <input type="text" placeholder=" " name="last_name" id="last-name-input">
                            </div>
                        </div>
                        <div class="input-group">
                            <label for="email-input" class="group-label">E-mail</label>
                            <div class="input-wrapper">
                                <input type="text" placeholder=" " id="email-input" name="email" required>
                            </div>
                        </div>
                        <div class="input-group">
                            <label for="client-type=select" class="group-label">I am a</label>
                            <div class="input-wrapper select-wrapper">
                                <select name="" id="client-type-select">
                                    <option value="" selected>Consumer</option>
                                </select>
                            </div>
                        </div>
                        <div class="input-group">
                            <label for="comment-textarea" class="group-label">Comment</label>
                            <div class="input-wrapper textarea-wrapper">
                                <textarea name="question" id="comment-textarea" placeholder="Write your comment" ></textarea>
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
                    <button type="submit" class="btn submit wow animate__fadeInUp" data-wow-delay="1.2s">submit</button>
                </form>
            </div>
        </section>
        --}}
    </main>
@endsection
