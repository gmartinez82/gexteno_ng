<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['pde_recepcion.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('pde_recepcion.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_recepcion.id');
	$comparador = $criterio->getComparadorDeCampo('pde_recepcion.id');

	$filtros['pde_recepcion.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_recepcion.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_recepcion.descripcion');
	$comparador = $criterio->getComparadorDeCampo('pde_recepcion.descripcion');

	$filtros['pde_recepcion.descripcion'] = array('campo' => 'Descripcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_recepcion.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_recepcion.codigo');
	$comparador = $criterio->getComparadorDeCampo('pde_recepcion.codigo');

	$filtros['pde_recepcion.codigo'] = array('campo' => 'Codigo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_recepcion.nro_comprobante') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_recepcion.nro_comprobante');
	$comparador = $criterio->getComparadorDeCampo('pde_recepcion.nro_comprobante');

	$filtros['pde_recepcion.nro_comprobante'] = array('campo' => 'Nro Comprobante', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_recepcion.pde_tipo_recepcion_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_recepcion.pde_tipo_recepcion_id');
	$o = PdeTipoRecepcion::getOxId($criterio->getValorDeCampo('pde_recepcion.pde_tipo_recepcion_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('pde_recepcion.pde_tipo_recepcion_id');

	$filtros['pde_recepcion.pde_tipo_recepcion_id'] = array('campo' => 'PdeTipoRecepcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_recepcion.pde_centro_recepcion_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_recepcion.pde_centro_recepcion_id');
	$o = PdeCentroRecepcion::getOxId($criterio->getValorDeCampo('pde_recepcion.pde_centro_recepcion_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('pde_recepcion.pde_centro_recepcion_id');

	$filtros['pde_recepcion.pde_centro_recepcion_id'] = array('campo' => 'PdeCentroRecepcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_recepcion.prv_proveedor_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_recepcion.prv_proveedor_id');
	$o = PrvProveedor::getOxId($criterio->getValorDeCampo('pde_recepcion.prv_proveedor_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('pde_recepcion.prv_proveedor_id');

	$filtros['pde_recepcion.prv_proveedor_id'] = array('campo' => 'PrvProveedor', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_recepcion.pde_pedido_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_recepcion.pde_pedido_id');
	$o = PdePedido::getOxId($criterio->getValorDeCampo('pde_recepcion.pde_pedido_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('pde_recepcion.pde_pedido_id');

	$filtros['pde_recepcion.pde_pedido_id'] = array('campo' => 'PdePedido', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_recepcion.pde_oc_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_recepcion.pde_oc_id');
	$o = PdeOc::getOxId($criterio->getValorDeCampo('pde_recepcion.pde_oc_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('pde_recepcion.pde_oc_id');

	$filtros['pde_recepcion.pde_oc_id'] = array('campo' => 'PdeOc', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_recepcion.ins_insumo_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_recepcion.ins_insumo_id');
	$o = InsInsumo::getOxId($criterio->getValorDeCampo('pde_recepcion.ins_insumo_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('pde_recepcion.ins_insumo_id');

	$filtros['pde_recepcion.ins_insumo_id'] = array('campo' => 'InsInsumo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_recepcion.pde_recepcion_tipo_estado_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_recepcion.pde_recepcion_tipo_estado_id');
	$o = PdeRecepcionTipoEstado::getOxId($criterio->getValorDeCampo('pde_recepcion.pde_recepcion_tipo_estado_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('pde_recepcion.pde_recepcion_tipo_estado_id');

	$filtros['pde_recepcion.pde_recepcion_tipo_estado_id'] = array('campo' => 'PdeRecepcionTipoEstado', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_recepcion.pde_recepcion_tipo_estado_facturacion_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_recepcion.pde_recepcion_tipo_estado_facturacion_id');
	$o = PdeRecepcionTipoEstadoFacturacion::getOxId($criterio->getValorDeCampo('pde_recepcion.pde_recepcion_tipo_estado_facturacion_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('pde_recepcion.pde_recepcion_tipo_estado_facturacion_id');

	$filtros['pde_recepcion.pde_recepcion_tipo_estado_facturacion_id'] = array('campo' => 'PdeRecepcionTipoEstadoFacturacion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_recepcion.cantidad') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_recepcion.cantidad');
	$comparador = $criterio->getComparadorDeCampo('pde_recepcion.cantidad');

	$filtros['pde_recepcion.cantidad'] = array('campo' => 'Cantidad', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_recepcion.fecha_entrega') != ''){
	$valor = Gral::getFechaToWeb($valor = $criterio->getValorDeCampo('pde_recepcion.fecha_entrega'));
	$comparador = $criterio->getComparadorDeCampo('pde_recepcion.fecha_entrega');

	$filtros['pde_recepcion.fecha_entrega'] = array('campo' => 'Fecha Entrega', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_recepcion.importe_unidad') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_recepcion.importe_unidad');
	$comparador = $criterio->getComparadorDeCampo('pde_recepcion.importe_unidad');

	$filtros['pde_recepcion.importe_unidad'] = array('campo' => 'Importe Unidad', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_recepcion.importe_total') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_recepcion.importe_total');
	$comparador = $criterio->getComparadorDeCampo('pde_recepcion.importe_total');

	$filtros['pde_recepcion.importe_total'] = array('campo' => 'Importe Total', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_recepcion.vencimiento') != ''){
	$valor = Gral::getFechaToWeb($valor = $criterio->getValorDeCampo('pde_recepcion.vencimiento'));
	$comparador = $criterio->getComparadorDeCampo('pde_recepcion.vencimiento');

	$filtros['pde_recepcion.vencimiento'] = array('campo' => 'Vencimiento', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_recepcion.pde_recepcion_agrupacion_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_recepcion.pde_recepcion_agrupacion_id');
	$o = PdeRecepcionAgrupacion::getOxId($criterio->getValorDeCampo('pde_recepcion.pde_recepcion_agrupacion_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('pde_recepcion.pde_recepcion_agrupacion_id');

	$filtros['pde_recepcion.pde_recepcion_agrupacion_id'] = array('campo' => 'PdeRecepcionAgrupacion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_recepcion.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_recepcion.observacion');
	$comparador = $criterio->getComparadorDeCampo('pde_recepcion.observacion');

	$filtros['pde_recepcion.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_recepcion.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_recepcion.orden');
	$comparador = $criterio->getComparadorDeCampo('pde_recepcion.orden');

	$filtros['pde_recepcion.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_recepcion.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_recepcion.estado');
	$comparador = $criterio->getComparadorDeCampo('pde_recepcion.estado');

	$filtros['pde_recepcion.estado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_recepcion.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_recepcion.creado');
	$comparador = $criterio->getComparadorDeCampo('pde_recepcion.creado');

	$filtros['pde_recepcion.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_recepcion.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_recepcion.creado_por');
	$comparador = $criterio->getComparadorDeCampo('pde_recepcion.creado_por');

	$filtros['pde_recepcion.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_recepcion.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_recepcion.modificado');
	$comparador = $criterio->getComparadorDeCampo('pde_recepcion.modificado');

	$filtros['pde_recepcion.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_recepcion.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_recepcion.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('pde_recepcion.modificado_por');

	$filtros['pde_recepcion.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

