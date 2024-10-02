<?php
include_once "_autoload.php";
$criterio = new Criterio(GralMedioPago::SES_CRITERIOS);
$criterio->addTabla('gral_medio_pago');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='gral_medio_pago'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Descripcion') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_gral_medio_pago_descripcion' type='text' class='textbox' id='buscador_gral_medio_pago_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('gral_medio_pago.descripcion')) ?>' size='22' />
        	<?php 
			$buscador_gral_medio_pago_descripcion_comparador = $criterio->getComparadorDeCampo('gral_medio_pago.descripcion');
			if(trim($buscador_gral_medio_pago_descripcion_comparador) == '') $buscador_gral_medio_pago_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_gral_medio_pago_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_gral_medio_pago_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Codigo') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_gral_medio_pago_codigo' type='text' class='textbox' id='buscador_gral_medio_pago_codigo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('gral_medio_pago.codigo')) ?>' size='22' />
        	<?php 
			$buscador_gral_medio_pago_codigo_comparador = $criterio->getComparadorDeCampo('gral_medio_pago.codigo');
			if(trim($buscador_gral_medio_pago_codigo_comparador) == '') $buscador_gral_medio_pago_codigo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_gral_medio_pago_codigo_comparador', Criterio::getComparadoresCmb(), $buscador_gral_medio_pago_codigo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Mueve Caja') ?></div>
		  <div class='dato'>
		  
		<?php Html::html_dib_select(1, 'buscador_gral_medio_pago_mueve_caja', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('gral_medio_pago.mueve_caja'), 'textbox') ?>
		
        	<?php 
			$buscador_gral_medio_pago_mueve_caja_comparador = $criterio->getComparadorDeCampo('gral_medio_pago.mueve_caja');
			if(trim($buscador_gral_medio_pago_mueve_caja_comparador) == '') $buscador_gral_medio_pago_mueve_caja_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_gral_medio_pago_mueve_caja_comparador', Criterio::getComparadoresCmb(), $buscador_gral_medio_pago_mueve_caja_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Realiza Pagos') ?></div>
		  <div class='dato'>
		  
		<?php Html::html_dib_select(1, 'buscador_gral_medio_pago_realiza_pago', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('gral_medio_pago.realiza_pago'), 'textbox') ?>
		
        	<?php 
			$buscador_gral_medio_pago_realiza_pago_comparador = $criterio->getComparadorDeCampo('gral_medio_pago.realiza_pago');
			if(trim($buscador_gral_medio_pago_realiza_pago_comparador) == '') $buscador_gral_medio_pago_realiza_pago_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_gral_medio_pago_realiza_pago_comparador', Criterio::getComparadoresCmb(), $buscador_gral_medio_pago_realiza_pago_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_gral_medio_pago_observacion' type='text' class='textbox' id='buscador_gral_medio_pago_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('gral_medio_pago.observacion')) ?>' size='22' />
        	<?php 
			$buscador_gral_medio_pago_observacion_comparador = $criterio->getComparadorDeCampo('gral_medio_pago.observacion');
			if(trim($buscador_gral_medio_pago_observacion_comparador) == '') $buscador_gral_medio_pago_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_gral_medio_pago_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_gral_medio_pago_observacion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Estado') ?></div>
		  <div class='dato'>
		  
		<?php Html::html_dib_select(1, 'buscador_gral_medio_pago_estado', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('gral_medio_pago.estado'), 'textbox') ?>
		
        	<?php 
			$buscador_gral_medio_pago_estado_comparador = $criterio->getComparadorDeCampo('gral_medio_pago.estado');
			if(trim($buscador_gral_medio_pago_estado_comparador) == '') $buscador_gral_medio_pago_estado_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_gral_medio_pago_estado_comparador', Criterio::getComparadoresCmb(), $buscador_gral_medio_pago_estado_comparador, 'textbox comparador') ?>
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

