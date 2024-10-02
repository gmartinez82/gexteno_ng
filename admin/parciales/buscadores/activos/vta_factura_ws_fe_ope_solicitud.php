<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['vta_factura_ws_fe_ope_solicitud.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('vta_factura_ws_fe_ope_solicitud.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_factura_ws_fe_ope_solicitud.id');
	$comparador = $criterio->getComparadorDeCampo('vta_factura_ws_fe_ope_solicitud.id');

	$filtros['vta_factura_ws_fe_ope_solicitud.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_factura_ws_fe_ope_solicitud.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_factura_ws_fe_ope_solicitud.descripcion');
	$comparador = $criterio->getComparadorDeCampo('vta_factura_ws_fe_ope_solicitud.descripcion');

	$filtros['vta_factura_ws_fe_ope_solicitud.descripcion'] = array('campo' => 'Descripcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_factura_ws_fe_ope_solicitud.vta_factura_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_factura_ws_fe_ope_solicitud.vta_factura_id');
	$o = VtaFactura::getOxId($criterio->getValorDeCampo('vta_factura_ws_fe_ope_solicitud.vta_factura_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('vta_factura_ws_fe_ope_solicitud.vta_factura_id');

	$filtros['vta_factura_ws_fe_ope_solicitud.vta_factura_id'] = array('campo' => 'VtaFactura', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_factura_ws_fe_ope_solicitud.ws_fe_ope_solicitud_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_factura_ws_fe_ope_solicitud.ws_fe_ope_solicitud_id');
	$o = WsFeOpeSolicitud::getOxId($criterio->getValorDeCampo('vta_factura_ws_fe_ope_solicitud.ws_fe_ope_solicitud_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('vta_factura_ws_fe_ope_solicitud.ws_fe_ope_solicitud_id');

	$filtros['vta_factura_ws_fe_ope_solicitud.ws_fe_ope_solicitud_id'] = array('campo' => 'WsFeOpeSolicitud', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_factura_ws_fe_ope_solicitud.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_factura_ws_fe_ope_solicitud.codigo');
	$comparador = $criterio->getComparadorDeCampo('vta_factura_ws_fe_ope_solicitud.codigo');

	$filtros['vta_factura_ws_fe_ope_solicitud.codigo'] = array('campo' => 'Codigo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_factura_ws_fe_ope_solicitud.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_factura_ws_fe_ope_solicitud.observacion');
	$comparador = $criterio->getComparadorDeCampo('vta_factura_ws_fe_ope_solicitud.observacion');

	$filtros['vta_factura_ws_fe_ope_solicitud.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_factura_ws_fe_ope_solicitud.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_factura_ws_fe_ope_solicitud.orden');
	$comparador = $criterio->getComparadorDeCampo('vta_factura_ws_fe_ope_solicitud.orden');

	$filtros['vta_factura_ws_fe_ope_solicitud.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_factura_ws_fe_ope_solicitud.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_factura_ws_fe_ope_solicitud.estado');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('vta_factura_ws_fe_ope_solicitud.estado'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('vta_factura_ws_fe_ope_solicitud.estado');

	$filtros['vta_factura_ws_fe_ope_solicitud.estado'] = array('campo' => 'Estado', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_factura_ws_fe_ope_solicitud.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_factura_ws_fe_ope_solicitud.creado');
	$comparador = $criterio->getComparadorDeCampo('vta_factura_ws_fe_ope_solicitud.creado');

	$filtros['vta_factura_ws_fe_ope_solicitud.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_factura_ws_fe_ope_solicitud.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_factura_ws_fe_ope_solicitud.creado_por');
	$comparador = $criterio->getComparadorDeCampo('vta_factura_ws_fe_ope_solicitud.creado_por');

	$filtros['vta_factura_ws_fe_ope_solicitud.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_factura_ws_fe_ope_solicitud.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_factura_ws_fe_ope_solicitud.modificado');
	$comparador = $criterio->getComparadorDeCampo('vta_factura_ws_fe_ope_solicitud.modificado');

	$filtros['vta_factura_ws_fe_ope_solicitud.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_factura_ws_fe_ope_solicitud.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_factura_ws_fe_ope_solicitud.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('vta_factura_ws_fe_ope_solicitud.modificado_por');

	$filtros['vta_factura_ws_fe_ope_solicitud.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

