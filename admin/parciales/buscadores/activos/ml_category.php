<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['ml_category.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('ml_category.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ml_category.id');
	$comparador = $criterio->getComparadorDeCampo('ml_category.id');

	$filtros['ml_category.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ml_category.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ml_category.descripcion');
	$comparador = $criterio->getComparadorDeCampo('ml_category.descripcion');

	$filtros['ml_category.descripcion'] = array('campo' => 'Descripcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ml_category.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ml_category.codigo');
	$comparador = $criterio->getComparadorDeCampo('ml_category.codigo');

	$filtros['ml_category.codigo'] = array('campo' => 'Codigo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ml_category.codigo_ml') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ml_category.codigo_ml');
	$comparador = $criterio->getComparadorDeCampo('ml_category.codigo_ml');

	$filtros['ml_category.codigo_ml'] = array('campo' => 'Codigo ML', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ml_category.ml_dimensions') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ml_category.ml_dimensions');
	$comparador = $criterio->getComparadorDeCampo('ml_category.ml_dimensions');

	$filtros['ml_category.ml_dimensions'] = array('campo' => 'ML Dimensions', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ml_category.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ml_category.observacion');
	$comparador = $criterio->getComparadorDeCampo('ml_category.observacion');

	$filtros['ml_category.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ml_category.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ml_category.orden');
	$comparador = $criterio->getComparadorDeCampo('ml_category.orden');

	$filtros['ml_category.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ml_category.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ml_category.estado');
	$comparador = $criterio->getComparadorDeCampo('ml_category.estado');

	$filtros['ml_category.estado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ml_category.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ml_category.creado');
	$comparador = $criterio->getComparadorDeCampo('ml_category.creado');

	$filtros['ml_category.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ml_category.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ml_category.creado_por');
	$comparador = $criterio->getComparadorDeCampo('ml_category.creado_por');

	$filtros['ml_category.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ml_category.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ml_category.modificado');
	$comparador = $criterio->getComparadorDeCampo('ml_category.modificado');

	$filtros['ml_category.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ml_category.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ml_category.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('ml_category.modificado_por');

	$filtros['ml_category.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

