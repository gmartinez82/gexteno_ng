<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['vta_factura.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('vta_factura.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_factura.id');
	$comparador = $criterio->getComparadorDeCampo('vta_factura.id');

	$filtros['vta_factura.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_factura.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_factura.descripcion');
	$comparador = $criterio->getComparadorDeCampo('vta_factura.descripcion');

	$filtros['vta_factura.descripcion'] = array('campo' => 'Descripcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_factura.cli_cliente_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_factura.cli_cliente_id');
	$o = CliCliente::getOxId($criterio->getValorDeCampo('vta_factura.cli_cliente_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('vta_factura.cli_cliente_id');

	$filtros['vta_factura.cli_cliente_id'] = array('campo' => 'CliCliente', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_factura.vta_factura_tipo_estado_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_factura.vta_factura_tipo_estado_id');
	$o = VtaFacturaTipoEstado::getOxId($criterio->getValorDeCampo('vta_factura.vta_factura_tipo_estado_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('vta_factura.vta_factura_tipo_estado_id');

	$filtros['vta_factura.vta_factura_tipo_estado_id'] = array('campo' => 'VtaFacturaTipoEstado', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_factura.vta_tipo_factura_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_factura.vta_tipo_factura_id');
	$o = VtaTipoFactura::getOxId($criterio->getValorDeCampo('vta_factura.vta_tipo_factura_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('vta_factura.vta_tipo_factura_id');

	$filtros['vta_factura.vta_tipo_factura_id'] = array('campo' => 'VtaTipoFactura', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_factura.vta_tipo_origen_factura_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_factura.vta_tipo_origen_factura_id');
	$o = VtaTipoOrigenFactura::getOxId($criterio->getValorDeCampo('vta_factura.vta_tipo_origen_factura_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('vta_factura.vta_tipo_origen_factura_id');

	$filtros['vta_factura.vta_tipo_origen_factura_id'] = array('campo' => 'VtaTipoOrigenFactura', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_factura.gral_condicion_iva_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_factura.gral_condicion_iva_id');
	$o = GralCondicionIva::getOxId($criterio->getValorDeCampo('vta_factura.gral_condicion_iva_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('vta_factura.gral_condicion_iva_id');

	$filtros['vta_factura.gral_condicion_iva_id'] = array('campo' => 'GralCondicionIva', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_factura.gral_tipo_personeria_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_factura.gral_tipo_personeria_id');
	$o = GralTipoPersoneria::getOxId($criterio->getValorDeCampo('vta_factura.gral_tipo_personeria_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('vta_factura.gral_tipo_personeria_id');

	$filtros['vta_factura.gral_tipo_personeria_id'] = array('campo' => 'GralTipoPersoneria', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_factura.gral_empresa_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_factura.gral_empresa_id');
	$o = GralEmpresa::getOxId($criterio->getValorDeCampo('vta_factura.gral_empresa_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('vta_factura.gral_empresa_id');

	$filtros['vta_factura.gral_empresa_id'] = array('campo' => 'GralEmpresa', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_factura.vta_punto_venta_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_factura.vta_punto_venta_id');
	$o = VtaPuntoVenta::getOxId($criterio->getValorDeCampo('vta_factura.vta_punto_venta_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('vta_factura.vta_punto_venta_id');

	$filtros['vta_factura.vta_punto_venta_id'] = array('campo' => 'VtaPuntoVenta', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_factura.gral_fp_forma_pago_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_factura.gral_fp_forma_pago_id');
	$o = GralFpFormaPago::getOxId($criterio->getValorDeCampo('vta_factura.gral_fp_forma_pago_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('vta_factura.gral_fp_forma_pago_id');

	$filtros['vta_factura.gral_fp_forma_pago_id'] = array('campo' => 'GralFpFormaPago', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_factura.gral_fp_cuota_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_factura.gral_fp_cuota_id');
	$o = GralFpCuota::getOxId($criterio->getValorDeCampo('vta_factura.gral_fp_cuota_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('vta_factura.gral_fp_cuota_id');

	$filtros['vta_factura.gral_fp_cuota_id'] = array('campo' => 'GralFpCuota', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_factura.vta_preventista_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_factura.vta_preventista_id');
	$o = VtaPreventista::getOxId($criterio->getValorDeCampo('vta_factura.vta_preventista_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('vta_factura.vta_preventista_id');

	$filtros['vta_factura.vta_preventista_id'] = array('campo' => 'VtaPreventista', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_factura.vta_comprador_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_factura.vta_comprador_id');
	$o = VtaComprador::getOxId($criterio->getValorDeCampo('vta_factura.vta_comprador_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('vta_factura.vta_comprador_id');

	$filtros['vta_factura.vta_comprador_id'] = array('campo' => 'VtaComprador', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_factura.vta_vendedor_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_factura.vta_vendedor_id');
	$o = VtaVendedor::getOxId($criterio->getValorDeCampo('vta_factura.vta_vendedor_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('vta_factura.vta_vendedor_id');

	$filtros['vta_factura.vta_vendedor_id'] = array('campo' => 'VtaVendedor', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_factura.gral_actividad_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_factura.gral_actividad_id');
	$o = GralActividad::getOxId($criterio->getValorDeCampo('vta_factura.gral_actividad_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('vta_factura.gral_actividad_id');

	$filtros['vta_factura.gral_actividad_id'] = array('campo' => 'GralActividad', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_factura.gral_escenario_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_factura.gral_escenario_id');
	$o = GralEscenario::getOxId($criterio->getValorDeCampo('vta_factura.gral_escenario_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('vta_factura.gral_escenario_id');

	$filtros['vta_factura.gral_escenario_id'] = array('campo' => 'GralEscenario', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_factura.numero_punto_venta') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_factura.numero_punto_venta');
	$comparador = $criterio->getComparadorDeCampo('vta_factura.numero_punto_venta');

	$filtros['vta_factura.numero_punto_venta'] = array('campo' => 'Numero de Pto Vta', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_factura.numero_factura') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_factura.numero_factura');
	$comparador = $criterio->getComparadorDeCampo('vta_factura.numero_factura');

	$filtros['vta_factura.numero_factura'] = array('campo' => 'Numero de Factura', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_factura.numero_factura_completo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_factura.numero_factura_completo');
	$comparador = $criterio->getComparadorDeCampo('vta_factura.numero_factura_completo');

	$filtros['vta_factura.numero_factura_completo'] = array('campo' => 'Numero de Factura Completo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_factura.cae') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_factura.cae');
	$comparador = $criterio->getComparadorDeCampo('vta_factura.cae');

	$filtros['vta_factura.cae'] = array('campo' => 'Cae', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_factura.fecha_emision') != ''){
	$valor = Gral::getFechaToWeb($valor = $criterio->getValorDeCampo('vta_factura.fecha_emision'));
	$comparador = $criterio->getComparadorDeCampo('vta_factura.fecha_emision');

	$filtros['vta_factura.fecha_emision'] = array('campo' => 'Fecha de Emision', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_factura.fecha_vencimiento') != ''){
	$valor = Gral::getFechaToWeb($valor = $criterio->getValorDeCampo('vta_factura.fecha_vencimiento'));
	$comparador = $criterio->getComparadorDeCampo('vta_factura.fecha_vencimiento');

	$filtros['vta_factura.fecha_vencimiento'] = array('campo' => 'Fecha de Vencimiento', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_factura.gral_tipo_documento_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_factura.gral_tipo_documento_id');
	$o = GralTipoDocumento::getOxId($criterio->getValorDeCampo('vta_factura.gral_tipo_documento_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('vta_factura.gral_tipo_documento_id');

	$filtros['vta_factura.gral_tipo_documento_id'] = array('campo' => 'GralTipoDocumento', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_factura.persona_descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_factura.persona_descripcion');
	$comparador = $criterio->getComparadorDeCampo('vta_factura.persona_descripcion');

	$filtros['vta_factura.persona_descripcion'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_factura.persona_documento') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_factura.persona_documento');
	$comparador = $criterio->getComparadorDeCampo('vta_factura.persona_documento');

	$filtros['vta_factura.persona_documento'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_factura.persona_email') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_factura.persona_email');
	$comparador = $criterio->getComparadorDeCampo('vta_factura.persona_email');

	$filtros['vta_factura.persona_email'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_factura.razon_social') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_factura.razon_social');
	$comparador = $criterio->getComparadorDeCampo('vta_factura.razon_social');

	$filtros['vta_factura.razon_social'] = array('campo' => 'Razon Social', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_factura.domicilio_legal') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_factura.domicilio_legal');
	$comparador = $criterio->getComparadorDeCampo('vta_factura.domicilio_legal');

	$filtros['vta_factura.domicilio_legal'] = array('campo' => 'Domicilio Legal', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_factura.cuit') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_factura.cuit');
	$comparador = $criterio->getComparadorDeCampo('vta_factura.cuit');

	$filtros['vta_factura.cuit'] = array('campo' => 'CUIT', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_factura.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_factura.codigo');
	$comparador = $criterio->getComparadorDeCampo('vta_factura.codigo');

	$filtros['vta_factura.codigo'] = array('campo' => 'Codigo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_factura.vta_presupuesto_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_factura.vta_presupuesto_id');
	$o = VtaPresupuesto::getOxId($criterio->getValorDeCampo('vta_factura.vta_presupuesto_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('vta_factura.vta_presupuesto_id');

	$filtros['vta_factura.vta_presupuesto_id'] = array('campo' => 'VtaPresupuesto', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_factura.nota_publica') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_factura.nota_publica');
	$comparador = $criterio->getComparadorDeCampo('vta_factura.nota_publica');

	$filtros['vta_factura.nota_publica'] = array('campo' => 'Nota Publica', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_factura.anio') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_factura.anio');
	$comparador = $criterio->getComparadorDeCampo('vta_factura.anio');

	$filtros['vta_factura.anio'] = array('campo' => 'Anio', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_factura.gral_mes_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_factura.gral_mes_id');
	$o = GralMes::getOxId($criterio->getValorDeCampo('vta_factura.gral_mes_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('vta_factura.gral_mes_id');

	$filtros['vta_factura.gral_mes_id'] = array('campo' => 'GralMes', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_factura.cntb_diario_asiento_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_factura.cntb_diario_asiento_id');
	$o = CntbDiarioAsiento::getOxId($criterio->getValorDeCampo('vta_factura.cntb_diario_asiento_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('vta_factura.cntb_diario_asiento_id');

	$filtros['vta_factura.cntb_diario_asiento_id'] = array('campo' => 'CntbDiarioAsiento', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_factura.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_factura.observacion');
	$comparador = $criterio->getComparadorDeCampo('vta_factura.observacion');

	$filtros['vta_factura.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_factura.nota_interna') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_factura.nota_interna');
	$comparador = $criterio->getComparadorDeCampo('vta_factura.nota_interna');

	$filtros['vta_factura.nota_interna'] = array('campo' => 'Nota Interna', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_factura.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_factura.orden');
	$comparador = $criterio->getComparadorDeCampo('vta_factura.orden');

	$filtros['vta_factura.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_factura.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_factura.estado');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('vta_factura.estado'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('vta_factura.estado');

	$filtros['vta_factura.estado'] = array('campo' => 'Estado', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_factura.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_factura.creado');
	$comparador = $criterio->getComparadorDeCampo('vta_factura.creado');

	$filtros['vta_factura.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_factura.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_factura.creado_por');
	$comparador = $criterio->getComparadorDeCampo('vta_factura.creado_por');

	$filtros['vta_factura.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_factura.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_factura.modificado');
	$comparador = $criterio->getComparadorDeCampo('vta_factura.modificado');

	$filtros['vta_factura.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_factura.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_factura.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('vta_factura.modificado_por');

	$filtros['vta_factura.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

