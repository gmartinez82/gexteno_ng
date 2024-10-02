<?php
include_once "_autoload.php";
$criterio = new Criterio(PdeNotaDebito::SES_CRITERIOS);
$criterio->addTabla('pde_nota_debito');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='pde_nota_debito'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Descripcion') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_pde_nota_debito_descripcion' type='text' class='textbox' id='buscador_pde_nota_debito_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_nota_debito.descripcion')) ?>' size='22' />
        	<?php 
			$buscador_pde_nota_debito_descripcion_comparador = $criterio->getComparadorDeCampo('pde_nota_debito.descripcion');
			if(trim($buscador_pde_nota_debito_descripcion_comparador) == '') $buscador_pde_nota_debito_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_pde_nota_debito_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_pde_nota_debito_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('PrvProveedor') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_pde_nota_debito_prv_proveedor_id', Gral::getCmbFiltro(PrvProveedor::getPrvProveedorsCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_nota_debito.prv_proveedor_id'), 'textbox')?>
        	<?php 
			$buscador_pde_nota_debito_prv_proveedor_id_comparador = $criterio->getComparadorDeCampo('pde_nota_debito.prv_proveedor_id');
			if(trim($buscador_pde_nota_debito_prv_proveedor_id_comparador) == '') $buscador_pde_nota_debito_prv_proveedor_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_pde_nota_debito_prv_proveedor_id_comparador', Criterio::getComparadoresCmb(), $buscador_pde_nota_debito_prv_proveedor_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('PdeTipoNotaDebito') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_pde_nota_debito_pde_tipo_nota_debito_id', Gral::getCmbFiltro(PdeTipoNotaDebito::getPdeTipoNotaDebitosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_nota_debito.pde_tipo_nota_debito_id'), 'textbox')?>
        	<?php 
			$buscador_pde_nota_debito_pde_tipo_nota_debito_id_comparador = $criterio->getComparadorDeCampo('pde_nota_debito.pde_tipo_nota_debito_id');
			if(trim($buscador_pde_nota_debito_pde_tipo_nota_debito_id_comparador) == '') $buscador_pde_nota_debito_pde_tipo_nota_debito_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_pde_nota_debito_pde_tipo_nota_debito_id_comparador', Criterio::getComparadoresCmb(), $buscador_pde_nota_debito_pde_tipo_nota_debito_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('PdeTipoOrigenNotaDebito') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_pde_nota_debito_pde_tipo_origen_nota_debito_id', Gral::getCmbFiltro(PdeTipoOrigenNotaDebito::getPdeTipoOrigenNotaDebitosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_nota_debito.pde_tipo_origen_nota_debito_id'), 'textbox')?>
        	<?php 
			$buscador_pde_nota_debito_pde_tipo_origen_nota_debito_id_comparador = $criterio->getComparadorDeCampo('pde_nota_debito.pde_tipo_origen_nota_debito_id');
			if(trim($buscador_pde_nota_debito_pde_tipo_origen_nota_debito_id_comparador) == '') $buscador_pde_nota_debito_pde_tipo_origen_nota_debito_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_pde_nota_debito_pde_tipo_origen_nota_debito_id_comparador', Criterio::getComparadoresCmb(), $buscador_pde_nota_debito_pde_tipo_origen_nota_debito_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('GralCondicionIva') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_pde_nota_debito_gral_condicion_iva_id', Gral::getCmbFiltro(GralCondicionIva::getGralCondicionIvasCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_nota_debito.gral_condicion_iva_id'), 'textbox')?>
        	<?php 
			$buscador_pde_nota_debito_gral_condicion_iva_id_comparador = $criterio->getComparadorDeCampo('pde_nota_debito.gral_condicion_iva_id');
			if(trim($buscador_pde_nota_debito_gral_condicion_iva_id_comparador) == '') $buscador_pde_nota_debito_gral_condicion_iva_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_pde_nota_debito_gral_condicion_iva_id_comparador', Criterio::getComparadoresCmb(), $buscador_pde_nota_debito_gral_condicion_iva_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('GralTipoPersoneria') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_pde_nota_debito_gral_tipo_personeria_id', Gral::getCmbFiltro(GralTipoPersoneria::getGralTipoPersoneriasCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_nota_debito.gral_tipo_personeria_id'), 'textbox')?>
        	<?php 
			$buscador_pde_nota_debito_gral_tipo_personeria_id_comparador = $criterio->getComparadorDeCampo('pde_nota_debito.gral_tipo_personeria_id');
			if(trim($buscador_pde_nota_debito_gral_tipo_personeria_id_comparador) == '') $buscador_pde_nota_debito_gral_tipo_personeria_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_pde_nota_debito_gral_tipo_personeria_id_comparador', Criterio::getComparadoresCmb(), $buscador_pde_nota_debito_gral_tipo_personeria_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('GralEmpresa') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_pde_nota_debito_gral_empresa_id', Gral::getCmbFiltro(GralEmpresa::getGralEmpresasCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_nota_debito.gral_empresa_id'), 'textbox')?>
        	<?php 
			$buscador_pde_nota_debito_gral_empresa_id_comparador = $criterio->getComparadorDeCampo('pde_nota_debito.gral_empresa_id');
			if(trim($buscador_pde_nota_debito_gral_empresa_id_comparador) == '') $buscador_pde_nota_debito_gral_empresa_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_pde_nota_debito_gral_empresa_id_comparador', Criterio::getComparadoresCmb(), $buscador_pde_nota_debito_gral_empresa_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('PdeCentroPedido') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_pde_nota_debito_pde_centro_pedido_id', Gral::getCmbFiltro(PdeCentroPedido::getPdeCentroPedidosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_nota_debito.pde_centro_pedido_id'), 'textbox')?>
        	<?php 
			$buscador_pde_nota_debito_pde_centro_pedido_id_comparador = $criterio->getComparadorDeCampo('pde_nota_debito.pde_centro_pedido_id');
			if(trim($buscador_pde_nota_debito_pde_centro_pedido_id_comparador) == '') $buscador_pde_nota_debito_pde_centro_pedido_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_pde_nota_debito_pde_centro_pedido_id_comparador', Criterio::getComparadoresCmb(), $buscador_pde_nota_debito_pde_centro_pedido_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('PdeNotaDebitoTipoEstado') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_pde_nota_debito_pde_nota_debito_tipo_estado_id', Gral::getCmbFiltro(PdeNotaDebitoTipoEstado::getPdeNotaDebitoTipoEstadosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_nota_debito.pde_nota_debito_tipo_estado_id'), 'textbox')?>
        	<?php 
			$buscador_pde_nota_debito_pde_nota_debito_tipo_estado_id_comparador = $criterio->getComparadorDeCampo('pde_nota_debito.pde_nota_debito_tipo_estado_id');
			if(trim($buscador_pde_nota_debito_pde_nota_debito_tipo_estado_id_comparador) == '') $buscador_pde_nota_debito_pde_nota_debito_tipo_estado_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_pde_nota_debito_pde_nota_debito_tipo_estado_id_comparador', Criterio::getComparadoresCmb(), $buscador_pde_nota_debito_pde_nota_debito_tipo_estado_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('GralFpFormaPago') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_pde_nota_debito_gral_fp_forma_pago_id', Gral::getCmbFiltro(GralFpFormaPago::getGralFpFormaPagosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_nota_debito.gral_fp_forma_pago_id'), 'textbox')?>
        	<?php 
			$buscador_pde_nota_debito_gral_fp_forma_pago_id_comparador = $criterio->getComparadorDeCampo('pde_nota_debito.gral_fp_forma_pago_id');
			if(trim($buscador_pde_nota_debito_gral_fp_forma_pago_id_comparador) == '') $buscador_pde_nota_debito_gral_fp_forma_pago_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_pde_nota_debito_gral_fp_forma_pago_id_comparador', Criterio::getComparadoresCmb(), $buscador_pde_nota_debito_gral_fp_forma_pago_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('GralActividad') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_pde_nota_debito_gral_actividad_id', Gral::getCmbFiltro(GralActividad::getGralActividadsCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_nota_debito.gral_actividad_id'), 'textbox')?>
        	<?php 
			$buscador_pde_nota_debito_gral_actividad_id_comparador = $criterio->getComparadorDeCampo('pde_nota_debito.gral_actividad_id');
			if(trim($buscador_pde_nota_debito_gral_actividad_id_comparador) == '') $buscador_pde_nota_debito_gral_actividad_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_pde_nota_debito_gral_actividad_id_comparador', Criterio::getComparadoresCmb(), $buscador_pde_nota_debito_gral_actividad_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('GralEscenario') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_pde_nota_debito_gral_escenario_id', Gral::getCmbFiltro(GralEscenario::getGralEscenariosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_nota_debito.gral_escenario_id'), 'textbox')?>
        	<?php 
			$buscador_pde_nota_debito_gral_escenario_id_comparador = $criterio->getComparadorDeCampo('pde_nota_debito.gral_escenario_id');
			if(trim($buscador_pde_nota_debito_gral_escenario_id_comparador) == '') $buscador_pde_nota_debito_gral_escenario_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_pde_nota_debito_gral_escenario_id_comparador', Criterio::getComparadoresCmb(), $buscador_pde_nota_debito_gral_escenario_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Numero de Pto Vta') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_pde_nota_debito_numero_punto_venta' type='text' class='textbox' id='buscador_pde_nota_debito_numero_punto_venta' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_nota_debito.numero_punto_venta')) ?>' size='22' />
        	<?php 
			$buscador_pde_nota_debito_numero_punto_venta_comparador = $criterio->getComparadorDeCampo('pde_nota_debito.numero_punto_venta');
			if(trim($buscador_pde_nota_debito_numero_punto_venta_comparador) == '') $buscador_pde_nota_debito_numero_punto_venta_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_pde_nota_debito_numero_punto_venta_comparador', Criterio::getComparadoresCmb(), $buscador_pde_nota_debito_numero_punto_venta_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Numero de Nota de Debito') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_pde_nota_debito_numero_nota_debito' type='text' class='textbox' id='buscador_pde_nota_debito_numero_nota_debito' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_nota_debito.numero_nota_debito')) ?>' size='22' />
        	<?php 
			$buscador_pde_nota_debito_numero_nota_debito_comparador = $criterio->getComparadorDeCampo('pde_nota_debito.numero_nota_debito');
			if(trim($buscador_pde_nota_debito_numero_nota_debito_comparador) == '') $buscador_pde_nota_debito_numero_nota_debito_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_pde_nota_debito_numero_nota_debito_comparador', Criterio::getComparadoresCmb(), $buscador_pde_nota_debito_numero_nota_debito_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Numero de Nota de Debito Completo') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_pde_nota_debito_numero_nota_debito_completo' type='text' class='textbox' id='buscador_pde_nota_debito_numero_nota_debito_completo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_nota_debito.numero_nota_debito_completo')) ?>' size='22' />
        	<?php 
			$buscador_pde_nota_debito_numero_nota_debito_completo_comparador = $criterio->getComparadorDeCampo('pde_nota_debito.numero_nota_debito_completo');
			if(trim($buscador_pde_nota_debito_numero_nota_debito_completo_comparador) == '') $buscador_pde_nota_debito_numero_nota_debito_completo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_pde_nota_debito_numero_nota_debito_completo_comparador', Criterio::getComparadoresCmb(), $buscador_pde_nota_debito_numero_nota_debito_completo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Cae') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_pde_nota_debito_cae' type='text' class='textbox' id='buscador_pde_nota_debito_cae' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_nota_debito.cae')) ?>' size='22' />
        	<?php 
			$buscador_pde_nota_debito_cae_comparador = $criterio->getComparadorDeCampo('pde_nota_debito.cae');
			if(trim($buscador_pde_nota_debito_cae_comparador) == '') $buscador_pde_nota_debito_cae_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_pde_nota_debito_cae_comparador', Criterio::getComparadoresCmb(), $buscador_pde_nota_debito_cae_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Numero de Despacho') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_pde_nota_debito_numero_despacho' type='text' class='textbox' id='buscador_pde_nota_debito_numero_despacho' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_nota_debito.numero_despacho')) ?>' size='22' />
        	<?php 
			$buscador_pde_nota_debito_numero_despacho_comparador = $criterio->getComparadorDeCampo('pde_nota_debito.numero_despacho');
			if(trim($buscador_pde_nota_debito_numero_despacho_comparador) == '') $buscador_pde_nota_debito_numero_despacho_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_pde_nota_debito_numero_despacho_comparador', Criterio::getComparadoresCmb(), $buscador_pde_nota_debito_numero_despacho_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Fecha de Emision') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_pde_nota_debito_fecha_emision' type='text' class='textbox' id='buscador_pde_nota_debito_fecha_emision' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : Gral::getFechaHoraToWeb($criterio->getValorDeCampo('pde_nota_debito.fecha_emision'))) ?>' size='15' />
					<input type='button' id='cal_buscador_pde_nota_debito_fecha_emision' value='...' />

					<script type='text/javascript'>
						Calendar.setup({
							inputField: 'buscador_pde_nota_debito_fecha_emision', ifFormat: '%d/%m/%Y', button: 'cal_buscador_pde_nota_debito_fecha_emision'
						});
					</script>
		
        	<?php 
			$buscador_pde_nota_debito_fecha_emision_comparador = $criterio->getComparadorDeCampo('pde_nota_debito.fecha_emision');
			if(trim($buscador_pde_nota_debito_fecha_emision_comparador) == '') $buscador_pde_nota_debito_fecha_emision_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_pde_nota_debito_fecha_emision_comparador', Criterio::getComparadoresCmb(), $buscador_pde_nota_debito_fecha_emision_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Fecha de Vencimiento') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_pde_nota_debito_fecha_vencimiento' type='text' class='textbox' id='buscador_pde_nota_debito_fecha_vencimiento' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : Gral::getFechaHoraToWeb($criterio->getValorDeCampo('pde_nota_debito.fecha_vencimiento'))) ?>' size='15' />
					<input type='button' id='cal_buscador_pde_nota_debito_fecha_vencimiento' value='...' />

					<script type='text/javascript'>
						Calendar.setup({
							inputField: 'buscador_pde_nota_debito_fecha_vencimiento', ifFormat: '%d/%m/%Y', button: 'cal_buscador_pde_nota_debito_fecha_vencimiento'
						});
					</script>
		
        	<?php 
			$buscador_pde_nota_debito_fecha_vencimiento_comparador = $criterio->getComparadorDeCampo('pde_nota_debito.fecha_vencimiento');
			if(trim($buscador_pde_nota_debito_fecha_vencimiento_comparador) == '') $buscador_pde_nota_debito_fecha_vencimiento_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_pde_nota_debito_fecha_vencimiento_comparador', Criterio::getComparadoresCmb(), $buscador_pde_nota_debito_fecha_vencimiento_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_pde_nota_debito_persona_descripcion' type='text' class='textbox' id='buscador_pde_nota_debito_persona_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_nota_debito.persona_descripcion')) ?>' size='22' />
        	<?php 
			$buscador_pde_nota_debito_persona_descripcion_comparador = $criterio->getComparadorDeCampo('pde_nota_debito.persona_descripcion');
			if(trim($buscador_pde_nota_debito_persona_descripcion_comparador) == '') $buscador_pde_nota_debito_persona_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_pde_nota_debito_persona_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_pde_nota_debito_persona_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Razon Social') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_pde_nota_debito_razon_social' type='text' class='textbox' id='buscador_pde_nota_debito_razon_social' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_nota_debito.razon_social')) ?>' size='22' />
        	<?php 
			$buscador_pde_nota_debito_razon_social_comparador = $criterio->getComparadorDeCampo('pde_nota_debito.razon_social');
			if(trim($buscador_pde_nota_debito_razon_social_comparador) == '') $buscador_pde_nota_debito_razon_social_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_pde_nota_debito_razon_social_comparador', Criterio::getComparadoresCmb(), $buscador_pde_nota_debito_razon_social_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Domicilio Legal') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_pde_nota_debito_domicilio_legal' type='text' class='textbox' id='buscador_pde_nota_debito_domicilio_legal' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_nota_debito.domicilio_legal')) ?>' size='22' />
        	<?php 
			$buscador_pde_nota_debito_domicilio_legal_comparador = $criterio->getComparadorDeCampo('pde_nota_debito.domicilio_legal');
			if(trim($buscador_pde_nota_debito_domicilio_legal_comparador) == '') $buscador_pde_nota_debito_domicilio_legal_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_pde_nota_debito_domicilio_legal_comparador', Criterio::getComparadoresCmb(), $buscador_pde_nota_debito_domicilio_legal_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('CUIT') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_pde_nota_debito_cuit' type='text' class='textbox' id='buscador_pde_nota_debito_cuit' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_nota_debito.cuit')) ?>' size='22' />
        	<?php 
			$buscador_pde_nota_debito_cuit_comparador = $criterio->getComparadorDeCampo('pde_nota_debito.cuit');
			if(trim($buscador_pde_nota_debito_cuit_comparador) == '') $buscador_pde_nota_debito_cuit_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_pde_nota_debito_cuit_comparador', Criterio::getComparadoresCmb(), $buscador_pde_nota_debito_cuit_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Codigo') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_pde_nota_debito_codigo' type='text' class='textbox' id='buscador_pde_nota_debito_codigo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_nota_debito.codigo')) ?>' size='22' />
        	<?php 
			$buscador_pde_nota_debito_codigo_comparador = $criterio->getComparadorDeCampo('pde_nota_debito.codigo');
			if(trim($buscador_pde_nota_debito_codigo_comparador) == '') $buscador_pde_nota_debito_codigo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_pde_nota_debito_codigo_comparador', Criterio::getComparadoresCmb(), $buscador_pde_nota_debito_codigo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Anio') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_pde_nota_debito_anio' type='text' class='textbox' id='buscador_pde_nota_debito_anio' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_nota_debito.anio')) ?>' size='22' />
        	<?php 
			$buscador_pde_nota_debito_anio_comparador = $criterio->getComparadorDeCampo('pde_nota_debito.anio');
			if(trim($buscador_pde_nota_debito_anio_comparador) == '') $buscador_pde_nota_debito_anio_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_pde_nota_debito_anio_comparador', Criterio::getComparadoresCmb(), $buscador_pde_nota_debito_anio_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('GralMes') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_pde_nota_debito_gral_mes_id', Gral::getCmbFiltro(GralMes::getGralMessCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_nota_debito.gral_mes_id'), 'textbox')?>
        	<?php 
			$buscador_pde_nota_debito_gral_mes_id_comparador = $criterio->getComparadorDeCampo('pde_nota_debito.gral_mes_id');
			if(trim($buscador_pde_nota_debito_gral_mes_id_comparador) == '') $buscador_pde_nota_debito_gral_mes_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_pde_nota_debito_gral_mes_id_comparador', Criterio::getComparadoresCmb(), $buscador_pde_nota_debito_gral_mes_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('CntbDiarioAsiento') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_pde_nota_debito_cntb_diario_asiento_id', Gral::getCmbFiltro(CntbDiarioAsiento::getCntbDiarioAsientosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_nota_debito.cntb_diario_asiento_id'), 'textbox')?>
        	<?php 
			$buscador_pde_nota_debito_cntb_diario_asiento_id_comparador = $criterio->getComparadorDeCampo('pde_nota_debito.cntb_diario_asiento_id');
			if(trim($buscador_pde_nota_debito_cntb_diario_asiento_id_comparador) == '') $buscador_pde_nota_debito_cntb_diario_asiento_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_pde_nota_debito_cntb_diario_asiento_id_comparador', Criterio::getComparadoresCmb(), $buscador_pde_nota_debito_cntb_diario_asiento_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('PrvDescuentoFinanciero') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_pde_nota_debito_prv_descuento_financiero_id', Gral::getCmbFiltro(PrvDescuentoFinanciero::getPrvDescuentoFinancierosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_nota_debito.prv_descuento_financiero_id'), 'textbox')?>
        	<?php 
			$buscador_pde_nota_debito_prv_descuento_financiero_id_comparador = $criterio->getComparadorDeCampo('pde_nota_debito.prv_descuento_financiero_id');
			if(trim($buscador_pde_nota_debito_prv_descuento_financiero_id_comparador) == '') $buscador_pde_nota_debito_prv_descuento_financiero_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_pde_nota_debito_prv_descuento_financiero_id_comparador', Criterio::getComparadoresCmb(), $buscador_pde_nota_debito_prv_descuento_financiero_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_pde_nota_debito_observacion' type='text' class='textbox' id='buscador_pde_nota_debito_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_nota_debito.observacion')) ?>' size='22' />
        	<?php 
			$buscador_pde_nota_debito_observacion_comparador = $criterio->getComparadorDeCampo('pde_nota_debito.observacion');
			if(trim($buscador_pde_nota_debito_observacion_comparador) == '') $buscador_pde_nota_debito_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_pde_nota_debito_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_pde_nota_debito_observacion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Nota Interna') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_pde_nota_debito_nota_interna' type='text' class='textbox' id='buscador_pde_nota_debito_nota_interna' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_nota_debito.nota_interna')) ?>' size='22' />
        	<?php 
			$buscador_pde_nota_debito_nota_interna_comparador = $criterio->getComparadorDeCampo('pde_nota_debito.nota_interna');
			if(trim($buscador_pde_nota_debito_nota_interna_comparador) == '') $buscador_pde_nota_debito_nota_interna_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_pde_nota_debito_nota_interna_comparador', Criterio::getComparadoresCmb(), $buscador_pde_nota_debito_nota_interna_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Estado') ?></div>
		  <div class='dato'>
		  
		<?php Html::html_dib_select(1, 'buscador_pde_nota_debito_estado', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_nota_debito.estado'), 'textbox') ?>
		
        	<?php 
			$buscador_pde_nota_debito_estado_comparador = $criterio->getComparadorDeCampo('pde_nota_debito.estado');
			if(trim($buscador_pde_nota_debito_estado_comparador) == '') $buscador_pde_nota_debito_estado_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_pde_nota_debito_estado_comparador', Criterio::getComparadoresCmb(), $buscador_pde_nota_debito_estado_comparador, 'textbox comparador') ?>
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

