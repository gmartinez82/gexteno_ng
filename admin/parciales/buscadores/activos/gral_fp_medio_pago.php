<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['gral_fp_medio_pago.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('gral_fp_medio_pago.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_fp_medio_pago.id');
	$comparador = $criterio->getComparadorDeCampo('gral_fp_medio_pago.id');

	$filtros['gral_fp_medio_pago.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_fp_medio_pago.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_fp_medio_pago.descripcion');
	$comparador = $criterio->getComparadorDeCampo('gral_fp_medio_pago.descripcion');

	$filtros['gral_fp_medio_pago.descripcion'] = array('campo' => 'Descripcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_fp_medio_pago.gral_fp_forma_pago_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_fp_medio_pago.gral_fp_forma_pago_id');
	$o = GralFpFormaPago::getOxId($criterio->getValorDeCampo('gral_fp_medio_pago.gral_fp_forma_pago_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('gral_fp_medio_pago.gral_fp_forma_pago_id');

	$filtros['gral_fp_medio_pago.gral_fp_forma_pago_id'] = array('campo' => 'GralFpFormaPago', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_fp_medio_pago.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_fp_medio_pago.codigo');
	$comparador = $criterio->getComparadorDeCampo('gral_fp_medio_pago.codigo');

	$filtros['gral_fp_medio_pago.codigo'] = array('campo' => 'Codigo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_fp_medio_pago.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_fp_medio_pago.observacion');
	$comparador = $criterio->getComparadorDeCampo('gral_fp_medio_pago.observacion');

	$filtros['gral_fp_medio_pago.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_fp_medio_pago.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_fp_medio_pago.orden');
	$comparador = $criterio->getComparadorDeCampo('gral_fp_medio_pago.orden');

	$filtros['gral_fp_medio_pago.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_fp_medio_pago.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_fp_medio_pago.estado');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('gral_fp_medio_pago.estado'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('gral_fp_medio_pago.estado');

	$filtros['gral_fp_medio_pago.estado'] = array('campo' => 'Estado', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_fp_medio_pago.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_fp_medio_pago.creado');
	$comparador = $criterio->getComparadorDeCampo('gral_fp_medio_pago.creado');

	$filtros['gral_fp_medio_pago.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_fp_medio_pago.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_fp_medio_pago.creado_por');
	$comparador = $criterio->getComparadorDeCampo('gral_fp_medio_pago.creado_por');

	$filtros['gral_fp_medio_pago.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_fp_medio_pago.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_fp_medio_pago.modificado');
	$comparador = $criterio->getComparadorDeCampo('gral_fp_medio_pago.modificado');

	$filtros['gral_fp_medio_pago.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_fp_medio_pago.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_fp_medio_pago.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('gral_fp_medio_pago.modificado_por');

	$filtros['gral_fp_medio_pago.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

