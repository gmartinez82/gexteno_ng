<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$prv_insumo_costo = PrvInsumoCosto::getOxId($id);

$estado = ($prv_insumo_costo->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'prv_insumo_costo_uno.php';
?>

