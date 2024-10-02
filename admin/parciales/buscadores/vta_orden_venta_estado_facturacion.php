<?php
include_once "_autoload.php";
$criterio = new Criterio(VtaOrdenVentaEstadoFacturacion::SES_CRITERIOS);
$criterio->addTabla('vta_orden_venta_estado_facturacion');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='vta_orden_venta_estado_facturacion'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Descripcion') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_orden_venta_estado_facturacion_descripcion' type='text' class='textbox' id='buscador_vta_orden_venta_estado_facturacion_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_orden_venta_estado_facturacion.descripcion')) ?>' size='22' />
        	<?php 
			$buscador_vta_orden_venta_estado_facturacion_descripcion_comparador = $criterio->getComparadorDeCampo('vta_orden_venta_estado_facturacion.descripcion');
			if(trim($buscador_vta_orden_venta_estado_facturacion_descripcion_comparador) == '') $buscador_vta_orden_venta_estado_facturacion_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_vta_orden_venta_estado_facturacion_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_vta_orden_venta_estado_facturacion_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('VtaOrdenVenta') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_vta_orden_venta_estado_facturacion_vta_orden_venta_id', Gral::getCmbFiltro(VtaOrdenVenta::getVtaOrdenVentasCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_orden_venta_estado_facturacion.vta_orden_venta_id'), 'textbox')?>
        	<?php 
			$buscador_vta_orden_venta_estado_facturacion_vta_orden_venta_id_comparador = $criterio->getComparadorDeCampo('vta_orden_venta_estado_facturacion.vta_orden_venta_id');
			if(trim($buscador_vta_orden_venta_estado_facturacion_vta_orden_venta_id_comparador) == '') $buscador_vta_orden_venta_estado_facturacion_vta_orden_venta_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_orden_venta_estado_facturacion_vta_orden_venta_id_comparador', Criterio::getComparadoresCmb(), $buscador_vta_orden_venta_estado_facturacion_vta_orden_venta_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('VtaOrdenVentaTipoEstadoFacturacion') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_vta_orden_venta_estado_facturacion_vta_orden_venta_tipo_estado_facturacion_id', Gral::getCmbFiltro(VtaOrdenVentaTipoEstadoFacturacion::getVtaOrdenVentaTipoEstadoFacturacionsCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_orden_venta_estado_facturacion.vta_orden_venta_tipo_estado_facturacion_id'), 'textbox')?>
        	<?php 
			$buscador_vta_orden_venta_estado_facturacion_vta_orden_venta_tipo_estado_facturacion_id_comparador = $criterio->getComparadorDeCampo('vta_orden_venta_estado_facturacion.vta_orden_venta_tipo_estado_facturacion_id');
			if(trim($buscador_vta_orden_venta_estado_facturacion_vta_orden_venta_tipo_estado_facturacion_id_comparador) == '') $buscador_vta_orden_venta_estado_facturacion_vta_orden_venta_tipo_estado_facturacion_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_orden_venta_estado_facturacion_vta_orden_venta_tipo_estado_facturacion_id_comparador', Criterio::getComparadoresCmb(), $buscador_vta_orden_venta_estado_facturacion_vta_orden_venta_tipo_estado_facturacion_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Inicial') ?></div>
		  <div class='dato'>
		  
		<?php Html::html_dib_select(1, 'buscador_vta_orden_venta_estado_facturacion_inicial', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_orden_venta_estado_facturacion.inicial'), 'textbox') ?>
		
        	<?php 
			$buscador_vta_orden_venta_estado_facturacion_inicial_comparador = $criterio->getComparadorDeCampo('vta_orden_venta_estado_facturacion.inicial');
			if(trim($buscador_vta_orden_venta_estado_facturacion_inicial_comparador) == '') $buscador_vta_orden_venta_estado_facturacion_inicial_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_orden_venta_estado_facturacion_inicial_comparador', Criterio::getComparadoresCmb(), $buscador_vta_orden_venta_estado_facturacion_inicial_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Actual') ?></div>
		  <div class='dato'>
		  
		<?php Html::html_dib_select(1, 'buscador_vta_orden_venta_estado_facturacion_actual', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_orden_venta_estado_facturacion.actual'), 'textbox') ?>
		
        	<?php 
			$buscador_vta_orden_venta_estado_facturacion_actual_comparador = $criterio->getComparadorDeCampo('vta_orden_venta_estado_facturacion.actual');
			if(trim($buscador_vta_orden_venta_estado_facturacion_actual_comparador) == '') $buscador_vta_orden_venta_estado_facturacion_actual_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_orden_venta_estado_facturacion_actual_comparador', Criterio::getComparadoresCmb(), $buscador_vta_orden_venta_estado_facturacion_actual_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Codigo') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_orden_venta_estado_facturacion_codigo' type='text' class='textbox' id='buscador_vta_orden_venta_estado_facturacion_codigo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_orden_venta_estado_facturacion.codigo')) ?>' size='22' />
        	<?php 
			$buscador_vta_orden_venta_estado_facturacion_codigo_comparador = $criterio->getComparadorDeCampo('vta_orden_venta_estado_facturacion.codigo');
			if(trim($buscador_vta_orden_venta_estado_facturacion_codigo_comparador) == '') $buscador_vta_orden_venta_estado_facturacion_codigo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_vta_orden_venta_estado_facturacion_codigo_comparador', Criterio::getComparadoresCmb(), $buscador_vta_orden_venta_estado_facturacion_codigo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_orden_venta_estado_facturacion_observacion' type='text' class='textbox' id='buscador_vta_orden_venta_estado_facturacion_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_orden_venta_estado_facturacion.observacion')) ?>' size='22' />
        	<?php 
			$buscador_vta_orden_venta_estado_facturacion_observacion_comparador = $criterio->getComparadorDeCampo('vta_orden_venta_estado_facturacion.observacion');
			if(trim($buscador_vta_orden_venta_estado_facturacion_observacion_comparador) == '') $buscador_vta_orden_venta_estado_facturacion_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_vta_orden_venta_estado_facturacion_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_vta_orden_venta_estado_facturacion_observacion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Estado') ?></div>
		  <div class='dato'>
		  
		<?php Html::html_dib_select(1, 'buscador_vta_orden_venta_estado_facturacion_estado', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_orden_venta_estado_facturacion.estado'), 'textbox') ?>
		
        	<?php 
			$buscador_vta_orden_venta_estado_facturacion_estado_comparador = $criterio->getComparadorDeCampo('vta_orden_venta_estado_facturacion.estado');
			if(trim($buscador_vta_orden_venta_estado_facturacion_estado_comparador) == '') $buscador_vta_orden_venta_estado_facturacion_estado_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_orden_venta_estado_facturacion_estado_comparador', Criterio::getComparadoresCmb(), $buscador_vta_orden_venta_estado_facturacion_estado_comparador, 'textbox comparador') ?>
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

