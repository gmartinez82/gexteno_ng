<?php

include "_autoload.php";

$proveedor_id = Gral::getVars(1, 'proveedor_id', 0);
$prv_proveedor = PrvProveedor::getOxId($proveedor_id);

$pedido_destinatario_id = Gral::getVars(1, 'pedido_destinatario_id', 0);
$pde_pedido_destinatario = PdePedidoDestinatario::getOxId($pedido_destinatario_id);
$pde_pedido = $pde_pedido_destinatario->getPdePedido();

//sleep(3);

$asunto = $pde_pedido_destinatario->getDescripcion();
$us_usuario_destinatario = $pde_pedido_destinatario->getUsUsuario();

$estado_envio_mail = $pde_pedido->enviarEmailAviso($asunto, $us_usuario_destinatario);
if ($estado_envio_mail) {
    $pde_pedido_destinatario->setAvisoEmail(1);
    $pde_pedido_destinatario->save();
}