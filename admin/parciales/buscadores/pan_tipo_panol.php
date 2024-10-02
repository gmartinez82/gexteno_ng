<?php
include_once "_autoload.php";
$criterio = new Criterio(PanTipoPanol::SES_CRITERIOS);
$criterio->addTabla('pan_tipo_panol');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='pan_tipo_panol'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Descripcion') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_pan_tipo_panol_descripcion' type='text' class='textbox' id='buscador_pan_tipo_panol_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pan_tipo_panol.descripcion')) ?>' size='22' />
        	<?php 
			$buscador_pan_tipo_panol_descripcion_comparador = $criterio->getComparadorDeCampo('pan_tipo_panol.descripcion');
			if(trim($buscador_pan_tipo_panol_descripcion_comparador) == '') $buscador_pan_tipo_panol_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_pan_tipo_panol_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_pan_tipo_panol_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Codigo') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_pan_tipo_panol_codigo' type='text' class='textbox' id='buscador_pan_tipo_panol_codigo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pan_tipo_panol.codigo')) ?>' size='22' />
        	<?php 
			$buscador_pan_tipo_panol_codigo_comparador = $criterio->getComparadorDeCampo('pan_tipo_panol.codigo');
			if(trim($buscador_pan_tipo_panol_codigo_comparador) == '') $buscador_pan_tipo_panol_codigo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_pan_tipo_panol_codigo_comparador', Criterio::getComparadoresCmb(), $buscador_pan_tipo_panol_codigo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_pan_tipo_panol_observacion' type='text' class='textbox' id='buscador_pan_tipo_panol_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pan_tipo_panol.observacion')) ?>' size='22' />
        	<?php 
			$buscador_pan_tipo_panol_observacion_comparador = $criterio->getComparadorDeCampo('pan_tipo_panol.observacion');
			if(trim($buscador_pan_tipo_panol_observacion_comparador) == '') $buscador_pan_tipo_panol_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_pan_tipo_panol_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_pan_tipo_panol_observacion_comparador, 'textbox comparador') ?>
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

