<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['ws_fe_ope_solicitud_respuesta.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('ws_fe_ope_solicitud_respuesta.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ws_fe_ope_solicitud_respuesta.id');
	$comparador = $criterio->getComparadorDeCampo('ws_fe_ope_solicitud_respuesta.id');

	$filtros['ws_fe_ope_solicitud_respuesta.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ws_fe_ope_solicitud_respuesta.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ws_fe_ope_solicitud_respuesta.descripcion');
	$comparador = $criterio->getComparadorDeCampo('ws_fe_ope_solicitud_respuesta.descripcion');

	$filtros['ws_fe_ope_solicitud_respuesta.descripcion'] = array('campo' => 'Descripcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ws_fe_ope_solicitud_respuesta.ws_fe_ope_solicitud_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ws_fe_ope_solicitud_respuesta.ws_fe_ope_solicitud_id');
	$o = WsFeOpeSolicitud::getOxId($criterio->getValorDeCampo('ws_fe_ope_solicitud_respuesta.ws_fe_ope_solicitud_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('ws_fe_ope_solicitud_respuesta.ws_fe_ope_solicitud_id');

	$filtros['ws_fe_ope_solicitud_respuesta.ws_fe_ope_solicitud_id'] = array('campo' => 'WsFeSolicitud', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ws_fe_ope_solicitud_respuesta.ws_fe_afip_cuit') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ws_fe_ope_solicitud_respuesta.ws_fe_afip_cuit');
	$comparador = $criterio->getComparadorDeCampo('ws_fe_ope_solicitud_respuesta.ws_fe_afip_cuit');

	$filtros['ws_fe_ope_solicitud_respuesta.ws_fe_afip_cuit'] = array('campo' => 'Cuit', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ws_fe_ope_solicitud_respuesta.ws_fe_afip_punto_venta') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ws_fe_ope_solicitud_respuesta.ws_fe_afip_punto_venta');
	$comparador = $criterio->getComparadorDeCampo('ws_fe_ope_solicitud_respuesta.ws_fe_afip_punto_venta');

	$filtros['ws_fe_ope_solicitud_respuesta.ws_fe_afip_punto_venta'] = array('campo' => 'Punto de Venta', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ws_fe_ope_solicitud_respuesta.ws_fe_afip_tipo_comprobante') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ws_fe_ope_solicitud_respuesta.ws_fe_afip_tipo_comprobante');
	$comparador = $criterio->getComparadorDeCampo('ws_fe_ope_solicitud_respuesta.ws_fe_afip_tipo_comprobante');

	$filtros['ws_fe_ope_solicitud_respuesta.ws_fe_afip_tipo_comprobante'] = array('campo' => 'Tipo de Comprobante', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ws_fe_ope_solicitud_respuesta.ws_fe_afip_fecha_proceso') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ws_fe_ope_solicitud_respuesta.ws_fe_afip_fecha_proceso');
	$comparador = $criterio->getComparadorDeCampo('ws_fe_ope_solicitud_respuesta.ws_fe_afip_fecha_proceso');

	$filtros['ws_fe_ope_solicitud_respuesta.ws_fe_afip_fecha_proceso'] = array('campo' => 'Fecha de Proceso', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ws_fe_ope_solicitud_respuesta.ws_fe_afip_cantidad_registro') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ws_fe_ope_solicitud_respuesta.ws_fe_afip_cantidad_registro');
	$comparador = $criterio->getComparadorDeCampo('ws_fe_ope_solicitud_respuesta.ws_fe_afip_cantidad_registro');

	$filtros['ws_fe_ope_solicitud_respuesta.ws_fe_afip_cantidad_registro'] = array('campo' => 'Cantidad de Registros', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ws_fe_ope_solicitud_respuesta.ws_fe_afip_resultado_cabecera') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ws_fe_ope_solicitud_respuesta.ws_fe_afip_resultado_cabecera');
	$comparador = $criterio->getComparadorDeCampo('ws_fe_ope_solicitud_respuesta.ws_fe_afip_resultado_cabecera');

	$filtros['ws_fe_ope_solicitud_respuesta.ws_fe_afip_resultado_cabecera'] = array('campo' => 'Resultado de la Cabecera', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ws_fe_ope_solicitud_respuesta.ws_fe_afip_reproceso') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ws_fe_ope_solicitud_respuesta.ws_fe_afip_reproceso');
	$comparador = $criterio->getComparadorDeCampo('ws_fe_ope_solicitud_respuesta.ws_fe_afip_reproceso');

	$filtros['ws_fe_ope_solicitud_respuesta.ws_fe_afip_reproceso'] = array('campo' => 'Reproceso', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ws_fe_ope_solicitud_respuesta.ws_fe_afip_tipo_concepto') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ws_fe_ope_solicitud_respuesta.ws_fe_afip_tipo_concepto');
	$comparador = $criterio->getComparadorDeCampo('ws_fe_ope_solicitud_respuesta.ws_fe_afip_tipo_concepto');

	$filtros['ws_fe_ope_solicitud_respuesta.ws_fe_afip_tipo_concepto'] = array('campo' => 'Tipo de Concepto', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ws_fe_ope_solicitud_respuesta.ws_fe_afip_tipo_documento') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ws_fe_ope_solicitud_respuesta.ws_fe_afip_tipo_documento');
	$comparador = $criterio->getComparadorDeCampo('ws_fe_ope_solicitud_respuesta.ws_fe_afip_tipo_documento');

	$filtros['ws_fe_ope_solicitud_respuesta.ws_fe_afip_tipo_documento'] = array('campo' => 'Tipo de Documento', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ws_fe_ope_solicitud_respuesta.ws_fe_afip_numero_documento') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ws_fe_ope_solicitud_respuesta.ws_fe_afip_numero_documento');
	$comparador = $criterio->getComparadorDeCampo('ws_fe_ope_solicitud_respuesta.ws_fe_afip_numero_documento');

	$filtros['ws_fe_ope_solicitud_respuesta.ws_fe_afip_numero_documento'] = array('campo' => 'Numero de Documento', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ws_fe_ope_solicitud_respuesta.ws_fe_afip_comprobante_desde') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ws_fe_ope_solicitud_respuesta.ws_fe_afip_comprobante_desde');
	$comparador = $criterio->getComparadorDeCampo('ws_fe_ope_solicitud_respuesta.ws_fe_afip_comprobante_desde');

	$filtros['ws_fe_ope_solicitud_respuesta.ws_fe_afip_comprobante_desde'] = array('campo' => 'Comprobante Desde', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ws_fe_ope_solicitud_respuesta.ws_fe_afip_comprobante_hasta') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ws_fe_ope_solicitud_respuesta.ws_fe_afip_comprobante_hasta');
	$comparador = $criterio->getComparadorDeCampo('ws_fe_ope_solicitud_respuesta.ws_fe_afip_comprobante_hasta');

	$filtros['ws_fe_ope_solicitud_respuesta.ws_fe_afip_comprobante_hasta'] = array('campo' => 'Comprobante Hasta', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ws_fe_ope_solicitud_respuesta.ws_fe_afip_comprobante_fecha') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ws_fe_ope_solicitud_respuesta.ws_fe_afip_comprobante_fecha');
	$comparador = $criterio->getComparadorDeCampo('ws_fe_ope_solicitud_respuesta.ws_fe_afip_comprobante_fecha');

	$filtros['ws_fe_ope_solicitud_respuesta.ws_fe_afip_comprobante_fecha'] = array('campo' => 'Comprobante Fecha', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ws_fe_ope_solicitud_respuesta.ws_fe_afip_resultado_detalle') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ws_fe_ope_solicitud_respuesta.ws_fe_afip_resultado_detalle');
	$comparador = $criterio->getComparadorDeCampo('ws_fe_ope_solicitud_respuesta.ws_fe_afip_resultado_detalle');

	$filtros['ws_fe_ope_solicitud_respuesta.ws_fe_afip_resultado_detalle'] = array('campo' => 'Resultado del Detalle', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ws_fe_ope_solicitud_respuesta.ws_fe_afip_cae') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ws_fe_ope_solicitud_respuesta.ws_fe_afip_cae');
	$comparador = $criterio->getComparadorDeCampo('ws_fe_ope_solicitud_respuesta.ws_fe_afip_cae');

	$filtros['ws_fe_ope_solicitud_respuesta.ws_fe_afip_cae'] = array('campo' => 'Cae', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ws_fe_ope_solicitud_respuesta.ws_fe_afip_cae_fecha_vencimiento') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ws_fe_ope_solicitud_respuesta.ws_fe_afip_cae_fecha_vencimiento');
	$comparador = $criterio->getComparadorDeCampo('ws_fe_ope_solicitud_respuesta.ws_fe_afip_cae_fecha_vencimiento');

	$filtros['ws_fe_ope_solicitud_respuesta.ws_fe_afip_cae_fecha_vencimiento'] = array('campo' => 'Fecha de Vencimiento del CAE', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ws_fe_ope_solicitud_respuesta.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ws_fe_ope_solicitud_respuesta.observacion');
	$comparador = $criterio->getComparadorDeCampo('ws_fe_ope_solicitud_respuesta.observacion');

	$filtros['ws_fe_ope_solicitud_respuesta.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ws_fe_ope_solicitud_respuesta.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ws_fe_ope_solicitud_respuesta.orden');
	$comparador = $criterio->getComparadorDeCampo('ws_fe_ope_solicitud_respuesta.orden');

	$filtros['ws_fe_ope_solicitud_respuesta.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ws_fe_ope_solicitud_respuesta.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ws_fe_ope_solicitud_respuesta.estado');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('ws_fe_ope_solicitud_respuesta.estado'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('ws_fe_ope_solicitud_respuesta.estado');

	$filtros['ws_fe_ope_solicitud_respuesta.estado'] = array('campo' => 'Estado', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ws_fe_ope_solicitud_respuesta.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ws_fe_ope_solicitud_respuesta.creado');
	$comparador = $criterio->getComparadorDeCampo('ws_fe_ope_solicitud_respuesta.creado');

	$filtros['ws_fe_ope_solicitud_respuesta.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ws_fe_ope_solicitud_respuesta.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ws_fe_ope_solicitud_respuesta.creado_por');
	$comparador = $criterio->getComparadorDeCampo('ws_fe_ope_solicitud_respuesta.creado_por');

	$filtros['ws_fe_ope_solicitud_respuesta.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ws_fe_ope_solicitud_respuesta.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ws_fe_ope_solicitud_respuesta.modificado');
	$comparador = $criterio->getComparadorDeCampo('ws_fe_ope_solicitud_respuesta.modificado');

	$filtros['ws_fe_ope_solicitud_respuesta.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ws_fe_ope_solicitud_respuesta.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ws_fe_ope_solicitud_respuesta.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('ws_fe_ope_solicitud_respuesta.modificado_por');

	$filtros['ws_fe_ope_solicitud_respuesta.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

