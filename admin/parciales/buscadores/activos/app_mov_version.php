<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['app_mov_version.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('app_mov_version.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('app_mov_version.id');
	$comparador = $criterio->getComparadorDeCampo('app_mov_version.id');

	$filtros['app_mov_version.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('app_mov_version.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('app_mov_version.descripcion');
	$comparador = $criterio->getComparadorDeCampo('app_mov_version.descripcion');

	$filtros['app_mov_version.descripcion'] = array('campo' => 'Descripcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('app_mov_version.app_mov_modulo_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('app_mov_version.app_mov_modulo_id');
	$o = AppMovModulo::getOxId($criterio->getValorDeCampo('app_mov_version.app_mov_modulo_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('app_mov_version.app_mov_modulo_id');

	$filtros['app_mov_version.app_mov_modulo_id'] = array('campo' => 'AppMovModulo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('app_mov_version.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('app_mov_version.codigo');
	$comparador = $criterio->getComparadorDeCampo('app_mov_version.codigo');

	$filtros['app_mov_version.codigo'] = array('campo' => 'Codigo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('app_mov_version.version') != ''){
	$valor = $valor = $criterio->getValorDeCampo('app_mov_version.version');
	$comparador = $criterio->getComparadorDeCampo('app_mov_version.version');

	$filtros['app_mov_version.version'] = array('campo' => 'Version', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('app_mov_version.version_minima') != ''){
	$valor = $valor = $criterio->getValorDeCampo('app_mov_version.version_minima');
	$comparador = $criterio->getComparadorDeCampo('app_mov_version.version_minima');

	$filtros['app_mov_version.version_minima'] = array('campo' => 'Version Min', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('app_mov_version.fecha') != ''){
	$valor = Gral::getFechaToWeb($valor = $criterio->getValorDeCampo('app_mov_version.fecha'));
	$comparador = $criterio->getComparadorDeCampo('app_mov_version.fecha');

	$filtros['app_mov_version.fecha'] = array('campo' => 'Fecha', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('app_mov_version.actual') != ''){
	$valor = $valor = $criterio->getValorDeCampo('app_mov_version.actual');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('app_mov_version.actual'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('app_mov_version.actual');

	$filtros['app_mov_version.actual'] = array('campo' => 'Actual', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('app_mov_version.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('app_mov_version.observacion');
	$comparador = $criterio->getComparadorDeCampo('app_mov_version.observacion');

	$filtros['app_mov_version.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('app_mov_version.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('app_mov_version.orden');
	$comparador = $criterio->getComparadorDeCampo('app_mov_version.orden');

	$filtros['app_mov_version.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('app_mov_version.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('app_mov_version.estado');
	$comparador = $criterio->getComparadorDeCampo('app_mov_version.estado');

	$filtros['app_mov_version.estado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('app_mov_version.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('app_mov_version.creado');
	$comparador = $criterio->getComparadorDeCampo('app_mov_version.creado');

	$filtros['app_mov_version.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('app_mov_version.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('app_mov_version.creado_por');
	$comparador = $criterio->getComparadorDeCampo('app_mov_version.creado_por');

	$filtros['app_mov_version.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('app_mov_version.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('app_mov_version.modificado');
	$comparador = $criterio->getComparadorDeCampo('app_mov_version.modificado');

	$filtros['app_mov_version.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('app_mov_version.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('app_mov_version.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('app_mov_version.modificado_por');

	$filtros['app_mov_version.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

