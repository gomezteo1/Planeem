@extends('layouts.nav')

@section('content')
<header>

</header>
<div class="form-group">
	<div class="contenedor5">
    <h2 class="edita">Misión Organizacional</h2>
    <br>
    <p id="Mision6"></p>
  </div>
  <br>
  <a data-toggle="modal" data-target="#exampleModal" style="color:white;" class="siguiente btn btn-planeem waves-effect waves-light">Guardar</a>
  <a href="{{ route('mision/edit') }}" style="color:white;" class="editar btn btn-planeem waves-effect waves-light">Editar</a>
  <span class="icon-info" data-toggle="modal" data-target="#exampleModalScrollable" style="cursor:pointer;"></span>
  <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalCenterTitle" style="margin-left: 252px; font-weight: bold;">Desarrollo De La Misión Organizacional</h5>
          <span class="icon-cancel-circle" style="color:#FC7323; font-size: 32px; cursor: pointer; margin-top: 4px;
          margin-left: 10%;" data-dismiss="modal" aria-label="Close"></span>

        </div>
        <div class="modal-body">
          <p>Este ítem se desarrollará a través de responder las diferentes preguntas en los recuadros habilitados:
              ¿Quiénes Somos? ¿Que Buscamos? ¿Para Quienes Trabajamos? ¿Porque lo Hacemos?...VISTA 14)</p>
        </div>
      </div>
    </div>
  </div>
</div>


<!--Modal: modalRelatedContent-->
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
        <h1>A Continuación Visión Organizacional</h1>
     </div>
     <div class="modal-footer">
     <a class="buttonModal btn btn-planeem waves-effect waves-light" data-dismiss="modal">Cancelar</a>
      <a href="{{ route('Vision/paso1')}} "  class="buttonModal btn btn-planeem waves-effect waves-light">Siguiente</a>
      {{-- <button type="button" class="btn btn-primary">Continuar</button> --}}
    </div>
  </div>
</div>
</div>
<style>
  #modalAvance{
    border-radius: 18px !important;
    /*width: 126%;*/
    border: 2px solid #0AB5A0;
  }
</style>
<script>
  var Mision6 = localStorage.getItem('Mision1');
  var hola = document.getElementById('Mision6').innerHTML =Mision6;
</script>

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


<script>
  let progreso = localStorage.getItem('progressbar');
  let progreso2 = localStorage.getItem('progressbar2')
  document.getElementById('progress1').style.width = progreso;
  document.getElementById('progress2').style.width = progreso2;
  document.getElementById('icono').style.left= '28%';

</script>


@endsection
