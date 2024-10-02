<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['ins_lista_precio.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('ins_lista_precio.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_lista_precio.id');
	$comparador = $criterio->getComparadorDeCampo('ins_lista_precio.id');

	$filtros['ins_lista_precio.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_lista_precio.ins_insumo_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_lista_precio.ins_insumo_id');
	$comparador = $criterio->getComparadorDeCampo('ins_lista_precio.ins_insumo_id');

	$filtros['ins_lista_precio.ins_insumo_id'] = array('campo' => 'InsInsumo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_lista_precio.ins_tipo_lista_precio_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_lista_precio.ins_tipo_lista_precio_id');
	$o = InsTipoListaPrecio::getOxId($criterio->getValorDeCampo('ins_lista_precio.ins_tipo_lista_precio_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('ins_lista_precio.ins_tipo_lista_precio_id');

	$filtros['ins_lista_precio.ins_tipo_lista_precio_id'] = array('campo' => 'InsTipoListaPrecio', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_lista_precio.importe_calculado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_lista_precio.importe_calculado');
	$comparador = $criterio->getComparadorDeCampo('ins_lista_precio.importe_calculado');

	$filtros['ins_lista_precio.importe_calculado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_lista_precio.importe_manual') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_lista_precio.importe_manual');
	$comparador = $criterio->getComparadorDeCampo('ins_lista_precio.importe_manual');

	$filtros['ins_lista_precio.importe_manual'] = array('campo' => 'Imp Manual', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_lista_precio.importe_venta') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_lista_precio.importe_venta');
	$comparador = $criterio->getComparadorDeCampo('ins_lista_precio.importe_venta');

	$filtros['ins_lista_precio.importe_venta'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_lista_precio.porcentaje_incremento') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_lista_precio.porcentaje_incremento');
	$comparador = $criterio->getComparadorDeCampo('ins_lista_precio.porcentaje_incremento');

	$filtros['ins_lista_precio.porcentaje_incremento'] = array('campo' => 'Porc Increm', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_lista_precio.habilitado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_lista_precio.habilitado');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('ins_lista_precio.habilitado'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('ins_lista_precio.habilitado');

	$filtros['ins_lista_precio.habilitado'] = array('campo' => 'Habilitado', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_lista_precio.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_lista_precio.creado');
	$comparador = $criterio->getComparadorDeCampo('ins_lista_precio.creado');

	$filtros['ins_lista_precio.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_lista_precio.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_lista_precio.creado_por');
	$comparador = $criterio->getComparadorDeCampo('ins_lista_precio.creado_por');

	$filtros['ins_lista_precio.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_lista_precio.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_lista_precio.modificado');
	$comparador = $criterio->getComparadorDeCampo('ins_lista_precio.modificado');

	$filtros['ins_lista_precio.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_lista_precio.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_lista_precio.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('ins_lista_precio.modificado_por');

	$filtros['ins_lista_precio.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

