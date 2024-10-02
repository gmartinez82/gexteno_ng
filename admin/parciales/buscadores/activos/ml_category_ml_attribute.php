<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['ml_category_ml_attribute.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('ml_category_ml_attribute.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ml_category_ml_attribute.id');
	$comparador = $criterio->getComparadorDeCampo('ml_category_ml_attribute.id');

	$filtros['ml_category_ml_attribute.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ml_category_ml_attribute.ml_category_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ml_category_ml_attribute.ml_category_id');
	$o = MlCategory::getOxId($criterio->getValorDeCampo('ml_category_ml_attribute.ml_category_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('ml_category_ml_attribute.ml_category_id');

	$filtros['ml_category_ml_attribute.ml_category_id'] = array('campo' => 'MlCategory', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ml_category_ml_attribute.ml_attribute_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ml_category_ml_attribute.ml_attribute_id');
	$o = MlAttribute::getOxId($criterio->getValorDeCampo('ml_category_ml_attribute.ml_attribute_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('ml_category_ml_attribute.ml_attribute_id');

	$filtros['ml_category_ml_attribute.ml_attribute_id'] = array('campo' => 'MlAttribute', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ml_category_ml_attribute.ml_relevance') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ml_category_ml_attribute.ml_relevance');
	$comparador = $criterio->getComparadorDeCampo('ml_category_ml_attribute.ml_relevance');

	$filtros['ml_category_ml_attribute.ml_relevance'] = array('campo' => 'ML Relevance', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ml_category_ml_attribute.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ml_category_ml_attribute.observacion');
	$comparador = $criterio->getComparadorDeCampo('ml_category_ml_attribute.observacion');

	$filtros['ml_category_ml_attribute.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ml_category_ml_attribute.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ml_category_ml_attribute.orden');
	$comparador = $criterio->getComparadorDeCampo('ml_category_ml_attribute.orden');

	$filtros['ml_category_ml_attribute.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ml_category_ml_attribute.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ml_category_ml_attribute.estado');
	$comparador = $criterio->getComparadorDeCampo('ml_category_ml_attribute.estado');

	$filtros['ml_category_ml_attribute.estado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ml_category_ml_attribute.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ml_category_ml_attribute.creado');
	$comparador = $criterio->getComparadorDeCampo('ml_category_ml_attribute.creado');

	$filtros['ml_category_ml_attribute.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ml_category_ml_attribute.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ml_category_ml_attribute.creado_por');
	$comparador = $criterio->getComparadorDeCampo('ml_category_ml_attribute.creado_por');

	$filtros['ml_category_ml_attribute.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ml_category_ml_attribute.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ml_category_ml_attribute.modificado');
	$comparador = $criterio->getComparadorDeCampo('ml_category_ml_attribute.modificado');

	$filtros['ml_category_ml_attribute.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ml_category_ml_attribute.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ml_category_ml_attribute.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('ml_category_ml_attribute.modificado_por');

	$filtros['ml_category_ml_attribute.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

