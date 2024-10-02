<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['prv_convenio_descuento.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('prv_convenio_descuento.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('prv_convenio_descuento.id');
	$comparador = $criterio->getComparadorDeCampo('prv_convenio_descuento.id');

	$filtros['prv_convenio_descuento.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('prv_convenio_descuento.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('prv_convenio_descuento.descripcion');
	$comparador = $criterio->getComparadorDeCampo('prv_convenio_descuento.descripcion');

	$filtros['prv_convenio_descuento.descripcion'] = array('campo' => 'Descripcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('prv_convenio_descuento.prv_proveedor_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('prv_convenio_descuento.prv_proveedor_id');
	$o = PrvProveedor::getOxId($criterio->getValorDeCampo('prv_convenio_descuento.prv_proveedor_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('prv_convenio_descuento.prv_proveedor_id');

	$filtros['prv_convenio_descuento.prv_proveedor_id'] = array('campo' => 'PrvProveedor', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('prv_convenio_descuento.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('prv_convenio_descuento.codigo');
	$comparador = $criterio->getComparadorDeCampo('prv_convenio_descuento.codigo');

	$filtros['prv_convenio_descuento.codigo'] = array('campo' => 'Codigo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('prv_convenio_descuento.porcentaje_descuento') != ''){
	$valor = $valor = $criterio->getValorDeCampo('prv_convenio_descuento.porcentaje_descuento');
	$comparador = $criterio->getComparadorDeCampo('prv_convenio_descuento.porcentaje_descuento');

	$filtros['prv_convenio_descuento.porcentaje_descuento'] = array('campo' => 'Porc Descuento', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('prv_convenio_descuento.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('prv_convenio_descuento.observacion');
	$comparador = $criterio->getComparadorDeCampo('prv_convenio_descuento.observacion');

	$filtros['prv_convenio_descuento.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('prv_convenio_descuento.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('prv_convenio_descuento.orden');
	$comparador = $criterio->getComparadorDeCampo('prv_convenio_descuento.orden');

	$filtros['prv_convenio_descuento.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('prv_convenio_descuento.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('prv_convenio_descuento.estado');
	$comparador = $criterio->getComparadorDeCampo('prv_convenio_descuento.estado');

	$filtros['prv_convenio_descuento.estado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('prv_convenio_descuento.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('prv_convenio_descuento.creado');
	$comparador = $criterio->getComparadorDeCampo('prv_convenio_descuento.creado');

	$filtros['prv_convenio_descuento.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('prv_convenio_descuento.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('prv_convenio_descuento.creado_por');
	$comparador = $criterio->getComparadorDeCampo('prv_convenio_descuento.creado_por');

	$filtros['prv_convenio_descuento.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('prv_convenio_descuento.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('prv_convenio_descuento.modificado');
	$comparador = $criterio->getComparadorDeCampo('prv_convenio_descuento.modificado');

	$filtros['prv_convenio_descuento.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('prv_convenio_descuento.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('prv_convenio_descuento.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('prv_convenio_descuento.modificado_por');

	$filtros['prv_convenio_descuento.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

