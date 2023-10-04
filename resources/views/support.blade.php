@extends('layouts.default')
@section('content')
    <main class="content">
        <section class="block block-banner-text text-centered wow animate__fadeIn" data-wow-delay="1.2s">
            <div class="bg">
                <img src="{{asset('img/bg/bg-4.jpg')}}" alt="" loading="lazy">
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
    </main>
@endsection
