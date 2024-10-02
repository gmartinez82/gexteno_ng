<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['fnd_chq_cheque.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('fnd_chq_cheque.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_chq_cheque.id');
	$comparador = $criterio->getComparadorDeCampo('fnd_chq_cheque.id');

	$filtros['fnd_chq_cheque.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('fnd_chq_cheque.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_chq_cheque.descripcion');
	$comparador = $criterio->getComparadorDeCampo('fnd_chq_cheque.descripcion');

	$filtros['fnd_chq_cheque.descripcion'] = array('campo' => 'Descripcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('fnd_chq_cheque.fnd_chq_chequera_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_chq_cheque.fnd_chq_chequera_id');
	$o = FndChqChequera::getOxId($criterio->getValorDeCampo('fnd_chq_cheque.fnd_chq_chequera_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('fnd_chq_cheque.fnd_chq_chequera_id');

	$filtros['fnd_chq_cheque.fnd_chq_chequera_id'] = array('campo' => 'FndChqChequera', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('fnd_chq_cheque.gral_banco_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_chq_cheque.gral_banco_id');
	$o = GralBanco::getOxId($criterio->getValorDeCampo('fnd_chq_cheque.gral_banco_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('fnd_chq_cheque.gral_banco_id');

	$filtros['fnd_chq_cheque.gral_banco_id'] = array('campo' => 'GralBanco', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('fnd_chq_cheque.codigo_sucursal') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_chq_cheque.codigo_sucursal');
	$comparador = $criterio->getComparadorDeCampo('fnd_chq_cheque.codigo_sucursal');

	$filtros['fnd_chq_cheque.codigo_sucursal'] = array('campo' => 'Codigo Sucursal', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('fnd_chq_cheque.numero') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_chq_cheque.numero');
	$comparador = $criterio->getComparadorDeCampo('fnd_chq_cheque.numero');

	$filtros['fnd_chq_cheque.numero'] = array('campo' => 'Numero', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('fnd_chq_cheque.fecha_emision') != ''){
	$valor = Gral::getFechaToWeb($valor = $criterio->getValorDeCampo('fnd_chq_cheque.fecha_emision'));
	$comparador = $criterio->getComparadorDeCampo('fnd_chq_cheque.fecha_emision');

	$filtros['fnd_chq_cheque.fecha_emision'] = array('campo' => 'Fecha Emision', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('fnd_chq_cheque.fecha_cobro') != ''){
	$valor = Gral::getFechaToWeb($valor = $criterio->getValorDeCampo('fnd_chq_cheque.fecha_cobro'));
	$comparador = $criterio->getComparadorDeCampo('fnd_chq_cheque.fecha_cobro');

	$filtros['fnd_chq_cheque.fecha_cobro'] = array('campo' => 'Fecha Cobro', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('fnd_chq_cheque.fecha_acreditacion') != ''){
	$valor = Gral::getFechaToWeb($valor = $criterio->getValorDeCampo('fnd_chq_cheque.fecha_acreditacion'));
	$comparador = $criterio->getComparadorDeCampo('fnd_chq_cheque.fecha_acreditacion');

	$filtros['fnd_chq_cheque.fecha_acreditacion'] = array('campo' => 'Fecha Acreditacion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('fnd_chq_cheque.fecha_vencimiento') != ''){
	$valor = Gral::getFechaToWeb($valor = $criterio->getValorDeCampo('fnd_chq_cheque.fecha_vencimiento'));
	$comparador = $criterio->getComparadorDeCampo('fnd_chq_cheque.fecha_vencimiento');

	$filtros['fnd_chq_cheque.fecha_vencimiento'] = array('campo' => 'Fecha Vencimiento', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('fnd_chq_cheque.firmante') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_chq_cheque.firmante');
	$comparador = $criterio->getComparadorDeCampo('fnd_chq_cheque.firmante');

	$filtros['fnd_chq_cheque.firmante'] = array('campo' => 'Firmante', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('fnd_chq_cheque.entregador') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_chq_cheque.entregador');
	$comparador = $criterio->getComparadorDeCampo('fnd_chq_cheque.entregador');

	$filtros['fnd_chq_cheque.entregador'] = array('campo' => 'Entregador', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('fnd_chq_cheque.fnd_chq_tipo_emisor_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_chq_cheque.fnd_chq_tipo_emisor_id');
	$o = FndChqTipoEmisor::getOxId($criterio->getValorDeCampo('fnd_chq_cheque.fnd_chq_tipo_emisor_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('fnd_chq_cheque.fnd_chq_tipo_emisor_id');

	$filtros['fnd_chq_cheque.fnd_chq_tipo_emisor_id'] = array('campo' => 'FndChqTipoEmisor', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('fnd_chq_cheque.fnd_chq_tipo_emision_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_chq_cheque.fnd_chq_tipo_emision_id');
	$o = FndChqTipoEmision::getOxId($criterio->getValorDeCampo('fnd_chq_cheque.fnd_chq_tipo_emision_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('fnd_chq_cheque.fnd_chq_tipo_emision_id');

	$filtros['fnd_chq_cheque.fnd_chq_tipo_emision_id'] = array('campo' => 'FndChqTipoEmision', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('fnd_chq_cheque.fnd_chq_tipo_pago_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_chq_cheque.fnd_chq_tipo_pago_id');
	$o = FndChqTipoPago::getOxId($criterio->getValorDeCampo('fnd_chq_cheque.fnd_chq_tipo_pago_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('fnd_chq_cheque.fnd_chq_tipo_pago_id');

	$filtros['fnd_chq_cheque.fnd_chq_tipo_pago_id'] = array('campo' => 'FndChqTipoPago', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('fnd_chq_cheque.fnd_chq_tipo_estado_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_chq_cheque.fnd_chq_tipo_estado_id');
	$o = FndChqTipoEstado::getOxId($criterio->getValorDeCampo('fnd_chq_cheque.fnd_chq_tipo_estado_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('fnd_chq_cheque.fnd_chq_tipo_estado_id');

	$filtros['fnd_chq_cheque.fnd_chq_tipo_estado_id'] = array('campo' => 'FndChqTipoEstado', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('fnd_chq_cheque.importe') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_chq_cheque.importe');
	$comparador = $criterio->getComparadorDeCampo('fnd_chq_cheque.importe');

	$filtros['fnd_chq_cheque.importe'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('fnd_chq_cheque.cruzado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_chq_cheque.cruzado');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('fnd_chq_cheque.cruzado'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('fnd_chq_cheque.cruzado');

	$filtros['fnd_chq_cheque.cruzado'] = array('campo' => 'Cruzado', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('fnd_chq_cheque.vta_recibo_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_chq_cheque.vta_recibo_id');
	$o = VtaRecibo::getOxId($criterio->getValorDeCampo('fnd_chq_cheque.vta_recibo_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('fnd_chq_cheque.vta_recibo_id');

	$filtros['fnd_chq_cheque.vta_recibo_id'] = array('campo' => 'VtaRecibo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('fnd_chq_cheque.vta_recibo_item_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_chq_cheque.vta_recibo_item_id');
	$o = VtaReciboItem::getOxId($criterio->getValorDeCampo('fnd_chq_cheque.vta_recibo_item_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('fnd_chq_cheque.vta_recibo_item_id');

	$filtros['fnd_chq_cheque.vta_recibo_item_id'] = array('campo' => 'VtaReciboItem', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('fnd_chq_cheque.vta_comision_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_chq_cheque.vta_comision_id');
	$o = VtaComision::getOxId($criterio->getValorDeCampo('fnd_chq_cheque.vta_comision_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('fnd_chq_cheque.vta_comision_id');

	$filtros['fnd_chq_cheque.vta_comision_id'] = array('campo' => 'VtaComision', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('fnd_chq_cheque.vta_comision_gral_fp_forma_pago_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_chq_cheque.vta_comision_gral_fp_forma_pago_id');
	$o = VtaComisionGralFpFormaPago::getOxId($criterio->getValorDeCampo('fnd_chq_cheque.vta_comision_gral_fp_forma_pago_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('fnd_chq_cheque.vta_comision_gral_fp_forma_pago_id');

	$filtros['fnd_chq_cheque.vta_comision_gral_fp_forma_pago_id'] = array('campo' => 'VtaComisionGralFpFormaPago', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('fnd_chq_cheque.pde_orden_pago_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_chq_cheque.pde_orden_pago_id');
	$o = PdeOrdenPago::getOxId($criterio->getValorDeCampo('fnd_chq_cheque.pde_orden_pago_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('fnd_chq_cheque.pde_orden_pago_id');

	$filtros['fnd_chq_cheque.pde_orden_pago_id'] = array('campo' => 'OrdenPago', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('fnd_chq_cheque.pde_orden_pago_gral_fp_forma_pago_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_chq_cheque.pde_orden_pago_gral_fp_forma_pago_id');
	$o = PdeOrdenPagoGralFpFormaPago::getOxId($criterio->getValorDeCampo('fnd_chq_cheque.pde_orden_pago_gral_fp_forma_pago_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('fnd_chq_cheque.pde_orden_pago_gral_fp_forma_pago_id');

	$filtros['fnd_chq_cheque.pde_orden_pago_gral_fp_forma_pago_id'] = array('campo' => 'PdeOrdenPagoGralFpFormaPago', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('fnd_chq_cheque.pde_recibo_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_chq_cheque.pde_recibo_id');
	$o = PdeRecibo::getOxId($criterio->getValorDeCampo('fnd_chq_cheque.pde_recibo_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('fnd_chq_cheque.pde_recibo_id');

	$filtros['fnd_chq_cheque.pde_recibo_id'] = array('campo' => 'PdeRecibo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('fnd_chq_cheque.pde_recibo_item_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_chq_cheque.pde_recibo_item_id');
	$o = PdeReciboItem::getOxId($criterio->getValorDeCampo('fnd_chq_cheque.pde_recibo_item_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('fnd_chq_cheque.pde_recibo_item_id');

	$filtros['fnd_chq_cheque.pde_recibo_item_id'] = array('campo' => 'PdeReciboItem', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('fnd_chq_cheque.fnd_caja_movimiento_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_chq_cheque.fnd_caja_movimiento_id');
	$o = FndCajaMovimiento::getOxId($criterio->getValorDeCampo('fnd_chq_cheque.fnd_caja_movimiento_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('fnd_chq_cheque.fnd_caja_movimiento_id');

	$filtros['fnd_chq_cheque.fnd_caja_movimiento_id'] = array('campo' => 'FndCajaMovimiento', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('fnd_chq_cheque.fnd_caja_movimiento_item_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_chq_cheque.fnd_caja_movimiento_item_id');
	$o = FndCajaMovimientoItem::getOxId($criterio->getValorDeCampo('fnd_chq_cheque.fnd_caja_movimiento_item_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('fnd_chq_cheque.fnd_caja_movimiento_item_id');

	$filtros['fnd_chq_cheque.fnd_caja_movimiento_item_id'] = array('campo' => 'FndCajaMovimientoItem', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('fnd_chq_cheque.fnd_caja_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_chq_cheque.fnd_caja_id');
	$o = FndCaja::getOxId($criterio->getValorDeCampo('fnd_chq_cheque.fnd_caja_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('fnd_chq_cheque.fnd_caja_id');

	$filtros['fnd_chq_cheque.fnd_caja_id'] = array('campo' => 'FndCaja', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('fnd_chq_cheque.gral_caja_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_chq_cheque.gral_caja_id');
	$o = GralCaja::getOxId($criterio->getValorDeCampo('fnd_chq_cheque.gral_caja_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('fnd_chq_cheque.gral_caja_id');

	$filtros['fnd_chq_cheque.gral_caja_id'] = array('campo' => 'GralCaja', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('fnd_chq_cheque.fnd_caja_ingreso_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_chq_cheque.fnd_caja_ingreso_id');
	$o = FndCajaIngreso::getOxId($criterio->getValorDeCampo('fnd_chq_cheque.fnd_caja_ingreso_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('fnd_chq_cheque.fnd_caja_ingreso_id');

	$filtros['fnd_chq_cheque.fnd_caja_ingreso_id'] = array('campo' => 'FndCajaIngreso', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('fnd_chq_cheque.fnd_caja_egreso_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_chq_cheque.fnd_caja_egreso_id');
	$o = FndCajaEgreso::getOxId($criterio->getValorDeCampo('fnd_chq_cheque.fnd_caja_egreso_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('fnd_chq_cheque.fnd_caja_egreso_id');

	$filtros['fnd_chq_cheque.fnd_caja_egreso_id'] = array('campo' => 'FndCajaEgreso', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('fnd_chq_cheque.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_chq_cheque.codigo');
	$comparador = $criterio->getComparadorDeCampo('fnd_chq_cheque.codigo');

	$filtros['fnd_chq_cheque.codigo'] = array('campo' => 'Codigo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('fnd_chq_cheque.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_chq_cheque.observacion');
	$comparador = $criterio->getComparadorDeCampo('fnd_chq_cheque.observacion');

	$filtros['fnd_chq_cheque.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('fnd_chq_cheque.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_chq_cheque.orden');
	$comparador = $criterio->getComparadorDeCampo('fnd_chq_cheque.orden');

	$filtros['fnd_chq_cheque.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('fnd_chq_cheque.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_chq_cheque.estado');
	$comparador = $criterio->getComparadorDeCampo('fnd_chq_cheque.estado');

	$filtros['fnd_chq_cheque.estado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('fnd_chq_cheque.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_chq_cheque.creado');
	$comparador = $criterio->getComparadorDeCampo('fnd_chq_cheque.creado');

	$filtros['fnd_chq_cheque.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('fnd_chq_cheque.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_chq_cheque.creado_por');
	$comparador = $criterio->getComparadorDeCampo('fnd_chq_cheque.creado_por');

	$filtros['fnd_chq_cheque.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('fnd_chq_cheque.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_chq_cheque.modificado');
	$comparador = $criterio->getComparadorDeCampo('fnd_chq_cheque.modificado');

	$filtros['fnd_chq_cheque.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('fnd_chq_cheque.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_chq_cheque.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('fnd_chq_cheque.modificado_por');

	$filtros['fnd_chq_cheque.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

