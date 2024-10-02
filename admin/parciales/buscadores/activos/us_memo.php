<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['us_memo.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('us_memo.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('us_memo.id');
	$comparador = $criterio->getComparadorDeCampo('us_memo.id');

	$filtros['us_memo.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('us_memo.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('us_memo.descripcion');
	$comparador = $criterio->getComparadorDeCampo('us_memo.descripcion');

	$filtros['us_memo.descripcion'] = array('campo' => 'Descripcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('us_memo.us_usuario_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('us_memo.us_usuario_id');
	$o = UsUsuario::getOxId($criterio->getValorDeCampo('us_memo.us_usuario_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('us_memo.us_usuario_id');

	$filtros['us_memo.us_usuario_id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('us_memo.us_memo_tipo_estado_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('us_memo.us_memo_tipo_estado_id');
	$o = UsMemoTipoEstado::getOxId($criterio->getValorDeCampo('us_memo.us_memo_tipo_estado_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('us_memo.us_memo_tipo_estado_id');

	$filtros['us_memo.us_memo_tipo_estado_id'] = array('campo' => 'UsMemoTipoEstado', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('us_memo.us_memo_tipo_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('us_memo.us_memo_tipo_id');
	$o = UsMemoTipo::getOxId($criterio->getValorDeCampo('us_memo.us_memo_tipo_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('us_memo.us_memo_tipo_id');

	$filtros['us_memo.us_memo_tipo_id'] = array('campo' => 'UsMemoTipo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('us_memo.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('us_memo.codigo');
	$comparador = $criterio->getComparadorDeCampo('us_memo.codigo');

	$filtros['us_memo.codigo'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('us_memo.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('us_memo.observacion');
	$comparador = $criterio->getComparadorDeCampo('us_memo.observacion');

	$filtros['us_memo.observacion'] = array('campo' => 'Observacion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('us_memo.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('us_memo.orden');
	$comparador = $criterio->getComparadorDeCampo('us_memo.orden');

	$filtros['us_memo.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('us_memo.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('us_memo.estado');
	$o = Est::getOxId($criterio->getValorDeCampo('us_memo.estado'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('us_memo.estado');

	$filtros['us_memo.estado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('us_memo.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('us_memo.creado');
	$comparador = $criterio->getComparadorDeCampo('us_memo.creado');

	$filtros['us_memo.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('us_memo.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('us_memo.creado_por');
	$comparador = $criterio->getComparadorDeCampo('us_memo.creado_por');

	$filtros['us_memo.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('us_memo.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('us_memo.modificado');
	$comparador = $criterio->getComparadorDeCampo('us_memo.modificado');

	$filtros['us_memo.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('us_memo.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('us_memo.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('us_memo.modificado_por');

	$filtros['us_memo.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

