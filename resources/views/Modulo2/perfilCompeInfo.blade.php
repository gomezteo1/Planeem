@extends('layouts.nav2')

@section('content')

<header>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <link href="{{ asset('css/toastr.css') }}"  rel="stylesheet"/>
    @yield('js')
    @section('f')
    {{-- <a href="{{ route('perfilCompeInfo') }}" class="clos" aria-label="Close"><span class="icon-undo2"></span></a> --}}
    @endsection
    @include('modal/modal')
</header>
<div class="contenedor4">
    <h1 style="text-align: center; font-weight: bold; padding: 12px;">Que es la Matriz de Perfil Competitivo Plataforma Estratégica</h1>
    <p style="padding: 10px;line-height: 23px;margin-left: 194px;width: 70%;font-size: 18px;text-align: justify;">
        La matriz de perfil competitivo (MPC) identifica los principales competidores de una compañía así
        como sus fortalezas y debilidades principales en relación con la posición estratégica de una
        empresa que se toma como muestra (Maradiaga & Peralta, 2018)
        La matriz de Perfil competitivo es una herramienta para hacer análisis comparativos entre las
        empresas y sus competidores, Este análisis proporciona información estratégica interna importante,
        no hay límite, se sugiere que el cuadro comparativo se haga con máximo 10 empresas, las más
        representativas del sector y estén en relación directa de competencia con la empresa.
    </p>
    <a data-toggle="modal" data-target="#exampleModalFormulario" style="color:white;" name="nuevo" class="Ahora btn btn-planeem waves-effect waves-light">Iniciar Ahora</a>
</div>



<span class="icon-info" data-toggle="modal" data-target="#exampleModalScrollable" style="cursor:pointer;"></span>
<div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content10">{{-- se coloco estilos de este modal en estilos css --}}
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle" style="margin-left: 252px; font-weight: bold;"></h5>
                <span class="icon-cancel-circle" style="color:#FC7323; font-size: 32px; cursor: pointer; margin-top: 4px;
                margin-left: 10%;" data-dismiss="modal" aria-label="Close"></span>

            </div>
            <div class="modal-body">
                <ol style="line-height: 17px; margin-top: -19px;">
                    <b style="color: black; font-weight: bold;">El procedimiento consiste en los siguientes pasos:</b>
                    <br>
                    <li>1. Se obtiene información de las empresas competidoras que serán incluidas en la MPC.</li><br>
                    <li>2. Se enlistan los aspectos o factores a considerar, que bien pueden ser elementos fuertes o débiles, según sea el caso,
                    de cada empresa u organización analizada</li>.<br>
                    <li>3. Se asigna un peso a cada uno de estos factores.</li><br>
                    <li>4. A cada una de las organizaciones enlistadas en la tabla se le asigna una calificación, siendo los valores de las<br>
                        calificaciones los siguientes:
                        <ol width="100%" style="text-align: center">
                            <li>1= Debilidad principal</li><br>
                            <li>2= Debilidad Menor</li><br>
                            <li>3= Fortaleza menor</li><br>
                            <li>4= Fortaleza mayor</li><br>
                        </ol>
                    </li><br>

                    <b>

                    </b>
                    <li>5. Se multiplica el peso de la segunda columna por cada una de las calificaciones de las organizaciones o empresas
                    competidoras, obteniéndose el peso ponderado correspondiente.</li><br>
                    <li>6. Se suman los totales de la columna del peso (debe ser de 1.00) y de las columnas de los pesos ponderados
                    (Ponce, 2007, pág. 120).</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content" id="modalAvance">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"></h5>
                <span class="icon-cancel-circle" style="color:#FC7323; font-size: 32px; cursor: pointer; margin-top: 4px;
                margin-left: 10%;" data-dismiss="modal" aria-label="Close"></span>
            </div>
            <div class="modal-body" style="text-align: center;">
                {{-- <input type="number" onKeyPress="return numeros(event)" min="1" max="5" class="CantEmpresas" id="ponde"> --}}
                <h3>Cual es la cantidad de empresas:</h3>                       
                <form id="form-direc" action="{{route('perfilem')}}" method="POST" role="form">
                        @csrf
                    <input id="id_planecion" name="id_planecion" style="display:none;">
                    <div class="form-group" >
                        <select id="cantidad" multiple class="form-control" id="exampleFormControlSelect2" name="cantidad" style="text-align: center;font-size: 23px;" >
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                    </div>
            </div>
            <div class="modal-footer">
                <a  class="buttonModal btn btn-planeem waves-effect waves-light" data-dismiss="modal">Cancelar</a>
                <button   class="buttonModal btn btn-planeem waves-effect waves-light Siguiente">Siguiente</button>
                {{-- <button type="button" class="btn btn-primary">Continuar</button> --}}
            </div>
        </div>
    </div>
