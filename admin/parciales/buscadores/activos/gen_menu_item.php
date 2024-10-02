<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['gen_menu_item.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('gen_menu_item.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gen_menu_item.id');
	$comparador = $criterio->getComparadorDeCampo('gen_menu_item.id');

	$filtros['gen_menu_item.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gen_menu_item.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gen_menu_item.descripcion');
	$comparador = $criterio->getComparadorDeCampo('gen_menu_item.descripcion');

	$filtros['gen_menu_item.descripcion'] = array('campo' => 'Descripcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gen_menu_item.gen_arbol_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gen_menu_item.gen_arbol_id');
	$o = GenArbol::getOxId($criterio->getValorDeCampo('gen_menu_item.gen_arbol_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('gen_menu_item.gen_arbol_id');

	$filtros['gen_menu_item.gen_arbol_id'] = array('campo' => 'GenArbol', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gen_menu_item.gen_menu_item_padre') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gen_menu_item.gen_menu_item_padre');
	$comparador = $criterio->getComparadorDeCampo('gen_menu_item.gen_menu_item_padre');

	$filtros['gen_menu_item.gen_menu_item_padre'] = array('campo' => 'Padre', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gen_menu_item.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gen_menu_item.codigo');
	$comparador = $criterio->getComparadorDeCampo('gen_menu_item.codigo');

	$filtros['gen_menu_item.codigo'] = array('campo' => 'Codigo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gen_menu_item.alternativo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gen_menu_item.alternativo');
	$comparador = $criterio->getComparadorDeCampo('gen_menu_item.alternativo');

	$filtros['gen_menu_item.alternativo'] = array('campo' => 'Alternativo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gen_menu_item.link') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gen_menu_item.link');
	$comparador = $criterio->getComparadorDeCampo('gen_menu_item.link');

	$filtros['gen_menu_item.link'] = array('campo' => 'link', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gen_menu_item.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gen_menu_item.observacion');
	$comparador = $criterio->getComparadorDeCampo('gen_menu_item.observacion');

	$filtros['gen_menu_item.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gen_menu_item.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gen_menu_item.orden');
	$comparador = $criterio->getComparadorDeCampo('gen_menu_item.orden');

	$filtros['gen_menu_item.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gen_menu_item.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gen_menu_item.estado');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('gen_menu_item.estado'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('gen_menu_item.estado');

	$filtros['gen_menu_item.estado'] = array('campo' => 'Estado', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gen_menu_item.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gen_menu_item.creado');
	$comparador = $criterio->getComparadorDeCampo('gen_menu_item.creado');

	$filtros['gen_menu_item.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gen_menu_item.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gen_menu_item.creado_por');
	$comparador = $criterio->getComparadorDeCampo('gen_menu_item.creado_por');

	$filtros['gen_menu_item.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gen_menu_item.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gen_menu_item.modificado');
	$comparador = $criterio->getComparadorDeCampo('gen_menu_item.modificado');

	$filtros['gen_menu_item.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gen_menu_item.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gen_menu_item.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('gen_menu_item.modificado_por');

	$filtros['gen_menu_item.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

