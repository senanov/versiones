<?php
require_once "conexion.php";
class RegistroNovedades extends Conexion
{
    #llamada ficha
    #----------------------------------------------
    public static function llamarFichaModel($ficha, $trimestre, $sede, $modalidad, $programa, $jornada)
    {
        $stmt = Conexion::conectar()->prepare("SELECT * FROM $ficha INNER JOIN $sede ON $ficha.id_sede=$sede.id_sede INNER JOIN $jornada ON $ficha.id_jornada=$jornada.id_jornada INNER JOIN $modalidad ON $ficha.id_modalidad=$modalidad.id_modalidad INNER JOIN $programa ON $ficha.id_programa=$programa.id INNER JOIN $trimestre ON $ficha.id_trimestre=$trimestre.id_trimestre");
        $stmt->execute();
        return $stmt->fetchAll();

        //SELECT * FROM ficha INNER JOIN sede ON ficha.id_sede=sede.id_sede INNER JOIN jornada ON ficha.id_jornada=jornada.id_jornada INNER JOIN modalidad ON ficha.id_modalidad=modalidad.id_modalidad INNER JOIN programa ON ficha.id_programa=programa.id INNER JOIN trimestre ON ficha.id_trimestre=trimestre.id_trimestre
    }

     public static function buscarFichaAjaxModel($ficha, $trimestre, $sede, $modalidad, $programa, $jornada,$bficha)
    {
        $stmt = Conexion::conectar()->prepare("SELECT * FROM $ficha INNER JOIN $sede ON $ficha.id_sede=$sede.id_sede INNER JOIN $jornada ON $ficha.id_jornada=$jornada.id_jornada INNER JOIN $modalidad ON $ficha.id_modalidad=$modalidad.id_modalidad INNER JOIN $programa ON $ficha.id_programa=$programa.id INNER JOIN $trimestre ON $ficha.id_trimestre=$trimestre.id_trimestre WHERE codigo_ficha =:bficha");

        $stmt->bindparam(":bficha", $bficha);
        $stmt->execute();
        return $stmt->fetch();

        //SELECT * FROM ficha INNER JOIN sede ON ficha.id_sede=sede.id_sede INNER JOIN jornada ON ficha.id_jornada=jornada.id_jornada INNER JOIN modalidad ON ficha.id_modalidad=modalidad.id_modalidad INNER JOIN programa ON ficha.id_programa=programa.id INNER JOIN trimestre ON ficha.id_trimestre=trimestre.id_trimestre
    }

    #llamada de programas
    #--------------------------------------
    public static function programasModels($tabla1, $tabla2)
    {
        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla1 INNER JOIN $tabla2 ON $tabla1.id_tipo_programa=$tabla2.id_programa");
        $stmt->execute();
        return $stmt->fetchAll();
    }

    #------------------------------------------------------------------------------------------------------------------------------

    #Registro del reingreso y desercion
    #--------------------------------------
    public static function reingresoDesercionModels($datos, $usuario, $novedad)
    {
        $stmt = Conexion::conectar()->prepare("INSERT INTO $usuario (documento_usuario, tipo_documento, primer_nombre, segundo_nombre, primer_apellido, segundo_apellido, contrasena, correo, rol, estado) VALUES (:documento, :tdocumento, :nombre1, :nombre2, :apellido1, :apellido2, 'NULL', 'NULL', :rol, :estado)");

        $stmt->bindparam(":nombre1", $datos["nombre1"]);
        $stmt->bindparam(":nombre2", $datos["nombre2"]);
        $stmt->bindparam(":apellido1", $datos["apellido1"]);
        $stmt->bindparam(":apellido2", $datos["apellido2"]);
        $stmt->bindparam(":tdocumento", $datos["tdocumento"]);
        $stmt->bindparam(":documento", $datos["documento"]);
        $stmt->bindparam(":rol", $datos["rol"]);
        $stmt->bindparam(":estado", $datos["estado"]);
        $stmt->execute();

        $stmt1 = Conexion::conectar()->prepare("INSERT INTO $novedad (documento, id_tipo_novedad, grupo, numero_ficha, fecha, centro_actual, centro_traslado, ciudad_actual, ciudad_traslado, motivo) VALUES (:documento, :tipo_novedad, :grupo, :ficha, :fecha, 'NULL', 'NULL', 'NULL', 'NULL', 'NULL')");

        $stmt1->bindparam(":documento", $datos["documento"]);
        $stmt1->bindparam(":tipo_novedad", $datos["id"]);
        $stmt1->bindparam(":grupo", $datos["grupo"]);
        $stmt1->bindparam(":ficha", $datos["ficha"]);
        $stmt1->bindparam(":fecha", $datos["fecha"]);

        if ($stmt1 -> execute()) {
            return "exito";
        } else {
            return "error";
        }
        $stmt->close();
    }

