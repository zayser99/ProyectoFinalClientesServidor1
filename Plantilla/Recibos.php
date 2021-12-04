<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Recibos</title>
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
<body style=" background-image:url(img/fd1.jpg);background-position: center center;background-repeat: no-repeat;background-size: cover;background-attachment: fixed;">
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
                                                <li class="nav-item active"><a href="Recibos.php">Recibos</a></li>
                                                <li><a href="Contactos.php">Contacto</a></li>
                                                <li><a href="salir.php">Salir</a></li> 
                                                <li><a href="Login.php">Sesión:
                                                <?php
                                                session_start();
                                                error_reporting(0);
                                                $usuario = $_SESSION['user'];
                                                
                                                if(!isset($usuario)){
                                                header("location: index.php");
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
	
	<div class="search">
		<div class="container">
        
			<div class="row">
            <div class="col-md-2"></div>
				<div class="col-md-8">
					<div class="section-heading">
						<br><br><br>
                    <div  style="padding-left: 10px; padding-right: 5px;opacity:0.9;" class="panel panel-default">
                    <form class="formulario" name="form1" method="post" action="logic/p_recibo.php" id="form1">
                        <h1 style="font-family: serif;font-weight: bolder;">RECIBOS</h1>
                        <p>Agregue un recibo:</p>
                        <div class="contenedor">  
                            <div class="input-contenedor">
                            <label for="name">Consumo en kWh:<br></label>
                                <input name="consumo" type="text" placeholder="Ingresa el consumoo"><br><br>
                            </div>

                            <div class="input-contenedor">
                            <label for="name">Monto total: $ <br></label>
                                <input name="monto" type="text" placeholder="Ingresa el monto"><br><br>
                            </div>
                    
                            <div class="input-contenedor">
                            <label for="name">Año:<br></label>
                                <input name="anio" type="text" placeholder="Ingresa el año"><br><br>
                            </div>

                            <div class="input-contenedor">
                            <input name="usuario" type="hidden" placeholder="Ingresa el usuario" value=<?php echo $usuario;?> >                                      
                            </div>
                            <div class="input-contenedor">
                            <label for="name">Bimestre:<br></label>
                                <select class="form-select" name="bimestre">
                                    <option> Selecciona el bimestre</option>
                                    <?php
                                        include("connect.php");
                                        $consulta="SELECT * FROM bimestre";
                                        $ejecutar=mysqli_query($mysqli,$consulta);
                                    ?>
                                    <?php
                                    foreach ($ejecutar as $opciones): 
                                    ?>
                                <option value="<?php echo $opciones['id_bimestre'] ?>">
                                    <?php echo $opciones['nombre_bimestre']?> </option>
                                    <?php endforeach ?>
                                </select><br><br>
                            </div>
                            <input type="submit" value="Registrar recibo" class="button">
                        </div>
                    </form><br><br>	
                    <form class="formulario" name="form2" method="post" action="Recibos.php" id="form2">
                    <input name="usuario" type="hidden" placeholder="Ingresa el usuario" value=<?php echo $usuario;?> >										
                        <p>Ingrese el año para ver sus recibos: <input type="text" id="year" name="year"></p>
                        <button type="submit" name="busca_recibo" class="add-to-cart">BUSCAR</button>
                    </form>
                    <?php 
                    include('connect.php');
                    $year = $_POST["year"];
                    $usuario = $_POST["usuario"];
                    $resultados = mysqli_query($mysqli,"SELECT id_usuario FROM usuario WHERE nombre_usuario LIKE '$usuario'");
                    while($consulta = mysqli_fetch_array($resultados))
                    {
                    $idu=$consulta['id_usuario'];
                    }
                    if(isset($_POST['busca_recibo'])){
                    $query = "SELECT * FROM recibo INNER JOIN bimestre ON recibo.id_bimestre = bimestre.id_bimestre  WHERE recibo.anio ='$year' and recibo.id_usuario='$idu'";
                    $resultados = mysqli_query($mysqli,$query);
                    while($row = $resultados->fetch_assoc()){ 
                    echo "Codigo de recibo: ".$row['id_recibo']."<br>";
                    echo "Fecha de registro: ".$row['fecha_reg']."<br>";
                    echo "Consumo: ".$row['consumo']." kWh"."<br>";
                    echo "Monto: $ ".$row['monto']."<br>";
                    echo "Año: ".$row['anio']."<br>";
                    echo "Usuario: ".$usuario."<br>";
                    echo "Bimestre: ".$row['nombre_bimestre']."<br>";
                    }//fin while
                    $nrows = mysqli_num_rows($resultados);
                    if(($nrows == 0)){
                        echo "No se encontraron recibos";}
                    }
                    ?>	
						<br><br><br>
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
