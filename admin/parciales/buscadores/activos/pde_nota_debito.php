<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['pde_nota_debito.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('pde_nota_debito.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_nota_debito.id');
	$comparador = $criterio->getComparadorDeCampo('pde_nota_debito.id');

	$filtros['pde_nota_debito.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_nota_debito.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_nota_debito.descripcion');
	$comparador = $criterio->getComparadorDeCampo('pde_nota_debito.descripcion');

	$filtros['pde_nota_debito.descripcion'] = array('campo' => 'Descripcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_nota_debito.prv_proveedor_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_nota_debito.prv_proveedor_id');
	$o = PrvProveedor::getOxId($criterio->getValorDeCampo('pde_nota_debito.prv_proveedor_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('pde_nota_debito.prv_proveedor_id');

	$filtros['pde_nota_debito.prv_proveedor_id'] = array('campo' => 'PrvProveedor', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_nota_debito.pde_tipo_nota_debito_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_nota_debito.pde_tipo_nota_debito_id');
	$o = PdeTipoNotaDebito::getOxId($criterio->getValorDeCampo('pde_nota_debito.pde_tipo_nota_debito_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('pde_nota_debito.pde_tipo_nota_debito_id');

	$filtros['pde_nota_debito.pde_tipo_nota_debito_id'] = array('campo' => 'PdeTipoNotaDebito', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_nota_debito.pde_tipo_origen_nota_debito_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_nota_debito.pde_tipo_origen_nota_debito_id');
	$o = PdeTipoOrigenNotaDebito::getOxId($criterio->getValorDeCampo('pde_nota_debito.pde_tipo_origen_nota_debito_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('pde_nota_debito.pde_tipo_origen_nota_debito_id');

	$filtros['pde_nota_debito.pde_tipo_origen_nota_debito_id'] = array('campo' => 'PdeTipoOrigenNotaDebito', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_nota_debito.gral_condicion_iva_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_nota_debito.gral_condicion_iva_id');
	$o = GralCondicionIva::getOxId($criterio->getValorDeCampo('pde_nota_debito.gral_condicion_iva_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('pde_nota_debito.gral_condicion_iva_id');

	$filtros['pde_nota_debito.gral_condicion_iva_id'] = array('campo' => 'GralCondicionIva', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_nota_debito.gral_tipo_personeria_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_nota_debito.gral_tipo_personeria_id');
	$o = GralTipoPersoneria::getOxId($criterio->getValorDeCampo('pde_nota_debito.gral_tipo_personeria_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('pde_nota_debito.gral_tipo_personeria_id');

	$filtros['pde_nota_debito.gral_tipo_personeria_id'] = array('campo' => 'GralTipoPersoneria', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_nota_debito.gral_empresa_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_nota_debito.gral_empresa_id');
	$o = GralEmpresa::getOxId($criterio->getValorDeCampo('pde_nota_debito.gral_empresa_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('pde_nota_debito.gral_empresa_id');

	$filtros['pde_nota_debito.gral_empresa_id'] = array('campo' => 'GralEmpresa', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_nota_debito.pde_centro_pedido_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_nota_debito.pde_centro_pedido_id');
	$o = PdeCentroPedido::getOxId($criterio->getValorDeCampo('pde_nota_debito.pde_centro_pedido_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('pde_nota_debito.pde_centro_pedido_id');

	$filtros['pde_nota_debito.pde_centro_pedido_id'] = array('campo' => 'PdeCentroPedido', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_nota_debito.pde_nota_debito_tipo_estado_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_nota_debito.pde_nota_debito_tipo_estado_id');
	$o = PdeNotaDebitoTipoEstado::getOxId($criterio->getValorDeCampo('pde_nota_debito.pde_nota_debito_tipo_estado_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('pde_nota_debito.pde_nota_debito_tipo_estado_id');

	$filtros['pde_nota_debito.pde_nota_debito_tipo_estado_id'] = array('campo' => 'PdeNotaDebitoTipoEstado', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_nota_debito.gral_fp_forma_pago_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_nota_debito.gral_fp_forma_pago_id');
	$o = GralFpFormaPago::getOxId($criterio->getValorDeCampo('pde_nota_debito.gral_fp_forma_pago_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('pde_nota_debito.gral_fp_forma_pago_id');

	$filtros['pde_nota_debito.gral_fp_forma_pago_id'] = array('campo' => 'GralFpFormaPago', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_nota_debito.gral_actividad_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_nota_debito.gral_actividad_id');
	$o = GralActividad::getOxId($criterio->getValorDeCampo('pde_nota_debito.gral_actividad_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('pde_nota_debito.gral_actividad_id');

	$filtros['pde_nota_debito.gral_actividad_id'] = array('campo' => 'GralActividad', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_nota_debito.gral_escenario_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_nota_debito.gral_escenario_id');
	$o = GralEscenario::getOxId($criterio->getValorDeCampo('pde_nota_debito.gral_escenario_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('pde_nota_debito.gral_escenario_id');

	$filtros['pde_nota_debito.gral_escenario_id'] = array('campo' => 'GralEscenario', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_nota_debito.numero_punto_venta') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_nota_debito.numero_punto_venta');
	$comparador = $criterio->getComparadorDeCampo('pde_nota_debito.numero_punto_venta');

	$filtros['pde_nota_debito.numero_punto_venta'] = array('campo' => 'Numero de Pto Vta', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_nota_debito.numero_nota_debito') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_nota_debito.numero_nota_debito');
	$comparador = $criterio->getComparadorDeCampo('pde_nota_debito.numero_nota_debito');

	$filtros['pde_nota_debito.numero_nota_debito'] = array('campo' => 'Numero de Nota de Debito', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_nota_debito.numero_nota_debito_completo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_nota_debito.numero_nota_debito_completo');
	$comparador = $criterio->getComparadorDeCampo('pde_nota_debito.numero_nota_debito_completo');

	$filtros['pde_nota_debito.numero_nota_debito_completo'] = array('campo' => 'Numero de Nota de Debito Completo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_nota_debito.cae') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_nota_debito.cae');
	$comparador = $criterio->getComparadorDeCampo('pde_nota_debito.cae');

	$filtros['pde_nota_debito.cae'] = array('campo' => 'Cae', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_nota_debito.numero_despacho') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_nota_debito.numero_despacho');
	$comparador = $criterio->getComparadorDeCampo('pde_nota_debito.numero_despacho');

	$filtros['pde_nota_debito.numero_despacho'] = array('campo' => 'Numero de Despacho', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_nota_debito.fecha_emision') != ''){
	$valor = Gral::getFechaToWeb($valor = $criterio->getValorDeCampo('pde_nota_debito.fecha_emision'));
	$comparador = $criterio->getComparadorDeCampo('pde_nota_debito.fecha_emision');

	$filtros['pde_nota_debito.fecha_emision'] = array('campo' => 'Fecha de Emision', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_nota_debito.fecha_vencimiento') != ''){
	$valor = Gral::getFechaToWeb($valor = $criterio->getValorDeCampo('pde_nota_debito.fecha_vencimiento'));
	$comparador = $criterio->getComparadorDeCampo('pde_nota_debito.fecha_vencimiento');

	$filtros['pde_nota_debito.fecha_vencimiento'] = array('campo' => 'Fecha de Vencimiento', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_nota_debito.persona_descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_nota_debito.persona_descripcion');
	$comparador = $criterio->getComparadorDeCampo('pde_nota_debito.persona_descripcion');

	$filtros['pde_nota_debito.persona_descripcion'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_nota_debito.razon_social') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_nota_debito.razon_social');
	$comparador = $criterio->getComparadorDeCampo('pde_nota_debito.razon_social');

	$filtros['pde_nota_debito.razon_social'] = array('campo' => 'Razon Social', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_nota_debito.domicilio_legal') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_nota_debito.domicilio_legal');
	$comparador = $criterio->getComparadorDeCampo('pde_nota_debito.domicilio_legal');

	$filtros['pde_nota_debito.domicilio_legal'] = array('campo' => 'Domicilio Legal', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_nota_debito.cuit') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_nota_debito.cuit');
	$comparador = $criterio->getComparadorDeCampo('pde_nota_debito.cuit');

	$filtros['pde_nota_debito.cuit'] = array('campo' => 'CUIT', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_nota_debito.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_nota_debito.codigo');
	$comparador = $criterio->getComparadorDeCampo('pde_nota_debito.codigo');

	$filtros['pde_nota_debito.codigo'] = array('campo' => 'Codigo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_nota_debito.anio') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_nota_debito.anio');
	$comparador = $criterio->getComparadorDeCampo('pde_nota_debito.anio');

	$filtros['pde_nota_debito.anio'] = array('campo' => 'Anio', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_nota_debito.gral_mes_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_nota_debito.gral_mes_id');
	$o = GralMes::getOxId($criterio->getValorDeCampo('pde_nota_debito.gral_mes_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('pde_nota_debito.gral_mes_id');

	$filtros['pde_nota_debito.gral_mes_id'] = array('campo' => 'GralMes', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_nota_debito.cntb_diario_asiento_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_nota_debito.cntb_diario_asiento_id');
	$o = CntbDiarioAsiento::getOxId($criterio->getValorDeCampo('pde_nota_debito.cntb_diario_asiento_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('pde_nota_debito.cntb_diario_asiento_id');

	$filtros['pde_nota_debito.cntb_diario_asiento_id'] = array('campo' => 'CntbDiarioAsiento', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_nota_debito.prv_descuento_financiero_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_nota_debito.prv_descuento_financiero_id');
	$o = PrvDescuentoFinanciero::getOxId($criterio->getValorDeCampo('pde_nota_debito.prv_descuento_financiero_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('pde_nota_debito.prv_descuento_financiero_id');

	$filtros['pde_nota_debito.prv_descuento_financiero_id'] = array('campo' => 'PrvDescuentoFinanciero', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_nota_debito.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_nota_debito.observacion');
	$comparador = $criterio->getComparadorDeCampo('pde_nota_debito.observacion');

	$filtros['pde_nota_debito.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_nota_debito.nota_interna') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_nota_debito.nota_interna');
	$comparador = $criterio->getComparadorDeCampo('pde_nota_debito.nota_interna');

	$filtros['pde_nota_debito.nota_interna'] = array('campo' => 'Nota Interna', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_nota_debito.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_nota_debito.orden');
	$comparador = $criterio->getComparadorDeCampo('pde_nota_debito.orden');

	$filtros['pde_nota_debito.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_nota_debito.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_nota_debito.estado');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('pde_nota_debito.estado'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('pde_nota_debito.estado');

	$filtros['pde_nota_debito.estado'] = array('campo' => 'Estado', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_nota_debito.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_nota_debito.creado');
	$comparador = $criterio->getComparadorDeCampo('pde_nota_debito.creado');

	$filtros['pde_nota_debito.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_nota_debito.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_nota_debito.creado_por');
	$comparador = $criterio->getComparadorDeCampo('pde_nota_debito.creado_por');

	$filtros['pde_nota_debito.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_nota_debito.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_nota_debito.modificado');
	$comparador = $criterio->getComparadorDeCampo('pde_nota_debito.modificado');

	$filtros['pde_nota_debito.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_nota_debito.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_nota_debito.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('pde_nota_debito.modificado_por');

	$filtros['pde_nota_debito.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

