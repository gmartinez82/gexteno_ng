<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['cntb_tipo_origen.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('cntb_tipo_origen.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cntb_tipo_origen.id');
	$comparador = $criterio->getComparadorDeCampo('cntb_tipo_origen.id');

	$filtros['cntb_tipo_origen.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cntb_tipo_origen.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cntb_tipo_origen.descripcion');
	$comparador = $criterio->getComparadorDeCampo('cntb_tipo_origen.descripcion');

	$filtros['cntb_tipo_origen.descripcion'] = array('campo' => 'Descripcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cntb_tipo_origen.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cntb_tipo_origen.codigo');
	$comparador = $criterio->getComparadorDeCampo('cntb_tipo_origen.codigo');

	$filtros['cntb_tipo_origen.codigo'] = array('campo' => 'Codigo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cntb_tipo_origen.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cntb_tipo_origen.observacion');
	$comparador = $criterio->getComparadorDeCampo('cntb_tipo_origen.observacion');

	$filtros['cntb_tipo_origen.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cntb_tipo_origen.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cntb_tipo_origen.orden');
	$comparador = $criterio->getComparadorDeCampo('cntb_tipo_origen.orden');

	$filtros['cntb_tipo_origen.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cntb_tipo_origen.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cntb_tipo_origen.estado');
	$comparador = $criterio->getComparadorDeCampo('cntb_tipo_origen.estado');

	$filtros['cntb_tipo_origen.estado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cntb_tipo_origen.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cntb_tipo_origen.creado');
	$comparador = $criterio->getComparadorDeCampo('cntb_tipo_origen.creado');

	$filtros['cntb_tipo_origen.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cntb_tipo_origen.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cntb_tipo_origen.creado_por');
	$comparador = $criterio->getComparadorDeCampo('cntb_tipo_origen.creado_por');

	$filtros['cntb_tipo_origen.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cntb_tipo_origen.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cntb_tipo_origen.modificado');
	$comparador = $criterio->getComparadorDeCampo('cntb_tipo_origen.modificado');

	$filtros['cntb_tipo_origen.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cntb_tipo_origen.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cntb_tipo_origen.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('cntb_tipo_origen.modificado_por');

	$filtros['cntb_tipo_origen.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

