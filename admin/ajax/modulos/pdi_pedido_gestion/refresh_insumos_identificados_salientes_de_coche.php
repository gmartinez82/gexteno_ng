<?php
include "_autoload.php";

Gral::setSes('MECANO_PDI_SALIENTE_INS_IDENTIFICADO_ARRAY_TMP', null);

$id = Gral::getVars(2, 'id', 0);
if($id != 'null'){
	$ins_insumo = InsInsumo::getOxId($id);
}else{
	$ins_insumo = new InsInsumo();
	$ins_insumo->setId('null', false);
}
$ins_insumo_identificado = new InsInsumoIdentificado();

$veh_coche_id = Gral::getVars(2, 'veh_coche_id', 0);
$veh_coche = VehCoche::getOxId($veh_coche_id);
//$pdi_pedido = new PdiPedido();
//$pdi_pedido->setPanPanolOrigen($panol_origen_id);

$tarea_resuelta_id = Gral::getVars(2, 'tarea_resuelta_id', 0);
if($tarea_resuelta_id == 'undefined') $tarea_resuelta_id = 0;

$tal_tarea_resuelta = TalTareaResuelta::getOxId($tarea_resuelta_id);

$cantidad = Gral::getVars(2, 'cantidad', 0);

//$pan_panols = PanPanol::getPanPanols();

if(!$ins_insumo){
	?>
	<div class="comentario">
    <?php Lang::_lang('Debe seleccionar un insumo') ?>
    </div>
	<?php
    //return;
}else{
	//$ins_stock_resumens = $ins_insumo->getInsStockResumens();
	include "bloque_insumos_identificados_salientes.php";
}
?>