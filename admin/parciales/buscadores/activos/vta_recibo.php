<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['vta_recibo.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('vta_recibo.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_recibo.id');
	$comparador = $criterio->getComparadorDeCampo('vta_recibo.id');

	$filtros['vta_recibo.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_recibo.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_recibo.descripcion');
	$comparador = $criterio->getComparadorDeCampo('vta_recibo.descripcion');

	$filtros['vta_recibo.descripcion'] = array('campo' => 'Descripcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_recibo.cli_cliente_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_recibo.cli_cliente_id');
	$o = CliCliente::getOxId($criterio->getValorDeCampo('vta_recibo.cli_cliente_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('vta_recibo.cli_cliente_id');

	$filtros['vta_recibo.cli_cliente_id'] = array('campo' => 'CliCliente', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_recibo.vta_tipo_recibo_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_recibo.vta_tipo_recibo_id');
	$o = VtaTipoRecibo::getOxId($criterio->getValorDeCampo('vta_recibo.vta_tipo_recibo_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('vta_recibo.vta_tipo_recibo_id');

	$filtros['vta_recibo.vta_tipo_recibo_id'] = array('campo' => 'VtaTipoRecibo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_recibo.vta_tipo_origen_recibo_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_recibo.vta_tipo_origen_recibo_id');
	$o = VtaTipoOrigenRecibo::getOxId($criterio->getValorDeCampo('vta_recibo.vta_tipo_origen_recibo_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('vta_recibo.vta_tipo_origen_recibo_id');

	$filtros['vta_recibo.vta_tipo_origen_recibo_id'] = array('campo' => 'VtaTipoOrigenRecibo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_recibo.gral_condicion_iva_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_recibo.gral_condicion_iva_id');
	$o = GralCondicionIva::getOxId($criterio->getValorDeCampo('vta_recibo.gral_condicion_iva_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('vta_recibo.gral_condicion_iva_id');

	$filtros['vta_recibo.gral_condicion_iva_id'] = array('campo' => 'GralCondicionIva', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_recibo.gral_tipo_personeria_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_recibo.gral_tipo_personeria_id');
	$o = GralTipoPersoneria::getOxId($criterio->getValorDeCampo('vta_recibo.gral_tipo_personeria_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('vta_recibo.gral_tipo_personeria_id');

	$filtros['vta_recibo.gral_tipo_personeria_id'] = array('campo' => 'GralTipoPersoneria', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_recibo.gral_empresa_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_recibo.gral_empresa_id');
	$o = GralEmpresa::getOxId($criterio->getValorDeCampo('vta_recibo.gral_empresa_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('vta_recibo.gral_empresa_id');

	$filtros['vta_recibo.gral_empresa_id'] = array('campo' => 'GralEmpresa', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_recibo.vta_punto_venta_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_recibo.vta_punto_venta_id');
	$o = VtaPuntoVenta::getOxId($criterio->getValorDeCampo('vta_recibo.vta_punto_venta_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('vta_recibo.vta_punto_venta_id');

	$filtros['vta_recibo.vta_punto_venta_id'] = array('campo' => 'VtaPuntoVenta', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_recibo.vta_recibo_tipo_estado_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_recibo.vta_recibo_tipo_estado_id');
	$o = VtaReciboTipoEstado::getOxId($criterio->getValorDeCampo('vta_recibo.vta_recibo_tipo_estado_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('vta_recibo.vta_recibo_tipo_estado_id');

	$filtros['vta_recibo.vta_recibo_tipo_estado_id'] = array('campo' => 'VtaReciboTipoEstado', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_recibo.numero_punto_venta') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_recibo.numero_punto_venta');
	$comparador = $criterio->getComparadorDeCampo('vta_recibo.numero_punto_venta');

	$filtros['vta_recibo.numero_punto_venta'] = array('campo' => 'Numero de Pto Vta', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_recibo.numero_recibo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_recibo.numero_recibo');
	$comparador = $criterio->getComparadorDeCampo('vta_recibo.numero_recibo');

	$filtros['vta_recibo.numero_recibo'] = array('campo' => 'Numero de recibo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_recibo.numero_recibo_completo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_recibo.numero_recibo_completo');
	$comparador = $criterio->getComparadorDeCampo('vta_recibo.numero_recibo_completo');

	$filtros['vta_recibo.numero_recibo_completo'] = array('campo' => 'Numero de recibo Completo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_recibo.cae') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_recibo.cae');
	$comparador = $criterio->getComparadorDeCampo('vta_recibo.cae');

	$filtros['vta_recibo.cae'] = array('campo' => 'Cae', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_recibo.fecha_emision') != ''){
	$valor = Gral::getFechaToWeb($valor = $criterio->getValorDeCampo('vta_recibo.fecha_emision'));
	$comparador = $criterio->getComparadorDeCampo('vta_recibo.fecha_emision');

	$filtros['vta_recibo.fecha_emision'] = array('campo' => 'Fecha de Emision', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_recibo.gral_tipo_documento_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_recibo.gral_tipo_documento_id');
	$o = GralTipoDocumento::getOxId($criterio->getValorDeCampo('vta_recibo.gral_tipo_documento_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('vta_recibo.gral_tipo_documento_id');

	$filtros['vta_recibo.gral_tipo_documento_id'] = array('campo' => 'GralTipoDocumento', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_recibo.persona_descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_recibo.persona_descripcion');
	$comparador = $criterio->getComparadorDeCampo('vta_recibo.persona_descripcion');

	$filtros['vta_recibo.persona_descripcion'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_recibo.persona_documento') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_recibo.persona_documento');
	$comparador = $criterio->getComparadorDeCampo('vta_recibo.persona_documento');

	$filtros['vta_recibo.persona_documento'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_recibo.persona_email') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_recibo.persona_email');
	$comparador = $criterio->getComparadorDeCampo('vta_recibo.persona_email');

	$filtros['vta_recibo.persona_email'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_recibo.razon_social') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_recibo.razon_social');
	$comparador = $criterio->getComparadorDeCampo('vta_recibo.razon_social');

	$filtros['vta_recibo.razon_social'] = array('campo' => 'Razon Social', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_recibo.domicilio_legal') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_recibo.domicilio_legal');
	$comparador = $criterio->getComparadorDeCampo('vta_recibo.domicilio_legal');

	$filtros['vta_recibo.domicilio_legal'] = array('campo' => 'Domicilio Legal', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_recibo.cuit') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_recibo.cuit');
	$comparador = $criterio->getComparadorDeCampo('vta_recibo.cuit');

	$filtros['vta_recibo.cuit'] = array('campo' => 'CUIT', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_recibo.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_recibo.codigo');
	$comparador = $criterio->getComparadorDeCampo('vta_recibo.codigo');

	$filtros['vta_recibo.codigo'] = array('campo' => 'Codigo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_recibo.vta_presupuesto_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_recibo.vta_presupuesto_id');
	$o = VtaPresupuesto::getOxId($criterio->getValorDeCampo('vta_recibo.vta_presupuesto_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('vta_recibo.vta_presupuesto_id');

	$filtros['vta_recibo.vta_presupuesto_id'] = array('campo' => 'VtaPresupuesto', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_recibo.vta_preventista_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_recibo.vta_preventista_id');
	$o = VtaPreventista::getOxId($criterio->getValorDeCampo('vta_recibo.vta_preventista_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('vta_recibo.vta_preventista_id');

	$filtros['vta_recibo.vta_preventista_id'] = array('campo' => 'VtaPreventista', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_recibo.anio') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_recibo.anio');
	$comparador = $criterio->getComparadorDeCampo('vta_recibo.anio');

	$filtros['vta_recibo.anio'] = array('campo' => 'Anio', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_recibo.gral_mes_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_recibo.gral_mes_id');
	$o = GralMes::getOxId($criterio->getValorDeCampo('vta_recibo.gral_mes_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('vta_recibo.gral_mes_id');

	$filtros['vta_recibo.gral_mes_id'] = array('campo' => 'GralMes', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_recibo.cntb_diario_asiento_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_recibo.cntb_diario_asiento_id');
	$o = CntbDiarioAsiento::getOxId($criterio->getValorDeCampo('vta_recibo.cntb_diario_asiento_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('vta_recibo.cntb_diario_asiento_id');

	$filtros['vta_recibo.cntb_diario_asiento_id'] = array('campo' => 'CntbDiarioAsiento', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_recibo.fnd_caja_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_recibo.fnd_caja_id');
	$comparador = $criterio->getComparadorDeCampo('vta_recibo.fnd_caja_id');

	$filtros['vta_recibo.fnd_caja_id'] = array('campo' => 'FndCaja', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_recibo.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_recibo.observacion');
	$comparador = $criterio->getComparadorDeCampo('vta_recibo.observacion');

	$filtros['vta_recibo.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_recibo.nota_interna') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_recibo.nota_interna');
	$comparador = $criterio->getComparadorDeCampo('vta_recibo.nota_interna');

	$filtros['vta_recibo.nota_interna'] = array('campo' => 'Nota Interna', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_recibo.nota_publica') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_recibo.nota_publica');
	$comparador = $criterio->getComparadorDeCampo('vta_recibo.nota_publica');

	$filtros['vta_recibo.nota_publica'] = array('campo' => 'Nota Publica', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_recibo.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_recibo.orden');
	$comparador = $criterio->getComparadorDeCampo('vta_recibo.orden');

	$filtros['vta_recibo.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_recibo.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_recibo.estado');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('vta_recibo.estado'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('vta_recibo.estado');

	$filtros['vta_recibo.estado'] = array('campo' => 'Estado', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_recibo.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_recibo.creado');
	$comparador = $criterio->getComparadorDeCampo('vta_recibo.creado');

	$filtros['vta_recibo.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_recibo.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_recibo.creado_por');
	$comparador = $criterio->getComparadorDeCampo('vta_recibo.creado_por');

	$filtros['vta_recibo.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_recibo.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_recibo.modificado');
	$comparador = $criterio->getComparadorDeCampo('vta_recibo.modificado');

	$filtros['vta_recibo.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_recibo.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_recibo.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('vta_recibo.modificado_por');

	$filtros['vta_recibo.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

