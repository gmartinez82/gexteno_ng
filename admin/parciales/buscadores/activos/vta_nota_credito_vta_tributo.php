<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['vta_nota_credito_vta_tributo.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('vta_nota_credito_vta_tributo.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_nota_credito_vta_tributo.id');
	$comparador = $criterio->getComparadorDeCampo('vta_nota_credito_vta_tributo.id');

	$filtros['vta_nota_credito_vta_tributo.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_nota_credito_vta_tributo.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_nota_credito_vta_tributo.descripcion');
	$comparador = $criterio->getComparadorDeCampo('vta_nota_credito_vta_tributo.descripcion');

	$filtros['vta_nota_credito_vta_tributo.descripcion'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_nota_credito_vta_tributo.vta_nota_credito_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_nota_credito_vta_tributo.vta_nota_credito_id');
	$o = VtaNotaCredito::getOxId($criterio->getValorDeCampo('vta_nota_credito_vta_tributo.vta_nota_credito_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('vta_nota_credito_vta_tributo.vta_nota_credito_id');

	$filtros['vta_nota_credito_vta_tributo.vta_nota_credito_id'] = array('campo' => 'VtaNotaCredito', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_nota_credito_vta_tributo.vta_tributo_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_nota_credito_vta_tributo.vta_tributo_id');
	$o = VtaTributo::getOxId($criterio->getValorDeCampo('vta_nota_credito_vta_tributo.vta_tributo_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('vta_nota_credito_vta_tributo.vta_tributo_id');

	$filtros['vta_nota_credito_vta_tributo.vta_tributo_id'] = array('campo' => 'VtaTributo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_nota_credito_vta_tributo.importe_imponible') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_nota_credito_vta_tributo.importe_imponible');
	$comparador = $criterio->getComparadorDeCampo('vta_nota_credito_vta_tributo.importe_imponible');

	$filtros['vta_nota_credito_vta_tributo.importe_imponible'] = array('campo' => 'Imp Imponible', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_nota_credito_vta_tributo.importe_tributo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_nota_credito_vta_tributo.importe_tributo');
	$comparador = $criterio->getComparadorDeCampo('vta_nota_credito_vta_tributo.importe_tributo');

	$filtros['vta_nota_credito_vta_tributo.importe_tributo'] = array('campo' => 'Imp Tributo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_nota_credito_vta_tributo.alicuota_porcentual') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_nota_credito_vta_tributo.alicuota_porcentual');
	$comparador = $criterio->getComparadorDeCampo('vta_nota_credito_vta_tributo.alicuota_porcentual');

	$filtros['vta_nota_credito_vta_tributo.alicuota_porcentual'] = array('campo' => 'Alicuota Porcentual', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_nota_credito_vta_tributo.alicuota_decimal') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_nota_credito_vta_tributo.alicuota_decimal');
	$comparador = $criterio->getComparadorDeCampo('vta_nota_credito_vta_tributo.alicuota_decimal');

	$filtros['vta_nota_credito_vta_tributo.alicuota_decimal'] = array('campo' => 'Alicuota Decimal', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_nota_credito_vta_tributo.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_nota_credito_vta_tributo.codigo');
	$comparador = $criterio->getComparadorDeCampo('vta_nota_credito_vta_tributo.codigo');

	$filtros['vta_nota_credito_vta_tributo.codigo'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_nota_credito_vta_tributo.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_nota_credito_vta_tributo.observacion');
	$comparador = $criterio->getComparadorDeCampo('vta_nota_credito_vta_tributo.observacion');

	$filtros['vta_nota_credito_vta_tributo.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_nota_credito_vta_tributo.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_nota_credito_vta_tributo.orden');
	$comparador = $criterio->getComparadorDeCampo('vta_nota_credito_vta_tributo.orden');

	$filtros['vta_nota_credito_vta_tributo.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_nota_credito_vta_tributo.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_nota_credito_vta_tributo.estado');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('vta_nota_credito_vta_tributo.estado'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('vta_nota_credito_vta_tributo.estado');

	$filtros['vta_nota_credito_vta_tributo.estado'] = array('campo' => 'Estado', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_nota_credito_vta_tributo.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_nota_credito_vta_tributo.creado');
	$comparador = $criterio->getComparadorDeCampo('vta_nota_credito_vta_tributo.creado');

	$filtros['vta_nota_credito_vta_tributo.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_nota_credito_vta_tributo.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_nota_credito_vta_tributo.creado_por');
	$comparador = $criterio->getComparadorDeCampo('vta_nota_credito_vta_tributo.creado_por');

	$filtros['vta_nota_credito_vta_tributo.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_nota_credito_vta_tributo.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_nota_credito_vta_tributo.modificado');
	$comparador = $criterio->getComparadorDeCampo('vta_nota_credito_vta_tributo.modificado');

	$filtros['vta_nota_credito_vta_tributo.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_nota_credito_vta_tributo.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_nota_credito_vta_tributo.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('vta_nota_credito_vta_tributo.modificado_por');

	$filtros['vta_nota_credito_vta_tributo.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

