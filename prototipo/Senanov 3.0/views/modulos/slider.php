<?php

if (isset($_GET["enlace"])) 
{
	
  if ($_GET["enlace"]=="ok") {
    echo '<div class="alert alert-success alert-dismissible exito">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Exito! </strong>El Usuario se ha Registrado Satisfactoriamente
    </div>';
       
     }
 
}

if (isset($_SESSION["correo"])) 
{
  if ($_SESSION["correo"]==1)
  {
    echo '<div class="alert alert-success alert-dismissible exito">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Exito!</strong>La contraseña se ha cambiado correctamente</div>';

    $_SESSION["correo"]=0;
  }
}

if (isset($_SESSION["login"])) 
{
  if ($_SESSION["login"]==1)
  {
   echo '<div class="alert alert-danger alert-dismissible exito">
         <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
         <strong>Aviso:</strong> Usuario o Contraseña incorrecta</div><br>';

   $_SESSION["login"]=0;
   
  }
}



?>
<br>
    
<div id="demo" class="slider carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
    <li data-target="#demo" data-slide-to="3"></li>
    <li data-target="#demo" data-slide-to="4"></li>
    <li data-target="#demo" data-slide-to="5"></li>
    <li data-target="#demo" data-slide-to="6"></li>
  </ul>

  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="views/img/slider/img1.jpg" height="100%" width="100%" alt="CEET">
    </div>
    <div class="carousel-item">
      <img src="views/img/slider/img2.jpg" height="100%" width="100%" alt="CEET">
    </div>
    <div class="carousel-item">
      <img src="views/img/slider/img3.jpg" height="100%" width="100%" alt="CEET">
    </div>
    <div class="carousel-item">
      <img src="views/img/slider/img4.png" height="100%" width="100%" alt="CEET">
    </div>
    <div class="carousel-item">
      <img src="views/img/slider/img5.jpg" height="100%" width="100%" alt="CEET">
    </div>
    <div class="carousel-item">
      <img src="views/img/slider/img6.png" height="100%" width="100%" alt="CEET">
    </div>
    <div class="carousel-item">
      <img src="views/img/slider/img7.jpg" height="100%" width="100%" alt="CEET">
    </div>

  </div>

  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>

</div>

<br><br><br>

<!-- ----------------------------------------------------- -->

<div class="container">

    <div class="d-flex justify-content-between  fila row">

    <div class="letra columna col-sm-12 col-md-6 col-lg-4 " >
    <h1>SOBRE SENANOV....</h1>

    <p>El  registro de novedades en el SENA en general, es de vital importancia para el  normal funcionamiento interno de la entidad SENA, 
    actualmente estos datos son  ingresados a la plataforma excel,  lo que no es un problema, 
    pero si es limitada en algunos aspectos necesarios  para realizar el registro de estos datos.</p>

    </div>
    <div class="columna col-sm-12 col-md-6 col-lg-4">
   <img src="views/img/Registro.jpg" />

    </div>
    <div class="letra columna col-sm-12 col-md-12 col-lg-3">
     <h1>Objetivos</h1>

     <P>Tener un registro de fácil acceso de novedades del CEET  y el SENA.<br>

        Facilitar y agilizar el registro de las novedades y mejorar el entorno laboral.<br>

        Ofrecer a los aprendices un sistema donde pueden consultar y estar al tanto de sus novedades.

</P>

    </div>
    </div>
  </div>

<!-- ----------------------------------------------------------- -->


	<script type="text/javascript" src="engine1/wowslider.js"></script>
	<script type="text/javascript" src="engine1/script.js"></script>
	<!-- End WOWSlider.com BODY section -->
</body>
</html>