<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$gen_widget = GenWidget::getOxId($id);

$estado = ($gen_widget->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'gen_widget_uno.php';
?>

