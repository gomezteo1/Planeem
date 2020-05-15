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
    <script src="{{ asset('js/JsMostrarOcultarHome.js') }}"></script>

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
    <link rel="stylesheet" href="{{asset('css/estilos/estilos.css')}}">
    <!-- mdbootstrap -->
    <link rel="stylesheet" href="{{asset('css/mdb.min.css')}}">
    <link rel="stylesheet" type="text/css" href="css/fonts.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.2/css/mdb.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/all.css')}}">
    <!--[if lte IE 9]>
        <link href='{{asset('css/animations-ie-fix.css')}}' rel='stylesheet'>
    <![endif]-->
    <link href="https://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet">



</head>
<body>
    {{$cont=0}}
    @foreach ($proyecto as $proyectoscontador)
    @if($proyectoscontador->id_usuario==Auth::user()->id)
    {{$cont=$cont+1}}
    @endif
    @endforeach

    <div id="app">
        <header>
            <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
                {{-- <a href="{{ route('index') }}" class="logoPlaneem d-flex justify-content-center align-items-center mr-2"> --}}
                    <div class="boxSep mr-2">
                        <div class="imgLiquidFill imgLiquid">
                            <img src="{{asset('img/icono.png')}}" style="vertical-align: baseline; width: 50px; height:50px"
                            alt="logo PlaneƎm">
                        </div>
                    </div>
                    <h1 class="h1-responsive tituloQueEs fuenteTitulo d-flex align-items-center verde m-0">Plane<span
                        class="naranja planeem">E</span>m</h1>
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
                                    {{ Auth::user()->username }}<span class="icon-switch"></span>
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
</div>
<br><br><br>
@if($cont<1)
<div class="containers">
    <nav class="navbar navbar-dark bg-verdeclaro radius">
        <h4 class="inicia">Inicia tu planeación aquí</h4>
        <div class="slide-track">
            <a data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation"><span class="icon-plus "></span></a>
        </nav>
        <div class="collapse" id="navbarToggleExternalContent">
            <div class="bg-verdeoscuro p-4 bordered">
                <br>
                <a href="#" title="nuevo" class="btn btn-verde" onclick="Mostrar();" id="botonOcultar">Nuevo</a>
                <section id="contenido" style="display: none;">
                    <form class="form-group" method="POST" action="{{route('proyecto')}}">
                        @csrf
                        <label for="">Nombre de su planeacion</label>
                        <input type="text" name="nombre_proyecto" id="nombre_proyecto" placeholder="Primera Planeacion Empresarial" maxlength="60" value="{{old('nombre_proyecto')}}" class="form-control @error('nombre_proyecto') is-invalid @enderror">
                        @error('nombre_proyecto')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <div class="row">
                            <div class="col-12">
                                <label>Fecha de inicio</label>
                                <input type="date" name="fechainicio" class="form-control @error('fechainicio') is-invalid @enderror" >
                                @error('fechainicio')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{$message}}</strong>
                                </span>
                                @enderror
                            </div>

                            <input type="hidden" name="id_usuario" value="{{Auth::user()->id}}">
                            <input type="hidden" name="estado" value="Pendiente">
                        </div><br>
                        <div class="row">
                            <div class="col-6">
                                <a href="#" title="" class="btn btn-link" style="color: white !important;" onclick="Ocultar();">Cancelar</a>
                            </div>
                            <div class="col-6">
                                <button type="submit" title="" onclick="Guardar()" class="btn btn-link" style="color: white !important;" >Guardar</button>
                            </div>
                        </div>
                    </form>
                </section>
            </div>
        </div>
    </div>
    <div class="collapse contenedor2" id="collapseExample">
        <h4 class="titulo2">Nombre de la Planeación</h4>
    </div>
</div>
@elseif($cont>=1)
<div class="containers">
    <nav class="navbar navbar-dark bg-verdeclaro radius">
        <h4 class="inicia h4">Estos son tus proyectos </h4>
        <div class="slide-track">
            <a data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation"><span class="icon-plus "></span></a>
        </nav>
        <div class="collapse" id="navbarToggleExternalContent">
            <div class="bg-verdeoscuro p-4 bordered">
                <br>
                <div class="proyectosLista">   
                    <table class="table table-hover colorTable" id="tables" >
                        @foreach ($proyecto as $proyectos)
                        <tbody>
                            @if($proyectos->id_usuario==Auth::user()->id)

                                    @if ($proyectos->estado != '1')
                                    <tr class="proyecto">
                                        <td><a href="{{route('proyect',$proyectos->id_Planeacion)}}" style="font-size: 25px;color: white;">{{$proyectos->nombre_proyecto}}</a><a style="color: #FC7323;float: right;font-size: 25px;" data-toggle="modal" data-target="#exampleModal{{$proyectos->id_Planeacion}}"><span class="icon-bin"></span></a></td>
                                        {{-- <td ><a href="{{route('proyect',$proyectos->id_Planeacion)}}" style="color: white;">seguir</a></td> --}}
                                    </tr>
                                    @endif
        
                            @endif
                        </tbody>
                        @endforeach
                    </table>
                </div>
                <style>
                    .colorTable{
                        background-color: #238276;
                        color: white;
                    }
                    .proyecto{
                        text-align: center;
                    }
                </style>

                <p class="titulo-planeacion" style="color: white;">¿Quieres iniciar una nueva planeación?</p>
                <a href="#" title="nuevo" class="btn btn-verde" onclick="Mostrar();" id="botonOcultar">Nuevo</a>
                <section id="contenido" style="display: none;">
                    <form class="form-group" method="POST" action="{{route('proyecto')}}">
                        @csrf
                        <label for="">Nombre de su planeacion</label>
                        <input type="text" name="nombre_proyecto" id = "nombre_proyecto"  placeholder="Primera Planeacion Empresarial" maxlength="60" value="{{old('nombre_proyecto')}}" class="form-control @error('nombre_proyecto') is-invalid @enderror">
                        @error('nombre_proyecto')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <div class="row">
                            <div class="col-6">
                                <label>Fecha de inicio</label>

                                <input type="date" name="fechainicio"   class="form-control @error('fechainicio') is-invalid @enderror">
                                @error('fechainicio')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <input type="hidden" name="id_usuario" value="{{Auth::user()->id}}">
                            <input type="hidden" name="estado" value="Pendiente">
                        </div><br>
                        <div class="row">
                            <div class="col-6">
                                <a href="#" title="" class="btn btn-link" style="color: white !important;" onclick="Ocultar();">Cancelar</a>
                            </div>
                            <div class="col-6">
                                <button type="submit" onclick="guardar()"  class="btn btn-link" style="color: white !important;" >Guardar</button>
                            </div>
                        </div>
                    </form>
                </section>
            </div>
        </div>
    </div>

