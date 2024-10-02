<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['pde_recibo.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('pde_recibo.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_recibo.id');
	$comparador = $criterio->getComparadorDeCampo('pde_recibo.id');

	$filtros['pde_recibo.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_recibo.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_recibo.descripcion');
	$comparador = $criterio->getComparadorDeCampo('pde_recibo.descripcion');

	$filtros['pde_recibo.descripcion'] = array('campo' => 'Descripcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_recibo.prv_proveedor_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_recibo.prv_proveedor_id');
	$o = PrvProveedor::getOxId($criterio->getValorDeCampo('pde_recibo.prv_proveedor_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('pde_recibo.prv_proveedor_id');

	$filtros['pde_recibo.prv_proveedor_id'] = array('campo' => 'PrvProveedor', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_recibo.pde_tipo_recibo_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_recibo.pde_tipo_recibo_id');
	$o = PdeTipoRecibo::getOxId($criterio->getValorDeCampo('pde_recibo.pde_tipo_recibo_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('pde_recibo.pde_tipo_recibo_id');

	$filtros['pde_recibo.pde_tipo_recibo_id'] = array('campo' => 'PdeTipoRecibo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_recibo.pde_tipo_origen_recibo_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_recibo.pde_tipo_origen_recibo_id');
	$o = PdeTipoOrigenRecibo::getOxId($criterio->getValorDeCampo('pde_recibo.pde_tipo_origen_recibo_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('pde_recibo.pde_tipo_origen_recibo_id');

	$filtros['pde_recibo.pde_tipo_origen_recibo_id'] = array('campo' => 'PdeTipoOrigenRecibo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_recibo.gral_condicion_iva_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_recibo.gral_condicion_iva_id');
	$o = GralCondicionIva::getOxId($criterio->getValorDeCampo('pde_recibo.gral_condicion_iva_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('pde_recibo.gral_condicion_iva_id');

	$filtros['pde_recibo.gral_condicion_iva_id'] = array('campo' => 'GralCondicionIva', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_recibo.gral_tipo_personeria_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_recibo.gral_tipo_personeria_id');
	$o = GralTipoPersoneria::getOxId($criterio->getValorDeCampo('pde_recibo.gral_tipo_personeria_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('pde_recibo.gral_tipo_personeria_id');

	$filtros['pde_recibo.gral_tipo_personeria_id'] = array('campo' => 'GralTipoPersoneria', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_recibo.gral_empresa_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_recibo.gral_empresa_id');
	$o = GralEmpresa::getOxId($criterio->getValorDeCampo('pde_recibo.gral_empresa_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('pde_recibo.gral_empresa_id');

	$filtros['pde_recibo.gral_empresa_id'] = array('campo' => 'GralEmpresa', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_recibo.pde_centro_pedido_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_recibo.pde_centro_pedido_id');
	$o = PdeCentroPedido::getOxId($criterio->getValorDeCampo('pde_recibo.pde_centro_pedido_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('pde_recibo.pde_centro_pedido_id');

	$filtros['pde_recibo.pde_centro_pedido_id'] = array('campo' => 'PdeCentroPedido', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_recibo.pde_recibo_tipo_estado_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_recibo.pde_recibo_tipo_estado_id');
	$o = PdeReciboTipoEstado::getOxId($criterio->getValorDeCampo('pde_recibo.pde_recibo_tipo_estado_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('pde_recibo.pde_recibo_tipo_estado_id');

	$filtros['pde_recibo.pde_recibo_tipo_estado_id'] = array('campo' => 'PdeReciboTipoEstado', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_recibo.numero_punto_venta') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_recibo.numero_punto_venta');
	$comparador = $criterio->getComparadorDeCampo('pde_recibo.numero_punto_venta');

	$filtros['pde_recibo.numero_punto_venta'] = array('campo' => 'Numero de Pto Vta', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_recibo.numero_recibo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_recibo.numero_recibo');
	$comparador = $criterio->getComparadorDeCampo('pde_recibo.numero_recibo');

	$filtros['pde_recibo.numero_recibo'] = array('campo' => 'Numero de recibo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_recibo.numero_recibo_completo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_recibo.numero_recibo_completo');
	$comparador = $criterio->getComparadorDeCampo('pde_recibo.numero_recibo_completo');

	$filtros['pde_recibo.numero_recibo_completo'] = array('campo' => 'Numero de recibo Completo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_recibo.cae') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_recibo.cae');
	$comparador = $criterio->getComparadorDeCampo('pde_recibo.cae');

	$filtros['pde_recibo.cae'] = array('campo' => 'Cae', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_recibo.fecha_emision') != ''){
	$valor = Gral::getFechaToWeb($valor = $criterio->getValorDeCampo('pde_recibo.fecha_emision'));
	$comparador = $criterio->getComparadorDeCampo('pde_recibo.fecha_emision');

	$filtros['pde_recibo.fecha_emision'] = array('campo' => 'Fecha de Emision', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_recibo.persona_descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_recibo.persona_descripcion');
	$comparador = $criterio->getComparadorDeCampo('pde_recibo.persona_descripcion');

	$filtros['pde_recibo.persona_descripcion'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_recibo.razon_social') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_recibo.razon_social');
	$comparador = $criterio->getComparadorDeCampo('pde_recibo.razon_social');

	$filtros['pde_recibo.razon_social'] = array('campo' => 'Razon Social', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_recibo.domicilio_legal') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_recibo.domicilio_legal');
	$comparador = $criterio->getComparadorDeCampo('pde_recibo.domicilio_legal');

	$filtros['pde_recibo.domicilio_legal'] = array('campo' => 'Domicilio Legal', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_recibo.cuit') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_recibo.cuit');
	$comparador = $criterio->getComparadorDeCampo('pde_recibo.cuit');

	$filtros['pde_recibo.cuit'] = array('campo' => 'CUIT', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_recibo.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_recibo.codigo');
	$comparador = $criterio->getComparadorDeCampo('pde_recibo.codigo');

	$filtros['pde_recibo.codigo'] = array('campo' => 'Codigo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_recibo.anio') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_recibo.anio');
	$comparador = $criterio->getComparadorDeCampo('pde_recibo.anio');

	$filtros['pde_recibo.anio'] = array('campo' => 'Anio', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_recibo.gral_mes_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_recibo.gral_mes_id');
	$o = GralMes::getOxId($criterio->getValorDeCampo('pde_recibo.gral_mes_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('pde_recibo.gral_mes_id');

	$filtros['pde_recibo.gral_mes_id'] = array('campo' => 'GralMes', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_recibo.cntb_diario_asiento_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_recibo.cntb_diario_asiento_id');
	$o = CntbDiarioAsiento::getOxId($criterio->getValorDeCampo('pde_recibo.cntb_diario_asiento_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('pde_recibo.cntb_diario_asiento_id');

	$filtros['pde_recibo.cntb_diario_asiento_id'] = array('campo' => 'CntbDiarioAsiento', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_recibo.pde_orden_pago_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_recibo.pde_orden_pago_id');
	$o = PdeOrdenPago::getOxId($criterio->getValorDeCampo('pde_recibo.pde_orden_pago_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('pde_recibo.pde_orden_pago_id');

	$filtros['pde_recibo.pde_orden_pago_id'] = array('campo' => 'PdeOrdenPago', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_recibo.fnd_caja_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_recibo.fnd_caja_id');
	$comparador = $criterio->getComparadorDeCampo('pde_recibo.fnd_caja_id');

	$filtros['pde_recibo.fnd_caja_id'] = array('campo' => 'FndCaja', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_recibo.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_recibo.observacion');
	$comparador = $criterio->getComparadorDeCampo('pde_recibo.observacion');

	$filtros['pde_recibo.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_recibo.nota_interna') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_recibo.nota_interna');
	$comparador = $criterio->getComparadorDeCampo('pde_recibo.nota_interna');

	$filtros['pde_recibo.nota_interna'] = array('campo' => 'Nota Interna', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_recibo.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_recibo.orden');
	$comparador = $criterio->getComparadorDeCampo('pde_recibo.orden');

	$filtros['pde_recibo.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_recibo.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_recibo.estado');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('pde_recibo.estado'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('pde_recibo.estado');

	$filtros['pde_recibo.estado'] = array('campo' => 'Estado', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_recibo.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_recibo.creado');
	$comparador = $criterio->getComparadorDeCampo('pde_recibo.creado');

	$filtros['pde_recibo.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_recibo.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_recibo.creado_por');
	$comparador = $criterio->getComparadorDeCampo('pde_recibo.creado_por');

	$filtros['pde_recibo.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_recibo.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_recibo.modificado');
	$comparador = $criterio->getComparadorDeCampo('pde_recibo.modificado');

	$filtros['pde_recibo.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_recibo.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_recibo.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('pde_recibo.modificado_por');

	$filtros['pde_recibo.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

