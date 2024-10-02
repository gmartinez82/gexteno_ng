<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['alt_control.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('alt_control.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('alt_control.id');
	$comparador = $criterio->getComparadorDeCampo('alt_control.id');

	$filtros['alt_control.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('alt_control.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('alt_control.descripcion');
	$comparador = $criterio->getComparadorDeCampo('alt_control.descripcion');

	$filtros['alt_control.descripcion'] = array('campo' => 'Descripcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('alt_control.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('alt_control.codigo');
	$comparador = $criterio->getComparadorDeCampo('alt_control.codigo');

	$filtros['alt_control.codigo'] = array('campo' => 'Codigo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('alt_control.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('alt_control.observacion');
	$comparador = $criterio->getComparadorDeCampo('alt_control.observacion');

	$filtros['alt_control.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('alt_control.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('alt_control.orden');
	$comparador = $criterio->getComparadorDeCampo('alt_control.orden');

	$filtros['alt_control.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('alt_control.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('alt_control.estado');
	$comparador = $criterio->getComparadorDeCampo('alt_control.estado');

	$filtros['alt_control.estado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('alt_control.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('alt_control.creado');
	$comparador = $criterio->getComparadorDeCampo('alt_control.creado');

	$filtros['alt_control.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('alt_control.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('alt_control.creado_por');
	$comparador = $criterio->getComparadorDeCampo('alt_control.creado_por');

	$filtros['alt_control.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('alt_control.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('alt_control.modificado');
	$comparador = $criterio->getComparadorDeCampo('alt_control.modificado');

	$filtros['alt_control.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('alt_control.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('alt_control.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('alt_control.modificado_por');

	$filtros['alt_control.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('alt_control.control') != ''){
	$valor = $valor = $criterio->getValorDeCampo('alt_control.control');
	$comparador = $criterio->getComparadorDeCampo('alt_control.control');

	$filtros['alt_control.control'] = array('campo' => 'Control', 'valor' => $valor, 'comparador' => $comparador);
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

