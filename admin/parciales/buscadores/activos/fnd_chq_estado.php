<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['fnd_chq_estado.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('fnd_chq_estado.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_chq_estado.id');
	$comparador = $criterio->getComparadorDeCampo('fnd_chq_estado.id');

	$filtros['fnd_chq_estado.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('fnd_chq_estado.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_chq_estado.descripcion');
	$comparador = $criterio->getComparadorDeCampo('fnd_chq_estado.descripcion');

	$filtros['fnd_chq_estado.descripcion'] = array('campo' => 'Descripcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('fnd_chq_estado.fnd_chq_cheque_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_chq_estado.fnd_chq_cheque_id');
	$o = FndChqCheque::getOxId($criterio->getValorDeCampo('fnd_chq_estado.fnd_chq_cheque_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('fnd_chq_estado.fnd_chq_cheque_id');

	$filtros['fnd_chq_estado.fnd_chq_cheque_id'] = array('campo' => 'FndChqCheque', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('fnd_chq_estado.fnd_chq_tipo_estado_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_chq_estado.fnd_chq_tipo_estado_id');
	$o = FndChqTipoEstado::getOxId($criterio->getValorDeCampo('fnd_chq_estado.fnd_chq_tipo_estado_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('fnd_chq_estado.fnd_chq_tipo_estado_id');

	$filtros['fnd_chq_estado.fnd_chq_tipo_estado_id'] = array('campo' => 'FndChqTipoEstado', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('fnd_chq_estado.inicial') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_chq_estado.inicial');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('fnd_chq_estado.inicial'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('fnd_chq_estado.inicial');

	$filtros['fnd_chq_estado.inicial'] = array('campo' => 'Inicial', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('fnd_chq_estado.actual') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_chq_estado.actual');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('fnd_chq_estado.actual'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('fnd_chq_estado.actual');

	$filtros['fnd_chq_estado.actual'] = array('campo' => 'Actual', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('fnd_chq_estado.endosado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_chq_estado.endosado');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('fnd_chq_estado.endosado'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('fnd_chq_estado.endosado');

	$filtros['fnd_chq_estado.endosado'] = array('campo' => 'Endosado', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('fnd_chq_estado.fnd_caja_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_chq_estado.fnd_caja_id');
	$o = FndCaja::getOxId($criterio->getValorDeCampo('fnd_chq_estado.fnd_caja_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('fnd_chq_estado.fnd_caja_id');

	$filtros['fnd_chq_estado.fnd_caja_id'] = array('campo' => 'FndCaja', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('fnd_chq_estado.gral_caja_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_chq_estado.gral_caja_id');
	$o = GralCaja::getOxId($criterio->getValorDeCampo('fnd_chq_estado.gral_caja_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('fnd_chq_estado.gral_caja_id');

	$filtros['fnd_chq_estado.gral_caja_id'] = array('campo' => 'GralCaja', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('fnd_chq_estado.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_chq_estado.codigo');
	$comparador = $criterio->getComparadorDeCampo('fnd_chq_estado.codigo');

	$filtros['fnd_chq_estado.codigo'] = array('campo' => 'Codigo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('fnd_chq_estado.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_chq_estado.observacion');
	$comparador = $criterio->getComparadorDeCampo('fnd_chq_estado.observacion');

	$filtros['fnd_chq_estado.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('fnd_chq_estado.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_chq_estado.orden');
	$comparador = $criterio->getComparadorDeCampo('fnd_chq_estado.orden');

	$filtros['fnd_chq_estado.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('fnd_chq_estado.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_chq_estado.estado');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('fnd_chq_estado.estado'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('fnd_chq_estado.estado');

	$filtros['fnd_chq_estado.estado'] = array('campo' => 'Estado', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('fnd_chq_estado.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_chq_estado.creado');
	$comparador = $criterio->getComparadorDeCampo('fnd_chq_estado.creado');

	$filtros['fnd_chq_estado.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('fnd_chq_estado.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_chq_estado.creado_por');
	$comparador = $criterio->getComparadorDeCampo('fnd_chq_estado.creado_por');

	$filtros['fnd_chq_estado.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('fnd_chq_estado.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_chq_estado.modificado');
	$comparador = $criterio->getComparadorDeCampo('fnd_chq_estado.modificado');

	$filtros['fnd_chq_estado.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('fnd_chq_estado.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_chq_estado.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('fnd_chq_estado.modificado_por');

	$filtros['fnd_chq_estado.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

