<?php
class Novedades
{

	#Consulta reingreso
	#----------------------------------------------
	public function consultarReingresoController()
	{
		if (isset($_POST["docReingreso"])) 
		{
			$documento=$_POST["docReingreso"];
			$respuesta= CrudNovedades::consultarReingresoModel($documento,"f_reingreso");
			if ($respuesta["numero_documento"]==$_POST["docReingreso"]) 
			{

			$tabla = Tabla::reingreso_desercion($respuesta,"edReingreso","reingreso","Reingreso");
			echo $tabla;
				
			}

			else 
			{
				echo '<div class="alert alert-danger alert-dismissible">
	            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
	            <strong>Aviso:</strong> El aprendiz no presenta esta novedad </div><br>';
			}	
		}
	}

	#Consulta cambio de jornada
	#----------------------------------------------
	public function consultarCambioController()
	{
		if (isset($_POST["docCambio"])) 
		{
			$documento=$_POST["docCambio"];
			$respuesta= CrudNovedades::consultarCambioModel($documento,"f_c_jornada");
			if ($respuesta["numero_documento"]==$_POST["docCambio"]) 
			{

			$tabla = Tabla::cambioJornada_aplazamiento_retiro($respuesta,"edCambio_jornada","cambio_jornada","Cambio de Jornada");
			echo $tabla;
				
			}

			else 
			{
				echo '<div class="alert alert-danger alert-dismissible">
	            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
	            <strong>Aviso:</strong> El aprendiz no presenta esta novedad </div><br>';
			}	
		}
	}

	#Consulta traslados
	#----------------------------------------------
	public function consultarTrasladoController()
	{
		if (isset($_POST["docTraslado"])) 
		{
			$documento=$_POST["docTraslado"];
			$respuesta= CrudNovedades::consultarTrasladoModel($documento,"f_traslado");
			if ($respuesta["numero_documento"]==$_POST["docTraslado"]) 
			{

			$tabla = Tabla::traslado($respuesta,"edTraslado","traslado","Traslado");
			echo $tabla;
				
			}

			else 
			{
				echo '<div class="alert alert-danger alert-dismissible">
	            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
	            <strong>Aviso:</strong> El aprendiz no presenta esta novedad </div><br>';
			}	
		}
	}

	#Consulta retiros
	#----------------------------------------------
	public function consultarRetiroController()
	{
		if (isset($_POST["docRetiro"])) 
		{
			$documento=$_POST["docRetiro"];
			$respuesta= CrudNovedades::consultarTrasladoModel($documento,"f_retiro");
			if ($respuesta["numero_documento"]==$_POST["docRetiro"]) 
			{

			$tabla = Tabla::cambioJornada_aplazamiento_retiro($respuesta,"edRetiro","retiro","Retiro Voluntario");
			echo $tabla;
				
			}

			else 
			{
				echo '<div class="alert alert-danger alert-dismissible">
	            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
	            <strong>Aviso:</strong> El aprendiz no presenta esta novedad </div><br>';
			}	
		}
	}

	#Consulta aplazamiento
	#----------------------------------------------
	public function consultarAplazamientoController()
	{
		if (isset($_POST["docAplazamiento"])) 
		{
			$documento=$_POST["docAplazamiento"];
			$respuesta= CrudNovedades::consultarAplazamientoModel($documento,"f_aplazamiento");
			if ($respuesta["numero_documento"]==$_POST["docAplazamiento"]) 
			{

			$tabla = Tabla::cambioJornada_aplazamiento_retiro($respuesta,"edAplazamiento","aplazamiento","Aplazamiento");
			echo $tabla;
				
			}

			else 
			{
				echo '<div class="alert alert-danger alert-dismissible">
	            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
	            <strong>Aviso:</strong> El aprendiz no presenta esta novedad </div><br>';
			}	
		}
	}

	#Consulta desercion
	#----------------------------------------------
	public function consultarDesercionController()
	{
		if (isset($_POST["docDesercion"])) 
		{
			$documento=$_POST["docDesercion"];
			$respuesta= CrudNovedades::consultarDesercionModel($documento,"f_desercion");
			if ($respuesta["numero_documento"]==$_POST["docDesercion"]) 
			{

			$tabla = Tabla::reingreso_desercion($respuesta,"edDesercion","desercion","Desercion");
			echo $tabla;
				
			}

			else 
			{
				echo '<div class="alert alert-danger alert-dismissible">
	            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
	            <strong>Aviso:</strong> El aprendiz no presenta esta novedad </div><br>';
			}	
		}
	}

