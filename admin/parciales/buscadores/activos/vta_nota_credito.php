<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['vta_nota_credito.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('vta_nota_credito.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_nota_credito.id');
	$comparador = $criterio->getComparadorDeCampo('vta_nota_credito.id');

	$filtros['vta_nota_credito.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_nota_credito.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_nota_credito.descripcion');
	$comparador = $criterio->getComparadorDeCampo('vta_nota_credito.descripcion');

	$filtros['vta_nota_credito.descripcion'] = array('campo' => 'Descripcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_nota_credito.cli_cliente_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_nota_credito.cli_cliente_id');
	$o = CliCliente::getOxId($criterio->getValorDeCampo('vta_nota_credito.cli_cliente_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('vta_nota_credito.cli_cliente_id');

	$filtros['vta_nota_credito.cli_cliente_id'] = array('campo' => 'CliCliente', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_nota_credito.vta_tipo_nota_credito_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_nota_credito.vta_tipo_nota_credito_id');
	$o = VtaTipoNotaCredito::getOxId($criterio->getValorDeCampo('vta_nota_credito.vta_tipo_nota_credito_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('vta_nota_credito.vta_tipo_nota_credito_id');

	$filtros['vta_nota_credito.vta_tipo_nota_credito_id'] = array('campo' => 'VtaTipoNotaCredito', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_nota_credito.vta_tipo_origen_nota_credito_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_nota_credito.vta_tipo_origen_nota_credito_id');
	$o = VtaTipoOrigenNotaCredito::getOxId($criterio->getValorDeCampo('vta_nota_credito.vta_tipo_origen_nota_credito_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('vta_nota_credito.vta_tipo_origen_nota_credito_id');

	$filtros['vta_nota_credito.vta_tipo_origen_nota_credito_id'] = array('campo' => 'VtaTipoOrigenNotaCredito', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_nota_credito.gral_condicion_iva_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_nota_credito.gral_condicion_iva_id');
	$o = GralCondicionIva::getOxId($criterio->getValorDeCampo('vta_nota_credito.gral_condicion_iva_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('vta_nota_credito.gral_condicion_iva_id');

	$filtros['vta_nota_credito.gral_condicion_iva_id'] = array('campo' => 'GralCondicionIva', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_nota_credito.gral_tipo_personeria_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_nota_credito.gral_tipo_personeria_id');
	$o = GralTipoPersoneria::getOxId($criterio->getValorDeCampo('vta_nota_credito.gral_tipo_personeria_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('vta_nota_credito.gral_tipo_personeria_id');

	$filtros['vta_nota_credito.gral_tipo_personeria_id'] = array('campo' => 'GralTipoPersoneria', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_nota_credito.gral_empresa_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_nota_credito.gral_empresa_id');
	$o = GralEmpresa::getOxId($criterio->getValorDeCampo('vta_nota_credito.gral_empresa_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('vta_nota_credito.gral_empresa_id');

	$filtros['vta_nota_credito.gral_empresa_id'] = array('campo' => 'GralEmpresa', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_nota_credito.vta_nota_credito_tipo_estado_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_nota_credito.vta_nota_credito_tipo_estado_id');
	$o = VtaNotaCreditoTipoEstado::getOxId($criterio->getValorDeCampo('vta_nota_credito.vta_nota_credito_tipo_estado_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('vta_nota_credito.vta_nota_credito_tipo_estado_id');

	$filtros['vta_nota_credito.vta_nota_credito_tipo_estado_id'] = array('campo' => 'VtaNotaCreditoTipoEstado', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_nota_credito.vta_punto_venta_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_nota_credito.vta_punto_venta_id');
	$o = VtaPuntoVenta::getOxId($criterio->getValorDeCampo('vta_nota_credito.vta_punto_venta_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('vta_nota_credito.vta_punto_venta_id');

	$filtros['vta_nota_credito.vta_punto_venta_id'] = array('campo' => 'VtaPuntoVenta', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_nota_credito.gral_fp_forma_pago_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_nota_credito.gral_fp_forma_pago_id');
	$o = GralFpFormaPago::getOxId($criterio->getValorDeCampo('vta_nota_credito.gral_fp_forma_pago_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('vta_nota_credito.gral_fp_forma_pago_id');

	$filtros['vta_nota_credito.gral_fp_forma_pago_id'] = array('campo' => 'GralFpFormaPago', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_nota_credito.vta_preventista_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_nota_credito.vta_preventista_id');
	$o = VtaPreventista::getOxId($criterio->getValorDeCampo('vta_nota_credito.vta_preventista_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('vta_nota_credito.vta_preventista_id');

	$filtros['vta_nota_credito.vta_preventista_id'] = array('campo' => 'VtaPreventista', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_nota_credito.gral_actividad_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_nota_credito.gral_actividad_id');
	$o = GralActividad::getOxId($criterio->getValorDeCampo('vta_nota_credito.gral_actividad_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('vta_nota_credito.gral_actividad_id');

	$filtros['vta_nota_credito.gral_actividad_id'] = array('campo' => 'GralActividad', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_nota_credito.gral_escenario_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_nota_credito.gral_escenario_id');
	$o = GralEscenario::getOxId($criterio->getValorDeCampo('vta_nota_credito.gral_escenario_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('vta_nota_credito.gral_escenario_id');

	$filtros['vta_nota_credito.gral_escenario_id'] = array('campo' => 'GralEscenario', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_nota_credito.numero_punto_venta') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_nota_credito.numero_punto_venta');
	$comparador = $criterio->getComparadorDeCampo('vta_nota_credito.numero_punto_venta');

	$filtros['vta_nota_credito.numero_punto_venta'] = array('campo' => 'Numero de Pto Vta', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_nota_credito.numero_nota_credito') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_nota_credito.numero_nota_credito');
	$comparador = $criterio->getComparadorDeCampo('vta_nota_credito.numero_nota_credito');

	$filtros['vta_nota_credito.numero_nota_credito'] = array('campo' => 'Numero de Nota de Credito', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_nota_credito.numero_nota_credito_completo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_nota_credito.numero_nota_credito_completo');
	$comparador = $criterio->getComparadorDeCampo('vta_nota_credito.numero_nota_credito_completo');

	$filtros['vta_nota_credito.numero_nota_credito_completo'] = array('campo' => 'Numero de Nota de Credito Completo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_nota_credito.cae') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_nota_credito.cae');
	$comparador = $criterio->getComparadorDeCampo('vta_nota_credito.cae');

	$filtros['vta_nota_credito.cae'] = array('campo' => 'Cae', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_nota_credito.fecha_emision') != ''){
	$valor = Gral::getFechaToWeb($valor = $criterio->getValorDeCampo('vta_nota_credito.fecha_emision'));
	$comparador = $criterio->getComparadorDeCampo('vta_nota_credito.fecha_emision');

	$filtros['vta_nota_credito.fecha_emision'] = array('campo' => 'Fecha de Emision', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_nota_credito.fecha_vencimiento') != ''){
	$valor = Gral::getFechaToWeb($valor = $criterio->getValorDeCampo('vta_nota_credito.fecha_vencimiento'));
	$comparador = $criterio->getComparadorDeCampo('vta_nota_credito.fecha_vencimiento');

	$filtros['vta_nota_credito.fecha_vencimiento'] = array('campo' => 'Fecha de Vencimiento', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_nota_credito.gral_tipo_documento_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_nota_credito.gral_tipo_documento_id');
	$o = GralTipoDocumento::getOxId($criterio->getValorDeCampo('vta_nota_credito.gral_tipo_documento_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('vta_nota_credito.gral_tipo_documento_id');

	$filtros['vta_nota_credito.gral_tipo_documento_id'] = array('campo' => 'GralTipoDocumento', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_nota_credito.persona_descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_nota_credito.persona_descripcion');
	$comparador = $criterio->getComparadorDeCampo('vta_nota_credito.persona_descripcion');

	$filtros['vta_nota_credito.persona_descripcion'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_nota_credito.persona_documento') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_nota_credito.persona_documento');
	$comparador = $criterio->getComparadorDeCampo('vta_nota_credito.persona_documento');

	$filtros['vta_nota_credito.persona_documento'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_nota_credito.persona_email') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_nota_credito.persona_email');
	$comparador = $criterio->getComparadorDeCampo('vta_nota_credito.persona_email');

	$filtros['vta_nota_credito.persona_email'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_nota_credito.razon_social') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_nota_credito.razon_social');
	$comparador = $criterio->getComparadorDeCampo('vta_nota_credito.razon_social');

	$filtros['vta_nota_credito.razon_social'] = array('campo' => 'Razon Social', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_nota_credito.domicilio_legal') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_nota_credito.domicilio_legal');
	$comparador = $criterio->getComparadorDeCampo('vta_nota_credito.domicilio_legal');

	$filtros['vta_nota_credito.domicilio_legal'] = array('campo' => 'Domicilio Legal', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_nota_credito.cuit') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_nota_credito.cuit');
	$comparador = $criterio->getComparadorDeCampo('vta_nota_credito.cuit');

	$filtros['vta_nota_credito.cuit'] = array('campo' => 'CUIT', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_nota_credito.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_nota_credito.codigo');
	$comparador = $criterio->getComparadorDeCampo('vta_nota_credito.codigo');

	$filtros['vta_nota_credito.codigo'] = array('campo' => 'Codigo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_nota_credito.nota_publica') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_nota_credito.nota_publica');
	$comparador = $criterio->getComparadorDeCampo('vta_nota_credito.nota_publica');

	$filtros['vta_nota_credito.nota_publica'] = array('campo' => 'Nota Publica', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_nota_credito.anio') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_nota_credito.anio');
	$comparador = $criterio->getComparadorDeCampo('vta_nota_credito.anio');

	$filtros['vta_nota_credito.anio'] = array('campo' => 'Anio', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_nota_credito.gral_mes_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_nota_credito.gral_mes_id');
	$o = GralMes::getOxId($criterio->getValorDeCampo('vta_nota_credito.gral_mes_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('vta_nota_credito.gral_mes_id');

	$filtros['vta_nota_credito.gral_mes_id'] = array('campo' => 'GralMes', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_nota_credito.cntb_diario_asiento_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_nota_credito.cntb_diario_asiento_id');
	$o = CntbDiarioAsiento::getOxId($criterio->getValorDeCampo('vta_nota_credito.cntb_diario_asiento_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('vta_nota_credito.cntb_diario_asiento_id');

	$filtros['vta_nota_credito.cntb_diario_asiento_id'] = array('campo' => 'CntbDiarioAsiento', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_nota_credito.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_nota_credito.observacion');
	$comparador = $criterio->getComparadorDeCampo('vta_nota_credito.observacion');

	$filtros['vta_nota_credito.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_nota_credito.nota_interna') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_nota_credito.nota_interna');
	$comparador = $criterio->getComparadorDeCampo('vta_nota_credito.nota_interna');

	$filtros['vta_nota_credito.nota_interna'] = array('campo' => 'Nota Interna', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_nota_credito.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_nota_credito.orden');
	$comparador = $criterio->getComparadorDeCampo('vta_nota_credito.orden');

	$filtros['vta_nota_credito.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_nota_credito.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_nota_credito.estado');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('vta_nota_credito.estado'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('vta_nota_credito.estado');

	$filtros['vta_nota_credito.estado'] = array('campo' => 'Estado', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_nota_credito.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_nota_credito.creado');
	$comparador = $criterio->getComparadorDeCampo('vta_nota_credito.creado');

	$filtros['vta_nota_credito.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_nota_credito.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_nota_credito.creado_por');
	$comparador = $criterio->getComparadorDeCampo('vta_nota_credito.creado_por');

	$filtros['vta_nota_credito.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_nota_credito.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_nota_credito.modificado');
	$comparador = $criterio->getComparadorDeCampo('vta_nota_credito.modificado');

	$filtros['vta_nota_credito.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_nota_credito.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_nota_credito.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('vta_nota_credito.modificado_por');

	$filtros['vta_nota_credito.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

