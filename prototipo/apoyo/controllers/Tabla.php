<?php


class Tabla 
{

	#TABLAS PARA LEER DATOS
	#--------------------------------------------------------------------------------------------
	
	public static function reingreso_desercion($respuesta,$editar,$Eliminar,$novedad){

    return '<table class="table table-bordered table-striped table-hover table-reponsive">
					
					   <thead class="thead-dark">

					   <tr class="bg-info"">
						<th>Tipo De Novedad</th>
						<td>'.$novedad.'</td>
					    </tr>
												
						<tr class="bg-info"">
						<th>Nombres</th>
						<td>'.$respuesta["nombre"].'</td>
					    </tr>

					    <tr class="bg-info">
						<th>Apellidos</th>
						<td>'.$respuesta["apellidos"].'</td>
					    </tr>

					    <tr class="bg-info">
						<th>Tipo Documento</th>
						<td>'.$respuesta["documento"].'</td>
					    </tr>

					    <tr class="bg-info">
						<th>Numero Documento</th>
						<td>'.$respuesta["numero_documento"].'</td>
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
						<td>'.$respuesta["trimestre"].'</td>
					    </tr>

					    <tr class="bg-info">
						<th>Jornada</th>
						<td>'.$respuesta["jornada"].'</td>
					    </tr>

					    <tr class="bg-info">
						<th>Programa de Formación</th>
						<td>'.$respuesta["programa_formacion"].'</td>
					    </tr>

					    <tr class="bg-info">
						<th>Sede</th>
						<td>'.$respuesta["sede"].'</td>
					    </tr>

					    <tr class="bg-info">
						<th>Fecha Novedad</th>
						<td>'.$respuesta["fecha"].'</td>
					    </tr>


						</thead>

                 		<tr>
              	 		<td class="td" colspan="2"><center><a href="index.php?action='.$editar.'&idEditar='.$respuesta["numero_documento"].'"><input id="ip" type="button" value="Editar"></a> | <a href="index.php?action='.$Eliminar.'&doc='.$respuesta["numero_documento"].'"><input id="ipe" type="button" value="Eliminar"></a></center></td>
         	 			</tr>
					  </table>';
    }

    public static function cambioJornada_aplazamiento_retiro($respuesta,$editar,$eliminar,$novedad){

    return '<table class="table table-bordered table-striped table-hover table-reponsive">
					
					   <thead class="thead-dark">

					   <tr class="bg-info"">
						<th>Tipo De Novedad</th>
						<td>'.$novedad.'</td>
					    </tr>
												
						<tr class="bg-info"">
						<th>Nombres</th>
						<td>'.$respuesta["nombre"].'</td>
					    </tr>

					    <tr class="bg-info">
						<th>Apellidos</th>
						<td>'.$respuesta["apellidos"].'</td>
					    </tr>

					    <tr class="bg-info">
						<th>Tipo Documento</th>
						<td>'.$respuesta["documento"].'</td>
					    </tr>

					    <tr class="bg-info">
						<th>Numero Documento</th>
						<td>'.$respuesta["numero_documento"].'</td>
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
						<td>'.$respuesta["trimestre"].'</td>
					    </tr>

					    <tr class="bg-info">
						<th>Jornada</th>
						<td>'.$respuesta["jornada"].'</td>
					    </tr>

					    <tr class="bg-info">
						<th>Programa de Formación</th>
						<td>'.$respuesta["programa_formacion"].'</td>
					    </tr>

					    <tr class="bg-info">
						<th>Sede</th>
						<td>'.$respuesta["sede"].'</td>
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

                 		<tr>
              	 		<td class="td" colspan="2"><center><a href="index.php?action='.$editar.'&idEditar='.$respuesta["numero_documento"].'"><input id="ip" type="button" value="Editar"></a> | <a href="index.php?action='.$eliminar.'&doc='.$respuesta["numero_documento"].'"><input id="ipe" type="button" value="Eliminar"></a></center></td>
         	 			</tr>
					  </table>';

    }

