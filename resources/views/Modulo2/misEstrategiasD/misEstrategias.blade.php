@extends('layouts.nav2')
@section('content')
  <header>
    @yield('js')
    @yield('progres')
  </header>
  
  <form method="post" role="from" action="{{route('misEstrategias')}}">
      @csrf
      {{-- <input type="text" id="id_Planecion" hidden> --}}
      <div>
        <div class="contentParrafo">
          <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
              consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
              cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
              proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
          </p>
        </div>
        <div id="campo_texto"  class="campo_texto">
          <br><h3 style="text-align: center;">Mis estrategias</h3>
          <br><br>
          @foreach ($misEstrategias1 as $misEstrategias)
            <div class="input-group flex-nowrap">
              <div class="input-group-prepend">
                  <span class="input-group-text" id="addon-wrapping">*</span>
              </div>
              <p class="form-control">
                {{$misEstrategias->estrategia}}
              </p>
              <a  id="boton1" onclick="edit_estrategia()" data-toggle="modal" data-target="#show" class="button2_agregar5" ><span class="icon-folder-plus"><div id="hover_agregar1">
                <h5>Editar</h5></div></span>
              </a>
              <a id="boton2_eliminar2" data-toggle="modal" data-target="#exampleModalc" class="boton2_eliminar2"><span class="icon-bin"></span><div id="hover_eliminar">
                <h5>Eliminar</h5></div>
              </a>
            </div>
          @endforeach
        </div>
      </div>
  </form> 

<!-- son las listas de estrategias que se llaman desde la dofa los targets de esos modales-->
  <div class="lista">
      <h4 style="line-height: 41px;">Estrategias D.<span value="mas_factores" onclick="mas_factores()" class="icon-circle-down" style=" margin-left: 8%;"></span></h4>
  </div>
  <section id="factores">
      <div id="factor">
          <form class="opciones2">
              <div class="formulario2">
                  <div class="respuestas2">
                      <div class="wrap" style=" ">
                          <div class="radio" align="center">
                              <a class="agregarVerbo" data-toggle="modal"  data-target="#exampleModal55">FA</a>
                              <br><br> 
                              <a class="agregarVerbo" data-toggle="modal"  data-target="#exampleModal5">FO</a>
                              <br><br>
                              <a class="agregarVerbo" data-toggle="modal"  data-target="#exampleModal6">DO<a>
                              <br>
                              <a class="agregarVerbo" data-toggle="modal"  data-target="#exampleModal7">DA</a>
                            <br><br>
                          </div>
                      </div>
                  </div>
              </div>
          </form>
      </div>
  </section>
<!-- Acá cierra la lista de estrategias de la dofa -->        
	
<!---ESTO ES EL MODAL 1 de crear--->
<div class="modal fade" id="exampleModalx" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Crear estrategia</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('misEstrategiasCreate')}}" method="post">
                  @csrf
                    <div class="form-group">
                        <label for="message-text"  class="col-form-label">Estrategias</label>
                        <input type="text" class="form-control" id="estrategia" name="estrategia">
                    </div>
                    <div class="form-group">
                       <input type="text" style="background: #0AB5A0;" name="id_Planeacion" id="id_Planeacion">
                    </div>
                    <button type="submit" class="btn btn-planeem">Guardar</button>
                </form>   
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-planeem" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>
<!--Final del modal de Crear-->                

<!---ESTO ES EL MODAL 2 de modificar--->
<div class="modal fade" tabindex="-1" id="show" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header" style="color: white;">
          <h5 class="modal-title mt-0" id="myLargeModalLabel">Información de la estrategia</h5>
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="color:white;">×</button>
      </div>
      <div class="modal-body">
          <form action="#" method="post">
            <div class="row responsive">
              <div class="col-md-6">
                <div class="form-group">
                    <label for="estrategia_update">Estrategia</label>
                    <input type="text" id="estrategia_update" class="form-control" required>
                </div>
              </div>
            </div>
            <div class="card-footer">
                <button class="btn btn-secondary float-right" onclick="cleanInputsUpdate()"  data-dismiss="modal" style="margin:2px">Cerrar</button>
                <button id="buttonEdit" type="button" onclick="update_estrategia()" class="btn btn-success float-right">Actualizar</button>
            </div>
          </form>
      </div>
    </div>
  </div>
