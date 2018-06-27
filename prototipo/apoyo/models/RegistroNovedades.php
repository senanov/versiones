<?php
require_once "conexion.php";
class RegistroNovedades extends Conexion
{
    
   #llamada de programas tecnicos
   #--------------------------------------

	public static function tecnicosModel($tabla)
	{   
		$stmt = Conexion::conectar()-> prepare("select * from $tabla" );
		$stmt -> execute();
		return $stmt -> fetchAll();
		$stmt -> close();
	}

   #llamada de programas tecnologicos
   #--------------------------------------
	public static function tecnologosModel($tabla)
	{

		$stmt = Conexion::conectar()-> prepare("select * from $tabla" );
		$stmt -> execute();
		return $stmt -> fetchAll();
		$stmt -> close();


	}
   
   #llamada de programas especializaciones
   #--------------------------------------
	public static function especializacionModel($tabla)
	{

		$stmt = Conexion::conectar()-> prepare("select * from $tabla" );
		$stmt -> execute();
		return $stmt -> fetchAll();
		$stmt -> close();
	}

  #------------------------------------------------------------------------------------------------------------------------------
    
    #Registro del reingreso
	#--------------------------------------	
	public static function reingresoModels($datos,$tabla)
	{
		$stmt = Conexion::conectar()-> prepare("insert into $tabla values (:nombre,:apellido,:tdocumento,:documento,:grupo,:ficha,:trimestre,:jornada,:programa,:sede,:fecha)");
		
		$stmt -> bindparam(":nombre",		$datos["nombre"]);
		$stmt -> bindparam(":apellido",		$datos["apellido"]);
		$stmt -> bindparam(":tdocumento",	$datos["tdocumento"]);
		$stmt -> bindparam(":documento",	$datos["documento"]);
		$stmt -> bindparam(":grupo",		$datos["grupo"]);
		$stmt -> bindparam(":ficha",		$datos["ficha"]);
		$stmt -> bindparam(":trimestre",	$datos["trimestre"]);
		$stmt -> bindparam(":jornada",		$datos["jornada"]);
		$stmt -> bindparam(":programa",		$datos["programa"]);
		$stmt -> bindparam(":sede",			$datos["sede"]);
		$stmt -> bindparam(":fecha",		$datos["fecha"]);

		if ($stmt ->execute()) 
		{
			return "exito";
		}

		else
		{
			return "error";
		}
     $stmt -> close();
	}

	#Registro del cambio de jornada
	#--------------------------------------
	public static function cambioJornadaModel($datos,$tabla)
	{

		$stmt = Conexion::conectar()-> prepare("insert into $tabla values (:nombre,:apellido,:tdocumento,:documento,:grupo,:ficha,:trimestre,:jornada,:programa,:sede,:fecha,:motivo)");
		
		$stmt -> bindparam(":nombre",		$datos["nombre"]);
		$stmt -> bindparam(":apellido",		$datos["apellido"]);
		$stmt -> bindparam(":tdocumento",	$datos["tdocumento"]);
		$stmt -> bindparam(":documento",	$datos["documento"]);
		$stmt -> bindparam(":grupo",		$datos["grupo"]);
		$stmt -> bindparam(":ficha",		$datos["ficha"]);
		$stmt -> bindparam(":trimestre",	$datos["trimestre"]);
		$stmt -> bindparam(":jornada",		$datos["jornada"]);
		$stmt -> bindparam(":programa",		$datos["programa"]);
		$stmt -> bindparam(":sede",			$datos["sede"]);
		$stmt -> bindparam(":fecha",		$datos["fecha"]);
		$stmt -> bindparam(":motivo",		$datos["motivo"]);

		if ($stmt ->execute()) 
		{
			return "exito";
		}

		else
		{
			return "error";
		}
	}

	#Registro traslado
	#--------------------------------------
	public static function trasladoModel($datos,$tabla)
	{
		$stmt = Conexion::conectar()-> prepare("insert into $tabla values (:nombre,:apellido,:tdocumento,:documento,:grupo,:ficha,:trimestre,:jornada,:centroa,:centron,:ciudada,:ciudadn,:programa,:fecha,:motivo)");
		
		$stmt -> bindparam(":nombre",		$datos["nombre"]);
		$stmt -> bindparam(":apellido",		$datos["apellido"]);
		$stmt -> bindparam(":tdocumento",	$datos["tdocumento"]);
		$stmt -> bindparam(":documento",	$datos["documento"]);
		$stmt -> bindparam(":grupo",		$datos["grupo"]);
		$stmt -> bindparam(":ficha",		$datos["ficha"]);
		$stmt -> bindparam(":trimestre",	$datos["trimestre"]);
		$stmt -> bindparam(":jornada",		$datos["jornada"]);
		$stmt -> bindparam(":centroa",		$datos["centroa"]);
		$stmt -> bindparam(":centron",		$datos["centron"]);
		$stmt -> bindparam(":ciudada",		$datos["ciudada"]);
		$stmt -> bindparam(":ciudadn",		$datos["ciudadn"]);
		$stmt -> bindparam(":programa",		$datos["programa"]);
		$stmt -> bindparam(":fecha",		$datos["fecha"]);
		$stmt -> bindparam(":motivo",		$datos["motivo"]);

		if ($stmt ->execute()) 
		{
			return "exito";
		}

		else
		{
			return "error";
		}
	}

