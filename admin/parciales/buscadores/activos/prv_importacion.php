<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['prv_importacion.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('prv_importacion.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('prv_importacion.id');
	$comparador = $criterio->getComparadorDeCampo('prv_importacion.id');

	$filtros['prv_importacion.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('prv_importacion.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('prv_importacion.descripcion');
	$comparador = $criterio->getComparadorDeCampo('prv_importacion.descripcion');

	$filtros['prv_importacion.descripcion'] = array('campo' => 'Descripcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('prv_importacion.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('prv_importacion.codigo');
	$comparador = $criterio->getComparadorDeCampo('prv_importacion.codigo');

	$filtros['prv_importacion.codigo'] = array('campo' => 'Codigo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('prv_importacion.prv_importacion_tipo_estado_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('prv_importacion.prv_importacion_tipo_estado_id');
	$o = PrvImportacionTipoEstado::getOxId($criterio->getValorDeCampo('prv_importacion.prv_importacion_tipo_estado_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('prv_importacion.prv_importacion_tipo_estado_id');

	$filtros['prv_importacion.prv_importacion_tipo_estado_id'] = array('campo' => 'Estado', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('prv_importacion.prv_proveedor_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('prv_importacion.prv_proveedor_id');
	$o = PrvProveedor::getOxId($criterio->getValorDeCampo('prv_importacion.prv_proveedor_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('prv_importacion.prv_proveedor_id');

	$filtros['prv_importacion.prv_proveedor_id'] = array('campo' => 'PrvProveedor', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('prv_importacion.ins_marca_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('prv_importacion.ins_marca_id');
	$o = InsMarca::getOxId($criterio->getValorDeCampo('prv_importacion.ins_marca_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('prv_importacion.ins_marca_id');

	$filtros['prv_importacion.ins_marca_id'] = array('campo' => 'InsMarca', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('prv_importacion.ins_marca_pieza') != ''){
	$valor = $valor = $criterio->getValorDeCampo('prv_importacion.ins_marca_pieza');
	$o = InsMarca::getOxId($criterio->getValorDeCampo('prv_importacion.ins_marca_pieza'));
	$valor = $o->getDescripcion();
	
	$comparador = $criterio->getComparadorDeCampo('prv_importacion.ins_marca_pieza');

	$filtros['prv_importacion.ins_marca_pieza'] = array('campo' => 'Marca Pieza', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('prv_importacion.prv_convenio_descuento_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('prv_importacion.prv_convenio_descuento_id');
	$o = PrvConvenioDescuento::getOxId($criterio->getValorDeCampo('prv_importacion.prv_convenio_descuento_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('prv_importacion.prv_convenio_descuento_id');

	$filtros['prv_importacion.prv_convenio_descuento_id'] = array('campo' => 'PrvConvenioDescuento', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('prv_importacion.descuento') != ''){
	$valor = $valor = $criterio->getValorDeCampo('prv_importacion.descuento');
	$comparador = $criterio->getComparadorDeCampo('prv_importacion.descuento');

	$filtros['prv_importacion.descuento'] = array('campo' => 'Descuento', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('prv_importacion.cantidad_tab1') != ''){
	$valor = $valor = $criterio->getValorDeCampo('prv_importacion.cantidad_tab1');
	$comparador = $criterio->getComparadorDeCampo('prv_importacion.cantidad_tab1');

	$filtros['prv_importacion.cantidad_tab1'] = array('campo' => 'Cant Tab 1', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('prv_importacion.cantidad_tab2') != ''){
	$valor = $valor = $criterio->getValorDeCampo('prv_importacion.cantidad_tab2');
	$comparador = $criterio->getComparadorDeCampo('prv_importacion.cantidad_tab2');

	$filtros['prv_importacion.cantidad_tab2'] = array('campo' => 'Cant Tab 2', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('prv_importacion.cantidad_tab3') != ''){
	$valor = $valor = $criterio->getValorDeCampo('prv_importacion.cantidad_tab3');
	$comparador = $criterio->getComparadorDeCampo('prv_importacion.cantidad_tab3');

	$filtros['prv_importacion.cantidad_tab3'] = array('campo' => 'Cant Tab 3', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('prv_importacion.cantidad_tab4') != ''){
	$valor = $valor = $criterio->getValorDeCampo('prv_importacion.cantidad_tab4');
	$comparador = $criterio->getComparadorDeCampo('prv_importacion.cantidad_tab4');

	$filtros['prv_importacion.cantidad_tab4'] = array('campo' => 'Cant Tab 4', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('prv_importacion.seleccionar_todos') != ''){
	$valor = $valor = $criterio->getValorDeCampo('prv_importacion.seleccionar_todos');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('prv_importacion.seleccionar_todos'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('prv_importacion.seleccionar_todos');

	$filtros['prv_importacion.seleccionar_todos'] = array('campo' => 'Sel Todos', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('prv_importacion.seleccionar_todos_descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('prv_importacion.seleccionar_todos_descripcion');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('prv_importacion.seleccionar_todos_descripcion'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('prv_importacion.seleccionar_todos_descripcion');

	$filtros['prv_importacion.seleccionar_todos_descripcion'] = array('campo' => 'Sel Todos Desc', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('prv_importacion.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('prv_importacion.observacion');
	$comparador = $criterio->getComparadorDeCampo('prv_importacion.observacion');

	$filtros['prv_importacion.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('prv_importacion.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('prv_importacion.orden');
	$comparador = $criterio->getComparadorDeCampo('prv_importacion.orden');

	$filtros['prv_importacion.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('prv_importacion.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('prv_importacion.estado');
	$comparador = $criterio->getComparadorDeCampo('prv_importacion.estado');

	$filtros['prv_importacion.estado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('prv_importacion.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('prv_importacion.creado');
	$comparador = $criterio->getComparadorDeCampo('prv_importacion.creado');

	$filtros['prv_importacion.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('prv_importacion.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('prv_importacion.creado_por');
	$comparador = $criterio->getComparadorDeCampo('prv_importacion.creado_por');

	$filtros['prv_importacion.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('prv_importacion.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('prv_importacion.modificado');
	$comparador = $criterio->getComparadorDeCampo('prv_importacion.modificado');

	$filtros['prv_importacion.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('prv_importacion.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('prv_importacion.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('prv_importacion.modificado_por');

	$filtros['prv_importacion.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

