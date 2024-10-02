<?php
include_once "_autoload.php";
$criterio = new Criterio(InsStockResumen::SES_CRITERIOS);
$criterio->addTabla('ins_stock_resumen');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='ins_stock_resumen'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Descripcion') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ins_stock_resumen_descripcion' type='text' class='textbox' id='buscador_ins_stock_resumen_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ins_stock_resumen.descripcion')) ?>' size='22' />
        	<?php 
			$buscador_ins_stock_resumen_descripcion_comparador = $criterio->getComparadorDeCampo('ins_stock_resumen.descripcion');
			if(trim($buscador_ins_stock_resumen_descripcion_comparador) == '') $buscador_ins_stock_resumen_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_ins_stock_resumen_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_ins_stock_resumen_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('InsStockResumenTipoEstado') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_ins_stock_resumen_ins_stock_resumen_tipo_estado_id', Gral::getCmbFiltro(InsStockResumenTipoEstado::getInsStockResumenTipoEstadosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ins_stock_resumen.ins_stock_resumen_tipo_estado_id'), 'textbox')?>
        	<?php 
			$buscador_ins_stock_resumen_ins_stock_resumen_tipo_estado_id_comparador = $criterio->getComparadorDeCampo('ins_stock_resumen.ins_stock_resumen_tipo_estado_id');
			if(trim($buscador_ins_stock_resumen_ins_stock_resumen_tipo_estado_id_comparador) == '') $buscador_ins_stock_resumen_ins_stock_resumen_tipo_estado_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_ins_stock_resumen_ins_stock_resumen_tipo_estado_id_comparador', Criterio::getComparadoresCmb(), $buscador_ins_stock_resumen_ins_stock_resumen_tipo_estado_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('InsInsumo') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_ins_stock_resumen_ins_insumo_id', Gral::getCmbFiltro(InsInsumo::getInsInsumosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ins_stock_resumen.ins_insumo_id'), 'textbox')?>
        	<?php 
			$buscador_ins_stock_resumen_ins_insumo_id_comparador = $criterio->getComparadorDeCampo('ins_stock_resumen.ins_insumo_id');
			if(trim($buscador_ins_stock_resumen_ins_insumo_id_comparador) == '') $buscador_ins_stock_resumen_ins_insumo_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_ins_stock_resumen_ins_insumo_id_comparador', Criterio::getComparadoresCmb(), $buscador_ins_stock_resumen_ins_insumo_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('PanPanol') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_ins_stock_resumen_pan_panol_id', Gral::getCmbFiltro(PanPanol::getPanPanolsCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ins_stock_resumen.pan_panol_id'), 'textbox')?>
        	<?php 
			$buscador_ins_stock_resumen_pan_panol_id_comparador = $criterio->getComparadorDeCampo('ins_stock_resumen.pan_panol_id');
			if(trim($buscador_ins_stock_resumen_pan_panol_id_comparador) == '') $buscador_ins_stock_resumen_pan_panol_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_ins_stock_resumen_pan_panol_id_comparador', Criterio::getComparadoresCmb(), $buscador_ins_stock_resumen_pan_panol_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Codigo') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ins_stock_resumen_codigo' type='text' class='textbox' id='buscador_ins_stock_resumen_codigo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ins_stock_resumen.codigo')) ?>' size='22' />
        	<?php 
			$buscador_ins_stock_resumen_codigo_comparador = $criterio->getComparadorDeCampo('ins_stock_resumen.codigo');
			if(trim($buscador_ins_stock_resumen_codigo_comparador) == '') $buscador_ins_stock_resumen_codigo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_ins_stock_resumen_codigo_comparador', Criterio::getComparadoresCmb(), $buscador_ins_stock_resumen_codigo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Cantidad') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ins_stock_resumen_cantidad' type='text' class='textbox' id='buscador_ins_stock_resumen_cantidad' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ins_stock_resumen.cantidad')) ?>' size='22' />
        	<?php 
			$buscador_ins_stock_resumen_cantidad_comparador = $criterio->getComparadorDeCampo('ins_stock_resumen.cantidad');
			if(trim($buscador_ins_stock_resumen_cantidad_comparador) == '') $buscador_ins_stock_resumen_cantidad_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_ins_stock_resumen_cantidad_comparador', Criterio::getComparadoresCmb(), $buscador_ins_stock_resumen_cantidad_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Cantidad Real') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ins_stock_resumen_cantidad_real' type='text' class='textbox' id='buscador_ins_stock_resumen_cantidad_real' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ins_stock_resumen.cantidad_real')) ?>' size='22' />
        	<?php 
			$buscador_ins_stock_resumen_cantidad_real_comparador = $criterio->getComparadorDeCampo('ins_stock_resumen.cantidad_real');
			if(trim($buscador_ins_stock_resumen_cantidad_real_comparador) == '') $buscador_ins_stock_resumen_cantidad_real_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_ins_stock_resumen_cantidad_real_comparador', Criterio::getComparadoresCmb(), $buscador_ins_stock_resumen_cantidad_real_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Cantidad Comprometida') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ins_stock_resumen_cantidad_comprometida' type='text' class='textbox' id='buscador_ins_stock_resumen_cantidad_comprometida' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ins_stock_resumen.cantidad_comprometida')) ?>' size='22' />
        	<?php 
			$buscador_ins_stock_resumen_cantidad_comprometida_comparador = $criterio->getComparadorDeCampo('ins_stock_resumen.cantidad_comprometida');
			if(trim($buscador_ins_stock_resumen_cantidad_comprometida_comparador) == '') $buscador_ins_stock_resumen_cantidad_comprometida_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_ins_stock_resumen_cantidad_comprometida_comparador', Criterio::getComparadoresCmb(), $buscador_ins_stock_resumen_cantidad_comprometida_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Cant Pasivo') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ins_stock_resumen_cantidad_pasivo' type='text' class='textbox' id='buscador_ins_stock_resumen_cantidad_pasivo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ins_stock_resumen.cantidad_pasivo')) ?>' size='22' />
        	<?php 
			$buscador_ins_stock_resumen_cantidad_pasivo_comparador = $criterio->getComparadorDeCampo('ins_stock_resumen.cantidad_pasivo');
			if(trim($buscador_ins_stock_resumen_cantidad_pasivo_comparador) == '') $buscador_ins_stock_resumen_cantidad_pasivo_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_ins_stock_resumen_cantidad_pasivo_comparador', Criterio::getComparadoresCmb(), $buscador_ins_stock_resumen_cantidad_pasivo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ins_stock_resumen_observacion' type='text' class='textbox' id='buscador_ins_stock_resumen_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ins_stock_resumen.observacion')) ?>' size='22' />
        	<?php 
			$buscador_ins_stock_resumen_observacion_comparador = $criterio->getComparadorDeCampo('ins_stock_resumen.observacion');
			if(trim($buscador_ins_stock_resumen_observacion_comparador) == '') $buscador_ins_stock_resumen_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_ins_stock_resumen_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_ins_stock_resumen_observacion_comparador, 'textbox comparador') ?>
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

