<?php
include_once '_autoload.php';

$id = Gral::getVars(1, 'id');
$ins_stock_transformacion = new InsStockTransformacion();
$ins_stock_transformacion->setId($id, false);
$ins_stock_transformacion->deleteAll();
?>

