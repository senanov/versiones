<?php

class RegistrarNovedad
{
    #llamada de ficha
    #-------------------------------------
    public static function llamarFichaController()
    {
        $respuesta = RegistroNovedades::llamarFichaModel("ficha", "trimestre", "sede", "modalidad", "programa", "jornada");

        foreach ($respuesta as $fila) {
            echo "<option value=" . $fila['codigo_ficha'] . ">" . $fila['codigo_ficha'] . "</option>";
        }
    }

    public static function buscarFichaAjaxController($bficha)
    {
        $respuesta = RegistroNovedades::buscarFichaAjaxModel("ficha", "trimestre", "sede", "modalidad", "programa", "jornada", $bficha);
        return $respuesta;

    }

    #llamada de programas
    #--------------------------------------
    public function programasController()
    {
        $respuesta = RegistroNovedades::programasModels("programa", "tipo_programa");

        //programas tecnicos
        echo '<optgroup label="Programas Tècnicos">';
        foreach ($respuesta as $fila) {
            if ($fila["id_tipo_programa"] == 1) {
                echo '<option value=' . $fila["id"] . '>' . $fila["nombre_programa"] . '</option>';
            }
        }
        echo '</optgroup>';

        //programas tecnologicos
        echo '<optgroup label="Programas Tecnològicos">';
        foreach ($respuesta as $fila) {
            if ($fila["id_tipo_programa"] == 2) {
                echo '<option value=' . $fila["id"] . '>' . $fila["nombre_programa"] . '</option>';
            }
        }
        echo '</optgroup>';

        //especializaciones
        echo '<optgroup label="Especializaciones">';
        foreach ($respuesta as $fila) {
            if ($fila["id_tipo_programa"] == 3) {
                echo '<option value=' . $fila["id"] . '>' . $fila["nombre_programa"] . '</option>';
            }
        }
        echo '</optgroup>';
    }

    #----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

    #Registro del reingreso y desercion
    #--------------------------------------
    public function reingresoDesercionController()
    {
        if (isset($_POST["nom1_reingreso"])) {
            $datos = array('id' => strip_tags($_POST["id"]), 'nombre1'           => strip_tags($_POST["nom1_reingreso"]), 'nombre2' => strip_tags($_POST["nom2_reingreso"]),
                'apellido1'         => strip_tags($_POST["apellido1"]), 'apellido2'  => strip_tags($_POST["apellido2"]),
                'tdocumento'        => strip_tags($_POST["tdocumento"]), 'documento' => strip_tags($_POST["documento"]),
                'grupo'             => strip_tags($_POST["grupo"]), 'ficha'          => strip_tags($_POST["ficha"]),
                'fecha'             => strip_tags($_POST["fecha"]), 'rol'            => strip_tags('4'), 'estado'                       => strip_tags('2'));

            $respuesta = RegistroNovedades::reingresoDesercionModels($datos, 'usuario', 'novedad');

            if ($respuesta == "exito") {
                echo '<br><div class="alert alert-success alert-dismissible">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Exito!</strong>El registro se realizo correctamente <a href="index.php?action=consulta_novedades&id=' . $_POST["documento"] . '"><input id="ip" type="button" value="Ver registro"></a>
            </div>';
            } else {
                echo '<div class="alert alert-danger alert-dismissible">
                  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                  <strong>Error:</strong>No se puede realizar la Novedad</div><br>';
            }
        }
    }

    #Registro del aplazamiento, cambio de jornada y retiro
    #--------------------------------------
    public function aplazamientoCambioJornadaRetiroController()
    {
        if (isset($_POST["nom1_form2"])) {
            $datos = array('id' => strip_tags($_POST["id"]), 'nombre1'           => strip_tags($_POST["nom1_form2"]), 'nombre2' => strip_tags($_POST["nom2_form2"]),
                'apellido1'         => strip_tags($_POST["apellido1"]), 'apellido2'  => strip_tags($_POST["apellido2"]),
                'tdocumento'        => strip_tags($_POST["tdocumento"]), 'documento' => strip_tags($_POST["documento"]),
                'grupo'             => strip_tags($_POST["grupo"]), 'ficha'          => strip_tags($_POST["ficha"]),
                'fecha'             => strip_tags($_POST["fecha"]), 'motivo'         => strip_tags($_POST["motivo"]), 'rol'         => strip_tags('4'),
                'estado'            => strip_tags('2'));

            $respuesta = RegistroNovedades::aplazamientoCambioJornadaRetiroModel($datos, "usuario", "novedad");

            if ($respuesta == "exito") {
                echo '<br><div class="alert alert-success alert-dismissible">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Exito!</strong>El registro se realizo correctamente <a href="index.php?action=consulta_novedades&id=' . $_POST["documento"] . '"><input id="ip" type="button" value="Ver registro"></a>
            </div>';
            } else {
                echo '<div class="alert alert-danger alert-dismissible">
                  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                  <strong>Error:</strong>Este aprendiz ya presenta esta novedad</div><br>';
            }
        }
    }

    #Registro traslado
    #--------------------------------------
    public function trasladoController()
    {
        if (isset($_POST["nom1_form3"])) {
            $datos = array('id' => strip_tags($_POST["id"]), 'nombre1'           => strip_tags($_POST["nom1_form3"]), 'nombre2' => strip_tags($_POST["nom2_form3"]),
                'apellido1'         => strip_tags($_POST["apellido1"]), 'apellido2'  => strip_tags($_POST["apellido2"]),
                'tdocumento'        => strip_tags($_POST["tdocumento"]), 'documento' => strip_tags($_POST["documento"]),
                'grupo'             => strip_tags($_POST["grupo"]), 'ficha'          => strip_tags($_POST["ficha"]),
                'centroa'           => strip_tags($_POST["centroa"]), 'centrot'      => strip_tags($_POST["centron"]),
                'ciudada'           => strip_tags($_POST["ciudada"]), 'ciudadt'      => strip_tags($_POST["ciudadn"]),
                'fecha'             => strip_tags($_POST["fecha"]), 'motivo'         => strip_tags($_POST["motivo"]), 'rol'         => strip_tags('4'),
                'estado'            => strip_tags('2'));

            $respuesta = RegistroNovedades::trasladoModel($datos, "usuario", "novedad");

            if ($respuesta == "exito") {
                echo '<br><div class="alert alert-success alert-dismissible">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Exito!</strong>El registro se realizo correctamente <a href="index.php?action=consulta_novedades&id=' . $_POST["documento"] . '"><input id="ip" type="button" value="Ver registro"></a>
            </div>';
            } else {
                echo '<div class="alert alert-danger alert-dismissible">
                  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                  <strong>Error:</strong>Este aprendiz ya presenta esta novedad</div><br>';
            }
        }
    }
}