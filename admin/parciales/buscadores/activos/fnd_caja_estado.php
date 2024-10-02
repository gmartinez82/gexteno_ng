<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['fnd_caja_estado.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('fnd_caja_estado.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_caja_estado.id');
	$comparador = $criterio->getComparadorDeCampo('fnd_caja_estado.id');

	$filtros['fnd_caja_estado.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('fnd_caja_estado.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_caja_estado.descripcion');
	$comparador = $criterio->getComparadorDeCampo('fnd_caja_estado.descripcion');

	$filtros['fnd_caja_estado.descripcion'] = array('campo' => 'Descripcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('fnd_caja_estado.fnd_caja_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_caja_estado.fnd_caja_id');
	$comparador = $criterio->getComparadorDeCampo('fnd_caja_estado.fnd_caja_id');

	$filtros['fnd_caja_estado.fnd_caja_id'] = array('campo' => 'FndCaja', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('fnd_caja_estado.fnd_caja_tipo_estado_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_caja_estado.fnd_caja_tipo_estado_id');
	$o = FndCajaTipoEstado::getOxId($criterio->getValorDeCampo('fnd_caja_estado.fnd_caja_tipo_estado_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('fnd_caja_estado.fnd_caja_tipo_estado_id');

	$filtros['fnd_caja_estado.fnd_caja_tipo_estado_id'] = array('campo' => 'FndCajaTipoEstado', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('fnd_caja_estado.inicial') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_caja_estado.inicial');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('fnd_caja_estado.inicial'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('fnd_caja_estado.inicial');

	$filtros['fnd_caja_estado.inicial'] = array('campo' => 'Inicial', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('fnd_caja_estado.actual') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_caja_estado.actual');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('fnd_caja_estado.actual'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('fnd_caja_estado.actual');

	$filtros['fnd_caja_estado.actual'] = array('campo' => 'Actual', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('fnd_caja_estado.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_caja_estado.codigo');
	$comparador = $criterio->getComparadorDeCampo('fnd_caja_estado.codigo');

	$filtros['fnd_caja_estado.codigo'] = array('campo' => 'Codigo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('fnd_caja_estado.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_caja_estado.observacion');
	$comparador = $criterio->getComparadorDeCampo('fnd_caja_estado.observacion');

	$filtros['fnd_caja_estado.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('fnd_caja_estado.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_caja_estado.orden');
	$comparador = $criterio->getComparadorDeCampo('fnd_caja_estado.orden');

	$filtros['fnd_caja_estado.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('fnd_caja_estado.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_caja_estado.estado');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('fnd_caja_estado.estado'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('fnd_caja_estado.estado');

	$filtros['fnd_caja_estado.estado'] = array('campo' => 'Estado', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('fnd_caja_estado.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_caja_estado.creado');
	$comparador = $criterio->getComparadorDeCampo('fnd_caja_estado.creado');

	$filtros['fnd_caja_estado.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('fnd_caja_estado.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_caja_estado.creado_por');
	$comparador = $criterio->getComparadorDeCampo('fnd_caja_estado.creado_por');

	$filtros['fnd_caja_estado.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('fnd_caja_estado.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_caja_estado.modificado');
	$comparador = $criterio->getComparadorDeCampo('fnd_caja_estado.modificado');

	$filtros['fnd_caja_estado.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('fnd_caja_estado.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_caja_estado.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('fnd_caja_estado.modificado_por');

	$filtros['fnd_caja_estado.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

