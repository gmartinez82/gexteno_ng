<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['gral_fp_cuota.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('gral_fp_cuota.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_fp_cuota.id');
	$comparador = $criterio->getComparadorDeCampo('gral_fp_cuota.id');

	$filtros['gral_fp_cuota.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_fp_cuota.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_fp_cuota.descripcion');
	$comparador = $criterio->getComparadorDeCampo('gral_fp_cuota.descripcion');

	$filtros['gral_fp_cuota.descripcion'] = array('campo' => 'Descripcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_fp_medio_pago.gral_fp_forma_pago_id') != ''){
	$o = GralFpFormaPago::getOxId($criterio->getValorDeCampo('gral_fp_medio_pago.gral_fp_forma_pago_id'));
	$valor = $o->getDescripcion();
	$comparador = $criterio->getComparadorDeCampo('gral_fp_medio_pago.gral_fp_forma_pago_id');

	$filtros['gral_fp_medio_pago.gral_fp_forma_pago_id'] = array('campo' => 'GralFpFormaPago', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_fp_cuota.gral_fp_medio_pago_id') != ''){
	$o = GralFpMedioPago::getOxId($criterio->getValorDeCampo('gral_fp_cuota.gral_fp_medio_pago_id'));
	$valor = $o->getDescripcion();
	$comparador = $criterio->getComparadorDeCampo('gral_fp_cuota.gral_fp_medio_pago_id');

	$filtros['gral_fp_cuota.gral_fp_medio_pago_id'] = array('campo' => 'GralFpMedioPago', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_fp_cuota.cantidad') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_fp_cuota.cantidad');
	$comparador = $criterio->getComparadorDeCampo('gral_fp_cuota.cantidad');

	$filtros['gral_fp_cuota.cantidad'] = array('campo' => 'Cantidad', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_fp_cuota.dias_vencimiento') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_fp_cuota.dias_vencimiento');
	$comparador = $criterio->getComparadorDeCampo('gral_fp_cuota.dias_vencimiento');

	$filtros['gral_fp_cuota.dias_vencimiento'] = array('campo' => 'Dias Vencimiento', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_fp_cuota.recargo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_fp_cuota.recargo');
	$comparador = $criterio->getComparadorDeCampo('gral_fp_cuota.recargo');

	$filtros['gral_fp_cuota.recargo'] = array('campo' => 'Recargo %', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_fp_cuota.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_fp_cuota.codigo');
	$comparador = $criterio->getComparadorDeCampo('gral_fp_cuota.codigo');

	$filtros['gral_fp_cuota.codigo'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_fp_cuota.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_fp_cuota.observacion');
	$comparador = $criterio->getComparadorDeCampo('gral_fp_cuota.observacion');

	$filtros['gral_fp_cuota.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_fp_cuota.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_fp_cuota.orden');
	$comparador = $criterio->getComparadorDeCampo('gral_fp_cuota.orden');

	$filtros['gral_fp_cuota.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_fp_cuota.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_fp_cuota.estado');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('gral_fp_cuota.estado'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('gral_fp_cuota.estado');

	$filtros['gral_fp_cuota.estado'] = array('campo' => 'Estado', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_fp_cuota.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_fp_cuota.creado');
	$comparador = $criterio->getComparadorDeCampo('gral_fp_cuota.creado');

	$filtros['gral_fp_cuota.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_fp_cuota.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_fp_cuota.creado_por');
	$comparador = $criterio->getComparadorDeCampo('gral_fp_cuota.creado_por');

	$filtros['gral_fp_cuota.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_fp_cuota.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_fp_cuota.modificado');
	$comparador = $criterio->getComparadorDeCampo('gral_fp_cuota.modificado');

	$filtros['gral_fp_cuota.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_fp_cuota.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_fp_cuota.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('gral_fp_cuota.modificado_por');

	$filtros['gral_fp_cuota.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

