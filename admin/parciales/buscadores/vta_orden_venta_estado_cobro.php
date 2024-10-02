<?php
include_once "_autoload.php";
$criterio = new Criterio(VtaOrdenVentaEstadoCobro::SES_CRITERIOS);
$criterio->addTabla('vta_orden_venta_estado_cobro');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='vta_orden_venta_estado_cobro'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Descripcion') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_orden_venta_estado_cobro_descripcion' type='text' class='textbox' id='buscador_vta_orden_venta_estado_cobro_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_orden_venta_estado_cobro.descripcion')) ?>' size='22' />
        	<?php 
			$buscador_vta_orden_venta_estado_cobro_descripcion_comparador = $criterio->getComparadorDeCampo('vta_orden_venta_estado_cobro.descripcion');
			if(trim($buscador_vta_orden_venta_estado_cobro_descripcion_comparador) == '') $buscador_vta_orden_venta_estado_cobro_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_vta_orden_venta_estado_cobro_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_vta_orden_venta_estado_cobro_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('VtaOrdenVenta') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_vta_orden_venta_estado_cobro_vta_orden_venta_id', Gral::getCmbFiltro(VtaOrdenVenta::getVtaOrdenVentasCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_orden_venta_estado_cobro.vta_orden_venta_id'), 'textbox')?>
        	<?php 
			$buscador_vta_orden_venta_estado_cobro_vta_orden_venta_id_comparador = $criterio->getComparadorDeCampo('vta_orden_venta_estado_cobro.vta_orden_venta_id');
			if(trim($buscador_vta_orden_venta_estado_cobro_vta_orden_venta_id_comparador) == '') $buscador_vta_orden_venta_estado_cobro_vta_orden_venta_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_orden_venta_estado_cobro_vta_orden_venta_id_comparador', Criterio::getComparadoresCmb(), $buscador_vta_orden_venta_estado_cobro_vta_orden_venta_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('VtaOrdenVentaTipoEstadoCobro') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_vta_orden_venta_estado_cobro_vta_orden_venta_tipo_estado_cobro_id', Gral::getCmbFiltro(VtaOrdenVentaTipoEstadoCobro::getVtaOrdenVentaTipoEstadoCobrosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_orden_venta_estado_cobro.vta_orden_venta_tipo_estado_cobro_id'), 'textbox')?>
        	<?php 
			$buscador_vta_orden_venta_estado_cobro_vta_orden_venta_tipo_estado_cobro_id_comparador = $criterio->getComparadorDeCampo('vta_orden_venta_estado_cobro.vta_orden_venta_tipo_estado_cobro_id');
			if(trim($buscador_vta_orden_venta_estado_cobro_vta_orden_venta_tipo_estado_cobro_id_comparador) == '') $buscador_vta_orden_venta_estado_cobro_vta_orden_venta_tipo_estado_cobro_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_orden_venta_estado_cobro_vta_orden_venta_tipo_estado_cobro_id_comparador', Criterio::getComparadoresCmb(), $buscador_vta_orden_venta_estado_cobro_vta_orden_venta_tipo_estado_cobro_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Inicial') ?></div>
		  <div class='dato'>
		  
		<?php Html::html_dib_select(1, 'buscador_vta_orden_venta_estado_cobro_inicial', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_orden_venta_estado_cobro.inicial'), 'textbox') ?>
		
        	<?php 
			$buscador_vta_orden_venta_estado_cobro_inicial_comparador = $criterio->getComparadorDeCampo('vta_orden_venta_estado_cobro.inicial');
			if(trim($buscador_vta_orden_venta_estado_cobro_inicial_comparador) == '') $buscador_vta_orden_venta_estado_cobro_inicial_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_orden_venta_estado_cobro_inicial_comparador', Criterio::getComparadoresCmb(), $buscador_vta_orden_venta_estado_cobro_inicial_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Actual') ?></div>
		  <div class='dato'>
		  
		<?php Html::html_dib_select(1, 'buscador_vta_orden_venta_estado_cobro_actual', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_orden_venta_estado_cobro.actual'), 'textbox') ?>
		
        	<?php 
			$buscador_vta_orden_venta_estado_cobro_actual_comparador = $criterio->getComparadorDeCampo('vta_orden_venta_estado_cobro.actual');
			if(trim($buscador_vta_orden_venta_estado_cobro_actual_comparador) == '') $buscador_vta_orden_venta_estado_cobro_actual_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_orden_venta_estado_cobro_actual_comparador', Criterio::getComparadoresCmb(), $buscador_vta_orden_venta_estado_cobro_actual_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Codigo') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_orden_venta_estado_cobro_codigo' type='text' class='textbox' id='buscador_vta_orden_venta_estado_cobro_codigo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_orden_venta_estado_cobro.codigo')) ?>' size='22' />
        	<?php 
			$buscador_vta_orden_venta_estado_cobro_codigo_comparador = $criterio->getComparadorDeCampo('vta_orden_venta_estado_cobro.codigo');
			if(trim($buscador_vta_orden_venta_estado_cobro_codigo_comparador) == '') $buscador_vta_orden_venta_estado_cobro_codigo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_vta_orden_venta_estado_cobro_codigo_comparador', Criterio::getComparadoresCmb(), $buscador_vta_orden_venta_estado_cobro_codigo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_orden_venta_estado_cobro_observacion' type='text' class='textbox' id='buscador_vta_orden_venta_estado_cobro_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_orden_venta_estado_cobro.observacion')) ?>' size='22' />
        	<?php 
			$buscador_vta_orden_venta_estado_cobro_observacion_comparador = $criterio->getComparadorDeCampo('vta_orden_venta_estado_cobro.observacion');
			if(trim($buscador_vta_orden_venta_estado_cobro_observacion_comparador) == '') $buscador_vta_orden_venta_estado_cobro_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_vta_orden_venta_estado_cobro_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_vta_orden_venta_estado_cobro_observacion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Estado') ?></div>
		  <div class='dato'>
		  
		<?php Html::html_dib_select(1, 'buscador_vta_orden_venta_estado_cobro_estado', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_orden_venta_estado_cobro.estado'), 'textbox') ?>
		
        	<?php 
			$buscador_vta_orden_venta_estado_cobro_estado_comparador = $criterio->getComparadorDeCampo('vta_orden_venta_estado_cobro.estado');
			if(trim($buscador_vta_orden_venta_estado_cobro_estado_comparador) == '') $buscador_vta_orden_venta_estado_cobro_estado_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_orden_venta_estado_cobro_estado_comparador', Criterio::getComparadoresCmb(), $buscador_vta_orden_venta_estado_cobro_estado_comparador, 'textbox comparador') ?>
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

