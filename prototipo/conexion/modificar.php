<?php
$nombres=$_REQUEST["nombres"];
$apellidos=$_REQUEST["apellidos"];
$documento=$_REQUEST["documento"];
$tdocumento=$_REQUEST["tdocumento"];
$grupo=$_REQUEST["grupo"];
$ficha=$_REQUEST["ficha"];
$trimestre=$_REQUEST["trimestre"];
$jornada=$_REQUEST["jornada"];
$programa=$_REQUEST["programa"];
$sede=$_REQUEST["sede"];
$fecha=$_REQUEST["fecha"];
$valor=$_REQUEST["valor"];
 
session_start();

$conexion=mysqli_connect("127.0.0.1","root","","proyecto") or die ("problemas en la conexion");

$consulta=mysqli_query($conexion," update f_reingreso SET nombre = '$nombres', apellidos = '$apellidos', documento = '$tdocumento', numero_documento = '$documento', grupo = '$grupo', numero_ficha = '$ficha', trimestre = '$trimestre', jornada = '$jornada', programa_formacion = '$programa', sede = '$sede', fecha_ingreso = '$fecha' where f_reingreso. numero_documento = '$valor'") or die ("problema en el registro". mysqli_error());

$reg=mysqli_fetch_array($consulta);
$_SESSION['documento']=$documento;

mysqli_close($conexion);

header('location:mostrar_reingreso.php');




?>