<!DOCTYPE html>
<html>
<head>
	<title>Reingreso</title>
</head>
<body>

<?php  
session_start();

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

$conexion=mysqli_connect("127.0.0.1","root","","proyecto") or die ("problemas en la conexion");

	 mysqli_query($conexion,"INSERT INTO f_reingreso  VALUES ('$nombres', '$apellidos', '$tdocumento ', '$documento', '$grupo', '$ficha', '$trimestre', '$jornada', '$programa', '$sede', '$fecha')") or die (header('location:../html/error.php'));
	
	 	 
	mysqli_close($conexion);

	echo "El registro fue exitoso:";
	$_SESSION['documento']=$documento;
	header('location:../html/realizado.php');
	
?>



</body>
</html>