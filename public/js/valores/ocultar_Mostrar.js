var oportunidades = document.getElementById('exampleModalFo');
var fo = document.getElementById('fo');

var fortalezas = document.getElementById('exampleModalFa');
var fa = document.getElementById('fa');

var debilidades = document.getElementById('exampleModalDa');
var da = document.getElementById('da');

var amenazas = document.getElementById('exampleModalDo');
var dos = document.getElementById('do');

var body =document.getElementById("miBody");

function ocultarfo(){
	oportunidades.style.display="none";
	fo.style.transform= "translate(-1px, -6px)";

}
function mostrarfo(){
	oportunidades.style.display="block";
	fo.style.transform= "translate(540px,-168px)";
	miBody.style.opacity =".5";

}


function ocultarfa(){
	fortalezas.style.display="none";
	fa.style.transform= "translate(-1px, -6px)";
}
function mostrarfa(){
	fortalezas.style.display="block";
	fa.style.transform= "translate(-550px, -168px)";

	if (info == 'block') {
		console.log('correcto');
		
	}

}
function ocultarda(){
	debilidades.style.display="none";
	da.style.transform= "translate(-1px, -6px)";
}
function mostrarda(){
	debilidades.style.display="block";
	da.style.transform= "translate(540px, 245px)";

	if (info == 'block') {
		console.log('correcto');
		
	}

}

function ocultardo(){
	amenazas.style.display="none";
	dos.style.transform= "translate(-1px, -6px)";

}
function mostrardo(){
	amenazas.style.display="block";
	dos.style.transform= "translate(-540px, 250px)";

	if (info == 'block') {
		console.log('correcto');
		
	}
}
// botones de las vista 1 hasta 1-7(ultima)
function ver_caja7(){
	document.getElementById('caja7').style.display="block";
}
function cierre_caja7(){
	document.getElementById('caja7').style.display="none";
}

function verlo(){
	document.getElementById('caja7').style.display="block";
}
function cierre_caja7(){
	document.getElementById('caja7').style.display="none";
}


function ver_button2(){
	document.getElementById('caja4').style.display="block";
}
function cierra_caja4(){
	document.getElementById('caja4').style.display="none";
}


function ver_otro(){
	document.getElementById('AñadirCapa').style.display="block";
}
function cierra_AñadirCapa(){
	document.getElementById('AñadirCapa').style.display="none";
}


function ver_button4(){
	document.getElementById('caja6').style.display="block";
}
function cierra_caja6(){
	document.getElementById('caja6').style.display="none";
}

function ver_button5(){
	document.getElementById('caja5').style.display="block";
}
function cierra_caja5(){
	document.getElementById('caja5').style.display="none";
}
// botones de las vista 2 hasta 2-2(ultima)
function ver_button3_1_1(){
	document.getElementById('caja10').style.display="block";
}
function cierra_caja11(){
	document.getElementById('caja10').style.display="none";
}

function ver_button4_1_1(){
	document.getElementById('caja9').style.display="block";
}
function cierra_caja9(){
	document.getElementById('caja9').style.display="none";
}

function editar_empresa(){
	document.getElementById('edita').style.display="block";
}
function cierra_edita(){
	document.getElementById('edita').style.display="none";
}

function ver_button5_1_1(){
	document.getElementById('caja8').style.display="block";
}
function cierra_caja8(){
	document.getElementById('caja8').style.display="none";
}

function ver_button6_1_1(){
	document.getElementById('caja11').style.display="block";
}
function cierra_caja11(){
	document.getElementById('caja11').style.display="none";
}

function mas_factores(){
	document.getElementById('factores').style.display="block";
}
function cierra_factores(){
	document.getElementById('factores').style.display="none";
}
// botones de las vista 3 hasta

function ver_button3_1(){
	document.getElementById('caja10').style.display="block";
}
function cierre10_button3(){
	document.getElementById('caja10').style.display="none";
}

function ver_button4_1(){
	document.getElementById('caja9').style.display="block";
}
function cierre9_button4(){
	document.getElementById('caja9').style.display="none";
}

function ver_button5_1(){
	document.getElementById('caja8').style.display="block";
}
function cierre8_button5(){
	document.getElementById('caja8').style.display="none";
}

function ver_button6_1(){
	document.getElementById('caja11').style.display="block";
}
function cierre11_button6(){
	document.getElementById('caja11').style.display="none";
}
// botones de las vista 4 hasta
function ver_social7_11(){
	document.getElementById('caja_social').style.display="block";
}
function cierresocial_button7_11(){
	document.getElementById('caja_social').style.display="none";
}

