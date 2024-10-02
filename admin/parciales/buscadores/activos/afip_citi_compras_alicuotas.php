<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['afip_citi_compras_alicuotas.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('afip_citi_compras_alicuotas.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('afip_citi_compras_alicuotas.id');
	$comparador = $criterio->getComparadorDeCampo('afip_citi_compras_alicuotas.id');

	$filtros['afip_citi_compras_alicuotas.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('afip_citi_compras_alicuotas.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('afip_citi_compras_alicuotas.descripcion');
	$comparador = $criterio->getComparadorDeCampo('afip_citi_compras_alicuotas.descripcion');

	$filtros['afip_citi_compras_alicuotas.descripcion'] = array('campo' => 'Descripcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('afip_citi_compras_alicuotas.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('afip_citi_compras_alicuotas.codigo');
	$comparador = $criterio->getComparadorDeCampo('afip_citi_compras_alicuotas.codigo');

	$filtros['afip_citi_compras_alicuotas.codigo'] = array('campo' => 'Codigo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('afip_citi_compras_alicuotas.afip_citi_prc_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('afip_citi_compras_alicuotas.afip_citi_prc_id');
	$o = AfipCitiPrc::getOxId($criterio->getValorDeCampo('afip_citi_compras_alicuotas.afip_citi_prc_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('afip_citi_compras_alicuotas.afip_citi_prc_id');

	$filtros['afip_citi_compras_alicuotas.afip_citi_prc_id'] = array('campo' => 'AfipCitiPrc', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('afip_citi_compras_alicuotas.afip_citi_cabecera_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('afip_citi_compras_alicuotas.afip_citi_cabecera_id');
	$o = AfipCitiCabecera::getOxId($criterio->getValorDeCampo('afip_citi_compras_alicuotas.afip_citi_cabecera_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('afip_citi_compras_alicuotas.afip_citi_cabecera_id');

	$filtros['afip_citi_compras_alicuotas.afip_citi_cabecera_id'] = array('campo' => 'AfipCitiCabecera', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('afip_citi_compras_alicuotas.afip_citi_tipo_comprobante') != ''){
	$valor = $valor = $criterio->getValorDeCampo('afip_citi_compras_alicuotas.afip_citi_tipo_comprobante');
	$comparador = $criterio->getComparadorDeCampo('afip_citi_compras_alicuotas.afip_citi_tipo_comprobante');

	$filtros['afip_citi_compras_alicuotas.afip_citi_tipo_comprobante'] = array('campo' => 'afip_citi_tipo_comprobante', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('afip_citi_compras_alicuotas.afip_citi_punto_venta') != ''){
	$valor = $valor = $criterio->getValorDeCampo('afip_citi_compras_alicuotas.afip_citi_punto_venta');
	$comparador = $criterio->getComparadorDeCampo('afip_citi_compras_alicuotas.afip_citi_punto_venta');

	$filtros['afip_citi_compras_alicuotas.afip_citi_punto_venta'] = array('campo' => 'afip_citi_punto_venta', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('afip_citi_compras_alicuotas.afip_citi_numero_comprobante') != ''){
	$valor = $valor = $criterio->getValorDeCampo('afip_citi_compras_alicuotas.afip_citi_numero_comprobante');
	$comparador = $criterio->getComparadorDeCampo('afip_citi_compras_alicuotas.afip_citi_numero_comprobante');

	$filtros['afip_citi_compras_alicuotas.afip_citi_numero_comprobante'] = array('campo' => 'afip_citi_numero_comprobante', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('afip_citi_compras_alicuotas.afip_citi_codigo_documento_vendedor') != ''){
	$valor = $valor = $criterio->getValorDeCampo('afip_citi_compras_alicuotas.afip_citi_codigo_documento_vendedor');
	$comparador = $criterio->getComparadorDeCampo('afip_citi_compras_alicuotas.afip_citi_codigo_documento_vendedor');

	$filtros['afip_citi_compras_alicuotas.afip_citi_codigo_documento_vendedor'] = array('campo' => 'afip_citi_codigo_documento_vendedor', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('afip_citi_compras_alicuotas.afip_citi_numero_identificacion_vendedor') != ''){
	$valor = $valor = $criterio->getValorDeCampo('afip_citi_compras_alicuotas.afip_citi_numero_identificacion_vendedor');
	$comparador = $criterio->getComparadorDeCampo('afip_citi_compras_alicuotas.afip_citi_numero_identificacion_vendedor');

	$filtros['afip_citi_compras_alicuotas.afip_citi_numero_identificacion_vendedor'] = array('campo' => 'afip_citi_numero_identificacion_vendedor', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('afip_citi_compras_alicuotas.afip_citi_importe_neto_gravado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('afip_citi_compras_alicuotas.afip_citi_importe_neto_gravado');
	$comparador = $criterio->getComparadorDeCampo('afip_citi_compras_alicuotas.afip_citi_importe_neto_gravado');

	$filtros['afip_citi_compras_alicuotas.afip_citi_importe_neto_gravado'] = array('campo' => 'afip_citi_importe_neto_gravado', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('afip_citi_compras_alicuotas.afip_citi_alicuota_iva') != ''){
	$valor = $valor = $criterio->getValorDeCampo('afip_citi_compras_alicuotas.afip_citi_alicuota_iva');
	$comparador = $criterio->getComparadorDeCampo('afip_citi_compras_alicuotas.afip_citi_alicuota_iva');

	$filtros['afip_citi_compras_alicuotas.afip_citi_alicuota_iva'] = array('campo' => 'afip_citi_alicuota_iva', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('afip_citi_compras_alicuotas.afip_citi_importe_impuesto_liquidado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('afip_citi_compras_alicuotas.afip_citi_importe_impuesto_liquidado');
	$comparador = $criterio->getComparadorDeCampo('afip_citi_compras_alicuotas.afip_citi_importe_impuesto_liquidado');

	$filtros['afip_citi_compras_alicuotas.afip_citi_importe_impuesto_liquidado'] = array('campo' => 'afip_citi_importe_impuesto_liquidado', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('afip_citi_compras_alicuotas.pde_factura_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('afip_citi_compras_alicuotas.pde_factura_id');
	$o = PdeFactura::getOxId($criterio->getValorDeCampo('afip_citi_compras_alicuotas.pde_factura_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('afip_citi_compras_alicuotas.pde_factura_id');

	$filtros['afip_citi_compras_alicuotas.pde_factura_id'] = array('campo' => 'PdeFactura', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('afip_citi_compras_alicuotas.pde_nota_credito_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('afip_citi_compras_alicuotas.pde_nota_credito_id');
	$o = PdeNotaCredito::getOxId($criterio->getValorDeCampo('afip_citi_compras_alicuotas.pde_nota_credito_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('afip_citi_compras_alicuotas.pde_nota_credito_id');

	$filtros['afip_citi_compras_alicuotas.pde_nota_credito_id'] = array('campo' => 'PdeNotaCredito', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('afip_citi_compras_alicuotas.pde_nota_debito_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('afip_citi_compras_alicuotas.pde_nota_debito_id');
	$o = PdeNotaDebito::getOxId($criterio->getValorDeCampo('afip_citi_compras_alicuotas.pde_nota_debito_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('afip_citi_compras_alicuotas.pde_nota_debito_id');

	$filtros['afip_citi_compras_alicuotas.pde_nota_debito_id'] = array('campo' => 'PdeNotaDebito', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('afip_citi_compras_alicuotas.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('afip_citi_compras_alicuotas.observacion');
	$comparador = $criterio->getComparadorDeCampo('afip_citi_compras_alicuotas.observacion');

	$filtros['afip_citi_compras_alicuotas.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('afip_citi_compras_alicuotas.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('afip_citi_compras_alicuotas.orden');
	$comparador = $criterio->getComparadorDeCampo('afip_citi_compras_alicuotas.orden');

	$filtros['afip_citi_compras_alicuotas.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('afip_citi_compras_alicuotas.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('afip_citi_compras_alicuotas.estado');
	$comparador = $criterio->getComparadorDeCampo('afip_citi_compras_alicuotas.estado');

	$filtros['afip_citi_compras_alicuotas.estado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('afip_citi_compras_alicuotas.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('afip_citi_compras_alicuotas.creado');
	$comparador = $criterio->getComparadorDeCampo('afip_citi_compras_alicuotas.creado');

	$filtros['afip_citi_compras_alicuotas.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('afip_citi_compras_alicuotas.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('afip_citi_compras_alicuotas.creado_por');
	$comparador = $criterio->getComparadorDeCampo('afip_citi_compras_alicuotas.creado_por');

	$filtros['afip_citi_compras_alicuotas.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('afip_citi_compras_alicuotas.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('afip_citi_compras_alicuotas.modificado');
	$comparador = $criterio->getComparadorDeCampo('afip_citi_compras_alicuotas.modificado');

	$filtros['afip_citi_compras_alicuotas.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('afip_citi_compras_alicuotas.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('afip_citi_compras_alicuotas.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('afip_citi_compras_alicuotas.modificado_por');

	$filtros['afip_citi_compras_alicuotas.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

