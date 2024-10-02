<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['ws_fe_param_tipo_tributo.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('ws_fe_param_tipo_tributo.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ws_fe_param_tipo_tributo.id');
	$comparador = $criterio->getComparadorDeCampo('ws_fe_param_tipo_tributo.id');

	$filtros['ws_fe_param_tipo_tributo.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ws_fe_param_tipo_tributo.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ws_fe_param_tipo_tributo.descripcion');
	$comparador = $criterio->getComparadorDeCampo('ws_fe_param_tipo_tributo.descripcion');

	$filtros['ws_fe_param_tipo_tributo.descripcion'] = array('campo' => 'Descripcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ws_fe_param_tipo_tributo.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ws_fe_param_tipo_tributo.codigo');
	$comparador = $criterio->getComparadorDeCampo('ws_fe_param_tipo_tributo.codigo');

	$filtros['ws_fe_param_tipo_tributo.codigo'] = array('campo' => 'Codigo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ws_fe_param_tipo_tributo.codigo_afip') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ws_fe_param_tipo_tributo.codigo_afip');
	$comparador = $criterio->getComparadorDeCampo('ws_fe_param_tipo_tributo.codigo_afip');

	$filtros['ws_fe_param_tipo_tributo.codigo_afip'] = array('campo' => 'Codigo Afip', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ws_fe_param_tipo_tributo.fecha_desde') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ws_fe_param_tipo_tributo.fecha_desde');
	$comparador = $criterio->getComparadorDeCampo('ws_fe_param_tipo_tributo.fecha_desde');

	$filtros['ws_fe_param_tipo_tributo.fecha_desde'] = array('campo' => 'Fecha Desde', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ws_fe_param_tipo_tributo.fecha_hasta') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ws_fe_param_tipo_tributo.fecha_hasta');
	$comparador = $criterio->getComparadorDeCampo('ws_fe_param_tipo_tributo.fecha_hasta');

	$filtros['ws_fe_param_tipo_tributo.fecha_hasta'] = array('campo' => 'Fecha Hasta', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ws_fe_param_tipo_tributo.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ws_fe_param_tipo_tributo.observacion');
	$comparador = $criterio->getComparadorDeCampo('ws_fe_param_tipo_tributo.observacion');

	$filtros['ws_fe_param_tipo_tributo.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ws_fe_param_tipo_tributo.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ws_fe_param_tipo_tributo.orden');
	$comparador = $criterio->getComparadorDeCampo('ws_fe_param_tipo_tributo.orden');

	$filtros['ws_fe_param_tipo_tributo.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ws_fe_param_tipo_tributo.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ws_fe_param_tipo_tributo.estado');
	$comparador = $criterio->getComparadorDeCampo('ws_fe_param_tipo_tributo.estado');

	$filtros['ws_fe_param_tipo_tributo.estado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ws_fe_param_tipo_tributo.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ws_fe_param_tipo_tributo.creado');
	$comparador = $criterio->getComparadorDeCampo('ws_fe_param_tipo_tributo.creado');

	$filtros['ws_fe_param_tipo_tributo.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ws_fe_param_tipo_tributo.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ws_fe_param_tipo_tributo.creado_por');
	$comparador = $criterio->getComparadorDeCampo('ws_fe_param_tipo_tributo.creado_por');

	$filtros['ws_fe_param_tipo_tributo.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ws_fe_param_tipo_tributo.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ws_fe_param_tipo_tributo.modificado');
	$comparador = $criterio->getComparadorDeCampo('ws_fe_param_tipo_tributo.modificado');

	$filtros['ws_fe_param_tipo_tributo.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ws_fe_param_tipo_tributo.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ws_fe_param_tipo_tributo.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('ws_fe_param_tipo_tributo.modificado_por');

	$filtros['ws_fe_param_tipo_tributo.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

