<?php
include_once "_autoload.php";
$criterio = new Criterio(PanUbiPasillo::SES_CRITERIOS);
$criterio->addTabla('pan_ubi_pasillo');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='pan_ubi_pasillo'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Descripcion') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_pan_ubi_pasillo_descripcion' type='text' class='textbox' id='buscador_pan_ubi_pasillo_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pan_ubi_pasillo.descripcion')) ?>' size='22' />
        	<?php 
			$buscador_pan_ubi_pasillo_descripcion_comparador = $criterio->getComparadorDeCampo('pan_ubi_pasillo.descripcion');
			if(trim($buscador_pan_ubi_pasillo_descripcion_comparador) == '') $buscador_pan_ubi_pasillo_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_pan_ubi_pasillo_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_pan_ubi_pasillo_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Codigo') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_pan_ubi_pasillo_codigo' type='text' class='textbox' id='buscador_pan_ubi_pasillo_codigo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pan_ubi_pasillo.codigo')) ?>' size='22' />
        	<?php 
			$buscador_pan_ubi_pasillo_codigo_comparador = $criterio->getComparadorDeCampo('pan_ubi_pasillo.codigo');
			if(trim($buscador_pan_ubi_pasillo_codigo_comparador) == '') $buscador_pan_ubi_pasillo_codigo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_pan_ubi_pasillo_codigo_comparador', Criterio::getComparadoresCmb(), $buscador_pan_ubi_pasillo_codigo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_pan_ubi_pasillo_observacion' type='text' class='textbox' id='buscador_pan_ubi_pasillo_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pan_ubi_pasillo.observacion')) ?>' size='22' />
        	<?php 
			$buscador_pan_ubi_pasillo_observacion_comparador = $criterio->getComparadorDeCampo('pan_ubi_pasillo.observacion');
			if(trim($buscador_pan_ubi_pasillo_observacion_comparador) == '') $buscador_pan_ubi_pasillo_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_pan_ubi_pasillo_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_pan_ubi_pasillo_observacion_comparador, 'textbox comparador') ?>
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

