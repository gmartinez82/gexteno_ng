<?php
include_once '_autoload.php';

$pedido_id = Gral::getVars(2, 'pedido_id', 0);
if($pedido_id != 0){
	$pde_pedido = PdePedido::getOxId($pedido_id);
}
$pde_ocs = $pde_pedido->getPdeOcs();

// se marca como leido el pedido
$pde_pedido->setPdePedidoLeido();

include "pde_pedido_modal_top.php";
?>
<div class="cotizacion_datos">
	<?php include "pde_oc_datos.php" ?>
</div>
<?php
$pde_pedido->setPdeOcsLeido();
?>
<div class="div_modal_modal"></div>