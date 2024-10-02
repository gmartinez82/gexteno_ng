<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['pde_cotizacion.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('pde_cotizacion.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_cotizacion.id');
	$comparador = $criterio->getComparadorDeCampo('pde_cotizacion.id');

	$filtros['pde_cotizacion.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_cotizacion.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_cotizacion.descripcion');
	$comparador = $criterio->getComparadorDeCampo('pde_cotizacion.descripcion');

	$filtros['pde_cotizacion.descripcion'] = array('campo' => 'Descripcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_cotizacion.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_cotizacion.codigo');
	$comparador = $criterio->getComparadorDeCampo('pde_cotizacion.codigo');

	$filtros['pde_cotizacion.codigo'] = array('campo' => 'Codigo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_cotizacion.pde_pedido_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_cotizacion.pde_pedido_id');
	$o = PdePedido::getOxId($criterio->getValorDeCampo('pde_cotizacion.pde_pedido_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('pde_cotizacion.pde_pedido_id');

	$filtros['pde_cotizacion.pde_pedido_id'] = array('campo' => 'PdePedido', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_cotizacion.prv_proveedor_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_cotizacion.prv_proveedor_id');
	$o = PrvProveedor::getOxId($criterio->getValorDeCampo('pde_cotizacion.prv_proveedor_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('pde_cotizacion.prv_proveedor_id');

	$filtros['pde_cotizacion.prv_proveedor_id'] = array('campo' => 'PrvProveedor', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_cotizacion.ins_insumo_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_cotizacion.ins_insumo_id');
	$o = InsInsumo::getOxId($criterio->getValorDeCampo('pde_cotizacion.ins_insumo_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('pde_cotizacion.ins_insumo_id');

	$filtros['pde_cotizacion.ins_insumo_id'] = array('campo' => 'InsInsumo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_cotizacion.cantidad') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_cotizacion.cantidad');
	$comparador = $criterio->getComparadorDeCampo('pde_cotizacion.cantidad');

	$filtros['pde_cotizacion.cantidad'] = array('campo' => 'Cantidad', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_cotizacion.fecha_entrega') != ''){
	$valor = Gral::getFechaToWeb($valor = $criterio->getValorDeCampo('pde_cotizacion.fecha_entrega'));
	$comparador = $criterio->getComparadorDeCampo('pde_cotizacion.fecha_entrega');

	$filtros['pde_cotizacion.fecha_entrega'] = array('campo' => 'Fecha Entrega', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_cotizacion.importe_unidad') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_cotizacion.importe_unidad');
	$comparador = $criterio->getComparadorDeCampo('pde_cotizacion.importe_unidad');

	$filtros['pde_cotizacion.importe_unidad'] = array('campo' => 'Importe Unidad', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_cotizacion.importe_total') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_cotizacion.importe_total');
	$comparador = $criterio->getComparadorDeCampo('pde_cotizacion.importe_total');

	$filtros['pde_cotizacion.importe_total'] = array('campo' => 'Importe Total', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_cotizacion.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_cotizacion.observacion');
	$comparador = $criterio->getComparadorDeCampo('pde_cotizacion.observacion');

	$filtros['pde_cotizacion.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_cotizacion.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_cotizacion.orden');
	$comparador = $criterio->getComparadorDeCampo('pde_cotizacion.orden');

	$filtros['pde_cotizacion.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_cotizacion.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_cotizacion.estado');
	$comparador = $criterio->getComparadorDeCampo('pde_cotizacion.estado');

	$filtros['pde_cotizacion.estado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_cotizacion.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_cotizacion.creado');
	$comparador = $criterio->getComparadorDeCampo('pde_cotizacion.creado');

	$filtros['pde_cotizacion.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_cotizacion.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_cotizacion.creado_por');
	$comparador = $criterio->getComparadorDeCampo('pde_cotizacion.creado_por');

	$filtros['pde_cotizacion.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_cotizacion.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_cotizacion.modificado');
	$comparador = $criterio->getComparadorDeCampo('pde_cotizacion.modificado');

	$filtros['pde_cotizacion.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_cotizacion.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_cotizacion.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('pde_cotizacion.modificado_por');

	$filtros['pde_cotizacion.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

