var mContenedor = document.getElementById("contenedorper2");
		var posY = mContenedor.offsetTop;

		console.log(posY);

		var h5 = document.getElementsByClassName("fortalez")[0];
		window.addEventListener("scroll", bajar);

		function bajar(){
			var PS = document.documentElement.scroll || document.body.scroll;
			console.log(PS, posY);

			if((PS+300) > posY){
				h5.innerHTML = " como estas?";
			}
		}