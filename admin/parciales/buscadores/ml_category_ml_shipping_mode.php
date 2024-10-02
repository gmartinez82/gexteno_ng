<?php
include_once "_autoload.php";
$criterio = new Criterio(MlCategoryMlShippingMode::SES_CRITERIOS);
$criterio->addTabla('ml_category_ml_shipping_mode');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='ml_category_ml_shipping_mode'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('MlCategory') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_ml_category_ml_shipping_mode_ml_category_id', Gral::getCmbFiltro(MlCategory::getMlCategorysCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ml_category_ml_shipping_mode.ml_category_id'), 'textbox')?>
        	<?php 
			$buscador_ml_category_ml_shipping_mode_ml_category_id_comparador = $criterio->getComparadorDeCampo('ml_category_ml_shipping_mode.ml_category_id');
			if(trim($buscador_ml_category_ml_shipping_mode_ml_category_id_comparador) == '') $buscador_ml_category_ml_shipping_mode_ml_category_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_ml_category_ml_shipping_mode_ml_category_id_comparador', Criterio::getComparadoresCmb(), $buscador_ml_category_ml_shipping_mode_ml_category_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('MlShippingMode') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_ml_category_ml_shipping_mode_ml_shipping_mode_id', Gral::getCmbFiltro(MlShippingMode::getMlShippingModesCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ml_category_ml_shipping_mode.ml_shipping_mode_id'), 'textbox')?>
        	<?php 
			$buscador_ml_category_ml_shipping_mode_ml_shipping_mode_id_comparador = $criterio->getComparadorDeCampo('ml_category_ml_shipping_mode.ml_shipping_mode_id');
			if(trim($buscador_ml_category_ml_shipping_mode_ml_shipping_mode_id_comparador) == '') $buscador_ml_category_ml_shipping_mode_ml_shipping_mode_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_ml_category_ml_shipping_mode_ml_shipping_mode_id_comparador', Criterio::getComparadoresCmb(), $buscador_ml_category_ml_shipping_mode_ml_shipping_mode_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ml_category_ml_shipping_mode_observacion' type='text' class='textbox' id='buscador_ml_category_ml_shipping_mode_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ml_category_ml_shipping_mode.observacion')) ?>' size='22' />
        	<?php 
			$buscador_ml_category_ml_shipping_mode_observacion_comparador = $criterio->getComparadorDeCampo('ml_category_ml_shipping_mode.observacion');
			if(trim($buscador_ml_category_ml_shipping_mode_observacion_comparador) == '') $buscador_ml_category_ml_shipping_mode_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_ml_category_ml_shipping_mode_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_ml_category_ml_shipping_mode_observacion_comparador, 'textbox comparador') ?>
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

