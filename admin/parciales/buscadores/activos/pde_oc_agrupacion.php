<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['pde_oc_agrupacion.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('pde_oc_agrupacion.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_oc_agrupacion.id');
	$comparador = $criterio->getComparadorDeCampo('pde_oc_agrupacion.id');

	$filtros['pde_oc_agrupacion.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_oc_agrupacion.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_oc_agrupacion.descripcion');
	$comparador = $criterio->getComparadorDeCampo('pde_oc_agrupacion.descripcion');

	$filtros['pde_oc_agrupacion.descripcion'] = array('campo' => 'Descripcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_oc_agrupacion.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_oc_agrupacion.codigo');
	$comparador = $criterio->getComparadorDeCampo('pde_oc_agrupacion.codigo');

	$filtros['pde_oc_agrupacion.codigo'] = array('campo' => 'Codigo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_oc_agrupacion.pde_oc_tipo_origen_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_oc_agrupacion.pde_oc_tipo_origen_id');
	$o = PdeOcTipoOrigen::getOxId($criterio->getValorDeCampo('pde_oc_agrupacion.pde_oc_tipo_origen_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('pde_oc_agrupacion.pde_oc_tipo_origen_id');

	$filtros['pde_oc_agrupacion.pde_oc_tipo_origen_id'] = array('campo' => 'PdeOcTipoOrigen', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_oc_agrupacion.prv_proveedor_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_oc_agrupacion.prv_proveedor_id');
	$o = PrvProveedor::getOxId($criterio->getValorDeCampo('pde_oc_agrupacion.prv_proveedor_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('pde_oc_agrupacion.prv_proveedor_id');

	$filtros['pde_oc_agrupacion.prv_proveedor_id'] = array('campo' => 'PrvProveedor', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_oc_agrupacion.pde_centro_pedido_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_oc_agrupacion.pde_centro_pedido_id');
	$o = PdeCentroPedido::getOxId($criterio->getValorDeCampo('pde_oc_agrupacion.pde_centro_pedido_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('pde_oc_agrupacion.pde_centro_pedido_id');

	$filtros['pde_oc_agrupacion.pde_centro_pedido_id'] = array('campo' => 'PdeCentroPedido', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_oc_agrupacion.pde_centro_recepcion_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_oc_agrupacion.pde_centro_recepcion_id');
	$o = PdeCentroRecepcion::getOxId($criterio->getValorDeCampo('pde_oc_agrupacion.pde_centro_recepcion_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('pde_oc_agrupacion.pde_centro_recepcion_id');

	$filtros['pde_oc_agrupacion.pde_centro_recepcion_id'] = array('campo' => 'PdeCentroRecepcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_oc_agrupacion.pde_oc_agrupacion_tipo_estado_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_oc_agrupacion.pde_oc_agrupacion_tipo_estado_id');
	$o = PdeOcAgrupacionTipoEstado::getOxId($criterio->getValorDeCampo('pde_oc_agrupacion.pde_oc_agrupacion_tipo_estado_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('pde_oc_agrupacion.pde_oc_agrupacion_tipo_estado_id');

	$filtros['pde_oc_agrupacion.pde_oc_agrupacion_tipo_estado_id'] = array('campo' => 'PdeOcAgrupacionTipoEstado', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_oc_agrupacion.prv_descuento_financiero_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_oc_agrupacion.prv_descuento_financiero_id');
	$o = PrvDescuentoFinanciero::getOxId($criterio->getValorDeCampo('pde_oc_agrupacion.prv_descuento_financiero_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('pde_oc_agrupacion.prv_descuento_financiero_id');

	$filtros['pde_oc_agrupacion.prv_descuento_financiero_id'] = array('campo' => 'PrvDescuentoFinanciero', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_oc_agrupacion.fecha_entrega') != ''){
	$valor = Gral::getFechaToWeb($valor = $criterio->getValorDeCampo('pde_oc_agrupacion.fecha_entrega'));
	$comparador = $criterio->getComparadorDeCampo('pde_oc_agrupacion.fecha_entrega');

	$filtros['pde_oc_agrupacion.fecha_entrega'] = array('campo' => 'Fecha Entrega', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_oc_agrupacion.vencimiento') != ''){
	$valor = Gral::getFechaToWeb($valor = $criterio->getValorDeCampo('pde_oc_agrupacion.vencimiento'));
	$comparador = $criterio->getComparadorDeCampo('pde_oc_agrupacion.vencimiento');

	$filtros['pde_oc_agrupacion.vencimiento'] = array('campo' => 'Vencimiento', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_oc_agrupacion.nota_publica') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_oc_agrupacion.nota_publica');
	$comparador = $criterio->getComparadorDeCampo('pde_oc_agrupacion.nota_publica');

	$filtros['pde_oc_agrupacion.nota_publica'] = array('campo' => 'Nota Publica', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_oc_agrupacion.nota_interna') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_oc_agrupacion.nota_interna');
	$comparador = $criterio->getComparadorDeCampo('pde_oc_agrupacion.nota_interna');

	$filtros['pde_oc_agrupacion.nota_interna'] = array('campo' => 'Nota Interna', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_oc_agrupacion.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_oc_agrupacion.observacion');
	$comparador = $criterio->getComparadorDeCampo('pde_oc_agrupacion.observacion');

	$filtros['pde_oc_agrupacion.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_oc_agrupacion.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_oc_agrupacion.orden');
	$comparador = $criterio->getComparadorDeCampo('pde_oc_agrupacion.orden');

	$filtros['pde_oc_agrupacion.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_oc_agrupacion.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_oc_agrupacion.estado');
	$comparador = $criterio->getComparadorDeCampo('pde_oc_agrupacion.estado');

	$filtros['pde_oc_agrupacion.estado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_oc_agrupacion.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_oc_agrupacion.creado');
	$comparador = $criterio->getComparadorDeCampo('pde_oc_agrupacion.creado');

	$filtros['pde_oc_agrupacion.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_oc_agrupacion.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_oc_agrupacion.creado_por');
	$comparador = $criterio->getComparadorDeCampo('pde_oc_agrupacion.creado_por');

	$filtros['pde_oc_agrupacion.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_oc_agrupacion.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_oc_agrupacion.modificado');
	$comparador = $criterio->getComparadorDeCampo('pde_oc_agrupacion.modificado');

	$filtros['pde_oc_agrupacion.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_oc_agrupacion.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_oc_agrupacion.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('pde_oc_agrupacion.modificado_por');

	$filtros['pde_oc_agrupacion.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

