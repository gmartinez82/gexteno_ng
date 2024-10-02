<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['vta_remito.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('vta_remito.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_remito.id');
	$comparador = $criterio->getComparadorDeCampo('vta_remito.id');

	$filtros['vta_remito.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_remito.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_remito.descripcion');
	$comparador = $criterio->getComparadorDeCampo('vta_remito.descripcion');

	$filtros['vta_remito.descripcion'] = array('campo' => 'Descripcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_remito.cli_cliente_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_remito.cli_cliente_id');
	$o = CliCliente::getOxId($criterio->getValorDeCampo('vta_remito.cli_cliente_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('vta_remito.cli_cliente_id');

	$filtros['vta_remito.cli_cliente_id'] = array('campo' => 'CliCliente', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_remito.vta_remito_tipo_estado_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_remito.vta_remito_tipo_estado_id');
	$o = VtaRemitoTipoEstado::getOxId($criterio->getValorDeCampo('vta_remito.vta_remito_tipo_estado_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('vta_remito.vta_remito_tipo_estado_id');

	$filtros['vta_remito.vta_remito_tipo_estado_id'] = array('campo' => 'VtaRemitoTipoEstado', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_remito.gral_tipo_documento_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_remito.gral_tipo_documento_id');
	$o = GralTipoDocumento::getOxId($criterio->getValorDeCampo('vta_remito.gral_tipo_documento_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('vta_remito.gral_tipo_documento_id');

	$filtros['vta_remito.gral_tipo_documento_id'] = array('campo' => 'GralTipoDocumento', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_remito.persona_descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_remito.persona_descripcion');
	$comparador = $criterio->getComparadorDeCampo('vta_remito.persona_descripcion');

	$filtros['vta_remito.persona_descripcion'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_remito.persona_documento') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_remito.persona_documento');
	$comparador = $criterio->getComparadorDeCampo('vta_remito.persona_documento');

	$filtros['vta_remito.persona_documento'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_remito.persona_email') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_remito.persona_email');
	$comparador = $criterio->getComparadorDeCampo('vta_remito.persona_email');

	$filtros['vta_remito.persona_email'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_remito.fecha') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_remito.fecha');
	$comparador = $criterio->getComparadorDeCampo('vta_remito.fecha');

	$filtros['vta_remito.fecha'] = array('campo' => 'Fecha', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_remito.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_remito.codigo');
	$comparador = $criterio->getComparadorDeCampo('vta_remito.codigo');

	$filtros['vta_remito.codigo'] = array('campo' => 'Codigo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_remito.vta_presupuesto_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_remito.vta_presupuesto_id');
	$o = VtaPresupuesto::getOxId($criterio->getValorDeCampo('vta_remito.vta_presupuesto_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('vta_remito.vta_presupuesto_id');

	$filtros['vta_remito.vta_presupuesto_id'] = array('campo' => 'VtaPresupuesto', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_remito.cli_centro_recepcion_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_remito.cli_centro_recepcion_id');
	$o = CliCentroRecepcion::getOxId($criterio->getValorDeCampo('vta_remito.cli_centro_recepcion_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('vta_remito.cli_centro_recepcion_id');

	$filtros['vta_remito.cli_centro_recepcion_id'] = array('campo' => 'CliCentroRecepcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_remito.pan_panol_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_remito.pan_panol_id');
	$o = PanPanol::getOxId($criterio->getValorDeCampo('vta_remito.pan_panol_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('vta_remito.pan_panol_id');

	$filtros['vta_remito.pan_panol_id'] = array('campo' => 'PanPanol', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_remito.en_domicilio') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_remito.en_domicilio');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('vta_remito.en_domicilio'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('vta_remito.en_domicilio');

	$filtros['vta_remito.en_domicilio'] = array('campo' => 'En Domicilio', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_remito.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_remito.observacion');
	$comparador = $criterio->getComparadorDeCampo('vta_remito.observacion');

	$filtros['vta_remito.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_remito.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_remito.orden');
	$comparador = $criterio->getComparadorDeCampo('vta_remito.orden');

	$filtros['vta_remito.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_remito.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_remito.estado');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('vta_remito.estado'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('vta_remito.estado');

	$filtros['vta_remito.estado'] = array('campo' => 'Estado', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_remito.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_remito.creado');
	$comparador = $criterio->getComparadorDeCampo('vta_remito.creado');

	$filtros['vta_remito.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_remito.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_remito.creado_por');
	$comparador = $criterio->getComparadorDeCampo('vta_remito.creado_por');

	$filtros['vta_remito.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_remito.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_remito.modificado');
	$comparador = $criterio->getComparadorDeCampo('vta_remito.modificado');

	$filtros['vta_remito.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_remito.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_remito.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('vta_remito.modificado_por');

	$filtros['vta_remito.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

