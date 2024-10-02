<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['us_memo_estado.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('us_memo_estado.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('us_memo_estado.id');
	$comparador = $criterio->getComparadorDeCampo('us_memo_estado.id');

	$filtros['us_memo_estado.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('us_memo_estado.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('us_memo_estado.descripcion');
	$comparador = $criterio->getComparadorDeCampo('us_memo_estado.descripcion');

	$filtros['us_memo_estado.descripcion'] = array('campo' => 'Descripcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('us_memo_estado.us_memo_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('us_memo_estado.us_memo_id');
	$o = UsMemo::getOxId($criterio->getValorDeCampo('us_memo_estado.us_memo_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('us_memo_estado.us_memo_id');

	$filtros['us_memo_estado.us_memo_id'] = array('campo' => 'UsMemo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('us_memo_estado.us_memo_tipo_estado_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('us_memo_estado.us_memo_tipo_estado_id');
	$o = UsMemoTipoEstado::getOxId($criterio->getValorDeCampo('us_memo_estado.us_memo_tipo_estado_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('us_memo_estado.us_memo_tipo_estado_id');

	$filtros['us_memo_estado.us_memo_tipo_estado_id'] = array('campo' => 'UsMemoTipoEstado', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('us_memo_estado.inicial') != ''){
	$valor = $valor = $criterio->getValorDeCampo('us_memo_estado.inicial');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('us_memo_estado.inicial'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('us_memo_estado.inicial');

	$filtros['us_memo_estado.inicial'] = array('campo' => 'Inicial', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('us_memo_estado.actual') != ''){
	$valor = $valor = $criterio->getValorDeCampo('us_memo_estado.actual');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('us_memo_estado.actual'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('us_memo_estado.actual');

	$filtros['us_memo_estado.actual'] = array('campo' => 'Actual', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('us_memo_estado.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('us_memo_estado.codigo');
	$comparador = $criterio->getComparadorDeCampo('us_memo_estado.codigo');

	$filtros['us_memo_estado.codigo'] = array('campo' => 'Codigo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('us_memo_estado.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('us_memo_estado.observacion');
	$comparador = $criterio->getComparadorDeCampo('us_memo_estado.observacion');

	$filtros['us_memo_estado.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('us_memo_estado.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('us_memo_estado.orden');
	$comparador = $criterio->getComparadorDeCampo('us_memo_estado.orden');

	$filtros['us_memo_estado.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('us_memo_estado.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('us_memo_estado.estado');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('us_memo_estado.estado'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('us_memo_estado.estado');

	$filtros['us_memo_estado.estado'] = array('campo' => 'Estado', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('us_memo_estado.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('us_memo_estado.creado');
	$comparador = $criterio->getComparadorDeCampo('us_memo_estado.creado');

	$filtros['us_memo_estado.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('us_memo_estado.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('us_memo_estado.creado_por');
	$comparador = $criterio->getComparadorDeCampo('us_memo_estado.creado_por');

	$filtros['us_memo_estado.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('us_memo_estado.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('us_memo_estado.modificado');
	$comparador = $criterio->getComparadorDeCampo('us_memo_estado.modificado');

	$filtros['us_memo_estado.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('us_memo_estado.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('us_memo_estado.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('us_memo_estado.modificado_por');

	$filtros['us_memo_estado.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

