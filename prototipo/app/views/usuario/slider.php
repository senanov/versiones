<?php
require_once "../app/views/usuario/inc/header.php";
require_once "../app/views/usuario/inc/banner.php";

if ($_SESSION["rol"] == 1 || $_SESSION["rol"] == 0 ) {
    require_once "../app/views/usuario/inc/menuAdmin.php";
} else if ($_SESSION["rol"] == 2) {
    require_once "../app/views/usuario/inc/menuApoyo.php";
} else {
    require_once "../app/views/usuario/inc/menuInvitado.php";
}

?>

 <br><br>

<div class="container">

      <div class="row">

        <div class="col-sm-8">
          <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">

    <div class="carousel-item active">
      <img class="d-block w-100" src="<?php echo RUTA_URL; ?>/img/slider2/img1.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo RUTA_URL; ?>/img/slider2/img2.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo RUTA_URL; ?>/img/slider2/img3.png" alt="Third slide">
    </div>

    <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo RUTA_URL; ?>/img/slider2/img4.jpg" alt="img4">
    </div>

  </div>

  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
        </div>


        <div class="col-sm-4">
            <img src="<?php echo RUTA_URL; ?>/img/ba.png"/>
        </div>
      </div>
      <br>

      <div class="row">

        <div class="col-md-4">
        <h4>Respecto a las novedades del CEET del SENA…</h4>
       <p>Hay diferentes novedades que tramita el Sena de las cuales encontramos: El Aplazamiento, La Deserción, El Retiro Voluntario, El Cambio de Jornada, El Traslado y El Reingreso. </p>

        </div>

        <div class="col-md-4">
       <p>Estas novedades tiene un tiempo estima de 8 a 15 días hábiles para su trámite y el procedimiento que se lleva a cabo en cada una de ellas es con un acta de comité, se realiza con el comité para decidir 
        sobre la petición que realizo el aprendiz. </p>      


        </div>

        <div class="col-md-4">
          <iframe width="90%" height="95%" src="https://www.youtube.com/embed/s5bZPjaI9Qo" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
          



        </div>
        

      </div>

     </div>

<?php 
require_once "../app/views/inc/footer.php";
?>