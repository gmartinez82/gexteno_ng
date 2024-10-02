<?php
include "_autoload.php";

$id = Gral::getVars(2, 'id', 0);
if($id != 'null'){
	$ins_insumo = InsInsumo::getOxId($id);
}else{
	$ins_insumo = new InsInsumo();
	$ins_insumo->setId('null', false);
}

$panol_origen_id = Gral::getVars(2, 'panol_origen_id', 0);
$pdi_pedido = new PdiPedido();
$pdi_pedido->setPanPanolOrigen($panol_origen_id);

$cantidad = Gral::getVars(2, 'cantidad', 0);

$pan_panols = PanPanol::getPanPanols();

if(!$ins_insumo){
	?>
	<div class="comentario">
    <?php Lang::_lang('Debe seleccionar un insumo') ?>
    </div>
	<?php
    //return;
}else{
	//$ins_stock_resumens = $ins_insumo->getInsStockResumens();
	include "bloque_stock_insumos.php";
}
?>