	#ELIMINAR UN REGISTRO
	#==========================================================================================================

	#Eliminar reingreso
	#----------------------------------------------
	public function eliminarReingresoController()
	{
		if (isset($_GET["doc"])) 
		{
			$doc=$_GET["doc"];
			$respuesta = CrudNovedades::eliminarReingresoModel($doc,"f_reingreso");

			if ($respuesta=="exito") 
			{
				echo '<meta http-equiv="refresh" content="8; url=reingreso">';
				$_SESSION["borrado"]=1;
			}

			if ($respuesta=="error")
			{
				echo "no se pudo eliminar el registro";
			}
		}
	}

	#Eliminar Cambio de Jornada
	#----------------------------------------------
	public function eliminarCambioJornadaController()
	{
		if (isset($_GET["doc"])) 
		{
			$doc=$_GET["doc"];
			$respuesta = CrudNovedades::eliminarCambioJornadaModel($doc,"f_c_jornada");

			if ($respuesta=="exito") 
			{
				echo '<meta http-equiv="refresh" content="8; url=cambio_jornada">';
				$_SESSION["borrado"]=1;
			}

			if ($respuesta=="error")
			{
				echo "no se pudo eliminar el registro";
			}
		}
	}

	#Eliminar traslado
	#----------------------------------------------
	public function eliminarTrasladoController()
	{
		if (isset($_GET["doc"])) 
		{
			$doc=$_GET["doc"];
			$respuesta = CrudNovedades::eliminarTrasladoModel($doc,"f_traslado");

			if ($respuesta=="exito") 
			{
				echo '<meta http-equiv="refresh" content="8; url=traslado">';
				$_SESSION["borrado"]=1;
			}

			if ($respuesta=="error")
			{
				echo "no se pudo eliminar el registro";
			}
		}
	}


	#Eliminar retiro
	#----------------------------------------------
	public function eliminarRetiroController()
	{
		if (isset($_GET["doc"])) 
		{
			$doc=$_GET["doc"];
			$respuesta = CrudNovedades::eliminarRetiroModel($doc,"f_retiro");

			if ($respuesta=="exito") 
			{
				echo '<meta http-equiv="refresh" content="8; url=retiro">';
				$_SESSION["borrado"]=1;
			}

			if ($respuesta=="error")
			{
				echo "no se pudo eliminar el registro";
			}
		}
	}

	#Eliminar Aplazamiento
	#----------------------------------------------
	public function eliminarAplazamientoController()
	{
		if (isset($_GET["doc"])) 
		{
			$doc=$_GET["doc"];
			$respuesta = CrudNovedades::eliminarAplazamientoModel($doc,"f_aplazamiento");

			if ($respuesta=="exito") 
			{
				echo '<meta http-equiv="refresh" content="8; url=aplazamiento">';
				$_SESSION["borrado"]=1;
			}

			if ($respuesta=="error")
			{
				echo "no se pudo eliminar el registro";
			}
		}
	}

	#Eliminar Desercion
	#----------------------------------------------
	public function eliminarDesercionController()
	{
		if (isset($_GET["doc"])) 
		{
			$doc=$_GET["doc"];
			$respuesta = CrudNovedades::eliminarDesercionModel($doc,"f_desercion");

			if ($respuesta=="exito") 
			{
				echo '<meta http-equiv="refresh" content="8; url=desercion">';
				$_SESSION["borrado"]=1;
			}

			if ($respuesta=="error")
			{
				echo "no se pudo eliminar el registro";
			}
		}
	}

	#ACTUALIZAR UN REGISTRO
	#==========================================================================================================
    
    #llamado de la tabla con los datos que seran editados reingreso
    #--------------------------------------------------------------------
    public function editarReingresoController()
	{
		
			$documento=$_GET["idEditar"];
			$respuesta= CrudNovedades::consultarReingresoModel($documento,"f_reingreso");
		

			$tabla = Tabla::editar_reingreso_desercion($respuesta,"Reingreso" );
			echo $tabla;				
		
	}
    
