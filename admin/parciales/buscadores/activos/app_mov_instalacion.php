<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['app_mov_instalacion.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('app_mov_instalacion.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('app_mov_instalacion.id');
	$comparador = $criterio->getComparadorDeCampo('app_mov_instalacion.id');

	$filtros['app_mov_instalacion.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('app_mov_instalacion.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('app_mov_instalacion.descripcion');
	$comparador = $criterio->getComparadorDeCampo('app_mov_instalacion.descripcion');

	$filtros['app_mov_instalacion.descripcion'] = array('campo' => 'Descripcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('app_mov_instalacion.app_mov_dispositivo_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('app_mov_instalacion.app_mov_dispositivo_id');
	$o = AppMovDispositivo::getOxId($criterio->getValorDeCampo('app_mov_instalacion.app_mov_dispositivo_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('app_mov_instalacion.app_mov_dispositivo_id');

	$filtros['app_mov_instalacion.app_mov_dispositivo_id'] = array('campo' => 'AppMovDispositivo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('app_mov_instalacion.app_mov_modulo_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('app_mov_instalacion.app_mov_modulo_id');
	$o = AppMovModulo::getOxId($criterio->getValorDeCampo('app_mov_instalacion.app_mov_modulo_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('app_mov_instalacion.app_mov_modulo_id');

	$filtros['app_mov_instalacion.app_mov_modulo_id'] = array('campo' => 'AppMovModulo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('app_mov_instalacion.gen_api_token_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('app_mov_instalacion.gen_api_token_id');
	$o = GenApiToken::getOxId($criterio->getValorDeCampo('app_mov_instalacion.gen_api_token_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('app_mov_instalacion.gen_api_token_id');

	$filtros['app_mov_instalacion.gen_api_token_id'] = array('campo' => 'GenApiToken', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('app_mov_instalacion.app_mov_version_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('app_mov_instalacion.app_mov_version_id');
	$o = AppMovVersion::getOxId($criterio->getValorDeCampo('app_mov_instalacion.app_mov_version_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('app_mov_instalacion.app_mov_version_id');

	$filtros['app_mov_instalacion.app_mov_version_id'] = array('campo' => 'AppMovVersion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('app_mov_instalacion.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('app_mov_instalacion.codigo');
	$comparador = $criterio->getComparadorDeCampo('app_mov_instalacion.codigo');

	$filtros['app_mov_instalacion.codigo'] = array('campo' => 'Codigo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('app_mov_instalacion.app_version') != ''){
	$valor = $valor = $criterio->getValorDeCampo('app_mov_instalacion.app_version');
	$comparador = $criterio->getComparadorDeCampo('app_mov_instalacion.app_version');

	$filtros['app_mov_instalacion.app_version'] = array('campo' => 'App Version', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('app_mov_instalacion.app_version_activa') != ''){
	$valor = $valor = $criterio->getValorDeCampo('app_mov_instalacion.app_version_activa');
	$comparador = $criterio->getComparadorDeCampo('app_mov_instalacion.app_version_activa');

	$filtros['app_mov_instalacion.app_version_activa'] = array('campo' => 'App Version Activa', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('app_mov_instalacion.fecha_ultima_actividad') != ''){
	$valor = $valor = $criterio->getValorDeCampo('app_mov_instalacion.fecha_ultima_actividad');
	$comparador = $criterio->getComparadorDeCampo('app_mov_instalacion.fecha_ultima_actividad');

	$filtros['app_mov_instalacion.fecha_ultima_actividad'] = array('campo' => 'Fecha Ult Activ', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('app_mov_instalacion.us_usuario_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('app_mov_instalacion.us_usuario_id');
	$o = UsUsuario::getOxId($criterio->getValorDeCampo('app_mov_instalacion.us_usuario_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('app_mov_instalacion.us_usuario_id');

	$filtros['app_mov_instalacion.us_usuario_id'] = array('campo' => 'UsUsuario', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('app_mov_instalacion.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('app_mov_instalacion.observacion');
	$comparador = $criterio->getComparadorDeCampo('app_mov_instalacion.observacion');

	$filtros['app_mov_instalacion.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('app_mov_instalacion.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('app_mov_instalacion.orden');
	$comparador = $criterio->getComparadorDeCampo('app_mov_instalacion.orden');

	$filtros['app_mov_instalacion.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('app_mov_instalacion.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('app_mov_instalacion.estado');
	$comparador = $criterio->getComparadorDeCampo('app_mov_instalacion.estado');

	$filtros['app_mov_instalacion.estado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('app_mov_instalacion.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('app_mov_instalacion.creado');
	$comparador = $criterio->getComparadorDeCampo('app_mov_instalacion.creado');

	$filtros['app_mov_instalacion.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('app_mov_instalacion.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('app_mov_instalacion.creado_por');
	$comparador = $criterio->getComparadorDeCampo('app_mov_instalacion.creado_por');

	$filtros['app_mov_instalacion.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('app_mov_instalacion.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('app_mov_instalacion.modificado');
	$comparador = $criterio->getComparadorDeCampo('app_mov_instalacion.modificado');

	$filtros['app_mov_instalacion.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('app_mov_instalacion.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('app_mov_instalacion.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('app_mov_instalacion.modificado_por');

	$filtros['app_mov_instalacion.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

