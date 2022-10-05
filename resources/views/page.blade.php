@extends('layouts.default')
@section('content')
    <main class="content">
        <section class="block block-text wow animate__fadeIn" data-wow-delay=".6s">
            <div class="container">
                <h1 class="title page-title text-centered wow animate__fadeInUp"
                    data-wow-delay="1.5s">{{$page->title}}</h1>
                {!! $page->description !!}
            </div>
        </section>
    </main>
@endsection
