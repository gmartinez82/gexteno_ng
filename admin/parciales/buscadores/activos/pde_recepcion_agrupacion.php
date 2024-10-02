<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['pde_recepcion_agrupacion.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('pde_recepcion_agrupacion.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_recepcion_agrupacion.id');
	$comparador = $criterio->getComparadorDeCampo('pde_recepcion_agrupacion.id');

	$filtros['pde_recepcion_agrupacion.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_recepcion_agrupacion.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_recepcion_agrupacion.descripcion');
	$comparador = $criterio->getComparadorDeCampo('pde_recepcion_agrupacion.descripcion');

	$filtros['pde_recepcion_agrupacion.descripcion'] = array('campo' => 'Descripcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_recepcion_agrupacion.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_recepcion_agrupacion.codigo');
	$comparador = $criterio->getComparadorDeCampo('pde_recepcion_agrupacion.codigo');

	$filtros['pde_recepcion_agrupacion.codigo'] = array('campo' => 'Codigo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_recepcion_agrupacion.nro_comprobante') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_recepcion_agrupacion.nro_comprobante');
	$comparador = $criterio->getComparadorDeCampo('pde_recepcion_agrupacion.nro_comprobante');

	$filtros['pde_recepcion_agrupacion.nro_comprobante'] = array('campo' => 'Nro Comprobante', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_recepcion_agrupacion.pde_tipo_recepcion_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_recepcion_agrupacion.pde_tipo_recepcion_id');
	$o = PdeTipoRecepcion::getOxId($criterio->getValorDeCampo('pde_recepcion_agrupacion.pde_tipo_recepcion_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('pde_recepcion_agrupacion.pde_tipo_recepcion_id');

	$filtros['pde_recepcion_agrupacion.pde_tipo_recepcion_id'] = array('campo' => 'PdeTipoRecepcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_recepcion_agrupacion.pde_centro_recepcion_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_recepcion_agrupacion.pde_centro_recepcion_id');
	$o = PdeCentroRecepcion::getOxId($criterio->getValorDeCampo('pde_recepcion_agrupacion.pde_centro_recepcion_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('pde_recepcion_agrupacion.pde_centro_recepcion_id');

	$filtros['pde_recepcion_agrupacion.pde_centro_recepcion_id'] = array('campo' => 'PdeCentroRecepcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_recepcion_agrupacion.prv_proveedor_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_recepcion_agrupacion.prv_proveedor_id');
	$o = PrvProveedor::getOxId($criterio->getValorDeCampo('pde_recepcion_agrupacion.prv_proveedor_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('pde_recepcion_agrupacion.prv_proveedor_id');

	$filtros['pde_recepcion_agrupacion.prv_proveedor_id'] = array('campo' => 'PrvProveedor', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_recepcion_agrupacion.fecha_entrega') != ''){
	$valor = Gral::getFechaToWeb($valor = $criterio->getValorDeCampo('pde_recepcion_agrupacion.fecha_entrega'));
	$comparador = $criterio->getComparadorDeCampo('pde_recepcion_agrupacion.fecha_entrega');

	$filtros['pde_recepcion_agrupacion.fecha_entrega'] = array('campo' => 'Fecha Entrega', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_recepcion_agrupacion.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_recepcion_agrupacion.observacion');
	$comparador = $criterio->getComparadorDeCampo('pde_recepcion_agrupacion.observacion');

	$filtros['pde_recepcion_agrupacion.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_recepcion_agrupacion.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_recepcion_agrupacion.orden');
	$comparador = $criterio->getComparadorDeCampo('pde_recepcion_agrupacion.orden');

	$filtros['pde_recepcion_agrupacion.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_recepcion_agrupacion.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_recepcion_agrupacion.estado');
	$comparador = $criterio->getComparadorDeCampo('pde_recepcion_agrupacion.estado');

	$filtros['pde_recepcion_agrupacion.estado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_recepcion_agrupacion.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_recepcion_agrupacion.creado');
	$comparador = $criterio->getComparadorDeCampo('pde_recepcion_agrupacion.creado');

	$filtros['pde_recepcion_agrupacion.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_recepcion_agrupacion.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_recepcion_agrupacion.creado_por');
	$comparador = $criterio->getComparadorDeCampo('pde_recepcion_agrupacion.creado_por');

	$filtros['pde_recepcion_agrupacion.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_recepcion_agrupacion.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_recepcion_agrupacion.modificado');
	$comparador = $criterio->getComparadorDeCampo('pde_recepcion_agrupacion.modificado');

	$filtros['pde_recepcion_agrupacion.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_recepcion_agrupacion.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_recepcion_agrupacion.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('pde_recepcion_agrupacion.modificado_por');

	$filtros['pde_recepcion_agrupacion.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

