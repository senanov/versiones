<?php
require_once "models/EnlacesPaginas.php";
require_once "models/CrudNovedades.php";
require_once "controllers/Novedades.php";
require_once "controllers/admin.php";
require_once "views/modulos/Tabla.php";

$seguridad= new Admin();
$seguridad -> seguridad();

$admin = new Admin();
$admin -> plantilla();


?>