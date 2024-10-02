<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$geo_zona = GeoZona::getOxId($id);

$estado = ($geo_zona->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'geo_zona_uno.php';
?>

