<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['fnd_caja_tipo_egreso.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('fnd_caja_tipo_egreso.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_caja_tipo_egreso.id');
	$comparador = $criterio->getComparadorDeCampo('fnd_caja_tipo_egreso.id');

	$filtros['fnd_caja_tipo_egreso.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('fnd_caja_tipo_egreso.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_caja_tipo_egreso.descripcion');
	$comparador = $criterio->getComparadorDeCampo('fnd_caja_tipo_egreso.descripcion');

	$filtros['fnd_caja_tipo_egreso.descripcion'] = array('campo' => 'Descripcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('fnd_caja_tipo_egreso.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_caja_tipo_egreso.codigo');
	$comparador = $criterio->getComparadorDeCampo('fnd_caja_tipo_egreso.codigo');

	$filtros['fnd_caja_tipo_egreso.codigo'] = array('campo' => 'Codigo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('fnd_caja_tipo_egreso.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_caja_tipo_egreso.observacion');
	$comparador = $criterio->getComparadorDeCampo('fnd_caja_tipo_egreso.observacion');

	$filtros['fnd_caja_tipo_egreso.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('fnd_caja_tipo_egreso.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_caja_tipo_egreso.orden');
	$comparador = $criterio->getComparadorDeCampo('fnd_caja_tipo_egreso.orden');

	$filtros['fnd_caja_tipo_egreso.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('fnd_caja_tipo_egreso.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_caja_tipo_egreso.estado');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('fnd_caja_tipo_egreso.estado'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('fnd_caja_tipo_egreso.estado');

	$filtros['fnd_caja_tipo_egreso.estado'] = array('campo' => 'Estado', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('fnd_caja_tipo_egreso.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_caja_tipo_egreso.creado');
	$comparador = $criterio->getComparadorDeCampo('fnd_caja_tipo_egreso.creado');

	$filtros['fnd_caja_tipo_egreso.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('fnd_caja_tipo_egreso.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_caja_tipo_egreso.creado_por');
	$comparador = $criterio->getComparadorDeCampo('fnd_caja_tipo_egreso.creado_por');

	$filtros['fnd_caja_tipo_egreso.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('fnd_caja_tipo_egreso.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_caja_tipo_egreso.modificado');
	$comparador = $criterio->getComparadorDeCampo('fnd_caja_tipo_egreso.modificado');

	$filtros['fnd_caja_tipo_egreso.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('fnd_caja_tipo_egreso.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_caja_tipo_egreso.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('fnd_caja_tipo_egreso.modificado_por');

	$filtros['fnd_caja_tipo_egreso.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

