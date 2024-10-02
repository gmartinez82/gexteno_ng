<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['not_tipo_archivo.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('not_tipo_archivo.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('not_tipo_archivo.id');
	$comparador = $criterio->getComparadorDeCampo('not_tipo_archivo.id');

	$filtros['not_tipo_archivo.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('not_tipo_archivo.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('not_tipo_archivo.descripcion');
	$comparador = $criterio->getComparadorDeCampo('not_tipo_archivo.descripcion');

	$filtros['not_tipo_archivo.descripcion'] = array('campo' => 'Descripcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('not_tipo_archivo.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('not_tipo_archivo.codigo');
	$comparador = $criterio->getComparadorDeCampo('not_tipo_archivo.codigo');

	$filtros['not_tipo_archivo.codigo'] = array('campo' => 'Codigo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('not_tipo_archivo.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('not_tipo_archivo.observacion');
	$comparador = $criterio->getComparadorDeCampo('not_tipo_archivo.observacion');

	$filtros['not_tipo_archivo.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('not_tipo_archivo.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('not_tipo_archivo.orden');
	$comparador = $criterio->getComparadorDeCampo('not_tipo_archivo.orden');

	$filtros['not_tipo_archivo.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('not_tipo_archivo.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('not_tipo_archivo.estado');
	$comparador = $criterio->getComparadorDeCampo('not_tipo_archivo.estado');

	$filtros['not_tipo_archivo.estado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('not_tipo_archivo.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('not_tipo_archivo.creado');
	$comparador = $criterio->getComparadorDeCampo('not_tipo_archivo.creado');

	$filtros['not_tipo_archivo.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('not_tipo_archivo.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('not_tipo_archivo.creado_por');
	$comparador = $criterio->getComparadorDeCampo('not_tipo_archivo.creado_por');

	$filtros['not_tipo_archivo.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('not_tipo_archivo.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('not_tipo_archivo.modificado');
	$comparador = $criterio->getComparadorDeCampo('not_tipo_archivo.modificado');

	$filtros['not_tipo_archivo.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('not_tipo_archivo.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('not_tipo_archivo.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('not_tipo_archivo.modificado_por');

	$filtros['not_tipo_archivo.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

