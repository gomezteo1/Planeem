<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=7">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    {{-- links del header planeem --}}
    <link rel="icon" type="image/png" href="{{asset('img/icono.png')}}">
    <!--bootstrap css-->
    {{-- <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}"> --}}
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!--custom css-->
    <link rel="stylesheet" href="{{asset('css/estilos.css')}}">
    <link rel="stylesheet" href="{{asset('css/estilos_modulo1/estilos_modulo1.css')}}">
    <!-- mdbootstrap -->
    <link rel="stylesheet" href="{{asset('css/mdb.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('../css/fonts.css')}}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.2/css/mdb.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/all.css')}}">
    <!--[if lte IE 9]>
        <link href='{{asset('css/animations-ie-fix.css')}}' rel='stylesheet'>
    <![endif]-->
    <link href="https://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet">

</head>
<body onload="deshabilitaRetroceso()">
    <div id="app">
      <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
            <a href="{{ route('index') }}/#top" class="logoPlaneem d-flex justify-content-center align-items-center mr-2">
                <div class="boxSep mr-2">
                    <div class="imgLiquidFill imgLiquid">
                        <img src="{{asset('img/icono.png')}}" style="vertical-align: baseline; width: 30px; height:30px"
                        alt="logo PlaneƎm">
                    </div>
                </div>
                <h4 class="h4-responsive tituloQueEs fuenteTitulo d-flex align-items-center verde m-0">Plane<span
                    class="naranja planeem">E</span>m</h4>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">

                <div class="navbar-collapse">
                    <ul class="navbar-nav ml-auto mr-md-3">
                        @if (Route::has('login'))
                        @auth
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->username }}<span class="icon-switch" style="color: #238276;"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                {{ __('Cerrar sesión') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                    @endauth
                    @endif
                </ul>
            </div>
        </div>
    </nav>
</header>
{{-- comentario --}}
</div>
<br>
@yield('content')

<style>
    .icon-switch{
        padding-left: 8px;
    }
    body{
        background-image: url({{asset('img/fondoLogo.jpg')}}) !important;
    }
    .collapsing{
        margin-top: -20px;

    </style>

</body>
</html>
