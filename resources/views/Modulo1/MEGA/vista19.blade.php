@extends('layouts.nav')

@section('content')
<header>

</header>

<section>

</section>

<div class="form-group">
  <div class="Mision">
    <h1 class="edita">Mega Empresarial</h1>
    <br><br>
    <p style="padding: 10px;line-height: 23px;margin-left: 194px;width: 70%;font-size: 18px;text-align: justify;" >
        Este componente de la Plataforma Estratégica se integra con el planteamiento de los objetivos trascendentales de largo plazo,
        con el propósito de darle un carácter más ambicioso y cuantitativo de acuerdo con el punto de llegada de la organización.
        La Mega debe ser clara, contundente y retadora, puesto que se encarga de dinamizar el sentimiento de motivación y activar
        la euforia colectiva. También debe ser tangible y muy audaz con el fin de que catalice los mecanismos para integrar
        esfuerzos y estimular el progreso.
    </p>
  </div>
  <a href="{{ route('MEGA/paso2') }} " style="color:white;margin-top: 5% !important;" name="nuevo" class="Ahora btn btn-planeem waves-effect waves-light">Iniciar Ahora</a>
  <span class="icon-info" data-toggle="modal" data-target="#exampleModalScrollable" style="cursor:pointer;"></span>
  <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalCenterTitle" style="margin-left: 252px; font-weight: bold;"></h5>
          <span class="icon-cancel-circle" style="color:#FC7323; font-size: 32px; cursor: pointer; margin-top: 4px;
          margin-left: 10%;" data-dismiss="modal" aria-label="Close"></span>

        </div>
        <div class="modal-body">
          <p class="Nota" style="margin-left: 0.5px; font-weight: bold; font-size: 15px";>Desarrollo de la Mega Empresarial:</p>
          <p>Para desarrollar la Mega Empresarial debe responder las siguientes preguntas en los recuadros habilitados:<br>
              ¿Cuál es su objetivo desafiante?<br>
              ¿Cuál es la definición de su nicho de mercado?<br>
              ¿Cuál es el horizonte del tiempo de su empresa?<br><br>
              Recuerda:  la Mega Empresarial Se trata de la meta ganadora y audaz, que se fundamenta
              en una ventaja competitiva única y centrada en la innovación, que cuenta con una estrategia
              clara y permite a las empresas un crecimiento rentable y sostenido en el tiempo.<br>{vista19}

          </p>
        </div>
      </div>
    </div>
  </div>
</div>





<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

<script>

  $(document).ready(function () {
   $('.items li:nth-child(4)').addClass("acti");
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


<script >
  var por=0;

  if (por ==0) {
    document.getElementById('prog','icono').style.display = 'none';

  }
</script>



@endsection


