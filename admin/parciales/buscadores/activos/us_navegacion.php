<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['us_navegacion.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('us_navegacion.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('us_navegacion.id');
	$comparador = $criterio->getComparadorDeCampo('us_navegacion.id');

	$filtros['us_navegacion.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('us_navegacion.us_usuario_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('us_navegacion.us_usuario_id');
	$o = UsUsuario::getOxId($criterio->getValorDeCampo('us_navegacion.us_usuario_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('us_navegacion.us_usuario_id');

	$filtros['us_navegacion.us_usuario_id'] = array('campo' => 'Usuario', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('us_navegacion.session') != ''){
	$valor = $valor = $criterio->getValorDeCampo('us_navegacion.session');
	$comparador = $criterio->getComparadorDeCampo('us_navegacion.session');

	$filtros['us_navegacion.session'] = array('campo' => 'Session', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('us_navegacion.ip') != ''){
	$valor = $valor = $criterio->getValorDeCampo('us_navegacion.ip');
	$comparador = $criterio->getComparadorDeCampo('us_navegacion.ip');

	$filtros['us_navegacion.ip'] = array('campo' => 'IP', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('us_navegacion.navegador') != ''){
	$valor = $valor = $criterio->getValorDeCampo('us_navegacion.navegador');
	$comparador = $criterio->getComparadorDeCampo('us_navegacion.navegador');

	$filtros['us_navegacion.navegador'] = array('campo' => 'Navegador', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('us_navegacion.pagina') != ''){
	$valor = $valor = $criterio->getValorDeCampo('us_navegacion.pagina');
	$comparador = $criterio->getComparadorDeCampo('us_navegacion.pagina');

	$filtros['us_navegacion.pagina'] = array('campo' => 'Pagina', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('us_navegacion.url') != ''){
	$valor = $valor = $criterio->getValorDeCampo('us_navegacion.url');
	$comparador = $criterio->getComparadorDeCampo('us_navegacion.url');

	$filtros['us_navegacion.url'] = array('campo' => 'Url', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('us_navegacion.url_referer') != ''){
	$valor = $valor = $criterio->getValorDeCampo('us_navegacion.url_referer');
	$comparador = $criterio->getComparadorDeCampo('us_navegacion.url_referer');

	$filtros['us_navegacion.url_referer'] = array('campo' => 'Url Anterior', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('us_navegacion.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('us_navegacion.observacion');
	$comparador = $criterio->getComparadorDeCampo('us_navegacion.observacion');

	$filtros['us_navegacion.observacion'] = array('campo' => 'Observacion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('us_navegacion.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('us_navegacion.orden');
	$comparador = $criterio->getComparadorDeCampo('us_navegacion.orden');

	$filtros['us_navegacion.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('us_navegacion.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('us_navegacion.estado');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('us_navegacion.estado'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('us_navegacion.estado');

	$filtros['us_navegacion.estado'] = array('campo' => 'Estado', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('us_navegacion.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('us_navegacion.creado');
	$comparador = $criterio->getComparadorDeCampo('us_navegacion.creado');

	$filtros['us_navegacion.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('us_navegacion.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('us_navegacion.creado_por');
	$comparador = $criterio->getComparadorDeCampo('us_navegacion.creado_por');

	$filtros['us_navegacion.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('us_navegacion.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('us_navegacion.modificado');
	$comparador = $criterio->getComparadorDeCampo('us_navegacion.modificado');

	$filtros['us_navegacion.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('us_navegacion.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('us_navegacion.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('us_navegacion.modificado_por');

	$filtros['us_navegacion.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

