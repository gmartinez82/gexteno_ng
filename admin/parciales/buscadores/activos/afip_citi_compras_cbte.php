<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['afip_citi_compras_cbte.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('afip_citi_compras_cbte.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('afip_citi_compras_cbte.id');
	$comparador = $criterio->getComparadorDeCampo('afip_citi_compras_cbte.id');

	$filtros['afip_citi_compras_cbte.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('afip_citi_compras_cbte.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('afip_citi_compras_cbte.descripcion');
	$comparador = $criterio->getComparadorDeCampo('afip_citi_compras_cbte.descripcion');

	$filtros['afip_citi_compras_cbte.descripcion'] = array('campo' => 'Descripcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('afip_citi_compras_cbte.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('afip_citi_compras_cbte.codigo');
	$comparador = $criterio->getComparadorDeCampo('afip_citi_compras_cbte.codigo');

	$filtros['afip_citi_compras_cbte.codigo'] = array('campo' => 'Codigo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('afip_citi_compras_cbte.afip_citi_prc_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('afip_citi_compras_cbte.afip_citi_prc_id');
	$o = AfipCitiPrc::getOxId($criterio->getValorDeCampo('afip_citi_compras_cbte.afip_citi_prc_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('afip_citi_compras_cbte.afip_citi_prc_id');

	$filtros['afip_citi_compras_cbte.afip_citi_prc_id'] = array('campo' => 'AfipCitiPrc', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('afip_citi_compras_cbte.afip_citi_cabecera_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('afip_citi_compras_cbte.afip_citi_cabecera_id');
	$o = AfipCitiCabecera::getOxId($criterio->getValorDeCampo('afip_citi_compras_cbte.afip_citi_cabecera_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('afip_citi_compras_cbte.afip_citi_cabecera_id');

	$filtros['afip_citi_compras_cbte.afip_citi_cabecera_id'] = array('campo' => 'AfipCitiCabecera', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('afip_citi_compras_cbte.afip_citi_fecha_comprobante') != ''){
	$valor = $valor = $criterio->getValorDeCampo('afip_citi_compras_cbte.afip_citi_fecha_comprobante');
	$comparador = $criterio->getComparadorDeCampo('afip_citi_compras_cbte.afip_citi_fecha_comprobante');

	$filtros['afip_citi_compras_cbte.afip_citi_fecha_comprobante'] = array('campo' => 'afip_citi_fecha_comprobante', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('afip_citi_compras_cbte.afip_citi_tipo_comprobante') != ''){
	$valor = $valor = $criterio->getValorDeCampo('afip_citi_compras_cbte.afip_citi_tipo_comprobante');
	$comparador = $criterio->getComparadorDeCampo('afip_citi_compras_cbte.afip_citi_tipo_comprobante');

	$filtros['afip_citi_compras_cbte.afip_citi_tipo_comprobante'] = array('campo' => 'afip_citi_tipo_comprobante', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('afip_citi_compras_cbte.afip_citi_punto_venta') != ''){
	$valor = $valor = $criterio->getValorDeCampo('afip_citi_compras_cbte.afip_citi_punto_venta');
	$comparador = $criterio->getComparadorDeCampo('afip_citi_compras_cbte.afip_citi_punto_venta');

	$filtros['afip_citi_compras_cbte.afip_citi_punto_venta'] = array('campo' => 'afip_citi_punto_venta', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('afip_citi_compras_cbte.afip_citi_numero_comprobante') != ''){
	$valor = $valor = $criterio->getValorDeCampo('afip_citi_compras_cbte.afip_citi_numero_comprobante');
	$comparador = $criterio->getComparadorDeCampo('afip_citi_compras_cbte.afip_citi_numero_comprobante');

	$filtros['afip_citi_compras_cbte.afip_citi_numero_comprobante'] = array('campo' => 'afip_citi_numero_comprobante', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('afip_citi_compras_cbte.afip_citi_despacho_importacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('afip_citi_compras_cbte.afip_citi_despacho_importacion');
	$comparador = $criterio->getComparadorDeCampo('afip_citi_compras_cbte.afip_citi_despacho_importacion');

	$filtros['afip_citi_compras_cbte.afip_citi_despacho_importacion'] = array('campo' => 'afip_citi_despacho_importacion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('afip_citi_compras_cbte.afip_citi_codigo_documento_vendedor') != ''){
	$valor = $valor = $criterio->getValorDeCampo('afip_citi_compras_cbte.afip_citi_codigo_documento_vendedor');
	$comparador = $criterio->getComparadorDeCampo('afip_citi_compras_cbte.afip_citi_codigo_documento_vendedor');

	$filtros['afip_citi_compras_cbte.afip_citi_codigo_documento_vendedor'] = array('campo' => 'afip_citi_codigo_documento_vendedor', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('afip_citi_compras_cbte.afip_citi_numero_identificacion_vendedor') != ''){
	$valor = $valor = $criterio->getValorDeCampo('afip_citi_compras_cbte.afip_citi_numero_identificacion_vendedor');
	$comparador = $criterio->getComparadorDeCampo('afip_citi_compras_cbte.afip_citi_numero_identificacion_vendedor');

	$filtros['afip_citi_compras_cbte.afip_citi_numero_identificacion_vendedor'] = array('campo' => 'afip_citi_numero_identificacion_vendedor', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('afip_citi_compras_cbte.afip_citi_denominacion_vendedor') != ''){
	$valor = $valor = $criterio->getValorDeCampo('afip_citi_compras_cbte.afip_citi_denominacion_vendedor');
	$comparador = $criterio->getComparadorDeCampo('afip_citi_compras_cbte.afip_citi_denominacion_vendedor');

	$filtros['afip_citi_compras_cbte.afip_citi_denominacion_vendedor'] = array('campo' => 'afip_citi_denominacion_vendedor', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('afip_citi_compras_cbte.afip_citi_importe_total_operacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('afip_citi_compras_cbte.afip_citi_importe_total_operacion');
	$comparador = $criterio->getComparadorDeCampo('afip_citi_compras_cbte.afip_citi_importe_total_operacion');

	$filtros['afip_citi_compras_cbte.afip_citi_importe_total_operacion'] = array('campo' => 'afip_citi_importe_total_operacion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('afip_citi_compras_cbte.afip_citi_importe_total_conceptos') != ''){
	$valor = $valor = $criterio->getValorDeCampo('afip_citi_compras_cbte.afip_citi_importe_total_conceptos');
	$comparador = $criterio->getComparadorDeCampo('afip_citi_compras_cbte.afip_citi_importe_total_conceptos');

	$filtros['afip_citi_compras_cbte.afip_citi_importe_total_conceptos'] = array('campo' => 'afip_citi_importe_total_conceptos', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('afip_citi_compras_cbte.afip_citi_importe_operaciones_exentas') != ''){
	$valor = $valor = $criterio->getValorDeCampo('afip_citi_compras_cbte.afip_citi_importe_operaciones_exentas');
	$comparador = $criterio->getComparadorDeCampo('afip_citi_compras_cbte.afip_citi_importe_operaciones_exentas');

	$filtros['afip_citi_compras_cbte.afip_citi_importe_operaciones_exentas'] = array('campo' => 'afip_citi_importe_operaciones_exentas', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('afip_citi_compras_cbte.afip_citi_importe_percepciones_iva') != ''){
	$valor = $valor = $criterio->getValorDeCampo('afip_citi_compras_cbte.afip_citi_importe_percepciones_iva');
	$comparador = $criterio->getComparadorDeCampo('afip_citi_compras_cbte.afip_citi_importe_percepciones_iva');

	$filtros['afip_citi_compras_cbte.afip_citi_importe_percepciones_iva'] = array('campo' => 'afip_citi_importe_percepciones_iva', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('afip_citi_compras_cbte.afip_citi_importe_percepciones_impuestos_nacionales') != ''){
	$valor = $valor = $criterio->getValorDeCampo('afip_citi_compras_cbte.afip_citi_importe_percepciones_impuestos_nacionales');
	$comparador = $criterio->getComparadorDeCampo('afip_citi_compras_cbte.afip_citi_importe_percepciones_impuestos_nacionales');

	$filtros['afip_citi_compras_cbte.afip_citi_importe_percepciones_impuestos_nacionales'] = array('campo' => 'afip_citi_importe_percepciones_impuestos_nacionales', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('afip_citi_compras_cbte.afip_citi_importe_percepciones_ingresos_brutos') != ''){
	$valor = $valor = $criterio->getValorDeCampo('afip_citi_compras_cbte.afip_citi_importe_percepciones_ingresos_brutos');
	$comparador = $criterio->getComparadorDeCampo('afip_citi_compras_cbte.afip_citi_importe_percepciones_ingresos_brutos');

	$filtros['afip_citi_compras_cbte.afip_citi_importe_percepciones_ingresos_brutos'] = array('campo' => 'afip_citi_importe_percepciones_ingresos_brutos', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('afip_citi_compras_cbte.afip_citi_importe_percepciones_impuestos_municipales') != ''){
	$valor = $valor = $criterio->getValorDeCampo('afip_citi_compras_cbte.afip_citi_importe_percepciones_impuestos_municipales');
	$comparador = $criterio->getComparadorDeCampo('afip_citi_compras_cbte.afip_citi_importe_percepciones_impuestos_municipales');

	$filtros['afip_citi_compras_cbte.afip_citi_importe_percepciones_impuestos_municipales'] = array('campo' => 'afip_citi_importe_percepciones_impuestos_municipales', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('afip_citi_compras_cbte.afip_citi_importe_impuestos_internos') != ''){
	$valor = $valor = $criterio->getValorDeCampo('afip_citi_compras_cbte.afip_citi_importe_impuestos_internos');
	$comparador = $criterio->getComparadorDeCampo('afip_citi_compras_cbte.afip_citi_importe_impuestos_internos');

	$filtros['afip_citi_compras_cbte.afip_citi_importe_impuestos_internos'] = array('campo' => 'afip_citi_importe_impuestos_internos', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('afip_citi_compras_cbte.afip_citi_codigo_moneda') != ''){
	$valor = $valor = $criterio->getValorDeCampo('afip_citi_compras_cbte.afip_citi_codigo_moneda');
	$comparador = $criterio->getComparadorDeCampo('afip_citi_compras_cbte.afip_citi_codigo_moneda');

	$filtros['afip_citi_compras_cbte.afip_citi_codigo_moneda'] = array('campo' => 'afip_citi_codigo_moneda', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('afip_citi_compras_cbte.afip_citi_tipo_cambio') != ''){
	$valor = $valor = $criterio->getValorDeCampo('afip_citi_compras_cbte.afip_citi_tipo_cambio');
	$comparador = $criterio->getComparadorDeCampo('afip_citi_compras_cbte.afip_citi_tipo_cambio');

	$filtros['afip_citi_compras_cbte.afip_citi_tipo_cambio'] = array('campo' => 'afip_citi_tipo_cambio', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('afip_citi_compras_cbte.afip_citi_cantidad_alicuotas_iva') != ''){
	$valor = $valor = $criterio->getValorDeCampo('afip_citi_compras_cbte.afip_citi_cantidad_alicuotas_iva');
	$comparador = $criterio->getComparadorDeCampo('afip_citi_compras_cbte.afip_citi_cantidad_alicuotas_iva');

	$filtros['afip_citi_compras_cbte.afip_citi_cantidad_alicuotas_iva'] = array('campo' => 'afip_citi_cantidad_alicuotas_iva', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('afip_citi_compras_cbte.afip_citi_codigo_operacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('afip_citi_compras_cbte.afip_citi_codigo_operacion');
	$comparador = $criterio->getComparadorDeCampo('afip_citi_compras_cbte.afip_citi_codigo_operacion');

	$filtros['afip_citi_compras_cbte.afip_citi_codigo_operacion'] = array('campo' => 'afip_citi_codigo_operacion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('afip_citi_compras_cbte.afip_citi_importe_cf_computable') != ''){
	$valor = $valor = $criterio->getValorDeCampo('afip_citi_compras_cbte.afip_citi_importe_cf_computable');
	$comparador = $criterio->getComparadorDeCampo('afip_citi_compras_cbte.afip_citi_importe_cf_computable');

	$filtros['afip_citi_compras_cbte.afip_citi_importe_cf_computable'] = array('campo' => 'afip_citi_importe_cf_computable', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('afip_citi_compras_cbte.afip_citi_importe_otros_tributos') != ''){
	$valor = $valor = $criterio->getValorDeCampo('afip_citi_compras_cbte.afip_citi_importe_otros_tributos');
	$comparador = $criterio->getComparadorDeCampo('afip_citi_compras_cbte.afip_citi_importe_otros_tributos');

	$filtros['afip_citi_compras_cbte.afip_citi_importe_otros_tributos'] = array('campo' => 'afip_citi_importe_otros_tributos', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('afip_citi_compras_cbte.afip_citi_cuit_emisor') != ''){
	$valor = $valor = $criterio->getValorDeCampo('afip_citi_compras_cbte.afip_citi_cuit_emisor');
	$comparador = $criterio->getComparadorDeCampo('afip_citi_compras_cbte.afip_citi_cuit_emisor');

	$filtros['afip_citi_compras_cbte.afip_citi_cuit_emisor'] = array('campo' => 'afip_citi_cuit_emisor', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('afip_citi_compras_cbte.afip_citi_denominacion_emisor') != ''){
	$valor = $valor = $criterio->getValorDeCampo('afip_citi_compras_cbte.afip_citi_denominacion_emisor');
	$comparador = $criterio->getComparadorDeCampo('afip_citi_compras_cbte.afip_citi_denominacion_emisor');

	$filtros['afip_citi_compras_cbte.afip_citi_denominacion_emisor'] = array('campo' => 'afip_citi_denominacion_emisor', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('afip_citi_compras_cbte.afip_citi_importe_iva_comision') != ''){
	$valor = $valor = $criterio->getValorDeCampo('afip_citi_compras_cbte.afip_citi_importe_iva_comision');
	$comparador = $criterio->getComparadorDeCampo('afip_citi_compras_cbte.afip_citi_importe_iva_comision');

	$filtros['afip_citi_compras_cbte.afip_citi_importe_iva_comision'] = array('campo' => 'afip_citi_importe_iva_comision', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('afip_citi_compras_cbte.pde_factura_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('afip_citi_compras_cbte.pde_factura_id');
	$o = PdeFactura::getOxId($criterio->getValorDeCampo('afip_citi_compras_cbte.pde_factura_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('afip_citi_compras_cbte.pde_factura_id');

	$filtros['afip_citi_compras_cbte.pde_factura_id'] = array('campo' => 'PdeFactura', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('afip_citi_compras_cbte.pde_nota_credito_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('afip_citi_compras_cbte.pde_nota_credito_id');
	$o = PdeNotaCredito::getOxId($criterio->getValorDeCampo('afip_citi_compras_cbte.pde_nota_credito_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('afip_citi_compras_cbte.pde_nota_credito_id');

	$filtros['afip_citi_compras_cbte.pde_nota_credito_id'] = array('campo' => 'PdeNotaCredito', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('afip_citi_compras_cbte.pde_nota_debito_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('afip_citi_compras_cbte.pde_nota_debito_id');
	$o = PdeNotaDebito::getOxId($criterio->getValorDeCampo('afip_citi_compras_cbte.pde_nota_debito_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('afip_citi_compras_cbte.pde_nota_debito_id');

	$filtros['afip_citi_compras_cbte.pde_nota_debito_id'] = array('campo' => 'PdeNotaDebito', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('afip_citi_compras_cbte.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('afip_citi_compras_cbte.observacion');
	$comparador = $criterio->getComparadorDeCampo('afip_citi_compras_cbte.observacion');

	$filtros['afip_citi_compras_cbte.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('afip_citi_compras_cbte.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('afip_citi_compras_cbte.orden');
	$comparador = $criterio->getComparadorDeCampo('afip_citi_compras_cbte.orden');

	$filtros['afip_citi_compras_cbte.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('afip_citi_compras_cbte.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('afip_citi_compras_cbte.estado');
	$comparador = $criterio->getComparadorDeCampo('afip_citi_compras_cbte.estado');

	$filtros['afip_citi_compras_cbte.estado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('afip_citi_compras_cbte.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('afip_citi_compras_cbte.creado');
	$comparador = $criterio->getComparadorDeCampo('afip_citi_compras_cbte.creado');

	$filtros['afip_citi_compras_cbte.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('afip_citi_compras_cbte.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('afip_citi_compras_cbte.creado_por');
	$comparador = $criterio->getComparadorDeCampo('afip_citi_compras_cbte.creado_por');

	$filtros['afip_citi_compras_cbte.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('afip_citi_compras_cbte.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('afip_citi_compras_cbte.modificado');
	$comparador = $criterio->getComparadorDeCampo('afip_citi_compras_cbte.modificado');

	$filtros['afip_citi_compras_cbte.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('afip_citi_compras_cbte.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('afip_citi_compras_cbte.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('afip_citi_compras_cbte.modificado_por');

	$filtros['afip_citi_compras_cbte.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

