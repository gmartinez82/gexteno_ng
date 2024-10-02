<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['ins_categoria.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('ins_categoria.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_categoria.id');
	$comparador = $criterio->getComparadorDeCampo('ins_categoria.id');

	$filtros['ins_categoria.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_categoria.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_categoria.descripcion');
	$comparador = $criterio->getComparadorDeCampo('ins_categoria.descripcion');

	$filtros['ins_categoria.descripcion'] = array('campo' => 'Descripcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_categoria.gen_arbol_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_categoria.gen_arbol_id');
	$o = GenArbol::getOxId($criterio->getValorDeCampo('ins_categoria.gen_arbol_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('ins_categoria.gen_arbol_id');

	$filtros['ins_categoria.gen_arbol_id'] = array('campo' => 'GenArbol', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_categoria.ins_categoria_padre') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_categoria.ins_categoria_padre');
	$comparador = $criterio->getComparadorDeCampo('ins_categoria.ins_categoria_padre');

	$filtros['ins_categoria.ins_categoria_padre'] = array('campo' => 'InsCategoriaPadre', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_categoria.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_categoria.codigo');
	$comparador = $criterio->getComparadorDeCampo('ins_categoria.codigo');

	$filtros['ins_categoria.codigo'] = array('campo' => 'Codigo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_categoria.familia_descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_categoria.familia_descripcion');
	$comparador = $criterio->getComparadorDeCampo('ins_categoria.familia_descripcion');

	$filtros['ins_categoria.familia_descripcion'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_categoria.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_categoria.observacion');
	$comparador = $criterio->getComparadorDeCampo('ins_categoria.observacion');

	$filtros['ins_categoria.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_categoria.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_categoria.orden');
	$comparador = $criterio->getComparadorDeCampo('ins_categoria.orden');

	$filtros['ins_categoria.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_categoria.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_categoria.estado');
	$comparador = $criterio->getComparadorDeCampo('ins_categoria.estado');

	$filtros['ins_categoria.estado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_categoria.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_categoria.creado');
	$comparador = $criterio->getComparadorDeCampo('ins_categoria.creado');

	$filtros['ins_categoria.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_categoria.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_categoria.creado_por');
	$comparador = $criterio->getComparadorDeCampo('ins_categoria.creado_por');

	$filtros['ins_categoria.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_categoria.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_categoria.modificado');
	$comparador = $criterio->getComparadorDeCampo('ins_categoria.modificado');

	$filtros['ins_categoria.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_categoria.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_categoria.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('ins_categoria.modificado_por');

	$filtros['ins_categoria.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

