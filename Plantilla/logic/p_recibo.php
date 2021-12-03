<?php
include('../connect.php');
date_default_timezone_set("America/Mexico_City");
$fecha = date("Y-m-d");
$consumo = $_POST["consumo"];
$monto = $_POST["monto"];
$anio = $_POST["anio"];
$usuario = $_POST["usuario"];
$bimestre = $_POST["bimestre"];

$resultados = mysqli_query($mysqli,"SELECT id_usuario FROM usuario WHERE nombre_usuario LIKE '$usuario'");
	while($consulta = mysqli_fetch_array($resultados))
{
    $idu=$consulta['id_usuario'];
}

$insert = "INSERT INTO recibo (id_recibo, fecha_reg, consumo, monto, anio, id_usuario, id_bimestre) 
VALUES (NULL,'$fecha','$consumo','$monto','$anio','$idu','$bimestre')";
$result = mysqli_query($mysqli, $insert);

header("Location:../Recibos.php");
?>