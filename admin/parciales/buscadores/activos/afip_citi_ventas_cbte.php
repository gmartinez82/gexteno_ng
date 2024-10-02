<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['afip_citi_ventas_cbte.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('afip_citi_ventas_cbte.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('afip_citi_ventas_cbte.id');
	$comparador = $criterio->getComparadorDeCampo('afip_citi_ventas_cbte.id');

	$filtros['afip_citi_ventas_cbte.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('afip_citi_ventas_cbte.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('afip_citi_ventas_cbte.descripcion');
	$comparador = $criterio->getComparadorDeCampo('afip_citi_ventas_cbte.descripcion');

	$filtros['afip_citi_ventas_cbte.descripcion'] = array('campo' => 'Descripcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('afip_citi_ventas_cbte.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('afip_citi_ventas_cbte.codigo');
	$comparador = $criterio->getComparadorDeCampo('afip_citi_ventas_cbte.codigo');

	$filtros['afip_citi_ventas_cbte.codigo'] = array('campo' => 'Codigo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('afip_citi_ventas_cbte.afip_citi_prc_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('afip_citi_ventas_cbte.afip_citi_prc_id');
	$o = AfipCitiPrc::getOxId($criterio->getValorDeCampo('afip_citi_ventas_cbte.afip_citi_prc_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('afip_citi_ventas_cbte.afip_citi_prc_id');

	$filtros['afip_citi_ventas_cbte.afip_citi_prc_id'] = array('campo' => 'AfipCitiPrc', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('afip_citi_ventas_cbte.afip_citi_cabecera_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('afip_citi_ventas_cbte.afip_citi_cabecera_id');
	$o = AfipCitiCabecera::getOxId($criterio->getValorDeCampo('afip_citi_ventas_cbte.afip_citi_cabecera_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('afip_citi_ventas_cbte.afip_citi_cabecera_id');

	$filtros['afip_citi_ventas_cbte.afip_citi_cabecera_id'] = array('campo' => 'AfipCitiCabecera', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('afip_citi_ventas_cbte.afip_citi_fecha_comprobante') != ''){
	$valor = $valor = $criterio->getValorDeCampo('afip_citi_ventas_cbte.afip_citi_fecha_comprobante');
	$comparador = $criterio->getComparadorDeCampo('afip_citi_ventas_cbte.afip_citi_fecha_comprobante');

	$filtros['afip_citi_ventas_cbte.afip_citi_fecha_comprobante'] = array('campo' => 'Fecha Comprobante', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('afip_citi_ventas_cbte.afip_citi_tipo_comprobante') != ''){
	$valor = $valor = $criterio->getValorDeCampo('afip_citi_ventas_cbte.afip_citi_tipo_comprobante');
	$comparador = $criterio->getComparadorDeCampo('afip_citi_ventas_cbte.afip_citi_tipo_comprobante');

	$filtros['afip_citi_ventas_cbte.afip_citi_tipo_comprobante'] = array('campo' => 'Tipo Comprobante', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('afip_citi_ventas_cbte.afip_citi_punto_venta') != ''){
	$valor = $valor = $criterio->getValorDeCampo('afip_citi_ventas_cbte.afip_citi_punto_venta');
	$comparador = $criterio->getComparadorDeCampo('afip_citi_ventas_cbte.afip_citi_punto_venta');

	$filtros['afip_citi_ventas_cbte.afip_citi_punto_venta'] = array('campo' => 'Punto Venta', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('afip_citi_ventas_cbte.afip_citi_numero_comprobante') != ''){
	$valor = $valor = $criterio->getValorDeCampo('afip_citi_ventas_cbte.afip_citi_numero_comprobante');
	$comparador = $criterio->getComparadorDeCampo('afip_citi_ventas_cbte.afip_citi_numero_comprobante');

	$filtros['afip_citi_ventas_cbte.afip_citi_numero_comprobante'] = array('campo' => 'Nro Comprobante', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('afip_citi_ventas_cbte.afip_citi_numero_comprobante_hasta') != ''){
	$valor = $valor = $criterio->getValorDeCampo('afip_citi_ventas_cbte.afip_citi_numero_comprobante_hasta');
	$comparador = $criterio->getComparadorDeCampo('afip_citi_ventas_cbte.afip_citi_numero_comprobante_hasta');

	$filtros['afip_citi_ventas_cbte.afip_citi_numero_comprobante_hasta'] = array('campo' => 'Nro Comprobante Hasta', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('afip_citi_ventas_cbte.afip_citi_codigo_documento_comprador') != ''){
	$valor = $valor = $criterio->getValorDeCampo('afip_citi_ventas_cbte.afip_citi_codigo_documento_comprador');
	$comparador = $criterio->getComparadorDeCampo('afip_citi_ventas_cbte.afip_citi_codigo_documento_comprador');

	$filtros['afip_citi_ventas_cbte.afip_citi_codigo_documento_comprador'] = array('campo' => 'Codigo Documento Comprador', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('afip_citi_ventas_cbte.afip_citi_numero_identificacion_comprador') != ''){
	$valor = $valor = $criterio->getValorDeCampo('afip_citi_ventas_cbte.afip_citi_numero_identificacion_comprador');
	$comparador = $criterio->getComparadorDeCampo('afip_citi_ventas_cbte.afip_citi_numero_identificacion_comprador');

	$filtros['afip_citi_ventas_cbte.afip_citi_numero_identificacion_comprador'] = array('campo' => 'Nro Identificacion Comprador', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('afip_citi_ventas_cbte.afip_citi_denominacion_comprador') != ''){
	$valor = $valor = $criterio->getValorDeCampo('afip_citi_ventas_cbte.afip_citi_denominacion_comprador');
	$comparador = $criterio->getComparadorDeCampo('afip_citi_ventas_cbte.afip_citi_denominacion_comprador');

	$filtros['afip_citi_ventas_cbte.afip_citi_denominacion_comprador'] = array('campo' => 'Denominacion Comprador', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('afip_citi_ventas_cbte.afip_citi_importe_total_operacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('afip_citi_ventas_cbte.afip_citi_importe_total_operacion');
	$comparador = $criterio->getComparadorDeCampo('afip_citi_ventas_cbte.afip_citi_importe_total_operacion');

	$filtros['afip_citi_ventas_cbte.afip_citi_importe_total_operacion'] = array('campo' => 'Importe Total Operacion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('afip_citi_ventas_cbte.afip_citi_importe_total_conceptos') != ''){
	$valor = $valor = $criterio->getValorDeCampo('afip_citi_ventas_cbte.afip_citi_importe_total_conceptos');
	$comparador = $criterio->getComparadorDeCampo('afip_citi_ventas_cbte.afip_citi_importe_total_conceptos');

	$filtros['afip_citi_ventas_cbte.afip_citi_importe_total_conceptos'] = array('campo' => 'Importe Total Conceptos', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('afip_citi_ventas_cbte.afip_citi_importe_percepcion_no_categorizados') != ''){
	$valor = $valor = $criterio->getValorDeCampo('afip_citi_ventas_cbte.afip_citi_importe_percepcion_no_categorizados');
	$comparador = $criterio->getComparadorDeCampo('afip_citi_ventas_cbte.afip_citi_importe_percepcion_no_categorizados');

	$filtros['afip_citi_ventas_cbte.afip_citi_importe_percepcion_no_categorizados'] = array('campo' => 'Importe Percepcion No Categorizados', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('afip_citi_ventas_cbte.afip_citi_importe_operaciones_exentas') != ''){
	$valor = $valor = $criterio->getValorDeCampo('afip_citi_ventas_cbte.afip_citi_importe_operaciones_exentas');
	$comparador = $criterio->getComparadorDeCampo('afip_citi_ventas_cbte.afip_citi_importe_operaciones_exentas');

	$filtros['afip_citi_ventas_cbte.afip_citi_importe_operaciones_exentas'] = array('campo' => 'Importe Operaciones Exentas', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('afip_citi_ventas_cbte.afip_citi_importe_percepciones_impuestos_nacionales') != ''){
	$valor = $valor = $criterio->getValorDeCampo('afip_citi_ventas_cbte.afip_citi_importe_percepciones_impuestos_nacionales');
	$comparador = $criterio->getComparadorDeCampo('afip_citi_ventas_cbte.afip_citi_importe_percepciones_impuestos_nacionales');

	$filtros['afip_citi_ventas_cbte.afip_citi_importe_percepciones_impuestos_nacionales'] = array('campo' => 'Importe Percepciones Impuestos Nacionales', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('afip_citi_ventas_cbte.afip_citi_importe_percepciones_ingresos_brutos') != ''){
	$valor = $valor = $criterio->getValorDeCampo('afip_citi_ventas_cbte.afip_citi_importe_percepciones_ingresos_brutos');
	$comparador = $criterio->getComparadorDeCampo('afip_citi_ventas_cbte.afip_citi_importe_percepciones_ingresos_brutos');

	$filtros['afip_citi_ventas_cbte.afip_citi_importe_percepciones_ingresos_brutos'] = array('campo' => 'Importe Percepciones Ingresos Brutos', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('afip_citi_ventas_cbte.afip_citi_importe_percepciones_impuestos_municipales') != ''){
	$valor = $valor = $criterio->getValorDeCampo('afip_citi_ventas_cbte.afip_citi_importe_percepciones_impuestos_municipales');
	$comparador = $criterio->getComparadorDeCampo('afip_citi_ventas_cbte.afip_citi_importe_percepciones_impuestos_municipales');

	$filtros['afip_citi_ventas_cbte.afip_citi_importe_percepciones_impuestos_municipales'] = array('campo' => 'Importe Percepciones Impuestos Municipales', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('afip_citi_ventas_cbte.afip_citi_importe_impuestos_internos') != ''){
	$valor = $valor = $criterio->getValorDeCampo('afip_citi_ventas_cbte.afip_citi_importe_impuestos_internos');
	$comparador = $criterio->getComparadorDeCampo('afip_citi_ventas_cbte.afip_citi_importe_impuestos_internos');

	$filtros['afip_citi_ventas_cbte.afip_citi_importe_impuestos_internos'] = array('campo' => 'Importe Impuestos Internos', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('afip_citi_ventas_cbte.afip_citi_codigo_moneda') != ''){
	$valor = $valor = $criterio->getValorDeCampo('afip_citi_ventas_cbte.afip_citi_codigo_moneda');
	$comparador = $criterio->getComparadorDeCampo('afip_citi_ventas_cbte.afip_citi_codigo_moneda');

	$filtros['afip_citi_ventas_cbte.afip_citi_codigo_moneda'] = array('campo' => 'Codigo Moneda', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('afip_citi_ventas_cbte.afip_citi_tipo_cambio') != ''){
	$valor = $valor = $criterio->getValorDeCampo('afip_citi_ventas_cbte.afip_citi_tipo_cambio');
	$comparador = $criterio->getComparadorDeCampo('afip_citi_ventas_cbte.afip_citi_tipo_cambio');

	$filtros['afip_citi_ventas_cbte.afip_citi_tipo_cambio'] = array('campo' => 'Tipo Cambio', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('afip_citi_ventas_cbte.afip_citi_cantidad_alicuotas_iva') != ''){
	$valor = $valor = $criterio->getValorDeCampo('afip_citi_ventas_cbte.afip_citi_cantidad_alicuotas_iva');
	$comparador = $criterio->getComparadorDeCampo('afip_citi_ventas_cbte.afip_citi_cantidad_alicuotas_iva');

	$filtros['afip_citi_ventas_cbte.afip_citi_cantidad_alicuotas_iva'] = array('campo' => 'Cantidad Alicuotas Iva', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('afip_citi_ventas_cbte.afip_citi_codigo_operacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('afip_citi_ventas_cbte.afip_citi_codigo_operacion');
	$comparador = $criterio->getComparadorDeCampo('afip_citi_ventas_cbte.afip_citi_codigo_operacion');

	$filtros['afip_citi_ventas_cbte.afip_citi_codigo_operacion'] = array('campo' => 'Codigo Operacion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('afip_citi_ventas_cbte.afip_citi_importe_otros_tributos') != ''){
	$valor = $valor = $criterio->getValorDeCampo('afip_citi_ventas_cbte.afip_citi_importe_otros_tributos');
	$comparador = $criterio->getComparadorDeCampo('afip_citi_ventas_cbte.afip_citi_importe_otros_tributos');

	$filtros['afip_citi_ventas_cbte.afip_citi_importe_otros_tributos'] = array('campo' => 'Importe Otros Tributos', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('afip_citi_ventas_cbte.afip_citi_fecha_vencimiento_pago') != ''){
	$valor = $valor = $criterio->getValorDeCampo('afip_citi_ventas_cbte.afip_citi_fecha_vencimiento_pago');
	$comparador = $criterio->getComparadorDeCampo('afip_citi_ventas_cbte.afip_citi_fecha_vencimiento_pago');

	$filtros['afip_citi_ventas_cbte.afip_citi_fecha_vencimiento_pago'] = array('campo' => 'Fecha Vencimiento Pago', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('afip_citi_ventas_cbte.vta_factura_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('afip_citi_ventas_cbte.vta_factura_id');
	$o = VtaFactura::getOxId($criterio->getValorDeCampo('afip_citi_ventas_cbte.vta_factura_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('afip_citi_ventas_cbte.vta_factura_id');

	$filtros['afip_citi_ventas_cbte.vta_factura_id'] = array('campo' => 'VtaFactura', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('afip_citi_ventas_cbte.vta_nota_credito_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('afip_citi_ventas_cbte.vta_nota_credito_id');
	$o = VtaNotaCredito::getOxId($criterio->getValorDeCampo('afip_citi_ventas_cbte.vta_nota_credito_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('afip_citi_ventas_cbte.vta_nota_credito_id');

	$filtros['afip_citi_ventas_cbte.vta_nota_credito_id'] = array('campo' => 'VtaNotaCredito', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('afip_citi_ventas_cbte.vta_nota_debito_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('afip_citi_ventas_cbte.vta_nota_debito_id');
	$o = VtaNotaDebito::getOxId($criterio->getValorDeCampo('afip_citi_ventas_cbte.vta_nota_debito_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('afip_citi_ventas_cbte.vta_nota_debito_id');

	$filtros['afip_citi_ventas_cbte.vta_nota_debito_id'] = array('campo' => 'VtaNotaDebito', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('afip_citi_ventas_cbte.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('afip_citi_ventas_cbte.observacion');
	$comparador = $criterio->getComparadorDeCampo('afip_citi_ventas_cbte.observacion');

	$filtros['afip_citi_ventas_cbte.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('afip_citi_ventas_cbte.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('afip_citi_ventas_cbte.orden');
	$comparador = $criterio->getComparadorDeCampo('afip_citi_ventas_cbte.orden');

	$filtros['afip_citi_ventas_cbte.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('afip_citi_ventas_cbte.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('afip_citi_ventas_cbte.estado');
	$comparador = $criterio->getComparadorDeCampo('afip_citi_ventas_cbte.estado');

	$filtros['afip_citi_ventas_cbte.estado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('afip_citi_ventas_cbte.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('afip_citi_ventas_cbte.creado');
	$comparador = $criterio->getComparadorDeCampo('afip_citi_ventas_cbte.creado');

	$filtros['afip_citi_ventas_cbte.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('afip_citi_ventas_cbte.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('afip_citi_ventas_cbte.creado_por');
	$comparador = $criterio->getComparadorDeCampo('afip_citi_ventas_cbte.creado_por');

	$filtros['afip_citi_ventas_cbte.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('afip_citi_ventas_cbte.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('afip_citi_ventas_cbte.modificado');
	$comparador = $criterio->getComparadorDeCampo('afip_citi_ventas_cbte.modificado');

	$filtros['afip_citi_ventas_cbte.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('afip_citi_ventas_cbte.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('afip_citi_ventas_cbte.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('afip_citi_ventas_cbte.modificado_por');

	$filtros['afip_citi_ventas_cbte.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

