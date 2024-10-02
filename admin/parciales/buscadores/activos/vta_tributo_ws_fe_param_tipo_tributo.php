<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['vta_tributo_ws_fe_param_tipo_tributo.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('vta_tributo_ws_fe_param_tipo_tributo.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_tributo_ws_fe_param_tipo_tributo.id');
	$comparador = $criterio->getComparadorDeCampo('vta_tributo_ws_fe_param_tipo_tributo.id');

	$filtros['vta_tributo_ws_fe_param_tipo_tributo.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_tributo_ws_fe_param_tipo_tributo.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_tributo_ws_fe_param_tipo_tributo.descripcion');
	$comparador = $criterio->getComparadorDeCampo('vta_tributo_ws_fe_param_tipo_tributo.descripcion');

	$filtros['vta_tributo_ws_fe_param_tipo_tributo.descripcion'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_tributo_ws_fe_param_tipo_tributo.vta_tributo_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_tributo_ws_fe_param_tipo_tributo.vta_tributo_id');
	$o = VtaTributo::getOxId($criterio->getValorDeCampo('vta_tributo_ws_fe_param_tipo_tributo.vta_tributo_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('vta_tributo_ws_fe_param_tipo_tributo.vta_tributo_id');

	$filtros['vta_tributo_ws_fe_param_tipo_tributo.vta_tributo_id'] = array('campo' => 'VtaTributo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_tributo_ws_fe_param_tipo_tributo.ws_fe_param_tipo_tributo_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_tributo_ws_fe_param_tipo_tributo.ws_fe_param_tipo_tributo_id');
	$o = WsFeParamTipoTributo::getOxId($criterio->getValorDeCampo('vta_tributo_ws_fe_param_tipo_tributo.ws_fe_param_tipo_tributo_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('vta_tributo_ws_fe_param_tipo_tributo.ws_fe_param_tipo_tributo_id');

	$filtros['vta_tributo_ws_fe_param_tipo_tributo.ws_fe_param_tipo_tributo_id'] = array('campo' => 'WsFeParamTipoTributo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_tributo_ws_fe_param_tipo_tributo.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_tributo_ws_fe_param_tipo_tributo.codigo');
	$comparador = $criterio->getComparadorDeCampo('vta_tributo_ws_fe_param_tipo_tributo.codigo');

	$filtros['vta_tributo_ws_fe_param_tipo_tributo.codigo'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_tributo_ws_fe_param_tipo_tributo.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_tributo_ws_fe_param_tipo_tributo.observacion');
	$comparador = $criterio->getComparadorDeCampo('vta_tributo_ws_fe_param_tipo_tributo.observacion');

	$filtros['vta_tributo_ws_fe_param_tipo_tributo.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_tributo_ws_fe_param_tipo_tributo.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_tributo_ws_fe_param_tipo_tributo.orden');
	$comparador = $criterio->getComparadorDeCampo('vta_tributo_ws_fe_param_tipo_tributo.orden');

	$filtros['vta_tributo_ws_fe_param_tipo_tributo.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_tributo_ws_fe_param_tipo_tributo.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_tributo_ws_fe_param_tipo_tributo.estado');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('vta_tributo_ws_fe_param_tipo_tributo.estado'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('vta_tributo_ws_fe_param_tipo_tributo.estado');

	$filtros['vta_tributo_ws_fe_param_tipo_tributo.estado'] = array('campo' => 'Estado', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_tributo_ws_fe_param_tipo_tributo.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_tributo_ws_fe_param_tipo_tributo.creado');
	$comparador = $criterio->getComparadorDeCampo('vta_tributo_ws_fe_param_tipo_tributo.creado');

	$filtros['vta_tributo_ws_fe_param_tipo_tributo.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_tributo_ws_fe_param_tipo_tributo.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_tributo_ws_fe_param_tipo_tributo.creado_por');
	$comparador = $criterio->getComparadorDeCampo('vta_tributo_ws_fe_param_tipo_tributo.creado_por');

	$filtros['vta_tributo_ws_fe_param_tipo_tributo.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_tributo_ws_fe_param_tipo_tributo.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_tributo_ws_fe_param_tipo_tributo.modificado');
	$comparador = $criterio->getComparadorDeCampo('vta_tributo_ws_fe_param_tipo_tributo.modificado');

	$filtros['vta_tributo_ws_fe_param_tipo_tributo.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_tributo_ws_fe_param_tipo_tributo.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_tributo_ws_fe_param_tipo_tributo.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('vta_tributo_ws_fe_param_tipo_tributo.modificado_por');

	$filtros['vta_tributo_ws_fe_param_tipo_tributo.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

