<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['app_mov_actividad.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('app_mov_actividad.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('app_mov_actividad.id');
	$comparador = $criterio->getComparadorDeCampo('app_mov_actividad.id');

	$filtros['app_mov_actividad.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('app_mov_actividad.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('app_mov_actividad.descripcion');
	$comparador = $criterio->getComparadorDeCampo('app_mov_actividad.descripcion');

	$filtros['app_mov_actividad.descripcion'] = array('campo' => 'Descripcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('app_mov_actividad.app_mov_instalacion_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('app_mov_actividad.app_mov_instalacion_id');
	$o = AppMovInstalacion::getOxId($criterio->getValorDeCampo('app_mov_actividad.app_mov_instalacion_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('app_mov_actividad.app_mov_instalacion_id');

	$filtros['app_mov_actividad.app_mov_instalacion_id'] = array('campo' => 'AppMovInstalacion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('app_mov_actividad.app_mov_dispositivo_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('app_mov_actividad.app_mov_dispositivo_id');
	$o = AppMovDispositivo::getOxId($criterio->getValorDeCampo('app_mov_actividad.app_mov_dispositivo_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('app_mov_actividad.app_mov_dispositivo_id');

	$filtros['app_mov_actividad.app_mov_dispositivo_id'] = array('campo' => 'AppMovDispositivo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('app_mov_actividad.app_mov_modulo_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('app_mov_actividad.app_mov_modulo_id');
	$o = AppMovModulo::getOxId($criterio->getValorDeCampo('app_mov_actividad.app_mov_modulo_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('app_mov_actividad.app_mov_modulo_id');

	$filtros['app_mov_actividad.app_mov_modulo_id'] = array('campo' => 'AppMovModulo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('app_mov_actividad.gen_api_token_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('app_mov_actividad.gen_api_token_id');
	$o = GenApiToken::getOxId($criterio->getValorDeCampo('app_mov_actividad.gen_api_token_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('app_mov_actividad.gen_api_token_id');

	$filtros['app_mov_actividad.gen_api_token_id'] = array('campo' => 'GenApiToken', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('app_mov_actividad.metodo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('app_mov_actividad.metodo');
	$comparador = $criterio->getComparadorDeCampo('app_mov_actividad.metodo');

	$filtros['app_mov_actividad.metodo'] = array('campo' => 'Metodo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('app_mov_actividad.registros') != ''){
	$valor = $valor = $criterio->getValorDeCampo('app_mov_actividad.registros');
	$comparador = $criterio->getComparadorDeCampo('app_mov_actividad.registros');

	$filtros['app_mov_actividad.registros'] = array('campo' => 'Registros', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('app_mov_actividad.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('app_mov_actividad.codigo');
	$comparador = $criterio->getComparadorDeCampo('app_mov_actividad.codigo');

	$filtros['app_mov_actividad.codigo'] = array('campo' => 'Codigo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('app_mov_actividad.fecha_actividad') != ''){
	$valor = $valor = $criterio->getValorDeCampo('app_mov_actividad.fecha_actividad');
	$comparador = $criterio->getComparadorDeCampo('app_mov_actividad.fecha_actividad');

	$filtros['app_mov_actividad.fecha_actividad'] = array('campo' => 'Fecha Activ', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('app_mov_actividad.token') != ''){
	$valor = $valor = $criterio->getValorDeCampo('app_mov_actividad.token');
	$comparador = $criterio->getComparadorDeCampo('app_mov_actividad.token');

	$filtros['app_mov_actividad.token'] = array('campo' => 'Token', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('app_mov_actividad.respuesta') != ''){
	$valor = $valor = $criterio->getValorDeCampo('app_mov_actividad.respuesta');
	$comparador = $criterio->getComparadorDeCampo('app_mov_actividad.respuesta');

	$filtros['app_mov_actividad.respuesta'] = array('campo' => 'Respuesta', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('app_mov_actividad.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('app_mov_actividad.observacion');
	$comparador = $criterio->getComparadorDeCampo('app_mov_actividad.observacion');

	$filtros['app_mov_actividad.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('app_mov_actividad.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('app_mov_actividad.orden');
	$comparador = $criterio->getComparadorDeCampo('app_mov_actividad.orden');

	$filtros['app_mov_actividad.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('app_mov_actividad.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('app_mov_actividad.estado');
	$comparador = $criterio->getComparadorDeCampo('app_mov_actividad.estado');

	$filtros['app_mov_actividad.estado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('app_mov_actividad.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('app_mov_actividad.creado');
	$comparador = $criterio->getComparadorDeCampo('app_mov_actividad.creado');

	$filtros['app_mov_actividad.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('app_mov_actividad.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('app_mov_actividad.creado_por');
	$comparador = $criterio->getComparadorDeCampo('app_mov_actividad.creado_por');

	$filtros['app_mov_actividad.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('app_mov_actividad.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('app_mov_actividad.modificado');
	$comparador = $criterio->getComparadorDeCampo('app_mov_actividad.modificado');

	$filtros['app_mov_actividad.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('app_mov_actividad.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('app_mov_actividad.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('app_mov_actividad.modificado_por');

	$filtros['app_mov_actividad.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

