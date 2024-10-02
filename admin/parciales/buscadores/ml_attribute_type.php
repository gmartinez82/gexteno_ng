<?php
include_once "_autoload.php";
$criterio = new Criterio(MlAttributeType::SES_CRITERIOS);
$criterio->addTabla('ml_attribute_type');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='ml_attribute_type'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Descripcion') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ml_attribute_type_descripcion' type='text' class='textbox' id='buscador_ml_attribute_type_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ml_attribute_type.descripcion')) ?>' size='22' />
        	<?php 
			$buscador_ml_attribute_type_descripcion_comparador = $criterio->getComparadorDeCampo('ml_attribute_type.descripcion');
			if(trim($buscador_ml_attribute_type_descripcion_comparador) == '') $buscador_ml_attribute_type_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_ml_attribute_type_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_ml_attribute_type_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Codigo') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ml_attribute_type_codigo' type='text' class='textbox' id='buscador_ml_attribute_type_codigo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ml_attribute_type.codigo')) ?>' size='22' />
        	<?php 
			$buscador_ml_attribute_type_codigo_comparador = $criterio->getComparadorDeCampo('ml_attribute_type.codigo');
			if(trim($buscador_ml_attribute_type_codigo_comparador) == '') $buscador_ml_attribute_type_codigo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_ml_attribute_type_codigo_comparador', Criterio::getComparadoresCmb(), $buscador_ml_attribute_type_codigo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Codigo ML') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ml_attribute_type_codigo_ml' type='text' class='textbox' id='buscador_ml_attribute_type_codigo_ml' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ml_attribute_type.codigo_ml')) ?>' size='22' />
        	<?php 
			$buscador_ml_attribute_type_codigo_ml_comparador = $criterio->getComparadorDeCampo('ml_attribute_type.codigo_ml');
			if(trim($buscador_ml_attribute_type_codigo_ml_comparador) == '') $buscador_ml_attribute_type_codigo_ml_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_ml_attribute_type_codigo_ml_comparador', Criterio::getComparadoresCmb(), $buscador_ml_attribute_type_codigo_ml_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ml_attribute_type_observacion' type='text' class='textbox' id='buscador_ml_attribute_type_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ml_attribute_type.observacion')) ?>' size='22' />
        	<?php 
			$buscador_ml_attribute_type_observacion_comparador = $criterio->getComparadorDeCampo('ml_attribute_type.observacion');
			if(trim($buscador_ml_attribute_type_observacion_comparador) == '') $buscador_ml_attribute_type_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_ml_attribute_type_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_ml_attribute_type_observacion_comparador, 'textbox comparador') ?>
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

