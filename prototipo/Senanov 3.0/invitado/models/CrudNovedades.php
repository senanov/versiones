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

	#actualizar datos perfil
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