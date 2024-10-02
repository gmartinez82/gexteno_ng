<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['ins_stock_movimiento.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('ins_stock_movimiento.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_stock_movimiento.id');
	$comparador = $criterio->getComparadorDeCampo('ins_stock_movimiento.id');

	$filtros['ins_stock_movimiento.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_stock_movimiento.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_stock_movimiento.descripcion');
	$comparador = $criterio->getComparadorDeCampo('ins_stock_movimiento.descripcion');

	$filtros['ins_stock_movimiento.descripcion'] = array('campo' => 'Descripcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_stock_movimiento.ins_stock_tipo_movimiento_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_stock_movimiento.ins_stock_tipo_movimiento_id');
	$o = InsStockTipoMovimiento::getOxId($criterio->getValorDeCampo('ins_stock_movimiento.ins_stock_tipo_movimiento_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('ins_stock_movimiento.ins_stock_tipo_movimiento_id');

	$filtros['ins_stock_movimiento.ins_stock_tipo_movimiento_id'] = array('campo' => 'InsStockTipoMovimiento', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_stock_movimiento.ins_insumo_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_stock_movimiento.ins_insumo_id');
	$o = InsInsumo::getOxId($criterio->getValorDeCampo('ins_stock_movimiento.ins_insumo_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('ins_stock_movimiento.ins_insumo_id');

	$filtros['ins_stock_movimiento.ins_insumo_id'] = array('campo' => 'InsInsumo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_stock_movimiento.pdi_pedido_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_stock_movimiento.pdi_pedido_id');
	$o = PdiPedido::getOxId($criterio->getValorDeCampo('ins_stock_movimiento.pdi_pedido_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('ins_stock_movimiento.pdi_pedido_id');

	$filtros['ins_stock_movimiento.pdi_pedido_id'] = array('campo' => 'PdiPedido', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_stock_movimiento.pan_panol_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_stock_movimiento.pan_panol_id');
	$o = PanPanol::getOxId($criterio->getValorDeCampo('ins_stock_movimiento.pan_panol_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('ins_stock_movimiento.pan_panol_id');

	$filtros['ins_stock_movimiento.pan_panol_id'] = array('campo' => 'PanPanol', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_stock_movimiento.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_stock_movimiento.codigo');
	$comparador = $criterio->getComparadorDeCampo('ins_stock_movimiento.codigo');

	$filtros['ins_stock_movimiento.codigo'] = array('campo' => 'Codigo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_stock_movimiento.cantidad') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_stock_movimiento.cantidad');
	$comparador = $criterio->getComparadorDeCampo('ins_stock_movimiento.cantidad');

	$filtros['ins_stock_movimiento.cantidad'] = array('campo' => 'Cantidad', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_stock_movimiento.cantidad_real') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_stock_movimiento.cantidad_real');
	$comparador = $criterio->getComparadorDeCampo('ins_stock_movimiento.cantidad_real');

	$filtros['ins_stock_movimiento.cantidad_real'] = array('campo' => 'Cantidad Real', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_stock_movimiento.cantidad_comprometida') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_stock_movimiento.cantidad_comprometida');
	$comparador = $criterio->getComparadorDeCampo('ins_stock_movimiento.cantidad_comprometida');

	$filtros['ins_stock_movimiento.cantidad_comprometida'] = array('campo' => 'Cantidad Comprometida', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_stock_movimiento.cantidad_pasivo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_stock_movimiento.cantidad_pasivo');
	$comparador = $criterio->getComparadorDeCampo('ins_stock_movimiento.cantidad_pasivo');

	$filtros['ins_stock_movimiento.cantidad_pasivo'] = array('campo' => 'Cant Pasivo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_stock_movimiento.fechahora') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_stock_movimiento.fechahora');
	$comparador = $criterio->getComparadorDeCampo('ins_stock_movimiento.fechahora');

	$filtros['ins_stock_movimiento.fechahora'] = array('campo' => 'Fecha Hora', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_stock_movimiento.vta_remito_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_stock_movimiento.vta_remito_id');
	$comparador = $criterio->getComparadorDeCampo('ins_stock_movimiento.vta_remito_id');

	$filtros['ins_stock_movimiento.vta_remito_id'] = array('campo' => 'VtaRemito', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_stock_movimiento.pde_recepcion_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_stock_movimiento.pde_recepcion_id');
	$o = PdeRecepcion::getOxId($criterio->getValorDeCampo('ins_stock_movimiento.pde_recepcion_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('ins_stock_movimiento.pde_recepcion_id');

	$filtros['ins_stock_movimiento.pde_recepcion_id'] = array('campo' => 'PdeRecepcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_stock_movimiento.ins_stock_transformacion_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_stock_movimiento.ins_stock_transformacion_id');
	$comparador = $criterio->getComparadorDeCampo('ins_stock_movimiento.ins_stock_transformacion_id');

	$filtros['ins_stock_movimiento.ins_stock_transformacion_id'] = array('campo' => 'InsStockTransformacion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_stock_movimiento.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_stock_movimiento.observacion');
	$comparador = $criterio->getComparadorDeCampo('ins_stock_movimiento.observacion');

	$filtros['ins_stock_movimiento.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_stock_movimiento.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_stock_movimiento.orden');
	$comparador = $criterio->getComparadorDeCampo('ins_stock_movimiento.orden');

	$filtros['ins_stock_movimiento.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_stock_movimiento.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_stock_movimiento.estado');
	$comparador = $criterio->getComparadorDeCampo('ins_stock_movimiento.estado');

	$filtros['ins_stock_movimiento.estado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_stock_movimiento.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_stock_movimiento.creado');
	$comparador = $criterio->getComparadorDeCampo('ins_stock_movimiento.creado');

	$filtros['ins_stock_movimiento.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_stock_movimiento.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_stock_movimiento.creado_por');
	$comparador = $criterio->getComparadorDeCampo('ins_stock_movimiento.creado_por');

	$filtros['ins_stock_movimiento.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_stock_movimiento.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_stock_movimiento.modificado');
	$comparador = $criterio->getComparadorDeCampo('ins_stock_movimiento.modificado');

	$filtros['ins_stock_movimiento.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_stock_movimiento.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_stock_movimiento.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('ins_stock_movimiento.modificado_por');

	$filtros['ins_stock_movimiento.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

