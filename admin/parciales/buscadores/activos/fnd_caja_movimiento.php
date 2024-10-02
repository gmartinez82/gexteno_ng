<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['fnd_caja_movimiento.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('fnd_caja_movimiento.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_caja_movimiento.id');
	$comparador = $criterio->getComparadorDeCampo('fnd_caja_movimiento.id');

	$filtros['fnd_caja_movimiento.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('fnd_caja_movimiento.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_caja_movimiento.descripcion');
	$comparador = $criterio->getComparadorDeCampo('fnd_caja_movimiento.descripcion');

	$filtros['fnd_caja_movimiento.descripcion'] = array('campo' => 'Descripcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('fnd_caja_movimiento.fnd_caja_origen') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_caja_movimiento.fnd_caja_origen');
	$o = FndCaja::getOxId($criterio->getValorDeCampo('fnd_caja_movimiento.fnd_caja_origen'));
	$valor = $o->getDescripcion();
	
	$comparador = $criterio->getComparadorDeCampo('fnd_caja_movimiento.fnd_caja_origen');

	$filtros['fnd_caja_movimiento.fnd_caja_origen'] = array('campo' => 'FndCajaOrigen', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('fnd_caja_movimiento.fnd_caja_destino') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_caja_movimiento.fnd_caja_destino');
	$o = FndCaja::getOxId($criterio->getValorDeCampo('fnd_caja_movimiento.fnd_caja_destino'));
	$valor = $o->getDescripcion();
	
	$comparador = $criterio->getComparadorDeCampo('fnd_caja_movimiento.fnd_caja_destino');

	$filtros['fnd_caja_movimiento.fnd_caja_destino'] = array('campo' => 'FndCajaDestino', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('fnd_caja_movimiento.fnd_caja_tipo_movimiento_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_caja_movimiento.fnd_caja_tipo_movimiento_id');
	$o = FndCajaTipoMovimiento::getOxId($criterio->getValorDeCampo('fnd_caja_movimiento.fnd_caja_tipo_movimiento_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('fnd_caja_movimiento.fnd_caja_tipo_movimiento_id');

	$filtros['fnd_caja_movimiento.fnd_caja_tipo_movimiento_id'] = array('campo' => 'FndCajaTipoMovimiento', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('fnd_caja_movimiento.autorizado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_caja_movimiento.autorizado');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('fnd_caja_movimiento.autorizado'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('fnd_caja_movimiento.autorizado');

	$filtros['fnd_caja_movimiento.autorizado'] = array('campo' => 'Autorizado', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('fnd_caja_movimiento.autorizado_el') != ''){
	$valor = Gral::getFechaToWeb($valor = $criterio->getValorDeCampo('fnd_caja_movimiento.autorizado_el'));
	$comparador = $criterio->getComparadorDeCampo('fnd_caja_movimiento.autorizado_el');

	$filtros['fnd_caja_movimiento.autorizado_el'] = array('campo' => 'Autorizado el', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('fnd_caja_movimiento.autorizado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_caja_movimiento.autorizado_por');
	$o = UsUsuario::getOxId($criterio->getValorDeCampo('fnd_caja_movimiento.autorizado_por'));
	$valor = $o->getDescripcion();
	
	$comparador = $criterio->getComparadorDeCampo('fnd_caja_movimiento.autorizado_por');

	$filtros['fnd_caja_movimiento.autorizado_por'] = array('campo' => 'Autorizado Por', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('fnd_caja_movimiento.fnd_caja_movimiento_tipo_estado_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_caja_movimiento.fnd_caja_movimiento_tipo_estado_id');
	$o = FndCajaMovimientoTipoEstado::getOxId($criterio->getValorDeCampo('fnd_caja_movimiento.fnd_caja_movimiento_tipo_estado_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('fnd_caja_movimiento.fnd_caja_movimiento_tipo_estado_id');

	$filtros['fnd_caja_movimiento.fnd_caja_movimiento_tipo_estado_id'] = array('campo' => 'FndCajaMovimientoTipoEstado', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('fnd_caja_movimiento.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_caja_movimiento.codigo');
	$comparador = $criterio->getComparadorDeCampo('fnd_caja_movimiento.codigo');

	$filtros['fnd_caja_movimiento.codigo'] = array('campo' => 'Codigo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('fnd_caja_movimiento.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_caja_movimiento.observacion');
	$comparador = $criterio->getComparadorDeCampo('fnd_caja_movimiento.observacion');

	$filtros['fnd_caja_movimiento.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('fnd_caja_movimiento.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_caja_movimiento.orden');
	$comparador = $criterio->getComparadorDeCampo('fnd_caja_movimiento.orden');

	$filtros['fnd_caja_movimiento.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('fnd_caja_movimiento.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_caja_movimiento.estado');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('fnd_caja_movimiento.estado'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('fnd_caja_movimiento.estado');

	$filtros['fnd_caja_movimiento.estado'] = array('campo' => 'Estado', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('fnd_caja_movimiento.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_caja_movimiento.creado');
	$comparador = $criterio->getComparadorDeCampo('fnd_caja_movimiento.creado');

	$filtros['fnd_caja_movimiento.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('fnd_caja_movimiento.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_caja_movimiento.creado_por');
	$comparador = $criterio->getComparadorDeCampo('fnd_caja_movimiento.creado_por');

	$filtros['fnd_caja_movimiento.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('fnd_caja_movimiento.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_caja_movimiento.modificado');
	$comparador = $criterio->getComparadorDeCampo('fnd_caja_movimiento.modificado');

	$filtros['fnd_caja_movimiento.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('fnd_caja_movimiento.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_caja_movimiento.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('fnd_caja_movimiento.modificado_por');

	$filtros['fnd_caja_movimiento.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

