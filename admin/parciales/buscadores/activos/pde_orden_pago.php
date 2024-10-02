<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['pde_orden_pago.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('pde_orden_pago.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_orden_pago.id');
	$comparador = $criterio->getComparadorDeCampo('pde_orden_pago.id');

	$filtros['pde_orden_pago.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_orden_pago.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_orden_pago.descripcion');
	$comparador = $criterio->getComparadorDeCampo('pde_orden_pago.descripcion');

	$filtros['pde_orden_pago.descripcion'] = array('campo' => 'Descripcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_orden_pago.prv_proveedor_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_orden_pago.prv_proveedor_id');
	$o = PrvProveedor::getOxId($criterio->getValorDeCampo('pde_orden_pago.prv_proveedor_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('pde_orden_pago.prv_proveedor_id');

	$filtros['pde_orden_pago.prv_proveedor_id'] = array('campo' => 'PrvProveedor', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_orden_pago.pde_orden_pago_tipo_estado_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_orden_pago.pde_orden_pago_tipo_estado_id');
	$o = PdeOrdenPagoTipoEstado::getOxId($criterio->getValorDeCampo('pde_orden_pago.pde_orden_pago_tipo_estado_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('pde_orden_pago.pde_orden_pago_tipo_estado_id');

	$filtros['pde_orden_pago.pde_orden_pago_tipo_estado_id'] = array('campo' => 'PdeOrdenPagoTipoEstado', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_orden_pago.gral_condicion_iva_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_orden_pago.gral_condicion_iva_id');
	$o = GralCondicionIva::getOxId($criterio->getValorDeCampo('pde_orden_pago.gral_condicion_iva_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('pde_orden_pago.gral_condicion_iva_id');

	$filtros['pde_orden_pago.gral_condicion_iva_id'] = array('campo' => 'GralCondicionIva', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_orden_pago.gral_tipo_personeria_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_orden_pago.gral_tipo_personeria_id');
	$o = GralTipoPersoneria::getOxId($criterio->getValorDeCampo('pde_orden_pago.gral_tipo_personeria_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('pde_orden_pago.gral_tipo_personeria_id');

	$filtros['pde_orden_pago.gral_tipo_personeria_id'] = array('campo' => 'GralTipoPersoneria', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_orden_pago.gral_empresa_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_orden_pago.gral_empresa_id');
	$o = GralEmpresa::getOxId($criterio->getValorDeCampo('pde_orden_pago.gral_empresa_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('pde_orden_pago.gral_empresa_id');

	$filtros['pde_orden_pago.gral_empresa_id'] = array('campo' => 'GralEmpresa', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_orden_pago.pde_centro_pedido_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_orden_pago.pde_centro_pedido_id');
	$o = PdeCentroPedido::getOxId($criterio->getValorDeCampo('pde_orden_pago.pde_centro_pedido_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('pde_orden_pago.pde_centro_pedido_id');

	$filtros['pde_orden_pago.pde_centro_pedido_id'] = array('campo' => 'PdeCentroPedido', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_orden_pago.fecha_emision') != ''){
	$valor = Gral::getFechaToWeb($valor = $criterio->getValorDeCampo('pde_orden_pago.fecha_emision'));
	$comparador = $criterio->getComparadorDeCampo('pde_orden_pago.fecha_emision');

	$filtros['pde_orden_pago.fecha_emision'] = array('campo' => 'Fecha de Emision', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_orden_pago.persona_descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_orden_pago.persona_descripcion');
	$comparador = $criterio->getComparadorDeCampo('pde_orden_pago.persona_descripcion');

	$filtros['pde_orden_pago.persona_descripcion'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_orden_pago.razon_social') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_orden_pago.razon_social');
	$comparador = $criterio->getComparadorDeCampo('pde_orden_pago.razon_social');

	$filtros['pde_orden_pago.razon_social'] = array('campo' => 'Razon Social', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_orden_pago.domicilio_legal') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_orden_pago.domicilio_legal');
	$comparador = $criterio->getComparadorDeCampo('pde_orden_pago.domicilio_legal');

	$filtros['pde_orden_pago.domicilio_legal'] = array('campo' => 'Domicilio Legal', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_orden_pago.cuit') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_orden_pago.cuit');
	$comparador = $criterio->getComparadorDeCampo('pde_orden_pago.cuit');

	$filtros['pde_orden_pago.cuit'] = array('campo' => 'CUIT', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_orden_pago.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_orden_pago.codigo');
	$comparador = $criterio->getComparadorDeCampo('pde_orden_pago.codigo');

	$filtros['pde_orden_pago.codigo'] = array('campo' => 'Codigo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_orden_pago.anio') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_orden_pago.anio');
	$comparador = $criterio->getComparadorDeCampo('pde_orden_pago.anio');

	$filtros['pde_orden_pago.anio'] = array('campo' => 'Anio', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_orden_pago.gral_mes_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_orden_pago.gral_mes_id');
	$o = GralMes::getOxId($criterio->getValorDeCampo('pde_orden_pago.gral_mes_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('pde_orden_pago.gral_mes_id');

	$filtros['pde_orden_pago.gral_mes_id'] = array('campo' => 'GralMes', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_orden_pago.fnd_caja_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_orden_pago.fnd_caja_id');
	$comparador = $criterio->getComparadorDeCampo('pde_orden_pago.fnd_caja_id');

	$filtros['pde_orden_pago.fnd_caja_id'] = array('campo' => 'FndCaja', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_orden_pago.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_orden_pago.observacion');
	$comparador = $criterio->getComparadorDeCampo('pde_orden_pago.observacion');

	$filtros['pde_orden_pago.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_orden_pago.nota_publica') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_orden_pago.nota_publica');
	$comparador = $criterio->getComparadorDeCampo('pde_orden_pago.nota_publica');

	$filtros['pde_orden_pago.nota_publica'] = array('campo' => 'Nota Publica', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_orden_pago.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_orden_pago.orden');
	$comparador = $criterio->getComparadorDeCampo('pde_orden_pago.orden');

	$filtros['pde_orden_pago.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_orden_pago.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_orden_pago.estado');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('pde_orden_pago.estado'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('pde_orden_pago.estado');

	$filtros['pde_orden_pago.estado'] = array('campo' => 'Estado', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_orden_pago.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_orden_pago.creado');
	$comparador = $criterio->getComparadorDeCampo('pde_orden_pago.creado');

	$filtros['pde_orden_pago.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_orden_pago.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_orden_pago.creado_por');
	$comparador = $criterio->getComparadorDeCampo('pde_orden_pago.creado_por');

	$filtros['pde_orden_pago.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_orden_pago.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_orden_pago.modificado');
	$comparador = $criterio->getComparadorDeCampo('pde_orden_pago.modificado');

	$filtros['pde_orden_pago.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_orden_pago.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_orden_pago.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('pde_orden_pago.modificado_por');

	$filtros['pde_orden_pago.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

