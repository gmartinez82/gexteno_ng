<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['vta_orden_venta_tipo_estado_cobro.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('vta_orden_venta_tipo_estado_cobro.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_orden_venta_tipo_estado_cobro.id');
	$comparador = $criterio->getComparadorDeCampo('vta_orden_venta_tipo_estado_cobro.id');

	$filtros['vta_orden_venta_tipo_estado_cobro.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_orden_venta_tipo_estado_cobro.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_orden_venta_tipo_estado_cobro.descripcion');
	$comparador = $criterio->getComparadorDeCampo('vta_orden_venta_tipo_estado_cobro.descripcion');

	$filtros['vta_orden_venta_tipo_estado_cobro.descripcion'] = array('campo' => 'Descripcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_orden_venta_tipo_estado_cobro.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_orden_venta_tipo_estado_cobro.codigo');
	$comparador = $criterio->getComparadorDeCampo('vta_orden_venta_tipo_estado_cobro.codigo');

	$filtros['vta_orden_venta_tipo_estado_cobro.codigo'] = array('campo' => 'Codigo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_orden_venta_tipo_estado_cobro.activo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_orden_venta_tipo_estado_cobro.activo');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('vta_orden_venta_tipo_estado_cobro.activo'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('vta_orden_venta_tipo_estado_cobro.activo');

	$filtros['vta_orden_venta_tipo_estado_cobro.activo'] = array('campo' => 'Activo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_orden_venta_tipo_estado_cobro.terminal') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_orden_venta_tipo_estado_cobro.terminal');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('vta_orden_venta_tipo_estado_cobro.terminal'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('vta_orden_venta_tipo_estado_cobro.terminal');

	$filtros['vta_orden_venta_tipo_estado_cobro.terminal'] = array('campo' => 'Terminal', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_orden_venta_tipo_estado_cobro.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_orden_venta_tipo_estado_cobro.observacion');
	$comparador = $criterio->getComparadorDeCampo('vta_orden_venta_tipo_estado_cobro.observacion');

	$filtros['vta_orden_venta_tipo_estado_cobro.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_orden_venta_tipo_estado_cobro.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_orden_venta_tipo_estado_cobro.orden');
	$comparador = $criterio->getComparadorDeCampo('vta_orden_venta_tipo_estado_cobro.orden');

	$filtros['vta_orden_venta_tipo_estado_cobro.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_orden_venta_tipo_estado_cobro.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_orden_venta_tipo_estado_cobro.estado');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('vta_orden_venta_tipo_estado_cobro.estado'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('vta_orden_venta_tipo_estado_cobro.estado');

	$filtros['vta_orden_venta_tipo_estado_cobro.estado'] = array('campo' => 'Estado', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_orden_venta_tipo_estado_cobro.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_orden_venta_tipo_estado_cobro.creado');
	$comparador = $criterio->getComparadorDeCampo('vta_orden_venta_tipo_estado_cobro.creado');

	$filtros['vta_orden_venta_tipo_estado_cobro.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_orden_venta_tipo_estado_cobro.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_orden_venta_tipo_estado_cobro.creado_por');
	$comparador = $criterio->getComparadorDeCampo('vta_orden_venta_tipo_estado_cobro.creado_por');

	$filtros['vta_orden_venta_tipo_estado_cobro.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_orden_venta_tipo_estado_cobro.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_orden_venta_tipo_estado_cobro.modificado');
	$comparador = $criterio->getComparadorDeCampo('vta_orden_venta_tipo_estado_cobro.modificado');

	$filtros['vta_orden_venta_tipo_estado_cobro.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_orden_venta_tipo_estado_cobro.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_orden_venta_tipo_estado_cobro.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('vta_orden_venta_tipo_estado_cobro.modificado_por');

	$filtros['vta_orden_venta_tipo_estado_cobro.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

