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
        if ($_SESSION["ingreso"] != 0 && $_SESSION["ingreso"] != 1 && $_SESSION["ingreso"] != 2) {
            redireccionar("/novedad");
        }
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
                #reintegro (4) y Deserción (2)
                if ($_POST["id"] == 2 || $_POST["id"] == 4) {

                    if (is_uploaded_file($_FILES['acta']['tmp_name'])) {

                        $xd = trim($_FILES['acta']['name']); //Eliminamos los espacios en blanco
                        $xd = str_replace(" ", "", $xd); //Sustituye una expresión regular
                        $nombreFichero= RUTA_APP."actas/$xd";

                        if (file_exists($nombreFichero)) {
                                unlink($nombreFichero);
                                $xd= trim ($_FILES['acta']['name']);
                            }else{
                                $xd= $_POST["documento"]. $xd;
                            }
                    }

                    $datos = array('id' => strip_tags($_POST["id"]), 'nombre1'           => strip_tags($_POST["nom1_reingreso"]), 'nombre2' => strip_tags($_POST["nom2_reingreso"]),
                        'apellido1'         => strip_tags($_POST["apellido1"]), 'apellido2'  => strip_tags($_POST["apellido2"]),
                        'tdocumento'        => strip_tags($_POST["tdocumento"]), 'documento' => strip_tags(trim($_POST["documento"])),
                        'grupo'             => strip_tags($_POST["grupo"]), 'ficha'          => strip_tags($_POST["ficha"]),
                        'fecha'             => strip_tags($_POST["fecha"]), 'rol'            => strip_tags('4'), 'estado'                       => strip_tags('2'), 'acta' => $xd, 'estadoNov' => strip_tags('1'));

                    #si el registro se realizó bien
                    if ($this->novedad->registrarNovedadModel($datos)) {

                        $ruta        = RUTA_APP . "/actas/";
                        $acta        = trim($_FILES['acta']['name']); //Eliminamos los espacios en blanco
                        $nombrefinal = str_replace(" ", "", $xd); //Sustituye una expresión regular
                        $archivos    = $ruta . $nombrefinal;

                        if (file_exists($nombreFichero)) {
                                 $nombrefinal= str_replace("", "", $xd);
                        }else{
                                $nombrefinal= str_replace("", "", $xd);
                        }

                        move_uploaded_file($_FILES['acta']['tmp_name'], $archivos);
                        //Se devuelve una alerta de exito y se llama a la vista correspondiente

                        #hacemos el llamado de todas la fichas para enviar el arreglo a la vista del formulario
                        $respuesta = $this->ficha->consultarFichaModel();

                        $datos = array('exito' => 'El registro se realizó correctamente', 'ficha' => $respuesta);
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

                   if (is_uploaded_file($_FILES['acta']['tmp_name'])) {

                        $xd = trim($_FILES['acta']['name']); //Eliminamos los espacios en blanco
                        $xd = str_replace(" ", "", $xd); //Sustituye una expresión regular
                        $nombreFichero= RUTA_APP."actas/$xd";

                        if (file_exists($nombreFichero)) {
                                unlink($nombreFichero);
                                $xd= trim ($_FILES['acta']['name']);
                            }else{
                                $xd= $_POST["documento"]. $xd;
                            }
                    }

                    $datos = array('id' => strip_tags($_POST["id"]), 'nombre1'           => strip_tags($_POST["nom1_form2"]), 'nombre2' => strip_tags($_POST["nom2_form2"]),
                        'apellido1'         => strip_tags($_POST["apellido1"]), 'apellido2'  => strip_tags($_POST["apellido2"]),
                        'tdocumento'        => strip_tags($_POST["tdocumento"]), 'documento' => strip_tags($_POST["documento"]),
                        'grupo'             => strip_tags($_POST["grupo"]), 'ficha'          => strip_tags($_POST["ficha"]),
                        'fecha'             => strip_tags($_POST["fecha"]), 'motivo'         => strip_tags($_POST["motivo"]), 'rol'         => strip_tags('4'),
                        'estado'            => strip_tags('2'), 'acta'                       => $xd, 'estadoNov'                            => strip_tags('1'));

                    #si el registro se realizó bien
                    if ($this->novedad->registrarNovedadModel($datos)) {

                        $ruta        = RUTA_APP . "/actas/";
                        $acta        = trim($_FILES['acta']['name']); //Eliminamos los espacios en blanco
                        $nombrefinal = str_replace(" ", "", $xd); //Sustituye una expresión regular
                        $archivos    = $ruta . $nombrefinal;

                        if (file_exists($nombreFichero)) {
                                 $nombrefinal= str_replace("", "", $xd);
                        }else{
                                $nombrefinal= str_replace("", "", $xd);
                        }

                        move_uploaded_file($_FILES['acta']['tmp_name'], $archivos);
                        //Se devuelve una alerta de exito y se llama a la vista correspondiente

                        #hacemos el llamado de todas la fichas para enviar el arreglo a la vista del formulario
                        $respuesta = $this->ficha->consultarFichaModel();

                        $datos = array('exito' => 'El registro se realizó correctamente', 'ficha' => $respuesta);
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

                   if (is_uploaded_file($_FILES['acta']['tmp_name'])) {

                        $xd = trim($_FILES['acta']['name']); //Eliminamos los espacios en blanco
                        $xd = str_replace(" ", "", $xd); //Sustituye una expresión regular
                        $nombreFichero= RUTA_APP."actas/$xd";

                        if (file_exists($nombreFichero)) {
                                unlink($nombreFichero);
                                $xd= trim ($_FILES['acta']['name']);
                            }else{
                                $xd= $_POST["documento"]. $xd;
                            }
                    }

                    $datos = array('id' => strip_tags($_POST["id"]), 'nombre1'           => strip_tags($_POST["nom1_form3"]), 'nombre2' => strip_tags($_POST["nom2_form3"]),
                        'apellido1'         => strip_tags($_POST["apellido1"]), 'apellido2'  => strip_tags($_POST["apellido2"]),
                        'tdocumento'        => strip_tags($_POST["tdocumento"]), 'documento' => strip_tags($_POST["documento"]),
                        'grupo'             => strip_tags($_POST["grupo"]), 'ficha'          => strip_tags($_POST["ficha"]),
                        'centroa'           => strip_tags($_POST["centroa"]), 'centrot'      => strip_tags($_POST["centron"]),
                        'ciudada'           => strip_tags($_POST["ciudada"]), 'ciudadt'      => strip_tags($_POST["ciudadn"]),
                        'fecha'             => strip_tags($_POST["fecha"]), 'motivo'         => strip_tags($_POST["motivo"]), 'rol'         => strip_tags('4'),
                        'estado'            => strip_tags('2'), 'acta'                       => $xd, 'estadoNov'                            => strip_tags('1'));

                    #si el registro se realizó bien
                    if ($this->novedad->registrarNovedadModel($datos)) {

                        $ruta        = RUTA_APP . "/actas/";
                        $acta        = trim($_FILES['acta']['name']); //Eliminamos los espacios en blanco
                        $nombrefinal = str_replace(" ", "", $xd); //Sustituye una expresión regular
                        $archivos    = $ruta . $nombrefinal;

                        if (file_exists($nombreFichero)) {
                                 $nombrefinal= str_replace("", "", $xd);
                        }else{
                                $nombrefinal= str_replace("", "", $xd);
                        }

                        
                        move_uploaded_file($_FILES['acta']['tmp_name'], $archivos);
                        //Se devuelve una alerta de exito y se llama a la vista correspondiente

                        #hacemos el llamado de todas la fichas para enviar el arreglo a la vista del formulario
                        $respuesta = $this->ficha->consultarFichaModel();

                        $datos = array('exito' => 'El registro se realizó correctamente', 'ficha' => $respuesta);
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
        $novedades = $this->novedad->consultarNovedadesModel();
        $datos     = array('novedades' => $novedades);

        if (isset($_GET['file'])) {
            $fileName = basename($_GET['file']);
            $filePath = RUTA_APP . "/actas/$fileName";
            if (!empty($fileName) && file_exists($filePath)) {
                // Define headers
                header('Content-Description: File Transfer');
                header('Content-Type: application/octet-stream');
                header('Content-Disposition: attachment; filename="' . basename($fileName) . '"');
                header('Expires: 0');
                header('Cache-Control: must-revalidate');
                header('Pragma: public');
                header('Content-Length: ' . filesize($filePath));
                readfile($filePath);
            }
        }

        $this->vista("usuario/consultas/consultarNovedad", $datos);

    } #fin del metodo

    public function editarNovedad($id = 0)
    {

        if ($_SESSION["ingreso"] != 0 && $_SESSION["ingreso"] != 1 && $_SESSION["ingreso"] != 2) {
            redireccionar("/novedad");
        }

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            #borramos los caracteres especiales si bienen en el inpun y los espacion del inicio y fin y lo asignamos a la variable documento
            $datos = array('nombre1' => strip_tags($_POST["nombre1"]), 'nombre2'     => strip_tags($_POST["nombre2"]),
                'apellido1'              => strip_tags($_POST["apellido1"]), 'apellido2' => strip_tags($_POST["apellido2"]),
                'tdocumento'             => strip_tags($_POST["tdocumento"]), 'grupo'    => strip_tags($_POST["grupo"]), 'id' => strip_tags($_POST["id"]));

            #si se actualizaron los datos retorna true
            if ($respuesta = $this->novedad->editarNovedadModel($datos)) {

                $novedades         = $this->novedad->consultarNovedadesModel();
                $datos             = array('novedades' => $novedades);
                $_SESSION["exito"] = 1;
                $this->vista("usuario/consultas/consultarNovedad", $datos);

                #si no se actualizan lo datos
            } else {
                $datos = array('aviso' => 'Algo Salio Mal');

                $this->vista("usuario/editar/consultarNovedad", $datos);
            }

        } else {
            $novedades = $this->novedad->consultarNovedadesModel();

            $datos   = array('novedades' => $novedades);
            $novedad = $this->novedad->consultarNovedadModel($id);
            $datos2  = array('id' => $id, 'ed' => $novedad);

            $this->vista("usuario/consultas/consultarNovedad", $datos, $datos2);
        }

    } #fin del metodo

    #inhabilitar una novedad dependiendo del documento
    public function eliminarNovedad($id=0)
    {
        if ($_SESSION["ingreso"] != 0 && $_SESSION["ingreso"] != 1 && $_SESSION["ingreso"] != 2) {
            redireccionar("/novedad");
        }
        if (isset($_GET["eliminar"])) {

            if ($respuesta = $this->novedad->eliminarNovedadModel($_GET["eliminar"])) {

                $novedades         = $this->novedad->consultarNovedadesModel();
                $datos             = array('novedades' => $novedades);
                $_SESSION["exito"] = 2;
                $this->vista("usuario/consultas/consultarNovedad", $datos);
                
            }else {
                $datos = array('aviso' => 'Algo Salio Mal');

                $this->vista("usuario/editar/consultarNovedad", $datos);
            }


        }else{

            $novedades = $this->novedad->consultarNovedadesModel();

            $datos   = array('novedades' => $novedades);
            $novedad = $this->novedad->consultarNovedadModel($id);
            $datos2  = array('eliminar' => $novedad);

            $this->vista("usuario/consultas/consultarNovedad", $datos, $datos2);

        }




    }

    public function descargarFormato()
    {

        if (isset($_GET['file'])) {

            switch ($_GET['file']) {

                case 1:
                    $nombre = "aplazamiento.doc";
                    break;
                case 2:
                    $nombre = "reintegro.doc";
                    break;
                case 3:
                    $nombre = "cambioJornada.doc";
                    break;
                case 4:
                    $nombre = "desercion.doc";
                    break;
                case 5:
                    $nombre = "retiro.doc";
                    break;
                case 6:
                    $nombre = "traslado.doc";
                    break;

                default:
                    $this->vista("usuario/slider");
                    break;
            } #fin del switch

            $fileName = basename($nombre);
            $filePath = RUTA_APP . "/actas/formatos/$fileName";
            if (!empty($fileName) && file_exists($filePath)) {
                // Define headers
                header('Content-Description: File Transfer');
                header('Content-Type: application/octet-stream');
                header('Content-Disposition: attachment; filename="' . basename($fileName) . '"');
                header('Expires: 0');
                header('Cache-Control: must-revalidate');
                header('Pragma: public');
                header('Content-Length: ' . filesize($filePath));
                readfile($filePath);
            }

        }
        $this->vista("usuario/descargarFormato");
    }

} #fin de la clase
