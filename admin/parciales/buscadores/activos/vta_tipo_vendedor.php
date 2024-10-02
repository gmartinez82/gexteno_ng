<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['vta_tipo_vendedor.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('vta_tipo_vendedor.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_tipo_vendedor.id');
	$comparador = $criterio->getComparadorDeCampo('vta_tipo_vendedor.id');

	$filtros['vta_tipo_vendedor.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_tipo_vendedor.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_tipo_vendedor.descripcion');
	$comparador = $criterio->getComparadorDeCampo('vta_tipo_vendedor.descripcion');

	$filtros['vta_tipo_vendedor.descripcion'] = array('campo' => 'Descripcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_tipo_vendedor.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_tipo_vendedor.codigo');
	$comparador = $criterio->getComparadorDeCampo('vta_tipo_vendedor.codigo');

	$filtros['vta_tipo_vendedor.codigo'] = array('campo' => 'Codigo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_tipo_vendedor.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_tipo_vendedor.observacion');
	$comparador = $criterio->getComparadorDeCampo('vta_tipo_vendedor.observacion');

	$filtros['vta_tipo_vendedor.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_tipo_vendedor.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_tipo_vendedor.orden');
	$comparador = $criterio->getComparadorDeCampo('vta_tipo_vendedor.orden');

	$filtros['vta_tipo_vendedor.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_tipo_vendedor.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_tipo_vendedor.estado');
	$comparador = $criterio->getComparadorDeCampo('vta_tipo_vendedor.estado');

	$filtros['vta_tipo_vendedor.estado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_tipo_vendedor.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_tipo_vendedor.creado');
	$comparador = $criterio->getComparadorDeCampo('vta_tipo_vendedor.creado');

	$filtros['vta_tipo_vendedor.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_tipo_vendedor.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_tipo_vendedor.creado_por');
	$comparador = $criterio->getComparadorDeCampo('vta_tipo_vendedor.creado_por');

	$filtros['vta_tipo_vendedor.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_tipo_vendedor.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_tipo_vendedor.modificado');
	$comparador = $criterio->getComparadorDeCampo('vta_tipo_vendedor.modificado');

	$filtros['vta_tipo_vendedor.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_tipo_vendedor.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_tipo_vendedor.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('vta_tipo_vendedor.modificado_por');

	$filtros['vta_tipo_vendedor.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

