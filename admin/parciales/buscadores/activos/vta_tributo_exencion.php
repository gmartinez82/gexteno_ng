<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['vta_tributo_exencion.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('vta_tributo_exencion.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_tributo_exencion.id');
	$comparador = $criterio->getComparadorDeCampo('vta_tributo_exencion.id');

	$filtros['vta_tributo_exencion.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_tributo_exencion.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_tributo_exencion.descripcion');
	$comparador = $criterio->getComparadorDeCampo('vta_tributo_exencion.descripcion');

	$filtros['vta_tributo_exencion.descripcion'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_tributo_exencion.vta_tributo_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_tributo_exencion.vta_tributo_id');
	$o = VtaTributo::getOxId($criterio->getValorDeCampo('vta_tributo_exencion.vta_tributo_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('vta_tributo_exencion.vta_tributo_id');

	$filtros['vta_tributo_exencion.vta_tributo_id'] = array('campo' => 'VtaTributo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_tributo_exencion.cli_cliente_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_tributo_exencion.cli_cliente_id');
	$comparador = $criterio->getComparadorDeCampo('vta_tributo_exencion.cli_cliente_id');

	$filtros['vta_tributo_exencion.cli_cliente_id'] = array('campo' => 'CliCliente', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_tributo_exencion.fecha_inicio') != ''){
	$valor = Gral::getFechaToWeb($valor = $criterio->getValorDeCampo('vta_tributo_exencion.fecha_inicio'));
	$comparador = $criterio->getComparadorDeCampo('vta_tributo_exencion.fecha_inicio');

	$filtros['vta_tributo_exencion.fecha_inicio'] = array('campo' => 'Fecha de Inicio', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_tributo_exencion.fecha_fin') != ''){
	$valor = Gral::getFechaToWeb($valor = $criterio->getValorDeCampo('vta_tributo_exencion.fecha_fin'));
	$comparador = $criterio->getComparadorDeCampo('vta_tributo_exencion.fecha_fin');

	$filtros['vta_tributo_exencion.fecha_fin'] = array('campo' => 'Fecha de Fin', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_tributo_exencion.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_tributo_exencion.codigo');
	$comparador = $criterio->getComparadorDeCampo('vta_tributo_exencion.codigo');

	$filtros['vta_tributo_exencion.codigo'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_tributo_exencion.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_tributo_exencion.observacion');
	$comparador = $criterio->getComparadorDeCampo('vta_tributo_exencion.observacion');

	$filtros['vta_tributo_exencion.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_tributo_exencion.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_tributo_exencion.orden');
	$comparador = $criterio->getComparadorDeCampo('vta_tributo_exencion.orden');

	$filtros['vta_tributo_exencion.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_tributo_exencion.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_tributo_exencion.estado');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('vta_tributo_exencion.estado'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('vta_tributo_exencion.estado');

	$filtros['vta_tributo_exencion.estado'] = array('campo' => 'Estado', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_tributo_exencion.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_tributo_exencion.creado');
	$comparador = $criterio->getComparadorDeCampo('vta_tributo_exencion.creado');

	$filtros['vta_tributo_exencion.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_tributo_exencion.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_tributo_exencion.creado_por');
	$comparador = $criterio->getComparadorDeCampo('vta_tributo_exencion.creado_por');

	$filtros['vta_tributo_exencion.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_tributo_exencion.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_tributo_exencion.modificado');
	$comparador = $criterio->getComparadorDeCampo('vta_tributo_exencion.modificado');

	$filtros['vta_tributo_exencion.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_tributo_exencion.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_tributo_exencion.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('vta_tributo_exencion.modificado_por');

	$filtros['vta_tributo_exencion.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

