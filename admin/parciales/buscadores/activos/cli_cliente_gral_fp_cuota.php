<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['cli_cliente_gral_fp_cuota.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('cli_cliente_gral_fp_cuota.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cli_cliente_gral_fp_cuota.id');
	$comparador = $criterio->getComparadorDeCampo('cli_cliente_gral_fp_cuota.id');

	$filtros['cli_cliente_gral_fp_cuota.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cli_cliente_gral_fp_cuota.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cli_cliente_gral_fp_cuota.descripcion');
	$comparador = $criterio->getComparadorDeCampo('cli_cliente_gral_fp_cuota.descripcion');

	$filtros['cli_cliente_gral_fp_cuota.descripcion'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cli_cliente_gral_fp_cuota.cli_cliente_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cli_cliente_gral_fp_cuota.cli_cliente_id');
	$o = CliCliente::getOxId($criterio->getValorDeCampo('cli_cliente_gral_fp_cuota.cli_cliente_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('cli_cliente_gral_fp_cuota.cli_cliente_id');

	$filtros['cli_cliente_gral_fp_cuota.cli_cliente_id'] = array('campo' => 'CliCliente', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cli_cliente_gral_fp_cuota.gral_fp_cuota_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cli_cliente_gral_fp_cuota.gral_fp_cuota_id');
	$o = GralFpCuota::getOxId($criterio->getValorDeCampo('cli_cliente_gral_fp_cuota.gral_fp_cuota_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('cli_cliente_gral_fp_cuota.gral_fp_cuota_id');

	$filtros['cli_cliente_gral_fp_cuota.gral_fp_cuota_id'] = array('campo' => 'GralFpCuota', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cli_cliente_gral_fp_cuota.predeterminado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cli_cliente_gral_fp_cuota.predeterminado');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('cli_cliente_gral_fp_cuota.predeterminado'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('cli_cliente_gral_fp_cuota.predeterminado');

	$filtros['cli_cliente_gral_fp_cuota.predeterminado'] = array('campo' => 'Predeterminado', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cli_cliente_gral_fp_cuota.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cli_cliente_gral_fp_cuota.codigo');
	$comparador = $criterio->getComparadorDeCampo('cli_cliente_gral_fp_cuota.codigo');

	$filtros['cli_cliente_gral_fp_cuota.codigo'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cli_cliente_gral_fp_cuota.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cli_cliente_gral_fp_cuota.observacion');
	$comparador = $criterio->getComparadorDeCampo('cli_cliente_gral_fp_cuota.observacion');

	$filtros['cli_cliente_gral_fp_cuota.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cli_cliente_gral_fp_cuota.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cli_cliente_gral_fp_cuota.orden');
	$comparador = $criterio->getComparadorDeCampo('cli_cliente_gral_fp_cuota.orden');

	$filtros['cli_cliente_gral_fp_cuota.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cli_cliente_gral_fp_cuota.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cli_cliente_gral_fp_cuota.estado');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('cli_cliente_gral_fp_cuota.estado'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('cli_cliente_gral_fp_cuota.estado');

	$filtros['cli_cliente_gral_fp_cuota.estado'] = array('campo' => 'Estado', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cli_cliente_gral_fp_cuota.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cli_cliente_gral_fp_cuota.creado');
	$comparador = $criterio->getComparadorDeCampo('cli_cliente_gral_fp_cuota.creado');

	$filtros['cli_cliente_gral_fp_cuota.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cli_cliente_gral_fp_cuota.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cli_cliente_gral_fp_cuota.creado_por');
	$comparador = $criterio->getComparadorDeCampo('cli_cliente_gral_fp_cuota.creado_por');

	$filtros['cli_cliente_gral_fp_cuota.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cli_cliente_gral_fp_cuota.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cli_cliente_gral_fp_cuota.modificado');
	$comparador = $criterio->getComparadorDeCampo('cli_cliente_gral_fp_cuota.modificado');

	$filtros['cli_cliente_gral_fp_cuota.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cli_cliente_gral_fp_cuota.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cli_cliente_gral_fp_cuota.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('cli_cliente_gral_fp_cuota.modificado_por');

	$filtros['cli_cliente_gral_fp_cuota.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

