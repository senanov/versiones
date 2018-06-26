<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
session_start();
$nombres=$_REQUEST["nombres"];
$apellidos=$_REQUEST["apellidos"];
$tdocumento=$_REQUEST["tdocumento"];
$documento=$_REQUEST["documento"];
$grupo=$_REQUEST["grupo"];
$ficha=$_REQUEST["ficha"];
$trimestre=$_REQUEST["trimestre"];
$jornada=$_REQUEST["jornada"];
$programa=$_REQUEST["programa"];
$sede=$_REQUEST["sede"];
$fecha=$_REQUEST["fecha"];

$conexion=mysqli_connect("127.0.0.1","root","","proyecto") or die ("problemas en la conexion");

mysqli_query($conexion, "INSERT INTO f_desercion (nombre,apellidos,documento,numero_documento,grupo,numero_ficha,trimestre,jornada,programa_formacion,sede,fecha)VALUES('$nombres','$apellidos','$tdocumento','$documento','$grupo','$ficha','$trimestre','$jornada','$programa','$sede','$fecha')")or die (header('location:../html/error.php'));

mysqli_close($conexion);
echo "El registro fue exitoso:";

$_SESSION['documento']=$documento;
header('location:../html/exitoso2.php');

?>
</body>
</html>