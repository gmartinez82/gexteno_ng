<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['cli_cliente_gral_actividad.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('cli_cliente_gral_actividad.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cli_cliente_gral_actividad.id');
	$comparador = $criterio->getComparadorDeCampo('cli_cliente_gral_actividad.id');

	$filtros['cli_cliente_gral_actividad.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cli_cliente_gral_actividad.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cli_cliente_gral_actividad.descripcion');
	$comparador = $criterio->getComparadorDeCampo('cli_cliente_gral_actividad.descripcion');

	$filtros['cli_cliente_gral_actividad.descripcion'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cli_cliente_gral_actividad.cli_cliente_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cli_cliente_gral_actividad.cli_cliente_id');
	$o = CliCliente::getOxId($criterio->getValorDeCampo('cli_cliente_gral_actividad.cli_cliente_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('cli_cliente_gral_actividad.cli_cliente_id');

	$filtros['cli_cliente_gral_actividad.cli_cliente_id'] = array('campo' => 'CliCliente', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cli_cliente_gral_actividad.gral_actividad_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cli_cliente_gral_actividad.gral_actividad_id');
	$o = GralActividad::getOxId($criterio->getValorDeCampo('cli_cliente_gral_actividad.gral_actividad_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('cli_cliente_gral_actividad.gral_actividad_id');

	$filtros['cli_cliente_gral_actividad.gral_actividad_id'] = array('campo' => 'GralActividad', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cli_cliente_gral_actividad.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cli_cliente_gral_actividad.codigo');
	$comparador = $criterio->getComparadorDeCampo('cli_cliente_gral_actividad.codigo');

	$filtros['cli_cliente_gral_actividad.codigo'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cli_cliente_gral_actividad.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cli_cliente_gral_actividad.observacion');
	$comparador = $criterio->getComparadorDeCampo('cli_cliente_gral_actividad.observacion');

	$filtros['cli_cliente_gral_actividad.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cli_cliente_gral_actividad.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cli_cliente_gral_actividad.orden');
	$comparador = $criterio->getComparadorDeCampo('cli_cliente_gral_actividad.orden');

	$filtros['cli_cliente_gral_actividad.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cli_cliente_gral_actividad.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cli_cliente_gral_actividad.estado');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('cli_cliente_gral_actividad.estado'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('cli_cliente_gral_actividad.estado');

	$filtros['cli_cliente_gral_actividad.estado'] = array('campo' => 'Estado', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cli_cliente_gral_actividad.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cli_cliente_gral_actividad.creado');
	$comparador = $criterio->getComparadorDeCampo('cli_cliente_gral_actividad.creado');

	$filtros['cli_cliente_gral_actividad.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cli_cliente_gral_actividad.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cli_cliente_gral_actividad.creado_por');
	$comparador = $criterio->getComparadorDeCampo('cli_cliente_gral_actividad.creado_por');

	$filtros['cli_cliente_gral_actividad.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cli_cliente_gral_actividad.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cli_cliente_gral_actividad.modificado');
	$comparador = $criterio->getComparadorDeCampo('cli_cliente_gral_actividad.modificado');

	$filtros['cli_cliente_gral_actividad.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cli_cliente_gral_actividad.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cli_cliente_gral_actividad.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('cli_cliente_gral_actividad.modificado_por');

	$filtros['cli_cliente_gral_actividad.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

