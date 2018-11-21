<?php
session_start();
class Ficha extends Controller
{

    public function __construct()
    {
        $this->ficha    = $this->modelo("FichaModel");
        $this->programa = $this->modelo("ProgramaModel");
    }

    public function registrarFicha()
    {

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $ficha   = strip_tags(trim($_POST["num_ficha"]));
            $validar = $this->ficha->buscarFichaAjaxModel($ficha);
            if (!$validar) {
                $datos = array('ficha' => strip_tags($_POST["num_ficha"]), 'sede'     => strip_tags($_POST["sede"]), 'jornada'       => strip_tags($_POST["jornada"]),
                    'modalidad'            => strip_tags($_POST["modalidad"]), 'programa' => strip_tags($_POST["programa"]), 'trimestre' => strip_tags($_POST["trimestre"]));

                $respuesta = $this->ficha->registrarFichaModel($datos);

                if ($respuesta) {
                    $programa = $this->programa->consultarProgramaModel();
                    $datos    = array('aviso' => 'La ficha se agrego correctamente', 'alert' => 'success', 'programa' => $programa);
                    $this->vista("usuario/formularios/fichas", $datos);

                } else {
                    $programa = $this->programa->consultarProgramaModel();
                    $datos    = array('aviso' => 'No se puedo registrar la ficha', 'alert' => 'danger', 'programa' => $programa);
                    $this->vista("usuario/formularios/fichas", $datos);

                }
            } else {
                $programa = $this->programa->consultarProgramaModel();
                $datos    = array('aviso' => 'Esta ficha ya se encuentra en la base de datos', 'alert' => 'danger', 'programa' => $programa);
                $this->vista("usuario/formularios/fichas", $datos);

            }
        } else {
            $programa = $this->programa->consultarProgramaModel();
            $datos    = array('programa' => $programa);
            $this->vista("usuario/formularios/fichas", $datos);

        }

    }

   


     public function editarFicha($id = 0)
    {   

        if ($_SERVER["REQUEST_METHOD"] == "POST") {

             $datos = array('ficha' => strip_tags($_POST["ficha"]), 'sede' => strip_tags($_POST["sede"]),'jornada'=>strip_tags($_POST["jornada"]), 'trimestre' => strip_tags($_POST["trimestre"] ));

            $editar = $this->ficha->editarFichaModel($datos);

            if ($editar) {
            	$respuesta = $this->ficha->consultarFichaModel();
            	$datos = array('aviso' =>'El Programa se Actualizo correctamente','ed'=>$respuesta);
                $this->vista("usuario/consultas/consultarficha", $datos);
            }else{
            	echo "error";
            }

        }else{

        	$respuesta = $this->ficha->consultarFichaModel();
            $datos = array('id' => $id,'ed'=>$respuesta);
            $this->vista("usuario/consultas/consultarficha", $datos);            

        }

    }#fin del metodo


}#fin de la clase
