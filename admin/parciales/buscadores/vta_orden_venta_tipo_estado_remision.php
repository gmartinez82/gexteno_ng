<?php
include_once "_autoload.php";
$criterio = new Criterio(VtaOrdenVentaTipoEstadoRemision::SES_CRITERIOS);
$criterio->addTabla('vta_orden_venta_tipo_estado_remision');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='vta_orden_venta_tipo_estado_remision'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Descripcion') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_orden_venta_tipo_estado_remision_descripcion' type='text' class='textbox' id='buscador_vta_orden_venta_tipo_estado_remision_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_orden_venta_tipo_estado_remision.descripcion')) ?>' size='22' />
        	<?php 
			$buscador_vta_orden_venta_tipo_estado_remision_descripcion_comparador = $criterio->getComparadorDeCampo('vta_orden_venta_tipo_estado_remision.descripcion');
			if(trim($buscador_vta_orden_venta_tipo_estado_remision_descripcion_comparador) == '') $buscador_vta_orden_venta_tipo_estado_remision_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_vta_orden_venta_tipo_estado_remision_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_vta_orden_venta_tipo_estado_remision_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Codigo') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_orden_venta_tipo_estado_remision_codigo' type='text' class='textbox' id='buscador_vta_orden_venta_tipo_estado_remision_codigo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_orden_venta_tipo_estado_remision.codigo')) ?>' size='22' />
        	<?php 
			$buscador_vta_orden_venta_tipo_estado_remision_codigo_comparador = $criterio->getComparadorDeCampo('vta_orden_venta_tipo_estado_remision.codigo');
			if(trim($buscador_vta_orden_venta_tipo_estado_remision_codigo_comparador) == '') $buscador_vta_orden_venta_tipo_estado_remision_codigo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_vta_orden_venta_tipo_estado_remision_codigo_comparador', Criterio::getComparadoresCmb(), $buscador_vta_orden_venta_tipo_estado_remision_codigo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Activo') ?></div>
		  <div class='dato'>
		  
		<?php Html::html_dib_select(1, 'buscador_vta_orden_venta_tipo_estado_remision_activo', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_orden_venta_tipo_estado_remision.activo'), 'textbox') ?>
		
        	<?php 
			$buscador_vta_orden_venta_tipo_estado_remision_activo_comparador = $criterio->getComparadorDeCampo('vta_orden_venta_tipo_estado_remision.activo');
			if(trim($buscador_vta_orden_venta_tipo_estado_remision_activo_comparador) == '') $buscador_vta_orden_venta_tipo_estado_remision_activo_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_orden_venta_tipo_estado_remision_activo_comparador', Criterio::getComparadoresCmb(), $buscador_vta_orden_venta_tipo_estado_remision_activo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Terminal') ?></div>
		  <div class='dato'>
		  
		<?php Html::html_dib_select(1, 'buscador_vta_orden_venta_tipo_estado_remision_terminal', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_orden_venta_tipo_estado_remision.terminal'), 'textbox') ?>
		
        	<?php 
			$buscador_vta_orden_venta_tipo_estado_remision_terminal_comparador = $criterio->getComparadorDeCampo('vta_orden_venta_tipo_estado_remision.terminal');
			if(trim($buscador_vta_orden_venta_tipo_estado_remision_terminal_comparador) == '') $buscador_vta_orden_venta_tipo_estado_remision_terminal_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_orden_venta_tipo_estado_remision_terminal_comparador', Criterio::getComparadoresCmb(), $buscador_vta_orden_venta_tipo_estado_remision_terminal_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_orden_venta_tipo_estado_remision_observacion' type='text' class='textbox' id='buscador_vta_orden_venta_tipo_estado_remision_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_orden_venta_tipo_estado_remision.observacion')) ?>' size='22' />
        	<?php 
			$buscador_vta_orden_venta_tipo_estado_remision_observacion_comparador = $criterio->getComparadorDeCampo('vta_orden_venta_tipo_estado_remision.observacion');
			if(trim($buscador_vta_orden_venta_tipo_estado_remision_observacion_comparador) == '') $buscador_vta_orden_venta_tipo_estado_remision_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_vta_orden_venta_tipo_estado_remision_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_vta_orden_venta_tipo_estado_remision_observacion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Estado') ?></div>
		  <div class='dato'>
		  
		<?php Html::html_dib_select(1, 'buscador_vta_orden_venta_tipo_estado_remision_estado', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_orden_venta_tipo_estado_remision.estado'), 'textbox') ?>
		
        	<?php 
			$buscador_vta_orden_venta_tipo_estado_remision_estado_comparador = $criterio->getComparadorDeCampo('vta_orden_venta_tipo_estado_remision.estado');
			if(trim($buscador_vta_orden_venta_tipo_estado_remision_estado_comparador) == '') $buscador_vta_orden_venta_tipo_estado_remision_estado_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_orden_venta_tipo_estado_remision_estado_comparador', Criterio::getComparadoresCmb(), $buscador_vta_orden_venta_tipo_estado_remision_estado_comparador, 'textbox comparador') ?>
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

