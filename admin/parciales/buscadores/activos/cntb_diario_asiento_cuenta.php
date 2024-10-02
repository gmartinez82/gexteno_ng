<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['cntb_diario_asiento_cuenta.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('cntb_diario_asiento_cuenta.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cntb_diario_asiento_cuenta.id');
	$comparador = $criterio->getComparadorDeCampo('cntb_diario_asiento_cuenta.id');

	$filtros['cntb_diario_asiento_cuenta.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cntb_diario_asiento_cuenta.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cntb_diario_asiento_cuenta.descripcion');
	$comparador = $criterio->getComparadorDeCampo('cntb_diario_asiento_cuenta.descripcion');

	$filtros['cntb_diario_asiento_cuenta.descripcion'] = array('campo' => 'Descripcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cntb_diario_asiento_cuenta.cntb_diario_asiento_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cntb_diario_asiento_cuenta.cntb_diario_asiento_id');
	$o = CntbDiarioAsiento::getOxId($criterio->getValorDeCampo('cntb_diario_asiento_cuenta.cntb_diario_asiento_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('cntb_diario_asiento_cuenta.cntb_diario_asiento_id');

	$filtros['cntb_diario_asiento_cuenta.cntb_diario_asiento_id'] = array('campo' => 'CntbDiarioAsiento', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cntb_diario_asiento_cuenta.cntb_tipo_saldo_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cntb_diario_asiento_cuenta.cntb_tipo_saldo_id');
	$o = CntbTipoSaldo::getOxId($criterio->getValorDeCampo('cntb_diario_asiento_cuenta.cntb_tipo_saldo_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('cntb_diario_asiento_cuenta.cntb_tipo_saldo_id');

	$filtros['cntb_diario_asiento_cuenta.cntb_tipo_saldo_id'] = array('campo' => 'CntbTipoSaldo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cntb_diario_asiento_cuenta.cntb_cuenta_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cntb_diario_asiento_cuenta.cntb_cuenta_id');
	$comparador = $criterio->getComparadorDeCampo('cntb_diario_asiento_cuenta.cntb_cuenta_id');

	$filtros['cntb_diario_asiento_cuenta.cntb_cuenta_id'] = array('campo' => 'CntbCuenta', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cntb_diario_asiento_cuenta.importe_debe') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cntb_diario_asiento_cuenta.importe_debe');
	$comparador = $criterio->getComparadorDeCampo('cntb_diario_asiento_cuenta.importe_debe');

	$filtros['cntb_diario_asiento_cuenta.importe_debe'] = array('campo' => 'Importe Debe', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cntb_diario_asiento_cuenta.importe_haber') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cntb_diario_asiento_cuenta.importe_haber');
	$comparador = $criterio->getComparadorDeCampo('cntb_diario_asiento_cuenta.importe_haber');

	$filtros['cntb_diario_asiento_cuenta.importe_haber'] = array('campo' => 'Importe Haber', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cntb_diario_asiento_cuenta.importe_saldo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cntb_diario_asiento_cuenta.importe_saldo');
	$comparador = $criterio->getComparadorDeCampo('cntb_diario_asiento_cuenta.importe_saldo');

	$filtros['cntb_diario_asiento_cuenta.importe_saldo'] = array('campo' => 'Importe Saldo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cntb_diario_asiento_cuenta.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cntb_diario_asiento_cuenta.codigo');
	$comparador = $criterio->getComparadorDeCampo('cntb_diario_asiento_cuenta.codigo');

	$filtros['cntb_diario_asiento_cuenta.codigo'] = array('campo' => 'Codigo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cntb_diario_asiento_cuenta.codigo_comprobante') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cntb_diario_asiento_cuenta.codigo_comprobante');
	$comparador = $criterio->getComparadorDeCampo('cntb_diario_asiento_cuenta.codigo_comprobante');

	$filtros['cntb_diario_asiento_cuenta.codigo_comprobante'] = array('campo' => 'Cod Comprobante', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cntb_diario_asiento_cuenta.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cntb_diario_asiento_cuenta.observacion');
	$comparador = $criterio->getComparadorDeCampo('cntb_diario_asiento_cuenta.observacion');

	$filtros['cntb_diario_asiento_cuenta.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cntb_diario_asiento_cuenta.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cntb_diario_asiento_cuenta.orden');
	$comparador = $criterio->getComparadorDeCampo('cntb_diario_asiento_cuenta.orden');

	$filtros['cntb_diario_asiento_cuenta.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cntb_diario_asiento_cuenta.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cntb_diario_asiento_cuenta.estado');
	$comparador = $criterio->getComparadorDeCampo('cntb_diario_asiento_cuenta.estado');

	$filtros['cntb_diario_asiento_cuenta.estado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cntb_diario_asiento_cuenta.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cntb_diario_asiento_cuenta.creado');
	$comparador = $criterio->getComparadorDeCampo('cntb_diario_asiento_cuenta.creado');

	$filtros['cntb_diario_asiento_cuenta.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cntb_diario_asiento_cuenta.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cntb_diario_asiento_cuenta.creado_por');
	$comparador = $criterio->getComparadorDeCampo('cntb_diario_asiento_cuenta.creado_por');

	$filtros['cntb_diario_asiento_cuenta.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cntb_diario_asiento_cuenta.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cntb_diario_asiento_cuenta.modificado');
	$comparador = $criterio->getComparadorDeCampo('cntb_diario_asiento_cuenta.modificado');

	$filtros['cntb_diario_asiento_cuenta.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cntb_diario_asiento_cuenta.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cntb_diario_asiento_cuenta.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('cntb_diario_asiento_cuenta.modificado_por');

	$filtros['cntb_diario_asiento_cuenta.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

