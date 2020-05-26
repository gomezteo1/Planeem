@extends('layouts.nav4')

@section('content')
    <header>
        @yield('js')

        @section('f')
            <a href="{{ route('vista2') }}" class="clos" aria-label="Close"><span class="icon-undo2"></span></a>
        @endsection

        @yield('progres')
        @include('modal/modal_modulo4')
    </header>

    <div>
        {{--Items de objetivos, --}}
        <div class="row">
            <div class="lista">
                <h4 style="line-height: 41px;">Objetivos</h4>

            </div>
        </div>

        <div class="row" style="width: 100%;">
            <div id="campo_texto" class="campo_texto4">
                <h3 id="nombre_proyecto" style="text-align: center;"></h3>
                <main class="indicadores2">
                    <div>
                        <input id="objetivo" type="text" name="" placeholder="Objetivo" class="inputIndicador">
                    </div>
                </main>
                <span class="icon-arrow-down2 icono-down"></span>
                <main class="indicadores">
                    <div>
                        <input id="nombre_indicador" type="text" name="" placeholder="Nombre del indicador"
                               class="inputIndicador">
                    </div>
                </main>
                <span class="icon-arrow-down2 icono-down"></span>
                <main class="indicadores">
                    <div>
                        <input id="que_quiere_medir" type="text" name="" placeholder="Que quiere medir"
                               class="inputIndicador">
                    </div>
                </main>
                <hr class="division">
                <main class="indicadores">
                    <div>
                        <input id="sobre_que_quiere_medir" type="text" name="" placeholder="Sobre que lo quiere medir"
                               class="inputIndicador">
                    </div>
                </main><br>
                <a id="btn-guardar" style="color:white;" name="nuevo" class="Ahora btn btn-planeem waves-effect waves-light"><p style="margin-left: 15%">Guardar</p></a>
            </div>

        </div><br><br>



        <section id="factores5">
            <div id="factor">
                <form class="opciones2">
                    <div class="formulario2">
                        <div class="respuestas2">
                            <div class="wrap" style=" ">
                                <div class="radio">
                                    <div class="btn-group2" id="btn_planeem2">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </section>


        <div id="modal"></div>
        <div class="modal fade" id="exampleModal0" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
             aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content modal-modificado2">
                    <div class="modal-body">
                        <div class="añadircapacidad">
                            <textarea maxlength="504" id="Añadir" style="color:black;" class="campo4"></textarea>
                        </div>
                        <div><a style="color:white;" onclick="agregarv()" data-dismiss="modal" aria-label="Close"
                                class="aceptarcapacidad btn btn-planeem waves-effect waves-light">Añadir</a>
                        </div>
                        <div id="cancelar">
                            <a value="cierra_AñadirCapa"
                               class="cancelarcapacidad btn btn-planeem waves-effect waves-light" data-dismiss="modal"
                               aria-label="Close" style=" outline: none !important;">Cancelar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <style>
            .modal-modificado2 {
                width: 180% !important;
                height: 240px !important;
                border: #0AB5A0 2px solid !important;
                border-radius: 12px !important;
            }

            .modal-modificado3 {
                border: 2px solid #0AB5A0 !important;
                border-radius: 12px !important;
                width: 180% !important;
                height: 693px !important;
                margin-top: 0% !important;
                margin-left: -33% !important;
                padding: 28px;
            }

        </style>
        <div class="col-md-auto mx-auto mt-auto">
            <br>
            <a href="{{ route('vista2-1')}}" style="color:white;"
               class="siguiente btn btn-planeem waves-effect waves-light">Siguiente</a>
            <a href="{{ route('tercero1-2') }}" style="color:white;"
               class="retroceder btn btn-planeem waves-effect waves-light">Anterior</a>
        </div>

        {{--Modal de informacion, icono anaranjado, Ubicación: Derecha superior--}}
        <span class="icon-info" data-toggle="modal" data-target="#exampleModalScrollable"
              style="cursor:pointer;"></span>
        <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog"
             aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalCenterTitle"
                            style="margin-left: 252px; font-weight: bold;">INFORMACIÓN</h5>
                        <span class="icon-cancel-circle" style="color:#FC7323; font-size: 32px; cursor: pointer; margin-top: 4px;
                                margin-left: 10%;" data-dismiss="modal" aria-label="Close"></span>
                    </div>
                    <div class="modal-body">
                        <p> Aqui se muestra información</p>
                    </div>
                </div>
            </div>
        </div>
        <div id="modal">

        </div>
        <label type="text" id="nombre"></label><br>
    </div>


    </form>



    @yield('script')

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
            crossorigin="anonymous">

    </script>

    <script>
        $(document).ready(function () {
            //$('#campo_texto1').hidden()
            var id = localStorage.getItem('id');
            ////Inicio ajax
            $.ajax({
                url: "/indicadores/" + id,
                type: 'get',
                success: function (data) {
                    //console.log(id);
                    console.log(data);
                    var datta;
                    let cont = 0
                    for (datta in data) {
                        cont++
                        let html = '<a onclick="modal(' + data[datta].id_respustaverbos + ')" >' + cont + '</a>';
                        $('#btn_planeem2').append(html); //Pinta el contenido en el html
                       // console.log(cont);
                    }
                },
                "error": function () {
                    console.log("error");
                }
            });//////fin ajax
        });////Fin Funtion document

        function modal(id) {
            //console.log(id)
            $.ajax({
                url: "/indicador/" + id,
                type: 'get',
                success: function (data) {
                    // console.log(id);
                    console.log(data);
                    var dat = data[0]
                    $('#objetivo').val(dat.Objetivos)
                    // $('#nombre_proyecto').val(dat.nombre_proyecto)
                    document.getElementById('nombre_proyecto').innerHTML = dat.nombre_proyecto
                },
                "error": function () {
                    console.log("error");
                }
            });//////fin ajax       ﻿
        }//////fin funcion modal



    </script>





@endsection
