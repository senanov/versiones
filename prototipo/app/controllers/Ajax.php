<?php

class Ajax extends Controller
{

    public function __construct()
    {
        $this->usuarioModelo = $this->modelo('UsuarioModel');
        $this->ficha         = $this->modelo('FichaModel');
        $this->programa      = $this->modelo('programaModel');
    }

    public function index()
    {

        $this->vista("paginas/inicio");

    }

    public function traerDatosFicha()
    {
        if (isset($_POST["validarFicha"])) {
            $ficha = $_POST["validarFicha"];
            echo json_encode($this->ficha->buscarFichaAjaxModel($ficha));
        } else {
            echo "sin ficha";
        }

    }

    public function validarDocumento()
    {
        if (isset($_POST["vdocumento"])) {
            $documento = $_POST["vdocumento"];

            $datos = array('ndocumento' => $documento, 'correo' => 'NULL');

            $respuesta = $this->usuarioModelo->ValidarUsuarioModel($datos);
            if (isset($respuesta->documento_usuario)) {

                if ($respuesta->contrasena == 'N/A' && $respuesta->correo == 'N/A') {
                    echo '<div class="alert alert-success alert-dismissible">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>Aviso:</strong>  Por favor Completa Tu Registro
                </div><br>';
                } else if ($respuesta->documento_usuario == $documento) {
                    echo '<div class="alert alert-danger alert-dismissible">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>Aviso:</strong>  Un usuario ya se encuentra registrado con este Numero de documento
                </div><br>';
                }
            }

        }

    }

    public function validarCorreo()
    {

        if (isset($_POST["vcorreo"])) {

            $correo = $_POST["vcorreo"];
            $datos  = array('ndocumento' => 'NULL', 'correo' => $correo);

            $respuesta = $this->usuarioModelo->ValidarUsuarioModel($datos);

            if (isset($respuesta->correo)) {
                echo '<div class="alert alert-danger alert-dismissible">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>Aviso:</strong>  Un usuario ya se encuentra registrado con este correo
                </div><br>';
            }

        }

    }

    public function validarUsuarioActivo()
    {

        if (isset($_POST["vusuario"])) {

            $usuario   = trim($_POST["vusuario"]);
            $respuesta = $this->usuarioModelo->loginModel($usuario);
            if (isset($respuesta->estado)) {
                if ($respuesta->estado == 2) {
                    echo "El usuario se encuentra deshabilitado";
                }
            } else if (!$respuesta) {

                echo "Este Usuario No Se Encuentra Registrado";
            }

        }

    }

    public function completarRegistro()
    {
        if (isset($_POST["vdocumento"])) {
            $documento = $_POST["vdocumento"];
            $respuesta = $this->usuarioModelo->loginModel($documento);
            if ($respuesta->contrasena == 'N/A' && $respuesta->correo == 'N/A') {
                echo json_encode($this->usuarioModelo->loginModel($documento));
            }

        }

    }

    public function validarTrimestres()
    {

        if (isset($_POST["programa"])||isset($_POST["jornada"])) {

            $programa  = $_POST["programa"];
            $jornada   = $_POST["jornada"];
            $respuesta = $this->programa->programaAjaxModel($programa);

            if ($respuesta->id_tipo_programa == 1 && $jornada == 1) {
                echo '2';
            }

            if ($respuesta->id_tipo_programa == 1 && $jornada ==2 ) {
                echo '4';
            }
             if ($respuesta->id_tipo_programa == 1 && $jornada ==3 ) {
                echo '4';
            }

            if ($respuesta->id_tipo_programa == 2 && $jornada == 1) {
                echo '6';
            }

            if ($respuesta->id_tipo_programa == 2 && $jornada == 2) {
                echo '8';
            }

            if ($respuesta->id_tipo_programa == 2 && $jornada == 3 ) {
                echo '8';
            }

            if ($respuesta->id_tipo_programa == 3) {
                echo '2';
            }

        }

    }

}
