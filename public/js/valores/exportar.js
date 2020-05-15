function Mostra(){
	document.getElementById("caja2").style.display="block";
}
function Exportar (){
	document.getElementById("caja2").style.display="none";
}
function Mostra_Oculta(){
	var caja = document.getElementById("caja2");

	if(caja.style.display == "none"){
		Mostra();
		document.getElementById("boton2").value="AÑADIR VALOR"
	}
	else{
		Exportar ();
	}

}

