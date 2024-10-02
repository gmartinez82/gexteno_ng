<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['gral_fp_agrupacion.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('gral_fp_agrupacion.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_fp_agrupacion.id');
	$comparador = $criterio->getComparadorDeCampo('gral_fp_agrupacion.id');

	$filtros['gral_fp_agrupacion.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_fp_agrupacion.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_fp_agrupacion.descripcion');
	$comparador = $criterio->getComparadorDeCampo('gral_fp_agrupacion.descripcion');

	$filtros['gral_fp_agrupacion.descripcion'] = array('campo' => 'Descripcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_fp_agrupacion.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_fp_agrupacion.codigo');
	$comparador = $criterio->getComparadorDeCampo('gral_fp_agrupacion.codigo');

	$filtros['gral_fp_agrupacion.codigo'] = array('campo' => 'Codigo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_fp_agrupacion.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_fp_agrupacion.observacion');
	$comparador = $criterio->getComparadorDeCampo('gral_fp_agrupacion.observacion');

	$filtros['gral_fp_agrupacion.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_fp_agrupacion.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_fp_agrupacion.orden');
	$comparador = $criterio->getComparadorDeCampo('gral_fp_agrupacion.orden');

	$filtros['gral_fp_agrupacion.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_fp_agrupacion.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_fp_agrupacion.estado');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('gral_fp_agrupacion.estado'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('gral_fp_agrupacion.estado');

	$filtros['gral_fp_agrupacion.estado'] = array('campo' => 'Estado', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_fp_agrupacion.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_fp_agrupacion.creado');
	$comparador = $criterio->getComparadorDeCampo('gral_fp_agrupacion.creado');

	$filtros['gral_fp_agrupacion.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_fp_agrupacion.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_fp_agrupacion.creado_por');
	$comparador = $criterio->getComparadorDeCampo('gral_fp_agrupacion.creado_por');

	$filtros['gral_fp_agrupacion.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_fp_agrupacion.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_fp_agrupacion.modificado');
	$comparador = $criterio->getComparadorDeCampo('gral_fp_agrupacion.modificado');

	$filtros['gral_fp_agrupacion.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_fp_agrupacion.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_fp_agrupacion.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('gral_fp_agrupacion.modificado_por');

	$filtros['gral_fp_agrupacion.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

