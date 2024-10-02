<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['fnd_chq_tipo_pago.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('fnd_chq_tipo_pago.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_chq_tipo_pago.id');
	$comparador = $criterio->getComparadorDeCampo('fnd_chq_tipo_pago.id');

	$filtros['fnd_chq_tipo_pago.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('fnd_chq_tipo_pago.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_chq_tipo_pago.descripcion');
	$comparador = $criterio->getComparadorDeCampo('fnd_chq_tipo_pago.descripcion');

	$filtros['fnd_chq_tipo_pago.descripcion'] = array('campo' => 'Descripcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('fnd_chq_tipo_pago.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_chq_tipo_pago.codigo');
	$comparador = $criterio->getComparadorDeCampo('fnd_chq_tipo_pago.codigo');

	$filtros['fnd_chq_tipo_pago.codigo'] = array('campo' => 'Codigo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('fnd_chq_tipo_pago.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_chq_tipo_pago.observacion');
	$comparador = $criterio->getComparadorDeCampo('fnd_chq_tipo_pago.observacion');

	$filtros['fnd_chq_tipo_pago.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('fnd_chq_tipo_pago.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_chq_tipo_pago.orden');
	$comparador = $criterio->getComparadorDeCampo('fnd_chq_tipo_pago.orden');

	$filtros['fnd_chq_tipo_pago.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('fnd_chq_tipo_pago.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_chq_tipo_pago.estado');
	$comparador = $criterio->getComparadorDeCampo('fnd_chq_tipo_pago.estado');

	$filtros['fnd_chq_tipo_pago.estado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('fnd_chq_tipo_pago.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_chq_tipo_pago.creado');
	$comparador = $criterio->getComparadorDeCampo('fnd_chq_tipo_pago.creado');

	$filtros['fnd_chq_tipo_pago.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('fnd_chq_tipo_pago.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_chq_tipo_pago.creado_por');
	$comparador = $criterio->getComparadorDeCampo('fnd_chq_tipo_pago.creado_por');

	$filtros['fnd_chq_tipo_pago.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('fnd_chq_tipo_pago.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_chq_tipo_pago.modificado');
	$comparador = $criterio->getComparadorDeCampo('fnd_chq_tipo_pago.modificado');

	$filtros['fnd_chq_tipo_pago.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('fnd_chq_tipo_pago.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_chq_tipo_pago.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('fnd_chq_tipo_pago.modificado_por');

	$filtros['fnd_chq_tipo_pago.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

