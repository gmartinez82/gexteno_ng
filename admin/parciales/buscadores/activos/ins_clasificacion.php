<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['ins_clasificacion.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('ins_clasificacion.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_clasificacion.id');
	$comparador = $criterio->getComparadorDeCampo('ins_clasificacion.id');

	$filtros['ins_clasificacion.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_clasificacion.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_clasificacion.descripcion');
	$comparador = $criterio->getComparadorDeCampo('ins_clasificacion.descripcion');

	$filtros['ins_clasificacion.descripcion'] = array('campo' => 'Descripcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_clasificacion.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_clasificacion.codigo');
	$comparador = $criterio->getComparadorDeCampo('ins_clasificacion.codigo');

	$filtros['ins_clasificacion.codigo'] = array('campo' => 'Codigo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_clasificacion.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_clasificacion.observacion');
	$comparador = $criterio->getComparadorDeCampo('ins_clasificacion.observacion');

	$filtros['ins_clasificacion.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_clasificacion.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_clasificacion.orden');
	$comparador = $criterio->getComparadorDeCampo('ins_clasificacion.orden');

	$filtros['ins_clasificacion.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_clasificacion.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_clasificacion.estado');
	$comparador = $criterio->getComparadorDeCampo('ins_clasificacion.estado');

	$filtros['ins_clasificacion.estado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_clasificacion.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_clasificacion.creado');
	$comparador = $criterio->getComparadorDeCampo('ins_clasificacion.creado');

	$filtros['ins_clasificacion.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_clasificacion.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_clasificacion.creado_por');
	$comparador = $criterio->getComparadorDeCampo('ins_clasificacion.creado_por');

	$filtros['ins_clasificacion.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_clasificacion.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_clasificacion.modificado');
	$comparador = $criterio->getComparadorDeCampo('ins_clasificacion.modificado');

	$filtros['ins_clasificacion.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_clasificacion.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_clasificacion.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('ins_clasificacion.modificado_por');

	$filtros['ins_clasificacion.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

