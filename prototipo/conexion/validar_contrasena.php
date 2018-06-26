<?php
session_start();

$contrasena=$_POST['contrasena'];
$contrasena1=$_POST['contrasena1'];

$email=$_SESSION['email'];
$_SESSION['error']=0;

if ($contrasena != $contrasena1) 
{
	$_SESSION['error']=7;
	header('location:restablecer_contrasena.php');
}

else
{
	$_SESSION['error']=8;
	$conexion=mysqli_connect("127.0.0.1","root","","proyecto") or die ("problemas en la conexion");
	$consulta=mysqli_query($conexion,"update registro set contrasena = '$contrasena' where correo = '$email'") or die ("problemas en la consulta");
	header('location:../index.php');

$_SESSION['email']=0;
}
mysqli_close($conexion);
?>