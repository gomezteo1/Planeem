@extends('layouts.nav2')

@section('content')

<header>
	@yield('js')

	@section('f')
	<a href="{{ route('home') }}" class="clos" aria-label="Close"><span class="icon-undo2"></span></a>
	@endsection
	@include('modal/modalDofa')
</header>
<!-- botones -->
<section class="EPE">
	<div class="analisisEfi">
		<button class="EFI"><h2>Análisis DOFA</h2></button>
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
					<h2 style="color: black;text-align: center;font-size: 66px;position: absolute;left: 27%;top: 47%;">Fortalezas</h2>
				</div>
			</div>
		</div>
		<div class="col-md-6 conte2">
			<div class="botonopo1" value="Oportunidades_ventana" data-toggle="modal" data-target="#Oportunidades">
				<h3 style="text-align: center;"> 
					<img src="img/icono2.png" style="width: 50px;">
				</h3>
				<div>
					<h2 style="color: black;text-align: center;font-size: 66px;position: absolute;left: 16%;top: 47%;">Oportunidades</h2>
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
					<h2 style="color: black;text-align: center;font-size: 66px;position: absolute;left: 25%;top: 47%;">Debilidades</h2>
				</div>
			</div>
		</div>
		<div class="col-md-6 conte4">
			<div class="botonopo" value="Amenazas_ventana" data-toggle="modal" data-target="#Amenazas">
				<h3 style="text-align: center;"> 
					<img src="img/icono4.png" style="width: 50px;">
				</h3>
				<div>
					<h2 style="color: black;text-align: center;font-size: 66px;position: absolute;left: 27%;top: 47%;">Amenazas</h2>
				</div>
			</div>
		</div>

		
	
	
		<a onclick="btn12()" style="color:white;" name="nuevo" class="botonDofa btn btn-planeem waves-effect waves-light">Siguiente</a>
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
			@foreach ($fortaleza as $for)
				<p>{{$for->nombre}}</p>
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
				 @foreach ($oportunidad as $opo)
				<p>{{$opo->nombre}}</p>
				 @endforeach</p>.  
			
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
			  @foreach ($debilidad as $debi)
			  <p>{{$debi->nombre}}</p>
			   @endforeach
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
			  @foreach ($amenaza as $ame)
			  <p>{{$ame->nombre}}</p>
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

</section>
<form method="POST" style="display:none" id="form" action="{{route('analisisDofa')}}" >
	@csrf
		<input type="text" id="id_planecion" name="id_planecion">	
		<button  type="submit" id="btn12">		
</form>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

<script>

  $(document).ready(function () {
   $('.items li:nth-child(13)').addClass("acti");
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
