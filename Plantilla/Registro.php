<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Registro</title>
	<meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
	
	<meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=3.0, minimum-scale=1.0">
 	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" >
	<link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/templatemo_misc.css">
    <link rel="stylesheet" href="css/templatemo_style.css">
    <link rel="stylesheet" href="css/owl-carousel.css">

    <script src="js/vendor/modernizr-2.6.1-respond-1.1.0.min.js"></script>
</head>
<body>
	<form class="formulario" action="logic/p_registro.php" method="post">
    
    	<h1>Registrate ¡Es gratis!</h1>
   	  <div class="contenedor">  
     		<div class="input-contenedor">
         		<i class="fas fa-user icon"></i>
         		<input name="nombre" type="text" placeholder="Nombres">
         	</div>

			 <div class="input-contenedor">
				<i class="fas fa-user icon"></i>
				<input name="apellido" type="text" placeholder="Apellido">
			</div>
    
         	<div class="input-contenedor">
         		<i class="fas fa-envelope icon"></i>
         		<input name="correo" type="text" placeholder="Correo Electronico">
         	</div>

			 <div class="input-contenedor">
				<i class="fas fa-user icon"></i>
				<input name="usuario" type="text" placeholder="Nombre de usuario">
			</div>
         
         	<div class="input-contenedor">
        		<i class="fas fa-key icon"></i>
         		<input name="pass" type="password" placeholder="Contraseña">
         	</div>

			 <div class="input-contenedor">
        		<i class="fas fa-key icon"></i>
				<select class="form-select" name="rol">
					<option> Selecciona el rol</option>
					<?php
						include("connect.php");
						$consulta="SELECT * FROM rol_usuario";
						$ejecutar=mysqli_query($mysqli,$consulta);
					?>
					<?php
					foreach ($ejecutar as $opciones): 
					?>
				  <option value="<?php echo $opciones['id_rol'] ?>">
					<?php echo $opciones['rol']?> </option>
					<?php endforeach ?>
				  </select>
         	</div>

         	<input type="submit" value="Registrate" class="button">
			<p>Al registrarte, aceptas nuestras Condiciones de uso y Política de privacidad.</p>
         	<p>¿Ya tienes una cuenta? <a class="link" href="Login.html">Iniciar Sesion</a></p><br>
			<center><h3><a class="link" href="index.html">Volver a inicio</a></h3></center>
     	</div>
	</form>
	<?php
	?>
</body>
</html>
