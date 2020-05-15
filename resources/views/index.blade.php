@extends('layouts.modales')
@section('title','Inicio')
<!-- QUIENES SOMOS -->
@section('contenido')
<style >
	body{

		background-image: url("img/fondoLogo.jpg");
	}
	.collapsing{
		margin-top: -20px;
		z-index: -1;

	}

</style>


<section class="container-fluid quienesSomos text-white" id="quienesSomos">
	<div class="row">
		<article class="col-md-6 d-flex justify-content-center align-items-center">
			<h2 class="h1-responsive tituloQuienesSomos titulo animated bounce slow pt-5 pt-md-1">¿Quiénes
				somos?
			</h2>
		</article>
		<article class="col-md-6 d-flex justify-content-center align-items-center wow fadeInUp">
			<div class="h4-responsive d-flex align-items-center h-50 col-md-10 sombreadoCuadro texto-cuadro">
				<p class="text" style="text-align: justify;font-size: 20px !important;">
					Somos un equipo multidisciplinario e idóneo, conformado por Instructores, Aprendices y Entidades Aliadas, que a través de trabajo colaborativo unieron sus conocimientos  para ofrecer a las Mipymes una herramienta web interactiva Gratuita, con el fin de fortalecer la planeación estratégica empresarial, aportando al  crecimiento económico.
				</p>
			</div>
		</article>
	</div>
</section>

<!-- QUE ES PLANEEM -->

<section class="container-fluid queEsPlaneEm" id="queEs">
	<div class="row">
		<article class="col-md-6 d-flex justify-content-center align-items-center flex-column">
			<div class="d-flex flex-column align-items-center ">
				<h2 style="font-size:120px; margin:0"
				class="h1-responsive tituloQ t-responsive tituloQueEs d-flex verde animated bounceIn fuenteTitulo">
				Plane<p class="naranja planeem">E</p>m</h2>
				<p class="h1-responsive d-flex align-items-center tituloQ planEstrategico"
				style="color: black; font-size:30px; margin:-30px 0 0 0">
				Plan Estratégico Empresarial
			</p>
		</div>
	</article>
	<article class="col-md-6 d-flex justify-content-center align-items-center wow fadeInUp">
		<div class="text-center col-md-8 h-50 d-flex align-items-center texto-cuadroQ sombreadoCuadro ">
			<p class="text h4-responsive" style="text-align: justify;">
				Es un una herramienta web desarrollada por SENNOVA que le ayudará  a identificar  oportunidades, amenazas, debilidades y fortalezas, de manera dinámica e interactiva facilitándole insumos para diseñar la planeación estratégica de su negocio, obteniendo beneficios y valores para fortalecer las diferentes áreas de la empresa, además conseguir el Éxito que anhela, construyendo una cultura de conocimientos y buenas practicas. 
			</p>
		</div>
	</article>
</div>
</section>

<!-- Aliados -->