</div>
</form>



<!-- Modal de seguir adelante -->
<div class="modal fade" id="exampleModalFormulario" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content" id="modalEmpresa">
            <div class="modal-header">
                <div class="Miempresa">
                    <h2>Mi Empresa</h2>
                    <h3 id="idPlaneacion"></h3>
                </div>
                <span class="icon-cancel-circle" style="color:#FC7323; font-size: 32px; cursor: pointer; margin-top: 4px;
                margin-left: 10%;" data-dismiss="modal" aria-label="Close"></span>
            </div>
            <div class="modal-body" style="text-align: center;">
                {{-- <input type="number" onKeyPress="return numeros(event)" min="1" max="5" class="CantEmpresas" id="ponde"> --}}
                <form id="form-perfilCompe" action="" method="POST">
                    <input type="hidden" name="idPlaneacion" id="" class="idPlaneacion">
                    <input type="hidden"  name="nombreEmpresa" class="nombre_empresa" >
                    @csrf
                    <div>
                        <table>
                            <thead>
                                <tr>
                                    <th scope="col" colspan="1" style="text-align: center; background: #0AB5A0;border: none;color: white; border-radius: 10px;"><a data-toggle="modal" data-target="#exampleModal4" style="font-size: 8px;position: absolute;right: 639px;top: -7%;"><span class="icon-info "></span></a>Factores Claves</th>


                                    <th style="text-align: center; background: #0AB5A0;border: none;color: white; border-radius: 10px;"><a  data-toggle="modal" data-target="#exampleModal1" style="font-size: 8px;position: absolute;right: 430px;top: -7%;"><span class="icon-info "></span></a>Peso Relativo</th>

                                    <th style="text-align: center; background: #0AB5A0;border: none;color: white; border-radius: 10px;"><a  data-toggle="modal" data-target="#exampleModal2" style="font-size: 8px;position: absolute;right: 225px;top: -7%;"><span class="icon-info "></span></a>Calificación</th>

                                    <th style="text-align: center; background: #0AB5A0;border: none;color: white; border-radius: 10px;"><a data-toggle="modal" data-target="#exampleModal3" style="font-size: 8px;position: absolute;right: 16px;top: -7%;"><span class="icon-info "></span></a>Puntuación Ponderada</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($factorClave as $p)
                                    <tr id = 'material{{$p->id}}' class = 'tabla material'>
                                            <th data-column_name="idRespuestaCompe" data-id="{{$p->id}}" data-name="$p->nombre">{{$p->nombre}}</th>
                                            <input type="hidden" name="idFactorClave[]" value="{{$p->id}}">    
                                                <td><input style="outline: none;" type="text" id="ponde-{{$p->id."-".auth()->user()->selected_planne}}"  name="pesoRelativo[]"  class = ' cantidad_req' onkeyup='obtTotalMat({{$p->id}})' onkeypress="return solonumeros(event)"></td>
                                                <td><input style="outline: none;" type="text" id="cali-{{$p->id."-".auth()->user()->selected_planne}}"  name="calificacion[]"  class = ' valor_unitreq' onkeyup='obtTotalMat({{$p->id}})' onkeypress="return solonumeros(event)"></td>
                                                <td><input style="outline: none;" type="text" id="puntuacion-{{$p->id."-".auth()->user()->selected_planne}}" name="pesoPonderado[]" class = ' valor_totreq' onchange='calcTotal()' onkeypress="return solonumeros(event)"></td>
                                    </tr>
                                @endforeach
                                <tr class="total2">
                                    <th >Total</th>
                                    <td class="tdclass"><textarea   id="pesorpesoPonderado" readonly class="tablacam" name="totalPeso" onkeypress="return solonumeros(event)"></textarea></td>
                                    <td class="tdclass"><textarea  id="totalcalificacion" readonly class="tablacam" name="totalCalificacion" onkeypress="return solonumeros(event)"></textarea></td>
                                    <td class="tdclass1"><textarea  id="granTotal" readonly class="tablacam totales" name="totalPonderado" onkeypress="return solonumeros(event)"></textarea></td>
                                </tr>
                            </tbody>
                        </table>

                        <div id="button12"></div>
                
                

                        <button onclick="paso1()"   style="color:white;" id="btn2"  class="submitEmpresa btn btn-planeem waves-effect waves-light">Siguiente</button>


                        <button style="margin-left: -50px;"  onclick="ponde()" class="submitEmpresa2 btn Ahora btn btn-planeem wafes-effect waves-light btn-lg"  >Guardar</button>
                    </div>
                </form>


                <div style="display: none" >
                        <form id="form-direc" action="{{route('perfilem')}}" method="POST" role="form">
                                @csrf
                                <input type="text" name="cantidad" class="cantidad"  class="form-control" id="cantidad" aria-describedby="emailHelp" >
                                <button type="submit" id="btnclik" class="buttonModal btn btn-planeem waves-effect waves-light btn2" ></button>
                            </form>
                </div>
            </div>
            <div class="modal-footer">
                <span id="form_resultP"></span> 
            </div>

        </div>
    </div>
