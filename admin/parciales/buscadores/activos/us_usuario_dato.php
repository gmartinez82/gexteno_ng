<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['us_usuario_dato.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('us_usuario_dato.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('us_usuario_dato.id');
	$comparador = $criterio->getComparadorDeCampo('us_usuario_dato.id');

	$filtros['us_usuario_dato.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('us_usuario_dato.us_usuario_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('us_usuario_dato.us_usuario_id');
	$o = UsUsuario::getOxId($criterio->getValorDeCampo('us_usuario_dato.us_usuario_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('us_usuario_dato.us_usuario_id');

	$filtros['us_usuario_dato.us_usuario_id'] = array('campo' => 'Datos de Usuario', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('us_usuario_dato.email') != ''){
	$valor = $valor = $criterio->getValorDeCampo('us_usuario_dato.email');
	$comparador = $criterio->getComparadorDeCampo('us_usuario_dato.email');

	$filtros['us_usuario_dato.email'] = array('campo' => 'Email', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('us_usuario_dato.telefono') != ''){
	$valor = $valor = $criterio->getValorDeCampo('us_usuario_dato.telefono');
	$comparador = $criterio->getComparadorDeCampo('us_usuario_dato.telefono');

	$filtros['us_usuario_dato.telefono'] = array('campo' => 'Telefono', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('us_usuario_dato.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('us_usuario_dato.observacion');
	$comparador = $criterio->getComparadorDeCampo('us_usuario_dato.observacion');

	$filtros['us_usuario_dato.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('us_usuario_dato.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('us_usuario_dato.orden');
	$comparador = $criterio->getComparadorDeCampo('us_usuario_dato.orden');

	$filtros['us_usuario_dato.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('us_usuario_dato.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('us_usuario_dato.estado');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('us_usuario_dato.estado'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('us_usuario_dato.estado');

	$filtros['us_usuario_dato.estado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('us_usuario_dato.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('us_usuario_dato.creado');
	$comparador = $criterio->getComparadorDeCampo('us_usuario_dato.creado');

	$filtros['us_usuario_dato.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('us_usuario_dato.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('us_usuario_dato.creado_por');
	$comparador = $criterio->getComparadorDeCampo('us_usuario_dato.creado_por');

	$filtros['us_usuario_dato.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('us_usuario_dato.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('us_usuario_dato.modificado');
	$comparador = $criterio->getComparadorDeCampo('us_usuario_dato.modificado');

	$filtros['us_usuario_dato.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('us_usuario_dato.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('us_usuario_dato.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('us_usuario_dato.modificado_por');

	$filtros['us_usuario_dato.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

