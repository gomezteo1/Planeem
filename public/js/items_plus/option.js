var Actitud1 =localStorage.getItem('Actitud1');
var Actitud2 =localStorage.getItem('Actitud2');
var Aprendizaje= localStorage.getItem('Aprendizaje');
var Aprendizaje2= localStorage.getItem('Aprendizaje2');
var Asertividad1 = localStorage.getItem('Asertividad1');
var Asertividad2 = localStorage.getItem('Asertividad2');
var Autocritica1 = localStorage.getItem('Autocritica1');
var Autocritica2 = localStorage.getItem('Autocritica2');
var Calidad1= localStorage.getItem('Calidad1');
var Calidad2= localStorage.getItem('Calidad2');
var vida1= localStorage.getItem('vida1');
var vida2= localStorage.getItem('vida2');
var Compromiso1 = localStorage.getItem('Compromiso1');
var Compromiso2 = localStorage.getItem('Compromiso2');
var Comunicación1 = localStorage.getItem('Comunicación1');
var Comunicación2 = localStorage.getItem('Comunicación2');
var Crecimiento1 = localStorage.getItem('Crecimiento1');
var Crecimiento2 = localStorage.getItem('Crecimiento2');
var Disciplina1 = localStorage.getItem('Disciplina1');
var Disciplina2 = localStorage.getItem('Disciplina2');
var Disponibilidad1 = localStorage.getItem('Disponibilidad1');
var Disponibilidad2 = localStorage.getItem('Disponibilidad2');
var Eficiencia1= localStorage.getItem('Eficiencia1');
var Eficiencia2= localStorage.getItem('Eficiencia2');
var Empatía1 = localStorage.getItem('Empatía1');
var Empatía2 = localStorage.getItem('Empatía2');
var Flexibilidad1 = localStorage.getItem('Flexibilidad1');
var Flexibilidad2 = localStorage.getItem('Flexibilidad2');
var  Honestidad1 = localStorage.getItem('Honestidad1');
var  Honestidad2 = localStorage.getItem('Honestidad2');
var  Humanismo1 = localStorage.getItem('Humanismo1');
var  Humanismo2 = localStorage.getItem('Humanismo2');
var Iniciativa1 = localStorage.getItem('Iniciativa1');
var Iniciativa2 = localStorage.getItem('Iniciativa2');
var Integridad1 =localStorage.getItem('Integridad1');
var Integridad2 =localStorage.getItem('Integridad2');
var  Justicia1 = localStorage.getItem('Justicia1');
var  Justicia2 = localStorage.getItem('Justicia2');
var Liderazgo1 = localStorage.getItem('Liderazgo1');
var Liderazgo2 = localStorage.getItem('Liderazgo2');
var Perseverancia1= localStorage.getItem('Perseverancia1');
var Perseverancia2= localStorage.getItem('Perseverancia2');
var Pertenencia1 = localStorage.getItem('Pertenencia1');
var Pertenencia2 = localStorage.getItem('Pertenencia2');
var Pro_actividad1=   localStorage.getItem('Pro_actividad1');
var Pro_actividad2=   localStorage.getItem('Pro_actividad2');
var  Profesionalismo1 = localStorage.getItem('Profesionalismo1');
var  Profesionalismo2 = localStorage.getItem('Profesionalismo2');
var Prudencia1 = localStorage.getItem('Prudencia1');
var Prudencia2 = localStorage.getItem('Prudencia2');
var Respeto1 = localStorage.getItem('Respeto1');
var Respeto2 = localStorage.getItem('Respeto2');
var  Responsabilidad_Social1 = localStorage.getItem('Responsabilidad_Social1');
var  Responsabilidad_Social2 = localStorage.getItem('Responsabilidad_Social2');
var Resiliencia2 = localStorage.getItem('Resiliencia2');
var Resiliencia1 = localStorage.getItem('Resiliencia1');
var Sencillez1 = localStorage.getItem('Sencillez1');
var Sencillez2 = localStorage.getItem('Sencillez2');
var Solidaridad1 = localStorage.getItem('Solidaridad1');
var Solidaridad2 = localStorage.getItem('Solidaridad2');
var  Transparencia1 = localStorage.getItem('Transparencia1');
var  Transparencia2 = localStorage.getItem('Transparencia2');
var Vocación_servicio1 =localStorage.getItem('Vocación_servicio1');
var Vocación_servicio2 =localStorage.getItem('Vocación_servicio2');
var Responsabilidad1 = localStorage.getItem('Responsabilidad1');
var Responsabilidad2 =localStorage.getItem('Responsabilidad2');

var valor = localStorage.getItem('valor');
var Descripcion1 = localStorage.getItem('Descripcion1');
var valor2 = localStorage.getItem('valor2');
var Descripcion2 = localStorage.getItem('Descripcion2');
var valor3 = localStorage.getItem('valor3');
var Descripcion3 = localStorage.getItem('Descripcion3');




var valor = [Actitud1,Aprendizaje,Asertividad1,Autocritica1,Calidad1,vida1,Compromiso1,Comunicación1,Crecimiento1,Disciplina1,Disponibilidad1
    ,Eficiencia1,Empatía1,Flexibilidad1,Honestidad1,Humanismo1,Iniciativa1,Integridad1,Justicia1,Liderazgo1,Perseverancia1,Pertenencia1,Pro_actividad1,Profesionalismo1,Prudencia1
    ,Respeto1,Responsabilidad_Social1,Resiliencia1,Sencillez1,Solidaridad1,Transparencia1,Vocación_servicio1,Responsabilidad1,valor,valor2,valor3];
var descr =[Actitud2,Aprendizaje2,Asertividad2,Autocritica2 ,Calidad2,vida2,Compromiso2,Comunicación2,Crecimiento2,Disciplina2 ,Disponibilidad2 , Eficiencia2, Empatía2 , Flexibilidad2 , Honestidad2 ,  Humanismo2 , Iniciativa2 ,Integridad2 , Justicia2, Liderazgo2 ,Perseverancia2,Pertenencia2 ,Pro_actividad2,Profesionalismo2 , Prudencia2 , Respeto2  , Responsabilidad_Social2, Resiliencia2 ,Sencillez2 ,Solidaridad2 ,Transparencia2 , Vocación_servicio2,Responsabilidad2
,Descripcion1,Descripcion2,Descripcion3];



for (let i = 0; i < valor.length; i++) {

        if( valor[i] != null  && descr[i] != null){

			  var nombre = $('#pro_id').find(':selected').val(); //Capturo el Value del Producto
			  var text = $('#pro_id').find(':selected').text();//Capturo el Nombre del Producto- Texto dentro del Select
			  var sptext = text.split();
			    //   var newtr = '<tr class="item"  data-id="'+sel+'">';
			  var newtr = '<a  class="actitud"    style="color:white" value="editarvalor"   > <i  style="color:white">'+valor[i]+'</i></a>';
			  newtr = newtr + ' <p>'+descr[i]+'</p>';
			  $('#datos').append(newtr); //Agrego el Producto al tbody de la Tabla con el id=campo_texto

              var text = '<textarea    lass="form-control"  name="valores[]"  >'+valor[i]+'</textarea>';
              text = text + '<textarea maxlength="1205"   class="campo"  name="descripcion[]"  >'+descr[i]+'</textarea>';

              $('#text').append(text);


              var text = '<textarea    lass="form-control"  name="valores[]"  >'+valor[i]+'</textarea>';
              text = text + '<textarea maxlength="1205"   class="campo"  name="descripcion[]"  >'+descr[i]+'</textarea>';

              $('#list').append(text);

        }
}
