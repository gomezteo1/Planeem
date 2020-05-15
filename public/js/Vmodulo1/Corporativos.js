


var contador = 0;
function guardar (){

let contador1 = contador += 1;

localStorage.getItem('contador1',contador1);

	var cantidad = contador1.toString();

console.log(cantidad);

var datos = new Array(cantidad);
var contenido = [];
var Descripcion = [];


for (let i = 0; i < datos.length; i++) {


	//Almacenamiento del localStorage
	if(datos[i]  == 1){
		contenido[i]= document.getElementById('valor').value;
		localStorage.setItem('valor',contenido[i]);

		Descripcion[i]= document.getElementById('Descripcion').value;
		localStorage.setItem('Descripcion1',Descripcion[i]);

	}

	if(datos[i]==2){
		contenido[i]= document.getElementById('valor').value;
		localStorage.setItem('valor2',contenido[i]);

		Descripcion[i]= document.getElementById('Descripcion').value;
		localStorage.setItem('Descripcion2',Descripcion[i]);
	}

	if(datos[i]==3){
		contenido[i]= document.getElementById('valor').value;
		localStorage.setItem('valor3',contenido[i]);

		Descripcion[i]= document.getElementById('Descripcion').value;
		localStorage.setItem('Descripcion3',Descripcion[i]);
	}

	if(datos[i] > 3){

            alert('no puedes, agregar más de 3 valores');

	}



	console.log (contenido[i]+"\n"+"posicion"+datos[i]);
}





}


