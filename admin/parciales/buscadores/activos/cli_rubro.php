<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['cli_rubro.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('cli_cliente_cli_rubro.cli_cliente_id') != ''){
	$valor = $criterio->getValorDeCampo('cli_cliente_cli_rubro.cli_cliente_id');
	$o = CliCliente::getOxId($criterio->getValorDeCampo('cli_cliente_cli_rubro.cli_cliente_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('cli_cliente_cli_rubro.cli_cliente_id');

	$filtros['cli_cliente_cli_rubro.cli_cliente_id'] = array('campo' => 'CliCliente', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cli_rubro.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cli_rubro.id');
	$comparador = $criterio->getComparadorDeCampo('cli_rubro.id');

	$filtros['cli_rubro.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cli_rubro.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cli_rubro.descripcion');
	$comparador = $criterio->getComparadorDeCampo('cli_rubro.descripcion');

	$filtros['cli_rubro.descripcion'] = array('campo' => 'Descripcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cli_rubro.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cli_rubro.codigo');
	$comparador = $criterio->getComparadorDeCampo('cli_rubro.codigo');

	$filtros['cli_rubro.codigo'] = array('campo' => 'Codigo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cli_rubro.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cli_rubro.observacion');
	$comparador = $criterio->getComparadorDeCampo('cli_rubro.observacion');

	$filtros['cli_rubro.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cli_rubro.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cli_rubro.orden');
	$comparador = $criterio->getComparadorDeCampo('cli_rubro.orden');

	$filtros['cli_rubro.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cli_rubro.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cli_rubro.estado');
	$comparador = $criterio->getComparadorDeCampo('cli_rubro.estado');

	$filtros['cli_rubro.estado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cli_rubro.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cli_rubro.creado');
	$comparador = $criterio->getComparadorDeCampo('cli_rubro.creado');

	$filtros['cli_rubro.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cli_rubro.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cli_rubro.creado_por');
	$comparador = $criterio->getComparadorDeCampo('cli_rubro.creado_por');

	$filtros['cli_rubro.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cli_rubro.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cli_rubro.modificado');
	$comparador = $criterio->getComparadorDeCampo('cli_rubro.modificado');

	$filtros['cli_rubro.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cli_rubro.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cli_rubro.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('cli_rubro.modificado_por');

	$filtros['cli_rubro.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

