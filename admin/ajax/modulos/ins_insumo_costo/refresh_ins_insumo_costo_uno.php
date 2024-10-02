<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$ins_insumo_costo = InsInsumoCosto::getOxId($id);

$estado = ($ins_insumo_costo->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'ins_insumo_costo_uno.php';
?>

