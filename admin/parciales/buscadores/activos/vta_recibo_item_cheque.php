<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['vta_recibo_item_cheque.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('vta_recibo_item_cheque.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_recibo_item_cheque.id');
	$comparador = $criterio->getComparadorDeCampo('vta_recibo_item_cheque.id');

	$filtros['vta_recibo_item_cheque.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_recibo_item_cheque.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_recibo_item_cheque.descripcion');
	$comparador = $criterio->getComparadorDeCampo('vta_recibo_item_cheque.descripcion');

	$filtros['vta_recibo_item_cheque.descripcion'] = array('campo' => 'Descripcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_recibo_item_cheque.vta_recibo_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_recibo_item_cheque.vta_recibo_id');
	$o = VtaRecibo::getOxId($criterio->getValorDeCampo('vta_recibo_item_cheque.vta_recibo_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('vta_recibo_item_cheque.vta_recibo_id');

	$filtros['vta_recibo_item_cheque.vta_recibo_id'] = array('campo' => 'VtaRecibo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_recibo_item_cheque.vta_recibo_item_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_recibo_item_cheque.vta_recibo_item_id');
	$o = VtaReciboItem::getOxId($criterio->getValorDeCampo('vta_recibo_item_cheque.vta_recibo_item_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('vta_recibo_item_cheque.vta_recibo_item_id');

	$filtros['vta_recibo_item_cheque.vta_recibo_item_id'] = array('campo' => 'VtaReciboItem', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_recibo_item_cheque.gral_banco_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_recibo_item_cheque.gral_banco_id');
	$o = GralBanco::getOxId($criterio->getValorDeCampo('vta_recibo_item_cheque.gral_banco_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('vta_recibo_item_cheque.gral_banco_id');

	$filtros['vta_recibo_item_cheque.gral_banco_id'] = array('campo' => 'GralBanco', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_recibo_item_cheque.numero_cheque') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_recibo_item_cheque.numero_cheque');
	$comparador = $criterio->getComparadorDeCampo('vta_recibo_item_cheque.numero_cheque');

	$filtros['vta_recibo_item_cheque.numero_cheque'] = array('campo' => 'Numero de Cheque', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_recibo_item_cheque.fecha_emision') != ''){
	$valor = Gral::getFechaToWeb($valor = $criterio->getValorDeCampo('vta_recibo_item_cheque.fecha_emision'));
	$comparador = $criterio->getComparadorDeCampo('vta_recibo_item_cheque.fecha_emision');

	$filtros['vta_recibo_item_cheque.fecha_emision'] = array('campo' => 'Fecha de Emision', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_recibo_item_cheque.fecha_cobro') != ''){
	$valor = Gral::getFechaToWeb($valor = $criterio->getValorDeCampo('vta_recibo_item_cheque.fecha_cobro'));
	$comparador = $criterio->getComparadorDeCampo('vta_recibo_item_cheque.fecha_cobro');

	$filtros['vta_recibo_item_cheque.fecha_cobro'] = array('campo' => 'Fecha de Cobro', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_recibo_item_cheque.firmante') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_recibo_item_cheque.firmante');
	$comparador = $criterio->getComparadorDeCampo('vta_recibo_item_cheque.firmante');

	$filtros['vta_recibo_item_cheque.firmante'] = array('campo' => 'Firmante', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_recibo_item_cheque.entregador') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_recibo_item_cheque.entregador');
	$comparador = $criterio->getComparadorDeCampo('vta_recibo_item_cheque.entregador');

	$filtros['vta_recibo_item_cheque.entregador'] = array('campo' => 'Entregador', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_recibo_item_cheque.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_recibo_item_cheque.codigo');
	$comparador = $criterio->getComparadorDeCampo('vta_recibo_item_cheque.codigo');

	$filtros['vta_recibo_item_cheque.codigo'] = array('campo' => 'Codigo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_recibo_item_cheque.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_recibo_item_cheque.observacion');
	$comparador = $criterio->getComparadorDeCampo('vta_recibo_item_cheque.observacion');

	$filtros['vta_recibo_item_cheque.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_recibo_item_cheque.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_recibo_item_cheque.orden');
	$comparador = $criterio->getComparadorDeCampo('vta_recibo_item_cheque.orden');

	$filtros['vta_recibo_item_cheque.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_recibo_item_cheque.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_recibo_item_cheque.estado');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('vta_recibo_item_cheque.estado'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('vta_recibo_item_cheque.estado');

	$filtros['vta_recibo_item_cheque.estado'] = array('campo' => 'Estado', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_recibo_item_cheque.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_recibo_item_cheque.creado');
	$comparador = $criterio->getComparadorDeCampo('vta_recibo_item_cheque.creado');

	$filtros['vta_recibo_item_cheque.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_recibo_item_cheque.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_recibo_item_cheque.creado_por');
	$comparador = $criterio->getComparadorDeCampo('vta_recibo_item_cheque.creado_por');

	$filtros['vta_recibo_item_cheque.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_recibo_item_cheque.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_recibo_item_cheque.modificado');
	$comparador = $criterio->getComparadorDeCampo('vta_recibo_item_cheque.modificado');

	$filtros['vta_recibo_item_cheque.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_recibo_item_cheque.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_recibo_item_cheque.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('vta_recibo_item_cheque.modificado_por');

	$filtros['vta_recibo_item_cheque.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