    #actualizar datos reingreso
    #--------------------------------------------------
	public function actualizarReingresoController()
	{
		
			if (isset($_POST["nombres"]))
			 {
			 	$datos = array('nombres' =>$_POST["nombres"],'apellidos' =>$_POST["apellidos"],
			 	               'tdocumento' =>$_POST["tdocumento"],'ndocumento' =>$_POST["ndocumento"],
			 	               'grupo' =>$_POST["grupo"],'ficha' =>$_POST["ficha"],
			 	               'trimestre' =>$_POST["trimestre"],'jornada' =>$_POST["jornada"],
			 	               'programa' =>$_POST["programa"],'sede' =>$_POST["sede"],
			 	               'fecha' =>$_POST["fecha"],'id' =>$_POST["id"]);

			 	$respuesta = Crudnovedades::actualizarReingresoModel($datos,"f_reingreso");

			 	if ($respuesta=="exito") {
			 		
			 		$_SESSION['doc']=$_POST["ndocumento"];			 		
			 		echo '<meta http-equiv="refresh" content="0; url=reingreso">';
			 	}else{

			 		echo 'no se realizo la actualizacion';
			 		
			 	}

								
							
			 }				
		
	}

	#llamado de la tabla con los datos que seran editados Cambio Jornada
    #--------------------------------------------------------------------
    public function editarCambioJornadaController()
	{
		
			$documento=$_GET["idEditar"];
			$respuesta= CrudNovedades::consultarCambioModel($documento,"f_c_jornada");
		

			$tabla = Tabla::editar_cambioJornada_aplazamiento_retiro($respuesta,"Cambio De Jornada" );
			echo $tabla;				
		
	}

	#actualizar datos Cambio Jornada
    #--------------------------------------------------
	public function actualizarCambioJornadaController()
	{
		
			if (isset($_POST["nombres"]))
			 {
			 	$datos = array('nombres' =>$_POST["nombres"],'apellidos' =>$_POST["apellidos"],
			 	               'tdocumento' =>$_POST["tdocumento"],'ndocumento' =>$_POST["ndocumento"],
			 	               'grupo' =>$_POST["grupo"],'ficha' =>$_POST["ficha"],
			 	               'trimestre' =>$_POST["trimestre"],'jornada' =>$_POST["jornada"],
			 	               'programa' =>$_POST["programa"],'sede' =>$_POST["sede"],
			 	               'fecha' =>$_POST["fecha"],'motivo' =>$_POST["motivo"],'id' =>$_POST["id"]);

			 	$respuesta = Crudnovedades::actualizarCambioJornadaModel($datos,"f_c_jornada");

			 	if ($respuesta=="exito") {
			 		
			 		$_SESSION['doc']=$_POST["ndocumento"];			 		
			 		echo '<meta http-equiv="refresh" content="0; url=cambio_jornada">';
			 	}else{

			 		echo 'no se realizo la actualizacion';
			 		
			 	}

								
							
			 }				
		
	}

	#llamado de la tabla con los datos que seran editados Traslado
    #--------------------------------------------------------------------
    public function editarTrasladoController()
	{
		
			$documento=$_GET["idEditar"];
			$respuesta= CrudNovedades::consultarTrasladoModel($documento,"f_traslado");		

			$tabla = Tabla::editar_traslado($respuesta,"Traslado");
			echo $tabla;				
		
	}

	#actualizar datos Traslado
    #--------------------------------------------------
	public function actualizarTrasladoController()
	{
		
			if (isset($_POST["nombres"]))
			 {
			 	$datos = array('nombres' =>$_POST["nombres"],'apellidos' =>$_POST["apellidos"],
			 	               'tdocumento' =>$_POST["tdocumento"],'ndocumento' =>$_POST["ndocumento"],
			 	               'grupo' =>$_POST["grupo"],'ficha' =>$_POST["ficha"],
			 	               'trimestre' =>$_POST["trimestre"],'jornada' =>$_POST["jornada"],
			 	               'centroActual' =>$_POST["centroActual"],'centroTraslado' =>$_POST["centroTraslado"],
			 	               'ciudadActual' =>$_POST["ciudadActual"],'ciudadTraslado' =>$_POST["ciudadTraslado"],
			 	               'programa' =>$_POST["programa"],'sede' =>$_POST["sede"],
			 	               'fecha' =>$_POST["fecha"],'motivo' =>$_POST["motivo"],'id' =>$_POST["id"]);

			 	$respuesta = Crudnovedades::actualizarTrasladoModel($datos,"f_traslado");

			 	if ($respuesta=="exito") {
			 		
			 		$_SESSION['doc']=$_POST["ndocumento"];			 		
			 		echo '<meta http-equiv="refresh" content="0; url=traslado">';
			 	}else{

			 		echo 'no se realizo la actualizacion';
			 		
			 	}

								
							
			 }				
		
	}

