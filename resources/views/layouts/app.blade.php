<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'SerialViewer') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/all.css') }}" rel="stylesheet">
    <!-- Jquery-ui -->
    <link href="{{ asset('css/jquery-ui.min.css') }}" rel="Stylesheet"></link>

    <!-- font awesome -->
    <!--<link href="{{ asset('css/font-awesome.min.css') }}" rel="Stylesheet"></link>-->
    <link href="{{ asset('font-awesome/css/font-awesome.min.css') }}" rel="Stylesheet"></link>
    <!--<script src="{{ asset('js/fontawesome-all.min.js') }}"></script>-->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/jquery-ui.min.js') }}" ></script>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'SerialViewer') }}
                    </a>

                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                        @guest

                        @else
                        <li class="{{ Request::is('series') ? 'active' : '' }}">
                            <a href="{{ url('series') }}">Séries</a>
                        </li>
                        <li class="{{ Request::is('trendsFriends/'.Auth::user()->id) ? 'active' : '' }}">
                            <a href="{{ url('trendsFriends/'.Auth::user()->id) }}">Intérêts amis</a>
                        </li>
                        @endguest
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @guest
                            <li><a href="{{ route('login') }}">Connexion</a></li>
                            <li><a href="{{ route('register') }}">Enregistrer</a></li>
                        @else
                            <li>
                              <div class="ui-widget" style="margin-top: 10px; margin-right: 10px;">
                                <input id="search-series" placeholder="Rechercher une série...">
                              </div>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ url('/user/'.Auth::user()->id) }}">Mon profil</a>
                                        <a href="{{ url('/user/series/'.Auth::user()->id) }}">Mes séries</a>
                                        <a href="{{ url('/user/friends/'.Auth::user()->id) }}">Mes amis</a>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Se déconnecter
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
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/series/autocomplete-series.js') }}"></script>
</body>
</html>
