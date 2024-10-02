<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['fnd_caja_movimiento_item.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('fnd_caja_movimiento_item.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_caja_movimiento_item.id');
	$comparador = $criterio->getComparadorDeCampo('fnd_caja_movimiento_item.id');

	$filtros['fnd_caja_movimiento_item.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('fnd_caja_movimiento_item.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_caja_movimiento_item.descripcion');
	$comparador = $criterio->getComparadorDeCampo('fnd_caja_movimiento_item.descripcion');

	$filtros['fnd_caja_movimiento_item.descripcion'] = array('campo' => 'Descripcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('fnd_caja_movimiento_item.fnd_caja_movimiento_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_caja_movimiento_item.fnd_caja_movimiento_id');
	$o = FndCajaMovimiento::getOxId($criterio->getValorDeCampo('fnd_caja_movimiento_item.fnd_caja_movimiento_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('fnd_caja_movimiento_item.fnd_caja_movimiento_id');

	$filtros['fnd_caja_movimiento_item.fnd_caja_movimiento_id'] = array('campo' => 'FndCajaMovimiento', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('fnd_caja_movimiento_item.importe') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_caja_movimiento_item.importe');
	$comparador = $criterio->getComparadorDeCampo('fnd_caja_movimiento_item.importe');

	$filtros['fnd_caja_movimiento_item.importe'] = array('campo' => 'Importe', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('fnd_caja_movimiento_item.gral_fp_forma_pago_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_caja_movimiento_item.gral_fp_forma_pago_id');
	$o = GralFpFormaPago::getOxId($criterio->getValorDeCampo('fnd_caja_movimiento_item.gral_fp_forma_pago_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('fnd_caja_movimiento_item.gral_fp_forma_pago_id');

	$filtros['fnd_caja_movimiento_item.gral_fp_forma_pago_id'] = array('campo' => 'GralFpFormaPago', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('fnd_caja_movimiento_item.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_caja_movimiento_item.codigo');
	$comparador = $criterio->getComparadorDeCampo('fnd_caja_movimiento_item.codigo');

	$filtros['fnd_caja_movimiento_item.codigo'] = array('campo' => 'Codigo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('fnd_caja_movimiento_item.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_caja_movimiento_item.observacion');
	$comparador = $criterio->getComparadorDeCampo('fnd_caja_movimiento_item.observacion');

	$filtros['fnd_caja_movimiento_item.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('fnd_caja_movimiento_item.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_caja_movimiento_item.orden');
	$comparador = $criterio->getComparadorDeCampo('fnd_caja_movimiento_item.orden');

	$filtros['fnd_caja_movimiento_item.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('fnd_caja_movimiento_item.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_caja_movimiento_item.estado');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('fnd_caja_movimiento_item.estado'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('fnd_caja_movimiento_item.estado');

	$filtros['fnd_caja_movimiento_item.estado'] = array('campo' => 'Estado', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('fnd_caja_movimiento_item.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_caja_movimiento_item.creado');
	$comparador = $criterio->getComparadorDeCampo('fnd_caja_movimiento_item.creado');

	$filtros['fnd_caja_movimiento_item.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('fnd_caja_movimiento_item.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_caja_movimiento_item.creado_por');
	$comparador = $criterio->getComparadorDeCampo('fnd_caja_movimiento_item.creado_por');

	$filtros['fnd_caja_movimiento_item.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('fnd_caja_movimiento_item.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_caja_movimiento_item.modificado');
	$comparador = $criterio->getComparadorDeCampo('fnd_caja_movimiento_item.modificado');

	$filtros['fnd_caja_movimiento_item.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('fnd_caja_movimiento_item.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_caja_movimiento_item.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('fnd_caja_movimiento_item.modificado_por');

	$filtros['fnd_caja_movimiento_item.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

