<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Iniciar sesión</title>
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
	
	<form class="formulario" name="form1" method="post" action="logic/p_sesion.php" id="form1">
		<h1>Inicia Sesión</h1>
		<div class="contenedor">
        	<div class="input-contenedor">
        		<i class="fas fa-envelope icon"></i>
         		<input name="correo" type="text" placeholder="Correo Electronico">
        	</div>
        	<div class="input-contenedor">
        		<i class="fas fa-key icon"></i>
         		<input name="pass" type="password" placeholder="Contraseña">
         
        	</div>
        	<input type="submit" name="ingresar" value="Acceder" class="button"><br>
         	<p>¿No tienes una cuenta? <a class="link" href="Registro.php">Registrate </a></p><br>
			<center><h3><a class="link" href="index.php">Volver a inicio</a></h3></center>
     	</div>
    </form>
</body>
</html>
