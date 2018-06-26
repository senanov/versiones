<!DOCTYPE html>
<html>
<head>

<title>Novedades</title>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">

<link rel="stylesheet" type="text/css" href="../css/estilos.css" />
<link rel="stylesheet" type="text/css" href="../css/banner.css">
</head>

<body>
<?php
session_start();
$usuario=$_SESSION['usuario'];
?>
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
					<div><?php echo"$usuario";?></div>
				</div>
			</div> 
			<div class="animacion-derecha col-12 col-sm-12 col-md-12 col-lg-3 ">
				<img src="../img/banner.png" height="200">
			</div>
		</div>
	</div>



	<nav class="navbar navbar-expand-lg ">
  <a class="navbar-brand" href="#">Menù</a>
  <button class="navbar-toggler navbar-inverse" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon "><img src="../img/icono.png"></span>
  </button>
  <div class="collapse navbar-collapse "  id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active ">
        <a class="nav-link" href="novedades.php">Inicio <span class="sr-only">(current)</span></a>
      </li>
     
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="NOVEDADES.PHP" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">registrar novedad</a>

        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">          
          <a class="dropdown-item" href="#">Reingreso</a>
          <a class="dropdown-item" href="#">Cambio de Jornada</a>
          <a class="dropdown-item" href="#">Translado</a>
           <a class="dropdown-item" href="#">Retiros</a>
          <a class="dropdown-item" href="#">Aplazamientos</a>
          <a class="dropdown-item" href="#">Deserciones</a>
        </div>

      </li>

      <li class="nav-item">
        <a class="nav-link" href="#">¿Necesitas alguna ayuda?</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="servicios.php" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Servicios
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
    </ul>
  </div>
 
</nav>
<!-- <?php include("menubb.html") ?> -->
<br><br>

<?php include("slider.html") ?>

<br><br>

<div class="container">
<div class="d-flex justify-content-between  fila row">

<div class="letra columna col-sm-12 col-md-4 col-lg-12 col-xl-4 " >
<h1>Respecto a las novedades del CEET del SENA....</h1>

<p>Hay diferentes novedades que tramita el Sena de las cuales encontramos: El Aplazamiento, La Desercion, El Retiro Voluntario, El Cambio de Jornada, El Traslado y El Reingreso. </p>
</div>
	

<div class="columna col-sm-12 col-md-4 col-lg-4">

<img src="../img/ba.png"/>
</div>

<div class="letra columna col-sm-12 col-md-4 col-lg-4">
<p>Estas novedades tiene un tiempo estima de 8 a 15 dias habiles para su tramite y el procedimiento que se lleva a cabo en cada una de ellas es con un acta de comite, se realiza con el comite para decidir 
sobre la peticion que realizo el aprendiz.</p>
</div>

</div>
</div>

<br><br><br>

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