  public static function traslado($respuesta,$editar,$eliminar,$novedad){

  return '<table class="table table-bordered table-striped table-hover table-reponsive">
					
					   <thead class="thead-dark">

					   <tr class="bg-info"">
						<th>Tipo De Novedad</th>
						<td>'.$novedad.'</td>
					    </tr>
												
						<tr class="bg-info"">
						<th>Nombres</th>
						<td>'.$respuesta["nombre"].'</td>
					    </tr>

					    <tr class="bg-info">
						<th>Apellidos</th>
						<td>'.$respuesta["apellidos"].'</td>
					    </tr>

					    <tr class="bg-info">
						<th>Tipo Documento</th>
						<td>'.$respuesta["documento"].'</td>
					    </tr>

					    <tr class="bg-info">
						<th>Numero Documento</th>
						<td>'.$respuesta["numero_documento"].'</td>
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
						<td>'.$respuesta["trimestre"].'</td>
					    </tr>

					    <tr class="bg-info">
						<th>Jornada</th>
						<td>'.$respuesta["jornada"].'</td>
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
						<td>'.$respuesta["programa_formacion"].'</td>
					    </tr>

					    <tr class="bg-info">
						<th>Sede</th>
						<td>'.$respuesta["sede"].'</td>
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

                 		<tr>
              	 		<td class="td" colspan="2"><center><a href="index.php?action='.$editar.'&idEditar='.$respuesta["numero_documento"].'"><input id="ip" type="button" value="Editar"></a> | <a href="index.php?action='.$eliminar.'&doc='.$respuesta["numero_documento"].'"><input id="ipe" type="button" value="Eliminar"></a></center></td>
         	 			</tr>
					  </table>';

    }

    
	#TABLAS PARA ACTUALIZAR DATOS NOVEDADES
	#------------------------------------------------------------------------------------
	public static function editar_reingreso_desercion($respuesta,$novedad){
	$nombres=$respuesta["nombre"];
	$apellidos=$respuesta["apellidos"];
    $tdocumento=$respuesta['documento'];
    $ndocumento=$respuesta["numero_documento"];
    $grupo=$respuesta["grupo"];
    $ficha=$respuesta["numero_ficha"];
    $trimestre=$respuesta["trimestre"];
    $jornada=$respuesta["jornada"];
    $programa=$respuesta["programa_formacion"];
    $sede=$respuesta["sede"];
    $fecha=$respuesta["fecha"];

    return "<table class='table table-bordered table-striped table-hover table-reponsive'>
					
					   <thead class='thead-dark'>

					   <tr class='bg-info'>
						<th>Tipo De Novedad</th>
						<td>$novedad</td>
					    </tr>
					 						
						<tr class='bg-info'>
						<th>Nombres</th>
						<td><input size='35' type='text' name='nombres' value='$nombres'></td>
					    </tr>

					    <tr class='bg-info'>
						<th>Apellidos</th>
						<td><input size='35' type='text' name='apellidos' value='$apellidos'></td>
					    </tr>

					    <tr class='bg-info'>
						<th>Tipo Documento</th>
						<td><input size='35' type='text' name='tdocumento' value='$tdocumento'></td>
					    </tr>

					    <tr class='bg-info'>
						<th>Numero Documento</th>
						<td><input size='35' type='text' name='ndocumento' value='$ndocumento'></td>
					    </tr>

					    <tr class='bg-info'>
						<th>Grupo</th>
						<td><input size='35' type='text' name='grupo' value='$grupo'></td>
					    </tr>

					    <tr class='bg-info'>
						<th>Ficha</th>
						<td><input size='35' type='text' name='ficha' value='$ficha'></td>
					    </tr>
					   
					    <tr class='bg-info'>
						<th>Trimestre</th>
						<td><input size='35' type='text' name='trimestre' value='$trimestre'></td>
					    </tr>

					    <tr class='bg-info'>
						<th>Jornada</th>
						<td><input size='35' type='text' name='jornada' value='$jornada'></td>
					    </tr>

					    <tr class='bg-info'>
						<th>Programa de Formación</th>
						<td><input size='35' type='text' name='programa' value='$programa'></td>
					    </tr>

					    <tr class='bg-info'>
						<th>Sede</th>
						<td><input size='35' type='text' name='sede' value='$sede'></td>
					    </tr>

					    <tr class='bg-info'>
						<th>Fecha Novedad</th>
						<td><input size='35' type='text' name='fecha' value='$fecha'></td>
					    </tr>

						<input type='hidden' name='id' value='$ndocumento'>

						</thead>

                 		<tr>
              	 		<td class='le' align='center' colspan='2'><input class='bt1' type='submit' name='bt' value='Guardar Cambios'></td>
         	 			</tr>
					  </table>";
    }



