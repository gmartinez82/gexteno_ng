<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['pde_pedido.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('pde_pedido.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_pedido.id');
	$comparador = $criterio->getComparadorDeCampo('pde_pedido.id');

	$filtros['pde_pedido.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_pedido.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_pedido.descripcion');
	$comparador = $criterio->getComparadorDeCampo('pde_pedido.descripcion');

	$filtros['pde_pedido.descripcion'] = array('campo' => 'Descripcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_pedido.pde_centro_pedido_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_pedido.pde_centro_pedido_id');
	$o = PdeCentroPedido::getOxId($criterio->getValorDeCampo('pde_pedido.pde_centro_pedido_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('pde_pedido.pde_centro_pedido_id');

	$filtros['pde_pedido.pde_centro_pedido_id'] = array('campo' => 'PdeCentroPedido', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_pedido.ins_insumo_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_pedido.ins_insumo_id');
	$o = InsInsumo::getOxId($criterio->getValorDeCampo('pde_pedido.ins_insumo_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('pde_pedido.ins_insumo_id');

	$filtros['pde_pedido.ins_insumo_id'] = array('campo' => 'InsInsumo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_pedido.pde_urgencia_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_pedido.pde_urgencia_id');
	$o = PdeUrgencia::getOxId($criterio->getValorDeCampo('pde_pedido.pde_urgencia_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('pde_pedido.pde_urgencia_id');

	$filtros['pde_pedido.pde_urgencia_id'] = array('campo' => 'PdeUrgencia', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_pedido.pde_tipo_estado_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_pedido.pde_tipo_estado_id');
	$o = PdeTipoEstado::getOxId($criterio->getValorDeCampo('pde_pedido.pde_tipo_estado_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('pde_pedido.pde_tipo_estado_id');

	$filtros['pde_pedido.pde_tipo_estado_id'] = array('campo' => 'PdeTipoEstado', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_pedido.cantidad') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_pedido.cantidad');
	$comparador = $criterio->getComparadorDeCampo('pde_pedido.cantidad');

	$filtros['pde_pedido.cantidad'] = array('campo' => 'Cantidad', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_pedido.vencimiento') != ''){
	$valor = Gral::getFechaToWeb($valor = $criterio->getValorDeCampo('pde_pedido.vencimiento'));
	$comparador = $criterio->getComparadorDeCampo('pde_pedido.vencimiento');

	$filtros['pde_pedido.vencimiento'] = array('campo' => 'Vencimiento', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_pedido.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_pedido.codigo');
	$comparador = $criterio->getComparadorDeCampo('pde_pedido.codigo');

	$filtros['pde_pedido.codigo'] = array('campo' => 'Codigo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_pedido.comentario_proveedor') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_pedido.comentario_proveedor');
	$comparador = $criterio->getComparadorDeCampo('pde_pedido.comentario_proveedor');

	$filtros['pde_pedido.comentario_proveedor'] = array('campo' => 'Coment a Proveedor', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_pedido.nota_publica') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_pedido.nota_publica');
	$comparador = $criterio->getComparadorDeCampo('pde_pedido.nota_publica');

	$filtros['pde_pedido.nota_publica'] = array('campo' => 'Nota Publica', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_pedido.nota_interna') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_pedido.nota_interna');
	$comparador = $criterio->getComparadorDeCampo('pde_pedido.nota_interna');

	$filtros['pde_pedido.nota_interna'] = array('campo' => 'Nota Interna', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_pedido.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_pedido.observacion');
	$comparador = $criterio->getComparadorDeCampo('pde_pedido.observacion');

	$filtros['pde_pedido.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_pedido.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_pedido.orden');
	$comparador = $criterio->getComparadorDeCampo('pde_pedido.orden');

	$filtros['pde_pedido.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_pedido.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_pedido.estado');
	$comparador = $criterio->getComparadorDeCampo('pde_pedido.estado');

	$filtros['pde_pedido.estado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_pedido.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_pedido.creado');
	$comparador = $criterio->getComparadorDeCampo('pde_pedido.creado');

	$filtros['pde_pedido.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_pedido.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_pedido.creado_por');
	$comparador = $criterio->getComparadorDeCampo('pde_pedido.creado_por');

	$filtros['pde_pedido.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_pedido.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_pedido.modificado');
	$comparador = $criterio->getComparadorDeCampo('pde_pedido.modificado');

	$filtros['pde_pedido.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_pedido.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_pedido.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('pde_pedido.modificado_por');

	$filtros['pde_pedido.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

