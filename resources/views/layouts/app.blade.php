<html>
    <head>
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <title>App Name - @yield('title')</title>
    </head>
    <body>
        <div class="container">
          <h1 class="text-center">@yield('title')</h1>
          @section('sidebar')
          <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="mx-auto">
              <a class="btn btn-primary {{ (request()->is('/')) ? 'disabled' : '' }}" href="{{ route('home') }}">Count</a>
              <a class="btn btn-success {{ (request()->is('history')) ? 'disabled' : '' }}" href="{{ route('history') }}">History</a>
            </div>
          </nav>
          @show
          @yield('content')
        </div>
    </body>
</html>