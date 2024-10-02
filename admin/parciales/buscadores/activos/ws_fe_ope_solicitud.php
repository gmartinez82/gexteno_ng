<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['ws_fe_ope_solicitud.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('ws_fe_ope_solicitud.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ws_fe_ope_solicitud.id');
	$comparador = $criterio->getComparadorDeCampo('ws_fe_ope_solicitud.id');

	$filtros['ws_fe_ope_solicitud.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ws_fe_ope_solicitud.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ws_fe_ope_solicitud.descripcion');
	$comparador = $criterio->getComparadorDeCampo('ws_fe_ope_solicitud.descripcion');

	$filtros['ws_fe_ope_solicitud.descripcion'] = array('campo' => 'Descripcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ws_fe_ope_solicitud.ws_fe_param_punto_venta_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ws_fe_ope_solicitud.ws_fe_param_punto_venta_id');
	$o = WsFeParamPuntoVenta::getOxId($criterio->getValorDeCampo('ws_fe_ope_solicitud.ws_fe_param_punto_venta_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('ws_fe_ope_solicitud.ws_fe_param_punto_venta_id');

	$filtros['ws_fe_ope_solicitud.ws_fe_param_punto_venta_id'] = array('campo' => 'WsFeParampuntoVenta', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ws_fe_ope_solicitud.ws_fe_param_tipo_comprobante_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ws_fe_ope_solicitud.ws_fe_param_tipo_comprobante_id');
	$o = WsFeParamTipoComprobante::getOxId($criterio->getValorDeCampo('ws_fe_ope_solicitud.ws_fe_param_tipo_comprobante_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('ws_fe_ope_solicitud.ws_fe_param_tipo_comprobante_id');

	$filtros['ws_fe_ope_solicitud.ws_fe_param_tipo_comprobante_id'] = array('campo' => 'WsFeParamTipoComprobante', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ws_fe_ope_solicitud.ws_fe_param_tipo_concepto_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ws_fe_ope_solicitud.ws_fe_param_tipo_concepto_id');
	$o = WsFeParamTipoConcepto::getOxId($criterio->getValorDeCampo('ws_fe_ope_solicitud.ws_fe_param_tipo_concepto_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('ws_fe_ope_solicitud.ws_fe_param_tipo_concepto_id');

	$filtros['ws_fe_ope_solicitud.ws_fe_param_tipo_concepto_id'] = array('campo' => 'WsFeParamTipoConcepto', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ws_fe_ope_solicitud.ws_fe_param_tipo_documento_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ws_fe_ope_solicitud.ws_fe_param_tipo_documento_id');
	$o = WsFeParamTipoDocumento::getOxId($criterio->getValorDeCampo('ws_fe_ope_solicitud.ws_fe_param_tipo_documento_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('ws_fe_ope_solicitud.ws_fe_param_tipo_documento_id');

	$filtros['ws_fe_ope_solicitud.ws_fe_param_tipo_documento_id'] = array('campo' => 'WsFeParamTipoDocumento', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ws_fe_ope_solicitud.ws_fe_param_tipo_moneda_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ws_fe_ope_solicitud.ws_fe_param_tipo_moneda_id');
	$o = WsFeParamTipoMoneda::getOxId($criterio->getValorDeCampo('ws_fe_ope_solicitud.ws_fe_param_tipo_moneda_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('ws_fe_ope_solicitud.ws_fe_param_tipo_moneda_id');

	$filtros['ws_fe_ope_solicitud.ws_fe_param_tipo_moneda_id'] = array('campo' => 'WsFeParamTipoMoneda', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ws_fe_ope_solicitud.gral_empresa_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ws_fe_ope_solicitud.gral_empresa_id');
	$o = GralEmpresa::getOxId($criterio->getValorDeCampo('ws_fe_ope_solicitud.gral_empresa_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('ws_fe_ope_solicitud.gral_empresa_id');

	$filtros['ws_fe_ope_solicitud.gral_empresa_id'] = array('campo' => 'GralEmpresa', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ws_fe_ope_solicitud.ws_fe_afip_cantidad_registro') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ws_fe_ope_solicitud.ws_fe_afip_cantidad_registro');
	$comparador = $criterio->getComparadorDeCampo('ws_fe_ope_solicitud.ws_fe_afip_cantidad_registro');

	$filtros['ws_fe_ope_solicitud.ws_fe_afip_cantidad_registro'] = array('campo' => 'Cantidad de Registros', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ws_fe_ope_solicitud.ws_fe_afip_punto_venta') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ws_fe_ope_solicitud.ws_fe_afip_punto_venta');
	$comparador = $criterio->getComparadorDeCampo('ws_fe_ope_solicitud.ws_fe_afip_punto_venta');

	$filtros['ws_fe_ope_solicitud.ws_fe_afip_punto_venta'] = array('campo' => 'Punto de Venta', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ws_fe_ope_solicitud.ws_fe_afip_tipo_comprobante') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ws_fe_ope_solicitud.ws_fe_afip_tipo_comprobante');
	$comparador = $criterio->getComparadorDeCampo('ws_fe_ope_solicitud.ws_fe_afip_tipo_comprobante');

	$filtros['ws_fe_ope_solicitud.ws_fe_afip_tipo_comprobante'] = array('campo' => 'Tipo de Comprobante', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ws_fe_ope_solicitud.ws_fe_afip_tipo_concepto') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ws_fe_ope_solicitud.ws_fe_afip_tipo_concepto');
	$comparador = $criterio->getComparadorDeCampo('ws_fe_ope_solicitud.ws_fe_afip_tipo_concepto');

	$filtros['ws_fe_ope_solicitud.ws_fe_afip_tipo_concepto'] = array('campo' => 'Tipo de Concepto', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ws_fe_ope_solicitud.ws_fe_afip_tipo_documento') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ws_fe_ope_solicitud.ws_fe_afip_tipo_documento');
	$comparador = $criterio->getComparadorDeCampo('ws_fe_ope_solicitud.ws_fe_afip_tipo_documento');

	$filtros['ws_fe_ope_solicitud.ws_fe_afip_tipo_documento'] = array('campo' => 'Tipo de Documento', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ws_fe_ope_solicitud.ws_fe_afip_numero_documento') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ws_fe_ope_solicitud.ws_fe_afip_numero_documento');
	$comparador = $criterio->getComparadorDeCampo('ws_fe_ope_solicitud.ws_fe_afip_numero_documento');

	$filtros['ws_fe_ope_solicitud.ws_fe_afip_numero_documento'] = array('campo' => 'Numero de Documento', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ws_fe_ope_solicitud.ws_fe_afip_comprobante_desde') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ws_fe_ope_solicitud.ws_fe_afip_comprobante_desde');
	$comparador = $criterio->getComparadorDeCampo('ws_fe_ope_solicitud.ws_fe_afip_comprobante_desde');

	$filtros['ws_fe_ope_solicitud.ws_fe_afip_comprobante_desde'] = array('campo' => 'Comprobante Desde', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ws_fe_ope_solicitud.ws_fe_afip_comprobante_hasta') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ws_fe_ope_solicitud.ws_fe_afip_comprobante_hasta');
	$comparador = $criterio->getComparadorDeCampo('ws_fe_ope_solicitud.ws_fe_afip_comprobante_hasta');

	$filtros['ws_fe_ope_solicitud.ws_fe_afip_comprobante_hasta'] = array('campo' => 'Comprobante Hasta', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ws_fe_ope_solicitud.ws_fe_afip_comprobante_fecha') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ws_fe_ope_solicitud.ws_fe_afip_comprobante_fecha');
	$comparador = $criterio->getComparadorDeCampo('ws_fe_ope_solicitud.ws_fe_afip_comprobante_fecha');

	$filtros['ws_fe_ope_solicitud.ws_fe_afip_comprobante_fecha'] = array('campo' => 'Comprobante Fecha', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ws_fe_ope_solicitud.ws_fe_afip_importe_total') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ws_fe_ope_solicitud.ws_fe_afip_importe_total');
	$comparador = $criterio->getComparadorDeCampo('ws_fe_ope_solicitud.ws_fe_afip_importe_total');

	$filtros['ws_fe_ope_solicitud.ws_fe_afip_importe_total'] = array('campo' => 'Importe Total', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ws_fe_ope_solicitud.ws_fe_afip_importe_total_concepto') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ws_fe_ope_solicitud.ws_fe_afip_importe_total_concepto');
	$comparador = $criterio->getComparadorDeCampo('ws_fe_ope_solicitud.ws_fe_afip_importe_total_concepto');

	$filtros['ws_fe_ope_solicitud.ws_fe_afip_importe_total_concepto'] = array('campo' => 'Importe Total Concepto', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ws_fe_ope_solicitud.ws_fe_afip_importe_neto') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ws_fe_ope_solicitud.ws_fe_afip_importe_neto');
	$comparador = $criterio->getComparadorDeCampo('ws_fe_ope_solicitud.ws_fe_afip_importe_neto');

	$filtros['ws_fe_ope_solicitud.ws_fe_afip_importe_neto'] = array('campo' => 'Importe Neto', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ws_fe_ope_solicitud.ws_fe_afip_importe_operacion_exenta') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ws_fe_ope_solicitud.ws_fe_afip_importe_operacion_exenta');
	$comparador = $criterio->getComparadorDeCampo('ws_fe_ope_solicitud.ws_fe_afip_importe_operacion_exenta');

	$filtros['ws_fe_ope_solicitud.ws_fe_afip_importe_operacion_exenta'] = array('campo' => 'Importe Operacion Exenta', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ws_fe_ope_solicitud.ws_fe_afip_importe_tributo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ws_fe_ope_solicitud.ws_fe_afip_importe_tributo');
	$comparador = $criterio->getComparadorDeCampo('ws_fe_ope_solicitud.ws_fe_afip_importe_tributo');

	$filtros['ws_fe_ope_solicitud.ws_fe_afip_importe_tributo'] = array('campo' => 'Importe Tributo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ws_fe_ope_solicitud.ws_fe_afip_importe_iva') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ws_fe_ope_solicitud.ws_fe_afip_importe_iva');
	$comparador = $criterio->getComparadorDeCampo('ws_fe_ope_solicitud.ws_fe_afip_importe_iva');

	$filtros['ws_fe_ope_solicitud.ws_fe_afip_importe_iva'] = array('campo' => 'Importe Iva', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ws_fe_ope_solicitud.ws_fe_afip_fecha_servicio_desde') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ws_fe_ope_solicitud.ws_fe_afip_fecha_servicio_desde');
	$comparador = $criterio->getComparadorDeCampo('ws_fe_ope_solicitud.ws_fe_afip_fecha_servicio_desde');

	$filtros['ws_fe_ope_solicitud.ws_fe_afip_fecha_servicio_desde'] = array('campo' => 'Fecha de Servicio Desde', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ws_fe_ope_solicitud.ws_fe_afip_fecha_servicio_hasta') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ws_fe_ope_solicitud.ws_fe_afip_fecha_servicio_hasta');
	$comparador = $criterio->getComparadorDeCampo('ws_fe_ope_solicitud.ws_fe_afip_fecha_servicio_hasta');

	$filtros['ws_fe_ope_solicitud.ws_fe_afip_fecha_servicio_hasta'] = array('campo' => 'Fecha de Servicio Hasta', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ws_fe_ope_solicitud.ws_fe_afip_vencimiento_pago') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ws_fe_ope_solicitud.ws_fe_afip_vencimiento_pago');
	$comparador = $criterio->getComparadorDeCampo('ws_fe_ope_solicitud.ws_fe_afip_vencimiento_pago');

	$filtros['ws_fe_ope_solicitud.ws_fe_afip_vencimiento_pago'] = array('campo' => 'Fecha de Vencimiento de Pago', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ws_fe_ope_solicitud.ws_fe_afip_tipo_moneda') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ws_fe_ope_solicitud.ws_fe_afip_tipo_moneda');
	$comparador = $criterio->getComparadorDeCampo('ws_fe_ope_solicitud.ws_fe_afip_tipo_moneda');

	$filtros['ws_fe_ope_solicitud.ws_fe_afip_tipo_moneda'] = array('campo' => 'Tipo de Moneda', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ws_fe_ope_solicitud.ws_fe_afip_cotizacion_moneda') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ws_fe_ope_solicitud.ws_fe_afip_cotizacion_moneda');
	$comparador = $criterio->getComparadorDeCampo('ws_fe_ope_solicitud.ws_fe_afip_cotizacion_moneda');

	$filtros['ws_fe_ope_solicitud.ws_fe_afip_cotizacion_moneda'] = array('campo' => 'Cotizacion de Moneda', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ws_fe_ope_solicitud.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ws_fe_ope_solicitud.observacion');
	$comparador = $criterio->getComparadorDeCampo('ws_fe_ope_solicitud.observacion');

	$filtros['ws_fe_ope_solicitud.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ws_fe_ope_solicitud.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ws_fe_ope_solicitud.orden');
	$comparador = $criterio->getComparadorDeCampo('ws_fe_ope_solicitud.orden');

	$filtros['ws_fe_ope_solicitud.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ws_fe_ope_solicitud.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ws_fe_ope_solicitud.estado');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('ws_fe_ope_solicitud.estado'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('ws_fe_ope_solicitud.estado');

	$filtros['ws_fe_ope_solicitud.estado'] = array('campo' => 'Estado', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ws_fe_ope_solicitud.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ws_fe_ope_solicitud.creado');
	$comparador = $criterio->getComparadorDeCampo('ws_fe_ope_solicitud.creado');

	$filtros['ws_fe_ope_solicitud.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ws_fe_ope_solicitud.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ws_fe_ope_solicitud.creado_por');
	$comparador = $criterio->getComparadorDeCampo('ws_fe_ope_solicitud.creado_por');

	$filtros['ws_fe_ope_solicitud.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ws_fe_ope_solicitud.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ws_fe_ope_solicitud.modificado');
	$comparador = $criterio->getComparadorDeCampo('ws_fe_ope_solicitud.modificado');

	$filtros['ws_fe_ope_solicitud.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ws_fe_ope_solicitud.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ws_fe_ope_solicitud.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('ws_fe_ope_solicitud.modificado_por');

	$filtros['ws_fe_ope_solicitud.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

} // cierre IF no ambiguo
?>
<?php if(count($filtros) > 0){ ?>
<div class='filtros'>
    <div class='titulo'><?php Lang::_lang('Criterios de Busqueda Activos') ?></div>
    <?php foreach($filtros as $i => $v){ ?>
    <div class='filtro'>
        <div class='campo'><?php Gral::_echo($v['campo']) ?></div>
        <div class='comparador'><?php Gral::_echo(Criterio::getComparadorDescripcion($v['comparador'])) ?></div>
        <div class='valor'><?php Gral::_echo($v['valor']) ?></div>
        <div class='eliminar'><a class="filtro-eliminar" href='?qf=1&c=<?php Gral::_echo($i) ?>' title='Quitar Filtro'><img src='imgs/btn_elim.gif' height='16' align='absmiddle' border='0'></a></div>
    </div>
    <?php } ?>
</div>
<?php } ?>

