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

            <!-- Trigger the modal with a button -->
  <button type="button" class="btn" data-toggle="modal" data-target="#myModal">Login</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">

        <div class="modal-body">

         <div class="columna">
     <center><img src="img/sena.png" width="136" height="132"/></center>

                  <!--formulario login -->

  <form  method="POST" action="html/evaluar.php">
    <p>
      <label for="textfield"></label>
    Usuario</p>
    <p>
      <label for="usuario"></label>
      <input class="input" type="text" name="usuario" id="usuario" placeholder="Numero de Documento" />
    </p>
    <p>contraseña</p>
    <p>
      <label for="contra"></label>
      <input class="input" type="password" name="contra" id="contra" placeholder="Contraseña" />
    </p>

    <p>
      <input class="button" type="submit" name="button" id="button" value="Ingresar " />
    </p>
  </form>

  <center><a href="conexion/reestablecer.php">Restablecer Contraseña</a><br><br>
    </div>
       </div>

        <div class="modal-footer">
          <button type="button" id="ip" data-dismiss="modal">Cerrar Ventana</button>
        </div>

      </div>
      
    </div>
  </div>


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
      </li>
    </ul>
  </div>
 
</nav>
 <br /><br/>

<?php
    if (isset($_SESSION['error'])) 
    {
    if ($_SESSION['error']==4) 
    {
    echo '<div class="alert alert-danger alert-dismissible exito">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Error:</strong>  Usuario o contraseña incorrecto
    </div>';
    $_SESSION['error']=0;
    }
  }
    ?>

<?php

if (isset($_SESSION['error'])) 
{
  if ($_SESSION['error']==8) 
  {
    echo '<div class="alert alert-success alert-dismissible exito">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Exito! </strong>Se ha modificado su contraseña correctamente
    </div>';
    $_SESSION['error']=0; 
  }
}

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






<br><br><br><br>
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