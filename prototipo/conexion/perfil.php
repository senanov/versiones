<?php  include("seguridad.php"); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Perfil</title>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	
<link rel="stylesheet" href="../css/bootstrap.min.css">
<link rel="stylesheet" href="../css/estilos.css">

</head>
<body>
<?php

$documento=$_SESSION["documento1"];

$conexion=mysqli_connect("127.0.0.1","root","","proyecto") or die ("problemas en la conexion");

$consulta=mysqli_query($conexion,"select * from registro where documento_usuario = '$documento'")or die ("problema en el registro". mysqli_error());
	
$reg=mysqli_fetch_array($consulta);

include("../html/banner1.php");		
?>

<?php
if ($_SESSION['roles']=='invitado') 
{
  include('../html/menu_invitado.php');
}

elseif ($_SESSION['roles']=='Apoyo Administrativo') 
{
  include('../html/menu_apoyo.php');
}

else
{
 echo '<nav class="navbar navbar-expand-lg ">
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
 
</nav>';
}
?>
<br><br> 

<div class="container">
	<div class="row">
		<div class="col">
			<table class="table table-bordered table-striped table-hover table-reponsive">
					
					<thead class="thead-dark">
						<?php
						echo"
						<tr>
						<th>Numero Documento</th>
						<td>".$reg['documento_usuario']."</td>
					    </tr>

					    <tr>
						<th>Tipo Documento</th>
						<td>".$reg['tipo_documento']."</td>
					    </tr>

					    <tr>
						<th>Nombres</th>
						<td>".$reg['nombres']."</td>
					    </tr>

					    <tr>
						<th>Apellidos</th>
						<td>".$reg['apellidos']."</td>
					    </tr>

					    <tr>
						<th>Correo</th>
						<td>".$reg['correo']."</td>
					    </tr>";
					    mysqli_close($conexion);
					    ?>
					</thead>
          <tr>
            <td class="le" align="center" colspan="2"><a href="editar_perfil.php"><input class="bt1" type="button" name="bt" value="Actualizar Información"></a>
          </tr>
				</table>

		</div>

	</div>
	
</div>


<script src="../js/jquery.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
</body>
</html>