<section class="container-fluid p-0" id="equipoTrabajo">
	<!--Carousel Wrapper-->
	<div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">
		<!--Indicators-->
		<ol class="carousel-indicators" id="bazinga">
			<li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
			<li data-target="#carousel-example-2" data-slide-to="1"></li>
			<li data-target="#carousel-example-2" data-slide-to="2"></li>
		</ol>
		<!--/.Indicators-->
		<div class="carousel-inner">
			<div class="carousel-item active img1">
				<!-- Comienzo CARD -->
				<div class="col-lg-4 col-md-6 d-block mx-auto w-100" alt="First slide" style="padding: 120px 50px;">

					<h2 class="py-lg-4 h1-responsive text-center py-4" style="color: white;">Aliados</h2>

					<!--Card-->
					<div class="card card-cascade">

						<!--Card image-->
						<div class="view view-cascade d-flex align-center">
							<figure class="figure d-flex align-center">
								<img src="{{asset('img/logoSennova.png')}}"
								class="card-img-top figure-img image-responsive" alt="imagen persona">
							</figure>
							<a>
								<div class="mask rgba-white-slight"></div>
							</a>
						</div>
						<!--/.Card image-->
					</div>
					<!--/.Card-->

				</div>
				<!-- Fin Card -->
				<!-- <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(15).jpg" alt="First slide"> -->
			</div>
			<div class="carousel-item img2">
				<!-- Comienzo CARD -->
				<div class="col-lg-4 col-md-6 d-block mx-auto w-100" alt="Second slide"
				style="padding: 120px 50px;">
				<h2 class="py-lg-4 h1-responsive text-center py-4" style="color: white;">Aliados</h2>
				<!--Card-->
				<div class="card card-cascade">

					<!--Card image-->
					<div class="view view-cascade d-flex align-center">
						<figure class="figure d-flex align-center esumer">
							<img src="{{asset('img/logoEsumer.png')}}"
							class="card-img-top figure-img image-responsive" alt="imagen persona">
						</figure>
						<a>
							<div class="mask rgba-white-slight"></div>
						</a>
					</div>
					<!--/.Card image-->

					<!--Card content-->
					<div class="card-body card-body-cascade text-center">
					</div>
					<!--/.Card content-->

				</div>
				<!--/.Card-->

			</div>
			<!-- Fin Card -->
		</div>
		<div class="carousel-item img3">
			<!-- Comienzo CARD -->
			<div class="col-lg-4 col-md-6 d-block w-100 m-auto" alt="Third slide" style="padding: 120px 50px;">

				<h2 class="py-lg-4 h1-responsive text-center py-4" style="color: white;">Aliados</h2>

				<!--Card-->
				<div class="card card-cascade">

					<!--Card image-->
					<div class="view view-cascade d-flex align-center">
						<figure class="figure d-flex align-center">
							<img src="{{asset('img/logoTecnoparque.png')}}"
							class="card-img-top figure-img image-responsive" alt="imagen persona" style="top: 27%;">
						</figure>
						<a>
							<div class="mask rgba-white-slight"></div>
						</a>
					</div>
					<!--/.Card image-->


					<!--Card content-->
					<div class="card-body card-body-cascade text-center">

					</div>
					<!--/.Card content-->

				</div>
				<!--/.Card-->

			</div>
			<!-- Fin Card -->
		</div>
		<div class="carousel-item img5">
			<!-- Comienzo CARD -->
			<div class="col-lg-4 col-md-6 d-block mx-auto w-100" alt="Second slide"
			style="padding: 120px 50px;">

			<h2 class="py-lg-4 h1-responsive text-center py-4" style="color: white;">Aliados</h2>

			<!--Card-->
			<div class="card card-cascade">

				<!--Card image-->
				<div class="view view-cascade d-flex align-center">
					<figure class="figure d-flex align-center">
						<img src="{{asset('img/blogger.png')}}"
						class="card-img-top figure-img image-responsive" alt="imagen persona" style="top: 20%;">
					</figure>
					<a>
						<div class="mask rgba-white-slight"></div>
					</a>
				</div>
				<!--/.Card image-->

				<!--Card content-->
				<div class="card-body card-body-cascade text-center">
				</div>
				<!--/.Card content-->

			</div>
			<!--/.Card-->

		</div>
		<!-- Fin Card -->
	</div>
</div>
<!--Controls-->
<a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
	<span class="carousel-control-prev-icon" aria-hidden="true"></span>
	<span class="sr-only">Previous</span>
</a>
<a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
	<span class="carousel-control-next-icon" aria-hidden="true"></span>
	<span class="sr-only">Next</span>
</a>
<!--/.Controls-->
</div>
<!--/.Carousel Wrapper-->
</section>

<!-- CONTACTOS -->

