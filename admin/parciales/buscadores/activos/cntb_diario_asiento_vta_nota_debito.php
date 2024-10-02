<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['cntb_diario_asiento_vta_nota_debito.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('cntb_diario_asiento_vta_nota_debito.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cntb_diario_asiento_vta_nota_debito.id');
	$comparador = $criterio->getComparadorDeCampo('cntb_diario_asiento_vta_nota_debito.id');

	$filtros['cntb_diario_asiento_vta_nota_debito.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cntb_diario_asiento_vta_nota_debito.cntb_periodo_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cntb_diario_asiento_vta_nota_debito.cntb_periodo_id');
	$o = CntbPeriodo::getOxId($criterio->getValorDeCampo('cntb_diario_asiento_vta_nota_debito.cntb_periodo_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('cntb_diario_asiento_vta_nota_debito.cntb_periodo_id');

	$filtros['cntb_diario_asiento_vta_nota_debito.cntb_periodo_id'] = array('campo' => 'CntbPeriodo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cntb_diario_asiento_vta_nota_debito.cntb_diario_asiento_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cntb_diario_asiento_vta_nota_debito.cntb_diario_asiento_id');
	$o = CntbDiarioAsiento::getOxId($criterio->getValorDeCampo('cntb_diario_asiento_vta_nota_debito.cntb_diario_asiento_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('cntb_diario_asiento_vta_nota_debito.cntb_diario_asiento_id');

	$filtros['cntb_diario_asiento_vta_nota_debito.cntb_diario_asiento_id'] = array('campo' => 'CntbDiarioAsiento', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cntb_diario_asiento_vta_nota_debito.vta_nota_debito_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cntb_diario_asiento_vta_nota_debito.vta_nota_debito_id');
	$o = VtaNotaDebito::getOxId($criterio->getValorDeCampo('cntb_diario_asiento_vta_nota_debito.vta_nota_debito_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('cntb_diario_asiento_vta_nota_debito.vta_nota_debito_id');

	$filtros['cntb_diario_asiento_vta_nota_debito.vta_nota_debito_id'] = array('campo' => 'VtaNotaDebito', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cntb_diario_asiento_vta_nota_debito.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cntb_diario_asiento_vta_nota_debito.estado');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('cntb_diario_asiento_vta_nota_debito.estado'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('cntb_diario_asiento_vta_nota_debito.estado');

	$filtros['cntb_diario_asiento_vta_nota_debito.estado'] = array('campo' => 'Estado', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cntb_diario_asiento_vta_nota_debito.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cntb_diario_asiento_vta_nota_debito.creado');
	$comparador = $criterio->getComparadorDeCampo('cntb_diario_asiento_vta_nota_debito.creado');

	$filtros['cntb_diario_asiento_vta_nota_debito.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cntb_diario_asiento_vta_nota_debito.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cntb_diario_asiento_vta_nota_debito.creado_por');
	$comparador = $criterio->getComparadorDeCampo('cntb_diario_asiento_vta_nota_debito.creado_por');

	$filtros['cntb_diario_asiento_vta_nota_debito.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cntb_diario_asiento_vta_nota_debito.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cntb_diario_asiento_vta_nota_debito.modificado');
	$comparador = $criterio->getComparadorDeCampo('cntb_diario_asiento_vta_nota_debito.modificado');

	$filtros['cntb_diario_asiento_vta_nota_debito.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cntb_diario_asiento_vta_nota_debito.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cntb_diario_asiento_vta_nota_debito.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('cntb_diario_asiento_vta_nota_debito.modificado_por');

	$filtros['cntb_diario_asiento_vta_nota_debito.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

