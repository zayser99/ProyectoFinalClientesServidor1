<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Calculadora</title>
	<meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
        
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/templatemo_misc.css">
    <link rel="stylesheet" href="css/templatemo_style.css">
    <link rel="stylesheet" href="css/owl-carousel.css">
	<!-- css del grid de aparatos -->
	<link rel="stylesheet" href="css/grid_productos.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">

    <script src="js/vendor/modernizr-2.6.1-respond-1.1.0.min.js"></script>
</head>
<body style=" background-image:url(img/fd4.jpg);background-position: center center;background-repeat: no-repeat;background-size: cover;background-attachment: fixed;">
	<div class="site-main" id="sTop">
		<div class="site-header">
			<div class="main-header">
				<div class="container">
					<div id="menu-wrapper">
						<div class="row">
							<nav class="navbar navbar-inverse" role="navigation">
								<div class="navbar-header">
									<button type="button" id="nav-toggle" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav">
										<span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                    <a href="#top" class="navbar-brand">Energías</a>
									<div id="main-nav" class="collapse navbar-collapse">
										<ul class="menu-first nav navbar-nav" style="margin-right: 20px;">
											<li><a href="index.php">Inicio</a></li>
                                            <li><a href="Informacion.php">Información</a></li>
                                                <li class="nav-item active"><a href="Calculadora.php">Calculadora</a></li>
                                                <li><a href="Recibos.php">Recibos</a></li>
                                                <li><a href="Contactos.php">Contacto</a></li>
                                                <li><a href="salir.php">Salir</a></li> 
                                                <li><a href="Login.php">Sesión:
                                                <?php
                                                session_start();
                                                error_reporting(0);
                                                $usuario = $_SESSION['user'];
                                                if(!isset($usuario)){
                                                echo "Sin sesion";
                                                }else{
                                                echo ($usuario);
                                                }
                                                ?></a></li>                                 
                                         </ul>                                    
                                    </div> <!-- /.main-menu -->
                                </div>
                            </nav>
                        </div> <!-- /.row -->
                    </div> <!-- /#menu-wrapper -->                        
                </div> <!-- /.container -->
            </div> <!-- /.main-header -->
        </div> <!-- /.site-header -->
    </div> <!-- /.site-main -->
	
	<div class="info">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="section-heading">
                        <div style="color:white;background:green;opacity:0.8;font-family: serif;font-weight: bolder;font-size: xx-large">
						<br>MÁS INFORMACIÓN
                        <h1 >Según tu cálculo:</h1>
                    </div>
                        
						<center><div class="calculadora">
                        <div  style="padding-left: 10px; padding-right: 5px;opacity:0.9;" class="panel panel-default">
							<div class="container">
								<h1 style="font-family: serif;font-weight: bolder;">Los aparatos que elegiste</h1>
								<div class="row">
								<?php 
	                                if(isset($_REQUEST["vermas1"])){
                                    include('connect.php');
                                    $id = $_REQUEST["vermas"];

                                    $query = "SELECT * FROM aparato_historial INNER JOIN aparato ON aparato_historial.id_aparato = aparato.id_aparato WHERE aparato_historial.id_historial = '$id'";
                                    $resultados = mysqli_query($mysqli,$query);
                                    while($row = $resultados->fetch_assoc()){
								?>
									<div class="col-md-3 col-sm-6" style="padding-right:50px;">
                                    <div class="product-grid2">
											<div class="product-image2">
												<a href="#">
												<img class="pic-1" width="100%" height="240" src="data:image/jpg;base64, <?php echo base64_encode($row['imagen_producto']); ?>">
												<img class="pic-2" width="100%" height="240" src="data:image/jpg;base64, <?php echo base64_encode($row['imagen_producto']); ?>">
												</a>
											</div>
											<div class="product-content">
												<h3 class="title"><a href="#"> <?php echo $row['nombre_aparato'];  ?> </a></h3>
                                                <span class="price"><b>Consumo: </b><?php echo $row['consumo_ind'];  ?> W-h</span><br>
												<span class="price"><b>Cantidad: </b><?php echo $row['cantidad'];  ?> </span><br>
                                                <span class="price"><b>Horas: </b><?php echo $row['horas'];  ?> </span><br>
                                                <span class="price"><b>Días: </b><?php echo $row['dias'];  ?></span>
                                            </div>
											
										</div>
                                  	</div>
                                    <?php
                                    }
									    }
									    ?>
								</div>
							</div>
                            <center><button type="submit" name="histo1" onclick="location.href='Historial.php'"  class="btn btn-primary" >REGRESAR</button></center><br>

                            </div>
						
						</div></center><!--hasta aqui va un registro de aparato-->
                    	
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-12">
                            <p>Copyright &copy; 2021 Proyecto Final <br> 
                            Materia: Cliente Servidor I</p>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <ul class="social-icons">
                            <li><a href="#">Facebook</a></li>
                            <li><a href="#">Twitter</a></li>
                            <li><a href="#">Linkedin</a></li>
                            <li><a href="#">Instagram</a></li>
                        </ul>
                    </div>
                    <div class="col-md-2 col-md-offset-2 col-sm-12">
                        <div class="back-to-top">
                            <a href="#top">
                                <i class="fa fa-angle-up"></i>
                                back to top
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
	
	<!--<script src="js/vendor/jquery-1.11.0.min.js"></script>-->
        <!--<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.0.min.js"><\/script>')</script>-->
        <script src="js/bootstrap.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

        <script type="text/javascript">
        $(document).ready(function() {
            
            // mobile nav toggle
            $('#nav-toggle').on('click', function (event) {
                event.preventDefault();
                $('#main-nav').toggleClass("open");
            });
        });
        </script>
</body>
</html>