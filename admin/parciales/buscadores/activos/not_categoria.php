<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['not_categoria.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('not_categoria.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('not_categoria.id');
	$comparador = $criterio->getComparadorDeCampo('not_categoria.id');

	$filtros['not_categoria.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('not_categoria.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('not_categoria.descripcion');
	$comparador = $criterio->getComparadorDeCampo('not_categoria.descripcion');

	$filtros['not_categoria.descripcion'] = array('campo' => 'Descripcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('not_categoria.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('not_categoria.codigo');
	$comparador = $criterio->getComparadorDeCampo('not_categoria.codigo');

	$filtros['not_categoria.codigo'] = array('campo' => 'Codigo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('not_categoria.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('not_categoria.observacion');
	$comparador = $criterio->getComparadorDeCampo('not_categoria.observacion');

	$filtros['not_categoria.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('not_categoria.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('not_categoria.orden');
	$comparador = $criterio->getComparadorDeCampo('not_categoria.orden');

	$filtros['not_categoria.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('not_categoria.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('not_categoria.estado');
	$comparador = $criterio->getComparadorDeCampo('not_categoria.estado');

	$filtros['not_categoria.estado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('not_categoria.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('not_categoria.creado');
	$comparador = $criterio->getComparadorDeCampo('not_categoria.creado');

	$filtros['not_categoria.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('not_categoria.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('not_categoria.creado_por');
	$comparador = $criterio->getComparadorDeCampo('not_categoria.creado_por');

	$filtros['not_categoria.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('not_categoria.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('not_categoria.modificado');
	$comparador = $criterio->getComparadorDeCampo('not_categoria.modificado');

	$filtros['not_categoria.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('not_categoria.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('not_categoria.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('not_categoria.modificado_por');

	$filtros['not_categoria.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

