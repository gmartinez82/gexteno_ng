<?php
include_once '_autoload.php';

$id = Gral::getVars(1, 'id');
$ins_stock_resumen = new InsStockResumen();
$ins_stock_resumen->setId($id, false);
$ins_stock_resumen->deleteAll();
?>

