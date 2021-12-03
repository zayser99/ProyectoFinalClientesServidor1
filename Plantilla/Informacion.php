<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Información de las energías</title>
	<meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
        
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/templatemo_misc.css">
    <link rel="stylesheet" href="css/templatemo_style.css">
    <link rel="stylesheet" href="css/owl-carousel.css">

    <script src="js/vendor/modernizr-2.6.1-respond-1.1.0.min.js"></script>
</head>
<body>
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
                                                <li><a href="Calculadora.php">Calculadora</a></li>
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
                                                ?></li>                                  
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
						<br><br><br><h1>LAS ENERGÍAS LIMPIAS</h1>
                        <p>Las energías limpias son aquellas fuentes de energía y procesos de generación de electricidad cuyas emisiones o residuos, cuando los haya, no rebasen los umbrales establecidos en las disposiciones reglamentarias que para tal efecto se expidan.</p>
						
						<br><h2>TIPO DE ENERGÍAS LIMPIAS</h2>
						<br><h3>Paneles Solares</h3>
						<img src="img/EnergíaSolar.png" width="450" height="250"/>
                        <p>Los paneles solares son el intermediario que hace que la luz solar nos sirva de energía. Su diseño es simple y al mismo tiempo muy eficaz y permite el autoconsumo. En un futuro próximo, los paneles generarán electricidad incluso de noche.</p>
						<br><h3>Eólica</h3>
						<img src="img/Post-Eòlica.png" width="450" height="250"/>
                        <p>La energía eólica se ha convertido en una fuente de generación de electricidad clave para el cambio del modelo energético, más limpio y sostenible. La mejora de la tecnología permite que algunos campos eólicos produzcan energía eléctrica tan barata como lo hace el carbón o las centrales atómicas. Sin duda, estamos ante una fuente de energía con sus ventajas y sus desventajas, pero las primeras ganan por goleada.</p>
						<br><h3>Biomasa</h3>
						<img src="img/biomasa.jpg" width="450" height="250"/>
                        <p>Aunque la biomasa no forma parte de la calculadora, es interesante saber este tipo de energía limpia. También conocida como bioenergía, es la energía obtenida de la materia orgánica constitutiva de los seres vivos, sus excretas y sus restos no vivos. La formación de biomasa se da a partir de la energía solar, la cual se lleva a cabo por el proceso denominado fotosíntesis. Mediante la fotosíntesis, las plantas que contienen clorofila, transforman el bióxido de carbono (CO2) y el agua de productos minerales sin valor energético, en materiales orgánicos con alto contenido energético y que a su vez sirven de alimento para otros seres vivos. Mediante este proceso se almacena la energía solar en forma de biomasa.</p>
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
