<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['pde_oc_agrupacion_item.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('pde_oc_agrupacion_item.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_oc_agrupacion_item.id');
	$comparador = $criterio->getComparadorDeCampo('pde_oc_agrupacion_item.id');

	$filtros['pde_oc_agrupacion_item.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_oc_agrupacion_item.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_oc_agrupacion_item.descripcion');
	$comparador = $criterio->getComparadorDeCampo('pde_oc_agrupacion_item.descripcion');

	$filtros['pde_oc_agrupacion_item.descripcion'] = array('campo' => 'Descripcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_oc_agrupacion_item.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_oc_agrupacion_item.codigo');
	$comparador = $criterio->getComparadorDeCampo('pde_oc_agrupacion_item.codigo');

	$filtros['pde_oc_agrupacion_item.codigo'] = array('campo' => 'Codigo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_oc_agrupacion_item.pde_oc_agrupacion_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_oc_agrupacion_item.pde_oc_agrupacion_id');
	$o = PdeOcAgrupacion::getOxId($criterio->getValorDeCampo('pde_oc_agrupacion_item.pde_oc_agrupacion_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('pde_oc_agrupacion_item.pde_oc_agrupacion_id');

	$filtros['pde_oc_agrupacion_item.pde_oc_agrupacion_id'] = array('campo' => 'PdeOcAgrupacion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_oc_agrupacion_item.ins_insumo_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_oc_agrupacion_item.ins_insumo_id');
	$o = InsInsumo::getOxId($criterio->getValorDeCampo('pde_oc_agrupacion_item.ins_insumo_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('pde_oc_agrupacion_item.ins_insumo_id');

	$filtros['pde_oc_agrupacion_item.ins_insumo_id'] = array('campo' => 'InsInsumo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_oc_agrupacion_item.cantidad') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_oc_agrupacion_item.cantidad');
	$comparador = $criterio->getComparadorDeCampo('pde_oc_agrupacion_item.cantidad');

	$filtros['pde_oc_agrupacion_item.cantidad'] = array('campo' => 'Cantidad', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_oc_agrupacion_item.importe_unidad') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_oc_agrupacion_item.importe_unidad');
	$comparador = $criterio->getComparadorDeCampo('pde_oc_agrupacion_item.importe_unidad');

	$filtros['pde_oc_agrupacion_item.importe_unidad'] = array('campo' => 'Importe Unidad', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_oc_agrupacion_item.prv_insumo_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_oc_agrupacion_item.prv_insumo_id');
	$comparador = $criterio->getComparadorDeCampo('pde_oc_agrupacion_item.prv_insumo_id');

	$filtros['pde_oc_agrupacion_item.prv_insumo_id'] = array('campo' => 'PrvInsumo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_oc_agrupacion_item.prv_insumo_costo_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_oc_agrupacion_item.prv_insumo_costo_id');
	$comparador = $criterio->getComparadorDeCampo('pde_oc_agrupacion_item.prv_insumo_costo_id');

	$filtros['pde_oc_agrupacion_item.prv_insumo_costo_id'] = array('campo' => 'PrvInsumoCosto', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_oc_agrupacion_item.importe_esperado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_oc_agrupacion_item.importe_esperado');
	$comparador = $criterio->getComparadorDeCampo('pde_oc_agrupacion_item.importe_esperado');

	$filtros['pde_oc_agrupacion_item.importe_esperado'] = array('campo' => 'Importe Esperado', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_oc_agrupacion_item.afecta_costo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_oc_agrupacion_item.afecta_costo');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('pde_oc_agrupacion_item.afecta_costo'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('pde_oc_agrupacion_item.afecta_costo');

	$filtros['pde_oc_agrupacion_item.afecta_costo'] = array('campo' => 'Afecta Costo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_oc_agrupacion_item.prv_descuento_financiero_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_oc_agrupacion_item.prv_descuento_financiero_id');
	$o = PrvDescuentoFinanciero::getOxId($criterio->getValorDeCampo('pde_oc_agrupacion_item.prv_descuento_financiero_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('pde_oc_agrupacion_item.prv_descuento_financiero_id');

	$filtros['pde_oc_agrupacion_item.prv_descuento_financiero_id'] = array('campo' => 'PrvDescuentoFinanciero', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_oc_agrupacion_item.prv_descuento_comercial_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_oc_agrupacion_item.prv_descuento_comercial_id');
	$o = PrvDescuentoComercial::getOxId($criterio->getValorDeCampo('pde_oc_agrupacion_item.prv_descuento_comercial_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('pde_oc_agrupacion_item.prv_descuento_comercial_id');

	$filtros['pde_oc_agrupacion_item.prv_descuento_comercial_id'] = array('campo' => 'PrvDescuentoComercial', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_oc_agrupacion_item.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_oc_agrupacion_item.observacion');
	$comparador = $criterio->getComparadorDeCampo('pde_oc_agrupacion_item.observacion');

	$filtros['pde_oc_agrupacion_item.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_oc_agrupacion_item.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_oc_agrupacion_item.orden');
	$comparador = $criterio->getComparadorDeCampo('pde_oc_agrupacion_item.orden');

	$filtros['pde_oc_agrupacion_item.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_oc_agrupacion_item.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_oc_agrupacion_item.estado');
	$comparador = $criterio->getComparadorDeCampo('pde_oc_agrupacion_item.estado');

	$filtros['pde_oc_agrupacion_item.estado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_oc_agrupacion_item.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_oc_agrupacion_item.creado');
	$comparador = $criterio->getComparadorDeCampo('pde_oc_agrupacion_item.creado');

	$filtros['pde_oc_agrupacion_item.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_oc_agrupacion_item.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_oc_agrupacion_item.creado_por');
	$comparador = $criterio->getComparadorDeCampo('pde_oc_agrupacion_item.creado_por');

	$filtros['pde_oc_agrupacion_item.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_oc_agrupacion_item.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_oc_agrupacion_item.modificado');
	$comparador = $criterio->getComparadorDeCampo('pde_oc_agrupacion_item.modificado');

	$filtros['pde_oc_agrupacion_item.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_oc_agrupacion_item.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_oc_agrupacion_item.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('pde_oc_agrupacion_item.modificado_por');

	$filtros['pde_oc_agrupacion_item.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

