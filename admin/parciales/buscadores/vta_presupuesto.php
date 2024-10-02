<?php
include_once "_autoload.php";
$criterio = new Criterio(VtaPresupuesto::SES_CRITERIOS);
$criterio->addTabla('vta_presupuesto');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='vta_presupuesto'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Descripcion') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_presupuesto_descripcion' type='text' class='textbox' id='buscador_vta_presupuesto_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_presupuesto.descripcion')) ?>' size='22' />
        	<?php 
			$buscador_vta_presupuesto_descripcion_comparador = $criterio->getComparadorDeCampo('vta_presupuesto.descripcion');
			if(trim($buscador_vta_presupuesto_descripcion_comparador) == '') $buscador_vta_presupuesto_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_vta_presupuesto_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_vta_presupuesto_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('CliCliente') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_vta_presupuesto_cli_cliente_id', Gral::getCmbFiltro(CliCliente::getCliClientesCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_presupuesto.cli_cliente_id'), 'textbox')?>
        	<?php 
			$buscador_vta_presupuesto_cli_cliente_id_comparador = $criterio->getComparadorDeCampo('vta_presupuesto.cli_cliente_id');
			if(trim($buscador_vta_presupuesto_cli_cliente_id_comparador) == '') $buscador_vta_presupuesto_cli_cliente_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_presupuesto_cli_cliente_id_comparador', Criterio::getComparadoresCmb(), $buscador_vta_presupuesto_cli_cliente_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('VtaVendedor') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_vta_presupuesto_vta_vendedor_id', Gral::getCmbFiltro(VtaVendedor::getVtaVendedorsCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_presupuesto.vta_vendedor_id'), 'textbox')?>
        	<?php 
			$buscador_vta_presupuesto_vta_vendedor_id_comparador = $criterio->getComparadorDeCampo('vta_presupuesto.vta_vendedor_id');
			if(trim($buscador_vta_presupuesto_vta_vendedor_id_comparador) == '') $buscador_vta_presupuesto_vta_vendedor_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_presupuesto_vta_vendedor_id_comparador', Criterio::getComparadoresCmb(), $buscador_vta_presupuesto_vta_vendedor_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('VtaComprador') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_vta_presupuesto_vta_comprador_id', Gral::getCmbFiltro(VtaComprador::getVtaCompradorsCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_presupuesto.vta_comprador_id'), 'textbox')?>
        	<?php 
			$buscador_vta_presupuesto_vta_comprador_id_comparador = $criterio->getComparadorDeCampo('vta_presupuesto.vta_comprador_id');
			if(trim($buscador_vta_presupuesto_vta_comprador_id_comparador) == '') $buscador_vta_presupuesto_vta_comprador_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_presupuesto_vta_comprador_id_comparador', Criterio::getComparadoresCmb(), $buscador_vta_presupuesto_vta_comprador_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('VtaPreventista') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_vta_presupuesto_vta_preventista_id', Gral::getCmbFiltro(VtaPreventista::getVtaPreventistasCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_presupuesto.vta_preventista_id'), 'textbox')?>
        	<?php 
			$buscador_vta_presupuesto_vta_preventista_id_comparador = $criterio->getComparadorDeCampo('vta_presupuesto.vta_preventista_id');
			if(trim($buscador_vta_presupuesto_vta_preventista_id_comparador) == '') $buscador_vta_presupuesto_vta_preventista_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_presupuesto_vta_preventista_id_comparador', Criterio::getComparadoresCmb(), $buscador_vta_presupuesto_vta_preventista_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('GralActividad') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_vta_presupuesto_gral_actividad_id', Gral::getCmbFiltro(GralActividad::getGralActividadsCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_presupuesto.gral_actividad_id'), 'textbox')?>
        	<?php 
			$buscador_vta_presupuesto_gral_actividad_id_comparador = $criterio->getComparadorDeCampo('vta_presupuesto.gral_actividad_id');
			if(trim($buscador_vta_presupuesto_gral_actividad_id_comparador) == '') $buscador_vta_presupuesto_gral_actividad_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_presupuesto_gral_actividad_id_comparador', Criterio::getComparadoresCmb(), $buscador_vta_presupuesto_gral_actividad_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('GralEscenario') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_vta_presupuesto_gral_escenario_id', Gral::getCmbFiltro(GralEscenario::getGralEscenariosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_presupuesto.gral_escenario_id'), 'textbox')?>
        	<?php 
			$buscador_vta_presupuesto_gral_escenario_id_comparador = $criterio->getComparadorDeCampo('vta_presupuesto.gral_escenario_id');
			if(trim($buscador_vta_presupuesto_gral_escenario_id_comparador) == '') $buscador_vta_presupuesto_gral_escenario_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_presupuesto_gral_escenario_id_comparador', Criterio::getComparadoresCmb(), $buscador_vta_presupuesto_gral_escenario_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('GralFpFormaPago') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_vta_presupuesto_gral_fp_forma_pago_id', Gral::getCmbFiltro(GralFpFormaPago::getGralFpFormaPagosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_presupuesto.gral_fp_forma_pago_id'), 'textbox')?>
        	<?php 
			$buscador_vta_presupuesto_gral_fp_forma_pago_id_comparador = $criterio->getComparadorDeCampo('vta_presupuesto.gral_fp_forma_pago_id');
			if(trim($buscador_vta_presupuesto_gral_fp_forma_pago_id_comparador) == '') $buscador_vta_presupuesto_gral_fp_forma_pago_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_presupuesto_gral_fp_forma_pago_id_comparador', Criterio::getComparadoresCmb(), $buscador_vta_presupuesto_gral_fp_forma_pago_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('GralFpCuota') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_vta_presupuesto_gral_fp_cuota_id', Gral::getCmbFiltro(GralFpCuota::getGralFpCuotasCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_presupuesto.gral_fp_cuota_id'), 'textbox')?>
        	<?php 
			$buscador_vta_presupuesto_gral_fp_cuota_id_comparador = $criterio->getComparadorDeCampo('vta_presupuesto.gral_fp_cuota_id');
			if(trim($buscador_vta_presupuesto_gral_fp_cuota_id_comparador) == '') $buscador_vta_presupuesto_gral_fp_cuota_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_presupuesto_gral_fp_cuota_id_comparador', Criterio::getComparadoresCmb(), $buscador_vta_presupuesto_gral_fp_cuota_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('InsTipoListaPrecio') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_vta_presupuesto_ins_tipo_lista_precio_id', Gral::getCmbFiltro(InsTipoListaPrecio::getInsTipoListaPreciosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_presupuesto.ins_tipo_lista_precio_id'), 'textbox')?>
        	<?php 
			$buscador_vta_presupuesto_ins_tipo_lista_precio_id_comparador = $criterio->getComparadorDeCampo('vta_presupuesto.ins_tipo_lista_precio_id');
			if(trim($buscador_vta_presupuesto_ins_tipo_lista_precio_id_comparador) == '') $buscador_vta_presupuesto_ins_tipo_lista_precio_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_presupuesto_ins_tipo_lista_precio_id_comparador', Criterio::getComparadoresCmb(), $buscador_vta_presupuesto_ins_tipo_lista_precio_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('VtaPresupuestoTipoEstado') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_vta_presupuesto_vta_presupuesto_tipo_estado_id', Gral::getCmbFiltro(VtaPresupuestoTipoEstado::getVtaPresupuestoTipoEstadosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_presupuesto.vta_presupuesto_tipo_estado_id'), 'textbox')?>
        	<?php 
			$buscador_vta_presupuesto_vta_presupuesto_tipo_estado_id_comparador = $criterio->getComparadorDeCampo('vta_presupuesto.vta_presupuesto_tipo_estado_id');
			if(trim($buscador_vta_presupuesto_vta_presupuesto_tipo_estado_id_comparador) == '') $buscador_vta_presupuesto_vta_presupuesto_tipo_estado_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_presupuesto_vta_presupuesto_tipo_estado_id_comparador', Criterio::getComparadoresCmb(), $buscador_vta_presupuesto_vta_presupuesto_tipo_estado_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('GralCondicionIva') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_vta_presupuesto_gral_condicion_iva_id', Gral::getCmbFiltro(GralCondicionIva::getGralCondicionIvasCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_presupuesto.gral_condicion_iva_id'), 'textbox')?>
        	<?php 
			$buscador_vta_presupuesto_gral_condicion_iva_id_comparador = $criterio->getComparadorDeCampo('vta_presupuesto.gral_condicion_iva_id');
			if(trim($buscador_vta_presupuesto_gral_condicion_iva_id_comparador) == '') $buscador_vta_presupuesto_gral_condicion_iva_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_presupuesto_gral_condicion_iva_id_comparador', Criterio::getComparadoresCmb(), $buscador_vta_presupuesto_gral_condicion_iva_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('VtaPresupuestoTipoEmision') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_vta_presupuesto_vta_presupuesto_tipo_emision_id', Gral::getCmbFiltro(VtaPresupuestoTipoEmision::getVtaPresupuestoTipoEmisionsCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_presupuesto.vta_presupuesto_tipo_emision_id'), 'textbox')?>
        	<?php 
			$buscador_vta_presupuesto_vta_presupuesto_tipo_emision_id_comparador = $criterio->getComparadorDeCampo('vta_presupuesto.vta_presupuesto_tipo_emision_id');
			if(trim($buscador_vta_presupuesto_vta_presupuesto_tipo_emision_id_comparador) == '') $buscador_vta_presupuesto_vta_presupuesto_tipo_emision_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_presupuesto_vta_presupuesto_tipo_emision_id_comparador', Criterio::getComparadoresCmb(), $buscador_vta_presupuesto_vta_presupuesto_tipo_emision_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('GralTipoDocumento') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_vta_presupuesto_gral_tipo_documento_id', Gral::getCmbFiltro(GralTipoDocumento::getGralTipoDocumentosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_presupuesto.gral_tipo_documento_id'), 'textbox')?>
        	<?php 
			$buscador_vta_presupuesto_gral_tipo_documento_id_comparador = $criterio->getComparadorDeCampo('vta_presupuesto.gral_tipo_documento_id');
			if(trim($buscador_vta_presupuesto_gral_tipo_documento_id_comparador) == '') $buscador_vta_presupuesto_gral_tipo_documento_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_presupuesto_gral_tipo_documento_id_comparador', Criterio::getComparadoresCmb(), $buscador_vta_presupuesto_gral_tipo_documento_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_presupuesto_persona_descripcion' type='text' class='textbox' id='buscador_vta_presupuesto_persona_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_presupuesto.persona_descripcion')) ?>' size='22' />
        	<?php 
			$buscador_vta_presupuesto_persona_descripcion_comparador = $criterio->getComparadorDeCampo('vta_presupuesto.persona_descripcion');
			if(trim($buscador_vta_presupuesto_persona_descripcion_comparador) == '') $buscador_vta_presupuesto_persona_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_vta_presupuesto_persona_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_vta_presupuesto_persona_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_presupuesto_persona_documento' type='text' class='textbox' id='buscador_vta_presupuesto_persona_documento' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_presupuesto.persona_documento')) ?>' size='22' />
        	<?php 
			$buscador_vta_presupuesto_persona_documento_comparador = $criterio->getComparadorDeCampo('vta_presupuesto.persona_documento');
			if(trim($buscador_vta_presupuesto_persona_documento_comparador) == '') $buscador_vta_presupuesto_persona_documento_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_vta_presupuesto_persona_documento_comparador', Criterio::getComparadoresCmb(), $buscador_vta_presupuesto_persona_documento_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_presupuesto_persona_email' type='text' class='textbox' id='buscador_vta_presupuesto_persona_email' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_presupuesto.persona_email')) ?>' size='22' />
        	<?php 
			$buscador_vta_presupuesto_persona_email_comparador = $criterio->getComparadorDeCampo('vta_presupuesto.persona_email');
			if(trim($buscador_vta_presupuesto_persona_email_comparador) == '') $buscador_vta_presupuesto_persona_email_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_vta_presupuesto_persona_email_comparador', Criterio::getComparadoresCmb(), $buscador_vta_presupuesto_persona_email_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Fecha') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_presupuesto_fecha' type='text' class='textbox' id='buscador_vta_presupuesto_fecha' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : Gral::getFechaHoraToWeb($criterio->getValorDeCampo('vta_presupuesto.fecha'))) ?>' size='15' />
					<input type='button' id='cal_buscador_vta_presupuesto_fecha' value='...' />

					<script type='text/javascript'>
						Calendar.setup({
							inputField: 'buscador_vta_presupuesto_fecha', ifFormat: '%d/%m/%Y', button: 'cal_buscador_vta_presupuesto_fecha'
						});
					</script>
		
        	<?php 
			$buscador_vta_presupuesto_fecha_comparador = $criterio->getComparadorDeCampo('vta_presupuesto.fecha');
			if(trim($buscador_vta_presupuesto_fecha_comparador) == '') $buscador_vta_presupuesto_fecha_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_vta_presupuesto_fecha_comparador', Criterio::getComparadoresCmb(), $buscador_vta_presupuesto_fecha_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Fecha de Vencimiento') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_presupuesto_fecha_vencimiento' type='text' class='textbox' id='buscador_vta_presupuesto_fecha_vencimiento' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : Gral::getFechaHoraToWeb($criterio->getValorDeCampo('vta_presupuesto.fecha_vencimiento'))) ?>' size='15' />
					<input type='button' id='cal_buscador_vta_presupuesto_fecha_vencimiento' value='...' />

					<script type='text/javascript'>
						Calendar.setup({
							inputField: 'buscador_vta_presupuesto_fecha_vencimiento', ifFormat: '%d/%m/%Y', button: 'cal_buscador_vta_presupuesto_fecha_vencimiento'
						});
					</script>
		
        	<?php 
			$buscador_vta_presupuesto_fecha_vencimiento_comparador = $criterio->getComparadorDeCampo('vta_presupuesto.fecha_vencimiento');
			if(trim($buscador_vta_presupuesto_fecha_vencimiento_comparador) == '') $buscador_vta_presupuesto_fecha_vencimiento_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_vta_presupuesto_fecha_vencimiento_comparador', Criterio::getComparadoresCmb(), $buscador_vta_presupuesto_fecha_vencimiento_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Fecha de Entrega') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_presupuesto_fecha_entrega' type='text' class='textbox' id='buscador_vta_presupuesto_fecha_entrega' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : Gral::getFechaHoraToWeb($criterio->getValorDeCampo('vta_presupuesto.fecha_entrega'))) ?>' size='15' />
					<input type='button' id='cal_buscador_vta_presupuesto_fecha_entrega' value='...' />

					<script type='text/javascript'>
						Calendar.setup({
							inputField: 'buscador_vta_presupuesto_fecha_entrega', ifFormat: '%d/%m/%Y', button: 'cal_buscador_vta_presupuesto_fecha_entrega'
						});
					</script>
		
        	<?php 
			$buscador_vta_presupuesto_fecha_entrega_comparador = $criterio->getComparadorDeCampo('vta_presupuesto.fecha_entrega');
			if(trim($buscador_vta_presupuesto_fecha_entrega_comparador) == '') $buscador_vta_presupuesto_fecha_entrega_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_vta_presupuesto_fecha_entrega_comparador', Criterio::getComparadoresCmb(), $buscador_vta_presupuesto_fecha_entrega_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Fecha de Recordatorio') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_presupuesto_fecha_recordatorio' type='text' class='textbox' id='buscador_vta_presupuesto_fecha_recordatorio' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : Gral::getFechaHoraToWeb($criterio->getValorDeCampo('vta_presupuesto.fecha_recordatorio'))) ?>' size='15' />
					<input type='button' id='cal_buscador_vta_presupuesto_fecha_recordatorio' value='...' />

					<script type='text/javascript'>
						Calendar.setup({
							inputField: 'buscador_vta_presupuesto_fecha_recordatorio', ifFormat: '%d/%m/%Y', button: 'cal_buscador_vta_presupuesto_fecha_recordatorio'
						});
					</script>
		
        	<?php 
			$buscador_vta_presupuesto_fecha_recordatorio_comparador = $criterio->getComparadorDeCampo('vta_presupuesto.fecha_recordatorio');
			if(trim($buscador_vta_presupuesto_fecha_recordatorio_comparador) == '') $buscador_vta_presupuesto_fecha_recordatorio_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_vta_presupuesto_fecha_recordatorio_comparador', Criterio::getComparadoresCmb(), $buscador_vta_presupuesto_fecha_recordatorio_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_presupuesto_importe_subtotal' type='text' class='textbox' id='buscador_vta_presupuesto_importe_subtotal' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_presupuesto.importe_subtotal')) ?>' size='22' />
        	<?php 
			$buscador_vta_presupuesto_importe_subtotal_comparador = $criterio->getComparadorDeCampo('vta_presupuesto.importe_subtotal');
			if(trim($buscador_vta_presupuesto_importe_subtotal_comparador) == '') $buscador_vta_presupuesto_importe_subtotal_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_presupuesto_importe_subtotal_comparador', Criterio::getComparadoresCmb(), $buscador_vta_presupuesto_importe_subtotal_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_presupuesto_importe_descuento' type='text' class='textbox' id='buscador_vta_presupuesto_importe_descuento' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_presupuesto.importe_descuento')) ?>' size='22' />
        	<?php 
			$buscador_vta_presupuesto_importe_descuento_comparador = $criterio->getComparadorDeCampo('vta_presupuesto.importe_descuento');
			if(trim($buscador_vta_presupuesto_importe_descuento_comparador) == '') $buscador_vta_presupuesto_importe_descuento_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_presupuesto_importe_descuento_comparador', Criterio::getComparadoresCmb(), $buscador_vta_presupuesto_importe_descuento_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_presupuesto_importe_politica_descuento' type='text' class='textbox' id='buscador_vta_presupuesto_importe_politica_descuento' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_presupuesto.importe_politica_descuento')) ?>' size='22' />
        	<?php 
			$buscador_vta_presupuesto_importe_politica_descuento_comparador = $criterio->getComparadorDeCampo('vta_presupuesto.importe_politica_descuento');
			if(trim($buscador_vta_presupuesto_importe_politica_descuento_comparador) == '') $buscador_vta_presupuesto_importe_politica_descuento_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_presupuesto_importe_politica_descuento_comparador', Criterio::getComparadoresCmb(), $buscador_vta_presupuesto_importe_politica_descuento_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_presupuesto_importe_recargo' type='text' class='textbox' id='buscador_vta_presupuesto_importe_recargo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_presupuesto.importe_recargo')) ?>' size='22' />
        	<?php 
			$buscador_vta_presupuesto_importe_recargo_comparador = $criterio->getComparadorDeCampo('vta_presupuesto.importe_recargo');
			if(trim($buscador_vta_presupuesto_importe_recargo_comparador) == '') $buscador_vta_presupuesto_importe_recargo_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_presupuesto_importe_recargo_comparador', Criterio::getComparadoresCmb(), $buscador_vta_presupuesto_importe_recargo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_presupuesto_importe_total' type='text' class='textbox' id='buscador_vta_presupuesto_importe_total' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_presupuesto.importe_total')) ?>' size='22' />
        	<?php 
			$buscador_vta_presupuesto_importe_total_comparador = $criterio->getComparadorDeCampo('vta_presupuesto.importe_total');
			if(trim($buscador_vta_presupuesto_importe_total_comparador) == '') $buscador_vta_presupuesto_importe_total_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_presupuesto_importe_total_comparador', Criterio::getComparadoresCmb(), $buscador_vta_presupuesto_importe_total_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Cant Items') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_presupuesto_cantidad_items' type='text' class='textbox' id='buscador_vta_presupuesto_cantidad_items' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_presupuesto.cantidad_items')) ?>' size='22' />
        	<?php 
			$buscador_vta_presupuesto_cantidad_items_comparador = $criterio->getComparadorDeCampo('vta_presupuesto.cantidad_items');
			if(trim($buscador_vta_presupuesto_cantidad_items_comparador) == '') $buscador_vta_presupuesto_cantidad_items_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_presupuesto_cantidad_items_comparador', Criterio::getComparadoresCmb(), $buscador_vta_presupuesto_cantidad_items_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Recargo %') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_presupuesto_recargo' type='text' class='textbox' id='buscador_vta_presupuesto_recargo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_presupuesto.recargo')) ?>' size='22' />
        	<?php 
			$buscador_vta_presupuesto_recargo_comparador = $criterio->getComparadorDeCampo('vta_presupuesto.recargo');
			if(trim($buscador_vta_presupuesto_recargo_comparador) == '') $buscador_vta_presupuesto_recargo_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_presupuesto_recargo_comparador', Criterio::getComparadoresCmb(), $buscador_vta_presupuesto_recargo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Nota Interna') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_presupuesto_nota_interna' type='text' class='textbox' id='buscador_vta_presupuesto_nota_interna' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_presupuesto.nota_interna')) ?>' size='22' />
        	<?php 
			$buscador_vta_presupuesto_nota_interna_comparador = $criterio->getComparadorDeCampo('vta_presupuesto.nota_interna');
			if(trim($buscador_vta_presupuesto_nota_interna_comparador) == '') $buscador_vta_presupuesto_nota_interna_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_vta_presupuesto_nota_interna_comparador', Criterio::getComparadoresCmb(), $buscador_vta_presupuesto_nota_interna_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Nota de Recordatorio') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_presupuesto_nota_recordatorio' type='text' class='textbox' id='buscador_vta_presupuesto_nota_recordatorio' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_presupuesto.nota_recordatorio')) ?>' size='22' />
        	<?php 
			$buscador_vta_presupuesto_nota_recordatorio_comparador = $criterio->getComparadorDeCampo('vta_presupuesto.nota_recordatorio');
			if(trim($buscador_vta_presupuesto_nota_recordatorio_comparador) == '') $buscador_vta_presupuesto_nota_recordatorio_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_vta_presupuesto_nota_recordatorio_comparador', Criterio::getComparadoresCmb(), $buscador_vta_presupuesto_nota_recordatorio_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Codigo') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_presupuesto_codigo' type='text' class='textbox' id='buscador_vta_presupuesto_codigo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_presupuesto.codigo')) ?>' size='22' />
        	<?php 
			$buscador_vta_presupuesto_codigo_comparador = $criterio->getComparadorDeCampo('vta_presupuesto.codigo');
			if(trim($buscador_vta_presupuesto_codigo_comparador) == '') $buscador_vta_presupuesto_codigo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_vta_presupuesto_codigo_comparador', Criterio::getComparadoresCmb(), $buscador_vta_presupuesto_codigo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_presupuesto_observacion' type='text' class='textbox' id='buscador_vta_presupuesto_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_presupuesto.observacion')) ?>' size='22' />
        	<?php 
			$buscador_vta_presupuesto_observacion_comparador = $criterio->getComparadorDeCampo('vta_presupuesto.observacion');
			if(trim($buscador_vta_presupuesto_observacion_comparador) == '') $buscador_vta_presupuesto_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_vta_presupuesto_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_vta_presupuesto_observacion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Estado') ?></div>
		  <div class='dato'>
		  
		<?php Html::html_dib_select(1, 'buscador_vta_presupuesto_estado', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_presupuesto.estado'), 'textbox') ?>
		
        	<?php 
			$buscador_vta_presupuesto_estado_comparador = $criterio->getComparadorDeCampo('vta_presupuesto.estado');
			if(trim($buscador_vta_presupuesto_estado_comparador) == '') $buscador_vta_presupuesto_estado_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_presupuesto_estado_comparador', Criterio::getComparadoresCmb(), $buscador_vta_presupuesto_estado_comparador, 'textbox comparador') ?>
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

