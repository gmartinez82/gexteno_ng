<?php
include_once '_autoload.php';

$id = Gral::getVars(1, 'id');
$vta_factura = new VtaFactura();
$vta_factura->setId($id, false);
$vta_factura->deleteAll();
?>

