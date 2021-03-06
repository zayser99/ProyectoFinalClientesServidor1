<!doctype html>
<html lang="en">
  <head>
    <title>LogIn</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

      <!-- Los iconos tipo Solid de Fontawesome-->
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
      <script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
  
      <!-- Nuestro css-->
      <link rel="stylesheet" type="text/css" href="static/css/style_log-sing.css" th:href="@{/css/index.css}">
          <!--JQUERY-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  </head>
  <body>
    <div class="row">
   <img class="col-sm-2 main-section" src="static/img/indio.png" height="150", width="250" > 
    <div class="modal-dialog text-center" >
        <div class="col-sm-8 main-section">
            <div class="modal-content">
                <div class="col-12 user-img">
                    <img src="static/img/user.png" th:src="@{/img/user.png}"/>
                </div>
                <form class="col-12" action="" name="" method="post">
                <?php
                    if(isset($errorLogin)){
                        echo $errorLogin;
                    }
                ?>
                    <label for="tel" class="letrablanca"> <h4>TELEFONO</h4></label>
                    <div class="form-group" id="user-group">
                        <input type="tel" class="form-control" placeholder="Numero de Telefono" name="username"/>
                    </div>
                    <label for="password" class="letrablanca"> <h4>PASSWORD</h4></label>
                    <div class="form-group" id="contrasena-group">
                        <input type="password" class="form-control" placeholder="Contrase??a" name="password"/>
                    </div>
                    
                    <button type="submit" class="btn btn-primary"><i class="fas fa-sign-in-alt"></i>  Ingresar </button>
                </form>
                <div class="col-12 forgot">
                    <a href="../tiendita-chela/pages/singup-clientes.html">Registrarse...</a>
                </div>
                <!-- <div th:if="${param.error}" class="alert alert-danger" role="alert">
		            Invalid username and password.
		        </div>
		        <div th:if="${param.logout}" class="alert alert-success" role="alert">
		            You have been logged out.
		        </div> -->
            </div>
        </div>
    </div>
    <a class="col-sm-2 main-section"  href="../tiendita-chela/login-clientes.html"><img height="150", width="150" src="static/img/back.png" ></a>
    </div>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>