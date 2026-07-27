<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Amoleck Group Company LTD') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand d-flex align-items-center text-decoration-none" href="{{ url('/') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-building-fill-check me-2 text-primary" viewBox="0 0 16 16">
                        <path d="M12.5 8a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3"/>
                        <path d="M13.5 9a2.5 2.5 0 0 0-2.45 2h-2.1a2.5 2.5 0 0 0-2.45-2 2.5 2.5 0 0 0-2.45 2H3.5V2h5v3h3v3h2z"/>
                        <path d="M8.5 8.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 0 1H9v.5a.5.5 0 0 1-1 0V10H7.5a.5.5 0 0 1 0-1H8v-.5a.5.5 0 0 1 .5-.5"/>
                        <path d="M2 1a1 1 0 0 1 1-1h5a1 1 0 0 1 1 1v1h.5a.5.5 0 0 1 .5.5V5h1V4.5a.5.5 0 0 1 .5-.5H14a1 1 0 0 1 1 1v9a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V2.5a.5.5 0 0 1 .5-.5H2zm1 1v1h1V2zm0 2v1h1V4zm0 2v1h1V6zm0 2v1h1V8zm0 2v1h1v-1zm0 2v1h1v-1zM3 12v1h1v-1zm0 1v1h1v-1zm1 0v1h1v-1zm1 0v1h1v-1zm1 0v1h1v-1zm1 0v1h1v-1zM9 2v1h1V2zm0 2v1h1V4zm0 2v1h1V6zm0 2v1h1V8zm0 2v1h1v-1zm0 2v1h1v-1zm1 0v1h1v-1zm1 0v1h1v-1zm1 0v1h1v-1zm1-1v1h1v-1zm0-1v1h1V8zm0-1v1h1V6zm0-1v1h1V4zm0-1v1h1V2zm0-1v1h1V1zm0-1v1h1V0z"/>
                    </svg>
                    <span class="fw-bold fs-5 text-dark">{{ config('app.name', 'Amoleck Group Company LTD') }}</span>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
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

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
