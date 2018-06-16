<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Carrera de Fisica U. A. T. F.</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Exchange Education a Responsive Web Template, Bootstrap Web Templates, Flat Web Templates, Android Compatible Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- css files -->
<link href="{{ asset('assets/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" media="all" />
<link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" media="all" />
<link href="{{ asset('assets/css/chromagallery.css') }}" rel="stylesheet" type="text/css" media="all" />
<link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" type="text/css" media="all" />
<!-- /css files -->
<!-- fonts -->
<!-- <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>-->
<!-- <link href='//fonts.googleapis.com/css?family=Viga' rel='stylesheet' type='text/css'>-->
<!-- /fonts -->
<!-- js files -->
<script src="{{ asset('assets/js/modernizr.custom.js') }}"></script>
<!-- /js files -->
</head>
{{--<body oncontextmenu="return false" onkeydown="return false" id="index.html" data-spy="scroll" data-target=".navbar" data-offset="60">--}}
<!-- Top Bar -->
<body>
<section class="top-bar">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
				<a href="#index.html" class="logo"><h1>Carrera de Fisica</h1></a>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">

			</div>
		</div>
	</div>
</section>
<!-- /Top Bar -->
<!-- Navigation Bar -->
<div class="navbar-wrapper">
    <div class="container">
		<nav class="navbar navbar-inverse navbar-static-top cl-effect-21">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
						<span class="sr-only">NAVEGADOR</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				<div id="navbar" class="navbar-collapse collapse">
					<ul class="nav navbar-nav">
						<li class="active"><a href="#">Principal</a></li>
						<li><a href="#about">Nuestros Docentes</a></li>
						<li><a href="#services">Servicios</a></li>
						<li><a href="biblioteca1/index.php">Biblioteca</a></li>
						<li><a href="#gallery">Galeria</a></li>
						<!--<li><a href="identificarse.html">Identificarse</a></li>-->
						@if(auth()->check())
                        <li><a href="{{ url('auth/login') }}">Dashboard</a></li>
                        @else
						<li><a href="{{ url('auth/login') }}">Identificarse</a></li>
                        @endif
						<li><a href="http://192.168.5.132/moodle-2.4.1/index.php">Moodle</a></li>
						<li><a href="#contact">Contactos</a></li>
					</ul>
				</div>
			</div>
        </nav>
    </div>
</div>
<!-- /Navigation Bar -->
<!-- Banner Section -->
 <!-- Carousel
    ================================================== -->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
	<!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
        <li data-target="#myCarousel" data-slide-to="4"></li>
        <li data-target="#myCarousel" data-slide-to="5"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
        <div class="item active">
			<img class="first-slide" src="{{ asset('assets/images/carrera_fisica2.JPG') }}" alt="First slide">
			<div class="container">
				<div class="carousel-caption">

				</div>
			</div>
        </div>
        <div class="item">
			<img class="second-slide" src="{{ asset('assets/images/ciencias_puras.JPG') }}" alt="Second slide">
			<div class="container">
				<div class="carousel-caption">

				</div>
			</div>
        </div>
        <div class="item">
			<img class="third-slide" src="{{ asset('assets/images/carrera_fisica1.JPG') }}" alt="Third slide">
			<div class="container">
				<div class="carousel-caption">

				</div>
			</div>
        </div>
        <div class="item">
			<img class="third-slide" src="{{ asset('assets/images/est fisica.') }}jpg" alt="Third slide">
			<div class="container">
				<div class="carousel-caption">

				</div>
			</div>
        </div>
        <div class="item">
			<img class="third-slide" src="{{ asset('assets/images/carrera_fisica3.JPG') }}" alt="Third slide">
			<div class="container">
				<div class="carousel-caption">

				</div>
			</div>
        </div>
        <div class="item">
			<img class="third-slide" src="{{ asset('assets/images/biblioteca.JPG') }}" alt="Third slide">
			<div class="container">
				<div class="carousel-caption">

				</div>
			</div>
        </div>
    </div>
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div><!-- /.carousel -->
<!-- /Banner Section -->
<!-- About Section -->
<section class="about-us" id="about">
	<h3 class="text-center slideanim">Nuestros Docentes</h3>
	<p class="text-center slideanim">La Carrera de Física cuenta con un equipo de docentes idoneos, capaces e interactivos lo cual brinda un mejor desenvolvimiento y capacidad para que los alumnos se sientan motivados</p>
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-6">
				<div class="about-details">
					<div class="row">
						<div class="col-sm-2 col-xs-12">
							<img src="{{ asset('assets/images/about-img1') }}.png" class="img-responsive slideanim" alt="about-img">
						</div>
						<div class="col-sm-10 col-xs-12">
							<div class="about-info slideanim">
								<p>Ella es una de las mas distinguidas licenciadas en Fisica Aplicada, cuenta con un doctorado y una especialidad en Semi Conductores.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-md-6">
				<div class="about-details">
					<div class="row">
						<div class="col-sm-2 col-xs-12">
							<img src="{{ asset('assets/images/about-img2') }}.png" class="img-responsive slideanim" alt="about-img">
						</div>
						<div class="col-sm-10 col-xs-12">
							<div class="about-info slideanim">
								<p>El es uno de nuestros docentes mas antiguos, realizo una maestria en Fisica Astronomica.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

