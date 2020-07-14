<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="{{ asset('img/logo.png')}}" type="image/png">                           
        <title> RESIDENCIAS </title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{ asset('css/bootstrap.css')}}">
        <link rel="stylesheet" href="vendors/linericon/style.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
        <link rel="stylesheet" href="vendors/lightbox/simpleLightbox.css">
        <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
        <link rel="stylesheet" href="vendors/animate-css/animate.css">
        <link rel="stylesheet" href="vendors/popup/magnific-popup.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <!-- main css -->
        <link rel="stylesheet" href="{{ asset('css/styleBrito.scss') }}">        
        <link rel="stylesheet" href="{{ asset('css/responsive.css')}}">
        
    </head>
    <body>
        
        <!--================Header Menu Area =================-->
        <header class="header_area ">
            <div class="main_menu">
            	<nav class="navbar navbar-expand-lg navbar-light">
					<div class="container">
						<!-- Brand and toggle get grouped for better mobile display -->
						<a class="navbar-brand logo_h" href="index.html"><img src="img/logo.png" alt=""></a>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
							<ul class="nav navbar-nav menu_nav ml-auto">
								<li class="nav-item"><img src="{{ asset('img/iniciarS.png')}}" height="40px"><a class="nav-link" href="#"> Perfil </a></li> 
								<li class="nav-item"><img src="{{ asset('img/img/cerrarS.png')}}" height="40px"><a class="nav-link" href="#"> Cerrar Sesion </a></li> 
								</div> 
					</div>
            	</nav>
            </div>
        </header>
        <!--================Header Menu Area =================-->
        
        <!--================Home Banner Area =================-->
        <section class="home_banner_area">
           	<div class="box_1620">
               <p id="jefe">ALUMNO: </p>
           		<div class="banner_inner d-flex align-items-center">
                   
                  <!-- <img src="{{ asset('img/img/user3.png')}}" alt=""> -->
                </div>
                
            </div>

        </section>
        <!--================End Home Banner Area =================-->
        
        <!--================Home Blog Area =================-->
        <section class="home_blog_area pad_top">
			<div class="contenedor">
            <div class="wrap">
            <div class="titulo">SOLICITUD DE RESIDENCIAS </div>
		<ul class="tabs">
			<li><a href="#tab1"><span class=""></span><span class="tab-text">Datos del proyecto</span></a></li>
			<li><a href="#tab2"><span class=""></span><span class="tab-text">Datos de la empresa</span></a></li>
            <li><a href="#tab3"><span class=""></span><span class="tab-text">Datos del alumno</span></a></li>
		</ul>
		<div class="secciones">
			<article id="tab1">
            <div class="row">
            <div class="col-sm-4">
                    <label for="proyecto">Nombre del proyecto : </label> <br>
                    <input type="text"></input> <br>
                </div>
            <div class="col-sm-4">
            <label for="opcion" > Opción : </label><br>
                    
            <input type="radio" id="rdB" name="gender" value="male">
                <label for="ban">Bancos de proyectos</label><br>
                <input type="radio" id="female" name="gender" value="female">
                <label for="prop">Propuesta propia</label><br>
                <input type="radio" id="other" name="gender" value="other">
                <label for="trab">Trabajador</label> 
            </div>
                <div class="col-sm-4">
                      <label for="periodo">Periodo proyectado: </label> <br>
                        <input type="text"></input><br>
                </div>  
            </div> 
           <br> <center><button type="button" class="btn btn-warning">Guardar</button>
                   </center>
            </article>
			<article id="tab2"> 
            <div class="row">
            <div class="col-sm-4">
                <br><label for="nombre">Nombre: </label><br>
                    <input type="text"></input><br>
            </div>
            <div class="col-sm-4">
           <br> <label for="opcion" > Giro y sector : </label> <br>
            <input type="radio" id="male" name="gender" value="male">
                <label for="indus">Industrial</label>
                <input type="radio" id="female" name="gender" value="female">
                <label for="pub">Público</label>
                <input type="radio" id="pub" name="gender" value="other">
                <label for="serv">Servicios</label><br>
                <input type="radio" id="priv" name="gender" value="p">
                <label for="priv">Privado</label>
                <input type="radio" id="other" name="gender" value="ot">
                <label for="other">Otros</label> 
            </div>
            <div class="col-sm-4">
                <br><label for="rfc">RFC: </label><br>
                    <input type="text"></input><br>
            </div>
            <div class="col-sm-12">
                <br><label for="dom">Domicilio: </label><br>
                    <input type="text"></input><br>
            </div>
            <div class="col-sm-6">
                <br><label for="col">Colonia: </label><br>
                    <input type="text"></input><br>
            </div>
            <div class="col-sm-6">
                <br><label for="post">Código postal: </label><br>
                    <input type="text"></input><br>
            </div>
            <div class="col-sm-6">
                <br><label for="ciudad">Ciudad: </label><br>
                    <input type="text"></input><br>
            </div>
            <div class="col-sm-6">
                <br><label for="tel">Teléfono fijo o celular: </label><br>
                    <input type="text"></input><br>
            </div>
            <div class="col-sm-6">
                <br><label for="tit">Nombre del titular de la organización: </label><br>
                    <input type="text"></input><br>
            </div>
            <div class="col-sm-6">
                <br><label for="puesto">Puesto: </label><br>
                    <input type="text"></input><br>
            </div>
            <div class="col-sm-6">
                <br><label for="asesor">Nombre del asesor externo: </label><br>
                    <input type="text"></input><br>
            </div>
            <div class="col-sm-6">
                <br><label for="puesto">Puesto: </label><br>
                    <input type="text"></input><br>
            </div>
            <div class="col-sm-6">
                <br><label for="pers">Nombre de la persona que firmará el acuerdo (Organizacion-Residente-Escuela): </label><br>
                    <input type="text"></input><br>
            </div>
            <div class="col-sm-6">
                <br><label for="puesto">Puesto: </label><br>
                    <input type="text"></input><br>
            </div>
            
            </div> 
           <br> <center><button type="button" class="btn btn-warning">Guardar</button>
                   </center>
            </article>
			<article id="tab3">
            <div class="row">
                    <div class="col-sm-4">
                        <label for="nombre">Nombre: </label> <br>
                        <input type="text"></input>
                    </div>
                    <div class="col-sm-4">
                        <label for="carrera">Carrera:</label> <br>
                                <select name="carrrera" id="carrera">
                                <option value="isic">ISIC</option>
                                <option value="iquim">IQUIM</option>
                                <option value="iciv">ICIV</option>
                                <option value="admon">ADMON</option>
                                </select>
                            </div>
                            <div class="col-sm-4">
                        <label for="matri">Matricula: </label> <br>
                        <input type="text"></input>
                    </div>
                    <div class="col-sm-4">
                        <label for="dom">Domicilio: </label> <br>
                        <input type="text"></input>
                    </div>
                    <div class="col-sm-4">
                        <label for="ciudad">Ciudad: </label> <br>
                        <input type="text"></input>
                    </div>
                    <div class="col-sm-4">
                        <label for="postal">Codigo Postal: </label> <br>
                        <input type="text"></input>
                    </div>
                    <div class="col-sm-4">
                        <label for="correo">Correo electrónico: </label> <br>
                        <input type="text"></input>
                    </div>
                    <div class="col-sm-4">
                        <label for="tel">Telefono fijo o celular: </label> <br>
                        <input type="text"></input>
                    </div>
                    <div class="col-sm-4">
           <br> <label for="opcion" > Para seguridad social acudir a : </label> <br>
            <input type="radio" id="male" name="gender" value="male">
                <label for="imss">IMSS</label><br>
                <input type="radio" id="female" name="gender" value="female">
                <label for="issste">ISSSTE</label><br>
                <input type="radio" id="pub" name="gender" value="other">
                <label for="otro">Otro</label>
                
            </div>
                </div>
                <br> <center><button type="button" class="btn btn-warning">Guardar</button>
            </article>
			
		</div>
	</div>
                                              
			</div>
        </section>    
        
        <!--================End Home Blog Area =================-->

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
        <script src="{{ asset('js/pestanaCambio.js')}}"></script>
        
        
    </body>
</html>