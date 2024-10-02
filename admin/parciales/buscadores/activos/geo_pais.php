<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['geo_pais.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('geo_pais.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('geo_pais.id');
	$comparador = $criterio->getComparadorDeCampo('geo_pais.id');

	$filtros['geo_pais.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('geo_pais.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('geo_pais.descripcion');
	$comparador = $criterio->getComparadorDeCampo('geo_pais.descripcion');

	$filtros['geo_pais.descripcion'] = array('campo' => 'Descripcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('geo_pais.gral_lenguaje_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('geo_pais.gral_lenguaje_id');
	$o = GralLenguaje::getOxId($criterio->getValorDeCampo('geo_pais.gral_lenguaje_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('geo_pais.gral_lenguaje_id');

	$filtros['geo_pais.gral_lenguaje_id'] = array('campo' => 'Lenguaje', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('geo_pais.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('geo_pais.codigo');
	$comparador = $criterio->getComparadorDeCampo('geo_pais.codigo');

	$filtros['geo_pais.codigo'] = array('campo' => 'Codigo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('geo_pais.codigo_telefonico') != ''){
	$valor = $valor = $criterio->getValorDeCampo('geo_pais.codigo_telefonico');
	$comparador = $criterio->getComparadorDeCampo('geo_pais.codigo_telefonico');

	$filtros['geo_pais.codigo_telefonico'] = array('campo' => 'Codigo Telefonico', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('geo_pais.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('geo_pais.observacion');
	$comparador = $criterio->getComparadorDeCampo('geo_pais.observacion');

	$filtros['geo_pais.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('geo_pais.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('geo_pais.orden');
	$comparador = $criterio->getComparadorDeCampo('geo_pais.orden');

	$filtros['geo_pais.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('geo_pais.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('geo_pais.estado');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('geo_pais.estado'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('geo_pais.estado');

	$filtros['geo_pais.estado'] = array('campo' => 'Estado', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('geo_pais.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('geo_pais.creado');
	$comparador = $criterio->getComparadorDeCampo('geo_pais.creado');

	$filtros['geo_pais.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('geo_pais.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('geo_pais.creado_por');
	$comparador = $criterio->getComparadorDeCampo('geo_pais.creado_por');

	$filtros['geo_pais.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('geo_pais.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('geo_pais.modificado');
	$comparador = $criterio->getComparadorDeCampo('geo_pais.modificado');

	$filtros['geo_pais.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('geo_pais.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('geo_pais.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('geo_pais.modificado_por');

	$filtros['geo_pais.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

