<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['pan_panol.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('pan_panol.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pan_panol.id');
	$comparador = $criterio->getComparadorDeCampo('pan_panol.id');

	$filtros['pan_panol.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pan_panol.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pan_panol.descripcion');
	$comparador = $criterio->getComparadorDeCampo('pan_panol.descripcion');

	$filtros['pan_panol.descripcion'] = array('campo' => 'Descripcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pan_panol.pan_tipo_panol_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pan_panol.pan_tipo_panol_id');
	$o = PanTipoPanol::getOxId($criterio->getValorDeCampo('pan_panol.pan_tipo_panol_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('pan_panol.pan_tipo_panol_id');

	$filtros['pan_panol.pan_tipo_panol_id'] = array('campo' => 'PanTipoPanol', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pan_panol.pde_centro_pedido_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pan_panol.pde_centro_pedido_id');
	$o = PdeCentroPedido::getOxId($criterio->getValorDeCampo('pan_panol.pde_centro_pedido_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('pan_panol.pde_centro_pedido_id');

	$filtros['pan_panol.pde_centro_pedido_id'] = array('campo' => 'PdeCentroPedido', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pan_panol.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pan_panol.codigo');
	$comparador = $criterio->getComparadorDeCampo('pan_panol.codigo');

	$filtros['pan_panol.codigo'] = array('campo' => 'Codigo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pan_panol.codigo_corto') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pan_panol.codigo_corto');
	$comparador = $criterio->getComparadorDeCampo('pan_panol.codigo_corto');

	$filtros['pan_panol.codigo_corto'] = array('campo' => 'Codigo Corto', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pan_panol.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pan_panol.observacion');
	$comparador = $criterio->getComparadorDeCampo('pan_panol.observacion');

	$filtros['pan_panol.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pan_panol.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pan_panol.orden');
	$comparador = $criterio->getComparadorDeCampo('pan_panol.orden');

	$filtros['pan_panol.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pan_panol.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pan_panol.estado');
	$comparador = $criterio->getComparadorDeCampo('pan_panol.estado');

	$filtros['pan_panol.estado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pan_panol.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pan_panol.creado');
	$comparador = $criterio->getComparadorDeCampo('pan_panol.creado');

	$filtros['pan_panol.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pan_panol.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pan_panol.creado_por');
	$comparador = $criterio->getComparadorDeCampo('pan_panol.creado_por');

	$filtros['pan_panol.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pan_panol.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pan_panol.modificado');
	$comparador = $criterio->getComparadorDeCampo('pan_panol.modificado');

	$filtros['pan_panol.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pan_panol.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pan_panol.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('pan_panol.modificado_por');

	$filtros['pan_panol.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

