<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['geo_localidad.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('geo_localidad.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('geo_localidad.id');
	$comparador = $criterio->getComparadorDeCampo('geo_localidad.id');

	$filtros['geo_localidad.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('geo_localidad.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('geo_localidad.descripcion');
	$comparador = $criterio->getComparadorDeCampo('geo_localidad.descripcion');

	$filtros['geo_localidad.descripcion'] = array('campo' => 'Descripcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('geo_provincia.geo_pais_id') != ''){
	$o = GeoPais::getOxId($criterio->getValorDeCampo('geo_provincia.geo_pais_id'));
	$valor = $o->getDescripcion();
	$comparador = $criterio->getComparadorDeCampo('geo_provincia.geo_pais_id');

	$filtros['geo_provincia.geo_pais_id'] = array('campo' => 'Pais', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('geo_localidad.geo_provincia_id') != ''){
	$o = GeoProvincia::getOxId($criterio->getValorDeCampo('geo_localidad.geo_provincia_id'));
	$valor = $o->getDescripcion();
	$comparador = $criterio->getComparadorDeCampo('geo_localidad.geo_provincia_id');

	$filtros['geo_localidad.geo_provincia_id'] = array('campo' => 'Provincia', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('geo_localidad.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('geo_localidad.codigo');
	$comparador = $criterio->getComparadorDeCampo('geo_localidad.codigo');

	$filtros['geo_localidad.codigo'] = array('campo' => 'Codigo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('geo_localidad.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('geo_localidad.observacion');
	$comparador = $criterio->getComparadorDeCampo('geo_localidad.observacion');

	$filtros['geo_localidad.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('geo_localidad.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('geo_localidad.orden');
	$comparador = $criterio->getComparadorDeCampo('geo_localidad.orden');

	$filtros['geo_localidad.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('geo_localidad.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('geo_localidad.estado');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('geo_localidad.estado'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('geo_localidad.estado');

	$filtros['geo_localidad.estado'] = array('campo' => 'Estado', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('geo_localidad.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('geo_localidad.creado');
	$comparador = $criterio->getComparadorDeCampo('geo_localidad.creado');

	$filtros['geo_localidad.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('geo_localidad.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('geo_localidad.creado_por');
	$comparador = $criterio->getComparadorDeCampo('geo_localidad.creado_por');

	$filtros['geo_localidad.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('geo_localidad.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('geo_localidad.modificado');
	$comparador = $criterio->getComparadorDeCampo('geo_localidad.modificado');

	$filtros['geo_localidad.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('geo_localidad.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('geo_localidad.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('geo_localidad.modificado_por');

	$filtros['geo_localidad.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

