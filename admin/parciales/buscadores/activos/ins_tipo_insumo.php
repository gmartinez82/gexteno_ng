<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['ins_tipo_insumo.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('ins_tipo_insumo.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_tipo_insumo.id');
	$comparador = $criterio->getComparadorDeCampo('ins_tipo_insumo.id');

	$filtros['ins_tipo_insumo.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_tipo_insumo.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_tipo_insumo.descripcion');
	$comparador = $criterio->getComparadorDeCampo('ins_tipo_insumo.descripcion');

	$filtros['ins_tipo_insumo.descripcion'] = array('campo' => 'Descripcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_tipo_insumo.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_tipo_insumo.codigo');
	$comparador = $criterio->getComparadorDeCampo('ins_tipo_insumo.codigo');

	$filtros['ins_tipo_insumo.codigo'] = array('campo' => 'Codigo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_tipo_insumo.cntb_cuenta_compra') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_tipo_insumo.cntb_cuenta_compra');
	$comparador = $criterio->getComparadorDeCampo('ins_tipo_insumo.cntb_cuenta_compra');

	$filtros['ins_tipo_insumo.cntb_cuenta_compra'] = array('campo' => 'CntbCuentaCompra', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_tipo_insumo.cntb_cuenta_venta') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_tipo_insumo.cntb_cuenta_venta');
	$comparador = $criterio->getComparadorDeCampo('ins_tipo_insumo.cntb_cuenta_venta');

	$filtros['ins_tipo_insumo.cntb_cuenta_venta'] = array('campo' => 'CntbCuentaVenta', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_tipo_insumo.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_tipo_insumo.observacion');
	$comparador = $criterio->getComparadorDeCampo('ins_tipo_insumo.observacion');

	$filtros['ins_tipo_insumo.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_tipo_insumo.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_tipo_insumo.orden');
	$comparador = $criterio->getComparadorDeCampo('ins_tipo_insumo.orden');

	$filtros['ins_tipo_insumo.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_tipo_insumo.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_tipo_insumo.estado');
	$comparador = $criterio->getComparadorDeCampo('ins_tipo_insumo.estado');

	$filtros['ins_tipo_insumo.estado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_tipo_insumo.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_tipo_insumo.creado');
	$comparador = $criterio->getComparadorDeCampo('ins_tipo_insumo.creado');

	$filtros['ins_tipo_insumo.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_tipo_insumo.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_tipo_insumo.creado_por');
	$comparador = $criterio->getComparadorDeCampo('ins_tipo_insumo.creado_por');

	$filtros['ins_tipo_insumo.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_tipo_insumo.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_tipo_insumo.modificado');
	$comparador = $criterio->getComparadorDeCampo('ins_tipo_insumo.modificado');

	$filtros['ins_tipo_insumo.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_tipo_insumo.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_tipo_insumo.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('ins_tipo_insumo.modificado_por');

	$filtros['ins_tipo_insumo.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