</section>
<!-- /About Section -->
<!-- Our Services -->
<section class="our-services" id="services">
	<h3 class="text-center slideanim">Servicios</h3>
	<p class="text-center slideanim">La Carrera de Física cuenta con los ambientes e instrumentaria necesaria para poder realizar trabajos</p>
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-6">
				<div class="serv-details">
					<div class="row">
						<div class="col-sm-6 col-xs-6">
							<img src="{{ asset('assets/images/lab_102.JPG') }}" alt="" class="img-responsive slideanim">
						</div>
						<div class="col-sm-6 col-xs-6">
							<div class="serv-img-details slideanim">
								<h4>Laboratorio de Fisica</h4>
								<p>Ambiente 102</p>
							</div>
						</div>
					</div>
				</div>
				<div class="serv-info slideanim">
					<p>Este laboratorio cuenta con una variedad de equipos para poder realizar los experimentos concernientes a la materia de laboratorio, este no es usado únicamente por los estudiantes de dicha carrera, sino que tambien es de gran apoyo para las carreras que llevan dentro de su malla curricular materias relacionadas con el area de la física.</p>
				</div>
			</div>
			<div class="col-lg-6 col-md-6">
				<div class="serv-details">
					<div class="row">
						<div class="col-sm-6 col-xs-6">
							<img src="{{ asset('assets/images/fis_11.JPG') }}" alt="" class="img-responsive slideanim">
						</div>
						<div class="col-sm-6 col-xs-6">
							<div class="serv-img-details slideanim">
								<h4>Ambientes</h4>
								<p>Ambiente 11</p>
							</div>
						</div>
					</div>
				</div>
				<div class="serv-info slideanim">
					<p>Las aulas cuentan con dispositivos de proyeccion (datas) que mejoran el aprendizaje y ka rápida comprensión de las clases, pudiendo asi proyectar video, sonido y movimiento en el mismo.</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-6 col-md-6">
				<div class="serv-details">
					<div class="row">
						<div class="col-sm-6 col-xs-6">
							<img src="{{ asset('assets/images/serv-img3') }}.jpg" alt="" class="img-responsive slideanim">
						</div>
						<div class="col-sm-6 col-xs-6">
							<div class="serv-img-details slideanim">
								<h4>Nuestros Estudiantes</h4>
								<p></p>
							</div>
						</div>
					</div>
				</div>
				<div class="serv-info slideanim">
					<p>Formamos estudiantes muy capaces y les brindamos todos los servicios que necesiten.</p>
				</div>
			</div>
			<div class="col-lg-6 col-md-6">
				<div class="serv-details">
					<div class="row">
						<div class="col-sm-6 col-xs-6">
							<img src="{{ asset('assets/images/serv-img4') }}.jpg" alt="" class="img-responsive slideanim">
						</div>
						<div class="col-sm-6 col-xs-6">
							<div class="serv-img-details slideanim">
								<h4>Sala de Computacion</h4>
								<p></p>
							</div>
						</div>
					</div>
				</div>
				<div class="serv-info slideanim">
					<p>La Carrera cuenta con gabinetes de computacion equipadas para poder realizar trabajos, esta cuenta con un data para brindar una mejor enseñanza a los estudantes.</p>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- /Our Services -->
