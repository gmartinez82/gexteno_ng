<?php
include "_autoload.php";
$user = UsUsuario::autenticado();

$pedido_id = Gral::getVars(2, 'pedido_id', 0);
$pde_pedido = PdePedido::getOxId($pedido_id);
$pde_pedido->setPdePedidoPublicado();

// se envia aviso ---------------------------------------------------------------------
$asunto = 'PDE Pedido Nuevo #'.$pde_pedido->getCodigo().' '.date('d/m/Y H:m');
$pde_pedido->enviarAvisos($asunto);
// ------------------------------------------------------------------------------------

?>
