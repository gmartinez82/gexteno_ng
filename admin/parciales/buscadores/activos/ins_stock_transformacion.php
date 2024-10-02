<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['ins_stock_transformacion.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('ins_stock_transformacion.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_stock_transformacion.id');
	$comparador = $criterio->getComparadorDeCampo('ins_stock_transformacion.id');

	$filtros['ins_stock_transformacion.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_stock_transformacion.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_stock_transformacion.descripcion');
	$comparador = $criterio->getComparadorDeCampo('ins_stock_transformacion.descripcion');

	$filtros['ins_stock_transformacion.descripcion'] = array('campo' => 'Descripcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_stock_transformacion.ins_insumo_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_stock_transformacion.ins_insumo_id');
	$o = InsInsumo::getOxId($criterio->getValorDeCampo('ins_stock_transformacion.ins_insumo_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('ins_stock_transformacion.ins_insumo_id');

	$filtros['ins_stock_transformacion.ins_insumo_id'] = array('campo' => 'InsInsumo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_stock_transformacion.pan_panol_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_stock_transformacion.pan_panol_id');
	$o = PanPanol::getOxId($criterio->getValorDeCampo('ins_stock_transformacion.pan_panol_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('ins_stock_transformacion.pan_panol_id');

	$filtros['ins_stock_transformacion.pan_panol_id'] = array('campo' => 'PanPanol', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_stock_transformacion.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_stock_transformacion.codigo');
	$comparador = $criterio->getComparadorDeCampo('ins_stock_transformacion.codigo');

	$filtros['ins_stock_transformacion.codigo'] = array('campo' => 'Codigo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_stock_transformacion.cantidad') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_stock_transformacion.cantidad');
	$comparador = $criterio->getComparadorDeCampo('ins_stock_transformacion.cantidad');

	$filtros['ins_stock_transformacion.cantidad'] = array('campo' => 'Cantidad', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_stock_transformacion.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_stock_transformacion.observacion');
	$comparador = $criterio->getComparadorDeCampo('ins_stock_transformacion.observacion');

	$filtros['ins_stock_transformacion.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_stock_transformacion.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_stock_transformacion.orden');
	$comparador = $criterio->getComparadorDeCampo('ins_stock_transformacion.orden');

	$filtros['ins_stock_transformacion.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_stock_transformacion.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_stock_transformacion.estado');
	$comparador = $criterio->getComparadorDeCampo('ins_stock_transformacion.estado');

	$filtros['ins_stock_transformacion.estado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_stock_transformacion.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_stock_transformacion.creado');
	$comparador = $criterio->getComparadorDeCampo('ins_stock_transformacion.creado');

	$filtros['ins_stock_transformacion.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_stock_transformacion.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_stock_transformacion.creado_por');
	$comparador = $criterio->getComparadorDeCampo('ins_stock_transformacion.creado_por');

	$filtros['ins_stock_transformacion.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_stock_transformacion.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_stock_transformacion.modificado');
	$comparador = $criterio->getComparadorDeCampo('ins_stock_transformacion.modificado');

	$filtros['ins_stock_transformacion.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_stock_transformacion.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_stock_transformacion.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('ins_stock_transformacion.modificado_por');

	$filtros['ins_stock_transformacion.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

