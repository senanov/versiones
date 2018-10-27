<?php

class Tabla 
{
	#TABLAS PARA LEER DATOS
	#--------------------------------------------------------------------------------------------
	
	public static function reingreso_desercion($respuesta){

    return '<table class="table table-bordered table-striped table-hover table-reponsive">
					
					   <thead class="thead-dark">

					   <tr class="bg-info"">
						<th>Tipo De Novedad</th>
						<td>'.$respuesta["tipo_novedad"].'</td>
					    </tr>
												
						<tr class="bg-info"">
						<th>Primer Nombre</th>
						<td>'.$respuesta["primer_nombre"].'</td>
					    </tr>

					    <tr class="bg-info"">
						<th>Segundo Nombre</th>
						<td>'.$respuesta["segundo_nombre"].'</td>
					    </tr>

					    <tr class="bg-info">
						<th>Primer Apellido</th>
						<td>'.$respuesta["primer_apellido"].'</td>
					    </tr>

					    <tr class="bg-info">
						<th>Segundo Apellido</th>
						<td>'.$respuesta["segundo_apellido"].'</td>
					    </tr>

					    <tr class="bg-info">
						<th>Tipo Documento</th>
						<td>'.$respuesta["tipo"].'</td>
					    </tr>

					    <tr class="bg-info">
						<th>Numero Documento</th>
						<td>'.$respuesta["documento"].'</td>
					    </tr>

					    <tr class="bg-info">
						<th>Grupo</th>
						<td>'.$respuesta["grupo"].'</td>
					    </tr>

					    <tr class="bg-info">
						<th>Ficha</th>
						<td>'.$respuesta["numero_ficha"].'</td>
					    </tr>
					   
					    <tr class="bg-info">
						<th>Trimestre</th>
						<td>'.$respuesta["numero_trimestre"].'</td>
					    </tr>

					    <tr class="bg-info">
						<th>Jornada</th>
						<td>'.$respuesta["tipo_jornada"].'</td>
					    </tr>

					    <tr class="bg-info">
						<th>Programa de Formación</th>
						<td>'.$respuesta["nombre_programa"].'</td>
					    </tr>

					    <tr class="bg-info">
						<th>Sede</th>
						<td>'.$respuesta["nombre_sede"].'</td>
					    </tr>

					    <tr class="bg-info">
						<th>Fecha Novedad</th>
						<td>'.$respuesta["fecha"].'</td>
					    </tr>
						</thead>
					  </table>';
    }

    public static function cambioJornada_aplazamiento_retiro($respuesta){

    return '<table class="table table-bordered table-striped table-hover table-reponsive">
					
					   <thead class="thead-dark">

					   <tr class="bg-info"">
						<th>Tipo De Novedad</th>
						<td>'.$respuesta["tipo_novedad"].'</td>
					    </tr>
												
						<tr class="bg-info"">
						<th>Primer Nombre</th>
						<td>'.$respuesta["primer_nombre"].'</td>
					    </tr>

					    <tr class="bg-info"">
						<th>Segundo Nombre</th>
						<td>'.$respuesta["segundo_nombre"].'</td>
					    </tr>

					    <tr class="bg-info">
						<th>Primer Apellido</th>
						<td>'.$respuesta["primer_apellido"].'</td>
					    </tr>

					    <tr class="bg-info">
						<th>Segundo Apellido</th>
						<td>'.$respuesta["segundo_apellido"].'</td>
					    </tr>

					    <tr class="bg-info">
						<th>Tipo Documento</th>
						<td>'.$respuesta["tipo"].'</td>
					    </tr>

					    <tr class="bg-info">
						<th>Numero Documento</th>
						<td>'.$respuesta["documento"].'</td>
					    </tr>

					    <tr class="bg-info">
						<th>Grupo</th>
						<td>'.$respuesta["grupo"].'</td>
					    </tr>

					    <tr class="bg-info">
						<th>Ficha</th>
						<td>'.$respuesta["numero_ficha"].'</td>
					    </tr>
					   
					    <tr class="bg-info">
						<th>Trimestre</th>
						<td>'.$respuesta["numero_trimestre"].'</td>
					    </tr>

					    <tr class="bg-info">
						<th>Jornada</th>
						<td>'.$respuesta["tipo_jornada"].'</td>
					    </tr>

					    <tr class="bg-info">
						<th>Programa de Formación</th>
						<td>'.$respuesta["nombre_programa"].'</td>
					    </tr>

					    <tr class="bg-info">
						<th>Sede</th>
						<td>'.$respuesta["nombre_sede"].'</td>
					    </tr>

					    <tr class="bg-info">
						<th>Fecha Novedad</th>
						<td>'.$respuesta["fecha"].'</td>
					    </tr>

					    <tr class="bg-info">
						<th>Motivo Novedad</th>
						<td>'.$respuesta["motivo"].'</td>
					    </tr
						</thead>
					  </table>';
    }

