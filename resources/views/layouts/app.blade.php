<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('sass/style.scss') }}" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Alex Brush' rel='stylesheet'>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <title>Header</title>
</head>
<body>
    <div id="app">
        <div class="container-fluid" style="background-color: #24126E;">
            <div class="container">
                <div class="row" style="padding: 2px 0px 2px 0px">
                    <div class="" style="color: white; font-size: small; font-weight: 400; margin-left: 1.5%">
                        <i class="fas fa-phone"></i> 061234567
                    </div>
                    <div class="" style="color: white; font-size: small; font-weight: 400; margin-left: 4%">
                        <i class="fas fa-envelope"></i> Summacollege@voorbeeld.nl
                    </div>
                </div>
            </div>
        </div>
        <nav class="navbar navbar-expand-lg navbar-light bg-light container">
            <a class="navbar-brand" href="Home.php">
                <img src="{{ URL::asset('../img/Logo_SummaFashion.png') }}" width="110" height="45" alt="logo">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

                <div class=" navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    @if (Auth::guest())
                    <ul class="navbar-nav mr-auto">
                        &nbsp;
                        <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="/projects">Projecten</a></li>
                        <li class="nav-item"><a class="nav-link" href="/contact">Contact</a></li>
                    </ul>

                    @elseif ( Auth::user()->role == 0 )
                    <ul class="nav navbar-nav">
                        &nbsp;
                        <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="/opdrachten">Vacaturen</a></li>
                        <li class="nav-item"><a class="nav-link" href="/projects">Projecten</a></li>
                        <li class="nav-item"><a class="nav-link" href="/contact">Contact</a></li>
                    </ul>

                    @elseif ( Auth::user()->role == 1 )
                    <ul class="nav navbar-nav">
                        &nbsp;
                        <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="/opdrachten">Vacaturen</a></li>
                        <li class="nav-item"><a class="nav-link" href="/opdrachtplaatsen">Vacaturen Plaatsen</a></li>
                        <li class="nav-item"><a class="nav-link" href="/projects">Projecten</a></li>
                        <li class="nav-item"><a class="nav-link" href="/contact">Contact</a></li>
                    </ul>

                    @elseif ( Auth::user()->role == 2 )
                    <ul class="nav navbar-nav">
                        &nbsp;
                        <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="/opdrachten">Vacaturen</a></li>
                        <li class="nav-item"><a class="nav-link" href="/opdrachtplaatsen">Vacaturen Plaatsen</a></li>
                        <li class="nav-item"><a class="nav-link" href="/projects">Projecten</a></li>
                        <li class="nav-item"><a class="nav-link" href="/studenttoevoegen">Studenten</a></li>
                    </ul>
                    @endif


                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <!-- <li><a href="{{ route('register') }}">Register</a></li> -->

                        @elseif ( Auth::user()->role == 0 )
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
                                        <a href="/profiel">
                                            Profiel
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>

                            @elseif ( Auth::user()->role == 1 )
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
                            @elseif ( Auth::user()->role == 2 )
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
                        @endif
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
