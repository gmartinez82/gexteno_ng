<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['us_mensaje.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('us_mensaje.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('us_mensaje.id');
	$comparador = $criterio->getComparadorDeCampo('us_mensaje.id');

	$filtros['us_mensaje.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('us_mensaje.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('us_mensaje.descripcion');
	$comparador = $criterio->getComparadorDeCampo('us_mensaje.descripcion');

	$filtros['us_mensaje.descripcion'] = array('campo' => 'Descripcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('us_mensaje.us_usuario_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('us_mensaje.us_usuario_id');
	$o = UsUsuario::getOxId($criterio->getValorDeCampo('us_mensaje.us_usuario_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('us_mensaje.us_usuario_id');

	$filtros['us_mensaje.us_usuario_id'] = array('campo' => 'Usuario', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('us_mensaje.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('us_mensaje.codigo');
	$comparador = $criterio->getComparadorDeCampo('us_mensaje.codigo');

	$filtros['us_mensaje.codigo'] = array('campo' => 'Codigo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('us_mensaje.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('us_mensaje.observacion');
	$comparador = $criterio->getComparadorDeCampo('us_mensaje.observacion');

	$filtros['us_mensaje.observacion'] = array('campo' => 'Observacion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('us_mensaje.leido') != ''){
	$valor = $valor = $criterio->getValorDeCampo('us_mensaje.leido');
	$comparador = $criterio->getComparadorDeCampo('us_mensaje.leido');

	$filtros['us_mensaje.leido'] = array('campo' => 'Leido', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('us_mensaje.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('us_mensaje.orden');
	$comparador = $criterio->getComparadorDeCampo('us_mensaje.orden');

	$filtros['us_mensaje.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('us_mensaje.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('us_mensaje.estado');
	$o = Est::getOxId($criterio->getValorDeCampo('us_mensaje.estado'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('us_mensaje.estado');

	$filtros['us_mensaje.estado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('us_mensaje.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('us_mensaje.creado');
	$comparador = $criterio->getComparadorDeCampo('us_mensaje.creado');

	$filtros['us_mensaje.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('us_mensaje.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('us_mensaje.creado_por');
	$comparador = $criterio->getComparadorDeCampo('us_mensaje.creado_por');

	$filtros['us_mensaje.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('us_mensaje.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('us_mensaje.modificado');
	$comparador = $criterio->getComparadorDeCampo('us_mensaje.modificado');

	$filtros['us_mensaje.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('us_mensaje.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('us_mensaje.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('us_mensaje.modificado_por');

	$filtros['us_mensaje.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

