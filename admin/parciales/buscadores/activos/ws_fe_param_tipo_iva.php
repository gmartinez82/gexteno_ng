<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['ws_fe_param_tipo_iva.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('ws_fe_param_tipo_iva.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ws_fe_param_tipo_iva.id');
	$comparador = $criterio->getComparadorDeCampo('ws_fe_param_tipo_iva.id');

	$filtros['ws_fe_param_tipo_iva.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ws_fe_param_tipo_iva.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ws_fe_param_tipo_iva.descripcion');
	$comparador = $criterio->getComparadorDeCampo('ws_fe_param_tipo_iva.descripcion');

	$filtros['ws_fe_param_tipo_iva.descripcion'] = array('campo' => 'Descripcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ws_fe_param_tipo_iva.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ws_fe_param_tipo_iva.codigo');
	$comparador = $criterio->getComparadorDeCampo('ws_fe_param_tipo_iva.codigo');

	$filtros['ws_fe_param_tipo_iva.codigo'] = array('campo' => 'Codigo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ws_fe_param_tipo_iva.codigo_afip') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ws_fe_param_tipo_iva.codigo_afip');
	$comparador = $criterio->getComparadorDeCampo('ws_fe_param_tipo_iva.codigo_afip');

	$filtros['ws_fe_param_tipo_iva.codigo_afip'] = array('campo' => 'Codigo Afip', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ws_fe_param_tipo_iva.fecha_desde') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ws_fe_param_tipo_iva.fecha_desde');
	$comparador = $criterio->getComparadorDeCampo('ws_fe_param_tipo_iva.fecha_desde');

	$filtros['ws_fe_param_tipo_iva.fecha_desde'] = array('campo' => 'Fecha Desde', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ws_fe_param_tipo_iva.fecha_hasta') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ws_fe_param_tipo_iva.fecha_hasta');
	$comparador = $criterio->getComparadorDeCampo('ws_fe_param_tipo_iva.fecha_hasta');

	$filtros['ws_fe_param_tipo_iva.fecha_hasta'] = array('campo' => 'Fecha Hasta', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ws_fe_param_tipo_iva.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ws_fe_param_tipo_iva.observacion');
	$comparador = $criterio->getComparadorDeCampo('ws_fe_param_tipo_iva.observacion');

	$filtros['ws_fe_param_tipo_iva.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ws_fe_param_tipo_iva.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ws_fe_param_tipo_iva.orden');
	$comparador = $criterio->getComparadorDeCampo('ws_fe_param_tipo_iva.orden');

	$filtros['ws_fe_param_tipo_iva.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ws_fe_param_tipo_iva.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ws_fe_param_tipo_iva.estado');
	$comparador = $criterio->getComparadorDeCampo('ws_fe_param_tipo_iva.estado');

	$filtros['ws_fe_param_tipo_iva.estado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ws_fe_param_tipo_iva.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ws_fe_param_tipo_iva.creado');
	$comparador = $criterio->getComparadorDeCampo('ws_fe_param_tipo_iva.creado');

	$filtros['ws_fe_param_tipo_iva.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ws_fe_param_tipo_iva.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ws_fe_param_tipo_iva.creado_por');
	$comparador = $criterio->getComparadorDeCampo('ws_fe_param_tipo_iva.creado_por');

	$filtros['ws_fe_param_tipo_iva.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ws_fe_param_tipo_iva.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ws_fe_param_tipo_iva.modificado');
	$comparador = $criterio->getComparadorDeCampo('ws_fe_param_tipo_iva.modificado');

	$filtros['ws_fe_param_tipo_iva.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ws_fe_param_tipo_iva.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ws_fe_param_tipo_iva.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('ws_fe_param_tipo_iva.modificado_por');

	$filtros['ws_fe_param_tipo_iva.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

