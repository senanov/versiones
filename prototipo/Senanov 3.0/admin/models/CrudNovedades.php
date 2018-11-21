<?php
require_once "conexion.php";

class CrudNovedades extends Conexion
{
	#Consulta reingreso y desercion
	#----------------------------------------------
	public static function consultarNovedadesModel($documento,$usuario,$novedad,$tipo_documento)
	{
		$stmt = Conexion::conectar()-> prepare("SELECT * FROM $usuario INNER JOIN $novedad ON $usuario.documento_usuario=novedad.documento INNER JOIN tipo_documento ON usuario.tipo_documento=tipo_documento.id_tipo INNER JOIN ficha ON novedad.numero_ficha=ficha.codigo_ficha INNER JOIN jornada ON ficha.id_jornada=jornada.id_jornada INNER JOIN trimestre ON ficha.id_trimestre=trimestre.id_trimestre INNER JOIN sede ON ficha.id_sede=sede.id_sede INNER JOIN programa ON ficha.id_programa=programa.id INNER JOIN tipo_novedad ON novedad.id_tipo_novedad=tipo_novedad.id_novedad  WHERE documento = :doc");

		$stmt -> bindparam(":doc",	$documento, PDO::PARAM_STR);
		$stmt -> execute();
		return $stmt -> fetch();

		$stmt -> close();
	}

	#ELIMINAR UN REGISTRO
	#==========================================================================================================
    
    #Eliminar registros de las novedades
	#----------------------------------------------
	public static function eliminarNovedadesModel($id,$novedad,$usuario)
	{
		$stmt = Conexion::conectar()-> prepare("DELETE $novedad, $usuario FROM novedad INNER JOIN usuario WHERE novedad.documento=usuario.documento_usuario AND novedad.documento LIKE :id");

		$stmt -> bindparam(":id",$id,PDO::PARAM_STR);

		if($stmt -> execute())
		{
		return "exito";
		}

		else
		{
			return "error";
		}

		$stmt -> close();
	}
     
    #actualizar datos de las novedades
    #--------------------------------------------------
	public static function actualizarNovedadModel($datos,$tabla)
	{
		$stmt = Conexion::conectar()-> prepare("UPDATE $tabla INNER JOIN usuario ON novedad.documento=usuario.documento_usuario SET usuario.primer_nombre=:nombre1, usuario.segundo_nombre=:nombre2, usuario.primer_apellido=:apellido1, usuario.segundo_apellido=:apellido2, usuario.tipo_documento=:tdocumento, novedad.grupo=:grupo  WHERE novedad.documento = :id");

		$stmt -> bindparam(":nombre1",		$datos["nombre1"],PDO::PARAM_STR);
		$stmt -> bindparam(":nombre2",		$datos["nombre2"],PDO::PARAM_STR);
		$stmt -> bindparam(":apellido1",	$datos["apellido1"],PDO::PARAM_STR);
		$stmt -> bindparam(":apellido2",	$datos["apellido2"],PDO::PARAM_STR);
		$stmt -> bindparam(":tdocumento",	$datos["tdocumento"],PDO::PARAM_STR);
		$stmt -> bindparam(":grupo",		$datos["grupo"],PDO::PARAM_STR);
		$stmt -> bindparam(":id",			$datos["id"],PDO::PARAM_STR);

		if($stmt -> execute())
		{
			return "exito";
		}

		else
		{
			return "error";
		}
		
		
		$stmt -> close();
	}

	//consulta de usuarios
	//-------------------------------------
	public static function consultaUsuariosModel($documento,$tabla)
	{
		$stmt = Conexion::conectar()-> prepare("SELECT * FROM $tabla INNER JOIN tipo_documento on usuario.tipo_documento=tipo_documento.id_tipo INNER JOIN rol ON usuario.rol=rol.id_rol INNER JOIN estado ON usuario.estado=estado.id_estado WHERE documento_usuario = :doc");
//SELECT * FROM $tabla INNER JOIN tipo_documento on usuario.tipo_documento=tipo_documento.id_tipo INNER JOIN rol ON usuario.rol=rol.id_rol INNER JOIN estado ON usuario.estado=estado.id_estado WHERE documento_usuario = :doc
		$stmt -> bindparam(":doc",$documento, PDO::PARAM_STR);
		$stmt -> execute();
		return $stmt -> fetch();

		$stmt -> close();	
	}

	//actualizar datos del usuario
	//--------------------------------------
	public static function actualizarconsultaUsuariosModel($datos,$tabla)
	{
		$stmt = Conexion::conectar()-> prepare("UPDATE $tabla SET documento_usuario = :ndocumento, tipo_documento = :tdocumento, rol = :rol, estado = :estado WHERE usuario.documento_usuario = :id");

		
		$stmt -> bindparam(":ndocumento",	$datos["ndocumento"],PDO::PARAM_STR);
		$stmt -> bindparam(":tdocumento",	$datos["tdocumento"],PDO::PARAM_STR);
		$stmt -> bindparam(":rol",		    $datos["rol"],PDO::PARAM_STR);
		$stmt -> bindparam(":estado",		$datos["estado"],PDO::PARAM_STR);
		$stmt -> bindparam(":id",		    $datos["id"],PDO::PARAM_STR);
		
		if($stmt -> execute()) 
		{
			return "exito";
		}

		else
		{
			return "error";
		}
	
		$stmt -> close();
	}

