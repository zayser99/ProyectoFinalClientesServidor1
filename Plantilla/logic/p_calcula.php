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
session_start();

if(isset($_REQUEST["agrega_calculo"])){
        $aparato = $_REQUEST["aparato"];
        $consumo = $_REQUEST["consumo"];
        $cantidad = $_REQUEST["cantidad"];
        $horas = $_REQUEST["horas"];
        $dias = $_REQUEST["dias"];

        if (isset($_SESSION['calculo'][$aparato]['cantidad'])) {
        	$_SESSION['calculo'][$aparato]['cantidad']= $_SESSION['calculo'][$aparato]['cantidad']+$cantidad;
        }
        else{
        	$_SESSION['calculo'][$aparato]['cantidad'] = $cantidad;
        }
       
        $_SESSION['calculo'][$aparato]['consumo'] = $consumo;
        $_SESSION['calculo'][$aparato]['horas'] = $horas;
        $_SESSION['calculo'][$aparato]['dias'] = $dias;
        
                  
    }

echo "<script>
swal({title: 'Aparato agregado!!', icon: 'success',button:'OK',}).then((value)=>{window.location.href='../Calculadora.php'});
</script>";

?>
</body>
</html>