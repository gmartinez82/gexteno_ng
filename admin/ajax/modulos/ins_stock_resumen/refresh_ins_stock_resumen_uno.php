<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$ins_stock_resumen = InsStockResumen::getOxId($id);

$estado = ($ins_stock_resumen->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'ins_stock_resumen_uno.php';
?>

