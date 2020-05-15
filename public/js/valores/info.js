function Mostrar(){
	document.getElementById("caja4").style.display="block";
}
function AÑADIR (){
	document.getElementById("caja4").style.display="none";
}
function Mostrar_Ocultar(){
	var caja4 = document.getElementById("caja4");

	if(caja4.style.display == "none"){
		Mostrar();
	}
	else{
		AÑADIR ();
	}

}
function ve_boton5(){
	document.getElementById("caja5").style.display="block";
}
function ver_boton5 (){
	document.getElementById("caja5").style.display="none";
}
function muestra_boton5(){
	var caja5 = document.getElementById("caja5");

	if(caja5.style.display == "none"){
		ve_boton5();
	}
	else{
		ver_boton5 ();
	}

}
// boton 4 y caja 6 vista 1-3
function ve_boton4(){
	document.getElementById("caja6").style.display="block";
}
function ver_boton4 (){
	document.getElementById("caja6").style.display="none";
}
function Muestras_boton4(){
	var caja6 = document.getElementById("caja6");

	if(caja6.style.display == "none"){
		ve_boton4();
	}
	else{
		ver_boton4 ();
	}

}
// boton  y caja 7 vista 1-3
function ver_mas(){
	document.getElementById("caja7").style.display="block";
}
function ver (){
	document.getElementById("caja7").style.display="none";
}
function ver_oculta(){
	var caja7 = document.getElementById("caja7");

	if(caja7.style.display == "none"){
		ver_mas();
	}
	else{
		ver ();
	}

}

function AÑADE(){
	document.getElementById("AñadirCapa").style.display="block";
}
function crear (){
	document.getElementById("AñadirCapa").style.display="none";
}
function AÑADE_Oculta(){
	var AñadirCapa = document.getElementById("AñadirCapa");

	if(AñadirCapa.style.display == "none"){
		AÑADE();
	}
	else{
		crear ();
	}

}

function AÑADEc(){
	document.getElementById("AñadirCapa").style.display="block";
}
function crearc (){
	document.getElementById("AñadirCapa").style.display="none";
}
function AÑADEc_Ocultac(){
	var AñadirCapa = document.getElementById("AñadirCapa");

	if(AñadirCapa.style.display == "none"){
		AÑADEc();
	}
	else{
		crearc ();
	}

}
