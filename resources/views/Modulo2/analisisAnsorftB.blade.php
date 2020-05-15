@extends('layouts.nav2')

@section('content')



<!-- botones -->
<section class="EPE">
    <div class="analisisEfi">
        <button class="EFI"><h2>Análisis ANSORFT</h2></button>
    </div>
    {{-- ventanas de los botones de fo,da,fa,do --}}
    <!-- contenedores -->
    <div class="row">
        <div class="col-md-6 conte1">
            <div class="botonopo1" value="Fortalezas_ventana" data-toggle="modal" data-target="#Fortalezas">
                <h3 style="text-align: center;"> 
                    <img src="img/icono1.png" style="width: 50px;">
                </h3>
                <div>
                    <h2 style="color: black;text-align: center;font-size: 66px;position: absolute;top: 47%;">Penetración del mercado</h2>
                </div>
            </div>
        </div>
        <div class="col-md-6 conte2">
            <div class="botonopo1" value="Oportunidades_ventana" data-toggle="modal" data-target="#Oportunidades">
                <h3 style="text-align: center;"> 
                    <img src="img/icono2.png" style="width: 50px;">
                </h3>
                <div>
                    <h2 style="color: black;text-align: center;font-size: 66px;position: absolute;left: 16%;top: 47%;">Desarrollo de productos</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 conte3">
            <div class="botonopo" value="Debilidades_ventana" data-toggle="modal" data-target="#Debilidades">
                <h3 style="text-align: center;"> 
                    <img src="img/icono3.png" style="width: 50px;">
                </h3>
                <div>
                    <h2 style="color: black;text-align: center;font-size: 66px;position: absolute;top: 47%;">Desarrollo de mercados</h2>
                </div>
            </div>
        </div>
        <div class="col-md-6 conte4">
            <div class="botonopo" value="Amenazas_ventana" data-toggle="modal" data-target="#Amenazas">
                <h3 style="text-align: center;"> 
                    <img src="img/icono4.png" style="width: 50px;">
                </h3>
                <div>
                    <h2 style="color: black;text-align: center;font-size: 66px;position: absolute;left: 27%;top: 47%;">Diversificación</h2>
                </div>
            </div>
        </div>
      
        <!-------------------------------------------------------------------------------------------------------------------->
        <a data-toggle="modal" data-target="#exampleModal" style="color:white;" class="siguiente btn btn-planeem waves-effect waves-light">Guardar</a>
        <!-------------------------------------------------------------------------------------------------------------------------------->
    </div>
