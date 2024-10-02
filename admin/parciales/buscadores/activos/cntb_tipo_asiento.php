<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['cntb_tipo_asiento.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('cntb_tipo_asiento.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cntb_tipo_asiento.id');
	$comparador = $criterio->getComparadorDeCampo('cntb_tipo_asiento.id');

	$filtros['cntb_tipo_asiento.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cntb_tipo_asiento.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cntb_tipo_asiento.descripcion');
	$comparador = $criterio->getComparadorDeCampo('cntb_tipo_asiento.descripcion');

	$filtros['cntb_tipo_asiento.descripcion'] = array('campo' => 'Descripcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cntb_tipo_asiento.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cntb_tipo_asiento.codigo');
	$comparador = $criterio->getComparadorDeCampo('cntb_tipo_asiento.codigo');

	$filtros['cntb_tipo_asiento.codigo'] = array('campo' => 'Codigo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cntb_tipo_asiento.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cntb_tipo_asiento.observacion');
	$comparador = $criterio->getComparadorDeCampo('cntb_tipo_asiento.observacion');

	$filtros['cntb_tipo_asiento.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cntb_tipo_asiento.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cntb_tipo_asiento.orden');
	$comparador = $criterio->getComparadorDeCampo('cntb_tipo_asiento.orden');

	$filtros['cntb_tipo_asiento.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cntb_tipo_asiento.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cntb_tipo_asiento.estado');
	$comparador = $criterio->getComparadorDeCampo('cntb_tipo_asiento.estado');

	$filtros['cntb_tipo_asiento.estado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cntb_tipo_asiento.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cntb_tipo_asiento.creado');
	$comparador = $criterio->getComparadorDeCampo('cntb_tipo_asiento.creado');

	$filtros['cntb_tipo_asiento.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cntb_tipo_asiento.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cntb_tipo_asiento.creado_por');
	$comparador = $criterio->getComparadorDeCampo('cntb_tipo_asiento.creado_por');

	$filtros['cntb_tipo_asiento.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cntb_tipo_asiento.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cntb_tipo_asiento.modificado');
	$comparador = $criterio->getComparadorDeCampo('cntb_tipo_asiento.modificado');

	$filtros['cntb_tipo_asiento.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cntb_tipo_asiento.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cntb_tipo_asiento.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('cntb_tipo_asiento.modificado_por');

	$filtros['cntb_tipo_asiento.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

