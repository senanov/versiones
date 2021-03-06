<?php
class Novedades
{
	#Consultar novedades
	#----------------------------------------------
	public function consultarNovedadesController()
	{
		if (isset($_POST["docNovedad"]))
		{
			$documento=strip_tags($_POST["docNovedad"]);
			$respuesta= CrudNovedades::consultarNovedadesModel($documento,"usuario","novedad","tipo_documento");

			if ($respuesta["documento"]==$_POST["docNovedad"]) 
			{
				 if ($respuesta["id_novedad"] == 2 || $respuesta["id_novedad"] == 4) 
				 {
				 	$tabla = Tabla::reingreso_desercion($respuesta);
					echo $tabla;
				 }

				 if ($respuesta["id_novedad"] == 1 || $respuesta["id_novedad"] == 3 || $respuesta["id_novedad"] == 5) 
				 {
				 	$tabla = Tabla::cambioJornada_aplazamiento_retiro($respuesta);
				 	echo $tabla;
				 }

				 if ($respuesta["id_novedad"] == 6) 
				 {
				 	$tabla = Tabla::traslado($respuesta);
				 	echo $tabla;
				 }
			}

			else
			{
				echo '<div class="alert alert-danger alert-dismissible">
	            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
	            <strong>Aviso:</strong> El aprendiz no presenta esta novedad </div><br>';
			}	
		}
	}

	#consultar perfil
	#-------------------------------------------
	public function perfilUsuarioController()
	{
		$doc_usuario = $_SESSION["docPerfil"];
		$respuesta = Crudnovedades::perfilUsuarioModel($doc_usuario,"usuario","tipo_documento");

		if ($respuesta["documento_usuario"]==$_SESSION["docPerfil"]) 
			{
				$tabla = Tabla::perfil($respuesta,"edPerfil");
				echo $tabla;
			}
	}

	#editar perfil
	#------------------------------------------------
	public function editarPerfilController()
    {
    	$documento=strip_tags($_GET["idPerfil"]);
    	$respuesta=CrudNovedades::perfilUsuarioModel($documento,"usuario","tipo_documento");

    	$tabla = Tabla::editarPerfil($respuesta);
    	echo $tabla;
    }

    #actualizar datos perfil
    #--------------------------------------------------
    public function actualizarPerfilController()
    {
    	if (isset($_POST["nombre1"])) 
    	{
    		$datos = array('nombre1' => strip_tags($_POST["nombre1"]), 'nombre2' => strip_tags($_POST["nombre2"]), 'apellido1' => strip_tags($_POST["apellido1"]), 'apellido2' => strip_tags($_POST["apellido2"]), 'correo' => strip_tags($_POST["correo"]),
    			'id' => strip_tags($_POST['id']));

    		$respuesta = CrudNovedades::actualizarPerfilModel($datos,"usuario");

    		if ($respuesta=="exito") 
    		{
    			$_SESSION["aviso"]=1;
    			echo '<meta http-equiv="refresh" content="0; url=perfil">';
    		}

    		else
    		{
    			echo "No se pudo actualizar el perfil";
    		}
    	}
    }

    #editar contraseña
    #--------------------------------------------------
    public function editarContrasenaController()
    {
    	$doc_usuario=$_SESSION["docPerfil"];
    	$tabla = Tabla::editarContrasena();
    	echo $tabla;

    	if (isset($_POST["contrasena"]))
    	{
    		$encriptar = crypt(strip_tags($_POST["contrasena"]), '$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$');
    		$validar=CrudNovedades::validarContrasena($doc_usuario,"usuario");

    		if($validar["contrasena"]==$encriptar)
    		{
    			$encriptar1 = crypt(strip_tags($_POST["contrasena1"]), '$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$');
    			
    			$datos = array('contrasena1' => strip_tags($encriptar1), 'contrasena2' => strip_tags($_POST["contrasena2"]));

    			if ($_POST['contrasena1']==$_POST["contrasena2"]) 
    			{
    				$respuesta = CrudNovedades::actualizarContrasenaModel($datos,"usuario",$doc_usuario);

    				if ($respuesta=="exito") 
    				{
    					echo '<div class="alert alert-success alert-dismissible exito">
					    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
					    <strong>Exito! </strong>Se ha modificado su contraseña correctamente
					    </div>';
    				}

    				else
    				{
    					echo "No se pudo realizar el cambio de la contraseña";
    				}
    			}

    			else
    			{
    				echo '<div class="alert alert-danger alert-dismissible">
		            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		            <strong>Aviso:</strong>  La Contraseña confirmada no coincide  
		            </div>';
    			}
    		}
    		   			
    		else
    		{
    			echo '<div class="alert alert-danger alert-dismissible exito">
	            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
	            <strong>Aviso:</strong>  La Contraseña Actual  no coincide  
	            </div>';
    		}
    	}
    }
}#clase