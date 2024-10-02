<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['not_noticia_imagen.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('not_noticia_imagen.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('not_noticia_imagen.id');
	$comparador = $criterio->getComparadorDeCampo('not_noticia_imagen.id');

	$filtros['not_noticia_imagen.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('not_noticia_imagen.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('not_noticia_imagen.descripcion');
	$comparador = $criterio->getComparadorDeCampo('not_noticia_imagen.descripcion');

	$filtros['not_noticia_imagen.descripcion'] = array('campo' => 'Descripcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('not_noticia_imagen.not_noticia_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('not_noticia_imagen.not_noticia_id');
	$comparador = $criterio->getComparadorDeCampo('not_noticia_imagen.not_noticia_id');

	$filtros['not_noticia_imagen.not_noticia_id'] = array('campo' => 'NotNoticia', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('not_noticia_imagen.not_tipo_imagen_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('not_noticia_imagen.not_tipo_imagen_id');
	$o = NotTipoImagen::getOxId($criterio->getValorDeCampo('not_noticia_imagen.not_tipo_imagen_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('not_noticia_imagen.not_tipo_imagen_id');

	$filtros['not_noticia_imagen.not_tipo_imagen_id'] = array('campo' => 'NotTipoImagen', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('not_noticia_imagen.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('not_noticia_imagen.codigo');
	$comparador = $criterio->getComparadorDeCampo('not_noticia_imagen.codigo');

	$filtros['not_noticia_imagen.codigo'] = array('campo' => 'Codigo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('not_noticia_imagen.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('not_noticia_imagen.observacion');
	$comparador = $criterio->getComparadorDeCampo('not_noticia_imagen.observacion');

	$filtros['not_noticia_imagen.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('not_noticia_imagen.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('not_noticia_imagen.orden');
	$comparador = $criterio->getComparadorDeCampo('not_noticia_imagen.orden');

	$filtros['not_noticia_imagen.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('not_noticia_imagen.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('not_noticia_imagen.estado');
	$comparador = $criterio->getComparadorDeCampo('not_noticia_imagen.estado');

	$filtros['not_noticia_imagen.estado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('not_noticia_imagen.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('not_noticia_imagen.creado');
	$comparador = $criterio->getComparadorDeCampo('not_noticia_imagen.creado');

	$filtros['not_noticia_imagen.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('not_noticia_imagen.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('not_noticia_imagen.creado_por');
	$comparador = $criterio->getComparadorDeCampo('not_noticia_imagen.creado_por');

	$filtros['not_noticia_imagen.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('not_noticia_imagen.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('not_noticia_imagen.modificado');
	$comparador = $criterio->getComparadorDeCampo('not_noticia_imagen.modificado');

	$filtros['not_noticia_imagen.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('not_noticia_imagen.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('not_noticia_imagen.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('not_noticia_imagen.modificado_por');

	$filtros['not_noticia_imagen.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('not_noticia_imagen.archivo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('not_noticia_imagen.archivo');
	$comparador = $criterio->getComparadorDeCampo('not_noticia_imagen.archivo');

	$filtros['not_noticia_imagen.archivo'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('not_noticia_imagen.peso') != ''){
	$valor = $valor = $criterio->getValorDeCampo('not_noticia_imagen.peso');
	$comparador = $criterio->getComparadorDeCampo('not_noticia_imagen.peso');

	$filtros['not_noticia_imagen.peso'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('not_noticia_imagen.tipo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('not_noticia_imagen.tipo');
	$comparador = $criterio->getComparadorDeCampo('not_noticia_imagen.tipo');

	$filtros['not_noticia_imagen.tipo'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('not_noticia_imagen.alto') != ''){
	$valor = $valor = $criterio->getValorDeCampo('not_noticia_imagen.alto');
	$comparador = $criterio->getComparadorDeCampo('not_noticia_imagen.alto');

	$filtros['not_noticia_imagen.alto'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('not_noticia_imagen.ancho') != ''){
	$valor = $valor = $criterio->getValorDeCampo('not_noticia_imagen.ancho');
	$comparador = $criterio->getComparadorDeCampo('not_noticia_imagen.ancho');

	$filtros['not_noticia_imagen.ancho'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

