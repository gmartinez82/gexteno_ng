<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$ml_category_ml_shipping_mode = MlCategoryMlShippingMode::getOxId($id);

$estado = ($ml_category_ml_shipping_mode->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'ml_category_ml_shipping_mode_uno.php';
?>

