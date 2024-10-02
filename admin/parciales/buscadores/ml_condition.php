<?php
include_once "_autoload.php";
$criterio = new Criterio(MlCondition::SES_CRITERIOS);
$criterio->addTabla('ml_condition');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='ml_condition'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Descripcion') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ml_condition_descripcion' type='text' class='textbox' id='buscador_ml_condition_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ml_condition.descripcion')) ?>' size='22' />
        	<?php 
			$buscador_ml_condition_descripcion_comparador = $criterio->getComparadorDeCampo('ml_condition.descripcion');
			if(trim($buscador_ml_condition_descripcion_comparador) == '') $buscador_ml_condition_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_ml_condition_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_ml_condition_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Codigo') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ml_condition_codigo' type='text' class='textbox' id='buscador_ml_condition_codigo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ml_condition.codigo')) ?>' size='22' />
        	<?php 
			$buscador_ml_condition_codigo_comparador = $criterio->getComparadorDeCampo('ml_condition.codigo');
			if(trim($buscador_ml_condition_codigo_comparador) == '') $buscador_ml_condition_codigo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_ml_condition_codigo_comparador', Criterio::getComparadoresCmb(), $buscador_ml_condition_codigo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Codigo ML') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ml_condition_codigo_ml' type='text' class='textbox' id='buscador_ml_condition_codigo_ml' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ml_condition.codigo_ml')) ?>' size='22' />
        	<?php 
			$buscador_ml_condition_codigo_ml_comparador = $criterio->getComparadorDeCampo('ml_condition.codigo_ml');
			if(trim($buscador_ml_condition_codigo_ml_comparador) == '') $buscador_ml_condition_codigo_ml_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_ml_condition_codigo_ml_comparador', Criterio::getComparadoresCmb(), $buscador_ml_condition_codigo_ml_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ml_condition_observacion' type='text' class='textbox' id='buscador_ml_condition_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ml_condition.observacion')) ?>' size='22' />
        	<?php 
			$buscador_ml_condition_observacion_comparador = $criterio->getComparadorDeCampo('ml_condition.observacion');
			if(trim($buscador_ml_condition_observacion_comparador) == '') $buscador_ml_condition_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_ml_condition_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_ml_condition_observacion_comparador, 'textbox comparador') ?>
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

