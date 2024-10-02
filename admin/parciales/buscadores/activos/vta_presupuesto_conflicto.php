<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['vta_presupuesto_conflicto.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('vta_presupuesto_conflicto.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_presupuesto_conflicto.id');
	$comparador = $criterio->getComparadorDeCampo('vta_presupuesto_conflicto.id');

	$filtros['vta_presupuesto_conflicto.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_presupuesto_conflicto.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_presupuesto_conflicto.descripcion');
	$comparador = $criterio->getComparadorDeCampo('vta_presupuesto_conflicto.descripcion');

	$filtros['vta_presupuesto_conflicto.descripcion'] = array('campo' => 'Descripcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_presupuesto_conflicto.vta_presupuesto_ins_insumo_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_presupuesto_conflicto.vta_presupuesto_ins_insumo_id');
	$o = VtaPresupuestoInsInsumo::getOxId($criterio->getValorDeCampo('vta_presupuesto_conflicto.vta_presupuesto_ins_insumo_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('vta_presupuesto_conflicto.vta_presupuesto_ins_insumo_id');

	$filtros['vta_presupuesto_conflicto.vta_presupuesto_ins_insumo_id'] = array('campo' => 'VtaPresupuestoInsInsumo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_presupuesto_conflicto.importe_inicial') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_presupuesto_conflicto.importe_inicial');
	$comparador = $criterio->getComparadorDeCampo('vta_presupuesto_conflicto.importe_inicial');

	$filtros['vta_presupuesto_conflicto.importe_inicial'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_presupuesto_conflicto.importe_actualizado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_presupuesto_conflicto.importe_actualizado');
	$comparador = $criterio->getComparadorDeCampo('vta_presupuesto_conflicto.importe_actualizado');

	$filtros['vta_presupuesto_conflicto.importe_actualizado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_presupuesto_conflicto.importe_diferencia') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_presupuesto_conflicto.importe_diferencia');
	$comparador = $criterio->getComparadorDeCampo('vta_presupuesto_conflicto.importe_diferencia');

	$filtros['vta_presupuesto_conflicto.importe_diferencia'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_presupuesto_conflicto.importe_resuelto') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_presupuesto_conflicto.importe_resuelto');
	$comparador = $criterio->getComparadorDeCampo('vta_presupuesto_conflicto.importe_resuelto');

	$filtros['vta_presupuesto_conflicto.importe_resuelto'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_presupuesto_conflicto.fecha_conflicto') != ''){
	$valor = Gral::getFechaToWeb($valor = $criterio->getValorDeCampo('vta_presupuesto_conflicto.fecha_conflicto'));
	$comparador = $criterio->getComparadorDeCampo('vta_presupuesto_conflicto.fecha_conflicto');

	$filtros['vta_presupuesto_conflicto.fecha_conflicto'] = array('campo' => 'Fecha de Conflicto', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_presupuesto_conflicto.fecha_resolucion') != ''){
	$valor = Gral::getFechaToWeb($valor = $criterio->getValorDeCampo('vta_presupuesto_conflicto.fecha_resolucion'));
	$comparador = $criterio->getComparadorDeCampo('vta_presupuesto_conflicto.fecha_resolucion');

	$filtros['vta_presupuesto_conflicto.fecha_resolucion'] = array('campo' => 'Fecha de Resolucion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_presupuesto_conflicto.us_usuario_resolucion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_presupuesto_conflicto.us_usuario_resolucion');
	$o = UsUsuario::getOxId($criterio->getValorDeCampo('vta_presupuesto_conflicto.us_usuario_resolucion'));
	$valor = $o->getDescripcion();
	
	$comparador = $criterio->getComparadorDeCampo('vta_presupuesto_conflicto.us_usuario_resolucion');

	$filtros['vta_presupuesto_conflicto.us_usuario_resolucion'] = array('campo' => 'UsUsuario Resolucion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_presupuesto_conflicto.resuelto') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_presupuesto_conflicto.resuelto');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('vta_presupuesto_conflicto.resuelto'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('vta_presupuesto_conflicto.resuelto');

	$filtros['vta_presupuesto_conflicto.resuelto'] = array('campo' => 'Resuelto', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_presupuesto_conflicto.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_presupuesto_conflicto.codigo');
	$comparador = $criterio->getComparadorDeCampo('vta_presupuesto_conflicto.codigo');

	$filtros['vta_presupuesto_conflicto.codigo'] = array('campo' => 'Codigo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_presupuesto_conflicto.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_presupuesto_conflicto.observacion');
	$comparador = $criterio->getComparadorDeCampo('vta_presupuesto_conflicto.observacion');

	$filtros['vta_presupuesto_conflicto.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_presupuesto_conflicto.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_presupuesto_conflicto.orden');
	$comparador = $criterio->getComparadorDeCampo('vta_presupuesto_conflicto.orden');

	$filtros['vta_presupuesto_conflicto.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_presupuesto_conflicto.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_presupuesto_conflicto.estado');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('vta_presupuesto_conflicto.estado'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('vta_presupuesto_conflicto.estado');

	$filtros['vta_presupuesto_conflicto.estado'] = array('campo' => 'Estado', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_presupuesto_conflicto.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_presupuesto_conflicto.creado');
	$comparador = $criterio->getComparadorDeCampo('vta_presupuesto_conflicto.creado');

	$filtros['vta_presupuesto_conflicto.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_presupuesto_conflicto.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_presupuesto_conflicto.creado_por');
	$comparador = $criterio->getComparadorDeCampo('vta_presupuesto_conflicto.creado_por');

	$filtros['vta_presupuesto_conflicto.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_presupuesto_conflicto.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_presupuesto_conflicto.modificado');
	$comparador = $criterio->getComparadorDeCampo('vta_presupuesto_conflicto.modificado');

	$filtros['vta_presupuesto_conflicto.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_presupuesto_conflicto.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_presupuesto_conflicto.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('vta_presupuesto_conflicto.modificado_por');

	$filtros['vta_presupuesto_conflicto.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

