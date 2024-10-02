<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['gral_sucursal_cli_cliente.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('gral_sucursal_cli_cliente.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_sucursal_cli_cliente.id');
	$comparador = $criterio->getComparadorDeCampo('gral_sucursal_cli_cliente.id');

	$filtros['gral_sucursal_cli_cliente.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_sucursal_cli_cliente.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_sucursal_cli_cliente.descripcion');
	$comparador = $criterio->getComparadorDeCampo('gral_sucursal_cli_cliente.descripcion');

	$filtros['gral_sucursal_cli_cliente.descripcion'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_sucursal_cli_cliente.gral_sucursal_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_sucursal_cli_cliente.gral_sucursal_id');
	$o = GralSucursal::getOxId($criterio->getValorDeCampo('gral_sucursal_cli_cliente.gral_sucursal_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('gral_sucursal_cli_cliente.gral_sucursal_id');

	$filtros['gral_sucursal_cli_cliente.gral_sucursal_id'] = array('campo' => 'GralSucursal', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_sucursal_cli_cliente.cli_cliente_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_sucursal_cli_cliente.cli_cliente_id');
	$comparador = $criterio->getComparadorDeCampo('gral_sucursal_cli_cliente.cli_cliente_id');

	$filtros['gral_sucursal_cli_cliente.cli_cliente_id'] = array('campo' => 'CliCliente', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_sucursal_cli_cliente.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_sucursal_cli_cliente.codigo');
	$comparador = $criterio->getComparadorDeCampo('gral_sucursal_cli_cliente.codigo');

	$filtros['gral_sucursal_cli_cliente.codigo'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_sucursal_cli_cliente.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_sucursal_cli_cliente.observacion');
	$comparador = $criterio->getComparadorDeCampo('gral_sucursal_cli_cliente.observacion');

	$filtros['gral_sucursal_cli_cliente.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_sucursal_cli_cliente.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_sucursal_cli_cliente.orden');
	$comparador = $criterio->getComparadorDeCampo('gral_sucursal_cli_cliente.orden');

	$filtros['gral_sucursal_cli_cliente.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_sucursal_cli_cliente.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_sucursal_cli_cliente.estado');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('gral_sucursal_cli_cliente.estado'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('gral_sucursal_cli_cliente.estado');

	$filtros['gral_sucursal_cli_cliente.estado'] = array('campo' => 'Estado', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_sucursal_cli_cliente.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_sucursal_cli_cliente.creado');
	$comparador = $criterio->getComparadorDeCampo('gral_sucursal_cli_cliente.creado');

	$filtros['gral_sucursal_cli_cliente.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_sucursal_cli_cliente.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_sucursal_cli_cliente.creado_por');
	$comparador = $criterio->getComparadorDeCampo('gral_sucursal_cli_cliente.creado_por');

	$filtros['gral_sucursal_cli_cliente.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_sucursal_cli_cliente.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_sucursal_cli_cliente.modificado');
	$comparador = $criterio->getComparadorDeCampo('gral_sucursal_cli_cliente.modificado');

	$filtros['gral_sucursal_cli_cliente.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_sucursal_cli_cliente.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_sucursal_cli_cliente.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('gral_sucursal_cli_cliente.modificado_por');

	$filtros['gral_sucursal_cli_cliente.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

