<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <title>Inicio</title>
    	<meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
<!-- 
Power Template 
https://templatemo.com/tm-508-power
-->
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
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
        <![endif]-->


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
                                        <a href="#top" class="navbar-brand">Energ??as</a>
                                        <div id="main-nav" class="collapse navbar-collapse">
                                            <ul class="menu-first nav navbar-nav" style="margin-right: 20px;">
                                                <li class="nav-item active"><a href="index.php">Inicio<span class="sr-only">(current)</span></a></li>
                                                <li><a href="Informacion.php">Informaci??n</a></li>
                                                <li><a href="Calculadora.php">Calculadora</a></li>
                                                <li><a href="Recibos.php">Recibos</a></li>
                                                <li><a href="Contactos.php">Contacto</a></li>
                                                <li><a href="salir.php">Salir</a></li> 
                                                <li><a href="Login.php">Sesi??n:
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


        <div class="banner">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="banner-content">
                            <h6>Dise??ado por estudiantes amantes de la programaci??n</h6>
                            <h2>Calculadora de energ??as</h2>
                            <ul class="buttons">
                                <li>
                                    <div class="primary-button">
                                        <a href="Informaci??n.php">M??s informaci??n</a>
                                    </div>
                                </li>
                                <li>
                                    <div class="secondary-button">
                                        <a href="">Calculadora</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section id="about" class="page-section">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-4">
                        <div class="service-item first-service">
                            <div class="icon">
                                <img src="img/first-service-icon.png" alt="">
                            </div>
                            <h4>F??cil de usar</h4>
                            <p>Desde tu propio escritorio o port??til puedes hacer tus c??lculos de energ??as desde la comodidad de tu propia casa. Todo muy sencillo.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="service-item second-service">
                            <div class="icon">
                                <img src="img/second-service-icon.png" alt="">
                            </div>
                            <h4>Almacena tus datos</h4>
                            <p>Tus c??lculos junto con tus resultados se guardar??n en tus registros que puedes verificar en tus pedidos.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="service-item third-service">
                            <div class="icon">
                                <img src="img/third-service-icon.png" alt="">
                            </div>
                            <h4>Todos lo pueden usar</h4>
                            <p>La calculadora es accesible para todos los usuarios que quieran probar, es totalmente gratis.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="portfolio" class="portfolio-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-heading">
                            <h4>??Qui??nes somos?</h4>
                            <p>Somos unos estudiantes de la Unacar en que nos dedicamos a ayudar a la comunidad en que calculen el uso de energ??as de cada casa o departamento.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div id="owl-portfolio" class="owl-carousel owl-theme imageGallery1">
                        <div class="item">
                            <div class="portfolio-item">
                                <a href="img/first-portfolio-big.jpg" title=""><img src="img/first-portfolio-item.jpg" alt="Gallery image 1" /></a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="portfolio-item">
                                <a href="img/second-portfolio-big.jpg" title=""><img src="img/second-portfolio-item.jpg" alt="Gallery image 1" /></a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="portfolio-item">
                                <a href="img/third-portfolio-big.jpg" title=""><img src="img/third-portfolio-item.jpg" alt="Gallery image 1" /></a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="portfolio-item">
                                <a href="img/fourth-portfolio-big.jpg" title=""><img src="img/fourth-portfolio-item.jpg" alt="Gallery image 1" /></a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="portfolio-item">
                                <a href="img/first-portfolio-big.jpg" data-lightbox="image-1"><img src="img/first-portfolio-item.jpg"></a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="portfolio-item">
                                <a href="img/second-portfolio-big.jpg" title=""><img src="img/second-portfolio-item.jpg" alt="Gallery image 1" /></a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="portfolio-item">
                                <a href="img/first-portfolio-big.jpg" title=""><img src="img/first-portfolio-item.jpg" alt="Gallery image 1" /></a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="portfolio-item">
                                <a href="img/third-portfolio-big.jpg" title=""><img src="img/third-portfolio-item.jpg" alt="Gallery image 1" /></a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="portfolio-item">
                                <a href="img/first-portfolio-big.jpg" data-lightbox="image-1"><img src="img/first-portfolio-item.jpg"></a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="portfolio-item">
                                <a href="img/fourth-portfolio-big.jpg" title=""><img src="img/fourth-portfolio-item.jpg" alt="Gallery image 1" /></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="tabs-content" id="blog">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-heading">
                            <h4>Tendencias</h4>
                            <p>En esta secci??n se publican las noticias m??s recientes de nuestras redes sociales.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="wrapper">
                        <div class="col-md-6">
                            <ul class="tabs clearfix" data-tabgroup="first-tab-group">
                                <li><a href="#tab1" class="active">
                                Mejora estabilidad econ??mica gracias a la calculadora