<!-- Our Information -->
<section class="our-info">
	<h3 class="text-center slideanim">Acerca de la Carrera de Física</h3>
	<p class="text-center slideanim"> </p>
	<div class="container">
		<div class="row info-part">
			<div class="col-lg-6 col-md-6 col-sm-6 info-specs">
				<div class="info-details slideanim">
					<h4>Carrera de Fisica</h4>
					<p>Cuenta con un equipo capáz de lograr que la carrera este a un nivel apropiado, además de dar insentivos a los estudiantes pertenencientes a la misma, siendo así una de las que logran formar profesionales de provecho y bastante capaces para la sociedad.</p>
					<h4>Competencias de la Carrera</h4>
					<p>La Carrera de Física, acorde con la Misión y la visión de la Universidad, tiene como competencia
					<p>Principal:</p>
						<p>Formar profesionales competentes e idóneos dotado de conocimiento profundo del fenómeno físico desde la óptica de los conocimientos científicos, de habilidades y destrezas en  la investigación y dispuesto a servir a la comunidad.</p>
						<p>Desarrolla el análisis, conocimiento y la comprensión del trabajo que ha de realizar, con conocimiento del tema, dominio de   las etapas de la investigación y aplicación efectiva en la solución de problemas teóricos y prácticos en beneficio propio y de la Ciencia en especial como parte final de su PRE GRADO.</p>
						<p>Desarrolla las habilidades en el uso de los métodos y procedimientos de la investigación Científica, solución de problemas Científicos  previamente  identificados y fundamentales. en el marco de la aplicación de los conocimientos.</p>

				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-6 info-specs">
				<img src="{{ asset('assets/images/acto.jpeg') }}" alt="" class="img-responsive main-img slideanim">
			</div>
		</div>
		<div class="info-pics">
			<div class="container">
				<div class="row">
					<div class="col-lg-2 col-md-2 col-sm-2 info-images">
						<img src="{{ asset('assets/images/f1.JPG') }}" alt="" class="img-responsive slideanim">
					</div>
					<div class="col-lg-2 col-md-2 col-sm-2 info-images">
						<img src="{{ asset('assets/images/f3.jpg') }}" alt="" class="img-responsive slideanim">
					</div>
					<div class="col-lg-2 col-md-2 col-sm-2 info-images">
						<img src="{{ asset('assets/images/f2.JPG') }}" alt="" class="img-responsive slideanim">
					</div>
					<div class="col-lg-2 col-md-2 col-sm-2 info-images">
						<img src="{{ asset('assets/images/f4.jpg') }}" alt="" class="img-responsive slideanim">
					</div>
					<div class="col-lg-2 col-md-2 col-sm-2 info-images">
						<img src="{{ asset('assets/images/f5.JPG') }}" alt="" class="img-responsive slideanim">
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- /Our Information -->
<!-- Our Gallery -->
<section class="our-gallery" id="gallery">
	<h3 class="text-center slideanim">Galeria</h3>
	<p class="text-center slideanim"> </p>
	<div class="container">
		<div class="content slideanim">
			<div class="chroma-gallery mygallery">
				<img src="{{ asset('assets/images/g1_1.jpg') }}" alt="Click" data-largesrc="{{ asset('assets/images/g1.jpg') }}">
				<img src="{{ asset('assets/images/g2_2.jpg') }}" alt="Click" data-largesrc="{{ asset('assets/images/g2.jpg') }}">
				<img src="{{ asset('assets/images/g3_3.jpg') }}" alt="Click" data-largesrc="{{ asset('assets/images/g3.jpg') }}">
				<img src="{{ asset('assets/images/g4_4.jpg') }}" alt="Click" data-largesrc="{{ asset('assets/images/g4.jpg') }}">
				<img src="{{ asset('assets/images/g5_5.jpg') }}" alt="Click" data-largesrc="{{ asset('assets/images/g5.jpg') }}">
				<img src="{{ asset('assets/images/g6_6.jpg') }}" alt="Click" data-largesrc="{{ asset('assets/images/g6.jpg') }}">
				<img src="{{ asset('assets/images/g7_7.jpg') }}" alt="Click" data-largesrc="{{ asset('assets/images/g7.jpg') }}">
				<img src="{{ asset('assets/images/g8_8.jpg') }}" alt="Click" data-largesrc="{{ asset('assets/images/g8.jpg') }}">
			</div>
		</div>
	</div>
</section>
<!-- /Our Gallery -->
<!-- Our Curriculum -->
<!--<section class="curriculum" id="curriculum">
	<h3 class="text-center slideanim">VIDEO INFORMATIVO</h3>
	<p class="text-center slideanim">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-6">
				<div class="cur-details slideanim">


				</figcaption>
							  <section id="reproductor_video">

									<head>
								<link rel="stylesheet" href="css/reproductor.css">
								<script src="j{{ asset('assets/s/script1') }}.js"></script>
								</head>
							<body>
								<section id="reproductor">

									<video id="medio">
										<source src="video/bolivia.mp4">
										<!--<source src="Video/v1.ogg">-->
									<!--</video>

									<nav>
										<div id="botones">
											<button type="button" id="reproducir">
												Reproducir
											</button>
										</div>
										<div id="barra">
												<div id="progreso"></div>
										</div>
										<div id="limpiar"></div>
									</nav>
								</section>
							</body>

					</section>
				<figcaption>


					<h4>Our Important Aspects</h4>
					<p class="cur1">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
					<div class="curriculum-info">
						<div>
							<i class="fa fa-fort-awesome"></i>
							<h5>Collegiate Stays On Track</h5>
							<p class="cur2">Lorem Ipsum is simply dummy text of the printing and typesetting.</p>
						</div>
						<div>
							<i class="fa fa-book"></i>
							<h5>Bigger, Better Education</h5>
							<p class="cur2">Lorem Ipsum is simply dummy text of the printing and typesetting.</p>
						</div>
						<div>
							<i class="fa fa-graduation-cap"></i>
							<h5>Step Into Graduation</h5>
							<p class="cur2">Lorem Ipsum is simply dummy text of the printing and typesetting.</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-md-6 slideanim">
				<div class="video">
					<!-- <iframe src="https://player.vimeo.com/video/15428374?title=0&byline=0&portrait=0" -->
					<!--frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
				</div>
			</div>
		</div>
	</div>
