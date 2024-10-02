<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['cli_cliente_vta_punto_venta.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('cli_cliente_vta_punto_venta.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cli_cliente_vta_punto_venta.id');
	$comparador = $criterio->getComparadorDeCampo('cli_cliente_vta_punto_venta.id');

	$filtros['cli_cliente_vta_punto_venta.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cli_cliente_vta_punto_venta.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cli_cliente_vta_punto_venta.descripcion');
	$comparador = $criterio->getComparadorDeCampo('cli_cliente_vta_punto_venta.descripcion');

	$filtros['cli_cliente_vta_punto_venta.descripcion'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cli_cliente_vta_punto_venta.cli_cliente_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cli_cliente_vta_punto_venta.cli_cliente_id');
	$o = CliCliente::getOxId($criterio->getValorDeCampo('cli_cliente_vta_punto_venta.cli_cliente_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('cli_cliente_vta_punto_venta.cli_cliente_id');

	$filtros['cli_cliente_vta_punto_venta.cli_cliente_id'] = array('campo' => 'CliCliente', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cli_cliente_vta_punto_venta.vta_punto_venta_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cli_cliente_vta_punto_venta.vta_punto_venta_id');
	$o = VtaPuntoVenta::getOxId($criterio->getValorDeCampo('cli_cliente_vta_punto_venta.vta_punto_venta_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('cli_cliente_vta_punto_venta.vta_punto_venta_id');

	$filtros['cli_cliente_vta_punto_venta.vta_punto_venta_id'] = array('campo' => 'VtaPuntoVenta', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cli_cliente_vta_punto_venta.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cli_cliente_vta_punto_venta.codigo');
	$comparador = $criterio->getComparadorDeCampo('cli_cliente_vta_punto_venta.codigo');

	$filtros['cli_cliente_vta_punto_venta.codigo'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cli_cliente_vta_punto_venta.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cli_cliente_vta_punto_venta.observacion');
	$comparador = $criterio->getComparadorDeCampo('cli_cliente_vta_punto_venta.observacion');

	$filtros['cli_cliente_vta_punto_venta.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cli_cliente_vta_punto_venta.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cli_cliente_vta_punto_venta.orden');
	$comparador = $criterio->getComparadorDeCampo('cli_cliente_vta_punto_venta.orden');

	$filtros['cli_cliente_vta_punto_venta.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cli_cliente_vta_punto_venta.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cli_cliente_vta_punto_venta.estado');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('cli_cliente_vta_punto_venta.estado'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('cli_cliente_vta_punto_venta.estado');

	$filtros['cli_cliente_vta_punto_venta.estado'] = array('campo' => 'Estado', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cli_cliente_vta_punto_venta.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cli_cliente_vta_punto_venta.creado');
	$comparador = $criterio->getComparadorDeCampo('cli_cliente_vta_punto_venta.creado');

	$filtros['cli_cliente_vta_punto_venta.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cli_cliente_vta_punto_venta.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cli_cliente_vta_punto_venta.creado_por');
	$comparador = $criterio->getComparadorDeCampo('cli_cliente_vta_punto_venta.creado_por');

	$filtros['cli_cliente_vta_punto_venta.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cli_cliente_vta_punto_venta.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cli_cliente_vta_punto_venta.modificado');
	$comparador = $criterio->getComparadorDeCampo('cli_cliente_vta_punto_venta.modificado');

	$filtros['cli_cliente_vta_punto_venta.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cli_cliente_vta_punto_venta.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cli_cliente_vta_punto_venta.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('cli_cliente_vta_punto_venta.modificado_por');

	$filtros['cli_cliente_vta_punto_venta.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