	#llamado de la tabla con los datos que seran editados Retiro
    #--------------------------------------------------------------------
    public function editarRetiroController()
	{
		
			$documento=$_GET["idEditar"];
			$respuesta= CrudNovedades::consultarRetiroModel($documento,"f_retiro");
		

			$tabla = Tabla::editar_cambioJornada_aplazamiento_retiro($respuesta,"Retiro Voluntario" );
			echo $tabla;				
		
	}

	#actualizar datos Retiro
    #--------------------------------------------------
	public function actualizarRetiroController()
	{
		
			if (isset($_POST["nombres"]))
			 {
			 	$datos = array('nombres' =>$_POST["nombres"],'apellidos' =>$_POST["apellidos"],
			 	               'tdocumento' =>$_POST["tdocumento"],'ndocumento' =>$_POST["ndocumento"],
			 	               'grupo' =>$_POST["grupo"],'ficha' =>$_POST["ficha"],
			 	               'trimestre' =>$_POST["trimestre"],'jornada' =>$_POST["jornada"],
			 	               'programa' =>$_POST["programa"],'sede' =>$_POST["sede"],
			 	               'fecha' =>$_POST["fecha"],'motivo' =>$_POST["motivo"],'id' =>$_POST["id"]);

			 	$respuesta = Crudnovedades::actualizarRetiroModel($datos,"f_retiro");

			 	if ($respuesta=="exito") {
			 		
			 		$_SESSION['doc']=$_POST["ndocumento"];			 		
			 		echo '<meta http-equiv="refresh" content="0; url=retiro">';
			 	}else{

			 		echo 'no se realizo la actualizacion';
			 		
			 	}

								
							
			 }				
		
	}

	#llamado de la tabla con los datos que seran editados Aplazamiento
    #--------------------------------------------------------------------
    public function editarAplazamientoController()
	{
		
			$documento=$_GET["idEditar"];
			$respuesta= CrudNovedades::consultarAplazamientoModel($documento,"f_aplazamiento");
		

			$tabla = Tabla::editar_cambioJornada_aplazamiento_retiro($respuesta,"Aplazamiento" );
			echo $tabla;				
		
	}

	#actualizar datos Aplazamiento
    #--------------------------------------------------
	public function actualizarAplazamientoController()
	{
		
			if (isset($_POST["nombres"]))
			 {
			 	$datos = array('nombres' =>$_POST["nombres"],'apellidos' =>$_POST["apellidos"],
			 	               'tdocumento' =>$_POST["tdocumento"],'ndocumento' =>$_POST["ndocumento"],
			 	               'grupo' =>$_POST["grupo"],'ficha' =>$_POST["ficha"],
			 	               'trimestre' =>$_POST["trimestre"],'jornada' =>$_POST["jornada"],
			 	               'programa' =>$_POST["programa"],'sede' =>$_POST["sede"],
			 	               'fecha' =>$_POST["fecha"],'motivo' =>$_POST["motivo"],'id' =>$_POST["id"]);

			 	$respuesta = Crudnovedades::actualizarAplazamientoModel($datos,"f_aplazamiento");

			 	if ($respuesta=="exito") {
			 		
			 		$_SESSION['doc']=$_POST["ndocumento"];			 		
			 		echo '<meta http-equiv="refresh" content="0; url=aplazamiento">';
			 	}else{

			 		echo 'no se realizo la actualizacion';
			 		
			 	}

								
							
			 }				
		
	}


    #llamado de la tabla con los datos que seran editados Desercion
    #--------------------------------------------------------------------
    public function editarDesercionController()
	{
		
			$documento=$_GET["idEditar"];
			$respuesta= CrudNovedades::consultarDesercionModel($documento,"f_desercion");
		

			$tabla = Tabla::editar_reingreso_desercion($respuesta,"Deserción" );
			echo $tabla;				
		
	}
    
    #actualizar datos Desercion
    #--------------------------------------------------
	public function actualizarDesercionController()
	{
		
			if (isset($_POST["nombres"]))
			 {
			 	$datos = array('nombres' =>$_POST["nombres"],'apellidos' =>$_POST["apellidos"],
			 	               'tdocumento' =>$_POST["tdocumento"],'ndocumento' =>$_POST["ndocumento"],
			 	               'grupo' =>$_POST["grupo"],'ficha' =>$_POST["ficha"],
			 	               'trimestre' =>$_POST["trimestre"],'jornada' =>$_POST["jornada"],
			 	               'programa' =>$_POST["programa"],'sede' =>$_POST["sede"],
			 	               'fecha' =>$_POST["fecha"],'id' =>$_POST["id"]);

			 	$respuesta = Crudnovedades::actualizarDesercionModel($datos,"f_desercion");

			 	if ($respuesta=="exito") {
			 		
			 		$_SESSION['doc']=$_POST["ndocumento"];			 		
			 		echo '<meta http-equiv="refresh" content="0; url=desercion">';
			 	}else{

			 		echo 'no se realizo la actualizacion';
			 		
			 	}

								
							
			 }				
		
	}
    
