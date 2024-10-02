<?php
include_once "_autoload.php";
$criterio = new Criterio(FndChqTipoEmision::SES_CRITERIOS);
$criterio->addTabla('fnd_chq_tipo_emision');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='fnd_chq_tipo_emision'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Descripcion') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_fnd_chq_tipo_emision_descripcion' type='text' class='textbox' id='buscador_fnd_chq_tipo_emision_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('fnd_chq_tipo_emision.descripcion')) ?>' size='22' />
        	<?php 
			$buscador_fnd_chq_tipo_emision_descripcion_comparador = $criterio->getComparadorDeCampo('fnd_chq_tipo_emision.descripcion');
			if(trim($buscador_fnd_chq_tipo_emision_descripcion_comparador) == '') $buscador_fnd_chq_tipo_emision_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_fnd_chq_tipo_emision_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_fnd_chq_tipo_emision_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Codigo') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_fnd_chq_tipo_emision_codigo' type='text' class='textbox' id='buscador_fnd_chq_tipo_emision_codigo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('fnd_chq_tipo_emision.codigo')) ?>' size='22' />
        	<?php 
			$buscador_fnd_chq_tipo_emision_codigo_comparador = $criterio->getComparadorDeCampo('fnd_chq_tipo_emision.codigo');
			if(trim($buscador_fnd_chq_tipo_emision_codigo_comparador) == '') $buscador_fnd_chq_tipo_emision_codigo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_fnd_chq_tipo_emision_codigo_comparador', Criterio::getComparadoresCmb(), $buscador_fnd_chq_tipo_emision_codigo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_fnd_chq_tipo_emision_observacion' type='text' class='textbox' id='buscador_fnd_chq_tipo_emision_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('fnd_chq_tipo_emision.observacion')) ?>' size='22' />
        	<?php 
			$buscador_fnd_chq_tipo_emision_observacion_comparador = $criterio->getComparadorDeCampo('fnd_chq_tipo_emision.observacion');
			if(trim($buscador_fnd_chq_tipo_emision_observacion_comparador) == '') $buscador_fnd_chq_tipo_emision_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_fnd_chq_tipo_emision_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_fnd_chq_tipo_emision_observacion_comparador, 'textbox comparador') ?>
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

