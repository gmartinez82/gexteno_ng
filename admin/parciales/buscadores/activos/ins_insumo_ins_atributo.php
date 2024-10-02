<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['ins_insumo_ins_atributo.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('ins_insumo_ins_atributo.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_insumo_ins_atributo.id');
	$comparador = $criterio->getComparadorDeCampo('ins_insumo_ins_atributo.id');

	$filtros['ins_insumo_ins_atributo.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_insumo_ins_atributo.ins_insumo_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_insumo_ins_atributo.ins_insumo_id');
	$comparador = $criterio->getComparadorDeCampo('ins_insumo_ins_atributo.ins_insumo_id');

	$filtros['ins_insumo_ins_atributo.ins_insumo_id'] = array('campo' => 'InsInsumo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_insumo_ins_atributo.ins_atributo_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_insumo_ins_atributo.ins_atributo_id');
	$o = InsAtributo::getOxId($criterio->getValorDeCampo('ins_insumo_ins_atributo.ins_atributo_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('ins_insumo_ins_atributo.ins_atributo_id');

	$filtros['ins_insumo_ins_atributo.ins_atributo_id'] = array('campo' => 'InsAtributo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_insumo_ins_atributo.valor') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_insumo_ins_atributo.valor');
	$comparador = $criterio->getComparadorDeCampo('ins_insumo_ins_atributo.valor');

	$filtros['ins_insumo_ins_atributo.valor'] = array('campo' => 'Valor', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_insumo_ins_atributo.ins_unidad_medida_atributo_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_insumo_ins_atributo.ins_unidad_medida_atributo_id');
	$o = InsUnidadMedidaAtributo::getOxId($criterio->getValorDeCampo('ins_insumo_ins_atributo.ins_unidad_medida_atributo_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('ins_insumo_ins_atributo.ins_unidad_medida_atributo_id');

	$filtros['ins_insumo_ins_atributo.ins_unidad_medida_atributo_id'] = array('campo' => 'InsUnidadMedidaAtributo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_insumo_ins_atributo.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_insumo_ins_atributo.creado');
	$comparador = $criterio->getComparadorDeCampo('ins_insumo_ins_atributo.creado');

	$filtros['ins_insumo_ins_atributo.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_insumo_ins_atributo.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_insumo_ins_atributo.creado_por');
	$comparador = $criterio->getComparadorDeCampo('ins_insumo_ins_atributo.creado_por');

	$filtros['ins_insumo_ins_atributo.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_insumo_ins_atributo.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_insumo_ins_atributo.modificado');
	$comparador = $criterio->getComparadorDeCampo('ins_insumo_ins_atributo.modificado');

	$filtros['ins_insumo_ins_atributo.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_insumo_ins_atributo.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_insumo_ins_atributo.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('ins_insumo_ins_atributo.modificado_por');

	$filtros['ins_insumo_ins_atributo.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

