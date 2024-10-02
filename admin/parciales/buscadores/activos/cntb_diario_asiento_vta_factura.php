<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['cntb_diario_asiento_vta_factura.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('cntb_diario_asiento_vta_factura.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cntb_diario_asiento_vta_factura.id');
	$comparador = $criterio->getComparadorDeCampo('cntb_diario_asiento_vta_factura.id');

	$filtros['cntb_diario_asiento_vta_factura.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cntb_diario_asiento_vta_factura.cntb_periodo_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cntb_diario_asiento_vta_factura.cntb_periodo_id');
	$o = CntbPeriodo::getOxId($criterio->getValorDeCampo('cntb_diario_asiento_vta_factura.cntb_periodo_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('cntb_diario_asiento_vta_factura.cntb_periodo_id');

	$filtros['cntb_diario_asiento_vta_factura.cntb_periodo_id'] = array('campo' => 'CntbPeriodo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cntb_diario_asiento_vta_factura.cntb_diario_asiento_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cntb_diario_asiento_vta_factura.cntb_diario_asiento_id');
	$o = CntbDiarioAsiento::getOxId($criterio->getValorDeCampo('cntb_diario_asiento_vta_factura.cntb_diario_asiento_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('cntb_diario_asiento_vta_factura.cntb_diario_asiento_id');

	$filtros['cntb_diario_asiento_vta_factura.cntb_diario_asiento_id'] = array('campo' => 'CntbDiarioAsiento', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cntb_diario_asiento_vta_factura.vta_factura_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cntb_diario_asiento_vta_factura.vta_factura_id');
	$o = VtaFactura::getOxId($criterio->getValorDeCampo('cntb_diario_asiento_vta_factura.vta_factura_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('cntb_diario_asiento_vta_factura.vta_factura_id');

	$filtros['cntb_diario_asiento_vta_factura.vta_factura_id'] = array('campo' => 'VtaFactura', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cntb_diario_asiento_vta_factura.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cntb_diario_asiento_vta_factura.estado');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('cntb_diario_asiento_vta_factura.estado'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('cntb_diario_asiento_vta_factura.estado');

	$filtros['cntb_diario_asiento_vta_factura.estado'] = array('campo' => 'Estado', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cntb_diario_asiento_vta_factura.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cntb_diario_asiento_vta_factura.creado');
	$comparador = $criterio->getComparadorDeCampo('cntb_diario_asiento_vta_factura.creado');

	$filtros['cntb_diario_asiento_vta_factura.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cntb_diario_asiento_vta_factura.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cntb_diario_asiento_vta_factura.creado_por');
	$comparador = $criterio->getComparadorDeCampo('cntb_diario_asiento_vta_factura.creado_por');

	$filtros['cntb_diario_asiento_vta_factura.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cntb_diario_asiento_vta_factura.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cntb_diario_asiento_vta_factura.modificado');
	$comparador = $criterio->getComparadorDeCampo('cntb_diario_asiento_vta_factura.modificado');

	$filtros['cntb_diario_asiento_vta_factura.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cntb_diario_asiento_vta_factura.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cntb_diario_asiento_vta_factura.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('cntb_diario_asiento_vta_factura.modificado_por');

	$filtros['cntb_diario_asiento_vta_factura.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

