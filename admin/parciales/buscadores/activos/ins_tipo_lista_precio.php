<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['ins_tipo_lista_precio.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('ins_tipo_lista_precio.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_tipo_lista_precio.id');
	$comparador = $criterio->getComparadorDeCampo('ins_tipo_lista_precio.id');

	$filtros['ins_tipo_lista_precio.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_tipo_lista_precio.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_tipo_lista_precio.descripcion');
	$comparador = $criterio->getComparadorDeCampo('ins_tipo_lista_precio.descripcion');

	$filtros['ins_tipo_lista_precio.descripcion'] = array('campo' => 'Descripcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_tipo_lista_precio.descripcion_corta') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_tipo_lista_precio.descripcion_corta');
	$comparador = $criterio->getComparadorDeCampo('ins_tipo_lista_precio.descripcion_corta');

	$filtros['ins_tipo_lista_precio.descripcion_corta'] = array('campo' => 'Descripcion Corta', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_tipo_lista_precio.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_tipo_lista_precio.codigo');
	$comparador = $criterio->getComparadorDeCampo('ins_tipo_lista_precio.codigo');

	$filtros['ins_tipo_lista_precio.codigo'] = array('campo' => 'Codigo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_tipo_lista_precio.porcentaje_incremento') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_tipo_lista_precio.porcentaje_incremento');
	$comparador = $criterio->getComparadorDeCampo('ins_tipo_lista_precio.porcentaje_incremento');

	$filtros['ins_tipo_lista_precio.porcentaje_incremento'] = array('campo' => 'Porc Increm', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_tipo_lista_precio.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_tipo_lista_precio.observacion');
	$comparador = $criterio->getComparadorDeCampo('ins_tipo_lista_precio.observacion');

	$filtros['ins_tipo_lista_precio.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_tipo_lista_precio.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_tipo_lista_precio.orden');
	$comparador = $criterio->getComparadorDeCampo('ins_tipo_lista_precio.orden');

	$filtros['ins_tipo_lista_precio.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_tipo_lista_precio.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_tipo_lista_precio.estado');
	$comparador = $criterio->getComparadorDeCampo('ins_tipo_lista_precio.estado');

	$filtros['ins_tipo_lista_precio.estado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_tipo_lista_precio.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_tipo_lista_precio.creado');
	$comparador = $criterio->getComparadorDeCampo('ins_tipo_lista_precio.creado');

	$filtros['ins_tipo_lista_precio.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_tipo_lista_precio.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_tipo_lista_precio.creado_por');
	$comparador = $criterio->getComparadorDeCampo('ins_tipo_lista_precio.creado_por');

	$filtros['ins_tipo_lista_precio.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_tipo_lista_precio.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_tipo_lista_precio.modificado');
	$comparador = $criterio->getComparadorDeCampo('ins_tipo_lista_precio.modificado');

	$filtros['ins_tipo_lista_precio.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_tipo_lista_precio.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_tipo_lista_precio.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('ins_tipo_lista_precio.modificado_por');

	$filtros['ins_tipo_lista_precio.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

