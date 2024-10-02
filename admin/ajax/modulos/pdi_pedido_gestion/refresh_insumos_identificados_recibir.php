<?php
include "_autoload.php";

Gral::setSes('MECANO_PDI_RECIBIR_INS_IDENTIFICADO_ARRAY_TMP', null);

$pedido_id = Gral::getVars(2, 'pedido_id', 0);

$id = Gral::getVars(2, 'id', 0);
if($id != 'null'){
	$ins_insumo = InsInsumo::getOxId($id);
}else{
	$ins_insumo = new InsInsumo();
	$ins_insumo->setId('null', false);
}
$ins_insumo_identificado = new InsInsumoIdentificado();

$panol_destino_id = Gral::getVars(2, 'panol_destino_id', 0);

$pdi_pedido = PdiPedido::getOxId($pedido_id);

$cantidad = Gral::getVars(2, 'cantidad', 0);

	$i = 1;
	$ins_insumo_identificados = $pdi_pedido->getInsInsumoIdentificadosVinculados();
	foreach($ins_insumo_identificados as $ins_insumo_identificado){ 
		$ins_insumo_identificado_movimiento = $ins_insumo_identificado->getInsInsumoIdentificadoMovimientoActual();
		//Gral::prr($ins_insumo_identificado_movimiento);
		
		if(!$ins_insumo_identificado_movimiento){
			$ins_insumo_identificado_movimiento = new InsInsumoIdentificadoMovimiento();
		}	

		eval('$pdi_pedido_recibir_dbsugg_ins_insumo_identificado_'.$i.'_id = $ins_insumo_identificado->getId();');
		eval('$pdi_pedido_recibir_cmb_ins_insumo_instancia_'.$i.'_id = $ins_insumo_identificado_movimiento->getInsInsumoInstanciaId();');
		eval('$pdi_pedido_recibir_txt_kilometraje_'.$i.' = $ins_insumo_identificado_movimiento->getKm();');
		
		$i++;
	}

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
	include "bloque_insumos_identificados_recibir.php";
}
?>