<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['pde_recepcion_estado_facturacion.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('pde_recepcion_estado_facturacion.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_recepcion_estado_facturacion.id');
	$comparador = $criterio->getComparadorDeCampo('pde_recepcion_estado_facturacion.id');

	$filtros['pde_recepcion_estado_facturacion.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_recepcion_estado_facturacion.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_recepcion_estado_facturacion.descripcion');
	$comparador = $criterio->getComparadorDeCampo('pde_recepcion_estado_facturacion.descripcion');

	$filtros['pde_recepcion_estado_facturacion.descripcion'] = array('campo' => 'Descripcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_recepcion_estado_facturacion.pde_recepcion_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_recepcion_estado_facturacion.pde_recepcion_id');
	$o = PdeRecepcion::getOxId($criterio->getValorDeCampo('pde_recepcion_estado_facturacion.pde_recepcion_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('pde_recepcion_estado_facturacion.pde_recepcion_id');

	$filtros['pde_recepcion_estado_facturacion.pde_recepcion_id'] = array('campo' => 'PdeRecepcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_recepcion_estado_facturacion.pde_recepcion_tipo_estado_facturacion_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_recepcion_estado_facturacion.pde_recepcion_tipo_estado_facturacion_id');
	$o = PdeRecepcionTipoEstadoFacturacion::getOxId($criterio->getValorDeCampo('pde_recepcion_estado_facturacion.pde_recepcion_tipo_estado_facturacion_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('pde_recepcion_estado_facturacion.pde_recepcion_tipo_estado_facturacion_id');

	$filtros['pde_recepcion_estado_facturacion.pde_recepcion_tipo_estado_facturacion_id'] = array('campo' => 'PdeRecepcionTipoEstadoFacturacion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_recepcion_estado_facturacion.inicial') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_recepcion_estado_facturacion.inicial');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('pde_recepcion_estado_facturacion.inicial'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('pde_recepcion_estado_facturacion.inicial');

	$filtros['pde_recepcion_estado_facturacion.inicial'] = array('campo' => 'Inicial', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_recepcion_estado_facturacion.actual') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_recepcion_estado_facturacion.actual');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('pde_recepcion_estado_facturacion.actual'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('pde_recepcion_estado_facturacion.actual');

	$filtros['pde_recepcion_estado_facturacion.actual'] = array('campo' => 'Actual', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_recepcion_estado_facturacion.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_recepcion_estado_facturacion.codigo');
	$comparador = $criterio->getComparadorDeCampo('pde_recepcion_estado_facturacion.codigo');

	$filtros['pde_recepcion_estado_facturacion.codigo'] = array('campo' => 'Codigo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_recepcion_estado_facturacion.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_recepcion_estado_facturacion.observacion');
	$comparador = $criterio->getComparadorDeCampo('pde_recepcion_estado_facturacion.observacion');

	$filtros['pde_recepcion_estado_facturacion.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_recepcion_estado_facturacion.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_recepcion_estado_facturacion.orden');
	$comparador = $criterio->getComparadorDeCampo('pde_recepcion_estado_facturacion.orden');

	$filtros['pde_recepcion_estado_facturacion.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_recepcion_estado_facturacion.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_recepcion_estado_facturacion.estado');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('pde_recepcion_estado_facturacion.estado'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('pde_recepcion_estado_facturacion.estado');

	$filtros['pde_recepcion_estado_facturacion.estado'] = array('campo' => 'Estado', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_recepcion_estado_facturacion.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_recepcion_estado_facturacion.creado');
	$comparador = $criterio->getComparadorDeCampo('pde_recepcion_estado_facturacion.creado');

	$filtros['pde_recepcion_estado_facturacion.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_recepcion_estado_facturacion.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_recepcion_estado_facturacion.creado_por');
	$comparador = $criterio->getComparadorDeCampo('pde_recepcion_estado_facturacion.creado_por');

	$filtros['pde_recepcion_estado_facturacion.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_recepcion_estado_facturacion.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_recepcion_estado_facturacion.modificado');
	$comparador = $criterio->getComparadorDeCampo('pde_recepcion_estado_facturacion.modificado');

	$filtros['pde_recepcion_estado_facturacion.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_recepcion_estado_facturacion.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_recepcion_estado_facturacion.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('pde_recepcion_estado_facturacion.modificado_por');

	$filtros['pde_recepcion_estado_facturacion.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

