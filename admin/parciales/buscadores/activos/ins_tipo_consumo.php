<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['ins_tipo_consumo.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('ins_tipo_consumo.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_tipo_consumo.id');
	$comparador = $criterio->getComparadorDeCampo('ins_tipo_consumo.id');

	$filtros['ins_tipo_consumo.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_tipo_consumo.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_tipo_consumo.descripcion');
	$comparador = $criterio->getComparadorDeCampo('ins_tipo_consumo.descripcion');

	$filtros['ins_tipo_consumo.descripcion'] = array('campo' => 'Descripcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_tipo_consumo.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_tipo_consumo.codigo');
	$comparador = $criterio->getComparadorDeCampo('ins_tipo_consumo.codigo');

	$filtros['ins_tipo_consumo.codigo'] = array('campo' => 'Codigo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_tipo_consumo.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_tipo_consumo.observacion');
	$comparador = $criterio->getComparadorDeCampo('ins_tipo_consumo.observacion');

	$filtros['ins_tipo_consumo.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_tipo_consumo.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_tipo_consumo.orden');
	$comparador = $criterio->getComparadorDeCampo('ins_tipo_consumo.orden');

	$filtros['ins_tipo_consumo.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_tipo_consumo.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_tipo_consumo.estado');
	$comparador = $criterio->getComparadorDeCampo('ins_tipo_consumo.estado');

	$filtros['ins_tipo_consumo.estado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_tipo_consumo.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_tipo_consumo.creado');
	$comparador = $criterio->getComparadorDeCampo('ins_tipo_consumo.creado');

	$filtros['ins_tipo_consumo.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_tipo_consumo.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_tipo_consumo.creado_por');
	$comparador = $criterio->getComparadorDeCampo('ins_tipo_consumo.creado_por');

	$filtros['ins_tipo_consumo.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_tipo_consumo.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_tipo_consumo.modificado');
	$comparador = $criterio->getComparadorDeCampo('ins_tipo_consumo.modificado');

	$filtros['ins_tipo_consumo.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_tipo_consumo.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_tipo_consumo.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('ins_tipo_consumo.modificado_por');

	$filtros['ins_tipo_consumo.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

