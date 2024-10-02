<?php
include_once "_autoload.php";
$criterio = new Criterio(VtaNotaCreditoVtaFacturaVtaOrdenVenta::SES_CRITERIOS);
$criterio->addTabla('vta_nota_credito_vta_factura_vta_orden_venta');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='vta_nota_credito_vta_factura_vta_orden_venta'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Descripcion') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_nota_credito_vta_factura_vta_orden_venta_descripcion' type='text' class='textbox' id='buscador_vta_nota_credito_vta_factura_vta_orden_venta_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_nota_credito_vta_factura_vta_orden_venta.descripcion')) ?>' size='22' />
        	<?php 
			$buscador_vta_nota_credito_vta_factura_vta_orden_venta_descripcion_comparador = $criterio->getComparadorDeCampo('vta_nota_credito_vta_factura_vta_orden_venta.descripcion');
			if(trim($buscador_vta_nota_credito_vta_factura_vta_orden_venta_descripcion_comparador) == '') $buscador_vta_nota_credito_vta_factura_vta_orden_venta_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_vta_nota_credito_vta_factura_vta_orden_venta_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_vta_nota_credito_vta_factura_vta_orden_venta_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('VtaNotaCredito') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_vta_nota_credito_vta_factura_vta_orden_venta_vta_nota_credito_id', Gral::getCmbFiltro(VtaNotaCredito::getVtaNotaCreditosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_nota_credito_vta_factura_vta_orden_venta.vta_nota_credito_id'), 'textbox')?>
        	<?php 
			$buscador_vta_nota_credito_vta_factura_vta_orden_venta_vta_nota_credito_id_comparador = $criterio->getComparadorDeCampo('vta_nota_credito_vta_factura_vta_orden_venta.vta_nota_credito_id');
			if(trim($buscador_vta_nota_credito_vta_factura_vta_orden_venta_vta_nota_credito_id_comparador) == '') $buscador_vta_nota_credito_vta_factura_vta_orden_venta_vta_nota_credito_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_nota_credito_vta_factura_vta_orden_venta_vta_nota_credito_id_comparador', Criterio::getComparadoresCmb(), $buscador_vta_nota_credito_vta_factura_vta_orden_venta_vta_nota_credito_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('VtaFacturaVtaOrdenVenta') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_vta_nota_credito_vta_factura_vta_orden_venta_vta_factura_vta_orden_venta_id', Gral::getCmbFiltro(VtaFacturaVtaOrdenVenta::getVtaFacturaVtaOrdenVentasCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_nota_credito_vta_factura_vta_orden_venta.vta_factura_vta_orden_venta_id'), 'textbox')?>
        	<?php 
			$buscador_vta_nota_credito_vta_factura_vta_orden_venta_vta_factura_vta_orden_venta_id_comparador = $criterio->getComparadorDeCampo('vta_nota_credito_vta_factura_vta_orden_venta.vta_factura_vta_orden_venta_id');
			if(trim($buscador_vta_nota_credito_vta_factura_vta_orden_venta_vta_factura_vta_orden_venta_id_comparador) == '') $buscador_vta_nota_credito_vta_factura_vta_orden_venta_vta_factura_vta_orden_venta_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_nota_credito_vta_factura_vta_orden_venta_vta_factura_vta_orden_venta_id_comparador', Criterio::getComparadoresCmb(), $buscador_vta_nota_credito_vta_factura_vta_orden_venta_vta_factura_vta_orden_venta_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('InsInsumo') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_vta_nota_credito_vta_factura_vta_orden_venta_ins_insumo_id', Gral::getCmbFiltro(InsInsumo::getInsInsumosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_nota_credito_vta_factura_vta_orden_venta.ins_insumo_id'), 'textbox')?>
        	<?php 
			$buscador_vta_nota_credito_vta_factura_vta_orden_venta_ins_insumo_id_comparador = $criterio->getComparadorDeCampo('vta_nota_credito_vta_factura_vta_orden_venta.ins_insumo_id');
			if(trim($buscador_vta_nota_credito_vta_factura_vta_orden_venta_ins_insumo_id_comparador) == '') $buscador_vta_nota_credito_vta_factura_vta_orden_venta_ins_insumo_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_nota_credito_vta_factura_vta_orden_venta_ins_insumo_id_comparador', Criterio::getComparadoresCmb(), $buscador_vta_nota_credito_vta_factura_vta_orden_venta_ins_insumo_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('InsUnidadMedida') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_vta_nota_credito_vta_factura_vta_orden_venta_ins_unidad_medida_id', Gral::getCmbFiltro(InsUnidadMedida::getInsUnidadMedidasCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_nota_credito_vta_factura_vta_orden_venta.ins_unidad_medida_id'), 'textbox')?>
        	<?php 
			$buscador_vta_nota_credito_vta_factura_vta_orden_venta_ins_unidad_medida_id_comparador = $criterio->getComparadorDeCampo('vta_nota_credito_vta_factura_vta_orden_venta.ins_unidad_medida_id');
			if(trim($buscador_vta_nota_credito_vta_factura_vta_orden_venta_ins_unidad_medida_id_comparador) == '') $buscador_vta_nota_credito_vta_factura_vta_orden_venta_ins_unidad_medida_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_nota_credito_vta_factura_vta_orden_venta_ins_unidad_medida_id_comparador', Criterio::getComparadoresCmb(), $buscador_vta_nota_credito_vta_factura_vta_orden_venta_ins_unidad_medida_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('GralTipoIva') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_vta_nota_credito_vta_factura_vta_orden_venta_gral_tipo_iva_id', Gral::getCmbFiltro(GralTipoIva::getGralTipoIvasCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_nota_credito_vta_factura_vta_orden_venta.gral_tipo_iva_id'), 'textbox')?>
        	<?php 
			$buscador_vta_nota_credito_vta_factura_vta_orden_venta_gral_tipo_iva_id_comparador = $criterio->getComparadorDeCampo('vta_nota_credito_vta_factura_vta_orden_venta.gral_tipo_iva_id');
			if(trim($buscador_vta_nota_credito_vta_factura_vta_orden_venta_gral_tipo_iva_id_comparador) == '') $buscador_vta_nota_credito_vta_factura_vta_orden_venta_gral_tipo_iva_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_nota_credito_vta_factura_vta_orden_venta_gral_tipo_iva_id_comparador', Criterio::getComparadoresCmb(), $buscador_vta_nota_credito_vta_factura_vta_orden_venta_gral_tipo_iva_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_nota_credito_vta_factura_vta_orden_venta_importe_unitario' type='text' class='textbox' id='buscador_vta_nota_credito_vta_factura_vta_orden_venta_importe_unitario' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_nota_credito_vta_factura_vta_orden_venta.importe_unitario')) ?>' size='22' />
        	<?php 
			$buscador_vta_nota_credito_vta_factura_vta_orden_venta_importe_unitario_comparador = $criterio->getComparadorDeCampo('vta_nota_credito_vta_factura_vta_orden_venta.importe_unitario');
			if(trim($buscador_vta_nota_credito_vta_factura_vta_orden_venta_importe_unitario_comparador) == '') $buscador_vta_nota_credito_vta_factura_vta_orden_venta_importe_unitario_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_nota_credito_vta_factura_vta_orden_venta_importe_unitario_comparador', Criterio::getComparadoresCmb(), $buscador_vta_nota_credito_vta_factura_vta_orden_venta_importe_unitario_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_nota_credito_vta_factura_vta_orden_venta_cantidad' type='text' class='textbox' id='buscador_vta_nota_credito_vta_factura_vta_orden_venta_cantidad' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_nota_credito_vta_factura_vta_orden_venta.cantidad')) ?>' size='22' />
        	<?php 
			$buscador_vta_nota_credito_vta_factura_vta_orden_venta_cantidad_comparador = $criterio->getComparadorDeCampo('vta_nota_credito_vta_factura_vta_orden_venta.cantidad');
			if(trim($buscador_vta_nota_credito_vta_factura_vta_orden_venta_cantidad_comparador) == '') $buscador_vta_nota_credito_vta_factura_vta_orden_venta_cantidad_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_nota_credito_vta_factura_vta_orden_venta_cantidad_comparador', Criterio::getComparadoresCmb(), $buscador_vta_nota_credito_vta_factura_vta_orden_venta_cantidad_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Codigo') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_nota_credito_vta_factura_vta_orden_venta_codigo' type='text' class='textbox' id='buscador_vta_nota_credito_vta_factura_vta_orden_venta_codigo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_nota_credito_vta_factura_vta_orden_venta.codigo')) ?>' size='22' />
        	<?php 
			$buscador_vta_nota_credito_vta_factura_vta_orden_venta_codigo_comparador = $criterio->getComparadorDeCampo('vta_nota_credito_vta_factura_vta_orden_venta.codigo');
			if(trim($buscador_vta_nota_credito_vta_factura_vta_orden_venta_codigo_comparador) == '') $buscador_vta_nota_credito_vta_factura_vta_orden_venta_codigo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_vta_nota_credito_vta_factura_vta_orden_venta_codigo_comparador', Criterio::getComparadoresCmb(), $buscador_vta_nota_credito_vta_factura_vta_orden_venta_codigo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_nota_credito_vta_factura_vta_orden_venta_observacion' type='text' class='textbox' id='buscador_vta_nota_credito_vta_factura_vta_orden_venta_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_nota_credito_vta_factura_vta_orden_venta.observacion')) ?>' size='22' />
        	<?php 
			$buscador_vta_nota_credito_vta_factura_vta_orden_venta_observacion_comparador = $criterio->getComparadorDeCampo('vta_nota_credito_vta_factura_vta_orden_venta.observacion');
			if(trim($buscador_vta_nota_credito_vta_factura_vta_orden_venta_observacion_comparador) == '') $buscador_vta_nota_credito_vta_factura_vta_orden_venta_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_vta_nota_credito_vta_factura_vta_orden_venta_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_vta_nota_credito_vta_factura_vta_orden_venta_observacion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Estado') ?></div>
		  <div class='dato'>
		  
		<?php Html::html_dib_select(1, 'buscador_vta_nota_credito_vta_factura_vta_orden_venta_estado', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_nota_credito_vta_factura_vta_orden_venta.estado'), 'textbox') ?>
		
        	<?php 
			$buscador_vta_nota_credito_vta_factura_vta_orden_venta_estado_comparador = $criterio->getComparadorDeCampo('vta_nota_credito_vta_factura_vta_orden_venta.estado');
			if(trim($buscador_vta_nota_credito_vta_factura_vta_orden_venta_estado_comparador) == '') $buscador_vta_nota_credito_vta_factura_vta_orden_venta_estado_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_nota_credito_vta_factura_vta_orden_venta_estado_comparador', Criterio::getComparadoresCmb(), $buscador_vta_nota_credito_vta_factura_vta_orden_venta_estado_comparador, 'textbox comparador') ?>
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