@foreach ($proyecto as $proyecto1)
        {{-- modal de eliminar --}}
        <div class="modal fade" id="exampleModal{{$proyecto1->id_Planeacion}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content modalEliminar">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel"></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="outline: none;">
                            <i class="icon-cancel-circle" style="color: #FC7323; font-size: 21px;cursor: pointer;"></i>
                        </button>
                    </div>
                    <div class="modal-body" style="text-align: center;">
                        <span class="icon-notification" style="font-size: 6.5em;color: #f8bb86;border-color: #facea8;"></span>
                        <h1>¿Esta seguro?</h1>
                        <h4>Si elimina el proyecto ... , perderá toda la información sobre este.</h4>
                    </div>
                    <div class="modal-footer">
                      <a class="ElimarBoton btn btn-planeem waves-effect waves-light" data-dismiss="modal">No, Cancelar</a>
                      <a href="{{route('delecte',$proyecto1->id_Planeacion)}}" type="button" class="NoEliminar btn btn-planeem waves-effect waves-light"> Si, Eliminar</a>
                  </div>
              </div>
          </div>
      </div>
@endforeach



  <style type="text/css">
    .modalEliminar{
        border-radius: 15px !important;
        border: 2px solid black;
        height: 375px;
    }

</style>

<a type="button" href="{{route('papelera')}}" style="color: #FC7323; float: right;font-size: 45px;position: absolute;bottom: 9%;left: 4%;"><span class="icon-bin"></span></a>


<div class="collapse contenedor2" id="collapseExample">
    <h4 class="titulo2">Nombre de la Planeación</h4>
</div>
</div>
@endif
<!-- Button trigger modal -->
<span class="icon-info"  data-toggle="modal" data-target="#exampleModalScrollable" style="cursor: pointer;"></span>


{{-- script para mostrar el contenido  --}}
<script>
    function Mostrar(){
        document.getElementById("contenido").style.display = "block";
        document.getElementById("botonOcultar").style.display = "none";
    }
    function Ocultar(){
        document.getElementById("contenido").style.display = "none";
        document.getElementById("botonOcultar").style.display = "block";
    }
</script>
{{-- termina el script --}}

{{-- aca los gif --}}
<section class="sectiongif">
    <img src="{{asset('img/GIFS/GifCentro.gif')}}" alt="planeacion 1" class="gif gifcentro ">
    <div class="hovergif">
        <img src="{{asset('img/GIFS/Gif1Numero.gif')}}" alt="planeacion 1" class="gif gif1 active"><img src="{{asset('img/GIFS/Gif1.gif')}}" alt="planeacion 1" class="gif gif1 static">
    </div>
    <div class="hovergif">
        <img src="{{asset('img/GIFS/Gif2Numero.gif')}}" alt="planeacion 2" class="gif gif2 active"><img src="{{asset('img/GIFS/Gif2.gif')}}" alt="planeacion 2" class="gif gif2 static">
    </div>
</div>
<div class="hovergif">
    <img src="{{asset('img/GIFS/Gif3Numero.gif')}}" alt="planeacion 3" class="gif gif3 active"><img src="{{asset('img/GIFS/Gif3.gif')}}" alt="planeacion 3" class="gif gif3 static">
</div>
<div class="hovergif">
    <img src="{{asset('img/GIFS/Gif4Numero.gif')}}" alt="planeacion 4" class="gif gif4 active"><img src="{{asset('img/GIFS/Gif4.gif')}}" alt="planeacion 4" class="gif gif4 static">
</div>
</section>
{{-- terminan los gif --}}


<!-- Modal -->
<div class="ajustar">

    <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content" >
            <div class="modal-header">
                    <h5 class="modal-title tituloModal" id="exampleModalCenterTitle">PROPUESTA DE VALOR</h5>
                    <span class="icon-cancel-circle" style="color:#FC7323 !important; font-size: 32px; cursor: pointer; margin-top: 4px;
                    margin-left: 10%;" data-dismiss="modal" aria-label="Close"></span>

                </div>
                <div class="modal-body">
                    <p style="text-align: justify;">INFORMACIÓN NUEVA</p>
                </div>

            </div>
        </div>
    </div>
</div>



<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<!--script para javascript para que carga el modal -->

<script>
    window.localStorage.clear();
</script>
<script>
    $(document).ready(function()
    {
        $("#staticBackdrop").modal("show");
    });
</script>
</body>
</html>