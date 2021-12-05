<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Plantilla</title>
	<meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
        
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/templatemo_misc.css">
    <link rel="stylesheet" href="css/templatemo_style.css">
    <link rel="stylesheet" href="css/owl-carousel.css">
	<link rel="stylesheet" href="css/botonEstilo.css">

    <script src="js/vendor/modernizr-2.6.1-respond-1.1.0.min.js"></script>
</head>
<body>
<?php 
$consumo= $_POST['consumo'];
$paneles = round($consumo*0.0092165898617512);
$baterias = round($consumo*0.0207373271889401);
?>
	<div class="ban"><!--Los que tengan "---" serán los que hay que poner los resultados con la base de datos-->
		<img src="img/blog-post-2.jpg" width="1366" height="200" />
		<center><h1><font color="black">Tu consumo es de:</font></h1>
			<h2><font color="gray"> <?php echo $consumo?> kw/s</font></h2>
			<h3><font color="black">Paneles solares que necesitas:</font></h3>
			<h4><font color="gray"> <?php echo $paneles?> panles solares de 450w</font></h4>
			<h3><font color="black">Paneles solares que necesitas:</font></h3>
			<h4><font color="gray"><?php echo $baterias?> baterías de 150Ah</font></h4><br><br>
			<h4><a class="boton" onclick="javascript:window.print()">Imprimir</a></h4>
		</center>
	</div>
</body>
</html>