<section class="container-fluid Contactos p-0 d-flex justify-content-end align-items-center" id="contactos">
	<!-- llamamos el mapa desde google maps -->
	<iframe class="w-100 h-100 d-sm-block position-absolute"
	src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.0624881183553!2d-75.57755848541105!3d6.255498395472091!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e4429020d4090d3%3A0xd9dc5f94adc65133!2sSENA+-+Regional+Antioquia.!5e0!3m2!1ses-419!2sid!4v1559940862373!5m2!1ses-419!2sid"
	width="800" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
	<div class="view w-100 h-100">
		<!-- Card -->
		<div class="card mask rgba-black-strong text-white">

			<!-- Card body -->
			<div class="card-body d-flex justify-content-center justify-content-md-end align-items-center">

				<!-- Material form register -->
				<form class="col-lg-5 col-sm-6">



					<h2 class="h1-responsive text text-center py-4">Contáctanos</h2>

					<!-- Material input text -->
					<div class="md-form">
						<i class="fas fa-user-tie prefix grey-text"></i>
						<input type="text" id="materialFormCardNameEx" name="Nombre" id="Nombre" class="form-control text-light">
						<label for="materialFormCardNameEx"  class="font-weight-light text-white">Nombre</label>
					</div>

					<!-- Material input email -->
					<div class="md-form">
						<i class="fa fa-envelope prefix grey-text"></i>
						<input type="email" id="materialFormCardEmailEx" id="Correo" name="Correo" class="form-control text-light">
						<label for="materialFormCardEmailEx" class="font-weight-light text-white">Correo</label>
					</div>

					<!-- Material textarea message -->
					<div class="md-form form-sm">
						<i class="fa fa-pencil-alt prefix grey-text"></i>
						<textarea type="text" id="materialFormMessageModalEx1"
						class="md-textarea form-control text-light" id="Mensaje" name="Mensaje"></textarea>
						<label for="materialFormMessageModalEx1" class="text-white">Mensaje</label>
					</div>

					<div class="text-center py-4 mt-3">
						<button class="btn rounded-pill text-white teal darken-1 boton-enviar-contacto"
						type="submit">Enviar</button>
					</div>
				</form>
				<!-- Material form register -->

			</div>
			<!-- Card body -->

		</div>
		<!-- Card -->
	</div>
	<!-- contenedor padre -->
	<article class="contenedorPadreC d-none d-sm-block">
		<!-- contenedor botones -->
		<div class="contenedor" numero="1">
			<!-- boton principal -->
			<button class="botonF1 rounded-circle border border-white">
				<span class="circle fa fa-map-marker-alt"></span>
			</button>
			<!-- parrafo animacion -->
			<p class="btnC botonF2 d-flex">
				<span>Calle 75 N2 asdas</span>
			</p>
		</div>
		<!-- contenedor botones -->
{{-- 		<div class="contenedor" numero="2">
			<!-- boton principal -->
			<button class="botonF1 rounded-circle border border-white">
				<span class="fas fa-phone-alt"></span>
			</button>
			<!-- parrafo animacion -->
			<p class="btnC botonF2 d-flex">
				<span>7586965 ext(122)</span>
			</p>
		</div> --}}
		<!-- contenedor botones -->
		<div class="contenedor" numero="3">
			<!-- boton principal -->
			<button class="botonF1 rounded-circle border border-white">
				<span class="far fa-envelope"></span>
			</button>
			<!-- parrafo animacion -->
			<p class="btnC botonF2 d-flex">
				<span>planeen@gmail.com</span>
			</p>
		</div>
	</article>
</section>

<!-- ENLACES -->
<footer class="container-fluid Enlaces d-flex flex-column align-items-center justify-items-around mt-5"
id="enlaces">
<!-- TITULO ENLACES -->
<div class="">
	<h2 class="h1-responsive text-center py-4 tituloEnlaces">Enlaces</h2>
