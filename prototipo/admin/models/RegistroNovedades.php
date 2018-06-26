<?php
require_once "conexion.php";
class RegistroNovedades extends Conexion
{
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

	}
}

?>