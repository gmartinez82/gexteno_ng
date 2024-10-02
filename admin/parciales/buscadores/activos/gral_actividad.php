<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['gral_actividad.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('gral_actividad.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_actividad.id');
	$comparador = $criterio->getComparadorDeCampo('gral_actividad.id');

	$filtros['gral_actividad.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_actividad.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_actividad.descripcion');
	$comparador = $criterio->getComparadorDeCampo('gral_actividad.descripcion');

	$filtros['gral_actividad.descripcion'] = array('campo' => 'Descripcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_actividad.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_actividad.codigo');
	$comparador = $criterio->getComparadorDeCampo('gral_actividad.codigo');

	$filtros['gral_actividad.codigo'] = array('campo' => 'Codigo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_actividad.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_actividad.observacion');
	$comparador = $criterio->getComparadorDeCampo('gral_actividad.observacion');

	$filtros['gral_actividad.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_actividad.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_actividad.orden');
	$comparador = $criterio->getComparadorDeCampo('gral_actividad.orden');

	$filtros['gral_actividad.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_actividad.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_actividad.estado');
	$comparador = $criterio->getComparadorDeCampo('gral_actividad.estado');

	$filtros['gral_actividad.estado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_actividad.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_actividad.creado');
	$comparador = $criterio->getComparadorDeCampo('gral_actividad.creado');

	$filtros['gral_actividad.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_actividad.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_actividad.creado_por');
	$comparador = $criterio->getComparadorDeCampo('gral_actividad.creado_por');

	$filtros['gral_actividad.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_actividad.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_actividad.modificado');
	$comparador = $criterio->getComparadorDeCampo('gral_actividad.modificado');

	$filtros['gral_actividad.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_actividad.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_actividad.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('gral_actividad.modificado_por');

	$filtros['gral_actividad.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

