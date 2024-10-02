<?php
include_once "_autoload.php";
$criterio = new Criterio(InsStockResumenEstado::SES_CRITERIOS);
$criterio->addTabla('ins_stock_resumen_estado');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='ins_stock_resumen_estado'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('InsStockResumen') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_ins_stock_resumen_estado_ins_stock_resumen_id', Gral::getCmbFiltro(InsStockResumen::getInsStockResumensCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ins_stock_resumen_estado.ins_stock_resumen_id'), 'textbox')?>
        	<?php 
			$buscador_ins_stock_resumen_estado_ins_stock_resumen_id_comparador = $criterio->getComparadorDeCampo('ins_stock_resumen_estado.ins_stock_resumen_id');
			if(trim($buscador_ins_stock_resumen_estado_ins_stock_resumen_id_comparador) == '') $buscador_ins_stock_resumen_estado_ins_stock_resumen_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_ins_stock_resumen_estado_ins_stock_resumen_id_comparador', Criterio::getComparadoresCmb(), $buscador_ins_stock_resumen_estado_ins_stock_resumen_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('InsStockResumenTipoEstado') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_ins_stock_resumen_estado_ins_stock_resumen_tipo_estado_id', Gral::getCmbFiltro(InsStockResumenTipoEstado::getInsStockResumenTipoEstadosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ins_stock_resumen_estado.ins_stock_resumen_tipo_estado_id'), 'textbox')?>
        	<?php 
			$buscador_ins_stock_resumen_estado_ins_stock_resumen_tipo_estado_id_comparador = $criterio->getComparadorDeCampo('ins_stock_resumen_estado.ins_stock_resumen_tipo_estado_id');
			if(trim($buscador_ins_stock_resumen_estado_ins_stock_resumen_tipo_estado_id_comparador) == '') $buscador_ins_stock_resumen_estado_ins_stock_resumen_tipo_estado_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_ins_stock_resumen_estado_ins_stock_resumen_tipo_estado_id_comparador', Criterio::getComparadoresCmb(), $buscador_ins_stock_resumen_estado_ins_stock_resumen_tipo_estado_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ins_stock_resumen_estado_observacion' type='text' class='textbox' id='buscador_ins_stock_resumen_estado_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ins_stock_resumen_estado.observacion')) ?>' size='22' />
        	<?php 
			$buscador_ins_stock_resumen_estado_observacion_comparador = $criterio->getComparadorDeCampo('ins_stock_resumen_estado.observacion');
			if(trim($buscador_ins_stock_resumen_estado_observacion_comparador) == '') $buscador_ins_stock_resumen_estado_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_ins_stock_resumen_estado_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_ins_stock_resumen_estado_observacion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		     
  <div class='botones'>
    <input name='btn_buscar' type='submit' id='btn_buscar' value='&nbsp;&nbsp;&nbsp; <?php Lang::_lang('Buscar') ?>' />    
    <input name='btn_limpiar' type='submit' id='btn_limpiar' value='<?php Lang::_lang('Limpiar') ?>' />
  </div>

</form>
</div>
<script>
try{
	setInit();
	setInitAdm();
}catch(e){}
</script>

