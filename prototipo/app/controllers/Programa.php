<?php
session_start();
class Programa extends Controller
{

    public function __construct()
    {
        $this->programa = $this->modelo("programaModel");
    }

    public function registrarPrograma()
    {

        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            #Nombre del programa
            $nombre = strip_tags(trim($_POST["programa"]));
            #tipo de programa
            $tprograma = strip_tags($_POST["tprograma"]);

            $validar = $this->programa->validarProgramaModel($nombre, $tprograma);
            if (!$validar) {
                $respuesta = $this->programa->registrarProgramaModel($nombre, $tprograma);

                if ($respuesta) {
                    $datos = array('aviso' => 'El Programa se agrego correctamente', 'alert' => 'success');
                    $this->vista("usuario/formularios/programa", $datos);

                } else {
                    $datos = array('aviso' => 'El programa no se pudo agregar', 'alert' => 'danger');
                    $this->vista("usuario/formularios/programa", $datos);

                }
            } else {
                $datos = array('aviso' => 'El programa ya se encuentra registrado', 'alert' => 'danger');
                $this->vista("usuario/formularios/programa", $datos);

            }
        } else {

            $this->vista("usuario/formularios/programa");
        }

    } #fin del metodo

    public function consultarPrograma()
    {

        $respuesta = $this->programa->consultarProgramaModel();
        $datos = array('ed' => $respuesta, );
        $this->vista("usuario/consultas/consultarPrograma", $datos);

    } #fin del metodo

    public function editarPrograma($id = 0)
    {   

        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $datos = array('programa' => strip_tags(trim($_POST["programa"])), 'id' => strip_tags($_POST["codigo"]));

            $editar = $this->programa->editarProgramaModel($datos);

            if ($editar) {
            	$respuesta = $this->programa->consultarProgramaModel();
            	$datos = array('aviso' =>'El Programa se Actualizo correctamente','ed'=>$respuesta);
                $this->vista("usuario/consultas/consultarPrograma", $datos);
            }else{
            	echo "error";
            }

        }else{

        	$respuesta = $this->programa->consultarProgramaModel();
            $datos = array('id' => $id,'ed'=>$respuesta);
            $this->vista("usuario/consultas/consultarPrograma", $datos);            

        }

    }#fin del metodo


} #fin de la clase
