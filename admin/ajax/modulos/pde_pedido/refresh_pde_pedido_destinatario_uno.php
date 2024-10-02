<?php
include "_autoload.php";

$proveedor_id = Gral::getVars(2, 'proveedor_id', 0);
$prv_proveedor = PrvProveedor::getOxId($proveedor_id);

$pedido_destinatario_id = Gral::getVars(2, 'pedido_destinatario_id', 0);
$pde_pedido_destinatario = PdePedidoDestinatario::getOxId($pedido_destinatario_id);
$pde_pedido = $pde_pedido_destinatario->getPdePedido();

$pde_pedido_prv_proveedor_avisados = $pde_pedido->getPdePedidoPrvProveedorAvisadosXProveedor($prv_proveedor);

include "pde_pedido_destinatario_uno.php";
