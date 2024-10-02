<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['cntb_tipo_saldo.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('cntb_tipo_saldo.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cntb_tipo_saldo.id');
	$comparador = $criterio->getComparadorDeCampo('cntb_tipo_saldo.id');

	$filtros['cntb_tipo_saldo.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cntb_tipo_saldo.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cntb_tipo_saldo.descripcion');
	$comparador = $criterio->getComparadorDeCampo('cntb_tipo_saldo.descripcion');

	$filtros['cntb_tipo_saldo.descripcion'] = array('campo' => 'Descripcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cntb_tipo_saldo.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cntb_tipo_saldo.codigo');
	$comparador = $criterio->getComparadorDeCampo('cntb_tipo_saldo.codigo');

	$filtros['cntb_tipo_saldo.codigo'] = array('campo' => 'Codigo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cntb_tipo_saldo.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cntb_tipo_saldo.observacion');
	$comparador = $criterio->getComparadorDeCampo('cntb_tipo_saldo.observacion');

	$filtros['cntb_tipo_saldo.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cntb_tipo_saldo.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cntb_tipo_saldo.orden');
	$comparador = $criterio->getComparadorDeCampo('cntb_tipo_saldo.orden');

	$filtros['cntb_tipo_saldo.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cntb_tipo_saldo.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cntb_tipo_saldo.estado');
	$comparador = $criterio->getComparadorDeCampo('cntb_tipo_saldo.estado');

	$filtros['cntb_tipo_saldo.estado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cntb_tipo_saldo.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cntb_tipo_saldo.creado');
	$comparador = $criterio->getComparadorDeCampo('cntb_tipo_saldo.creado');

	$filtros['cntb_tipo_saldo.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cntb_tipo_saldo.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cntb_tipo_saldo.creado_por');
	$comparador = $criterio->getComparadorDeCampo('cntb_tipo_saldo.creado_por');

	$filtros['cntb_tipo_saldo.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cntb_tipo_saldo.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cntb_tipo_saldo.modificado');
	$comparador = $criterio->getComparadorDeCampo('cntb_tipo_saldo.modificado');

	$filtros['cntb_tipo_saldo.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cntb_tipo_saldo.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cntb_tipo_saldo.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('cntb_tipo_saldo.modificado_por');

	$filtros['cntb_tipo_saldo.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

