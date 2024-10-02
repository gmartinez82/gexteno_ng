<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['vta_presupuesto_veh_coche.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('vta_presupuesto_veh_coche.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_presupuesto_veh_coche.id');
	$comparador = $criterio->getComparadorDeCampo('vta_presupuesto_veh_coche.id');

	$filtros['vta_presupuesto_veh_coche.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_presupuesto_veh_coche.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_presupuesto_veh_coche.descripcion');
	$comparador = $criterio->getComparadorDeCampo('vta_presupuesto_veh_coche.descripcion');

	$filtros['vta_presupuesto_veh_coche.descripcion'] = array('campo' => 'Descripcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_presupuesto_veh_coche.vta_presupuesto_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_presupuesto_veh_coche.vta_presupuesto_id');
	$o = VtaPresupuesto::getOxId($criterio->getValorDeCampo('vta_presupuesto_veh_coche.vta_presupuesto_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('vta_presupuesto_veh_coche.vta_presupuesto_id');

	$filtros['vta_presupuesto_veh_coche.vta_presupuesto_id'] = array('campo' => 'VtaPresupuesto', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_presupuesto_veh_coche.veh_coche_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_presupuesto_veh_coche.veh_coche_id');
	$o = VehCoche::getOxId($criterio->getValorDeCampo('vta_presupuesto_veh_coche.veh_coche_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('vta_presupuesto_veh_coche.veh_coche_id');

	$filtros['vta_presupuesto_veh_coche.veh_coche_id'] = array('campo' => 'VehCoche', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_presupuesto_veh_coche.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_presupuesto_veh_coche.codigo');
	$comparador = $criterio->getComparadorDeCampo('vta_presupuesto_veh_coche.codigo');

	$filtros['vta_presupuesto_veh_coche.codigo'] = array('campo' => 'Codigo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_presupuesto_veh_coche.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_presupuesto_veh_coche.observacion');
	$comparador = $criterio->getComparadorDeCampo('vta_presupuesto_veh_coche.observacion');

	$filtros['vta_presupuesto_veh_coche.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_presupuesto_veh_coche.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_presupuesto_veh_coche.orden');
	$comparador = $criterio->getComparadorDeCampo('vta_presupuesto_veh_coche.orden');

	$filtros['vta_presupuesto_veh_coche.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_presupuesto_veh_coche.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_presupuesto_veh_coche.estado');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('vta_presupuesto_veh_coche.estado'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('vta_presupuesto_veh_coche.estado');

	$filtros['vta_presupuesto_veh_coche.estado'] = array('campo' => 'Estado', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_presupuesto_veh_coche.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_presupuesto_veh_coche.creado');
	$comparador = $criterio->getComparadorDeCampo('vta_presupuesto_veh_coche.creado');

	$filtros['vta_presupuesto_veh_coche.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_presupuesto_veh_coche.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_presupuesto_veh_coche.creado_por');
	$comparador = $criterio->getComparadorDeCampo('vta_presupuesto_veh_coche.creado_por');

	$filtros['vta_presupuesto_veh_coche.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_presupuesto_veh_coche.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_presupuesto_veh_coche.modificado');
	$comparador = $criterio->getComparadorDeCampo('vta_presupuesto_veh_coche.modificado');

	$filtros['vta_presupuesto_veh_coche.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_presupuesto_veh_coche.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_presupuesto_veh_coche.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('vta_presupuesto_veh_coche.modificado_por');

	$filtros['vta_presupuesto_veh_coche.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

