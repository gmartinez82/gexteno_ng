<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['ws_fe_ope_solicitud_respuesta_observacion.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('ws_fe_ope_solicitud_respuesta_observacion.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ws_fe_ope_solicitud_respuesta_observacion.id');
	$comparador = $criterio->getComparadorDeCampo('ws_fe_ope_solicitud_respuesta_observacion.id');

	$filtros['ws_fe_ope_solicitud_respuesta_observacion.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ws_fe_ope_solicitud_respuesta_observacion.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ws_fe_ope_solicitud_respuesta_observacion.descripcion');
	$comparador = $criterio->getComparadorDeCampo('ws_fe_ope_solicitud_respuesta_observacion.descripcion');

	$filtros['ws_fe_ope_solicitud_respuesta_observacion.descripcion'] = array('campo' => 'Descripcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ws_fe_ope_solicitud_respuesta_observacion.ws_fe_ope_solicitud_respuesta_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ws_fe_ope_solicitud_respuesta_observacion.ws_fe_ope_solicitud_respuesta_id');
	$o = WsFeOpeSolicitudRespuesta::getOxId($criterio->getValorDeCampo('ws_fe_ope_solicitud_respuesta_observacion.ws_fe_ope_solicitud_respuesta_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('ws_fe_ope_solicitud_respuesta_observacion.ws_fe_ope_solicitud_respuesta_id');

	$filtros['ws_fe_ope_solicitud_respuesta_observacion.ws_fe_ope_solicitud_respuesta_id'] = array('campo' => 'WsFeOpeSolicitudRespuesta', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ws_fe_ope_solicitud_respuesta_observacion.ws_fe_afip_codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ws_fe_ope_solicitud_respuesta_observacion.ws_fe_afip_codigo');
	$comparador = $criterio->getComparadorDeCampo('ws_fe_ope_solicitud_respuesta_observacion.ws_fe_afip_codigo');

	$filtros['ws_fe_ope_solicitud_respuesta_observacion.ws_fe_afip_codigo'] = array('campo' => 'Codigo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ws_fe_ope_solicitud_respuesta_observacion.ws_fe_afip_mensaje') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ws_fe_ope_solicitud_respuesta_observacion.ws_fe_afip_mensaje');
	$comparador = $criterio->getComparadorDeCampo('ws_fe_ope_solicitud_respuesta_observacion.ws_fe_afip_mensaje');

	$filtros['ws_fe_ope_solicitud_respuesta_observacion.ws_fe_afip_mensaje'] = array('campo' => 'Mensaje', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ws_fe_ope_solicitud_respuesta_observacion.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ws_fe_ope_solicitud_respuesta_observacion.codigo');
	$comparador = $criterio->getComparadorDeCampo('ws_fe_ope_solicitud_respuesta_observacion.codigo');

	$filtros['ws_fe_ope_solicitud_respuesta_observacion.codigo'] = array('campo' => 'Codigo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ws_fe_ope_solicitud_respuesta_observacion.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ws_fe_ope_solicitud_respuesta_observacion.observacion');
	$comparador = $criterio->getComparadorDeCampo('ws_fe_ope_solicitud_respuesta_observacion.observacion');

	$filtros['ws_fe_ope_solicitud_respuesta_observacion.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ws_fe_ope_solicitud_respuesta_observacion.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ws_fe_ope_solicitud_respuesta_observacion.creado');
	$comparador = $criterio->getComparadorDeCampo('ws_fe_ope_solicitud_respuesta_observacion.creado');

	$filtros['ws_fe_ope_solicitud_respuesta_observacion.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ws_fe_ope_solicitud_respuesta_observacion.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ws_fe_ope_solicitud_respuesta_observacion.creado_por');
	$comparador = $criterio->getComparadorDeCampo('ws_fe_ope_solicitud_respuesta_observacion.creado_por');

	$filtros['ws_fe_ope_solicitud_respuesta_observacion.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ws_fe_ope_solicitud_respuesta_observacion.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ws_fe_ope_solicitud_respuesta_observacion.modificado');
	$comparador = $criterio->getComparadorDeCampo('ws_fe_ope_solicitud_respuesta_observacion.modificado');

	$filtros['ws_fe_ope_solicitud_respuesta_observacion.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ws_fe_ope_solicitud_respuesta_observacion.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ws_fe_ope_solicitud_respuesta_observacion.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('ws_fe_ope_solicitud_respuesta_observacion.modificado_por');

	$filtros['ws_fe_ope_solicitud_respuesta_observacion.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

