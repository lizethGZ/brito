<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="{{ asset('img/logo.png')}}" type="image/png">                           
        <title> AUMNO </title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{ asset('css/bootstrap.css')}}">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <!-- main css -->
        <link rel="stylesheet" href="{{ asset('css/styleAlumno.scss') }}">
        
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
								<li class="nav-item"><img src="{{ asset('img/iniciarS.png')}}" height="40px"><a class="nav-link" href="{{ url('/perfil') }}"> Perfil </a></li> 
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
               <p id="jefe">ALUMNO: </p>
           		<div class="banner_inner d-flex align-items-center">
                   
                   <img src="{{ asset('img/img/user3.png')}}" alt="">
                </div>
                
            </div>

        </section>
        <!--================End Home Banner Area =================-->
        
        <!--================Home Blog Area =================-->
        <section class="home_blog_area pad_top">
			<div class="contenedor">
                <div class="wrap">
                    <div class="titulo">DATOS </div>
		            <ul class="tabs">
			        <li><a href="#tab1"><span class=""></span><span class="tab-text">Perfil</span></a></li>
			        <li><a href="#tab2"><span class=""></span><span class="tab-text">Escolar</span></a></li>
                    <li><a href="#tab3"><span class=""></span><span class="tab-text">Domicilio</span></a></li>
                    <li><a href="#tab4"><span class=""></span><span class="tab-text">Familiares</span></a></li>
                    <li><a href="#tab5"><span class=""></span><span class="tab-text">Residencias</span></a></li>
                    <li><a href="#tab7"><span class=""></span><span class="tab-text">Empresa</span></a></li>
                    <li><a href="#tab8"><span class=""></span><span class="tab-text">Alumno</span></a></li>
                    <li><a href="#tab6"><span class=""></span><span class="tab-text">Anteproyecto</span></a></li>
		            </ul>

		            <div class="secciones">
         <!--================ TAB1 =================-->
			            <article id="tab1">
                            <div class="row">
                                <div class="col-sm-6">
                                <label for="semestre">Usuario: </label> <br>
                                <input type="text"></input> <br>
                                </div>
                                <div class="col-sm-6">
                                <label for="semestre">Nombre: </label> <br>
                                <input type="text"></input><br>
                                </div>
                <div class="col-sm-6">
                      <br>  <label for="semestre">Primer apellido: </label> <br>
                        <input type="text"></input><br>
                </div>  
                <div class="col-sm-6">
                <br>  <label for="semestre">Segundo apellido: </label> <br>
                    <input type="text"></input><br>
                </div>
                <div class="col-sm-6">
                <br>  <label for="semestre">Teléfono: </label> <br>
                        <input type="text"></input><br>
                </div>  
                <div class="col-sm-6">
                <br>  <label for="semestre">Correo electrónico: </label> <br>
                    <input type="text"></input><br>
                </div> 
            </div> 
           <br> <center><button type="button" class="btn btn-warning">Guardar</button>
                   </center>
            </article>
             <!--================ TAB2 =================-->
			<article id="tab2"> 
            <div class="row">
            <div class="col-sm-6">
            <label for="carrera">Carrera:</label> <br>
                                <select name="carrrera" id="carrera">
                                <option value="isic">ISIC</option>
                                <option value="iquim">IQUIM</option>
                                <option value="iciv">ICIV</option>
                                <option value="admon">ADMON</option>
                                </select>
                            </div>
                            <div class="col-sm-6">
                            <label for="semestre">Semestre:</label> <br>
                                <select name="semestre" id="semestre">
                                <option value="p">1ero</option>
                                <option value="s">2do</option>
                                <option value="t">3ero</option>
                                <option value="c">4to</option>
                                <option value="q">5to</option>
                                <option value="sex">6to</option>
                                <option value="sep">7mo</option>
                                <option value="oc">8vo</option>
                                <option value="nov">9no</option>
                                <option value="de">10mo</option>
                                <option value="on">11vo</option>
                                </select>
                            </div>
                            <div class="col-sm-6">
                            <br>    <label for="estudios">Plan de estudios: </label> <br>
                                <select name="estudios" id="estudios">
                                <option value="volvo">op1</option>
                                <option value="saab">op2</option>
                                <option value="mercedes">op3</option>
                                <option value="audi">op4</option>
                                </select>
                            </div>
                            <div class="col-sm-6">
                            <br>     <label for="semestre">Matricula: </label> <br>
                                <input type="text"></input>
                            </div>
                            
                        </div>
                        <br> <center><button type="button" class="btn btn-warning">Guardar</button>
            </article>
            <!--================ TAB3 =================-->
			<article id="tab3">
            <div class="row">
                    <div class="col-sm-6">
                        <label for="semestre">Dirección: </label> <br>
                        <input type="text"></input>
                    </div>
                    <div class="col-sm-6">
                        <label for="semestre">Código postal: </label> <br>
                        <input type="text"></input>
                    </div>
                    
                </div>
                <br> <center><button type="button" class="btn btn-warning">Guardar</button>
            </article>
            <!--================ TAB4 =================-->
			<article id="tab4">
            <b><label for="">PRIMER FAMILIAR </label></b> 
            <div class="row">

            <div class="col-sm-6">
                    <label for="semestre">Nombre: </label> <br>
                    <input type="text"></input>
                </div>
                <div class="col-sm-6">
                        <label for="semestre">Primer apellido: </label> <br>
                        <input type="text"></input>
                </div>  
                <div class="col-sm-6">
                    <label for="semestre">Segundo apellido: </label> <br>
                    <input type="text"></input>
                </div>
                <div class="col-sm-6">
                                <label for="estudios">Parentesco: </label> <br>
                                <select name="par" id="par">
                                <option value="mama">Madre</option>
                                <option value="papa">Padre</option>
                                <option value="hermano">Hermano</option>
                                <option value="hermana">Hermana</option>
                                <option value="madrastra">Madrastra</option>
                                <option value="padrastro">Padrastro</option>
                                <option value="tio">Tio</option>
                                <option value="tia">Tia</option>
                                </select>
                            </div>
                <div class="col-sm-6">
                    <label for="semestre">Teléfono: </label> <br>
                    <input type="text"></input>
                </div> 
            </div> 
            <hr color="blue" size=20>
           <b> <label for="">SEGUNDO FAMILIAR </label> </b>
            <div class="row">

            <div class="col-sm-6">
                    <label for="semestre">Nombre: </label> <br>
                    <input type="text"></input>
                </div>
                <div class="col-sm-6">
                        <label for="semestre">Primer apellido: </label> <br>
                        <input type="text"></input>
                </div>  
                <div class="col-sm-6">
                    <label for="semestre">Segundo apellido: </label> <br>
                    <input type="text"></input>
                </div>
                <div class="col-sm-6">
                                <label for="estudios">Parentesco: </label> <br>
                                <select name="par" id="par">
                                <option value="mama">Madre</option>
                                <option value="papa">Padre</option>
                                <option value="hermano">Hermano</option>
                                <option value="hermana">Hermana</option>
                                <option value="madrastra">Madrastra</option>
                                <option value="padrastro">Padrastro</option>
                                <option value="tio">Tio</option>
                                <option value="tia">Tia</option>
                                </select>
                            </div>
                <div class="col-sm-6">
                    <label for="semestre">Teléfono: </label> <br>
                    <input type="text"></input>
                </div> 
            </div> 
                <br> <center><button type="button" class="btn btn-warning">Guardar</button>
            </article>
            <!--================ TAB5 =================-->
            <article id="tab6">
            <div class="row">
            <div class="col-sm-12">
                    <label for="proyecto">1. Nombre del proyecto : </label> <br>
                    <input type="text"></input> <br>
                </div>
                <div class="col-sm-12">
                    <label for="proyecto">2. Objetivos: </label> <br>
                   <form action="" method="post" enctype="multipart/form-data" target="_blank">
                        <p>Sube archivos:
                            <input type="file" name="archivossubidos[]" multiple>
                            <input type="submit" value="Enviar datos">
                        </p>
                    </form>
                </div>
                <div class="col-sm-12">
                    <label for="proyecto">3. Justificación: </label> <br>
                    <form action="" method="post" enctype="multipart/form-data" target="_blank">
                        <p>Sube archivos:
                            <input type="file" name="archivossubidos[]" multiple>
                            <input type="submit" value="Enviar datos">
                        </p>
                    </form>
                </div>
                <div class="col-sm-12">
                    <label for="proyecto">4. Alcaces y límites: </label> <br>
                    <form action="" method="post" enctype="multipart/form-data" target="_blank">
                        <p>Sube archivos:
                            <input type="file" name="archivossubidos[]" multiple>
                            <input type="submit" value="Enviar datos">
                        </p>
                    </form>
                </div>
                <div class="col-sm-12">
                    <label for="proyecto">5. Cronograma de actividades: </label> <br>
                    <form action="" method="post" enctype="multipart/form-data" target="_blank">
                        <p>Sube archivos:
                            <input type="file" name="archivossubidos[]" multiple>
                            <input type="submit" value="Enviar datos">
                        </p>
                    </form>
                </div>
                <div class="col-sm-12">
                    <label for="proyecto">6. Descripción detallada de actividades: </label> <br>
                    <form action="" method="post" enctype="multipart/form-data" target="_blank">
                        <p>Sube archivos:
                            <input type="file" name="archivossubidos[]" multiple>
                            <input type="submit" value="Enviar datos">
                        </p>
                    </form>
                </div>
                <div class="col-sm-12">
                    <label for="proyecto">7. Lugar donde se realizo el proyecto </label> <br>
                    
                    </div>
                    <form action="" method="post" enctype="multipart/form-data" target="_blank">
                        <p>Sube archivos:
                            <input type="file" name="archivossubidos[]" multiple>
                            <input type="submit" value="Enviar datos">
                        </p>
                    </form>
                </div>
                <br> <center><button type="button" class="btn btn-warning">Guardar</button>
            </article>
             <!--================ TAB6 =================-->
             <article id="tab5">
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
             <!--================ TAB7 =================-->
			<article id="tab7"> 
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
             <!--================ TAB8 =================-->
			<article id="tab8">
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
        <script src="js/jquery.ajaxchimp.min.js"></script>
        <script src="js/mail-script.js"></script>
        <script src="js/theme.js"></script>
        <script src="{{ asset('js/pestanaCambio.js')}}"></script>
        
        
    </body>
</html>