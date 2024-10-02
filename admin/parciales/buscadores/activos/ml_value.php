<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['ml_value.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('ml_value.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ml_value.id');
	$comparador = $criterio->getComparadorDeCampo('ml_value.id');

	$filtros['ml_value.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ml_value.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ml_value.descripcion');
	$comparador = $criterio->getComparadorDeCampo('ml_value.descripcion');

	$filtros['ml_value.descripcion'] = array('campo' => 'Descripcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ml_value.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ml_value.codigo');
	$comparador = $criterio->getComparadorDeCampo('ml_value.codigo');

	$filtros['ml_value.codigo'] = array('campo' => 'Codigo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ml_value.codigo_ml') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ml_value.codigo_ml');
	$comparador = $criterio->getComparadorDeCampo('ml_value.codigo_ml');

	$filtros['ml_value.codigo_ml'] = array('campo' => 'Codigo ML', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ml_value.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ml_value.observacion');
	$comparador = $criterio->getComparadorDeCampo('ml_value.observacion');

	$filtros['ml_value.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ml_value.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ml_value.orden');
	$comparador = $criterio->getComparadorDeCampo('ml_value.orden');

	$filtros['ml_value.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ml_value.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ml_value.estado');
	$comparador = $criterio->getComparadorDeCampo('ml_value.estado');

	$filtros['ml_value.estado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ml_value.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ml_value.creado');
	$comparador = $criterio->getComparadorDeCampo('ml_value.creado');

	$filtros['ml_value.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ml_value.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ml_value.creado_por');
	$comparador = $criterio->getComparadorDeCampo('ml_value.creado_por');

	$filtros['ml_value.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ml_value.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ml_value.modificado');
	$comparador = $criterio->getComparadorDeCampo('ml_value.modificado');

	$filtros['ml_value.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ml_value.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ml_value.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('ml_value.modificado_por');

	$filtros['ml_value.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

