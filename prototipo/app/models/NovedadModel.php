<?php

class NovedadModel
{
    private $db;
    private $db1;
    public function __construct()
    {
        $this->db  = new Base();
        $this->db1 = new Base();
    }

    
   // se consulta la novedad mediante parametro documento
    public function validarNovedadModel($documento)
    {
        
        $this->db->query("SELECT * FROM usuario INNER JOIN novedad ON usuario.documento_usuario=novedad.documento WHERE documento = :documento");

        $this->db->bind(":documento", $documento);
        $this->db->execute();
        return $this->db->registro();

    }

    #se inserta una novedad dependiendo el id
    public function registrarNovedadModel($datos)
    {

        #reintegro (2) y Deserción (4)
        if ($datos["id"] == 2 || $datos["id"] == 4) {

            $this->db->query("INSERT INTO usuario (documento_usuario, tipo_documento, primer_nombre, segundo_nombre, primer_apellido, segundo_apellido, contrasena, correo, rol, estado) VALUES (:documento, :tdocumento, :nombre1, :nombre2, :apellido1, :apellido2, 'N/A', 'N/A', :rol, :estado)");

            $this->db->bind(":nombre1", $datos["nombre1"]);
            $this->db->bind(":nombre2", $datos["nombre2"]);
            $this->db->bind(":apellido1", $datos["apellido1"]);
            $this->db->bind(":apellido2", $datos["apellido2"]);
            $this->db->bind(":tdocumento", $datos["tdocumento"]);
            $this->db->bind(":documento", $datos["documento"]);
            $this->db->bind(":rol", $datos["rol"]);
            $this->db->bind(":estado", $datos["estado"]);

            $this->db1->query("INSERT INTO novedad (documento, id_tipo_novedad, grupo, numero_ficha, fecha, centro_actual, centro_traslado, ciudad_actual, ciudad_traslado, motivo) VALUES (:documento, :tipo_novedad, :grupo, :ficha, :fecha, 'N/A', 'N/A', 'N/A', 'N/A', 'N/A')");

            $this->db1->bind(":documento", $datos["documento"]);
            $this->db1->bind(":tipo_novedad", $datos["id"]);
            $this->db1->bind(":grupo", $datos["grupo"]);
            $this->db1->bind(":ficha", $datos["ficha"]);
            $this->db1->bind(":fecha", $datos["fecha"]);

            if ($this->db->execute() && $this->db1->execute()) {
                return true;
            } else {

                return false;
            }

        }

        #aplazamiento (1) cambio de jornada (3) y retiro (5)
        if ($datos["id"] == 1 || $datos["id"] == 3 || $datos["id"] == 5) {

            $this->db->query("INSERT INTO usuario (documento_usuario, tipo_documento, primer_nombre, segundo_nombre, primer_apellido, segundo_apellido, contrasena, correo, rol, estado) VALUES (:documento, :tdocumento, :nombre1, :nombre2, :apellido1, :apellido2, 'N/A', 'N/A', :rol, :estado)");

            $this->db->bind(":nombre1", $datos["nombre1"]);
            $this->db->bind(":nombre2", $datos["nombre2"]);
            $this->db->bind(":apellido1", $datos["apellido1"]);
            $this->db->bind(":apellido2", $datos["apellido2"]);
            $this->db->bind(":tdocumento", $datos["tdocumento"]);
            $this->db->bind(":documento", $datos["documento"]);
            $this->db->bind(":rol", $datos["rol"]);
            $this->db->bind(":estado", $datos["estado"]);

            $this->db1->query("INSERT INTO novedad (documento, id_tipo_novedad, grupo, numero_ficha, fecha, centro_actual, centro_traslado, ciudad_actual, ciudad_traslado, motivo) VALUES (:documento, :tipo_novedad, :grupo, :ficha, :fecha, 'N/A', 'N/A', 'N/A', 'N/A', :motivo)");

            $this->db1->bind(":documento", $datos["documento"]);
            $this->db1->bind(":tipo_novedad", $datos["id"]);
            $this->db1->bind(":grupo", $datos["grupo"]);
            $this->db1->bind(":ficha", $datos["ficha"]);
            $this->db1->bind(":fecha", $datos["fecha"]);
            $this->db1->bind(":motivo", $datos["motivo"]);

            if ($this->db->execute() && $this->db1->execute()) {
                return true;
            } else {

                return false;
            }

        }

        #traslado (6)
        if ($datos["id"] == 6) {

            $this->db->query("INSERT INTO $usuario (documento_usuario, tipo_documento, primer_nombre, segundo_nombre, primer_apellido, segundo_apellido, contrasena, correo, rol, estado) VALUES (:documento, :tdocumento, :nombre1, :nombre2, :apellido1, :apellido2, 'N/A', 'N/A', :rol, :estado)");

            $this->db->bind(":nombre1", $datos["nombre1"]);
            $this->db->bind(":nombre2", $datos["nombre2"]);
            $this->db->bind(":apellido1", $datos["apellido1"]);
            $this->db->bind(":apellido2", $datos["apellido2"]);
            $this->db->bind(":tdocumento", $datos["tdocumento"]);
            $this->db->bind(":documento", $datos["documento"]);
            $this->db->bind(":rol", $datos["rol"]);
            $this->db->bind(":estado", $datos["estado"]);

            $this->db1->query("INSERT INTO $novedad (documento, id_tipo_novedad, grupo, numero_ficha, fecha, centro_actual, centro_traslado, ciudad_actual, ciudad_traslado, motivo) VALUES (:documento, :tipo_novedad, :grupo, :ficha, :fecha, :centroa, :centrot, :ciudada, :ciudadt, :motivo)");

            $this->db1->bind(":documento", $datos["documento"]);
            $this->db1->bind(":tipo_novedad", $datos["id"]);
            $this->db1->bind(":grupo", $datos["grupo"]);
            $this->db1->bind(":ficha", $datos["ficha"]);
            $this->db1->bind(":fecha", $datos["fecha"]);
            $this->db1->bind(":centroa", $datos["centroa"]);
            $this->db1->bind(":centrot", $datos["centrot"]);
            $this->db1->bind(":ciudada", $datos["ciudada"]);
            $this->db1->bind(":ciudadt", $datos["ciudadt"]);
            $this->db1->bind(":motivo", $datos["motivo"]);

            if ($this->db->execute() && $this->db1->execute()) {
                return true;
            } else {

                return false;
            }

        }

    } #fin de metodo

