<?php
include_once '_autoload.php';

$id = Gral::getVars(1, 'id');
$pde_factura = new PdeFactura();
$pde_factura->setId($id, false);
$pde_factura->deleteAll();
?>

