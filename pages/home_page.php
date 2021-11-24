<!doctype html>
<html lang="en">
  <head>
    <title>Inicio</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Nuestro css-->
    <link rel="stylesheet" type="text/css" href="static/css/style_homePage.css" th:href="@{/css/index.css}">
    <!-- iconos  bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
  </head>
  <body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="#" id="logo">
          <img src="assets/beer-png.png" alt="" width="30" height="24" class="d-inline-block align-text-top" >
          Tiendita Chela
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="#productos">Productos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Promociones</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">INFO</a>
            </li>
            <li class="nav-item">
              <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
              </form>
            </li>
          </ul>
          <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
              <img src="assets/account.svg" alt="" width="30" height="24" class="d-inline-block align-text-top" >
               <?php echo $user->getNombre();  ?>
            </button>
            <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton2">
              <li><a class="dropdown-item active" href="#">Mi cuenta</a></li>
              <li><a class="dropdown-item" href="#">Carrito</a></li>
              <li><a class="dropdown-item" href="#">Pedidos</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item"  href="includes/logout.php">cerrar sesión</a></li>
            </ul>
          </div>
        </div>
      </div>
    </nav>

    <!-- grid de productos -->

    <div class="container" id="productos">
      <h3 class="h3">PRODUCTOS</h3>
      <div class="row">
      <?php echo $productos->ShowProductos(); ?>
        <!-- producto -->
          <!-- <div class="col-md-3 col-sm-6">
              <div class="product-grid3">
                  <div class="product-image3">
                      <a href="#">
                          <img class="pic-1" src="assets/xx_caguama.jpg" alt="">
                          <img class="pic-2" src="assets/.jpg" alt="">
                      </a>
                      <ul class="social">
                          <li><a href="#"><i class="bi bi-bag"></i></a></li>
                          <li><a href="#"><i class="bi bi-cart"></i></a></li>
                      </ul>
                      <span class="product-top-label">top</span>
                  </div>
                  <div class="product-content">
                      <h3 class="title"><a href="#">XX caguama</a></h3>
                      <div class="price">
                          $35.50
                          <span>$40.00</span>
                      </div>
                      <ul class="rating">
                          <li class="bi bi-star"></li>
                          <li class="bi bi-star"></li>
                          <li class="bi bi-star"></li>
                          <li class="bi bi-star disable"></li>
                          <li class="bi bi-star disable"></li>
                      </ul>
                  </div>
              </div>
          </div> -->
          <!-- fin de producto -->
      </div>
    </div>
    <hr>

      
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>