<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['vta_recibo_item_retencion.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('vta_recibo_item_retencion.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_recibo_item_retencion.id');
	$comparador = $criterio->getComparadorDeCampo('vta_recibo_item_retencion.id');

	$filtros['vta_recibo_item_retencion.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_recibo_item_retencion.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_recibo_item_retencion.descripcion');
	$comparador = $criterio->getComparadorDeCampo('vta_recibo_item_retencion.descripcion');

	$filtros['vta_recibo_item_retencion.descripcion'] = array('campo' => 'Descripcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_recibo_item_retencion.vta_recibo_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_recibo_item_retencion.vta_recibo_id');
	$o = VtaRecibo::getOxId($criterio->getValorDeCampo('vta_recibo_item_retencion.vta_recibo_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('vta_recibo_item_retencion.vta_recibo_id');

	$filtros['vta_recibo_item_retencion.vta_recibo_id'] = array('campo' => 'VtaRecibo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_recibo_item_retencion.vta_recibo_item_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_recibo_item_retencion.vta_recibo_item_id');
	$o = VtaReciboItem::getOxId($criterio->getValorDeCampo('vta_recibo_item_retencion.vta_recibo_item_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('vta_recibo_item_retencion.vta_recibo_item_id');

	$filtros['vta_recibo_item_retencion.vta_recibo_item_id'] = array('campo' => 'VtaReciboItem', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_recibo_item_retencion.numero_comprobante') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_recibo_item_retencion.numero_comprobante');
	$comparador = $criterio->getComparadorDeCampo('vta_recibo_item_retencion.numero_comprobante');

	$filtros['vta_recibo_item_retencion.numero_comprobante'] = array('campo' => 'Numero de Comprobante', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_recibo_item_retencion.fecha_emision') != ''){
	$valor = Gral::getFechaToWeb($valor = $criterio->getValorDeCampo('vta_recibo_item_retencion.fecha_emision'));
	$comparador = $criterio->getComparadorDeCampo('vta_recibo_item_retencion.fecha_emision');

	$filtros['vta_recibo_item_retencion.fecha_emision'] = array('campo' => 'Fecha de Emision', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_recibo_item_retencion.importe_base_imponible') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_recibo_item_retencion.importe_base_imponible');
	$comparador = $criterio->getComparadorDeCampo('vta_recibo_item_retencion.importe_base_imponible');

	$filtros['vta_recibo_item_retencion.importe_base_imponible'] = array('campo' => 'Imp BI', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_recibo_item_retencion.importe_retencion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_recibo_item_retencion.importe_retencion');
	$comparador = $criterio->getComparadorDeCampo('vta_recibo_item_retencion.importe_retencion');

	$filtros['vta_recibo_item_retencion.importe_retencion'] = array('campo' => 'Imp Retencion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_recibo_item_retencion.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_recibo_item_retencion.codigo');
	$comparador = $criterio->getComparadorDeCampo('vta_recibo_item_retencion.codigo');

	$filtros['vta_recibo_item_retencion.codigo'] = array('campo' => 'Codigo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_recibo_item_retencion.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_recibo_item_retencion.observacion');
	$comparador = $criterio->getComparadorDeCampo('vta_recibo_item_retencion.observacion');

	$filtros['vta_recibo_item_retencion.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_recibo_item_retencion.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_recibo_item_retencion.orden');
	$comparador = $criterio->getComparadorDeCampo('vta_recibo_item_retencion.orden');

	$filtros['vta_recibo_item_retencion.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_recibo_item_retencion.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_recibo_item_retencion.estado');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('vta_recibo_item_retencion.estado'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('vta_recibo_item_retencion.estado');

	$filtros['vta_recibo_item_retencion.estado'] = array('campo' => 'Estado', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_recibo_item_retencion.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_recibo_item_retencion.creado');
	$comparador = $criterio->getComparadorDeCampo('vta_recibo_item_retencion.creado');

	$filtros['vta_recibo_item_retencion.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_recibo_item_retencion.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_recibo_item_retencion.creado_por');
	$comparador = $criterio->getComparadorDeCampo('vta_recibo_item_retencion.creado_por');

	$filtros['vta_recibo_item_retencion.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_recibo_item_retencion.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_recibo_item_retencion.modificado');
	$comparador = $criterio->getComparadorDeCampo('vta_recibo_item_retencion.modificado');

	$filtros['vta_recibo_item_retencion.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_recibo_item_retencion.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_recibo_item_retencion.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('vta_recibo_item_retencion.modificado_por');

	$filtros['vta_recibo_item_retencion.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

