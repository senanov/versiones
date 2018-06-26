<html>

<head>
<title>Problema</title>
</head>
<body>
<?php

session_start();

$documento=$_REQUEST['documento'];
$conexion=mysqli_connect("127.0.0.1","root","","proyecto") or
    die("Problemas con la conexión");
	
	

mysqli_query($conexion,"insert into f_retiro values 
                       ('$_REQUEST[nombres]','$_REQUEST[apellidos]','$_REQUEST[tdocumento]','$documento','$_REQUEST[grupo]','$_REQUEST[ficha]','$_REQUEST[trimestre]','$_REQUEST[jornada]','$_REQUEST[programa]','$_REQUEST[sede]','$_REQUEST[fecha]','$_REQUEST[motivo]')")
  or die(header('location:../html/error.php'));

mysqli_close($conexion);
 	echo "El registro fue exitoso:";
	$_SESSION['documento']=$documento;
	header('location:../html/exitosor.php');
echo "la novedad ha sido registrada con exito.";
?>
</body>
</html>
