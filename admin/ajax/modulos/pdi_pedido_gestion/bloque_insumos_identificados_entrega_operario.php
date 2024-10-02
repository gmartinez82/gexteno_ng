<?php
if($ins_insumo){
	if($ins_insumo->getIdentificable()){
?>
<div class="bloque-insumos-identificados">
	<div class="titulo"><?php Lang::_lang('Insumos Identificados') ?> <?php Lang::_lang('que se entregan al Operario sin Pedido Solicitado') ?></div>
	<label class="comentario">Indique de manera detallada los insumos que se el entregan al Operario</label>
    
    <?php 
	for($i=1; $i<=$cantidad; $i++){ 
		$ins_insumo_identificado_id = eval('return $pdi_pedido_entrega_dbsugg_ins_insumo_identificado_'.$i.'_id;');
		if($ins_insumo_identificado_id != ''){
			$ins_insumo_identificado = InsInsumoIdentificado::getOxId($ins_insumo_identificado_id);
		}else{
			$ins_insumo_identificado = new InsInsumoIdentificado();
		}
		$ins_insumo_instancia_id = eval('return $pdi_pedido_entrega_cmb_ins_insumo_instancia_'.$i.'_id;');
		$pdi_pedido_entrega_txt_kilometraje = eval('return $pdi_pedido_entrega_txt_kilometraje_'.$i.';');

	?>
    <div class="uno" cont="<?php echo $i ?>" >
    	
        <div class="col c1">
            <div class="label"><?php Lang::_lang('InsInsumoIdentificado') ?></div>
            <div class="dato">
                <?php echo Html::html_get_dbsuggest(1, 'pdi_pedido_entrega_dbsugg_ins_insumo_identificado_'.$i, 'ajax/modulos/pdi_pedido/ins_insumo_identificado_entrega_operario_dbsuggest.php?insumo_id='.$ins_insumo->getId().'&pan_panol_id='.$panol_id.$pan_panol_id_controlar_existencia, false, true, true, '...', $ins_insumo_identificado->getId(), $ins_insumo_identificado->getDescripcion()) ?>
	            <div class="error"><?php Gral::_echo(eval('return $pdi_pedido_entrega_dbsugg_ins_insumo_identificado_'.$i.'_id_error;')) ?></div>
            </div>
        </div>

    	<div class="col c2">
            <div class="label"><?php Lang::_lang('InsInstancia') ?> <?php Lang::_lang('Actual') ?></div>
            <div class="dato">
                <?php Html::html_dib_select(1, 'pdi_pedido_entrega_cmb_ins_insumo_instancia_'.$i.'_id', Gral::getCmbFiltro($ins_insumo->getInsInsumoInstanciasCmb(), '...'), $ins_insumo_instancia_id, 'textbox') ?>	
	            <div class="error"><?php Gral::_echo(eval('return $pdi_pedido_entrega_cmb_ins_insumo_instancia_'.$i.'_id_error;')) ?></div>
            </div>
        </div>

    	<div class="col c3">
            <div class="label"><?php Lang::_lang('Kilometraje') ?> <?php Lang::_lang('Actual') ?></div>
            <div class="dato">
			<input name='pdi_pedido_entrega_txt_kilometraje_<?php echo $i ?>' type='text' class='textbox spinner' id='pdi_pedido_entrega_txt_kilometraje_<?php echo $i ?>' value='<?php Gral::_echoTxt($pdi_pedido_entrega_txt_kilometraje) ?>' size='10' />
	            <div class="error"><?php Gral::_echo(eval('return $pdi_pedido_entrega_txt_kilometraje_'.$i.'_error;')) ?></div>
            </div>
        </div>
        
    </div>
    <?php } ?>
    
</div>
<?php
	}
}
?>