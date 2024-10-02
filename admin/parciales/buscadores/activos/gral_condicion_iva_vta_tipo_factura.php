<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['gral_condicion_iva_vta_tipo_factura.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('gral_condicion_iva_vta_tipo_factura.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_condicion_iva_vta_tipo_factura.id');
	$comparador = $criterio->getComparadorDeCampo('gral_condicion_iva_vta_tipo_factura.id');

	$filtros['gral_condicion_iva_vta_tipo_factura.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_condicion_iva_vta_tipo_factura.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_condicion_iva_vta_tipo_factura.descripcion');
	$comparador = $criterio->getComparadorDeCampo('gral_condicion_iva_vta_tipo_factura.descripcion');

	$filtros['gral_condicion_iva_vta_tipo_factura.descripcion'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_condicion_iva_vta_tipo_factura.gral_condicion_iva_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_condicion_iva_vta_tipo_factura.gral_condicion_iva_id');
	$o = GralCondicionIva::getOxId($criterio->getValorDeCampo('gral_condicion_iva_vta_tipo_factura.gral_condicion_iva_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('gral_condicion_iva_vta_tipo_factura.gral_condicion_iva_id');

	$filtros['gral_condicion_iva_vta_tipo_factura.gral_condicion_iva_id'] = array('campo' => 'GralCondicionIva', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_condicion_iva_vta_tipo_factura.vta_tipo_factura_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_condicion_iva_vta_tipo_factura.vta_tipo_factura_id');
	$o = VtaTipoFactura::getOxId($criterio->getValorDeCampo('gral_condicion_iva_vta_tipo_factura.vta_tipo_factura_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('gral_condicion_iva_vta_tipo_factura.vta_tipo_factura_id');

	$filtros['gral_condicion_iva_vta_tipo_factura.vta_tipo_factura_id'] = array('campo' => 'VtaTipoFactura', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_condicion_iva_vta_tipo_factura.predeterminado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_condicion_iva_vta_tipo_factura.predeterminado');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('gral_condicion_iva_vta_tipo_factura.predeterminado'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('gral_condicion_iva_vta_tipo_factura.predeterminado');

	$filtros['gral_condicion_iva_vta_tipo_factura.predeterminado'] = array('campo' => 'Predeterminado', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_condicion_iva_vta_tipo_factura.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_condicion_iva_vta_tipo_factura.codigo');
	$comparador = $criterio->getComparadorDeCampo('gral_condicion_iva_vta_tipo_factura.codigo');

	$filtros['gral_condicion_iva_vta_tipo_factura.codigo'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_condicion_iva_vta_tipo_factura.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_condicion_iva_vta_tipo_factura.observacion');
	$comparador = $criterio->getComparadorDeCampo('gral_condicion_iva_vta_tipo_factura.observacion');

	$filtros['gral_condicion_iva_vta_tipo_factura.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_condicion_iva_vta_tipo_factura.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_condicion_iva_vta_tipo_factura.orden');
	$comparador = $criterio->getComparadorDeCampo('gral_condicion_iva_vta_tipo_factura.orden');

	$filtros['gral_condicion_iva_vta_tipo_factura.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_condicion_iva_vta_tipo_factura.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_condicion_iva_vta_tipo_factura.estado');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('gral_condicion_iva_vta_tipo_factura.estado'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('gral_condicion_iva_vta_tipo_factura.estado');

	$filtros['gral_condicion_iva_vta_tipo_factura.estado'] = array('campo' => 'Estado', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_condicion_iva_vta_tipo_factura.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_condicion_iva_vta_tipo_factura.creado');
	$comparador = $criterio->getComparadorDeCampo('gral_condicion_iva_vta_tipo_factura.creado');

	$filtros['gral_condicion_iva_vta_tipo_factura.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_condicion_iva_vta_tipo_factura.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_condicion_iva_vta_tipo_factura.creado_por');
	$comparador = $criterio->getComparadorDeCampo('gral_condicion_iva_vta_tipo_factura.creado_por');

	$filtros['gral_condicion_iva_vta_tipo_factura.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_condicion_iva_vta_tipo_factura.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_condicion_iva_vta_tipo_factura.modificado');
	$comparador = $criterio->getComparadorDeCampo('gral_condicion_iva_vta_tipo_factura.modificado');

	$filtros['gral_condicion_iva_vta_tipo_factura.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_condicion_iva_vta_tipo_factura.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_condicion_iva_vta_tipo_factura.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('gral_condicion_iva_vta_tipo_factura.modificado_por');

	$filtros['gral_condicion_iva_vta_tipo_factura.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

