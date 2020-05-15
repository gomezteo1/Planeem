// 
  var nombre_p = localStorage.getItem('nombre_proyecto');
  document.getElementById('id_p').innerHTML = nombre_p;

  var Mision6 = localStorage.getItem('Mision1');
  var hola = document.getElementById('Mision6').innerHTML =Mision6;

  var propuesa = localStorage.getItem('propuesta');
  var hola = document.getElementById('propuesad').innerHTML =propuesa;

  // Muestra los datos del  localStorage
  var Vision = localStorage.getItem('Vision');
  var hola = document.getElementById('Vision3').innerHTML =Vision;

  var Para = localStorage.getItem('Mega1');
  var hola = document.getElementById('menga1').innerHTML =Para;


  //Con este condiciona, estamos, ocultando algunos elementos de la vista 
  var none= 0;
  
    if(none == 0){
        document.getElementById('id_p').style.display ="none";
        document.getElementById('Mision6').style.display = "none";
        document.getElementById('propuesad').style.display = "none";
        document.getElementById('Vision3').style.display = "none";
        document.getElementById('menga1').style.display= "none";
    }




