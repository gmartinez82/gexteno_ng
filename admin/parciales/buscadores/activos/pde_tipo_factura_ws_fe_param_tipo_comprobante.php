<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['pde_tipo_factura_ws_fe_param_tipo_comprobante.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('pde_tipo_factura_ws_fe_param_tipo_comprobante.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_tipo_factura_ws_fe_param_tipo_comprobante.id');
	$comparador = $criterio->getComparadorDeCampo('pde_tipo_factura_ws_fe_param_tipo_comprobante.id');

	$filtros['pde_tipo_factura_ws_fe_param_tipo_comprobante.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_tipo_factura_ws_fe_param_tipo_comprobante.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_tipo_factura_ws_fe_param_tipo_comprobante.descripcion');
	$comparador = $criterio->getComparadorDeCampo('pde_tipo_factura_ws_fe_param_tipo_comprobante.descripcion');

	$filtros['pde_tipo_factura_ws_fe_param_tipo_comprobante.descripcion'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_tipo_factura_ws_fe_param_tipo_comprobante.pde_tipo_factura_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_tipo_factura_ws_fe_param_tipo_comprobante.pde_tipo_factura_id');
	$o = PdeTipoFactura::getOxId($criterio->getValorDeCampo('pde_tipo_factura_ws_fe_param_tipo_comprobante.pde_tipo_factura_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('pde_tipo_factura_ws_fe_param_tipo_comprobante.pde_tipo_factura_id');

	$filtros['pde_tipo_factura_ws_fe_param_tipo_comprobante.pde_tipo_factura_id'] = array('campo' => 'PdeTipoFactura', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_tipo_factura_ws_fe_param_tipo_comprobante.ws_fe_param_tipo_comprobante_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_tipo_factura_ws_fe_param_tipo_comprobante.ws_fe_param_tipo_comprobante_id');
	$o = WsFeParamTipoComprobante::getOxId($criterio->getValorDeCampo('pde_tipo_factura_ws_fe_param_tipo_comprobante.ws_fe_param_tipo_comprobante_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('pde_tipo_factura_ws_fe_param_tipo_comprobante.ws_fe_param_tipo_comprobante_id');

	$filtros['pde_tipo_factura_ws_fe_param_tipo_comprobante.ws_fe_param_tipo_comprobante_id'] = array('campo' => 'WsFeParamTipoComprobante', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_tipo_factura_ws_fe_param_tipo_comprobante.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_tipo_factura_ws_fe_param_tipo_comprobante.codigo');
	$comparador = $criterio->getComparadorDeCampo('pde_tipo_factura_ws_fe_param_tipo_comprobante.codigo');

	$filtros['pde_tipo_factura_ws_fe_param_tipo_comprobante.codigo'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_tipo_factura_ws_fe_param_tipo_comprobante.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_tipo_factura_ws_fe_param_tipo_comprobante.observacion');
	$comparador = $criterio->getComparadorDeCampo('pde_tipo_factura_ws_fe_param_tipo_comprobante.observacion');

	$filtros['pde_tipo_factura_ws_fe_param_tipo_comprobante.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_tipo_factura_ws_fe_param_tipo_comprobante.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_tipo_factura_ws_fe_param_tipo_comprobante.orden');
	$comparador = $criterio->getComparadorDeCampo('pde_tipo_factura_ws_fe_param_tipo_comprobante.orden');

	$filtros['pde_tipo_factura_ws_fe_param_tipo_comprobante.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_tipo_factura_ws_fe_param_tipo_comprobante.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_tipo_factura_ws_fe_param_tipo_comprobante.estado');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('pde_tipo_factura_ws_fe_param_tipo_comprobante.estado'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('pde_tipo_factura_ws_fe_param_tipo_comprobante.estado');

	$filtros['pde_tipo_factura_ws_fe_param_tipo_comprobante.estado'] = array('campo' => 'Estado', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_tipo_factura_ws_fe_param_tipo_comprobante.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_tipo_factura_ws_fe_param_tipo_comprobante.creado');
	$comparador = $criterio->getComparadorDeCampo('pde_tipo_factura_ws_fe_param_tipo_comprobante.creado');

	$filtros['pde_tipo_factura_ws_fe_param_tipo_comprobante.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_tipo_factura_ws_fe_param_tipo_comprobante.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_tipo_factura_ws_fe_param_tipo_comprobante.creado_por');
	$comparador = $criterio->getComparadorDeCampo('pde_tipo_factura_ws_fe_param_tipo_comprobante.creado_por');

	$filtros['pde_tipo_factura_ws_fe_param_tipo_comprobante.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_tipo_factura_ws_fe_param_tipo_comprobante.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_tipo_factura_ws_fe_param_tipo_comprobante.modificado');
	$comparador = $criterio->getComparadorDeCampo('pde_tipo_factura_ws_fe_param_tipo_comprobante.modificado');

	$filtros['pde_tipo_factura_ws_fe_param_tipo_comprobante.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_tipo_factura_ws_fe_param_tipo_comprobante.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_tipo_factura_ws_fe_param_tipo_comprobante.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('pde_tipo_factura_ws_fe_param_tipo_comprobante.modificado_por');

	$filtros['pde_tipo_factura_ws_fe_param_tipo_comprobante.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

