<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['prv_descuento_financiero.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('prv_descuento_financiero.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('prv_descuento_financiero.id');
	$comparador = $criterio->getComparadorDeCampo('prv_descuento_financiero.id');

	$filtros['prv_descuento_financiero.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('prv_descuento_financiero.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('prv_descuento_financiero.descripcion');
	$comparador = $criterio->getComparadorDeCampo('prv_descuento_financiero.descripcion');

	$filtros['prv_descuento_financiero.descripcion'] = array('campo' => 'Descripcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('prv_descuento_financiero.prv_proveedor_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('prv_descuento_financiero.prv_proveedor_id');
	$o = PrvProveedor::getOxId($criterio->getValorDeCampo('prv_descuento_financiero.prv_proveedor_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('prv_descuento_financiero.prv_proveedor_id');

	$filtros['prv_descuento_financiero.prv_proveedor_id'] = array('campo' => 'PrvProveedor', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('prv_descuento_financiero.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('prv_descuento_financiero.codigo');
	$comparador = $criterio->getComparadorDeCampo('prv_descuento_financiero.codigo');

	$filtros['prv_descuento_financiero.codigo'] = array('campo' => 'Codigo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('prv_descuento_financiero.porcentaje_descuento') != ''){
	$valor = $valor = $criterio->getValorDeCampo('prv_descuento_financiero.porcentaje_descuento');
	$comparador = $criterio->getComparadorDeCampo('prv_descuento_financiero.porcentaje_descuento');

	$filtros['prv_descuento_financiero.porcentaje_descuento'] = array('campo' => 'Porc Descuento', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('prv_descuento_financiero.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('prv_descuento_financiero.observacion');
	$comparador = $criterio->getComparadorDeCampo('prv_descuento_financiero.observacion');

	$filtros['prv_descuento_financiero.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('prv_descuento_financiero.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('prv_descuento_financiero.orden');
	$comparador = $criterio->getComparadorDeCampo('prv_descuento_financiero.orden');

	$filtros['prv_descuento_financiero.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('prv_descuento_financiero.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('prv_descuento_financiero.estado');
	$comparador = $criterio->getComparadorDeCampo('prv_descuento_financiero.estado');

	$filtros['prv_descuento_financiero.estado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('prv_descuento_financiero.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('prv_descuento_financiero.creado');
	$comparador = $criterio->getComparadorDeCampo('prv_descuento_financiero.creado');

	$filtros['prv_descuento_financiero.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('prv_descuento_financiero.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('prv_descuento_financiero.creado_por');
	$comparador = $criterio->getComparadorDeCampo('prv_descuento_financiero.creado_por');

	$filtros['prv_descuento_financiero.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('prv_descuento_financiero.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('prv_descuento_financiero.modificado');
	$comparador = $criterio->getComparadorDeCampo('prv_descuento_financiero.modificado');

	$filtros['prv_descuento_financiero.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('prv_descuento_financiero.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('prv_descuento_financiero.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('prv_descuento_financiero.modificado_por');

	$filtros['prv_descuento_financiero.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

