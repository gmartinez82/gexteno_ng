<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$eku_param_geo_ciudad_geo_localidad = EkuParamGeoCiudadGeoLocalidad::getOxId($id);

include 'eku_param_geo_ciudad_geo_localidad_uno.php';
?>

