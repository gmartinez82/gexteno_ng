<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['vta_tipo_comprador.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('vta_tipo_comprador.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_tipo_comprador.id');
	$comparador = $criterio->getComparadorDeCampo('vta_tipo_comprador.id');

	$filtros['vta_tipo_comprador.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_tipo_comprador.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_tipo_comprador.descripcion');
	$comparador = $criterio->getComparadorDeCampo('vta_tipo_comprador.descripcion');

	$filtros['vta_tipo_comprador.descripcion'] = array('campo' => 'Descripcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_tipo_comprador.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_tipo_comprador.codigo');
	$comparador = $criterio->getComparadorDeCampo('vta_tipo_comprador.codigo');

	$filtros['vta_tipo_comprador.codigo'] = array('campo' => 'Codigo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_tipo_comprador.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_tipo_comprador.observacion');
	$comparador = $criterio->getComparadorDeCampo('vta_tipo_comprador.observacion');

	$filtros['vta_tipo_comprador.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_tipo_comprador.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_tipo_comprador.orden');
	$comparador = $criterio->getComparadorDeCampo('vta_tipo_comprador.orden');

	$filtros['vta_tipo_comprador.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_tipo_comprador.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_tipo_comprador.estado');
	$comparador = $criterio->getComparadorDeCampo('vta_tipo_comprador.estado');

	$filtros['vta_tipo_comprador.estado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_tipo_comprador.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_tipo_comprador.creado');
	$comparador = $criterio->getComparadorDeCampo('vta_tipo_comprador.creado');

	$filtros['vta_tipo_comprador.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_tipo_comprador.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_tipo_comprador.creado_por');
	$comparador = $criterio->getComparadorDeCampo('vta_tipo_comprador.creado_por');

	$filtros['vta_tipo_comprador.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_tipo_comprador.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_tipo_comprador.modificado');
	$comparador = $criterio->getComparadorDeCampo('vta_tipo_comprador.modificado');

	$filtros['vta_tipo_comprador.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_tipo_comprador.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_tipo_comprador.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('vta_tipo_comprador.modificado_por');

	$filtros['vta_tipo_comprador.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

