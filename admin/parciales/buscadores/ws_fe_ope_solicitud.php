<?php
include_once "_autoload.php";
$criterio = new Criterio(WsFeOpeSolicitud::SES_CRITERIOS);
$criterio->addTabla('ws_fe_ope_solicitud');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='ws_fe_ope_solicitud'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Descripcion') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ws_fe_ope_solicitud_descripcion' type='text' class='textbox' id='buscador_ws_fe_ope_solicitud_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ws_fe_ope_solicitud.descripcion')) ?>' size='22' />
        	<?php 
			$buscador_ws_fe_ope_solicitud_descripcion_comparador = $criterio->getComparadorDeCampo('ws_fe_ope_solicitud.descripcion');
			if(trim($buscador_ws_fe_ope_solicitud_descripcion_comparador) == '') $buscador_ws_fe_ope_solicitud_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_ws_fe_ope_solicitud_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_ws_fe_ope_solicitud_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('WsFeParampuntoVenta') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_ws_fe_ope_solicitud_ws_fe_param_punto_venta_id', Gral::getCmbFiltro(WsFeParamPuntoVenta::getWsFeParamPuntoVentasCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ws_fe_ope_solicitud.ws_fe_param_punto_venta_id'), 'textbox')?>
        	<?php 
			$buscador_ws_fe_ope_solicitud_ws_fe_param_punto_venta_id_comparador = $criterio->getComparadorDeCampo('ws_fe_ope_solicitud.ws_fe_param_punto_venta_id');
			if(trim($buscador_ws_fe_ope_solicitud_ws_fe_param_punto_venta_id_comparador) == '') $buscador_ws_fe_ope_solicitud_ws_fe_param_punto_venta_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_ws_fe_ope_solicitud_ws_fe_param_punto_venta_id_comparador', Criterio::getComparadoresCmb(), $buscador_ws_fe_ope_solicitud_ws_fe_param_punto_venta_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('WsFeParamTipoComprobante') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_ws_fe_ope_solicitud_ws_fe_param_tipo_comprobante_id', Gral::getCmbFiltro(WsFeParamTipoComprobante::getWsFeParamTipoComprobantesCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ws_fe_ope_solicitud.ws_fe_param_tipo_comprobante_id'), 'textbox')?>
        	<?php 
			$buscador_ws_fe_ope_solicitud_ws_fe_param_tipo_comprobante_id_comparador = $criterio->getComparadorDeCampo('ws_fe_ope_solicitud.ws_fe_param_tipo_comprobante_id');
			if(trim($buscador_ws_fe_ope_solicitud_ws_fe_param_tipo_comprobante_id_comparador) == '') $buscador_ws_fe_ope_solicitud_ws_fe_param_tipo_comprobante_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_ws_fe_ope_solicitud_ws_fe_param_tipo_comprobante_id_comparador', Criterio::getComparadoresCmb(), $buscador_ws_fe_ope_solicitud_ws_fe_param_tipo_comprobante_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('WsFeParamTipoConcepto') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_ws_fe_ope_solicitud_ws_fe_param_tipo_concepto_id', Gral::getCmbFiltro(WsFeParamTipoConcepto::getWsFeParamTipoConceptosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ws_fe_ope_solicitud.ws_fe_param_tipo_concepto_id'), 'textbox')?>
        	<?php 
			$buscador_ws_fe_ope_solicitud_ws_fe_param_tipo_concepto_id_comparador = $criterio->getComparadorDeCampo('ws_fe_ope_solicitud.ws_fe_param_tipo_concepto_id');
			if(trim($buscador_ws_fe_ope_solicitud_ws_fe_param_tipo_concepto_id_comparador) == '') $buscador_ws_fe_ope_solicitud_ws_fe_param_tipo_concepto_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_ws_fe_ope_solicitud_ws_fe_param_tipo_concepto_id_comparador', Criterio::getComparadoresCmb(), $buscador_ws_fe_ope_solicitud_ws_fe_param_tipo_concepto_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('WsFeParamTipoDocumento') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_ws_fe_ope_solicitud_ws_fe_param_tipo_documento_id', Gral::getCmbFiltro(WsFeParamTipoDocumento::getWsFeParamTipoDocumentosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ws_fe_ope_solicitud.ws_fe_param_tipo_documento_id'), 'textbox')?>
        	<?php 
			$buscador_ws_fe_ope_solicitud_ws_fe_param_tipo_documento_id_comparador = $criterio->getComparadorDeCampo('ws_fe_ope_solicitud.ws_fe_param_tipo_documento_id');
			if(trim($buscador_ws_fe_ope_solicitud_ws_fe_param_tipo_documento_id_comparador) == '') $buscador_ws_fe_ope_solicitud_ws_fe_param_tipo_documento_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_ws_fe_ope_solicitud_ws_fe_param_tipo_documento_id_comparador', Criterio::getComparadoresCmb(), $buscador_ws_fe_ope_solicitud_ws_fe_param_tipo_documento_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('WsFeParamTipoMoneda') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_ws_fe_ope_solicitud_ws_fe_param_tipo_moneda_id', Gral::getCmbFiltro(WsFeParamTipoMoneda::getWsFeParamTipoMonedasCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ws_fe_ope_solicitud.ws_fe_param_tipo_moneda_id'), 'textbox')?>
        	<?php 
			$buscador_ws_fe_ope_solicitud_ws_fe_param_tipo_moneda_id_comparador = $criterio->getComparadorDeCampo('ws_fe_ope_solicitud.ws_fe_param_tipo_moneda_id');
			if(trim($buscador_ws_fe_ope_solicitud_ws_fe_param_tipo_moneda_id_comparador) == '') $buscador_ws_fe_ope_solicitud_ws_fe_param_tipo_moneda_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_ws_fe_ope_solicitud_ws_fe_param_tipo_moneda_id_comparador', Criterio::getComparadoresCmb(), $buscador_ws_fe_ope_solicitud_ws_fe_param_tipo_moneda_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('GralEmpresa') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_ws_fe_ope_solicitud_gral_empresa_id', Gral::getCmbFiltro(GralEmpresa::getGralEmpresasCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ws_fe_ope_solicitud.gral_empresa_id'), 'textbox')?>
        	<?php 
			$buscador_ws_fe_ope_solicitud_gral_empresa_id_comparador = $criterio->getComparadorDeCampo('ws_fe_ope_solicitud.gral_empresa_id');
			if(trim($buscador_ws_fe_ope_solicitud_gral_empresa_id_comparador) == '') $buscador_ws_fe_ope_solicitud_gral_empresa_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_ws_fe_ope_solicitud_gral_empresa_id_comparador', Criterio::getComparadoresCmb(), $buscador_ws_fe_ope_solicitud_gral_empresa_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Cantidad de Registros') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ws_fe_ope_solicitud_ws_fe_afip_cantidad_registro' type='text' class='textbox' id='buscador_ws_fe_ope_solicitud_ws_fe_afip_cantidad_registro' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ws_fe_ope_solicitud.ws_fe_afip_cantidad_registro')) ?>' size='22' />
        	<?php 
			$buscador_ws_fe_ope_solicitud_ws_fe_afip_cantidad_registro_comparador = $criterio->getComparadorDeCampo('ws_fe_ope_solicitud.ws_fe_afip_cantidad_registro');
			if(trim($buscador_ws_fe_ope_solicitud_ws_fe_afip_cantidad_registro_comparador) == '') $buscador_ws_fe_ope_solicitud_ws_fe_afip_cantidad_registro_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_ws_fe_ope_solicitud_ws_fe_afip_cantidad_registro_comparador', Criterio::getComparadoresCmb(), $buscador_ws_fe_ope_solicitud_ws_fe_afip_cantidad_registro_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Punto de Venta') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ws_fe_ope_solicitud_ws_fe_afip_punto_venta' type='text' class='textbox' id='buscador_ws_fe_ope_solicitud_ws_fe_afip_punto_venta' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ws_fe_ope_solicitud.ws_fe_afip_punto_venta')) ?>' size='22' />
        	<?php 
			$buscador_ws_fe_ope_solicitud_ws_fe_afip_punto_venta_comparador = $criterio->getComparadorDeCampo('ws_fe_ope_solicitud.ws_fe_afip_punto_venta');
			if(trim($buscador_ws_fe_ope_solicitud_ws_fe_afip_punto_venta_comparador) == '') $buscador_ws_fe_ope_solicitud_ws_fe_afip_punto_venta_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_ws_fe_ope_solicitud_ws_fe_afip_punto_venta_comparador', Criterio::getComparadoresCmb(), $buscador_ws_fe_ope_solicitud_ws_fe_afip_punto_venta_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Tipo de Comprobante') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ws_fe_ope_solicitud_ws_fe_afip_tipo_comprobante' type='text' class='textbox' id='buscador_ws_fe_ope_solicitud_ws_fe_afip_tipo_comprobante' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ws_fe_ope_solicitud.ws_fe_afip_tipo_comprobante')) ?>' size='22' />
        	<?php 
			$buscador_ws_fe_ope_solicitud_ws_fe_afip_tipo_comprobante_comparador = $criterio->getComparadorDeCampo('ws_fe_ope_solicitud.ws_fe_afip_tipo_comprobante');
			if(trim($buscador_ws_fe_ope_solicitud_ws_fe_afip_tipo_comprobante_comparador) == '') $buscador_ws_fe_ope_solicitud_ws_fe_afip_tipo_comprobante_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_ws_fe_ope_solicitud_ws_fe_afip_tipo_comprobante_comparador', Criterio::getComparadoresCmb(), $buscador_ws_fe_ope_solicitud_ws_fe_afip_tipo_comprobante_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Tipo de Concepto') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ws_fe_ope_solicitud_ws_fe_afip_tipo_concepto' type='text' class='textbox' id='buscador_ws_fe_ope_solicitud_ws_fe_afip_tipo_concepto' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ws_fe_ope_solicitud.ws_fe_afip_tipo_concepto')) ?>' size='22' />
        	<?php 
			$buscador_ws_fe_ope_solicitud_ws_fe_afip_tipo_concepto_comparador = $criterio->getComparadorDeCampo('ws_fe_ope_solicitud.ws_fe_afip_tipo_concepto');
			if(trim($buscador_ws_fe_ope_solicitud_ws_fe_afip_tipo_concepto_comparador) == '') $buscador_ws_fe_ope_solicitud_ws_fe_afip_tipo_concepto_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_ws_fe_ope_solicitud_ws_fe_afip_tipo_concepto_comparador', Criterio::getComparadoresCmb(), $buscador_ws_fe_ope_solicitud_ws_fe_afip_tipo_concepto_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Tipo de Documento') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ws_fe_ope_solicitud_ws_fe_afip_tipo_documento' type='text' class='textbox' id='buscador_ws_fe_ope_solicitud_ws_fe_afip_tipo_documento' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ws_fe_ope_solicitud.ws_fe_afip_tipo_documento')) ?>' size='22' />
        	<?php 
			$buscador_ws_fe_ope_solicitud_ws_fe_afip_tipo_documento_comparador = $criterio->getComparadorDeCampo('ws_fe_ope_solicitud.ws_fe_afip_tipo_documento');
			if(trim($buscador_ws_fe_ope_solicitud_ws_fe_afip_tipo_documento_comparador) == '') $buscador_ws_fe_ope_solicitud_ws_fe_afip_tipo_documento_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_ws_fe_ope_solicitud_ws_fe_afip_tipo_documento_comparador', Criterio::getComparadoresCmb(), $buscador_ws_fe_ope_solicitud_ws_fe_afip_tipo_documento_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Numero de Documento') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ws_fe_ope_solicitud_ws_fe_afip_numero_documento' type='text' class='textbox' id='buscador_ws_fe_ope_solicitud_ws_fe_afip_numero_documento' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ws_fe_ope_solicitud.ws_fe_afip_numero_documento')) ?>' size='22' />
        	<?php 
			$buscador_ws_fe_ope_solicitud_ws_fe_afip_numero_documento_comparador = $criterio->getComparadorDeCampo('ws_fe_ope_solicitud.ws_fe_afip_numero_documento');
			if(trim($buscador_ws_fe_ope_solicitud_ws_fe_afip_numero_documento_comparador) == '') $buscador_ws_fe_ope_solicitud_ws_fe_afip_numero_documento_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_ws_fe_ope_solicitud_ws_fe_afip_numero_documento_comparador', Criterio::getComparadoresCmb(), $buscador_ws_fe_ope_solicitud_ws_fe_afip_numero_documento_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Comprobante Desde') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ws_fe_ope_solicitud_ws_fe_afip_comprobante_desde' type='text' class='textbox' id='buscador_ws_fe_ope_solicitud_ws_fe_afip_comprobante_desde' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ws_fe_ope_solicitud.ws_fe_afip_comprobante_desde')) ?>' size='22' />
        	<?php 
			$buscador_ws_fe_ope_solicitud_ws_fe_afip_comprobante_desde_comparador = $criterio->getComparadorDeCampo('ws_fe_ope_solicitud.ws_fe_afip_comprobante_desde');
			if(trim($buscador_ws_fe_ope_solicitud_ws_fe_afip_comprobante_desde_comparador) == '') $buscador_ws_fe_ope_solicitud_ws_fe_afip_comprobante_desde_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_ws_fe_ope_solicitud_ws_fe_afip_comprobante_desde_comparador', Criterio::getComparadoresCmb(), $buscador_ws_fe_ope_solicitud_ws_fe_afip_comprobante_desde_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Comprobante Hasta') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ws_fe_ope_solicitud_ws_fe_afip_comprobante_hasta' type='text' class='textbox' id='buscador_ws_fe_ope_solicitud_ws_fe_afip_comprobante_hasta' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ws_fe_ope_solicitud.ws_fe_afip_comprobante_hasta')) ?>' size='22' />
        	<?php 
			$buscador_ws_fe_ope_solicitud_ws_fe_afip_comprobante_hasta_comparador = $criterio->getComparadorDeCampo('ws_fe_ope_solicitud.ws_fe_afip_comprobante_hasta');
			if(trim($buscador_ws_fe_ope_solicitud_ws_fe_afip_comprobante_hasta_comparador) == '') $buscador_ws_fe_ope_solicitud_ws_fe_afip_comprobante_hasta_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_ws_fe_ope_solicitud_ws_fe_afip_comprobante_hasta_comparador', Criterio::getComparadoresCmb(), $buscador_ws_fe_ope_solicitud_ws_fe_afip_comprobante_hasta_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Comprobante Fecha') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ws_fe_ope_solicitud_ws_fe_afip_comprobante_fecha' type='text' class='textbox' id='buscador_ws_fe_ope_solicitud_ws_fe_afip_comprobante_fecha' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ws_fe_ope_solicitud.ws_fe_afip_comprobante_fecha')) ?>' size='22' />
        	<?php 
			$buscador_ws_fe_ope_solicitud_ws_fe_afip_comprobante_fecha_comparador = $criterio->getComparadorDeCampo('ws_fe_ope_solicitud.ws_fe_afip_comprobante_fecha');
			if(trim($buscador_ws_fe_ope_solicitud_ws_fe_afip_comprobante_fecha_comparador) == '') $buscador_ws_fe_ope_solicitud_ws_fe_afip_comprobante_fecha_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_ws_fe_ope_solicitud_ws_fe_afip_comprobante_fecha_comparador', Criterio::getComparadoresCmb(), $buscador_ws_fe_ope_solicitud_ws_fe_afip_comprobante_fecha_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Importe Total') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ws_fe_ope_solicitud_ws_fe_afip_importe_total' type='text' class='textbox' id='buscador_ws_fe_ope_solicitud_ws_fe_afip_importe_total' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ws_fe_ope_solicitud.ws_fe_afip_importe_total')) ?>' size='22' />
        	<?php 
			$buscador_ws_fe_ope_solicitud_ws_fe_afip_importe_total_comparador = $criterio->getComparadorDeCampo('ws_fe_ope_solicitud.ws_fe_afip_importe_total');
			if(trim($buscador_ws_fe_ope_solicitud_ws_fe_afip_importe_total_comparador) == '') $buscador_ws_fe_ope_solicitud_ws_fe_afip_importe_total_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_ws_fe_ope_solicitud_ws_fe_afip_importe_total_comparador', Criterio::getComparadoresCmb(), $buscador_ws_fe_ope_solicitud_ws_fe_afip_importe_total_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Importe Total Concepto') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ws_fe_ope_solicitud_ws_fe_afip_importe_total_concepto' type='text' class='textbox' id='buscador_ws_fe_ope_solicitud_ws_fe_afip_importe_total_concepto' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ws_fe_ope_solicitud.ws_fe_afip_importe_total_concepto')) ?>' size='22' />
        	<?php 
			$buscador_ws_fe_ope_solicitud_ws_fe_afip_importe_total_concepto_comparador = $criterio->getComparadorDeCampo('ws_fe_ope_solicitud.ws_fe_afip_importe_total_concepto');
			if(trim($buscador_ws_fe_ope_solicitud_ws_fe_afip_importe_total_concepto_comparador) == '') $buscador_ws_fe_ope_solicitud_ws_fe_afip_importe_total_concepto_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_ws_fe_ope_solicitud_ws_fe_afip_importe_total_concepto_comparador', Criterio::getComparadoresCmb(), $buscador_ws_fe_ope_solicitud_ws_fe_afip_importe_total_concepto_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Importe Neto') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ws_fe_ope_solicitud_ws_fe_afip_importe_neto' type='text' class='textbox' id='buscador_ws_fe_ope_solicitud_ws_fe_afip_importe_neto' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ws_fe_ope_solicitud.ws_fe_afip_importe_neto')) ?>' size='22' />
        	<?php 
			$buscador_ws_fe_ope_solicitud_ws_fe_afip_importe_neto_comparador = $criterio->getComparadorDeCampo('ws_fe_ope_solicitud.ws_fe_afip_importe_neto');
			if(trim($buscador_ws_fe_ope_solicitud_ws_fe_afip_importe_neto_comparador) == '') $buscador_ws_fe_ope_solicitud_ws_fe_afip_importe_neto_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_ws_fe_ope_solicitud_ws_fe_afip_importe_neto_comparador', Criterio::getComparadoresCmb(), $buscador_ws_fe_ope_solicitud_ws_fe_afip_importe_neto_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Importe Operacion Exenta') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ws_fe_ope_solicitud_ws_fe_afip_importe_operacion_exenta' type='text' class='textbox' id='buscador_ws_fe_ope_solicitud_ws_fe_afip_importe_operacion_exenta' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ws_fe_ope_solicitud.ws_fe_afip_importe_operacion_exenta')) ?>' size='22' />
        	<?php 
			$buscador_ws_fe_ope_solicitud_ws_fe_afip_importe_operacion_exenta_comparador = $criterio->getComparadorDeCampo('ws_fe_ope_solicitud.ws_fe_afip_importe_operacion_exenta');
			if(trim($buscador_ws_fe_ope_solicitud_ws_fe_afip_importe_operacion_exenta_comparador) == '') $buscador_ws_fe_ope_solicitud_ws_fe_afip_importe_operacion_exenta_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_ws_fe_ope_solicitud_ws_fe_afip_importe_operacion_exenta_comparador', Criterio::getComparadoresCmb(), $buscador_ws_fe_ope_solicitud_ws_fe_afip_importe_operacion_exenta_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Importe Tributo') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ws_fe_ope_solicitud_ws_fe_afip_importe_tributo' type='text' class='textbox' id='buscador_ws_fe_ope_solicitud_ws_fe_afip_importe_tributo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ws_fe_ope_solicitud.ws_fe_afip_importe_tributo')) ?>' size='22' />
        	<?php 
			$buscador_ws_fe_ope_solicitud_ws_fe_afip_importe_tributo_comparador = $criterio->getComparadorDeCampo('ws_fe_ope_solicitud.ws_fe_afip_importe_tributo');
			if(trim($buscador_ws_fe_ope_solicitud_ws_fe_afip_importe_tributo_comparador) == '') $buscador_ws_fe_ope_solicitud_ws_fe_afip_importe_tributo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_ws_fe_ope_solicitud_ws_fe_afip_importe_tributo_comparador', Criterio::getComparadoresCmb(), $buscador_ws_fe_ope_solicitud_ws_fe_afip_importe_tributo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Importe Iva') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ws_fe_ope_solicitud_ws_fe_afip_importe_iva' type='text' class='textbox' id='buscador_ws_fe_ope_solicitud_ws_fe_afip_importe_iva' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ws_fe_ope_solicitud.ws_fe_afip_importe_iva')) ?>' size='22' />
        	<?php 
			$buscador_ws_fe_ope_solicitud_ws_fe_afip_importe_iva_comparador = $criterio->getComparadorDeCampo('ws_fe_ope_solicitud.ws_fe_afip_importe_iva');
			if(trim($buscador_ws_fe_ope_solicitud_ws_fe_afip_importe_iva_comparador) == '') $buscador_ws_fe_ope_solicitud_ws_fe_afip_importe_iva_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_ws_fe_ope_solicitud_ws_fe_afip_importe_iva_comparador', Criterio::getComparadoresCmb(), $buscador_ws_fe_ope_solicitud_ws_fe_afip_importe_iva_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Fecha de Servicio Desde') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ws_fe_ope_solicitud_ws_fe_afip_fecha_servicio_desde' type='text' class='textbox' id='buscador_ws_fe_ope_solicitud_ws_fe_afip_fecha_servicio_desde' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ws_fe_ope_solicitud.ws_fe_afip_fecha_servicio_desde')) ?>' size='22' />
        	<?php 
			$buscador_ws_fe_ope_solicitud_ws_fe_afip_fecha_servicio_desde_comparador = $criterio->getComparadorDeCampo('ws_fe_ope_solicitud.ws_fe_afip_fecha_servicio_desde');
			if(trim($buscador_ws_fe_ope_solicitud_ws_fe_afip_fecha_servicio_desde_comparador) == '') $buscador_ws_fe_ope_solicitud_ws_fe_afip_fecha_servicio_desde_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_ws_fe_ope_solicitud_ws_fe_afip_fecha_servicio_desde_comparador', Criterio::getComparadoresCmb(), $buscador_ws_fe_ope_solicitud_ws_fe_afip_fecha_servicio_desde_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Fecha de Servicio Hasta') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ws_fe_ope_solicitud_ws_fe_afip_fecha_servicio_hasta' type='text' class='textbox' id='buscador_ws_fe_ope_solicitud_ws_fe_afip_fecha_servicio_hasta' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ws_fe_ope_solicitud.ws_fe_afip_fecha_servicio_hasta')) ?>' size='22' />
        	<?php 
			$buscador_ws_fe_ope_solicitud_ws_fe_afip_fecha_servicio_hasta_comparador = $criterio->getComparadorDeCampo('ws_fe_ope_solicitud.ws_fe_afip_fecha_servicio_hasta');
			if(trim($buscador_ws_fe_ope_solicitud_ws_fe_afip_fecha_servicio_hasta_comparador) == '') $buscador_ws_fe_ope_solicitud_ws_fe_afip_fecha_servicio_hasta_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_ws_fe_ope_solicitud_ws_fe_afip_fecha_servicio_hasta_comparador', Criterio::getComparadoresCmb(), $buscador_ws_fe_ope_solicitud_ws_fe_afip_fecha_servicio_hasta_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Fecha de Vencimiento de Pago') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ws_fe_ope_solicitud_ws_fe_afip_vencimiento_pago' type='text' class='textbox' id='buscador_ws_fe_ope_solicitud_ws_fe_afip_vencimiento_pago' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ws_fe_ope_solicitud.ws_fe_afip_vencimiento_pago')) ?>' size='22' />
        	<?php 
			$buscador_ws_fe_ope_solicitud_ws_fe_afip_vencimiento_pago_comparador = $criterio->getComparadorDeCampo('ws_fe_ope_solicitud.ws_fe_afip_vencimiento_pago');
			if(trim($buscador_ws_fe_ope_solicitud_ws_fe_afip_vencimiento_pago_comparador) == '') $buscador_ws_fe_ope_solicitud_ws_fe_afip_vencimiento_pago_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_ws_fe_ope_solicitud_ws_fe_afip_vencimiento_pago_comparador', Criterio::getComparadoresCmb(), $buscador_ws_fe_ope_solicitud_ws_fe_afip_vencimiento_pago_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Tipo de Moneda') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ws_fe_ope_solicitud_ws_fe_afip_tipo_moneda' type='text' class='textbox' id='buscador_ws_fe_ope_solicitud_ws_fe_afip_tipo_moneda' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ws_fe_ope_solicitud.ws_fe_afip_tipo_moneda')) ?>' size='22' />
        	<?php 
			$buscador_ws_fe_ope_solicitud_ws_fe_afip_tipo_moneda_comparador = $criterio->getComparadorDeCampo('ws_fe_ope_solicitud.ws_fe_afip_tipo_moneda');
			if(trim($buscador_ws_fe_ope_solicitud_ws_fe_afip_tipo_moneda_comparador) == '') $buscador_ws_fe_ope_solicitud_ws_fe_afip_tipo_moneda_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_ws_fe_ope_solicitud_ws_fe_afip_tipo_moneda_comparador', Criterio::getComparadoresCmb(), $buscador_ws_fe_ope_solicitud_ws_fe_afip_tipo_moneda_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Cotizacion de Moneda') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ws_fe_ope_solicitud_ws_fe_afip_cotizacion_moneda' type='text' class='textbox' id='buscador_ws_fe_ope_solicitud_ws_fe_afip_cotizacion_moneda' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ws_fe_ope_solicitud.ws_fe_afip_cotizacion_moneda')) ?>' size='22' />
        	<?php 
			$buscador_ws_fe_ope_solicitud_ws_fe_afip_cotizacion_moneda_comparador = $criterio->getComparadorDeCampo('ws_fe_ope_solicitud.ws_fe_afip_cotizacion_moneda');
			if(trim($buscador_ws_fe_ope_solicitud_ws_fe_afip_cotizacion_moneda_comparador) == '') $buscador_ws_fe_ope_solicitud_ws_fe_afip_cotizacion_moneda_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_ws_fe_ope_solicitud_ws_fe_afip_cotizacion_moneda_comparador', Criterio::getComparadoresCmb(), $buscador_ws_fe_ope_solicitud_ws_fe_afip_cotizacion_moneda_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ws_fe_ope_solicitud_observacion' type='text' class='textbox' id='buscador_ws_fe_ope_solicitud_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ws_fe_ope_solicitud.observacion')) ?>' size='22' />
        	<?php 
			$buscador_ws_fe_ope_solicitud_observacion_comparador = $criterio->getComparadorDeCampo('ws_fe_ope_solicitud.observacion');
			if(trim($buscador_ws_fe_ope_solicitud_observacion_comparador) == '') $buscador_ws_fe_ope_solicitud_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_ws_fe_ope_solicitud_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_ws_fe_ope_solicitud_observacion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Estado') ?></div>
		  <div class='dato'>
		  
		<?php Html::html_dib_select(1, 'buscador_ws_fe_ope_solicitud_estado', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ws_fe_ope_solicitud.estado'), 'textbox') ?>
		
        	<?php 
			$buscador_ws_fe_ope_solicitud_estado_comparador = $criterio->getComparadorDeCampo('ws_fe_ope_solicitud.estado');
			if(trim($buscador_ws_fe_ope_solicitud_estado_comparador) == '') $buscador_ws_fe_ope_solicitud_estado_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_ws_fe_ope_solicitud_estado_comparador', Criterio::getComparadoresCmb(), $buscador_ws_fe_ope_solicitud_estado_comparador, 'textbox comparador') ?>
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

