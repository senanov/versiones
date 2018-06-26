<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php

	
	
$nombres=$_REQUEST["nombres"];
$apellidos=$_REQUEST["apellidos"];
$ndocumento=$_REQUEST["ndocumento"];
$tdocumento=$_REQUEST["tdocumento"];
$contra=$_REQUEST["contra"];
$contra1=$_REQUEST["contra1"];
$correo=$_REQUEST["correo"];

//PDO
/* try{

$conexion= new PDO("mysql:host=127.0.0.1; dbname=proyecto","root", "");

$resultado=$conexion->prepare("insert into registro values ('$_REQUEST[ndocumento]','$_REQUEST[tdocumento]','$_REQUEST[nombres]','$_REQUEST[apellidos]','$_REQUEST[contra]','$_REQUEST[correo]')");
$resultado->execute();
echo "El registro fue exitoso:";

}catch (Exception $e){

echo "problemas en la conexion". $e -> getmessage();

}
finally {$conexion=null;} */


	 $conexion=mysqli_connect("127.0.0.1","root","12345","proyecto") or die ("problemas en la conexion");

	 $verificar=mysqli_query($conexion,"select * from registro where documento_usuario = '$ndocumento' or correo = '$correo' ");
	 
	 if (mysqli_num_rows($verificar) >0 ){
	 	
	 	header('location: index2.php');
	 	exit;

	 }


	 if ($contra != $contra1) {
	 	
	 	header('location: contra.php');
	 	exit;

	 }


	mysqli_query($conexion,"insert into registro values ('$ndocumento','$tdocumento','$nombres','$apellidos','$contra','$correo')")
	or die ("problema en el registro". mysqli_error());



	mysqli_close($conexion);
	echo "El registro fue exitoso:"; 
	header('location:../../index.php');
	

	?>

</body>
</html>