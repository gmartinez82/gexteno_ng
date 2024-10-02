<?php
include_once '_autoload.php';

$id = Gral::getVars(1, 'id');
$vta_recibo_item = new VtaReciboItem();
$vta_recibo_item->setId($id, false);
$vta_recibo_item->deleteAll();
?>

