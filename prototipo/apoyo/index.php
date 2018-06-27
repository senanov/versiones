<?php
require_once "models/EnlacesPaginas.php";
require_once "models/CrudNovedades.php";
require_once "models/RegistroNovedades.php";
require_once "controllers/RegistrarNovedad.php";
require_once "controllers/Novedades.php";
require_once "controllers/apoyo.php";
require_once "controllers/Tabla.php";

$seguridad= new Apoyo();
$seguridad -> seguridad();

$admin = new Apoyo();
$admin -> plantilla();


?>