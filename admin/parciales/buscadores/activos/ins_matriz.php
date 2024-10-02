<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['ins_matriz.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('ins_matriz.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_matriz.id');
	$comparador = $criterio->getComparadorDeCampo('ins_matriz.id');

	$filtros['ins_matriz.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_matriz.ins_marca_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_matriz.ins_marca_id');
	$o = InsMarca::getOxId($criterio->getValorDeCampo('ins_matriz.ins_marca_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('ins_matriz.ins_marca_id');

	$filtros['ins_matriz.ins_marca_id'] = array('campo' => 'InsMarca', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_matriz.codigo_pieza') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_matriz.codigo_pieza');
	$comparador = $criterio->getComparadorDeCampo('ins_matriz.codigo_pieza');

	$filtros['ins_matriz.codigo_pieza'] = array('campo' => 'CodigoPieza', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_matriz.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_matriz.codigo');
	$comparador = $criterio->getComparadorDeCampo('ins_matriz.codigo');

	$filtros['ins_matriz.codigo'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_matriz.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_matriz.descripcion');
	$comparador = $criterio->getComparadorDeCampo('ins_matriz.descripcion');

	$filtros['ins_matriz.descripcion'] = array('campo' => 'Descripcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_matriz.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_matriz.observacion');
	$comparador = $criterio->getComparadorDeCampo('ins_matriz.observacion');

	$filtros['ins_matriz.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_matriz.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_matriz.orden');
	$comparador = $criterio->getComparadorDeCampo('ins_matriz.orden');

	$filtros['ins_matriz.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_matriz.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_matriz.estado');
	$comparador = $criterio->getComparadorDeCampo('ins_matriz.estado');

	$filtros['ins_matriz.estado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_matriz.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_matriz.creado');
	$comparador = $criterio->getComparadorDeCampo('ins_matriz.creado');

	$filtros['ins_matriz.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_matriz.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_matriz.creado_por');
	$comparador = $criterio->getComparadorDeCampo('ins_matriz.creado_por');

	$filtros['ins_matriz.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_matriz.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_matriz.modificado');
	$comparador = $criterio->getComparadorDeCampo('ins_matriz.modificado');

	$filtros['ins_matriz.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_matriz.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_matriz.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('ins_matriz.modificado_por');

	$filtros['ins_matriz.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

