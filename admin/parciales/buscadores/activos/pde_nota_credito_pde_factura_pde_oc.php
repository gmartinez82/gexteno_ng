<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['pde_nota_credito_pde_factura_pde_oc.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('pde_nota_credito_pde_factura_pde_oc.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_nota_credito_pde_factura_pde_oc.id');
	$comparador = $criterio->getComparadorDeCampo('pde_nota_credito_pde_factura_pde_oc.id');

	$filtros['pde_nota_credito_pde_factura_pde_oc.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_nota_credito_pde_factura_pde_oc.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_nota_credito_pde_factura_pde_oc.descripcion');
	$comparador = $criterio->getComparadorDeCampo('pde_nota_credito_pde_factura_pde_oc.descripcion');

	$filtros['pde_nota_credito_pde_factura_pde_oc.descripcion'] = array('campo' => 'Descripcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_nota_credito_pde_factura_pde_oc.pde_nota_credito_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_nota_credito_pde_factura_pde_oc.pde_nota_credito_id');
	$o = PdeNotaCredito::getOxId($criterio->getValorDeCampo('pde_nota_credito_pde_factura_pde_oc.pde_nota_credito_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('pde_nota_credito_pde_factura_pde_oc.pde_nota_credito_id');

	$filtros['pde_nota_credito_pde_factura_pde_oc.pde_nota_credito_id'] = array('campo' => 'PdeNotaCredito', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_nota_credito_pde_factura_pde_oc.pde_factura_pde_oc_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_nota_credito_pde_factura_pde_oc.pde_factura_pde_oc_id');
	$o = PdeFacturaPdeOc::getOxId($criterio->getValorDeCampo('pde_nota_credito_pde_factura_pde_oc.pde_factura_pde_oc_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('pde_nota_credito_pde_factura_pde_oc.pde_factura_pde_oc_id');

	$filtros['pde_nota_credito_pde_factura_pde_oc.pde_factura_pde_oc_id'] = array('campo' => 'PdeFacturaPdeOc', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_nota_credito_pde_factura_pde_oc.ins_insumo_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_nota_credito_pde_factura_pde_oc.ins_insumo_id');
	$o = InsInsumo::getOxId($criterio->getValorDeCampo('pde_nota_credito_pde_factura_pde_oc.ins_insumo_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('pde_nota_credito_pde_factura_pde_oc.ins_insumo_id');

	$filtros['pde_nota_credito_pde_factura_pde_oc.ins_insumo_id'] = array('campo' => 'InsInsumo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_nota_credito_pde_factura_pde_oc.ins_unidad_medida_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_nota_credito_pde_factura_pde_oc.ins_unidad_medida_id');
	$o = InsUnidadMedida::getOxId($criterio->getValorDeCampo('pde_nota_credito_pde_factura_pde_oc.ins_unidad_medida_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('pde_nota_credito_pde_factura_pde_oc.ins_unidad_medida_id');

	$filtros['pde_nota_credito_pde_factura_pde_oc.ins_unidad_medida_id'] = array('campo' => 'InsUnidadMedida', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_nota_credito_pde_factura_pde_oc.gral_tipo_iva_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_nota_credito_pde_factura_pde_oc.gral_tipo_iva_id');
	$o = GralTipoIva::getOxId($criterio->getValorDeCampo('pde_nota_credito_pde_factura_pde_oc.gral_tipo_iva_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('pde_nota_credito_pde_factura_pde_oc.gral_tipo_iva_id');

	$filtros['pde_nota_credito_pde_factura_pde_oc.gral_tipo_iva_id'] = array('campo' => 'GralTipoIva', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_nota_credito_pde_factura_pde_oc.importe_unitario') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_nota_credito_pde_factura_pde_oc.importe_unitario');
	$comparador = $criterio->getComparadorDeCampo('pde_nota_credito_pde_factura_pde_oc.importe_unitario');

	$filtros['pde_nota_credito_pde_factura_pde_oc.importe_unitario'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_nota_credito_pde_factura_pde_oc.cantidad') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_nota_credito_pde_factura_pde_oc.cantidad');
	$comparador = $criterio->getComparadorDeCampo('pde_nota_credito_pde_factura_pde_oc.cantidad');

	$filtros['pde_nota_credito_pde_factura_pde_oc.cantidad'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_nota_credito_pde_factura_pde_oc.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_nota_credito_pde_factura_pde_oc.codigo');
	$comparador = $criterio->getComparadorDeCampo('pde_nota_credito_pde_factura_pde_oc.codigo');

	$filtros['pde_nota_credito_pde_factura_pde_oc.codigo'] = array('campo' => 'Codigo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_nota_credito_pde_factura_pde_oc.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_nota_credito_pde_factura_pde_oc.observacion');
	$comparador = $criterio->getComparadorDeCampo('pde_nota_credito_pde_factura_pde_oc.observacion');

	$filtros['pde_nota_credito_pde_factura_pde_oc.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_nota_credito_pde_factura_pde_oc.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_nota_credito_pde_factura_pde_oc.orden');
	$comparador = $criterio->getComparadorDeCampo('pde_nota_credito_pde_factura_pde_oc.orden');

	$filtros['pde_nota_credito_pde_factura_pde_oc.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_nota_credito_pde_factura_pde_oc.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_nota_credito_pde_factura_pde_oc.estado');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('pde_nota_credito_pde_factura_pde_oc.estado'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('pde_nota_credito_pde_factura_pde_oc.estado');

	$filtros['pde_nota_credito_pde_factura_pde_oc.estado'] = array('campo' => 'Estado', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_nota_credito_pde_factura_pde_oc.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_nota_credito_pde_factura_pde_oc.creado');
	$comparador = $criterio->getComparadorDeCampo('pde_nota_credito_pde_factura_pde_oc.creado');

	$filtros['pde_nota_credito_pde_factura_pde_oc.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_nota_credito_pde_factura_pde_oc.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_nota_credito_pde_factura_pde_oc.creado_por');
	$comparador = $criterio->getComparadorDeCampo('pde_nota_credito_pde_factura_pde_oc.creado_por');

	$filtros['pde_nota_credito_pde_factura_pde_oc.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_nota_credito_pde_factura_pde_oc.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_nota_credito_pde_factura_pde_oc.modificado');
	$comparador = $criterio->getComparadorDeCampo('pde_nota_credito_pde_factura_pde_oc.modificado');

	$filtros['pde_nota_credito_pde_factura_pde_oc.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_nota_credito_pde_factura_pde_oc.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_nota_credito_pde_factura_pde_oc.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('pde_nota_credito_pde_factura_pde_oc.modificado_por');

	$filtros['pde_nota_credito_pde_factura_pde_oc.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