</section>
<div class="infon">
</div>
{{--  modales  --}}
<div class="modal fade" id="Fortalezas" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content" id="Fortalezasventana">
            <div class="modal-header">
             <h3 style="color: black;margin-left: 40%;"> 
              <img src="img/icono1.png" style="width: 28px;margin-top: -14px;">Fortalezas<button><span class="icon-info" data-toggle="modal" data-target="#exampleModal1" style="font-size: 25px;margin-top: -8%;margin-right: 39%;"></span></button>
            </h3>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="outline: none;margin-left: 0% !important;">
             <span class="icon-cancel-circle" style="color: #FC7323; font-size: 21px;margin-top: 2%; cursor: pointer;"></span>
           </button>
         </div>
         <div class="modal-body">
          <div class="scrollfortaleza2">
			@foreach ($respues_Penetracion as $respues_Penetracion)
			<p>{{$respues_Penetracion->nombre}}</p>
		@endforeach</p> 
            
          </div>
        </div>
      </div>
      </div>
      </div>
      
      <div class="modal fade" id="Oportunidades" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content" id="Fortalezasventana">
            <div class="modal-header">
             <h3 style="color: black;margin-left: 40%;"> 
              <img src="img/icono2.png" style="width: 28px;margin-top: -14px;">Oportunidades<button><span class="icon-info" data-toggle="modal" data-target="#exampleModal1" style="font-size: 25px;margin-top: -8%;margin-right: 34%;"></span></button>
            </h3>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="outline: none;margin-left: 0% !important;">
             <span class="icon-cancel-circle" style="color: #FC7323; font-size: 21px;margin-top: 2%; cursor: pointer;"></span>
           </button>
         </div>
         <div class="modal-body">
          <div class="scrollfortaleza2">
				@foreach ($ansorft as $ansorft)
				<p>{{$ansorft->nombre}}</p>
			@endforeach</p> 
            
          </div>
        </div>
      </div>
      </div>
      </div>
      
      <div class="modal fade" id="Debilidades" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content" id="Fortalezasventana">
            <div class="modal-header">
             <h3 style="color: black;margin-left: 40%;"> 
              <img src="img/icono3.png" style="width: 28px;margin-top: -14px;">Debilidades<button><span class="icon-info" data-toggle="modal" data-target="#exampleModal1" style="font-size: 25px;margin-top: -8%;margin-right: 38%;"></span></button>
            </h3>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="outline: none;margin-left: 0% !important;">
             <span class="icon-cancel-circle" style="color: #FC7323; font-size: 21px;margin-top: 2%; cursor: pointer;"></span>
           </button>
         </div>
         <div class="modal-body">
          <div class="scrollfortaleza2">
				@foreach ($Desarrollo_Producto as $Desarrollo_Producto)
				<p>{{$Desarrollo_Producto->nombre}}</p>
			@endforeach</p> 
          </div>
        </div>
      </div>
      </div>
      </div>
      
      <div class="modal fade" id="Amenazas" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content" id="Fortalezasventana">
            <div class="modal-header">
             <h3 style="color: black;margin-left: 40%;"> 
              <img src="img/icono4.png" style="width: 28px;margin-top: -14px;">Amenazas<button><span class="icon-info" data-toggle="modal" data-target="#exampleModal1" style="font-size: 25px;margin-top: -8%;margin-right: 39%;"></span></button>
            </h3>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="outline: none;margin-left: 0% !important;">
             <span class="icon-cancel-circle" style="color: #FC7323; font-size: 21px;margin-top: 2%; cursor: pointer;"></span>
           </button>
         </div>
         <div class="modal-body">
         <div class="scrollfortaleza2">
                <!-- Aca es donde se incorporo las amenazas que vienen desde analisicontroller.php y que fueron traidasa de 
                  dofaController.php -->
                @foreach ($amenaza as $amenaza)
                <p>{{$amenaza->nombre}}</p>
                @endforeach 
          </div>
        </div>
      </div>
      </div>
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
<!--------------------------------------------------------------------------------------------------------------->
<!-- Modal de seguir adelante -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content" id="modalAvance">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"></h5>
        <span class="icon-cancel-circle" style="color:#FC7323; font-size: 32px; cursor: pointer; margin-top: 4px;
        margin-left: 10%;" data-dismiss="modal" aria-label="Close"></span>
      </div>
      <div class="modal-body" style="text-align: center;">
        <h1>A continuación: Analisis de mis estrategias</h1>
     </div>
     <div id="r1" class="modal-footer">
        <a id="rr" class="btn btn-planeem waves-effect waves-light"  data-dismiss="modal">Cancelar</a>
        <a id="rr" class=" btn btn-planeem waves-effect waves-light" href="{{route('misEstrategiasAnalisis')}}" style="color:white;" name="nuevo">Siguiente</a>
        
        <!--<a id="rr" class=" btn btn-planeem waves-effect waves-light" href="routamisEstrategias" style="color:white;" name="nuevo">Siguiente E</a>
        -->
          <!--Esta ruta es la que manda para el modulo 3-->
        <!-- <a id="rr" class=" btn btn-planeem waves-effect waves-light" href="{/route('DisenoObjetivos')}}" style="color:white;" name="nuevo">Siguiente</a>
       -->
<!--------------------------------------------------------------------------------------------------------------->
</section>

{{-- <a id="rr" class=" btn btn-planeem waves-effect waves-light" href="{{route('misEstrategias')}}" style="color:white;" name="nuevo">Siguiente E</a> --}}


<form method="POST" style="display:none" id="form" action="{{route('analisisDofa')}}" >
    @csrf
        <input type="text" id="id_planecion" name="id_planecion">   
        <button  type="submit" id="btn12">      
</form>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

<script>

  $(document).ready(function () {
   $('.items li:nth-child(14)').addClass("acti");
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
<script>
    var id = localStorage.getItem('id')
    $('#id_planecion').val(id);
    

    function btn12(){
        document.getElementById('btn12').click();
    }

</script>
@yield('script')
@endsection