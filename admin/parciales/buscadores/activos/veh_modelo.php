<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['veh_modelo.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('veh_modelo.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('veh_modelo.id');
	$comparador = $criterio->getComparadorDeCampo('veh_modelo.id');

	$filtros['veh_modelo.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('veh_modelo.veh_marca_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('veh_modelo.veh_marca_id');
	$o = VehMarca::getOxId($criterio->getValorDeCampo('veh_modelo.veh_marca_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('veh_modelo.veh_marca_id');

	$filtros['veh_modelo.veh_marca_id'] = array('campo' => 'Marca', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('veh_modelo.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('veh_modelo.descripcion');
	$comparador = $criterio->getComparadorDeCampo('veh_modelo.descripcion');

	$filtros['veh_modelo.descripcion'] = array('campo' => 'Descripcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('veh_modelo.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('veh_modelo.codigo');
	$comparador = $criterio->getComparadorDeCampo('veh_modelo.codigo');

	$filtros['veh_modelo.codigo'] = array('campo' => 'Codigo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('veh_modelo.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('veh_modelo.observacion');
	$comparador = $criterio->getComparadorDeCampo('veh_modelo.observacion');

	$filtros['veh_modelo.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('veh_modelo.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('veh_modelo.orden');
	$comparador = $criterio->getComparadorDeCampo('veh_modelo.orden');

	$filtros['veh_modelo.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('veh_modelo.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('veh_modelo.estado');
	$comparador = $criterio->getComparadorDeCampo('veh_modelo.estado');

	$filtros['veh_modelo.estado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('veh_modelo.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('veh_modelo.creado');
	$comparador = $criterio->getComparadorDeCampo('veh_modelo.creado');

	$filtros['veh_modelo.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('veh_modelo.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('veh_modelo.creado_por');
	$comparador = $criterio->getComparadorDeCampo('veh_modelo.creado_por');

	$filtros['veh_modelo.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('veh_modelo.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('veh_modelo.modificado');
	$comparador = $criterio->getComparadorDeCampo('veh_modelo.modificado');

	$filtros['veh_modelo.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('veh_modelo.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('veh_modelo.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('veh_modelo.modificado_por');

	$filtros['veh_modelo.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

