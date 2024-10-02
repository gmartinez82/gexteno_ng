<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['vta_nota_credito_vta_factura_vta_orden_venta.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('vta_nota_credito_vta_factura_vta_orden_venta.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_nota_credito_vta_factura_vta_orden_venta.id');
	$comparador = $criterio->getComparadorDeCampo('vta_nota_credito_vta_factura_vta_orden_venta.id');

	$filtros['vta_nota_credito_vta_factura_vta_orden_venta.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_nota_credito_vta_factura_vta_orden_venta.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_nota_credito_vta_factura_vta_orden_venta.descripcion');
	$comparador = $criterio->getComparadorDeCampo('vta_nota_credito_vta_factura_vta_orden_venta.descripcion');

	$filtros['vta_nota_credito_vta_factura_vta_orden_venta.descripcion'] = array('campo' => 'Descripcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_nota_credito_vta_factura_vta_orden_venta.vta_nota_credito_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_nota_credito_vta_factura_vta_orden_venta.vta_nota_credito_id');
	$o = VtaNotaCredito::getOxId($criterio->getValorDeCampo('vta_nota_credito_vta_factura_vta_orden_venta.vta_nota_credito_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('vta_nota_credito_vta_factura_vta_orden_venta.vta_nota_credito_id');

	$filtros['vta_nota_credito_vta_factura_vta_orden_venta.vta_nota_credito_id'] = array('campo' => 'VtaNotaCredito', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_nota_credito_vta_factura_vta_orden_venta.vta_factura_vta_orden_venta_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_nota_credito_vta_factura_vta_orden_venta.vta_factura_vta_orden_venta_id');
	$o = VtaFacturaVtaOrdenVenta::getOxId($criterio->getValorDeCampo('vta_nota_credito_vta_factura_vta_orden_venta.vta_factura_vta_orden_venta_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('vta_nota_credito_vta_factura_vta_orden_venta.vta_factura_vta_orden_venta_id');

	$filtros['vta_nota_credito_vta_factura_vta_orden_venta.vta_factura_vta_orden_venta_id'] = array('campo' => 'VtaFacturaVtaOrdenVenta', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_nota_credito_vta_factura_vta_orden_venta.ins_insumo_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_nota_credito_vta_factura_vta_orden_venta.ins_insumo_id');
	$o = InsInsumo::getOxId($criterio->getValorDeCampo('vta_nota_credito_vta_factura_vta_orden_venta.ins_insumo_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('vta_nota_credito_vta_factura_vta_orden_venta.ins_insumo_id');

	$filtros['vta_nota_credito_vta_factura_vta_orden_venta.ins_insumo_id'] = array('campo' => 'InsInsumo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_nota_credito_vta_factura_vta_orden_venta.ins_unidad_medida_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_nota_credito_vta_factura_vta_orden_venta.ins_unidad_medida_id');
	$o = InsUnidadMedida::getOxId($criterio->getValorDeCampo('vta_nota_credito_vta_factura_vta_orden_venta.ins_unidad_medida_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('vta_nota_credito_vta_factura_vta_orden_venta.ins_unidad_medida_id');

	$filtros['vta_nota_credito_vta_factura_vta_orden_venta.ins_unidad_medida_id'] = array('campo' => 'InsUnidadMedida', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_nota_credito_vta_factura_vta_orden_venta.gral_tipo_iva_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_nota_credito_vta_factura_vta_orden_venta.gral_tipo_iva_id');
	$o = GralTipoIva::getOxId($criterio->getValorDeCampo('vta_nota_credito_vta_factura_vta_orden_venta.gral_tipo_iva_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('vta_nota_credito_vta_factura_vta_orden_venta.gral_tipo_iva_id');

	$filtros['vta_nota_credito_vta_factura_vta_orden_venta.gral_tipo_iva_id'] = array('campo' => 'GralTipoIva', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_nota_credito_vta_factura_vta_orden_venta.importe_unitario') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_nota_credito_vta_factura_vta_orden_venta.importe_unitario');
	$comparador = $criterio->getComparadorDeCampo('vta_nota_credito_vta_factura_vta_orden_venta.importe_unitario');

	$filtros['vta_nota_credito_vta_factura_vta_orden_venta.importe_unitario'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_nota_credito_vta_factura_vta_orden_venta.cantidad') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_nota_credito_vta_factura_vta_orden_venta.cantidad');
	$comparador = $criterio->getComparadorDeCampo('vta_nota_credito_vta_factura_vta_orden_venta.cantidad');

	$filtros['vta_nota_credito_vta_factura_vta_orden_venta.cantidad'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_nota_credito_vta_factura_vta_orden_venta.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_nota_credito_vta_factura_vta_orden_venta.codigo');
	$comparador = $criterio->getComparadorDeCampo('vta_nota_credito_vta_factura_vta_orden_venta.codigo');

	$filtros['vta_nota_credito_vta_factura_vta_orden_venta.codigo'] = array('campo' => 'Codigo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_nota_credito_vta_factura_vta_orden_venta.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_nota_credito_vta_factura_vta_orden_venta.observacion');
	$comparador = $criterio->getComparadorDeCampo('vta_nota_credito_vta_factura_vta_orden_venta.observacion');

	$filtros['vta_nota_credito_vta_factura_vta_orden_venta.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_nota_credito_vta_factura_vta_orden_venta.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_nota_credito_vta_factura_vta_orden_venta.orden');
	$comparador = $criterio->getComparadorDeCampo('vta_nota_credito_vta_factura_vta_orden_venta.orden');

	$filtros['vta_nota_credito_vta_factura_vta_orden_venta.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_nota_credito_vta_factura_vta_orden_venta.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_nota_credito_vta_factura_vta_orden_venta.estado');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('vta_nota_credito_vta_factura_vta_orden_venta.estado'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('vta_nota_credito_vta_factura_vta_orden_venta.estado');

	$filtros['vta_nota_credito_vta_factura_vta_orden_venta.estado'] = array('campo' => 'Estado', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_nota_credito_vta_factura_vta_orden_venta.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_nota_credito_vta_factura_vta_orden_venta.creado');
	$comparador = $criterio->getComparadorDeCampo('vta_nota_credito_vta_factura_vta_orden_venta.creado');

	$filtros['vta_nota_credito_vta_factura_vta_orden_venta.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_nota_credito_vta_factura_vta_orden_venta.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_nota_credito_vta_factura_vta_orden_venta.creado_por');
	$comparador = $criterio->getComparadorDeCampo('vta_nota_credito_vta_factura_vta_orden_venta.creado_por');

	$filtros['vta_nota_credito_vta_factura_vta_orden_venta.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_nota_credito_vta_factura_vta_orden_venta.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_nota_credito_vta_factura_vta_orden_venta.modificado');
	$comparador = $criterio->getComparadorDeCampo('vta_nota_credito_vta_factura_vta_orden_venta.modificado');

	$filtros['vta_nota_credito_vta_factura_vta_orden_venta.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_nota_credito_vta_factura_vta_orden_venta.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_nota_credito_vta_factura_vta_orden_venta.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('vta_nota_credito_vta_factura_vta_orden_venta.modificado_por');

	$filtros['vta_nota_credito_vta_factura_vta_orden_venta.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

