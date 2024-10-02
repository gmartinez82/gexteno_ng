<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['us_login.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('us_login.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('us_login.id');
	$comparador = $criterio->getComparadorDeCampo('us_login.id');

	$filtros['us_login.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('us_login.us_usuario_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('us_login.us_usuario_id');
	$o = UsUsuario::getOxId($criterio->getValorDeCampo('us_login.us_usuario_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('us_login.us_usuario_id');

	$filtros['us_login.us_usuario_id'] = array('campo' => 'Usuario', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('us_login.session') != ''){
	$valor = $valor = $criterio->getValorDeCampo('us_login.session');
	$comparador = $criterio->getComparadorDeCampo('us_login.session');

	$filtros['us_login.session'] = array('campo' => 'Session', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('us_login.ip') != ''){
	$valor = $valor = $criterio->getValorDeCampo('us_login.ip');
	$comparador = $criterio->getComparadorDeCampo('us_login.ip');

	$filtros['us_login.ip'] = array('campo' => 'IP', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('us_login.exito') != ''){
	$valor = $valor = $criterio->getValorDeCampo('us_login.exito');
	$comparador = $criterio->getComparadorDeCampo('us_login.exito');

	$filtros['us_login.exito'] = array('campo' => 'Exito', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('us_login.login') != ''){
	$valor = $valor = $criterio->getValorDeCampo('us_login.login');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('us_login.login'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('us_login.login');

	$filtros['us_login.login'] = array('campo' => 'Login', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('us_login.navegador') != ''){
	$valor = $valor = $criterio->getValorDeCampo('us_login.navegador');
	$comparador = $criterio->getComparadorDeCampo('us_login.navegador');

	$filtros['us_login.navegador'] = array('campo' => 'Navegador', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('us_login.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('us_login.observacion');
	$comparador = $criterio->getComparadorDeCampo('us_login.observacion');

	$filtros['us_login.observacion'] = array('campo' => 'Observacion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('us_login.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('us_login.orden');
	$comparador = $criterio->getComparadorDeCampo('us_login.orden');

	$filtros['us_login.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('us_login.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('us_login.estado');
	$o = Est::getOxId($criterio->getValorDeCampo('us_login.estado'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('us_login.estado');

	$filtros['us_login.estado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('us_login.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('us_login.creado');
	$comparador = $criterio->getComparadorDeCampo('us_login.creado');

	$filtros['us_login.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('us_login.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('us_login.creado_por');
	$comparador = $criterio->getComparadorDeCampo('us_login.creado_por');

	$filtros['us_login.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('us_login.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('us_login.modificado');
	$comparador = $criterio->getComparadorDeCampo('us_login.modificado');

	$filtros['us_login.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('us_login.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('us_login.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('us_login.modificado_por');

	$filtros['us_login.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

