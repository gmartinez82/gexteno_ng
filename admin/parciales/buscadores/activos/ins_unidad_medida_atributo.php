<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['ins_unidad_medida_atributo.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('ins_unidad_medida_atributo.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_unidad_medida_atributo.id');
	$comparador = $criterio->getComparadorDeCampo('ins_unidad_medida_atributo.id');

	$filtros['ins_unidad_medida_atributo.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_unidad_medida_atributo.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_unidad_medida_atributo.descripcion');
	$comparador = $criterio->getComparadorDeCampo('ins_unidad_medida_atributo.descripcion');

	$filtros['ins_unidad_medida_atributo.descripcion'] = array('campo' => 'Descripcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_unidad_medida_atributo.descripcion_corta') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_unidad_medida_atributo.descripcion_corta');
	$comparador = $criterio->getComparadorDeCampo('ins_unidad_medida_atributo.descripcion_corta');

	$filtros['ins_unidad_medida_atributo.descripcion_corta'] = array('campo' => 'Descripcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_unidad_medida_atributo.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_unidad_medida_atributo.codigo');
	$comparador = $criterio->getComparadorDeCampo('ins_unidad_medida_atributo.codigo');

	$filtros['ins_unidad_medida_atributo.codigo'] = array('campo' => 'Codigo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_unidad_medida_atributo.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_unidad_medida_atributo.observacion');
	$comparador = $criterio->getComparadorDeCampo('ins_unidad_medida_atributo.observacion');

	$filtros['ins_unidad_medida_atributo.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_unidad_medida_atributo.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_unidad_medida_atributo.orden');
	$comparador = $criterio->getComparadorDeCampo('ins_unidad_medida_atributo.orden');

	$filtros['ins_unidad_medida_atributo.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_unidad_medida_atributo.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_unidad_medida_atributo.estado');
	$comparador = $criterio->getComparadorDeCampo('ins_unidad_medida_atributo.estado');

	$filtros['ins_unidad_medida_atributo.estado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_unidad_medida_atributo.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_unidad_medida_atributo.creado');
	$comparador = $criterio->getComparadorDeCampo('ins_unidad_medida_atributo.creado');

	$filtros['ins_unidad_medida_atributo.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_unidad_medida_atributo.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_unidad_medida_atributo.creado_por');
	$comparador = $criterio->getComparadorDeCampo('ins_unidad_medida_atributo.creado_por');

	$filtros['ins_unidad_medida_atributo.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_unidad_medida_atributo.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_unidad_medida_atributo.modificado');
	$comparador = $criterio->getComparadorDeCampo('ins_unidad_medida_atributo.modificado');

	$filtros['ins_unidad_medida_atributo.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_unidad_medida_atributo.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_unidad_medida_atributo.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('ins_unidad_medida_atributo.modificado_por');

	$filtros['ins_unidad_medida_atributo.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

