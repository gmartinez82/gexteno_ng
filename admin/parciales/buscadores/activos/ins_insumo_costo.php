<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['ins_insumo_costo.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('ins_insumo_costo.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_insumo_costo.id');
	$comparador = $criterio->getComparadorDeCampo('ins_insumo_costo.id');

	$filtros['ins_insumo_costo.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_insumo_costo.ins_insumo_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_insumo_costo.ins_insumo_id');
	$comparador = $criterio->getComparadorDeCampo('ins_insumo_costo.ins_insumo_id');

	$filtros['ins_insumo_costo.ins_insumo_id'] = array('campo' => 'InsInsumo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_insumo_costo.prv_proveedor_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_insumo_costo.prv_proveedor_id');
	$o = PrvProveedor::getOxId($criterio->getValorDeCampo('ins_insumo_costo.prv_proveedor_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('ins_insumo_costo.prv_proveedor_id');

	$filtros['ins_insumo_costo.prv_proveedor_id'] = array('campo' => 'PrvProveedor', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_insumo_costo.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_insumo_costo.descripcion');
	$comparador = $criterio->getComparadorDeCampo('ins_insumo_costo.descripcion');

	$filtros['ins_insumo_costo.descripcion'] = array('campo' => 'Descripcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_insumo_costo.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_insumo_costo.codigo');
	$comparador = $criterio->getComparadorDeCampo('ins_insumo_costo.codigo');

	$filtros['ins_insumo_costo.codigo'] = array('campo' => 'Codigo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_insumo_costo.fecha') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_insumo_costo.fecha');
	$comparador = $criterio->getComparadorDeCampo('ins_insumo_costo.fecha');

	$filtros['ins_insumo_costo.fecha'] = array('campo' => 'Fecha', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_insumo_costo.costo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_insumo_costo.costo');
	$comparador = $criterio->getComparadorDeCampo('ins_insumo_costo.costo');

	$filtros['ins_insumo_costo.costo'] = array('campo' => 'Costo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_insumo_costo.inicial') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_insumo_costo.inicial');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('ins_insumo_costo.inicial'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('ins_insumo_costo.inicial');

	$filtros['ins_insumo_costo.inicial'] = array('campo' => 'Inicial', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_insumo_costo.actual') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_insumo_costo.actual');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('ins_insumo_costo.actual'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('ins_insumo_costo.actual');

	$filtros['ins_insumo_costo.actual'] = array('campo' => 'Actual', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_insumo_costo.prv_importacion_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_insumo_costo.prv_importacion_id');
	$comparador = $criterio->getComparadorDeCampo('ins_insumo_costo.prv_importacion_id');

	$filtros['ins_insumo_costo.prv_importacion_id'] = array('campo' => 'PrvImportacion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_insumo_costo.ins_stock_transformacion_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_insumo_costo.ins_stock_transformacion_id');
	$comparador = $criterio->getComparadorDeCampo('ins_insumo_costo.ins_stock_transformacion_id');

	$filtros['ins_insumo_costo.ins_stock_transformacion_id'] = array('campo' => 'InsStockTransformacion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_insumo_costo.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_insumo_costo.observacion');
	$comparador = $criterio->getComparadorDeCampo('ins_insumo_costo.observacion');

	$filtros['ins_insumo_costo.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_insumo_costo.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_insumo_costo.orden');
	$comparador = $criterio->getComparadorDeCampo('ins_insumo_costo.orden');

	$filtros['ins_insumo_costo.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_insumo_costo.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_insumo_costo.estado');
	$comparador = $criterio->getComparadorDeCampo('ins_insumo_costo.estado');

	$filtros['ins_insumo_costo.estado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_insumo_costo.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_insumo_costo.creado');
	$comparador = $criterio->getComparadorDeCampo('ins_insumo_costo.creado');

	$filtros['ins_insumo_costo.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_insumo_costo.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_insumo_costo.creado_por');
	$comparador = $criterio->getComparadorDeCampo('ins_insumo_costo.creado_por');

	$filtros['ins_insumo_costo.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_insumo_costo.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_insumo_costo.modificado');
	$comparador = $criterio->getComparadorDeCampo('ins_insumo_costo.modificado');

	$filtros['ins_insumo_costo.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_insumo_costo.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_insumo_costo.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('ins_insumo_costo.modificado_por');

	$filtros['ins_insumo_costo.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

