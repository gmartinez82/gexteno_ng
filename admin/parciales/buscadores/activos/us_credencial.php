<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['us_credencial.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('us_acreditado.us_usuario_id') != ''){
	$valor = $criterio->getValorDeCampo('us_acreditado.us_usuario_id');
	$o = UsUsuario::getOxId($criterio->getValorDeCampo('us_acreditado.us_usuario_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('us_acreditado.us_usuario_id');

	$filtros['us_acreditado.us_usuario_id'] = array('campo' => 'UsUsuario', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('us_agrupador.us_grupo_id') != ''){
	$valor = $criterio->getValorDeCampo('us_agrupador.us_grupo_id');
	$o = UsGrupo::getOxId($criterio->getValorDeCampo('us_agrupador.us_grupo_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('us_agrupador.us_grupo_id');

	$filtros['us_agrupador.us_grupo_id'] = array('campo' => 'UsGrupo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('us_credencial.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('us_credencial.id');
	$comparador = $criterio->getComparadorDeCampo('us_credencial.id');

	$filtros['us_credencial.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('us_credencial.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('us_credencial.descripcion');
	$comparador = $criterio->getComparadorDeCampo('us_credencial.descripcion');

	$filtros['us_credencial.descripcion'] = array('campo' => 'Descripcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('us_credencial.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('us_credencial.codigo');
	$comparador = $criterio->getComparadorDeCampo('us_credencial.codigo');

	$filtros['us_credencial.codigo'] = array('campo' => 'Codigo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('us_credencial.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('us_credencial.observacion');
	$comparador = $criterio->getComparadorDeCampo('us_credencial.observacion');

	$filtros['us_credencial.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('us_credencial.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('us_credencial.orden');
	$comparador = $criterio->getComparadorDeCampo('us_credencial.orden');

	$filtros['us_credencial.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('us_credencial.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('us_credencial.estado');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('us_credencial.estado'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('us_credencial.estado');

	$filtros['us_credencial.estado'] = array('campo' => 'Estado', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('us_credencial.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('us_credencial.creado');
	$comparador = $criterio->getComparadorDeCampo('us_credencial.creado');

	$filtros['us_credencial.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('us_credencial.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('us_credencial.creado_por');
	$comparador = $criterio->getComparadorDeCampo('us_credencial.creado_por');

	$filtros['us_credencial.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('us_credencial.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('us_credencial.modificado');
	$comparador = $criterio->getComparadorDeCampo('us_credencial.modificado');

	$filtros['us_credencial.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('us_credencial.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('us_credencial.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('us_credencial.modificado_por');

	$filtros['us_credencial.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

