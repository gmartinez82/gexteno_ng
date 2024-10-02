<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['ws_fe_param_tipo_concepto.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('ws_fe_param_tipo_concepto.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ws_fe_param_tipo_concepto.id');
	$comparador = $criterio->getComparadorDeCampo('ws_fe_param_tipo_concepto.id');

	$filtros['ws_fe_param_tipo_concepto.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ws_fe_param_tipo_concepto.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ws_fe_param_tipo_concepto.descripcion');
	$comparador = $criterio->getComparadorDeCampo('ws_fe_param_tipo_concepto.descripcion');

	$filtros['ws_fe_param_tipo_concepto.descripcion'] = array('campo' => 'Descripcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ws_fe_param_tipo_concepto.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ws_fe_param_tipo_concepto.codigo');
	$comparador = $criterio->getComparadorDeCampo('ws_fe_param_tipo_concepto.codigo');

	$filtros['ws_fe_param_tipo_concepto.codigo'] = array('campo' => 'Codigo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ws_fe_param_tipo_concepto.codigo_afip') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ws_fe_param_tipo_concepto.codigo_afip');
	$comparador = $criterio->getComparadorDeCampo('ws_fe_param_tipo_concepto.codigo_afip');

	$filtros['ws_fe_param_tipo_concepto.codigo_afip'] = array('campo' => 'Codigo Afip', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ws_fe_param_tipo_concepto.fecha_desde') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ws_fe_param_tipo_concepto.fecha_desde');
	$comparador = $criterio->getComparadorDeCampo('ws_fe_param_tipo_concepto.fecha_desde');

	$filtros['ws_fe_param_tipo_concepto.fecha_desde'] = array('campo' => 'Fecha Desde', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ws_fe_param_tipo_concepto.fecha_hasta') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ws_fe_param_tipo_concepto.fecha_hasta');
	$comparador = $criterio->getComparadorDeCampo('ws_fe_param_tipo_concepto.fecha_hasta');

	$filtros['ws_fe_param_tipo_concepto.fecha_hasta'] = array('campo' => 'Fecha Hasta', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ws_fe_param_tipo_concepto.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ws_fe_param_tipo_concepto.observacion');
	$comparador = $criterio->getComparadorDeCampo('ws_fe_param_tipo_concepto.observacion');

	$filtros['ws_fe_param_tipo_concepto.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ws_fe_param_tipo_concepto.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ws_fe_param_tipo_concepto.orden');
	$comparador = $criterio->getComparadorDeCampo('ws_fe_param_tipo_concepto.orden');

	$filtros['ws_fe_param_tipo_concepto.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ws_fe_param_tipo_concepto.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ws_fe_param_tipo_concepto.estado');
	$comparador = $criterio->getComparadorDeCampo('ws_fe_param_tipo_concepto.estado');

	$filtros['ws_fe_param_tipo_concepto.estado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ws_fe_param_tipo_concepto.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ws_fe_param_tipo_concepto.creado');
	$comparador = $criterio->getComparadorDeCampo('ws_fe_param_tipo_concepto.creado');

	$filtros['ws_fe_param_tipo_concepto.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ws_fe_param_tipo_concepto.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ws_fe_param_tipo_concepto.creado_por');
	$comparador = $criterio->getComparadorDeCampo('ws_fe_param_tipo_concepto.creado_por');

	$filtros['ws_fe_param_tipo_concepto.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ws_fe_param_tipo_concepto.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ws_fe_param_tipo_concepto.modificado');
	$comparador = $criterio->getComparadorDeCampo('ws_fe_param_tipo_concepto.modificado');

	$filtros['ws_fe_param_tipo_concepto.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ws_fe_param_tipo_concepto.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ws_fe_param_tipo_concepto.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('ws_fe_param_tipo_concepto.modificado_por');

	$filtros['ws_fe_param_tipo_concepto.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

