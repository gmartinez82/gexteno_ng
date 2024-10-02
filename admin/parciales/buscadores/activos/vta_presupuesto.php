<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['vta_presupuesto.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('vta_presupuesto.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_presupuesto.id');
	$comparador = $criterio->getComparadorDeCampo('vta_presupuesto.id');

	$filtros['vta_presupuesto.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_presupuesto.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_presupuesto.descripcion');
	$comparador = $criterio->getComparadorDeCampo('vta_presupuesto.descripcion');

	$filtros['vta_presupuesto.descripcion'] = array('campo' => 'Descripcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_presupuesto.cli_cliente_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_presupuesto.cli_cliente_id');
	$o = CliCliente::getOxId($criterio->getValorDeCampo('vta_presupuesto.cli_cliente_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('vta_presupuesto.cli_cliente_id');

	$filtros['vta_presupuesto.cli_cliente_id'] = array('campo' => 'CliCliente', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_presupuesto.vta_vendedor_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_presupuesto.vta_vendedor_id');
	$o = VtaVendedor::getOxId($criterio->getValorDeCampo('vta_presupuesto.vta_vendedor_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('vta_presupuesto.vta_vendedor_id');

	$filtros['vta_presupuesto.vta_vendedor_id'] = array('campo' => 'VtaVendedor', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_presupuesto.vta_comprador_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_presupuesto.vta_comprador_id');
	$o = VtaComprador::getOxId($criterio->getValorDeCampo('vta_presupuesto.vta_comprador_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('vta_presupuesto.vta_comprador_id');

	$filtros['vta_presupuesto.vta_comprador_id'] = array('campo' => 'VtaComprador', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_presupuesto.vta_preventista_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_presupuesto.vta_preventista_id');
	$o = VtaPreventista::getOxId($criterio->getValorDeCampo('vta_presupuesto.vta_preventista_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('vta_presupuesto.vta_preventista_id');

	$filtros['vta_presupuesto.vta_preventista_id'] = array('campo' => 'VtaPreventista', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_presupuesto.gral_actividad_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_presupuesto.gral_actividad_id');
	$o = GralActividad::getOxId($criterio->getValorDeCampo('vta_presupuesto.gral_actividad_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('vta_presupuesto.gral_actividad_id');

	$filtros['vta_presupuesto.gral_actividad_id'] = array('campo' => 'GralActividad', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_presupuesto.gral_escenario_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_presupuesto.gral_escenario_id');
	$o = GralEscenario::getOxId($criterio->getValorDeCampo('vta_presupuesto.gral_escenario_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('vta_presupuesto.gral_escenario_id');

	$filtros['vta_presupuesto.gral_escenario_id'] = array('campo' => 'GralEscenario', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_presupuesto.gral_fp_forma_pago_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_presupuesto.gral_fp_forma_pago_id');
	$o = GralFpFormaPago::getOxId($criterio->getValorDeCampo('vta_presupuesto.gral_fp_forma_pago_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('vta_presupuesto.gral_fp_forma_pago_id');

	$filtros['vta_presupuesto.gral_fp_forma_pago_id'] = array('campo' => 'GralFpFormaPago', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_presupuesto.gral_fp_cuota_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_presupuesto.gral_fp_cuota_id');
	$o = GralFpCuota::getOxId($criterio->getValorDeCampo('vta_presupuesto.gral_fp_cuota_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('vta_presupuesto.gral_fp_cuota_id');

	$filtros['vta_presupuesto.gral_fp_cuota_id'] = array('campo' => 'GralFpCuota', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_presupuesto.ins_tipo_lista_precio_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_presupuesto.ins_tipo_lista_precio_id');
	$o = InsTipoListaPrecio::getOxId($criterio->getValorDeCampo('vta_presupuesto.ins_tipo_lista_precio_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('vta_presupuesto.ins_tipo_lista_precio_id');

	$filtros['vta_presupuesto.ins_tipo_lista_precio_id'] = array('campo' => 'InsTipoListaPrecio', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_presupuesto.vta_presupuesto_tipo_estado_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_presupuesto.vta_presupuesto_tipo_estado_id');
	$o = VtaPresupuestoTipoEstado::getOxId($criterio->getValorDeCampo('vta_presupuesto.vta_presupuesto_tipo_estado_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('vta_presupuesto.vta_presupuesto_tipo_estado_id');

	$filtros['vta_presupuesto.vta_presupuesto_tipo_estado_id'] = array('campo' => 'VtaPresupuestoTipoEstado', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_presupuesto.gral_condicion_iva_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_presupuesto.gral_condicion_iva_id');
	$o = GralCondicionIva::getOxId($criterio->getValorDeCampo('vta_presupuesto.gral_condicion_iva_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('vta_presupuesto.gral_condicion_iva_id');

	$filtros['vta_presupuesto.gral_condicion_iva_id'] = array('campo' => 'GralCondicionIva', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_presupuesto.vta_presupuesto_tipo_emision_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_presupuesto.vta_presupuesto_tipo_emision_id');
	$o = VtaPresupuestoTipoEmision::getOxId($criterio->getValorDeCampo('vta_presupuesto.vta_presupuesto_tipo_emision_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('vta_presupuesto.vta_presupuesto_tipo_emision_id');

	$filtros['vta_presupuesto.vta_presupuesto_tipo_emision_id'] = array('campo' => 'VtaPresupuestoTipoEmision', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_presupuesto.gral_tipo_documento_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_presupuesto.gral_tipo_documento_id');
	$o = GralTipoDocumento::getOxId($criterio->getValorDeCampo('vta_presupuesto.gral_tipo_documento_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('vta_presupuesto.gral_tipo_documento_id');

	$filtros['vta_presupuesto.gral_tipo_documento_id'] = array('campo' => 'GralTipoDocumento', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_presupuesto.persona_descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_presupuesto.persona_descripcion');
	$comparador = $criterio->getComparadorDeCampo('vta_presupuesto.persona_descripcion');

	$filtros['vta_presupuesto.persona_descripcion'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_presupuesto.persona_documento') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_presupuesto.persona_documento');
	$comparador = $criterio->getComparadorDeCampo('vta_presupuesto.persona_documento');

	$filtros['vta_presupuesto.persona_documento'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_presupuesto.persona_email') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_presupuesto.persona_email');
	$comparador = $criterio->getComparadorDeCampo('vta_presupuesto.persona_email');

	$filtros['vta_presupuesto.persona_email'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_presupuesto.fecha') != ''){
	$valor = Gral::getFechaToWeb($valor = $criterio->getValorDeCampo('vta_presupuesto.fecha'));
	$comparador = $criterio->getComparadorDeCampo('vta_presupuesto.fecha');

	$filtros['vta_presupuesto.fecha'] = array('campo' => 'Fecha', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_presupuesto.fecha_vencimiento') != ''){
	$valor = Gral::getFechaToWeb($valor = $criterio->getValorDeCampo('vta_presupuesto.fecha_vencimiento'));
	$comparador = $criterio->getComparadorDeCampo('vta_presupuesto.fecha_vencimiento');

	$filtros['vta_presupuesto.fecha_vencimiento'] = array('campo' => 'Fecha de Vencimiento', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_presupuesto.fecha_entrega') != ''){
	$valor = Gral::getFechaToWeb($valor = $criterio->getValorDeCampo('vta_presupuesto.fecha_entrega'));
	$comparador = $criterio->getComparadorDeCampo('vta_presupuesto.fecha_entrega');

	$filtros['vta_presupuesto.fecha_entrega'] = array('campo' => 'Fecha de Entrega', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_presupuesto.fecha_recordatorio') != ''){
	$valor = Gral::getFechaToWeb($valor = $criterio->getValorDeCampo('vta_presupuesto.fecha_recordatorio'));
	$comparador = $criterio->getComparadorDeCampo('vta_presupuesto.fecha_recordatorio');

	$filtros['vta_presupuesto.fecha_recordatorio'] = array('campo' => 'Fecha de Recordatorio', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_presupuesto.importe_subtotal') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_presupuesto.importe_subtotal');
	$comparador = $criterio->getComparadorDeCampo('vta_presupuesto.importe_subtotal');

	$filtros['vta_presupuesto.importe_subtotal'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_presupuesto.importe_descuento') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_presupuesto.importe_descuento');
	$comparador = $criterio->getComparadorDeCampo('vta_presupuesto.importe_descuento');

	$filtros['vta_presupuesto.importe_descuento'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_presupuesto.importe_politica_descuento') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_presupuesto.importe_politica_descuento');
	$comparador = $criterio->getComparadorDeCampo('vta_presupuesto.importe_politica_descuento');

	$filtros['vta_presupuesto.importe_politica_descuento'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_presupuesto.importe_recargo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_presupuesto.importe_recargo');
	$comparador = $criterio->getComparadorDeCampo('vta_presupuesto.importe_recargo');

	$filtros['vta_presupuesto.importe_recargo'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_presupuesto.importe_total') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_presupuesto.importe_total');
	$comparador = $criterio->getComparadorDeCampo('vta_presupuesto.importe_total');

	$filtros['vta_presupuesto.importe_total'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_presupuesto.cantidad_items') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_presupuesto.cantidad_items');
	$comparador = $criterio->getComparadorDeCampo('vta_presupuesto.cantidad_items');

	$filtros['vta_presupuesto.cantidad_items'] = array('campo' => 'Cant Items', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_presupuesto.recargo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_presupuesto.recargo');
	$comparador = $criterio->getComparadorDeCampo('vta_presupuesto.recargo');

	$filtros['vta_presupuesto.recargo'] = array('campo' => 'Recargo %', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_presupuesto.nota_interna') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_presupuesto.nota_interna');
	$comparador = $criterio->getComparadorDeCampo('vta_presupuesto.nota_interna');

	$filtros['vta_presupuesto.nota_interna'] = array('campo' => 'Nota Interna', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_presupuesto.nota_recordatorio') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_presupuesto.nota_recordatorio');
	$comparador = $criterio->getComparadorDeCampo('vta_presupuesto.nota_recordatorio');

	$filtros['vta_presupuesto.nota_recordatorio'] = array('campo' => 'Nota de Recordatorio', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_presupuesto.destacado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_presupuesto.destacado');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('vta_presupuesto.destacado'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('vta_presupuesto.destacado');

	$filtros['vta_presupuesto.destacado'] = array('campo' => 'Destacado', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_presupuesto.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_presupuesto.codigo');
	$comparador = $criterio->getComparadorDeCampo('vta_presupuesto.codigo');

	$filtros['vta_presupuesto.codigo'] = array('campo' => 'Codigo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_presupuesto.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_presupuesto.observacion');
	$comparador = $criterio->getComparadorDeCampo('vta_presupuesto.observacion');

	$filtros['vta_presupuesto.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_presupuesto.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_presupuesto.orden');
	$comparador = $criterio->getComparadorDeCampo('vta_presupuesto.orden');

	$filtros['vta_presupuesto.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_presupuesto.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_presupuesto.estado');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('vta_presupuesto.estado'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('vta_presupuesto.estado');

	$filtros['vta_presupuesto.estado'] = array('campo' => 'Estado', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_presupuesto.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_presupuesto.creado');
	$comparador = $criterio->getComparadorDeCampo('vta_presupuesto.creado');

	$filtros['vta_presupuesto.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_presupuesto.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_presupuesto.creado_por');
	$comparador = $criterio->getComparadorDeCampo('vta_presupuesto.creado_por');

	$filtros['vta_presupuesto.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_presupuesto.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_presupuesto.modificado');
	$comparador = $criterio->getComparadorDeCampo('vta_presupuesto.modificado');

	$filtros['vta_presupuesto.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_presupuesto.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_presupuesto.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('vta_presupuesto.modificado_por');

	$filtros['vta_presupuesto.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

