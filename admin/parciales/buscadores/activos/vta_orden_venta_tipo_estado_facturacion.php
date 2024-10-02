<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['vta_orden_venta_tipo_estado_facturacion.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('vta_orden_venta_tipo_estado_facturacion.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_orden_venta_tipo_estado_facturacion.id');
	$comparador = $criterio->getComparadorDeCampo('vta_orden_venta_tipo_estado_facturacion.id');

	$filtros['vta_orden_venta_tipo_estado_facturacion.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_orden_venta_tipo_estado_facturacion.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_orden_venta_tipo_estado_facturacion.descripcion');
	$comparador = $criterio->getComparadorDeCampo('vta_orden_venta_tipo_estado_facturacion.descripcion');

	$filtros['vta_orden_venta_tipo_estado_facturacion.descripcion'] = array('campo' => 'Descripcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_orden_venta_tipo_estado_facturacion.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_orden_venta_tipo_estado_facturacion.codigo');
	$comparador = $criterio->getComparadorDeCampo('vta_orden_venta_tipo_estado_facturacion.codigo');

	$filtros['vta_orden_venta_tipo_estado_facturacion.codigo'] = array('campo' => 'Codigo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_orden_venta_tipo_estado_facturacion.activo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_orden_venta_tipo_estado_facturacion.activo');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('vta_orden_venta_tipo_estado_facturacion.activo'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('vta_orden_venta_tipo_estado_facturacion.activo');

	$filtros['vta_orden_venta_tipo_estado_facturacion.activo'] = array('campo' => 'Activo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_orden_venta_tipo_estado_facturacion.terminal') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_orden_venta_tipo_estado_facturacion.terminal');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('vta_orden_venta_tipo_estado_facturacion.terminal'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('vta_orden_venta_tipo_estado_facturacion.terminal');

	$filtros['vta_orden_venta_tipo_estado_facturacion.terminal'] = array('campo' => 'Terminal', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_orden_venta_tipo_estado_facturacion.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_orden_venta_tipo_estado_facturacion.observacion');
	$comparador = $criterio->getComparadorDeCampo('vta_orden_venta_tipo_estado_facturacion.observacion');

	$filtros['vta_orden_venta_tipo_estado_facturacion.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_orden_venta_tipo_estado_facturacion.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_orden_venta_tipo_estado_facturacion.orden');
	$comparador = $criterio->getComparadorDeCampo('vta_orden_venta_tipo_estado_facturacion.orden');

	$filtros['vta_orden_venta_tipo_estado_facturacion.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_orden_venta_tipo_estado_facturacion.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_orden_venta_tipo_estado_facturacion.estado');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('vta_orden_venta_tipo_estado_facturacion.estado'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('vta_orden_venta_tipo_estado_facturacion.estado');

	$filtros['vta_orden_venta_tipo_estado_facturacion.estado'] = array('campo' => 'Estado', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_orden_venta_tipo_estado_facturacion.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_orden_venta_tipo_estado_facturacion.creado');
	$comparador = $criterio->getComparadorDeCampo('vta_orden_venta_tipo_estado_facturacion.creado');

	$filtros['vta_orden_venta_tipo_estado_facturacion.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_orden_venta_tipo_estado_facturacion.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_orden_venta_tipo_estado_facturacion.creado_por');
	$comparador = $criterio->getComparadorDeCampo('vta_orden_venta_tipo_estado_facturacion.creado_por');

	$filtros['vta_orden_venta_tipo_estado_facturacion.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_orden_venta_tipo_estado_facturacion.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_orden_venta_tipo_estado_facturacion.modificado');
	$comparador = $criterio->getComparadorDeCampo('vta_orden_venta_tipo_estado_facturacion.modificado');

	$filtros['vta_orden_venta_tipo_estado_facturacion.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_orden_venta_tipo_estado_facturacion.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_orden_venta_tipo_estado_facturacion.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('vta_orden_venta_tipo_estado_facturacion.modificado_por');

	$filtros['vta_orden_venta_tipo_estado_facturacion.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

