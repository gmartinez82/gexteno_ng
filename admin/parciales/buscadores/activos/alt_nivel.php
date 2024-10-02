<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['alt_nivel.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('alt_nivel.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('alt_nivel.id');
	$comparador = $criterio->getComparadorDeCampo('alt_nivel.id');

	$filtros['alt_nivel.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('alt_nivel.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('alt_nivel.descripcion');
	$comparador = $criterio->getComparadorDeCampo('alt_nivel.descripcion');

	$filtros['alt_nivel.descripcion'] = array('campo' => 'Descripcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('alt_nivel.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('alt_nivel.codigo');
	$comparador = $criterio->getComparadorDeCampo('alt_nivel.codigo');

	$filtros['alt_nivel.codigo'] = array('campo' => 'Codigo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('alt_nivel.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('alt_nivel.observacion');
	$comparador = $criterio->getComparadorDeCampo('alt_nivel.observacion');

	$filtros['alt_nivel.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('alt_nivel.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('alt_nivel.orden');
	$comparador = $criterio->getComparadorDeCampo('alt_nivel.orden');

	$filtros['alt_nivel.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('alt_nivel.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('alt_nivel.estado');
	$comparador = $criterio->getComparadorDeCampo('alt_nivel.estado');

	$filtros['alt_nivel.estado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('alt_nivel.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('alt_nivel.creado');
	$comparador = $criterio->getComparadorDeCampo('alt_nivel.creado');

	$filtros['alt_nivel.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('alt_nivel.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('alt_nivel.creado_por');
	$comparador = $criterio->getComparadorDeCampo('alt_nivel.creado_por');

	$filtros['alt_nivel.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('alt_nivel.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('alt_nivel.modificado');
	$comparador = $criterio->getComparadorDeCampo('alt_nivel.modificado');

	$filtros['alt_nivel.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('alt_nivel.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('alt_nivel.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('alt_nivel.modificado_por');

	$filtros['alt_nivel.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

