<?php
include_once "_autoload.php";
$criterio = new Criterio(FndChqTipoEmisor::SES_CRITERIOS);
$criterio->addTabla('fnd_chq_tipo_emisor');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='fnd_chq_tipo_emisor'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Descripcion') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_fnd_chq_tipo_emisor_descripcion' type='text' class='textbox' id='buscador_fnd_chq_tipo_emisor_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('fnd_chq_tipo_emisor.descripcion')) ?>' size='22' />
        	<?php 
			$buscador_fnd_chq_tipo_emisor_descripcion_comparador = $criterio->getComparadorDeCampo('fnd_chq_tipo_emisor.descripcion');
			if(trim($buscador_fnd_chq_tipo_emisor_descripcion_comparador) == '') $buscador_fnd_chq_tipo_emisor_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_fnd_chq_tipo_emisor_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_fnd_chq_tipo_emisor_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Codigo') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_fnd_chq_tipo_emisor_codigo' type='text' class='textbox' id='buscador_fnd_chq_tipo_emisor_codigo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('fnd_chq_tipo_emisor.codigo')) ?>' size='22' />
        	<?php 
			$buscador_fnd_chq_tipo_emisor_codigo_comparador = $criterio->getComparadorDeCampo('fnd_chq_tipo_emisor.codigo');
			if(trim($buscador_fnd_chq_tipo_emisor_codigo_comparador) == '') $buscador_fnd_chq_tipo_emisor_codigo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_fnd_chq_tipo_emisor_codigo_comparador', Criterio::getComparadoresCmb(), $buscador_fnd_chq_tipo_emisor_codigo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_fnd_chq_tipo_emisor_observacion' type='text' class='textbox' id='buscador_fnd_chq_tipo_emisor_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('fnd_chq_tipo_emisor.observacion')) ?>' size='22' />
        	<?php 
			$buscador_fnd_chq_tipo_emisor_observacion_comparador = $criterio->getComparadorDeCampo('fnd_chq_tipo_emisor.observacion');
			if(trim($buscador_fnd_chq_tipo_emisor_observacion_comparador) == '') $buscador_fnd_chq_tipo_emisor_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_fnd_chq_tipo_emisor_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_fnd_chq_tipo_emisor_observacion_comparador, 'textbox comparador') ?>
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

