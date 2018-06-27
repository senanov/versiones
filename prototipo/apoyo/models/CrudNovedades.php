<?php
require_once "conexion.php";

class CrudNovedades extends Conexion
{
	#Consulta reingreso
	#----------------------------------------------
	public static function consultarReingresoModel($documento,$tabla)
	{
		$stmt = Conexion::conectar()-> prepare("select * from $tabla where numero_documento = :doc");

		$stmt -> bindparam(":doc",$documento, PDO::PARAM_STR);
		$stmt -> execute();
		return $stmt -> fetch();

		$stmt -> close();	
	}

	#Consulta cambio de jornada
	#----------------------------------------------
	public static function consultarCambioModel($documento,$tabla)
	{
		$stmt = Conexion::conectar()-> prepare("select * from $tabla where numero_documento = :doc");
		
		$stmt -> bindparam(":doc",$documento,PDO::PARAM_STR);
		$stmt -> EXECUTE();
		return $stmt -> fetch();

		$stmt -> close();
	}

	#Consulta traslado
	#----------------------------------------------
	public static function consultarTrasladoModel($documento,$tabla)
	{
		$stmt = Conexion::conectar()-> prepare("select * from $tabla where numero_documento = :doc");
		
		$stmt -> bindparam(":doc",$documento,PDO::PARAM_STR);
		$stmt -> EXECUTE();
		return $stmt -> fetch();

		$stmt -> close();
	}

	#Consulta retiros
	#----------------------------------------------
	public static function consultarRetiroModel($documento,$tabla)
	{
		$stmt = Conexion::conectar()-> prepare("select * from $tabla where numero_documento = :doc");
		
		$stmt -> bindparam(":doc",$documento,PDO::PARAM_STR);
		$stmt -> EXECUTE();
		return $stmt -> fetch();

		$stmt -> close();
	}

	#Consulta aplazamiento
	#----------------------------------------------
	public static function consultarAplazamientoModel($documento,$tabla)
	{
		$stmt = Conexion::conectar()-> prepare("select * from $tabla where numero_documento = :doc");
		
		$stmt -> bindparam(":doc",$documento,PDO::PARAM_STR);
		$stmt -> EXECUTE();
		return $stmt -> fetch();

		$stmt -> close();
	}

	#Consulta desercion
	#----------------------------------------------
	public static function consultarDesercionModel($documento,$tabla)
	{
		$stmt = Conexion::conectar()-> prepare("select * from $tabla where numero_documento = :doc");
		
		$stmt -> bindparam(":doc",$documento,PDO::PARAM_STR);
		$stmt -> EXECUTE();
		return $stmt -> fetch();

		$stmt -> close();
	}

	#ELIMINAR UN REGISTRO
	#==========================================================================================================
    
