<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<title></title>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>
<?php
include('../connect.php');
    if (isset($_REQUEST["ingresa_aparato"])) {
        $name = $_POST["name"];
        $consumo = $_POST["consumo"];

        $revisar = getimagesize($_FILES["imagen"]["tmp_name"]);
        if($revisar !== false){
        $imagen = $_FILES['imagen']['tmp_name'];
        $imgContenido = addslashes(file_get_contents($imagen));}

        $insert = "INSERT INTO aparato(id_aparato, nombre_aparato, consumo_ind, imagen_producto) VALUES ('','$name','$consumo','$imgContenido');";
       mysqli_query($mysqli,$insert);
       echo "<script>
         swal({title: 'Aparato agregado!!', icon: 'success',button:'OK',}).then((value)=>{window.location.href='../Aparato.php'});
        </script>";   
              
    }
?>

</body>
</html>