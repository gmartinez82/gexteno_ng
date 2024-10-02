<?php
include_once "_autoload.php";
$criterio = new Criterio(VtaFactura::SES_CRITERIOS);
$criterio->addTabla('vta_factura');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='vta_factura'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Descripcion') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_factura_descripcion' type='text' class='textbox' id='buscador_vta_factura_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_factura.descripcion')) ?>' size='22' />
        	<?php 
			$buscador_vta_factura_descripcion_comparador = $criterio->getComparadorDeCampo('vta_factura.descripcion');
			if(trim($buscador_vta_factura_descripcion_comparador) == '') $buscador_vta_factura_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_vta_factura_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_vta_factura_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('CliCliente') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_vta_factura_cli_cliente_id', Gral::getCmbFiltro(CliCliente::getCliClientesCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_factura.cli_cliente_id'), 'textbox')?>
        	<?php 
			$buscador_vta_factura_cli_cliente_id_comparador = $criterio->getComparadorDeCampo('vta_factura.cli_cliente_id');
			if(trim($buscador_vta_factura_cli_cliente_id_comparador) == '') $buscador_vta_factura_cli_cliente_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_factura_cli_cliente_id_comparador', Criterio::getComparadoresCmb(), $buscador_vta_factura_cli_cliente_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('VtaFacturaTipoEstado') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_vta_factura_vta_factura_tipo_estado_id', Gral::getCmbFiltro(VtaFacturaTipoEstado::getVtaFacturaTipoEstadosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_factura.vta_factura_tipo_estado_id'), 'textbox')?>
        	<?php 
			$buscador_vta_factura_vta_factura_tipo_estado_id_comparador = $criterio->getComparadorDeCampo('vta_factura.vta_factura_tipo_estado_id');
			if(trim($buscador_vta_factura_vta_factura_tipo_estado_id_comparador) == '') $buscador_vta_factura_vta_factura_tipo_estado_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_factura_vta_factura_tipo_estado_id_comparador', Criterio::getComparadoresCmb(), $buscador_vta_factura_vta_factura_tipo_estado_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('VtaTipoFactura') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_vta_factura_vta_tipo_factura_id', Gral::getCmbFiltro(VtaTipoFactura::getVtaTipoFacturasCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_factura.vta_tipo_factura_id'), 'textbox')?>
        	<?php 
			$buscador_vta_factura_vta_tipo_factura_id_comparador = $criterio->getComparadorDeCampo('vta_factura.vta_tipo_factura_id');
			if(trim($buscador_vta_factura_vta_tipo_factura_id_comparador) == '') $buscador_vta_factura_vta_tipo_factura_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_factura_vta_tipo_factura_id_comparador', Criterio::getComparadoresCmb(), $buscador_vta_factura_vta_tipo_factura_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('VtaTipoOrigenFactura') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_vta_factura_vta_tipo_origen_factura_id', Gral::getCmbFiltro(VtaTipoOrigenFactura::getVtaTipoOrigenFacturasCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_factura.vta_tipo_origen_factura_id'), 'textbox')?>
        	<?php 
			$buscador_vta_factura_vta_tipo_origen_factura_id_comparador = $criterio->getComparadorDeCampo('vta_factura.vta_tipo_origen_factura_id');
			if(trim($buscador_vta_factura_vta_tipo_origen_factura_id_comparador) == '') $buscador_vta_factura_vta_tipo_origen_factura_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_factura_vta_tipo_origen_factura_id_comparador', Criterio::getComparadoresCmb(), $buscador_vta_factura_vta_tipo_origen_factura_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('GralCondicionIva') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_vta_factura_gral_condicion_iva_id', Gral::getCmbFiltro(GralCondicionIva::getGralCondicionIvasCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_factura.gral_condicion_iva_id'), 'textbox')?>
        	<?php 
			$buscador_vta_factura_gral_condicion_iva_id_comparador = $criterio->getComparadorDeCampo('vta_factura.gral_condicion_iva_id');
			if(trim($buscador_vta_factura_gral_condicion_iva_id_comparador) == '') $buscador_vta_factura_gral_condicion_iva_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_factura_gral_condicion_iva_id_comparador', Criterio::getComparadoresCmb(), $buscador_vta_factura_gral_condicion_iva_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('GralTipoPersoneria') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_vta_factura_gral_tipo_personeria_id', Gral::getCmbFiltro(GralTipoPersoneria::getGralTipoPersoneriasCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_factura.gral_tipo_personeria_id'), 'textbox')?>
        	<?php 
			$buscador_vta_factura_gral_tipo_personeria_id_comparador = $criterio->getComparadorDeCampo('vta_factura.gral_tipo_personeria_id');
			if(trim($buscador_vta_factura_gral_tipo_personeria_id_comparador) == '') $buscador_vta_factura_gral_tipo_personeria_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_factura_gral_tipo_personeria_id_comparador', Criterio::getComparadoresCmb(), $buscador_vta_factura_gral_tipo_personeria_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('GralEmpresa') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_vta_factura_gral_empresa_id', Gral::getCmbFiltro(GralEmpresa::getGralEmpresasCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_factura.gral_empresa_id'), 'textbox')?>
        	<?php 
			$buscador_vta_factura_gral_empresa_id_comparador = $criterio->getComparadorDeCampo('vta_factura.gral_empresa_id');
			if(trim($buscador_vta_factura_gral_empresa_id_comparador) == '') $buscador_vta_factura_gral_empresa_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_factura_gral_empresa_id_comparador', Criterio::getComparadoresCmb(), $buscador_vta_factura_gral_empresa_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('VtaPuntoVenta') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_vta_factura_vta_punto_venta_id', Gral::getCmbFiltro(VtaPuntoVenta::getVtaPuntoVentasCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_factura.vta_punto_venta_id'), 'textbox')?>
        	<?php 
			$buscador_vta_factura_vta_punto_venta_id_comparador = $criterio->getComparadorDeCampo('vta_factura.vta_punto_venta_id');
			if(trim($buscador_vta_factura_vta_punto_venta_id_comparador) == '') $buscador_vta_factura_vta_punto_venta_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_factura_vta_punto_venta_id_comparador', Criterio::getComparadoresCmb(), $buscador_vta_factura_vta_punto_venta_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('GralFpFormaPago') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_vta_factura_gral_fp_forma_pago_id', Gral::getCmbFiltro(GralFpFormaPago::getGralFpFormaPagosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_factura.gral_fp_forma_pago_id'), 'textbox')?>
        	<?php 
			$buscador_vta_factura_gral_fp_forma_pago_id_comparador = $criterio->getComparadorDeCampo('vta_factura.gral_fp_forma_pago_id');
			if(trim($buscador_vta_factura_gral_fp_forma_pago_id_comparador) == '') $buscador_vta_factura_gral_fp_forma_pago_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_factura_gral_fp_forma_pago_id_comparador', Criterio::getComparadoresCmb(), $buscador_vta_factura_gral_fp_forma_pago_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('GralFpCuota') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_vta_factura_gral_fp_cuota_id', Gral::getCmbFiltro(GralFpCuota::getGralFpCuotasCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_factura.gral_fp_cuota_id'), 'textbox')?>
        	<?php 
			$buscador_vta_factura_gral_fp_cuota_id_comparador = $criterio->getComparadorDeCampo('vta_factura.gral_fp_cuota_id');
			if(trim($buscador_vta_factura_gral_fp_cuota_id_comparador) == '') $buscador_vta_factura_gral_fp_cuota_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_factura_gral_fp_cuota_id_comparador', Criterio::getComparadoresCmb(), $buscador_vta_factura_gral_fp_cuota_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('VtaPreventista') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_vta_factura_vta_preventista_id', Gral::getCmbFiltro(VtaPreventista::getVtaPreventistasCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_factura.vta_preventista_id'), 'textbox')?>
        	<?php 
			$buscador_vta_factura_vta_preventista_id_comparador = $criterio->getComparadorDeCampo('vta_factura.vta_preventista_id');
			if(trim($buscador_vta_factura_vta_preventista_id_comparador) == '') $buscador_vta_factura_vta_preventista_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_factura_vta_preventista_id_comparador', Criterio::getComparadoresCmb(), $buscador_vta_factura_vta_preventista_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('VtaComprador') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_vta_factura_vta_comprador_id', Gral::getCmbFiltro(VtaComprador::getVtaCompradorsCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_factura.vta_comprador_id'), 'textbox')?>
        	<?php 
			$buscador_vta_factura_vta_comprador_id_comparador = $criterio->getComparadorDeCampo('vta_factura.vta_comprador_id');
			if(trim($buscador_vta_factura_vta_comprador_id_comparador) == '') $buscador_vta_factura_vta_comprador_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_factura_vta_comprador_id_comparador', Criterio::getComparadoresCmb(), $buscador_vta_factura_vta_comprador_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('VtaVendedor') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_vta_factura_vta_vendedor_id', Gral::getCmbFiltro(VtaVendedor::getVtaVendedorsCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_factura.vta_vendedor_id'), 'textbox')?>
        	<?php 
			$buscador_vta_factura_vta_vendedor_id_comparador = $criterio->getComparadorDeCampo('vta_factura.vta_vendedor_id');
			if(trim($buscador_vta_factura_vta_vendedor_id_comparador) == '') $buscador_vta_factura_vta_vendedor_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_factura_vta_vendedor_id_comparador', Criterio::getComparadoresCmb(), $buscador_vta_factura_vta_vendedor_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('GralActividad') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_vta_factura_gral_actividad_id', Gral::getCmbFiltro(GralActividad::getGralActividadsCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_factura.gral_actividad_id'), 'textbox')?>
        	<?php 
			$buscador_vta_factura_gral_actividad_id_comparador = $criterio->getComparadorDeCampo('vta_factura.gral_actividad_id');
			if(trim($buscador_vta_factura_gral_actividad_id_comparador) == '') $buscador_vta_factura_gral_actividad_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_factura_gral_actividad_id_comparador', Criterio::getComparadoresCmb(), $buscador_vta_factura_gral_actividad_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('GralEscenario') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_vta_factura_gral_escenario_id', Gral::getCmbFiltro(GralEscenario::getGralEscenariosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_factura.gral_escenario_id'), 'textbox')?>
        	<?php 
			$buscador_vta_factura_gral_escenario_id_comparador = $criterio->getComparadorDeCampo('vta_factura.gral_escenario_id');
			if(trim($buscador_vta_factura_gral_escenario_id_comparador) == '') $buscador_vta_factura_gral_escenario_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_factura_gral_escenario_id_comparador', Criterio::getComparadoresCmb(), $buscador_vta_factura_gral_escenario_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Numero de Pto Vta') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_factura_numero_punto_venta' type='text' class='textbox' id='buscador_vta_factura_numero_punto_venta' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_factura.numero_punto_venta')) ?>' size='22' />
        	<?php 
			$buscador_vta_factura_numero_punto_venta_comparador = $criterio->getComparadorDeCampo('vta_factura.numero_punto_venta');
			if(trim($buscador_vta_factura_numero_punto_venta_comparador) == '') $buscador_vta_factura_numero_punto_venta_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_vta_factura_numero_punto_venta_comparador', Criterio::getComparadoresCmb(), $buscador_vta_factura_numero_punto_venta_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Numero de Factura') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_factura_numero_factura' type='text' class='textbox' id='buscador_vta_factura_numero_factura' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_factura.numero_factura')) ?>' size='22' />
        	<?php 
			$buscador_vta_factura_numero_factura_comparador = $criterio->getComparadorDeCampo('vta_factura.numero_factura');
			if(trim($buscador_vta_factura_numero_factura_comparador) == '') $buscador_vta_factura_numero_factura_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_vta_factura_numero_factura_comparador', Criterio::getComparadoresCmb(), $buscador_vta_factura_numero_factura_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Numero de Factura Completo') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_factura_numero_factura_completo' type='text' class='textbox' id='buscador_vta_factura_numero_factura_completo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_factura.numero_factura_completo')) ?>' size='22' />
        	<?php 
			$buscador_vta_factura_numero_factura_completo_comparador = $criterio->getComparadorDeCampo('vta_factura.numero_factura_completo');
			if(trim($buscador_vta_factura_numero_factura_completo_comparador) == '') $buscador_vta_factura_numero_factura_completo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_vta_factura_numero_factura_completo_comparador', Criterio::getComparadoresCmb(), $buscador_vta_factura_numero_factura_completo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Cae') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_factura_cae' type='text' class='textbox' id='buscador_vta_factura_cae' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_factura.cae')) ?>' size='22' />
        	<?php 
			$buscador_vta_factura_cae_comparador = $criterio->getComparadorDeCampo('vta_factura.cae');
			if(trim($buscador_vta_factura_cae_comparador) == '') $buscador_vta_factura_cae_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_vta_factura_cae_comparador', Criterio::getComparadoresCmb(), $buscador_vta_factura_cae_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Fecha de Emision') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_factura_fecha_emision' type='text' class='textbox' id='buscador_vta_factura_fecha_emision' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : Gral::getFechaHoraToWeb($criterio->getValorDeCampo('vta_factura.fecha_emision'))) ?>' size='15' />
					<input type='button' id='cal_buscador_vta_factura_fecha_emision' value='...' />

					<script type='text/javascript'>
						Calendar.setup({
							inputField: 'buscador_vta_factura_fecha_emision', ifFormat: '%d/%m/%Y', button: 'cal_buscador_vta_factura_fecha_emision'
						});
					</script>
		
        	<?php 
			$buscador_vta_factura_fecha_emision_comparador = $criterio->getComparadorDeCampo('vta_factura.fecha_emision');
			if(trim($buscador_vta_factura_fecha_emision_comparador) == '') $buscador_vta_factura_fecha_emision_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_vta_factura_fecha_emision_comparador', Criterio::getComparadoresCmb(), $buscador_vta_factura_fecha_emision_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Fecha de Vencimiento') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_factura_fecha_vencimiento' type='text' class='textbox' id='buscador_vta_factura_fecha_vencimiento' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : Gral::getFechaHoraToWeb($criterio->getValorDeCampo('vta_factura.fecha_vencimiento'))) ?>' size='15' />
					<input type='button' id='cal_buscador_vta_factura_fecha_vencimiento' value='...' />

					<script type='text/javascript'>
						Calendar.setup({
							inputField: 'buscador_vta_factura_fecha_vencimiento', ifFormat: '%d/%m/%Y', button: 'cal_buscador_vta_factura_fecha_vencimiento'
						});
					</script>
		
        	<?php 
			$buscador_vta_factura_fecha_vencimiento_comparador = $criterio->getComparadorDeCampo('vta_factura.fecha_vencimiento');
			if(trim($buscador_vta_factura_fecha_vencimiento_comparador) == '') $buscador_vta_factura_fecha_vencimiento_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_vta_factura_fecha_vencimiento_comparador', Criterio::getComparadoresCmb(), $buscador_vta_factura_fecha_vencimiento_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('GralTipoDocumento') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_vta_factura_gral_tipo_documento_id', Gral::getCmbFiltro(GralTipoDocumento::getGralTipoDocumentosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_factura.gral_tipo_documento_id'), 'textbox')?>
        	<?php 
			$buscador_vta_factura_gral_tipo_documento_id_comparador = $criterio->getComparadorDeCampo('vta_factura.gral_tipo_documento_id');
			if(trim($buscador_vta_factura_gral_tipo_documento_id_comparador) == '') $buscador_vta_factura_gral_tipo_documento_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_factura_gral_tipo_documento_id_comparador', Criterio::getComparadoresCmb(), $buscador_vta_factura_gral_tipo_documento_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_factura_persona_descripcion' type='text' class='textbox' id='buscador_vta_factura_persona_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_factura.persona_descripcion')) ?>' size='22' />
        	<?php 
			$buscador_vta_factura_persona_descripcion_comparador = $criterio->getComparadorDeCampo('vta_factura.persona_descripcion');
			if(trim($buscador_vta_factura_persona_descripcion_comparador) == '') $buscador_vta_factura_persona_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_vta_factura_persona_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_vta_factura_persona_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_factura_persona_documento' type='text' class='textbox' id='buscador_vta_factura_persona_documento' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_factura.persona_documento')) ?>' size='22' />
        	<?php 
			$buscador_vta_factura_persona_documento_comparador = $criterio->getComparadorDeCampo('vta_factura.persona_documento');
			if(trim($buscador_vta_factura_persona_documento_comparador) == '') $buscador_vta_factura_persona_documento_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_vta_factura_persona_documento_comparador', Criterio::getComparadoresCmb(), $buscador_vta_factura_persona_documento_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_factura_persona_email' type='text' class='textbox' id='buscador_vta_factura_persona_email' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_factura.persona_email')) ?>' size='22' />
        	<?php 
			$buscador_vta_factura_persona_email_comparador = $criterio->getComparadorDeCampo('vta_factura.persona_email');
			if(trim($buscador_vta_factura_persona_email_comparador) == '') $buscador_vta_factura_persona_email_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_vta_factura_persona_email_comparador', Criterio::getComparadoresCmb(), $buscador_vta_factura_persona_email_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Razon Social') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_factura_razon_social' type='text' class='textbox' id='buscador_vta_factura_razon_social' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_factura.razon_social')) ?>' size='22' />
        	<?php 
			$buscador_vta_factura_razon_social_comparador = $criterio->getComparadorDeCampo('vta_factura.razon_social');
			if(trim($buscador_vta_factura_razon_social_comparador) == '') $buscador_vta_factura_razon_social_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_vta_factura_razon_social_comparador', Criterio::getComparadoresCmb(), $buscador_vta_factura_razon_social_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Domicilio Legal') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_factura_domicilio_legal' type='text' class='textbox' id='buscador_vta_factura_domicilio_legal' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_factura.domicilio_legal')) ?>' size='22' />
        	<?php 
			$buscador_vta_factura_domicilio_legal_comparador = $criterio->getComparadorDeCampo('vta_factura.domicilio_legal');
			if(trim($buscador_vta_factura_domicilio_legal_comparador) == '') $buscador_vta_factura_domicilio_legal_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_vta_factura_domicilio_legal_comparador', Criterio::getComparadoresCmb(), $buscador_vta_factura_domicilio_legal_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('CUIT') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_factura_cuit' type='text' class='textbox' id='buscador_vta_factura_cuit' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_factura.cuit')) ?>' size='22' />
        	<?php 
			$buscador_vta_factura_cuit_comparador = $criterio->getComparadorDeCampo('vta_factura.cuit');
			if(trim($buscador_vta_factura_cuit_comparador) == '') $buscador_vta_factura_cuit_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_vta_factura_cuit_comparador', Criterio::getComparadoresCmb(), $buscador_vta_factura_cuit_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Codigo') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_factura_codigo' type='text' class='textbox' id='buscador_vta_factura_codigo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_factura.codigo')) ?>' size='22' />
        	<?php 
			$buscador_vta_factura_codigo_comparador = $criterio->getComparadorDeCampo('vta_factura.codigo');
			if(trim($buscador_vta_factura_codigo_comparador) == '') $buscador_vta_factura_codigo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_vta_factura_codigo_comparador', Criterio::getComparadoresCmb(), $buscador_vta_factura_codigo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('VtaPresupuesto') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_vta_factura_vta_presupuesto_id', Gral::getCmbFiltro(VtaPresupuesto::getVtaPresupuestosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_factura.vta_presupuesto_id'), 'textbox')?>
        	<?php 
			$buscador_vta_factura_vta_presupuesto_id_comparador = $criterio->getComparadorDeCampo('vta_factura.vta_presupuesto_id');
			if(trim($buscador_vta_factura_vta_presupuesto_id_comparador) == '') $buscador_vta_factura_vta_presupuesto_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_factura_vta_presupuesto_id_comparador', Criterio::getComparadoresCmb(), $buscador_vta_factura_vta_presupuesto_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Nota Publica') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_factura_nota_publica' type='text' class='textbox' id='buscador_vta_factura_nota_publica' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_factura.nota_publica')) ?>' size='22' />
        	<?php 
			$buscador_vta_factura_nota_publica_comparador = $criterio->getComparadorDeCampo('vta_factura.nota_publica');
			if(trim($buscador_vta_factura_nota_publica_comparador) == '') $buscador_vta_factura_nota_publica_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_vta_factura_nota_publica_comparador', Criterio::getComparadoresCmb(), $buscador_vta_factura_nota_publica_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Anio') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_factura_anio' type='text' class='textbox' id='buscador_vta_factura_anio' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_factura.anio')) ?>' size='22' />
        	<?php 
			$buscador_vta_factura_anio_comparador = $criterio->getComparadorDeCampo('vta_factura.anio');
			if(trim($buscador_vta_factura_anio_comparador) == '') $buscador_vta_factura_anio_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_vta_factura_anio_comparador', Criterio::getComparadoresCmb(), $buscador_vta_factura_anio_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('GralMes') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_vta_factura_gral_mes_id', Gral::getCmbFiltro(GralMes::getGralMessCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_factura.gral_mes_id'), 'textbox')?>
        	<?php 
			$buscador_vta_factura_gral_mes_id_comparador = $criterio->getComparadorDeCampo('vta_factura.gral_mes_id');
			if(trim($buscador_vta_factura_gral_mes_id_comparador) == '') $buscador_vta_factura_gral_mes_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_factura_gral_mes_id_comparador', Criterio::getComparadoresCmb(), $buscador_vta_factura_gral_mes_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('CntbDiarioAsiento') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_vta_factura_cntb_diario_asiento_id', Gral::getCmbFiltro(CntbDiarioAsiento::getCntbDiarioAsientosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_factura.cntb_diario_asiento_id'), 'textbox')?>
        	<?php 
			$buscador_vta_factura_cntb_diario_asiento_id_comparador = $criterio->getComparadorDeCampo('vta_factura.cntb_diario_asiento_id');
			if(trim($buscador_vta_factura_cntb_diario_asiento_id_comparador) == '') $buscador_vta_factura_cntb_diario_asiento_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_factura_cntb_diario_asiento_id_comparador', Criterio::getComparadoresCmb(), $buscador_vta_factura_cntb_diario_asiento_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_factura_observacion' type='text' class='textbox' id='buscador_vta_factura_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_factura.observacion')) ?>' size='22' />
        	<?php 
			$buscador_vta_factura_observacion_comparador = $criterio->getComparadorDeCampo('vta_factura.observacion');
			if(trim($buscador_vta_factura_observacion_comparador) == '') $buscador_vta_factura_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_vta_factura_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_vta_factura_observacion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Nota Interna') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_factura_nota_interna' type='text' class='textbox' id='buscador_vta_factura_nota_interna' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_factura.nota_interna')) ?>' size='22' />
        	<?php 
			$buscador_vta_factura_nota_interna_comparador = $criterio->getComparadorDeCampo('vta_factura.nota_interna');
			if(trim($buscador_vta_factura_nota_interna_comparador) == '') $buscador_vta_factura_nota_interna_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_vta_factura_nota_interna_comparador', Criterio::getComparadoresCmb(), $buscador_vta_factura_nota_interna_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Estado') ?></div>
		  <div class='dato'>
		  
		<?php Html::html_dib_select(1, 'buscador_vta_factura_estado', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_factura.estado'), 'textbox') ?>
		
        	<?php 
			$buscador_vta_factura_estado_comparador = $criterio->getComparadorDeCampo('vta_factura.estado');
			if(trim($buscador_vta_factura_estado_comparador) == '') $buscador_vta_factura_estado_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_factura_estado_comparador', Criterio::getComparadoresCmb(), $buscador_vta_factura_estado_comparador, 'textbox comparador') ?>
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

