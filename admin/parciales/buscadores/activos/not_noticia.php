<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['not_noticia.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('not_noticia.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('not_noticia.id');
	$comparador = $criterio->getComparadorDeCampo('not_noticia.id');

	$filtros['not_noticia.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('not_noticia.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('not_noticia.descripcion');
	$comparador = $criterio->getComparadorDeCampo('not_noticia.descripcion');

	$filtros['not_noticia.descripcion'] = array('campo' => 'Titulo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('not_noticia.not_categoria_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('not_noticia.not_categoria_id');
	$o = NotCategoria::getOxId($criterio->getValorDeCampo('not_noticia.not_categoria_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('not_noticia.not_categoria_id');

	$filtros['not_noticia.not_categoria_id'] = array('campo' => 'NotCategoria', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('not_noticia.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('not_noticia.codigo');
	$comparador = $criterio->getComparadorDeCampo('not_noticia.codigo');

	$filtros['not_noticia.codigo'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('not_noticia.copete') != ''){
	$valor = $valor = $criterio->getValorDeCampo('not_noticia.copete');
	$comparador = $criterio->getComparadorDeCampo('not_noticia.copete');

	$filtros['not_noticia.copete'] = array('campo' => 'Copete', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('not_noticia.cuerpo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('not_noticia.cuerpo');
	$comparador = $criterio->getComparadorDeCampo('not_noticia.cuerpo');

	$filtros['not_noticia.cuerpo'] = array('campo' => 'Cuerpo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('not_noticia.fecha') != ''){
	$valor = Gral::getFechaToWeb($valor = $criterio->getValorDeCampo('not_noticia.fecha'));
	$comparador = $criterio->getComparadorDeCampo('not_noticia.fecha');

	$filtros['not_noticia.fecha'] = array('campo' => 'Fecha', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('not_noticia.destacado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('not_noticia.destacado');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('not_noticia.destacado'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('not_noticia.destacado');

	$filtros['not_noticia.destacado'] = array('campo' => 'Destacado', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('not_noticia.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('not_noticia.observacion');
	$comparador = $criterio->getComparadorDeCampo('not_noticia.observacion');

	$filtros['not_noticia.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('not_noticia.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('not_noticia.orden');
	$comparador = $criterio->getComparadorDeCampo('not_noticia.orden');

	$filtros['not_noticia.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('not_noticia.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('not_noticia.estado');
	$comparador = $criterio->getComparadorDeCampo('not_noticia.estado');

	$filtros['not_noticia.estado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('not_noticia.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('not_noticia.creado');
	$comparador = $criterio->getComparadorDeCampo('not_noticia.creado');

	$filtros['not_noticia.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('not_noticia.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('not_noticia.creado_por');
	$comparador = $criterio->getComparadorDeCampo('not_noticia.creado_por');

	$filtros['not_noticia.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('not_noticia.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('not_noticia.modificado');
	$comparador = $criterio->getComparadorDeCampo('not_noticia.modificado');

	$filtros['not_noticia.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('not_noticia.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('not_noticia.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('not_noticia.modificado_por');

	$filtros['not_noticia.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

