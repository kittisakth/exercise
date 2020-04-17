<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Counting Alphabet') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/layout.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Counting Alphabet') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    

                    <!-- Right Side Of Navbar -->
                    @guest
                        <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        </ul>
                    @else
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item {{ (request()->is('count')) ? 'active' : '' }}">
                                <a class="nav-link" href="{{ route('home') }}">Count</a>
                            </li>
                            <li class="nav-item {{ (request()->is('history')) ? 'active' : '' }}">
                                <a class="nav-link" href="{{ route('history') }}">History</a>
                            </li>
                            @if( Auth::user()->isAdmin() )
                            <li class="nav-item {{ (request()->is('users')) ? 'active' : '' }}">
                                <a class="nav-link" href="{{ route('users') }}">User Lists</a>
                            </li>
                            @endif
                        </ul>
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link {{ (request()->is('profile')) ? 'active' : '' }}" href="{{ route('profile') }}">
                                    <img src="{{ Auth::user()->img_path != null ? asset(Auth::user()->img_path): config('app.default_profile') }}" 
                                        class="avartar-img"/>
                                    {{ Auth::user()->name }}
                                </a>
                            </li>
                            <li class="nav-item ml-2">
                                
                            </li>
                        </ul>
                        <a class="btn btn-danger" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                        </a>
    
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    @endguest
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
