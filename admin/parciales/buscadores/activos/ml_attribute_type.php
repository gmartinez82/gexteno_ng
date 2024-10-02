<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['ml_attribute_type.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('ml_attribute_type.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ml_attribute_type.id');
	$comparador = $criterio->getComparadorDeCampo('ml_attribute_type.id');

	$filtros['ml_attribute_type.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ml_attribute_type.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ml_attribute_type.descripcion');
	$comparador = $criterio->getComparadorDeCampo('ml_attribute_type.descripcion');

	$filtros['ml_attribute_type.descripcion'] = array('campo' => 'Descripcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ml_attribute_type.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ml_attribute_type.codigo');
	$comparador = $criterio->getComparadorDeCampo('ml_attribute_type.codigo');

	$filtros['ml_attribute_type.codigo'] = array('campo' => 'Codigo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ml_attribute_type.codigo_ml') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ml_attribute_type.codigo_ml');
	$comparador = $criterio->getComparadorDeCampo('ml_attribute_type.codigo_ml');

	$filtros['ml_attribute_type.codigo_ml'] = array('campo' => 'Codigo ML', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ml_attribute_type.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ml_attribute_type.observacion');
	$comparador = $criterio->getComparadorDeCampo('ml_attribute_type.observacion');

	$filtros['ml_attribute_type.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ml_attribute_type.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ml_attribute_type.orden');
	$comparador = $criterio->getComparadorDeCampo('ml_attribute_type.orden');

	$filtros['ml_attribute_type.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ml_attribute_type.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ml_attribute_type.estado');
	$comparador = $criterio->getComparadorDeCampo('ml_attribute_type.estado');

	$filtros['ml_attribute_type.estado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ml_attribute_type.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ml_attribute_type.creado');
	$comparador = $criterio->getComparadorDeCampo('ml_attribute_type.creado');

	$filtros['ml_attribute_type.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ml_attribute_type.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ml_attribute_type.creado_por');
	$comparador = $criterio->getComparadorDeCampo('ml_attribute_type.creado_por');

	$filtros['ml_attribute_type.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ml_attribute_type.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ml_attribute_type.modificado');
	$comparador = $criterio->getComparadorDeCampo('ml_attribute_type.modificado');

	$filtros['ml_attribute_type.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ml_attribute_type.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ml_attribute_type.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('ml_attribute_type.modificado_por');

	$filtros['ml_attribute_type.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

