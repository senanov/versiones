<select name="ficha" id="ficha">
<option disabled selected>selecionar</option>

  <?php
foreach ($datos as $fila) {
    echo "<option value=" . $fila->codigo_ficha . ">" . $fila->codigo_ficha . "</option>";
}
?>
</select>