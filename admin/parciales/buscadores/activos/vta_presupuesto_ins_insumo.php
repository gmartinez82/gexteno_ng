<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['vta_presupuesto_ins_insumo.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('vta_presupuesto_ins_insumo.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_presupuesto_ins_insumo.id');
	$comparador = $criterio->getComparadorDeCampo('vta_presupuesto_ins_insumo.id');

	$filtros['vta_presupuesto_ins_insumo.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_presupuesto_ins_insumo.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_presupuesto_ins_insumo.descripcion');
	$comparador = $criterio->getComparadorDeCampo('vta_presupuesto_ins_insumo.descripcion');

	$filtros['vta_presupuesto_ins_insumo.descripcion'] = array('campo' => 'Descripcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_presupuesto_ins_insumo.vta_presupuesto_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_presupuesto_ins_insumo.vta_presupuesto_id');
	$o = VtaPresupuesto::getOxId($criterio->getValorDeCampo('vta_presupuesto_ins_insumo.vta_presupuesto_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('vta_presupuesto_ins_insumo.vta_presupuesto_id');

	$filtros['vta_presupuesto_ins_insumo.vta_presupuesto_id'] = array('campo' => 'VtaPresupuesto', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_presupuesto_ins_insumo.ins_insumo_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_presupuesto_ins_insumo.ins_insumo_id');
	$o = InsInsumo::getOxId($criterio->getValorDeCampo('vta_presupuesto_ins_insumo.ins_insumo_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('vta_presupuesto_ins_insumo.ins_insumo_id');

	$filtros['vta_presupuesto_ins_insumo.ins_insumo_id'] = array('campo' => 'InsInsumo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_presupuesto_ins_insumo.gral_tipo_iva_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_presupuesto_ins_insumo.gral_tipo_iva_id');
	$o = GralTipoIva::getOxId($criterio->getValorDeCampo('vta_presupuesto_ins_insumo.gral_tipo_iva_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('vta_presupuesto_ins_insumo.gral_tipo_iva_id');

	$filtros['vta_presupuesto_ins_insumo.gral_tipo_iva_id'] = array('campo' => 'GralTipoIva', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_presupuesto_ins_insumo.ins_lista_precio_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_presupuesto_ins_insumo.ins_lista_precio_id');
	$o = InsListaPrecio::getOxId($criterio->getValorDeCampo('vta_presupuesto_ins_insumo.ins_lista_precio_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('vta_presupuesto_ins_insumo.ins_lista_precio_id');

	$filtros['vta_presupuesto_ins_insumo.ins_lista_precio_id'] = array('campo' => 'InsListaPrecio', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_presupuesto_ins_insumo.importe_unitario') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_presupuesto_ins_insumo.importe_unitario');
	$comparador = $criterio->getComparadorDeCampo('vta_presupuesto_ins_insumo.importe_unitario');

	$filtros['vta_presupuesto_ins_insumo.importe_unitario'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_presupuesto_ins_insumo.cantidad') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_presupuesto_ins_insumo.cantidad');
	$comparador = $criterio->getComparadorDeCampo('vta_presupuesto_ins_insumo.cantidad');

	$filtros['vta_presupuesto_ins_insumo.cantidad'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_presupuesto_ins_insumo.descuento') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_presupuesto_ins_insumo.descuento');
	$comparador = $criterio->getComparadorDeCampo('vta_presupuesto_ins_insumo.descuento');

	$filtros['vta_presupuesto_ins_insumo.descuento'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_presupuesto_ins_insumo.conflicto') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_presupuesto_ins_insumo.conflicto');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('vta_presupuesto_ins_insumo.conflicto'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('vta_presupuesto_ins_insumo.conflicto');

	$filtros['vta_presupuesto_ins_insumo.conflicto'] = array('campo' => 'Conflicto', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_presupuesto_ins_insumo.ins_insumo_costo_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_presupuesto_ins_insumo.ins_insumo_costo_id');
	$o = InsInsumoCosto::getOxId($criterio->getValorDeCampo('vta_presupuesto_ins_insumo.ins_insumo_costo_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('vta_presupuesto_ins_insumo.ins_insumo_costo_id');

	$filtros['vta_presupuesto_ins_insumo.ins_insumo_costo_id'] = array('campo' => 'InsInsumoCosto', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_presupuesto_ins_insumo.importe_costo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_presupuesto_ins_insumo.importe_costo');
	$comparador = $criterio->getComparadorDeCampo('vta_presupuesto_ins_insumo.importe_costo');

	$filtros['vta_presupuesto_ins_insumo.importe_costo'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_presupuesto_ins_insumo.vta_politica_descuento_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_presupuesto_ins_insumo.vta_politica_descuento_id');
	$o = VtaPoliticaDescuento::getOxId($criterio->getValorDeCampo('vta_presupuesto_ins_insumo.vta_politica_descuento_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('vta_presupuesto_ins_insumo.vta_politica_descuento_id');

	$filtros['vta_presupuesto_ins_insumo.vta_politica_descuento_id'] = array('campo' => 'VtaPoliticaDescuento', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_presupuesto_ins_insumo.vta_politica_descuento_rango_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_presupuesto_ins_insumo.vta_politica_descuento_rango_id');
	$o = VtaPoliticaDescuentoRango::getOxId($criterio->getValorDeCampo('vta_presupuesto_ins_insumo.vta_politica_descuento_rango_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('vta_presupuesto_ins_insumo.vta_politica_descuento_rango_id');

	$filtros['vta_presupuesto_ins_insumo.vta_politica_descuento_rango_id'] = array('campo' => 'VtaPoliticaDescuentoRango', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_presupuesto_ins_insumo.porcentaje_politica_descuento') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_presupuesto_ins_insumo.porcentaje_politica_descuento');
	$comparador = $criterio->getComparadorDeCampo('vta_presupuesto_ins_insumo.porcentaje_politica_descuento');

	$filtros['vta_presupuesto_ins_insumo.porcentaje_politica_descuento'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_presupuesto_ins_insumo.importe_politica_descuento') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_presupuesto_ins_insumo.importe_politica_descuento');
	$comparador = $criterio->getComparadorDeCampo('vta_presupuesto_ins_insumo.importe_politica_descuento');

	$filtros['vta_presupuesto_ins_insumo.importe_politica_descuento'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_presupuesto_ins_insumo.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_presupuesto_ins_insumo.codigo');
	$comparador = $criterio->getComparadorDeCampo('vta_presupuesto_ins_insumo.codigo');

	$filtros['vta_presupuesto_ins_insumo.codigo'] = array('campo' => 'Codigo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_presupuesto_ins_insumo.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_presupuesto_ins_insumo.observacion');
	$comparador = $criterio->getComparadorDeCampo('vta_presupuesto_ins_insumo.observacion');

	$filtros['vta_presupuesto_ins_insumo.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_presupuesto_ins_insumo.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_presupuesto_ins_insumo.orden');
	$comparador = $criterio->getComparadorDeCampo('vta_presupuesto_ins_insumo.orden');

	$filtros['vta_presupuesto_ins_insumo.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_presupuesto_ins_insumo.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_presupuesto_ins_insumo.estado');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('vta_presupuesto_ins_insumo.estado'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('vta_presupuesto_ins_insumo.estado');

	$filtros['vta_presupuesto_ins_insumo.estado'] = array('campo' => 'Estado', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_presupuesto_ins_insumo.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_presupuesto_ins_insumo.creado');
	$comparador = $criterio->getComparadorDeCampo('vta_presupuesto_ins_insumo.creado');

	$filtros['vta_presupuesto_ins_insumo.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_presupuesto_ins_insumo.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_presupuesto_ins_insumo.creado_por');
	$comparador = $criterio->getComparadorDeCampo('vta_presupuesto_ins_insumo.creado_por');

	$filtros['vta_presupuesto_ins_insumo.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_presupuesto_ins_insumo.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_presupuesto_ins_insumo.modificado');
	$comparador = $criterio->getComparadorDeCampo('vta_presupuesto_ins_insumo.modificado');

	$filtros['vta_presupuesto_ins_insumo.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_presupuesto_ins_insumo.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_presupuesto_ins_insumo.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('vta_presupuesto_ins_insumo.modificado_por');

	$filtros['vta_presupuesto_ins_insumo.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

