<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$pdi_pedido = PdiPedido::getOxId($id);

$estado = ($pdi_pedido->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'pdi_pedido_uno.php';
?>

