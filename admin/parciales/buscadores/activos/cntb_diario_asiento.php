<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['cntb_diario_asiento.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('cntb_diario_asiento.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cntb_diario_asiento.id');
	$comparador = $criterio->getComparadorDeCampo('cntb_diario_asiento.id');

	$filtros['cntb_diario_asiento.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cntb_diario_asiento.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cntb_diario_asiento.descripcion');
	$comparador = $criterio->getComparadorDeCampo('cntb_diario_asiento.descripcion');

	$filtros['cntb_diario_asiento.descripcion'] = array('campo' => 'Descripcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cntb_diario_asiento.cntb_ejercicio_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cntb_diario_asiento.cntb_ejercicio_id');
	$o = CntbEjercicio::getOxId($criterio->getValorDeCampo('cntb_diario_asiento.cntb_ejercicio_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('cntb_diario_asiento.cntb_ejercicio_id');

	$filtros['cntb_diario_asiento.cntb_ejercicio_id'] = array('campo' => 'CntbEjercicio', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cntb_diario_asiento.cntb_periodo_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cntb_diario_asiento.cntb_periodo_id');
	$o = CntbPeriodo::getOxId($criterio->getValorDeCampo('cntb_diario_asiento.cntb_periodo_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('cntb_diario_asiento.cntb_periodo_id');

	$filtros['cntb_diario_asiento.cntb_periodo_id'] = array('campo' => 'CntbPeriodo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cntb_diario_asiento.cntb_tipo_asiento_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cntb_diario_asiento.cntb_tipo_asiento_id');
	$o = CntbTipoAsiento::getOxId($criterio->getValorDeCampo('cntb_diario_asiento.cntb_tipo_asiento_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('cntb_diario_asiento.cntb_tipo_asiento_id');

	$filtros['cntb_diario_asiento.cntb_tipo_asiento_id'] = array('campo' => 'CntbTipoAsiento', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cntb_diario_asiento.cntb_tipo_origen_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cntb_diario_asiento.cntb_tipo_origen_id');
	$o = CntbTipoOrigen::getOxId($criterio->getValorDeCampo('cntb_diario_asiento.cntb_tipo_origen_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('cntb_diario_asiento.cntb_tipo_origen_id');

	$filtros['cntb_diario_asiento.cntb_tipo_origen_id'] = array('campo' => 'CntbTipoOrigen', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cntb_diario_asiento.cntb_tipo_movimiento_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cntb_diario_asiento.cntb_tipo_movimiento_id');
	$o = CntbTipoMovimiento::getOxId($criterio->getValorDeCampo('cntb_diario_asiento.cntb_tipo_movimiento_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('cntb_diario_asiento.cntb_tipo_movimiento_id');

	$filtros['cntb_diario_asiento.cntb_tipo_movimiento_id'] = array('campo' => 'CntbTipoMovimiento', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cntb_diario_asiento.gral_actividad_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cntb_diario_asiento.gral_actividad_id');
	$o = GralActividad::getOxId($criterio->getValorDeCampo('cntb_diario_asiento.gral_actividad_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('cntb_diario_asiento.gral_actividad_id');

	$filtros['cntb_diario_asiento.gral_actividad_id'] = array('campo' => 'GralActividad', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cntb_diario_asiento.fecha') != ''){
	$valor = Gral::getFechaToWeb($valor = $criterio->getValorDeCampo('cntb_diario_asiento.fecha'));
	$comparador = $criterio->getComparadorDeCampo('cntb_diario_asiento.fecha');

	$filtros['cntb_diario_asiento.fecha'] = array('campo' => 'Fecha', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cntb_diario_asiento.numero') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cntb_diario_asiento.numero');
	$comparador = $criterio->getComparadorDeCampo('cntb_diario_asiento.numero');

	$filtros['cntb_diario_asiento.numero'] = array('campo' => 'Numero', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cntb_diario_asiento.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cntb_diario_asiento.codigo');
	$comparador = $criterio->getComparadorDeCampo('cntb_diario_asiento.codigo');

	$filtros['cntb_diario_asiento.codigo'] = array('campo' => 'Codigo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cntb_diario_asiento.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cntb_diario_asiento.observacion');
	$comparador = $criterio->getComparadorDeCampo('cntb_diario_asiento.observacion');

	$filtros['cntb_diario_asiento.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cntb_diario_asiento.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cntb_diario_asiento.orden');
	$comparador = $criterio->getComparadorDeCampo('cntb_diario_asiento.orden');

	$filtros['cntb_diario_asiento.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cntb_diario_asiento.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cntb_diario_asiento.estado');
	$comparador = $criterio->getComparadorDeCampo('cntb_diario_asiento.estado');

	$filtros['cntb_diario_asiento.estado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cntb_diario_asiento.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cntb_diario_asiento.creado');
	$comparador = $criterio->getComparadorDeCampo('cntb_diario_asiento.creado');

	$filtros['cntb_diario_asiento.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cntb_diario_asiento.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cntb_diario_asiento.creado_por');
	$comparador = $criterio->getComparadorDeCampo('cntb_diario_asiento.creado_por');

	$filtros['cntb_diario_asiento.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cntb_diario_asiento.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cntb_diario_asiento.modificado');
	$comparador = $criterio->getComparadorDeCampo('cntb_diario_asiento.modificado');

	$filtros['cntb_diario_asiento.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cntb_diario_asiento.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cntb_diario_asiento.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('cntb_diario_asiento.modificado_por');

	$filtros['cntb_diario_asiento.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

