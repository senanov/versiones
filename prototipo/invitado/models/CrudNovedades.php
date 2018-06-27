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


}