<?php
include_once "_autoload.php";
$criterio = new Criterio(PanUbiEstante::SES_CRITERIOS);
$criterio->addTabla('pan_ubi_estante');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='pan_ubi_estante'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Descripcion') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_pan_ubi_estante_descripcion' type='text' class='textbox' id='buscador_pan_ubi_estante_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pan_ubi_estante.descripcion')) ?>' size='22' />
        	<?php 
			$buscador_pan_ubi_estante_descripcion_comparador = $criterio->getComparadorDeCampo('pan_ubi_estante.descripcion');
			if(trim($buscador_pan_ubi_estante_descripcion_comparador) == '') $buscador_pan_ubi_estante_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_pan_ubi_estante_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_pan_ubi_estante_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Codigo') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_pan_ubi_estante_codigo' type='text' class='textbox' id='buscador_pan_ubi_estante_codigo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pan_ubi_estante.codigo')) ?>' size='22' />
        	<?php 
			$buscador_pan_ubi_estante_codigo_comparador = $criterio->getComparadorDeCampo('pan_ubi_estante.codigo');
			if(trim($buscador_pan_ubi_estante_codigo_comparador) == '') $buscador_pan_ubi_estante_codigo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_pan_ubi_estante_codigo_comparador', Criterio::getComparadoresCmb(), $buscador_pan_ubi_estante_codigo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_pan_ubi_estante_observacion' type='text' class='textbox' id='buscador_pan_ubi_estante_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pan_ubi_estante.observacion')) ?>' size='22' />
        	<?php 
			$buscador_pan_ubi_estante_observacion_comparador = $criterio->getComparadorDeCampo('pan_ubi_estante.observacion');
			if(trim($buscador_pan_ubi_estante_observacion_comparador) == '') $buscador_pan_ubi_estante_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_pan_ubi_estante_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_pan_ubi_estante_observacion_comparador, 'textbox comparador') ?>
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

