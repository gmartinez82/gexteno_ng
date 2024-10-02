<?php
include "_autoload.php";
$user = UsUsuario::autenticado();

$pedido_id = Gral::getVars(1, 'id', 0);
$pdi_pedido = PdiPedido::getOxId($pedido_id);
$pdi_pedido->setPdiPedidoDestacado();
?>
