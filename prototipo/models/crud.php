<?php
//PDO
/* try{

$conexion= new PDO("mysql:host=127.0.0.1; dbname=proyecto","root", "");

$resultado=$conexion->prepare("insert into registro values ('$_REQUEST[ndocumento]','$_REQUEST[tdocumento]','$_REQUEST[nombres]','$_REQUEST[apellidos]','$_REQUEST[contra]','$_REQUEST[correo]')");
$resultado->execute();
echo "El registro fue exitoso:";

}catch (Exception $e){

echo "problemas en la conexion". $e -> getmessage();

}
finally {$conexion=null;} */

require_once"conexion.php";


class  Datos extends Conexion
{
	#registro de usuarios
	#-------------------------------------------------------------
	public static function registroUsuarioModel($datos,$tabla){

          $stmt = Conexion::conectar() -> prepare("insert into $tabla values (:ndocumento,:tdocumento,:nombres,:apellidos,:contra,:correo,:rol)");

          $stmt -> bindparam(":ndocumento",$datos["ndocumento"], PDO::PARAM_STR);
          $stmt -> bindparam(":tdocumento",$datos["tdocumento"], PDO::PARAM_STR);
          $stmt -> bindparam(":nombres",$datos["nombres"], PDO::PARAM_STR);
          $stmt -> bindparam(":apellidos",$datos["apellidos"], PDO::PARAM_STR);
          $stmt -> bindparam(":contra",$datos["contra"], PDO::PARAM_STR);
          $stmt -> bindparam(":correo",$datos["correo"], PDO::PARAM_STR);
          $stmt -> bindparam(":rol",$datos["rol"], PDO::PARAM_STR);

          if ($stmt -> execute()) {
          	
          	return "exito";
          }else{

          	return "error";
          }
       
       $stmt ->close();

	}




     #consulta de usuarios
     #-------------------------------------------------------------
    public static function consultaUsuarioModel($consulta,$tabla){

    $stmt = Conexion::conectar() -> prepare("select * from  $tabla where documento_usuario = :consulta ");
     $stmt -> bindparam(":consulta",$consulta, PDO::PARAM_STR);
     $stmt ->execute(); 
     return $stmt -> fetch();

     $stmt ->close();  

     }



	#ingreso de usuarios
	#-------------------------------------------------------------
	public static function ingresoUsuarioModel($datos,$tabla){

          $stmt = Conexion::conectar() -> prepare("select * from  $tabla where documento_usuario = :usuario ");
          $stmt -> bindparam(":usuario",$datos["usuario"], PDO::PARAM_STR);
          $stmt ->execute(); 
          return $stmt -> fetch(); 
          
          $stmt ->close();     

   }	
}

?>