	#Registro retiro
	#--------------------------------------
	public static function retiroModel($datos,$tabla)
	{

		$stmt = Conexion::conectar()-> prepare("insert into $tabla values (:nombre,:apellido,:tdocumento,:documento,:grupo,:ficha,:trimestre,:jornada,:programa,:sede,:fecha,:motivo)");
		
		$stmt -> bindparam(":nombre",		$datos["nombre"]);
		$stmt -> bindparam(":apellido",		$datos["apellido"]);
		$stmt -> bindparam(":tdocumento",	$datos["tdocumento"]);
		$stmt -> bindparam(":documento",	$datos["documento"]);
		$stmt -> bindparam(":grupo",		$datos["grupo"]);
		$stmt -> bindparam(":ficha",		$datos["ficha"]);
		$stmt -> bindparam(":trimestre",	$datos["trimestre"]);
		$stmt -> bindparam(":jornada",		$datos["jornada"]);
		$stmt -> bindparam(":programa",		$datos["programa"]);
		$stmt -> bindparam(":sede",			$datos["sede"]);
		$stmt -> bindparam(":fecha",		$datos["fecha"]);
		$stmt -> bindparam(":motivo",		$datos["motivo"]);

		if ($stmt ->execute()) 
		{
			return "exito";
		}

		else
		{
			return "error";
		}
	}

	#Registro aplazamiento
	#--------------------------------------
	public static function aplazamientoModel($datos,$tabla)
	{

		$stmt = Conexion::conectar()-> prepare("insert into $tabla values (:nombre,:apellido,:tdocumento,:documento,:grupo,:ficha,:trimestre,:jornada,:programa,:sede,:fecha,:motivo)");
		
		$stmt -> bindparam(":nombre",		$datos["nombre"]);
		$stmt -> bindparam(":apellido",		$datos["apellido"]);
		$stmt -> bindparam(":tdocumento",	$datos["tdocumento"]);
		$stmt -> bindparam(":documento",	$datos["documento"]);
		$stmt -> bindparam(":grupo",		$datos["grupo"]);
		$stmt -> bindparam(":ficha",		$datos["ficha"]);
		$stmt -> bindparam(":trimestre",	$datos["trimestre"]);
		$stmt -> bindparam(":jornada",		$datos["jornada"]);
		$stmt -> bindparam(":programa",		$datos["programa"]);
		$stmt -> bindparam(":sede",			$datos["sede"]);
		$stmt -> bindparam(":fecha",		$datos["fecha"]);
		$stmt -> bindparam(":motivo",		$datos["motivo"]);

		if ($stmt ->execute()) 
		{
			return "exito";
		}

		else
		{
			return "error";
		}
	}

	#Registro desercion
	#--------------------------------------
	public static function desercionModel($datos,$tabla)
	{

		$stmt = Conexion::conectar()-> prepare("insert into $tabla values (:nombre,:apellido,:tdocumento,:documento,:grupo,:ficha,:trimestre,:jornada,:programa,:sede,:fecha)");
		
		$stmt -> bindparam(":nombre",		$datos["nombre"]);
		$stmt -> bindparam(":apellido",		$datos["apellido"]);
		$stmt -> bindparam(":tdocumento",	$datos["tdocumento"]);
		$stmt -> bindparam(":documento",	$datos["documento"]);
		$stmt -> bindparam(":grupo",		$datos["grupo"]);
		$stmt -> bindparam(":ficha",		$datos["ficha"]);
		$stmt -> bindparam(":trimestre",	$datos["trimestre"]);
		$stmt -> bindparam(":jornada",		$datos["jornada"]);
		$stmt -> bindparam(":programa",		$datos["programa"]);
		$stmt -> bindparam(":sede",			$datos["sede"]);
		$stmt -> bindparam(":fecha",		$datos["fecha"]);

		if ($stmt ->execute()) 
		{
			return "exito";
		}

		else
		{
			return "error";
		}
	}

}

?>