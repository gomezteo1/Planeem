function Mostrar(){
	document.getElementById("caja").style.display="block";
}
function AÑADIR (){
	document.getElementById("caja").style.display="none";
}
function Mostrar_Ocultar(){
	var caja = document.getElementById("caja");

	if(caja.style.display == "none"){
		Mostrar();
	}
	else{
		AÑADIR ();
	}

}

function Mosedi (){
	document.getElementById("edita").style.display="block";
}
function Editar (){
	document.getElementById("edita").style.display="none";
}
function Mosedi_Oculedi(){
	var edita = document.getElementById("edita");

	if(edita.style.display == "none"){
		Mosedi ()
	}
	else{
		Editar ();
	}

}

