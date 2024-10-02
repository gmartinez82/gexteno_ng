<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['xml_lenguaje_tipo.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('xml_lenguaje_tipo.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('xml_lenguaje_tipo.id');
	$comparador = $criterio->getComparadorDeCampo('xml_lenguaje_tipo.id');

	$filtros['xml_lenguaje_tipo.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('xml_lenguaje_tipo.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('xml_lenguaje_tipo.descripcion');
	$comparador = $criterio->getComparadorDeCampo('xml_lenguaje_tipo.descripcion');

	$filtros['xml_lenguaje_tipo.descripcion'] = array('campo' => 'Descripcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('xml_lenguaje_tipo.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('xml_lenguaje_tipo.codigo');
	$comparador = $criterio->getComparadorDeCampo('xml_lenguaje_tipo.codigo');

	$filtros['xml_lenguaje_tipo.codigo'] = array('campo' => 'Codigo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('xml_lenguaje_tipo.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('xml_lenguaje_tipo.observacion');
	$comparador = $criterio->getComparadorDeCampo('xml_lenguaje_tipo.observacion');

	$filtros['xml_lenguaje_tipo.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('xml_lenguaje_tipo.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('xml_lenguaje_tipo.orden');
	$comparador = $criterio->getComparadorDeCampo('xml_lenguaje_tipo.orden');

	$filtros['xml_lenguaje_tipo.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('xml_lenguaje_tipo.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('xml_lenguaje_tipo.estado');
	$comparador = $criterio->getComparadorDeCampo('xml_lenguaje_tipo.estado');

	$filtros['xml_lenguaje_tipo.estado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('xml_lenguaje_tipo.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('xml_lenguaje_tipo.creado');
	$comparador = $criterio->getComparadorDeCampo('xml_lenguaje_tipo.creado');

	$filtros['xml_lenguaje_tipo.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('xml_lenguaje_tipo.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('xml_lenguaje_tipo.creado_por');
	$comparador = $criterio->getComparadorDeCampo('xml_lenguaje_tipo.creado_por');

	$filtros['xml_lenguaje_tipo.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('xml_lenguaje_tipo.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('xml_lenguaje_tipo.modificado');
	$comparador = $criterio->getComparadorDeCampo('xml_lenguaje_tipo.modificado');

	$filtros['xml_lenguaje_tipo.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('xml_lenguaje_tipo.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('xml_lenguaje_tipo.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('xml_lenguaje_tipo.modificado_por');

	$filtros['xml_lenguaje_tipo.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

