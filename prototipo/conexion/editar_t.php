<?php
$nombres=$_REQUEST["nombres"];
$apellidos=$_REQUEST["apellidos"];
$documento=$_REQUEST["documento"];
$tdocumento=$_REQUEST["tdocumento"];
$grupo=$_REQUEST["grupo"];
$ficha=$_REQUEST["ficha"];
$trimestre=$_REQUEST["trimestre"];
$jornada=$_REQUEST["jornada"];
$centroa=$_REQUEST["centroa"];
$centron=$_REQUEST["centron"];
$ciudada=$_REQUEST["ciudada"];
$ciudadn=$_REQUEST["ciudadn"];
$programa=$_REQUEST["programa"];
$fecha=$_REQUEST["fecha"];
$motivo=$_REQUEST["motivo"];
$valor=$_REQUEST["valor"];


session_start();


$conexion=mysqli_connect("127.0.0.1","root","","proyecto") or die ("problemas en la conexion");

	 $consulta=mysqli_query($conexion," update f_traslado SET nombre = '$nombres', apellidos = '$apellidos', documento = '$tdocumento', numero_documento = '$documento', grupo = '$grupo', numero_ficha = '$ficha', trimestre = '$trimestre', jornada = '$jornada',centro_actual = '$centroa',centro_traslado= '$centron', ciudad_actual= '$ciudada',ciudad_traslado= '$ciudadn',  programa_formacion = '$programa',fecha = '$fecha', motivo = '$motivo' WHERE f_traslado. numero_documento = '$valor'")or die ("problema en el registro". mysqli_error());
	
	$reg=mysqli_fetch_array($consulta);
$_SESSION['documento']=$documento;

mysqli_close($conexion);
header('location:mostrar_traslado.php');

?>
