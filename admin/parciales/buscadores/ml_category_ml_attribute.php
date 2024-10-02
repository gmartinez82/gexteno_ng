<?php
include_once "_autoload.php";
$criterio = new Criterio(MlCategoryMlAttribute::SES_CRITERIOS);
$criterio->addTabla('ml_category_ml_attribute');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='ml_category_ml_attribute'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('MlCategory') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_ml_category_ml_attribute_ml_category_id', Gral::getCmbFiltro(MlCategory::getMlCategorysCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ml_category_ml_attribute.ml_category_id'), 'textbox')?>
        	<?php 
			$buscador_ml_category_ml_attribute_ml_category_id_comparador = $criterio->getComparadorDeCampo('ml_category_ml_attribute.ml_category_id');
			if(trim($buscador_ml_category_ml_attribute_ml_category_id_comparador) == '') $buscador_ml_category_ml_attribute_ml_category_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_ml_category_ml_attribute_ml_category_id_comparador', Criterio::getComparadoresCmb(), $buscador_ml_category_ml_attribute_ml_category_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('MlAttribute') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_ml_category_ml_attribute_ml_attribute_id', Gral::getCmbFiltro(MlAttribute::getMlAttributesCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ml_category_ml_attribute.ml_attribute_id'), 'textbox')?>
        	<?php 
			$buscador_ml_category_ml_attribute_ml_attribute_id_comparador = $criterio->getComparadorDeCampo('ml_category_ml_attribute.ml_attribute_id');
			if(trim($buscador_ml_category_ml_attribute_ml_attribute_id_comparador) == '') $buscador_ml_category_ml_attribute_ml_attribute_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_ml_category_ml_attribute_ml_attribute_id_comparador', Criterio::getComparadoresCmb(), $buscador_ml_category_ml_attribute_ml_attribute_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('ML Relevance') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ml_category_ml_attribute_ml_relevance' type='text' class='textbox' id='buscador_ml_category_ml_attribute_ml_relevance' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ml_category_ml_attribute.ml_relevance')) ?>' size='22' />
        	<?php 
			$buscador_ml_category_ml_attribute_ml_relevance_comparador = $criterio->getComparadorDeCampo('ml_category_ml_attribute.ml_relevance');
			if(trim($buscador_ml_category_ml_attribute_ml_relevance_comparador) == '') $buscador_ml_category_ml_attribute_ml_relevance_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_ml_category_ml_attribute_ml_relevance_comparador', Criterio::getComparadoresCmb(), $buscador_ml_category_ml_attribute_ml_relevance_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ml_category_ml_attribute_observacion' type='text' class='textbox' id='buscador_ml_category_ml_attribute_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ml_category_ml_attribute.observacion')) ?>' size='22' />
        	<?php 
			$buscador_ml_category_ml_attribute_observacion_comparador = $criterio->getComparadorDeCampo('ml_category_ml_attribute.observacion');
			if(trim($buscador_ml_category_ml_attribute_observacion_comparador) == '') $buscador_ml_category_ml_attribute_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_ml_category_ml_attribute_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_ml_category_ml_attribute_observacion_comparador, 'textbox comparador') ?>
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

