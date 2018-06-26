<!DOCTYPE html>
<html>
<head>
	<title>Senanov</title>
</head>
<body>
	<?php 
	
	$usuario=$_REQUEST["usuario"];
	$contra=$_REQUEST["contra"];

  $conexion=mysqli_connect("127.0.0.1","root","12345","proyecto") or die ("problemas en la conexion");

  $consulta=mysqli_query($conexion,"select * from registro ");

 while ( $reg=mysqli_fetch_array($consulta)) {
    

  if ($reg['documento_usuario']==$usuario && $reg['contrasena']==$contra ){
    header("location: novedades.php");
    exit;
   }
 }


header("location: ../index.php");


  



	 ?>

</body>
</html>