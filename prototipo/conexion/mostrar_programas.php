<?php  include("seguridad.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Tablas</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/estilos.css">
  <link rel="stylesheet" type="text/css" href="../css/estilos_ayuda.css">
  

	
</head>
<body>
	<?php  


	
include("../html/banner1.php");
?>

<?php
if ($_SESSION['roles']=='Apoyo Administrativo') 
{
  include('../html/menu_apoyo.php');
}

else
{
echo'<nav class="navbar navbar-expand-lg ">
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
 
</nav>';
}
?>
<br><br>

<h1 align="center" >Añadir Programas de formacion</h1>


<div class="container" id="contenedor1" >
<br>
<div class="row" id="fila1" >

  <div class="col" id="columna1">
 <form method="post" action="agregar_programas.php">
 <center><select name="tprograma" class="programa">
   <option value="1">Programa Técnico</option>
   <option value="2">Programa Tecnológico</option>
   <option value="3">Especializaciones</option>
 </select><br><br>
 <input type="text" name="programa" placeholder="Agregar programa de formacion" class="programa" required><br><br>
<input type="submit" name="enviar" value="Agregar" class="bt1">
</center>
   </form>
   <br>
   <center><a  href="tabla_programas.php"><input type="button" id="ip" value="Ver Programas"></a></center>
   <br><br>

   <?php
      if (isset($_SESSION['programa'])) 
      {
      if ($_SESSION['programa']==1) 
      {
       echo '<div class="alert alert-success alert-dismissible">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Aviso:</strong>  El programa Se agrego correctamente
            </div>';
            $_SESSION['programa']=0;
      }

      if ($_SESSION['programa']==2) 
      {
       echo '<div class="alert alert-danger alert-dismissible">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Aviso:</strong>  Porfavor ingrese programa de formacion
            </div>';
            $_SESSION['programa']=0;
      }
    }
    ?>
</div>

</div>
</div>


<br><br><br><br><br><br><br><br><br>



</body>
</html>