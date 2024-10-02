<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['nov_novedad_leido.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('nov_novedad_leido.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('nov_novedad_leido.id');
	$comparador = $criterio->getComparadorDeCampo('nov_novedad_leido.id');

	$filtros['nov_novedad_leido.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('nov_novedad_leido.nov_novedad_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('nov_novedad_leido.nov_novedad_id');
	$comparador = $criterio->getComparadorDeCampo('nov_novedad_leido.nov_novedad_id');

	$filtros['nov_novedad_leido.nov_novedad_id'] = array('campo' => 'NovNovedad', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('nov_novedad_leido.us_usuario_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('nov_novedad_leido.us_usuario_id');
	$o = UsUsuario::getOxId($criterio->getValorDeCampo('nov_novedad_leido.us_usuario_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('nov_novedad_leido.us_usuario_id');

	$filtros['nov_novedad_leido.us_usuario_id'] = array('campo' => 'Usuario', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('nov_novedad_leido.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('nov_novedad_leido.descripcion');
	$comparador = $criterio->getComparadorDeCampo('nov_novedad_leido.descripcion');

	$filtros['nov_novedad_leido.descripcion'] = array('campo' => 'Descripcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('nov_novedad_leido.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('nov_novedad_leido.codigo');
	$comparador = $criterio->getComparadorDeCampo('nov_novedad_leido.codigo');

	$filtros['nov_novedad_leido.codigo'] = array('campo' => 'Codigo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('nov_novedad_leido.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('nov_novedad_leido.observacion');
	$comparador = $criterio->getComparadorDeCampo('nov_novedad_leido.observacion');

	$filtros['nov_novedad_leido.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('nov_novedad_leido.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('nov_novedad_leido.orden');
	$comparador = $criterio->getComparadorDeCampo('nov_novedad_leido.orden');

	$filtros['nov_novedad_leido.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('nov_novedad_leido.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('nov_novedad_leido.estado');
	$comparador = $criterio->getComparadorDeCampo('nov_novedad_leido.estado');

	$filtros['nov_novedad_leido.estado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('nov_novedad_leido.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('nov_novedad_leido.creado');
	$comparador = $criterio->getComparadorDeCampo('nov_novedad_leido.creado');

	$filtros['nov_novedad_leido.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('nov_novedad_leido.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('nov_novedad_leido.creado_por');
	$comparador = $criterio->getComparadorDeCampo('nov_novedad_leido.creado_por');

	$filtros['nov_novedad_leido.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('nov_novedad_leido.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('nov_novedad_leido.modificado');
	$comparador = $criterio->getComparadorDeCampo('nov_novedad_leido.modificado');

	$filtros['nov_novedad_leido.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('nov_novedad_leido.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('nov_novedad_leido.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('nov_novedad_leido.modificado_por');

	$filtros['nov_novedad_leido.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

