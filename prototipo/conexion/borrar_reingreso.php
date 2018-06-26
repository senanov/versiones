<?php  
session_start();
$documento=$_SESSION['documento'];

$conexion=mysqli_connect("127.0.0.1","root","","proyecto") or die ("problemas en la conexion");
mysqli_query($conexion," delete  from f_reingreso where numero_documento='$documento'")or die ("problema en el registro". mysqli_error());
	
mysqli_close($conexion);

header('location:mostrar_reingreso.php');

?>