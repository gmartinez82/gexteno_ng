<?php
//sleep(4);
include "_autoload.php";

$pedido_id = Gral::getVars(2, 'pedido_id', 0);
if($pedido_id != 0){
	$pde_pedido = PdePedido::getOxId($pedido_id);
}
$pde_cotizacions = $pde_pedido->getPdeCotizacions();

include "pde_cotizacion_datos.php";

$pde_pedido->setPdeCotizacionsLeido();

?>
