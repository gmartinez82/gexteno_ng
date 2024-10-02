<?php
include_once "_autoload.php";
$criterio = new Criterio(MlAttribute::SES_CRITERIOS);
$criterio->addTabla('ml_attribute');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='ml_attribute'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Descripcion') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ml_attribute_descripcion' type='text' class='textbox' id='buscador_ml_attribute_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ml_attribute.descripcion')) ?>' size='22' />
        	<?php 
			$buscador_ml_attribute_descripcion_comparador = $criterio->getComparadorDeCampo('ml_attribute.descripcion');
			if(trim($buscador_ml_attribute_descripcion_comparador) == '') $buscador_ml_attribute_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_ml_attribute_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_ml_attribute_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Ml Attrib Type') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_ml_attribute_ml_attribute_type_id', Gral::getCmbFiltro(MlAttributeType::getMlAttributeTypesCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ml_attribute.ml_attribute_type_id'), 'textbox')?>
        	<?php 
			$buscador_ml_attribute_ml_attribute_type_id_comparador = $criterio->getComparadorDeCampo('ml_attribute.ml_attribute_type_id');
			if(trim($buscador_ml_attribute_ml_attribute_type_id_comparador) == '') $buscador_ml_attribute_ml_attribute_type_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_ml_attribute_ml_attribute_type_id_comparador', Criterio::getComparadoresCmb(), $buscador_ml_attribute_ml_attribute_type_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Codigo') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ml_attribute_codigo' type='text' class='textbox' id='buscador_ml_attribute_codigo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ml_attribute.codigo')) ?>' size='22' />
        	<?php 
			$buscador_ml_attribute_codigo_comparador = $criterio->getComparadorDeCampo('ml_attribute.codigo');
			if(trim($buscador_ml_attribute_codigo_comparador) == '') $buscador_ml_attribute_codigo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_ml_attribute_codigo_comparador', Criterio::getComparadoresCmb(), $buscador_ml_attribute_codigo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Codigo ML') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ml_attribute_codigo_ml' type='text' class='textbox' id='buscador_ml_attribute_codigo_ml' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ml_attribute.codigo_ml')) ?>' size='22' />
        	<?php 
			$buscador_ml_attribute_codigo_ml_comparador = $criterio->getComparadorDeCampo('ml_attribute.codigo_ml');
			if(trim($buscador_ml_attribute_codigo_ml_comparador) == '') $buscador_ml_attribute_codigo_ml_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_ml_attribute_codigo_ml_comparador', Criterio::getComparadoresCmb(), $buscador_ml_attribute_codigo_ml_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Tooltip') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ml_attribute_tooltip' type='text' class='textbox' id='buscador_ml_attribute_tooltip' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ml_attribute.tooltip')) ?>' size='22' />
        	<?php 
			$buscador_ml_attribute_tooltip_comparador = $criterio->getComparadorDeCampo('ml_attribute.tooltip');
			if(trim($buscador_ml_attribute_tooltip_comparador) == '') $buscador_ml_attribute_tooltip_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_ml_attribute_tooltip_comparador', Criterio::getComparadoresCmb(), $buscador_ml_attribute_tooltip_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ml_attribute_observacion' type='text' class='textbox' id='buscador_ml_attribute_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ml_attribute.observacion')) ?>' size='22' />
        	<?php 
			$buscador_ml_attribute_observacion_comparador = $criterio->getComparadorDeCampo('ml_attribute.observacion');
			if(trim($buscador_ml_attribute_observacion_comparador) == '') $buscador_ml_attribute_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_ml_attribute_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_ml_attribute_observacion_comparador, 'textbox comparador') ?>
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

