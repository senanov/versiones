<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Restablecer contraseña</title>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="../css/estilos_ayuda.css">
<link rel="stylesheet" type="text/css" href="../css/estilos.css">
<link rel="stylesheet" type="text/css" href="../css/banner.css">

</head>
<body>

<div class="container-fluid"> 
		<div class="header row">
			<div class="animacion-izquierda col-12 col-sm-12 col-md-6 col-lg-3">
				
					<img src="../img/logo.png" height="200">
					
				
				
			</div>
			<div class="animacion-centro col-12 col-sm-12 col-md-6 col-lg-6 ">
				<div class="texto ">
					<h1>SENANOV</h1>
					<hr>
					<p>Sistema de Información Especializado en la Gestión de Novedades en el CEET</p>
					<div class="btn "><a href="html/registro/index.php">Registrate</a></div>
				</div>
			</div> 
			<div class="animacion-derecha col-12 col-sm-12 col-md-12 col-lg-3 ">
				<img src="../img/banner.png" height="200">
			</div>
		</div>
</div>

<br><br>

<div class="cont container">

<div class="row" id="fila" >

  <div class="col" id="columna">

<form action="validar_contrasena.php" method="POST">

<h2>Ingrese su nueva contraseña</h2>	

<p>
<input id="contrasena" type="password" name="contrasena" placeholder="Contraseña" required>
</p>

<h2>Confirme la contraseña</h2>

<p>
<input id="contrasena" type="password" name="contrasena1" placeholder="Confirmar Contraseña" required>
</p>

<p>
<input id="guardar" type="submit" name="Guardar" value="Guardar">
</p>

<?php
if(isset($_SESSION['error']))
{
	if($_SESSION['error']==7)
	{
	  echo'<div class="alert alert-danger alert-dismissible">
      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
      <strong>Error:</strong> Las contraseñas ingresadas no coinciden.
      </div>';
      $_SESSION['error']=0;
	}
}

?>
</form>

</div>
</div>
</div>

<br><br>

<footer>
<img src="../img/gsena.gif" width="150" height="102" />
Cristian Ortiz <br />
Mónica Díaz <br />
Daniel Acosta <br />
Felipe Pinzón <br />
Juan David Ramirez | SENANOV
</footer>

<script src="../js/jquery-3.3.1.min.js"> </script>
<script src="../js/bootstrap.min.js"> </script>

</body>
</html>