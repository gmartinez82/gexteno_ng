<?php
include_once "_autoload.php";
$criterio = new Criterio(GralBanco::SES_CRITERIOS);
$criterio->addTabla('gral_banco');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='gral_banco'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Descripcion') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_gral_banco_descripcion' type='text' class='textbox' id='buscador_gral_banco_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('gral_banco.descripcion')) ?>' size='22' />
        	<?php 
			$buscador_gral_banco_descripcion_comparador = $criterio->getComparadorDeCampo('gral_banco.descripcion');
			if(trim($buscador_gral_banco_descripcion_comparador) == '') $buscador_gral_banco_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_gral_banco_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_gral_banco_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Descripcion Corta') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_gral_banco_descripcion_corta' type='text' class='textbox' id='buscador_gral_banco_descripcion_corta' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('gral_banco.descripcion_corta')) ?>' size='22' />
        	<?php 
			$buscador_gral_banco_descripcion_corta_comparador = $criterio->getComparadorDeCampo('gral_banco.descripcion_corta');
			if(trim($buscador_gral_banco_descripcion_corta_comparador) == '') $buscador_gral_banco_descripcion_corta_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_gral_banco_descripcion_corta_comparador', Criterio::getComparadoresCmb(), $buscador_gral_banco_descripcion_corta_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Codigo Numerico') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_gral_banco_codigo_numerico' type='text' class='textbox' id='buscador_gral_banco_codigo_numerico' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('gral_banco.codigo_numerico')) ?>' size='22' />
        	<?php 
			$buscador_gral_banco_codigo_numerico_comparador = $criterio->getComparadorDeCampo('gral_banco.codigo_numerico');
			if(trim($buscador_gral_banco_codigo_numerico_comparador) == '') $buscador_gral_banco_codigo_numerico_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_gral_banco_codigo_numerico_comparador', Criterio::getComparadoresCmb(), $buscador_gral_banco_codigo_numerico_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Codigo') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_gral_banco_codigo' type='text' class='textbox' id='buscador_gral_banco_codigo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('gral_banco.codigo')) ?>' size='22' />
        	<?php 
			$buscador_gral_banco_codigo_comparador = $criterio->getComparadorDeCampo('gral_banco.codigo');
			if(trim($buscador_gral_banco_codigo_comparador) == '') $buscador_gral_banco_codigo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_gral_banco_codigo_comparador', Criterio::getComparadoresCmb(), $buscador_gral_banco_codigo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_gral_banco_observacion' type='text' class='textbox' id='buscador_gral_banco_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('gral_banco.observacion')) ?>' size='22' />
        	<?php 
			$buscador_gral_banco_observacion_comparador = $criterio->getComparadorDeCampo('gral_banco.observacion');
			if(trim($buscador_gral_banco_observacion_comparador) == '') $buscador_gral_banco_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_gral_banco_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_gral_banco_observacion_comparador, 'textbox comparador') ?>
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

