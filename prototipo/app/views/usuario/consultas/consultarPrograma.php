<?php
require_once "../app/views/usuario/inc/header.php";
require_once "../app/views/usuario/inc/banner.php";

if ($_SESSION["rol"] == 1 || $_SESSION["rol"] == 0) {
    require_once "../app/views/usuario/inc/menuAdmin.php";
} else if ($_SESSION["rol"] == 2) {
    require_once "../app/views/usuario/inc/menuApoyo.php";
} else {
    require_once "../app/views/usuario/inc/menuInvitado.php";
}

?>


<br><br>
<div class="container">
<div class="row">
<div class="col">
<div class="form-group pull-right ">
    <input type="text" class="search form-control" placeholder="Buscar">
</div>
<span class="counter pull-right"></span>
<table class="table table-hover table-bordered results ">
<?php
if (isset($datos["aviso"])) {

    echo '<div class="alert alert-success alert-dismissible">
          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
          <strong>Exito! </strong>' . $datos["aviso"] . '</div>';

}
?>
  <thead align="center" class="thead-dark">
    <tr>
    <th>Id Programa</th>
    <th>Tipo de Programa</th>
    <th>Programas</th>
    <th>Opciones</th>
    </tr>
    <tr class="warning no-result">
      <td colspan="4"><i class="fa fa-warning"></i> No result</td>
    </tr>
  </thead>
<tbody>
<?php

if (isset($datos["id"])) {

    foreach ($datos["ed"] as $fila) {
        if ($fila->id == $datos["id"]) {
            $tprograma = $fila->programa;
            $programa  = $fila->nombre_programa;
            echo "<form method='POST' action='".RUTA_URL."/programa/editarPrograma'>
          <tr class='bg-secondary'>
          <td><font color='white'>".$datos["id"]."</font></td>
          <td><font color='white'>$tprograma</font></td>
              <td><input size='80%' type='text' name='programa' value='$programa'>
              <input  type='hidden' name='codigo' value='" .$fila->id. "'></td>
              <td class='td'><input  type='submit' value='continuar' id='ip'>  | </td></tr></form>";
        }else{

         echo '<tr>
        <td>' . $fila->id . '</td>
        <td>' . $fila->programa . '</td>
        <td>' . $fila->nombre_programa . '</td>
        <td class="td" colspan="2"><center><a          href="'.RUTA_URL.'/programa/editarPrograma/'.$fila->id.'"><input id="ip" type="button" value="Editar"></a></center>
        </tr>';


        }

    }
} else {
  foreach ($datos["ed"] as $fila) {

    echo '<tr>
        <td>' . $fila->id . '</td>
        <td>' . $fila->programa . '</td>
        <td>' . $fila->nombre_programa . '</td>
        <td class="td" colspan="2"><center><a href="'.RUTA_URL.'/programa/editarPrograma/'.$fila->id.'"><input id="ip" type="button" value="Editar"></a></center>
        </tr>';
    
  }
    
}

?>
   </tbody>
   </table>



</div></div></div>

<?php
require_once "../app/views/inc/footer.php";
?>