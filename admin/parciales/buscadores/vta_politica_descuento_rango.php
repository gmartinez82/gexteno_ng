<?php
include_once "_autoload.php";
$criterio = new Criterio(VtaPoliticaDescuentoRango::SES_CRITERIOS);
$criterio->addTabla('vta_politica_descuento_rango');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='vta_politica_descuento_rango'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Descripcion') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_politica_descuento_rango_descripcion' type='text' class='textbox' id='buscador_vta_politica_descuento_rango_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_politica_descuento_rango.descripcion')) ?>' size='22' />
        	<?php 
			$buscador_vta_politica_descuento_rango_descripcion_comparador = $criterio->getComparadorDeCampo('vta_politica_descuento_rango.descripcion');
			if(trim($buscador_vta_politica_descuento_rango_descripcion_comparador) == '') $buscador_vta_politica_descuento_rango_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_vta_politica_descuento_rango_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_vta_politica_descuento_rango_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('VtaPoliticaDescuento') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_vta_politica_descuento_rango_vta_politica_descuento_id', Gral::getCmbFiltro(VtaPoliticaDescuento::getVtaPoliticaDescuentosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_politica_descuento_rango.vta_politica_descuento_id'), 'textbox')?>
        	<?php 
			$buscador_vta_politica_descuento_rango_vta_politica_descuento_id_comparador = $criterio->getComparadorDeCampo('vta_politica_descuento_rango.vta_politica_descuento_id');
			if(trim($buscador_vta_politica_descuento_rango_vta_politica_descuento_id_comparador) == '') $buscador_vta_politica_descuento_rango_vta_politica_descuento_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_politica_descuento_rango_vta_politica_descuento_id_comparador', Criterio::getComparadoresCmb(), $buscador_vta_politica_descuento_rango_vta_politica_descuento_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Desde') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_politica_descuento_rango_cantidad_desde' type='text' class='textbox' id='buscador_vta_politica_descuento_rango_cantidad_desde' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_politica_descuento_rango.cantidad_desde')) ?>' size='22' />
        	<?php 
			$buscador_vta_politica_descuento_rango_cantidad_desde_comparador = $criterio->getComparadorDeCampo('vta_politica_descuento_rango.cantidad_desde');
			if(trim($buscador_vta_politica_descuento_rango_cantidad_desde_comparador) == '') $buscador_vta_politica_descuento_rango_cantidad_desde_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_politica_descuento_rango_cantidad_desde_comparador', Criterio::getComparadoresCmb(), $buscador_vta_politica_descuento_rango_cantidad_desde_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Hasta') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_politica_descuento_rango_cantidad_hasta' type='text' class='textbox' id='buscador_vta_politica_descuento_rango_cantidad_hasta' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_politica_descuento_rango.cantidad_hasta')) ?>' size='22' />
        	<?php 
			$buscador_vta_politica_descuento_rango_cantidad_hasta_comparador = $criterio->getComparadorDeCampo('vta_politica_descuento_rango.cantidad_hasta');
			if(trim($buscador_vta_politica_descuento_rango_cantidad_hasta_comparador) == '') $buscador_vta_politica_descuento_rango_cantidad_hasta_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_politica_descuento_rango_cantidad_hasta_comparador', Criterio::getComparadoresCmb(), $buscador_vta_politica_descuento_rango_cantidad_hasta_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Porc Descuento') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_politica_descuento_rango_porcentaje_descuento' type='text' class='textbox' id='buscador_vta_politica_descuento_rango_porcentaje_descuento' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_politica_descuento_rango.porcentaje_descuento')) ?>' size='22' />
        	<?php 
			$buscador_vta_politica_descuento_rango_porcentaje_descuento_comparador = $criterio->getComparadorDeCampo('vta_politica_descuento_rango.porcentaje_descuento');
			if(trim($buscador_vta_politica_descuento_rango_porcentaje_descuento_comparador) == '') $buscador_vta_politica_descuento_rango_porcentaje_descuento_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_politica_descuento_rango_porcentaje_descuento_comparador', Criterio::getComparadoresCmb(), $buscador_vta_politica_descuento_rango_porcentaje_descuento_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Porc Negociacion') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_politica_descuento_rango_porcentaje_negociacion' type='text' class='textbox' id='buscador_vta_politica_descuento_rango_porcentaje_negociacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_politica_descuento_rango.porcentaje_negociacion')) ?>' size='22' />
        	<?php 
			$buscador_vta_politica_descuento_rango_porcentaje_negociacion_comparador = $criterio->getComparadorDeCampo('vta_politica_descuento_rango.porcentaje_negociacion');
			if(trim($buscador_vta_politica_descuento_rango_porcentaje_negociacion_comparador) == '') $buscador_vta_politica_descuento_rango_porcentaje_negociacion_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_politica_descuento_rango_porcentaje_negociacion_comparador', Criterio::getComparadoresCmb(), $buscador_vta_politica_descuento_rango_porcentaje_negociacion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Codigo') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_politica_descuento_rango_codigo' type='text' class='textbox' id='buscador_vta_politica_descuento_rango_codigo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_politica_descuento_rango.codigo')) ?>' size='22' />
        	<?php 
			$buscador_vta_politica_descuento_rango_codigo_comparador = $criterio->getComparadorDeCampo('vta_politica_descuento_rango.codigo');
			if(trim($buscador_vta_politica_descuento_rango_codigo_comparador) == '') $buscador_vta_politica_descuento_rango_codigo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_vta_politica_descuento_rango_codigo_comparador', Criterio::getComparadoresCmb(), $buscador_vta_politica_descuento_rango_codigo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_politica_descuento_rango_observacion' type='text' class='textbox' id='buscador_vta_politica_descuento_rango_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_politica_descuento_rango.observacion')) ?>' size='22' />
        	<?php 
			$buscador_vta_politica_descuento_rango_observacion_comparador = $criterio->getComparadorDeCampo('vta_politica_descuento_rango.observacion');
			if(trim($buscador_vta_politica_descuento_rango_observacion_comparador) == '') $buscador_vta_politica_descuento_rango_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_vta_politica_descuento_rango_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_vta_politica_descuento_rango_observacion_comparador, 'textbox comparador') ?>
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

