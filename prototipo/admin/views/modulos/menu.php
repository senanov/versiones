 <nav class="navbar navbar-expand-lg ">
  <a class="navbar-brand" href="#">SENANOV</a>
  <button class="navbar-toggler navbar-inverse" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon "><img src="../img/icono.png"></span>
  </button>
  <div class="collapse navbar-collapse "  id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active ">
        <a class="nav-link" href="index.php">Inicio <span class="sr-only">(current)</span></a>
      </li>
     
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="NOVEDADES.PHP" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">registrar novedad</a>

        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">          
          <a class="dropdown-item" href="index.php?action=form_reingreso">Reingreso</a>
          <a class="dropdown-item" href="index.php?action=form_cam_jor">Cambio de Jornada</a>
          <a class="dropdown-item" href="index.php?action=form_traslado">Traslado</a>
           <a class="dropdown-item" href="index.php?action=form_retiro">Retiros</a>
          <a class="dropdown-item" href="index.php?action=form_aplazamiento">Aplazamientos</a>
          <a class="dropdown-item" href="index.php?action=form_desercion">Deserciones</a>
        </div>

      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="NOVEDADES.PHP" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Consultar</a>

        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">          
          <a class="dropdown-item" href="../conexion/mostrar_reingreso.php">Reingreso</a>
          <a class="dropdown-item" href="../conexion/mostrar_cj.php">Cambio de Jornada</a>
          <a class="dropdown-item" href="../conexion/mostrar_traslado.php">Traslado</a>
           <a class="dropdown-item" href="../conexion/mostrar_retiro.php">Retiros</a>
          <a class="dropdown-item" href="../conexion/mostra_aplazamientos.php">Aplazamientos</a>
          <a class="dropdown-item" href="../conexion/mostrar_desercion.php">Deserciones</a>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="../conexion/consulta.php">
         Consulta General
        </a>
      </li>

       <li class="nav-item">
        <a class="nav-link" href="../conexion/consulta_usuario.php">
         Consulta de Usuarios
        </a>
      </li>

       <li class="nav-item">
        <a class="nav-link" href="../conexion/mostrar_programas.php">
         Programas de formación
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="../conexion/perfil.php">
         Perfil del Usuario
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="../conexion/salir.php">
         Cerrar sesion
        </a>
      </li>
    </ul>
  </div>
 
</nav>