<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['vta_presupuesto_tipo_emision.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('vta_presupuesto_tipo_emision.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_presupuesto_tipo_emision.id');
	$comparador = $criterio->getComparadorDeCampo('vta_presupuesto_tipo_emision.id');

	$filtros['vta_presupuesto_tipo_emision.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_presupuesto_tipo_emision.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_presupuesto_tipo_emision.descripcion');
	$comparador = $criterio->getComparadorDeCampo('vta_presupuesto_tipo_emision.descripcion');

	$filtros['vta_presupuesto_tipo_emision.descripcion'] = array('campo' => 'Descripcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_presupuesto_tipo_emision.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_presupuesto_tipo_emision.codigo');
	$comparador = $criterio->getComparadorDeCampo('vta_presupuesto_tipo_emision.codigo');

	$filtros['vta_presupuesto_tipo_emision.codigo'] = array('campo' => 'Codigo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_presupuesto_tipo_emision.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_presupuesto_tipo_emision.observacion');
	$comparador = $criterio->getComparadorDeCampo('vta_presupuesto_tipo_emision.observacion');

	$filtros['vta_presupuesto_tipo_emision.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_presupuesto_tipo_emision.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_presupuesto_tipo_emision.orden');
	$comparador = $criterio->getComparadorDeCampo('vta_presupuesto_tipo_emision.orden');

	$filtros['vta_presupuesto_tipo_emision.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_presupuesto_tipo_emision.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_presupuesto_tipo_emision.estado');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('vta_presupuesto_tipo_emision.estado'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('vta_presupuesto_tipo_emision.estado');

	$filtros['vta_presupuesto_tipo_emision.estado'] = array('campo' => 'Estado', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_presupuesto_tipo_emision.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_presupuesto_tipo_emision.creado');
	$comparador = $criterio->getComparadorDeCampo('vta_presupuesto_tipo_emision.creado');

	$filtros['vta_presupuesto_tipo_emision.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_presupuesto_tipo_emision.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_presupuesto_tipo_emision.creado_por');
	$comparador = $criterio->getComparadorDeCampo('vta_presupuesto_tipo_emision.creado_por');

	$filtros['vta_presupuesto_tipo_emision.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_presupuesto_tipo_emision.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_presupuesto_tipo_emision.modificado');
	$comparador = $criterio->getComparadorDeCampo('vta_presupuesto_tipo_emision.modificado');

	$filtros['vta_presupuesto_tipo_emision.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_presupuesto_tipo_emision.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_presupuesto_tipo_emision.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('vta_presupuesto_tipo_emision.modificado_por');

	$filtros['vta_presupuesto_tipo_emision.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

