<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$vta_presupuesto = VtaPresupuesto::getOxId($id);

$estado = ($vta_presupuesto->getEstado()) ? 'habilitado' : 'deshabilitado';
$destacado = ($vta_presupuesto->getDestacado()) ? 'destacado' : '';
include 'vta_presupuesto_uno.php';
?>