    #Registro del aplazamiento, cambio de jornada y retiro
    #--------------------------------------
    public static function aplazamientoCambioJornadaRetiroModel($datos, $usuario, $novedad)
    {
        $stmt = Conexion::conectar()->prepare("INSERT INTO $usuario (documento_usuario, tipo_documento, primer_nombre, segundo_nombre, primer_apellido, segundo_apellido, contrasena, correo, rol, estado) VALUES (:documento, :tdocumento, :nombre1, :nombre2, :apellido1, :apellido2, 'NULL', 'NULL', :rol, :estado)");

        $stmt->bindparam(":nombre1", $datos["nombre1"]);
        $stmt->bindparam(":nombre2", $datos["nombre2"]);
        $stmt->bindparam(":apellido1", $datos["apellido1"]);
        $stmt->bindparam(":apellido2", $datos["apellido2"]);
        $stmt->bindparam(":tdocumento", $datos["tdocumento"]);
        $stmt->bindparam(":documento", $datos["documento"]);
        $stmt->bindparam(":rol", $datos["rol"]);
        $stmt->bindparam(":estado", $datos["estado"]);
        $stmt->execute();

         $stmt1 = Conexion::conectar()->prepare("INSERT INTO $novedad (documento, id_tipo_novedad, grupo, numero_ficha, fecha, centro_actual, centro_traslado, ciudad_actual, ciudad_traslado, motivo) VALUES (:documento, :tipo_novedad, :grupo, :ficha, :fecha, 'NULL', 'NULL', 'NULL', 'NULL', :motivo)");

        $stmt1->bindparam(":documento", $datos["documento"]);
        $stmt1->bindparam(":tipo_novedad", $datos["id"]);
        $stmt1->bindparam(":grupo", $datos["grupo"]);
        $stmt1->bindparam(":ficha", $datos["ficha"]);
        $stmt1->bindparam(":fecha", $datos["fecha"]);
        $stmt1->bindparam(":motivo",$datos["motivo"]);

        if ($stmt1 -> execute()) 
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
    public static function trasladoModel($datos, $usuario, $novedad)
    {
        $stmt = Conexion::conectar()->prepare("INSERT INTO $usuario (documento_usuario, tipo_documento, primer_nombre, segundo_nombre, primer_apellido, segundo_apellido, contrasena, correo, rol, estado) VALUES (:documento, :tdocumento, :nombre1, :nombre2, :apellido1, :apellido2, 'NULL', 'NULL', :rol, :estado)");

        $stmt->bindparam(":nombre1", $datos["nombre1"]);
        $stmt->bindparam(":nombre2", $datos["nombre2"]);
        $stmt->bindparam(":apellido1", $datos["apellido1"]);
        $stmt->bindparam(":apellido2", $datos["apellido2"]);
        $stmt->bindparam(":tdocumento", $datos["tdocumento"]);
        $stmt->bindparam(":documento", $datos["documento"]);
        $stmt->bindparam(":rol", $datos["rol"]);
        $stmt->bindparam(":estado", $datos["estado"]);
        $stmt->execute();

        $stmt1 = Conexion::conectar()->prepare("INSERT INTO $novedad (documento, id_tipo_novedad, grupo, numero_ficha, fecha, centro_actual, centro_traslado, ciudad_actual, ciudad_traslado, motivo) VALUES (:documento, :tipo_novedad, :grupo, :ficha, :fecha, :centroa, :centrot, :ciudada, :ciudadt, :motivo)");

        $stmt1->bindparam(":documento",         $datos["documento"]);
        $stmt1->bindparam(":tipo_novedad",      $datos["id"]);
        $stmt1->bindparam(":grupo",             $datos["grupo"]);
        $stmt1->bindparam(":ficha",             $datos["ficha"]);
        $stmt1->bindparam(":fecha",             $datos["fecha"]);
        $stmt1->bindparam(":centroa",           $datos["centroa"]);
        $stmt1->bindparam(":centrot",           $datos["centrot"]);
        $stmt1->bindparam(":ciudada",           $datos["ciudada"]);
        $stmt1->bindparam(":ciudadt",           $datos["ciudadt"]);
        $stmt1->bindparam(":motivo",            $datos["motivo"]);       

        if ($stmt1 -> execute()) 
        {
            return "exito";
        } 

        else 
        {
            return "error";
        }
    }
}