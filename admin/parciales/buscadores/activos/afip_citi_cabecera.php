<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['afip_citi_cabecera.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('afip_citi_cabecera.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('afip_citi_cabecera.id');
	$comparador = $criterio->getComparadorDeCampo('afip_citi_cabecera.id');

	$filtros['afip_citi_cabecera.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('afip_citi_cabecera.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('afip_citi_cabecera.descripcion');
	$comparador = $criterio->getComparadorDeCampo('afip_citi_cabecera.descripcion');

	$filtros['afip_citi_cabecera.descripcion'] = array('campo' => 'Descripcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('afip_citi_cabecera.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('afip_citi_cabecera.codigo');
	$comparador = $criterio->getComparadorDeCampo('afip_citi_cabecera.codigo');

	$filtros['afip_citi_cabecera.codigo'] = array('campo' => 'Codigo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('afip_citi_cabecera.afip_citi_prc_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('afip_citi_cabecera.afip_citi_prc_id');
	$o = AfipCitiPrc::getOxId($criterio->getValorDeCampo('afip_citi_cabecera.afip_citi_prc_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('afip_citi_cabecera.afip_citi_prc_id');

	$filtros['afip_citi_cabecera.afip_citi_prc_id'] = array('campo' => 'AfipCitiPrc', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('afip_citi_cabecera.inicial') != ''){
	$valor = $valor = $criterio->getValorDeCampo('afip_citi_cabecera.inicial');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('afip_citi_cabecera.inicial'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('afip_citi_cabecera.inicial');

	$filtros['afip_citi_cabecera.inicial'] = array('campo' => 'Inicial', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('afip_citi_cabecera.actual') != ''){
	$valor = $valor = $criterio->getValorDeCampo('afip_citi_cabecera.actual');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('afip_citi_cabecera.actual'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('afip_citi_cabecera.actual');

	$filtros['afip_citi_cabecera.actual'] = array('campo' => 'Actual', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('afip_citi_cabecera.afip_citi_cuit_informante') != ''){
	$valor = $valor = $criterio->getValorDeCampo('afip_citi_cabecera.afip_citi_cuit_informante');
	$comparador = $criterio->getComparadorDeCampo('afip_citi_cabecera.afip_citi_cuit_informante');

	$filtros['afip_citi_cabecera.afip_citi_cuit_informante'] = array('campo' => 'Cuit Informante', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('afip_citi_cabecera.afip_citi_periodo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('afip_citi_cabecera.afip_citi_periodo');
	$comparador = $criterio->getComparadorDeCampo('afip_citi_cabecera.afip_citi_periodo');

	$filtros['afip_citi_cabecera.afip_citi_periodo'] = array('campo' => 'Periodo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('afip_citi_cabecera.afip_citi_secuencia') != ''){
	$valor = $valor = $criterio->getValorDeCampo('afip_citi_cabecera.afip_citi_secuencia');
	$comparador = $criterio->getComparadorDeCampo('afip_citi_cabecera.afip_citi_secuencia');

	$filtros['afip_citi_cabecera.afip_citi_secuencia'] = array('campo' => 'Secuencia', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('afip_citi_cabecera.afip_citi_sin_movimiento') != ''){
	$valor = $valor = $criterio->getValorDeCampo('afip_citi_cabecera.afip_citi_sin_movimiento');
	$comparador = $criterio->getComparadorDeCampo('afip_citi_cabecera.afip_citi_sin_movimiento');

	$filtros['afip_citi_cabecera.afip_citi_sin_movimiento'] = array('campo' => 'Sin Movimiento', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('afip_citi_cabecera.afip_citi_prorratear_cf_computable') != ''){
	$valor = $valor = $criterio->getValorDeCampo('afip_citi_cabecera.afip_citi_prorratear_cf_computable');
	$comparador = $criterio->getComparadorDeCampo('afip_citi_cabecera.afip_citi_prorratear_cf_computable');

	$filtros['afip_citi_cabecera.afip_citi_prorratear_cf_computable'] = array('campo' => 'Prorratear Cred Fiscal computable', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('afip_citi_cabecera.afip_citi_cf_computable_o_comprobante') != ''){
	$valor = $valor = $criterio->getValorDeCampo('afip_citi_cabecera.afip_citi_cf_computable_o_comprobante');
	$comparador = $criterio->getComparadorDeCampo('afip_citi_cabecera.afip_citi_cf_computable_o_comprobante');

	$filtros['afip_citi_cabecera.afip_citi_cf_computable_o_comprobante'] = array('campo' => 'Cred Fiscal Computable o Comprobante', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('afip_citi_cabecera.afip_citi_importe_cf_computable_global') != ''){
	$valor = $valor = $criterio->getValorDeCampo('afip_citi_cabecera.afip_citi_importe_cf_computable_global');
	$comparador = $criterio->getComparadorDeCampo('afip_citi_cabecera.afip_citi_importe_cf_computable_global');

	$filtros['afip_citi_cabecera.afip_citi_importe_cf_computable_global'] = array('campo' => 'Importe Cred Fiscal Computable Global', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('afip_citi_cabecera.afip_citi_importe_cf_computable_asignacion_directa') != ''){
	$valor = $valor = $criterio->getValorDeCampo('afip_citi_cabecera.afip_citi_importe_cf_computable_asignacion_directa');
	$comparador = $criterio->getComparadorDeCampo('afip_citi_cabecera.afip_citi_importe_cf_computable_asignacion_directa');

	$filtros['afip_citi_cabecera.afip_citi_importe_cf_computable_asignacion_directa'] = array('campo' => 'Importe Cred Fiscal Computable Asignacion Directa', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('afip_citi_cabecera.afip_citi_importe_cf_computable_prorrateo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('afip_citi_cabecera.afip_citi_importe_cf_computable_prorrateo');
	$comparador = $criterio->getComparadorDeCampo('afip_citi_cabecera.afip_citi_importe_cf_computable_prorrateo');

	$filtros['afip_citi_cabecera.afip_citi_importe_cf_computable_prorrateo'] = array('campo' => 'Importe Cred Fiscal Computable Prorrateo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('afip_citi_cabecera.afip_citi_importe_cf_no_computable_global') != ''){
	$valor = $valor = $criterio->getValorDeCampo('afip_citi_cabecera.afip_citi_importe_cf_no_computable_global');
	$comparador = $criterio->getComparadorDeCampo('afip_citi_cabecera.afip_citi_importe_cf_no_computable_global');

	$filtros['afip_citi_cabecera.afip_citi_importe_cf_no_computable_global'] = array('campo' => 'Importe Cred Fiscal No Computable Global', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('afip_citi_cabecera.afip_citi_importe_cf_contribuyente_ss_y_oc') != ''){
	$valor = $valor = $criterio->getValorDeCampo('afip_citi_cabecera.afip_citi_importe_cf_contribuyente_ss_y_oc');
	$comparador = $criterio->getComparadorDeCampo('afip_citi_cabecera.afip_citi_importe_cf_contribuyente_ss_y_oc');

	$filtros['afip_citi_cabecera.afip_citi_importe_cf_contribuyente_ss_y_oc'] = array('campo' => 'Importe Cred Fiscal Contribuyente Seg Social', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('afip_citi_cabecera.afip_citi_importe_cf_computable_ss_y_oc') != ''){
	$valor = $valor = $criterio->getValorDeCampo('afip_citi_cabecera.afip_citi_importe_cf_computable_ss_y_oc');
	$comparador = $criterio->getComparadorDeCampo('afip_citi_cabecera.afip_citi_importe_cf_computable_ss_y_oc');

	$filtros['afip_citi_cabecera.afip_citi_importe_cf_computable_ss_y_oc'] = array('campo' => 'Importe Cred Fiscal Computable Seg Social', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('afip_citi_cabecera.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('afip_citi_cabecera.observacion');
	$comparador = $criterio->getComparadorDeCampo('afip_citi_cabecera.observacion');

	$filtros['afip_citi_cabecera.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('afip_citi_cabecera.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('afip_citi_cabecera.orden');
	$comparador = $criterio->getComparadorDeCampo('afip_citi_cabecera.orden');

	$filtros['afip_citi_cabecera.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('afip_citi_cabecera.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('afip_citi_cabecera.estado');
	$comparador = $criterio->getComparadorDeCampo('afip_citi_cabecera.estado');

	$filtros['afip_citi_cabecera.estado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('afip_citi_cabecera.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('afip_citi_cabecera.creado');
	$comparador = $criterio->getComparadorDeCampo('afip_citi_cabecera.creado');

	$filtros['afip_citi_cabecera.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('afip_citi_cabecera.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('afip_citi_cabecera.creado_por');
	$comparador = $criterio->getComparadorDeCampo('afip_citi_cabecera.creado_por');

	$filtros['afip_citi_cabecera.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('afip_citi_cabecera.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('afip_citi_cabecera.modificado');
	$comparador = $criterio->getComparadorDeCampo('afip_citi_cabecera.modificado');

	$filtros['afip_citi_cabecera.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('afip_citi_cabecera.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('afip_citi_cabecera.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('afip_citi_cabecera.modificado_por');

	$filtros['afip_citi_cabecera.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

