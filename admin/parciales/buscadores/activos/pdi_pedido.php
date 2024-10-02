<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['pdi_pedido.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('pdi_pedido.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pdi_pedido.id');
	$comparador = $criterio->getComparadorDeCampo('pdi_pedido.id');

	$filtros['pdi_pedido.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pdi_pedido.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pdi_pedido.descripcion');
	$comparador = $criterio->getComparadorDeCampo('pdi_pedido.descripcion');

	$filtros['pdi_pedido.descripcion'] = array('campo' => 'Descripcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pdi_pedido.ins_insumo_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pdi_pedido.ins_insumo_id');
	$o = InsInsumo::getOxId($criterio->getValorDeCampo('pdi_pedido.ins_insumo_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('pdi_pedido.ins_insumo_id');

	$filtros['pdi_pedido.ins_insumo_id'] = array('campo' => 'InsInsumo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pdi_pedido.pdi_tipo_origen_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pdi_pedido.pdi_tipo_origen_id');
	$o = PdiTipoOrigen::getOxId($criterio->getValorDeCampo('pdi_pedido.pdi_tipo_origen_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('pdi_pedido.pdi_tipo_origen_id');

	$filtros['pdi_pedido.pdi_tipo_origen_id'] = array('campo' => 'PdiTipoOrigen', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pdi_pedido.pdi_urgencia_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pdi_pedido.pdi_urgencia_id');
	$o = PdiUrgencia::getOxId($criterio->getValorDeCampo('pdi_pedido.pdi_urgencia_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('pdi_pedido.pdi_urgencia_id');

	$filtros['pdi_pedido.pdi_urgencia_id'] = array('campo' => 'PdiUrgencia', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pdi_pedido.pan_panol_origen') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pdi_pedido.pan_panol_origen');
	$o = PanPanol::getOxId($criterio->getValorDeCampo('pdi_pedido.pan_panol_origen'));
	$valor = $o->getDescripcion();
	
	$comparador = $criterio->getComparadorDeCampo('pdi_pedido.pan_panol_origen');

	$filtros['pdi_pedido.pan_panol_origen'] = array('campo' => 'PanPanolOrigen', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pdi_pedido.pan_panol_destino') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pdi_pedido.pan_panol_destino');
	$o = PanPanol::getOxId($criterio->getValorDeCampo('pdi_pedido.pan_panol_destino'));
	$valor = $o->getDescripcion();
	
	$comparador = $criterio->getComparadorDeCampo('pdi_pedido.pan_panol_destino');

	$filtros['pdi_pedido.pan_panol_destino'] = array('campo' => 'PanPanolDestino', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pdi_pedido.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pdi_pedido.codigo');
	$comparador = $criterio->getComparadorDeCampo('pdi_pedido.codigo');

	$filtros['pdi_pedido.codigo'] = array('campo' => 'Codigo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pdi_pedido.pdi_tipo_estado_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pdi_pedido.pdi_tipo_estado_id');
	$o = PdiTipoEstado::getOxId($criterio->getValorDeCampo('pdi_pedido.pdi_tipo_estado_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('pdi_pedido.pdi_tipo_estado_id');

	$filtros['pdi_pedido.pdi_tipo_estado_id'] = array('campo' => 'PdiTipoEstado', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pdi_pedido.venta_perdida') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pdi_pedido.venta_perdida');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('pdi_pedido.venta_perdida'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('pdi_pedido.venta_perdida');

	$filtros['pdi_pedido.venta_perdida'] = array('campo' => 'Venta Perdida', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pdi_pedido.nota_publica') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pdi_pedido.nota_publica');
	$comparador = $criterio->getComparadorDeCampo('pdi_pedido.nota_publica');

	$filtros['pdi_pedido.nota_publica'] = array('campo' => 'Nota Publica', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pdi_pedido.nota_interna') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pdi_pedido.nota_interna');
	$comparador = $criterio->getComparadorDeCampo('pdi_pedido.nota_interna');

	$filtros['pdi_pedido.nota_interna'] = array('campo' => 'Nota Interna', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pdi_pedido.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pdi_pedido.observacion');
	$comparador = $criterio->getComparadorDeCampo('pdi_pedido.observacion');

	$filtros['pdi_pedido.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pdi_pedido.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pdi_pedido.orden');
	$comparador = $criterio->getComparadorDeCampo('pdi_pedido.orden');

	$filtros['pdi_pedido.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pdi_pedido.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pdi_pedido.estado');
	$comparador = $criterio->getComparadorDeCampo('pdi_pedido.estado');

	$filtros['pdi_pedido.estado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pdi_pedido.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pdi_pedido.creado');
	$comparador = $criterio->getComparadorDeCampo('pdi_pedido.creado');

	$filtros['pdi_pedido.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pdi_pedido.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pdi_pedido.creado_por');
	$comparador = $criterio->getComparadorDeCampo('pdi_pedido.creado_por');

	$filtros['pdi_pedido.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pdi_pedido.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pdi_pedido.modificado');
	$comparador = $criterio->getComparadorDeCampo('pdi_pedido.modificado');

	$filtros['pdi_pedido.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pdi_pedido.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pdi_pedido.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('pdi_pedido.modificado_por');

	$filtros['pdi_pedido.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

