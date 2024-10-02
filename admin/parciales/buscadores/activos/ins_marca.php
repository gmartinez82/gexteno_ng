<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['ins_marca.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('ins_marca.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_marca.id');
	$comparador = $criterio->getComparadorDeCampo('ins_marca.id');

	$filtros['ins_marca.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_marca.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_marca.descripcion');
	$comparador = $criterio->getComparadorDeCampo('ins_marca.descripcion');

	$filtros['ins_marca.descripcion'] = array('campo' => 'Descripcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_marca.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_marca.codigo');
	$comparador = $criterio->getComparadorDeCampo('ins_marca.codigo');

	$filtros['ins_marca.codigo'] = array('campo' => 'Codigo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_marca.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_marca.observacion');
	$comparador = $criterio->getComparadorDeCampo('ins_marca.observacion');

	$filtros['ins_marca.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_marca.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_marca.orden');
	$comparador = $criterio->getComparadorDeCampo('ins_marca.orden');

	$filtros['ins_marca.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_marca.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_marca.estado');
	$comparador = $criterio->getComparadorDeCampo('ins_marca.estado');

	$filtros['ins_marca.estado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_marca.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_marca.creado');
	$comparador = $criterio->getComparadorDeCampo('ins_marca.creado');

	$filtros['ins_marca.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_marca.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_marca.creado_por');
	$comparador = $criterio->getComparadorDeCampo('ins_marca.creado_por');

	$filtros['ins_marca.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_marca.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_marca.modificado');
	$comparador = $criterio->getComparadorDeCampo('ins_marca.modificado');

	$filtros['ins_marca.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_marca.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_marca.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('ins_marca.modificado_por');

	$filtros['ins_marca.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

