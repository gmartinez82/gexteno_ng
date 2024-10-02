<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['ws_fe_param_tipo_comprobante.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('ws_fe_param_tipo_comprobante.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ws_fe_param_tipo_comprobante.id');
	$comparador = $criterio->getComparadorDeCampo('ws_fe_param_tipo_comprobante.id');

	$filtros['ws_fe_param_tipo_comprobante.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ws_fe_param_tipo_comprobante.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ws_fe_param_tipo_comprobante.descripcion');
	$comparador = $criterio->getComparadorDeCampo('ws_fe_param_tipo_comprobante.descripcion');

	$filtros['ws_fe_param_tipo_comprobante.descripcion'] = array('campo' => 'Descripcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ws_fe_param_tipo_comprobante.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ws_fe_param_tipo_comprobante.codigo');
	$comparador = $criterio->getComparadorDeCampo('ws_fe_param_tipo_comprobante.codigo');

	$filtros['ws_fe_param_tipo_comprobante.codigo'] = array('campo' => 'Codigo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ws_fe_param_tipo_comprobante.codigo_afip') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ws_fe_param_tipo_comprobante.codigo_afip');
	$comparador = $criterio->getComparadorDeCampo('ws_fe_param_tipo_comprobante.codigo_afip');

	$filtros['ws_fe_param_tipo_comprobante.codigo_afip'] = array('campo' => 'Codigo Afip', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ws_fe_param_tipo_comprobante.fecha_desde') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ws_fe_param_tipo_comprobante.fecha_desde');
	$comparador = $criterio->getComparadorDeCampo('ws_fe_param_tipo_comprobante.fecha_desde');

	$filtros['ws_fe_param_tipo_comprobante.fecha_desde'] = array('campo' => 'Fecha Desde', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ws_fe_param_tipo_comprobante.fecha_hasta') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ws_fe_param_tipo_comprobante.fecha_hasta');
	$comparador = $criterio->getComparadorDeCampo('ws_fe_param_tipo_comprobante.fecha_hasta');

	$filtros['ws_fe_param_tipo_comprobante.fecha_hasta'] = array('campo' => 'Fecha Hasta', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ws_fe_param_tipo_comprobante.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ws_fe_param_tipo_comprobante.observacion');
	$comparador = $criterio->getComparadorDeCampo('ws_fe_param_tipo_comprobante.observacion');

	$filtros['ws_fe_param_tipo_comprobante.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ws_fe_param_tipo_comprobante.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ws_fe_param_tipo_comprobante.orden');
	$comparador = $criterio->getComparadorDeCampo('ws_fe_param_tipo_comprobante.orden');

	$filtros['ws_fe_param_tipo_comprobante.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ws_fe_param_tipo_comprobante.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ws_fe_param_tipo_comprobante.estado');
	$comparador = $criterio->getComparadorDeCampo('ws_fe_param_tipo_comprobante.estado');

	$filtros['ws_fe_param_tipo_comprobante.estado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ws_fe_param_tipo_comprobante.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ws_fe_param_tipo_comprobante.creado');
	$comparador = $criterio->getComparadorDeCampo('ws_fe_param_tipo_comprobante.creado');

	$filtros['ws_fe_param_tipo_comprobante.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ws_fe_param_tipo_comprobante.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ws_fe_param_tipo_comprobante.creado_por');
	$comparador = $criterio->getComparadorDeCampo('ws_fe_param_tipo_comprobante.creado_por');

	$filtros['ws_fe_param_tipo_comprobante.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ws_fe_param_tipo_comprobante.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ws_fe_param_tipo_comprobante.modificado');
	$comparador = $criterio->getComparadorDeCampo('ws_fe_param_tipo_comprobante.modificado');

	$filtros['ws_fe_param_tipo_comprobante.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ws_fe_param_tipo_comprobante.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ws_fe_param_tipo_comprobante.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('ws_fe_param_tipo_comprobante.modificado_por');

	$filtros['ws_fe_param_tipo_comprobante.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

