@extends('layouts.nav')

@section('content')



 <div>
               
       
        <div id="text" class="contenedor3">
               
                {{-- Campo de texto  --}}
                <textarea maxlength="1205"  id="propuesta"  class="campo  @error('para') is-invalid @enderror"   name="para"  required> </textarea>
        </div>

        <div class="">
        @error('para')
        <div  id="ler" class="formula" style="color: #0AB5A0"  >{{ $message }}</div>
        @enderror
        </div>

        <section>
                    <p class="formula">Fórmula: <b style="color: #0AB5A0">Para</b> (el cliente objetivo) + <b style="color:#0AB5A0">Que</b> (necesidad u oportunidad) + <b style="color:#0AB5A0">Nuestro</b> (nombre del producto/servicio) /categoría
                        del <br>producto) + (<b style="color:#0AB5A0">Beneficio</b>/Factor diferenciador)</p>
                    </section>

                    <a href="{{ route('Propuesta') }}" onclick="guardar()" style="color:white;" class="siguiente btn btn-planeem waves-effect waves-light">Guardar</a>

   </div>



        <script>
                var propuesta = localStorage.getItem('propuesta');
                document.getElementById('propuesta').innerHTML = propuesta ;
        </script>


        <script>
                function guardar(){
                        var propuesta = document.getElementById('propuesta').value;
                        localStorage.setItem('propuesta',propuesta);
                }
        </script>

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


<style >
	body{

		background-image: url("img/fondoLogo.jpg");
	}
	.collapsing{
		margin-top: -20px;
		z-index: -1;

	}

	</style>
















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
