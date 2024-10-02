<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['pde_factura.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('pde_factura.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_factura.id');
	$comparador = $criterio->getComparadorDeCampo('pde_factura.id');

	$filtros['pde_factura.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_factura.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_factura.descripcion');
	$comparador = $criterio->getComparadorDeCampo('pde_factura.descripcion');

	$filtros['pde_factura.descripcion'] = array('campo' => 'Descripcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_factura.prv_proveedor_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_factura.prv_proveedor_id');
	$o = PrvProveedor::getOxId($criterio->getValorDeCampo('pde_factura.prv_proveedor_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('pde_factura.prv_proveedor_id');

	$filtros['pde_factura.prv_proveedor_id'] = array('campo' => 'PrvProveedor', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_factura.pde_factura_tipo_estado_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_factura.pde_factura_tipo_estado_id');
	$o = PdeFacturaTipoEstado::getOxId($criterio->getValorDeCampo('pde_factura.pde_factura_tipo_estado_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('pde_factura.pde_factura_tipo_estado_id');

	$filtros['pde_factura.pde_factura_tipo_estado_id'] = array('campo' => 'PdeFacturaTipoEstado', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_factura.pde_tipo_factura_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_factura.pde_tipo_factura_id');
	$o = PdeTipoFactura::getOxId($criterio->getValorDeCampo('pde_factura.pde_tipo_factura_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('pde_factura.pde_tipo_factura_id');

	$filtros['pde_factura.pde_tipo_factura_id'] = array('campo' => 'PdeTipoFactura', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_factura.pde_tipo_origen_factura_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_factura.pde_tipo_origen_factura_id');
	$o = PdeTipoOrigenFactura::getOxId($criterio->getValorDeCampo('pde_factura.pde_tipo_origen_factura_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('pde_factura.pde_tipo_origen_factura_id');

	$filtros['pde_factura.pde_tipo_origen_factura_id'] = array('campo' => 'PdeTipoOrigenFactura', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_factura.gral_condicion_iva_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_factura.gral_condicion_iva_id');
	$o = GralCondicionIva::getOxId($criterio->getValorDeCampo('pde_factura.gral_condicion_iva_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('pde_factura.gral_condicion_iva_id');

	$filtros['pde_factura.gral_condicion_iva_id'] = array('campo' => 'GralCondicionIva', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_factura.gral_tipo_personeria_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_factura.gral_tipo_personeria_id');
	$o = GralTipoPersoneria::getOxId($criterio->getValorDeCampo('pde_factura.gral_tipo_personeria_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('pde_factura.gral_tipo_personeria_id');

	$filtros['pde_factura.gral_tipo_personeria_id'] = array('campo' => 'GralTipoPersoneria', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_factura.gral_empresa_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_factura.gral_empresa_id');
	$o = GralEmpresa::getOxId($criterio->getValorDeCampo('pde_factura.gral_empresa_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('pde_factura.gral_empresa_id');

	$filtros['pde_factura.gral_empresa_id'] = array('campo' => 'GralEmpresa', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_factura.pde_centro_pedido_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_factura.pde_centro_pedido_id');
	$o = PdeCentroPedido::getOxId($criterio->getValorDeCampo('pde_factura.pde_centro_pedido_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('pde_factura.pde_centro_pedido_id');

	$filtros['pde_factura.pde_centro_pedido_id'] = array('campo' => 'PdeCentroPedido', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_factura.gral_fp_forma_pago_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_factura.gral_fp_forma_pago_id');
	$o = GralFpFormaPago::getOxId($criterio->getValorDeCampo('pde_factura.gral_fp_forma_pago_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('pde_factura.gral_fp_forma_pago_id');

	$filtros['pde_factura.gral_fp_forma_pago_id'] = array('campo' => 'GralFpFormaPago', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_factura.gral_actividad_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_factura.gral_actividad_id');
	$o = GralActividad::getOxId($criterio->getValorDeCampo('pde_factura.gral_actividad_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('pde_factura.gral_actividad_id');

	$filtros['pde_factura.gral_actividad_id'] = array('campo' => 'GralActividad', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_factura.gral_escenario_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_factura.gral_escenario_id');
	$o = GralEscenario::getOxId($criterio->getValorDeCampo('pde_factura.gral_escenario_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('pde_factura.gral_escenario_id');

	$filtros['pde_factura.gral_escenario_id'] = array('campo' => 'GralEscenario', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_factura.numero_punto_venta') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_factura.numero_punto_venta');
	$comparador = $criterio->getComparadorDeCampo('pde_factura.numero_punto_venta');

	$filtros['pde_factura.numero_punto_venta'] = array('campo' => 'Numero de Pto Vta', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_factura.numero_factura') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_factura.numero_factura');
	$comparador = $criterio->getComparadorDeCampo('pde_factura.numero_factura');

	$filtros['pde_factura.numero_factura'] = array('campo' => 'Numero de Factura', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_factura.numero_factura_completo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_factura.numero_factura_completo');
	$comparador = $criterio->getComparadorDeCampo('pde_factura.numero_factura_completo');

	$filtros['pde_factura.numero_factura_completo'] = array('campo' => 'Numero de Factura Completo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_factura.cae') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_factura.cae');
	$comparador = $criterio->getComparadorDeCampo('pde_factura.cae');

	$filtros['pde_factura.cae'] = array('campo' => 'Cae', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_factura.numero_despacho') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_factura.numero_despacho');
	$comparador = $criterio->getComparadorDeCampo('pde_factura.numero_despacho');

	$filtros['pde_factura.numero_despacho'] = array('campo' => 'Numero de Despacho', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_factura.fecha_emision') != ''){
	$valor = Gral::getFechaToWeb($valor = $criterio->getValorDeCampo('pde_factura.fecha_emision'));
	$comparador = $criterio->getComparadorDeCampo('pde_factura.fecha_emision');

	$filtros['pde_factura.fecha_emision'] = array('campo' => 'Fecha de Emision', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_factura.fecha_vencimiento') != ''){
	$valor = Gral::getFechaToWeb($valor = $criterio->getValorDeCampo('pde_factura.fecha_vencimiento'));
	$comparador = $criterio->getComparadorDeCampo('pde_factura.fecha_vencimiento');

	$filtros['pde_factura.fecha_vencimiento'] = array('campo' => 'Fecha de Vencimiento', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_factura.persona_descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_factura.persona_descripcion');
	$comparador = $criterio->getComparadorDeCampo('pde_factura.persona_descripcion');

	$filtros['pde_factura.persona_descripcion'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_factura.razon_social') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_factura.razon_social');
	$comparador = $criterio->getComparadorDeCampo('pde_factura.razon_social');

	$filtros['pde_factura.razon_social'] = array('campo' => 'Razon Social', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_factura.domicilio_legal') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_factura.domicilio_legal');
	$comparador = $criterio->getComparadorDeCampo('pde_factura.domicilio_legal');

	$filtros['pde_factura.domicilio_legal'] = array('campo' => 'Domicilio Legal', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_factura.cuit') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_factura.cuit');
	$comparador = $criterio->getComparadorDeCampo('pde_factura.cuit');

	$filtros['pde_factura.cuit'] = array('campo' => 'CUIT', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_factura.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_factura.codigo');
	$comparador = $criterio->getComparadorDeCampo('pde_factura.codigo');

	$filtros['pde_factura.codigo'] = array('campo' => 'Codigo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_factura.anio') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_factura.anio');
	$comparador = $criterio->getComparadorDeCampo('pde_factura.anio');

	$filtros['pde_factura.anio'] = array('campo' => 'Anio', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_factura.gral_mes_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_factura.gral_mes_id');
	$o = GralMes::getOxId($criterio->getValorDeCampo('pde_factura.gral_mes_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('pde_factura.gral_mes_id');

	$filtros['pde_factura.gral_mes_id'] = array('campo' => 'GralMes', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_factura.cntb_diario_asiento_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_factura.cntb_diario_asiento_id');
	$o = CntbDiarioAsiento::getOxId($criterio->getValorDeCampo('pde_factura.cntb_diario_asiento_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('pde_factura.cntb_diario_asiento_id');

	$filtros['pde_factura.cntb_diario_asiento_id'] = array('campo' => 'CntbDiarioAsiento', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_factura.prv_descuento_financiero_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_factura.prv_descuento_financiero_id');
	$o = PrvDescuentoFinanciero::getOxId($criterio->getValorDeCampo('pde_factura.prv_descuento_financiero_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('pde_factura.prv_descuento_financiero_id');

	$filtros['pde_factura.prv_descuento_financiero_id'] = array('campo' => 'PrvDescuentoFinanciero', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_factura.nota_interna') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_factura.nota_interna');
	$comparador = $criterio->getComparadorDeCampo('pde_factura.nota_interna');

	$filtros['pde_factura.nota_interna'] = array('campo' => 'Nota Interna', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_factura.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_factura.observacion');
	$comparador = $criterio->getComparadorDeCampo('pde_factura.observacion');

	$filtros['pde_factura.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_factura.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_factura.orden');
	$comparador = $criterio->getComparadorDeCampo('pde_factura.orden');

	$filtros['pde_factura.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_factura.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_factura.estado');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('pde_factura.estado'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('pde_factura.estado');

	$filtros['pde_factura.estado'] = array('campo' => 'Estado', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_factura.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_factura.creado');
	$comparador = $criterio->getComparadorDeCampo('pde_factura.creado');

	$filtros['pde_factura.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_factura.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_factura.creado_por');
	$comparador = $criterio->getComparadorDeCampo('pde_factura.creado_por');

	$filtros['pde_factura.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_factura.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_factura.modificado');
	$comparador = $criterio->getComparadorDeCampo('pde_factura.modificado');

	$filtros['pde_factura.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_factura.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_factura.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('pde_factura.modificado_por');

	$filtros['pde_factura.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

