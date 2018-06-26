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

$documento=$_SESSION['documento'];

$conexion=mysqli_connect("127.0.0.1","root","","proyecto") or die ("problemas en la conexion");

	 $consulta=mysqli_query($conexion,"select * from f_aplazamiento where numero_documento='$documento'")or die ("problema en el registro". mysqli_error());
	
	$reg=mysqli_fetch_array($consulta);
		
	
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

<h1 align="center" >Busqueda General</h1>


<div class="cont container">

<div class="row" id="fila" >

  <div class="col" id="columna">

    <form action="busqueda.php" method="POST">
       <center><h2>Buscar Registro</h2></center>
       <input id="consultar" type="text" name="id" placeholder="Numero de documento"><br><br>
       <input  id="sm" type="submit" name="buscar" value="Buscar">
    </form>

   <center> <form action="filtrar_g.php" method="POST">
       <h2>Utilizar filtrar</h2>
              <select class="sl" name="filtro">
            <option value="nombre" >Nombres</option>
            <option value="apellidos" >apellidos</option>
            <option value="numero_documento" >numero documento</option>
            <option value="grupo" >grupo</option>
            <option value="numero_ficha" >ficha</option>
            <option value="programa_formacion" >programa</option>
            <option value="fecha" >Fecha novedad</option>
            </select>
              <input class="ar" type="search" name="palabra"  placeholder="Buscar">       
       <input  id="sm" type="submit" name="buscar" value="Buscar">
    </form></center>
</div>

</div>
</div>
<br><br><br><br><br><br><br><br><br>



</body>
</html>