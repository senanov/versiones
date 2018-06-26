<?php
$nombres=$_REQUEST["nombres"];
$apellidos=$_REQUEST["apellidos"];
$ndocumento=$_REQUEST["ndocumento"];
$tdocumento=$_REQUEST["tdocumento"];
$contrasena=$_REQUEST["contrasena"];
$correo=$_REQUEST["correo"];
$rol=$_REQUEST["rol"];

session_start();


$conexion=mysqli_connect("127.0.0.1","root","","proyecto") or die ("problemas en la conexion");

	 $consulta=mysqli_query($conexion," update registro SET documento_usuario = '$ndocumento', tipo_documento = '$tdocumento', nombres = '$nombres', apellidos = '$apellidos', correo = '$correo', rol = '$rol' WHERE registro. documento_usuario = '$ndocumento'")or die ("problema en el registro". mysqli_error());

	$reg=mysqli_fetch_array($consulta);

$_SESSION['documento']=$documento;

mysqli_close($conexion);
header('location:consulta_usuario.php');




?>