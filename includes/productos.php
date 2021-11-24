<?php
class Productos extends DB{
    private $nombre;
    private $apellido;
    private $telefono;
    
public function setUser($user){
        $query = $this->connect()->prepare('SELECT * FROM clientes WHERE TELEFONO_C = :user');
        $query->execute(['user' => $user]);
        
        foreach ($query as $currentUser) {
            $this->nombre = $currentUser['NOMBRE_C'];
            $this->apellido = $currentUser['APELLIDO_C'];
            $this->telefono = $currentUser['TELEFONO_C'];
        }
    }


    public function ShowProductos(){
        $query = $this->connect()->prepare('SELECT * FROM productos NATURAL JOIN marcas');
        $query->execute();
        
        foreach ($query as $currentProductos) {
        ?>
        <!-- producto -->
                <div class="col-md-3 col-sm-6">
                    <div class="product-grid3">
                        <div class="product-image3">
                            <a href="#">
                                <img class="pic-1" src="data:image/jpg;base64,<?php echo  base64_encode($currentProductos['IMAGEN']); ?>" alt="">
                                <img class="pic-2" src="data:image/jpg;base64,<?php echo  base64_encode($currentProductos['IMAGEN']); ?>" alt="">
                    
                            </a>
                            <ul class="social">
                                <li><a href="#"><i class="bi bi-bag"></i></a></li>
                                <li><a href="#"><i class="bi bi-cart"></i></a></li>
                            </ul>
                            <span class="product-new-label">NEW</span>
                        </div>
                        <div class="product-content">
                            <h3 class="title"><a href="#"><?php echo $currentProductos['NOMBRE_P']." ".$currentProductos['NOMBRE_MARCAS'];  ?></a></h3>
                            <div class="price">
                                $ <?php echo $currentProductos['PRECIO_PUBLICO'];  ?>
                                <span>$ <?php echo $currentProductos['PRECIO_PUBLICO'];  ?></span>
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
                </div>
           <!-- fin de producto -->
           <?php  
        }        
    }
}
?>
