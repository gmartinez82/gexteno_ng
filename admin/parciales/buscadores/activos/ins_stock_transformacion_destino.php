<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['ins_stock_transformacion_destino.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('ins_stock_transformacion_destino.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_stock_transformacion_destino.id');
	$comparador = $criterio->getComparadorDeCampo('ins_stock_transformacion_destino.id');

	$filtros['ins_stock_transformacion_destino.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_stock_transformacion_destino.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_stock_transformacion_destino.descripcion');
	$comparador = $criterio->getComparadorDeCampo('ins_stock_transformacion_destino.descripcion');

	$filtros['ins_stock_transformacion_destino.descripcion'] = array('campo' => 'Descripcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_stock_transformacion_destino.ins_stock_transformacion_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_stock_transformacion_destino.ins_stock_transformacion_id');
	$o = InsStockTransformacion::getOxId($criterio->getValorDeCampo('ins_stock_transformacion_destino.ins_stock_transformacion_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('ins_stock_transformacion_destino.ins_stock_transformacion_id');

	$filtros['ins_stock_transformacion_destino.ins_stock_transformacion_id'] = array('campo' => 'InsStockTransformacion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_stock_transformacion_destino.ins_insumo_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_stock_transformacion_destino.ins_insumo_id');
	$o = InsInsumo::getOxId($criterio->getValorDeCampo('ins_stock_transformacion_destino.ins_insumo_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('ins_stock_transformacion_destino.ins_insumo_id');

	$filtros['ins_stock_transformacion_destino.ins_insumo_id'] = array('campo' => 'InsInsumo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_stock_transformacion_destino.pan_panol_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_stock_transformacion_destino.pan_panol_id');
	$o = PanPanol::getOxId($criterio->getValorDeCampo('ins_stock_transformacion_destino.pan_panol_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('ins_stock_transformacion_destino.pan_panol_id');

	$filtros['ins_stock_transformacion_destino.pan_panol_id'] = array('campo' => 'PanPanol', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_stock_transformacion_destino.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_stock_transformacion_destino.codigo');
	$comparador = $criterio->getComparadorDeCampo('ins_stock_transformacion_destino.codigo');

	$filtros['ins_stock_transformacion_destino.codigo'] = array('campo' => 'Codigo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_stock_transformacion_destino.cantidad') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_stock_transformacion_destino.cantidad');
	$comparador = $criterio->getComparadorDeCampo('ins_stock_transformacion_destino.cantidad');

	$filtros['ins_stock_transformacion_destino.cantidad'] = array('campo' => 'Cantidad', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_stock_transformacion_destino.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_stock_transformacion_destino.observacion');
	$comparador = $criterio->getComparadorDeCampo('ins_stock_transformacion_destino.observacion');

	$filtros['ins_stock_transformacion_destino.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_stock_transformacion_destino.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_stock_transformacion_destino.orden');
	$comparador = $criterio->getComparadorDeCampo('ins_stock_transformacion_destino.orden');

	$filtros['ins_stock_transformacion_destino.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_stock_transformacion_destino.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_stock_transformacion_destino.estado');
	$comparador = $criterio->getComparadorDeCampo('ins_stock_transformacion_destino.estado');

	$filtros['ins_stock_transformacion_destino.estado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_stock_transformacion_destino.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_stock_transformacion_destino.creado');
	$comparador = $criterio->getComparadorDeCampo('ins_stock_transformacion_destino.creado');

	$filtros['ins_stock_transformacion_destino.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_stock_transformacion_destino.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_stock_transformacion_destino.creado_por');
	$comparador = $criterio->getComparadorDeCampo('ins_stock_transformacion_destino.creado_por');

	$filtros['ins_stock_transformacion_destino.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_stock_transformacion_destino.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_stock_transformacion_destino.modificado');
	$comparador = $criterio->getComparadorDeCampo('ins_stock_transformacion_destino.modificado');

	$filtros['ins_stock_transformacion_destino.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_stock_transformacion_destino.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_stock_transformacion_destino.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('ins_stock_transformacion_destino.modificado_por');

	$filtros['ins_stock_transformacion_destino.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