</div>

<script src="{{asset('js/solo_numeros.js')}}"></script>

<style>
    .tabla td{
        position: relative;
        border: grey 1px solid;
        width: 15%;
        margin-left: 75px;
        margin-top: 18px;
        border-radius: 10px;
    }
    .tabla th{
        border: grey 1px solid;
        width: 40%;
        border-radius: 10px;
        text-align: center;
    }
    .form-control {
        overflow-y: scroll;
    }
    .form-control::-webkit-scrollbar{
        width: 7px;
    }
    .form-control::-webkit-scrollbar-thumb{
        background: grey;
        border-radius: 5px;
    }
    select option:hover{
        background-color: #0AB5A0;
        border-radius: 10px;
        color: white;
    }
    /* textarea.disabled, :disabled {
    pointer-events: none!important;
    background: white;
    }     */
</style>
<!-- Modal de Formulario -->
<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content" id="modalAvance2">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"></h5>
                <span class="icon-cancel-circle" style="color:#FC7323; font-size: 32px; cursor: pointer; margin-top: 4px;
                margin-left: 10%;" data-dismiss="modal" aria-label="Close"></span>
            </div>
            <div class="modal-body" style="text-align: center;">
                {{-- <input type="number" onKeyPress="return numeros(event)" min="1" max="5" class="CantEmpresas" id="ponde"> --}}
                <h3>Nombre de la empresa:</h3>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">1</span>
                    </div>
                    <input type="text" class="form-control" placeholder="Nombre de su empresa" aria-label="empresa" aria-describedby="basic-addon1">
                </div>
                <h3>Nombre de la competencia:</h3>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">1</span>
                    </div>
                    <input type="text" class="form-control" placeholder="Nombre de su competencia" aria-label="competencia" aria-describedby="basic-addon1">
                </div>
            </div>
            <div class="modal-footer">
                <a class="buttonModal btn btn-planeem waves-effect waves-light" data-dismiss="modal">Cancelar</a>
                <a href="{{ route('perfilem')}}" type="submit" class="buttonModal btn btn-planeem waves-effect waves-light">Siguiente</a>
                {{-- <button type="button" class="btn btn-primary">Continuar</button> --}}
            </div>
        </div>
    </div>
</div> 
</section>
@yield('script')
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script>
    $(document).ready(function () {
     $('.items li:nth-child(2)').addClass("acti");
     $('.items li').click(function () {
      $('.items li').removeClass("acti");
      $(this).addClass("acti");
  
  
    })
  
     $('.valores').mouseenter(function(){
      let mensaje = $(this).attr('mensaje');
  
      $('.hover').html(`<p>${mensaje}</p>`)
      $('.hover').show()
  
    })
     $('.valores').mouseleave(function(){
  
      $('.hover').hide()
    })
   })
  </script>
@endsection
@push('script')
<script src="{{asset('js/solo_numeros.js')}}"></script>
<script src=" {{asset('js/toastr.js')}}"></script>
<script>
	var numero = [1,2,3,4,5,6,7,8,9,0];
    
    function obtTotalMat(index){

        if($("#material"+index+" .cantidad_req").val() > 1 || $("#material"+index+" .cantidad_req").val() < 0 ){
            toastr.error('Lo sentimos, el número que estas digitando no puede ser mayor a 1 o/e inferior a 0', '!Hola!')
        }else if($("#material"+index+" .valor_unitreq").val() > 4 || $("#material"+index+" .valor_unitreq").val() > 4){
            toastr.error('Lo sentimos, el número que estas digitando no puede ser mayor a 2 o/e inferior a 0', '!Hola!')
        }else{
         
            var Relativo  = $("#material"+index+" .cantidad_req").val();
           
            var Calificacion = $("#material"+index+" .valor_unitreq").val();
      
            var tot = ($("#material"+index+" .cantidad_req").val())/1 * $("#material"+index+" .valor_unitreq").val();
           $("#material"+index+" .valor_totreq").val(tot);
        }



        calcTotal();
    }
    
    function calcTotal() {
            var tot = 0;
            var Relativo = 0;
            var Calificacion = 0;
            $(".material .valor_totreq").each(function () {
                tot+=Number($(this).val());
            });
            $(".material .cantidad_req").each(function () {
                Relativo+=Number($(this).val());
            });
            $(".material .valor_unitreq").each(function () {
                Calificacion+=Number($(this).val());
            });
            $("#granTotal").val(tot);
            $("#pesorpesoPonderado").val(Relativo);
            $("#totalcalificacion").val(Calificacion);

           
            if( $("#pesorpesoPonderado").val() > 1){
                     toastr.error('Lo sentimos, el total Peso Relativo, no puede ser mayor a 1 o/e inferior a 0', '!Hola!')
            }

            }


    </script>

    

