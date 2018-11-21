<?php

class Ajax extends Controller
{

    public function __construct()
    {
        $this->usuarioModelo = $this->modelo('UsuarioModel');
        $this->ficha       = $this->modelo('FichaModel');
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

            if ($respuesta->documento_usuario == $documento) {
                echo '<div class="alert alert-danger alert-dismissible">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>Aviso:</strong>  Un usuario ya se encuentra registrado con este Numero de documento
                </div><br>';
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

            $usuario   = $_POST["vusuario"];
            $respuesta = $this->usuarioModelo->loginModel($usuario);
            if ($respuesta->estado == 2) {
                echo "El usuario se encuentra deshabilitado";
            }

        }

    }

}
