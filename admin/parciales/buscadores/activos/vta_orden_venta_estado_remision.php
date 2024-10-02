<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['vta_orden_venta_estado_remision.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('vta_orden_venta_estado_remision.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_orden_venta_estado_remision.id');
	$comparador = $criterio->getComparadorDeCampo('vta_orden_venta_estado_remision.id');

	$filtros['vta_orden_venta_estado_remision.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_orden_venta_estado_remision.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_orden_venta_estado_remision.descripcion');
	$comparador = $criterio->getComparadorDeCampo('vta_orden_venta_estado_remision.descripcion');

	$filtros['vta_orden_venta_estado_remision.descripcion'] = array('campo' => 'Descripcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_orden_venta_estado_remision.vta_orden_venta_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_orden_venta_estado_remision.vta_orden_venta_id');
	$o = VtaOrdenVenta::getOxId($criterio->getValorDeCampo('vta_orden_venta_estado_remision.vta_orden_venta_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('vta_orden_venta_estado_remision.vta_orden_venta_id');

	$filtros['vta_orden_venta_estado_remision.vta_orden_venta_id'] = array('campo' => 'VtaOrdenVenta', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_orden_venta_estado_remision.vta_orden_venta_tipo_estado_remision_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_orden_venta_estado_remision.vta_orden_venta_tipo_estado_remision_id');
	$o = VtaOrdenVentaTipoEstadoRemision::getOxId($criterio->getValorDeCampo('vta_orden_venta_estado_remision.vta_orden_venta_tipo_estado_remision_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('vta_orden_venta_estado_remision.vta_orden_venta_tipo_estado_remision_id');

	$filtros['vta_orden_venta_estado_remision.vta_orden_venta_tipo_estado_remision_id'] = array('campo' => 'VtaOrdenVentaTipoEstadoRemision', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_orden_venta_estado_remision.inicial') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_orden_venta_estado_remision.inicial');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('vta_orden_venta_estado_remision.inicial'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('vta_orden_venta_estado_remision.inicial');

	$filtros['vta_orden_venta_estado_remision.inicial'] = array('campo' => 'Inicial', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_orden_venta_estado_remision.actual') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_orden_venta_estado_remision.actual');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('vta_orden_venta_estado_remision.actual'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('vta_orden_venta_estado_remision.actual');

	$filtros['vta_orden_venta_estado_remision.actual'] = array('campo' => 'Actual', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_orden_venta_estado_remision.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_orden_venta_estado_remision.codigo');
	$comparador = $criterio->getComparadorDeCampo('vta_orden_venta_estado_remision.codigo');

	$filtros['vta_orden_venta_estado_remision.codigo'] = array('campo' => 'Codigo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_orden_venta_estado_remision.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_orden_venta_estado_remision.observacion');
	$comparador = $criterio->getComparadorDeCampo('vta_orden_venta_estado_remision.observacion');

	$filtros['vta_orden_venta_estado_remision.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_orden_venta_estado_remision.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_orden_venta_estado_remision.orden');
	$comparador = $criterio->getComparadorDeCampo('vta_orden_venta_estado_remision.orden');

	$filtros['vta_orden_venta_estado_remision.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_orden_venta_estado_remision.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_orden_venta_estado_remision.estado');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('vta_orden_venta_estado_remision.estado'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('vta_orden_venta_estado_remision.estado');

	$filtros['vta_orden_venta_estado_remision.estado'] = array('campo' => 'Estado', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_orden_venta_estado_remision.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_orden_venta_estado_remision.creado');
	$comparador = $criterio->getComparadorDeCampo('vta_orden_venta_estado_remision.creado');

	$filtros['vta_orden_venta_estado_remision.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_orden_venta_estado_remision.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_orden_venta_estado_remision.creado_por');
	$comparador = $criterio->getComparadorDeCampo('vta_orden_venta_estado_remision.creado_por');

	$filtros['vta_orden_venta_estado_remision.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_orden_venta_estado_remision.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_orden_venta_estado_remision.modificado');
	$comparador = $criterio->getComparadorDeCampo('vta_orden_venta_estado_remision.modificado');

	$filtros['vta_orden_venta_estado_remision.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_orden_venta_estado_remision.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_orden_venta_estado_remision.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('vta_orden_venta_estado_remision.modificado_por');

	$filtros['vta_orden_venta_estado_remision.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