</div>
</div>
<!--Final del modal de Crear-->                
  
<!--Diseño del modals-->
  <style>
		.modal-modificado2{
			width: 180% !important;
			height: 240px !important;
			border: #0AB5A0 2px solid !important;
			border-radius: 12px !important;
		}
  </style>


<!-- Botones para desplegar los modales------------------------------------------------------------------->
	<div class="col-md-auto mx-auto mt-auto">
		<div class="infon">
          <a  id="boton1" data-toggle="modal" data-target="#exampleModalx" class="button2_agregar5" ><span class="icon-folder-plus"><div id="hover_agregar1">
              <h5>Agregar</h5></div></span>
          </a>
        {{-- <a id="boton2_eliminar2" onclick="Refrescaverbo2()" class="boton2_eliminar2"><span class="icon-bin"></span><div id="hover_eliminar">
            <h5>Eliminar</h5></div>
                </a> --}}
                <!--<button type="submit" style="color:white;"   class="siguiente btn btn-planeem waves-effect waves-light">Siguiente</button>-->
          <!--<a href="{{-- route('tercero1-2') --}}" style="color:white;" class="retroceder btn btn-planeem waves-effect waves-light">Anterior</a>-->
    </div>
  </div>
  <div>    
<!--------------------------------------------------------------------------------------------------------->    
  <div>
      <br>
      <br>
      <button type="submit" style="color:white;"   class="siguiente btn btn-planeem waves-effect waves-light">Siguiente</button>
      <!--	<a href="{{-- route('tercero1-2') --}}" style="color:white;" class="retroceder btn btn-planeem waves-effect waves-light">Anterior</a>--> 
  </div>
  
  <div class="modal fade" id="exampleModal55" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="z-index: 99999999;">
    <div class="modal-dialog" role="document">
      <div class="modal-content" id="Fortalezasventana">
        <div class="modal-header">
         <h3 style="color: black;margin-left: 30%;"> 
          <img src="img/icono1.png" style="width: 28px;margin-top: -16px;">
          <img src="img/icono5.png" style="width: 28px;margin-top: -16px;">
          <img src="img/icono4.png" style="width: 28px;margin-top: -3px;">Fortalezas + Amenazas=FA
        </h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="outline: none;margin-left: 0% !important;" >
          <span class="icon-cancel-circle" style="color: #FC7323; font-size: 21px;margin-top: 2%; cursor: pointer;"></span>
       </button>
     </div>
     <div class="modal-body">
        <div class="scrollfortaleza2">
          <main>
              <h1 style="text-align: center;">Fortalezas</h1>
              @foreach ($fortaleza as $fortaleza)
                  <p>{{$fortaleza->nombre}}</p>
              @endforeach
          </main>
          <main>
              <h1 style="text-align: center;">Amenazas</h1>
              @foreach ($amenaza as $amenaza)
                <p>{{$amenaza->nombre}}</p>
              @endforeach
          </main>
      </div>
    </div>
  </div>
  </div>
  </div>
  <style type="text/css">
      main {
          column-count: 1;
          column-gap: 3em;
          background-color: #fff;
          padding: 4rem;
          max-width: 530px;
          display: inline-table;
      }
  </style>
  <div class="modal fade" id="exampleModal5" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content" id="Fortalezasventana">
        <div class="modal-header">
         <h3 style="color: black;margin-left: 30%;"> 
          <img src="img/icono1.png" style="width: 28px;margin-top: -16px;">
          <img src="img/icono5.png" style="width: 28px;margin-top: -16px;">
          <img src="img/icono2.png" style="width: 28px;margin-top: -16px;">Fortalezas + Oportunidades=FO
        </h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="outline: none;margin-left: 0% !important;">
         <span class="icon-cancel-circle" style="color: #FC7323; font-size: 21px;margin-top: 2%; cursor: pointer;"></span>
       </button>
     </div>
     <div class="modal-body">
        <div class="scrollfortaleza2">
          <main>
            <h1 style="text-align: center;">Fortalezas</h1>
            @foreach ($fortaleza2 as $fortaleza2)
                <p>{{$fortaleza2->nombre}}</p>
            @endforeach
          </main>
          <main>
            <h1 style="text-align: center;">Oportunidades</h1>
            @foreach ($oportunidad as $oportunidad)
                <p>{{$oportunidad->nombre}}</p>  
            @endforeach
          </main>
        </div>
    </div>
  </div>
  </div>
  </div>
  
  <div class="modal fade" id="exampleModal6" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content" id="Fortalezasventana">
        <div class="modal-header">
         <h3 style="color: black;margin-left: 30%;"> 
          <img src="img/icono3.png" style="width: 28px;margin-top: -16px;">
          <img src="img/icono5.png" style="width: 28px;margin-top: -16px;">
          <img src="img/icono4.png" style="width: 28px;margin-top: -3px;">Debilidades + Amenazas=DA
        </h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="outline: none;margin-left: 0% !important;" >
         <span class="icon-cancel-circle" style="color: #FC7323; font-size: 21px;margin-top: 2%; cursor: pointer;"></span>
       </button>
     </div>
     <div class="modal-body">
        <div class="scrollfortaleza2">
          <main>
            <h1 style="text-align: center;">Debilidades</h1>
            @foreach ($debilidad as $debilidad)
                <p>{{$debilidad->nombre}}</p>
            @endforeach
          </main>
          <main>
            <h1 style="text-align: center;">Amenazas</h1>
            @foreach ($amenaza2 as $amenaza2)
               <p>{{$amenaza2->nombre}}</p>
            @endforeach
          </main>
        </div>
    </div>
  </div>
  </div>
  </div>
  
  <div class="modal fade" id="exampleModal7" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content" id="Fortalezasventana">
        <div class="modal-header">
         <h3 style="color: black;margin-left: 30%;"> 
          <img src="img/icono3.png" style="width: 28px;margin-top: -16px;">
          <img src="img/icono5.png" style="width: 28px;margin-top: -16px;">
          <img src="img/icono2.png" style="width: 28px;margin-top: -16px;">Debilidades + Oportunidades=DO
        </h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="outline: none;margin-left: 0% !important;" >
         <span class="icon-cancel-circle" style="color: #FC7323; font-size: 21px;margin-top: 2%; cursor: pointer;"></span>
       </button>
     </div>
     <div class="modal-body">
      <div class="scrollfortaleza2">
        <main>
          <h1 style="text-align: center;">Debilidades</h1>
        @foreach ($debilidad2 as $debilidad2)
          <p>{{$debilidad2->nombre}}</p>
        @endforeach
        </main>
        <main>
      <h1 style="text-align: center;">Oportunidades</h1>
      @foreach ($oportunidad2 as $oportunidad2)
          <p>{{$oportunidad2->nombre}}</p> 
      @endforeach
        </main>
      </div>
    </div>
  </div>
  </div>
  </div>

	<span class="icon-info" data-toggle="modal"  data-target="#exampleModalScrollable" style="cursor:pointer;"></span>
	<div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
		<div class="modal-dialog modal-dialog-scrollable" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalCenterTitle" style="margin-left: 252px; font-weight: bold;">PROPUESTA DE VALOR</h5>
					<span class="icon-cancel-circle" style="color:#FC7323; font-size: 32px; cursor: pointer; margin-top: 4px;
					margin-left: 10%;" data-dismiss="modal" aria-label="Close"></span>
				</div>
				<div class="modal-body">
					<p>Son las expectativas que de forma unilateral el consumidor se forma en su mente, es lo que el cliente
						imagina que obtendrá a la hora de adquirir determinado bien o servicio, en esto podemos influir, pero en
						mayor parte son las experiencias personales del consumidor y las condiciones generales del mercado lo
						que determinan sus expectativas personales a la hora de comprar
						a través de ella determinarás lo que diferencia tu producto o servicio de la competencia, además que te
					ayudará a encontrar la forma en que atenderás a tus clientes o segmento de mercado. (Saavedra, 2017)</p>
				</div>
			</div>
		</div>
	</div>
	<label type="text" id="nombre"></label><br>
