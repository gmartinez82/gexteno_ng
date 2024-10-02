<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['gral_mes.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('gral_mes.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_mes.id');
	$comparador = $criterio->getComparadorDeCampo('gral_mes.id');

	$filtros['gral_mes.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_mes.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_mes.descripcion');
	$comparador = $criterio->getComparadorDeCampo('gral_mes.descripcion');

	$filtros['gral_mes.descripcion'] = array('campo' => 'Descripcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_mes.descripcion_corta') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_mes.descripcion_corta');
	$comparador = $criterio->getComparadorDeCampo('gral_mes.descripcion_corta');

	$filtros['gral_mes.descripcion_corta'] = array('campo' => 'Descripcion Corta', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_mes.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_mes.codigo');
	$comparador = $criterio->getComparadorDeCampo('gral_mes.codigo');

	$filtros['gral_mes.codigo'] = array('campo' => 'Codigo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_mes.codigo_numero') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_mes.codigo_numero');
	$comparador = $criterio->getComparadorDeCampo('gral_mes.codigo_numero');

	$filtros['gral_mes.codigo_numero'] = array('campo' => 'Codigo Numero', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_mes.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_mes.observacion');
	$comparador = $criterio->getComparadorDeCampo('gral_mes.observacion');

	$filtros['gral_mes.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_mes.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_mes.orden');
	$comparador = $criterio->getComparadorDeCampo('gral_mes.orden');

	$filtros['gral_mes.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_mes.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_mes.estado');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('gral_mes.estado'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('gral_mes.estado');

	$filtros['gral_mes.estado'] = array('campo' => 'Estado', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_mes.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_mes.creado');
	$comparador = $criterio->getComparadorDeCampo('gral_mes.creado');

	$filtros['gral_mes.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_mes.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_mes.creado_por');
	$comparador = $criterio->getComparadorDeCampo('gral_mes.creado_por');

	$filtros['gral_mes.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_mes.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_mes.modificado');
	$comparador = $criterio->getComparadorDeCampo('gral_mes.modificado');

	$filtros['gral_mes.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_mes.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_mes.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('gral_mes.modificado_por');

	$filtros['gral_mes.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

