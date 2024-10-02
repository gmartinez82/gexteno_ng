<?php
include_once '_autoload.php';

$id = Gral::getVars(2, 'id');
$ins_stock_transformacion = InsStockTransformacion::getOxId($id);

$estado = ($ins_stock_transformacion->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'ins_stock_transformacion_gestion_uno.php';
?>

