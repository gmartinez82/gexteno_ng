<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['nov_novedad_us_grupo.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('nov_novedad_us_grupo.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('nov_novedad_us_grupo.id');
	$comparador = $criterio->getComparadorDeCampo('nov_novedad_us_grupo.id');

	$filtros['nov_novedad_us_grupo.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('nov_novedad_us_grupo.nov_novedad_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('nov_novedad_us_grupo.nov_novedad_id');
	$comparador = $criterio->getComparadorDeCampo('nov_novedad_us_grupo.nov_novedad_id');

	$filtros['nov_novedad_us_grupo.nov_novedad_id'] = array('campo' => 'NovNovedad', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('nov_novedad_us_grupo.us_grupo_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('nov_novedad_us_grupo.us_grupo_id');
	$o = UsGrupo::getOxId($criterio->getValorDeCampo('nov_novedad_us_grupo.us_grupo_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('nov_novedad_us_grupo.us_grupo_id');

	$filtros['nov_novedad_us_grupo.us_grupo_id'] = array('campo' => 'UsGrupo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('nov_novedad_us_grupo.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('nov_novedad_us_grupo.descripcion');
	$comparador = $criterio->getComparadorDeCampo('nov_novedad_us_grupo.descripcion');

	$filtros['nov_novedad_us_grupo.descripcion'] = array('campo' => 'Descripcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('nov_novedad_us_grupo.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('nov_novedad_us_grupo.codigo');
	$comparador = $criterio->getComparadorDeCampo('nov_novedad_us_grupo.codigo');

	$filtros['nov_novedad_us_grupo.codigo'] = array('campo' => 'Codigo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('nov_novedad_us_grupo.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('nov_novedad_us_grupo.observacion');
	$comparador = $criterio->getComparadorDeCampo('nov_novedad_us_grupo.observacion');

	$filtros['nov_novedad_us_grupo.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('nov_novedad_us_grupo.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('nov_novedad_us_grupo.orden');
	$comparador = $criterio->getComparadorDeCampo('nov_novedad_us_grupo.orden');

	$filtros['nov_novedad_us_grupo.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('nov_novedad_us_grupo.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('nov_novedad_us_grupo.estado');
	$comparador = $criterio->getComparadorDeCampo('nov_novedad_us_grupo.estado');

	$filtros['nov_novedad_us_grupo.estado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('nov_novedad_us_grupo.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('nov_novedad_us_grupo.creado');
	$comparador = $criterio->getComparadorDeCampo('nov_novedad_us_grupo.creado');

	$filtros['nov_novedad_us_grupo.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('nov_novedad_us_grupo.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('nov_novedad_us_grupo.creado_por');
	$comparador = $criterio->getComparadorDeCampo('nov_novedad_us_grupo.creado_por');

	$filtros['nov_novedad_us_grupo.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('nov_novedad_us_grupo.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('nov_novedad_us_grupo.modificado');
	$comparador = $criterio->getComparadorDeCampo('nov_novedad_us_grupo.modificado');

	$filtros['nov_novedad_us_grupo.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('nov_novedad_us_grupo.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('nov_novedad_us_grupo.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('nov_novedad_us_grupo.modificado_por');

	$filtros['nov_novedad_us_grupo.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

