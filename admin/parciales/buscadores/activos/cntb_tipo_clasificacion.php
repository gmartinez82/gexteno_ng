<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['cntb_tipo_clasificacion.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('cntb_tipo_clasificacion.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cntb_tipo_clasificacion.id');
	$comparador = $criterio->getComparadorDeCampo('cntb_tipo_clasificacion.id');

	$filtros['cntb_tipo_clasificacion.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cntb_tipo_clasificacion.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cntb_tipo_clasificacion.descripcion');
	$comparador = $criterio->getComparadorDeCampo('cntb_tipo_clasificacion.descripcion');

	$filtros['cntb_tipo_clasificacion.descripcion'] = array('campo' => 'Descripcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cntb_tipo_clasificacion.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cntb_tipo_clasificacion.codigo');
	$comparador = $criterio->getComparadorDeCampo('cntb_tipo_clasificacion.codigo');

	$filtros['cntb_tipo_clasificacion.codigo'] = array('campo' => 'Codigo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cntb_tipo_clasificacion.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cntb_tipo_clasificacion.observacion');
	$comparador = $criterio->getComparadorDeCampo('cntb_tipo_clasificacion.observacion');

	$filtros['cntb_tipo_clasificacion.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cntb_tipo_clasificacion.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cntb_tipo_clasificacion.orden');
	$comparador = $criterio->getComparadorDeCampo('cntb_tipo_clasificacion.orden');

	$filtros['cntb_tipo_clasificacion.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cntb_tipo_clasificacion.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cntb_tipo_clasificacion.estado');
	$comparador = $criterio->getComparadorDeCampo('cntb_tipo_clasificacion.estado');

	$filtros['cntb_tipo_clasificacion.estado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cntb_tipo_clasificacion.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cntb_tipo_clasificacion.creado');
	$comparador = $criterio->getComparadorDeCampo('cntb_tipo_clasificacion.creado');

	$filtros['cntb_tipo_clasificacion.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cntb_tipo_clasificacion.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cntb_tipo_clasificacion.creado_por');
	$comparador = $criterio->getComparadorDeCampo('cntb_tipo_clasificacion.creado_por');

	$filtros['cntb_tipo_clasificacion.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cntb_tipo_clasificacion.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cntb_tipo_clasificacion.modificado');
	$comparador = $criterio->getComparadorDeCampo('cntb_tipo_clasificacion.modificado');

	$filtros['cntb_tipo_clasificacion.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cntb_tipo_clasificacion.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cntb_tipo_clasificacion.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('cntb_tipo_clasificacion.modificado_por');

	$filtros['cntb_tipo_clasificacion.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

