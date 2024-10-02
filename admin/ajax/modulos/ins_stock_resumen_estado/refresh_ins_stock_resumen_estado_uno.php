<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$ins_stock_resumen_estado = InsStockResumenEstado::getOxId($id);

include 'ins_stock_resumen_estado_uno.php';
?>

