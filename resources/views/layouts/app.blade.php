<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'BoolBnb') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    {{-- Container App --}}
    <div id="app">

        {{-- NAVBAR --}}
        <nav class="navbar navbar-expand-sm navbar-light fixed-top shadow-sm">

            {{-- Navbar Container --}}
            <div class="container">

                {{-- Logo --}}
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'BoolBnb') }}
                </a>

                {{-- Hamburger Menu --}}
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Authentication Links -->
                        @guest

                          <!-- Login -->
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))

                              <!-- Register -->
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else

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
                            <li class="nav-item">
                              <a class="nav-link" href="{{ route('upr.home') }}">Dashboard</a>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        {{-- END NAVBAR --}}

        {{-- MAIN SECTION --}}
        @yield('content')
        {{-- END MAIN SECTION --}}

        {{-- FOOTER --}}
        <footer class="mt-0">

          <!-- Top Footer -->

          <div class="cs-top-footer container d-sm-flex justify-content-center justify-content-sm-between">

            <!-- First List -->
            <ul class="list-unstyled">
              <li><a href="#">CORRADO CARUSO</a></li>
              <li><a href="#">CORRADO CARUSO</a></li>
              <li><a href="#">CORRADO CARUSO</a></li>
              <li><a href="#">CORRADO CARUSO</a></li>
              <li><a href="#">CORRADO CARUSO</a></li>
            </ul>
            <!-- End First List -->

            <!-- Second List -->
            <ul class="list-unstyled">
              <li><a href="#">SAMUELE GUGLIELMI</a></li>
              <li><a href="#">SAMUELE GUGLIELMI</a></li>
              <li><a href="#">SAMUELE GUGLIELMI</a></li>
              <li><a href="#">SAMUELE GUGLIELMI</a></li>
              <li><a href="#">SAMUELE GUGLIELMI</a></li>
            </ul>
            <!-- End Second List -->

            <!-- Third List -->
            <ul class="list-unstyled">
              <li><a href="#">GIUSEPPE ROTOLO</a></li>
              <li><a href="#">GIUSEPPE ROTOLO</a></li>
              <li><a href="#">GIUSEPPE ROTOLO</a></li>
              <li><a href="#">GIUSEPPE ROTOLO</a></li>
              <li><a href="#">GIUSEPPE ROTOLO</a></li>
            </ul>
            <!-- End Third List -->

            <!-- Fourth List -->
            <ul class="list-unstyled">
              <li><a href="#">DAVIDE TERMITE</a></li>
              <li><a href="#">DAVIDE TERMITE</a></li>
              <li><a href="#">DAVIDE TERMITE</a></li>
              <li><a href="#">DAVIDE TERMITE</a></li>
              <li><a href="#">DAVIDE TERMITE</a></li>
            </ul>
            <!-- End Fourth List -->
          </div>
          <!-- End Top Footer -->

          <hr class="container">


          <!-- Bottom Footer -->
          <div class="cs-bottom-footer container d-sm-flex justify-content-xs-center justify-content-sm-between">

            <span class="cs-legal">
              © 2020 Boolbnb, Inc. All rights reserved
            </span>

            <ul class="cs-socials list-unstyled">
              <a href="#"><i class="fab fa-facebook"></i></a>
              <a href="#"><i class="fab fa-facebook"></i></a>
              <a href="#"><i class="fab fa-facebook"></i></a>
              <a href="#"><i class="fab fa-facebook"></i></a>
            </ul>

          </div>
          <!-- End Bottom Footer -->

        </footer>
        {{-- END FOOTER --}}

    </div>
</body>
</html>
