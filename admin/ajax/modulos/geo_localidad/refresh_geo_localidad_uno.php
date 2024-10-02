<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$geo_localidad = GeoLocalidad::getOxId($id);

$estado = ($geo_localidad->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'geo_localidad_uno.php';
?>

