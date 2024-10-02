<?php
include_once "_autoload.php";
$criterio = new Criterio(PanUbiAltura::SES_CRITERIOS);
$criterio->addTabla('pan_ubi_altura');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='pan_ubi_altura'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Descripcion') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_pan_ubi_altura_descripcion' type='text' class='textbox' id='buscador_pan_ubi_altura_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pan_ubi_altura.descripcion')) ?>' size='22' />
        	<?php 
			$buscador_pan_ubi_altura_descripcion_comparador = $criterio->getComparadorDeCampo('pan_ubi_altura.descripcion');
			if(trim($buscador_pan_ubi_altura_descripcion_comparador) == '') $buscador_pan_ubi_altura_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_pan_ubi_altura_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_pan_ubi_altura_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Codigo') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_pan_ubi_altura_codigo' type='text' class='textbox' id='buscador_pan_ubi_altura_codigo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pan_ubi_altura.codigo')) ?>' size='22' />
        	<?php 
			$buscador_pan_ubi_altura_codigo_comparador = $criterio->getComparadorDeCampo('pan_ubi_altura.codigo');
			if(trim($buscador_pan_ubi_altura_codigo_comparador) == '') $buscador_pan_ubi_altura_codigo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_pan_ubi_altura_codigo_comparador', Criterio::getComparadoresCmb(), $buscador_pan_ubi_altura_codigo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_pan_ubi_altura_observacion' type='text' class='textbox' id='buscador_pan_ubi_altura_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pan_ubi_altura.observacion')) ?>' size='22' />
        	<?php 
			$buscador_pan_ubi_altura_observacion_comparador = $criterio->getComparadorDeCampo('pan_ubi_altura.observacion');
			if(trim($buscador_pan_ubi_altura_observacion_comparador) == '') $buscador_pan_ubi_altura_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_pan_ubi_altura_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_pan_ubi_altura_observacion_comparador, 'textbox comparador') ?>
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

