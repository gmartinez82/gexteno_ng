<?php
include_once "_autoload.php";
$criterio = new Criterio(PanUbiCelda::SES_CRITERIOS);
$criterio->addTabla('pan_ubi_celda');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='pan_ubi_celda'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Descripcion') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_pan_ubi_celda_descripcion' type='text' class='textbox' id='buscador_pan_ubi_celda_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pan_ubi_celda.descripcion')) ?>' size='22' />
        	<?php 
			$buscador_pan_ubi_celda_descripcion_comparador = $criterio->getComparadorDeCampo('pan_ubi_celda.descripcion');
			if(trim($buscador_pan_ubi_celda_descripcion_comparador) == '') $buscador_pan_ubi_celda_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_pan_ubi_celda_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_pan_ubi_celda_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Codigo') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_pan_ubi_celda_codigo' type='text' class='textbox' id='buscador_pan_ubi_celda_codigo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pan_ubi_celda.codigo')) ?>' size='22' />
        	<?php 
			$buscador_pan_ubi_celda_codigo_comparador = $criterio->getComparadorDeCampo('pan_ubi_celda.codigo');
			if(trim($buscador_pan_ubi_celda_codigo_comparador) == '') $buscador_pan_ubi_celda_codigo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_pan_ubi_celda_codigo_comparador', Criterio::getComparadoresCmb(), $buscador_pan_ubi_celda_codigo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_pan_ubi_celda_observacion' type='text' class='textbox' id='buscador_pan_ubi_celda_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pan_ubi_celda.observacion')) ?>' size='22' />
        	<?php 
			$buscador_pan_ubi_celda_observacion_comparador = $criterio->getComparadorDeCampo('pan_ubi_celda.observacion');
			if(trim($buscador_pan_ubi_celda_observacion_comparador) == '') $buscador_pan_ubi_celda_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_pan_ubi_celda_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_pan_ubi_celda_observacion_comparador, 'textbox comparador') ?>
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

