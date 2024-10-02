<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['cli_cliente_vta_preventista.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('cli_cliente_vta_preventista.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cli_cliente_vta_preventista.id');
	$comparador = $criterio->getComparadorDeCampo('cli_cliente_vta_preventista.id');

	$filtros['cli_cliente_vta_preventista.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cli_cliente_vta_preventista.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cli_cliente_vta_preventista.descripcion');
	$comparador = $criterio->getComparadorDeCampo('cli_cliente_vta_preventista.descripcion');

	$filtros['cli_cliente_vta_preventista.descripcion'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cli_cliente_vta_preventista.cli_cliente_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cli_cliente_vta_preventista.cli_cliente_id');
	$o = CliCliente::getOxId($criterio->getValorDeCampo('cli_cliente_vta_preventista.cli_cliente_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('cli_cliente_vta_preventista.cli_cliente_id');

	$filtros['cli_cliente_vta_preventista.cli_cliente_id'] = array('campo' => 'CliCliente', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cli_cliente_vta_preventista.vta_preventista_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cli_cliente_vta_preventista.vta_preventista_id');
	$o = VtaPreventista::getOxId($criterio->getValorDeCampo('cli_cliente_vta_preventista.vta_preventista_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('cli_cliente_vta_preventista.vta_preventista_id');

	$filtros['cli_cliente_vta_preventista.vta_preventista_id'] = array('campo' => 'VtaPreventista', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cli_cliente_vta_preventista.predeterminado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cli_cliente_vta_preventista.predeterminado');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('cli_cliente_vta_preventista.predeterminado'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('cli_cliente_vta_preventista.predeterminado');

	$filtros['cli_cliente_vta_preventista.predeterminado'] = array('campo' => 'Predeterminado', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cli_cliente_vta_preventista.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cli_cliente_vta_preventista.codigo');
	$comparador = $criterio->getComparadorDeCampo('cli_cliente_vta_preventista.codigo');

	$filtros['cli_cliente_vta_preventista.codigo'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cli_cliente_vta_preventista.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cli_cliente_vta_preventista.observacion');
	$comparador = $criterio->getComparadorDeCampo('cli_cliente_vta_preventista.observacion');

	$filtros['cli_cliente_vta_preventista.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cli_cliente_vta_preventista.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cli_cliente_vta_preventista.orden');
	$comparador = $criterio->getComparadorDeCampo('cli_cliente_vta_preventista.orden');

	$filtros['cli_cliente_vta_preventista.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cli_cliente_vta_preventista.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cli_cliente_vta_preventista.estado');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('cli_cliente_vta_preventista.estado'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('cli_cliente_vta_preventista.estado');

	$filtros['cli_cliente_vta_preventista.estado'] = array('campo' => 'Estado', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cli_cliente_vta_preventista.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cli_cliente_vta_preventista.creado');
	$comparador = $criterio->getComparadorDeCampo('cli_cliente_vta_preventista.creado');

	$filtros['cli_cliente_vta_preventista.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cli_cliente_vta_preventista.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cli_cliente_vta_preventista.creado_por');
	$comparador = $criterio->getComparadorDeCampo('cli_cliente_vta_preventista.creado_por');

	$filtros['cli_cliente_vta_preventista.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cli_cliente_vta_preventista.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cli_cliente_vta_preventista.modificado');
	$comparador = $criterio->getComparadorDeCampo('cli_cliente_vta_preventista.modificado');

	$filtros['cli_cliente_vta_preventista.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cli_cliente_vta_preventista.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cli_cliente_vta_preventista.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('cli_cliente_vta_preventista.modificado_por');

	$filtros['cli_cliente_vta_preventista.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

