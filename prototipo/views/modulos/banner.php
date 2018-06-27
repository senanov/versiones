<div class="container-fluid"> 
    <div class="header row">
      <div class="animacion-izquierda col-12 col-sm-12 col-md-6 col-lg-3">
        
          <img src="views/img/logo.png" height="200">
          
        
        
      </div>
      <div class="animacion-centro col-12 col-sm-12 col-md-6 col-lg-6 ">
        <div class="texto ">
          <h1>SENANOV</h1>
          <hr>
          <p>Sistema de Información Especializado en la Gestión de Novedades en el CEET</p>
          <div class="btn "><a href="registro">Registrate</a></div>

            <!-- Trigger the modal with a button -->
  <button type="button" class="btn" data-toggle="modal" data-target="#myModal">Login</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="contcolor modal-content">

        <div class="modal-body">

         <div class="columna">
     <center><img src="views/img/sena.png" width="136" height="132"/></center>

                  <!--formulario login -->

  <form  method="POST" >
    <p>
      <label for="textfield"></label>
    Usuario</p>
    <p>
      <label for="usuario"></label>
      <input class="input" type="text" name="usuario" id="usuario" placeholder="Numero de Documento" required />
    </p>
    <p>contraseña</p>
    <p>
      <label for="contra"></label>
      <input class="input" type="password" name="contrai" id="contrai" placeholder="Contraseña" required />
    </p>

    <p>
      <input class="button" type="submit" name="button" id="button" value="Ingresar " />
    </p>
  </form>

  <center><a href="index.php?enlace=restablecer">Restablecer Contraseña</a><br><br>
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
        <img src="views/img/banner.png" height="200">

      </div>
    </div>
  </div>

  <?php

$ingreso = new MvcController();
$ingreso -> ingresoUsuarioController();

?>