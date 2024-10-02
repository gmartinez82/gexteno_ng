<?php
//sleep(4);
include "_autoload.php";

$pedido_id = Gral::getVars(2, 'pedido_id', 0);
if($pedido_id != 0){
	$pde_pedido = PdePedido::getOxId($pedido_id);
}
$p = new Paginador(25, 1);
$ins_insumo = $pde_pedido->getInsInsumo();
$pde_cotizacions = $ins_insumo->getPdeCotizacions($p);

include "pde_cotizacion_datos_historicos.php";
?>