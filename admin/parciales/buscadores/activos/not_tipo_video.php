<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['not_tipo_video.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('not_tipo_video.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('not_tipo_video.id');
	$comparador = $criterio->getComparadorDeCampo('not_tipo_video.id');

	$filtros['not_tipo_video.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('not_tipo_video.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('not_tipo_video.descripcion');
	$comparador = $criterio->getComparadorDeCampo('not_tipo_video.descripcion');

	$filtros['not_tipo_video.descripcion'] = array('campo' => 'Descripcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('not_tipo_video.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('not_tipo_video.codigo');
	$comparador = $criterio->getComparadorDeCampo('not_tipo_video.codigo');

	$filtros['not_tipo_video.codigo'] = array('campo' => 'Codigo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('not_tipo_video.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('not_tipo_video.observacion');
	$comparador = $criterio->getComparadorDeCampo('not_tipo_video.observacion');

	$filtros['not_tipo_video.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('not_tipo_video.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('not_tipo_video.orden');
	$comparador = $criterio->getComparadorDeCampo('not_tipo_video.orden');

	$filtros['not_tipo_video.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('not_tipo_video.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('not_tipo_video.estado');
	$comparador = $criterio->getComparadorDeCampo('not_tipo_video.estado');

	$filtros['not_tipo_video.estado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('not_tipo_video.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('not_tipo_video.creado');
	$comparador = $criterio->getComparadorDeCampo('not_tipo_video.creado');

	$filtros['not_tipo_video.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('not_tipo_video.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('not_tipo_video.creado_por');
	$comparador = $criterio->getComparadorDeCampo('not_tipo_video.creado_por');

	$filtros['not_tipo_video.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('not_tipo_video.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('not_tipo_video.modificado');
	$comparador = $criterio->getComparadorDeCampo('not_tipo_video.modificado');

	$filtros['not_tipo_video.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('not_tipo_video.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('not_tipo_video.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('not_tipo_video.modificado_por');

	$filtros['not_tipo_video.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

