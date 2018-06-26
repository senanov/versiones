<?php  include("seguridad.php"); ?>
<!DOCTYPE html>
<html>
<head>
<title>Editar Usuario</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

<link rel="stylesheet" href="../css/bootstrap.min.css">
<link rel="stylesheet" href="../css/estilos.css">

</head>
<body>

<?php

$id=$_GET['id'];

$conexion=mysqli_connect("127.0.0.1","root","","proyecto") or die ("problemas en la conexion");

$consulta=mysqli_query($conexion,"select * from registro where documento_usuario ='$id'")or die ("problema en el registro". mysqli_error());

$reg=mysqli_fetch_array($consulta);

include("../html/banner1.php");
?>

<nav class="navbar navbar-expand-lg ">
  <a class="navbar-brand" href="#">SENANOV</a>
  <button class="navbar-toggler navbar-inverse" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon "><img src="../img/icono.png"></span>
  </button>
  <div class="collapse navbar-collapse "  id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active ">
        <a class="nav-link" href="../html/novedades.php">Inicio <span class="sr-only">(current)</span></a>
      </li>
     
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="NOVEDADES.PHP" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">registrar novedad</a>

        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">          
          <a class="dropdown-item" href="../formularios/reingreso.php">Reingreso</a>
          <a class="dropdown-item" href="../formularios/cambio_jornada.php">Cambio de Jornada</a>
          <a class="dropdown-item" href="../formularios/traslado.php">Traslado</a>
           <a class="dropdown-item" href="../formularios/retiro.php">Retiros</a>
          <a class="dropdown-item" href="../formularios/aplazamiento.php">Aplazamientos</a>
          <a class="dropdown-item" href="../formularios/desercion.php">Deserciones</a>
        </div>

      </li>


      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="NOVEDADES.PHP" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Consultar</a>

        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">          
          <a class="dropdown-item" href="mostrar_reingreso.php">Reingreso</a>
          <a class="dropdown-item" href="mostrar_cj.php">Cambio de Jornada</a>
          <a class="dropdown-item" href="mostrar_traslado.php">Traslado</a>
           <a class="dropdown-item" href="mostrar_retiro.php">Retiros</a>
          <a class="dropdown-item" href="mostra_aplazamientos.php">Aplazamientos</a>
          <a class="dropdown-item" href="mostrar_desercion.php">Deserciones</a>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="consulta.php">
         Consulta General
        </a>
      </li>

       <li class="nav-item">
        <a class="nav-link" href="consulta_usuario.php">
         Consulta de Usuarios
        </a>
      </li>

       <li class="nav-item">
        <a class="nav-link" href="mostrar_programas.php">
         Programas de formación
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="perfil.php">
         Perfil del Usuario
        </a>
      </li>

       <li class="nav-item">
        <a class="nav-link" href="salir.php">
         Cerrar sesion
        </a>
      </li>
    </ul>
  </div>
 
</nav>
<br><br>

<h1 align="center">EDITAR USUARIO</h1>

  <div class="container-fluid">
    <div class="row">
      <div class="col">
        
        <table class="table table-bordered table-striped table-hover table-reponsive">
          
          <thead class="thead-default">

            <thead class="thead-default">
            <th>Numero Documento</th>
            <th>Tipo Documento</th>
            <th>Nombres</th>
            <th>Apellidos</th>         
            <th>Correo</th>
            <th>Rol</th>
            <th>Opciones</th>         
          </thead>
   

          <tr class=" bg-info">
            <form action="editar_u.php" method="post">
            <!--evento para solo numeros-->
            <td><input onkeypress='return event.charCode >= 48 && event.charCode <= 57'
             class="ed"  type="text" name="ndocumento" value="<?php echo $reg['documento_usuario']; ?>"></td>

            <td> <input class="ed"  type="text" name="tdocumento" value="<?php echo $reg['tipo_documento']; ?>"></td> 
            <td><input class="ed"  type="text" name="nombres" value="<?php echo $reg['nombres']; ?>"></td>
            <td><input class="ed"  type="text" name="apellidos" value="<?php echo $reg['apellidos']; ?>"></td>
            <td><input class="ed"  type="text" name="correo" value="<?php echo $reg['correo']; ?>"></td>

            

            <td><select name="rol" class="et">
              <option value="invitado">Invitado</option>
              <option value="Apoyo Administrativo">Apoyo Administrativo</option>
              <option value="Administrador">Administrador</option>
</select></td>
            <td><input class="sm" type="submit" name="enviar" value="continuar"> </td>

            </form>
            
          <?php mysqli_close($conexion); ?>
        </tr>
  
        </table>
        <br><br>

      </div>
      
    </div>
    
  </div>


<script src="../js/jquery.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/evento.js"> </script>

</body>
</html>