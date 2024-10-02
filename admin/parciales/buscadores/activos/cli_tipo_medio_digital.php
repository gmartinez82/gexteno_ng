<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['cli_tipo_medio_digital.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('cli_tipo_medio_digital.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cli_tipo_medio_digital.id');
	$comparador = $criterio->getComparadorDeCampo('cli_tipo_medio_digital.id');

	$filtros['cli_tipo_medio_digital.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cli_tipo_medio_digital.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cli_tipo_medio_digital.descripcion');
	$comparador = $criterio->getComparadorDeCampo('cli_tipo_medio_digital.descripcion');

	$filtros['cli_tipo_medio_digital.descripcion'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cli_tipo_medio_digital.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cli_tipo_medio_digital.codigo');
	$comparador = $criterio->getComparadorDeCampo('cli_tipo_medio_digital.codigo');

	$filtros['cli_tipo_medio_digital.codigo'] = array('campo' => 'Codigo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cli_tipo_medio_digital.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cli_tipo_medio_digital.observacion');
	$comparador = $criterio->getComparadorDeCampo('cli_tipo_medio_digital.observacion');

	$filtros['cli_tipo_medio_digital.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cli_tipo_medio_digital.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cli_tipo_medio_digital.orden');
	$comparador = $criterio->getComparadorDeCampo('cli_tipo_medio_digital.orden');

	$filtros['cli_tipo_medio_digital.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cli_tipo_medio_digital.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cli_tipo_medio_digital.estado');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('cli_tipo_medio_digital.estado'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('cli_tipo_medio_digital.estado');

	$filtros['cli_tipo_medio_digital.estado'] = array('campo' => 'Estado', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cli_tipo_medio_digital.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cli_tipo_medio_digital.creado');
	$comparador = $criterio->getComparadorDeCampo('cli_tipo_medio_digital.creado');

	$filtros['cli_tipo_medio_digital.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cli_tipo_medio_digital.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cli_tipo_medio_digital.creado_por');
	$comparador = $criterio->getComparadorDeCampo('cli_tipo_medio_digital.creado_por');

	$filtros['cli_tipo_medio_digital.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cli_tipo_medio_digital.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cli_tipo_medio_digital.modificado');
	$comparador = $criterio->getComparadorDeCampo('cli_tipo_medio_digital.modificado');

	$filtros['cli_tipo_medio_digital.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cli_tipo_medio_digital.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cli_tipo_medio_digital.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('cli_tipo_medio_digital.modificado_por');

	$filtros['cli_tipo_medio_digital.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

