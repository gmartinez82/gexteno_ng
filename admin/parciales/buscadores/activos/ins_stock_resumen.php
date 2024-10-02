<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['ins_stock_resumen.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('ins_stock_resumen.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_stock_resumen.id');
	$comparador = $criterio->getComparadorDeCampo('ins_stock_resumen.id');

	$filtros['ins_stock_resumen.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_stock_resumen.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_stock_resumen.descripcion');
	$comparador = $criterio->getComparadorDeCampo('ins_stock_resumen.descripcion');

	$filtros['ins_stock_resumen.descripcion'] = array('campo' => 'Descripcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_stock_resumen.ins_stock_resumen_tipo_estado_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_stock_resumen.ins_stock_resumen_tipo_estado_id');
	$o = InsStockResumenTipoEstado::getOxId($criterio->getValorDeCampo('ins_stock_resumen.ins_stock_resumen_tipo_estado_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('ins_stock_resumen.ins_stock_resumen_tipo_estado_id');

	$filtros['ins_stock_resumen.ins_stock_resumen_tipo_estado_id'] = array('campo' => 'InsStockResumenTipoEstado', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_stock_resumen.ins_insumo_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_stock_resumen.ins_insumo_id');
	$o = InsInsumo::getOxId($criterio->getValorDeCampo('ins_stock_resumen.ins_insumo_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('ins_stock_resumen.ins_insumo_id');

	$filtros['ins_stock_resumen.ins_insumo_id'] = array('campo' => 'InsInsumo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_stock_resumen.pan_panol_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_stock_resumen.pan_panol_id');
	$o = PanPanol::getOxId($criterio->getValorDeCampo('ins_stock_resumen.pan_panol_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('ins_stock_resumen.pan_panol_id');

	$filtros['ins_stock_resumen.pan_panol_id'] = array('campo' => 'PanPanol', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_stock_resumen.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_stock_resumen.codigo');
	$comparador = $criterio->getComparadorDeCampo('ins_stock_resumen.codigo');

	$filtros['ins_stock_resumen.codigo'] = array('campo' => 'Codigo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_stock_resumen.cantidad') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_stock_resumen.cantidad');
	$comparador = $criterio->getComparadorDeCampo('ins_stock_resumen.cantidad');

	$filtros['ins_stock_resumen.cantidad'] = array('campo' => 'Cantidad', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_stock_resumen.cantidad_real') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_stock_resumen.cantidad_real');
	$comparador = $criterio->getComparadorDeCampo('ins_stock_resumen.cantidad_real');

	$filtros['ins_stock_resumen.cantidad_real'] = array('campo' => 'Cantidad Real', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_stock_resumen.cantidad_comprometida') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_stock_resumen.cantidad_comprometida');
	$comparador = $criterio->getComparadorDeCampo('ins_stock_resumen.cantidad_comprometida');

	$filtros['ins_stock_resumen.cantidad_comprometida'] = array('campo' => 'Cantidad Comprometida', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_stock_resumen.cantidad_pasivo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_stock_resumen.cantidad_pasivo');
	$comparador = $criterio->getComparadorDeCampo('ins_stock_resumen.cantidad_pasivo');

	$filtros['ins_stock_resumen.cantidad_pasivo'] = array('campo' => 'Cant Pasivo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_stock_resumen.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_stock_resumen.observacion');
	$comparador = $criterio->getComparadorDeCampo('ins_stock_resumen.observacion');

	$filtros['ins_stock_resumen.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_stock_resumen.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_stock_resumen.orden');
	$comparador = $criterio->getComparadorDeCampo('ins_stock_resumen.orden');

	$filtros['ins_stock_resumen.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_stock_resumen.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_stock_resumen.estado');
	$comparador = $criterio->getComparadorDeCampo('ins_stock_resumen.estado');

	$filtros['ins_stock_resumen.estado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_stock_resumen.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_stock_resumen.creado');
	$comparador = $criterio->getComparadorDeCampo('ins_stock_resumen.creado');

	$filtros['ins_stock_resumen.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_stock_resumen.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_stock_resumen.creado_por');
	$comparador = $criterio->getComparadorDeCampo('ins_stock_resumen.creado_por');

	$filtros['ins_stock_resumen.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_stock_resumen.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_stock_resumen.modificado');
	$comparador = $criterio->getComparadorDeCampo('ins_stock_resumen.modificado');

	$filtros['ins_stock_resumen.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_stock_resumen.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_stock_resumen.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('ins_stock_resumen.modificado_por');

	$filtros['ins_stock_resumen.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