    public static function editar_cambioJornada_aplazamiento_retiro($respuesta,$novedad){

    $nombres=$respuesta["nombre"];
	$apellidos=$respuesta["apellidos"];
    $tdocumento=$respuesta['documento'];
    $ndocumento=$respuesta["numero_documento"];
    $grupo=$respuesta["grupo"];
    $ficha=$respuesta["numero_ficha"];
    $trimestre=$respuesta["trimestre"];
    $jornada=$respuesta["jornada"];
    $programa=$respuesta["programa_formacion"];
    $sede=$respuesta["sede"];
    $fecha=$respuesta["fecha"];
    $motivo=$respuesta["motivo"];

    return "<table class='table table-bordered table-striped table-hover table-reponsive'>
					
					   <thead class='thead-dark'>

					   <tr class='bg-info'>
						<th>Tipo De Novedad</th>
						<td>$novedad</td>
					    </tr>
					 						
						<tr class='bg-info'>
						<th>Nombres</th>
						<td><input size='35' type='text' name='nombres' value='$nombres'></td>
					    </tr>

					    <tr class='bg-info'>
						<th>Apellidos</th>
						<td><input size='35' type='text' name='apellidos' value='$apellidos'></td>
					    </tr>

					    <tr class='bg-info'>
						<th>Tipo Documento</th>
						<td><input size='35' type='text' name='tdocumento' value='$tdocumento'></td>
					    </tr>

					    <tr class='bg-info'>
						<th>Numero Documento</th>
						<td><input size='35' type='text' name='ndocumento' value='$ndocumento'></td>
					    </tr>

					    <tr class='bg-info'>
						<th>Grupo</th>
						<td><input size='35' type='text' name='grupo' value='$grupo'></td>
					    </tr>

					    <tr class='bg-info'>
						<th>Ficha</th>
						<td><input size='35' type='text' name='ficha' value='$ficha'></td>
					    </tr>
					   
					    <tr class='bg-info'>
						<th>Trimestre</th>
						<td><input size='35' type='text' name='trimestre' value='$trimestre'></td>
					    </tr>

					    <tr class='bg-info'>
						<th>Jornada</th>
						<td><input size='35' type='text' name='jornada' value='$jornada'></td>
					    </tr>

					    <tr class='bg-info'>
						<th>Programa de Formación</th>
						<td><input size='35' type='text' name='programa' value='$programa'></td>
					    </tr>

					    <tr class='bg-info'>
						<th>Sede</th>
						<td><input size='35' type='text' name='sede' value='$sede'></td>
					    </tr>

					    <tr class='bg-info'>
						<th>Fecha Novedad</th>
						<td><input size='35' type='text' name='fecha' value='$fecha'></td>
					    </tr>

					    <tr class='bg-info'>
						<th>Motivo</th>
						<td><input size='35' type='text' name='motivo' value='$motivo'></td>
					    </tr>

						<input type='hidden' name='id' value='$ndocumento'>

						</thead>

                 		<tr>
              	 		<td class='le' align='center' colspan='2'><input class='bt1' type='submit' name='bt' value='Guardar Cambios'></td>
         	 			</tr>
					  </table>";

    }

