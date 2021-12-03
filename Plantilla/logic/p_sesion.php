<?php
include('../connect.php');
session_start();
$correo = $_POST["correo"];
$pass = $_POST["pass"];
$pass = hash('sha512',$pass);

try{
if(isset($_POST['ingresar'])){
	$querylog = mysqli_query($mysqli,"SELECT * FROM usuario WHERE correo_usuario = '$correo' AND contrasena = '$pass'");
	
	$resultados = mysqli_query($mysqli,"SELECT * FROM usuario WHERE correo_usuario LIKE '$correo'");
	while($consulta = mysqli_fetch_array($resultados))
{
    $nombre=$consulta['nombre_usuario'];
    $rol=$consulta['id_rol'];
}
	$nrows = mysqli_num_rows($querylog);
	if(($nrows == 1)){
		#echo ($nombre);
		$_SESSION['user'] = $nombre;
		if ($rol==1) {
			header("location:../admi.php");
		}else{header("location:../index.php");}	
		}else{
		echo "<script> alert('Datos incorrectos');window.location.href='../Login.php';</script>";
		#header("location: ../inicio.php");
		}
}
}catch(Exception $error){}
?>