
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
    
    <!-- CSS kamu -->
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    
    @yield('styles')
   
</head>

<body>
    <div id="app">
        @yield('navbar')
        @if (!View::hasSection('hideNavbar'))
        <nav class="navbar navbar-expand-md navbar-light shadow-sm nav-base">
            <div class="container">

                @auth
                    <div class="hamburger" id="hamburger">
                        ☰
                    </div>

                    <!-- ada perubahan route di side bar -->
                    <div class="sidebar" id="sidebar">
                        <img src="{{ asset('img/logo.png') }}" alt="TopUpin" class ="sidebar-logo"> </br>
                        <p class="sidebar-text">Fullfill your wishest in </br> our store</p> </br>
                        <a href="{{ route('home') }}">Home</a>
                        <a href="{{ route('games.index') }}">Games</a>
                        <a href="{{ route('transactions.create') }}">Transaksi</a>
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

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto align-items-center">
                        <li class="nav-item me-3">
                            <form action="{{ route('games.index') }}" method="GET" class="d-flex me-3">
                                <input
                                    class="form-control form-control-sm me-2"
                                    type="search"
                                    name="q"
                                    placeholder="Cari game..."
                                    value="{{ request('q') }}"
                                >
                                <button class="btn btn-sm btn-warning" type="submit">
                                    Search
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
        @endif

        
        
        <main class ="py-4 px-4">
            @yield('content')
        </main>

    </div>
    @include('components.login-modal')

    @include('layouts.footer')
    
    <script src="{{ asset('js/custom.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
