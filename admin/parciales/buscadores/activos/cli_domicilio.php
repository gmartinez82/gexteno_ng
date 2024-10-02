<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['cli_domicilio.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('cli_domicilio.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cli_domicilio.id');
	$comparador = $criterio->getComparadorDeCampo('cli_domicilio.id');

	$filtros['cli_domicilio.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cli_domicilio.cli_cliente_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cli_domicilio.cli_cliente_id');
	$o = CliCliente::getOxId($criterio->getValorDeCampo('cli_domicilio.cli_cliente_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('cli_domicilio.cli_cliente_id');

	$filtros['cli_domicilio.cli_cliente_id'] = array('campo' => 'CliCliente', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cli_domicilio.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cli_domicilio.descripcion');
	$comparador = $criterio->getComparadorDeCampo('cli_domicilio.descripcion');

	$filtros['cli_domicilio.descripcion'] = array('campo' => 'Domicilio', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cli_domicilio.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cli_domicilio.codigo');
	$comparador = $criterio->getComparadorDeCampo('cli_domicilio.codigo');

	$filtros['cli_domicilio.codigo'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cli_domicilio.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cli_domicilio.observacion');
	$comparador = $criterio->getComparadorDeCampo('cli_domicilio.observacion');

	$filtros['cli_domicilio.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cli_domicilio.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cli_domicilio.orden');
	$comparador = $criterio->getComparadorDeCampo('cli_domicilio.orden');

	$filtros['cli_domicilio.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cli_domicilio.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cli_domicilio.estado');
	$comparador = $criterio->getComparadorDeCampo('cli_domicilio.estado');

	$filtros['cli_domicilio.estado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cli_domicilio.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cli_domicilio.creado');
	$comparador = $criterio->getComparadorDeCampo('cli_domicilio.creado');

	$filtros['cli_domicilio.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cli_domicilio.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cli_domicilio.creado_por');
	$comparador = $criterio->getComparadorDeCampo('cli_domicilio.creado_por');

	$filtros['cli_domicilio.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cli_domicilio.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cli_domicilio.modificado');
	$comparador = $criterio->getComparadorDeCampo('cli_domicilio.modificado');

	$filtros['cli_domicilio.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cli_domicilio.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cli_domicilio.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('cli_domicilio.modificado_por');

	$filtros['cli_domicilio.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

