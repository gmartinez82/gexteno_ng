<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['vta_comision.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('vta_comision.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_comision.id');
	$comparador = $criterio->getComparadorDeCampo('vta_comision.id');

	$filtros['vta_comision.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_comision.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_comision.descripcion');
	$comparador = $criterio->getComparadorDeCampo('vta_comision.descripcion');

	$filtros['vta_comision.descripcion'] = array('campo' => 'Descripcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_comision.vta_preventista_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_comision.vta_preventista_id');
	$o = VtaPreventista::getOxId($criterio->getValorDeCampo('vta_comision.vta_preventista_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('vta_comision.vta_preventista_id');

	$filtros['vta_comision.vta_preventista_id'] = array('campo' => 'VtaPreventista', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_comision.vta_comprador_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_comision.vta_comprador_id');
	$o = VtaComprador::getOxId($criterio->getValorDeCampo('vta_comision.vta_comprador_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('vta_comision.vta_comprador_id');

	$filtros['vta_comision.vta_comprador_id'] = array('campo' => 'VtaComprador', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_comision.vta_vendedor_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_comision.vta_vendedor_id');
	$o = VtaVendedor::getOxId($criterio->getValorDeCampo('vta_comision.vta_vendedor_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('vta_comision.vta_vendedor_id');

	$filtros['vta_comision.vta_vendedor_id'] = array('campo' => 'VtaVendedor', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_comision.vta_comision_tipo_estado_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_comision.vta_comision_tipo_estado_id');
	$o = VtaComisionTipoEstado::getOxId($criterio->getValorDeCampo('vta_comision.vta_comision_tipo_estado_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('vta_comision.vta_comision_tipo_estado_id');

	$filtros['vta_comision.vta_comision_tipo_estado_id'] = array('campo' => 'VtaComisionTipoEstado', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_comision.fecha_emision') != ''){
	$valor = Gral::getFechaToWeb($valor = $criterio->getValorDeCampo('vta_comision.fecha_emision'));
	$comparador = $criterio->getComparadorDeCampo('vta_comision.fecha_emision');

	$filtros['vta_comision.fecha_emision'] = array('campo' => 'Fecha de Emision', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_comision.persona_descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_comision.persona_descripcion');
	$comparador = $criterio->getComparadorDeCampo('vta_comision.persona_descripcion');

	$filtros['vta_comision.persona_descripcion'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_comision.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_comision.codigo');
	$comparador = $criterio->getComparadorDeCampo('vta_comision.codigo');

	$filtros['vta_comision.codigo'] = array('campo' => 'Codigo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_comision.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_comision.observacion');
	$comparador = $criterio->getComparadorDeCampo('vta_comision.observacion');

	$filtros['vta_comision.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_comision.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_comision.orden');
	$comparador = $criterio->getComparadorDeCampo('vta_comision.orden');

	$filtros['vta_comision.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_comision.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_comision.estado');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('vta_comision.estado'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('vta_comision.estado');

	$filtros['vta_comision.estado'] = array('campo' => 'Estado', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_comision.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_comision.creado');
	$comparador = $criterio->getComparadorDeCampo('vta_comision.creado');

	$filtros['vta_comision.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_comision.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_comision.creado_por');
	$comparador = $criterio->getComparadorDeCampo('vta_comision.creado_por');

	$filtros['vta_comision.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_comision.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_comision.modificado');
	$comparador = $criterio->getComparadorDeCampo('vta_comision.modificado');

	$filtros['vta_comision.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_comision.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_comision.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('vta_comision.modificado_por');

	$filtros['vta_comision.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

