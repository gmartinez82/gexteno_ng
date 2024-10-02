<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['ins_stock_resumen_estado.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('ins_stock_resumen_estado.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_stock_resumen_estado.id');
	$comparador = $criterio->getComparadorDeCampo('ins_stock_resumen_estado.id');

	$filtros['ins_stock_resumen_estado.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_stock_resumen_estado.ins_stock_resumen_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_stock_resumen_estado.ins_stock_resumen_id');
	$o = InsStockResumen::getOxId($criterio->getValorDeCampo('ins_stock_resumen_estado.ins_stock_resumen_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('ins_stock_resumen_estado.ins_stock_resumen_id');

	$filtros['ins_stock_resumen_estado.ins_stock_resumen_id'] = array('campo' => 'InsStockResumen', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_stock_resumen_estado.ins_stock_resumen_tipo_estado_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_stock_resumen_estado.ins_stock_resumen_tipo_estado_id');
	$o = InsStockResumenTipoEstado::getOxId($criterio->getValorDeCampo('ins_stock_resumen_estado.ins_stock_resumen_tipo_estado_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('ins_stock_resumen_estado.ins_stock_resumen_tipo_estado_id');

	$filtros['ins_stock_resumen_estado.ins_stock_resumen_tipo_estado_id'] = array('campo' => 'InsStockResumenTipoEstado', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_stock_resumen_estado.inicial') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_stock_resumen_estado.inicial');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('ins_stock_resumen_estado.inicial'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('ins_stock_resumen_estado.inicial');

	$filtros['ins_stock_resumen_estado.inicial'] = array('campo' => 'Inicial', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_stock_resumen_estado.actual') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_stock_resumen_estado.actual');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('ins_stock_resumen_estado.actual'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('ins_stock_resumen_estado.actual');

	$filtros['ins_stock_resumen_estado.actual'] = array('campo' => 'Actual', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_stock_resumen_estado.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_stock_resumen_estado.observacion');
	$comparador = $criterio->getComparadorDeCampo('ins_stock_resumen_estado.observacion');

	$filtros['ins_stock_resumen_estado.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_stock_resumen_estado.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_stock_resumen_estado.creado');
	$comparador = $criterio->getComparadorDeCampo('ins_stock_resumen_estado.creado');

	$filtros['ins_stock_resumen_estado.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_stock_resumen_estado.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_stock_resumen_estado.creado_por');
	$comparador = $criterio->getComparadorDeCampo('ins_stock_resumen_estado.creado_por');

	$filtros['ins_stock_resumen_estado.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_stock_resumen_estado.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_stock_resumen_estado.modificado');
	$comparador = $criterio->getComparadorDeCampo('ins_stock_resumen_estado.modificado');

	$filtros['ins_stock_resumen_estado.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_stock_resumen_estado.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_stock_resumen_estado.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('ins_stock_resumen_estado.modificado_por');

	$filtros['ins_stock_resumen_estado.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

