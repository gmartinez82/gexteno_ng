<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['pde_factura_pde_recepcion.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('pde_factura_pde_recepcion.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_factura_pde_recepcion.id');
	$comparador = $criterio->getComparadorDeCampo('pde_factura_pde_recepcion.id');

	$filtros['pde_factura_pde_recepcion.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_factura_pde_recepcion.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_factura_pde_recepcion.descripcion');
	$comparador = $criterio->getComparadorDeCampo('pde_factura_pde_recepcion.descripcion');

	$filtros['pde_factura_pde_recepcion.descripcion'] = array('campo' => 'Descripcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_factura_pde_recepcion.pde_factura_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_factura_pde_recepcion.pde_factura_id');
	$o = PdeFactura::getOxId($criterio->getValorDeCampo('pde_factura_pde_recepcion.pde_factura_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('pde_factura_pde_recepcion.pde_factura_id');

	$filtros['pde_factura_pde_recepcion.pde_factura_id'] = array('campo' => 'PdeFactura', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_factura_pde_recepcion.pde_recepcion_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_factura_pde_recepcion.pde_recepcion_id');
	$o = PdeRecepcion::getOxId($criterio->getValorDeCampo('pde_factura_pde_recepcion.pde_recepcion_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('pde_factura_pde_recepcion.pde_recepcion_id');

	$filtros['pde_factura_pde_recepcion.pde_recepcion_id'] = array('campo' => 'PdeRecepcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_factura_pde_recepcion.ins_insumo_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_factura_pde_recepcion.ins_insumo_id');
	$o = InsInsumo::getOxId($criterio->getValorDeCampo('pde_factura_pde_recepcion.ins_insumo_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('pde_factura_pde_recepcion.ins_insumo_id');

	$filtros['pde_factura_pde_recepcion.ins_insumo_id'] = array('campo' => 'InsInsumo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_factura_pde_recepcion.ins_unidad_medida_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_factura_pde_recepcion.ins_unidad_medida_id');
	$o = InsUnidadMedida::getOxId($criterio->getValorDeCampo('pde_factura_pde_recepcion.ins_unidad_medida_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('pde_factura_pde_recepcion.ins_unidad_medida_id');

	$filtros['pde_factura_pde_recepcion.ins_unidad_medida_id'] = array('campo' => 'InsUnidadMedida', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_factura_pde_recepcion.gral_tipo_iva_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_factura_pde_recepcion.gral_tipo_iva_id');
	$o = GralTipoIva::getOxId($criterio->getValorDeCampo('pde_factura_pde_recepcion.gral_tipo_iva_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('pde_factura_pde_recepcion.gral_tipo_iva_id');

	$filtros['pde_factura_pde_recepcion.gral_tipo_iva_id'] = array('campo' => 'GralTipoIva', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_factura_pde_recepcion.importe_unitario') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_factura_pde_recepcion.importe_unitario');
	$comparador = $criterio->getComparadorDeCampo('pde_factura_pde_recepcion.importe_unitario');

	$filtros['pde_factura_pde_recepcion.importe_unitario'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_factura_pde_recepcion.cantidad') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_factura_pde_recepcion.cantidad');
	$comparador = $criterio->getComparadorDeCampo('pde_factura_pde_recepcion.cantidad');

	$filtros['pde_factura_pde_recepcion.cantidad'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_factura_pde_recepcion.ins_insumo_costo_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_factura_pde_recepcion.ins_insumo_costo_id');
	$o = InsInsumoCosto::getOxId($criterio->getValorDeCampo('pde_factura_pde_recepcion.ins_insumo_costo_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('pde_factura_pde_recepcion.ins_insumo_costo_id');

	$filtros['pde_factura_pde_recepcion.ins_insumo_costo_id'] = array('campo' => 'InsInsumoCosto', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_factura_pde_recepcion.importe_costo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_factura_pde_recepcion.importe_costo');
	$comparador = $criterio->getComparadorDeCampo('pde_factura_pde_recepcion.importe_costo');

	$filtros['pde_factura_pde_recepcion.importe_costo'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_factura_pde_recepcion.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_factura_pde_recepcion.codigo');
	$comparador = $criterio->getComparadorDeCampo('pde_factura_pde_recepcion.codigo');

	$filtros['pde_factura_pde_recepcion.codigo'] = array('campo' => 'Codigo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_factura_pde_recepcion.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_factura_pde_recepcion.observacion');
	$comparador = $criterio->getComparadorDeCampo('pde_factura_pde_recepcion.observacion');

	$filtros['pde_factura_pde_recepcion.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_factura_pde_recepcion.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_factura_pde_recepcion.orden');
	$comparador = $criterio->getComparadorDeCampo('pde_factura_pde_recepcion.orden');

	$filtros['pde_factura_pde_recepcion.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_factura_pde_recepcion.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_factura_pde_recepcion.estado');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('pde_factura_pde_recepcion.estado'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('pde_factura_pde_recepcion.estado');

	$filtros['pde_factura_pde_recepcion.estado'] = array('campo' => 'Estado', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_factura_pde_recepcion.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_factura_pde_recepcion.creado');
	$comparador = $criterio->getComparadorDeCampo('pde_factura_pde_recepcion.creado');

	$filtros['pde_factura_pde_recepcion.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_factura_pde_recepcion.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_factura_pde_recepcion.creado_por');
	$comparador = $criterio->getComparadorDeCampo('pde_factura_pde_recepcion.creado_por');

	$filtros['pde_factura_pde_recepcion.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_factura_pde_recepcion.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_factura_pde_recepcion.modificado');
	$comparador = $criterio->getComparadorDeCampo('pde_factura_pde_recepcion.modificado');

	$filtros['pde_factura_pde_recepcion.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_factura_pde_recepcion.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_factura_pde_recepcion.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('pde_factura_pde_recepcion.modificado_por');

	$filtros['pde_factura_pde_recepcion.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

