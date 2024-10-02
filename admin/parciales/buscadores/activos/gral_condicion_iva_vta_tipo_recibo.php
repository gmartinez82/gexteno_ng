<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['gral_condicion_iva_vta_tipo_recibo.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('gral_condicion_iva_vta_tipo_recibo.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_condicion_iva_vta_tipo_recibo.id');
	$comparador = $criterio->getComparadorDeCampo('gral_condicion_iva_vta_tipo_recibo.id');

	$filtros['gral_condicion_iva_vta_tipo_recibo.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_condicion_iva_vta_tipo_recibo.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_condicion_iva_vta_tipo_recibo.descripcion');
	$comparador = $criterio->getComparadorDeCampo('gral_condicion_iva_vta_tipo_recibo.descripcion');

	$filtros['gral_condicion_iva_vta_tipo_recibo.descripcion'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_condicion_iva_vta_tipo_recibo.gral_condicion_iva_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_condicion_iva_vta_tipo_recibo.gral_condicion_iva_id');
	$o = GralCondicionIva::getOxId($criterio->getValorDeCampo('gral_condicion_iva_vta_tipo_recibo.gral_condicion_iva_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('gral_condicion_iva_vta_tipo_recibo.gral_condicion_iva_id');

	$filtros['gral_condicion_iva_vta_tipo_recibo.gral_condicion_iva_id'] = array('campo' => 'GralCondicionIva', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_condicion_iva_vta_tipo_recibo.vta_tipo_recibo_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_condicion_iva_vta_tipo_recibo.vta_tipo_recibo_id');
	$o = VtaTipoRecibo::getOxId($criterio->getValorDeCampo('gral_condicion_iva_vta_tipo_recibo.vta_tipo_recibo_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('gral_condicion_iva_vta_tipo_recibo.vta_tipo_recibo_id');

	$filtros['gral_condicion_iva_vta_tipo_recibo.vta_tipo_recibo_id'] = array('campo' => 'VtaTipoRecibo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_condicion_iva_vta_tipo_recibo.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_condicion_iva_vta_tipo_recibo.codigo');
	$comparador = $criterio->getComparadorDeCampo('gral_condicion_iva_vta_tipo_recibo.codigo');

	$filtros['gral_condicion_iva_vta_tipo_recibo.codigo'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_condicion_iva_vta_tipo_recibo.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_condicion_iva_vta_tipo_recibo.observacion');
	$comparador = $criterio->getComparadorDeCampo('gral_condicion_iva_vta_tipo_recibo.observacion');

	$filtros['gral_condicion_iva_vta_tipo_recibo.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_condicion_iva_vta_tipo_recibo.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_condicion_iva_vta_tipo_recibo.orden');
	$comparador = $criterio->getComparadorDeCampo('gral_condicion_iva_vta_tipo_recibo.orden');

	$filtros['gral_condicion_iva_vta_tipo_recibo.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_condicion_iva_vta_tipo_recibo.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_condicion_iva_vta_tipo_recibo.estado');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('gral_condicion_iva_vta_tipo_recibo.estado'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('gral_condicion_iva_vta_tipo_recibo.estado');

	$filtros['gral_condicion_iva_vta_tipo_recibo.estado'] = array('campo' => 'Estado', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_condicion_iva_vta_tipo_recibo.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_condicion_iva_vta_tipo_recibo.creado');
	$comparador = $criterio->getComparadorDeCampo('gral_condicion_iva_vta_tipo_recibo.creado');

	$filtros['gral_condicion_iva_vta_tipo_recibo.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_condicion_iva_vta_tipo_recibo.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_condicion_iva_vta_tipo_recibo.creado_por');
	$comparador = $criterio->getComparadorDeCampo('gral_condicion_iva_vta_tipo_recibo.creado_por');

	$filtros['gral_condicion_iva_vta_tipo_recibo.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_condicion_iva_vta_tipo_recibo.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_condicion_iva_vta_tipo_recibo.modificado');
	$comparador = $criterio->getComparadorDeCampo('gral_condicion_iva_vta_tipo_recibo.modificado');

	$filtros['gral_condicion_iva_vta_tipo_recibo.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_condicion_iva_vta_tipo_recibo.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_condicion_iva_vta_tipo_recibo.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('gral_condicion_iva_vta_tipo_recibo.modificado_por');

	$filtros['gral_condicion_iva_vta_tipo_recibo.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

