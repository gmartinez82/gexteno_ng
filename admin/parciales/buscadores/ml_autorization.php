<?php
include_once "_autoload.php";
$criterio = new Criterio(MlAutorization::SES_CRITERIOS);
$criterio->addTabla('ml_autorization');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='ml_autorization'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Descripcion') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ml_autorization_descripcion' type='text' class='textbox' id='buscador_ml_autorization_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ml_autorization.descripcion')) ?>' size='22' />
        	<?php 
			$buscador_ml_autorization_descripcion_comparador = $criterio->getComparadorDeCampo('ml_autorization.descripcion');
			if(trim($buscador_ml_autorization_descripcion_comparador) == '') $buscador_ml_autorization_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_ml_autorization_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_ml_autorization_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Codigo') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ml_autorization_codigo' type='text' class='textbox' id='buscador_ml_autorization_codigo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ml_autorization.codigo')) ?>' size='22' />
        	<?php 
			$buscador_ml_autorization_codigo_comparador = $criterio->getComparadorDeCampo('ml_autorization.codigo');
			if(trim($buscador_ml_autorization_codigo_comparador) == '') $buscador_ml_autorization_codigo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_ml_autorization_codigo_comparador', Criterio::getComparadoresCmb(), $buscador_ml_autorization_codigo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('ML Access Token') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ml_autorization_ml_access_token' type='text' class='textbox' id='buscador_ml_autorization_ml_access_token' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ml_autorization.ml_access_token')) ?>' size='22' />
        	<?php 
			$buscador_ml_autorization_ml_access_token_comparador = $criterio->getComparadorDeCampo('ml_autorization.ml_access_token');
			if(trim($buscador_ml_autorization_ml_access_token_comparador) == '') $buscador_ml_autorization_ml_access_token_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_ml_autorization_ml_access_token_comparador', Criterio::getComparadoresCmb(), $buscador_ml_autorization_ml_access_token_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('ML Refresh Code') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ml_autorization_ml_refresh_code' type='text' class='textbox' id='buscador_ml_autorization_ml_refresh_code' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ml_autorization.ml_refresh_code')) ?>' size='22' />
        	<?php 
			$buscador_ml_autorization_ml_refresh_code_comparador = $criterio->getComparadorDeCampo('ml_autorization.ml_refresh_code');
			if(trim($buscador_ml_autorization_ml_refresh_code_comparador) == '') $buscador_ml_autorization_ml_refresh_code_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_ml_autorization_ml_refresh_code_comparador', Criterio::getComparadoresCmb(), $buscador_ml_autorization_ml_refresh_code_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Inicial') ?></div>
		  <div class='dato'>
		  
		<?php Html::html_dib_select(1, 'buscador_ml_autorization_inicial', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ml_autorization.inicial'), 'textbox') ?>
		
        	<?php 
			$buscador_ml_autorization_inicial_comparador = $criterio->getComparadorDeCampo('ml_autorization.inicial');
			if(trim($buscador_ml_autorization_inicial_comparador) == '') $buscador_ml_autorization_inicial_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_ml_autorization_inicial_comparador', Criterio::getComparadoresCmb(), $buscador_ml_autorization_inicial_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Actual') ?></div>
		  <div class='dato'>
		  
		<?php Html::html_dib_select(1, 'buscador_ml_autorization_actual', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ml_autorization.actual'), 'textbox') ?>
		
        	<?php 
			$buscador_ml_autorization_actual_comparador = $criterio->getComparadorDeCampo('ml_autorization.actual');
			if(trim($buscador_ml_autorization_actual_comparador) == '') $buscador_ml_autorization_actual_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_ml_autorization_actual_comparador', Criterio::getComparadoresCmb(), $buscador_ml_autorization_actual_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ml_autorization_observacion' type='text' class='textbox' id='buscador_ml_autorization_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ml_autorization.observacion')) ?>' size='22' />
        	<?php 
			$buscador_ml_autorization_observacion_comparador = $criterio->getComparadorDeCampo('ml_autorization.observacion');
			if(trim($buscador_ml_autorization_observacion_comparador) == '') $buscador_ml_autorization_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_ml_autorization_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_ml_autorization_observacion_comparador, 'textbox comparador') ?>
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

