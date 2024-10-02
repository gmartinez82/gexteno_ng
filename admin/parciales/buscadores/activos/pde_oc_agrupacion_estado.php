<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['pde_oc_agrupacion_estado.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('pde_oc_agrupacion_estado.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_oc_agrupacion_estado.id');
	$comparador = $criterio->getComparadorDeCampo('pde_oc_agrupacion_estado.id');

	$filtros['pde_oc_agrupacion_estado.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_oc_agrupacion_estado.pde_oc_agrupacion_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_oc_agrupacion_estado.pde_oc_agrupacion_id');
	$o = PdeOcAgrupacion::getOxId($criterio->getValorDeCampo('pde_oc_agrupacion_estado.pde_oc_agrupacion_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('pde_oc_agrupacion_estado.pde_oc_agrupacion_id');

	$filtros['pde_oc_agrupacion_estado.pde_oc_agrupacion_id'] = array('campo' => 'PdeOcAgrupacion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_oc_agrupacion_estado.pde_oc_agrupacion_tipo_estado_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_oc_agrupacion_estado.pde_oc_agrupacion_tipo_estado_id');
	$o = PdeOcAgrupacionTipoEstado::getOxId($criterio->getValorDeCampo('pde_oc_agrupacion_estado.pde_oc_agrupacion_tipo_estado_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('pde_oc_agrupacion_estado.pde_oc_agrupacion_tipo_estado_id');

	$filtros['pde_oc_agrupacion_estado.pde_oc_agrupacion_tipo_estado_id'] = array('campo' => 'PdeOcAgrupacionTipoEstado', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_oc_agrupacion_estado.inicial') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_oc_agrupacion_estado.inicial');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('pde_oc_agrupacion_estado.inicial'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('pde_oc_agrupacion_estado.inicial');

	$filtros['pde_oc_agrupacion_estado.inicial'] = array('campo' => 'Inicial', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_oc_agrupacion_estado.actual') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_oc_agrupacion_estado.actual');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('pde_oc_agrupacion_estado.actual'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('pde_oc_agrupacion_estado.actual');

	$filtros['pde_oc_agrupacion_estado.actual'] = array('campo' => 'Actual', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_oc_agrupacion_estado.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_oc_agrupacion_estado.observacion');
	$comparador = $criterio->getComparadorDeCampo('pde_oc_agrupacion_estado.observacion');

	$filtros['pde_oc_agrupacion_estado.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_oc_agrupacion_estado.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_oc_agrupacion_estado.creado');
	$comparador = $criterio->getComparadorDeCampo('pde_oc_agrupacion_estado.creado');

	$filtros['pde_oc_agrupacion_estado.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_oc_agrupacion_estado.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_oc_agrupacion_estado.creado_por');
	$comparador = $criterio->getComparadorDeCampo('pde_oc_agrupacion_estado.creado_por');

	$filtros['pde_oc_agrupacion_estado.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_oc_agrupacion_estado.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_oc_agrupacion_estado.modificado');
	$comparador = $criterio->getComparadorDeCampo('pde_oc_agrupacion_estado.modificado');

	$filtros['pde_oc_agrupacion_estado.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_oc_agrupacion_estado.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_oc_agrupacion_estado.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('pde_oc_agrupacion_estado.modificado_por');

	$filtros['pde_oc_agrupacion_estado.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

