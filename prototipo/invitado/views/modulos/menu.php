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
        <a class="nav-link dropdown-toggle" href="index.php" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Consultar</a>

        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">          
          <a class="dropdown-item" href="index.php?action=reingreso">Reingreso</a>
          <a class="dropdown-item" href="index.php?action=cambio_de_jornada">Cambio de Jornada</a>
          <a class="dropdown-item" href="index.php?action=traslado">Traslado</a>
           <a class="dropdown-item" href="index.php?action=retiros">Retiros</a>
          <a class="dropdown-item" href="index.php?action=aplazamientos">Aplazamientos</a>
          <a class="dropdown-item" href="index.php?action=deserciones">Deserciones</a>
        </div>
      </li>

       <li class="nav-item">
        <a class="nav-link" href="index.php?action=perfil">
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