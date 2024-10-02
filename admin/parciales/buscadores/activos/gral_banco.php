<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['gral_banco.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('gral_banco.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_banco.id');
	$comparador = $criterio->getComparadorDeCampo('gral_banco.id');

	$filtros['gral_banco.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_banco.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_banco.descripcion');
	$comparador = $criterio->getComparadorDeCampo('gral_banco.descripcion');

	$filtros['gral_banco.descripcion'] = array('campo' => 'Descripcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_banco.descripcion_corta') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_banco.descripcion_corta');
	$comparador = $criterio->getComparadorDeCampo('gral_banco.descripcion_corta');

	$filtros['gral_banco.descripcion_corta'] = array('campo' => 'Descripcion Corta', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_banco.codigo_numerico') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_banco.codigo_numerico');
	$comparador = $criterio->getComparadorDeCampo('gral_banco.codigo_numerico');

	$filtros['gral_banco.codigo_numerico'] = array('campo' => 'Codigo Numerico', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_banco.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_banco.codigo');
	$comparador = $criterio->getComparadorDeCampo('gral_banco.codigo');

	$filtros['gral_banco.codigo'] = array('campo' => 'Codigo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_banco.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_banco.observacion');
	$comparador = $criterio->getComparadorDeCampo('gral_banco.observacion');

	$filtros['gral_banco.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_banco.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_banco.orden');
	$comparador = $criterio->getComparadorDeCampo('gral_banco.orden');

	$filtros['gral_banco.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_banco.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_banco.estado');
	$comparador = $criterio->getComparadorDeCampo('gral_banco.estado');

	$filtros['gral_banco.estado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_banco.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_banco.creado');
	$comparador = $criterio->getComparadorDeCampo('gral_banco.creado');

	$filtros['gral_banco.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_banco.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_banco.creado_por');
	$comparador = $criterio->getComparadorDeCampo('gral_banco.creado_por');

	$filtros['gral_banco.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_banco.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_banco.modificado');
	$comparador = $criterio->getComparadorDeCampo('gral_banco.modificado');

	$filtros['gral_banco.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_banco.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_banco.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('gral_banco.modificado_por');

	$filtros['gral_banco.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

