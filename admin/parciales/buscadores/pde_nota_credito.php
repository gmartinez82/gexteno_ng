<?php
include_once "_autoload.php";
$criterio = new Criterio(PdeNotaCredito::SES_CRITERIOS);
$criterio->addTabla('pde_nota_credito');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='pde_nota_credito'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Descripcion') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_pde_nota_credito_descripcion' type='text' class='textbox' id='buscador_pde_nota_credito_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_nota_credito.descripcion')) ?>' size='22' />
        	<?php 
			$buscador_pde_nota_credito_descripcion_comparador = $criterio->getComparadorDeCampo('pde_nota_credito.descripcion');
			if(trim($buscador_pde_nota_credito_descripcion_comparador) == '') $buscador_pde_nota_credito_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_pde_nota_credito_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_pde_nota_credito_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('PrvProveedor') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_pde_nota_credito_prv_proveedor_id', Gral::getCmbFiltro(PrvProveedor::getPrvProveedorsCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_nota_credito.prv_proveedor_id'), 'textbox')?>
        	<?php 
			$buscador_pde_nota_credito_prv_proveedor_id_comparador = $criterio->getComparadorDeCampo('pde_nota_credito.prv_proveedor_id');
			if(trim($buscador_pde_nota_credito_prv_proveedor_id_comparador) == '') $buscador_pde_nota_credito_prv_proveedor_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_pde_nota_credito_prv_proveedor_id_comparador', Criterio::getComparadoresCmb(), $buscador_pde_nota_credito_prv_proveedor_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('PdeTipoNotaCredito') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_pde_nota_credito_pde_tipo_nota_credito_id', Gral::getCmbFiltro(PdeTipoNotaCredito::getPdeTipoNotaCreditosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_nota_credito.pde_tipo_nota_credito_id'), 'textbox')?>
        	<?php 
			$buscador_pde_nota_credito_pde_tipo_nota_credito_id_comparador = $criterio->getComparadorDeCampo('pde_nota_credito.pde_tipo_nota_credito_id');
			if(trim($buscador_pde_nota_credito_pde_tipo_nota_credito_id_comparador) == '') $buscador_pde_nota_credito_pde_tipo_nota_credito_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_pde_nota_credito_pde_tipo_nota_credito_id_comparador', Criterio::getComparadoresCmb(), $buscador_pde_nota_credito_pde_tipo_nota_credito_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('PdeTipoOrigenNotaCredito') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_pde_nota_credito_pde_tipo_origen_nota_credito_id', Gral::getCmbFiltro(PdeTipoOrigenNotaCredito::getPdeTipoOrigenNotaCreditosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_nota_credito.pde_tipo_origen_nota_credito_id'), 'textbox')?>
        	<?php 
			$buscador_pde_nota_credito_pde_tipo_origen_nota_credito_id_comparador = $criterio->getComparadorDeCampo('pde_nota_credito.pde_tipo_origen_nota_credito_id');
			if(trim($buscador_pde_nota_credito_pde_tipo_origen_nota_credito_id_comparador) == '') $buscador_pde_nota_credito_pde_tipo_origen_nota_credito_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_pde_nota_credito_pde_tipo_origen_nota_credito_id_comparador', Criterio::getComparadoresCmb(), $buscador_pde_nota_credito_pde_tipo_origen_nota_credito_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('GralCondicionIva') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_pde_nota_credito_gral_condicion_iva_id', Gral::getCmbFiltro(GralCondicionIva::getGralCondicionIvasCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_nota_credito.gral_condicion_iva_id'), 'textbox')?>
        	<?php 
			$buscador_pde_nota_credito_gral_condicion_iva_id_comparador = $criterio->getComparadorDeCampo('pde_nota_credito.gral_condicion_iva_id');
			if(trim($buscador_pde_nota_credito_gral_condicion_iva_id_comparador) == '') $buscador_pde_nota_credito_gral_condicion_iva_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_pde_nota_credito_gral_condicion_iva_id_comparador', Criterio::getComparadoresCmb(), $buscador_pde_nota_credito_gral_condicion_iva_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('GralTipoPersoneria') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_pde_nota_credito_gral_tipo_personeria_id', Gral::getCmbFiltro(GralTipoPersoneria::getGralTipoPersoneriasCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_nota_credito.gral_tipo_personeria_id'), 'textbox')?>
        	<?php 
			$buscador_pde_nota_credito_gral_tipo_personeria_id_comparador = $criterio->getComparadorDeCampo('pde_nota_credito.gral_tipo_personeria_id');
			if(trim($buscador_pde_nota_credito_gral_tipo_personeria_id_comparador) == '') $buscador_pde_nota_credito_gral_tipo_personeria_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_pde_nota_credito_gral_tipo_personeria_id_comparador', Criterio::getComparadoresCmb(), $buscador_pde_nota_credito_gral_tipo_personeria_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('GralEmpresa') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_pde_nota_credito_gral_empresa_id', Gral::getCmbFiltro(GralEmpresa::getGralEmpresasCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_nota_credito.gral_empresa_id'), 'textbox')?>
        	<?php 
			$buscador_pde_nota_credito_gral_empresa_id_comparador = $criterio->getComparadorDeCampo('pde_nota_credito.gral_empresa_id');
			if(trim($buscador_pde_nota_credito_gral_empresa_id_comparador) == '') $buscador_pde_nota_credito_gral_empresa_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_pde_nota_credito_gral_empresa_id_comparador', Criterio::getComparadoresCmb(), $buscador_pde_nota_credito_gral_empresa_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('PdeCentroPedido') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_pde_nota_credito_pde_centro_pedido_id', Gral::getCmbFiltro(PdeCentroPedido::getPdeCentroPedidosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_nota_credito.pde_centro_pedido_id'), 'textbox')?>
        	<?php 
			$buscador_pde_nota_credito_pde_centro_pedido_id_comparador = $criterio->getComparadorDeCampo('pde_nota_credito.pde_centro_pedido_id');
			if(trim($buscador_pde_nota_credito_pde_centro_pedido_id_comparador) == '') $buscador_pde_nota_credito_pde_centro_pedido_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_pde_nota_credito_pde_centro_pedido_id_comparador', Criterio::getComparadoresCmb(), $buscador_pde_nota_credito_pde_centro_pedido_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('PdeNotaCreditoTipoEstado') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_pde_nota_credito_pde_nota_credito_tipo_estado_id', Gral::getCmbFiltro(PdeNotaCreditoTipoEstado::getPdeNotaCreditoTipoEstadosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_nota_credito.pde_nota_credito_tipo_estado_id'), 'textbox')?>
        	<?php 
			$buscador_pde_nota_credito_pde_nota_credito_tipo_estado_id_comparador = $criterio->getComparadorDeCampo('pde_nota_credito.pde_nota_credito_tipo_estado_id');
			if(trim($buscador_pde_nota_credito_pde_nota_credito_tipo_estado_id_comparador) == '') $buscador_pde_nota_credito_pde_nota_credito_tipo_estado_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_pde_nota_credito_pde_nota_credito_tipo_estado_id_comparador', Criterio::getComparadoresCmb(), $buscador_pde_nota_credito_pde_nota_credito_tipo_estado_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('GralFpFormaPago') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_pde_nota_credito_gral_fp_forma_pago_id', Gral::getCmbFiltro(GralFpFormaPago::getGralFpFormaPagosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_nota_credito.gral_fp_forma_pago_id'), 'textbox')?>
        	<?php 
			$buscador_pde_nota_credito_gral_fp_forma_pago_id_comparador = $criterio->getComparadorDeCampo('pde_nota_credito.gral_fp_forma_pago_id');
			if(trim($buscador_pde_nota_credito_gral_fp_forma_pago_id_comparador) == '') $buscador_pde_nota_credito_gral_fp_forma_pago_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_pde_nota_credito_gral_fp_forma_pago_id_comparador', Criterio::getComparadoresCmb(), $buscador_pde_nota_credito_gral_fp_forma_pago_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('GralActividad') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_pde_nota_credito_gral_actividad_id', Gral::getCmbFiltro(GralActividad::getGralActividadsCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_nota_credito.gral_actividad_id'), 'textbox')?>
        	<?php 
			$buscador_pde_nota_credito_gral_actividad_id_comparador = $criterio->getComparadorDeCampo('pde_nota_credito.gral_actividad_id');
			if(trim($buscador_pde_nota_credito_gral_actividad_id_comparador) == '') $buscador_pde_nota_credito_gral_actividad_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_pde_nota_credito_gral_actividad_id_comparador', Criterio::getComparadoresCmb(), $buscador_pde_nota_credito_gral_actividad_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('GralEscenario') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_pde_nota_credito_gral_escenario_id', Gral::getCmbFiltro(GralEscenario::getGralEscenariosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_nota_credito.gral_escenario_id'), 'textbox')?>
        	<?php 
			$buscador_pde_nota_credito_gral_escenario_id_comparador = $criterio->getComparadorDeCampo('pde_nota_credito.gral_escenario_id');
			if(trim($buscador_pde_nota_credito_gral_escenario_id_comparador) == '') $buscador_pde_nota_credito_gral_escenario_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_pde_nota_credito_gral_escenario_id_comparador', Criterio::getComparadoresCmb(), $buscador_pde_nota_credito_gral_escenario_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Numero de Pto Vta') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_pde_nota_credito_numero_punto_venta' type='text' class='textbox' id='buscador_pde_nota_credito_numero_punto_venta' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_nota_credito.numero_punto_venta')) ?>' size='22' />
        	<?php 
			$buscador_pde_nota_credito_numero_punto_venta_comparador = $criterio->getComparadorDeCampo('pde_nota_credito.numero_punto_venta');
			if(trim($buscador_pde_nota_credito_numero_punto_venta_comparador) == '') $buscador_pde_nota_credito_numero_punto_venta_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_pde_nota_credito_numero_punto_venta_comparador', Criterio::getComparadoresCmb(), $buscador_pde_nota_credito_numero_punto_venta_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Numero de Nota de Credito') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_pde_nota_credito_numero_nota_credito' type='text' class='textbox' id='buscador_pde_nota_credito_numero_nota_credito' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_nota_credito.numero_nota_credito')) ?>' size='22' />
        	<?php 
			$buscador_pde_nota_credito_numero_nota_credito_comparador = $criterio->getComparadorDeCampo('pde_nota_credito.numero_nota_credito');
			if(trim($buscador_pde_nota_credito_numero_nota_credito_comparador) == '') $buscador_pde_nota_credito_numero_nota_credito_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_pde_nota_credito_numero_nota_credito_comparador', Criterio::getComparadoresCmb(), $buscador_pde_nota_credito_numero_nota_credito_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Numero de Nota de Credito Completo') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_pde_nota_credito_numero_nota_credito_completo' type='text' class='textbox' id='buscador_pde_nota_credito_numero_nota_credito_completo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_nota_credito.numero_nota_credito_completo')) ?>' size='22' />
        	<?php 
			$buscador_pde_nota_credito_numero_nota_credito_completo_comparador = $criterio->getComparadorDeCampo('pde_nota_credito.numero_nota_credito_completo');
			if(trim($buscador_pde_nota_credito_numero_nota_credito_completo_comparador) == '') $buscador_pde_nota_credito_numero_nota_credito_completo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_pde_nota_credito_numero_nota_credito_completo_comparador', Criterio::getComparadoresCmb(), $buscador_pde_nota_credito_numero_nota_credito_completo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Cae') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_pde_nota_credito_cae' type='text' class='textbox' id='buscador_pde_nota_credito_cae' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_nota_credito.cae')) ?>' size='22' />
        	<?php 
			$buscador_pde_nota_credito_cae_comparador = $criterio->getComparadorDeCampo('pde_nota_credito.cae');
			if(trim($buscador_pde_nota_credito_cae_comparador) == '') $buscador_pde_nota_credito_cae_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_pde_nota_credito_cae_comparador', Criterio::getComparadoresCmb(), $buscador_pde_nota_credito_cae_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Numero de Despacho') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_pde_nota_credito_numero_despacho' type='text' class='textbox' id='buscador_pde_nota_credito_numero_despacho' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_nota_credito.numero_despacho')) ?>' size='22' />
        	<?php 
			$buscador_pde_nota_credito_numero_despacho_comparador = $criterio->getComparadorDeCampo('pde_nota_credito.numero_despacho');
			if(trim($buscador_pde_nota_credito_numero_despacho_comparador) == '') $buscador_pde_nota_credito_numero_despacho_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_pde_nota_credito_numero_despacho_comparador', Criterio::getComparadoresCmb(), $buscador_pde_nota_credito_numero_despacho_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Fecha de Emision') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_pde_nota_credito_fecha_emision' type='text' class='textbox' id='buscador_pde_nota_credito_fecha_emision' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : Gral::getFechaHoraToWeb($criterio->getValorDeCampo('pde_nota_credito.fecha_emision'))) ?>' size='15' />
					<input type='button' id='cal_buscador_pde_nota_credito_fecha_emision' value='...' />

					<script type='text/javascript'>
						Calendar.setup({
							inputField: 'buscador_pde_nota_credito_fecha_emision', ifFormat: '%d/%m/%Y', button: 'cal_buscador_pde_nota_credito_fecha_emision'
						});
					</script>
		
        	<?php 
			$buscador_pde_nota_credito_fecha_emision_comparador = $criterio->getComparadorDeCampo('pde_nota_credito.fecha_emision');
			if(trim($buscador_pde_nota_credito_fecha_emision_comparador) == '') $buscador_pde_nota_credito_fecha_emision_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_pde_nota_credito_fecha_emision_comparador', Criterio::getComparadoresCmb(), $buscador_pde_nota_credito_fecha_emision_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Fecha de Vencimiento') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_pde_nota_credito_fecha_vencimiento' type='text' class='textbox' id='buscador_pde_nota_credito_fecha_vencimiento' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : Gral::getFechaHoraToWeb($criterio->getValorDeCampo('pde_nota_credito.fecha_vencimiento'))) ?>' size='15' />
					<input type='button' id='cal_buscador_pde_nota_credito_fecha_vencimiento' value='...' />

					<script type='text/javascript'>
						Calendar.setup({
							inputField: 'buscador_pde_nota_credito_fecha_vencimiento', ifFormat: '%d/%m/%Y', button: 'cal_buscador_pde_nota_credito_fecha_vencimiento'
						});
					</script>
		
        	<?php 
			$buscador_pde_nota_credito_fecha_vencimiento_comparador = $criterio->getComparadorDeCampo('pde_nota_credito.fecha_vencimiento');
			if(trim($buscador_pde_nota_credito_fecha_vencimiento_comparador) == '') $buscador_pde_nota_credito_fecha_vencimiento_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_pde_nota_credito_fecha_vencimiento_comparador', Criterio::getComparadoresCmb(), $buscador_pde_nota_credito_fecha_vencimiento_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_pde_nota_credito_persona_descripcion' type='text' class='textbox' id='buscador_pde_nota_credito_persona_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_nota_credito.persona_descripcion')) ?>' size='22' />
        	<?php 
			$buscador_pde_nota_credito_persona_descripcion_comparador = $criterio->getComparadorDeCampo('pde_nota_credito.persona_descripcion');
			if(trim($buscador_pde_nota_credito_persona_descripcion_comparador) == '') $buscador_pde_nota_credito_persona_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_pde_nota_credito_persona_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_pde_nota_credito_persona_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Razon Social') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_pde_nota_credito_razon_social' type='text' class='textbox' id='buscador_pde_nota_credito_razon_social' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_nota_credito.razon_social')) ?>' size='22' />
        	<?php 
			$buscador_pde_nota_credito_razon_social_comparador = $criterio->getComparadorDeCampo('pde_nota_credito.razon_social');
			if(trim($buscador_pde_nota_credito_razon_social_comparador) == '') $buscador_pde_nota_credito_razon_social_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_pde_nota_credito_razon_social_comparador', Criterio::getComparadoresCmb(), $buscador_pde_nota_credito_razon_social_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Domicilio Legal') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_pde_nota_credito_domicilio_legal' type='text' class='textbox' id='buscador_pde_nota_credito_domicilio_legal' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_nota_credito.domicilio_legal')) ?>' size='22' />
        	<?php 
			$buscador_pde_nota_credito_domicilio_legal_comparador = $criterio->getComparadorDeCampo('pde_nota_credito.domicilio_legal');
			if(trim($buscador_pde_nota_credito_domicilio_legal_comparador) == '') $buscador_pde_nota_credito_domicilio_legal_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_pde_nota_credito_domicilio_legal_comparador', Criterio::getComparadoresCmb(), $buscador_pde_nota_credito_domicilio_legal_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('CUIT') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_pde_nota_credito_cuit' type='text' class='textbox' id='buscador_pde_nota_credito_cuit' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_nota_credito.cuit')) ?>' size='22' />
        	<?php 
			$buscador_pde_nota_credito_cuit_comparador = $criterio->getComparadorDeCampo('pde_nota_credito.cuit');
			if(trim($buscador_pde_nota_credito_cuit_comparador) == '') $buscador_pde_nota_credito_cuit_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_pde_nota_credito_cuit_comparador', Criterio::getComparadoresCmb(), $buscador_pde_nota_credito_cuit_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Codigo') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_pde_nota_credito_codigo' type='text' class='textbox' id='buscador_pde_nota_credito_codigo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_nota_credito.codigo')) ?>' size='22' />
        	<?php 
			$buscador_pde_nota_credito_codigo_comparador = $criterio->getComparadorDeCampo('pde_nota_credito.codigo');
			if(trim($buscador_pde_nota_credito_codigo_comparador) == '') $buscador_pde_nota_credito_codigo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_pde_nota_credito_codigo_comparador', Criterio::getComparadoresCmb(), $buscador_pde_nota_credito_codigo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Anio') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_pde_nota_credito_anio' type='text' class='textbox' id='buscador_pde_nota_credito_anio' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_nota_credito.anio')) ?>' size='22' />
        	<?php 
			$buscador_pde_nota_credito_anio_comparador = $criterio->getComparadorDeCampo('pde_nota_credito.anio');
			if(trim($buscador_pde_nota_credito_anio_comparador) == '') $buscador_pde_nota_credito_anio_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_pde_nota_credito_anio_comparador', Criterio::getComparadoresCmb(), $buscador_pde_nota_credito_anio_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('GralMes') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_pde_nota_credito_gral_mes_id', Gral::getCmbFiltro(GralMes::getGralMessCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_nota_credito.gral_mes_id'), 'textbox')?>
        	<?php 
			$buscador_pde_nota_credito_gral_mes_id_comparador = $criterio->getComparadorDeCampo('pde_nota_credito.gral_mes_id');
			if(trim($buscador_pde_nota_credito_gral_mes_id_comparador) == '') $buscador_pde_nota_credito_gral_mes_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_pde_nota_credito_gral_mes_id_comparador', Criterio::getComparadoresCmb(), $buscador_pde_nota_credito_gral_mes_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('CntbDiarioAsiento') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_pde_nota_credito_cntb_diario_asiento_id', Gral::getCmbFiltro(CntbDiarioAsiento::getCntbDiarioAsientosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_nota_credito.cntb_diario_asiento_id'), 'textbox')?>
        	<?php 
			$buscador_pde_nota_credito_cntb_diario_asiento_id_comparador = $criterio->getComparadorDeCampo('pde_nota_credito.cntb_diario_asiento_id');
			if(trim($buscador_pde_nota_credito_cntb_diario_asiento_id_comparador) == '') $buscador_pde_nota_credito_cntb_diario_asiento_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_pde_nota_credito_cntb_diario_asiento_id_comparador', Criterio::getComparadoresCmb(), $buscador_pde_nota_credito_cntb_diario_asiento_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_pde_nota_credito_observacion' type='text' class='textbox' id='buscador_pde_nota_credito_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_nota_credito.observacion')) ?>' size='22' />
        	<?php 
			$buscador_pde_nota_credito_observacion_comparador = $criterio->getComparadorDeCampo('pde_nota_credito.observacion');
			if(trim($buscador_pde_nota_credito_observacion_comparador) == '') $buscador_pde_nota_credito_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_pde_nota_credito_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_pde_nota_credito_observacion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Nota Interna') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_pde_nota_credito_nota_interna' type='text' class='textbox' id='buscador_pde_nota_credito_nota_interna' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_nota_credito.nota_interna')) ?>' size='22' />
        	<?php 
			$buscador_pde_nota_credito_nota_interna_comparador = $criterio->getComparadorDeCampo('pde_nota_credito.nota_interna');
			if(trim($buscador_pde_nota_credito_nota_interna_comparador) == '') $buscador_pde_nota_credito_nota_interna_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_pde_nota_credito_nota_interna_comparador', Criterio::getComparadoresCmb(), $buscador_pde_nota_credito_nota_interna_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Estado') ?></div>
		  <div class='dato'>
		  
		<?php Html::html_dib_select(1, 'buscador_pde_nota_credito_estado', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_nota_credito.estado'), 'textbox') ?>
		
        	<?php 
			$buscador_pde_nota_credito_estado_comparador = $criterio->getComparadorDeCampo('pde_nota_credito.estado');
			if(trim($buscador_pde_nota_credito_estado_comparador) == '') $buscador_pde_nota_credito_estado_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_pde_nota_credito_estado_comparador', Criterio::getComparadoresCmb(), $buscador_pde_nota_credito_estado_comparador, 'textbox comparador') ?>
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

