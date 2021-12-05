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

if(isset($_REQUEST["vermas"])){
    include('connect.php');
    $id = $_REQUEST["vermas"];

    $query = "SELECT * FROM aparato_historial INNER JOIN aparato ON aparato_historial.id_historial = aparato.id_aparato WHERE aparato_historial.id_historial = '1'";
    $resultados = mysqli_query($mysqli,$query);
    while($row = $resultados->fetch_assoc()){

    
    }
                  
}

?>

</body>
</html>