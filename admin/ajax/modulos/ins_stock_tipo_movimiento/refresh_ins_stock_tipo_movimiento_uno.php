<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$ins_stock_tipo_movimiento = InsStockTipoMovimiento::getOxId($id);

$estado = ($ins_stock_tipo_movimiento->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'ins_stock_tipo_movimiento_uno.php';
?>

