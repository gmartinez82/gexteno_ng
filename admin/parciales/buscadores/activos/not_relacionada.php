<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['not_relacionada.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('not_relacionada.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('not_relacionada.id');
	$comparador = $criterio->getComparadorDeCampo('not_relacionada.id');

	$filtros['not_relacionada.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('not_relacionada.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('not_relacionada.descripcion');
	$comparador = $criterio->getComparadorDeCampo('not_relacionada.descripcion');

	$filtros['not_relacionada.descripcion'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('not_relacionada.not_noticia_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('not_relacionada.not_noticia_id');
	$comparador = $criterio->getComparadorDeCampo('not_relacionada.not_noticia_id');

	$filtros['not_relacionada.not_noticia_id'] = array('campo' => 'NotNoticia', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('not_relacionada.not_noticia_relacionada') != ''){
	$valor = $valor = $criterio->getValorDeCampo('not_relacionada.not_noticia_relacionada');
	$comparador = $criterio->getComparadorDeCampo('not_relacionada.not_noticia_relacionada');

	$filtros['not_relacionada.not_noticia_relacionada'] = array('campo' => 'NotNoticiaRelacionada', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('not_relacionada.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('not_relacionada.codigo');
	$comparador = $criterio->getComparadorDeCampo('not_relacionada.codigo');

	$filtros['not_relacionada.codigo'] = array('campo' => 'Codigo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('not_relacionada.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('not_relacionada.observacion');
	$comparador = $criterio->getComparadorDeCampo('not_relacionada.observacion');

	$filtros['not_relacionada.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('not_relacionada.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('not_relacionada.orden');
	$comparador = $criterio->getComparadorDeCampo('not_relacionada.orden');

	$filtros['not_relacionada.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('not_relacionada.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('not_relacionada.estado');
	$comparador = $criterio->getComparadorDeCampo('not_relacionada.estado');

	$filtros['not_relacionada.estado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('not_relacionada.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('not_relacionada.creado');
	$comparador = $criterio->getComparadorDeCampo('not_relacionada.creado');

	$filtros['not_relacionada.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('not_relacionada.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('not_relacionada.creado_por');
	$comparador = $criterio->getComparadorDeCampo('not_relacionada.creado_por');

	$filtros['not_relacionada.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('not_relacionada.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('not_relacionada.modificado');
	$comparador = $criterio->getComparadorDeCampo('not_relacionada.modificado');

	$filtros['not_relacionada.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('not_relacionada.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('not_relacionada.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('not_relacionada.modificado_por');

	$filtros['not_relacionada.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

