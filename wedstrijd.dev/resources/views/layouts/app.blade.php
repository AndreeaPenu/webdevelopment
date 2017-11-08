<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Mario Bros</title>

    <!-- Styles -->
    <link href="{{asset('css/app.css') }}" rel="stylesheet">
    <link href="{{asset('css/custom.css')}}" rel="stylesheet">
    <link href="{{asset('css/sticky-footer-navbar.css')}}" rel="stylesheet">
    <link href="{{asset('css/signin.css')}}" rel="stylesheet">
    <link href="{{asset('css/album.css')}}" rel="stylesheet">

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <img class="logo" src="{{asset('/images/nintendo-logo2.png')}}" alt="nintendo">
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->

                        @if(Auth::user()->role_id=1)
                            <li><a href="{{ url('/users') }}">Users</a></li>
                        @endif

                        @guest
                        {{--    <li><a href="{{ route('login') }}">Aanmelden</a></li>
                            <li><a href="{{ route('register') }}">Registreren</a></li>--}}
                            <li><a href="{{ url('/home' )}}"></a>Dashboard</li>
                            <li><a href="{{ url('/auth/facebook' )}}"></a>Aanmelden met Facebook</li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
        <footer class="footer">
            <div class="container">
                <span class="text-muted">© Nintendo</span>
            </div>
        </footer>

    </div>

    <!-- Scripts -->
    <script language="JavaScript" type="text/javascript" src="{{ asset('js/app.js') }}"></script>
    <script language="JavaScript" type="text/javascript" src="{{ asset('js/custom.js') }}"></script>
</body>
</html>
