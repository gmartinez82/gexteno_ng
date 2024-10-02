<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['prv_descuento_comercial.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('prv_descuento_comercial.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('prv_descuento_comercial.id');
	$comparador = $criterio->getComparadorDeCampo('prv_descuento_comercial.id');

	$filtros['prv_descuento_comercial.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('prv_descuento_comercial.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('prv_descuento_comercial.descripcion');
	$comparador = $criterio->getComparadorDeCampo('prv_descuento_comercial.descripcion');

	$filtros['prv_descuento_comercial.descripcion'] = array('campo' => 'Descripcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('prv_descuento_comercial.prv_proveedor_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('prv_descuento_comercial.prv_proveedor_id');
	$o = PrvProveedor::getOxId($criterio->getValorDeCampo('prv_descuento_comercial.prv_proveedor_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('prv_descuento_comercial.prv_proveedor_id');

	$filtros['prv_descuento_comercial.prv_proveedor_id'] = array('campo' => 'PrvProveedor', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('prv_descuento_comercial.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('prv_descuento_comercial.codigo');
	$comparador = $criterio->getComparadorDeCampo('prv_descuento_comercial.codigo');

	$filtros['prv_descuento_comercial.codigo'] = array('campo' => 'Codigo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('prv_descuento_comercial.porcentaje_descuento') != ''){
	$valor = $valor = $criterio->getValorDeCampo('prv_descuento_comercial.porcentaje_descuento');
	$comparador = $criterio->getComparadorDeCampo('prv_descuento_comercial.porcentaje_descuento');

	$filtros['prv_descuento_comercial.porcentaje_descuento'] = array('campo' => 'Porc Descuento', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('prv_descuento_comercial.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('prv_descuento_comercial.observacion');
	$comparador = $criterio->getComparadorDeCampo('prv_descuento_comercial.observacion');

	$filtros['prv_descuento_comercial.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('prv_descuento_comercial.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('prv_descuento_comercial.orden');
	$comparador = $criterio->getComparadorDeCampo('prv_descuento_comercial.orden');

	$filtros['prv_descuento_comercial.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('prv_descuento_comercial.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('prv_descuento_comercial.estado');
	$comparador = $criterio->getComparadorDeCampo('prv_descuento_comercial.estado');

	$filtros['prv_descuento_comercial.estado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('prv_descuento_comercial.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('prv_descuento_comercial.creado');
	$comparador = $criterio->getComparadorDeCampo('prv_descuento_comercial.creado');

	$filtros['prv_descuento_comercial.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('prv_descuento_comercial.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('prv_descuento_comercial.creado_por');
	$comparador = $criterio->getComparadorDeCampo('prv_descuento_comercial.creado_por');

	$filtros['prv_descuento_comercial.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('prv_descuento_comercial.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('prv_descuento_comercial.modificado');
	$comparador = $criterio->getComparadorDeCampo('prv_descuento_comercial.modificado');

	$filtros['prv_descuento_comercial.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('prv_descuento_comercial.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('prv_descuento_comercial.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('prv_descuento_comercial.modificado_por');

	$filtros['prv_descuento_comercial.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