</div>

</div>
</form>


@yield('script')
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

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
    $(document).ready(function () {
      $('.items3 li:nth-child(2)').addClass("acti3");
      $('.items3 li').click(function () {
        $('.items3 li').removeClass("acti3");
        $(this).addClass("acti3");
      })

      $('.valores').mouseenter(function(){
        let mensaje = $(this).attr('mensaje');
        $('.hover').html(`<p>${mensaje}</p>`)
        $('.hover').show()
      })
      $('.valores').mouseleave(function(){
        $('.hover').hide()
      })
    });
</script>



<!-- Contiene todo el ajax del crud-->

<script>
  // var table = false;
  
  // $(document).ready(function() {
  //     listPlanta();
  // });
  
  // function applyDataTable() {
  //     $("#plantaTable").DataTable({
  //         responsive: true,
  //         autoWidth: false,
  //         language: {
  //           search: "",
  //           searchPlaceholder: "Buscar",
  //           lengthMenu: "Mostrar _MENU_ por pagina",
  //           zeroRecords: "No se encontraron datos",
  //           info: "Mostrando _PAGE_ de _PAGES_",
  //           infoEmpty: "Atualmente vacia",
  //           infoFiltered: "(filtered from _MAX_ total records)"
  //         }
  //     });
  
  //     table = true;
  // }
  // function listPlanta() {
  //     $("#tablePlantaBody").html("");
  //     $.ajax({
  //         headers: {
  //             "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
  //         },
  //         url: "/planta/data",
  //         type: "GET",
  //         datatype: "json",
  //         success: function(response) {
  //             // console.log(response.data);
  //             if (response.ok == false) {
  //                 toast("info", "Atención", response.message);
  //             } else {
  //                 response.data.forEach(function(e, i) {
  
  //                     $("#tablePlantaBody").append(
  //                         ` <tr>
  //                             <td>  ${i + 1} </td>
  //                             <td>  ${e.nombrePlanta}  </td>
  //                             <td>
  //                                 <button  onclick="edit_planta(
  //                                ${ e.id})" class="btn btn-success rounded-circle"><i class="fa fa-edit"></i></button>
  
  //                                 <button onclick="show_planta(
  //                                ${ e.id})" class="btn btn-info rounded-circle"><i class="fa fa-eye"></i></button>
  
  //                             </td>
  //                        </tr>`
  //                     );
  //                 });
  
  //                 if (table == false) {
  //                     applyDataTable();
  //                 }
  //             }
  //         }
  //     });
  // }
  
  
  
  // function show_planta(id) {
  //     $.ajax({
  //         headers: {
  //             "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
  //         },
  //         url: "/planta/show",
  //         type: "GET",
  //         datatype: "json",
  //         data: {
  //             id: id
  //         },
  //         success: function(res) {
  //             console.log(res);
  //             if (res.ok == true) {
  //                 data = res.data;
  //                 $("#nombre_planta_update").val(data.nombrePlanta);
  //                 $("#nombre_planta_update").prop('disabled', true);
  
  //                 $("#buttonEdit").hide();
  //                 $("#show").modal('toggle');
  //             } else if (res.ok == false) {
  //                 toastr('danger', 'Atención', res.message);
  
  //             }
  //         }
  //     });
  // }
  
  function edit_estrategia(id) {
    $.ajax({
          headers: {
              "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
          },
          url: "/misEstrategias/show",
          type: "GET",
          datatype: "json",
          data: {
              id: id
          },
          success: function(res) {
              console.log(res);
              if (res.ok == true) {
                  data = res.data;
                  $("#estrategia_update").val(data.estrategia);
                  $("#estrategia_update").prop('disabled', false);
  
                  $("#buttonEdit").show();
                //  $("#buttonEdit").attr("onclick", `update_estrategia(${data.id})`);
                  $("#show").modal('toggle');
              } else if (res.ok == false) {
                  toastr('danger', 'Atención', res.error);
  
              }
          }
      });
  }
  
  
  function update_estrategia(id) {
      let estrategia = $("#estrategia_update").val();
  
      $.ajax({
          url: "/misEstrategias/update",
          headers: {
              "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
          },
          type: "POST",
          dataType: "json",
          data: {
              id: id,
              estrategia: estrategia,
            
  
          },
          success: function(response) {
              if (response.ok == true) {
                  // listPlanta();
                  $('#show').modal('toggle');
                  // toastr('success', 'Atención', response.message);
                  cleanInputsUpdate();
  
              } else if (response.ok == false) {
                  if (response.message) {
                      listAlertsUpdate(response.message);
  
                  } else {
                      toastr('danger', 'Atención', response.error);
                  }
              }
          }
      });
  }
  
  // function register_planta() {
  
  //     let nombre_planta = $("#nombre_planta").val();
  
  //     $.ajax({
  //         url: "/planta/store",
  //         headers: {
  //             "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
  //         },
  //         type: "POST",
  //         dataType: "json",
  //         data: {
  //             nombrePlanta: nombre_planta,
  
  //         },
  //         success: function(response) {
  //             if (response.ok == true) {
  //                 listPlanta();
  //                 $('.modal-register').modal('toggle');
  //                 cleanInputs();
  
  //                 toastr('success', 'Atención', response.message);
  //             } else if (response.ok == false) {
  //                 if (response.message) {
  //                     listAlerts(response.message);
  //                 } else {
  //                     toastr('danger', 'Atención', response.error);
  //                 }
  //             }
  //         }
  //     });
  // }
  
  // function cleanInputs() {
  //     $("#nombre_planta").val('');
  //     $("#nombre_planta").removeClass('is-invalid');
  // }
  
  function cleanInputsUpdate() {
      $("#estrategia_update").val('');
      $("#estrategia_update").removeClass('is-invalid');
  
  }
  
  // function listAlerts(e) {
  //     if (e.nombrePlanta) {
  //         toastr("danger", "Error", e.nombrePlanta[0]);
  //         $("#nombre_planta").addClass("is-invalid");
  //     }
  
  // }
  
  function listAlertsUpdate(e) {
      if (e.estrategia) {
          toastr("danger", "Error", e.estrategia[0]);
          $("#estrategia_update").addClass("is-invalid");
      }
  }
  
  // function toastr(type, tittle, text) {
  //     $.toast({
  //         heading: "" + tittle + "",
  //         text: "" + text + "",
  //         position: "top-right",
  //         loaderBg: "#000",
  //         class: "jq-has-icon jq-toast-" + type,
  //         hideAfter: 4500,
  //         stack: 6,
  //         showHideTransition: "fade"
  //     });
  // }
  </script>

<script>
  var id = localStorage.getItem('id')
  $('#id_planecion').val(id);
  console.log(id);

  id_planecion = localStorage.getItem('id')
  $('#id_Planeacion').val(id_planecion);
  console.log(id_planecion);
</script>
  
@endsection
