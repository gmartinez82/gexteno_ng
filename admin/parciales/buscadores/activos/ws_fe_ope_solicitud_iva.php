<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['ws_fe_ope_solicitud_iva.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('ws_fe_ope_solicitud_iva.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ws_fe_ope_solicitud_iva.id');
	$comparador = $criterio->getComparadorDeCampo('ws_fe_ope_solicitud_iva.id');

	$filtros['ws_fe_ope_solicitud_iva.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ws_fe_ope_solicitud_iva.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ws_fe_ope_solicitud_iva.descripcion');
	$comparador = $criterio->getComparadorDeCampo('ws_fe_ope_solicitud_iva.descripcion');

	$filtros['ws_fe_ope_solicitud_iva.descripcion'] = array('campo' => 'Descripcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ws_fe_ope_solicitud_iva.ws_fe_ope_solicitud_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ws_fe_ope_solicitud_iva.ws_fe_ope_solicitud_id');
	$o = WsFeOpeSolicitud::getOxId($criterio->getValorDeCampo('ws_fe_ope_solicitud_iva.ws_fe_ope_solicitud_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('ws_fe_ope_solicitud_iva.ws_fe_ope_solicitud_id');

	$filtros['ws_fe_ope_solicitud_iva.ws_fe_ope_solicitud_id'] = array('campo' => 'WsFeOpeSolicitud', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ws_fe_ope_solicitud_iva.ws_fe_param_tipo_iva_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ws_fe_ope_solicitud_iva.ws_fe_param_tipo_iva_id');
	$o = WsFeParamTipoIva::getOxId($criterio->getValorDeCampo('ws_fe_ope_solicitud_iva.ws_fe_param_tipo_iva_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('ws_fe_ope_solicitud_iva.ws_fe_param_tipo_iva_id');

	$filtros['ws_fe_ope_solicitud_iva.ws_fe_param_tipo_iva_id'] = array('campo' => 'WsFeParamTipoIva', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ws_fe_ope_solicitud_iva.ws_fe_afip_codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ws_fe_ope_solicitud_iva.ws_fe_afip_codigo');
	$comparador = $criterio->getComparadorDeCampo('ws_fe_ope_solicitud_iva.ws_fe_afip_codigo');

	$filtros['ws_fe_ope_solicitud_iva.ws_fe_afip_codigo'] = array('campo' => 'Codigo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ws_fe_ope_solicitud_iva.ws_fe_afip_base_imponible') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ws_fe_ope_solicitud_iva.ws_fe_afip_base_imponible');
	$comparador = $criterio->getComparadorDeCampo('ws_fe_ope_solicitud_iva.ws_fe_afip_base_imponible');

	$filtros['ws_fe_ope_solicitud_iva.ws_fe_afip_base_imponible'] = array('campo' => 'Base Imponible', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ws_fe_ope_solicitud_iva.ws_fe_afip_importe') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ws_fe_ope_solicitud_iva.ws_fe_afip_importe');
	$comparador = $criterio->getComparadorDeCampo('ws_fe_ope_solicitud_iva.ws_fe_afip_importe');

	$filtros['ws_fe_ope_solicitud_iva.ws_fe_afip_importe'] = array('campo' => 'Importe', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ws_fe_ope_solicitud_iva.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ws_fe_ope_solicitud_iva.codigo');
	$comparador = $criterio->getComparadorDeCampo('ws_fe_ope_solicitud_iva.codigo');

	$filtros['ws_fe_ope_solicitud_iva.codigo'] = array('campo' => 'Codigo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ws_fe_ope_solicitud_iva.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ws_fe_ope_solicitud_iva.observacion');
	$comparador = $criterio->getComparadorDeCampo('ws_fe_ope_solicitud_iva.observacion');

	$filtros['ws_fe_ope_solicitud_iva.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ws_fe_ope_solicitud_iva.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ws_fe_ope_solicitud_iva.creado');
	$comparador = $criterio->getComparadorDeCampo('ws_fe_ope_solicitud_iva.creado');

	$filtros['ws_fe_ope_solicitud_iva.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ws_fe_ope_solicitud_iva.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ws_fe_ope_solicitud_iva.creado_por');
	$comparador = $criterio->getComparadorDeCampo('ws_fe_ope_solicitud_iva.creado_por');

	$filtros['ws_fe_ope_solicitud_iva.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ws_fe_ope_solicitud_iva.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ws_fe_ope_solicitud_iva.modificado');
	$comparador = $criterio->getComparadorDeCampo('ws_fe_ope_solicitud_iva.modificado');

	$filtros['ws_fe_ope_solicitud_iva.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ws_fe_ope_solicitud_iva.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ws_fe_ope_solicitud_iva.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('ws_fe_ope_solicitud_iva.modificado_por');

	$filtros['ws_fe_ope_solicitud_iva.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

