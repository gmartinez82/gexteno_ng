<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['vta_presupuesto_cancelacion.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('vta_presupuesto_cancelacion.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_presupuesto_cancelacion.id');
	$comparador = $criterio->getComparadorDeCampo('vta_presupuesto_cancelacion.id');

	$filtros['vta_presupuesto_cancelacion.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_presupuesto_cancelacion.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_presupuesto_cancelacion.descripcion');
	$comparador = $criterio->getComparadorDeCampo('vta_presupuesto_cancelacion.descripcion');

	$filtros['vta_presupuesto_cancelacion.descripcion'] = array('campo' => 'Descripcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_presupuesto_cancelacion.vta_presupuesto_ins_insumo_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_presupuesto_cancelacion.vta_presupuesto_ins_insumo_id');
	$o = VtaPresupuestoInsInsumo::getOxId($criterio->getValorDeCampo('vta_presupuesto_cancelacion.vta_presupuesto_ins_insumo_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('vta_presupuesto_cancelacion.vta_presupuesto_ins_insumo_id');

	$filtros['vta_presupuesto_cancelacion.vta_presupuesto_ins_insumo_id'] = array('campo' => 'VtaPresupuestoInsInsumo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_presupuesto_cancelacion.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_presupuesto_cancelacion.codigo');
	$comparador = $criterio->getComparadorDeCampo('vta_presupuesto_cancelacion.codigo');

	$filtros['vta_presupuesto_cancelacion.codigo'] = array('campo' => 'Codigo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_presupuesto_cancelacion.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_presupuesto_cancelacion.observacion');
	$comparador = $criterio->getComparadorDeCampo('vta_presupuesto_cancelacion.observacion');

	$filtros['vta_presupuesto_cancelacion.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_presupuesto_cancelacion.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_presupuesto_cancelacion.orden');
	$comparador = $criterio->getComparadorDeCampo('vta_presupuesto_cancelacion.orden');

	$filtros['vta_presupuesto_cancelacion.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_presupuesto_cancelacion.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_presupuesto_cancelacion.estado');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('vta_presupuesto_cancelacion.estado'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('vta_presupuesto_cancelacion.estado');

	$filtros['vta_presupuesto_cancelacion.estado'] = array('campo' => 'Estado', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_presupuesto_cancelacion.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_presupuesto_cancelacion.creado');
	$comparador = $criterio->getComparadorDeCampo('vta_presupuesto_cancelacion.creado');

	$filtros['vta_presupuesto_cancelacion.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_presupuesto_cancelacion.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_presupuesto_cancelacion.creado_por');
	$comparador = $criterio->getComparadorDeCampo('vta_presupuesto_cancelacion.creado_por');

	$filtros['vta_presupuesto_cancelacion.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_presupuesto_cancelacion.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_presupuesto_cancelacion.modificado');
	$comparador = $criterio->getComparadorDeCampo('vta_presupuesto_cancelacion.modificado');

	$filtros['vta_presupuesto_cancelacion.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_presupuesto_cancelacion.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_presupuesto_cancelacion.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('vta_presupuesto_cancelacion.modificado_por');

	$filtros['vta_presupuesto_cancelacion.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

