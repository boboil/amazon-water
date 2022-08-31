<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Amazon Spring Water</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/styles.css')}}" />


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@300;400;500;600&family=Playfair+Display:wght@500&display=swap" rel="stylesheet">

    <link rel="apple-touch-icon" sizes="72x72" href="{{asset('/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('/favicon-16x16.png')}}">
{{--    <link rel="manifest" href="{{asset('/site.webmanifest')}}">--}}
    <link rel="mask-icon" href="{{asset('/safari-pinned-tab.svg')}}" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

</head>
<body>
<div class="wrapper">


    <!-- актуальный хедер -->
    <header class="header">
        <div class="container">
            <!-- <a href="/" class="logo-tablet">
                <img src="img/logo.png" alt="">
            </a> -->
            <div class="logo-tablet">
                <a href="{{route('index')}}">
                    <img src="{{asset('img/logo.png')}}" alt="">
                </a>

            </div>

            <nav class="menu">
                <ul class="menu-list">
                    <li class="menu-elem">
                        <a href="{{route('sustainability')}}" class="menu-link">Sustainability</a>
                    </li>
                    <li class="menu-elem">
                        <a href="{{route('spiring')}}" class="menu-link">The spring</a>
                    </li>
                    <li class="menu-elem">
                        <a href="{{route('about')}}" class="menu-link">About us</a>
                    </li>
                    <li class="menu-elem logo-elem">
                        <!-- <a href="/" class="logo">
                            <img src="img/logo.png" alt="">
                        </a> -->
                        <div class="logo">
                            <a href="{{route('index')}}">
                                <img src="{{asset('img/logo.png')}}" alt="">
                            </a>
                        </div>
                    </li>
                    <li class="menu-elem">
                        <a href="{{route('ambassador')}}" class="menu-link">Brand ambassador</a>
                    </li>
                    <li class="menu-elem">
                        <a href="{{route('index')}}#products" class="menu-link">Product range</a>
                    </li>
                    <li class="menu-elem">
                        <a href="{{route('index')}}" class="menu-link">Share price</a>
                    </li>
                </ul>
            </nav>

        {{--            <a href="/" target="_blank" class="btn buy">Buy now</a>--}}

            <button class="burger-btn">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>
    </header>