  public static function traslado($respuesta){

  return '<table class="table table-bordered table-striped table-hover table-reponsive">
					
					   <thead class="thead-dark">

					   <tr class="bg-info"">
						<th>Tipo De Novedad</th>
						<td>'.$respuesta["tipo_novedad"].'</td>
					    </tr>
												
						<tr class="bg-info"">
						<th>Primer Nombre</th>
						<td>'.$respuesta["primer_nombre"].'</td>
					    </tr>

					    <tr class="bg-info"">
						<th>Segundo Nombre</th>
						<td>'.$respuesta["segundo_nombre"].'</td>
					    </tr>

					    <tr class="bg-info">
						<th>Primer Apellido</th>
						<td>'.$respuesta["primer_apellido"].'</td>
					    </tr>

					    <tr class="bg-info">
						<th>Segundo Apellido</th>
						<td>'.$respuesta["segundo_apellido"].'</td>
					    </tr>

					    <tr class="bg-info">
						<th>Tipo Documento</th>
						<td>'.$respuesta["tipo"].'</td>
					    </tr>

					    <tr class="bg-info">
						<th>Numero Documento</th>
						<td>'.$respuesta["documento"].'</td>
					    </tr>

					    <tr class="bg-info">
						<th>Grupo</th>
						<td>'.$respuesta["grupo"].'</td>
					    </tr>

					    <tr class="bg-info">
						<th>Ficha</th>
						<td>'.$respuesta["numero_ficha"].'</td>
					    </tr>
					   
					    <tr class="bg-info">
						<th>Trimestre</th>
						<td>'.$respuesta["numero_trimestre"].'</td>
					    </tr>

					    <tr class="bg-info">
						<th>Jornada</th>
						<td>'.$respuesta["tipo_jornada"].'</td>
					    </tr>

					    <tr class="bg-info">
						<th>Centro Actual</th>
						<td>'.$respuesta["centro_actual"].'</td>
					    </tr>

					    <tr class="bg-info">
						<th>Centro Traslado</th>
						<td>'.$respuesta["centro_traslado"].'</td>
					    </tr>

					    <tr class="bg-info">
						<th>Ciudad Actual</th>
						<td>'.$respuesta["ciudad_actual"].'</td>
					    </tr>

					    <tr class="bg-info">
						<th>Ciduad Traslado</th>
						<td>'.$respuesta["ciudad_traslado"].'</td>
					    </tr>

					    <tr class="bg-info">
						<th>Programa de Formación</th>
						<td>'.$respuesta["nombre_programa"].'</td>
					    </tr>

					    <tr class="bg-info">
						<th>Sede</th>
						<td>'.$respuesta["nombre_sede"].'</td>
					    </tr>

					    <tr class="bg-info">
						<th>Fecha Novedad</th>
						<td>'.$respuesta["fecha"].'</td>
					    </tr>

					    <tr class="bg-info">
						<th>motivo</th>
						<td>'.$respuesta["motivo"].'</td>
					    </tr>
						</thead>
					  </table>';
    }

