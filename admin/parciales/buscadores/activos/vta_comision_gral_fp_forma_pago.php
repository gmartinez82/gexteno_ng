<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['vta_comision_gral_fp_forma_pago.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('vta_comision_gral_fp_forma_pago.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_comision_gral_fp_forma_pago.id');
	$comparador = $criterio->getComparadorDeCampo('vta_comision_gral_fp_forma_pago.id');

	$filtros['vta_comision_gral_fp_forma_pago.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_comision_gral_fp_forma_pago.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_comision_gral_fp_forma_pago.descripcion');
	$comparador = $criterio->getComparadorDeCampo('vta_comision_gral_fp_forma_pago.descripcion');

	$filtros['vta_comision_gral_fp_forma_pago.descripcion'] = array('campo' => 'Descripcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_comision_gral_fp_forma_pago.vta_comision_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_comision_gral_fp_forma_pago.vta_comision_id');
	$o = VtaComision::getOxId($criterio->getValorDeCampo('vta_comision_gral_fp_forma_pago.vta_comision_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('vta_comision_gral_fp_forma_pago.vta_comision_id');

	$filtros['vta_comision_gral_fp_forma_pago.vta_comision_id'] = array('campo' => 'VtaComision', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_comision_gral_fp_forma_pago.gral_fp_forma_pago_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_comision_gral_fp_forma_pago.gral_fp_forma_pago_id');
	$o = GralFpFormaPago::getOxId($criterio->getValorDeCampo('vta_comision_gral_fp_forma_pago.gral_fp_forma_pago_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('vta_comision_gral_fp_forma_pago.gral_fp_forma_pago_id');

	$filtros['vta_comision_gral_fp_forma_pago.gral_fp_forma_pago_id'] = array('campo' => 'GralFpFormaPago', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_comision_gral_fp_forma_pago.importe_afectado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_comision_gral_fp_forma_pago.importe_afectado');
	$comparador = $criterio->getComparadorDeCampo('vta_comision_gral_fp_forma_pago.importe_afectado');

	$filtros['vta_comision_gral_fp_forma_pago.importe_afectado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_comision_gral_fp_forma_pago.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_comision_gral_fp_forma_pago.codigo');
	$comparador = $criterio->getComparadorDeCampo('vta_comision_gral_fp_forma_pago.codigo');

	$filtros['vta_comision_gral_fp_forma_pago.codigo'] = array('campo' => 'Codigo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_comision_gral_fp_forma_pago.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_comision_gral_fp_forma_pago.observacion');
	$comparador = $criterio->getComparadorDeCampo('vta_comision_gral_fp_forma_pago.observacion');

	$filtros['vta_comision_gral_fp_forma_pago.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_comision_gral_fp_forma_pago.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_comision_gral_fp_forma_pago.orden');
	$comparador = $criterio->getComparadorDeCampo('vta_comision_gral_fp_forma_pago.orden');

	$filtros['vta_comision_gral_fp_forma_pago.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_comision_gral_fp_forma_pago.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_comision_gral_fp_forma_pago.estado');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('vta_comision_gral_fp_forma_pago.estado'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('vta_comision_gral_fp_forma_pago.estado');

	$filtros['vta_comision_gral_fp_forma_pago.estado'] = array('campo' => 'Estado', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_comision_gral_fp_forma_pago.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_comision_gral_fp_forma_pago.creado');
	$comparador = $criterio->getComparadorDeCampo('vta_comision_gral_fp_forma_pago.creado');

	$filtros['vta_comision_gral_fp_forma_pago.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_comision_gral_fp_forma_pago.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_comision_gral_fp_forma_pago.creado_por');
	$comparador = $criterio->getComparadorDeCampo('vta_comision_gral_fp_forma_pago.creado_por');

	$filtros['vta_comision_gral_fp_forma_pago.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_comision_gral_fp_forma_pago.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_comision_gral_fp_forma_pago.modificado');
	$comparador = $criterio->getComparadorDeCampo('vta_comision_gral_fp_forma_pago.modificado');

	$filtros['vta_comision_gral_fp_forma_pago.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_comision_gral_fp_forma_pago.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_comision_gral_fp_forma_pago.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('vta_comision_gral_fp_forma_pago.modificado_por');

	$filtros['vta_comision_gral_fp_forma_pago.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

