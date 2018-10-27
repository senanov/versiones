<br><br><br><br>
<?php
if (isset($_SESSION["aviso"])) 
{
	if ($_SESSION["aviso"]==1) 
	{
		echo '<div class="alert alert-success alert-dismissible exito">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Aviso:</strong>  los cambios se realizaron exitosamente  
            </div><br><br>';

        $_SESSION["aviso"]=0;
	}
}
$usuario = new Novedades();
$usuario -> perfilUsuarioController();