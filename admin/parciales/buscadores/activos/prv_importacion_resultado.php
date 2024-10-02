<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['prv_importacion_resultado.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('prv_importacion_resultado.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('prv_importacion_resultado.id');
	$comparador = $criterio->getComparadorDeCampo('prv_importacion_resultado.id');

	$filtros['prv_importacion_resultado.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('prv_importacion_resultado.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('prv_importacion_resultado.descripcion');
	$comparador = $criterio->getComparadorDeCampo('prv_importacion_resultado.descripcion');

	$filtros['prv_importacion_resultado.descripcion'] = array('campo' => 'Descripcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('prv_importacion_resultado.prv_importacion_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('prv_importacion_resultado.prv_importacion_id');
	$o = PrvImportacion::getOxId($criterio->getValorDeCampo('prv_importacion_resultado.prv_importacion_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('prv_importacion_resultado.prv_importacion_id');

	$filtros['prv_importacion_resultado.prv_importacion_id'] = array('campo' => 'PrvImportacion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('prv_importacion_resultado.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('prv_importacion_resultado.codigo');
	$comparador = $criterio->getComparadorDeCampo('prv_importacion_resultado.codigo');

	$filtros['prv_importacion_resultado.codigo'] = array('campo' => 'Codigo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('prv_importacion_resultado.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('prv_importacion_resultado.observacion');
	$comparador = $criterio->getComparadorDeCampo('prv_importacion_resultado.observacion');

	$filtros['prv_importacion_resultado.observacion'] = array('campo' => 'Observacion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('prv_importacion_resultado.observacion_tecnica') != ''){
	$valor = $valor = $criterio->getValorDeCampo('prv_importacion_resultado.observacion_tecnica');
	$comparador = $criterio->getComparadorDeCampo('prv_importacion_resultado.observacion_tecnica');

	$filtros['prv_importacion_resultado.observacion_tecnica'] = array('campo' => 'Observaciones Tecnicas', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('prv_importacion_resultado.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('prv_importacion_resultado.estado');
	$comparador = $criterio->getComparadorDeCampo('prv_importacion_resultado.estado');

	$filtros['prv_importacion_resultado.estado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('prv_importacion_resultado.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('prv_importacion_resultado.orden');
	$comparador = $criterio->getComparadorDeCampo('prv_importacion_resultado.orden');

	$filtros['prv_importacion_resultado.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('prv_importacion_resultado.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('prv_importacion_resultado.creado');
	$comparador = $criterio->getComparadorDeCampo('prv_importacion_resultado.creado');

	$filtros['prv_importacion_resultado.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('prv_importacion_resultado.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('prv_importacion_resultado.creado_por');
	$comparador = $criterio->getComparadorDeCampo('prv_importacion_resultado.creado_por');

	$filtros['prv_importacion_resultado.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('prv_importacion_resultado.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('prv_importacion_resultado.modificado');
	$comparador = $criterio->getComparadorDeCampo('prv_importacion_resultado.modificado');

	$filtros['prv_importacion_resultado.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('prv_importacion_resultado.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('prv_importacion_resultado.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('prv_importacion_resultado.modificado_por');

	$filtros['prv_importacion_resultado.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

