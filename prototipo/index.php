<?php
session_start();

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Senanov</title>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="icon" href="img/logo.ico" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet"  href="css/fonts.css" />
<link rel="stylesheet" type="text/css" href="css/estilos.css" />
<link rel="stylesheet" type="text/css" href="css/banner.css">

</head>

<body>


	<div class="container-fluid"> 
		<div class="header row">
			<div class="animacion-izquierda col-12 col-sm-12 col-md-6 col-lg-3">
				
					<img src="img/logo.png" height="200">
					
				
				
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
				<img src="img/banner.png" height="200">
			</div>
		</div>
	</div>
	
<!-- Menu -->

<nav class="navbar navbar-expand-lg ">
  <a class="navbar-brand" href="#">SENANOV</a>
  <button class="navbar-toggler navbar-inverse" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon "><img src="img/icono.png"></span>
  </button>
  <div class="collapse navbar-collapse "  id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active ">
        <a class="nav-link" href="index.php">Inicio <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="html/consultar.php">¿Ya estoy registrado?</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="html/pag_ayuda.php">¿Necesitas alguna ayuda?</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link"   href="html/servicios.php">
          Servicios
        </a>
        <!-- <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div> -->
      </li>
    </ul>
  </div>
 
</nav>
 <br /><br/>
<?php


if (isset($_SESSION['error'])) 
{
if($_SESSION['error']==3)
{
   echo '<div class="alert alert-success alert-dismissible exito">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Exito! </strong>El usuario se a registrado satisfactoriamente
    </div>';
    $_SESSION['error']=0; 

}

}
?>

<br>

<?php include("html/social.php"); ?>


<?php include("html/slider.php"); ?>
<br><br><br>
<?php include("html/login.php"); ?>






<br /> <br />
<footer>
<img src="img/gsena.gif" width="150" height="102" />
Cristian Ortiz <br />
Mónica Díaz <br />
Daniel Acosta <br />
Felipe Pinzón <br />
Juan David Ramirez | SENANOV
</footer>

    <script src="js/jquery-3.3.1.min.js"> </script>
    <script src="js/bootstrap.min.js"> </script>
    <script src="js/menu.js"></script>

  
</body>
</html>