</div>
<!-- CONTENEDOR LOGOS REDES SOCIALES -->
<article class="row mt-5 contenedorI w-100">
	<div class="sliderI">
		{{-- LOGOS imagenes --}}
		<div class="slide-track">
			<div class="slide">
				<a href="http://www.esumer.edu.co/" target="_blank"><img src="{{asset('img/logoEsumerBN.png')}}" class="imagenSlide" height="60"
					width="150" alt="logoEsumer" /></a>
				</div>
				<div class="slide">
					<a href="http://centrodeserviciosygestionempresarial.blogspot.com/" target="_blank"><img src="{{asset('img/bloggerBN.png ')}}" class="imagenSlide" height="60"
						width="150" alt="blogger" /></a>
					</div>
					<div class="slide">
						<a href="http://40.70.207.114/" target="_blank"><img src="{{asset('img/logoSennovaBN.png')}}" class="imagenSlide" height="60"
							width="150" alt="logoSennova" /></a>
						</div>
						<div class="slide">
							<a href="http://tecnoparque.sena.edu.co/Paginas/default.aspx" target="_blank"><img src="{{asset('img/logoTecnoparque.png')}}" class="imagenSlide" height="60"
								width="150" alt="logoTecnoparque" /></a>
							</div>
							<div class="slide">
								<a href="https://www.gidpi.com/#/Login" target="_blank"><img src="{{asset('img/logoGidpiBN.png')}}" class="imagenSlide" height="60"
									width="150" alt="logoGidpi" /></a>
								</div>
								<div class="slide">
									<a href="http://www.esumer.edu.co/" target="_blank"><img src="{{asset('img/logoEsumerBN.png')}}" class="imagenSlide" height="60"
										width="150" alt="logoEsumer" /></a>
									</div>
									<div class="slide">
										<a href="http://centrodeserviciosygestionempresarial.blogspot.com/" target="_blank"><img src="{{asset('img/bloggerBN.png ')}}" class="imagenSlide" height="60"
											width="150" alt="blogger" /></a>
										</div>
										<div class="slide">
											<a href="http://40.70.207.114/" target="_blank"><img src="{{asset('img/logoSennovaBN.png')}}" class="imagenSlide" height="60"
												width="150" alt="logoSennova" /></a>
											</div>
											<div class="slide">
												<a href="http://tecnoparque.sena.edu.co/Paginas/default.aspx" target="_blank"><img src="{{asset('img/logoTecnoparque.png')}}" class="imagenSlide" height="60"
													width="150" alt="logoTecnoparque" /></a>
												</div>
											</div>
											<div class="slide">
												<a href="https://www.gidpi.com/#/Login" target="_blank"><img src="{{asset('img/logoGidpiBN.png')}}" class="imagenSlide" height="60"
													width="150" alt="logoGidpi" /></a>
												</div>
												<div class="slide">
													<a href="http://www.esumer.edu.co/" target="_blank"><img src="{{asset('img/logoEsumerBN.png')}}" class="imagenSlide" height="60"
														width="150" alt="logoEsumer" /></a>
													</div>
													<div class="slide">
														<a href="http://centrodeserviciosygestionempresarial.blogspot.com/" target="_blank"><img src="{{asset('img/bloggerBN.png ')}}" class="imagenSlide" height="60"
															width="150" alt="blogger" /></a>
														</div>
														<div class="slide">
															<a href="http://40.70.207.114/" target="_blank"><img src="{{asset('img/logoSennovaBN.png')}}" class="imagenSlide" height="60"
																width="150" alt="logoSennova" /></a>
															</div>
															<div class="slide">
																<a href="http://tecnoparque.sena.edu.co/Paginas/default.aspx" target="_blank"><img src="{{asset('img/logoTecnoparque.png')}}" class="imagenSlide" height="60"
																	width="150" alt="logoTecnoparque" /></a>
																</div>
																<div class="slide">
																	<a href="https://www.gidpi.com/#/Login" target="_blank"><img src="{{asset('img/logoGidpiBN.png')}}" class="imagenSlide" height="60"
																		width="150" alt="logoGidpi" /></a>
																	</div>
																	<div class="slide">
																		<a href="http://www.esumer.edu.co/" target="_blank"><img src="{{asset('img/logoEsumerBN.png')}}" class="imagenSlide" height="60"
																			width="150" alt="logoEsumer" /></a>
																		</div>
																		<div class="slide">
																			<a href="http://centrodeserviciosygestionempresarial.blogspot.com/" target="_blank"><img src="{{asset('img/bloggerBN.png ')}}" class="imagenSlide" height="60"
																				width="150" alt="blogger" /></a>
																			</div>
																			<div class="slide">
																				<a href="http://40.70.207.114/" target="_blank"><img src="{{asset('img/logoSennovaBN.png')}}" class="imagenSlide" height="60"
																					width="150" alt="logoSennova" /></a>
																				</div>
																				<div class="slide">
																					<a href="http://tecnoparque.sena.edu.co/Paginas/default.aspx" target="_blank"><img src="{{asset('img/logoTecnoparque.png')}}" class="imagenSlide" height="60"
																						width="150" alt="logoTecnoparque" /></a>
																					</div>
																					<div class="slide">
																						<a href="https://www.gidpi.com/#/Login" target="_blank"><img src="{{asset('img/logoGidpiBN.png')}}" class="imagenSlide" height="60"
																							width="150" alt="logoGidpi" /></a>
																						</div>
																					</div>
																				</div>
																			</article>
																			{{-- CONTENEDOR LOGOS --}}
																			<div class="d-flex flex-md-row flex-column justify-content-center col-md-8 mw-100 mt-5 contenedorLogos">
																				{{-- IMAGENES LOGOS --}}
																				<figure class="boxSepEnlace p-1 col-md-4 h-50" align="center">
																					<img alt="" class="img-fluid h-100" src="img/logoSena.png" />
																				</figure>
																				<figure class="boxSepEnlace p-1 col-md-4 h-50" align="center">
																					<img alt="" class="img-fluid h-100" src="img/centro.png" />
																				</figure>
																				<figure class="boxSepEnlace p-1 col-md-4 h-50" align="center">
																					<img alt="" class="img-fluid h-100" src="img/logoSennova.png" />
																				</figure>
																			</div>
																		</footer>


																		@endsection