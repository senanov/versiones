<?php

class ProgramaModel
{
    private $db;

    public function __construct()
    {
        $this->db = new Base();
    }

    public function programaAjaxModel($id){
        $this->db->query("SELECT * from programa INNER JOIN tipo_programa ON programa.id_tipo_programa=tipo_programa.id_programa WHERE id = :id");
        $this->db->bind(":id", $id);
        $this->db->execute();
        return $this->db->registro();


    }

    public function validarProgramaModel($nombre, $tprograma)
    {

        $this->db->query("SELECT * FROM programa WHERE id_tipo_programa = :tprograma AND nombre_programa = :id");

        $this->db->bind(":id", $nombre);
        $this->db->bind(":tprograma", $tprograma);
        $this->db->execute();
        return $this->db->registro();
    } #fin metodo

    public function registrarProgramaModel($nombre, $tprograma)
    {

        $this->db->query("INSERT INTO programa  VALUES (NULL, :tprograma ,:id)");

        $this->db->bind(":id", $nombre);
        $this->db->bind(":tprograma", $tprograma);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }

    } #fin del metodo

    public function consultarProgramaModel()
    {

        $this->db->query("SELECT * from programa INNER JOIN tipo_programa ON programa.id_tipo_programa=tipo_programa.id_programa");
        $this->db->execute();
        return $this->db->registros();

    } #fin del metodo

    public function editarProgramaModel($datos)
    {

        $this->db->query("UPDATE programa SET nombre_programa  = :programa WHERE programa.id = :id");

        $this->db->bind(":programa", $datos["programa"]);
        $this->db->bind(":id", $datos["id"]);

        if ($this->db->execute()) {
            return true;
        } else {

            return false;
        }

    }

} #fin de la clase
