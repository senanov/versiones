<?php  
session_start();
$_SESSION['documento']=$_POST['doc'];
header('location:mostrar_desercion.php');

?>