function ver_button7_11(){
	document.getElementById('caja11-1').style.display="block";
}
function cierre11_button7_11(){
	document.getElementById('caja11-1').style.display="none";
}

function ver_button3_4(){
	document.getElementById('caja10').style.display="block";
}
function cierre10_button3_4(){
	document.getElementById('caja10').style.display="none";
}

function ver_button4_4(){
	document.getElementById('caja9').style.display="block";
}
function cierre9_button4_4(){
	document.getElementById('caja9').style.display="none";
}

function ver_button5_4(){
	document.getElementById('caja8').style.display="block";
}
function cierre8_button5_4(){
	document.getElementById('caja8').style.display="none";
}

function ver_button8_11(){
	document.getElementById('caja_Tecno').style.display="block";
}
function cierre11_button8_12(){
	document.getElementById('caja_Tecno').style.display="none";
}

function ver_Ambiental_11(){
	document.getElementById('caja11-2').style.display="block";
}
function cierre_ambiental(){
	document.getElementById('caja11-2').style.display="none";
}

function ver_legal(){
	document.getElementById('caja11-3').style.display="block";
}
function cierre_legal(){
	document.getElementById('caja11-3').style.display="none";
}
// botones de las vista 5 hasta
function ver_proveedores(){
	document.getElementById('caja11-4').style.display="block";
}
function cierre_proveedores(){
	document.getElementById('caja11-4').style.display="none";
}
// botones de las vista 6 hasta
function ver_button3_5(){
	document.getElementById('caja10').style.display="block";
}
function cierre_caja10(){
	document.getElementById('caja10').style.display="none";
}

function ver_button6_5(){
	document.getElementById('caja11').style.display="block";
}
function cierre_caja11(){
	document.getElementById('caja11').style.display="none";
}

function ver_button4_5(){
	document.getElementById('caja9').style.display="block";
}
function cierre_caja9(){
	document.getElementById('caja9').style.display="none";
}

function ver_button5_5(){
	document.getElementById('caja8').style.display="block";
}
function cierre_caja8(){
	document.getElementById('caja8').style.display="none";
}

function ver_infons(){
	document.getElementById('cajaacordeon').style.display="block";
}
function cierra_info(){
	document.getElementById('cajaacordeon').style.display="none";
}

function mas_factores1(){
	document.getElementById('factores1').style.display="block";
}
function cierra_factores1(){
	document.getElementById('factores1').style.display="none";
}

function button_Ansorff(){
	document.getElementById('caja8_Ansorff').style.display="block";
}
function Ansorff_caja8(){
	document.getElementById('caja8_Ansorff').style.display="none";
}

function button_Ansorff5(){
	document.getElementById('caja9_Ansorff').style.display="block";
}
function Ansorff_caja9(){
	document.getElementById('caja9_Ansorff').style.display="none";
}

// item 8 y 9
function ocultar(){
	document.getElementById('mostrarOcultar').style.display="none";
}
function mostrar(){
	document.getElementById('mostrarOcultar').style.display="block";
}

function cerrar_fortaleza(){
	document.getElementById('Fortalezasventana').style.display="none";
}
function ver_fortaleza(){
	document.getElementById('Fortalezasventana').style.display="block";
}

function cerrar_Oportunidades(){
	document.getElementById('Oportunidadesventana').style.display="none";
}
function ver_oportunidades(){
	document.getElementById('Oportunidadesventana').style.display="block";
}

function cerrar_Debilidades(){
	document.getElementById('Debilidadesventana').style.display="none";
}
function ver_debilidades(){
	document.getElementById('Debilidadesventana').style.display="block";
}

function cerrar_Amenazas(){
	document.getElementById('Amenazasventana').style.display="none";
}
function ver_amenazas(){
	document.getElementById('Amenazasventana').style.display="block";
}

function button_fortaleza1(){
	document.getElementById('caja_fortaleza').style.display="block";
}
function cierre_fortaleza1(){
	document.getElementById('caja_fortaleza').style.display="none";
}

function ocultar_sumaFo(){
	document.getElementById('mostrarFo').style.display="none";
}
function mostrar_sumaFo(){
	document.getElementById('mostrarFo').style.display="block";
}

function ocultar_sumaDa(){
	document.getElementById('mostrarDa').style.display="none";
}
function mostrar_sumaDa(){
	document.getElementById('mostrarDa').style.display="block";
}

function ocultar_sumaDo(){
	document.getElementById('mostrarDo').style.display="none";
}
function mostrar_sumaDo(){
	document.getElementById('mostrarDo').style.display="block";
}

