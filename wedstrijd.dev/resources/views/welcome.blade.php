<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Mario Bros</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{asset('css/cover.css')}}" rel="stylesheet">
</head>

<body>

<div class="site-wrapper">

    <div class="site-wrapper-inner">

        <div class="cover-container">

            <header class="masthead clearfix">
                <div class="inner">
                    <h3 class="masthead-brand"><img class="logo" src="{{asset('/images/nintendo-logo.png')}}" alt="nintendo"></h3>


                    @if (Route::has('login'))
                        <nav class="nav nav-masthead">
                            @auth
                            <a class="nav-link" href="{{ url('/home') }}">Dashboard</a>
                            <a class="nav-link" href="{{ url('/participations' )}}">Deelnames</a>
                            @else
                             {{--   <a class="nav-link" href="{{ route('login') }}">Aanmelden</a>
                                <a class="nav-link" href="{{ route('register') }}">Registreren</a>
                                <a class="nav-link" href="{{ url('/auth/facebook' )}}">Login met Facebook</a>--}}
                                @endauth
                        </nav>
                    @endif

                </div>
            </header>

            <main role="main" class="inner cover">
                <h1 class="cover-heading">Win de nieuwe super Mario Bros!</h1>
                <p class="lead">Je hoeft enkel een tekening te maken en op onze site posten. De creatie met de meeste likes wint!</p>
                <p class="lead">
                    <a href="{{ url('/auth/facebook' )}}" class="btn btn-lg btn-secondary">Deelnemen</a>
                </p>
            </main>

            <footer class="mastfoot">
                <div class="inner">
                    <p>© Nintendo.</p>
                </div>
            </footer>

        </div>

    </div>

</div>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery.min.js"><\/script>')</script>
<script src="../../../../assets/js/vendor/popper.min.js"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
</body>
</html>
