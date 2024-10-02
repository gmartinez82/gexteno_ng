<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['pdi_estado.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('pdi_estado.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pdi_estado.id');
	$comparador = $criterio->getComparadorDeCampo('pdi_estado.id');

	$filtros['pdi_estado.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pdi_estado.pdi_pedido_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pdi_estado.pdi_pedido_id');
	$o = PdiPedido::getOxId($criterio->getValorDeCampo('pdi_estado.pdi_pedido_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('pdi_estado.pdi_pedido_id');

	$filtros['pdi_estado.pdi_pedido_id'] = array('campo' => 'PdiPedido', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pdi_estado.pdi_tipo_estado_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pdi_estado.pdi_tipo_estado_id');
	$o = PdiTipoEstado::getOxId($criterio->getValorDeCampo('pdi_estado.pdi_tipo_estado_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('pdi_estado.pdi_tipo_estado_id');

	$filtros['pdi_estado.pdi_tipo_estado_id'] = array('campo' => 'PdiTipoEstado', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pdi_estado.inicial') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pdi_estado.inicial');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('pdi_estado.inicial'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('pdi_estado.inicial');

	$filtros['pdi_estado.inicial'] = array('campo' => 'Inicial', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pdi_estado.actual') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pdi_estado.actual');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('pdi_estado.actual'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('pdi_estado.actual');

	$filtros['pdi_estado.actual'] = array('campo' => 'Actual', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pdi_estado.cantidad') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pdi_estado.cantidad');
	$comparador = $criterio->getComparadorDeCampo('pdi_estado.cantidad');

	$filtros['pdi_estado.cantidad'] = array('campo' => 'Cantidad', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pdi_estado.cantidad_stock_real') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pdi_estado.cantidad_stock_real');
	$comparador = $criterio->getComparadorDeCampo('pdi_estado.cantidad_stock_real');

	$filtros['pdi_estado.cantidad_stock_real'] = array('campo' => 'Cantidad Stock Real', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pdi_estado.cantidad_stock_comprometida') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pdi_estado.cantidad_stock_comprometida');
	$comparador = $criterio->getComparadorDeCampo('pdi_estado.cantidad_stock_comprometida');

	$filtros['pdi_estado.cantidad_stock_comprometida'] = array('campo' => 'Cantidad Stock Comprometida', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pdi_estado.fechahora') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pdi_estado.fechahora');
	$comparador = $criterio->getComparadorDeCampo('pdi_estado.fechahora');

	$filtros['pdi_estado.fechahora'] = array('campo' => 'Fecha Hora', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pdi_estado.venta_perdida') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pdi_estado.venta_perdida');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('pdi_estado.venta_perdida'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('pdi_estado.venta_perdida');

	$filtros['pdi_estado.venta_perdida'] = array('campo' => 'Venta Perdida', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pdi_estado.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pdi_estado.observacion');
	$comparador = $criterio->getComparadorDeCampo('pdi_estado.observacion');

	$filtros['pdi_estado.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pdi_estado.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pdi_estado.creado');
	$comparador = $criterio->getComparadorDeCampo('pdi_estado.creado');

	$filtros['pdi_estado.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pdi_estado.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pdi_estado.creado_por');
	$comparador = $criterio->getComparadorDeCampo('pdi_estado.creado_por');

	$filtros['pdi_estado.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pdi_estado.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pdi_estado.modificado');
	$comparador = $criterio->getComparadorDeCampo('pdi_estado.modificado');

	$filtros['pdi_estado.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pdi_estado.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pdi_estado.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('pdi_estado.modificado_por');

	$filtros['pdi_estado.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

