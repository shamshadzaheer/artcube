<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('page-title', 'ArtCube')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @yield('head')
</head>
<body>
    <div id="app">
        <header class="site-header" style="background-image: url('@yield("header-image", "/images/main-header.jpg")'); background-position: center;">
            <nav class="navbar navbar-expand-md navbar-light">
                <div class="container">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <img src="{{ url("images/logo.png") }}" alt="Logo" width="30">
                        {{ config('app.name', 'ArtCube') }}
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav mr-auto">

                        </ul>

                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link @if(request()->is('/') || request()->is('home')) active @endif" href="{{ route('home') }}">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link @if(request()->is('videos')) active @endif" href="{{ route('videos.index') }}">Videos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link @if(request()->is('photos')) active @endif" href="{{ route('photos.index') }}">Photos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link @if(request()->is('about')) active @endif" href="{{ route('about.index') }}">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link @if(request()->is('services')) active @endif" href="{{ route('services.index') }}">Services</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link @if(request()->is('contactus')) active @endif" href="{{ route('contact.index') }}">Contact</a>
                            </li>
                            @auth
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }}
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            @endauth
                        </ul>
                    </div>
                </div>
            </nav>

            <div class="container header-text">
                <strong>ArtCube:</strong>
                <span>Art of the light and show</span>
            </div>
        </header>
        <div class="header-message">
            <div class="container">
                <p>We are a team of passionate experts who purely enjoy working.</p>
            </div>
        </div>

        <main class="py-4">
            @yield('content')
        </main>

        <footer>
            <div class="container">
                <div class="row mb-4">
                    <div class="col-md-3">
                        <h2>Quick Links</h2>
                        <ul class="quick-links">
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li><a href="{{ route('about.index') }}">About Us</a></li>
                            <li><a href="{{ route('services.index') }}">Services</a></li>
                            <li><a href="{{ route('contact.index') }}">Contact Us</a></li>

                        </ul>
                    </div>
                    <div class="col-md-7">
                        <h2>Contact Us</h2>
                        <p>House No. 40, First Street Qala-e-Fatullah, Kabul, Afghanistan
                            <br>
                            info@artcube-af.com <br>
                            +93777724870
                        </p>
                    </div>
                    <div class="col-md-2">
                        <ul class="social-media">
                            <li><a href="{{ config('social.facebook') }}"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="{{ config('social.youtube') }}"><i class="fab fa-youtube"></i></a></li>
                            <li><a href="{{ config('social.instagram') }}"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="{{ config('social.linkedin') }}"><i class="fab fa-linkedin-in"></i></a></li>
                            <li><a href="{{ config('social.twitter') }}"><i class="fab fa-twitter"></i></a></li>
                        </ul>
                    </div>

                </div>
                <div class="row">
                    <div class="col footer-copyright-text">
                        <p>&copy; Copyright ArtCube - Afghanistan {{ date('Y') }}.</p>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    @yield('scripts')
</body>
</html>