</section>-->
<!-- /Our Curriculum -->
<!-- Google Map -->
<!--<section class="map">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12 slideanim">
				<iframe class="googlemaps" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d380510.6741687111!2d-88.01234121699822!3d41.83390417061058!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1455598377120" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
		</div>
	</div>
</section>-->


<!-- /Google Map -->
<!-- Contact Section -->
<section class="our-contacts" id="contact">
	<h3 class="text-center slideanim">Contactos</h3>
	<p class="text-center slideanim">Para cualquier consulta usted puede contactarnos via.</p>
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<form role="form">
					<div class="row">
						<div class="form-group col-lg-4 slideanim">
							<input type="text" class="form-control user-name" placeholder="Your Name" required/>
						</div>
						<div class="form-group col-lg-4 slideanim">
							<input type="email" class="form-control mail" placeholder="Your Email" required/>
						</div>
						<div class="form-group col-lg-4 slideanim">
							<input type="tel" class="form-control pno" placeholder="Your Phone Number" required/>
						</div>
						<div class="clearfix"></div>
						<div class="form-group col-lg-12 slideanim">
							<textarea class="form-control" rows="6" placeholder="Your Message" required/></textarea>
						</div>
						<div class="form-group col-lg-12 slideanim">
							<button type="submit" href="#" class="btn-outline1">Confirmar</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>
<!-- /Contact Section -->
<!-- Footer Section -->
<section class="footer">
	<h2 class="text-center">Gracias por su visita</h2>
	<hr>
	<div class="container">
		<div class="row">
			<div class="col-lg-4 footer-left">
				<h4>Informacion del Contacto</h4>
				<div class="contact-info">
					<div class="address">
						<i class="glyphicon glyphicon-globe"></i>
						<p class="p3">Av. del Maestro</p>
						<p class="p3">Potosi, Bolivia</p>
					</div>
					<div class="phone">
						<i class="glyphicon glyphicon-phone-alt"></i>
						<p class="p4">+00 1010101010</p>
					</div>
					<div class="email-info">
						<i class="glyphicon glyphicon-envelope"></i>
						<p class="p4"><a href="mailto:email2@example.com">fisicaedu@gmail.com</a></p>
					</div>
				</div>
			</div><!-- col -->

			<div class="col-lg-4 footer-right">
				<h4>Contactenos</h4>
				<p>También puede encontrarnos por:</p>
				<ul class="social-icons2">
					<li><a href="https://es-la.facebook.com/"><i class="fa fa-facebook"></i></a></li>
					<li><a href="https://twitter.com/?lang=es"><i class="fa fa-twitter"></i></a></li>
				</ul>
			</div><!-- col -->
		</div><!-- row -->
	</div><!-- container -->
	<hr>
	<div class="copyright">
		<p>© 2017 Carrera de Física. Derechos Reservados, Elaborado por P.E.F.C.</p>
	</div>
</section>
<!-- /Footer Section -->
<!-- Back To Top -->
<a href="#0" class="cd-top">Top</a>
<!-- /Back To Top -->
<!-- js files -->
<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/SmoothScroll.min.js') }}"></script>
<!-- js files for gallery -->
<script src="{{ asset('assets/js/chromagallery.pkgd.min.js') }}"></script>
	<script type="text/javascript">
		$(document).ready(function()
		{
		    $(".mygallery").chromaGallery();
		});
	</script>
<!-- /js files for gallery -->
<!-- Back To Top -->
<script src="{{ asset('assets/js/backtotop.js') }}"></script>
<!-- /Back To Top -->
<script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

  // Store hash
  var hash = this.hash;

  // Using jQuery's animate() method to add smooth page scroll
  // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
  $('html, body').animate({
    scrollTop: $(hash).offset().top
  }, 900, function(){

    // Add hash (#) to URL when done scrolling (default click behavior)
    window.location.hash = hash;
    });
  });
})
</script>
<script>
$(window).scroll(function() {
  $(".slideanim").each(function(){
    var pos = $(this).offset().top;

    var winTop = $(window).scrollTop();
    if (pos < winTop + 600) {
      $(this).addClass("slide");
    }
  });
});
</script>
<!-- /js files -->
</body>
</html>