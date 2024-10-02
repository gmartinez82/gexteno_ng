<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['vta_tipo_origen_nota_debito.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('vta_tipo_origen_nota_debito.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_tipo_origen_nota_debito.id');
	$comparador = $criterio->getComparadorDeCampo('vta_tipo_origen_nota_debito.id');

	$filtros['vta_tipo_origen_nota_debito.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_tipo_origen_nota_debito.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_tipo_origen_nota_debito.descripcion');
	$comparador = $criterio->getComparadorDeCampo('vta_tipo_origen_nota_debito.descripcion');

	$filtros['vta_tipo_origen_nota_debito.descripcion'] = array('campo' => 'Descripcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_tipo_origen_nota_debito.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_tipo_origen_nota_debito.codigo');
	$comparador = $criterio->getComparadorDeCampo('vta_tipo_origen_nota_debito.codigo');

	$filtros['vta_tipo_origen_nota_debito.codigo'] = array('campo' => 'Codigo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_tipo_origen_nota_debito.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_tipo_origen_nota_debito.observacion');
	$comparador = $criterio->getComparadorDeCampo('vta_tipo_origen_nota_debito.observacion');

	$filtros['vta_tipo_origen_nota_debito.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_tipo_origen_nota_debito.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_tipo_origen_nota_debito.orden');
	$comparador = $criterio->getComparadorDeCampo('vta_tipo_origen_nota_debito.orden');

	$filtros['vta_tipo_origen_nota_debito.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_tipo_origen_nota_debito.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_tipo_origen_nota_debito.estado');
	$comparador = $criterio->getComparadorDeCampo('vta_tipo_origen_nota_debito.estado');

	$filtros['vta_tipo_origen_nota_debito.estado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_tipo_origen_nota_debito.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_tipo_origen_nota_debito.creado');
	$comparador = $criterio->getComparadorDeCampo('vta_tipo_origen_nota_debito.creado');

	$filtros['vta_tipo_origen_nota_debito.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_tipo_origen_nota_debito.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_tipo_origen_nota_debito.creado_por');
	$comparador = $criterio->getComparadorDeCampo('vta_tipo_origen_nota_debito.creado_por');

	$filtros['vta_tipo_origen_nota_debito.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_tipo_origen_nota_debito.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_tipo_origen_nota_debito.modificado');
	$comparador = $criterio->getComparadorDeCampo('vta_tipo_origen_nota_debito.modificado');

	$filtros['vta_tipo_origen_nota_debito.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_tipo_origen_nota_debito.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_tipo_origen_nota_debito.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('vta_tipo_origen_nota_debito.modificado_por');

	$filtros['vta_tipo_origen_nota_debito.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

