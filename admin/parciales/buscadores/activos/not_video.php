<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['not_video.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('not_video.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('not_video.id');
	$comparador = $criterio->getComparadorDeCampo('not_video.id');

	$filtros['not_video.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('not_video.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('not_video.descripcion');
	$comparador = $criterio->getComparadorDeCampo('not_video.descripcion');

	$filtros['not_video.descripcion'] = array('campo' => 'Descripcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('not_video.not_noticia_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('not_video.not_noticia_id');
	$comparador = $criterio->getComparadorDeCampo('not_video.not_noticia_id');

	$filtros['not_video.not_noticia_id'] = array('campo' => 'NotNoticia', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('not_video.not_tipo_video_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('not_video.not_tipo_video_id');
	$o = NotTipoVideo::getOxId($criterio->getValorDeCampo('not_video.not_tipo_video_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('not_video.not_tipo_video_id');

	$filtros['not_video.not_tipo_video_id'] = array('campo' => 'NotTipoVideo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('not_video.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('not_video.codigo');
	$comparador = $criterio->getComparadorDeCampo('not_video.codigo');

	$filtros['not_video.codigo'] = array('campo' => 'URL Externa', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('not_video.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('not_video.observacion');
	$comparador = $criterio->getComparadorDeCampo('not_video.observacion');

	$filtros['not_video.observacion'] = array('campo' => 'HTML Externo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('not_video.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('not_video.orden');
	$comparador = $criterio->getComparadorDeCampo('not_video.orden');

	$filtros['not_video.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('not_video.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('not_video.estado');
	$comparador = $criterio->getComparadorDeCampo('not_video.estado');

	$filtros['not_video.estado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('not_video.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('not_video.creado');
	$comparador = $criterio->getComparadorDeCampo('not_video.creado');

	$filtros['not_video.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('not_video.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('not_video.creado_por');
	$comparador = $criterio->getComparadorDeCampo('not_video.creado_por');

	$filtros['not_video.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('not_video.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('not_video.modificado');
	$comparador = $criterio->getComparadorDeCampo('not_video.modificado');

	$filtros['not_video.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('not_video.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('not_video.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('not_video.modificado_por');

	$filtros['not_video.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

