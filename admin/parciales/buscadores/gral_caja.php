<?php
include_once "_autoload.php";
$criterio = new Criterio(GralCaja::SES_CRITERIOS);
$criterio->addTabla('gral_caja');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='gral_caja'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Descripcion') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_gral_caja_descripcion' type='text' class='textbox' id='buscador_gral_caja_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('gral_caja.descripcion')) ?>' size='22' />
        	<?php 
			$buscador_gral_caja_descripcion_comparador = $criterio->getComparadorDeCampo('gral_caja.descripcion');
			if(trim($buscador_gral_caja_descripcion_comparador) == '') $buscador_gral_caja_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_gral_caja_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_gral_caja_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('GralCajaTipo') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_gral_caja_gral_caja_tipo_id', Gral::getCmbFiltro(GralCajaTipo::getGralCajaTiposCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('gral_caja.gral_caja_tipo_id'), 'textbox')?>
        	<?php 
			$buscador_gral_caja_gral_caja_tipo_id_comparador = $criterio->getComparadorDeCampo('gral_caja.gral_caja_tipo_id');
			if(trim($buscador_gral_caja_gral_caja_tipo_id_comparador) == '') $buscador_gral_caja_gral_caja_tipo_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_gral_caja_gral_caja_tipo_id_comparador', Criterio::getComparadoresCmb(), $buscador_gral_caja_gral_caja_tipo_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Numero') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_gral_caja_numero' type='text' class='textbox' id='buscador_gral_caja_numero' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('gral_caja.numero')) ?>' size='22' />
        	<?php 
			$buscador_gral_caja_numero_comparador = $criterio->getComparadorDeCampo('gral_caja.numero');
			if(trim($buscador_gral_caja_numero_comparador) == '') $buscador_gral_caja_numero_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_gral_caja_numero_comparador', Criterio::getComparadoresCmb(), $buscador_gral_caja_numero_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Codigo') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_gral_caja_codigo' type='text' class='textbox' id='buscador_gral_caja_codigo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('gral_caja.codigo')) ?>' size='22' />
        	<?php 
			$buscador_gral_caja_codigo_comparador = $criterio->getComparadorDeCampo('gral_caja.codigo');
			if(trim($buscador_gral_caja_codigo_comparador) == '') $buscador_gral_caja_codigo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_gral_caja_codigo_comparador', Criterio::getComparadoresCmb(), $buscador_gral_caja_codigo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_gral_caja_observacion' type='text' class='textbox' id='buscador_gral_caja_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('gral_caja.observacion')) ?>' size='22' />
        	<?php 
			$buscador_gral_caja_observacion_comparador = $criterio->getComparadorDeCampo('gral_caja.observacion');
			if(trim($buscador_gral_caja_observacion_comparador) == '') $buscador_gral_caja_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_gral_caja_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_gral_caja_observacion_comparador, 'textbox comparador') ?>
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

