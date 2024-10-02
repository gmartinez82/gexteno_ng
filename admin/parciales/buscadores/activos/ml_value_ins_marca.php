<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['ml_value_ins_marca.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('ml_value_ins_marca.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ml_value_ins_marca.id');
	$comparador = $criterio->getComparadorDeCampo('ml_value_ins_marca.id');

	$filtros['ml_value_ins_marca.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ml_value_ins_marca.ml_value_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ml_value_ins_marca.ml_value_id');
	$o = MlValue::getOxId($criterio->getValorDeCampo('ml_value_ins_marca.ml_value_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('ml_value_ins_marca.ml_value_id');

	$filtros['ml_value_ins_marca.ml_value_id'] = array('campo' => 'MlValue', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ml_value_ins_marca.ins_marca_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ml_value_ins_marca.ins_marca_id');
	$o = InsMarca::getOxId($criterio->getValorDeCampo('ml_value_ins_marca.ins_marca_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('ml_value_ins_marca.ins_marca_id');

	$filtros['ml_value_ins_marca.ins_marca_id'] = array('campo' => 'InsMarca', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ml_value_ins_marca.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ml_value_ins_marca.observacion');
	$comparador = $criterio->getComparadorDeCampo('ml_value_ins_marca.observacion');

	$filtros['ml_value_ins_marca.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ml_value_ins_marca.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ml_value_ins_marca.orden');
	$comparador = $criterio->getComparadorDeCampo('ml_value_ins_marca.orden');

	$filtros['ml_value_ins_marca.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ml_value_ins_marca.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ml_value_ins_marca.estado');
	$comparador = $criterio->getComparadorDeCampo('ml_value_ins_marca.estado');

	$filtros['ml_value_ins_marca.estado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ml_value_ins_marca.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ml_value_ins_marca.creado');
	$comparador = $criterio->getComparadorDeCampo('ml_value_ins_marca.creado');

	$filtros['ml_value_ins_marca.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ml_value_ins_marca.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ml_value_ins_marca.creado_por');
	$comparador = $criterio->getComparadorDeCampo('ml_value_ins_marca.creado_por');

	$filtros['ml_value_ins_marca.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ml_value_ins_marca.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ml_value_ins_marca.modificado');
	$comparador = $criterio->getComparadorDeCampo('ml_value_ins_marca.modificado');

	$filtros['ml_value_ins_marca.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ml_value_ins_marca.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ml_value_ins_marca.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('ml_value_ins_marca.modificado_por');

	$filtros['ml_value_ins_marca.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

