<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['ins_venta_ml_info_ml_attribute.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('ins_venta_ml_info_ml_attribute.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_venta_ml_info_ml_attribute.id');
	$comparador = $criterio->getComparadorDeCampo('ins_venta_ml_info_ml_attribute.id');

	$filtros['ins_venta_ml_info_ml_attribute.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_venta_ml_info_ml_attribute.ins_venta_ml_info_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_venta_ml_info_ml_attribute.ins_venta_ml_info_id');
	$comparador = $criterio->getComparadorDeCampo('ins_venta_ml_info_ml_attribute.ins_venta_ml_info_id');

	$filtros['ins_venta_ml_info_ml_attribute.ins_venta_ml_info_id'] = array('campo' => 'InsVentaMlInfo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_venta_ml_info_ml_attribute.ml_attribute_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_venta_ml_info_ml_attribute.ml_attribute_id');
	$o = MlAttribute::getOxId($criterio->getValorDeCampo('ins_venta_ml_info_ml_attribute.ml_attribute_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('ins_venta_ml_info_ml_attribute.ml_attribute_id');

	$filtros['ins_venta_ml_info_ml_attribute.ml_attribute_id'] = array('campo' => 'MlAttribute', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_venta_ml_info_ml_attribute.ml_value_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_venta_ml_info_ml_attribute.ml_value_id');
	$o = MlValue::getOxId($criterio->getValorDeCampo('ins_venta_ml_info_ml_attribute.ml_value_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('ins_venta_ml_info_ml_attribute.ml_value_id');

	$filtros['ins_venta_ml_info_ml_attribute.ml_value_id'] = array('campo' => 'MlValue', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_venta_ml_info_ml_attribute.ml_value_valor') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_venta_ml_info_ml_attribute.ml_value_valor');
	$comparador = $criterio->getComparadorDeCampo('ins_venta_ml_info_ml_attribute.ml_value_valor');

	$filtros['ins_venta_ml_info_ml_attribute.ml_value_valor'] = array('campo' => 'ML Value Valor', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_venta_ml_info_ml_attribute.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_venta_ml_info_ml_attribute.observacion');
	$comparador = $criterio->getComparadorDeCampo('ins_venta_ml_info_ml_attribute.observacion');

	$filtros['ins_venta_ml_info_ml_attribute.observacion'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_venta_ml_info_ml_attribute.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_venta_ml_info_ml_attribute.orden');
	$comparador = $criterio->getComparadorDeCampo('ins_venta_ml_info_ml_attribute.orden');

	$filtros['ins_venta_ml_info_ml_attribute.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_venta_ml_info_ml_attribute.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_venta_ml_info_ml_attribute.estado');
	$comparador = $criterio->getComparadorDeCampo('ins_venta_ml_info_ml_attribute.estado');

	$filtros['ins_venta_ml_info_ml_attribute.estado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_venta_ml_info_ml_attribute.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_venta_ml_info_ml_attribute.creado');
	$comparador = $criterio->getComparadorDeCampo('ins_venta_ml_info_ml_attribute.creado');

	$filtros['ins_venta_ml_info_ml_attribute.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_venta_ml_info_ml_attribute.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_venta_ml_info_ml_attribute.creado_por');
	$comparador = $criterio->getComparadorDeCampo('ins_venta_ml_info_ml_attribute.creado_por');

	$filtros['ins_venta_ml_info_ml_attribute.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_venta_ml_info_ml_attribute.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_venta_ml_info_ml_attribute.modificado');
	$comparador = $criterio->getComparadorDeCampo('ins_venta_ml_info_ml_attribute.modificado');

	$filtros['ins_venta_ml_info_ml_attribute.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_venta_ml_info_ml_attribute.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_venta_ml_info_ml_attribute.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('ins_venta_ml_info_ml_attribute.modificado_por');

	$filtros['ins_venta_ml_info_ml_attribute.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

