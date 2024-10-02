<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['nov_novedad.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('nov_novedad.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('nov_novedad.id');
	$comparador = $criterio->getComparadorDeCampo('nov_novedad.id');

	$filtros['nov_novedad.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('nov_novedad.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('nov_novedad.descripcion');
	$comparador = $criterio->getComparadorDeCampo('nov_novedad.descripcion');

	$filtros['nov_novedad.descripcion'] = array('campo' => 'Titulo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('nov_novedad.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('nov_novedad.codigo');
	$comparador = $criterio->getComparadorDeCampo('nov_novedad.codigo');

	$filtros['nov_novedad.codigo'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('nov_novedad.descripcion_breve') != ''){
	$valor = $valor = $criterio->getValorDeCampo('nov_novedad.descripcion_breve');
	$comparador = $criterio->getComparadorDeCampo('nov_novedad.descripcion_breve');

	$filtros['nov_novedad.descripcion_breve'] = array('campo' => 'Descripcion Breve', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('nov_novedad.fecha') != ''){
	$valor = Gral::getFechaToWeb($valor = $criterio->getValorDeCampo('nov_novedad.fecha'));
	$comparador = $criterio->getComparadorDeCampo('nov_novedad.fecha');

	$filtros['nov_novedad.fecha'] = array('campo' => 'Fecha', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('nov_novedad.descripcion_extendida') != ''){
	$valor = $valor = $criterio->getValorDeCampo('nov_novedad.descripcion_extendida');
	$comparador = $criterio->getComparadorDeCampo('nov_novedad.descripcion_extendida');

	$filtros['nov_novedad.descripcion_extendida'] = array('campo' => 'Descripcion Extendida', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('nov_novedad.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('nov_novedad.observacion');
	$comparador = $criterio->getComparadorDeCampo('nov_novedad.observacion');

	$filtros['nov_novedad.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('nov_novedad.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('nov_novedad.orden');
	$comparador = $criterio->getComparadorDeCampo('nov_novedad.orden');

	$filtros['nov_novedad.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('nov_novedad.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('nov_novedad.estado');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('nov_novedad.estado'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('nov_novedad.estado');

	$filtros['nov_novedad.estado'] = array('campo' => 'Estado', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('nov_novedad.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('nov_novedad.creado');
	$comparador = $criterio->getComparadorDeCampo('nov_novedad.creado');

	$filtros['nov_novedad.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('nov_novedad.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('nov_novedad.creado_por');
	$comparador = $criterio->getComparadorDeCampo('nov_novedad.creado_por');

	$filtros['nov_novedad.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('nov_novedad.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('nov_novedad.modificado');
	$comparador = $criterio->getComparadorDeCampo('nov_novedad.modificado');

	$filtros['nov_novedad.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('nov_novedad.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('nov_novedad.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('nov_novedad.modificado_por');

	$filtros['nov_novedad.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

