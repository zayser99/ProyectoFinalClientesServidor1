<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<title></title>
</head>
<body>

<?php
include('../connect.php');
session_start();
date_default_timezone_set("America/Mexico_City");
$fecha = date("Y-m-d");
$total =0;
$usuario = $_SESSION['user'];

//consulta para obtener id del usuario
$resultados = mysqli_query($mysqli,"SELECT id_usuario FROM usuario WHERE nombre_usuario LIKE '$usuario'");
	while($consulta = mysqli_fetch_array($resultados))
{
    $usuarioid=$consulta['id_usuario'];
}
//consulta para obtener id del usuario

if(isset($_POST['paneles']) and isset($_SESSION['calculo'])){
		//----------------------Ingreso un historial sin total ni descripción
		$queryhistorial = mysqli_query($mysqli,"INSERT INTO historial (id_historial, consumo_estimado, fecha_historial, desc_energia,id_usuario) VALUES ('', '$total','$fecha','','$usuarioid');");
		//----------------------------------------------

		//-------busco el id del historial
		$resultados4 = mysqli_query($mysqli,"SELECT * FROM historial WHERE consumo_estimado = '0.00'");
		while($consultaaa = mysqli_fetch_array($resultados4))
		{
   			 $idhisto=$consultaaa['id_historial'];
		}		
		//-------------------------

//aqui inicia el recorrido de los aparatos a calcular ------------------------------------------------------
		foreach ($_SESSION["calculo"] as $indice =>$arreglo){
		//------consulta el id del aparato
		$resultados3 = mysqli_query($mysqli,"SELECT * FROM aparato WHERE nombre_aparato = '$indice'");
		while($consultaa = mysqli_fetch_array($resultados3))
		{
   			 $id=$consultaa['id_aparato'];
		}		
		//------------------------------------
           
			$total +=$arreglo['cantidad'] * $arreglo['consumo']* $arreglo['horas']* $arreglo['dias'];//se queda
			$cantidad=$arreglo['cantidad'];//se queda
			$consumo=$arreglo['consumo'];//se queda
            $horas=$arreglo['horas'];//se queda
            $dias=$arreglo['dias'];//se queda
			
		//---------------inserta en aparato historial
		$queryhisto = mysqli_query($mysqli,"INSERT INTO aparato_historial (id_aparato_historial, cantidad, horas, dias, id_aparato, id_historial) VALUES ('', '$cantidad', '$horas', '$dias','$id','$idhisto');");	
		//--------------------------------
		}
//-------------------------------------------------termina el recorrido de los productos
        $total2= $total/1000;
        $paneles = round($total2*0.0092165898617512);
        $baterias = round($total2*0.0207373271889401);
        $descripcion = "Se necesitan $paneles paneles de 450w y $baterias baterias de 150Ah";
		//Actualizo el historial con el total en kwh
		$queryhistoact = mysqli_query($mysqli,"UPDATE historial SET consumo_estimado = '$total',desc_energia = '$descripcion'  WHERE id_historial = '$idhisto';");
		//Actualizo el historial con el total en kwh
        echo"<form name='envia' method='POST' action='../Plantilla.php'>
                <input type=hidden name='consumo' value= $total2 >
                </form>
                <script language='JavaScript'>
                document.envia.submit();
                </script>";
 
		if ($total==0) {
			echo ";<script>
        swal({title: 'Agrega aparatos!!', icon: 'warning',button:'OK',}).then((value)=>{window.location.href='../Calculadora.php'});
		</script>";
		}
		if ($total>0) {
			echo "<hr>El consumo total al mes es de: $total W";
		}
		unset($_SESSION["calculo"]);
		echo ";<script>
        swal({title: 'Calculo realizado con éxito!!', icon: 'success',button:'OK',});
		</script>";
	}else{
    	echo ";<script>
        swal({title: 'Agrega aparatos!!', icon: 'warning',button:'OK',}).then((value)=>{window.location.href='../Calculadora.php'});
		</script>";
    }

?>
                

</body>
</html>