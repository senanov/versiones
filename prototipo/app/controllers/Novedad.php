<?php
session_start();
class Novedad extends Controller
{

    public function __construct()
    {
        $this->novedad = $this->modelo('NovedadModel');
        $this->ficha   = $this->modelo("FichaModel");
    }

    public function index()
    {

        $this->vista("usuario/slider");

    }

    #REGISTRAR UNA NOVEDAD DEPENDIENDO SU ID
    public function registrarNovedad($formulario = 1)
    {

        # Casos para cada uno de los formularios dependiendo su id
        switch ($formulario) {

            case 1:
                $formulario = "aplazamiento";
                break;
            case 2:
                $formulario = "reingreso";
                break;
            case 3:
                $formulario = "cambioJornada";
                break;
            case 4:
                $formulario = "desercion";
                break;
            case 5:
                $formulario = "retiro";
                break;
            case 6:
                $formulario = "traslado";
                break;

            default:
                $this->vista("usuario/slider");
                break;
        } #fin del switch

        #verificamos si vienen datos por metodo POST
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            if (!$this->novedad->validarNovedadModel(strip_tags(trim($_POST["documento"])))) {
                #reintegro (2) y Deserción (4)
                if ($_POST["id"] == 2 || $_POST["id"] == 4) {

                    $datos = array('id' => strip_tags($_POST["id"]), 'nombre1'           => strip_tags($_POST["nom1_reingreso"]), 'nombre2' => strip_tags($_POST["nom2_reingreso"]),
                        'apellido1'         => strip_tags($_POST["apellido1"]), 'apellido2'  => strip_tags($_POST["apellido2"]),
                        'tdocumento'        => strip_tags($_POST["tdocumento"]), 'documento' => strip_tags(trim($_POST["documento"])),
                        'grupo'             => strip_tags($_POST["grupo"]), 'ficha'          => strip_tags($_POST["ficha"]),
                        'fecha'             => strip_tags($_POST["fecha"]), 'rol'            => strip_tags('4'), 'estado'                       => strip_tags('2'));

                    #si el registro se realizo bien
                    if ($this->novedad->registrarNovedadModel($datos)) {
                        #hacemos el llamado de todas la fichas para enviar el arreglo a la vista del formulario
                        $respuesta = $this->ficha->consultarFichaModel();

                        $datos = array('exito' => 'El registro se realizo correctamente', 'ficha' => $respuesta);
                        #llamada a la vista formulario
                        $this->vista("usuario/formularios/$formulario", $datos);

                        #si no se pudo realizar el registro
                    } else {
                        #hacemos el llamado de todas la fichas para enviar el arreglo a la vista del formulario
                        $respuesta = $this->ficha->consultarFichaModel();
                        $datos     = array('aviso' => 'Algo salio mal no se puedo hacer el registro ', 'ficha' => $respuesta);
                        #llamada a la vista formulario
                        $this->vista("usuario/formularios/$formulario", $datos);

                    }

                }

                #aplazamiento (1) cambio de jornada (3) y retiro (5)
                if ($_POST["id"] == 1 || $_POST["id"] == 3 || $_POST["id"] == 5) {

                    $datos = array('id' => strip_tags($_POST["id"]), 'nombre1'           => strip_tags($_POST["nom1_form2"]), 'nombre2' => strip_tags($_POST["nom2_form2"]),
                        'apellido1'         => strip_tags($_POST["apellido1"]), 'apellido2'  => strip_tags($_POST["apellido2"]),
                        'tdocumento'        => strip_tags($_POST["tdocumento"]), 'documento' => strip_tags($_POST["documento"]),
                        'grupo'             => strip_tags($_POST["grupo"]), 'ficha'          => strip_tags($_POST["ficha"]),
                        'fecha'             => strip_tags($_POST["fecha"]), 'motivo'         => strip_tags($_POST["motivo"]), 'rol'         => strip_tags('4'),
                        'estado'            => strip_tags('2'));

                    #si el registro se realizo bien
                    if ($this->novedad->registrarNovedadModel($datos)) {
                        #hacemos el llamado de todas la fichas para enviar el arreglo a la vista del formulario
                        $respuesta = $this->ficha->consultarFichaModel();

                        $datos = array('exito' => 'El registro se realizo correctamente', 'ficha' => $respuesta);
                        #llamada a la vista formulario
                        $this->vista("usuario/formularios/$formulario", $datos);

                        #si no se pudo realizar el registro
                    } else {
                        #hacemos el llamado de todas la fichas para enviar el arreglo a la vista del formulario
                        $respuesta = $this->ficha->consultarFichaModel();
                        $datos     = array('aviso' => 'Algo salio mal no se puedo hacer el registro ', 'ficha' => $respuesta);
                        #llamada a la vista formulario
                        $this->vista("usuario/formularios/$formulario", $datos);

                    }

                }

                #traslado (6)
                if ($_POST["id"] == 6) {

                    $datos = array('id' => strip_tags($_POST["id"]), 'nombre1'           => strip_tags($_POST["nom1_form3"]), 'nombre2' => strip_tags($_POST["nom2_form3"]),
                        'apellido1'         => strip_tags($_POST["apellido1"]), 'apellido2'  => strip_tags($_POST["apellido2"]),
                        'tdocumento'        => strip_tags($_POST["tdocumento"]), 'documento' => strip_tags($_POST["documento"]),
                        'grupo'             => strip_tags($_POST["grupo"]), 'ficha'          => strip_tags($_POST["ficha"]),
                        'centroa'           => strip_tags($_POST["centroa"]), 'centrot'      => strip_tags($_POST["centron"]),
                        'ciudada'           => strip_tags($_POST["ciudada"]), 'ciudadt'      => strip_tags($_POST["ciudadn"]),
                        'fecha'             => strip_tags($_POST["fecha"]), 'motivo'         => strip_tags($_POST["motivo"]), 'rol'         => strip_tags('4'),
                        'estado'            => strip_tags('2'));

                    #si el registro se realizo bien
                    if ($this->novedad->registrarNovedadModel($datos)) {
                        #hacemos el llamado de todas la fichas para enviar el arreglo a la vista del formulario
                        $respuesta = $this->ficha->consultarFichaModel();

                        $datos = array('exito' => 'El registro se realizo correctamente', 'ficha' => $respuesta);
                        #llamada a la vista formulario
                        $this->vista("usuario/formularios/$formulario", $datos);

                        #si no se pudo realizar el registro
                    } else {
                        #hacemos el llamado de todas la fichas para enviar el arreglo a la vista del formulario
                        $respuesta = $this->ficha->consultarFichaModel();
                        $datos     = array('aviso' => 'Algo salio mal no se puedo hacer el registro ', 'ficha' => $respuesta);
                        #llamada a la vista formulario
                        $this->vista("usuario/formularios/$formulario", $datos);

                    }

                }

                #si el documento ya se encuentra en la tabla usuario o novedad
            } else {

                #hacemos el llamado de todas la fichas y enviamos el arreglo a la vista del formulario
                $respuesta = $this->ficha->consultarFichaModel();
                $datos     = array('aviso' => 'El usuario ya presenta un registro en el aplicativo', 'ficha' => $respuesta);

                #llamar la vista segun su nombre con la variable $formulario
                $this->vista("usuario/formularios/$formulario", $datos);

            }

        } else {
            #hacemos el llamado de todas la fichas y enviamos el arreglo a la vista del formulario
            $respuesta = $this->ficha->consultarFichaModel();
            $datos     = array('ficha' => $respuesta);

            #llamar la vista segun su nombre con la variable $formulario
            $this->vista("usuario/formularios/$formulario", $datos);

        }

    }

    public function consultarNovedad()
    {

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            #borramos los caracteres especiales si bienen en el inpun y los espacion del inicio y fin y lo asignamos a la variable documento
            $documento = strip_tags(trim($_POST["docNovedad"]));

            #si se encuentran datos los enviamos a la vista;
            if ($respuesta = $this->novedad->consultarNovedadModel($documento)) {

                $this->vista("usuario/consultas/consultarNovedad", $respuesta);

                #si no se encuentran datos el usuario no presenta noivedad
            } else {
                $datos = array('aviso' => 'El usuario no presenta ninguna novedad');

                $this->vista("usuario/consultas/consultarNovedad", $datos);
            }

        } else {

            $this->vista("usuario/consultas/consultarNovedad");
        }

    } #fin del metodo

    public function editarNovedad($id=0)
    {

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            #borramos los caracteres especiales si bienen en el inpun y los espacion del inicio y fin y lo asignamos a la variable documento
          $datos = array('nombre1' =>strip_tags($_POST["nombre1"]), 'nombre2' =>strip_tags($_POST["nombre2"]),
          'apellido1' =>strip_tags($_POST["apellido1"]),'apellido2' =>strip_tags($_POST["apellido2"]),
            'tdocumento' =>strip_tags($_POST["tdocumento"]),'grupo' =>strip_tags($_POST["grupo"]), 'id' =>strip_tags($_POST["id"]));

            #si se actualizaron los datos retorna true
            if ($respuesta = $this->novedad->editarNovedadModel($datos)) {
                
                
                $respuesta = $this->novedad->consultarNovedadModel($datos["id"]);
                $_SESSION["exito"]=1;
                $this->vista("usuario/consultas/consultarNovedad",$respuesta);
               
                #si no se actualizan lo datos
            } else {
                $datos = array('aviso' => 'Algo Salio Mal');

                $this->vista("usuario/editar/consultarNovedad", $datos);
            }

        } else {

            $respuesta = $this->novedad->consultarNovedadModel($id);

            $datos = array('id' => $id , 'ed' => $respuesta );

            $this->vista("usuario/editar/editarNovedad",$datos);
        }

    }

}
