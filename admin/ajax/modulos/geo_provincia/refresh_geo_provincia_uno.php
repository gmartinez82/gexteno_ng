<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$geo_provincia = GeoProvincia::getOxId($id);

$estado = ($geo_provincia->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'geo_provincia_uno.php';
?>

