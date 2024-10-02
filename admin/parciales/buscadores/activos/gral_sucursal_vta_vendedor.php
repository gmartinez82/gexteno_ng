<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['gral_sucursal_vta_vendedor.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('gral_sucursal_vta_vendedor.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_sucursal_vta_vendedor.id');
	$comparador = $criterio->getComparadorDeCampo('gral_sucursal_vta_vendedor.id');

	$filtros['gral_sucursal_vta_vendedor.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_sucursal_vta_vendedor.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_sucursal_vta_vendedor.descripcion');
	$comparador = $criterio->getComparadorDeCampo('gral_sucursal_vta_vendedor.descripcion');

	$filtros['gral_sucursal_vta_vendedor.descripcion'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_sucursal_vta_vendedor.gral_sucursal_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_sucursal_vta_vendedor.gral_sucursal_id');
	$o = GralSucursal::getOxId($criterio->getValorDeCampo('gral_sucursal_vta_vendedor.gral_sucursal_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('gral_sucursal_vta_vendedor.gral_sucursal_id');

	$filtros['gral_sucursal_vta_vendedor.gral_sucursal_id'] = array('campo' => 'GralSucursal', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_sucursal_vta_vendedor.vta_vendedor_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_sucursal_vta_vendedor.vta_vendedor_id');
	$comparador = $criterio->getComparadorDeCampo('gral_sucursal_vta_vendedor.vta_vendedor_id');

	$filtros['gral_sucursal_vta_vendedor.vta_vendedor_id'] = array('campo' => 'VtaVendedor', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_sucursal_vta_vendedor.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_sucursal_vta_vendedor.codigo');
	$comparador = $criterio->getComparadorDeCampo('gral_sucursal_vta_vendedor.codigo');

	$filtros['gral_sucursal_vta_vendedor.codigo'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_sucursal_vta_vendedor.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_sucursal_vta_vendedor.observacion');
	$comparador = $criterio->getComparadorDeCampo('gral_sucursal_vta_vendedor.observacion');

	$filtros['gral_sucursal_vta_vendedor.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_sucursal_vta_vendedor.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_sucursal_vta_vendedor.orden');
	$comparador = $criterio->getComparadorDeCampo('gral_sucursal_vta_vendedor.orden');

	$filtros['gral_sucursal_vta_vendedor.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_sucursal_vta_vendedor.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_sucursal_vta_vendedor.estado');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('gral_sucursal_vta_vendedor.estado'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('gral_sucursal_vta_vendedor.estado');

	$filtros['gral_sucursal_vta_vendedor.estado'] = array('campo' => 'Estado', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_sucursal_vta_vendedor.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_sucursal_vta_vendedor.creado');
	$comparador = $criterio->getComparadorDeCampo('gral_sucursal_vta_vendedor.creado');

	$filtros['gral_sucursal_vta_vendedor.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_sucursal_vta_vendedor.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_sucursal_vta_vendedor.creado_por');
	$comparador = $criterio->getComparadorDeCampo('gral_sucursal_vta_vendedor.creado_por');

	$filtros['gral_sucursal_vta_vendedor.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_sucursal_vta_vendedor.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_sucursal_vta_vendedor.modificado');
	$comparador = $criterio->getComparadorDeCampo('gral_sucursal_vta_vendedor.modificado');

	$filtros['gral_sucursal_vta_vendedor.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_sucursal_vta_vendedor.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_sucursal_vta_vendedor.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('gral_sucursal_vta_vendedor.modificado_por');

	$filtros['gral_sucursal_vta_vendedor.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

