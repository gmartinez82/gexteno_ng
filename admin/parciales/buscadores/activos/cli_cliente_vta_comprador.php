<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['cli_cliente_vta_comprador.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('cli_cliente_vta_comprador.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cli_cliente_vta_comprador.id');
	$comparador = $criterio->getComparadorDeCampo('cli_cliente_vta_comprador.id');

	$filtros['cli_cliente_vta_comprador.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cli_cliente_vta_comprador.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cli_cliente_vta_comprador.descripcion');
	$comparador = $criterio->getComparadorDeCampo('cli_cliente_vta_comprador.descripcion');

	$filtros['cli_cliente_vta_comprador.descripcion'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cli_cliente_vta_comprador.cli_cliente_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cli_cliente_vta_comprador.cli_cliente_id');
	$o = CliCliente::getOxId($criterio->getValorDeCampo('cli_cliente_vta_comprador.cli_cliente_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('cli_cliente_vta_comprador.cli_cliente_id');

	$filtros['cli_cliente_vta_comprador.cli_cliente_id'] = array('campo' => 'CliCliente', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cli_cliente_vta_comprador.vta_comprador_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cli_cliente_vta_comprador.vta_comprador_id');
	$o = VtaComprador::getOxId($criterio->getValorDeCampo('cli_cliente_vta_comprador.vta_comprador_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('cli_cliente_vta_comprador.vta_comprador_id');

	$filtros['cli_cliente_vta_comprador.vta_comprador_id'] = array('campo' => 'VtaComprador', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cli_cliente_vta_comprador.predeterminado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cli_cliente_vta_comprador.predeterminado');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('cli_cliente_vta_comprador.predeterminado'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('cli_cliente_vta_comprador.predeterminado');

	$filtros['cli_cliente_vta_comprador.predeterminado'] = array('campo' => 'Predeterminado', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cli_cliente_vta_comprador.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cli_cliente_vta_comprador.codigo');
	$comparador = $criterio->getComparadorDeCampo('cli_cliente_vta_comprador.codigo');

	$filtros['cli_cliente_vta_comprador.codigo'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cli_cliente_vta_comprador.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cli_cliente_vta_comprador.observacion');
	$comparador = $criterio->getComparadorDeCampo('cli_cliente_vta_comprador.observacion');

	$filtros['cli_cliente_vta_comprador.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cli_cliente_vta_comprador.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cli_cliente_vta_comprador.orden');
	$comparador = $criterio->getComparadorDeCampo('cli_cliente_vta_comprador.orden');

	$filtros['cli_cliente_vta_comprador.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cli_cliente_vta_comprador.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cli_cliente_vta_comprador.estado');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('cli_cliente_vta_comprador.estado'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('cli_cliente_vta_comprador.estado');

	$filtros['cli_cliente_vta_comprador.estado'] = array('campo' => 'Estado', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cli_cliente_vta_comprador.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cli_cliente_vta_comprador.creado');
	$comparador = $criterio->getComparadorDeCampo('cli_cliente_vta_comprador.creado');

	$filtros['cli_cliente_vta_comprador.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cli_cliente_vta_comprador.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cli_cliente_vta_comprador.creado_por');
	$comparador = $criterio->getComparadorDeCampo('cli_cliente_vta_comprador.creado_por');

	$filtros['cli_cliente_vta_comprador.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cli_cliente_vta_comprador.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cli_cliente_vta_comprador.modificado');
	$comparador = $criterio->getComparadorDeCampo('cli_cliente_vta_comprador.modificado');

	$filtros['cli_cliente_vta_comprador.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cli_cliente_vta_comprador.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cli_cliente_vta_comprador.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('cli_cliente_vta_comprador.modificado_por');

	$filtros['cli_cliente_vta_comprador.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

