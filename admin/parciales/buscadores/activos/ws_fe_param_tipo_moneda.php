<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['ws_fe_param_tipo_moneda.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('ws_fe_param_tipo_moneda.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ws_fe_param_tipo_moneda.id');
	$comparador = $criterio->getComparadorDeCampo('ws_fe_param_tipo_moneda.id');

	$filtros['ws_fe_param_tipo_moneda.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ws_fe_param_tipo_moneda.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ws_fe_param_tipo_moneda.descripcion');
	$comparador = $criterio->getComparadorDeCampo('ws_fe_param_tipo_moneda.descripcion');

	$filtros['ws_fe_param_tipo_moneda.descripcion'] = array('campo' => 'Descripcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ws_fe_param_tipo_moneda.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ws_fe_param_tipo_moneda.codigo');
	$comparador = $criterio->getComparadorDeCampo('ws_fe_param_tipo_moneda.codigo');

	$filtros['ws_fe_param_tipo_moneda.codigo'] = array('campo' => 'Codigo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ws_fe_param_tipo_moneda.codigo_afip') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ws_fe_param_tipo_moneda.codigo_afip');
	$comparador = $criterio->getComparadorDeCampo('ws_fe_param_tipo_moneda.codigo_afip');

	$filtros['ws_fe_param_tipo_moneda.codigo_afip'] = array('campo' => 'Codigo Afip', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ws_fe_param_tipo_moneda.fecha_desde') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ws_fe_param_tipo_moneda.fecha_desde');
	$comparador = $criterio->getComparadorDeCampo('ws_fe_param_tipo_moneda.fecha_desde');

	$filtros['ws_fe_param_tipo_moneda.fecha_desde'] = array('campo' => 'Fecha Desde', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ws_fe_param_tipo_moneda.fecha_hasta') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ws_fe_param_tipo_moneda.fecha_hasta');
	$comparador = $criterio->getComparadorDeCampo('ws_fe_param_tipo_moneda.fecha_hasta');

	$filtros['ws_fe_param_tipo_moneda.fecha_hasta'] = array('campo' => 'Fecha Hasta', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ws_fe_param_tipo_moneda.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ws_fe_param_tipo_moneda.observacion');
	$comparador = $criterio->getComparadorDeCampo('ws_fe_param_tipo_moneda.observacion');

	$filtros['ws_fe_param_tipo_moneda.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ws_fe_param_tipo_moneda.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ws_fe_param_tipo_moneda.orden');
	$comparador = $criterio->getComparadorDeCampo('ws_fe_param_tipo_moneda.orden');

	$filtros['ws_fe_param_tipo_moneda.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ws_fe_param_tipo_moneda.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ws_fe_param_tipo_moneda.estado');
	$comparador = $criterio->getComparadorDeCampo('ws_fe_param_tipo_moneda.estado');

	$filtros['ws_fe_param_tipo_moneda.estado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ws_fe_param_tipo_moneda.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ws_fe_param_tipo_moneda.creado');
	$comparador = $criterio->getComparadorDeCampo('ws_fe_param_tipo_moneda.creado');

	$filtros['ws_fe_param_tipo_moneda.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ws_fe_param_tipo_moneda.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ws_fe_param_tipo_moneda.creado_por');
	$comparador = $criterio->getComparadorDeCampo('ws_fe_param_tipo_moneda.creado_por');

	$filtros['ws_fe_param_tipo_moneda.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ws_fe_param_tipo_moneda.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ws_fe_param_tipo_moneda.modificado');
	$comparador = $criterio->getComparadorDeCampo('ws_fe_param_tipo_moneda.modificado');

	$filtros['ws_fe_param_tipo_moneda.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ws_fe_param_tipo_moneda.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ws_fe_param_tipo_moneda.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('ws_fe_param_tipo_moneda.modificado_por');

	$filtros['ws_fe_param_tipo_moneda.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

