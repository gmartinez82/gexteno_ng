<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['vta_recibo_item_conciliado.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('vta_recibo_item_conciliado.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_recibo_item_conciliado.id');
	$comparador = $criterio->getComparadorDeCampo('vta_recibo_item_conciliado.id');

	$filtros['vta_recibo_item_conciliado.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_recibo_item_conciliado.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_recibo_item_conciliado.descripcion');
	$comparador = $criterio->getComparadorDeCampo('vta_recibo_item_conciliado.descripcion');

	$filtros['vta_recibo_item_conciliado.descripcion'] = array('campo' => 'Descripcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_recibo_item_conciliado.vta_recibo_item_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_recibo_item_conciliado.vta_recibo_item_id');
	$o = VtaReciboItem::getOxId($criterio->getValorDeCampo('vta_recibo_item_conciliado.vta_recibo_item_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('vta_recibo_item_conciliado.vta_recibo_item_id');

	$filtros['vta_recibo_item_conciliado.vta_recibo_item_id'] = array('campo' => 'VtaReciboItem', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_recibo_item_conciliado.importe_original') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_recibo_item_conciliado.importe_original');
	$comparador = $criterio->getComparadorDeCampo('vta_recibo_item_conciliado.importe_original');

	$filtros['vta_recibo_item_conciliado.importe_original'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_recibo_item_conciliado.importe_conciliado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_recibo_item_conciliado.importe_conciliado');
	$comparador = $criterio->getComparadorDeCampo('vta_recibo_item_conciliado.importe_conciliado');

	$filtros['vta_recibo_item_conciliado.importe_conciliado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_recibo_item_conciliado.importe_diferencia') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_recibo_item_conciliado.importe_diferencia');
	$comparador = $criterio->getComparadorDeCampo('vta_recibo_item_conciliado.importe_diferencia');

	$filtros['vta_recibo_item_conciliado.importe_diferencia'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_recibo_item_conciliado.fecha') != ''){
	$valor = Gral::getFechaToWeb($valor = $criterio->getValorDeCampo('vta_recibo_item_conciliado.fecha'));
	$comparador = $criterio->getComparadorDeCampo('vta_recibo_item_conciliado.fecha');

	$filtros['vta_recibo_item_conciliado.fecha'] = array('campo' => 'Fecha', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_recibo_item_conciliado.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_recibo_item_conciliado.codigo');
	$comparador = $criterio->getComparadorDeCampo('vta_recibo_item_conciliado.codigo');

	$filtros['vta_recibo_item_conciliado.codigo'] = array('campo' => 'Codigo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_recibo_item_conciliado.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_recibo_item_conciliado.observacion');
	$comparador = $criterio->getComparadorDeCampo('vta_recibo_item_conciliado.observacion');

	$filtros['vta_recibo_item_conciliado.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_recibo_item_conciliado.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_recibo_item_conciliado.orden');
	$comparador = $criterio->getComparadorDeCampo('vta_recibo_item_conciliado.orden');

	$filtros['vta_recibo_item_conciliado.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_recibo_item_conciliado.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_recibo_item_conciliado.estado');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('vta_recibo_item_conciliado.estado'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('vta_recibo_item_conciliado.estado');

	$filtros['vta_recibo_item_conciliado.estado'] = array('campo' => 'Estado', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_recibo_item_conciliado.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_recibo_item_conciliado.creado');
	$comparador = $criterio->getComparadorDeCampo('vta_recibo_item_conciliado.creado');

	$filtros['vta_recibo_item_conciliado.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_recibo_item_conciliado.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_recibo_item_conciliado.creado_por');
	$comparador = $criterio->getComparadorDeCampo('vta_recibo_item_conciliado.creado_por');

	$filtros['vta_recibo_item_conciliado.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_recibo_item_conciliado.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_recibo_item_conciliado.modificado');
	$comparador = $criterio->getComparadorDeCampo('vta_recibo_item_conciliado.modificado');

	$filtros['vta_recibo_item_conciliado.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_recibo_item_conciliado.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_recibo_item_conciliado.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('vta_recibo_item_conciliado.modificado_por');

	$filtros['vta_recibo_item_conciliado.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