  public static function editar_traslado($respuesta,$novedad){

    $nombres=$respuesta["nombre"];
	$apellidos=$respuesta["apellidos"];
    $tdocumento=$respuesta['documento'];
    $ndocumento=$respuesta["numero_documento"];
    $grupo=$respuesta["grupo"];
    $ficha=$respuesta["numero_ficha"];
    $trimestre=$respuesta["trimestre"];
    $jornada=$respuesta["jornada"];
    $centroActual=$respuesta["centro_actual"];
    $centroTraslado=$respuesta["centro_traslado"];
    $ciudadActual=$respuesta["ciudad_actual"];
    $ciudadTraslado=$respuesta["ciudad_traslado"];
    $programa=$respuesta["programa_formacion"];
    $sede=$respuesta["sede"];
    $fecha=$respuesta["fecha"];
    $motivo=$respuesta["motivo"];

    return "<table class='table table-bordered table-striped table-hover table-reponsive'>
					
					   <thead class='thead-dark'>

					   <tr class='bg-info'>
						<th>Tipo De Novedad</th>
						<td>$novedad</td>
					    </tr>
					 						
						<tr class='bg-info'>
						<th>Nombres</th>
						<td><input size='35' type='text' name='nombres' value='$nombres'></td>
					    </tr>

					    <tr class='bg-info'>
						<th>Apellidos</th>
						<td><input size='35' type='text' name='apellidos' value='$apellidos'></td>
					    </tr>

					    <tr class='bg-info'>
						<th>Tipo Documento</th>
						<td><input size='35' type='text' name='tdocumento' value='$tdocumento'></td>
					    </tr>

					    <tr class='bg-info'>
						<th>Numero Documento</th>
						<td><input size='35' type='text' name='ndocumento' value='$ndocumento'></td>
					    </tr>

					    <tr class='bg-info'>
						<th>Grupo</th>
						<td><input size='35' type='text' name='grupo' value='$grupo'></td>
					    </tr>

					    <tr class='bg-info'>
						<th>Ficha</th>
						<td><input size='35' type='text' name='ficha' value='$ficha'></td>
					    </tr>
					   
					    <tr class='bg-info'>
						<th>Trimestre</th>
						<td><input size='35' type='text' name='trimestre' value='$trimestre'></td>
					    </tr>

					    <tr class='bg-info'>
						<th>Jornada</th>
						<td><input size='35' type='text' name='jornada' value='$jornada'></td>
					    </tr>

					    <tr class='bg-info'>
						<th>Centro Actual</th>
						<td><input size='35' type='text' name='centroActual' value='$centroActual'></td>
					    </tr>

					    <tr class='bg-info'>
						<th>Ciudad Traslado</th>
						<td><input size='35' type='text' name='ciudadTraslado' value='$ciudadTraslado'></td>
					    </tr>

					    <tr class='bg-info'>
						<th>ciudad Actual</th>
						<td><input size='35' type='text' name='ciudadActual' value='$ciudadActual'></td>
					    </tr>

					    <tr class='bg-info'>
						<th>Centro Traslado</th>
						<td><input size='35' type='text' name='centroTraslado' value='$centroTraslado'></td>
					    </tr>

					    <tr class='bg-info'>
						<th>Programa de Formación</th>
						<td><input size='35' type='text' name='programa' value='$programa'></td>
					    </tr>

					    <tr class='bg-info'>
						<th>Sede</th>
						<td><input size='35' type='text' name='sede' value='$sede'></td>
					    </tr>

					    <tr class='bg-info'>
						<th>Fecha Novedad</th>
						<td><input size='35' type='text' name='fecha' value='$fecha'></td>
					    </tr>

					    <tr class='bg-info'>
						<th>Motivo</th>
						<td><input size='35' type='text' name='motivo' value='$motivo'></td>
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
						<td>'.$respuesta["tipo_documento"].'</td>
					    </tr>

					    <tr>
						<th>Nombres</th>
						<td>'.$respuesta["nombres"].'</td>
					    </tr>

					    <tr>
						<th>Apellidos</th>
						<td>'.$respuesta["apellidos"].'</td>
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
			$tipo_documento=$respuesta["tipo_documento"];
		    $nombre=$respuesta['nombres'];
		    $apellido=$respuesta["apellidos"];
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
						<th>Nombres</th>
						<td><input size='35' type='text' name='nombres' value='$nombre'></td>
					    </tr>

					    <tr>
						<th>Apellidos</th>
						<td><input size='35' type='text' name='apellidos' value='$apellido'></td>
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
			      <div class="modal-content">

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


