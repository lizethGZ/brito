<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="img/logo.png" type="image/png">
        <title> RESIDENCIAS </title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="vendors/linericon/style.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
        <link rel="stylesheet" href="vendors/lightbox/simpleLightbox.css">
        <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
        <link rel="stylesheet" href="vendors/animate-css/animate.css">
        <link rel="stylesheet" href="vendors/popup/magnific-popup.css">
        <!-- main css -->
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/responsive.css">
    </head>
    <body>
        
        <!--================Header Menu Area =================-->
        <header class="header_area ">
            <div class="main_menu">
            	<nav class="navbar navbar-expand-lg navbar-light">
					<div class="container">
						<!-- Brand and toggle get grouped for better mobile display -->
						<a class="navbar-brand logo_h" href="#"><img src="img/logo.png" alt=""></a>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        
                        <ul class="nav navbar-nav menu_nav ml-auto">
                        <li class="nav-item"><img src="img/iniciarS.png" height="40px"><a class="nav-link" href="{{ route('/home') }}">  Inicio</a></li> 
                    @else
                        <ul class="nav navbar-nav menu_nav ml-auto">
                        <li class="nav-item"><img src="img/iniciarS.png" height="40px"><a class="nav-link" href="{{ route('login') }}">  Iniciar sesion</a></li> 
                        @if (Route::has('register'))                         
                            <ul class="nav navbar-nav menu_nav ml-auto">
                            <li class="nav-item"><img src="img/registrar.png" height="40px"><a class="nav-link" href="{{ route('register') }}">Registrarse</a></li> 
                        @endif
                    @endauth
                </div>
            @endif						
					</div>
            	</nav>
            </div>
        </header>
        <!--================Header Menu Area =================-->
        
        <!--================Home Banner Area =================-->
        <section class="home_banner_area">
           	<div class="box_1620">
           		<div class="banner_inner d-flex align-items-center">
					<div class="container">
						<div class="banner_content text-center">
							<h3 >RESIDENCIAS</h3>
						</div>
					</div>
				</div>
            </div>
        </section>
        <!--================End Home Banner Area =================-->
        
        <!--================Home Blog Area =================-->
        <section class="home_blog_area pad_top">
			<div class="row">
				<div class="col-sm-4">
				  <div class="card">
					<img height="350px" class="card-img-top" src="img/home-blog/h-blog-1.jpg" alt="Card image">
					<div class="card-body">
						<h4>¿QU&Eacute; SON RESIDENCIAS?</h4>
						<p>Trámite a seguir  para  el desarrollo de un proyecto de trabajo o la aplicación de un modelo  en cualquiera de las áreas profesionales establecidas.   </p>
						<ul>
							<li> El  egresado definirá la problemática y propondrá la solución óptima en base a los conocimientos adquiridos durante la estancia práctica de su profesión.</li>
						<br>
						<br>
						<br>
						<br>
						</ul>
					  </div>
				  </div>
				</div>
				<div class="col-sm-4">
				  <div class="card">
					<img height="350px" class="card-img-top" src="img/home-blog/h-blog-2.jpg" alt="Card image">
					<div class="card-body">
						<h4>ASPECTOS DE RELEVANCIA </h4>
						<ul>
							<li>Cumplir  con el 75% de créditos y ser alumno regular. Cuenta con un valor de 20 créditos. <br> Duración de 4 a 6 meses para acumular un mínimo de 640 horas.</li>
							<li>Duración de 4 a 6 meses para acumular un mínimo de 640 horas. </li>
							<li>Solo existe una oportunidad (Excepto causa justificada). </li>
							<li>Ningún estudiante podrá participar en proyectos de residencias profesionales, sin ser autorizado  oficialmente por la división. </li>
						</ul>
						
					  </div>
				  </div>
				</div>
				<div class="col-sm-4">
					<div class="card">
					  <img height="350px" class="card-img-top" src="img/home-blog/h-blog-3.jpg" alt="Card image">
					  <div class="card-body">
						<h4>INFORMACIÓN DE REGISTRO</h4>
						<ul>
							<b>Datos generales</b>
							<li>Lugar, fecha, Jefe de División y presidente de Academia.</li>
							<li>Nombre del proyecto y periodo proyectado.</li>
						</ul>
						<ul>
							<b>Datos de la empresa</b>
							<li>Nombre, giro, ramo o sector y RFC. </li>
							<li>Domicilio, colonia, ciudad, código postal, fax, teléfono no celular. </li>
							<li>Misión de la empresa, nombre del titular de la empresa y puesto que desempeña</li>
						</ul>
					</div>
					</div>
				  </div>
				  
			</div>
			<div class="row">
				  <div class="col-sm-4">
					<div class="card">
					  <img height="350px" class="card-img-top" src="img/home-blog/h-blog-4.jpg" alt="Card image">
					  <div class="card-body">
						<h4>TR&Aacute;MITES</h4>
						<ul>
							<li>Solicitar al Departamento de Control Escolar  constancia de avance de carrera.</li>
							<li>Acudir al Departamento de Control Escolar  para  entregar constancia de avance de carrera, llenar solicitud carta compromisoy ante proyecto para realizar su Residencia Profesional (a través del Banco de Anteproyectos publicados por el TESJI, o bien a propuesta del alumno).</li>
							<br>
						</ul>
						</div>
					</div>
				  </div>
				  <div class="col-sm-4">
					<div class="card">
					  <img height="350px" class="card-img-top" src="img/home-blog/h-blog-5.jpg" alt="Card image">
					  <div class="card-body">
						<h4> PRESENTACI&Oacute;N, EVALUACI&Oacute;N Y APROBACI&Oacute;N DEL PROYECTO </h4>
									<ul>
										<li>El estudiante dispone de 2 meses, a partir de la finalización de su proyecto, para presentar su informe al jefe de División. El informe deberá incluir los siguiente: </li>
										<li>Portada con el título del proyecto y datos generales del lugar de la residencia y del alumno. </li>
										<li>Índice. </li>
										<li>Introducción. </li>
										<li>ustificación.</li>
									</ul></div>
					</div>
				  </div>
				  <div   class="col-sm-4">
					<div class="card ">
					  <img height="350px" class="card-img-top" src="img/home-blog/h-blog-6.jpg" alt="Card image">
					  <div class="card-body">
						<h4>REINSCRIPCI&Oacute;N</h4>
									<ul>
										<li>Exclusiva de la Residencia Profesional si se realiza a tiempo completo.</li>
										<li>Carga mínima ponderando la Residencia Profesional, si se realiza a tiempo parcial. </li>
										<li>Carga especial que determinará el Jefe de la División, tomando en cuenta el historial académico del estudiante, demostrando que cumple con el tiempo necesario para desempeñar su Residencia.</li>
									</ul>
									<br>
						</div>
					</div>
				  </div>
			</div>
        </section>
        <!--================End Home Blog Area =================-->
        
		<br>
		<br>
        
        <!--================Instagram Area =================-->
        <section class="instagram_area">
        	<div class="container box_1620">
        		
        		<div class="instagram_image row m0">
        			<a href="#"><img src="img/instagram/ins-1.jpg" alt=""></a>
        			<a href="#"><img src="img/instagram/ins-2.jpg" alt=""></a>
        			<a href="#"><img src="img/instagram/ins-3.jpg" alt=""></a>
        			<a href="#"><img src="img/instagram/ins-4.jpg" alt=""></a>
        			<a href="#"><img src="img/instagram/ins-5.jpg" alt=""></a>
        			<a href="#"><img src="img/instagram/ins-6.jpg" alt=""></a>
        		</div>
        	</div>
        </section>
        <!--================End Instagram Area =================-->
        
        <!--================Footer Area =================-->
        <footer class="footer_area">
        	<div class="container">
        		<div class="row footer_inner">
        			<div class="col-lg-5 col-sm-6">
        				<aside class="f_widget ab_widget">
        					<div class="f_title">
        						<h3>Dirección</h3>
        					</div>
        					<p>CARRETERA JILOTEPEC-CHAPA DE MOTA KM 6.5 JILOTEPEC <br> ESTADO DE MÉXICO <br> TEL (01) 761-734-14-46</p>
        				</aside>
        			</div>
        			
        			<div class="col-lg-2 rig">
        				<aside class="f_widget social_widget">
        					<div class="f_title">
        						<h3>Contáctanos</h3>
        					</div>
        					<ul class="list">
        						<li><a href="#"><i class="fa fa-facebook"></i></a></li>
        						<li><a href="#"><i class="fa fa-twitter"></i></a></li>
        					</ul>
        				</aside>
        			</div>
        		</div>
        	</div>
        </footer>
        <!--================End Footer Area =================-->
        
        
        
        
        
        
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/popper.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/stellar.js"></script>
        <script src="vendors/lightbox/simpleLightbox.min.js"></script>
        <script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
        <script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
        <script src="vendors/isotope/isotope.pkgd.min.js"></script>
        <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="vendors/popup/jquery.magnific-popup.min.js"></script>
        <script src="js/jquery.ajaxchimp.min.js"></script>
        <script src="vendors/counter-up/jquery.waypoints.min.js"></script>
        <script src="vendors/counter-up/jquery.counterup.js"></script>
        <script src="js/mail-script.js"></script>
        <script src="js/theme.js"></script>
    </body>
</html>
      

 
