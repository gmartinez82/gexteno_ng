<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['prv_insumo_costo.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('prv_insumo_costo.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('prv_insumo_costo.id');
	$comparador = $criterio->getComparadorDeCampo('prv_insumo_costo.id');

	$filtros['prv_insumo_costo.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('prv_insumo_costo.prv_insumo_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('prv_insumo_costo.prv_insumo_id');
	$o = PrvInsumo::getOxId($criterio->getValorDeCampo('prv_insumo_costo.prv_insumo_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('prv_insumo_costo.prv_insumo_id');

	$filtros['prv_insumo_costo.prv_insumo_id'] = array('campo' => 'PrvInsumo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('prv_insumo_costo.importe_bruto') != ''){
	$valor = $valor = $criterio->getValorDeCampo('prv_insumo_costo.importe_bruto');
	$comparador = $criterio->getComparadorDeCampo('prv_insumo_costo.importe_bruto');

	$filtros['prv_insumo_costo.importe_bruto'] = array('campo' => 'Importe Bruto', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('prv_insumo_costo.descuento') != ''){
	$valor = $valor = $criterio->getValorDeCampo('prv_insumo_costo.descuento');
	$comparador = $criterio->getComparadorDeCampo('prv_insumo_costo.descuento');

	$filtros['prv_insumo_costo.descuento'] = array('campo' => 'Descuento', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('prv_insumo_costo.inicial') != ''){
	$valor = $valor = $criterio->getValorDeCampo('prv_insumo_costo.inicial');
	$comparador = $criterio->getComparadorDeCampo('prv_insumo_costo.inicial');

	$filtros['prv_insumo_costo.inicial'] = array('campo' => 'Inicial', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('prv_insumo_costo.actual') != ''){
	$valor = $valor = $criterio->getValorDeCampo('prv_insumo_costo.actual');
	$comparador = $criterio->getComparadorDeCampo('prv_insumo_costo.actual');

	$filtros['prv_insumo_costo.actual'] = array('campo' => 'Actual', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('prv_insumo_costo.numero_importacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('prv_insumo_costo.numero_importacion');
	$comparador = $criterio->getComparadorDeCampo('prv_insumo_costo.numero_importacion');

	$filtros['prv_insumo_costo.numero_importacion'] = array('campo' => 'Nro Importac', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('prv_insumo_costo.fecha_actualizacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('prv_insumo_costo.fecha_actualizacion');
	$comparador = $criterio->getComparadorDeCampo('prv_insumo_costo.fecha_actualizacion');

	$filtros['prv_insumo_costo.fecha_actualizacion'] = array('campo' => 'Fecha', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('prv_insumo_costo.prv_importacion_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('prv_insumo_costo.prv_importacion_id');
	$o = PrvImportacion::getOxId($criterio->getValorDeCampo('prv_insumo_costo.prv_importacion_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('prv_insumo_costo.prv_importacion_id');

	$filtros['prv_insumo_costo.prv_importacion_id'] = array('campo' => 'PrvImportacion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('prv_insumo_costo.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('prv_insumo_costo.observacion');
	$comparador = $criterio->getComparadorDeCampo('prv_insumo_costo.observacion');

	$filtros['prv_insumo_costo.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('prv_insumo_costo.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('prv_insumo_costo.orden');
	$comparador = $criterio->getComparadorDeCampo('prv_insumo_costo.orden');

	$filtros['prv_insumo_costo.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('prv_insumo_costo.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('prv_insumo_costo.estado');
	$comparador = $criterio->getComparadorDeCampo('prv_insumo_costo.estado');

	$filtros['prv_insumo_costo.estado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('prv_insumo_costo.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('prv_insumo_costo.creado');
	$comparador = $criterio->getComparadorDeCampo('prv_insumo_costo.creado');

	$filtros['prv_insumo_costo.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('prv_insumo_costo.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('prv_insumo_costo.creado_por');
	$comparador = $criterio->getComparadorDeCampo('prv_insumo_costo.creado_por');

	$filtros['prv_insumo_costo.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('prv_insumo_costo.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('prv_insumo_costo.modificado');
	$comparador = $criterio->getComparadorDeCampo('prv_insumo_costo.modificado');

	$filtros['prv_insumo_costo.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('prv_insumo_costo.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('prv_insumo_costo.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('prv_insumo_costo.modificado_por');

	$filtros['prv_insumo_costo.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

