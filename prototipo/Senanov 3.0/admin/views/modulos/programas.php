<select name="programa"> 
<optgroup label="Programas Técnicos..">
 <?php

$registrar = new RegistrarNovedad();
$registrar -> tecnicosController();
echo '</optgroup> <optgroup label="Programas Tecnológicos">';
$registrar -> tecnologosController();
echo '</optgroup><optgroup label="Especializaciones">';
$registrar -> especializacionController();
?>
</optgroup></select>