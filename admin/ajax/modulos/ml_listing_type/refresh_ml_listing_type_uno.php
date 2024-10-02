<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$ml_listing_type = MlListingType::getOxId($id);

$estado = ($ml_listing_type->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'ml_listing_type_uno.php';
?>

