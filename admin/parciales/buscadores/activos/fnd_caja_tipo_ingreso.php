<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['fnd_caja_tipo_ingreso.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('fnd_caja_tipo_ingreso.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_caja_tipo_ingreso.id');
	$comparador = $criterio->getComparadorDeCampo('fnd_caja_tipo_ingreso.id');

	$filtros['fnd_caja_tipo_ingreso.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('fnd_caja_tipo_ingreso.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_caja_tipo_ingreso.descripcion');
	$comparador = $criterio->getComparadorDeCampo('fnd_caja_tipo_ingreso.descripcion');

	$filtros['fnd_caja_tipo_ingreso.descripcion'] = array('campo' => 'Descripcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('fnd_caja_tipo_ingreso.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_caja_tipo_ingreso.codigo');
	$comparador = $criterio->getComparadorDeCampo('fnd_caja_tipo_ingreso.codigo');

	$filtros['fnd_caja_tipo_ingreso.codigo'] = array('campo' => 'Codigo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('fnd_caja_tipo_ingreso.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_caja_tipo_ingreso.observacion');
	$comparador = $criterio->getComparadorDeCampo('fnd_caja_tipo_ingreso.observacion');

	$filtros['fnd_caja_tipo_ingreso.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('fnd_caja_tipo_ingreso.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_caja_tipo_ingreso.orden');
	$comparador = $criterio->getComparadorDeCampo('fnd_caja_tipo_ingreso.orden');

	$filtros['fnd_caja_tipo_ingreso.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('fnd_caja_tipo_ingreso.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_caja_tipo_ingreso.estado');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('fnd_caja_tipo_ingreso.estado'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('fnd_caja_tipo_ingreso.estado');

	$filtros['fnd_caja_tipo_ingreso.estado'] = array('campo' => 'Estado', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('fnd_caja_tipo_ingreso.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_caja_tipo_ingreso.creado');
	$comparador = $criterio->getComparadorDeCampo('fnd_caja_tipo_ingreso.creado');

	$filtros['fnd_caja_tipo_ingreso.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('fnd_caja_tipo_ingreso.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_caja_tipo_ingreso.creado_por');
	$comparador = $criterio->getComparadorDeCampo('fnd_caja_tipo_ingreso.creado_por');

	$filtros['fnd_caja_tipo_ingreso.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('fnd_caja_tipo_ingreso.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_caja_tipo_ingreso.modificado');
	$comparador = $criterio->getComparadorDeCampo('fnd_caja_tipo_ingreso.modificado');

	$filtros['fnd_caja_tipo_ingreso.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('fnd_caja_tipo_ingreso.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_caja_tipo_ingreso.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('fnd_caja_tipo_ingreso.modificado_por');

	$filtros['fnd_caja_tipo_ingreso.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

