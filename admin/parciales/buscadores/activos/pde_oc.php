<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['pde_oc.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('pde_oc.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_oc.id');
	$comparador = $criterio->getComparadorDeCampo('pde_oc.id');

	$filtros['pde_oc.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_oc.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_oc.descripcion');
	$comparador = $criterio->getComparadorDeCampo('pde_oc.descripcion');

	$filtros['pde_oc.descripcion'] = array('campo' => 'Descripcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_oc.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_oc.codigo');
	$comparador = $criterio->getComparadorDeCampo('pde_oc.codigo');

	$filtros['pde_oc.codigo'] = array('campo' => 'Codigo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_oc.pde_pedido_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_oc.pde_pedido_id');
	$o = PdePedido::getOxId($criterio->getValorDeCampo('pde_oc.pde_pedido_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('pde_oc.pde_pedido_id');

	$filtros['pde_oc.pde_pedido_id'] = array('campo' => 'PdePedido', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_oc.pde_cotizacion_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_oc.pde_cotizacion_id');
	$o = PdeCotizacion::getOxId($criterio->getValorDeCampo('pde_oc.pde_cotizacion_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('pde_oc.pde_cotizacion_id');

	$filtros['pde_oc.pde_cotizacion_id'] = array('campo' => 'PdeCotizacion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_oc.prv_proveedor_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_oc.prv_proveedor_id');
	$o = PrvProveedor::getOxId($criterio->getValorDeCampo('pde_oc.prv_proveedor_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('pde_oc.prv_proveedor_id');

	$filtros['pde_oc.prv_proveedor_id'] = array('campo' => 'PrvProveedor', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_oc.ins_insumo_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_oc.ins_insumo_id');
	$o = InsInsumo::getOxId($criterio->getValorDeCampo('pde_oc.ins_insumo_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('pde_oc.ins_insumo_id');

	$filtros['pde_oc.ins_insumo_id'] = array('campo' => 'InsInsumo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_oc.pde_oc_agrupacion_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_oc.pde_oc_agrupacion_id');
	$o = PdeOcAgrupacion::getOxId($criterio->getValorDeCampo('pde_oc.pde_oc_agrupacion_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('pde_oc.pde_oc_agrupacion_id');

	$filtros['pde_oc.pde_oc_agrupacion_id'] = array('campo' => 'PdeOcAgrupacion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_oc.pde_centro_pedido_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_oc.pde_centro_pedido_id');
	$o = PdeCentroPedido::getOxId($criterio->getValorDeCampo('pde_oc.pde_centro_pedido_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('pde_oc.pde_centro_pedido_id');

	$filtros['pde_oc.pde_centro_pedido_id'] = array('campo' => 'PdeCentroPedido', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_oc.pde_centro_recepcion_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_oc.pde_centro_recepcion_id');
	$o = PdeCentroRecepcion::getOxId($criterio->getValorDeCampo('pde_oc.pde_centro_recepcion_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('pde_oc.pde_centro_recepcion_id');

	$filtros['pde_oc.pde_centro_recepcion_id'] = array('campo' => 'PdeCentroRecepcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_oc.pde_oc_tipo_estado_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_oc.pde_oc_tipo_estado_id');
	$o = PdeOcTipoEstado::getOxId($criterio->getValorDeCampo('pde_oc.pde_oc_tipo_estado_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('pde_oc.pde_oc_tipo_estado_id');

	$filtros['pde_oc.pde_oc_tipo_estado_id'] = array('campo' => 'PdeOcTipoEstado', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_oc.pde_oc_tipo_estado_recepcion_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_oc.pde_oc_tipo_estado_recepcion_id');
	$o = PdeOcTipoEstadoRecepcion::getOxId($criterio->getValorDeCampo('pde_oc.pde_oc_tipo_estado_recepcion_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('pde_oc.pde_oc_tipo_estado_recepcion_id');

	$filtros['pde_oc.pde_oc_tipo_estado_recepcion_id'] = array('campo' => 'PdeOcTipoEstadoRecepcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_oc.pde_oc_tipo_estado_facturacion_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_oc.pde_oc_tipo_estado_facturacion_id');
	$o = PdeOcTipoEstadoFacturacion::getOxId($criterio->getValorDeCampo('pde_oc.pde_oc_tipo_estado_facturacion_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('pde_oc.pde_oc_tipo_estado_facturacion_id');

	$filtros['pde_oc.pde_oc_tipo_estado_facturacion_id'] = array('campo' => 'PdeOcTipoEstadoFacturacion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_oc.pde_oc_tipo_origen_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_oc.pde_oc_tipo_origen_id');
	$o = PdeOcTipoOrigen::getOxId($criterio->getValorDeCampo('pde_oc.pde_oc_tipo_origen_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('pde_oc.pde_oc_tipo_origen_id');

	$filtros['pde_oc.pde_oc_tipo_origen_id'] = array('campo' => 'PdeOcTipoOrigen', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_oc.cantidad') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_oc.cantidad');
	$comparador = $criterio->getComparadorDeCampo('pde_oc.cantidad');

	$filtros['pde_oc.cantidad'] = array('campo' => 'Cantidad', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_oc.fecha_entrega') != ''){
	$valor = Gral::getFechaToWeb($valor = $criterio->getValorDeCampo('pde_oc.fecha_entrega'));
	$comparador = $criterio->getComparadorDeCampo('pde_oc.fecha_entrega');

	$filtros['pde_oc.fecha_entrega'] = array('campo' => 'Fecha Entrega', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_oc.importe_unidad') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_oc.importe_unidad');
	$comparador = $criterio->getComparadorDeCampo('pde_oc.importe_unidad');

	$filtros['pde_oc.importe_unidad'] = array('campo' => 'Importe Unidad', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_oc.importe_total') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_oc.importe_total');
	$comparador = $criterio->getComparadorDeCampo('pde_oc.importe_total');

	$filtros['pde_oc.importe_total'] = array('campo' => 'Importe Total', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_oc.vencimiento') != ''){
	$valor = Gral::getFechaToWeb($valor = $criterio->getValorDeCampo('pde_oc.vencimiento'));
	$comparador = $criterio->getComparadorDeCampo('pde_oc.vencimiento');

	$filtros['pde_oc.vencimiento'] = array('campo' => 'Vencimiento', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_oc.prv_insumo_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_oc.prv_insumo_id');
	$comparador = $criterio->getComparadorDeCampo('pde_oc.prv_insumo_id');

	$filtros['pde_oc.prv_insumo_id'] = array('campo' => 'PrvInsumo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_oc.prv_insumo_costo_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_oc.prv_insumo_costo_id');
	$comparador = $criterio->getComparadorDeCampo('pde_oc.prv_insumo_costo_id');

	$filtros['pde_oc.prv_insumo_costo_id'] = array('campo' => 'PrvInsumoCosto', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_oc.importe_esperado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_oc.importe_esperado');
	$comparador = $criterio->getComparadorDeCampo('pde_oc.importe_esperado');

	$filtros['pde_oc.importe_esperado'] = array('campo' => 'Importe Esperado', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_oc.afecta_costo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_oc.afecta_costo');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('pde_oc.afecta_costo'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('pde_oc.afecta_costo');

	$filtros['pde_oc.afecta_costo'] = array('campo' => 'Afecta Costo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_oc.prv_descuento_financiero_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_oc.prv_descuento_financiero_id');
	$o = PrvDescuentoFinanciero::getOxId($criterio->getValorDeCampo('pde_oc.prv_descuento_financiero_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('pde_oc.prv_descuento_financiero_id');

	$filtros['pde_oc.prv_descuento_financiero_id'] = array('campo' => 'PrvDescuentoFinanciero', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_oc.prv_descuento_comercial_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_oc.prv_descuento_comercial_id');
	$o = PrvDescuentoComercial::getOxId($criterio->getValorDeCampo('pde_oc.prv_descuento_comercial_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('pde_oc.prv_descuento_comercial_id');

	$filtros['pde_oc.prv_descuento_comercial_id'] = array('campo' => 'PrvDescuentoComercial', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_oc.nota_publica') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_oc.nota_publica');
	$comparador = $criterio->getComparadorDeCampo('pde_oc.nota_publica');

	$filtros['pde_oc.nota_publica'] = array('campo' => 'Nota Publica', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_oc.nota_interna') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_oc.nota_interna');
	$comparador = $criterio->getComparadorDeCampo('pde_oc.nota_interna');

	$filtros['pde_oc.nota_interna'] = array('campo' => 'Nota Interna', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_oc.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_oc.observacion');
	$comparador = $criterio->getComparadorDeCampo('pde_oc.observacion');

	$filtros['pde_oc.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_oc.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_oc.orden');
	$comparador = $criterio->getComparadorDeCampo('pde_oc.orden');

	$filtros['pde_oc.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_oc.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_oc.estado');
	$comparador = $criterio->getComparadorDeCampo('pde_oc.estado');

	$filtros['pde_oc.estado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_oc.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_oc.creado');
	$comparador = $criterio->getComparadorDeCampo('pde_oc.creado');

	$filtros['pde_oc.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_oc.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_oc.creado_por');
	$comparador = $criterio->getComparadorDeCampo('pde_oc.creado_por');

	$filtros['pde_oc.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_oc.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_oc.modificado');
	$comparador = $criterio->getComparadorDeCampo('pde_oc.modificado');

	$filtros['pde_oc.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_oc.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_oc.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('pde_oc.modificado_por');

	$filtros['pde_oc.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

