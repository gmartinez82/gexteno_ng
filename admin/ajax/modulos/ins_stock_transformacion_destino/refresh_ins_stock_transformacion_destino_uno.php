<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$ins_stock_transformacion_destino = InsStockTransformacionDestino::getOxId($id);

$estado = ($ins_stock_transformacion_destino->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'ins_stock_transformacion_destino_uno.php';
?>

