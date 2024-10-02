<?php
if($ins_insumo){
	if($ins_insumo->getRetornable()){
?>
<div class="bloque-insumos-identificados-saliente">
	<div class="titulo"><?php Lang::_lang('Insumos Identificados') ?> <?php Lang::_lang('que salen del Coche (RETORNABLE)') ?></div>
	<label class="comentario">Debe indicar a continuacion cuales son los insumos que estan saliendo del coche.</label>
	<label class="comentario" style="display:none;">Se mostraran por defecto los insumos que se encuentran en el coche, presione "##%" para ver todos los insumos, o "##" + "texto a buscar" para buscar por un insumo en particular.</label>
    
    <?php 
	for($i=1; $i<=$cantidad; $i++){ 
		$ins_insumo_identificado_id = eval('return $pdi_pedido_saliente_dbsugg_ins_insumo_identificado_'.$i.'_id;');
		if($ins_insumo_identificado_id != ''){
			$ins_insumo_identificado = InsInsumoIdentificado::getOxId($ins_insumo_identificado_id);
		}else{
			$ins_insumo_identificado = new InsInsumoIdentificado();
		}
		$ins_insumo_instancia_id = eval('return $pdi_pedido_saliente_cmb_ins_insumo_instancia_'.$i.'_id;');
		$pdi_pedido_ajuste_txt_kilometraje = eval('return $pdi_pedido_saliente_txt_kilometraje_'.$i.';');
		$ins_insumo_identificado_tipo_estado_id = eval('return $pdi_pedido_saliente_cmb_ins_insumo_identificado_tipo_estado_'.$i.'_id;');



		
		// se corrobora si el coche ya tiene un insumo identificado asignado a esa posicion
		if(!Gral::esPost()){
			if($veh_coche && $tal_tarea_resuelta){
				$tal_tarea_base = $tal_tarea_resuelta->getTalTareaBase();
				$array = array(
					array('campo' => 'veh_coche_id', 'valor' => $veh_coche->getId()),
					array('campo' => 'tal_tarea_base_id', 'valor' => $tal_tarea_base->getId()),
					array('campo' => 'actual', 'valor' => 1),
				);
				$tal_insumo_asignado = TalInsumoAsignado::getOxArray($array);
				//Gral::prr($tal_insumo_asignado);
				if($tal_insumo_asignado){
					$ins_insumo_identificado = $tal_insumo_asignado->getInsInsumoIdentificado();
					$ins_insumo_identificado_movimiento_actual = $ins_insumo_identificado->getInsInsumoIdentificadoMovimientoActual();
	
					$ins_insumo_instancia_id = $ins_insumo_identificado_movimiento_actual->getInsInsumoInstanciaId();
					$pdi_pedido_ajuste_txt_kilometraje = $tal_insumo_asignado->getKmInsumoConsumo();
				}
			}
		}
		
		
		
	?>
    <div class="uno" cont="<?php echo $i ?>" >
    	
        <div class="col c1">
            <div class="label"><?php Lang::_lang('InsInsumoIdentificado') ?></div>
            <div class="dato">
                <?php echo Html::html_get_dbsuggest(1, 'pdi_pedido_saliente_dbsugg_ins_insumo_identificado_'.$i, 'ajax/modulos/pdi_pedido/ins_insumo_identificado_saliente_dbsuggest.php?insumo_id='.$ins_insumo->getId().'&veh_coche_id='.$veh_coche_id, false, true, true, '...', $ins_insumo_identificado->getId(), $ins_insumo_identificado->getDescripcion()) ?>
	            
                
                <div class="error"><?php Gral::_echo(eval('return $pdi_pedido_saliente_dbsugg_ins_insumo_identificado_'.$i.'_id_error;')) ?></div>
            </div>
        </div>

    	<div class="col c2">
            <div class="label"><?php Lang::_lang('InsInstancia') ?> <?php Lang::_lang('Actual') ?></div>
            <div class="dato">
                <?php Html::html_dib_select(1, 'pdi_pedido_saliente_cmb_ins_insumo_instancia_'.$i.'_id', Gral::getCmbFiltro($ins_insumo_identificado->getInsInsumo()->getInsInsumoInstanciasCmb(), '...'), $ins_insumo_instancia_id, 'textbox') ?>	
	            <div class="error"><?php Gral::_echo(eval('return $pdi_pedido_saliente_cmb_ins_insumo_instancia_'.$i.'_id_error;')) ?></div>
            </div>
        </div>

    	<div class="col c3">
            <div class="label"><?php Lang::_lang('Kilometraje') ?> <?php Lang::_lang('Actual') ?></div>
            <div class="dato">
				<input name='pdi_pedido_saliente_txt_kilometraje_<?php echo $i ?>' type='text' class='textbox spinner' id='pdi_pedido_saliente_txt_kilometraje_<?php echo $i ?>' value='<?php Gral::_echoTxt($pdi_pedido_ajuste_txt_kilometraje) ?>' size='10' />
	            <div class="error"><?php Gral::_echo(eval('return $pdi_pedido_saliente_txt_kilometraje_'.$i.'_error;')) ?></div>
            </div>
        </div>

    	<div class="col c4">
            <div class="label"><?php Lang::_lang('Tipo de Estado Saliente') ?></div>
            <div class="dato">
                <?php Html::html_dib_select(1, 'pdi_pedido_saliente_cmb_ins_insumo_identificado_tipo_estado_'.$i.'_id', Gral::getCmbFiltro(InsInsumoIdentificadoTipoEstado::getInsInsumoIdentificadoTipoEstadosSalidaDeCocheCmb(), '...'), $ins_insumo_identificado_tipo_estado_id, 'textbox') ?>	
	            <div class="error"><?php Gral::_echo(eval('return $pdi_pedido_saliente_cmb_ins_insumo_identificado_tipo_estado_'.$i.'_id_error;')) ?></div>
            </div>
        </div>
        
    </div>
    <?php } ?>
    
</div>
<?php
	}
}
?>