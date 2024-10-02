<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['vta_politica_descuento_rango.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('vta_politica_descuento_rango.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_politica_descuento_rango.id');
	$comparador = $criterio->getComparadorDeCampo('vta_politica_descuento_rango.id');

	$filtros['vta_politica_descuento_rango.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_politica_descuento_rango.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_politica_descuento_rango.descripcion');
	$comparador = $criterio->getComparadorDeCampo('vta_politica_descuento_rango.descripcion');

	$filtros['vta_politica_descuento_rango.descripcion'] = array('campo' => 'Descripcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_politica_descuento_rango.vta_politica_descuento_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_politica_descuento_rango.vta_politica_descuento_id');
	$o = VtaPoliticaDescuento::getOxId($criterio->getValorDeCampo('vta_politica_descuento_rango.vta_politica_descuento_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('vta_politica_descuento_rango.vta_politica_descuento_id');

	$filtros['vta_politica_descuento_rango.vta_politica_descuento_id'] = array('campo' => 'VtaPoliticaDescuento', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_politica_descuento_rango.cantidad_desde') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_politica_descuento_rango.cantidad_desde');
	$comparador = $criterio->getComparadorDeCampo('vta_politica_descuento_rango.cantidad_desde');

	$filtros['vta_politica_descuento_rango.cantidad_desde'] = array('campo' => 'Desde', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_politica_descuento_rango.cantidad_hasta') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_politica_descuento_rango.cantidad_hasta');
	$comparador = $criterio->getComparadorDeCampo('vta_politica_descuento_rango.cantidad_hasta');

	$filtros['vta_politica_descuento_rango.cantidad_hasta'] = array('campo' => 'Hasta', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_politica_descuento_rango.porcentaje_descuento') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_politica_descuento_rango.porcentaje_descuento');
	$comparador = $criterio->getComparadorDeCampo('vta_politica_descuento_rango.porcentaje_descuento');

	$filtros['vta_politica_descuento_rango.porcentaje_descuento'] = array('campo' => 'Porc Descuento', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_politica_descuento_rango.porcentaje_negociacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_politica_descuento_rango.porcentaje_negociacion');
	$comparador = $criterio->getComparadorDeCampo('vta_politica_descuento_rango.porcentaje_negociacion');

	$filtros['vta_politica_descuento_rango.porcentaje_negociacion'] = array('campo' => 'Porc Negociacion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_politica_descuento_rango.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_politica_descuento_rango.codigo');
	$comparador = $criterio->getComparadorDeCampo('vta_politica_descuento_rango.codigo');

	$filtros['vta_politica_descuento_rango.codigo'] = array('campo' => 'Codigo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_politica_descuento_rango.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_politica_descuento_rango.observacion');
	$comparador = $criterio->getComparadorDeCampo('vta_politica_descuento_rango.observacion');

	$filtros['vta_politica_descuento_rango.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_politica_descuento_rango.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_politica_descuento_rango.orden');
	$comparador = $criterio->getComparadorDeCampo('vta_politica_descuento_rango.orden');

	$filtros['vta_politica_descuento_rango.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_politica_descuento_rango.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_politica_descuento_rango.estado');
	$comparador = $criterio->getComparadorDeCampo('vta_politica_descuento_rango.estado');

	$filtros['vta_politica_descuento_rango.estado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_politica_descuento_rango.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_politica_descuento_rango.creado');
	$comparador = $criterio->getComparadorDeCampo('vta_politica_descuento_rango.creado');

	$filtros['vta_politica_descuento_rango.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_politica_descuento_rango.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_politica_descuento_rango.creado_por');
	$comparador = $criterio->getComparadorDeCampo('vta_politica_descuento_rango.creado_por');

	$filtros['vta_politica_descuento_rango.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_politica_descuento_rango.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_politica_descuento_rango.modificado');
	$comparador = $criterio->getComparadorDeCampo('vta_politica_descuento_rango.modificado');

	$filtros['vta_politica_descuento_rango.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_politica_descuento_rango.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_politica_descuento_rango.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('vta_politica_descuento_rango.modificado_por');

	$filtros['vta_politica_descuento_rango.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

