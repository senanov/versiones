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
    #insertar datos en la tabla ficha
    public function fichaController()
    {

        if (isset($_POST["num_ficha"])) {

            #validar ficha
            $validar = RegistroNovedades::validarFichaModels("ficha", $_POST["num_ficha"]);
            if (!$validar) {
                $datos = array('ficha' => strip_tags($_POST["num_ficha"]), 'sede'     => strip_tags($_POST["sede"]), 'jornada'       => strip_tags($_POST["jornada"]),
                    'modalidad'            => strip_tags($_POST["modalidad"]), 'programa' => strip_tags($_POST["programa"]), 'trimestre' => strip_tags($_POST["trimestre"]));

                $respuesta = RegistroNovedades::fichaModels("ficha", $datos);

                if ($respuesta == "exito") {
                    echo '<br><div class="alert alert-success alert-dismissible">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>Exito!</strong>La ficha se agrego correctamente</div>';
                } else {
                    echo '<div class="alert alert-danger alert-dismissible">
                  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                  <strong>Error:</strong>No se puedo registrar la ficha</div><br>';
                }
            } else {
                echo '<div class="alert alert-danger alert-dismissible">
                  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                  <strong>Error:</strong>Esta ficha ya se encuentra en la base de datos</div><br>';

            }

        }

    }
    #Mostrar la tabla de fichas
    #---------------------------------------------------------------------------------------------------------
    public function tablaFichasController()
    {

        $respuesta = RegistroNovedades::llamarFichaModel("ficha", "trimestre", "sede", "modalidad", "programa", "jornada");

        foreach ($respuesta as $ficha) {
            echo '<tr>
                <td>' . $ficha["codigo_ficha"] . '</td>
                <td>' . $ficha["nombre_sede"] . '</td>
                <td>' . $ficha["tipo_jornada"] . '</td>
                <td>' . $ficha["tipo_modalidad"] . '</td>
                <td>' . $ficha["nombre_programa"] . '</td>
                <td>' . $ficha["numero_trimestre"] . '</td>
                <td><center><a href="index.php?action=edFicha&ficha=' . $ficha["codigo_ficha"] . '"><input id="ip" type="button" value="Editar Ficha"></a></center></td>
                </tr>';
        }

    }

    #Editar ficha
    #-----------------------------------------------------------------------------------------------------------
    public function editarFichaController()
    {

        if (isset($_GET["ficha"])) {
            $respuesta = RegistroNovedades::llamarFichaModel("ficha", "trimestre", "sede", "modalidad", "programa", "jornada");


            foreach ($respuesta as $ficha) {
                if ($ficha["codigo_ficha"]==$_GET["ficha"]) {

                $sede ='<option selected value='. $ficha["id_sede"] .'>'. $ficha["nombre_sede"] .'</option>';
                $jornada ='<option selected value='. $ficha["id_jornada"] .'>'. $ficha["tipo_jornada"] .'</option>';
                $trimeste ='<option selected value='. $ficha["id_trimestre"] .'>'. $ficha["numero_trimestre"] .'</option>';

                   echo '<tr>
                <td>' . $ficha["codigo_ficha"] . '
                <input type="hidden" name="ficha" value='.$ficha["codigo_ficha"].'></td>
                <td><select name="sede" id="td" required>
                      '.$sede.'                     
                      <option value="1">Alamos</option>
                      <option value="2">Colombia</option>
                      <option value="3">Complejo Sur</option>
                      <option value="4">Restrepo</option>
                      <option value="5">Ricaurte</option>
                  </select> </td>
                <td><select name="jornada" id="td" required>
                       '.$jornada.' 
                      <option value="1">Diurna</option>
                      <option value="2">Nocturna</option>
                      <option value="3">Fines de semana</option>
                  </select> </td>
                <td>' . $ficha["tipo_modalidad"] . '</td>
                <td>' . $ficha["nombre_programa"] . '</td>
                <td><select name="trimestre" id="td" required>
                       '. $trimeste.'
                      <option value="1">Primero</option>
                      <option value="2">Segundo</option>
                      <option value="3">Tercero</option>
                      <option value="4">Cuarto</option>
                      <option value="5">Quinto</option>
                      <option value="6">Sexto</option>
                      <option value="7">Septimo</option>
                      <option value="8">Octavo</option>
                  </select> </td>
                <td><input  type="submit" value="continuar" id="ip"></td>
                </tr>';
                }else{

                echo '<tr>
                <td>' . $ficha["codigo_ficha"] . '</td>
                <td>' . $ficha["nombre_sede"] . '</td>
                <td>' . $ficha["tipo_jornada"] . '</td>
                <td>' . $ficha["tipo_modalidad"] . '</td>
                <td>' . $ficha["nombre_programa"] . '</td>
                <td>' . $ficha["numero_trimestre"] . '</td>
                <td><center><a href="index.php?action=edFicha&ficha=' . $ficha["codigo_ficha"] . '"><input id="ip" type="button" value="Editar Ficha"></a></center></td>
                </tr>';
                }
            }

        }

    }

     public function actualizarFichaController(){

        

        if (isset($_POST["sede"])) {

            $datos = array('ficha' => strip_tags($_POST["ficha"]), 'sede' => strip_tags($_POST["sede"]),'jornada'=>strip_tags($_POST["jornada"]), 'trimestre' => strip_tags($_POST["trimestre"] ));
            $respuesta = RegistroNovedades::actualizarFichaModel($datos);


             if ($respuesta=="exito") {
                $_SESSION["f"]=1;
                echo '<meta http-equiv="refresh" content="0; url=tablaFichas">';
            }
        }





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