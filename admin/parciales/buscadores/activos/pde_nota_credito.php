<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['pde_nota_credito.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('pde_nota_credito.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_nota_credito.id');
	$comparador = $criterio->getComparadorDeCampo('pde_nota_credito.id');

	$filtros['pde_nota_credito.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_nota_credito.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_nota_credito.descripcion');
	$comparador = $criterio->getComparadorDeCampo('pde_nota_credito.descripcion');

	$filtros['pde_nota_credito.descripcion'] = array('campo' => 'Descripcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_nota_credito.prv_proveedor_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_nota_credito.prv_proveedor_id');
	$o = PrvProveedor::getOxId($criterio->getValorDeCampo('pde_nota_credito.prv_proveedor_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('pde_nota_credito.prv_proveedor_id');

	$filtros['pde_nota_credito.prv_proveedor_id'] = array('campo' => 'PrvProveedor', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_nota_credito.pde_tipo_nota_credito_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_nota_credito.pde_tipo_nota_credito_id');
	$o = PdeTipoNotaCredito::getOxId($criterio->getValorDeCampo('pde_nota_credito.pde_tipo_nota_credito_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('pde_nota_credito.pde_tipo_nota_credito_id');

	$filtros['pde_nota_credito.pde_tipo_nota_credito_id'] = array('campo' => 'PdeTipoNotaCredito', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_nota_credito.pde_tipo_origen_nota_credito_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_nota_credito.pde_tipo_origen_nota_credito_id');
	$o = PdeTipoOrigenNotaCredito::getOxId($criterio->getValorDeCampo('pde_nota_credito.pde_tipo_origen_nota_credito_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('pde_nota_credito.pde_tipo_origen_nota_credito_id');

	$filtros['pde_nota_credito.pde_tipo_origen_nota_credito_id'] = array('campo' => 'PdeTipoOrigenNotaCredito', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_nota_credito.gral_condicion_iva_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_nota_credito.gral_condicion_iva_id');
	$o = GralCondicionIva::getOxId($criterio->getValorDeCampo('pde_nota_credito.gral_condicion_iva_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('pde_nota_credito.gral_condicion_iva_id');

	$filtros['pde_nota_credito.gral_condicion_iva_id'] = array('campo' => 'GralCondicionIva', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_nota_credito.gral_tipo_personeria_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_nota_credito.gral_tipo_personeria_id');
	$o = GralTipoPersoneria::getOxId($criterio->getValorDeCampo('pde_nota_credito.gral_tipo_personeria_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('pde_nota_credito.gral_tipo_personeria_id');

	$filtros['pde_nota_credito.gral_tipo_personeria_id'] = array('campo' => 'GralTipoPersoneria', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_nota_credito.gral_empresa_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_nota_credito.gral_empresa_id');
	$o = GralEmpresa::getOxId($criterio->getValorDeCampo('pde_nota_credito.gral_empresa_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('pde_nota_credito.gral_empresa_id');

	$filtros['pde_nota_credito.gral_empresa_id'] = array('campo' => 'GralEmpresa', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_nota_credito.pde_centro_pedido_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_nota_credito.pde_centro_pedido_id');
	$o = PdeCentroPedido::getOxId($criterio->getValorDeCampo('pde_nota_credito.pde_centro_pedido_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('pde_nota_credito.pde_centro_pedido_id');

	$filtros['pde_nota_credito.pde_centro_pedido_id'] = array('campo' => 'PdeCentroPedido', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_nota_credito.pde_nota_credito_tipo_estado_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_nota_credito.pde_nota_credito_tipo_estado_id');
	$o = PdeNotaCreditoTipoEstado::getOxId($criterio->getValorDeCampo('pde_nota_credito.pde_nota_credito_tipo_estado_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('pde_nota_credito.pde_nota_credito_tipo_estado_id');

	$filtros['pde_nota_credito.pde_nota_credito_tipo_estado_id'] = array('campo' => 'PdeNotaCreditoTipoEstado', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_nota_credito.gral_fp_forma_pago_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_nota_credito.gral_fp_forma_pago_id');
	$o = GralFpFormaPago::getOxId($criterio->getValorDeCampo('pde_nota_credito.gral_fp_forma_pago_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('pde_nota_credito.gral_fp_forma_pago_id');

	$filtros['pde_nota_credito.gral_fp_forma_pago_id'] = array('campo' => 'GralFpFormaPago', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_nota_credito.gral_actividad_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_nota_credito.gral_actividad_id');
	$o = GralActividad::getOxId($criterio->getValorDeCampo('pde_nota_credito.gral_actividad_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('pde_nota_credito.gral_actividad_id');

	$filtros['pde_nota_credito.gral_actividad_id'] = array('campo' => 'GralActividad', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_nota_credito.gral_escenario_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_nota_credito.gral_escenario_id');
	$o = GralEscenario::getOxId($criterio->getValorDeCampo('pde_nota_credito.gral_escenario_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('pde_nota_credito.gral_escenario_id');

	$filtros['pde_nota_credito.gral_escenario_id'] = array('campo' => 'GralEscenario', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_nota_credito.numero_punto_venta') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_nota_credito.numero_punto_venta');
	$comparador = $criterio->getComparadorDeCampo('pde_nota_credito.numero_punto_venta');

	$filtros['pde_nota_credito.numero_punto_venta'] = array('campo' => 'Numero de Pto Vta', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_nota_credito.numero_nota_credito') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_nota_credito.numero_nota_credito');
	$comparador = $criterio->getComparadorDeCampo('pde_nota_credito.numero_nota_credito');

	$filtros['pde_nota_credito.numero_nota_credito'] = array('campo' => 'Numero de Nota de Credito', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_nota_credito.numero_nota_credito_completo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_nota_credito.numero_nota_credito_completo');
	$comparador = $criterio->getComparadorDeCampo('pde_nota_credito.numero_nota_credito_completo');

	$filtros['pde_nota_credito.numero_nota_credito_completo'] = array('campo' => 'Numero de Nota de Credito Completo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_nota_credito.cae') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_nota_credito.cae');
	$comparador = $criterio->getComparadorDeCampo('pde_nota_credito.cae');

	$filtros['pde_nota_credito.cae'] = array('campo' => 'Cae', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_nota_credito.numero_despacho') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_nota_credito.numero_despacho');
	$comparador = $criterio->getComparadorDeCampo('pde_nota_credito.numero_despacho');

	$filtros['pde_nota_credito.numero_despacho'] = array('campo' => 'Numero de Despacho', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_nota_credito.fecha_emision') != ''){
	$valor = Gral::getFechaToWeb($valor = $criterio->getValorDeCampo('pde_nota_credito.fecha_emision'));
	$comparador = $criterio->getComparadorDeCampo('pde_nota_credito.fecha_emision');

	$filtros['pde_nota_credito.fecha_emision'] = array('campo' => 'Fecha de Emision', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_nota_credito.fecha_vencimiento') != ''){
	$valor = Gral::getFechaToWeb($valor = $criterio->getValorDeCampo('pde_nota_credito.fecha_vencimiento'));
	$comparador = $criterio->getComparadorDeCampo('pde_nota_credito.fecha_vencimiento');

	$filtros['pde_nota_credito.fecha_vencimiento'] = array('campo' => 'Fecha de Vencimiento', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_nota_credito.persona_descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_nota_credito.persona_descripcion');
	$comparador = $criterio->getComparadorDeCampo('pde_nota_credito.persona_descripcion');

	$filtros['pde_nota_credito.persona_descripcion'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_nota_credito.razon_social') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_nota_credito.razon_social');
	$comparador = $criterio->getComparadorDeCampo('pde_nota_credito.razon_social');

	$filtros['pde_nota_credito.razon_social'] = array('campo' => 'Razon Social', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_nota_credito.domicilio_legal') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_nota_credito.domicilio_legal');
	$comparador = $criterio->getComparadorDeCampo('pde_nota_credito.domicilio_legal');

	$filtros['pde_nota_credito.domicilio_legal'] = array('campo' => 'Domicilio Legal', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_nota_credito.cuit') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_nota_credito.cuit');
	$comparador = $criterio->getComparadorDeCampo('pde_nota_credito.cuit');

	$filtros['pde_nota_credito.cuit'] = array('campo' => 'CUIT', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_nota_credito.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_nota_credito.codigo');
	$comparador = $criterio->getComparadorDeCampo('pde_nota_credito.codigo');

	$filtros['pde_nota_credito.codigo'] = array('campo' => 'Codigo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_nota_credito.anio') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_nota_credito.anio');
	$comparador = $criterio->getComparadorDeCampo('pde_nota_credito.anio');

	$filtros['pde_nota_credito.anio'] = array('campo' => 'Anio', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_nota_credito.gral_mes_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_nota_credito.gral_mes_id');
	$o = GralMes::getOxId($criterio->getValorDeCampo('pde_nota_credito.gral_mes_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('pde_nota_credito.gral_mes_id');

	$filtros['pde_nota_credito.gral_mes_id'] = array('campo' => 'GralMes', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_nota_credito.cntb_diario_asiento_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_nota_credito.cntb_diario_asiento_id');
	$o = CntbDiarioAsiento::getOxId($criterio->getValorDeCampo('pde_nota_credito.cntb_diario_asiento_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('pde_nota_credito.cntb_diario_asiento_id');

	$filtros['pde_nota_credito.cntb_diario_asiento_id'] = array('campo' => 'CntbDiarioAsiento', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_nota_credito.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_nota_credito.observacion');
	$comparador = $criterio->getComparadorDeCampo('pde_nota_credito.observacion');

	$filtros['pde_nota_credito.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_nota_credito.nota_interna') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_nota_credito.nota_interna');
	$comparador = $criterio->getComparadorDeCampo('pde_nota_credito.nota_interna');

	$filtros['pde_nota_credito.nota_interna'] = array('campo' => 'Nota Interna', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_nota_credito.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_nota_credito.orden');
	$comparador = $criterio->getComparadorDeCampo('pde_nota_credito.orden');

	$filtros['pde_nota_credito.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_nota_credito.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_nota_credito.estado');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('pde_nota_credito.estado'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('pde_nota_credito.estado');

	$filtros['pde_nota_credito.estado'] = array('campo' => 'Estado', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_nota_credito.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_nota_credito.creado');
	$comparador = $criterio->getComparadorDeCampo('pde_nota_credito.creado');

	$filtros['pde_nota_credito.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_nota_credito.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_nota_credito.creado_por');
	$comparador = $criterio->getComparadorDeCampo('pde_nota_credito.creado_por');

	$filtros['pde_nota_credito.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_nota_credito.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_nota_credito.modificado');
	$comparador = $criterio->getComparadorDeCampo('pde_nota_credito.modificado');

	$filtros['pde_nota_credito.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_nota_credito.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_nota_credito.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('pde_nota_credito.modificado_por');

	$filtros['pde_nota_credito.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

