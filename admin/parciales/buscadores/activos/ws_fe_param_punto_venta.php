<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['ws_fe_param_punto_venta.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('ws_fe_param_punto_venta.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ws_fe_param_punto_venta.id');
	$comparador = $criterio->getComparadorDeCampo('ws_fe_param_punto_venta.id');

	$filtros['ws_fe_param_punto_venta.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ws_fe_param_punto_venta.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ws_fe_param_punto_venta.descripcion');
	$comparador = $criterio->getComparadorDeCampo('ws_fe_param_punto_venta.descripcion');

	$filtros['ws_fe_param_punto_venta.descripcion'] = array('campo' => 'Descripcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ws_fe_param_punto_venta.gral_empresa_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ws_fe_param_punto_venta.gral_empresa_id');
	$o = GralEmpresa::getOxId($criterio->getValorDeCampo('ws_fe_param_punto_venta.gral_empresa_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('ws_fe_param_punto_venta.gral_empresa_id');

	$filtros['ws_fe_param_punto_venta.gral_empresa_id'] = array('campo' => 'GralEmpresa', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ws_fe_param_punto_venta.cuit') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ws_fe_param_punto_venta.cuit');
	$comparador = $criterio->getComparadorDeCampo('ws_fe_param_punto_venta.cuit');

	$filtros['ws_fe_param_punto_venta.cuit'] = array('campo' => 'CUIT', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ws_fe_param_punto_venta.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ws_fe_param_punto_venta.codigo');
	$comparador = $criterio->getComparadorDeCampo('ws_fe_param_punto_venta.codigo');

	$filtros['ws_fe_param_punto_venta.codigo'] = array('campo' => 'Codigo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ws_fe_param_punto_venta.numero') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ws_fe_param_punto_venta.numero');
	$comparador = $criterio->getComparadorDeCampo('ws_fe_param_punto_venta.numero');

	$filtros['ws_fe_param_punto_venta.numero'] = array('campo' => 'Numero', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ws_fe_param_punto_venta.tipo_emision') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ws_fe_param_punto_venta.tipo_emision');
	$comparador = $criterio->getComparadorDeCampo('ws_fe_param_punto_venta.tipo_emision');

	$filtros['ws_fe_param_punto_venta.tipo_emision'] = array('campo' => 'Tipo de Emision', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ws_fe_param_punto_venta.bloqueado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ws_fe_param_punto_venta.bloqueado');
	$comparador = $criterio->getComparadorDeCampo('ws_fe_param_punto_venta.bloqueado');

	$filtros['ws_fe_param_punto_venta.bloqueado'] = array('campo' => 'Bloqueado', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ws_fe_param_punto_venta.fecha_baja') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ws_fe_param_punto_venta.fecha_baja');
	$comparador = $criterio->getComparadorDeCampo('ws_fe_param_punto_venta.fecha_baja');

	$filtros['ws_fe_param_punto_venta.fecha_baja'] = array('campo' => 'Fecha de Baja', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ws_fe_param_punto_venta.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ws_fe_param_punto_venta.observacion');
	$comparador = $criterio->getComparadorDeCampo('ws_fe_param_punto_venta.observacion');

	$filtros['ws_fe_param_punto_venta.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ws_fe_param_punto_venta.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ws_fe_param_punto_venta.orden');
	$comparador = $criterio->getComparadorDeCampo('ws_fe_param_punto_venta.orden');

	$filtros['ws_fe_param_punto_venta.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ws_fe_param_punto_venta.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ws_fe_param_punto_venta.estado');
	$comparador = $criterio->getComparadorDeCampo('ws_fe_param_punto_venta.estado');

	$filtros['ws_fe_param_punto_venta.estado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ws_fe_param_punto_venta.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ws_fe_param_punto_venta.creado');
	$comparador = $criterio->getComparadorDeCampo('ws_fe_param_punto_venta.creado');

	$filtros['ws_fe_param_punto_venta.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ws_fe_param_punto_venta.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ws_fe_param_punto_venta.creado_por');
	$comparador = $criterio->getComparadorDeCampo('ws_fe_param_punto_venta.creado_por');

	$filtros['ws_fe_param_punto_venta.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ws_fe_param_punto_venta.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ws_fe_param_punto_venta.modificado');
	$comparador = $criterio->getComparadorDeCampo('ws_fe_param_punto_venta.modificado');

	$filtros['ws_fe_param_punto_venta.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ws_fe_param_punto_venta.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ws_fe_param_punto_venta.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('ws_fe_param_punto_venta.modificado_por');

	$filtros['ws_fe_param_punto_venta.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

