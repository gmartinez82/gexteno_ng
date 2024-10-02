<?php
include_once "_autoload.php";
$criterio = new Criterio(AltControl::SES_CRITERIOS);
$criterio->addTabla('alt_control');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='alt_control'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Descripcion') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_alt_control_descripcion' type='text' class='textbox' id='buscador_alt_control_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('alt_control.descripcion')) ?>' size='22' />
        	<?php 
			$buscador_alt_control_descripcion_comparador = $criterio->getComparadorDeCampo('alt_control.descripcion');
			if(trim($buscador_alt_control_descripcion_comparador) == '') $buscador_alt_control_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_alt_control_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_alt_control_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Codigo') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_alt_control_codigo' type='text' class='textbox' id='buscador_alt_control_codigo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('alt_control.codigo')) ?>' size='22' />
        	<?php 
			$buscador_alt_control_codigo_comparador = $criterio->getComparadorDeCampo('alt_control.codigo');
			if(trim($buscador_alt_control_codigo_comparador) == '') $buscador_alt_control_codigo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_alt_control_codigo_comparador', Criterio::getComparadoresCmb(), $buscador_alt_control_codigo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_alt_control_observacion' type='text' class='textbox' id='buscador_alt_control_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('alt_control.observacion')) ?>' size='22' />
        	<?php 
			$buscador_alt_control_observacion_comparador = $criterio->getComparadorDeCampo('alt_control.observacion');
			if(trim($buscador_alt_control_observacion_comparador) == '') $buscador_alt_control_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_alt_control_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_alt_control_observacion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Control') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_alt_control_control' type='text' class='textbox' id='buscador_alt_control_control' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('alt_control.control')) ?>' size='22' />
        	<?php 
			$buscador_alt_control_control_comparador = $criterio->getComparadorDeCampo('alt_control.control');
			if(trim($buscador_alt_control_control_comparador) == '') $buscador_alt_control_control_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_alt_control_control_comparador', Criterio::getComparadoresCmb(), $buscador_alt_control_control_comparador, 'textbox comparador') ?>
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

