<?php
include_once "_autoload.php";
$criterio = new Criterio(PdiUrgencia::SES_CRITERIOS);
$criterio->addTabla('pdi_urgencia');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='pdi_urgencia'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Descripcion') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_pdi_urgencia_descripcion' type='text' class='textbox' id='buscador_pdi_urgencia_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pdi_urgencia.descripcion')) ?>' size='22' />
        	<?php 
			$buscador_pdi_urgencia_descripcion_comparador = $criterio->getComparadorDeCampo('pdi_urgencia.descripcion');
			if(trim($buscador_pdi_urgencia_descripcion_comparador) == '') $buscador_pdi_urgencia_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_pdi_urgencia_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_pdi_urgencia_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Codigo') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_pdi_urgencia_codigo' type='text' class='textbox' id='buscador_pdi_urgencia_codigo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pdi_urgencia.codigo')) ?>' size='22' />
        	<?php 
			$buscador_pdi_urgencia_codigo_comparador = $criterio->getComparadorDeCampo('pdi_urgencia.codigo');
			if(trim($buscador_pdi_urgencia_codigo_comparador) == '') $buscador_pdi_urgencia_codigo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_pdi_urgencia_codigo_comparador', Criterio::getComparadoresCmb(), $buscador_pdi_urgencia_codigo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_pdi_urgencia_observacion' type='text' class='textbox' id='buscador_pdi_urgencia_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pdi_urgencia.observacion')) ?>' size='22' />
        	<?php 
			$buscador_pdi_urgencia_observacion_comparador = $criterio->getComparadorDeCampo('pdi_urgencia.observacion');
			if(trim($buscador_pdi_urgencia_observacion_comparador) == '') $buscador_pdi_urgencia_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_pdi_urgencia_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_pdi_urgencia_observacion_comparador, 'textbox comparador') ?>
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