    #Eliminar reingreso
	#----------------------------------------------
	public static function eliminarReingresoModel($id,$tabla)
	{
		$stmt = Conexion::conectar()-> prepare("delete from $tabla where $tabla. numero_documento = :id");
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


	#Eliminar Cambio Jornada
	#----------------------------------------------
	public static function eliminarCambioJornadaModel($id,$tabla)
	{
		$stmt = Conexion::conectar()-> prepare("delete from $tabla where $tabla. numero_documento = :id");
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


	#Eliminar traslado
	#----------------------------------------------
	public static function eliminarTrasladoModel($id,$tabla)
	{
		$stmt = Conexion::conectar()-> prepare("delete from $tabla where $tabla. numero_documento = :id");
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

    #Eliminar retiro
	#----------------------------------------------
	public static function eliminarRetiroModel($id,$tabla)
	{
		$stmt = Conexion::conectar()-> prepare("delete from $tabla where $tabla. numero_documento = :id");
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


	#Eliminar Aplazamiento
	#----------------------------------------------
	public static function eliminarAplazamientoModel($id,$tabla)
	{
		$stmt = Conexion::conectar()-> prepare("delete from $tabla where $tabla. numero_documento = :id");
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


	#Eliminar Desercion
	#----------------------------------------------
	public static function eliminarDesercionModel($id,$tabla)
	{
		$stmt = Conexion::conectar()-> prepare("delete from $tabla where $tabla. numero_documento = :id");
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
     
    #actualizar datos reingreso
    #--------------------------------------------------
	public static function actualizarReingresoModel($datos,$tabla)
	{
		$stmt = Conexion::conectar()-> prepare("UPDATE $tabla SET nombre = :nombres, apellidos = :apellidos, documento = :tdocumento, numero_documento = :ndocumento, grupo = :grupo, numero_ficha = :ficha, trimestre = :trimestre, jornada = :jornada, programa_formacion = :programa, sede = :sede, fecha = :fecha WHERE f_reingreso.numero_documento = :id");

		 

		$stmt -> bindparam(":nombres",		$datos["nombres"],PDO::PARAM_STR);
		$stmt -> bindparam(":apellidos",	$datos["apellidos"],PDO::PARAM_STR);
		$stmt -> bindparam(":tdocumento",	$datos["tdocumento"],PDO::PARAM_STR);
		$stmt -> bindparam(":ndocumento",	$datos["ndocumento"],PDO::PARAM_STR);
		$stmt -> bindparam(":grupo",		$datos["grupo"],PDO::PARAM_STR);
		$stmt -> bindparam(":ficha",		$datos["ficha"],PDO::PARAM_STR);
		$stmt -> bindparam(":trimestre",	$datos["trimestre"],PDO::PARAM_STR);
		$stmt -> bindparam(":jornada",		$datos["jornada"],PDO::PARAM_STR);
		$stmt -> bindparam(":programa",		$datos["programa"],PDO::PARAM_STR);
		$stmt -> bindparam(":sede",			$datos["sede"],PDO::PARAM_STR);
		$stmt -> bindparam(":fecha",		$datos["fecha"],PDO::PARAM_STR);
		$stmt -> bindparam(":id",		    $datos["id"],PDO::PARAM_STR);

		if($stmt -> execute()) {
			return "exito";
		}else{

			return "error";
		}
		
		
		$stmt -> close();
	}

	#actualizar datos Cambio De Jornada
    #--------------------------------------------------
	public static function actualizarCambioJornadaModel($datos,$tabla)
	{
		$stmt = Conexion::conectar()-> prepare("UPDATE $tabla SET nombre = :nombres, apellidos = :apellidos, documento = :tdocumento, numero_documento = :ndocumento, grupo = :grupo, numero_ficha = :ficha, trimestre = :trimestre, jornada = :jornada, programa_formacion = :programa, sede = :sede, fecha = :fecha, motivo = :motivo WHERE $tabla.numero_documento = :id");

		 

		$stmt -> bindparam(":nombres",		$datos["nombres"],PDO::PARAM_STR);
		$stmt -> bindparam(":apellidos",	$datos["apellidos"],PDO::PARAM_STR);
		$stmt -> bindparam(":tdocumento",	$datos["tdocumento"],PDO::PARAM_STR);
		$stmt -> bindparam(":ndocumento",	$datos["ndocumento"],PDO::PARAM_STR);
		$stmt -> bindparam(":grupo",		$datos["grupo"],PDO::PARAM_STR);
		$stmt -> bindparam(":ficha",		$datos["ficha"],PDO::PARAM_STR);
		$stmt -> bindparam(":trimestre",	$datos["trimestre"],PDO::PARAM_STR);
		$stmt -> bindparam(":jornada",		$datos["jornada"],PDO::PARAM_STR);
		$stmt -> bindparam(":programa",		$datos["programa"],PDO::PARAM_STR);
		$stmt -> bindparam(":sede",			$datos["sede"],PDO::PARAM_STR);
		$stmt -> bindparam(":fecha",		$datos["fecha"],PDO::PARAM_STR);
		$stmt -> bindparam(":motivo",		$datos["motivo"],PDO::PARAM_STR);
		$stmt -> bindparam(":id",		    $datos["id"],PDO::PARAM_STR);

		if($stmt -> execute()) {
			return "exito";
		}else{

			return "error";
		}
		
		
		$stmt -> close();
	}


	#actualizar datos Traslado
    #--------------------------------------------------
	public static function actualizartrasladoModel($datos,$tabla)
	{
		$stmt = Conexion::conectar()-> prepare("UPDATE $tabla SET nombre = :nombres, apellidos = :apellidos, documento = :tdocumento, numero_documento = :ndocumento, grupo = :grupo, numero_ficha = :ficha, trimestre = :trimestre, jornada = :jornada, centro_actual = :centro_actual,centro_traslado = :centro_traslado,ciudad_actual = :ciudad_actual,ciudad_traslado = :ciudad_traslado, programa_formacion = :programa, sede = :sede, fecha = :fecha, motivo = :motivo WHERE $tabla.numero_documento = :id");

		 

		$stmt -> bindparam(":nombres",		$datos["nombres"],PDO::PARAM_STR);
		$stmt -> bindparam(":apellidos",	$datos["apellidos"],PDO::PARAM_STR);
		$stmt -> bindparam(":tdocumento",	$datos["tdocumento"],PDO::PARAM_STR);
		$stmt -> bindparam(":ndocumento",	$datos["ndocumento"],PDO::PARAM_STR);
		$stmt -> bindparam(":grupo",		$datos["grupo"],PDO::PARAM_STR);
		$stmt -> bindparam(":ficha",		$datos["ficha"],PDO::PARAM_STR);
		$stmt -> bindparam(":trimestre",	$datos["trimestre"],PDO::PARAM_STR);
		$stmt -> bindparam(":jornada",		$datos["jornada"],PDO::PARAM_STR);
		$stmt -> bindparam(":centro_actual",$datos["centroActual"],PDO::PARAM_STR);
		$stmt -> bindparam(":centro_traslado",$datos["centroTraslado"],PDO::PARAM_STR);
		$stmt -> bindparam(":ciudad_actual",$datos["ciudadActual"],PDO::PARAM_STR);
		$stmt -> bindparam(":ciudad_traslado",$datos["ciudadTraslado"],PDO::PARAM_STR);
		$stmt -> bindparam(":programa",		$datos["programa"],PDO::PARAM_STR);
		$stmt -> bindparam(":sede",			$datos["sede"],PDO::PARAM_STR);
		$stmt -> bindparam(":fecha",		$datos["fecha"],PDO::PARAM_STR);
		$stmt -> bindparam(":motivo",		$datos["motivo"],PDO::PARAM_STR);
		$stmt -> bindparam(":id",		    $datos["id"],PDO::PARAM_STR);

		if($stmt -> execute()) {
			return "exito";
		}else{

			return "error";
		}
		
		
		$stmt -> close();
	}


	#actualizar datos De Retiro
    #--------------------------------------------------
	public static function actualizarRetiroModel($datos,$tabla)
	{
		$stmt = Conexion::conectar()-> prepare("UPDATE $tabla SET nombre = :nombres, apellidos = :apellidos, documento = :tdocumento, numero_documento = :ndocumento, grupo = :grupo, numero_ficha = :ficha, trimestre = :trimestre, jornada = :jornada, programa_formacion = :programa, sede = :sede, fecha = :fecha, motivo = :motivo WHERE $tabla.numero_documento = :id");

		 

		$stmt -> bindparam(":nombres",		$datos["nombres"],PDO::PARAM_STR);
		$stmt -> bindparam(":apellidos",	$datos["apellidos"],PDO::PARAM_STR);
		$stmt -> bindparam(":tdocumento",	$datos["tdocumento"],PDO::PARAM_STR);
		$stmt -> bindparam(":ndocumento",	$datos["ndocumento"],PDO::PARAM_STR);
		$stmt -> bindparam(":grupo",		$datos["grupo"],PDO::PARAM_STR);
		$stmt -> bindparam(":ficha",		$datos["ficha"],PDO::PARAM_STR);
		$stmt -> bindparam(":trimestre",	$datos["trimestre"],PDO::PARAM_STR);
		$stmt -> bindparam(":jornada",		$datos["jornada"],PDO::PARAM_STR);
		$stmt -> bindparam(":programa",		$datos["programa"],PDO::PARAM_STR);
		$stmt -> bindparam(":sede",			$datos["sede"],PDO::PARAM_STR);
		$stmt -> bindparam(":fecha",		$datos["fecha"],PDO::PARAM_STR);
		$stmt -> bindparam(":motivo",		$datos["motivo"],PDO::PARAM_STR);
		$stmt -> bindparam(":id",		    $datos["id"],PDO::PARAM_STR);

		if($stmt -> execute()) {
			return "exito";
		}else{

			return "error";
		}
		
		
		$stmt -> close();
	}


	#actualizar datos Cambio De Aplazamiento
    #--------------------------------------------------
	public static function actualizarAplazamientoModel($datos,$tabla)
	{
		$stmt = Conexion::conectar()-> prepare("UPDATE $tabla SET nombre = :nombres, apellidos = :apellidos, documento = :tdocumento, numero_documento = :ndocumento, grupo = :grupo, numero_ficha = :ficha, trimestre = :trimestre, jornada = :jornada, programa_formacion = :programa, sede = :sede, fecha = :fecha, motivo = :motivo WHERE $tabla.numero_documento = :id");

		 

		$stmt -> bindparam(":nombres",		$datos["nombres"],PDO::PARAM_STR);
		$stmt -> bindparam(":apellidos",	$datos["apellidos"],PDO::PARAM_STR);
		$stmt -> bindparam(":tdocumento",	$datos["tdocumento"],PDO::PARAM_STR);
		$stmt -> bindparam(":ndocumento",	$datos["ndocumento"],PDO::PARAM_STR);
		$stmt -> bindparam(":grupo",		$datos["grupo"],PDO::PARAM_STR);
		$stmt -> bindparam(":ficha",		$datos["ficha"],PDO::PARAM_STR);
		$stmt -> bindparam(":trimestre",	$datos["trimestre"],PDO::PARAM_STR);
		$stmt -> bindparam(":jornada",		$datos["jornada"],PDO::PARAM_STR);
		$stmt -> bindparam(":programa",		$datos["programa"],PDO::PARAM_STR);
		$stmt -> bindparam(":sede",			$datos["sede"],PDO::PARAM_STR);
		$stmt -> bindparam(":fecha",		$datos["fecha"],PDO::PARAM_STR);
		$stmt -> bindparam(":motivo",		$datos["motivo"],PDO::PARAM_STR);
		$stmt -> bindparam(":id",		    $datos["id"],PDO::PARAM_STR);

		if($stmt -> execute()) {
			return "exito";
		}else{

			return "error";
		}
		
		
		$stmt -> close();
	}


	#actualizar datos Desercion
    #--------------------------------------------------
	public static function actualizarDesercionModel($datos,$tabla)
	{
		$stmt = Conexion::conectar()-> prepare("UPDATE $tabla SET nombre = :nombres, apellidos = :apellidos, documento = :tdocumento, numero_documento = :ndocumento, grupo = :grupo, numero_ficha = :ficha, trimestre = :trimestre, jornada = :jornada, programa_formacion = :programa, sede = :sede, fecha = :fecha WHERE $tabla.numero_documento = :id");

		 

		$stmt -> bindparam(":nombres",		$datos["nombres"],PDO::PARAM_STR);
		$stmt -> bindparam(":apellidos",	$datos["apellidos"],PDO::PARAM_STR);
		$stmt -> bindparam(":tdocumento",	$datos["tdocumento"],PDO::PARAM_STR);
		$stmt -> bindparam(":ndocumento",	$datos["ndocumento"],PDO::PARAM_STR);
		$stmt -> bindparam(":grupo",		$datos["grupo"],PDO::PARAM_STR);
		$stmt -> bindparam(":ficha",		$datos["ficha"],PDO::PARAM_STR);
		$stmt -> bindparam(":trimestre",	$datos["trimestre"],PDO::PARAM_STR);
		$stmt -> bindparam(":jornada",		$datos["jornada"],PDO::PARAM_STR);
		$stmt -> bindparam(":programa",		$datos["programa"],PDO::PARAM_STR);
		$stmt -> bindparam(":sede",			$datos["sede"],PDO::PARAM_STR);
		$stmt -> bindparam(":fecha",		$datos["fecha"],PDO::PARAM_STR);
		$stmt -> bindparam(":id",		    $datos["id"],PDO::PARAM_STR);

		if($stmt -> execute()) {
			return "exito";
		}else{

			return "error";
		}
		
		
		$stmt -> close();
	}

	#perfil usuario
	#---------------------------------------------
	public static function perfilUsuarioModel($documento,$tabla)
	{
		$stmt = Conexion::conectar()-> prepare("select * from $tabla where documento_usuario = :docUsuario");

		$stmt -> bindparam(":docUsuario",$documento,PDO::PARAM_STR);
		$stmt -> execute();
		return $stmt -> fetch();

		$stmt -> close();
	}


	#actualizar datos Desercion
    #--------------------------------------------------
	public static function actualizarPerfilModel($datos,$tabla)
	{
		$stmt = Conexion::conectar()-> prepare("UPDATE $tabla SET nombres = :nombres, apellidos = :apellidos, correo = :correo
			WHERE $tabla.documento_usuario = :id");

		$stmt -> bindparam(":nombres",		$datos["nombres"],PDO::PARAM_STR);
		$stmt -> bindparam(":apellidos",	$datos["apellidos"],PDO::PARAM_STR);
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
		 $stmt = Conexion::conectar()-> prepare("select * from $tabla where documento_usuario = :documento");

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