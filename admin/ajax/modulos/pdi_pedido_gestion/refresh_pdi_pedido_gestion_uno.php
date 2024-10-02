<?php
include "_autoload.php";

$pedido_id = Gral::getVars(2, 'id', 0);
$pdi_pedido = PdiPedido::getOxId($pedido_id);

$noleido = ($pdi_pedido->esPdiPedidoLeido()) ? '' : 'noleido';
$destacado = ($pdi_pedido->esPdiPedidoDestacado()) ? 'destacado' : '';
$arr_movimientos = $pdi_pedido->getPdiPedidoMovimientos(); 
$pdi_comentarios = $pdi_pedido->getPdiComentarios();
$cantidad_comentarios = (!empty($pdi_comentarios)) ? count($pdi_comentarios) : "Sin";

include 'pdi_pedido_gestion_uno.php';
?>
<script>
setInitPdiPedidos();
</script>
