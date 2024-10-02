<?php
include "_autoload.php";
$user = UsUsuario::autenticado();

$pedido_id = Gral::getVars(1, 'id', 0);
$pde_pedido = PdePedido::getOxId($pedido_id);
$pde_pedido->setPdePedidoDestacado();
?>
