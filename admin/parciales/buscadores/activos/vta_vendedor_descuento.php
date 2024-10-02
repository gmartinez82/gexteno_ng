<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['vta_vendedor_descuento.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('vta_vendedor_descuento.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_vendedor_descuento.id');
	$comparador = $criterio->getComparadorDeCampo('vta_vendedor_descuento.id');

	$filtros['vta_vendedor_descuento.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_vendedor_descuento.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_vendedor_descuento.descripcion');
	$comparador = $criterio->getComparadorDeCampo('vta_vendedor_descuento.descripcion');

	$filtros['vta_vendedor_descuento.descripcion'] = array('campo' => 'Descripcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_vendedor_descuento.vta_vendedor_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_vendedor_descuento.vta_vendedor_id');
	$o = VtaVendedor::getOxId($criterio->getValorDeCampo('vta_vendedor_descuento.vta_vendedor_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('vta_vendedor_descuento.vta_vendedor_id');

	$filtros['vta_vendedor_descuento.vta_vendedor_id'] = array('campo' => 'VtaVendedor', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_vendedor_descuento.ins_etiqueta_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_vendedor_descuento.ins_etiqueta_id');
	$o = InsEtiqueta::getOxId($criterio->getValorDeCampo('vta_vendedor_descuento.ins_etiqueta_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('vta_vendedor_descuento.ins_etiqueta_id');

	$filtros['vta_vendedor_descuento.ins_etiqueta_id'] = array('campo' => 'InsEtiqueta', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_vendedor_descuento.descuento_maximo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_vendedor_descuento.descuento_maximo');
	$comparador = $criterio->getComparadorDeCampo('vta_vendedor_descuento.descuento_maximo');

	$filtros['vta_vendedor_descuento.descuento_maximo'] = array('campo' => 'Descuento Maximo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_vendedor_descuento.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_vendedor_descuento.codigo');
	$comparador = $criterio->getComparadorDeCampo('vta_vendedor_descuento.codigo');

	$filtros['vta_vendedor_descuento.codigo'] = array('campo' => 'Codigo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_vendedor_descuento.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_vendedor_descuento.observacion');
	$comparador = $criterio->getComparadorDeCampo('vta_vendedor_descuento.observacion');

	$filtros['vta_vendedor_descuento.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_vendedor_descuento.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_vendedor_descuento.orden');
	$comparador = $criterio->getComparadorDeCampo('vta_vendedor_descuento.orden');

	$filtros['vta_vendedor_descuento.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_vendedor_descuento.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_vendedor_descuento.estado');
	$comparador = $criterio->getComparadorDeCampo('vta_vendedor_descuento.estado');

	$filtros['vta_vendedor_descuento.estado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_vendedor_descuento.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_vendedor_descuento.creado');
	$comparador = $criterio->getComparadorDeCampo('vta_vendedor_descuento.creado');

	$filtros['vta_vendedor_descuento.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_vendedor_descuento.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_vendedor_descuento.creado_por');
	$comparador = $criterio->getComparadorDeCampo('vta_vendedor_descuento.creado_por');

	$filtros['vta_vendedor_descuento.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_vendedor_descuento.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_vendedor_descuento.modificado');
	$comparador = $criterio->getComparadorDeCampo('vta_vendedor_descuento.modificado');

	$filtros['vta_vendedor_descuento.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_vendedor_descuento.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_vendedor_descuento.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('vta_vendedor_descuento.modificado_por');

	$filtros['vta_vendedor_descuento.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

