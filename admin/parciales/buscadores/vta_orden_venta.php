<?php
include_once "_autoload.php";
$criterio = new Criterio(VtaOrdenVenta::SES_CRITERIOS);
$criterio->addTabla('vta_orden_venta');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='vta_orden_venta'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Descripcion') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_orden_venta_descripcion' type='text' class='textbox' id='buscador_vta_orden_venta_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_orden_venta.descripcion')) ?>' size='22' />
        	<?php 
			$buscador_vta_orden_venta_descripcion_comparador = $criterio->getComparadorDeCampo('vta_orden_venta.descripcion');
			if(trim($buscador_vta_orden_venta_descripcion_comparador) == '') $buscador_vta_orden_venta_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_vta_orden_venta_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_vta_orden_venta_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('VtaPresupuesto') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_vta_orden_venta_vta_presupuesto_id', Gral::getCmbFiltro(VtaPresupuesto::getVtaPresupuestosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_orden_venta.vta_presupuesto_id'), 'textbox')?>
        	<?php 
			$buscador_vta_orden_venta_vta_presupuesto_id_comparador = $criterio->getComparadorDeCampo('vta_orden_venta.vta_presupuesto_id');
			if(trim($buscador_vta_orden_venta_vta_presupuesto_id_comparador) == '') $buscador_vta_orden_venta_vta_presupuesto_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_orden_venta_vta_presupuesto_id_comparador', Criterio::getComparadoresCmb(), $buscador_vta_orden_venta_vta_presupuesto_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('VtaPresupuestoInsInsumo') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_vta_orden_venta_vta_presupuesto_ins_insumo_id', Gral::getCmbFiltro(VtaPresupuestoInsInsumo::getVtaPresupuestoInsInsumosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_orden_venta.vta_presupuesto_ins_insumo_id'), 'textbox')?>
        	<?php 
			$buscador_vta_orden_venta_vta_presupuesto_ins_insumo_id_comparador = $criterio->getComparadorDeCampo('vta_orden_venta.vta_presupuesto_ins_insumo_id');
			if(trim($buscador_vta_orden_venta_vta_presupuesto_ins_insumo_id_comparador) == '') $buscador_vta_orden_venta_vta_presupuesto_ins_insumo_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_orden_venta_vta_presupuesto_ins_insumo_id_comparador', Criterio::getComparadoresCmb(), $buscador_vta_orden_venta_vta_presupuesto_ins_insumo_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('InsInsumo') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_vta_orden_venta_ins_insumo_id', Gral::getCmbFiltro(InsInsumo::getInsInsumosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_orden_venta.ins_insumo_id'), 'textbox')?>
        	<?php 
			$buscador_vta_orden_venta_ins_insumo_id_comparador = $criterio->getComparadorDeCampo('vta_orden_venta.ins_insumo_id');
			if(trim($buscador_vta_orden_venta_ins_insumo_id_comparador) == '') $buscador_vta_orden_venta_ins_insumo_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_orden_venta_ins_insumo_id_comparador', Criterio::getComparadoresCmb(), $buscador_vta_orden_venta_ins_insumo_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('GralTipoIva') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_vta_orden_venta_gral_tipo_iva_id', Gral::getCmbFiltro(GralTipoIva::getGralTipoIvasCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_orden_venta.gral_tipo_iva_id'), 'textbox')?>
        	<?php 
			$buscador_vta_orden_venta_gral_tipo_iva_id_comparador = $criterio->getComparadorDeCampo('vta_orden_venta.gral_tipo_iva_id');
			if(trim($buscador_vta_orden_venta_gral_tipo_iva_id_comparador) == '') $buscador_vta_orden_venta_gral_tipo_iva_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_orden_venta_gral_tipo_iva_id_comparador', Criterio::getComparadoresCmb(), $buscador_vta_orden_venta_gral_tipo_iva_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('InsTipoListaPrecio') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_vta_orden_venta_ins_tipo_lista_precio_id', Gral::getCmbFiltro(InsTipoListaPrecio::getInsTipoListaPreciosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_orden_venta.ins_tipo_lista_precio_id'), 'textbox')?>
        	<?php 
			$buscador_vta_orden_venta_ins_tipo_lista_precio_id_comparador = $criterio->getComparadorDeCampo('vta_orden_venta.ins_tipo_lista_precio_id');
			if(trim($buscador_vta_orden_venta_ins_tipo_lista_precio_id_comparador) == '') $buscador_vta_orden_venta_ins_tipo_lista_precio_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_orden_venta_ins_tipo_lista_precio_id_comparador', Criterio::getComparadoresCmb(), $buscador_vta_orden_venta_ins_tipo_lista_precio_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('VtaOrdenVentaTipoEstado') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_vta_orden_venta_vta_orden_venta_tipo_estado_id', Gral::getCmbFiltro(VtaOrdenVentaTipoEstado::getVtaOrdenVentaTipoEstadosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_orden_venta.vta_orden_venta_tipo_estado_id'), 'textbox')?>
        	<?php 
			$buscador_vta_orden_venta_vta_orden_venta_tipo_estado_id_comparador = $criterio->getComparadorDeCampo('vta_orden_venta.vta_orden_venta_tipo_estado_id');
			if(trim($buscador_vta_orden_venta_vta_orden_venta_tipo_estado_id_comparador) == '') $buscador_vta_orden_venta_vta_orden_venta_tipo_estado_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_orden_venta_vta_orden_venta_tipo_estado_id_comparador', Criterio::getComparadoresCmb(), $buscador_vta_orden_venta_vta_orden_venta_tipo_estado_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('VtaOrdenVentaTipoEstadoFacturacion') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_vta_orden_venta_vta_orden_venta_tipo_estado_facturacion_id', Gral::getCmbFiltro(VtaOrdenVentaTipoEstadoFacturacion::getVtaOrdenVentaTipoEstadoFacturacionsCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_orden_venta.vta_orden_venta_tipo_estado_facturacion_id'), 'textbox')?>
        	<?php 
			$buscador_vta_orden_venta_vta_orden_venta_tipo_estado_facturacion_id_comparador = $criterio->getComparadorDeCampo('vta_orden_venta.vta_orden_venta_tipo_estado_facturacion_id');
			if(trim($buscador_vta_orden_venta_vta_orden_venta_tipo_estado_facturacion_id_comparador) == '') $buscador_vta_orden_venta_vta_orden_venta_tipo_estado_facturacion_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_orden_venta_vta_orden_venta_tipo_estado_facturacion_id_comparador', Criterio::getComparadoresCmb(), $buscador_vta_orden_venta_vta_orden_venta_tipo_estado_facturacion_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('VtaOrdenVentaTipoEstadoRemision') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_vta_orden_venta_vta_orden_venta_tipo_estado_remision_id', Gral::getCmbFiltro(VtaOrdenVentaTipoEstadoRemision::getVtaOrdenVentaTipoEstadoRemisionsCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_orden_venta.vta_orden_venta_tipo_estado_remision_id'), 'textbox')?>
        	<?php 
			$buscador_vta_orden_venta_vta_orden_venta_tipo_estado_remision_id_comparador = $criterio->getComparadorDeCampo('vta_orden_venta.vta_orden_venta_tipo_estado_remision_id');
			if(trim($buscador_vta_orden_venta_vta_orden_venta_tipo_estado_remision_id_comparador) == '') $buscador_vta_orden_venta_vta_orden_venta_tipo_estado_remision_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_orden_venta_vta_orden_venta_tipo_estado_remision_id_comparador', Criterio::getComparadoresCmb(), $buscador_vta_orden_venta_vta_orden_venta_tipo_estado_remision_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_orden_venta_importe_unitario' type='text' class='textbox' id='buscador_vta_orden_venta_importe_unitario' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_orden_venta.importe_unitario')) ?>' size='22' />
        	<?php 
			$buscador_vta_orden_venta_importe_unitario_comparador = $criterio->getComparadorDeCampo('vta_orden_venta.importe_unitario');
			if(trim($buscador_vta_orden_venta_importe_unitario_comparador) == '') $buscador_vta_orden_venta_importe_unitario_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_orden_venta_importe_unitario_comparador', Criterio::getComparadoresCmb(), $buscador_vta_orden_venta_importe_unitario_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_orden_venta_cantidad' type='text' class='textbox' id='buscador_vta_orden_venta_cantidad' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_orden_venta.cantidad')) ?>' size='22' />
        	<?php 
			$buscador_vta_orden_venta_cantidad_comparador = $criterio->getComparadorDeCampo('vta_orden_venta.cantidad');
			if(trim($buscador_vta_orden_venta_cantidad_comparador) == '') $buscador_vta_orden_venta_cantidad_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_orden_venta_cantidad_comparador', Criterio::getComparadoresCmb(), $buscador_vta_orden_venta_cantidad_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_orden_venta_descuento' type='text' class='textbox' id='buscador_vta_orden_venta_descuento' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_orden_venta.descuento')) ?>' size='22' />
        	<?php 
			$buscador_vta_orden_venta_descuento_comparador = $criterio->getComparadorDeCampo('vta_orden_venta.descuento');
			if(trim($buscador_vta_orden_venta_descuento_comparador) == '') $buscador_vta_orden_venta_descuento_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_orden_venta_descuento_comparador', Criterio::getComparadoresCmb(), $buscador_vta_orden_venta_descuento_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('InsInsumoCosto') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_vta_orden_venta_ins_insumo_costo_id', Gral::getCmbFiltro(InsInsumoCosto::getInsInsumoCostosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_orden_venta.ins_insumo_costo_id'), 'textbox')?>
        	<?php 
			$buscador_vta_orden_venta_ins_insumo_costo_id_comparador = $criterio->getComparadorDeCampo('vta_orden_venta.ins_insumo_costo_id');
			if(trim($buscador_vta_orden_venta_ins_insumo_costo_id_comparador) == '') $buscador_vta_orden_venta_ins_insumo_costo_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_orden_venta_ins_insumo_costo_id_comparador', Criterio::getComparadoresCmb(), $buscador_vta_orden_venta_ins_insumo_costo_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_orden_venta_importe_costo' type='text' class='textbox' id='buscador_vta_orden_venta_importe_costo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_orden_venta.importe_costo')) ?>' size='22' />
        	<?php 
			$buscador_vta_orden_venta_importe_costo_comparador = $criterio->getComparadorDeCampo('vta_orden_venta.importe_costo');
			if(trim($buscador_vta_orden_venta_importe_costo_comparador) == '') $buscador_vta_orden_venta_importe_costo_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_orden_venta_importe_costo_comparador', Criterio::getComparadoresCmb(), $buscador_vta_orden_venta_importe_costo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('VtaPoliticaDescuento') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_vta_orden_venta_vta_politica_descuento_id', Gral::getCmbFiltro(VtaPoliticaDescuento::getVtaPoliticaDescuentosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_orden_venta.vta_politica_descuento_id'), 'textbox')?>
        	<?php 
			$buscador_vta_orden_venta_vta_politica_descuento_id_comparador = $criterio->getComparadorDeCampo('vta_orden_venta.vta_politica_descuento_id');
			if(trim($buscador_vta_orden_venta_vta_politica_descuento_id_comparador) == '') $buscador_vta_orden_venta_vta_politica_descuento_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_orden_venta_vta_politica_descuento_id_comparador', Criterio::getComparadoresCmb(), $buscador_vta_orden_venta_vta_politica_descuento_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('VtaPoliticaDescuentoRango') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_vta_orden_venta_vta_politica_descuento_rango_id', Gral::getCmbFiltro(VtaPoliticaDescuentoRango::getVtaPoliticaDescuentoRangosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_orden_venta.vta_politica_descuento_rango_id'), 'textbox')?>
        	<?php 
			$buscador_vta_orden_venta_vta_politica_descuento_rango_id_comparador = $criterio->getComparadorDeCampo('vta_orden_venta.vta_politica_descuento_rango_id');
			if(trim($buscador_vta_orden_venta_vta_politica_descuento_rango_id_comparador) == '') $buscador_vta_orden_venta_vta_politica_descuento_rango_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_orden_venta_vta_politica_descuento_rango_id_comparador', Criterio::getComparadoresCmb(), $buscador_vta_orden_venta_vta_politica_descuento_rango_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_orden_venta_porcentaje_politica_descuento' type='text' class='textbox' id='buscador_vta_orden_venta_porcentaje_politica_descuento' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_orden_venta.porcentaje_politica_descuento')) ?>' size='22' />
        	<?php 
			$buscador_vta_orden_venta_porcentaje_politica_descuento_comparador = $criterio->getComparadorDeCampo('vta_orden_venta.porcentaje_politica_descuento');
			if(trim($buscador_vta_orden_venta_porcentaje_politica_descuento_comparador) == '') $buscador_vta_orden_venta_porcentaje_politica_descuento_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_orden_venta_porcentaje_politica_descuento_comparador', Criterio::getComparadoresCmb(), $buscador_vta_orden_venta_porcentaje_politica_descuento_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_orden_venta_importe_politica_descuento' type='text' class='textbox' id='buscador_vta_orden_venta_importe_politica_descuento' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_orden_venta.importe_politica_descuento')) ?>' size='22' />
        	<?php 
			$buscador_vta_orden_venta_importe_politica_descuento_comparador = $criterio->getComparadorDeCampo('vta_orden_venta.importe_politica_descuento');
			if(trim($buscador_vta_orden_venta_importe_politica_descuento_comparador) == '') $buscador_vta_orden_venta_importe_politica_descuento_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_orden_venta_importe_politica_descuento_comparador', Criterio::getComparadoresCmb(), $buscador_vta_orden_venta_importe_politica_descuento_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Codigo') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_orden_venta_codigo' type='text' class='textbox' id='buscador_vta_orden_venta_codigo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_orden_venta.codigo')) ?>' size='22' />
        	<?php 
			$buscador_vta_orden_venta_codigo_comparador = $criterio->getComparadorDeCampo('vta_orden_venta.codigo');
			if(trim($buscador_vta_orden_venta_codigo_comparador) == '') $buscador_vta_orden_venta_codigo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_vta_orden_venta_codigo_comparador', Criterio::getComparadoresCmb(), $buscador_vta_orden_venta_codigo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_orden_venta_observacion' type='text' class='textbox' id='buscador_vta_orden_venta_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_orden_venta.observacion')) ?>' size='22' />
        	<?php 
			$buscador_vta_orden_venta_observacion_comparador = $criterio->getComparadorDeCampo('vta_orden_venta.observacion');
			if(trim($buscador_vta_orden_venta_observacion_comparador) == '') $buscador_vta_orden_venta_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_vta_orden_venta_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_vta_orden_venta_observacion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Estado') ?></div>
		  <div class='dato'>
		  
		<?php Html::html_dib_select(1, 'buscador_vta_orden_venta_estado', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_orden_venta.estado'), 'textbox') ?>
		
        	<?php 
			$buscador_vta_orden_venta_estado_comparador = $criterio->getComparadorDeCampo('vta_orden_venta.estado');
			if(trim($buscador_vta_orden_venta_estado_comparador) == '') $buscador_vta_orden_venta_estado_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_orden_venta_estado_comparador', Criterio::getComparadoresCmb(), $buscador_vta_orden_venta_estado_comparador, 'textbox comparador') ?>
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