    public static function consultarUsuarios($reg)
    {
    return '<table class="table table-bordered table-striped table-hover table-reponsive">
					
					   <thead class="thead-dark">

					   <tr class="bg-info"">
						<th>Numero Documento</th>
						<td>'.$reg['documento_usuario'].'</td>
					    </tr>

					    <tr class="bg-info"">
						<th>Tipo Documento</th>
						<td>'.$reg['tipo'].'</td>
					    </tr>

					    <tr class="bg-info"">
						<th>Primer Nombre</th>
						<td>'.$reg['primer_nombre'].'</td>
					    </tr>

					    <tr class="bg-info"">
						<th>Segundo Nombre</th>
						<td>'.$reg['segundo_nombre'].'</td>
					    </tr>

					    <tr class="bg-info"">
						<th>Primer Apellidos</th>
						<td>'.$reg['primer_apellido'].'</td>
					    </tr>

					    <tr class="bg-info"">
						<th>Segundo Apellido</th>
						<td>'.$reg['segundo_apellido'].'</td>
					    </tr>

					    <tr class="bg-info"">
						<th>Correo</th>
						<td>'.$reg['correo'].'</td>
					    </tr>

					    <tr class="bg-info"">
						<th>Rol</th>
						<td>'.$reg['tipo_rol'].'</td>
					    </tr>	

					    <tr class="bg-info"">
						<th>Estado</th>
						<td>'.$reg['estado_actual'].'</td>
					    </tr>			

                        

						</thead>

                 		<tr>
              	 		<td class="td" colspan="2"><center><a href="index.php?action=edUsuarios&docEditar='.$reg['documento_usuario'].'"><input id="ip" type="button" value="Editar"></center></a></td>
         	 			</tr>
					  </table>';
    }

    #TABLAS PARA ACTUALIZAR DATOS
	#-----------------------------------------------------------------------------------------
	
	public static function actualizarConsultarUsuarios($reg)
    {
    	$ndocumento=$reg['documento_usuario'];
    	$rol="<option value=".$reg['id_rol']." selected>".$reg['tipo_rol']."</option>";
    	$estado="<option value=".$reg['estado']." selected>".$reg['estado_actual']."</option>";
    	$tdocumento="<option value=".$reg['tipo_documento']." selected>".$reg['tipo']."</option>";
    
     

    	
    	
    return "<table class='table table-bordered table-striped table-hover table-reponsive'>
					
					   <thead class='thead-dark'>

					   <tr class='bg-info'>
						<th>Numero Documento</th>
						<td><input type='text' name='ndocumento' value=".$reg['documento_usuario']."></td>
					    </tr>

					    <tr class='bg-info'>
						<th>Tipo Documento</th>
						<td><select name='tdocumento' class='et'>
						".$tdocumento."
				      	<option value='1'>Cédula de Ciudadanía</option>
				      	<option value='2'>Tarjeta de Identidad</option>
				      	<option value='3'>Cédula de Extranjeria</option>   
				  	   </select> 
						</td>
					    </tr>

					    <tr class='bg-info'>
						<th>Primer Nombre</th>
						<td>".$reg['primer_nombre']."</td>
					    </tr>

					    <tr class='bg-info'>
						<th>Segundo Nombre</th>
						<td>".$reg['segundo_nombre']."</td>
					    </tr>

					    <tr class='bg-info'>
						<th>Primer Apellidos</th>
						<td>".$reg['primer_apellido']."</td>
					    </tr>

					    <tr class='bg-info'>
						<th>Segundo Apellido</th>
						<td>".$reg['segundo_apellido']."</td>
					    </tr>

					    <tr class='bg-info'>
						<th>Correo</th>
						<td>".$reg['correo']."</td>
					    </tr>


					    <tr class='bg-info'>
						<th>Rol</th>
						<td><select name='rol' class='et'>
						".$rol."
                        <option value='3'>Invitado</option>
                        <option value='2'>Apoyo Administrativo</option>
              			<option value='1'>Administrador</option>
              			</select></td>
					    </tr>

					    <tr class='bg-info'>
						<th>Estado</th>
						<td><select name='estado' class='et'>
						".$estado."                        
                        <option value='1'>Activo</option>
              			<option value='2'>Inactivo</option>
              			</select></td>
					    </tr>					
                         <input type='hidden' name='id' value='$ndocumento'>

						</thead>

                 		<tr>
              	 		<td class='le' align='center' colspan='2'><input class='bt1' type='submit' name='bt' value='Guardar Cambios'></td>
         	 			</tr>
					  </table>";

    }
 
		#tabla del perfil

		public static function Perfil($respuesta,$editar)
	{
		return'<div class="container">
				 <div class="row">
				   <div class="col">
					<table class="table table-bordered table-striped table-hover table-reponsive">
					
					<thead class="thead-dark">
						
						<tr>
						<th>Numero Documento</th>
						<td>'.$respuesta["documento_usuario"].'</td>
					    </tr>

					    <tr>
						<th>Tipo Documento</th>
						<td>'.$respuesta["tipo"].'</td>
					    </tr>

					    <tr>
						<th>Nombres</th>
						<td>'.$respuesta["primer_nombre"].' '.$respuesta["segundo_nombre"].'</td>
					    </tr>

					    <tr>
						<th>Apellidos</th>
						<td>'.$respuesta["primer_apellido"].' '.$respuesta["segundo_apellido"].'</td>
					    </tr>

					    <tr>
						<th>Correo</th>
						<td>'.$respuesta["correo"].'</td>
					    </tr>
					    
					</thead>
		          		<tr>
		            	<td class="le" align="center" colspan="2"><a href="index.php?action='.$editar.'&idPerfil='.$respuesta["documento_usuario"].'"><input class="bt1" type="button" name="bt" value="Actualizar Información"></a>
          				</tr>
					</table>
			   </div>
		     </div>
		   </div>';
	}


