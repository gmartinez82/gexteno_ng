<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['fnd_caja_ingreso.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('fnd_caja_ingreso.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_caja_ingreso.id');
	$comparador = $criterio->getComparadorDeCampo('fnd_caja_ingreso.id');

	$filtros['fnd_caja_ingreso.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('fnd_caja_ingreso.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_caja_ingreso.descripcion');
	$comparador = $criterio->getComparadorDeCampo('fnd_caja_ingreso.descripcion');

	$filtros['fnd_caja_ingreso.descripcion'] = array('campo' => 'Descripcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('fnd_caja_ingreso.fnd_caja_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_caja_ingreso.fnd_caja_id');
	$comparador = $criterio->getComparadorDeCampo('fnd_caja_ingreso.fnd_caja_id');

	$filtros['fnd_caja_ingreso.fnd_caja_id'] = array('campo' => 'FndCaja', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('fnd_caja_ingreso.fnd_caja_tipo_ingreso_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_caja_ingreso.fnd_caja_tipo_ingreso_id');
	$o = FndCajaTipoIngreso::getOxId($criterio->getValorDeCampo('fnd_caja_ingreso.fnd_caja_tipo_ingreso_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('fnd_caja_ingreso.fnd_caja_tipo_ingreso_id');

	$filtros['fnd_caja_ingreso.fnd_caja_tipo_ingreso_id'] = array('campo' => 'FndCajaTipoIngreso', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('fnd_caja_ingreso.codigo_referencia') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_caja_ingreso.codigo_referencia');
	$comparador = $criterio->getComparadorDeCampo('fnd_caja_ingreso.codigo_referencia');

	$filtros['fnd_caja_ingreso.codigo_referencia'] = array('campo' => 'Cod Ref', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('fnd_caja_ingreso.importe') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_caja_ingreso.importe');
	$comparador = $criterio->getComparadorDeCampo('fnd_caja_ingreso.importe');

	$filtros['fnd_caja_ingreso.importe'] = array('campo' => 'Importe', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('fnd_caja_ingreso.gral_fp_forma_pago_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_caja_ingreso.gral_fp_forma_pago_id');
	$o = GralFpFormaPago::getOxId($criterio->getValorDeCampo('fnd_caja_ingreso.gral_fp_forma_pago_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('fnd_caja_ingreso.gral_fp_forma_pago_id');

	$filtros['fnd_caja_ingreso.gral_fp_forma_pago_id'] = array('campo' => 'GralFpFormaPago', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('fnd_caja_ingreso.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_caja_ingreso.codigo');
	$comparador = $criterio->getComparadorDeCampo('fnd_caja_ingreso.codigo');

	$filtros['fnd_caja_ingreso.codigo'] = array('campo' => 'Codigo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('fnd_caja_ingreso.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_caja_ingreso.observacion');
	$comparador = $criterio->getComparadorDeCampo('fnd_caja_ingreso.observacion');

	$filtros['fnd_caja_ingreso.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('fnd_caja_ingreso.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_caja_ingreso.orden');
	$comparador = $criterio->getComparadorDeCampo('fnd_caja_ingreso.orden');

	$filtros['fnd_caja_ingreso.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('fnd_caja_ingreso.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_caja_ingreso.estado');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('fnd_caja_ingreso.estado'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('fnd_caja_ingreso.estado');

	$filtros['fnd_caja_ingreso.estado'] = array('campo' => 'Estado', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('fnd_caja_ingreso.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_caja_ingreso.creado');
	$comparador = $criterio->getComparadorDeCampo('fnd_caja_ingreso.creado');

	$filtros['fnd_caja_ingreso.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('fnd_caja_ingreso.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_caja_ingreso.creado_por');
	$comparador = $criterio->getComparadorDeCampo('fnd_caja_ingreso.creado_por');

	$filtros['fnd_caja_ingreso.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('fnd_caja_ingreso.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_caja_ingreso.modificado');
	$comparador = $criterio->getComparadorDeCampo('fnd_caja_ingreso.modificado');

	$filtros['fnd_caja_ingreso.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('fnd_caja_ingreso.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_caja_ingreso.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('fnd_caja_ingreso.modificado_por');

	$filtros['fnd_caja_ingreso.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

