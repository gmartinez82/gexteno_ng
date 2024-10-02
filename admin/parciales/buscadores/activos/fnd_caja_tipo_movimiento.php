<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['fnd_caja_tipo_movimiento.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('fnd_caja_tipo_movimiento.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_caja_tipo_movimiento.id');
	$comparador = $criterio->getComparadorDeCampo('fnd_caja_tipo_movimiento.id');

	$filtros['fnd_caja_tipo_movimiento.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('fnd_caja_tipo_movimiento.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_caja_tipo_movimiento.descripcion');
	$comparador = $criterio->getComparadorDeCampo('fnd_caja_tipo_movimiento.descripcion');

	$filtros['fnd_caja_tipo_movimiento.descripcion'] = array('campo' => 'Descripcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('fnd_caja_tipo_movimiento.automatico') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_caja_tipo_movimiento.automatico');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('fnd_caja_tipo_movimiento.automatico'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('fnd_caja_tipo_movimiento.automatico');

	$filtros['fnd_caja_tipo_movimiento.automatico'] = array('campo' => 'Automatico', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('fnd_caja_tipo_movimiento.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_caja_tipo_movimiento.codigo');
	$comparador = $criterio->getComparadorDeCampo('fnd_caja_tipo_movimiento.codigo');

	$filtros['fnd_caja_tipo_movimiento.codigo'] = array('campo' => 'Codigo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('fnd_caja_tipo_movimiento.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_caja_tipo_movimiento.observacion');
	$comparador = $criterio->getComparadorDeCampo('fnd_caja_tipo_movimiento.observacion');

	$filtros['fnd_caja_tipo_movimiento.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('fnd_caja_tipo_movimiento.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_caja_tipo_movimiento.orden');
	$comparador = $criterio->getComparadorDeCampo('fnd_caja_tipo_movimiento.orden');

	$filtros['fnd_caja_tipo_movimiento.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('fnd_caja_tipo_movimiento.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_caja_tipo_movimiento.estado');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('fnd_caja_tipo_movimiento.estado'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('fnd_caja_tipo_movimiento.estado');

	$filtros['fnd_caja_tipo_movimiento.estado'] = array('campo' => 'Estado', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('fnd_caja_tipo_movimiento.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_caja_tipo_movimiento.creado');
	$comparador = $criterio->getComparadorDeCampo('fnd_caja_tipo_movimiento.creado');

	$filtros['fnd_caja_tipo_movimiento.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('fnd_caja_tipo_movimiento.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_caja_tipo_movimiento.creado_por');
	$comparador = $criterio->getComparadorDeCampo('fnd_caja_tipo_movimiento.creado_por');

	$filtros['fnd_caja_tipo_movimiento.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('fnd_caja_tipo_movimiento.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_caja_tipo_movimiento.modificado');
	$comparador = $criterio->getComparadorDeCampo('fnd_caja_tipo_movimiento.modificado');

	$filtros['fnd_caja_tipo_movimiento.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('fnd_caja_tipo_movimiento.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_caja_tipo_movimiento.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('fnd_caja_tipo_movimiento.modificado_por');

	$filtros['fnd_caja_tipo_movimiento.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