<ul class="info-post">
                  <li><i class="fa fa-user"></i>Admin</li>
                  <li><i class="fa fa-calendar"></i>30 Noviembre 2021</li>
                  <li><i class="fa fa-wechat"></i>12 Comments</li>
                </ul>
                                </a></li>
                                <li><a href="#tab2">
                                Mantenimiento de la p??gina de la calculadora&nbsp;
<ul class="info-post">
                  <li><i class="fa fa-user"></i>Sergio</li>
                  <li><i class="fa fa-calendar"></i>08 Noviembre 2021</li>
                  <li><i class="fa fa-wechat"></i>16 Comments</li>
                </ul>
                                </a></li>
                                <li><a href="#tab3">
                                EStudiantes demuestran que son los culpables de los gastos de energ??a
<ul class="info-post">
                  <li><i class="fa fa-user"></i>Rub??n</li>
                  <li><i class="fa fa-calendar"></i>02 November 2021</li>
                  <li><i class="fa fa-wechat"></i>9 Comments</li>
                </ul>
                                </a></li>
                                <li><a href="#tab4">
                                Las opiniones de nuestro proyecto&nbsp; &nbsp;
<ul class="info-post">
                  <li><i class="fa fa-user"></i>Hannia</li>
                  <li><i class="fa fa-calendar"></i>28 Octubre 2021</li>
                  <li><i class="fa fa-wechat"></i>11 Comments</li>
                </ul>
                                </a></li>
                                <li><a href="#tab5">
                                pRUEBAS BETA DE la calculadora de energ??as
<ul class="info-post">
                  <li><i class="fa fa-user"></i>Ram??n</li>
                  <li><i class="fa fa-calendar"></i>22 Octubre 2021</li>
                  <li><i class="fa fa-wechat"></i>24 Comments</li>
                </ul>
                                </a></li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <div id="first-tab-group" class="tabgroup">
                                <div id="tab1">
                                    <img src="img/blog-post-1.jpg" alt="">
                                    <div class="text-content">
                                        <h4>Razones principales de nuestro proyecto&nbsp;</h4>
                                        <ul class="info-post">
                                            <li><i class="fa fa-user"></i>Admin</li>
                                            <li><i class="fa fa-calendar"></i>14 Noviembre 2021</li>
                                            <li><i class="fa fa-wechat"></i>12 Comments</li>
                                        </ul>
                                        <p>Nuestro objetivo principal es que siempre vemos que las personas se han quedado en casa ya sea por el estudio o por el trabajo.De hecho al ser estudiantes si hemos gastado energ??a m??s de lo habitual por nuestras clases, pero tambi??n teniamos a la vez en nuestras manos cargando el celular, el televisor encendido viendo series o pel??culas, y tener el ventilador encendido. Aveces entendemos que usamos nuestras necesidades y estamos en lo cierto, pero desperdiciar energ??a es algo que podemos empezar a controlar y por eso se nos ocurri?? empezar a programar en una calculadora donde podamos apoyar a la comunidad&nbsp; &nbsp; &nbsp;</p>
                                        <div class="primary-button"><a href="#contact-us">Continuar leyendo</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

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