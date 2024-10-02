<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['vta_comision_tipo_estado.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('vta_comision_tipo_estado.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_comision_tipo_estado.id');
	$comparador = $criterio->getComparadorDeCampo('vta_comision_tipo_estado.id');

	$filtros['vta_comision_tipo_estado.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_comision_tipo_estado.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_comision_tipo_estado.descripcion');
	$comparador = $criterio->getComparadorDeCampo('vta_comision_tipo_estado.descripcion');

	$filtros['vta_comision_tipo_estado.descripcion'] = array('campo' => 'Descripcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_comision_tipo_estado.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_comision_tipo_estado.codigo');
	$comparador = $criterio->getComparadorDeCampo('vta_comision_tipo_estado.codigo');

	$filtros['vta_comision_tipo_estado.codigo'] = array('campo' => 'Codigo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_comision_tipo_estado.activo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_comision_tipo_estado.activo');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('vta_comision_tipo_estado.activo'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('vta_comision_tipo_estado.activo');

	$filtros['vta_comision_tipo_estado.activo'] = array('campo' => 'Activo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_comision_tipo_estado.terminal') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_comision_tipo_estado.terminal');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('vta_comision_tipo_estado.terminal'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('vta_comision_tipo_estado.terminal');

	$filtros['vta_comision_tipo_estado.terminal'] = array('campo' => 'Terminal', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_comision_tipo_estado.anulado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_comision_tipo_estado.anulado');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('vta_comision_tipo_estado.anulado'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('vta_comision_tipo_estado.anulado');

	$filtros['vta_comision_tipo_estado.anulado'] = array('campo' => 'Anulado', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_comision_tipo_estado.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_comision_tipo_estado.observacion');
	$comparador = $criterio->getComparadorDeCampo('vta_comision_tipo_estado.observacion');

	$filtros['vta_comision_tipo_estado.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_comision_tipo_estado.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_comision_tipo_estado.orden');
	$comparador = $criterio->getComparadorDeCampo('vta_comision_tipo_estado.orden');

	$filtros['vta_comision_tipo_estado.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_comision_tipo_estado.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_comision_tipo_estado.estado');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('vta_comision_tipo_estado.estado'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('vta_comision_tipo_estado.estado');

	$filtros['vta_comision_tipo_estado.estado'] = array('campo' => 'Estado', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_comision_tipo_estado.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_comision_tipo_estado.creado');
	$comparador = $criterio->getComparadorDeCampo('vta_comision_tipo_estado.creado');

	$filtros['vta_comision_tipo_estado.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_comision_tipo_estado.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_comision_tipo_estado.creado_por');
	$comparador = $criterio->getComparadorDeCampo('vta_comision_tipo_estado.creado_por');

	$filtros['vta_comision_tipo_estado.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_comision_tipo_estado.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_comision_tipo_estado.modificado');
	$comparador = $criterio->getComparadorDeCampo('vta_comision_tipo_estado.modificado');

	$filtros['vta_comision_tipo_estado.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_comision_tipo_estado.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_comision_tipo_estado.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('vta_comision_tipo_estado.modificado_por');

	$filtros['vta_comision_tipo_estado.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

