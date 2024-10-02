<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['ins_unidad_medida_pedido.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('ins_unidad_medida_pedido.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_unidad_medida_pedido.id');
	$comparador = $criterio->getComparadorDeCampo('ins_unidad_medida_pedido.id');

	$filtros['ins_unidad_medida_pedido.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_unidad_medida_pedido.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_unidad_medida_pedido.descripcion');
	$comparador = $criterio->getComparadorDeCampo('ins_unidad_medida_pedido.descripcion');

	$filtros['ins_unidad_medida_pedido.descripcion'] = array('campo' => 'Descripcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_unidad_medida_pedido.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_unidad_medida_pedido.codigo');
	$comparador = $criterio->getComparadorDeCampo('ins_unidad_medida_pedido.codigo');

	$filtros['ins_unidad_medida_pedido.codigo'] = array('campo' => 'Codigo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_unidad_medida_pedido.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_unidad_medida_pedido.observacion');
	$comparador = $criterio->getComparadorDeCampo('ins_unidad_medida_pedido.observacion');

	$filtros['ins_unidad_medida_pedido.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_unidad_medida_pedido.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_unidad_medida_pedido.orden');
	$comparador = $criterio->getComparadorDeCampo('ins_unidad_medida_pedido.orden');

	$filtros['ins_unidad_medida_pedido.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_unidad_medida_pedido.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_unidad_medida_pedido.estado');
	$comparador = $criterio->getComparadorDeCampo('ins_unidad_medida_pedido.estado');

	$filtros['ins_unidad_medida_pedido.estado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_unidad_medida_pedido.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_unidad_medida_pedido.creado');
	$comparador = $criterio->getComparadorDeCampo('ins_unidad_medida_pedido.creado');

	$filtros['ins_unidad_medida_pedido.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_unidad_medida_pedido.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_unidad_medida_pedido.creado_por');
	$comparador = $criterio->getComparadorDeCampo('ins_unidad_medida_pedido.creado_por');

	$filtros['ins_unidad_medida_pedido.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_unidad_medida_pedido.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_unidad_medida_pedido.modificado');
	$comparador = $criterio->getComparadorDeCampo('ins_unidad_medida_pedido.modificado');

	$filtros['ins_unidad_medida_pedido.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_unidad_medida_pedido.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_unidad_medida_pedido.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('ins_unidad_medida_pedido.modificado_por');

	$filtros['ins_unidad_medida_pedido.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

