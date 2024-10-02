<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['us_clave.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('us_clave.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('us_clave.id');
	$comparador = $criterio->getComparadorDeCampo('us_clave.id');

	$filtros['us_clave.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('us_clave.us_usuario_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('us_clave.us_usuario_id');
	$o = UsUsuario::getOxId($criterio->getValorDeCampo('us_clave.us_usuario_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('us_clave.us_usuario_id');

	$filtros['us_clave.us_usuario_id'] = array('campo' => 'Usuario', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('us_clave.clave') != ''){
	$valor = $valor = $criterio->getValorDeCampo('us_clave.clave');
	$comparador = $criterio->getComparadorDeCampo('us_clave.clave');

	$filtros['us_clave.clave'] = array('campo' => 'Clave', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('us_clave.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('us_clave.observacion');
	$comparador = $criterio->getComparadorDeCampo('us_clave.observacion');

	$filtros['us_clave.observacion'] = array('campo' => 'Observacion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('us_clave.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('us_clave.estado');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('us_clave.estado'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('us_clave.estado');

	$filtros['us_clave.estado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('us_clave.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('us_clave.creado');
	$comparador = $criterio->getComparadorDeCampo('us_clave.creado');

	$filtros['us_clave.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('us_clave.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('us_clave.creado_por');
	$comparador = $criterio->getComparadorDeCampo('us_clave.creado_por');

	$filtros['us_clave.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('us_clave.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('us_clave.modificado');
	$comparador = $criterio->getComparadorDeCampo('us_clave.modificado');

	$filtros['us_clave.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('us_clave.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('us_clave.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('us_clave.modificado_por');

	$filtros['us_clave.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