	//validar programas
	//-----------------------------------
	public static function consultarProgramasModel($id,$tabla)
	{
		$stmt = Conexion::conectar()-> prepare("SELECT * FROM $tabla INNER JOIN tipo_programa ON programa.id_tipo_programa=tipo_programa.id_programa WHERE id = :id");
		$stmt -> bindparam(":id",      $id);
		//$stmt -> bindparam(":programa",   $idPrograma);
		$stmt -> execute();
		return $stmt -> fetch();
	}

	//tabla de los programas
	//--------------------------------------
	public static function tablaProgramasModels($programa,$tipo_programa)
	{
        $stmt = Conexion::conectar()-> prepare("SELECT * from $programa INNER JOIN $tipo_programa ON $programa.id_tipo_programa=$tipo_programa.id_programa");
		$stmt -> execute();
		return $stmt -> fetchAll();

		$stmt -> close();
	}

	//insertar programas de formacion
	//---------------------------------------
	public static function insertarProgramasModel($datos,$idPrograma,$tabla)
	{

		$stmt = Conexion::conectar()-> prepare("INSERT INTO $tabla  VALUES (NULL, :idPrograma ,:datos)");        

        $stmt -> bindparam(":datos", 		$datos,PDO::PARAM_STR);
        $stmt -> bindparam(":idPrograma",	$idPrograma,PDO::PARAM_STR);

        if($stmt -> execute()) 
        {
			return "exito";
		}

		else
		{
			return "error";
		}
		
		$stmt -> close();
	}

	//actualizar los programas de formacion
	//-----------------------------------------------
	public static function actualizarProgramasModel($datos,$tabla)
	{

		$stmt = Conexion::conectar()-> prepare("UPDATE $tabla SET nombre_programa  = :programa WHERE $tabla.id = :id");

		$stmt -> bindparam(":programa", $datos["programa"],PDO::PARAM_STR);
		$stmt -> bindparam(":id", $datos["id"],PDO::PARAM_STR);


       if($stmt -> execute()) {
			return "exito";
		}else{

			return "error";
		}

		$stmt -> close();
	}

	#perfil usuario
	#---------------------------------------------
	public static function perfilUsuarioModel($documento,$usuario,$tipo_documento)
	{
		$stmt = Conexion::conectar()-> prepare("SELECT * from $usuario INNER JOIN $tipo_documento ON $usuario.tipo_documento = $tipo_documento.id_tipo where documento_usuario = :docUsuario");

		$stmt -> bindparam(":docUsuario",$documento,PDO::PARAM_STR);
		$stmt -> execute();
		return $stmt -> fetch();
		$stmt -> close();
	}


	#actualizar datos Desercion
    #--------------------------------------------------
	public static function actualizarPerfilModel($datos,$usuario)
	{
		$stmt = Conexion::conectar()-> prepare("UPDATE $usuario SET primer_nombre = :nombre1, segundo_nombre = :nombre2, primer_apellido = :apellido1,  segundo_apellido = :apellido2, correo = :correo WHERE $usuario.documento_usuario = :id");

		$stmt -> bindparam(":nombre1",		$datos["nombre1"],PDO::PARAM_STR);
		$stmt -> bindparam(":nombre2",		$datos["nombre2"],PDO::PARAM_STR);
		$stmt -> bindparam(":apellido1",	$datos["apellido1"],PDO::PARAM_STR);
		$stmt -> bindparam(":apellido2",	$datos["apellido2"],PDO::PARAM_STR);
		$stmt -> bindparam(":correo",		$datos["correo"],PDO::PARAM_STR);
		$stmt -> bindparam(":id",			$datos["id"],PDO::PARAM_STR);

		if($stmt -> execute())
		{
			return "exito";
		}

		else
		{
			return "error";
		}

		$stmt -> close();
	}

	#validar contraseña
	#-----------------------------------------------------
	public static function validarContrasena($documento,$tabla)
	{
		 $stmt = Conexion::conectar()-> prepare("SELECT * FROM $tabla WHERE documento_usuario = :documento");

		 $stmt -> bindparam(":documento",		$documento,PDO::PARAM_STR);
		 $stmt -> execute();
		 return $stmt -> fetch();

		 $stmt -> close();		 
	}

	#actualiza contraseña
	#-------------------------------------------------------
	public static function actualizarContrasenaModel($datos,$tabla,$documento)
	{
		$stmt = Conexion::conectar()-> prepare("UPDATE $tabla SET contrasena = :contra WHERE documento_usuario = :id");
		
		$stmt -> bindparam(":contra",			$datos["contrasena1"],PDO::PARAM_STR);
		$stmt -> bindparam(":id",				$documento,PDO::PARAM_STR);

		if ($stmt -> execute()) 
		{
			return "exito";
		}

		else
		{
			return "error";
		}

	}
	


} //clase