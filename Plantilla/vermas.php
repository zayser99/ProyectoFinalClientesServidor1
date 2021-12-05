<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<title></title>
</head>
<body>
<?php
session_start();

if(isset($_REQUEST["vermas1"])){
    echo "sds";
    include('connect.php');
    $id = $_REQUEST["vermas"];

    $query = "SELECT * FROM aparato_historial INNER JOIN aparato ON aparato_historial.id_aparato = aparato.id_aparato WHERE aparato_historial.id_historial = '$id'";
    $resultados = mysqli_query($mysqli,$query);
    while($row = $resultados->fetch_assoc()){

        echo "Codigo de venta: ".$row['id_aparato']."<br>";
        echo "Usuario: ".$row['nombre_aparato']."<br>";
        echo "Status: ".$row['consumo_ind']."<br>";
        echo base64_encode ($row['imagen_producto']);
      

    
    }
                  
}

?>

</body>
</html>