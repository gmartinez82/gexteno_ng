<?php
include_once '_autoload.php';

$id = Gral::getVars(2, 'id');
$vta_vendedor_descuento = VtaVendedorDescuento::getOxId($id);

$estado = ($vta_vendedor_descuento->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'vta_vendedor_descuento_uno.php';
?>

