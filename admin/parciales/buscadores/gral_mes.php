<?php
include_once "_autoload.php";
$criterio = new Criterio(GralMes::SES_CRITERIOS);
$criterio->addTabla('gral_mes');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='gral_mes'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Descripcion') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_gral_mes_descripcion' type='text' class='textbox' id='buscador_gral_mes_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('gral_mes.descripcion')) ?>' size='22' />
        	<?php 
			$buscador_gral_mes_descripcion_comparador = $criterio->getComparadorDeCampo('gral_mes.descripcion');
			if(trim($buscador_gral_mes_descripcion_comparador) == '') $buscador_gral_mes_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_gral_mes_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_gral_mes_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Descripcion Corta') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_gral_mes_descripcion_corta' type='text' class='textbox' id='buscador_gral_mes_descripcion_corta' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('gral_mes.descripcion_corta')) ?>' size='22' />
        	<?php 
			$buscador_gral_mes_descripcion_corta_comparador = $criterio->getComparadorDeCampo('gral_mes.descripcion_corta');
			if(trim($buscador_gral_mes_descripcion_corta_comparador) == '') $buscador_gral_mes_descripcion_corta_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_gral_mes_descripcion_corta_comparador', Criterio::getComparadoresCmb(), $buscador_gral_mes_descripcion_corta_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Codigo') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_gral_mes_codigo' type='text' class='textbox' id='buscador_gral_mes_codigo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('gral_mes.codigo')) ?>' size='22' />
        	<?php 
			$buscador_gral_mes_codigo_comparador = $criterio->getComparadorDeCampo('gral_mes.codigo');
			if(trim($buscador_gral_mes_codigo_comparador) == '') $buscador_gral_mes_codigo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_gral_mes_codigo_comparador', Criterio::getComparadoresCmb(), $buscador_gral_mes_codigo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Codigo Numero') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_gral_mes_codigo_numero' type='text' class='textbox' id='buscador_gral_mes_codigo_numero' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('gral_mes.codigo_numero')) ?>' size='22' />
        	<?php 
			$buscador_gral_mes_codigo_numero_comparador = $criterio->getComparadorDeCampo('gral_mes.codigo_numero');
			if(trim($buscador_gral_mes_codigo_numero_comparador) == '') $buscador_gral_mes_codigo_numero_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_gral_mes_codigo_numero_comparador', Criterio::getComparadoresCmb(), $buscador_gral_mes_codigo_numero_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_gral_mes_observacion' type='text' class='textbox' id='buscador_gral_mes_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('gral_mes.observacion')) ?>' size='22' />
        	<?php 
			$buscador_gral_mes_observacion_comparador = $criterio->getComparadorDeCampo('gral_mes.observacion');
			if(trim($buscador_gral_mes_observacion_comparador) == '') $buscador_gral_mes_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_gral_mes_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_gral_mes_observacion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Estado') ?></div>
		  <div class='dato'>
		  
		<?php Html::html_dib_select(1, 'buscador_gral_mes_estado', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('gral_mes.estado'), 'textbox') ?>
		
        	<?php 
			$buscador_gral_mes_estado_comparador = $criterio->getComparadorDeCampo('gral_mes.estado');
			if(trim($buscador_gral_mes_estado_comparador) == '') $buscador_gral_mes_estado_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_gral_mes_estado_comparador', Criterio::getComparadoresCmb(), $buscador_gral_mes_estado_comparador, 'textbox comparador') ?>
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

