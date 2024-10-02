<?php
include_once "_autoload.php";
$criterio = new Criterio(WsFeOpeSolicitudRespuesta::SES_CRITERIOS);
$criterio->addTabla('ws_fe_ope_solicitud_respuesta');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='ws_fe_ope_solicitud_respuesta'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Descripcion') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ws_fe_ope_solicitud_respuesta_descripcion' type='text' class='textbox' id='buscador_ws_fe_ope_solicitud_respuesta_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ws_fe_ope_solicitud_respuesta.descripcion')) ?>' size='22' />
        	<?php 
			$buscador_ws_fe_ope_solicitud_respuesta_descripcion_comparador = $criterio->getComparadorDeCampo('ws_fe_ope_solicitud_respuesta.descripcion');
			if(trim($buscador_ws_fe_ope_solicitud_respuesta_descripcion_comparador) == '') $buscador_ws_fe_ope_solicitud_respuesta_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_ws_fe_ope_solicitud_respuesta_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_ws_fe_ope_solicitud_respuesta_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('WsFeSolicitud') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_ws_fe_ope_solicitud_respuesta_ws_fe_ope_solicitud_id', Gral::getCmbFiltro(WsFeOpeSolicitud::getWsFeOpeSolicitudsCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ws_fe_ope_solicitud_respuesta.ws_fe_ope_solicitud_id'), 'textbox')?>
        	<?php 
			$buscador_ws_fe_ope_solicitud_respuesta_ws_fe_ope_solicitud_id_comparador = $criterio->getComparadorDeCampo('ws_fe_ope_solicitud_respuesta.ws_fe_ope_solicitud_id');
			if(trim($buscador_ws_fe_ope_solicitud_respuesta_ws_fe_ope_solicitud_id_comparador) == '') $buscador_ws_fe_ope_solicitud_respuesta_ws_fe_ope_solicitud_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_ws_fe_ope_solicitud_respuesta_ws_fe_ope_solicitud_id_comparador', Criterio::getComparadoresCmb(), $buscador_ws_fe_ope_solicitud_respuesta_ws_fe_ope_solicitud_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Cuit') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ws_fe_ope_solicitud_respuesta_ws_fe_afip_cuit' type='text' class='textbox' id='buscador_ws_fe_ope_solicitud_respuesta_ws_fe_afip_cuit' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ws_fe_ope_solicitud_respuesta.ws_fe_afip_cuit')) ?>' size='22' />
        	<?php 
			$buscador_ws_fe_ope_solicitud_respuesta_ws_fe_afip_cuit_comparador = $criterio->getComparadorDeCampo('ws_fe_ope_solicitud_respuesta.ws_fe_afip_cuit');
			if(trim($buscador_ws_fe_ope_solicitud_respuesta_ws_fe_afip_cuit_comparador) == '') $buscador_ws_fe_ope_solicitud_respuesta_ws_fe_afip_cuit_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_ws_fe_ope_solicitud_respuesta_ws_fe_afip_cuit_comparador', Criterio::getComparadoresCmb(), $buscador_ws_fe_ope_solicitud_respuesta_ws_fe_afip_cuit_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Punto de Venta') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ws_fe_ope_solicitud_respuesta_ws_fe_afip_punto_venta' type='text' class='textbox' id='buscador_ws_fe_ope_solicitud_respuesta_ws_fe_afip_punto_venta' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ws_fe_ope_solicitud_respuesta.ws_fe_afip_punto_venta')) ?>' size='22' />
        	<?php 
			$buscador_ws_fe_ope_solicitud_respuesta_ws_fe_afip_punto_venta_comparador = $criterio->getComparadorDeCampo('ws_fe_ope_solicitud_respuesta.ws_fe_afip_punto_venta');
			if(trim($buscador_ws_fe_ope_solicitud_respuesta_ws_fe_afip_punto_venta_comparador) == '') $buscador_ws_fe_ope_solicitud_respuesta_ws_fe_afip_punto_venta_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_ws_fe_ope_solicitud_respuesta_ws_fe_afip_punto_venta_comparador', Criterio::getComparadoresCmb(), $buscador_ws_fe_ope_solicitud_respuesta_ws_fe_afip_punto_venta_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Tipo de Comprobante') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ws_fe_ope_solicitud_respuesta_ws_fe_afip_tipo_comprobante' type='text' class='textbox' id='buscador_ws_fe_ope_solicitud_respuesta_ws_fe_afip_tipo_comprobante' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ws_fe_ope_solicitud_respuesta.ws_fe_afip_tipo_comprobante')) ?>' size='22' />
        	<?php 
			$buscador_ws_fe_ope_solicitud_respuesta_ws_fe_afip_tipo_comprobante_comparador = $criterio->getComparadorDeCampo('ws_fe_ope_solicitud_respuesta.ws_fe_afip_tipo_comprobante');
			if(trim($buscador_ws_fe_ope_solicitud_respuesta_ws_fe_afip_tipo_comprobante_comparador) == '') $buscador_ws_fe_ope_solicitud_respuesta_ws_fe_afip_tipo_comprobante_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_ws_fe_ope_solicitud_respuesta_ws_fe_afip_tipo_comprobante_comparador', Criterio::getComparadoresCmb(), $buscador_ws_fe_ope_solicitud_respuesta_ws_fe_afip_tipo_comprobante_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Fecha de Proceso') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ws_fe_ope_solicitud_respuesta_ws_fe_afip_fecha_proceso' type='text' class='textbox' id='buscador_ws_fe_ope_solicitud_respuesta_ws_fe_afip_fecha_proceso' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ws_fe_ope_solicitud_respuesta.ws_fe_afip_fecha_proceso')) ?>' size='22' />
        	<?php 
			$buscador_ws_fe_ope_solicitud_respuesta_ws_fe_afip_fecha_proceso_comparador = $criterio->getComparadorDeCampo('ws_fe_ope_solicitud_respuesta.ws_fe_afip_fecha_proceso');
			if(trim($buscador_ws_fe_ope_solicitud_respuesta_ws_fe_afip_fecha_proceso_comparador) == '') $buscador_ws_fe_ope_solicitud_respuesta_ws_fe_afip_fecha_proceso_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_ws_fe_ope_solicitud_respuesta_ws_fe_afip_fecha_proceso_comparador', Criterio::getComparadoresCmb(), $buscador_ws_fe_ope_solicitud_respuesta_ws_fe_afip_fecha_proceso_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Cantidad de Registros') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ws_fe_ope_solicitud_respuesta_ws_fe_afip_cantidad_registro' type='text' class='textbox' id='buscador_ws_fe_ope_solicitud_respuesta_ws_fe_afip_cantidad_registro' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ws_fe_ope_solicitud_respuesta.ws_fe_afip_cantidad_registro')) ?>' size='22' />
        	<?php 
			$buscador_ws_fe_ope_solicitud_respuesta_ws_fe_afip_cantidad_registro_comparador = $criterio->getComparadorDeCampo('ws_fe_ope_solicitud_respuesta.ws_fe_afip_cantidad_registro');
			if(trim($buscador_ws_fe_ope_solicitud_respuesta_ws_fe_afip_cantidad_registro_comparador) == '') $buscador_ws_fe_ope_solicitud_respuesta_ws_fe_afip_cantidad_registro_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_ws_fe_ope_solicitud_respuesta_ws_fe_afip_cantidad_registro_comparador', Criterio::getComparadoresCmb(), $buscador_ws_fe_ope_solicitud_respuesta_ws_fe_afip_cantidad_registro_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Resultado de la Cabecera') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ws_fe_ope_solicitud_respuesta_ws_fe_afip_resultado_cabecera' type='text' class='textbox' id='buscador_ws_fe_ope_solicitud_respuesta_ws_fe_afip_resultado_cabecera' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ws_fe_ope_solicitud_respuesta.ws_fe_afip_resultado_cabecera')) ?>' size='22' />
        	<?php 
			$buscador_ws_fe_ope_solicitud_respuesta_ws_fe_afip_resultado_cabecera_comparador = $criterio->getComparadorDeCampo('ws_fe_ope_solicitud_respuesta.ws_fe_afip_resultado_cabecera');
			if(trim($buscador_ws_fe_ope_solicitud_respuesta_ws_fe_afip_resultado_cabecera_comparador) == '') $buscador_ws_fe_ope_solicitud_respuesta_ws_fe_afip_resultado_cabecera_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_ws_fe_ope_solicitud_respuesta_ws_fe_afip_resultado_cabecera_comparador', Criterio::getComparadoresCmb(), $buscador_ws_fe_ope_solicitud_respuesta_ws_fe_afip_resultado_cabecera_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Reproceso') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ws_fe_ope_solicitud_respuesta_ws_fe_afip_reproceso' type='text' class='textbox' id='buscador_ws_fe_ope_solicitud_respuesta_ws_fe_afip_reproceso' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ws_fe_ope_solicitud_respuesta.ws_fe_afip_reproceso')) ?>' size='22' />
        	<?php 
			$buscador_ws_fe_ope_solicitud_respuesta_ws_fe_afip_reproceso_comparador = $criterio->getComparadorDeCampo('ws_fe_ope_solicitud_respuesta.ws_fe_afip_reproceso');
			if(trim($buscador_ws_fe_ope_solicitud_respuesta_ws_fe_afip_reproceso_comparador) == '') $buscador_ws_fe_ope_solicitud_respuesta_ws_fe_afip_reproceso_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_ws_fe_ope_solicitud_respuesta_ws_fe_afip_reproceso_comparador', Criterio::getComparadoresCmb(), $buscador_ws_fe_ope_solicitud_respuesta_ws_fe_afip_reproceso_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Tipo de Concepto') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ws_fe_ope_solicitud_respuesta_ws_fe_afip_tipo_concepto' type='text' class='textbox' id='buscador_ws_fe_ope_solicitud_respuesta_ws_fe_afip_tipo_concepto' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ws_fe_ope_solicitud_respuesta.ws_fe_afip_tipo_concepto')) ?>' size='22' />
        	<?php 
			$buscador_ws_fe_ope_solicitud_respuesta_ws_fe_afip_tipo_concepto_comparador = $criterio->getComparadorDeCampo('ws_fe_ope_solicitud_respuesta.ws_fe_afip_tipo_concepto');
			if(trim($buscador_ws_fe_ope_solicitud_respuesta_ws_fe_afip_tipo_concepto_comparador) == '') $buscador_ws_fe_ope_solicitud_respuesta_ws_fe_afip_tipo_concepto_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_ws_fe_ope_solicitud_respuesta_ws_fe_afip_tipo_concepto_comparador', Criterio::getComparadoresCmb(), $buscador_ws_fe_ope_solicitud_respuesta_ws_fe_afip_tipo_concepto_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Tipo de Documento') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ws_fe_ope_solicitud_respuesta_ws_fe_afip_tipo_documento' type='text' class='textbox' id='buscador_ws_fe_ope_solicitud_respuesta_ws_fe_afip_tipo_documento' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ws_fe_ope_solicitud_respuesta.ws_fe_afip_tipo_documento')) ?>' size='22' />
        	<?php 
			$buscador_ws_fe_ope_solicitud_respuesta_ws_fe_afip_tipo_documento_comparador = $criterio->getComparadorDeCampo('ws_fe_ope_solicitud_respuesta.ws_fe_afip_tipo_documento');
			if(trim($buscador_ws_fe_ope_solicitud_respuesta_ws_fe_afip_tipo_documento_comparador) == '') $buscador_ws_fe_ope_solicitud_respuesta_ws_fe_afip_tipo_documento_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_ws_fe_ope_solicitud_respuesta_ws_fe_afip_tipo_documento_comparador', Criterio::getComparadoresCmb(), $buscador_ws_fe_ope_solicitud_respuesta_ws_fe_afip_tipo_documento_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Numero de Documento') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ws_fe_ope_solicitud_respuesta_ws_fe_afip_numero_documento' type='text' class='textbox' id='buscador_ws_fe_ope_solicitud_respuesta_ws_fe_afip_numero_documento' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ws_fe_ope_solicitud_respuesta.ws_fe_afip_numero_documento')) ?>' size='22' />
        	<?php 
			$buscador_ws_fe_ope_solicitud_respuesta_ws_fe_afip_numero_documento_comparador = $criterio->getComparadorDeCampo('ws_fe_ope_solicitud_respuesta.ws_fe_afip_numero_documento');
			if(trim($buscador_ws_fe_ope_solicitud_respuesta_ws_fe_afip_numero_documento_comparador) == '') $buscador_ws_fe_ope_solicitud_respuesta_ws_fe_afip_numero_documento_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_ws_fe_ope_solicitud_respuesta_ws_fe_afip_numero_documento_comparador', Criterio::getComparadoresCmb(), $buscador_ws_fe_ope_solicitud_respuesta_ws_fe_afip_numero_documento_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Comprobante Desde') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ws_fe_ope_solicitud_respuesta_ws_fe_afip_comprobante_desde' type='text' class='textbox' id='buscador_ws_fe_ope_solicitud_respuesta_ws_fe_afip_comprobante_desde' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ws_fe_ope_solicitud_respuesta.ws_fe_afip_comprobante_desde')) ?>' size='22' />
        	<?php 
			$buscador_ws_fe_ope_solicitud_respuesta_ws_fe_afip_comprobante_desde_comparador = $criterio->getComparadorDeCampo('ws_fe_ope_solicitud_respuesta.ws_fe_afip_comprobante_desde');
			if(trim($buscador_ws_fe_ope_solicitud_respuesta_ws_fe_afip_comprobante_desde_comparador) == '') $buscador_ws_fe_ope_solicitud_respuesta_ws_fe_afip_comprobante_desde_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_ws_fe_ope_solicitud_respuesta_ws_fe_afip_comprobante_desde_comparador', Criterio::getComparadoresCmb(), $buscador_ws_fe_ope_solicitud_respuesta_ws_fe_afip_comprobante_desde_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Comprobante Hasta') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ws_fe_ope_solicitud_respuesta_ws_fe_afip_comprobante_hasta' type='text' class='textbox' id='buscador_ws_fe_ope_solicitud_respuesta_ws_fe_afip_comprobante_hasta' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ws_fe_ope_solicitud_respuesta.ws_fe_afip_comprobante_hasta')) ?>' size='22' />
        	<?php 
			$buscador_ws_fe_ope_solicitud_respuesta_ws_fe_afip_comprobante_hasta_comparador = $criterio->getComparadorDeCampo('ws_fe_ope_solicitud_respuesta.ws_fe_afip_comprobante_hasta');
			if(trim($buscador_ws_fe_ope_solicitud_respuesta_ws_fe_afip_comprobante_hasta_comparador) == '') $buscador_ws_fe_ope_solicitud_respuesta_ws_fe_afip_comprobante_hasta_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_ws_fe_ope_solicitud_respuesta_ws_fe_afip_comprobante_hasta_comparador', Criterio::getComparadoresCmb(), $buscador_ws_fe_ope_solicitud_respuesta_ws_fe_afip_comprobante_hasta_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Comprobante Fecha') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ws_fe_ope_solicitud_respuesta_ws_fe_afip_comprobante_fecha' type='text' class='textbox' id='buscador_ws_fe_ope_solicitud_respuesta_ws_fe_afip_comprobante_fecha' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ws_fe_ope_solicitud_respuesta.ws_fe_afip_comprobante_fecha')) ?>' size='22' />
        	<?php 
			$buscador_ws_fe_ope_solicitud_respuesta_ws_fe_afip_comprobante_fecha_comparador = $criterio->getComparadorDeCampo('ws_fe_ope_solicitud_respuesta.ws_fe_afip_comprobante_fecha');
			if(trim($buscador_ws_fe_ope_solicitud_respuesta_ws_fe_afip_comprobante_fecha_comparador) == '') $buscador_ws_fe_ope_solicitud_respuesta_ws_fe_afip_comprobante_fecha_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_ws_fe_ope_solicitud_respuesta_ws_fe_afip_comprobante_fecha_comparador', Criterio::getComparadoresCmb(), $buscador_ws_fe_ope_solicitud_respuesta_ws_fe_afip_comprobante_fecha_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Resultado del Detalle') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ws_fe_ope_solicitud_respuesta_ws_fe_afip_resultado_detalle' type='text' class='textbox' id='buscador_ws_fe_ope_solicitud_respuesta_ws_fe_afip_resultado_detalle' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ws_fe_ope_solicitud_respuesta.ws_fe_afip_resultado_detalle')) ?>' size='22' />
        	<?php 
			$buscador_ws_fe_ope_solicitud_respuesta_ws_fe_afip_resultado_detalle_comparador = $criterio->getComparadorDeCampo('ws_fe_ope_solicitud_respuesta.ws_fe_afip_resultado_detalle');
			if(trim($buscador_ws_fe_ope_solicitud_respuesta_ws_fe_afip_resultado_detalle_comparador) == '') $buscador_ws_fe_ope_solicitud_respuesta_ws_fe_afip_resultado_detalle_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_ws_fe_ope_solicitud_respuesta_ws_fe_afip_resultado_detalle_comparador', Criterio::getComparadoresCmb(), $buscador_ws_fe_ope_solicitud_respuesta_ws_fe_afip_resultado_detalle_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Cae') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ws_fe_ope_solicitud_respuesta_ws_fe_afip_cae' type='text' class='textbox' id='buscador_ws_fe_ope_solicitud_respuesta_ws_fe_afip_cae' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ws_fe_ope_solicitud_respuesta.ws_fe_afip_cae')) ?>' size='22' />
        	<?php 
			$buscador_ws_fe_ope_solicitud_respuesta_ws_fe_afip_cae_comparador = $criterio->getComparadorDeCampo('ws_fe_ope_solicitud_respuesta.ws_fe_afip_cae');
			if(trim($buscador_ws_fe_ope_solicitud_respuesta_ws_fe_afip_cae_comparador) == '') $buscador_ws_fe_ope_solicitud_respuesta_ws_fe_afip_cae_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_ws_fe_ope_solicitud_respuesta_ws_fe_afip_cae_comparador', Criterio::getComparadoresCmb(), $buscador_ws_fe_ope_solicitud_respuesta_ws_fe_afip_cae_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Fecha de Vencimiento del CAE') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ws_fe_ope_solicitud_respuesta_ws_fe_afip_cae_fecha_vencimiento' type='text' class='textbox' id='buscador_ws_fe_ope_solicitud_respuesta_ws_fe_afip_cae_fecha_vencimiento' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ws_fe_ope_solicitud_respuesta.ws_fe_afip_cae_fecha_vencimiento')) ?>' size='22' />
        	<?php 
			$buscador_ws_fe_ope_solicitud_respuesta_ws_fe_afip_cae_fecha_vencimiento_comparador = $criterio->getComparadorDeCampo('ws_fe_ope_solicitud_respuesta.ws_fe_afip_cae_fecha_vencimiento');
			if(trim($buscador_ws_fe_ope_solicitud_respuesta_ws_fe_afip_cae_fecha_vencimiento_comparador) == '') $buscador_ws_fe_ope_solicitud_respuesta_ws_fe_afip_cae_fecha_vencimiento_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_ws_fe_ope_solicitud_respuesta_ws_fe_afip_cae_fecha_vencimiento_comparador', Criterio::getComparadoresCmb(), $buscador_ws_fe_ope_solicitud_respuesta_ws_fe_afip_cae_fecha_vencimiento_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ws_fe_ope_solicitud_respuesta_observacion' type='text' class='textbox' id='buscador_ws_fe_ope_solicitud_respuesta_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ws_fe_ope_solicitud_respuesta.observacion')) ?>' size='22' />
        	<?php 
			$buscador_ws_fe_ope_solicitud_respuesta_observacion_comparador = $criterio->getComparadorDeCampo('ws_fe_ope_solicitud_respuesta.observacion');
			if(trim($buscador_ws_fe_ope_solicitud_respuesta_observacion_comparador) == '') $buscador_ws_fe_ope_solicitud_respuesta_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_ws_fe_ope_solicitud_respuesta_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_ws_fe_ope_solicitud_respuesta_observacion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Estado') ?></div>
		  <div class='dato'>
		  
		<?php Html::html_dib_select(1, 'buscador_ws_fe_ope_solicitud_respuesta_estado', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ws_fe_ope_solicitud_respuesta.estado'), 'textbox') ?>
		
        	<?php 
			$buscador_ws_fe_ope_solicitud_respuesta_estado_comparador = $criterio->getComparadorDeCampo('ws_fe_ope_solicitud_respuesta.estado');
			if(trim($buscador_ws_fe_ope_solicitud_respuesta_estado_comparador) == '') $buscador_ws_fe_ope_solicitud_respuesta_estado_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_ws_fe_ope_solicitud_respuesta_estado_comparador', Criterio::getComparadoresCmb(), $buscador_ws_fe_ope_solicitud_respuesta_estado_comparador, 'textbox comparador') ?>
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

