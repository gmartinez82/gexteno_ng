<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$gral_ruta_geo_localidad_cli_centro_recepcion = GralRutaGeoLocalidadCliCentroRecepcion::getOxId($id);

$estado = ($gral_ruta_geo_localidad_cli_centro_recepcion->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'gral_ruta_geo_localidad_cli_centro_recepcion_uno.php';
?>

