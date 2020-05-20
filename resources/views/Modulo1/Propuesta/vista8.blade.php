@extends('layouts.nav')

@section('content')
<header>
  @yield('js')

</header>




<div id="">
  <form method="post"  role="from" action="{{route('vista2')}}" style="display: none;">
    @csrf
    <input type="text" id="id_p" name="nombre_proyecto"   >
    <button type="submit" id="vista2" ></button>
  </form>
</div>



<div class="contenedor5">
 <h2 class="edita">Propuesta De Valor</h2>
 <p id="propuesad"></p>
</div>
<br>
<a style="color:white;" data-toggle="modal" data-target="#exampleModal" class="siguiente btn btn-planeem waves-effect waves-light">Guardar</a>
<a href="{{ route('Propuesta/editar') }}"  style="color:white;" class="editar btn btn-planeem waves-effect waves-light">Editar</a>
<span class="icon-info" data-toggle="modal" data-target="#exampleModalScrollable" style="cursor:pointer;"></span>
<div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle" style="margin-left: 252px; font-weight: bold;">Propuesta De Valor</h5>
        <span class="icon-cancel-circle" style="color:#FC7323; font-size: 32px; cursor: pointer; margin-top: 4px;
        margin-left: 10%;" data-dismiss="modal" aria-label="Close"></span>

      </div>
      <div class="modal-body">
        <p><br><br>Una propuesta de valor es una frase clara y concisa que explica como su producto o
            servicio resuelve los problemas del cliente, cubre una necesidad o mejora su situación
            específica, indicando claramente un beneficio. ....vista8</p>
      </div>
    </div>
  </div>
</div>

<!-- Modal de seguir adelante -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content" id="modalAvance">
      <div class="modal-header" >
        <h5 class="modal-title" id="exampleModalLabel"></h5>
        <span class="icon-cancel-circle" style="color:#FC7323; font-size: 32px; cursor: pointer; margin-top: 4px;
        margin-left: 10%;" data-dismiss="modal" aria-label="Close"></span>
      </div>
      <div class="modal-body" style="text-align: center;">
       <h1>A continuación Misión Organizacional</h1>
     </div>
     <div class="modal-footer">
      <a class="buttonModal btn btn-planeem waves-effect waves-light" data-dismiss="modal">Cancelar</a>
      <a href="{{ route('Mision/paso1')}} "  class="buttonModal btn btn-planeem waves-effect waves-light">Siguiente</a>
      {{-- <button type="button" class="btn btn-primary">Continuar</button> --}}
    </div>
  </div>
</div>
</div>
<style>
  #modalAvance{
    border-radius: 18px !important;
    border: 2px solid #0AB5A0;
  }
</style>
@yield('script')


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script>

  $(document).ready(function () {
    $('.items li:first-child').addClass("acti");
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
  var propuesa = localStorage.getItem('propuesta');
  var hola = document.getElementById('propuesad').innerHTML =propuesa;
</script>

<script>
  let progreso = 0;
  if(progreso == 0){
    document.getElementById('progress').style.display='none';
  }

</script>

<script>
  let progreso = localStorage.getItem('progressbar');
  let progreso2 = localStorage.getItem('progressbar2')
  document.getElementById('progress1').style.width = progreso;
  document.getElementById('progress2').style.width = progreso2;
  document.getElementById('icono').style.left= '28%';

</script>



<style >
	body{

		background-image: url("img/fondoLogo.jpg");
	}
	.collapsing{
		margin-top: -20px;
		z-index: -1;

	}

</style>


@endsection