    //se obtiene el registro de la novedad según el documento del usuario
    public function consultarNovedadModel($documento)
    {

        $this->db->query("SELECT * FROM usuario INNER JOIN novedad ON usuario.documento_usuario=novedad.documento INNER JOIN tipo_documento ON usuario.tipo_documento=tipo_documento.id_tipo INNER JOIN ficha ON novedad.numero_ficha=ficha.codigo_ficha INNER JOIN jornada ON ficha.id_jornada=jornada.id_jornada INNER JOIN trimestre ON ficha.id_trimestre=trimestre.id_trimestre INNER JOIN sede ON ficha.id_sede=sede.id_sede INNER JOIN programa ON ficha.id_programa=programa.id INNER JOIN tipo_novedad ON novedad.id_tipo_novedad=tipo_novedad.id_novedad  WHERE documento = :doc");

        $this->db->bind(":doc", $documento);
        $this->db->execute();
        return $this->db->registro();
    } #fin del metodo
    

    //se actualiza la información en la novedad según el id recibido en el arreglo $datos 
    public function editarNovedadModel($datos)
    {

        $this->db->query("UPDATE novedad INNER JOIN usuario ON novedad.documento=usuario.documento_usuario SET usuario.primer_nombre=:nombre1, usuario.segundo_nombre=:nombre2, usuario.primer_apellido=:apellido1, usuario.segundo_apellido=:apellido2, usuario.tipo_documento=:tdocumento, novedad.grupo=:grupo  WHERE novedad.documento = :id");

        $this->db->bind(":nombre1", $datos["nombre1"]);
        $this->db->bind(":nombre2", $datos["nombre2"]);
        $this->db->bind(":apellido1", $datos["apellido1"]);
        $this->db->bind(":apellido2", $datos["apellido2"]);
        $this->db->bind(":tdocumento", $datos["tdocumento"]);
        $this->db->bind(":grupo", $datos["grupo"]);
        $this->db->bind(":id", $datos["id"]);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }

    }

} #fin de clase
