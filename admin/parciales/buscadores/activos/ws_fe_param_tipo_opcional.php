<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['ws_fe_param_tipo_opcional.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('ws_fe_param_tipo_opcional.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ws_fe_param_tipo_opcional.id');
	$comparador = $criterio->getComparadorDeCampo('ws_fe_param_tipo_opcional.id');

	$filtros['ws_fe_param_tipo_opcional.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ws_fe_param_tipo_opcional.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ws_fe_param_tipo_opcional.descripcion');
	$comparador = $criterio->getComparadorDeCampo('ws_fe_param_tipo_opcional.descripcion');

	$filtros['ws_fe_param_tipo_opcional.descripcion'] = array('campo' => 'Descripcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ws_fe_param_tipo_opcional.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ws_fe_param_tipo_opcional.codigo');
	$comparador = $criterio->getComparadorDeCampo('ws_fe_param_tipo_opcional.codigo');

	$filtros['ws_fe_param_tipo_opcional.codigo'] = array('campo' => 'Codigo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ws_fe_param_tipo_opcional.codigo_afip') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ws_fe_param_tipo_opcional.codigo_afip');
	$comparador = $criterio->getComparadorDeCampo('ws_fe_param_tipo_opcional.codigo_afip');

	$filtros['ws_fe_param_tipo_opcional.codigo_afip'] = array('campo' => 'Codigo Afip', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ws_fe_param_tipo_opcional.fecha_desde') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ws_fe_param_tipo_opcional.fecha_desde');
	$comparador = $criterio->getComparadorDeCampo('ws_fe_param_tipo_opcional.fecha_desde');

	$filtros['ws_fe_param_tipo_opcional.fecha_desde'] = array('campo' => 'Fecha Desde', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ws_fe_param_tipo_opcional.fecha_hasta') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ws_fe_param_tipo_opcional.fecha_hasta');
	$comparador = $criterio->getComparadorDeCampo('ws_fe_param_tipo_opcional.fecha_hasta');

	$filtros['ws_fe_param_tipo_opcional.fecha_hasta'] = array('campo' => 'Fecha Hasta', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ws_fe_param_tipo_opcional.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ws_fe_param_tipo_opcional.observacion');
	$comparador = $criterio->getComparadorDeCampo('ws_fe_param_tipo_opcional.observacion');

	$filtros['ws_fe_param_tipo_opcional.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ws_fe_param_tipo_opcional.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ws_fe_param_tipo_opcional.orden');
	$comparador = $criterio->getComparadorDeCampo('ws_fe_param_tipo_opcional.orden');

	$filtros['ws_fe_param_tipo_opcional.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ws_fe_param_tipo_opcional.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ws_fe_param_tipo_opcional.estado');
	$comparador = $criterio->getComparadorDeCampo('ws_fe_param_tipo_opcional.estado');

	$filtros['ws_fe_param_tipo_opcional.estado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ws_fe_param_tipo_opcional.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ws_fe_param_tipo_opcional.creado');
	$comparador = $criterio->getComparadorDeCampo('ws_fe_param_tipo_opcional.creado');

	$filtros['ws_fe_param_tipo_opcional.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ws_fe_param_tipo_opcional.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ws_fe_param_tipo_opcional.creado_por');
	$comparador = $criterio->getComparadorDeCampo('ws_fe_param_tipo_opcional.creado_por');

	$filtros['ws_fe_param_tipo_opcional.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ws_fe_param_tipo_opcional.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ws_fe_param_tipo_opcional.modificado');
	$comparador = $criterio->getComparadorDeCampo('ws_fe_param_tipo_opcional.modificado');

	$filtros['ws_fe_param_tipo_opcional.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ws_fe_param_tipo_opcional.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ws_fe_param_tipo_opcional.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('ws_fe_param_tipo_opcional.modificado_por');

	$filtros['ws_fe_param_tipo_opcional.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

