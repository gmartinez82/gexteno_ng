<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['fnd_caja_egreso.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('fnd_caja_egreso.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_caja_egreso.id');
	$comparador = $criterio->getComparadorDeCampo('fnd_caja_egreso.id');

	$filtros['fnd_caja_egreso.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('fnd_caja_egreso.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_caja_egreso.descripcion');
	$comparador = $criterio->getComparadorDeCampo('fnd_caja_egreso.descripcion');

	$filtros['fnd_caja_egreso.descripcion'] = array('campo' => 'Descripcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('fnd_caja_egreso.fnd_caja_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_caja_egreso.fnd_caja_id');
	$comparador = $criterio->getComparadorDeCampo('fnd_caja_egreso.fnd_caja_id');

	$filtros['fnd_caja_egreso.fnd_caja_id'] = array('campo' => 'FndCaja', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('fnd_caja_egreso.fnd_caja_tipo_egreso_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_caja_egreso.fnd_caja_tipo_egreso_id');
	$o = FndCajaTipoEgreso::getOxId($criterio->getValorDeCampo('fnd_caja_egreso.fnd_caja_tipo_egreso_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('fnd_caja_egreso.fnd_caja_tipo_egreso_id');

	$filtros['fnd_caja_egreso.fnd_caja_tipo_egreso_id'] = array('campo' => 'FndCajaTipoEgreso', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('fnd_caja_egreso.codigo_referencia') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_caja_egreso.codigo_referencia');
	$comparador = $criterio->getComparadorDeCampo('fnd_caja_egreso.codigo_referencia');

	$filtros['fnd_caja_egreso.codigo_referencia'] = array('campo' => 'Cod Ref', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('fnd_caja_egreso.importe') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_caja_egreso.importe');
	$comparador = $criterio->getComparadorDeCampo('fnd_caja_egreso.importe');

	$filtros['fnd_caja_egreso.importe'] = array('campo' => 'Importe', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('fnd_caja_egreso.gral_fp_forma_pago_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_caja_egreso.gral_fp_forma_pago_id');
	$o = GralFpFormaPago::getOxId($criterio->getValorDeCampo('fnd_caja_egreso.gral_fp_forma_pago_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('fnd_caja_egreso.gral_fp_forma_pago_id');

	$filtros['fnd_caja_egreso.gral_fp_forma_pago_id'] = array('campo' => 'GralFpFormaPago', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('fnd_caja_egreso.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_caja_egreso.codigo');
	$comparador = $criterio->getComparadorDeCampo('fnd_caja_egreso.codigo');

	$filtros['fnd_caja_egreso.codigo'] = array('campo' => 'Codigo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('fnd_caja_egreso.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_caja_egreso.observacion');
	$comparador = $criterio->getComparadorDeCampo('fnd_caja_egreso.observacion');

	$filtros['fnd_caja_egreso.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('fnd_caja_egreso.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_caja_egreso.orden');
	$comparador = $criterio->getComparadorDeCampo('fnd_caja_egreso.orden');

	$filtros['fnd_caja_egreso.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('fnd_caja_egreso.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_caja_egreso.estado');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('fnd_caja_egreso.estado'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('fnd_caja_egreso.estado');

	$filtros['fnd_caja_egreso.estado'] = array('campo' => 'Estado', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('fnd_caja_egreso.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_caja_egreso.creado');
	$comparador = $criterio->getComparadorDeCampo('fnd_caja_egreso.creado');

	$filtros['fnd_caja_egreso.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('fnd_caja_egreso.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_caja_egreso.creado_por');
	$comparador = $criterio->getComparadorDeCampo('fnd_caja_egreso.creado_por');

	$filtros['fnd_caja_egreso.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('fnd_caja_egreso.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_caja_egreso.modificado');
	$comparador = $criterio->getComparadorDeCampo('fnd_caja_egreso.modificado');

	$filtros['fnd_caja_egreso.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('fnd_caja_egreso.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_caja_egreso.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('fnd_caja_egreso.modificado_por');

	$filtros['fnd_caja_egreso.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

