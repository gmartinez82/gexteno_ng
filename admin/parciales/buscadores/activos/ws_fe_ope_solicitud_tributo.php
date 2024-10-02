<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['ws_fe_ope_solicitud_tributo.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('ws_fe_ope_solicitud_tributo.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ws_fe_ope_solicitud_tributo.id');
	$comparador = $criterio->getComparadorDeCampo('ws_fe_ope_solicitud_tributo.id');

	$filtros['ws_fe_ope_solicitud_tributo.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ws_fe_ope_solicitud_tributo.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ws_fe_ope_solicitud_tributo.descripcion');
	$comparador = $criterio->getComparadorDeCampo('ws_fe_ope_solicitud_tributo.descripcion');

	$filtros['ws_fe_ope_solicitud_tributo.descripcion'] = array('campo' => 'Descripcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ws_fe_ope_solicitud_tributo.ws_fe_ope_solicitud_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ws_fe_ope_solicitud_tributo.ws_fe_ope_solicitud_id');
	$o = WsFeOpeSolicitud::getOxId($criterio->getValorDeCampo('ws_fe_ope_solicitud_tributo.ws_fe_ope_solicitud_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('ws_fe_ope_solicitud_tributo.ws_fe_ope_solicitud_id');

	$filtros['ws_fe_ope_solicitud_tributo.ws_fe_ope_solicitud_id'] = array('campo' => 'WsFeOpeSolicitud', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ws_fe_ope_solicitud_tributo.ws_fe_param_tipo_tributo_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ws_fe_ope_solicitud_tributo.ws_fe_param_tipo_tributo_id');
	$o = WsFeParamTipoTributo::getOxId($criterio->getValorDeCampo('ws_fe_ope_solicitud_tributo.ws_fe_param_tipo_tributo_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('ws_fe_ope_solicitud_tributo.ws_fe_param_tipo_tributo_id');

	$filtros['ws_fe_ope_solicitud_tributo.ws_fe_param_tipo_tributo_id'] = array('campo' => 'WsFeParamTipoTributo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ws_fe_ope_solicitud_tributo.ws_fe_afip_codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ws_fe_ope_solicitud_tributo.ws_fe_afip_codigo');
	$comparador = $criterio->getComparadorDeCampo('ws_fe_ope_solicitud_tributo.ws_fe_afip_codigo');

	$filtros['ws_fe_ope_solicitud_tributo.ws_fe_afip_codigo'] = array('campo' => 'Codigo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ws_fe_ope_solicitud_tributo.ws_fe_afip_descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ws_fe_ope_solicitud_tributo.ws_fe_afip_descripcion');
	$comparador = $criterio->getComparadorDeCampo('ws_fe_ope_solicitud_tributo.ws_fe_afip_descripcion');

	$filtros['ws_fe_ope_solicitud_tributo.ws_fe_afip_descripcion'] = array('campo' => 'Descripcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ws_fe_ope_solicitud_tributo.ws_fe_afip_base_imponible') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ws_fe_ope_solicitud_tributo.ws_fe_afip_base_imponible');
	$comparador = $criterio->getComparadorDeCampo('ws_fe_ope_solicitud_tributo.ws_fe_afip_base_imponible');

	$filtros['ws_fe_ope_solicitud_tributo.ws_fe_afip_base_imponible'] = array('campo' => 'Base Imponible', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ws_fe_ope_solicitud_tributo.ws_fe_afip_alicuota') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ws_fe_ope_solicitud_tributo.ws_fe_afip_alicuota');
	$comparador = $criterio->getComparadorDeCampo('ws_fe_ope_solicitud_tributo.ws_fe_afip_alicuota');

	$filtros['ws_fe_ope_solicitud_tributo.ws_fe_afip_alicuota'] = array('campo' => 'Alicuota', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ws_fe_ope_solicitud_tributo.ws_fe_afip_importe') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ws_fe_ope_solicitud_tributo.ws_fe_afip_importe');
	$comparador = $criterio->getComparadorDeCampo('ws_fe_ope_solicitud_tributo.ws_fe_afip_importe');

	$filtros['ws_fe_ope_solicitud_tributo.ws_fe_afip_importe'] = array('campo' => 'Importe', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ws_fe_ope_solicitud_tributo.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ws_fe_ope_solicitud_tributo.codigo');
	$comparador = $criterio->getComparadorDeCampo('ws_fe_ope_solicitud_tributo.codigo');

	$filtros['ws_fe_ope_solicitud_tributo.codigo'] = array('campo' => 'Codigo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ws_fe_ope_solicitud_tributo.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ws_fe_ope_solicitud_tributo.observacion');
	$comparador = $criterio->getComparadorDeCampo('ws_fe_ope_solicitud_tributo.observacion');

	$filtros['ws_fe_ope_solicitud_tributo.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ws_fe_ope_solicitud_tributo.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ws_fe_ope_solicitud_tributo.creado');
	$comparador = $criterio->getComparadorDeCampo('ws_fe_ope_solicitud_tributo.creado');

	$filtros['ws_fe_ope_solicitud_tributo.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ws_fe_ope_solicitud_tributo.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ws_fe_ope_solicitud_tributo.creado_por');
	$comparador = $criterio->getComparadorDeCampo('ws_fe_ope_solicitud_tributo.creado_por');

	$filtros['ws_fe_ope_solicitud_tributo.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ws_fe_ope_solicitud_tributo.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ws_fe_ope_solicitud_tributo.modificado');
	$comparador = $criterio->getComparadorDeCampo('ws_fe_ope_solicitud_tributo.modificado');

	$filtros['ws_fe_ope_solicitud_tributo.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ws_fe_ope_solicitud_tributo.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ws_fe_ope_solicitud_tributo.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('ws_fe_ope_solicitud_tributo.modificado_por');

	$filtros['ws_fe_ope_solicitud_tributo.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

