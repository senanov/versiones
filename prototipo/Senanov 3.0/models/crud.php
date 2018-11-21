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
	#validar  usuarios
	#-------------------------------------------------------------
  public static function validarUsuarioModel($datos,$tabla)
  {
      $stmt = Conexion::conectar() -> prepare("select * from $tabla where documento_usuario = :ndocumento or correo = :correo ");
      $stmt -> bindparam(":ndocumento", $datos["ndocumento"], PDO::PARAM_STR);
      $stmt -> bindparam(":correo",     $datos["correo"], PDO::PARAM_STR);
      $stmt -> execute();
      return $stmt ->fetch();
  }


  #registro de usuarios
  #-------------------------------------------------------------
	public static function registroUsuarioModel($datos,$tabla)
  {
      $stmt = Conexion::conectar() -> prepare("INSERT INTO usuario (documento_usuario, tipo_documento, primer_nombre, segundo_nombre, primer_apellido, segundo_apellido, contrasena, correo, rol, estado) VALUES (:ndocumento, :tdocumento, :primer_nombre, :segundo_nombre,:primer_apellido, :segundo_apellido,:contra, :correo, :rol, :estado)");



      $stmt -> bindparam(":ndocumento",          $datos["ndocumento"], PDO::PARAM_STR);
      $stmt -> bindparam(":tdocumento",          $datos["tdocumento"], PDO::PARAM_STR);
      $stmt -> bindparam(":primer_nombre",       $datos["primer_nombre"], PDO::PARAM_STR);
      $stmt -> bindparam(":segundo_nombre",      $datos["segundo_nombre"], PDO::PARAM_STR);
      $stmt -> bindparam(":primer_apellido",     $datos["primer_apellido"], PDO::PARAM_STR);
      $stmt -> bindparam(":segundo_apellido",    $datos["segundo_apellido"], PDO::PARAM_STR);
      $stmt -> bindparam(":contra",              $datos["contra"], PDO::PARAM_STR);
      $stmt -> bindparam(":correo",              $datos["correo"], PDO::PARAM_STR);
      $stmt -> bindparam(":rol",                 $datos["rol"], PDO::PARAM_STR);
      $stmt -> bindparam(":estado",              $datos["estado"], PDO::PARAM_STR);

      if ($stmt -> execute()) 
      {
          return "exito";
      }

      else
      {
          return "error";
      }
       
      $stmt ->close();  
  }




    #consulta de usuarios
    #-------------------------------------------------------------
    public static function consultaUsuarioModel($consulta,$tabla)
    {
      $stmt = Conexion::conectar() -> prepare("select * from  $tabla where documento_usuario = :consulta");
      $stmt -> bindparam(":consulta",$consulta, PDO::PARAM_STR);
      $stmt ->execute(); 
      return $stmt -> fetch();

      $stmt ->close();  
    }



	#ingreso de usuarios
	#-------------------------------------------------------------
	public static function ingresoUsuarioModel($datos,$tabla)
  {
      $stmt = Conexion::conectar() -> prepare("SELECT * FROM $tabla INNER JOIN rol ON usuario.rol=rol.id_rol WHERE documento_usuario = :usuario");
      $stmt -> bindparam(":usuario",$datos["usuario"], PDO::PARAM_STR);
      $stmt ->execute(); 
      return $stmt -> fetch(); 
          
      $stmt ->close();     
   }

  #enviar correo
  #--------------------------------------------------------------
  public static function restablecerContrasenaModel($envio_email,$tabla)
  {
      $stmt = Conexion::conectar() -> prepare("select * from $tabla where correo = :envio_email");
      $stmt -> bindparam(":envio_email",$envio_email,PDO::PARAM_STR);
      $stmt -> execute();
      return $stmt -> fetch();

      $stmt -> close();
  }

  #Cambio de contraseña 
  #--------------------------------------------------------------
  public static function cambioContrasenaModel($cambiar,$tabla,$correo)
  {
      $stmt = Conexion::conectar() -> prepare("update $tabla set contrasena = :cambio where correo = :correo");
      $stmt -> bindparam(":cambio",$cambiar,PDO::PARAM_STR);
      $stmt -> bindparam(":correo",$correo,PDO::PARAM_STR);
      
      if ($stmt -> execute()) 
      {
        return "0";
      }

      else
      {
        return "1";
      }

      $stmt -> close();
  }

}