    #consulta general
    #--------------------------------------------------
	public function consultaGeneralController()
	{
		if (isset($_POST["docUsuario"])) 
		{
			$doc=$_POST["docUsuario"];
		$reingreso=Crudnovedades::consultarReingresoModel($doc,"f_reingreso");
		$cambioJornada=CrudNovedades::consultarCambioModel($doc,"f_c_jornada");
		$traslado=CrudNovedades::consultarTrasladoModel($doc,"f_traslado");
		$retiro=CrudNovedades::consultarRetiroModel($doc,"f_retiro");
		$aplazamiento=CrudNovedades::consultarAplazamientoModel($doc,"f_aplazamiento");
		$desercion=CrudNovedades::consultarDesercionModel($doc,"f_desercion");

            $cont=0;
		    if ($reingreso!="") 
		    {

			$tabla=Tabla::reingreso_desercion($reingreso,"edReingreso","reingreso","Reingreso");
			echo $tabla;
			$cont++;			
		   }
		    if ($cambioJornada!="") 
		   {
            $tabla=Tabla::cambioJornada_aplazamiento_retiro($cambioJornada,"edCambio_jornada","cambio_jornada","Cambio De Jornada");
            echo $tabla;
            $cont++;
		   }
		    if ($traslado!="") 
		   {
            $tabla = Tabla::traslado($traslado,"edTraslado","traslado","Traslado");
			echo $tabla;
			$cont++;
		   }

		    if ($retiro!="") 
		   {
            $tabla = Tabla::cambioJornada_aplazamiento_retiro($retiro,"edRetiro","retiro","Retiro Voluntario");
			echo $tabla;
			$cont++;
		   }

		    if ($aplazamiento!="") 
		   {
           $tabla = Tabla::cambioJornada_aplazamiento_retiro($aplazamiento,"edAplazamiento","aplazamiento","Aplazamiento");
			echo $tabla;
			$cont++;
		   }

		    if ($desercion!="") 
		   {
           $tabla = Tabla::reingreso_desercion($desercion,"edDesercion","desercion","Deserción");
			echo $tabla;
			$cont++;
		   }
		   if($cont==0)
		   {
		   	echo '<div class="alert alert-danger alert-dismissible">
	            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
	            <strong>Aviso:</strong> El aprendiz no presenta Ninguna novedad </div><br>';

		   }
		   


		}

	}

   

	#consultar perfil
	#-------------------------------------------
	public function perfilUsuarioController()
	{
		$usuario = $_SESSION["docPerfil"];
		$respuesta = Crudnovedades::perfilUsuarioModel($usuario,"registro");

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
    	$documento=$_GET["idPerfil"];
    	$respuesta=CrudNovedades::perfilUsuarioModel($documento,"registro");

    	$tabla = Tabla::editarPerfil($respuesta);
    	echo $tabla;
    }

    #actualizar datos perfil
    #--------------------------------------------------
    public function actualizarPerfilController()
    {
    	if (isset($_POST["nombres"])) 
    	{
    		$datos = array('nombres' => $_POST["nombres"], 'apellidos' => $_POST["apellidos"], 'correo' => $_POST["correo"],
    			'id' => $_POST['id']);

    		$respuesta = CrudNovedades::actualizarPerfilModel($datos,"registro");

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
    	$documento=$_SESSION["docPerfil"];
    	$tabla = Tabla::editarContrasena();
    	echo $tabla;

    	if (isset($_POST["contrasena"]))
    	{
    		$contrasena=$_POST["contrasena"];
    		$validar=CrudNovedades::validarContrasena($documento,"registro");

    		if($validar["contrasena"]==$contrasena)
    		{
    			$datos = array('contrasena' => $_POST["contrasena"], 'contrasena1' => $_POST["contrasena1"], 'contrasena2' => $_POST["contrasena2"]);

    			if ($datos["contrasena1"]==$datos["contrasena2"]) 
    			{
    				$respuesta = CrudNovedades::actualizarContrasenaModel($datos,"registro",$documento);

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

