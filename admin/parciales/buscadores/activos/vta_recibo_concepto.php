<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['vta_recibo_concepto.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('vta_recibo_concepto.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_recibo_concepto.id');
	$comparador = $criterio->getComparadorDeCampo('vta_recibo_concepto.id');

	$filtros['vta_recibo_concepto.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_recibo_concepto.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_recibo_concepto.descripcion');
	$comparador = $criterio->getComparadorDeCampo('vta_recibo_concepto.descripcion');

	$filtros['vta_recibo_concepto.descripcion'] = array('campo' => 'Descripcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_recibo_concepto.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_recibo_concepto.codigo');
	$comparador = $criterio->getComparadorDeCampo('vta_recibo_concepto.codigo');

	$filtros['vta_recibo_concepto.codigo'] = array('campo' => 'Codigo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_recibo_concepto.es_retencion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_recibo_concepto.es_retencion');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('vta_recibo_concepto.es_retencion'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('vta_recibo_concepto.es_retencion');

	$filtros['vta_recibo_concepto.es_retencion'] = array('campo' => 'Es Retencion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_recibo_concepto.es_retencion_iibb') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_recibo_concepto.es_retencion_iibb');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('vta_recibo_concepto.es_retencion_iibb'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('vta_recibo_concepto.es_retencion_iibb');

	$filtros['vta_recibo_concepto.es_retencion_iibb'] = array('campo' => 'Es Retencion IIBB', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_recibo_concepto.cntb_cuenta_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_recibo_concepto.cntb_cuenta_id');
	$comparador = $criterio->getComparadorDeCampo('vta_recibo_concepto.cntb_cuenta_id');

	$filtros['vta_recibo_concepto.cntb_cuenta_id'] = array('campo' => 'CntbCuenta', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_recibo_concepto.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_recibo_concepto.observacion');
	$comparador = $criterio->getComparadorDeCampo('vta_recibo_concepto.observacion');

	$filtros['vta_recibo_concepto.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_recibo_concepto.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_recibo_concepto.orden');
	$comparador = $criterio->getComparadorDeCampo('vta_recibo_concepto.orden');

	$filtros['vta_recibo_concepto.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_recibo_concepto.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_recibo_concepto.estado');
	$comparador = $criterio->getComparadorDeCampo('vta_recibo_concepto.estado');

	$filtros['vta_recibo_concepto.estado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_recibo_concepto.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_recibo_concepto.creado');
	$comparador = $criterio->getComparadorDeCampo('vta_recibo_concepto.creado');

	$filtros['vta_recibo_concepto.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_recibo_concepto.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_recibo_concepto.creado_por');
	$comparador = $criterio->getComparadorDeCampo('vta_recibo_concepto.creado_por');

	$filtros['vta_recibo_concepto.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_recibo_concepto.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_recibo_concepto.modificado');
	$comparador = $criterio->getComparadorDeCampo('vta_recibo_concepto.modificado');

	$filtros['vta_recibo_concepto.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_recibo_concepto.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_recibo_concepto.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('vta_recibo_concepto.modificado_por');

	$filtros['vta_recibo_concepto.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

