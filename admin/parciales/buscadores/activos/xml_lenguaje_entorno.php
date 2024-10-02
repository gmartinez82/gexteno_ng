<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['xml_lenguaje_entorno.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('xml_lenguaje_entorno.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('xml_lenguaje_entorno.id');
	$comparador = $criterio->getComparadorDeCampo('xml_lenguaje_entorno.id');

	$filtros['xml_lenguaje_entorno.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('xml_lenguaje_entorno.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('xml_lenguaje_entorno.descripcion');
	$comparador = $criterio->getComparadorDeCampo('xml_lenguaje_entorno.descripcion');

	$filtros['xml_lenguaje_entorno.descripcion'] = array('campo' => 'Descripcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('xml_lenguaje_entorno.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('xml_lenguaje_entorno.codigo');
	$comparador = $criterio->getComparadorDeCampo('xml_lenguaje_entorno.codigo');

	$filtros['xml_lenguaje_entorno.codigo'] = array('campo' => 'Codigo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('xml_lenguaje_entorno.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('xml_lenguaje_entorno.observacion');
	$comparador = $criterio->getComparadorDeCampo('xml_lenguaje_entorno.observacion');

	$filtros['xml_lenguaje_entorno.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('xml_lenguaje_entorno.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('xml_lenguaje_entorno.orden');
	$comparador = $criterio->getComparadorDeCampo('xml_lenguaje_entorno.orden');

	$filtros['xml_lenguaje_entorno.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('xml_lenguaje_entorno.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('xml_lenguaje_entorno.estado');
	$comparador = $criterio->getComparadorDeCampo('xml_lenguaje_entorno.estado');

	$filtros['xml_lenguaje_entorno.estado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('xml_lenguaje_entorno.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('xml_lenguaje_entorno.creado');
	$comparador = $criterio->getComparadorDeCampo('xml_lenguaje_entorno.creado');

	$filtros['xml_lenguaje_entorno.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('xml_lenguaje_entorno.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('xml_lenguaje_entorno.creado_por');
	$comparador = $criterio->getComparadorDeCampo('xml_lenguaje_entorno.creado_por');

	$filtros['xml_lenguaje_entorno.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('xml_lenguaje_entorno.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('xml_lenguaje_entorno.modificado');
	$comparador = $criterio->getComparadorDeCampo('xml_lenguaje_entorno.modificado');

	$filtros['xml_lenguaje_entorno.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('xml_lenguaje_entorno.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('xml_lenguaje_entorno.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('xml_lenguaje_entorno.modificado_por');

	$filtros['xml_lenguaje_entorno.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

