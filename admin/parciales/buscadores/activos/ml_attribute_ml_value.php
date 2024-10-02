<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['ml_attribute_ml_value.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('ml_attribute_ml_value.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ml_attribute_ml_value.id');
	$comparador = $criterio->getComparadorDeCampo('ml_attribute_ml_value.id');

	$filtros['ml_attribute_ml_value.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ml_attribute_ml_value.ml_attribute_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ml_attribute_ml_value.ml_attribute_id');
	$o = MlAttribute::getOxId($criterio->getValorDeCampo('ml_attribute_ml_value.ml_attribute_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('ml_attribute_ml_value.ml_attribute_id');

	$filtros['ml_attribute_ml_value.ml_attribute_id'] = array('campo' => 'MlAttribute', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ml_attribute_ml_value.ml_value_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ml_attribute_ml_value.ml_value_id');
	$o = MlValue::getOxId($criterio->getValorDeCampo('ml_attribute_ml_value.ml_value_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('ml_attribute_ml_value.ml_value_id');

	$filtros['ml_attribute_ml_value.ml_value_id'] = array('campo' => 'MlValue', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ml_attribute_ml_value.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ml_attribute_ml_value.observacion');
	$comparador = $criterio->getComparadorDeCampo('ml_attribute_ml_value.observacion');

	$filtros['ml_attribute_ml_value.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ml_attribute_ml_value.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ml_attribute_ml_value.orden');
	$comparador = $criterio->getComparadorDeCampo('ml_attribute_ml_value.orden');

	$filtros['ml_attribute_ml_value.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ml_attribute_ml_value.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ml_attribute_ml_value.estado');
	$comparador = $criterio->getComparadorDeCampo('ml_attribute_ml_value.estado');

	$filtros['ml_attribute_ml_value.estado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ml_attribute_ml_value.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ml_attribute_ml_value.creado');
	$comparador = $criterio->getComparadorDeCampo('ml_attribute_ml_value.creado');

	$filtros['ml_attribute_ml_value.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ml_attribute_ml_value.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ml_attribute_ml_value.creado_por');
	$comparador = $criterio->getComparadorDeCampo('ml_attribute_ml_value.creado_por');

	$filtros['ml_attribute_ml_value.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ml_attribute_ml_value.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ml_attribute_ml_value.modificado');
	$comparador = $criterio->getComparadorDeCampo('ml_attribute_ml_value.modificado');

	$filtros['ml_attribute_ml_value.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ml_attribute_ml_value.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ml_attribute_ml_value.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('ml_attribute_ml_value.modificado_por');

	$filtros['ml_attribute_ml_value.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