	public static function editarPerfil($respuesta)
		{
			$documento_usuario=$respuesta["documento_usuario"];
			$tipo_documento=$respuesta["tipo"];
		    $nombre1=$respuesta["primer_nombre"];
		    $nombre2=$respuesta["segundo_nombre"];
		    $apellido1=$respuesta["primer_apellido"];
		    $apellido2=$respuesta["segundo_apellido"];
		    $contrasena=$respuesta["contrasena"];
		    $correo=$respuesta["correo"];

		    return "<table class='table table-bordered table-striped table-hover table-reponsive'>
					
					<thead class='thead-dark'>
						
						<tr>
						<th>Numero Documento</th>
						<td>$documento_usuario</td>
					    </tr>

					    <tr>
						<th>Tipo Documento</th>
						<td>$tipo_documento</td>
					    </tr>

              		  <form method='POST'>
					    <tr>
						<th>Primer Nombre</th>
						<td><input size='35' type='text' name='nombre1' value='$nombre1'></td>
					    </tr>

					    <tr>
						<th>Segundo Nombre</th>
						<td><input size='35' type='text' name='nombre2' value='$nombre2'></td>
					    </tr>

					    <tr>
						<th>Primer Apellido</th>
						<td><input size='35' type='text' name='apellido1' value='$apellido1'></td>
					    </tr>

					    <tr>
						<th>Segundo Apellido</th>
						<td><input size='35' type='text' name='apellido2' value='$apellido2'></td>
					    </tr>

					    <tr>
						<th>Correo</th>
						<td><input size='35' type='email' name='correo' value='$correo'></td>
					    </tr>

              		   <input type='hidden' name='id' value='$documento_usuario'>
               		   <tr>
                	   <td class='le' align='center' colspan='2'><input class='bt1' type='submit' name='bt' value='Guardar Cambios'>
          			   </tr>
					  </form>
					</thead>
					</table>";  			
		}
	
		public static function editarContrasena()
		{
				return	'<br>

			        <table class="table table-bordered table-striped table-hover table-reponsive">
			          
			          <thead class="thead-dark">

			            <tr>
			              <th>Contraseña</th>
			              <td class="le"><div class="container">
			  <!-- Trigger the modal with a button -->
			  <button type="button" id="ip" data-toggle="modal" data-target="#myModal">Editar Contraseña</button>
			  </td>
			</tr>
			  <!-- Modal -->
			  <div class="modal fade" id="myModal" role="dialog">
			    <div class="modal-dialog">
			    
			      <!-- Modal content-->
			      <br><br><br><br><br><br><br><br>
			      <div class="modal-content  columna1">

			        <div class="modal-header">
			           <h4 class="modal-title"><b>Cambio de contraseña</b></h4>
			           <button type="button" class="close" data-dismiss="modal">&times;</button>
			        </div>

			        <div class="modal-body">

			         <center>
			         <form method="POST">
			         <h6><b>Ingrese su Contraseña actual</b></h6>
			         <input size="35" class="ar" type="password" name="contrasena" placeholder="Contraseña Actual" required><br><br>
			         
			         <h6><b>Ingrese su Contraseña nueva</b></h6>
			         <input size="35" class="ar" type="password" name="contrasena1" placeholder="contraseña nueva" required><br><br>
			         
			         <h6><b>Confirme su contraseña nueva</b></h6>
			         <input size="35" class="ar" type="password" name="contrasena2" placeholder="confirmar contraseña" required><br><br>

			         <input id="ip" type="submit" name="Cambiar Contraseña" value="Cambiar Contraseña">
			         
			         </form>
			         </center>

			       </div>

			        <div class="modal-footer">
			          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
			        </div>
			      </table>
			      </div>
			      
			    </div>
			  </div>';
		}
}#clase