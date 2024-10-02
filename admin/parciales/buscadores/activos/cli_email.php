<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['cli_email.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('cli_email.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cli_email.id');
	$comparador = $criterio->getComparadorDeCampo('cli_email.id');

	$filtros['cli_email.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cli_email.cli_cliente_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cli_email.cli_cliente_id');
	$o = CliCliente::getOxId($criterio->getValorDeCampo('cli_email.cli_cliente_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('cli_email.cli_cliente_id');

	$filtros['cli_email.cli_cliente_id'] = array('campo' => 'CliCliente', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cli_email.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cli_email.descripcion');
	$comparador = $criterio->getComparadorDeCampo('cli_email.descripcion');

	$filtros['cli_email.descripcion'] = array('campo' => 'Email', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cli_email.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cli_email.codigo');
	$comparador = $criterio->getComparadorDeCampo('cli_email.codigo');

	$filtros['cli_email.codigo'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cli_email.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cli_email.observacion');
	$comparador = $criterio->getComparadorDeCampo('cli_email.observacion');

	$filtros['cli_email.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cli_email.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cli_email.orden');
	$comparador = $criterio->getComparadorDeCampo('cli_email.orden');

	$filtros['cli_email.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cli_email.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cli_email.estado');
	$comparador = $criterio->getComparadorDeCampo('cli_email.estado');

	$filtros['cli_email.estado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cli_email.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cli_email.creado');
	$comparador = $criterio->getComparadorDeCampo('cli_email.creado');

	$filtros['cli_email.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cli_email.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cli_email.creado_por');
	$comparador = $criterio->getComparadorDeCampo('cli_email.creado_por');

	$filtros['cli_email.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cli_email.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cli_email.modificado');
	$comparador = $criterio->getComparadorDeCampo('cli_email.modificado');

	$filtros['cli_email.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cli_email.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cli_email.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('cli_email.modificado_por');

	$filtros['cli_email.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

