<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html>
    
<head>
	<title>Residencias</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
    <link rel="stylesheet" href="css/registrarCSS.css">
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
					<form action="/registro" method="post" >
					{{ csrf_field() }}
						<table>
							<tr>
								<td lass="first">
								<div class="input-group mb-3">
										<div class="input-group-append">
											<span class="input-group-text"><i class="fas fa-user"></i></span>
										</div>
										<input type="text" name="matricula" id="txtMatricula" class="form-control input_user" value="{{ old('matricula') }}" placeholder="Matricula"> <!-- ***************** -->
									</div>
									<div class="input-group mb-3">
										<div class="input-group-append">
											<span class="input-group-text"><i class="fas fa-user"></i></span>
										</div>
										<input type="text" name="nombre" id="txtUsuario" class="form-control input_user" value="{{ old('nombre') }}" placeholder="Nombre"> <!-- ***************** -->
									</div>
									
									
									<div class="input-group mb-3">
										<div class="input-group-append">
											<span class="input-group-text"><i class="fas fa-user"></i></span>
										</div>
										<input type="text" name="primerApellido" id="txtPrimerApellido" class="form-control input_user" value="{{ old('primerApellido') }}" placeholder="Primer apellido">
										</div>
									<div class="input-group mb-3">
										<div class="input-group-append">
											<span class="input-group-text"><i class="fas fa-user"></i></span>
										</div>
										<input type="text" name="segundoApellido" id="txtSegundoApellido" class="form-control input_user" value="{{ old('segundoApellido') }}" placeholder="Segundo apellido">
									</div>																												
								</td>
								<td>
								<div class="input-group mb-3">
										<div class="input-group-append">
											<span class="input-group-text"><i class="fas fa-phone"></i></span>
										</div>
										<input type="text" name="telefono" id="txtTelefono" class="form-control input_phone" value="{{ old('telefono') }}" placeholder="Teléfono">
									</div>	
									<div class="input-group mb-3">
										<div class="input-group-append">
											<span class="input-group-text"><i class="fas fa-user"></i></span>
										</div>
										<input type="email" name="email" id="txtEmail" class="form-control input_user" value="{{ old('email') }}" placeholder="Email"> <!-- ***************** -->
									</div>																		
									<div class="input-group mb-3">
										<div class="input-group-append">
											<span class="input-group-text"><i class="fas fa-key"></i></span>
										</div>
										<input type="password" name="contrasena" id="txtContraseña" class="form-control input_pass" value="" placeholder="Contraseña">
										</div>
									<div class="input-group mb-3">
										<div class="input-group-append">
											<span class="input-group-text"><i class="fas fa-key"></i></span>
										</div>
										<input type="password" name="contrasena2" id="txtConfirmar" class="form-control input_pass" value="" placeholder="Confirmar contraseña">
									</div>																														
								</td>
							</tr>
						</table>	
						
						@if ($errors->any()) <p><strong>**Atencion**</strong>Errores: </p> <div class="alert alert-danger"> <ul> @foreach ($errors->all() as $error) <li>{{ $error }}</li> @endforeach </ul> </div> @endif
						<div class="d-flex justify-content-center mt-3 login_container">
							<button type="submit" id="btnRegistrar" name="button" class="btn login_btn">Registrarse</button>
						</div>							
						<div class="d-flex justify-content-center mt-3 login_container">
						   <a href="{{ url()->previous() }}" class="btn login_btn">Regresar</a>
							</div>																									
				</form>
				
				</div>
		
			</div>
		</div>
	</div>
</body>
</html>
