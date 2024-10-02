<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['vta_recibo_estado.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('vta_recibo_estado.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_recibo_estado.id');
	$comparador = $criterio->getComparadorDeCampo('vta_recibo_estado.id');

	$filtros['vta_recibo_estado.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_recibo_estado.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_recibo_estado.descripcion');
	$comparador = $criterio->getComparadorDeCampo('vta_recibo_estado.descripcion');

	$filtros['vta_recibo_estado.descripcion'] = array('campo' => 'Descripcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_recibo_estado.vta_recibo_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_recibo_estado.vta_recibo_id');
	$o = VtaRecibo::getOxId($criterio->getValorDeCampo('vta_recibo_estado.vta_recibo_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('vta_recibo_estado.vta_recibo_id');

	$filtros['vta_recibo_estado.vta_recibo_id'] = array('campo' => 'VtaRecibo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_recibo_estado.vta_recibo_tipo_estado_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_recibo_estado.vta_recibo_tipo_estado_id');
	$o = VtaReciboTipoEstado::getOxId($criterio->getValorDeCampo('vta_recibo_estado.vta_recibo_tipo_estado_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('vta_recibo_estado.vta_recibo_tipo_estado_id');

	$filtros['vta_recibo_estado.vta_recibo_tipo_estado_id'] = array('campo' => 'VtaReciboTipoEstado', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_recibo_estado.inicial') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_recibo_estado.inicial');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('vta_recibo_estado.inicial'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('vta_recibo_estado.inicial');

	$filtros['vta_recibo_estado.inicial'] = array('campo' => 'Inicial', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_recibo_estado.actual') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_recibo_estado.actual');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('vta_recibo_estado.actual'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('vta_recibo_estado.actual');

	$filtros['vta_recibo_estado.actual'] = array('campo' => 'Actual', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_recibo_estado.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_recibo_estado.codigo');
	$comparador = $criterio->getComparadorDeCampo('vta_recibo_estado.codigo');

	$filtros['vta_recibo_estado.codigo'] = array('campo' => 'Codigo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_recibo_estado.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_recibo_estado.observacion');
	$comparador = $criterio->getComparadorDeCampo('vta_recibo_estado.observacion');

	$filtros['vta_recibo_estado.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_recibo_estado.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_recibo_estado.orden');
	$comparador = $criterio->getComparadorDeCampo('vta_recibo_estado.orden');

	$filtros['vta_recibo_estado.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_recibo_estado.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_recibo_estado.estado');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('vta_recibo_estado.estado'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('vta_recibo_estado.estado');

	$filtros['vta_recibo_estado.estado'] = array('campo' => 'Estado', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_recibo_estado.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_recibo_estado.creado');
	$comparador = $criterio->getComparadorDeCampo('vta_recibo_estado.creado');

	$filtros['vta_recibo_estado.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_recibo_estado.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_recibo_estado.creado_por');
	$comparador = $criterio->getComparadorDeCampo('vta_recibo_estado.creado_por');

	$filtros['vta_recibo_estado.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_recibo_estado.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_recibo_estado.modificado');
	$comparador = $criterio->getComparadorDeCampo('vta_recibo_estado.modificado');

	$filtros['vta_recibo_estado.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_recibo_estado.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_recibo_estado.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('vta_recibo_estado.modificado_por');

	$filtros['vta_recibo_estado.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

