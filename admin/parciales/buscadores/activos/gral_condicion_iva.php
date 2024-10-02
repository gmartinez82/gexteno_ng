<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['gral_condicion_iva.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('gral_condicion_iva.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_condicion_iva.id');
	$comparador = $criterio->getComparadorDeCampo('gral_condicion_iva.id');

	$filtros['gral_condicion_iva.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_condicion_iva.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_condicion_iva.descripcion');
	$comparador = $criterio->getComparadorDeCampo('gral_condicion_iva.descripcion');

	$filtros['gral_condicion_iva.descripcion'] = array('campo' => 'Descripcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_condicion_iva.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_condicion_iva.codigo');
	$comparador = $criterio->getComparadorDeCampo('gral_condicion_iva.codigo');

	$filtros['gral_condicion_iva.codigo'] = array('campo' => 'Codigo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_condicion_iva.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_condicion_iva.observacion');
	$comparador = $criterio->getComparadorDeCampo('gral_condicion_iva.observacion');

	$filtros['gral_condicion_iva.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_condicion_iva.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_condicion_iva.orden');
	$comparador = $criterio->getComparadorDeCampo('gral_condicion_iva.orden');

	$filtros['gral_condicion_iva.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_condicion_iva.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_condicion_iva.estado');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('gral_condicion_iva.estado'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('gral_condicion_iva.estado');

	$filtros['gral_condicion_iva.estado'] = array('campo' => 'Estado', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_condicion_iva.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_condicion_iva.creado');
	$comparador = $criterio->getComparadorDeCampo('gral_condicion_iva.creado');

	$filtros['gral_condicion_iva.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_condicion_iva.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_condicion_iva.creado_por');
	$comparador = $criterio->getComparadorDeCampo('gral_condicion_iva.creado_por');

	$filtros['gral_condicion_iva.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_condicion_iva.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_condicion_iva.modificado');
	$comparador = $criterio->getComparadorDeCampo('gral_condicion_iva.modificado');

	$filtros['gral_condicion_iva.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_condicion_iva.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_condicion_iva.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('gral_condicion_iva.modificado_por');

	$filtros['gral_condicion_iva.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

