<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['pan_tipo_panol.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('pan_tipo_panol.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pan_tipo_panol.id');
	$comparador = $criterio->getComparadorDeCampo('pan_tipo_panol.id');

	$filtros['pan_tipo_panol.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pan_tipo_panol.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pan_tipo_panol.descripcion');
	$comparador = $criterio->getComparadorDeCampo('pan_tipo_panol.descripcion');

	$filtros['pan_tipo_panol.descripcion'] = array('campo' => 'Descripcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pan_tipo_panol.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pan_tipo_panol.codigo');
	$comparador = $criterio->getComparadorDeCampo('pan_tipo_panol.codigo');

	$filtros['pan_tipo_panol.codigo'] = array('campo' => 'Codigo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pan_tipo_panol.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pan_tipo_panol.observacion');
	$comparador = $criterio->getComparadorDeCampo('pan_tipo_panol.observacion');

	$filtros['pan_tipo_panol.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pan_tipo_panol.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pan_tipo_panol.orden');
	$comparador = $criterio->getComparadorDeCampo('pan_tipo_panol.orden');

	$filtros['pan_tipo_panol.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pan_tipo_panol.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pan_tipo_panol.estado');
	$comparador = $criterio->getComparadorDeCampo('pan_tipo_panol.estado');

	$filtros['pan_tipo_panol.estado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pan_tipo_panol.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pan_tipo_panol.creado');
	$comparador = $criterio->getComparadorDeCampo('pan_tipo_panol.creado');

	$filtros['pan_tipo_panol.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pan_tipo_panol.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pan_tipo_panol.creado_por');
	$comparador = $criterio->getComparadorDeCampo('pan_tipo_panol.creado_por');

	$filtros['pan_tipo_panol.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pan_tipo_panol.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pan_tipo_panol.modificado');
	$comparador = $criterio->getComparadorDeCampo('pan_tipo_panol.modificado');

	$filtros['pan_tipo_panol.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pan_tipo_panol.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pan_tipo_panol.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('pan_tipo_panol.modificado_por');

	$filtros['pan_tipo_panol.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

