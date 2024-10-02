<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['ml_condition.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('ml_condition.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ml_condition.id');
	$comparador = $criterio->getComparadorDeCampo('ml_condition.id');

	$filtros['ml_condition.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ml_condition.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ml_condition.descripcion');
	$comparador = $criterio->getComparadorDeCampo('ml_condition.descripcion');

	$filtros['ml_condition.descripcion'] = array('campo' => 'Descripcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ml_condition.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ml_condition.codigo');
	$comparador = $criterio->getComparadorDeCampo('ml_condition.codigo');

	$filtros['ml_condition.codigo'] = array('campo' => 'Codigo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ml_condition.codigo_ml') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ml_condition.codigo_ml');
	$comparador = $criterio->getComparadorDeCampo('ml_condition.codigo_ml');

	$filtros['ml_condition.codigo_ml'] = array('campo' => 'Codigo ML', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ml_condition.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ml_condition.observacion');
	$comparador = $criterio->getComparadorDeCampo('ml_condition.observacion');

	$filtros['ml_condition.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ml_condition.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ml_condition.orden');
	$comparador = $criterio->getComparadorDeCampo('ml_condition.orden');

	$filtros['ml_condition.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ml_condition.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ml_condition.estado');
	$comparador = $criterio->getComparadorDeCampo('ml_condition.estado');

	$filtros['ml_condition.estado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ml_condition.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ml_condition.creado');
	$comparador = $criterio->getComparadorDeCampo('ml_condition.creado');

	$filtros['ml_condition.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ml_condition.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ml_condition.creado_por');
	$comparador = $criterio->getComparadorDeCampo('ml_condition.creado_por');

	$filtros['ml_condition.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ml_condition.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ml_condition.modificado');
	$comparador = $criterio->getComparadorDeCampo('ml_condition.modificado');

	$filtros['ml_condition.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ml_condition.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ml_condition.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('ml_condition.modificado_por');

	$filtros['ml_condition.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

