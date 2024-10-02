<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['ml_item_status.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('ml_item_status.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ml_item_status.id');
	$comparador = $criterio->getComparadorDeCampo('ml_item_status.id');

	$filtros['ml_item_status.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ml_item_status.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ml_item_status.descripcion');
	$comparador = $criterio->getComparadorDeCampo('ml_item_status.descripcion');

	$filtros['ml_item_status.descripcion'] = array('campo' => 'Descripcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ml_item_status.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ml_item_status.codigo');
	$comparador = $criterio->getComparadorDeCampo('ml_item_status.codigo');

	$filtros['ml_item_status.codigo'] = array('campo' => 'Codigo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ml_item_status.codigo_ml') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ml_item_status.codigo_ml');
	$comparador = $criterio->getComparadorDeCampo('ml_item_status.codigo_ml');

	$filtros['ml_item_status.codigo_ml'] = array('campo' => 'Codigo ML', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ml_item_status.activo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ml_item_status.activo');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('ml_item_status.activo'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('ml_item_status.activo');

	$filtros['ml_item_status.activo'] = array('campo' => 'Activo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ml_item_status.inactivo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ml_item_status.inactivo');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('ml_item_status.inactivo'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('ml_item_status.inactivo');

	$filtros['ml_item_status.inactivo'] = array('campo' => 'Inactivo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ml_item_status.requiere_atencion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ml_item_status.requiere_atencion');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('ml_item_status.requiere_atencion'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('ml_item_status.requiere_atencion');

	$filtros['ml_item_status.requiere_atencion'] = array('campo' => 'Req Atencion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ml_item_status.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ml_item_status.observacion');
	$comparador = $criterio->getComparadorDeCampo('ml_item_status.observacion');

	$filtros['ml_item_status.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ml_item_status.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ml_item_status.orden');
	$comparador = $criterio->getComparadorDeCampo('ml_item_status.orden');

	$filtros['ml_item_status.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ml_item_status.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ml_item_status.estado');
	$comparador = $criterio->getComparadorDeCampo('ml_item_status.estado');

	$filtros['ml_item_status.estado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ml_item_status.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ml_item_status.creado');
	$comparador = $criterio->getComparadorDeCampo('ml_item_status.creado');

	$filtros['ml_item_status.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ml_item_status.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ml_item_status.creado_por');
	$comparador = $criterio->getComparadorDeCampo('ml_item_status.creado_por');

	$filtros['ml_item_status.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ml_item_status.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ml_item_status.modificado');
	$comparador = $criterio->getComparadorDeCampo('ml_item_status.modificado');

	$filtros['ml_item_status.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ml_item_status.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ml_item_status.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('ml_item_status.modificado_por');

	$filtros['ml_item_status.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