<script>
    var id = localStorage.getItem('id'); 
    $('#id_planecion').val(id);
    function paso1(){
        document.getElementById("btnclik").click();
    }
</script>

<script>
            var planeacion = localStorage.getItem('nombre_proyecto');
            var planeacionid = localStorage.getItem('id');
            $('.nombre_empresa').val(planeacion);
            $("#idPlaneacion").html(planeacion);
            $('.idPlaneacion').val(planeacionid);
            //console.log(planeacion);
</script>

        <script>
            $('.Siguiente').click(function(){
                var cantidad = $('#cantidad').val();
                localStorage.setItem('cantidad',cantidad);
            });
            
        var campo = $('.val1').val();
        $('#form-perfilCompe').on('submit',function(event){
            $('#btn').click()
            event.preventDefault();
            $.ajax({
                url: "/perfilCompeInfoG/store",
                method:"POST",
                data : new FormData(this),
                contentType:false,
                cache:false,
                processData:false,
                dataType:"json",
                success:function(data)
                {
                    if(data.success)
                    {
                        html = '<div class="alert alert-success" style="width: 106% !important;left: -147% !important;bottom: 0px !important;border-radius: 17px !important;"> <button type="button" class="close" data-dismiss="alert" style="margin-left: 0% !important;padding: 13px; outline:none;"><span class="icon-cancel-circle" style="color: #FC7323; font-size: 21px;cursor: pointer;"></span></button>'
                        + data.success + '</div>';
                    }else{
                        html = '<div class="alert alert-danger style="width: 106% !important;left: -147% !important;bottom: 0px !important;border-radius: 17px !important;"> <button type="button" class="close" data-dismiss="alert" style="margin-left: 0% !important;padding: 13px; outline:none;"><span class="icon-cancel-circle" style="color: #FC7323; font-size: 21px;cursor: pointer;"></span></button>'
                        + 'error' + '</div>';
                    }
                    $('#form_resultP').html(html);
                    $('#nextButton').prop('disabled',false)
                } 
            })
        });
        var datos = $('#val1').val() 
    
        $('#btn').click(function(){
            if( datos == " " || datos == 0 || datos== null){
                $("#alert").css("display", "block");
            }
        });
        
    </script>
<script>
        $( document ).ready(function() {
            var id = localStorage.getItem('id');
            $.ajax({
                url:"/perfil/show/"+id,
                type:'get',
                success:function(data){
                    
                            if(data != null){
                                for(i of data){
                                    console.log('#ponde-'+i.factorClave+'-'+id);
                                    console.log('#cali-'+i.factorClave+'-'+id);
                                    console.log('#puntuacion-'+i.factorClave+'-'+id);
                                
                                    if(i.pesoRelativo != null){
                                        $('#ponde-'+i.factorClave+'-'+id).val(i.pesoRelativo);
                                        $('#cali-'+i.factorClave+'-'+id).val(i.calificacion);
                                        $('#puntuacion-'+i.factorClave+'-'+id).val(i.pesoPonderado);
                                    } 
                                                
                                    }
                                }
                       }
                        
                    })
        });
    </script>



            
<script>
$("#nextButton").removeAttr("style").hide();
       $( document ).ready(function() {
           var id = localStorage.getItem('id');
           $.ajax({
               url:"/perfil/empresa/"+id,
               type:'get',
               success:function(data){
   
       if(data == 0){ 
               var btn = '<button type="submit" style="margin-left: 150px;" class="submitEmpresa btn Ahora btn btn-planeem wafes-effect waves-light';
               btn = btn + 'btn-lg  empre btn1" data-dismiss="modal" aria-label="Close" data-toggle="modal" data-target="#exampleModal" disabled="disabled';
               btn = btn + '" id="nextButton">Siguiente</button>';
               $('#button12').append(btn);
               $("#btn2").removeAttr("style").hide();
                       
                   }else{
                       $("#btn2").show();
           
                   }   
       if(data != null){
               for(i of data){
                           console.log(i.cantidad);
                           $('.cantidad').val(i.cantidad);
                           }
                       }
                   }
           })
       });
   </script> 




        @endpush