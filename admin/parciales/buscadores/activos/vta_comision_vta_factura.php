<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['vta_comision_vta_factura.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('vta_comision_vta_factura.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_comision_vta_factura.id');
	$comparador = $criterio->getComparadorDeCampo('vta_comision_vta_factura.id');

	$filtros['vta_comision_vta_factura.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_comision_vta_factura.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_comision_vta_factura.descripcion');
	$comparador = $criterio->getComparadorDeCampo('vta_comision_vta_factura.descripcion');

	$filtros['vta_comision_vta_factura.descripcion'] = array('campo' => 'Descripcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_comision_vta_factura.vta_comision_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_comision_vta_factura.vta_comision_id');
	$o = VtaComision::getOxId($criterio->getValorDeCampo('vta_comision_vta_factura.vta_comision_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('vta_comision_vta_factura.vta_comision_id');

	$filtros['vta_comision_vta_factura.vta_comision_id'] = array('campo' => 'VtaComision', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_comision_vta_factura.vta_factura_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_comision_vta_factura.vta_factura_id');
	$comparador = $criterio->getComparadorDeCampo('vta_comision_vta_factura.vta_factura_id');

	$filtros['vta_comision_vta_factura.vta_factura_id'] = array('campo' => 'VtaFactura', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_comision_vta_factura.base_comisionable') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_comision_vta_factura.base_comisionable');
	$comparador = $criterio->getComparadorDeCampo('vta_comision_vta_factura.base_comisionable');

	$filtros['vta_comision_vta_factura.base_comisionable'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_comision_vta_factura.importe_afectado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_comision_vta_factura.importe_afectado');
	$comparador = $criterio->getComparadorDeCampo('vta_comision_vta_factura.importe_afectado');

	$filtros['vta_comision_vta_factura.importe_afectado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_comision_vta_factura.porcentaje_comision') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_comision_vta_factura.porcentaje_comision');
	$comparador = $criterio->getComparadorDeCampo('vta_comision_vta_factura.porcentaje_comision');

	$filtros['vta_comision_vta_factura.porcentaje_comision'] = array('campo' => 'Porc Comision', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_comision_vta_factura.importe_comision') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_comision_vta_factura.importe_comision');
	$comparador = $criterio->getComparadorDeCampo('vta_comision_vta_factura.importe_comision');

	$filtros['vta_comision_vta_factura.importe_comision'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_comision_vta_factura.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_comision_vta_factura.codigo');
	$comparador = $criterio->getComparadorDeCampo('vta_comision_vta_factura.codigo');

	$filtros['vta_comision_vta_factura.codigo'] = array('campo' => 'Codigo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_comision_vta_factura.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_comision_vta_factura.observacion');
	$comparador = $criterio->getComparadorDeCampo('vta_comision_vta_factura.observacion');

	$filtros['vta_comision_vta_factura.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_comision_vta_factura.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_comision_vta_factura.orden');
	$comparador = $criterio->getComparadorDeCampo('vta_comision_vta_factura.orden');

	$filtros['vta_comision_vta_factura.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_comision_vta_factura.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_comision_vta_factura.estado');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('vta_comision_vta_factura.estado'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('vta_comision_vta_factura.estado');

	$filtros['vta_comision_vta_factura.estado'] = array('campo' => 'Estado', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_comision_vta_factura.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_comision_vta_factura.creado');
	$comparador = $criterio->getComparadorDeCampo('vta_comision_vta_factura.creado');

	$filtros['vta_comision_vta_factura.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_comision_vta_factura.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_comision_vta_factura.creado_por');
	$comparador = $criterio->getComparadorDeCampo('vta_comision_vta_factura.creado_por');

	$filtros['vta_comision_vta_factura.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_comision_vta_factura.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_comision_vta_factura.modificado');
	$comparador = $criterio->getComparadorDeCampo('vta_comision_vta_factura.modificado');

	$filtros['vta_comision_vta_factura.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_comision_vta_factura.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_comision_vta_factura.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('vta_comision_vta_factura.modificado_por');

	$filtros['vta_comision_vta_factura.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

