<?php
include_once "_autoload.php";
$criterio = new Criterio(VtaPoliticaDescuento::SES_CRITERIOS);
$criterio->addTabla('vta_politica_descuento');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='vta_politica_descuento'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Descripcion') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_politica_descuento_descripcion' type='text' class='textbox' id='buscador_vta_politica_descuento_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_politica_descuento.descripcion')) ?>' size='22' />
        	<?php 
			$buscador_vta_politica_descuento_descripcion_comparador = $criterio->getComparadorDeCampo('vta_politica_descuento.descripcion');
			if(trim($buscador_vta_politica_descuento_descripcion_comparador) == '') $buscador_vta_politica_descuento_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_vta_politica_descuento_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_vta_politica_descuento_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Codigo') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_politica_descuento_codigo' type='text' class='textbox' id='buscador_vta_politica_descuento_codigo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_politica_descuento.codigo')) ?>' size='22' />
        	<?php 
			$buscador_vta_politica_descuento_codigo_comparador = $criterio->getComparadorDeCampo('vta_politica_descuento.codigo');
			if(trim($buscador_vta_politica_descuento_codigo_comparador) == '') $buscador_vta_politica_descuento_codigo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_vta_politica_descuento_codigo_comparador', Criterio::getComparadoresCmb(), $buscador_vta_politica_descuento_codigo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_politica_descuento_observacion' type='text' class='textbox' id='buscador_vta_politica_descuento_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_politica_descuento.observacion')) ?>' size='22' />
        	<?php 
			$buscador_vta_politica_descuento_observacion_comparador = $criterio->getComparadorDeCampo('vta_politica_descuento.observacion');
			if(trim($buscador_vta_politica_descuento_observacion_comparador) == '') $buscador_vta_politica_descuento_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_vta_politica_descuento_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_vta_politica_descuento_observacion_comparador, 'textbox comparador') ?>
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

