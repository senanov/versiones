<?php  
session_start();
$_SESSION['documento']=$_POST['doc'];
header('location:mostra_aplazamientos.php');




	?>