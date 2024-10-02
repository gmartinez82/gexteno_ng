<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['ml_shipping_mode.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('ml_shipping_mode.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ml_shipping_mode.id');
	$comparador = $criterio->getComparadorDeCampo('ml_shipping_mode.id');

	$filtros['ml_shipping_mode.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ml_shipping_mode.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ml_shipping_mode.descripcion');
	$comparador = $criterio->getComparadorDeCampo('ml_shipping_mode.descripcion');

	$filtros['ml_shipping_mode.descripcion'] = array('campo' => 'Descripcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ml_shipping_mode.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ml_shipping_mode.codigo');
	$comparador = $criterio->getComparadorDeCampo('ml_shipping_mode.codigo');

	$filtros['ml_shipping_mode.codigo'] = array('campo' => 'Codigo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ml_shipping_mode.codigo_ml') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ml_shipping_mode.codigo_ml');
	$comparador = $criterio->getComparadorDeCampo('ml_shipping_mode.codigo_ml');

	$filtros['ml_shipping_mode.codigo_ml'] = array('campo' => 'Codigo ML', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ml_shipping_mode.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ml_shipping_mode.observacion');
	$comparador = $criterio->getComparadorDeCampo('ml_shipping_mode.observacion');

	$filtros['ml_shipping_mode.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ml_shipping_mode.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ml_shipping_mode.orden');
	$comparador = $criterio->getComparadorDeCampo('ml_shipping_mode.orden');

	$filtros['ml_shipping_mode.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ml_shipping_mode.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ml_shipping_mode.estado');
	$comparador = $criterio->getComparadorDeCampo('ml_shipping_mode.estado');

	$filtros['ml_shipping_mode.estado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ml_shipping_mode.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ml_shipping_mode.creado');
	$comparador = $criterio->getComparadorDeCampo('ml_shipping_mode.creado');

	$filtros['ml_shipping_mode.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ml_shipping_mode.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ml_shipping_mode.creado_por');
	$comparador = $criterio->getComparadorDeCampo('ml_shipping_mode.creado_por');

	$filtros['ml_shipping_mode.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ml_shipping_mode.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ml_shipping_mode.modificado');
	$comparador = $criterio->getComparadorDeCampo('ml_shipping_mode.modificado');

	$filtros['ml_shipping_mode.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ml_shipping_mode.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ml_shipping_mode.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('ml_shipping_mode.modificado_por');

	$filtros['ml_shipping_mode.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

