
		$(document).ready(function () {
		$('.objetivoTexto').mouseenter(function(){
			let parrafo = $(this).attr('parrafo');

			$('.hover2').html(`<p>${parrafo}</p>`)
			$('.hover2').show()
			$('p').addClass("resumenObjetivos2");

		})
		$('.objetivoTexto').mouseleave(function(){

			$('.hover2').show()
		})
	})