<?php

if (isset($_POST["validarFicha"])) {
require_once "../../admin/models/EnlacesPaginas.php";
require_once "../../admin/models/RegistroNovedades.php";
require_once "../../admin/controllers/RegistrarNovedad.php";
require_once "../../admin/controllers/admin.php";
}else{

require_once "../../admin/models/EnlacesPaginas.php";
require_once "../../models/crud.php";
require_once "../../admin/controllers/RegistrarNovedad.php";
require_once "../../admin/controllers/admin.php";
}



class Ajax
{
    function traerDatosFicha($ficha)
    {
        echo json_encode(RegistrarNovedad::buscarFichaAjaxController($ficha));
    }

    public function validarDocumento($documento)
    {
        $datos = array('ndocumento' => $documento);

        $respuesta = Datos::validarUsuarioModel($datos, "usuario");

        if ($respuesta["documento_usuario"]) {
            echo '<div class="alert alert-danger alert-dismissible">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>Aviso:</strong>  Un usuario ya se encuentra registrado con este Numero de documento
                </div><br>';
        }

        
    }

    function validarCorreo($correo)
        {
            $datos = array('correo' => $correo);

            $respuesta = Datos::validarUsuarioModel($datos, "usuario");

            if ($respuesta["correo"]) {
                echo '<div class="alert alert-danger alert-dismissible">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>Aviso:</strong>  Un usuario ya se encuentra registrado con este correo
                </div><br>';
            }

        }

        function validarUsuarioActivo($documento){

            $datos = array('usuario' =>$documento,);
            $respuesta = Datos::ingresoUsuarioModel($datos,"usuario");

        }


}

    if (isset($_POST["validarFicha"])) {
        $a = new Ajax();
        $a->traerDatosFicha($_POST["validarFicha"]);
    }

    if (isset($_POST["vdocumento"])) {
        $validar = new Ajax();
        $validar->validarDocumento($_POST["vdocumento"]);
    }

    if (isset($_POST["vcorreo"])) {
        $validar = new Ajax();
        $validar->validarCorreo($_POST["vcorreo"]);
    }


     if (isset($_POST["vusuario"])) {
        $validar = new Ajax();
        $validar->validarCorreo($_POST["vusuario"]);
    }

