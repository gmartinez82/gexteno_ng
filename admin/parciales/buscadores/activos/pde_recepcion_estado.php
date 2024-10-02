<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['pde_recepcion_estado.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('pde_recepcion_estado.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_recepcion_estado.id');
	$comparador = $criterio->getComparadorDeCampo('pde_recepcion_estado.id');

	$filtros['pde_recepcion_estado.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_recepcion_estado.pde_recepcion_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_recepcion_estado.pde_recepcion_id');
	$o = PdeRecepcion::getOxId($criterio->getValorDeCampo('pde_recepcion_estado.pde_recepcion_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('pde_recepcion_estado.pde_recepcion_id');

	$filtros['pde_recepcion_estado.pde_recepcion_id'] = array('campo' => 'PdeRecepcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_recepcion_estado.pde_recepcion_tipo_estado_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_recepcion_estado.pde_recepcion_tipo_estado_id');
	$o = PdeRecepcionTipoEstado::getOxId($criterio->getValorDeCampo('pde_recepcion_estado.pde_recepcion_tipo_estado_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('pde_recepcion_estado.pde_recepcion_tipo_estado_id');

	$filtros['pde_recepcion_estado.pde_recepcion_tipo_estado_id'] = array('campo' => 'PdeRecepcionTipoEstado', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_recepcion_estado.pde_centro_recepcion_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_recepcion_estado.pde_centro_recepcion_id');
	$o = PdeCentroRecepcion::getOxId($criterio->getValorDeCampo('pde_recepcion_estado.pde_centro_recepcion_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('pde_recepcion_estado.pde_centro_recepcion_id');

	$filtros['pde_recepcion_estado.pde_centro_recepcion_id'] = array('campo' => 'PdeCentroRecepcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_recepcion_estado.pan_panol_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_recepcion_estado.pan_panol_id');
	$o = PanPanol::getOxId($criterio->getValorDeCampo('pde_recepcion_estado.pan_panol_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('pde_recepcion_estado.pan_panol_id');

	$filtros['pde_recepcion_estado.pan_panol_id'] = array('campo' => 'PanPanol', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_recepcion_estado.cantidad') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_recepcion_estado.cantidad');
	$comparador = $criterio->getComparadorDeCampo('pde_recepcion_estado.cantidad');

	$filtros['pde_recepcion_estado.cantidad'] = array('campo' => 'Cantidad', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_recepcion_estado.inicial') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_recepcion_estado.inicial');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('pde_recepcion_estado.inicial'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('pde_recepcion_estado.inicial');

	$filtros['pde_recepcion_estado.inicial'] = array('campo' => 'Inicial', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_recepcion_estado.actual') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_recepcion_estado.actual');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('pde_recepcion_estado.actual'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('pde_recepcion_estado.actual');

	$filtros['pde_recepcion_estado.actual'] = array('campo' => 'Actual', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_recepcion_estado.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_recepcion_estado.observacion');
	$comparador = $criterio->getComparadorDeCampo('pde_recepcion_estado.observacion');

	$filtros['pde_recepcion_estado.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_recepcion_estado.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_recepcion_estado.creado');
	$comparador = $criterio->getComparadorDeCampo('pde_recepcion_estado.creado');

	$filtros['pde_recepcion_estado.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_recepcion_estado.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_recepcion_estado.creado_por');
	$comparador = $criterio->getComparadorDeCampo('pde_recepcion_estado.creado_por');

	$filtros['pde_recepcion_estado.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_recepcion_estado.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_recepcion_estado.modificado');
	$comparador = $criterio->getComparadorDeCampo('pde_recepcion_estado.modificado');

	$filtros['pde_recepcion_estado.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_recepcion_estado.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_recepcion_estado.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('pde_recepcion_estado.modificado_por');

	$filtros['pde_recepcion_estado.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

