<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="{{ asset('img/logo.png')}}" type="image/png">                           
        <title> PERFIL </title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{ asset('css/bootstrap.css')}}">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <!-- main css -->
        <link rel="stylesheet" href="{{ asset('css/styleBrito.scss') }}"> 
        
    </head>
    <body>
        
        <!--================Header Menu Area =================-->
        <header class="header_area ">
            <div class="main_menu">
            	<nav class="navbar navbar-expand-lg navbar-light">
					<div class="container">
						<!-- Brand and toggle get grouped for better mobile display -->
						<a class="navbar-brand logo_h" href="#" ><img src="img/logo.png" alt=""></a>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
							<ul class="nav navbar-nav menu_nav ml-auto">
								<li class="nav-item"><img src="{{ asset('img/iniciarS.png')}}" height="40px"><a class="nav-link" href="{{ url('/jefeDivision') }}"> Inicio </a></li> 
								<li class="nav-item"><img src="{{ asset('img/img/cerrarS.png')}}" height="40px"><a class="nav-link" href="{{ url('/') }}"> Cerrar Sesion </a></li> 
								</div> 
					</div>
            	</nav>
            </div>
        </header>
        <!--================Header Menu Area =================-->
        
        <!--================Home Banner Area =================-->
        <section class="home_banner_area">
           	<div class="box_1620">
           		<div class="banner_inner d-flex align-items-center">
                   <img src="{{ asset('img/img/user1.png')}}" alt="">
                </div>
                <p id="jefe">JEFE DIVISION: </p>
            </div>
        </section>
        <!--================End Home Banner Area =================-->
        
        <!--================Home Blog Area =================-->
        <section class="home_blog_area pad_top">
			<div class="contenedor">
            <div class="wrap">
            <div class="titulo">BIENVENIDO .::. </div>
		<ul class="tabs">
			<li><a href="#tab1"><span class=""></span><span class="tab-text">Datos generales</span></a></li>
            <li><a href="#tab2"><span class=""></span><span class="tab-text">Cambiar contraseña</span></a></li>
		</ul>

		<div class="secciones">
			<article id="tab1">
            <div class="row">
                <div class="col-sm-4">
                    <label for="semestre">Nombre: </label>
                    <input type="text"></input>
                </div>  
                <div class="col-sm-4">
                <label for="semestre">Primer apellido: </label>
                    <input type="text"></input>
                </div>
                <div class="col-sm-4">
                <label for="semestre">Segundo apellido: </label>
                        <input type="text"></input>
                </div>  
                <div class="col-sm-4">
                    <label for="semestre">Teléfono: </label>
                    <input type="text"></input>
                </div>
                <div class="col-sm-4">
                    <label for="semestre">Correo electrónico: </label>
                    <input type="text"></input>
                </div> 

            </div> 
           <br> <center><button type="button" class="btn btn-warning">Guardar</button></center>
            </article>
            <article id="tab2">
            <div class="row">
            <div class="col-sm-12">
                    <label for="semestre">Contraseña anterior: </label><br>
                    <input type="text"></input>
                </div>
                <div class="col-sm-12">
                    <label for="semestre">Nueva contraseña: </label><br>
                    <input type="text"></input>
                </div>
                <div class="col-sm-12">
                    <label for="semestre">Confirmar contraseña: </label><br>
                    <input type="text"></input>
                </div>

            </div> 
           <br> <center><button type="button" class="btn btn-warning">Guardar</button></center>
           <br> <center><a href="{{ url()->previous() }}" class="btn btn-warning">Cancelar</a></center>
            </article>
			</div>
        </section>    
        
        <!--================End Home Blog Area =================-->
        
		<br>
	<br>                
        
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
        						<li><a href="#"><i class="fas fa-facebook-square"></i></a></li>
                                <li><a href="#"><i class="fas fa-whatsapp "></i></a></li>
                                <li><a href="#"><i class="fas fa-email"></i></a></li>
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
        <script src="js/jquery.ajaxchimp.min.js"></script>
        <script src="js/mail-script.js"></script>
        <script src="js/theme.js"></script>
        <script src="{{ asset('js/pestanaCambio.js')}}"></script>
        
        
    </body>
</html>