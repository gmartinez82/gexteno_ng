<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['nov_novedad_observado.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('nov_novedad_observado.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('nov_novedad_observado.id');
	$comparador = $criterio->getComparadorDeCampo('nov_novedad_observado.id');

	$filtros['nov_novedad_observado.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('nov_novedad_observado.nov_novedad_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('nov_novedad_observado.nov_novedad_id');
	$comparador = $criterio->getComparadorDeCampo('nov_novedad_observado.nov_novedad_id');

	$filtros['nov_novedad_observado.nov_novedad_id'] = array('campo' => 'NovNovedad', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('nov_novedad_observado.us_usuario_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('nov_novedad_observado.us_usuario_id');
	$o = UsUsuario::getOxId($criterio->getValorDeCampo('nov_novedad_observado.us_usuario_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('nov_novedad_observado.us_usuario_id');

	$filtros['nov_novedad_observado.us_usuario_id'] = array('campo' => 'Usuario', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('nov_novedad_observado.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('nov_novedad_observado.descripcion');
	$comparador = $criterio->getComparadorDeCampo('nov_novedad_observado.descripcion');

	$filtros['nov_novedad_observado.descripcion'] = array('campo' => 'Descripcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('nov_novedad_observado.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('nov_novedad_observado.codigo');
	$comparador = $criterio->getComparadorDeCampo('nov_novedad_observado.codigo');

	$filtros['nov_novedad_observado.codigo'] = array('campo' => 'Codigo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('nov_novedad_observado.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('nov_novedad_observado.observacion');
	$comparador = $criterio->getComparadorDeCampo('nov_novedad_observado.observacion');

	$filtros['nov_novedad_observado.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('nov_novedad_observado.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('nov_novedad_observado.orden');
	$comparador = $criterio->getComparadorDeCampo('nov_novedad_observado.orden');

	$filtros['nov_novedad_observado.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('nov_novedad_observado.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('nov_novedad_observado.estado');
	$comparador = $criterio->getComparadorDeCampo('nov_novedad_observado.estado');

	$filtros['nov_novedad_observado.estado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('nov_novedad_observado.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('nov_novedad_observado.creado');
	$comparador = $criterio->getComparadorDeCampo('nov_novedad_observado.creado');

	$filtros['nov_novedad_observado.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('nov_novedad_observado.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('nov_novedad_observado.creado_por');
	$comparador = $criterio->getComparadorDeCampo('nov_novedad_observado.creado_por');

	$filtros['nov_novedad_observado.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('nov_novedad_observado.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('nov_novedad_observado.modificado');
	$comparador = $criterio->getComparadorDeCampo('nov_novedad_observado.modificado');

	$filtros['nov_novedad_observado.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('nov_novedad_observado.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('nov_novedad_observado.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('nov_novedad_observado.modificado_por');

	$filtros['nov_novedad_observado.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

