<?php  include("seguridad.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	
</head>
<body>
	<?php  

	$tprograma=$_POST["tprograma"];
	$programa=$_POST["programa"];

if ($programa=="") {
		$_SESSION["programa"]=2;
		header('location:mostrar_programas.php');
		break;
	}

$conexion=mysqli_connect("127.0.0.1","root","","proyecto") or die ("problemas en la conexion");
mysqli_set_charset ($conexion, 'utf8');


if ($tprograma==1) {
	


	mysqli_query($conexion,"insert into programas_tecnicos  values (NULL, '$programa')") or die ("problema en el registro". mysqli_error());
	
	$_SESSION["programa"]=1;
	header('location:mostrar_programas.php');
}

if ($tprograma==2) {
	mysqli_query($conexion,"insert into programas_tecnologicos  values (NULL, '$programa')") or die ("problema en el registro". mysqli_error());
	$_SESSION["programa"]=1;
	header('location:mostrar_programas.php');
	
}

if ($tprograma==3) {
	mysqli_query($conexion,"insert into especializaciones  values (NULL, '$programa')") or die ("problema en el registro". mysqli_error());
	$_SESSION["programa"]=1;
	header('location:mostrar_programas.php');
	
}
	 
?>


</body>
</html>