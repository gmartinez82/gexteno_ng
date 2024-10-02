<?php
include_once "_autoload.php";
$criterio = new Criterio(PdeOc::SES_CRITERIOS);
$criterio->addTabla('pde_oc');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='pde_oc'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Descripcion') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_pde_oc_descripcion' type='text' class='textbox' id='buscador_pde_oc_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_oc.descripcion')) ?>' size='22' />
        	<?php 
			$buscador_pde_oc_descripcion_comparador = $criterio->getComparadorDeCampo('pde_oc.descripcion');
			if(trim($buscador_pde_oc_descripcion_comparador) == '') $buscador_pde_oc_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_pde_oc_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_pde_oc_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Codigo') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_pde_oc_codigo' type='text' class='textbox' id='buscador_pde_oc_codigo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_oc.codigo')) ?>' size='22' />
        	<?php 
			$buscador_pde_oc_codigo_comparador = $criterio->getComparadorDeCampo('pde_oc.codigo');
			if(trim($buscador_pde_oc_codigo_comparador) == '') $buscador_pde_oc_codigo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_pde_oc_codigo_comparador', Criterio::getComparadoresCmb(), $buscador_pde_oc_codigo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('PdePedido') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_pde_oc_pde_pedido_id', Gral::getCmbFiltro(PdePedido::getPdePedidosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_oc.pde_pedido_id'), 'textbox')?>
        	<?php 
			$buscador_pde_oc_pde_pedido_id_comparador = $criterio->getComparadorDeCampo('pde_oc.pde_pedido_id');
			if(trim($buscador_pde_oc_pde_pedido_id_comparador) == '') $buscador_pde_oc_pde_pedido_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_pde_oc_pde_pedido_id_comparador', Criterio::getComparadoresCmb(), $buscador_pde_oc_pde_pedido_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('PdeCotizacion') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_pde_oc_pde_cotizacion_id', Gral::getCmbFiltro(PdeCotizacion::getPdeCotizacionsCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_oc.pde_cotizacion_id'), 'textbox')?>
        	<?php 
			$buscador_pde_oc_pde_cotizacion_id_comparador = $criterio->getComparadorDeCampo('pde_oc.pde_cotizacion_id');
			if(trim($buscador_pde_oc_pde_cotizacion_id_comparador) == '') $buscador_pde_oc_pde_cotizacion_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_pde_oc_pde_cotizacion_id_comparador', Criterio::getComparadoresCmb(), $buscador_pde_oc_pde_cotizacion_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('PrvProveedor') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_pde_oc_prv_proveedor_id', Gral::getCmbFiltro(PrvProveedor::getPrvProveedorsCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_oc.prv_proveedor_id'), 'textbox')?>
        	<?php 
			$buscador_pde_oc_prv_proveedor_id_comparador = $criterio->getComparadorDeCampo('pde_oc.prv_proveedor_id');
			if(trim($buscador_pde_oc_prv_proveedor_id_comparador) == '') $buscador_pde_oc_prv_proveedor_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_pde_oc_prv_proveedor_id_comparador', Criterio::getComparadoresCmb(), $buscador_pde_oc_prv_proveedor_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('InsInsumo') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_pde_oc_ins_insumo_id', Gral::getCmbFiltro(InsInsumo::getInsInsumosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_oc.ins_insumo_id'), 'textbox')?>
        	<?php 
			$buscador_pde_oc_ins_insumo_id_comparador = $criterio->getComparadorDeCampo('pde_oc.ins_insumo_id');
			if(trim($buscador_pde_oc_ins_insumo_id_comparador) == '') $buscador_pde_oc_ins_insumo_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_pde_oc_ins_insumo_id_comparador', Criterio::getComparadoresCmb(), $buscador_pde_oc_ins_insumo_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('PdeOcAgrupacion') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_pde_oc_pde_oc_agrupacion_id', Gral::getCmbFiltro(PdeOcAgrupacion::getPdeOcAgrupacionsCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_oc.pde_oc_agrupacion_id'), 'textbox')?>
        	<?php 
			$buscador_pde_oc_pde_oc_agrupacion_id_comparador = $criterio->getComparadorDeCampo('pde_oc.pde_oc_agrupacion_id');
			if(trim($buscador_pde_oc_pde_oc_agrupacion_id_comparador) == '') $buscador_pde_oc_pde_oc_agrupacion_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_pde_oc_pde_oc_agrupacion_id_comparador', Criterio::getComparadoresCmb(), $buscador_pde_oc_pde_oc_agrupacion_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('PdeCentroPedido') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_pde_oc_pde_centro_pedido_id', Gral::getCmbFiltro(PdeCentroPedido::getPdeCentroPedidosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_oc.pde_centro_pedido_id'), 'textbox')?>
        	<?php 
			$buscador_pde_oc_pde_centro_pedido_id_comparador = $criterio->getComparadorDeCampo('pde_oc.pde_centro_pedido_id');
			if(trim($buscador_pde_oc_pde_centro_pedido_id_comparador) == '') $buscador_pde_oc_pde_centro_pedido_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_pde_oc_pde_centro_pedido_id_comparador', Criterio::getComparadoresCmb(), $buscador_pde_oc_pde_centro_pedido_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('PdeCentroRecepcion') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_pde_oc_pde_centro_recepcion_id', Gral::getCmbFiltro(PdeCentroRecepcion::getPdeCentroRecepcionsCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_oc.pde_centro_recepcion_id'), 'textbox')?>
        	<?php 
			$buscador_pde_oc_pde_centro_recepcion_id_comparador = $criterio->getComparadorDeCampo('pde_oc.pde_centro_recepcion_id');
			if(trim($buscador_pde_oc_pde_centro_recepcion_id_comparador) == '') $buscador_pde_oc_pde_centro_recepcion_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_pde_oc_pde_centro_recepcion_id_comparador', Criterio::getComparadoresCmb(), $buscador_pde_oc_pde_centro_recepcion_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('PdeOcTipoEstado') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_pde_oc_pde_oc_tipo_estado_id', Gral::getCmbFiltro(PdeOcTipoEstado::getPdeOcTipoEstadosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_oc.pde_oc_tipo_estado_id'), 'textbox')?>
        	<?php 
			$buscador_pde_oc_pde_oc_tipo_estado_id_comparador = $criterio->getComparadorDeCampo('pde_oc.pde_oc_tipo_estado_id');
			if(trim($buscador_pde_oc_pde_oc_tipo_estado_id_comparador) == '') $buscador_pde_oc_pde_oc_tipo_estado_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_pde_oc_pde_oc_tipo_estado_id_comparador', Criterio::getComparadoresCmb(), $buscador_pde_oc_pde_oc_tipo_estado_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('PdeOcTipoEstadoRecepcion') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_pde_oc_pde_oc_tipo_estado_recepcion_id', Gral::getCmbFiltro(PdeOcTipoEstadoRecepcion::getPdeOcTipoEstadoRecepcionsCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_oc.pde_oc_tipo_estado_recepcion_id'), 'textbox')?>
        	<?php 
			$buscador_pde_oc_pde_oc_tipo_estado_recepcion_id_comparador = $criterio->getComparadorDeCampo('pde_oc.pde_oc_tipo_estado_recepcion_id');
			if(trim($buscador_pde_oc_pde_oc_tipo_estado_recepcion_id_comparador) == '') $buscador_pde_oc_pde_oc_tipo_estado_recepcion_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_pde_oc_pde_oc_tipo_estado_recepcion_id_comparador', Criterio::getComparadoresCmb(), $buscador_pde_oc_pde_oc_tipo_estado_recepcion_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('PdeOcTipoEstadoFacturacion') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_pde_oc_pde_oc_tipo_estado_facturacion_id', Gral::getCmbFiltro(PdeOcTipoEstadoFacturacion::getPdeOcTipoEstadoFacturacionsCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_oc.pde_oc_tipo_estado_facturacion_id'), 'textbox')?>
        	<?php 
			$buscador_pde_oc_pde_oc_tipo_estado_facturacion_id_comparador = $criterio->getComparadorDeCampo('pde_oc.pde_oc_tipo_estado_facturacion_id');
			if(trim($buscador_pde_oc_pde_oc_tipo_estado_facturacion_id_comparador) == '') $buscador_pde_oc_pde_oc_tipo_estado_facturacion_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_pde_oc_pde_oc_tipo_estado_facturacion_id_comparador', Criterio::getComparadoresCmb(), $buscador_pde_oc_pde_oc_tipo_estado_facturacion_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('PdeOcTipoOrigen') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_pde_oc_pde_oc_tipo_origen_id', Gral::getCmbFiltro(PdeOcTipoOrigen::getPdeOcTipoOrigensCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_oc.pde_oc_tipo_origen_id'), 'textbox')?>
        	<?php 
			$buscador_pde_oc_pde_oc_tipo_origen_id_comparador = $criterio->getComparadorDeCampo('pde_oc.pde_oc_tipo_origen_id');
			if(trim($buscador_pde_oc_pde_oc_tipo_origen_id_comparador) == '') $buscador_pde_oc_pde_oc_tipo_origen_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_pde_oc_pde_oc_tipo_origen_id_comparador', Criterio::getComparadoresCmb(), $buscador_pde_oc_pde_oc_tipo_origen_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Cantidad') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_pde_oc_cantidad' type='text' class='textbox' id='buscador_pde_oc_cantidad' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_oc.cantidad')) ?>' size='22' />
        	<?php 
			$buscador_pde_oc_cantidad_comparador = $criterio->getComparadorDeCampo('pde_oc.cantidad');
			if(trim($buscador_pde_oc_cantidad_comparador) == '') $buscador_pde_oc_cantidad_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_pde_oc_cantidad_comparador', Criterio::getComparadoresCmb(), $buscador_pde_oc_cantidad_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Fecha Entrega') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_pde_oc_fecha_entrega' type='text' class='textbox' id='buscador_pde_oc_fecha_entrega' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : Gral::getFechaHoraToWeb($criterio->getValorDeCampo('pde_oc.fecha_entrega'))) ?>' size='15' />
					<input type='button' id='cal_buscador_pde_oc_fecha_entrega' value='...' />

					<script type='text/javascript'>
						Calendar.setup({
							inputField: 'buscador_pde_oc_fecha_entrega', ifFormat: '%d/%m/%Y', button: 'cal_buscador_pde_oc_fecha_entrega'
						});
					</script>
		
        	<?php 
			$buscador_pde_oc_fecha_entrega_comparador = $criterio->getComparadorDeCampo('pde_oc.fecha_entrega');
			if(trim($buscador_pde_oc_fecha_entrega_comparador) == '') $buscador_pde_oc_fecha_entrega_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_pde_oc_fecha_entrega_comparador', Criterio::getComparadoresCmb(), $buscador_pde_oc_fecha_entrega_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Vencimiento') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_pde_oc_vencimiento' type='text' class='textbox' id='buscador_pde_oc_vencimiento' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : Gral::getFechaHoraToWeb($criterio->getValorDeCampo('pde_oc.vencimiento'))) ?>' size='15' />
					<input type='button' id='cal_buscador_pde_oc_vencimiento' value='...' />

					<script type='text/javascript'>
						Calendar.setup({
							inputField: 'buscador_pde_oc_vencimiento', ifFormat: '%d/%m/%Y', button: 'cal_buscador_pde_oc_vencimiento'
						});
					</script>
		
        	<?php 
			$buscador_pde_oc_vencimiento_comparador = $criterio->getComparadorDeCampo('pde_oc.vencimiento');
			if(trim($buscador_pde_oc_vencimiento_comparador) == '') $buscador_pde_oc_vencimiento_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_pde_oc_vencimiento_comparador', Criterio::getComparadoresCmb(), $buscador_pde_oc_vencimiento_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('PrvInsumo') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_pde_oc_prv_insumo_id', Gral::getCmbFiltro(PrvInsumo::getPrvInsumosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_oc.prv_insumo_id'), 'textbox')?>
        	<?php 
			$buscador_pde_oc_prv_insumo_id_comparador = $criterio->getComparadorDeCampo('pde_oc.prv_insumo_id');
			if(trim($buscador_pde_oc_prv_insumo_id_comparador) == '') $buscador_pde_oc_prv_insumo_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_pde_oc_prv_insumo_id_comparador', Criterio::getComparadoresCmb(), $buscador_pde_oc_prv_insumo_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('PrvInsumoCosto') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_pde_oc_prv_insumo_costo_id', Gral::getCmbFiltro(PrvInsumoCosto::getPrvInsumoCostosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_oc.prv_insumo_costo_id'), 'textbox')?>
        	<?php 
			$buscador_pde_oc_prv_insumo_costo_id_comparador = $criterio->getComparadorDeCampo('pde_oc.prv_insumo_costo_id');
			if(trim($buscador_pde_oc_prv_insumo_costo_id_comparador) == '') $buscador_pde_oc_prv_insumo_costo_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_pde_oc_prv_insumo_costo_id_comparador', Criterio::getComparadoresCmb(), $buscador_pde_oc_prv_insumo_costo_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Importe Esperado') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_pde_oc_importe_esperado' type='text' class='textbox' id='buscador_pde_oc_importe_esperado' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_oc.importe_esperado')) ?>' size='22' />
        	<?php 
			$buscador_pde_oc_importe_esperado_comparador = $criterio->getComparadorDeCampo('pde_oc.importe_esperado');
			if(trim($buscador_pde_oc_importe_esperado_comparador) == '') $buscador_pde_oc_importe_esperado_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_pde_oc_importe_esperado_comparador', Criterio::getComparadoresCmb(), $buscador_pde_oc_importe_esperado_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Afecta Costo') ?></div>
		  <div class='dato'>
		  
		<?php Html::html_dib_select(1, 'buscador_pde_oc_afecta_costo', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_oc.afecta_costo'), 'textbox') ?>
		
        	<?php 
			$buscador_pde_oc_afecta_costo_comparador = $criterio->getComparadorDeCampo('pde_oc.afecta_costo');
			if(trim($buscador_pde_oc_afecta_costo_comparador) == '') $buscador_pde_oc_afecta_costo_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_pde_oc_afecta_costo_comparador', Criterio::getComparadoresCmb(), $buscador_pde_oc_afecta_costo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('PrvDescuentoFinanciero') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_pde_oc_prv_descuento_financiero_id', Gral::getCmbFiltro(PrvDescuentoFinanciero::getPrvDescuentoFinancierosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_oc.prv_descuento_financiero_id'), 'textbox')?>
        	<?php 
			$buscador_pde_oc_prv_descuento_financiero_id_comparador = $criterio->getComparadorDeCampo('pde_oc.prv_descuento_financiero_id');
			if(trim($buscador_pde_oc_prv_descuento_financiero_id_comparador) == '') $buscador_pde_oc_prv_descuento_financiero_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_pde_oc_prv_descuento_financiero_id_comparador', Criterio::getComparadoresCmb(), $buscador_pde_oc_prv_descuento_financiero_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('PrvDescuentoComercial') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_pde_oc_prv_descuento_comercial_id', Gral::getCmbFiltro(PrvDescuentoComercial::getPrvDescuentoComercialsCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_oc.prv_descuento_comercial_id'), 'textbox')?>
        	<?php 
			$buscador_pde_oc_prv_descuento_comercial_id_comparador = $criterio->getComparadorDeCampo('pde_oc.prv_descuento_comercial_id');
			if(trim($buscador_pde_oc_prv_descuento_comercial_id_comparador) == '') $buscador_pde_oc_prv_descuento_comercial_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_pde_oc_prv_descuento_comercial_id_comparador', Criterio::getComparadoresCmb(), $buscador_pde_oc_prv_descuento_comercial_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Nota Publica') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_pde_oc_nota_publica' type='text' class='textbox' id='buscador_pde_oc_nota_publica' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_oc.nota_publica')) ?>' size='22' />
        	<?php 
			$buscador_pde_oc_nota_publica_comparador = $criterio->getComparadorDeCampo('pde_oc.nota_publica');
			if(trim($buscador_pde_oc_nota_publica_comparador) == '') $buscador_pde_oc_nota_publica_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_pde_oc_nota_publica_comparador', Criterio::getComparadoresCmb(), $buscador_pde_oc_nota_publica_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Nota Interna') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_pde_oc_nota_interna' type='text' class='textbox' id='buscador_pde_oc_nota_interna' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_oc.nota_interna')) ?>' size='22' />
        	<?php 
			$buscador_pde_oc_nota_interna_comparador = $criterio->getComparadorDeCampo('pde_oc.nota_interna');
			if(trim($buscador_pde_oc_nota_interna_comparador) == '') $buscador_pde_oc_nota_interna_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_pde_oc_nota_interna_comparador', Criterio::getComparadoresCmb(), $buscador_pde_oc_nota_interna_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_pde_oc_observacion' type='text' class='textbox' id='buscador_pde_oc_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_oc.observacion')) ?>' size='22' />
        	<?php 
			$buscador_pde_oc_observacion_comparador = $criterio->getComparadorDeCampo('pde_oc.observacion');
			if(trim($buscador_pde_oc_observacion_comparador) == '') $buscador_pde_oc_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_pde_oc_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_pde_oc_observacion_comparador, 'textbox comparador') ?>
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

