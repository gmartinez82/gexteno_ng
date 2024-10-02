<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['prv_insumo.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('prv_insumo.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('prv_insumo.id');
	$comparador = $criterio->getComparadorDeCampo('prv_insumo.id');

	$filtros['prv_insumo.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('prv_insumo.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('prv_insumo.descripcion');
	$comparador = $criterio->getComparadorDeCampo('prv_insumo.descripcion');

	$filtros['prv_insumo.descripcion'] = array('campo' => 'Descripcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('prv_insumo.ins_insumo_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('prv_insumo.ins_insumo_id');
	$comparador = $criterio->getComparadorDeCampo('prv_insumo.ins_insumo_id');

	$filtros['prv_insumo.ins_insumo_id'] = array('campo' => 'InsInsumo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('prv_insumo.prv_proveedor_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('prv_insumo.prv_proveedor_id');
	$o = PrvProveedor::getOxId($criterio->getValorDeCampo('prv_insumo.prv_proveedor_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('prv_insumo.prv_proveedor_id');

	$filtros['prv_insumo.prv_proveedor_id'] = array('campo' => 'PrvProveedor', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('prv_insumo.codigo_proveedor') != ''){
	$valor = $valor = $criterio->getValorDeCampo('prv_insumo.codigo_proveedor');
	$comparador = $criterio->getComparadorDeCampo('prv_insumo.codigo_proveedor');

	$filtros['prv_insumo.codigo_proveedor'] = array('campo' => 'Cod Proveedor', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('prv_insumo.ins_marca_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('prv_insumo.ins_marca_id');
	$o = InsMarca::getOxId($criterio->getValorDeCampo('prv_insumo.ins_marca_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('prv_insumo.ins_marca_id');

	$filtros['prv_insumo.ins_marca_id'] = array('campo' => 'InsMarca', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('prv_insumo.codigo_marca') != ''){
	$valor = $valor = $criterio->getValorDeCampo('prv_insumo.codigo_marca');
	$comparador = $criterio->getComparadorDeCampo('prv_insumo.codigo_marca');

	$filtros['prv_insumo.codigo_marca'] = array('campo' => 'Cod Marca', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('prv_insumo.ins_matriz_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('prv_insumo.ins_matriz_id');
	$comparador = $criterio->getComparadorDeCampo('prv_insumo.ins_matriz_id');

	$filtros['prv_insumo.ins_matriz_id'] = array('campo' => 'InsMatriz', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('prv_insumo.ins_marca_pieza') != ''){
	$valor = $valor = $criterio->getValorDeCampo('prv_insumo.ins_marca_pieza');
	$o = InsMarca::getOxId($criterio->getValorDeCampo('prv_insumo.ins_marca_pieza'));
	$valor = $o->getDescripcion();
	
	$comparador = $criterio->getComparadorDeCampo('prv_insumo.ins_marca_pieza');

	$filtros['prv_insumo.ins_marca_pieza'] = array('campo' => 'InsMarcaPieza', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('prv_insumo.codigo_pieza') != ''){
	$valor = $valor = $criterio->getValorDeCampo('prv_insumo.codigo_pieza');
	$comparador = $criterio->getComparadorDeCampo('prv_insumo.codigo_pieza');

	$filtros['prv_insumo.codigo_pieza'] = array('campo' => 'Cod Pieza', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('prv_insumo.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('prv_insumo.codigo');
	$comparador = $criterio->getComparadorDeCampo('prv_insumo.codigo');

	$filtros['prv_insumo.codigo'] = array('campo' => 'Codigo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('prv_insumo.fecha_actualizacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('prv_insumo.fecha_actualizacion');
	$comparador = $criterio->getComparadorDeCampo('prv_insumo.fecha_actualizacion');

	$filtros['prv_insumo.fecha_actualizacion'] = array('campo' => 'Fecha', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('prv_insumo.referencial') != ''){
	$valor = $valor = $criterio->getValorDeCampo('prv_insumo.referencial');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('prv_insumo.referencial'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('prv_insumo.referencial');

	$filtros['prv_insumo.referencial'] = array('campo' => 'Referencial', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('prv_insumo.claves') != ''){
	$valor = $valor = $criterio->getValorDeCampo('prv_insumo.claves');
	$comparador = $criterio->getComparadorDeCampo('prv_insumo.claves');

	$filtros['prv_insumo.claves'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('prv_insumo.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('prv_insumo.observacion');
	$comparador = $criterio->getComparadorDeCampo('prv_insumo.observacion');

	$filtros['prv_insumo.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('prv_insumo.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('prv_insumo.orden');
	$comparador = $criterio->getComparadorDeCampo('prv_insumo.orden');

	$filtros['prv_insumo.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('prv_insumo.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('prv_insumo.estado');
	$comparador = $criterio->getComparadorDeCampo('prv_insumo.estado');

	$filtros['prv_insumo.estado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('prv_insumo.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('prv_insumo.creado');
	$comparador = $criterio->getComparadorDeCampo('prv_insumo.creado');

	$filtros['prv_insumo.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('prv_insumo.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('prv_insumo.creado_por');
	$comparador = $criterio->getComparadorDeCampo('prv_insumo.creado_por');

	$filtros['prv_insumo.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('prv_insumo.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('prv_insumo.modificado');
	$comparador = $criterio->getComparadorDeCampo('prv_insumo.modificado');

	$filtros['prv_insumo.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('prv_insumo.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('prv_insumo.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('prv_insumo.modificado_por');

	$filtros['prv_insumo.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

