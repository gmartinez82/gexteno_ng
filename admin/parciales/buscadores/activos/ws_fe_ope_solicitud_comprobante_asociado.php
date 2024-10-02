<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['ws_fe_ope_solicitud_comprobante_asociado.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('ws_fe_ope_solicitud_comprobante_asociado.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ws_fe_ope_solicitud_comprobante_asociado.id');
	$comparador = $criterio->getComparadorDeCampo('ws_fe_ope_solicitud_comprobante_asociado.id');

	$filtros['ws_fe_ope_solicitud_comprobante_asociado.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ws_fe_ope_solicitud_comprobante_asociado.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ws_fe_ope_solicitud_comprobante_asociado.descripcion');
	$comparador = $criterio->getComparadorDeCampo('ws_fe_ope_solicitud_comprobante_asociado.descripcion');

	$filtros['ws_fe_ope_solicitud_comprobante_asociado.descripcion'] = array('campo' => 'Descripcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ws_fe_ope_solicitud_comprobante_asociado.ws_fe_ope_solicitud_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ws_fe_ope_solicitud_comprobante_asociado.ws_fe_ope_solicitud_id');
	$o = WsFeOpeSolicitud::getOxId($criterio->getValorDeCampo('ws_fe_ope_solicitud_comprobante_asociado.ws_fe_ope_solicitud_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('ws_fe_ope_solicitud_comprobante_asociado.ws_fe_ope_solicitud_id');

	$filtros['ws_fe_ope_solicitud_comprobante_asociado.ws_fe_ope_solicitud_id'] = array('campo' => 'WsFeOpeSolicitud', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ws_fe_ope_solicitud_comprobante_asociado.ws_fe_afip_tipo_comprobante') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ws_fe_ope_solicitud_comprobante_asociado.ws_fe_afip_tipo_comprobante');
	$comparador = $criterio->getComparadorDeCampo('ws_fe_ope_solicitud_comprobante_asociado.ws_fe_afip_tipo_comprobante');

	$filtros['ws_fe_ope_solicitud_comprobante_asociado.ws_fe_afip_tipo_comprobante'] = array('campo' => 'Tipo de Comprobante', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ws_fe_ope_solicitud_comprobante_asociado.ws_fe_afip_punto_venta') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ws_fe_ope_solicitud_comprobante_asociado.ws_fe_afip_punto_venta');
	$comparador = $criterio->getComparadorDeCampo('ws_fe_ope_solicitud_comprobante_asociado.ws_fe_afip_punto_venta');

	$filtros['ws_fe_ope_solicitud_comprobante_asociado.ws_fe_afip_punto_venta'] = array('campo' => 'Punto de Venta', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ws_fe_ope_solicitud_comprobante_asociado.ws_fe_afip_numero') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ws_fe_ope_solicitud_comprobante_asociado.ws_fe_afip_numero');
	$comparador = $criterio->getComparadorDeCampo('ws_fe_ope_solicitud_comprobante_asociado.ws_fe_afip_numero');

	$filtros['ws_fe_ope_solicitud_comprobante_asociado.ws_fe_afip_numero'] = array('campo' => 'Numero', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ws_fe_ope_solicitud_comprobante_asociado.ws_fe_afip_cuit') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ws_fe_ope_solicitud_comprobante_asociado.ws_fe_afip_cuit');
	$comparador = $criterio->getComparadorDeCampo('ws_fe_ope_solicitud_comprobante_asociado.ws_fe_afip_cuit');

	$filtros['ws_fe_ope_solicitud_comprobante_asociado.ws_fe_afip_cuit'] = array('campo' => 'Cuit', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ws_fe_ope_solicitud_comprobante_asociado.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ws_fe_ope_solicitud_comprobante_asociado.codigo');
	$comparador = $criterio->getComparadorDeCampo('ws_fe_ope_solicitud_comprobante_asociado.codigo');

	$filtros['ws_fe_ope_solicitud_comprobante_asociado.codigo'] = array('campo' => 'Codigo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ws_fe_ope_solicitud_comprobante_asociado.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ws_fe_ope_solicitud_comprobante_asociado.observacion');
	$comparador = $criterio->getComparadorDeCampo('ws_fe_ope_solicitud_comprobante_asociado.observacion');

	$filtros['ws_fe_ope_solicitud_comprobante_asociado.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ws_fe_ope_solicitud_comprobante_asociado.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ws_fe_ope_solicitud_comprobante_asociado.creado');
	$comparador = $criterio->getComparadorDeCampo('ws_fe_ope_solicitud_comprobante_asociado.creado');

	$filtros['ws_fe_ope_solicitud_comprobante_asociado.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ws_fe_ope_solicitud_comprobante_asociado.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ws_fe_ope_solicitud_comprobante_asociado.creado_por');
	$comparador = $criterio->getComparadorDeCampo('ws_fe_ope_solicitud_comprobante_asociado.creado_por');

	$filtros['ws_fe_ope_solicitud_comprobante_asociado.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ws_fe_ope_solicitud_comprobante_asociado.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ws_fe_ope_solicitud_comprobante_asociado.modificado');
	$comparador = $criterio->getComparadorDeCampo('ws_fe_ope_solicitud_comprobante_asociado.modificado');

	$filtros['ws_fe_ope_solicitud_comprobante_asociado.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ws_fe_ope_solicitud_comprobante_asociado.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ws_fe_ope_solicitud_comprobante_asociado.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('ws_fe_ope_solicitud_comprobante_asociado.modificado_por');

	$filtros['ws_fe_ope_solicitud_comprobante_asociado.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

