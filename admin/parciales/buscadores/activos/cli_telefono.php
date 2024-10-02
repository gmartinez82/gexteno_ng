<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['cli_telefono.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('cli_telefono.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cli_telefono.id');
	$comparador = $criterio->getComparadorDeCampo('cli_telefono.id');

	$filtros['cli_telefono.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cli_telefono.cli_cliente_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cli_telefono.cli_cliente_id');
	$o = CliCliente::getOxId($criterio->getValorDeCampo('cli_telefono.cli_cliente_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('cli_telefono.cli_cliente_id');

	$filtros['cli_telefono.cli_cliente_id'] = array('campo' => 'CliCliente', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cli_telefono.cli_telefono_tipo_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cli_telefono.cli_telefono_tipo_id');
	$o = CliTelefonoTipo::getOxId($criterio->getValorDeCampo('cli_telefono.cli_telefono_tipo_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('cli_telefono.cli_telefono_tipo_id');

	$filtros['cli_telefono.cli_telefono_tipo_id'] = array('campo' => 'CliTelefonoTipo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cli_telefono.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cli_telefono.descripcion');
	$comparador = $criterio->getComparadorDeCampo('cli_telefono.descripcion');

	$filtros['cli_telefono.descripcion'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cli_telefono.geo_pais_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cli_telefono.geo_pais_id');
	$o = GeoPais::getOxId($criterio->getValorDeCampo('cli_telefono.geo_pais_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('cli_telefono.geo_pais_id');

	$filtros['cli_telefono.geo_pais_id'] = array('campo' => 'GeoPais', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cli_telefono.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cli_telefono.codigo');
	$comparador = $criterio->getComparadorDeCampo('cli_telefono.codigo');

	$filtros['cli_telefono.codigo'] = array('campo' => 'Cod Area', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cli_telefono.telefono') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cli_telefono.telefono');
	$comparador = $criterio->getComparadorDeCampo('cli_telefono.telefono');

	$filtros['cli_telefono.telefono'] = array('campo' => 'Telefono', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cli_telefono.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cli_telefono.observacion');
	$comparador = $criterio->getComparadorDeCampo('cli_telefono.observacion');

	$filtros['cli_telefono.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cli_telefono.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cli_telefono.orden');
	$comparador = $criterio->getComparadorDeCampo('cli_telefono.orden');

	$filtros['cli_telefono.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cli_telefono.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cli_telefono.estado');
	$comparador = $criterio->getComparadorDeCampo('cli_telefono.estado');

	$filtros['cli_telefono.estado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cli_telefono.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cli_telefono.creado');
	$comparador = $criterio->getComparadorDeCampo('cli_telefono.creado');

	$filtros['cli_telefono.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cli_telefono.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cli_telefono.creado_por');
	$comparador = $criterio->getComparadorDeCampo('cli_telefono.creado_por');

	$filtros['cli_telefono.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cli_telefono.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cli_telefono.modificado');
	$comparador = $criterio->getComparadorDeCampo('cli_telefono.modificado');

	$filtros['cli_telefono.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cli_telefono.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cli_telefono.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('cli_telefono.modificado_por');

	$filtros['cli_telefono.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

