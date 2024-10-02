<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['gral_tipo_documento_ws_fe_param_tipo_documento.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('gral_tipo_documento_ws_fe_param_tipo_documento.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_tipo_documento_ws_fe_param_tipo_documento.id');
	$comparador = $criterio->getComparadorDeCampo('gral_tipo_documento_ws_fe_param_tipo_documento.id');

	$filtros['gral_tipo_documento_ws_fe_param_tipo_documento.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_tipo_documento_ws_fe_param_tipo_documento.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_tipo_documento_ws_fe_param_tipo_documento.descripcion');
	$comparador = $criterio->getComparadorDeCampo('gral_tipo_documento_ws_fe_param_tipo_documento.descripcion');

	$filtros['gral_tipo_documento_ws_fe_param_tipo_documento.descripcion'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_tipo_documento_ws_fe_param_tipo_documento.gral_tipo_documento_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_tipo_documento_ws_fe_param_tipo_documento.gral_tipo_documento_id');
	$o = GralTipoDocumento::getOxId($criterio->getValorDeCampo('gral_tipo_documento_ws_fe_param_tipo_documento.gral_tipo_documento_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('gral_tipo_documento_ws_fe_param_tipo_documento.gral_tipo_documento_id');

	$filtros['gral_tipo_documento_ws_fe_param_tipo_documento.gral_tipo_documento_id'] = array('campo' => 'GralTipoDocumento', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_tipo_documento_ws_fe_param_tipo_documento.ws_fe_param_tipo_documento_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_tipo_documento_ws_fe_param_tipo_documento.ws_fe_param_tipo_documento_id');
	$o = WsFeParamTipoDocumento::getOxId($criterio->getValorDeCampo('gral_tipo_documento_ws_fe_param_tipo_documento.ws_fe_param_tipo_documento_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('gral_tipo_documento_ws_fe_param_tipo_documento.ws_fe_param_tipo_documento_id');

	$filtros['gral_tipo_documento_ws_fe_param_tipo_documento.ws_fe_param_tipo_documento_id'] = array('campo' => 'WsFeParamTipoDocumento', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_tipo_documento_ws_fe_param_tipo_documento.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_tipo_documento_ws_fe_param_tipo_documento.codigo');
	$comparador = $criterio->getComparadorDeCampo('gral_tipo_documento_ws_fe_param_tipo_documento.codigo');

	$filtros['gral_tipo_documento_ws_fe_param_tipo_documento.codigo'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_tipo_documento_ws_fe_param_tipo_documento.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_tipo_documento_ws_fe_param_tipo_documento.observacion');
	$comparador = $criterio->getComparadorDeCampo('gral_tipo_documento_ws_fe_param_tipo_documento.observacion');

	$filtros['gral_tipo_documento_ws_fe_param_tipo_documento.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_tipo_documento_ws_fe_param_tipo_documento.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_tipo_documento_ws_fe_param_tipo_documento.orden');
	$comparador = $criterio->getComparadorDeCampo('gral_tipo_documento_ws_fe_param_tipo_documento.orden');

	$filtros['gral_tipo_documento_ws_fe_param_tipo_documento.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_tipo_documento_ws_fe_param_tipo_documento.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_tipo_documento_ws_fe_param_tipo_documento.estado');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('gral_tipo_documento_ws_fe_param_tipo_documento.estado'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('gral_tipo_documento_ws_fe_param_tipo_documento.estado');

	$filtros['gral_tipo_documento_ws_fe_param_tipo_documento.estado'] = array('campo' => 'Estado', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_tipo_documento_ws_fe_param_tipo_documento.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_tipo_documento_ws_fe_param_tipo_documento.creado');
	$comparador = $criterio->getComparadorDeCampo('gral_tipo_documento_ws_fe_param_tipo_documento.creado');

	$filtros['gral_tipo_documento_ws_fe_param_tipo_documento.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_tipo_documento_ws_fe_param_tipo_documento.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_tipo_documento_ws_fe_param_tipo_documento.creado_por');
	$comparador = $criterio->getComparadorDeCampo('gral_tipo_documento_ws_fe_param_tipo_documento.creado_por');

	$filtros['gral_tipo_documento_ws_fe_param_tipo_documento.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_tipo_documento_ws_fe_param_tipo_documento.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_tipo_documento_ws_fe_param_tipo_documento.modificado');
	$comparador = $criterio->getComparadorDeCampo('gral_tipo_documento_ws_fe_param_tipo_documento.modificado');

	$filtros['gral_tipo_documento_ws_fe_param_tipo_documento.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_tipo_documento_ws_fe_param_tipo_documento.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_tipo_documento_ws_fe_param_tipo_documento.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('gral_tipo_documento_ws_fe_param_tipo_documento.modificado_por');

	$filtros['gral_tipo_documento_ws_fe_param_tipo_documento.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

