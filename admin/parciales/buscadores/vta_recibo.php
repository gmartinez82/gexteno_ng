<?php
include_once "_autoload.php";
$criterio = new Criterio(VtaRecibo::SES_CRITERIOS);
$criterio->addTabla('vta_recibo');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='vta_recibo'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Descripcion') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_recibo_descripcion' type='text' class='textbox' id='buscador_vta_recibo_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_recibo.descripcion')) ?>' size='22' />
        	<?php 
			$buscador_vta_recibo_descripcion_comparador = $criterio->getComparadorDeCampo('vta_recibo.descripcion');
			if(trim($buscador_vta_recibo_descripcion_comparador) == '') $buscador_vta_recibo_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_vta_recibo_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_vta_recibo_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('CliCliente') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_vta_recibo_cli_cliente_id', Gral::getCmbFiltro(CliCliente::getCliClientesCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_recibo.cli_cliente_id'), 'textbox')?>
        	<?php 
			$buscador_vta_recibo_cli_cliente_id_comparador = $criterio->getComparadorDeCampo('vta_recibo.cli_cliente_id');
			if(trim($buscador_vta_recibo_cli_cliente_id_comparador) == '') $buscador_vta_recibo_cli_cliente_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_recibo_cli_cliente_id_comparador', Criterio::getComparadoresCmb(), $buscador_vta_recibo_cli_cliente_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('VtaTipoRecibo') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_vta_recibo_vta_tipo_recibo_id', Gral::getCmbFiltro(VtaTipoRecibo::getVtaTipoRecibosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_recibo.vta_tipo_recibo_id'), 'textbox')?>
        	<?php 
			$buscador_vta_recibo_vta_tipo_recibo_id_comparador = $criterio->getComparadorDeCampo('vta_recibo.vta_tipo_recibo_id');
			if(trim($buscador_vta_recibo_vta_tipo_recibo_id_comparador) == '') $buscador_vta_recibo_vta_tipo_recibo_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_recibo_vta_tipo_recibo_id_comparador', Criterio::getComparadoresCmb(), $buscador_vta_recibo_vta_tipo_recibo_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('VtaTipoOrigenRecibo') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_vta_recibo_vta_tipo_origen_recibo_id', Gral::getCmbFiltro(VtaTipoOrigenRecibo::getVtaTipoOrigenRecibosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_recibo.vta_tipo_origen_recibo_id'), 'textbox')?>
        	<?php 
			$buscador_vta_recibo_vta_tipo_origen_recibo_id_comparador = $criterio->getComparadorDeCampo('vta_recibo.vta_tipo_origen_recibo_id');
			if(trim($buscador_vta_recibo_vta_tipo_origen_recibo_id_comparador) == '') $buscador_vta_recibo_vta_tipo_origen_recibo_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_recibo_vta_tipo_origen_recibo_id_comparador', Criterio::getComparadoresCmb(), $buscador_vta_recibo_vta_tipo_origen_recibo_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('GralCondicionIva') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_vta_recibo_gral_condicion_iva_id', Gral::getCmbFiltro(GralCondicionIva::getGralCondicionIvasCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_recibo.gral_condicion_iva_id'), 'textbox')?>
        	<?php 
			$buscador_vta_recibo_gral_condicion_iva_id_comparador = $criterio->getComparadorDeCampo('vta_recibo.gral_condicion_iva_id');
			if(trim($buscador_vta_recibo_gral_condicion_iva_id_comparador) == '') $buscador_vta_recibo_gral_condicion_iva_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_recibo_gral_condicion_iva_id_comparador', Criterio::getComparadoresCmb(), $buscador_vta_recibo_gral_condicion_iva_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('GralTipoPersoneria') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_vta_recibo_gral_tipo_personeria_id', Gral::getCmbFiltro(GralTipoPersoneria::getGralTipoPersoneriasCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_recibo.gral_tipo_personeria_id'), 'textbox')?>
        	<?php 
			$buscador_vta_recibo_gral_tipo_personeria_id_comparador = $criterio->getComparadorDeCampo('vta_recibo.gral_tipo_personeria_id');
			if(trim($buscador_vta_recibo_gral_tipo_personeria_id_comparador) == '') $buscador_vta_recibo_gral_tipo_personeria_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_recibo_gral_tipo_personeria_id_comparador', Criterio::getComparadoresCmb(), $buscador_vta_recibo_gral_tipo_personeria_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('GralEmpresa') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_vta_recibo_gral_empresa_id', Gral::getCmbFiltro(GralEmpresa::getGralEmpresasCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_recibo.gral_empresa_id'), 'textbox')?>
        	<?php 
			$buscador_vta_recibo_gral_empresa_id_comparador = $criterio->getComparadorDeCampo('vta_recibo.gral_empresa_id');
			if(trim($buscador_vta_recibo_gral_empresa_id_comparador) == '') $buscador_vta_recibo_gral_empresa_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_recibo_gral_empresa_id_comparador', Criterio::getComparadoresCmb(), $buscador_vta_recibo_gral_empresa_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('VtaPuntoVenta') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_vta_recibo_vta_punto_venta_id', Gral::getCmbFiltro(VtaPuntoVenta::getVtaPuntoVentasCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_recibo.vta_punto_venta_id'), 'textbox')?>
        	<?php 
			$buscador_vta_recibo_vta_punto_venta_id_comparador = $criterio->getComparadorDeCampo('vta_recibo.vta_punto_venta_id');
			if(trim($buscador_vta_recibo_vta_punto_venta_id_comparador) == '') $buscador_vta_recibo_vta_punto_venta_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_recibo_vta_punto_venta_id_comparador', Criterio::getComparadoresCmb(), $buscador_vta_recibo_vta_punto_venta_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('VtaReciboTipoEstado') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_vta_recibo_vta_recibo_tipo_estado_id', Gral::getCmbFiltro(VtaReciboTipoEstado::getVtaReciboTipoEstadosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_recibo.vta_recibo_tipo_estado_id'), 'textbox')?>
        	<?php 
			$buscador_vta_recibo_vta_recibo_tipo_estado_id_comparador = $criterio->getComparadorDeCampo('vta_recibo.vta_recibo_tipo_estado_id');
			if(trim($buscador_vta_recibo_vta_recibo_tipo_estado_id_comparador) == '') $buscador_vta_recibo_vta_recibo_tipo_estado_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_recibo_vta_recibo_tipo_estado_id_comparador', Criterio::getComparadoresCmb(), $buscador_vta_recibo_vta_recibo_tipo_estado_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Numero de Pto Vta') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_recibo_numero_punto_venta' type='text' class='textbox' id='buscador_vta_recibo_numero_punto_venta' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_recibo.numero_punto_venta')) ?>' size='22' />
        	<?php 
			$buscador_vta_recibo_numero_punto_venta_comparador = $criterio->getComparadorDeCampo('vta_recibo.numero_punto_venta');
			if(trim($buscador_vta_recibo_numero_punto_venta_comparador) == '') $buscador_vta_recibo_numero_punto_venta_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_vta_recibo_numero_punto_venta_comparador', Criterio::getComparadoresCmb(), $buscador_vta_recibo_numero_punto_venta_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Numero de recibo') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_recibo_numero_recibo' type='text' class='textbox' id='buscador_vta_recibo_numero_recibo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_recibo.numero_recibo')) ?>' size='22' />
        	<?php 
			$buscador_vta_recibo_numero_recibo_comparador = $criterio->getComparadorDeCampo('vta_recibo.numero_recibo');
			if(trim($buscador_vta_recibo_numero_recibo_comparador) == '') $buscador_vta_recibo_numero_recibo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_vta_recibo_numero_recibo_comparador', Criterio::getComparadoresCmb(), $buscador_vta_recibo_numero_recibo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Numero de recibo Completo') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_recibo_numero_recibo_completo' type='text' class='textbox' id='buscador_vta_recibo_numero_recibo_completo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_recibo.numero_recibo_completo')) ?>' size='22' />
        	<?php 
			$buscador_vta_recibo_numero_recibo_completo_comparador = $criterio->getComparadorDeCampo('vta_recibo.numero_recibo_completo');
			if(trim($buscador_vta_recibo_numero_recibo_completo_comparador) == '') $buscador_vta_recibo_numero_recibo_completo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_vta_recibo_numero_recibo_completo_comparador', Criterio::getComparadoresCmb(), $buscador_vta_recibo_numero_recibo_completo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Cae') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_recibo_cae' type='text' class='textbox' id='buscador_vta_recibo_cae' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_recibo.cae')) ?>' size='22' />
        	<?php 
			$buscador_vta_recibo_cae_comparador = $criterio->getComparadorDeCampo('vta_recibo.cae');
			if(trim($buscador_vta_recibo_cae_comparador) == '') $buscador_vta_recibo_cae_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_vta_recibo_cae_comparador', Criterio::getComparadoresCmb(), $buscador_vta_recibo_cae_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Fecha de Emision') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_recibo_fecha_emision' type='text' class='textbox' id='buscador_vta_recibo_fecha_emision' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : Gral::getFechaHoraToWeb($criterio->getValorDeCampo('vta_recibo.fecha_emision'))) ?>' size='15' />
					<input type='button' id='cal_buscador_vta_recibo_fecha_emision' value='...' />

					<script type='text/javascript'>
						Calendar.setup({
							inputField: 'buscador_vta_recibo_fecha_emision', ifFormat: '%d/%m/%Y', button: 'cal_buscador_vta_recibo_fecha_emision'
						});
					</script>
		
        	<?php 
			$buscador_vta_recibo_fecha_emision_comparador = $criterio->getComparadorDeCampo('vta_recibo.fecha_emision');
			if(trim($buscador_vta_recibo_fecha_emision_comparador) == '') $buscador_vta_recibo_fecha_emision_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_vta_recibo_fecha_emision_comparador', Criterio::getComparadoresCmb(), $buscador_vta_recibo_fecha_emision_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('GralTipoDocumento') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_vta_recibo_gral_tipo_documento_id', Gral::getCmbFiltro(GralTipoDocumento::getGralTipoDocumentosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_recibo.gral_tipo_documento_id'), 'textbox')?>
        	<?php 
			$buscador_vta_recibo_gral_tipo_documento_id_comparador = $criterio->getComparadorDeCampo('vta_recibo.gral_tipo_documento_id');
			if(trim($buscador_vta_recibo_gral_tipo_documento_id_comparador) == '') $buscador_vta_recibo_gral_tipo_documento_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_recibo_gral_tipo_documento_id_comparador', Criterio::getComparadoresCmb(), $buscador_vta_recibo_gral_tipo_documento_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_recibo_persona_descripcion' type='text' class='textbox' id='buscador_vta_recibo_persona_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_recibo.persona_descripcion')) ?>' size='22' />
        	<?php 
			$buscador_vta_recibo_persona_descripcion_comparador = $criterio->getComparadorDeCampo('vta_recibo.persona_descripcion');
			if(trim($buscador_vta_recibo_persona_descripcion_comparador) == '') $buscador_vta_recibo_persona_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_vta_recibo_persona_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_vta_recibo_persona_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_recibo_persona_documento' type='text' class='textbox' id='buscador_vta_recibo_persona_documento' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_recibo.persona_documento')) ?>' size='22' />
        	<?php 
			$buscador_vta_recibo_persona_documento_comparador = $criterio->getComparadorDeCampo('vta_recibo.persona_documento');
			if(trim($buscador_vta_recibo_persona_documento_comparador) == '') $buscador_vta_recibo_persona_documento_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_vta_recibo_persona_documento_comparador', Criterio::getComparadoresCmb(), $buscador_vta_recibo_persona_documento_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_recibo_persona_email' type='text' class='textbox' id='buscador_vta_recibo_persona_email' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_recibo.persona_email')) ?>' size='22' />
        	<?php 
			$buscador_vta_recibo_persona_email_comparador = $criterio->getComparadorDeCampo('vta_recibo.persona_email');
			if(trim($buscador_vta_recibo_persona_email_comparador) == '') $buscador_vta_recibo_persona_email_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_vta_recibo_persona_email_comparador', Criterio::getComparadoresCmb(), $buscador_vta_recibo_persona_email_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Razon Social') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_recibo_razon_social' type='text' class='textbox' id='buscador_vta_recibo_razon_social' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_recibo.razon_social')) ?>' size='22' />
        	<?php 
			$buscador_vta_recibo_razon_social_comparador = $criterio->getComparadorDeCampo('vta_recibo.razon_social');
			if(trim($buscador_vta_recibo_razon_social_comparador) == '') $buscador_vta_recibo_razon_social_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_vta_recibo_razon_social_comparador', Criterio::getComparadoresCmb(), $buscador_vta_recibo_razon_social_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Domicilio Legal') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_recibo_domicilio_legal' type='text' class='textbox' id='buscador_vta_recibo_domicilio_legal' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_recibo.domicilio_legal')) ?>' size='22' />
        	<?php 
			$buscador_vta_recibo_domicilio_legal_comparador = $criterio->getComparadorDeCampo('vta_recibo.domicilio_legal');
			if(trim($buscador_vta_recibo_domicilio_legal_comparador) == '') $buscador_vta_recibo_domicilio_legal_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_vta_recibo_domicilio_legal_comparador', Criterio::getComparadoresCmb(), $buscador_vta_recibo_domicilio_legal_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('CUIT') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_recibo_cuit' type='text' class='textbox' id='buscador_vta_recibo_cuit' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_recibo.cuit')) ?>' size='22' />
        	<?php 
			$buscador_vta_recibo_cuit_comparador = $criterio->getComparadorDeCampo('vta_recibo.cuit');
			if(trim($buscador_vta_recibo_cuit_comparador) == '') $buscador_vta_recibo_cuit_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_vta_recibo_cuit_comparador', Criterio::getComparadoresCmb(), $buscador_vta_recibo_cuit_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Codigo') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_recibo_codigo' type='text' class='textbox' id='buscador_vta_recibo_codigo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_recibo.codigo')) ?>' size='22' />
        	<?php 
			$buscador_vta_recibo_codigo_comparador = $criterio->getComparadorDeCampo('vta_recibo.codigo');
			if(trim($buscador_vta_recibo_codigo_comparador) == '') $buscador_vta_recibo_codigo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_vta_recibo_codigo_comparador', Criterio::getComparadoresCmb(), $buscador_vta_recibo_codigo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('VtaPresupuesto') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_vta_recibo_vta_presupuesto_id', Gral::getCmbFiltro(VtaPresupuesto::getVtaPresupuestosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_recibo.vta_presupuesto_id'), 'textbox')?>
        	<?php 
			$buscador_vta_recibo_vta_presupuesto_id_comparador = $criterio->getComparadorDeCampo('vta_recibo.vta_presupuesto_id');
			if(trim($buscador_vta_recibo_vta_presupuesto_id_comparador) == '') $buscador_vta_recibo_vta_presupuesto_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_recibo_vta_presupuesto_id_comparador', Criterio::getComparadoresCmb(), $buscador_vta_recibo_vta_presupuesto_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('VtaPreventista') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_vta_recibo_vta_preventista_id', Gral::getCmbFiltro(VtaPreventista::getVtaPreventistasCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_recibo.vta_preventista_id'), 'textbox')?>
        	<?php 
			$buscador_vta_recibo_vta_preventista_id_comparador = $criterio->getComparadorDeCampo('vta_recibo.vta_preventista_id');
			if(trim($buscador_vta_recibo_vta_preventista_id_comparador) == '') $buscador_vta_recibo_vta_preventista_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_recibo_vta_preventista_id_comparador', Criterio::getComparadoresCmb(), $buscador_vta_recibo_vta_preventista_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Anio') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_recibo_anio' type='text' class='textbox' id='buscador_vta_recibo_anio' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_recibo.anio')) ?>' size='22' />
        	<?php 
			$buscador_vta_recibo_anio_comparador = $criterio->getComparadorDeCampo('vta_recibo.anio');
			if(trim($buscador_vta_recibo_anio_comparador) == '') $buscador_vta_recibo_anio_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_vta_recibo_anio_comparador', Criterio::getComparadoresCmb(), $buscador_vta_recibo_anio_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('GralMes') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_vta_recibo_gral_mes_id', Gral::getCmbFiltro(GralMes::getGralMessCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_recibo.gral_mes_id'), 'textbox')?>
        	<?php 
			$buscador_vta_recibo_gral_mes_id_comparador = $criterio->getComparadorDeCampo('vta_recibo.gral_mes_id');
			if(trim($buscador_vta_recibo_gral_mes_id_comparador) == '') $buscador_vta_recibo_gral_mes_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_recibo_gral_mes_id_comparador', Criterio::getComparadoresCmb(), $buscador_vta_recibo_gral_mes_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('CntbDiarioAsiento') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_vta_recibo_cntb_diario_asiento_id', Gral::getCmbFiltro(CntbDiarioAsiento::getCntbDiarioAsientosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_recibo.cntb_diario_asiento_id'), 'textbox')?>
        	<?php 
			$buscador_vta_recibo_cntb_diario_asiento_id_comparador = $criterio->getComparadorDeCampo('vta_recibo.cntb_diario_asiento_id');
			if(trim($buscador_vta_recibo_cntb_diario_asiento_id_comparador) == '') $buscador_vta_recibo_cntb_diario_asiento_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_recibo_cntb_diario_asiento_id_comparador', Criterio::getComparadoresCmb(), $buscador_vta_recibo_cntb_diario_asiento_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('FndCaja') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_vta_recibo_fnd_caja_id', Gral::getCmbFiltro(FndCaja::getFndCajasCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_recibo.fnd_caja_id'), 'textbox')?>
        	<?php 
			$buscador_vta_recibo_fnd_caja_id_comparador = $criterio->getComparadorDeCampo('vta_recibo.fnd_caja_id');
			if(trim($buscador_vta_recibo_fnd_caja_id_comparador) == '') $buscador_vta_recibo_fnd_caja_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_recibo_fnd_caja_id_comparador', Criterio::getComparadoresCmb(), $buscador_vta_recibo_fnd_caja_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_recibo_observacion' type='text' class='textbox' id='buscador_vta_recibo_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_recibo.observacion')) ?>' size='22' />
        	<?php 
			$buscador_vta_recibo_observacion_comparador = $criterio->getComparadorDeCampo('vta_recibo.observacion');
			if(trim($buscador_vta_recibo_observacion_comparador) == '') $buscador_vta_recibo_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_vta_recibo_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_vta_recibo_observacion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Nota Interna') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_recibo_nota_interna' type='text' class='textbox' id='buscador_vta_recibo_nota_interna' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_recibo.nota_interna')) ?>' size='22' />
        	<?php 
			$buscador_vta_recibo_nota_interna_comparador = $criterio->getComparadorDeCampo('vta_recibo.nota_interna');
			if(trim($buscador_vta_recibo_nota_interna_comparador) == '') $buscador_vta_recibo_nota_interna_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_vta_recibo_nota_interna_comparador', Criterio::getComparadoresCmb(), $buscador_vta_recibo_nota_interna_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Nota Publica') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_recibo_nota_publica' type='text' class='textbox' id='buscador_vta_recibo_nota_publica' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_recibo.nota_publica')) ?>' size='22' />
        	<?php 
			$buscador_vta_recibo_nota_publica_comparador = $criterio->getComparadorDeCampo('vta_recibo.nota_publica');
			if(trim($buscador_vta_recibo_nota_publica_comparador) == '') $buscador_vta_recibo_nota_publica_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_vta_recibo_nota_publica_comparador', Criterio::getComparadoresCmb(), $buscador_vta_recibo_nota_publica_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Estado') ?></div>
		  <div class='dato'>
		  
		<?php Html::html_dib_select(1, 'buscador_vta_recibo_estado', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_recibo.estado'), 'textbox') ?>
		
        	<?php 
			$buscador_vta_recibo_estado_comparador = $criterio->getComparadorDeCampo('vta_recibo.estado');
			if(trim($buscador_vta_recibo_estado_comparador) == '') $buscador_vta_recibo_estado_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_recibo_estado_comparador', Criterio::getComparadoresCmb(), $buscador_vta_recibo_estado_comparador, 'textbox comparador') ?>
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

