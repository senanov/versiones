<?php
$codigo=$_GET["codigo"];
$valor=$_POST["valor"];
$nuevo=$_POST["nuevo"];

echo $codigo;
echo $valor;

	
	$conexion=mysqli_connect("127.0.0.1","root","","proyecto") or die ("problemas en la conexion");
mysqli_set_charset ($conexion, 'utf8');



if ($codigo==1)  {
	mysqli_query($conexion,"update programas_tecnicos set p_tecnicos = '$nuevo' where programas_tecnicos. codigo = $valor") or die ("problema en el registro". mysqli_error());
	
	header('location:tabla_programas.php');
	
}

if ($codigo==2)  {
	mysqli_query($conexion,"update programas_tecnologicos set p_tecnologicos = '$nuevo' where programas_tecnologicos. codigo = $valor") or die ("problema en el registro". mysqli_error());
	
	header('location:tabla_programas.php');
	
}

if ($codigo==3)  {
	mysqli_query($conexion,"update especializaciones set especializacion = '$nuevo' where especializaciones. codigo = $valor") or die ("problema en el registro". mysqli_error());
	
	header('location:tabla_programas.php');
	
}

mysqli_close($conexion);

// UPDATE programas_tecnicos SET p_tecnicos = '$nuevo' WHERE programas_tecnicos.codigo = $valor;

?>