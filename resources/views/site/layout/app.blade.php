<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <link rel="stylesheet" href="{{ asset('css/themes/themify-icons-1.css') }}">
    <link rel="stylesheet" href="{{ asset('css/feather-1.css') }}">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/favicon-1.png') }}">
    <!-- Custom Stylesheet -->
    <link rel="stylesheet" href="{{ asset('css/style-1.css') }}">
</head>
<body class="color-theme-blue">

    <div class="preloader"></div>

    <div class="main-wrap">

        <div class="nav-header bg-transparent shadow-none border-0">
            <div class="nav-top w-100">
                <a href="index-1.html"><i class="feather-zap text-success display1-size me-2 ms-0"></i><span class="d-inline-block fredoka-font ls-3 fw-600 text-current font-xxl logo-text mb-0">Sociala. </span> </a>
                <a href="#" class="mob-menu ms-auto me-2 chat-active-btn"><i class="feather-message-circle text-grey-900 font-sm btn-round-md bg-greylight"></i></a>
                <a href="default-video-1.html" class="mob-menu me-2"><i class="feather-video text-grey-900 font-sm btn-round-md bg-greylight"></i></a>
                <a href="#" class="me-2 menu-search-icon mob-menu"><i class="feather-search text-grey-900 font-sm btn-round-md bg-greylight"></i></a>
                <button class="nav-menu me-0 ms-2"></button>
                {{-- <a href="#" class="header-btn d-none d-lg-block bg-dark fw-500 text-white font-xsss p-3 ms-auto w100 text-center lh-20 rounded-xl" data-bs-toggle="modal" data-bs-target="#Modallogin">Login</a> --}}
                {{-- <a href="#" class="header-btn d-none d-lg-block bg-current fw-500 text-white font-xsss p-3 ms-2 w100 text-center lh-20 rounded-xl" data-bs-toggle="modal" data-bs-target="#Modalregister">Register</a> --}}
                    <!-- Authentication Links -->
                    @guest
                        @if (Route::has('login'))
                            <a class="header-btn d-none d-lg-block bg-dark fw-500 text-white font-xsss p-3 ms-auto w100 text-center lh-20 rounded-xl"  href="{{ route('login') }}">{{ __('Login') }}</a>
                        @endif
                        @if (Route::has('register'))
                            <a class="header-btn d-none d-lg-block bg-current fw-500 text-white font-xsss p-3 ms-2 w100 text-center lh-20 rounded-xl"  href="{{ route('register') }}">{{ __('Register') }}</a>
                        @endif
                    @endguest
            </div>
        </div>

        @yield('content')

    <script src="{{ asset('js/plugin-1.js')}}"></script>
    <script src="{{ asset('js/scripts-1.js')}}"></script>

</body>
</html>
