<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['vta_orden_venta.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('vta_orden_venta.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_orden_venta.id');
	$comparador = $criterio->getComparadorDeCampo('vta_orden_venta.id');

	$filtros['vta_orden_venta.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_orden_venta.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_orden_venta.descripcion');
	$comparador = $criterio->getComparadorDeCampo('vta_orden_venta.descripcion');

	$filtros['vta_orden_venta.descripcion'] = array('campo' => 'Descripcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_orden_venta.vta_presupuesto_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_orden_venta.vta_presupuesto_id');
	$o = VtaPresupuesto::getOxId($criterio->getValorDeCampo('vta_orden_venta.vta_presupuesto_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('vta_orden_venta.vta_presupuesto_id');

	$filtros['vta_orden_venta.vta_presupuesto_id'] = array('campo' => 'VtaPresupuesto', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_orden_venta.vta_presupuesto_ins_insumo_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_orden_venta.vta_presupuesto_ins_insumo_id');
	$o = VtaPresupuestoInsInsumo::getOxId($criterio->getValorDeCampo('vta_orden_venta.vta_presupuesto_ins_insumo_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('vta_orden_venta.vta_presupuesto_ins_insumo_id');

	$filtros['vta_orden_venta.vta_presupuesto_ins_insumo_id'] = array('campo' => 'VtaPresupuestoInsInsumo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_orden_venta.ins_insumo_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_orden_venta.ins_insumo_id');
	$o = InsInsumo::getOxId($criterio->getValorDeCampo('vta_orden_venta.ins_insumo_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('vta_orden_venta.ins_insumo_id');

	$filtros['vta_orden_venta.ins_insumo_id'] = array('campo' => 'InsInsumo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_orden_venta.gral_tipo_iva_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_orden_venta.gral_tipo_iva_id');
	$o = GralTipoIva::getOxId($criterio->getValorDeCampo('vta_orden_venta.gral_tipo_iva_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('vta_orden_venta.gral_tipo_iva_id');

	$filtros['vta_orden_venta.gral_tipo_iva_id'] = array('campo' => 'GralTipoIva', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_orden_venta.ins_tipo_lista_precio_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_orden_venta.ins_tipo_lista_precio_id');
	$o = InsTipoListaPrecio::getOxId($criterio->getValorDeCampo('vta_orden_venta.ins_tipo_lista_precio_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('vta_orden_venta.ins_tipo_lista_precio_id');

	$filtros['vta_orden_venta.ins_tipo_lista_precio_id'] = array('campo' => 'InsTipoListaPrecio', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_orden_venta.vta_orden_venta_tipo_estado_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_orden_venta.vta_orden_venta_tipo_estado_id');
	$o = VtaOrdenVentaTipoEstado::getOxId($criterio->getValorDeCampo('vta_orden_venta.vta_orden_venta_tipo_estado_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('vta_orden_venta.vta_orden_venta_tipo_estado_id');

	$filtros['vta_orden_venta.vta_orden_venta_tipo_estado_id'] = array('campo' => 'VtaOrdenVentaTipoEstado', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_orden_venta.vta_orden_venta_tipo_estado_facturacion_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_orden_venta.vta_orden_venta_tipo_estado_facturacion_id');
	$o = VtaOrdenVentaTipoEstadoFacturacion::getOxId($criterio->getValorDeCampo('vta_orden_venta.vta_orden_venta_tipo_estado_facturacion_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('vta_orden_venta.vta_orden_venta_tipo_estado_facturacion_id');

	$filtros['vta_orden_venta.vta_orden_venta_tipo_estado_facturacion_id'] = array('campo' => 'VtaOrdenVentaTipoEstadoFacturacion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_orden_venta.vta_orden_venta_tipo_estado_remision_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_orden_venta.vta_orden_venta_tipo_estado_remision_id');
	$o = VtaOrdenVentaTipoEstadoRemision::getOxId($criterio->getValorDeCampo('vta_orden_venta.vta_orden_venta_tipo_estado_remision_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('vta_orden_venta.vta_orden_venta_tipo_estado_remision_id');

	$filtros['vta_orden_venta.vta_orden_venta_tipo_estado_remision_id'] = array('campo' => 'VtaOrdenVentaTipoEstadoRemision', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_orden_venta.importe_unitario') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_orden_venta.importe_unitario');
	$comparador = $criterio->getComparadorDeCampo('vta_orden_venta.importe_unitario');

	$filtros['vta_orden_venta.importe_unitario'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_orden_venta.cantidad') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_orden_venta.cantidad');
	$comparador = $criterio->getComparadorDeCampo('vta_orden_venta.cantidad');

	$filtros['vta_orden_venta.cantidad'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_orden_venta.descuento') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_orden_venta.descuento');
	$comparador = $criterio->getComparadorDeCampo('vta_orden_venta.descuento');

	$filtros['vta_orden_venta.descuento'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_orden_venta.ins_insumo_costo_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_orden_venta.ins_insumo_costo_id');
	$o = InsInsumoCosto::getOxId($criterio->getValorDeCampo('vta_orden_venta.ins_insumo_costo_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('vta_orden_venta.ins_insumo_costo_id');

	$filtros['vta_orden_venta.ins_insumo_costo_id'] = array('campo' => 'InsInsumoCosto', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_orden_venta.importe_costo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_orden_venta.importe_costo');
	$comparador = $criterio->getComparadorDeCampo('vta_orden_venta.importe_costo');

	$filtros['vta_orden_venta.importe_costo'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_orden_venta.vta_politica_descuento_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_orden_venta.vta_politica_descuento_id');
	$o = VtaPoliticaDescuento::getOxId($criterio->getValorDeCampo('vta_orden_venta.vta_politica_descuento_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('vta_orden_venta.vta_politica_descuento_id');

	$filtros['vta_orden_venta.vta_politica_descuento_id'] = array('campo' => 'VtaPoliticaDescuento', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_orden_venta.vta_politica_descuento_rango_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_orden_venta.vta_politica_descuento_rango_id');
	$o = VtaPoliticaDescuentoRango::getOxId($criterio->getValorDeCampo('vta_orden_venta.vta_politica_descuento_rango_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('vta_orden_venta.vta_politica_descuento_rango_id');

	$filtros['vta_orden_venta.vta_politica_descuento_rango_id'] = array('campo' => 'VtaPoliticaDescuentoRango', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_orden_venta.porcentaje_politica_descuento') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_orden_venta.porcentaje_politica_descuento');
	$comparador = $criterio->getComparadorDeCampo('vta_orden_venta.porcentaje_politica_descuento');

	$filtros['vta_orden_venta.porcentaje_politica_descuento'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_orden_venta.importe_politica_descuento') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_orden_venta.importe_politica_descuento');
	$comparador = $criterio->getComparadorDeCampo('vta_orden_venta.importe_politica_descuento');

	$filtros['vta_orden_venta.importe_politica_descuento'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_orden_venta.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_orden_venta.codigo');
	$comparador = $criterio->getComparadorDeCampo('vta_orden_venta.codigo');

	$filtros['vta_orden_venta.codigo'] = array('campo' => 'Codigo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_orden_venta.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_orden_venta.observacion');
	$comparador = $criterio->getComparadorDeCampo('vta_orden_venta.observacion');

	$filtros['vta_orden_venta.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_orden_venta.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_orden_venta.orden');
	$comparador = $criterio->getComparadorDeCampo('vta_orden_venta.orden');

	$filtros['vta_orden_venta.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_orden_venta.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_orden_venta.estado');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('vta_orden_venta.estado'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('vta_orden_venta.estado');

	$filtros['vta_orden_venta.estado'] = array('campo' => 'Estado', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_orden_venta.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_orden_venta.creado');
	$comparador = $criterio->getComparadorDeCampo('vta_orden_venta.creado');

	$filtros['vta_orden_venta.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_orden_venta.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_orden_venta.creado_por');
	$comparador = $criterio->getComparadorDeCampo('vta_orden_venta.creado_por');

	$filtros['vta_orden_venta.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_orden_venta.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_orden_venta.modificado');
	$comparador = $criterio->getComparadorDeCampo('vta_orden_venta.modificado');

	$filtros['vta_orden_venta.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_orden_venta.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_orden_venta.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('vta_orden_venta.modificado_por');

	$filtros['vta_orden_venta.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

