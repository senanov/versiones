<?php
session_start();

$mensaje='ingrese al siguiente link para restablecer clave "http://localhost:8082/prototipo2.5/conexion/restablecer_contrasena.php"';
$email=$_POST['email'];
$asunto='Restablecimiento de clave SENANOV';
$cabecera='from:senanov2018@gmail.com'.phpversion();

$conexion=mysqli_connect("127.0.0.1","root","","proyecto") or die ("problemas en la conexion");

$consulta=mysqli_query($conexion,"select * from registro where correo = '$email'") or die ("problemas en la consulta".mysqli_error());
$reg=mysqli_fetch_array($consulta);

$_SESSION['email']=$email;
$_SESSION['error']=0;

if ($reg['correo'] == $email) 
{
	if(mail($email,$asunto,$mensaje,$cabecera))
	{
		$_SESSION['error']=5;
		header("location:reestablecer.php");
	}	
}

else
{	
	$_SESSION['error']=6;
	header("location:reestablecer.php");
}

misqli_close($conexion);

?>