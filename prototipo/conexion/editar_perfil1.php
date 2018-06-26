<?php

$nombre=$_POST['nombres'];
$apellido=$_POST['apellidos'];
$correo=$_POST['correo'];
$documento=$_POST['documento'];

$conexion=mysqli_connect("127.0.0.1","root","","proyecto") or die ("porblemas en la conexion");
mysqli_query($conexion,"update registro set nombres = '$nombre', apellidos = '$apellido', correo = '$correo' where registro. documento_usuario = '$documento'") or die ("problemas en la actualizacion de los datos");

header("location: perfil.php");
?>