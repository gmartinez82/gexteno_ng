<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['gral_escenario.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('gral_escenario.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_escenario.id');
	$comparador = $criterio->getComparadorDeCampo('gral_escenario.id');

	$filtros['gral_escenario.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_escenario.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_escenario.descripcion');
	$comparador = $criterio->getComparadorDeCampo('gral_escenario.descripcion');

	$filtros['gral_escenario.descripcion'] = array('campo' => 'Descripcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_escenario.gral_actividad_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_escenario.gral_actividad_id');
	$o = GralActividad::getOxId($criterio->getValorDeCampo('gral_escenario.gral_actividad_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('gral_escenario.gral_actividad_id');

	$filtros['gral_escenario.gral_actividad_id'] = array('campo' => 'GralActividad', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_escenario.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_escenario.codigo');
	$comparador = $criterio->getComparadorDeCampo('gral_escenario.codigo');

	$filtros['gral_escenario.codigo'] = array('campo' => 'Codigo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_escenario.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_escenario.observacion');
	$comparador = $criterio->getComparadorDeCampo('gral_escenario.observacion');

	$filtros['gral_escenario.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_escenario.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_escenario.orden');
	$comparador = $criterio->getComparadorDeCampo('gral_escenario.orden');

	$filtros['gral_escenario.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_escenario.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_escenario.estado');
	$comparador = $criterio->getComparadorDeCampo('gral_escenario.estado');

	$filtros['gral_escenario.estado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_escenario.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_escenario.creado');
	$comparador = $criterio->getComparadorDeCampo('gral_escenario.creado');

	$filtros['gral_escenario.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_escenario.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_escenario.creado_por');
	$comparador = $criterio->getComparadorDeCampo('gral_escenario.creado_por');

	$filtros['gral_escenario.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_escenario.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_escenario.modificado');
	$comparador = $criterio->getComparadorDeCampo('gral_escenario.modificado');

	$filtros['gral_escenario.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_escenario.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_escenario.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('gral_escenario.modificado_por');

	$filtros['gral_escenario.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

