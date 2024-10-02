<?php
include_once "_autoload.php";
$criterio = new Criterio(VtaTipoFactura::SES_CRITERIOS);
$criterio->addTabla('vta_tipo_factura');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='vta_tipo_factura'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Descripcion') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_tipo_factura_descripcion' type='text' class='textbox' id='buscador_vta_tipo_factura_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_tipo_factura.descripcion')) ?>' size='22' />
        	<?php 
			$buscador_vta_tipo_factura_descripcion_comparador = $criterio->getComparadorDeCampo('vta_tipo_factura.descripcion');
			if(trim($buscador_vta_tipo_factura_descripcion_comparador) == '') $buscador_vta_tipo_factura_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_vta_tipo_factura_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_vta_tipo_factura_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Codigo') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_tipo_factura_codigo' type='text' class='textbox' id='buscador_vta_tipo_factura_codigo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_tipo_factura.codigo')) ?>' size='22' />
        	<?php 
			$buscador_vta_tipo_factura_codigo_comparador = $criterio->getComparadorDeCampo('vta_tipo_factura.codigo');
			if(trim($buscador_vta_tipo_factura_codigo_comparador) == '') $buscador_vta_tipo_factura_codigo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_vta_tipo_factura_codigo_comparador', Criterio::getComparadoresCmb(), $buscador_vta_tipo_factura_codigo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Codigo Min') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_tipo_factura_codigo_min' type='text' class='textbox' id='buscador_vta_tipo_factura_codigo_min' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_tipo_factura.codigo_min')) ?>' size='22' />
        	<?php 
			$buscador_vta_tipo_factura_codigo_min_comparador = $criterio->getComparadorDeCampo('vta_tipo_factura.codigo_min');
			if(trim($buscador_vta_tipo_factura_codigo_min_comparador) == '') $buscador_vta_tipo_factura_codigo_min_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_vta_tipo_factura_codigo_min_comparador', Criterio::getComparadoresCmb(), $buscador_vta_tipo_factura_codigo_min_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_tipo_factura_observacion' type='text' class='textbox' id='buscador_vta_tipo_factura_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_tipo_factura.observacion')) ?>' size='22' />
        	<?php 
			$buscador_vta_tipo_factura_observacion_comparador = $criterio->getComparadorDeCampo('vta_tipo_factura.observacion');
			if(trim($buscador_vta_tipo_factura_observacion_comparador) == '') $buscador_vta_tipo_factura_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_vta_tipo_factura_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_vta_tipo_factura_observacion_comparador, 'textbox comparador') ?>
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

