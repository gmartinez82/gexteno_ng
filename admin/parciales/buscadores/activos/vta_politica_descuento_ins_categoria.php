<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['vta_politica_descuento_ins_categoria.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('vta_politica_descuento_ins_categoria.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_politica_descuento_ins_categoria.id');
	$comparador = $criterio->getComparadorDeCampo('vta_politica_descuento_ins_categoria.id');

	$filtros['vta_politica_descuento_ins_categoria.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_politica_descuento_ins_categoria.vta_politica_descuento_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_politica_descuento_ins_categoria.vta_politica_descuento_id');
	$o = VtaPoliticaDescuento::getOxId($criterio->getValorDeCampo('vta_politica_descuento_ins_categoria.vta_politica_descuento_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('vta_politica_descuento_ins_categoria.vta_politica_descuento_id');

	$filtros['vta_politica_descuento_ins_categoria.vta_politica_descuento_id'] = array('campo' => 'VtaPoliticaDescuento', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_politica_descuento_ins_categoria.ins_categoria_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_politica_descuento_ins_categoria.ins_categoria_id');
	$o = InsCategoria::getOxId($criterio->getValorDeCampo('vta_politica_descuento_ins_categoria.ins_categoria_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('vta_politica_descuento_ins_categoria.ins_categoria_id');

	$filtros['vta_politica_descuento_ins_categoria.ins_categoria_id'] = array('campo' => 'InsCategoria', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_politica_descuento_ins_categoria.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_politica_descuento_ins_categoria.creado');
	$comparador = $criterio->getComparadorDeCampo('vta_politica_descuento_ins_categoria.creado');

	$filtros['vta_politica_descuento_ins_categoria.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_politica_descuento_ins_categoria.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_politica_descuento_ins_categoria.creado_por');
	$comparador = $criterio->getComparadorDeCampo('vta_politica_descuento_ins_categoria.creado_por');

	$filtros['vta_politica_descuento_ins_categoria.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

