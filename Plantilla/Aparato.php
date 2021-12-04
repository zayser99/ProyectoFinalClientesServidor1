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
<body style=" background-image:url(img/fd2.jpg);background-position: center center;background-repeat: no-repeat;background-size: cover;background-attachment: fixed;">
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
                        <div  style="padding-left: 10px; padding-right: 5px;opacity:0.9;" class="panel panel-default">
                        
                        </div>
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