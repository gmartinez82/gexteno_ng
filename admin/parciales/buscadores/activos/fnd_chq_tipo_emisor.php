<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['fnd_chq_tipo_emisor.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('fnd_chq_tipo_emisor.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_chq_tipo_emisor.id');
	$comparador = $criterio->getComparadorDeCampo('fnd_chq_tipo_emisor.id');

	$filtros['fnd_chq_tipo_emisor.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('fnd_chq_tipo_emisor.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_chq_tipo_emisor.descripcion');
	$comparador = $criterio->getComparadorDeCampo('fnd_chq_tipo_emisor.descripcion');

	$filtros['fnd_chq_tipo_emisor.descripcion'] = array('campo' => 'Descripcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('fnd_chq_tipo_emisor.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_chq_tipo_emisor.codigo');
	$comparador = $criterio->getComparadorDeCampo('fnd_chq_tipo_emisor.codigo');

	$filtros['fnd_chq_tipo_emisor.codigo'] = array('campo' => 'Codigo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('fnd_chq_tipo_emisor.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_chq_tipo_emisor.observacion');
	$comparador = $criterio->getComparadorDeCampo('fnd_chq_tipo_emisor.observacion');

	$filtros['fnd_chq_tipo_emisor.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('fnd_chq_tipo_emisor.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_chq_tipo_emisor.orden');
	$comparador = $criterio->getComparadorDeCampo('fnd_chq_tipo_emisor.orden');

	$filtros['fnd_chq_tipo_emisor.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('fnd_chq_tipo_emisor.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_chq_tipo_emisor.estado');
	$comparador = $criterio->getComparadorDeCampo('fnd_chq_tipo_emisor.estado');

	$filtros['fnd_chq_tipo_emisor.estado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('fnd_chq_tipo_emisor.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_chq_tipo_emisor.creado');
	$comparador = $criterio->getComparadorDeCampo('fnd_chq_tipo_emisor.creado');

	$filtros['fnd_chq_tipo_emisor.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('fnd_chq_tipo_emisor.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_chq_tipo_emisor.creado_por');
	$comparador = $criterio->getComparadorDeCampo('fnd_chq_tipo_emisor.creado_por');

	$filtros['fnd_chq_tipo_emisor.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('fnd_chq_tipo_emisor.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_chq_tipo_emisor.modificado');
	$comparador = $criterio->getComparadorDeCampo('fnd_chq_tipo_emisor.modificado');

	$filtros['fnd_chq_tipo_emisor.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('fnd_chq_tipo_emisor.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_chq_tipo_emisor.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('fnd_chq_tipo_emisor.modificado_por');

	$filtros['fnd_chq_tipo_emisor.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

