function Mosta(){
	document.getElementById("caja3").style.display="block";
}
function editarvalor (){
	document.getElementById("caja3").style.display="none";
}
function Mosta_Ocul(){
	var caja3 = document.getElementById("caja3");

	if(caja3.style.display == "none"){
		Mosta();
	}
	else{
		editarvalor ();
	}

}