<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['pde_recibo_pde_tributo.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('pde_recibo_pde_tributo.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_recibo_pde_tributo.id');
	$comparador = $criterio->getComparadorDeCampo('pde_recibo_pde_tributo.id');

	$filtros['pde_recibo_pde_tributo.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_recibo_pde_tributo.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_recibo_pde_tributo.descripcion');
	$comparador = $criterio->getComparadorDeCampo('pde_recibo_pde_tributo.descripcion');

	$filtros['pde_recibo_pde_tributo.descripcion'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_recibo_pde_tributo.pde_recibo_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_recibo_pde_tributo.pde_recibo_id');
	$o = PdeRecibo::getOxId($criterio->getValorDeCampo('pde_recibo_pde_tributo.pde_recibo_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('pde_recibo_pde_tributo.pde_recibo_id');

	$filtros['pde_recibo_pde_tributo.pde_recibo_id'] = array('campo' => 'PdeRecibo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_recibo_pde_tributo.pde_tributo_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_recibo_pde_tributo.pde_tributo_id');
	$o = PdeTributo::getOxId($criterio->getValorDeCampo('pde_recibo_pde_tributo.pde_tributo_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('pde_recibo_pde_tributo.pde_tributo_id');

	$filtros['pde_recibo_pde_tributo.pde_tributo_id'] = array('campo' => 'PdeTributo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_recibo_pde_tributo.importe_imponible') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_recibo_pde_tributo.importe_imponible');
	$comparador = $criterio->getComparadorDeCampo('pde_recibo_pde_tributo.importe_imponible');

	$filtros['pde_recibo_pde_tributo.importe_imponible'] = array('campo' => 'Imp Imponible', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_recibo_pde_tributo.importe_tributo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_recibo_pde_tributo.importe_tributo');
	$comparador = $criterio->getComparadorDeCampo('pde_recibo_pde_tributo.importe_tributo');

	$filtros['pde_recibo_pde_tributo.importe_tributo'] = array('campo' => 'Imp Tributo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_recibo_pde_tributo.alicuota_porcentual') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_recibo_pde_tributo.alicuota_porcentual');
	$comparador = $criterio->getComparadorDeCampo('pde_recibo_pde_tributo.alicuota_porcentual');

	$filtros['pde_recibo_pde_tributo.alicuota_porcentual'] = array('campo' => 'Alicuota Porcentual', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_recibo_pde_tributo.alicuota_decimal') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_recibo_pde_tributo.alicuota_decimal');
	$comparador = $criterio->getComparadorDeCampo('pde_recibo_pde_tributo.alicuota_decimal');

	$filtros['pde_recibo_pde_tributo.alicuota_decimal'] = array('campo' => 'Alicuota Decimal', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_recibo_pde_tributo.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_recibo_pde_tributo.codigo');
	$comparador = $criterio->getComparadorDeCampo('pde_recibo_pde_tributo.codigo');

	$filtros['pde_recibo_pde_tributo.codigo'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_recibo_pde_tributo.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_recibo_pde_tributo.observacion');
	$comparador = $criterio->getComparadorDeCampo('pde_recibo_pde_tributo.observacion');

	$filtros['pde_recibo_pde_tributo.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_recibo_pde_tributo.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_recibo_pde_tributo.orden');
	$comparador = $criterio->getComparadorDeCampo('pde_recibo_pde_tributo.orden');

	$filtros['pde_recibo_pde_tributo.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_recibo_pde_tributo.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_recibo_pde_tributo.estado');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('pde_recibo_pde_tributo.estado'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('pde_recibo_pde_tributo.estado');

	$filtros['pde_recibo_pde_tributo.estado'] = array('campo' => 'Estado', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_recibo_pde_tributo.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_recibo_pde_tributo.creado');
	$comparador = $criterio->getComparadorDeCampo('pde_recibo_pde_tributo.creado');

	$filtros['pde_recibo_pde_tributo.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_recibo_pde_tributo.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_recibo_pde_tributo.creado_por');
	$comparador = $criterio->getComparadorDeCampo('pde_recibo_pde_tributo.creado_por');

	$filtros['pde_recibo_pde_tributo.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_recibo_pde_tributo.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_recibo_pde_tributo.modificado');
	$comparador = $criterio->getComparadorDeCampo('pde_recibo_pde_tributo.modificado');

	$filtros['pde_recibo_pde_tributo.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_recibo_pde_tributo.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_recibo_pde_tributo.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('pde_recibo_pde_tributo.modificado_por');

	$filtros['pde_recibo_pde_tributo.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

