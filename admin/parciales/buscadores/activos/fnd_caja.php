<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['fnd_caja.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('fnd_caja.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_caja.id');
	$comparador = $criterio->getComparadorDeCampo('fnd_caja.id');

	$filtros['fnd_caja.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('fnd_caja.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_caja.descripcion');
	$comparador = $criterio->getComparadorDeCampo('fnd_caja.descripcion');

	$filtros['fnd_caja.descripcion'] = array('campo' => 'Descripcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('fnd_caja.fnd_cajero_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_caja.fnd_cajero_id');
	$o = FndCajero::getOxId($criterio->getValorDeCampo('fnd_caja.fnd_cajero_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('fnd_caja.fnd_cajero_id');

	$filtros['fnd_caja.fnd_cajero_id'] = array('campo' => 'FndCajero', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('fnd_caja.gral_caja_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_caja.gral_caja_id');
	$o = GralCaja::getOxId($criterio->getValorDeCampo('fnd_caja.gral_caja_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('fnd_caja.gral_caja_id');

	$filtros['fnd_caja.gral_caja_id'] = array('campo' => 'GralCaja', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('fnd_caja.fnd_caja_tipo_estado_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_caja.fnd_caja_tipo_estado_id');
	$o = FndCajaTipoEstado::getOxId($criterio->getValorDeCampo('fnd_caja.fnd_caja_tipo_estado_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('fnd_caja.fnd_caja_tipo_estado_id');

	$filtros['fnd_caja.fnd_caja_tipo_estado_id'] = array('campo' => 'FndCajaTipoEstado', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('fnd_caja.fecha_apertura') != ''){
	$valor = Gral::getFechaToWeb($valor = $criterio->getValorDeCampo('fnd_caja.fecha_apertura'));
	$comparador = $criterio->getComparadorDeCampo('fnd_caja.fecha_apertura');

	$filtros['fnd_caja.fecha_apertura'] = array('campo' => 'Fecha de Apertura', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('fnd_caja.fecha_cierre') != ''){
	$valor = Gral::getFechaToWeb($valor = $criterio->getValorDeCampo('fnd_caja.fecha_cierre'));
	$comparador = $criterio->getComparadorDeCampo('fnd_caja.fecha_cierre');

	$filtros['fnd_caja.fecha_cierre'] = array('campo' => 'Fecha de Cierre', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('fnd_caja.fecha_rendicion') != ''){
	$valor = Gral::getFechaToWeb($valor = $criterio->getValorDeCampo('fnd_caja.fecha_rendicion'));
	$comparador = $criterio->getComparadorDeCampo('fnd_caja.fecha_rendicion');

	$filtros['fnd_caja.fecha_rendicion'] = array('campo' => 'Fecha de Rendicion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('fnd_caja.importe_saldo_inicial_esperado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_caja.importe_saldo_inicial_esperado');
	$comparador = $criterio->getComparadorDeCampo('fnd_caja.importe_saldo_inicial_esperado');

	$filtros['fnd_caja.importe_saldo_inicial_esperado'] = array('campo' => 'Importe Saldo Inicial Esperado', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('fnd_caja.importe_saldo_inicial_real') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_caja.importe_saldo_inicial_real');
	$comparador = $criterio->getComparadorDeCampo('fnd_caja.importe_saldo_inicial_real');

	$filtros['fnd_caja.importe_saldo_inicial_real'] = array('campo' => 'Importe Saldo Inicial Real', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('fnd_caja.importe_saldo_inicial_diferencia') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_caja.importe_saldo_inicial_diferencia');
	$comparador = $criterio->getComparadorDeCampo('fnd_caja.importe_saldo_inicial_diferencia');

	$filtros['fnd_caja.importe_saldo_inicial_diferencia'] = array('campo' => 'Importe Saldo Inicial Diferencia', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('fnd_caja.importe_saldo_final') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_caja.importe_saldo_final');
	$comparador = $criterio->getComparadorDeCampo('fnd_caja.importe_saldo_final');

	$filtros['fnd_caja.importe_saldo_final'] = array('campo' => 'Importe Saldo Final', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('fnd_caja.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_caja.codigo');
	$comparador = $criterio->getComparadorDeCampo('fnd_caja.codigo');

	$filtros['fnd_caja.codigo'] = array('campo' => 'Codigo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('fnd_caja.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_caja.observacion');
	$comparador = $criterio->getComparadorDeCampo('fnd_caja.observacion');

	$filtros['fnd_caja.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('fnd_caja.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_caja.orden');
	$comparador = $criterio->getComparadorDeCampo('fnd_caja.orden');

	$filtros['fnd_caja.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('fnd_caja.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_caja.estado');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('fnd_caja.estado'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('fnd_caja.estado');

	$filtros['fnd_caja.estado'] = array('campo' => 'Estado', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('fnd_caja.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_caja.creado');
	$comparador = $criterio->getComparadorDeCampo('fnd_caja.creado');

	$filtros['fnd_caja.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('fnd_caja.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_caja.creado_por');
	$comparador = $criterio->getComparadorDeCampo('fnd_caja.creado_por');

	$filtros['fnd_caja.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('fnd_caja.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_caja.modificado');
	$comparador = $criterio->getComparadorDeCampo('fnd_caja.modificado');

	$filtros['fnd_caja.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('fnd_caja.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_caja.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('fnd_caja.modificado_por');

	$filtros['fnd_caja.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

