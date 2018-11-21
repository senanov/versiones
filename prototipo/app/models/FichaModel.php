<?php

class FichaModel
{
    private $db;

    public function __construct()
    {
        $this->db = new Base();

    }

    #Se hace el llamado de toda la ficha con sus respectivos campos
    public function buscarFichaAjaxModel($ficha)
    {
        $this->db->query("SELECT * FROM ficha INNER JOIN sede ON ficha.id_sede=sede.id_sede INNER JOIN jornada ON ficha.id_jornada=jornada.id_jornada INNER JOIN modalidad ON ficha.id_modalidad=modalidad.id_modalidad INNER JOIN programa ON ficha.id_programa=programa.id INNER JOIN trimestre ON ficha.id_trimestre=trimestre.id_trimestre WHERE codigo_ficha =:ficha");

        $this->db->bind(":ficha", $ficha);
        $this->db->execute();
        return $this->db->registro();

    } #fin del metodo

    public function consultarFichaModel()
    {

        $this->db->query("SELECT * FROM ficha INNER JOIN sede ON ficha.id_sede=sede.id_sede INNER JOIN jornada ON ficha.id_jornada=jornada.id_jornada INNER JOIN modalidad ON ficha.id_modalidad=modalidad.id_modalidad INNER JOIN programa ON ficha.id_programa=programa.id INNER JOIN trimestre ON ficha.id_trimestre=trimestre.id_trimestre");

        $this->db->execute();
        return $this->db->registros();

    } #fin del metodo

    public function registrarFichaModel($datos)
    {

        $this->db->query("INSERT INTO ficha(codigo_ficha, id_sede, id_jornada, id_modalidad, id_programa, id_trimestre) VALUES (:ficha, :sede,:jornada,:modalidad, :programa, :trimestre)");

        $this->db->bind(":ficha", $datos["ficha"]);
        $this->db->bind(":sede", $datos["sede"]);
        $this->db->bind(":jornada", $datos["jornada"]);
        $this->db->bind(":modalidad", $datos["modalidad"]);
        $this->db->bind(":programa", $datos["programa"]);
        $this->db->bind(":trimestre", $datos["trimestre"]);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }

    } #fin del metodo

    public function editarFichaModel($datos)
    {

        $this->db->query("UPDATE ficha SET id_sede = :sede, id_jornada = :jornada, id_trimestre = :trimestre WHERE ficha.codigo_ficha = :ficha");

        $this->db->bind(":sede", $datos["sede"]);
        $this->db->bind(":jornada", $datos["jornada"]);
        $this->db->bind(":trimestre", $datos["trimestre"]);
        $this->db->bind(":ficha", $datos["ficha"]);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

}
