<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['ins_insumo_vinculado.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('ins_insumo_vinculado.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_insumo_vinculado.id');
	$comparador = $criterio->getComparadorDeCampo('ins_insumo_vinculado.id');

	$filtros['ins_insumo_vinculado.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_insumo_vinculado.ins_insumo_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_insumo_vinculado.ins_insumo_id');
	$o = InsInsumo::getOxId($criterio->getValorDeCampo('ins_insumo_vinculado.ins_insumo_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('ins_insumo_vinculado.ins_insumo_id');

	$filtros['ins_insumo_vinculado.ins_insumo_id'] = array('campo' => 'InsInsumo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_insumo_vinculado.ins_insumo_vinculado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_insumo_vinculado.ins_insumo_vinculado');
	$o = InsInsumo::getOxId($criterio->getValorDeCampo('ins_insumo_vinculado.ins_insumo_vinculado'));
	$valor = $o->getDescripcion();
	
	$comparador = $criterio->getComparadorDeCampo('ins_insumo_vinculado.ins_insumo_vinculado');

	$filtros['ins_insumo_vinculado.ins_insumo_vinculado'] = array('campo' => 'InsInsumoVinculado', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_insumo_vinculado.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_insumo_vinculado.creado');
	$comparador = $criterio->getComparadorDeCampo('ins_insumo_vinculado.creado');

	$filtros['ins_insumo_vinculado.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_insumo_vinculado.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_insumo_vinculado.creado_por');
	$comparador = $criterio->getComparadorDeCampo('ins_insumo_vinculado.creado_por');

	$filtros['ins_insumo_vinculado.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_insumo_vinculado.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_insumo_vinculado.modificado');
	$comparador = $criterio->getComparadorDeCampo('ins_insumo_vinculado.modificado');

	$filtros['ins_insumo_vinculado.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_insumo_vinculado.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_insumo_vinculado.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('ins_insumo_vinculado.modificado_por');

	$filtros['ins_insumo_vinculado.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

