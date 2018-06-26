<?php  include("seguridad.php"); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Editar Perfil</title>

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
  echo'
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

            $nombre=$reg['nombres'];
            $apellido=$reg['apellidos'];
						echo"
						<tr>
						<th>Numero Documento</th>
						<td>".$reg['documento_usuario']."</td>
					    </tr>

					    <tr>
						<th>Tipo Documento</th>
						<td>".$reg['tipo_documento']."</td>
					    </tr>"

              ."<form action='editar_perfil1.php' method='POST'>".
					    "<tr>
						<th>Nombres</th>
						<td>"."<input size='35' type='text' name='nombres' value='$nombre'>"."</td>
					    </tr>

					    <tr>
						<th>Apellidos</th>
						<td>"."<input size='35' type='text' name='apellidos' value='$apellido'>"."</td>
					    </tr>

					    <tr>
						<th>Correo</th>
						<td>"."<input size='35' type='email' name='correo' value=".$reg['correo']."></td>
					    </tr>

              "."<input type='hidden' name='documento' value='$documento'>".
               "<tr>
                <td class='le' align='center' colspan='2'><input class='bt1' type='submit' name='bt' value='Guardar Cambios'>
          </tr>

					     </form>";
					    mysqli_close($conexion);
					    ?>
					</thead>
				</table>
        <br><br>

        <table class="table table-bordered table-striped table-hover table-reponsive">
          
          <thead class="thead-dark">

            <tr>
              <th>Contraseña</th>
              <td class='le'><div class="container">
  <!-- Trigger the modal with a button -->
  <button type="button" id='ip' data-toggle="modal" data-target="#myModal">Editar Contraseña</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <br><br><br><br><br><br><br><br>
      <div class="modal-content mol">

        <div class="modal-header">
           <h4 class="modal-title"><b>Cambio de contraseña</b></h4>
           <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <div class="modal-body">

         <center><form action="editar_contrasena.php" method="POST">
         <h6><b>Ingrese su Contraseña actual</b></h6>
         <input size="35" class="ar" type="password" name="contrasena" placeholder="Contraseña Actual"><br><br>
         
         <h6><b>Ingrese su Contraseña nueva</b></h6>
         <input size="35" class="ar" type="password" name="contrasena1" placeholder="contraseña nueva"><br><br>
         
         <h6><b>Confirme su contraseña nueva</b></h6>
         <input size="35" class="ar" type="password" name="contrasena2" placeholder="confirmar contraseña"><br><br>

         <input type="hidden" name="documento" value="$documento">

         <input id='ip' type="submit" name="Cambiar Contraseña" value="Cambiar Contraseña">
         
         </form></center>

       </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        </div>

      </div>
      
    </div>
  </div>

</td>
</tr>


		</div>
    </div>
	</div>
	

<script src="../js/jquery.min.js"></script>
<script src="../js/bootstrap.min.js"></script>

</body>
</html>