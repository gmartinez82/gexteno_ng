<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$sld_slider = SldSlider::getOxId($id);

$estado = ($sld_slider->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'sld_slider_uno.php';
?>

