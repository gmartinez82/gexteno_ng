<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['gral_caja_tipo.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('gral_caja_tipo.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_caja_tipo.id');
	$comparador = $criterio->getComparadorDeCampo('gral_caja_tipo.id');

	$filtros['gral_caja_tipo.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_caja_tipo.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_caja_tipo.descripcion');
	$comparador = $criterio->getComparadorDeCampo('gral_caja_tipo.descripcion');

	$filtros['gral_caja_tipo.descripcion'] = array('campo' => 'Descripcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_caja_tipo.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_caja_tipo.codigo');
	$comparador = $criterio->getComparadorDeCampo('gral_caja_tipo.codigo');

	$filtros['gral_caja_tipo.codigo'] = array('campo' => 'Codigo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_caja_tipo.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_caja_tipo.observacion');
	$comparador = $criterio->getComparadorDeCampo('gral_caja_tipo.observacion');

	$filtros['gral_caja_tipo.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_caja_tipo.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_caja_tipo.orden');
	$comparador = $criterio->getComparadorDeCampo('gral_caja_tipo.orden');

	$filtros['gral_caja_tipo.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_caja_tipo.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_caja_tipo.estado');
	$comparador = $criterio->getComparadorDeCampo('gral_caja_tipo.estado');

	$filtros['gral_caja_tipo.estado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_caja_tipo.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_caja_tipo.creado');
	$comparador = $criterio->getComparadorDeCampo('gral_caja_tipo.creado');

	$filtros['gral_caja_tipo.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_caja_tipo.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_caja_tipo.creado_por');
	$comparador = $criterio->getComparadorDeCampo('gral_caja_tipo.creado_por');

	$filtros['gral_caja_tipo.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_caja_tipo.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_caja_tipo.modificado');
	$comparador = $criterio->getComparadorDeCampo('gral_caja_tipo.modificado');

	$filtros['gral_caja_tipo.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_caja_tipo.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_caja_tipo.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('gral_caja_tipo.modificado_por');

	$filtros['gral_caja_tipo.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

