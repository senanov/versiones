<?php
require_once "models/EnlacesPaginas.php";
require_once "models/CrudNovedades.php";
require_once "controllers/Novedades.php";
require_once "controllers/Invitado.php";

$seguridad= new Invitado();
$seguridad -> seguridad();

$admin = new Invitado();
$admin -> plantilla();


?>