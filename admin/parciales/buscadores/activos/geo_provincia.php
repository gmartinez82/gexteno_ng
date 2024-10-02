<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['geo_provincia.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('geo_provincia.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('geo_provincia.id');
	$comparador = $criterio->getComparadorDeCampo('geo_provincia.id');

	$filtros['geo_provincia.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('geo_provincia.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('geo_provincia.descripcion');
	$comparador = $criterio->getComparadorDeCampo('geo_provincia.descripcion');

	$filtros['geo_provincia.descripcion'] = array('campo' => 'Descripcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('geo_provincia.geo_pais_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('geo_provincia.geo_pais_id');
	$o = GeoPais::getOxId($criterio->getValorDeCampo('geo_provincia.geo_pais_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('geo_provincia.geo_pais_id');

	$filtros['geo_provincia.geo_pais_id'] = array('campo' => 'Pais', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('geo_provincia.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('geo_provincia.codigo');
	$comparador = $criterio->getComparadorDeCampo('geo_provincia.codigo');

	$filtros['geo_provincia.codigo'] = array('campo' => 'Codigo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('geo_provincia.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('geo_provincia.observacion');
	$comparador = $criterio->getComparadorDeCampo('geo_provincia.observacion');

	$filtros['geo_provincia.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('geo_provincia.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('geo_provincia.orden');
	$comparador = $criterio->getComparadorDeCampo('geo_provincia.orden');

	$filtros['geo_provincia.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('geo_provincia.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('geo_provincia.estado');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('geo_provincia.estado'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('geo_provincia.estado');

	$filtros['geo_provincia.estado'] = array('campo' => 'Estado', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('geo_provincia.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('geo_provincia.creado');
	$comparador = $criterio->getComparadorDeCampo('geo_provincia.creado');

	$filtros['geo_provincia.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('geo_provincia.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('geo_provincia.creado_por');
	$comparador = $criterio->getComparadorDeCampo('geo_provincia.creado_por');

	$filtros['geo_provincia.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('geo_provincia.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('geo_provincia.modificado');
	$comparador = $criterio->getComparadorDeCampo('geo_provincia.modificado');

	$filtros['geo_provincia.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('geo_provincia.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('geo_provincia.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('geo_provincia.modificado_por');

	$filtros['geo_provincia.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

