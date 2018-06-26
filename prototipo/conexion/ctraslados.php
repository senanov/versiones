<html>

<head>
<title>Problema</title>
</head>
<body>
<?php
session_start();
$conexion=mysqli_connect("localhost","root","","proyecto") or
    die("Problemas con la conexión");
	
$documento=$_REQUEST['documento'];

mysqli_query($conexion,"insert into f_traslado(nombre,apellidos,documento,numero_documento,grupo,numero_ficha,trimestre,jornada,centro_actual,centro_traslado,ciudad_actual,ciudad_traslado,programa_formacion,fecha,motivo) values 
                       ('$_REQUEST[nombres]','$_REQUEST[apellidos]','$_REQUEST[tdocumento]','$documento','$_REQUEST[grupo]','$_REQUEST[ficha]','$_REQUEST[trimestre]','$_REQUEST[jornada]','$_REQUEST[centroa]','$_REQUEST[centron]','$_REQUEST[ciudada]','$_REQUEST[ciudadn]','$_REQUEST[programa]','$_REQUEST[fecha]','$_REQUEST[motivo]')")
  or die(header('location:../html/error.php'));

mysqli_close($conexion);
 	echo "El registro fue exitoso:";
 	
	$_SESSION['documento']=$documento;
	
	header('location:../html/exitosot.php');
echo "la novedad ha sido registrada con exito.";
echo "la novedad ha sido registrada con exito.";



?>
</body>
</html>