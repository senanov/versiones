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
				 	$tabla = Tabla::reingreso_desercion($respuesta,"edNovedades","consulta_novedades");
					echo $tabla;
				 }

				 if ($respuesta["id_novedad"] == 1 || $respuesta["id_novedad"] == 3 || $respuesta["id_novedad"] == 5) 
				 {
				 	$tabla = Tabla::cambioJornada_aplazamiento_retiro($respuesta,"edNovedades","consulta_novedades");
				 	echo $tabla;
				 }

				 if ($respuesta["id_novedad"] == 6) 
				 {
				 	$tabla = Tabla::traslado($respuesta,"edNovedades","consulta_novedades");
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

	#ELIMINAR UN REGISTRO
	#==========================================================================================================

	#Eliminar reingreso
	#----------------------------------------------
	public function eliminarNovedadesController()
	{
		if (isset($_GET["doc"])) 
		{
			$doc=strip_tags($_GET["doc"]);
			$respuesta = CrudNovedades::eliminarNovedadesModel($doc,"novedad","usuario");

			if ($respuesta=="exito") 
			{
				$_SESSION["borrado"]=1;
				echo '<meta http-equiv="refresh" content="0; url=consulta_novedades">';
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
    public function editarNovedadesController()
	{
			
			if (isset($_GET["idEditar"]))
		{
			$documento=strip_tags($_GET["idEditar"]);
			$respuesta= CrudNovedades::consultarNovedadesModel($documento,"usuario","novedad","tipo_documento");   

			if ($respuesta["documento"]==$_GET["idEditar"])
			{
				 if ($respuesta["id_novedad"] == 2 || $respuesta["id_novedad"] == 4) 
				 {
				 	$tabla = Tabla::editar_reingreso_desercion($respuesta);
					echo $tabla;	
				 }

				 if ($respuesta["id_novedad"] == 1 || $respuesta["id_novedad"] == 3 || $respuesta["id_novedad"] == 5) 
				 {
				 	$tabla = Tabla::editar_cambioJornada_aplazamiento_retiro($respuesta);
				 	echo $tabla;
				 }

				 if ($respuesta["id_novedad"] == 6) 
				 {
				 	$tabla = Tabla::editar_traslado($respuesta);
				 	echo $tabla;
				 }
			}
		}
	}
    
    #actualizar datos de las novedades
    #--------------------------------------------------
	public function actualizarNovedadController()
	{
			if (isset($_POST["nombre1"]))
			 {
			 	$datos = array('nombre1' =>strip_tags($_POST["nombre1"]), 'nombre2' =>strip_tags($_POST["nombre2"]),
			 		'apellido1' =>strip_tags($_POST["apellido1"]),'apellido2' =>strip_tags($_POST["apellido2"]),
			 	    'tdocumento' =>strip_tags($_POST["tdocumento"]),'grupo' =>strip_tags($_POST["grupo"]), 'id' =>strip_tags($_POST["id"]));

			 	$respuesta = Crudnovedades::actualizarNovedadModel($datos,"novedad");

			 	if ($respuesta=="exito") 
			 	{
			 		$_SESSION['doc']=$_POST["id"];
			 		$_SESSION['borrado']=2;		 		
			 		echo '<meta http-equiv="refresh" content="0; url=consulta_novedades">';
			 	}

			 	else
			 	{
			 		echo 'no se realizo la actualizacion';	
			 	}			
			 }						
	}


    #consultar usuarios
    #--------------------------------------------------
	public function consultaUsuariosController()
	{
		if (isset($_POST["docUsuario"])) 
		{
			$documento=strip_tags($_POST["docUsuario"]);
			$respuesta=CrudNovedades::consultaUsuariosModel($documento,"usuario");
			if ($respuesta["documento_usuario"]==$_POST["docUsuario"]&& $respuesta["rol"]!= 4) 
			{

			$tabla = Tabla::consultarUsuarios($respuesta);
			echo $tabla;
				
			}

			else 
			{
				echo '<div class="alert alert-danger alert-dismissible">
	            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
	            <strong>Aviso:</strong> El Usuario No presenta Registro</div><br>';
			}	
		}
	}

       #Llamada de los datos dentro de los input
       #--------------------------------------------------
		public function editarConsultaUsuariosController()
	   {
			if (isset($_GET["docEditar"])) 
			{
				$documento=strip_tags($_GET["docEditar"]);
				$respuesta=CrudNovedades::consultaUsuariosModel($documento,"usuario");

				$tabla = Tabla::actualizarConsultarUsuarios($respuesta);
				echo $tabla;	
			}
	   }

       #actualizar datos datos del usuario
       #--------------------------------------------------
	   public function actualizarConsultaUsuariosController()
	   {

	   	if (isset($_POST["id"])) 
	   	 {

	   	 $datos= array('ndocumento' =>strip_tags( $_POST["ndocumento"]),'tdocumento' =>strip_tags($_POST["tdocumento"]), 'rol' =>strip_tags($_POST["rol"]),'estado' =>strip_tags($_POST["estado"]),'id' =>strip_tags($_POST["id"]));


	   	  $respuesta = CrudNovedades::actualizarconsultaUsuariosModel($datos,"usuario");

	   	  if ($respuesta=="exito") 
	   	  		{
			 		$_SESSION['doc']=$_POST["ndocumento"];			 		
			 		echo '<meta http-equiv="refresh" content="0; url=consultaUsuarios">';
			 	}

			 	else
			 	{
			 		echo 'no se realizo la actualizacion';	
			 	}	
	   	 }
	    }	    

       #insertar programas
       #--------------------------------------------------
	   public function insertarProgramasController()
	   {
	   	if (isset($_POST["programa"]))
	   	  {
	   	  	$dato=strip_tags($_POST["programa"]);
	   	  	$programa=strip_tags($_POST["tprograma"]);

	   	  	$validar=Crudnovedades::consultarProgramasModel($dato,$programa,"programa");
			if ($validar==false)
		   {
	          $respuesta = Crudnovedades::insertarProgramasModel($dato,$programa,"programa");

	   	  	if ($respuesta=="exito") 
	   	  	 {
	   	  		echo '<div class="alert alert-success alert-dismissible">
		        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		        <strong>Exito! </strong> El Programa se agrego correctamente</div>';
	   	  	 }

	   	  	 else
	   	  	 {
               echo '<div class="alert alert-danger alert-dismissible">
	            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
	            <strong>Aviso:</strong> el programa no se pudo agregar </div><br>';
	   	  	 }
  		   }

  		   else
  		    {
  		    	echo '<div class="alert alert-danger alert-dismissible">
	            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
	            <strong>Aviso:</strong> el programa ya se encuentra registrado </div><br>';
  		    }
	   	  
	   	  }

	   }


	     #consultar programas
       #--------------------------------------------------
        public function tablaProgramasController()
    {
        $respuesta = Crudnovedades::tablaProgramasModels("programa","tipo_programa");
		
		foreach ($respuesta as $fila) 
		{
		    echo '<tr>
		    <td>'.$fila["id"].'</td>
		    <td>'.$fila["programa"].'</td>
		    <td>'.$fila["nombre_programa"].'</td>
		    <td class="td" colspan="2"><center><a href="index.php?action=edPrograma&idprograma='.$fila["id"].'"><input id="ip" type="button" value="Editar"></a></center>
		    </tr>';
		}        
    }

	  #editar programa Tecnico
    #--------------------------------------------------
    public function editarProgramaController()
    {

        if (isset($_GET["idprograma"])) {

            $id        = strip_tags($_GET["idprograma"]);
            $respuesta = Crudnovedades::tablaProgramasModels("programa", "tipo_programa");

            foreach ($respuesta as $fila) {
              if ($fila["id"] == $id) {
                    $tprograma = $fila['programa'];
                    $programa  = $fila['nombre_programa'];
                    echo "<tr class='bg-info'>
	   	 		<td>$id</td>
	   	 		<td>$tprograma</td>
	   	 	      <td><input size='80%' type='text' name='programa' value='$programa'>
	   	 	      <input  type='hidden' name='codigo' value='" . $fila['id'] . "'></td>
	   	 	      <td class='td'><input  type='submit' value='continuar' id='ip'>  | </td></tr>";
                } else {
                    echo '<tr>
		    <td>' . $fila["id"] . '</td>
		    <td>' . $fila["programa"] . '</td>
		    <td>' . $fila["nombre_programa"] . '</td>
		    <td class="td" colspan="2"><center><a href="index.php?action=edPrograma&idprograma=' . $fila["id"] . '"><input id="ip" type="button" value="Editar"></a></center>
		    </tr>';
                }
            }

        }

    }

	   


	    #actualizar programas
       #--------------------------------------------------
       public function actualizarProgramasController()
	   { 

	   	if (isset($_POST["codigo"])) 
	   	{
	   		$datos = array('programa' =>strip_tags($_POST["programa"]) ,'id' =>strip_tags($_POST["codigo"]));
	   	
         	$respuesta = Crudnovedades::actualizarProgramasModel($datos,"programa");

         	if ($respuesta=="exito") {
         		$_SESSION["p"]=1;
         		echo '<meta http-equiv="refresh" content="0; url=tablaProgramas">';
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