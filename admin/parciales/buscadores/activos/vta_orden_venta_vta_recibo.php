<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['vta_orden_venta_vta_recibo.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('vta_orden_venta_vta_recibo.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_orden_venta_vta_recibo.id');
	$comparador = $criterio->getComparadorDeCampo('vta_orden_venta_vta_recibo.id');

	$filtros['vta_orden_venta_vta_recibo.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_orden_venta_vta_recibo.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_orden_venta_vta_recibo.descripcion');
	$comparador = $criterio->getComparadorDeCampo('vta_orden_venta_vta_recibo.descripcion');

	$filtros['vta_orden_venta_vta_recibo.descripcion'] = array('campo' => 'Descripcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_orden_venta_vta_recibo.vta_orden_venta_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_orden_venta_vta_recibo.vta_orden_venta_id');
	$o = VtaOrdenVenta::getOxId($criterio->getValorDeCampo('vta_orden_venta_vta_recibo.vta_orden_venta_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('vta_orden_venta_vta_recibo.vta_orden_venta_id');

	$filtros['vta_orden_venta_vta_recibo.vta_orden_venta_id'] = array('campo' => 'VtaOrdenVenta', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_orden_venta_vta_recibo.vta_recibo_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_orden_venta_vta_recibo.vta_recibo_id');
	$o = VtaRecibo::getOxId($criterio->getValorDeCampo('vta_orden_venta_vta_recibo.vta_recibo_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('vta_orden_venta_vta_recibo.vta_recibo_id');

	$filtros['vta_orden_venta_vta_recibo.vta_recibo_id'] = array('campo' => 'VtaRecibo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_orden_venta_vta_recibo.importe_afectado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_orden_venta_vta_recibo.importe_afectado');
	$comparador = $criterio->getComparadorDeCampo('vta_orden_venta_vta_recibo.importe_afectado');

	$filtros['vta_orden_venta_vta_recibo.importe_afectado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_orden_venta_vta_recibo.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_orden_venta_vta_recibo.codigo');
	$comparador = $criterio->getComparadorDeCampo('vta_orden_venta_vta_recibo.codigo');

	$filtros['vta_orden_venta_vta_recibo.codigo'] = array('campo' => 'Codigo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_orden_venta_vta_recibo.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_orden_venta_vta_recibo.observacion');
	$comparador = $criterio->getComparadorDeCampo('vta_orden_venta_vta_recibo.observacion');

	$filtros['vta_orden_venta_vta_recibo.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_orden_venta_vta_recibo.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_orden_venta_vta_recibo.orden');
	$comparador = $criterio->getComparadorDeCampo('vta_orden_venta_vta_recibo.orden');

	$filtros['vta_orden_venta_vta_recibo.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_orden_venta_vta_recibo.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_orden_venta_vta_recibo.estado');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('vta_orden_venta_vta_recibo.estado'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('vta_orden_venta_vta_recibo.estado');

	$filtros['vta_orden_venta_vta_recibo.estado'] = array('campo' => 'Estado', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_orden_venta_vta_recibo.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_orden_venta_vta_recibo.creado');
	$comparador = $criterio->getComparadorDeCampo('vta_orden_venta_vta_recibo.creado');

	$filtros['vta_orden_venta_vta_recibo.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_orden_venta_vta_recibo.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_orden_venta_vta_recibo.creado_por');
	$comparador = $criterio->getComparadorDeCampo('vta_orden_venta_vta_recibo.creado_por');

	$filtros['vta_orden_venta_vta_recibo.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_orden_venta_vta_recibo.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_orden_venta_vta_recibo.modificado');
	$comparador = $criterio->getComparadorDeCampo('vta_orden_venta_vta_recibo.modificado');

	$filtros['vta_orden_venta_vta_recibo.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_orden_venta_vta_recibo.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_orden_venta_vta_recibo.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('vta_orden_venta_vta_recibo.modificado_por');

	$filtros['vta_orden_venta_vta_recibo.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

