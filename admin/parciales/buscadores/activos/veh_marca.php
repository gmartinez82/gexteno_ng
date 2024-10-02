<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['veh_marca.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('veh_marca.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('veh_marca.id');
	$comparador = $criterio->getComparadorDeCampo('veh_marca.id');

	$filtros['veh_marca.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('veh_marca.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('veh_marca.descripcion');
	$comparador = $criterio->getComparadorDeCampo('veh_marca.descripcion');

	$filtros['veh_marca.descripcion'] = array('campo' => 'Descripcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('veh_marca.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('veh_marca.codigo');
	$comparador = $criterio->getComparadorDeCampo('veh_marca.codigo');

	$filtros['veh_marca.codigo'] = array('campo' => 'Codigo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('veh_marca.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('veh_marca.observacion');
	$comparador = $criterio->getComparadorDeCampo('veh_marca.observacion');

	$filtros['veh_marca.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('veh_marca.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('veh_marca.orden');
	$comparador = $criterio->getComparadorDeCampo('veh_marca.orden');

	$filtros['veh_marca.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('veh_marca.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('veh_marca.estado');
	$comparador = $criterio->getComparadorDeCampo('veh_marca.estado');

	$filtros['veh_marca.estado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('veh_marca.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('veh_marca.creado');
	$comparador = $criterio->getComparadorDeCampo('veh_marca.creado');

	$filtros['veh_marca.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('veh_marca.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('veh_marca.creado_por');
	$comparador = $criterio->getComparadorDeCampo('veh_marca.creado_por');

	$filtros['veh_marca.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('veh_marca.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('veh_marca.modificado');
	$comparador = $criterio->getComparadorDeCampo('veh_marca.modificado');

	$filtros['veh_marca.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('veh_marca.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('veh_marca.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('veh_marca.modificado_por');

	$filtros['veh_marca.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

