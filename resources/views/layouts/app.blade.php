
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'TOPuPG') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    
    <!-- Swiper -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <!-- icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">


    @yield('styles')
   
</head>

<body>
    <div id="app">
        @yield('navbar')
        @if (!View::hasSection('hideNavbar'))
        <nav class="navbar navbar-expand-md navbar-light shadow-sm nav-base">
            <div class="container">

        
        @auth
        <div class="hamburger" id="hamburger">☰</div>

        <div class="sidebar" id="sidebar">
            <!-- LOGO -->
            <div class="sidebar-header">
                <img src="{{ asset('img/logo.png') }}" alt="TopUpin" class="sidebar-logo">
                <p class="sidebar-text">
                    Fulfill your wishes <br> in our store
                </p>
            </div>

            <!-- MENU -->
            <nav class="sidebar-menu">
                <a href="{{ route('home') }}">
                    <i class="bi bi-speedometer2"></i>
                    <span>Home</span>
                </a>

                <a href="{{ route('games.index') }}">
                    <i class="bi bi-controller"></i>
                    <span>Games</span>
                </a>

                <a href="{{ route('transactions.index') }}">
                    <i class="bi bi-receipt"></i>
                    <span>Transaksi</span>
                </a>

                <a href="{{ route('about') }}">
                    <i class="bi bi-info-circle"></i>
                    <span>About Us</span>
                </a>
            </nav>

            <!-- BOTTOM -->
            <div class="sidebar-footer">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="logout-btn">
                        <i class="bi bi-box-arrow-right"></i>
                        Logout
                    </button>
                </form>

                <small class="copyright">
                    © {{ date('Y') }} TopUpin
                </small>
            </div>
        </div>

        <div class="overlay" id="overlay"></div>
        @endauth


            <a class="navbar-brand brand" href="{{ route('home') }}">
                <img src="{{ asset('img/logo.png') }}" 
                    alt="TopUpin" 
                    class ="brand-logo">
                    <span class="brand-text">Lets TopUp</span>
                <!-- {{ config('app.name',  asset('img/logo.png')) }} -->
            </a>



            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>


            
            @guest
            <!-- Tombol login mobile di navbar -->
            <div class="d-md-none ms-2">
                <button class="btn nav-auth-mob-btn w-auto " data-bs-toggle="modal" data-bs-target="#loginModal">
                    Login
                </button>
            </div>
            @endguest


            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav me-auto"></ul>

           

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ms-auto align-items-center">
                    <li class="nav-item me-3 search-b">
                        <form action="{{ route('games.index') }}" method="GET" class="d-flex search-desktop">
                            <input
                                class="form-control form-control-sm"
                                type="search"
                                name="q"
                                placeholder="Cari game..."
                                value="{{ request('q') }}"
                            >
                            <button class="btn btn-warning" type="submit">
                                <i class="bi bi-search"></i>
                            </button>
                        </form>
                    </li>


                    <!-- Authentication Links -->
                    @guest
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <button class="btn nav-auth-btn"
                                        data-bs-toggle="modal"
                                        data-bs-target="#loginModal">
                                    {{ __('Login') }}
                                </button>
                            </li>
                        @endif
                        
                        <!-- register button on nav -->
                        <!-- @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="btn nav-auth-btn" href="{{ route('register') }}">
                                    {{ __('Register') }}
                                </a>
                            </li>
                        @endif -->
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle user-name" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
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
                    @endguest
                </ul>
            </div>
        </div>
    </nav>

   
    <form action="{{ route('games.index') }}" method="GET" class="d-md-none mobile-search">
        <div class="mobile-search-wrapper">
            <input class="mobile-search-input" type="search" name="q" placeholder="Cari game..." value="{{ request('q') }}">
            <button class="mobile-search-btn" type="submit">
                <i class="bi bi-search"></i>
            </button>
        </div>
    </form>

    

    <!-- login mobile
    @guest
        
        <div class="d-md-none mobile-login text-center mb-2">
            <button class="btn nav-auth-btn" data-bs-toggle="modal" data-bs-target="#loginModal">
                Login
            </button>
        </div>
    @endguest -->

            
    @endif

        
        
        <main class ="px-4">
            @yield('content')
        </main>

    </div>
    @include('components.login-modal')

    @include('layouts.footer')
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
</body>
</html>
