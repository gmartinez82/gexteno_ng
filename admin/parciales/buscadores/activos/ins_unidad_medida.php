<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['ins_unidad_medida.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('ins_unidad_medida.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_unidad_medida.id');
	$comparador = $criterio->getComparadorDeCampo('ins_unidad_medida.id');

	$filtros['ins_unidad_medida.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_unidad_medida.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_unidad_medida.descripcion');
	$comparador = $criterio->getComparadorDeCampo('ins_unidad_medida.descripcion');

	$filtros['ins_unidad_medida.descripcion'] = array('campo' => 'Descripcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_unidad_medida.descripcion_corta') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_unidad_medida.descripcion_corta');
	$comparador = $criterio->getComparadorDeCampo('ins_unidad_medida.descripcion_corta');

	$filtros['ins_unidad_medida.descripcion_corta'] = array('campo' => 'Descripcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_unidad_medida.fraccionable') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_unidad_medida.fraccionable');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('ins_unidad_medida.fraccionable'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('ins_unidad_medida.fraccionable');

	$filtros['ins_unidad_medida.fraccionable'] = array('campo' => 'Fraccionable', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_unidad_medida.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_unidad_medida.codigo');
	$comparador = $criterio->getComparadorDeCampo('ins_unidad_medida.codigo');

	$filtros['ins_unidad_medida.codigo'] = array('campo' => 'Codigo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_unidad_medida.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_unidad_medida.observacion');
	$comparador = $criterio->getComparadorDeCampo('ins_unidad_medida.observacion');

	$filtros['ins_unidad_medida.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_unidad_medida.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_unidad_medida.orden');
	$comparador = $criterio->getComparadorDeCampo('ins_unidad_medida.orden');

	$filtros['ins_unidad_medida.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_unidad_medida.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_unidad_medida.estado');
	$comparador = $criterio->getComparadorDeCampo('ins_unidad_medida.estado');

	$filtros['ins_unidad_medida.estado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_unidad_medida.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_unidad_medida.creado');
	$comparador = $criterio->getComparadorDeCampo('ins_unidad_medida.creado');

	$filtros['ins_unidad_medida.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_unidad_medida.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_unidad_medida.creado_por');
	$comparador = $criterio->getComparadorDeCampo('ins_unidad_medida.creado_por');

	$filtros['ins_unidad_medida.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_unidad_medida.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_unidad_medida.modificado');
	$comparador = $criterio->getComparadorDeCampo('ins_unidad_medida.modificado');

	$filtros['ins_unidad_medida.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_unidad_medida.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_unidad_medida.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('ins_unidad_medida.modificado_por');

	$filtros['ins_unidad_medida.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

