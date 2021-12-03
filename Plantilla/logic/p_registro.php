<?php
include('../connect.php');
$name = $_POST["nombre"];
$ape = $_POST["apellido"];
$correo = $_POST["correo"];
$usuario = $_POST["usuario"];
$rol = $_POST["rol"];
$password = $_POST["pass"];
$password = hash('sha512',$password);

$insert = "INSERT INTO usuario (id_usuario, nombre_usuario, apellido, correo_usuario, usuario_name, contrasena, id_rol) VALUES (NULL,'$name','$ape','$correo','$usuario','$password','$rol')";
$result = mysqli_query($mysqli, $insert);

header("Location:../Registro.php");
?>
