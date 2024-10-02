<?php
include_once "_autoload.php";
$criterio = new Criterio(InsStockTransformacion::SES_CRITERIOS);
$criterio->addTabla('ins_stock_transformacion');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='ins_stock_transformacion'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Descripcion') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ins_stock_transformacion_descripcion' type='text' class='textbox' id='buscador_ins_stock_transformacion_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ins_stock_transformacion.descripcion')) ?>' size='22' />
        	<?php 
			$buscador_ins_stock_transformacion_descripcion_comparador = $criterio->getComparadorDeCampo('ins_stock_transformacion.descripcion');
			if(trim($buscador_ins_stock_transformacion_descripcion_comparador) == '') $buscador_ins_stock_transformacion_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_ins_stock_transformacion_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_ins_stock_transformacion_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('InsInsumo') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_ins_stock_transformacion_ins_insumo_id', Gral::getCmbFiltro(InsInsumo::getInsInsumosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ins_stock_transformacion.ins_insumo_id'), 'textbox')?>
        	<?php 
			$buscador_ins_stock_transformacion_ins_insumo_id_comparador = $criterio->getComparadorDeCampo('ins_stock_transformacion.ins_insumo_id');
			if(trim($buscador_ins_stock_transformacion_ins_insumo_id_comparador) == '') $buscador_ins_stock_transformacion_ins_insumo_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_ins_stock_transformacion_ins_insumo_id_comparador', Criterio::getComparadoresCmb(), $buscador_ins_stock_transformacion_ins_insumo_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('PanPanol') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_ins_stock_transformacion_pan_panol_id', Gral::getCmbFiltro(PanPanol::getPanPanolsCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ins_stock_transformacion.pan_panol_id'), 'textbox')?>
        	<?php 
			$buscador_ins_stock_transformacion_pan_panol_id_comparador = $criterio->getComparadorDeCampo('ins_stock_transformacion.pan_panol_id');
			if(trim($buscador_ins_stock_transformacion_pan_panol_id_comparador) == '') $buscador_ins_stock_transformacion_pan_panol_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_ins_stock_transformacion_pan_panol_id_comparador', Criterio::getComparadoresCmb(), $buscador_ins_stock_transformacion_pan_panol_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Codigo') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ins_stock_transformacion_codigo' type='text' class='textbox' id='buscador_ins_stock_transformacion_codigo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ins_stock_transformacion.codigo')) ?>' size='22' />
        	<?php 
			$buscador_ins_stock_transformacion_codigo_comparador = $criterio->getComparadorDeCampo('ins_stock_transformacion.codigo');
			if(trim($buscador_ins_stock_transformacion_codigo_comparador) == '') $buscador_ins_stock_transformacion_codigo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_ins_stock_transformacion_codigo_comparador', Criterio::getComparadoresCmb(), $buscador_ins_stock_transformacion_codigo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Cantidad') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ins_stock_transformacion_cantidad' type='text' class='textbox' id='buscador_ins_stock_transformacion_cantidad' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ins_stock_transformacion.cantidad')) ?>' size='22' />
        	<?php 
			$buscador_ins_stock_transformacion_cantidad_comparador = $criterio->getComparadorDeCampo('ins_stock_transformacion.cantidad');
			if(trim($buscador_ins_stock_transformacion_cantidad_comparador) == '') $buscador_ins_stock_transformacion_cantidad_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_ins_stock_transformacion_cantidad_comparador', Criterio::getComparadoresCmb(), $buscador_ins_stock_transformacion_cantidad_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ins_stock_transformacion_observacion' type='text' class='textbox' id='buscador_ins_stock_transformacion_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ins_stock_transformacion.observacion')) ?>' size='22' />
        	<?php 
			$buscador_ins_stock_transformacion_observacion_comparador = $criterio->getComparadorDeCampo('ins_stock_transformacion.observacion');
			if(trim($buscador_ins_stock_transformacion_observacion_comparador) == '') $buscador_ins_stock_transformacion_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_ins_stock_transformacion_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_ins_stock_transformacion_observacion_comparador, 'textbox comparador') ?>
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

