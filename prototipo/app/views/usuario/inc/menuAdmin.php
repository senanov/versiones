 <nav class="navbar navbar-expand-lg ">
  <a class="navbar-brand" href="<?php echo RUTA_URL; ?>/novedad">SENANOV</a>
  <button class="navbar-toggler navbar-inverse" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon "><img src="<?php echo RUTA_URL; ?>/img/icono.png"></span>
  </button>
  <div class="collapse navbar-collapse "  id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active ">
        <a class="nav-link" href="<?php echo RUTA_URL; ?>/novedad">Inicio <span class="sr-only">(current)</span></a>
      </li>
     
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">registrar novedad</a>

        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">          
          <a class="dropdown-item" href="<?php echo RUTA_URL; ?>/novedad/registrarNovedad/2">Reintegro</a>
          <a class="dropdown-item" href="<?php echo RUTA_URL; ?>/novedad/registrarNovedad/3">Cambio de Jornada</a>
          <a class="dropdown-item" href="<?php echo RUTA_URL; ?>/novedad/registrarNovedad/6">Traslado</a>
           <a class="dropdown-item" href="<?php echo RUTA_URL; ?>/novedad/registrarNovedad/5">Retiros</a>
          <a class="dropdown-item" href="<?php echo RUTA_URL; ?>/novedad/registrarNovedad/1">Aplazamientos</a>
          <a class="dropdown-item" href="<?php echo RUTA_URL; ?>/novedad/registrarNovedad/4">Deserciones</a>
        </div>

      </li>

      <li class="nav-item">
        <a class="nav-link" href="<?php echo RUTA_URL; ?>/novedad/consultarNovedad">
         Consultar Novedades
        </a>
      </li>

       <li class="nav-item">
        <a class="nav-link" href="<?php echo RUTA_URL; ?>/usuario/consultarUsuarios">
         Consulta de Usuarios
        </a>
      </li>

       <li class="nav-item">
        <a class="nav-link" href="<?php echo RUTA_URL; ?>/programa/registrarPrograma">
         Programas de Formación
        </a>
      </li>

        <li class="nav-item">
         <a class="nav-link" href="<?php echo RUTA_URL; ?>/ficha/registrarFicha">
         Fichas de Formación
         </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="<?php echo RUTA_URL; ?>/novedad/descargarFormato">
         Formato Actas
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="<?php echo RUTA_URL; ?>/usuario/consultarPerfil">
         Perfil del Usuario
        </a>
      </li>       

      <li class="nav-item">
        <a class="nav-link" href="<?php echo RUTA_URL; ?>/usuario/cerrarSesion">
         Cerrar Sesion
        </a>
      </li>
    </ul>
  </div>
 
</nav>