<?php
include('connect.php');
$name = $_POST["name"];
$ape = $_POST["ape"];
$telr = $_POST["telr"];
$password = $_POST["password"];
$password = hash('sha512',$password);

$insert = "INSERT INTO clientes(TELEFONO_C, NOMBRE_C, APELLIDO_C) VALUES ('$telr','$name','$ape')";

$result = mysqli_query($mysqli, $insert);

$insert2 = "INSERT INTO usuarios(USUARIO, PASSWORD) VALUES ('$telr','$password')";

$result2 = mysqli_query($mysqli, $insert2);


header("Location:../Registro.php");
?>
