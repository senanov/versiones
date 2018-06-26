<?php
session_start();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="../css/estilos_ayuda.css">
<link rel="stylesheet" type="text/css" href="../css/estilos.css">
<link rel="stylesheet" type="text/css" href="../css/estilos_ayuda.css">
<link rel="stylesheet" type="text/css" href="../css/banner.css">


<title>Restablecer</title>
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
					<div class="btn "><a href="../html/registro/index.php">Registrate</a></div>
				</div>
			</div> 
			<div class="animacion-derecha col-12 col-sm-12 col-md-12 col-lg-3 ">
				<img src="../img/banner.png" height="200">
			</div>
		</div>
	</div>
	
<!-- Menu -->

<nav class="navbar navbar-expand-lg ">
  <a class="navbar-brand" href="#">SENANOV</a>
  <button class="navbar-toggler navbar-inverse" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon "><img src="../img/icono.png"></span>
  </button>
  
  <div class="collapse navbar-collapse "  id="navbarNavDropdown">
    <ul class="navbar-nav">
      
      <li class="nav-item active ">
        <a class="nav-link" href="../index.php">Inicio <span class="sr-only">(current)</span></a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="../html/consultar.php">¿Ya estoy registrado?</a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="../html/pag_ayuda.php">¿Necesitas alguna ayuda?</a>
      </li>
      
      <li class="nav-item dropdown">
        <a class="nav-link"   href="../html/servicios.php">
          Servicios
        </a>
       </li>
    
    </ul>
  </div>
 
</nav>
 <br /><br/>

<div class="cont container">

<div class="row" id="fila" >

  <div class="col" id="columna">

<form method="post" action="contrasena.php">
<p>  
<h2>Ingrese su correo para restablecer la contraseña</h2>
</p>

<p>
<input id="restablecer" type="email" name="email" id="email" placeholder="Correo Electronico" required>
</p>

<p>
<input id="sd" type="submit" name="Enviar" value="Enviar">
</p>

</form>

<?php
if(isset($_SESSION['error']))
{
	if($_SESSION['error']==6)
	{
	  echo '<div class="alert alert-danger alert-dismissible">
      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
      <strong>Error:</strong> El correo que esta ingresando no se encuentra registrado.
      </div>';
      $_SESSION['error']=0;
    }
}
?>

<?php
if(isset($_SESSION['error']))
{
	if ($_SESSION['error']==5) 
	{
		echo '<div class="alert alert-success alert-dismissible">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>Exito! </strong>Se ha enviado el correo exitosamente.
        </div>';
        $_SESSION['error']=0;
	}
}
?>


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