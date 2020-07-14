

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html>
    
<head>
	<title>Iniciar sesion</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
    <link rel="stylesheet" href="css/loginCSS.css">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="{{ asset('js/app.js') }}" defer></script>

<!-- Fonts -->
<link rel="dns-prefetch" href="//fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

<!-- Styles -->
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/responsive.css">
        <link rel="stylesheet" href="css/bootstrap.css">

</head>
<!--Coded with love by Mutiullah Samim-->
<body>

	<div class="container h-100">
		<div class="d-flex justify-content-center h-100">
			<div class="user_card">
				<div class="d-flex justify-content-center">
					<div class="brand_logo_container">
						<img src="img/log.jpg.png" class="brand_logo" alt="Logo">
					</div>
				</div>
				<div class="d-flex justify-content-center form_container">
				@csrf
					<form method="POST" action="{{ route('login') }}">													
						<div class="input-group mb-3">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-user"></i></span>
							</div>
							<input type="text" name="" class="form-control input_user" value="" placeholder="Usuario"> <!-- ***************** -->
						</div>
						
                        
                        <div class="input-group mb-3">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-key"></i></span>
							</div>
                            <input type="password" name="" class="form-control input_pass" value="" placeholder="Contraseña">
                            </div>
                        
						<div class="form-group">
							
						</div>
					<div class="d-flex justify-content-center mt-3 login_container">
				 	<button type="button" id="btnIniciar" name="button" class="btn login_btn">Iniciar sesi&oacute;n</button>
                   </div>
                   <div class="d-flex justify-content-center mt-3 login_container">
                    <a href="{{ url()->previous() }}" class="btn login_btn">Cancelar</a>
                  </div>

					</form>
				</div>
		
				<div class="mt-4">
					<div class="d-flex justify-content-center links">
                    	<img src="img/registrar.png" height="40px"><a class="nav-link" href="{{ route('register') }}">Registrarse</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>






